<?php

namespace MehrIt\AmazonSellingPartner\Api\CustomerInvoicesApi;

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
final class VendorDirectFulfillmentShippingSDK
{
    public const API_NAME = 'VendorDirectFulfillmentShipping';

    public const OPERATION_GETCUSTOMERINVOICE = 'getCustomerInvoice';

    public const OPERATION_GETCUSTOMERINVOICE_PATH = '/vendor/directFulfillment/shipping/v1/customerInvoices/{purchaseOrderNumber}';
    public const OPERATION_GETCUSTOMERINVOICES = 'getCustomerInvoices';

    public const OPERATION_GETCUSTOMERINVOICES_PATH = '/vendor/directFulfillment/shipping/v1/customerInvoices';

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
     * Operation getCustomerInvoice
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param string $purchase_order_number Purchase order number of the shipment for which to return the invoice. (required)
     *
     * @throws \MehrIt\AmazonSellingPartner\Exception\ApiException on non-2xx response
     * @throws \MehrIt\AmazonSellingPartner\Exception\InvalidArgumentException
     * @return \MehrIt\AmazonSellingPartner\Model\VendorDirectFulfillmentShipping\GetCustomerInvoiceResponse
     */
    public function getCustomerInvoice(AccessToken $accessToken, string $region, $purchase_order_number)
    {
        $request = $this->getCustomerInvoiceRequest($accessToken, $region, $purchase_order_number);

        $this->configuration->extensions()->preRequest('VendorDirectFulfillmentShipping', 'getCustomerInvoice', $request);

        try {
            $correlationId = \uuid_create(UUID_TYPE_RANDOM);

            if ($this->configuration->loggingEnabled('VendorDirectFulfillmentShipping', 'getCustomerInvoice')) {

                $sanitizedRequest = $request;

                foreach ($this->configuration->loggingSkipHeaders() as $sensitiveHeader) {
                    $sanitizedRequest = $sanitizedRequest->withoutHeader($sensitiveHeader);
                }

                $this->logger->log(
                    $this->configuration->logLevel('VendorDirectFulfillmentShipping', 'getCustomerInvoice'),
                    'Amazon Selling Partner API pre request',
                    [
                        'api' => 'VendorDirectFulfillmentShipping',
                        'operation' => 'getCustomerInvoice',
                        'request_correlation_id' => $correlationId,
                        'request_body' => (string) $sanitizedRequest->getBody(),
                        'request_headers' => $sanitizedRequest->getHeaders(),
                        'request_uri' => (string) $sanitizedRequest->getUri(),
                    ]
                );
            }

            $response = $this->client->sendRequest($request);

            $this->configuration->extensions()->postRequest('VendorDirectFulfillmentShipping', 'getCustomerInvoice', $request, $response);

            if ($this->configuration->loggingEnabled('VendorDirectFulfillmentShipping', 'getCustomerInvoice')) {

                $sanitizedResponse = $response;

                foreach ($this->configuration->loggingSkipHeaders() as $sensitiveHeader) {
                    $sanitizedResponse = $sanitizedResponse->withoutHeader($sensitiveHeader);
                }

                $this->logger->log(
                    $this->configuration->logLevel('VendorDirectFulfillmentShipping', 'getCustomerInvoice'),
                    'Amazon Selling Partner API post request',
                    [
                        'api' => 'VendorDirectFulfillmentShipping',
                        'operation' => 'getCustomerInvoice',
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
            \MehrIt\AmazonSellingPartner\Model\VendorDirectFulfillmentShipping\GetCustomerInvoiceResponse::class,
            []
        );
    }

    /**
     * Create request for operation 'getCustomerInvoice'
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param string $purchase_order_number Purchase order number of the shipment for which to return the invoice. (required)
     *
     * @throws \MehrIt\AmazonSellingPartner\Exception\InvalidArgumentException
     * @return RequestInterface
     */
    public function getCustomerInvoiceRequest(AccessToken $accessToken, string $region, $purchase_order_number) : RequestInterface
    {
        // verify the required parameter 'purchase_order_number' is set
        if ($purchase_order_number === null || (is_array($purchase_order_number) && count($purchase_order_number) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $purchase_order_number when calling getCustomerInvoice'
            );
        }
        if (!preg_match("/^[a-zA-Z0-9]+$/", $purchase_order_number)) {
            throw new InvalidArgumentException("invalid value for \"purchase_order_number\" when calling CustomerInvoicesApi.getCustomerInvoice, must conform to the pattern /^[a-zA-Z0-9]+$/.");
        }


        $resourcePath = '/vendor/directFulfillment/shipping/v1/customerInvoices/{purchaseOrderNumber}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $multipart = false;
        $query = '';


        if (\count($queryParams)) {
            $query = http_build_query($queryParams);
        }


        // path params
        if ($purchase_order_number !== null) {
            $resourcePath = str_replace(
                '{' . 'purchaseOrderNumber' . '}',
                ObjectSerializer::toPathValue($purchase_order_number),
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

    /**
     * Operation getCustomerInvoices
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param \DateTime $created_after Orders that became available after this date and time will be included in the result. Must be in ISO-8601 date/time format. (required)
     * @param \DateTime $created_before Orders that became available before this date and time will be included in the result. Must be in ISO-8601 date/time format. (required)
     * @param string $ship_from_party_id The vendor warehouseId for order fulfillment. If not specified, the result will contain orders for all warehouses. (optional)
     * @param int $limit The limit to the number of records returned (optional)
     * @param string $sort_order Sort ASC or DESC by order creation date. (optional)
     * @param string $next_token Used for pagination when there are more orders than the specified result size limit. The token value is returned in the previous API call. (optional)
     *
     * @throws \MehrIt\AmazonSellingPartner\Exception\ApiException on non-2xx response
     * @throws \MehrIt\AmazonSellingPartner\Exception\InvalidArgumentException
     * @return \MehrIt\AmazonSellingPartner\Model\VendorDirectFulfillmentShipping\GetCustomerInvoicesResponse
     */
    public function getCustomerInvoices(AccessToken $accessToken, string $region, $created_after, $created_before, $ship_from_party_id = null, $limit = null, $sort_order = null, $next_token = null)
    {
        $request = $this->getCustomerInvoicesRequest($accessToken, $region, $created_after, $created_before, $ship_from_party_id, $limit, $sort_order, $next_token);

        $this->configuration->extensions()->preRequest('VendorDirectFulfillmentShipping', 'getCustomerInvoices', $request);

        try {
            $correlationId = \uuid_create(UUID_TYPE_RANDOM);

            if ($this->configuration->loggingEnabled('VendorDirectFulfillmentShipping', 'getCustomerInvoices')) {

                $sanitizedRequest = $request;

                foreach ($this->configuration->loggingSkipHeaders() as $sensitiveHeader) {
                    $sanitizedRequest = $sanitizedRequest->withoutHeader($sensitiveHeader);
                }

                $this->logger->log(
                    $this->configuration->logLevel('VendorDirectFulfillmentShipping', 'getCustomerInvoices'),
                    'Amazon Selling Partner API pre request',
                    [
                        'api' => 'VendorDirectFulfillmentShipping',
                        'operation' => 'getCustomerInvoices',
                        'request_correlation_id' => $correlationId,
                        'request_body' => (string) $sanitizedRequest->getBody(),
                        'request_headers' => $sanitizedRequest->getHeaders(),
                        'request_uri' => (string) $sanitizedRequest->getUri(),
                    ]
                );
            }

            $response = $this->client->sendRequest($request);

            $this->configuration->extensions()->postRequest('VendorDirectFulfillmentShipping', 'getCustomerInvoices', $request, $response);

            if ($this->configuration->loggingEnabled('VendorDirectFulfillmentShipping', 'getCustomerInvoices')) {

                $sanitizedResponse = $response;

                foreach ($this->configuration->loggingSkipHeaders() as $sensitiveHeader) {
                    $sanitizedResponse = $sanitizedResponse->withoutHeader($sensitiveHeader);
                }

                $this->logger->log(
                    $this->configuration->logLevel('VendorDirectFulfillmentShipping', 'getCustomerInvoices'),
                    'Amazon Selling Partner API post request',
                    [
                        'api' => 'VendorDirectFulfillmentShipping',
                        'operation' => 'getCustomerInvoices',
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
            \MehrIt\AmazonSellingPartner\Model\VendorDirectFulfillmentShipping\GetCustomerInvoicesResponse::class,
            []
        );
    }

    /**
     * Create request for operation 'getCustomerInvoices'
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param \DateTime $created_after Orders that became available after this date and time will be included in the result. Must be in ISO-8601 date/time format. (required)
     * @param \DateTime $created_before Orders that became available before this date and time will be included in the result. Must be in ISO-8601 date/time format. (required)
     * @param string $ship_from_party_id The vendor warehouseId for order fulfillment. If not specified, the result will contain orders for all warehouses. (optional)
     * @param int $limit The limit to the number of records returned (optional)
     * @param string $sort_order Sort ASC or DESC by order creation date. (optional)
     * @param string $next_token Used for pagination when there are more orders than the specified result size limit. The token value is returned in the previous API call. (optional)
     *
     * @throws \MehrIt\AmazonSellingPartner\Exception\InvalidArgumentException
     * @return RequestInterface
     */
    public function getCustomerInvoicesRequest(AccessToken $accessToken, string $region, $created_after, $created_before, $ship_from_party_id = null, $limit = null, $sort_order = null, $next_token = null) : RequestInterface
    {
        // verify the required parameter 'created_after' is set
        if ($created_after === null || (is_array($created_after) && count($created_after) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $created_after when calling getCustomerInvoices'
            );
        }
        // verify the required parameter 'created_before' is set
        if ($created_before === null || (is_array($created_before) && count($created_before) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $created_before when calling getCustomerInvoices'
            );
        }
        if ($limit !== null && $limit > 100) {
            throw new InvalidArgumentException('invalid value for "$limit" when calling CustomerInvoicesApi.getCustomerInvoices, must be smaller than or equal to 100.');
        }
        if ($limit !== null && $limit < 1) {
            throw new InvalidArgumentException('invalid value for "$limit" when calling CustomerInvoicesApi.getCustomerInvoices, must be bigger than or equal to 1.');
        }


        $resourcePath = '/vendor/directFulfillment/shipping/v1/customerInvoices';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $multipart = false;
        $query = '';

        // query params
        if ($ship_from_party_id instanceof \DateTimeInterface) {
            $ship_from_party_id = ObjectSerializer::toString($ship_from_party_id);
        }
        if (is_array($ship_from_party_id)) {
            $ship_from_party_id = ObjectSerializer::serializeCollection($ship_from_party_id, '', true);
        }
        if ($ship_from_party_id !== null) {
            $queryParams['shipFromPartyId'] = $ship_from_party_id;
        }
        // query params
        if ($limit instanceof \DateTimeInterface) {
            $limit = ObjectSerializer::toString($limit);
        }
        if (is_array($limit)) {
            $limit = ObjectSerializer::serializeCollection($limit, '', true);
        }
        if ($limit !== null) {
            $queryParams['limit'] = $limit;
        }
        // query params
        if ($created_after instanceof \DateTimeInterface) {
            $created_after = ObjectSerializer::toString($created_after);
        }
        if (is_array($created_after)) {
            $created_after = ObjectSerializer::serializeCollection($created_after, '', true);
        }
        if ($created_after !== null) {
            $queryParams['createdAfter'] = $created_after;
        }
        // query params
        if ($created_before instanceof \DateTimeInterface) {
            $created_before = ObjectSerializer::toString($created_before);
        }
        if (is_array($created_before)) {
            $created_before = ObjectSerializer::serializeCollection($created_before, '', true);
        }
        if ($created_before !== null) {
            $queryParams['createdBefore'] = $created_before;
        }
        // query params
        if ($sort_order instanceof \DateTimeInterface) {
            $sort_order = ObjectSerializer::toString($sort_order);
        }
        if (is_array($sort_order)) {
            $sort_order = ObjectSerializer::serializeCollection($sort_order, '', true);
        }
        if ($sort_order !== null) {
            $queryParams['sortOrder'] = $sort_order;
        }
        // query params
        if ($next_token instanceof \DateTimeInterface) {
            $next_token = ObjectSerializer::toString($next_token);
        }
        if (is_array($next_token)) {
            $next_token = ObjectSerializer::serializeCollection($next_token, '', true);
        }
        if ($next_token !== null) {
            $queryParams['nextToken'] = $next_token;
        }

        if (\count($queryParams)) {
            $query = http_build_query($queryParams);
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
