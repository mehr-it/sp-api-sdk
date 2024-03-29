<?php

namespace MehrIt\AmazonSellingPartner\Api\GetInventoryApi;

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
final class ExternalFulfillmentInventorySDK
{
    public const API_NAME = 'ExternalFulfillmentInventory';

    public const OPERATION_GETINVENTORY = 'getInventory';

    public const OPERATION_GETINVENTORY_PATH = '/externalFulfillment/inventory/2021-01-06/locations/{locationId}/skus/{skuId}';

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
     * Operation getInventory
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param string $location_id The node identifier for the seller&#39;s location in smart connect for which inventory is being updated (required)
     * @param string $sku_id The seller&#39;s identifier for the SKU for which inventory is being updated (required)
     *
     * @throws \MehrIt\AmazonSellingPartner\Exception\ApiException on non-2xx response
     * @throws \MehrIt\AmazonSellingPartner\Exception\InvalidArgumentException
     * @return \MehrIt\AmazonSellingPartner\Model\ExternalFulfillmentInventory\InventorySnapshot
     */
    public function getInventory(AccessToken $accessToken, string $region, $location_id, $sku_id)
    {
        $request = $this->getInventoryRequest($accessToken, $region, $location_id, $sku_id);

        $this->configuration->extensions()->preRequest('ExternalFulfillmentInventory', 'getInventory', $request);

        try {
            $correlationId = \uuid_create(UUID_TYPE_RANDOM);

            if ($this->configuration->loggingEnabled('ExternalFulfillmentInventory', 'getInventory')) {

                $sanitizedRequest = $request;

                foreach ($this->configuration->loggingSkipHeaders() as $sensitiveHeader) {
                    $sanitizedRequest = $sanitizedRequest->withoutHeader($sensitiveHeader);
                }

                $this->logger->log(
                    $this->configuration->logLevel('ExternalFulfillmentInventory', 'getInventory'),
                    'Amazon Selling Partner API pre request',
                    [
                        'api' => 'ExternalFulfillmentInventory',
                        'operation' => 'getInventory',
                        'request_correlation_id' => $correlationId,
                        'request_body' => (string) $sanitizedRequest->getBody(),
                        'request_headers' => $sanitizedRequest->getHeaders(),
                        'request_uri' => (string) $sanitizedRequest->getUri(),
                    ]
                );
            }

            $response = $this->client->sendRequest($request);

            $this->configuration->extensions()->postRequest('ExternalFulfillmentInventory', 'getInventory', $request, $response);

            if ($this->configuration->loggingEnabled('ExternalFulfillmentInventory', 'getInventory')) {

                $sanitizedResponse = $response;

                foreach ($this->configuration->loggingSkipHeaders() as $sensitiveHeader) {
                    $sanitizedResponse = $sanitizedResponse->withoutHeader($sensitiveHeader);
                }

                $this->logger->log(
                    $this->configuration->logLevel('ExternalFulfillmentInventory', 'getInventory'),
                    'Amazon Selling Partner API post request',
                    [
                        'api' => 'ExternalFulfillmentInventory',
                        'operation' => 'getInventory',
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
            '\MehrIt\AmazonSellingPartner\Model\ExternalFulfillmentInventory\InventorySnapshot',
            []
        );
    }

    /**
     * Create request for operation 'getInventory'
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param string $location_id The node identifier for the seller&#39;s location in smart connect for which inventory is being updated (required)
     * @param string $sku_id The seller&#39;s identifier for the SKU for which inventory is being updated (required)
     *
     * @throws \MehrIt\AmazonSellingPartner\Exception\InvalidArgumentException
     * @return RequestInterface
     */
    public function getInventoryRequest(AccessToken $accessToken, string $region, $location_id, $sku_id) : RequestInterface
    {
        // verify the required parameter 'location_id' is set
        if ($location_id === null || (is_array($location_id) && count($location_id) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $location_id when calling getInventory'
            );
        }
        // verify the required parameter 'sku_id' is set
        if ($sku_id === null || (is_array($sku_id) && count($sku_id) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $sku_id when calling getInventory'
            );
        }

        $resourcePath = '/externalFulfillment/inventory/2021-01-06/locations/{locationId}/skus/{skuId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $multipart = false;
        $query = '';


        if (\count($queryParams)) {
            $query = http_build_query($queryParams);
        }


        // path params
        if ($location_id !== null) {
            $resourcePath = str_replace(
                '{' . 'locationId' . '}',
                ObjectSerializer::toPathValue($location_id),
                $resourcePath
            );
        }
        // path params
        if ($sku_id !== null) {
            $resourcePath = str_replace(
                '{' . 'skuId' . '}',
                ObjectSerializer::toPathValue($sku_id),
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
            'GET',
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
