<?php

namespace MehrIt\AmazonSellingPartner\Api\UpdateInventoryApi;

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
final class VendorDirectFulfillmentInventorySDK
{
    public const API_NAME = 'VendorDirectFulfillmentInventory';

    public const OPERATION_SUBMITINVENTORYUPDATE = 'submitInventoryUpdate';

    public const OPERATION_SUBMITINVENTORYUPDATE_PATH = '/vendor/directFulfillment/inventory/v1/warehouses/{warehouseId}/items';

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
     * Operation submitInventoryUpdate
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param string $warehouse_id Identifier for the warehouse for which to update inventory. (required)
     * @param \MehrIt\AmazonSellingPartner\Model\VendorDirectFulfillmentInventory\SubmitInventoryUpdateRequest $body body (required)
     *
     * @throws \MehrIt\AmazonSellingPartner\Exception\ApiException on non-2xx response
     * @throws \MehrIt\AmazonSellingPartner\Exception\InvalidArgumentException
     * @return \MehrIt\AmazonSellingPartner\Model\VendorDirectFulfillmentInventory\SubmitInventoryUpdateResponse
     */
    public function submitInventoryUpdate(AccessToken $accessToken, string $region, $warehouse_id, $body)
    {
        $request = $this->submitInventoryUpdateRequest($accessToken, $region, $warehouse_id, $body);

        $this->configuration->extensions()->preRequest('VendorDirectFulfillmentInventory', 'submitInventoryUpdate', $request);

        try {
            $correlationId = \uuid_create(UUID_TYPE_RANDOM);

            if ($this->configuration->loggingEnabled('VendorDirectFulfillmentInventory', 'submitInventoryUpdate')) {

                $sanitizedRequest = $request;

                foreach ($this->configuration->loggingSkipHeaders() as $sensitiveHeader) {
                    $sanitizedRequest = $sanitizedRequest->withoutHeader($sensitiveHeader);
                }

                $this->logger->log(
                    $this->configuration->logLevel('VendorDirectFulfillmentInventory', 'submitInventoryUpdate'),
                    'Amazon Selling Partner API pre request',
                    [
                        'api' => 'VendorDirectFulfillmentInventory',
                        'operation' => 'submitInventoryUpdate',
                        'request_correlation_id' => $correlationId,
                        'request_body' => (string) $sanitizedRequest->getBody(),
                        'request_headers' => $sanitizedRequest->getHeaders(),
                        'request_uri' => (string) $sanitizedRequest->getUri(),
                    ]
                );
            }

            $response = $this->client->sendRequest($request);

            $this->configuration->extensions()->postRequest('VendorDirectFulfillmentInventory', 'submitInventoryUpdate', $request, $response);

            if ($this->configuration->loggingEnabled('VendorDirectFulfillmentInventory', 'submitInventoryUpdate')) {

                $sanitizedResponse = $response;

                foreach ($this->configuration->loggingSkipHeaders() as $sensitiveHeader) {
                    $sanitizedResponse = $sanitizedResponse->withoutHeader($sensitiveHeader);
                }

                $this->logger->log(
                    $this->configuration->logLevel('VendorDirectFulfillmentInventory', 'submitInventoryUpdate'),
                    'Amazon Selling Partner API post request',
                    [
                        'api' => 'VendorDirectFulfillmentInventory',
                        'operation' => 'submitInventoryUpdate',
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
            \MehrIt\AmazonSellingPartner\Model\VendorDirectFulfillmentInventory\SubmitInventoryUpdateResponse::class,
            []
        );
    }

    /**
     * Create request for operation 'submitInventoryUpdate'
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param string $warehouse_id Identifier for the warehouse for which to update inventory. (required)
     * @param \MehrIt\AmazonSellingPartner\Model\VendorDirectFulfillmentInventory\SubmitInventoryUpdateRequest $body (required)
     *
     * @throws \MehrIt\AmazonSellingPartner\Exception\InvalidArgumentException
     * @return RequestInterface
     */
    public function submitInventoryUpdateRequest(AccessToken $accessToken, string $region, $warehouse_id, $body) : RequestInterface
    {
        // verify the required parameter 'warehouse_id' is set
        if ($warehouse_id === null || (is_array($warehouse_id) && count($warehouse_id) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $warehouse_id when calling submitInventoryUpdate'
            );
        }
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $body when calling submitInventoryUpdate'
            );
        }

        $resourcePath = '/vendor/directFulfillment/inventory/v1/warehouses/{warehouseId}/items';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $multipart = false;
        $query = '';


        if (\count($queryParams)) {
            $query = http_build_query($queryParams);
        }


        // path params
        if ($warehouse_id !== null) {
            $resourcePath = str_replace(
                '{' . 'warehouseId' . '}',
                ObjectSerializer::toPathValue($warehouse_id),
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
        if (isset($body)) {
            if ($headers['content-type'] === ['application/json']) {
                $httpBody = \json_encode(ObjectSerializer::sanitizeForSerialization($body));
            } else {
                $httpBody = $body;
            }

            $request = $request->withBody($this->httpFactory->createStreamFromString($httpBody));
        } elseif (count($formParams) > 0) {
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
