<?php

declare(strict_types=1);

namespace MehrIt\AmazonSellingPartner;

use MehrIt\AmazonSellingPartner\Configuration\LoggerConfiguration;
use MehrIt\AmazonSellingPartner\Exception\InvalidArgumentException;
use MehrIt\AmazonSellingPartner\STSClient\Credentials;

final class Configuration
{
    private string $lwaClientID;

    private string $lwaClientSecret;

    private string $accessKey;

    private string $secretKey;

    private string $userAgent;

    private ?string $securityToken;

    private string $tmpFolderPath;

    private LoggerConfiguration $loggerConfiguration;

    private Extensions $extensions;
	
	private bool $sandbox; 

    public function __construct(
        string $lwaClientID,
        string $lwaClientSecret,
        string $accessKey,
        string $secretKey,
        string $securityToken = null,
        Extensions $extensions = null,
        LoggerConfiguration $loggerConfiguration = null,
	    bool $sandbox = false
    ) {
        $this->lwaClientID = $lwaClientID;
        $this->lwaClientSecret = $lwaClientSecret;
        $this->accessKey = $accessKey;
        $this->secretKey = $secretKey;
        // https://github.com/amzn/selling-partner-api-docs/blob/main/guides/en-US/developer-guide/SellingPartnerApiDeveloperGuide.md#include-a-user-agent-header-in-all-requests
        $this->userAgent = 'Library amazon-php/sp-api-php (language=PHP ' . \phpversion() . '; Platform=' . \php_uname('s') . ' ' . \php_uname('r') . ' ' . \php_uname('m') . ')';
        $this->tmpFolderPath = \sys_get_temp_dir();
        $this->loggerConfiguration = $loggerConfiguration ? $loggerConfiguration : new LoggerConfiguration();
        $this->extensions = $extensions ? $extensions : new Extensions();
        $this->securityToken = $securityToken;
		$this->sandbox = $sandbox;
    }

    public static function forIAMUser(string $clientId, string $clientSecret, string $accessKey, string $secretKey) : self
    {
        return new self($clientId, $clientSecret, $accessKey, $secretKey, null);
    }

    public static function forIAMRole(string $clientId, string $clientSecret, Credentials $credentials) : self
    {
        return new self($clientId, $clientSecret, $credentials->accessKeyId(), $credentials->secretAccessKey(), $credentials->sessionToken());
    }

    public function lwaClientID() : string
    {
        return $this->lwaClientID;
    }

    public function lwaClientSecret() : string
    {
        return $this->lwaClientSecret;
    }

    public function securityToken() : ?string
    {
        return $this->securityToken;
    }

    public function apiURL(string $awsRegion) : string
    {
        if (!Regions::isValid($awsRegion)) {
            throw new InvalidArgumentException("Invalid region {$awsRegion}");
        }

        switch ($awsRegion) {
            case Regions::EUROPE:
                return !$this->sandbox ? Regions::EUROPE_URL : Regions::EUROPE_URL_SANDBOX;
            case Regions::FAR_EAST:
                return !$this->sandbox ? Regions::FAR_EAST_URL : Regions::FAR_EAST_URL_SANDBOX;
            case Regions::NORTH_AMERICA:
                return !$this->sandbox ? Regions::NORTH_AMERICA_URL : Regions::NORTH_AMERICA_URL_SANDBOX;

            default:
                throw new \RuntimeException('unknown region');
        }
    }

    public function apiHost(string $awsRegion) : string
    {
        if (!Regions::isValid($awsRegion)) {
            throw new InvalidArgumentException("Invalid region {$awsRegion}");
        }

        switch ($awsRegion) {
            case Regions::EUROPE:
                return !$this->sandbox ? Regions::EUROPE_HOST : Regions::EUROPE_HOST_SANDBOX;
            case Regions::FAR_EAST:
                return !$this->sandbox ? Regions::FAR_EAST_HOST : Regions::FAR_EAST_HOST_SANDBOX;
            case Regions::NORTH_AMERICA:
                return !$this->sandbox ? Regions::NORTH_AMERICA_HOST : Regions::NORTH_AMERICA_HOST_SANDBOX;

            default:
                throw new \RuntimeException('unknown region');
        }
    }

    public function accessKey() : string
    {
        return $this->accessKey;
    }

    public function secretKey() : string
    {
        return $this->secretKey;
    }

    public function userAgent() : string
    {
        return $this->userAgent;
    }
	
	public function sandbox() : bool
    {
        return $this->sandbox;
    }

    public function setUserAgent(string $userAgent) : self
    {
        $this->userAgent = $userAgent;

        return $this;
    }

    /**
     * SDK's that are receiving files will use this path to write the file there.
     */
    public function setTmpFolderPath(string $path) : self
    {
        $this->tmpFolderPath = $path;

        return $this;
    }

    public function tmpFolderPath() : string
    {
        return $this->tmpFolderPath;
    }

    public function logLevel(string $api, string $operation) : string
    {
        return $this->loggerConfiguration->logLevel($api, $operation);
    }

    public function setDefaultLogLevel(string $logLevel) : self
    {
        $this->loggerConfiguration->setDefaultLogLevel($logLevel);

        return $this;
    }

    public function setLogLevel(string $api, string $operationMethod, string $logLevel) : self
    {
        $this->loggerConfiguration->setLogLevel($api, $operationMethod, $logLevel);

        return $this;
    }

    public function setSkipLogging(string $api, string $operation = null) : self
    {
        if ($operation !== null) {
            $this->loggerConfiguration->skipAPIOperation($api, $operation);
        } else {
            $this->loggerConfiguration->skipAPI($api);
        }

        return $this;
    }

    public function loggingEnabled(string $api, string $operation) : bool
    {
        return !$this->loggerConfiguration->isSkipped($api, $operation);
    }

    public function loggingAddSkippedHeader(string $headerName) : self
    {
        $this->loggerConfiguration->addSkippedHeader($headerName);

        return $this;
    }

    /**
     * @return string[]
     */
    public function loggingSkipHeaders() : array
    {
        return $this->loggerConfiguration->skipHeaders();
    }

    public function registerExtension(Extension $extension) : void
    {
        $this->extensions->register($extension);
    }

    public function extensions() : Extensions
    {
        return $this->extensions;
    }
}
