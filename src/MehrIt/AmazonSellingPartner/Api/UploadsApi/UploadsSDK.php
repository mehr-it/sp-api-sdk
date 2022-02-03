<?php

namespace MehrIt\AmazonSellingPartner\Api\UploadsApi;

use MehrIt\AmazonSellingPartner\AccessToken;
use MehrIt\AmazonSellingPartner\Configuration;
use MehrIt\AmazonSellingPartner\Exception\ApiException;
use MehrIt\AmazonSellingPartner\Exception\InvalidArgumentException;
use MehrIt\AmazonSellingPartner\HttpFactory;
use MehrIt\AmazonSellingPartner\HttpSignatureHeaders;
use MehrIt\AmazonSellingPartner\ObjectSerializer;
use Psr\Http\Client\ClientExceptionInterface;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Log\LoggerInterface;

/**
 * This class was auto-generated by https://github.com/OpenAPITools/openapi-generator/.
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 */
final class UploadsSDK
{
    public const API_NAME = 'Uploads';

    public const OPERATION_CREATEUPLOADDESTINATIONFORRESOURCE = 'createUploadDestinationForResource';

    public const OPERATION_CREATEUPLOADDESTINATIONFORRESOURCE_PATH = '/uploads/2020-11-01/uploadDestinations/{resource}';

    private ClientInterface $client;

    private HttpFactory $httpFactory;

    private Configuration $configuration;

    private LoggerInterface $logger;

    public function __construct(ClientInterface $client, HttpFactory $requestFactory, Configuration $configuration, LoggerInterface $logger)
    {
        $this->client = $client;
        $this->httpFactory = $requestFactory;
        $this->configuration = $configuration;
        $this->logger = $logger;
    }

    /**
     * Operation createUploadDestinationForResource
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param string[] $marketplace_ids A list of marketplace identifiers. This specifies the marketplaces where the upload will be available. Only one marketplace can be specified. (required)
     * @param string $content_md5 An MD5 hash of the content to be submitted to the upload destination. This value is used to determine if the data has been corrupted or tampered with during transit. (required)
     * @param string $resource The resource for the upload destination that you are creating. For example, if you are creating an upload destination for the createLegalDisclosure operation of the Messaging API, the {resource} would be /messaging/v1/orders/{amazonOrderId}/messages/legalDisclosure, and the entire path would be /uploads/2020-11-01/uploadDestinations/messaging/v1/orders/{amazonOrderId}/messages/legalDisclosure. (required)
     * @param string $content_type The content type of the file to be uploaded. (optional)
     *
     * @throws \MehrIt\AmazonSellingPartner\Exception\ApiException on non-2xx response
     * @throws \MehrIt\AmazonSellingPartner\Exception\InvalidArgumentException
     * @return \MehrIt\AmazonSellingPartner\Model\Uploads\CreateUploadDestinationResponse
     */
    public function createUploadDestinationForResource(AccessToken $accessToken, string $region, $marketplace_ids, $content_md5, $resource, $content_type = null): \MehrIt\AmazonSellingPartner\Model\Uploads\CreateUploadDestinationResponse
    {
        $request = $this->createUploadDestinationForResourceRequest($accessToken, $region, $marketplace_ids, $content_md5, $resource, $content_type);

        $this->configuration->extensions()->preRequest('Uploads', 'createUploadDestinationForResource', $request);

        try {
            $correlationId = \uuid_create(UUID_TYPE_RANDOM);

            if ($this->configuration->loggingEnabled('Uploads', 'createUploadDestinationForResource')) {

                $sanitizedRequest = $request;

                foreach ($this->configuration->loggingSkipHeaders() as $sensitiveHeader) {
                    $sanitizedRequest = $sanitizedRequest->withoutHeader($sensitiveHeader);
                }

                $this->logger->log(
                    $this->configuration->logLevel('Uploads', 'createUploadDestinationForResource'),
                    'Amazon Selling Partner API pre request',
                    [
                        'api' => 'Uploads',
                        'operation' => 'createUploadDestinationForResource',
                        'request_correlation_id' => $correlationId,
                        'request_body' => (string) $sanitizedRequest->getBody(),
                        'request_headers' => $sanitizedRequest->getHeaders(),
                        'request_uri' => (string) $sanitizedRequest->getUri(),
                    ]
                );
            }

            $response = $this->client->sendRequest($request);

            $this->configuration->extensions()->postRequest('Uploads', 'createUploadDestinationForResource', $request, $response);

            if ($this->configuration->loggingEnabled('Uploads', 'createUploadDestinationForResource')) {

                $sanitizedResponse = $response;

                foreach ($this->configuration->loggingSkipHeaders() as $sensitiveHeader) {
                    $sanitizedResponse = $sanitizedResponse->withoutHeader($sensitiveHeader);
                }

                $this->logger->log(
                    $this->configuration->logLevel('Uploads', 'createUploadDestinationForResource'),
                    'Amazon Selling Partner API post request',
                    [
                        'api' => 'Uploads',
                        'operation' => 'createUploadDestinationForResource',
                        'response_correlation_id' => $correlationId,
                        'response_body' => (string) $sanitizedResponse->getBody(),
                        'response_headers' => $sanitizedResponse->getHeaders(),
                        'response_status_code' => $sanitizedResponse->getStatusCode(),
                    ]
                );
            }
        } catch (ClientExceptionInterface $e) {
            throw new ApiException(
                "[{$e->getCode()}] {$e->getMessage()}",
                (int) $e->getCode(),
                null,
                null,
                $e
            );
        }

        $statusCode = $response->getStatusCode();

        if ($statusCode < 200 || $statusCode > 299) {
            throw new ApiException(
                sprintf(
                    '[%d] Error connecting to the API (%s)',
                    $statusCode,
                    (string) $request->getUri()
                ),
                $statusCode,
                $response->getHeaders(),
                (string) $response->getBody()
            );
        }

        return ObjectSerializer::deserialize(
            $this->configuration,
            (string) $response->getBody(),
            \MehrIt\AmazonSellingPartner\Model\Uploads\CreateUploadDestinationResponse::class,
            []
        );
    }

