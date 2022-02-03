# Amazon Selling Partner API - PHP SDK

This repository is not an official Amazon PHP library for their SP API. 

![social-preview](https://repository-images.githubusercontent.com/372302167/e16f602b-c263-48ee-a36a-a06177d1fa68)


### Why next library? 

The main goal of this SDK is to provide SDK's for the Amazon SP API in a way that would let 
the application to pass Amazon audit.  

Amazon audit might happen to systems that must access API endpoints with PII. 

There are already few php sp api SDKs available for [PHP](https://packagist.org/?query=sp%20api%20)
however most of them comes with many issues of auto generated code. 

- hardcoded dependencies like `guzzlehttp/guzzle` or `aws/aws-sdk-php` 
- legacy code base (7.2)
- no logger
- SDK's are oriented around single seller which is not suitable for bigger systems
- missing or lacking support for `client_credentials` grant type
- not all API covered
- no extensions 

This library goal is to resolve all above mentioned issues. 

### Installations

```
composer install amazon-php/sp-api-sdk^3.0
```

This library is not in a stable stage yet, please use with caution.

### Releases

| branch | maintained |
|--------|-----------|
| [1.x](https://github.com/amazon-php/sp-api-sdk/tree/1.x)    | 🚫        |
| [2.x](https://github.com/amazon-php/sp-api-sdk/tree/2.x)    | ✅        |
| [3.x](https://github.com/amazon-php/sp-api-sdk/tree/3.x)    | ✅        |

Version <s> [1.x](https://github.com/amazon-php/sp-api-sdk/tree/1.x) </s> is deprecated becuase of the attempt to 
make a little more sense of what Amazon is doing with using "tags" in their Open API specification. 
This attempt failed and in order to keep Backward Compatibility promise, changes in the class names had to be 
introduced in [2.x](https://github.com/amazon-php/sp-api-sdk/tree/2.x). 
Version 1.0 is not going to be updated anymore, please migrate to version 2.0 that will stay consistent with [Amazon Models](https://github.com/amzn/selling-partner-api-models)
Branch [3.x](https://github.com/amazon-php/sp-api-sdk/tree/3.x) comes with BC breaks introduced by Amazon in 
[Catalog Item](https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/catalog-items-api-model/catalogItems_2020-12-01.json) models. 
Until old model won't go away, branches 2.x and 3.x should be maintained in parallel. 

### Available SDKs

[SellingPartnerSDK](/src/MehrIt/AmazonSellingPartner/SellingPartnerSDK.php) - Facade for all SDK's
* [APlusSDK](/src/MehrIt/AmazonSellingPartner/Api/AplusContentApi/APlusSDK.php)
* [AuthorizationSDK](/src/MehrIt/AmazonSellingPartner/Api/AuthorizationApi/AuthorizationSDK.php)
* [CatalogItemSDK](/src/MehrIt/AmazonSellingPartner/Api/CatalogApi/CatalogItemSDK.php)
* <s>[DeprecatedCatalogItemSDK](/src/MehrIt/AmazonSellingPartner/Api/CatalogApi/CatalogItemDeprecatedSDK.php)</s>
* [FBAInboundSDK](/src/MehrIt/AmazonSellingPartner/Api/FbaInboundApi/FBAInboundSDK.php)
* [FBAInventorySDK](/src/MehrIt/AmazonSellingPartner/Api/FbaInventoryApi/FBAInventorySDK.php)
* [FulfillmentInboundSDK](/src/MehrIt/AmazonSellingPartner/Api/FbaInboundApi/FulfillmentInboundSDK.php)
* [FBASmallAndLightSDK](/src/MehrIt/AmazonSellingPartner/Api/SmallAndLightApi/FBASmallAndLightSDK.php)
* [FeedsSDK](/src/MehrIt/AmazonSellingPartner/Api/FeedsApi/FeedsSDK.php)
* [FinancesSDK](/src/MehrIt/AmazonSellingPartner/Api/DefaultApi/FinancesSDK.php)
* [FulfillmentOutboundSDK](/src/MehrIt/AmazonSellingPartner/Api/FbaOutboundApi/FulfillmentOutboundSDK.php)
* [ListingsItemsSDK](/src/MehrIt/AmazonSellingPartner/Api/ListingsApi/ListingsItemsSDK.php)
* [MessagingSDK](/src/MehrIt/AmazonSellingPartner/Api/MessagingApi/MessagingSDK.php)
* [NotificationsSDK](/src/MehrIt/AmazonSellingPartner/Api/NotificationsApi/NotificationsSDK.php)
* [OrdersSDK](/src/MehrIt/AmazonSellingPartner/Api/OrdersV0Api/OrdersSDK.php)
* [Shipment/OrdersSDK](/src/MehrIt/AmazonSellingPartner/Api/ShipmentApi/OrdersSDK.php)
* [ProductFeesSDK](/src/MehrIt/AmazonSellingPartner/Api/FeesApi/ProductFeesSDK.php)
* [ProductPricingSDK](/src/MehrIt/AmazonSellingPartner/Api/ProductPricingApi/ProductPricingSDK.php)
* [ProductTypesDefinitionsSDK](/src/MehrIt/AmazonSellingPartner/Api/DefinitionsApi/ProductTypesDefinitionsSDK.php)
* [ReportsSDK](/src/MehrIt/AmazonSellingPartner/Api/ReportsApi/ReportsSDK.php)
* [SalesSDK](/src/MehrIt/AmazonSellingPartner/Api/SalesApi/SalesSDK.php)
* [SellersSDK](/src/MehrIt/AmazonSellingPartner/Api/SellersApi/SellersSDK.php)
* [ServicesSDK](/src/MehrIt/AmazonSellingPartner/Api/ServiceApi/ServicesSDK.php)
* [ShipmentInvoicingSDK](/src/MehrIt/AmazonSellingPartner/Api/ShipmentInvoiceApi/ShipmentInvoicingSDK.php)
* [ShippingSDK](/src/MehrIt/AmazonSellingPartner/Api/ShippingApi/ShippingSDK.php)
* [SolicitationsSDK](/src/MehrIt/AmazonSellingPartner/Api/SolicitationsApi/SolicitationsSDK.php)
* [TokensSDK](/src/MehrIt/AmazonSellingPartner/Api/TokensApi/TokensSDK.php)
* [UploadsSDK](/src/MehrIt/AmazonSellingPartner/Api/UploadsApi/UploadsSDK.php)
* VendorSDK
  * [VendorInvoicesSDK](/src/MehrIt/AmazonSellingPartner/Api/VendorPaymentsApi/VendorInvoicesSDK.php)
  * [VendorOrdersSDK](/src/MehrIt/AmazonSellingPartner/Api/VendorOrdersApi/VendorOrdersSDK.php)
  * [VendorShipmentsSDK](/src/MehrIt/AmazonSellingPartner/Api/VendorShippingApi/VendorShipmentsSDK.php)
  * [VendorTransactionStatusSDK](/src/MehrIt/AmazonSellingPartner/Api/VendorTransactionApi/VendorTransactionStatusSDK.php)
  * [VendorDirectFulfillmentTransactionsSDK](/src/MehrIt/AmazonSellingPartner/Api/VendorTransactionApi/VendorDirectFulfillmentTransactionsSDK.php)
  * [VendorDirectFulfillmentShippingSDK](/src/MehrIt/AmazonSellingPartner/Api/VendorShippingApi/VendorDirectFulfillmentShippingSDK.php)
  * [VendorDirectFulfillmentShippingSDK - Labels](/src/MehrIt/AmazonSellingPartner/Api/VendorShippingLabelsApi/VendorDirectFulfillmentShippingSDK.php)
  * [VendorDirectFulfillmentOrdersSDK](/src/MehrIt/AmazonSellingPartner/Api/VendorOrdersApi/VendorDirectFulfillmentOrdersSDK.php)
  * [VendorDirectFulfillmentPaymentsSDK](/src/MehrIt/AmazonSellingPartner/Api/VendorInvoiceApi/VendorDirectFulfillmentPaymentsSDK.php)
    
### Authorization

In order to start using SP API you need to first register as a Developer and create application.
Whole process is described in [Amazon Official Guides](https://github.com/amzn/selling-partner-api-docs/blob/main/guides/en-US/developer-guide/SellingPartnerApiDeveloperGuide.md).

Amazon recommends to use Role IAM when creating application however this requires and additional
API request in order to obtain access token. It's easier to use User IAM and just make sure that the user 
has following Inline Policy 

```
{
    "Version": "2012-10-17",
    "Statement": [
        {
            "Effect": "Allow",
            "Action": "execute-api:Invoke",
            "Resource": "arn:aws:execute-api:*:*:*"
        }
    ]
}
```

#### IAM User 

Example of changing refresh token into access token. 

```
<?php

use MehrIt\AmazonSellingPartner\OAuth;
use MehrIt\AmazonSellingPartner\Configuration;
use MehrIt\AmazonSellingPartner\HttpFactory;
use Buzz\Client\Curl;
use Nyholm\Psr7\Factory\Psr17Factory;

$factory = new Psr17Factory();
$client = new Curl($factory);

$oauth = new OAuth(
    $client,
    $httpFactory = new HttpFactory($factory, $factory),
    $config = Configuration::forIAMUser(
        'lwaClientId',
        'lwaClientIdSecret',
        'awsAccessKey',
        'awsSecretKey'
    )
);

$accessToken = $oauth->exchangeRefreshToken('seller_oauth_refresh_token');
```

#### IAM Role 

```
<?php

use MehrIt\AmazonSellingPartner\OAuth;
use MehrIt\AmazonSellingPartner\Configuration;
use MehrIt\AmazonSellingPartner\HttpFactory;
use Buzz\Client\Curl;
use Nyholm\Psr7\Factory\Psr17Factory;

$factory = new Psr17Factory();
$client = new Curl($factory);

$sts = new STSClient(
    $client,
    $requestFactory = $factory,
    $streamFactory = $factory
);

$oauth = new OAuth(
    $client,
    $httpFactory = new HttpFactory($requestFactory, $streamFactory),
    $config = Configuration::forIAMRole(
        'lwaClientID',
        'lwaClientID',
        $sts->assumeRole(
            'awsAccessKey',
            'awsSecretKey',
            'arn:aws:iam::.........'
        )
    )
);

$accessToken = $oauth->exchangeRefreshToken('seller_oauth_refresh_token');
```


### Development

99% of code in this library is auto generated from [Amazon Selling Partner API Models](https://github.com/amzn/selling-partner-api-models)
using [OpenAPI Generator](http://github.com/openAPITools/openapi-generator/) tool.
Output is later automatically upgraded by [RectorPHP](http://github.com/rectorphp) to PHP 7.4 version 
and finally coding standards are also automatically unified by [PHP CS Fixer](https://github.com/FriendsOfPHP/PHP-CS-Fixer).

Requirements:

- [Docker](https://www.docker.com/)
- [PHP 7.4+](https://www.php.net/)
- [Composer](https://getcomposer.org/)

In oder to regenerate code (for example when API definitions change), execute following code: 

```
composer generate
```

### Examples

```php
<?php

use MehrIt\AmazonSellingPartner\Marketplace;
use MehrIt\AmazonSellingPartner\Regions;
use MehrIt\AmazonSellingPartner\SellingPartnerSDK;
use Buzz\Client\Curl;
use MehrIt\AmazonSellingPartner\Exception\ApiException;
use MehrIt\AmazonSellingPartner\Configuration;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use Nyholm\Psr7\Factory\Psr17Factory;

require_once __DIR__ . '/vendor/autoload.php';

$factory = new Psr17Factory();
$client = new Curl($factory);

$configuration = Configuration::forIAMUser(
    'lwaClientId',
    'lwaClientIdSecret',
    'awsAccessKey',
    'awsSecretKey'
);

$logger = new Logger('name');
$logger->pushHandler(new StreamHandler(__DIR__ . '/sp-api-php.log', Logger::DEBUG));

$sdk = SellingPartnerSDK::create($client, $factory, $factory, $configuration, $logger);

$accessToken = $sdk->oAuth()->exchangeRefreshToken('seller_oauth_refresh_token');

try {
    $item = $sdk->catalogItem()->getCatalogItem(
        $accessToken,
        Regions::NORTH_AMERICA,
        $marketplaceId = Marketplace::US()->id(),
        $asin = 'B07W13KJZC'
    );
    dump($item);
} catch (ApiException $exception) {
    dump($exception->getMessage());
}
```

### Logging

Default log level is set up to DEBUG, but it can be changed in configuration to any other 
level for all operations in all APIs or only for given operation in given API. 

```
$configuration->setDefaultLogLevel(\Psr\Log\LogLevel::INFO);
```

Specific API's or only given operations can be also excluded from logging (for example APIs with PII or sensitive data).

```
$configuration->setLogLevel(CatalogItemSDK::API_NAME, CatalogItemSDK::OPERATION_GETCATALOGITEM, LogLevel::INFO);
$configuration->setSkipLogging(TokensSDK::API_NAME);
$configuration->setSkipLogging(AuthorizationSDK::API_NAME, AuthorizationSDK::OPERATION_GETAUTHORIZATIONCODE);
```

Finally, you can also ignore specific headers when logging http request/response.
By default, configuration is set to ignore following sensitive authorization headers:

```
'authorization',
'x-amz-access-token',
'x-amz-security-token',
'proxy-authorization',
'www-authenticate',
'proxy-authenticate',
```

you can also add your own ignored headers: 

```
$configuration->loggingAddSkippedHeader('some-sensitive-key');
```

### Extensions

Each SDK allows you to register custom extensions executed before and after sending API requests.

```php
<?php 

$configuration->registerExtension(new class implements \MehrIt\AmazonSellingPartner\Extension {
    public function preRequest(string $api, string $operation, RequestInterface $request): void
    {
        echo "pre: " . $api . "::" . $operation . " " . $request->getUri() . "\n";
    }

    public function postRequest(string $api, string $operation, RequestInterface $request, ResponseInterface $response): void
    {
        echo "post: " . $api . "::" . $operation . " " . $request->getUri() . " " 
            . $response->getStatusCode() . " rate limit: " . implode(' ', $response->getHeader('x-amzn-RateLimit-Limit')) . "\n";
    }
});
```