    /**
     * Create request for operation 'createUploadDestinationForResource'
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param string[] $marketplace_ids A list of marketplace identifiers. This specifies the marketplaces where the upload will be available. Only one marketplace can be specified. (required)
     * @param string $content_md5 An MD5 hash of the content to be submitted to the upload destination. This value is used to determine if the data has been corrupted or tampered with during transit. (required)
     * @param string $resource The resource for the upload destination that you are creating. For example, if you are creating an upload destination for the createLegalDisclosure operation of the Messaging API, the {resource} would be /messaging/v1/orders/{amazonOrderId}/messages/legalDisclosure, and the entire path would be /uploads/2020-11-01/uploadDestinations/messaging/v1/orders/{amazonOrderId}/messages/legalDisclosure. (required)
     * @param string $content_type The content type of the file to be uploaded. (optional)
     *
     * @throws \MehrIt\AmazonSellingPartner\Exception\InvalidArgumentException
     * @return RequestInterface
     */
    public function createUploadDestinationForResourceRequest(AccessToken $accessToken, string $region, $marketplace_ids, $content_md5, $resource, $content_type = null) : RequestInterface
    {
        // verify the required parameter 'marketplace_ids' is set
        if ($marketplace_ids === null || (is_array($marketplace_ids) && count($marketplace_ids) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $marketplace_ids when calling createUploadDestinationForResource'
            );
        }
        if (count($marketplace_ids) > 1) {
            throw new InvalidArgumentException('invalid value for "$marketplace_ids" when calling UploadsApi.createUploadDestinationForResource, number of items must be less than or equal to 1.');
        }

        // verify the required parameter 'content_md5' is set
        if ($content_md5 === null || (is_array($content_md5) && count($content_md5) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $content_md5 when calling createUploadDestinationForResource'
            );
        }
        // verify the required parameter 'resource' is set
        if ($resource === null || (is_array($resource) && count($resource) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $resource when calling createUploadDestinationForResource'
            );
        }

        $resourcePath = '/uploads/2020-11-01/uploadDestinations/{resource}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $multipart = false;
        $query = '';

        // query params
        if ($marketplace_ids instanceof \DateTimeInterface) {
            $marketplace_ids = ObjectSerializer::toString($marketplace_ids);
        }
        if (is_array($marketplace_ids)) {
            $marketplace_ids = ObjectSerializer::serializeCollection($marketplace_ids, 'form', true);
        }
        if ($marketplace_ids !== null) {
            $queryParams['marketplaceIds'] = $marketplace_ids;
        }
        // query params
        if ($content_md5 instanceof \DateTimeInterface) {
            $content_md5 = ObjectSerializer::toString($content_md5);
        }
        if (is_array($content_md5)) {
            $content_md5 = ObjectSerializer::serializeCollection($content_md5, '', true);
        }
        if ($content_md5 !== null) {
            $queryParams['contentMD5'] = $content_md5;
        }
        // query params
        if ($content_type instanceof \DateTimeInterface) {
            $content_type = ObjectSerializer::toString($content_type);
        }
        if (is_array($content_type)) {
            $content_type = ObjectSerializer::serializeCollection($content_type, '', true);
        }
        if ($content_type !== null) {
            $queryParams['contentType'] = $content_type;
        }

        if (\count($queryParams)) {
            $query = http_build_query($queryParams);
        }


        // path params
        if ($resource !== null) {
            $resourcePath = str_replace(
                '{' . 'resource' . '}',
                ObjectSerializer::toPathValue($resource),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = [
                'accept' => ['application/json'],
                'host' => [$this->configuration->apiHost($region)],
                'user-agent' => [$this->configuration->userAgent()],
            ];
        } else {
            $headers = [
                'content-type' => ['application/json'],
                'accept' => ['application/json'],
                'host' => [$this->configuration->apiHost($region)],
                'user-agent' => [$this->configuration->userAgent()],
            ];
        }

        $request = $this->httpFactory->createRequest(
            'POST',
            $this->configuration->apiURL($region) . $resourcePath . '?' . $query
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                $request = $request->withParsedBody($multipartContents);
            } elseif ($headers['content-type'] === ['application/json']) {
                $request = $request->withBody($this->httpFactory->createStreamFromString(\json_encode($formParams)));
            } else {
                $request = $request->withParsedBody($formParams);
            }
        }

        foreach (\array_merge($headerParams, $headers) as $name => $header) {
            $request = $request->withHeader($name, $header);
        }

        return HttpSignatureHeaders::forConfig(
            $this->configuration,
            $accessToken,
            $region,
            $request
        );
    }

}
