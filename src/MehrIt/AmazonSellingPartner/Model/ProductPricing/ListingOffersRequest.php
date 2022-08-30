<?php
/**
 * ListingOffersRequest
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  MehrIt\AmazonSellingPartner
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Pricing
 *
 * The Selling Partner API for Pricing helps you programmatically retrieve product pricing and offer information for Amazon Marketplace products.
 *
 * The version of the OpenAPI document: v0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace MehrIt\AmazonSellingPartner\Model\ProductPricing;

use \ArrayAccess;
use \MehrIt\AmazonSellingPartner\ObjectSerializer;
use \MehrIt\AmazonSellingPartner\ModelInterface;

/**
 * This class was auto-generated by https://github.com/OpenAPITools/openapi-generator/.
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 *
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ListingOffersRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'ListingOffersRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'uri' => 'string',
        'method' => '\MehrIt\AmazonSellingPartner\Model\ProductPricing\HttpMethod',
        'headers' => 'array<string,string>',
        'marketplace_id' => 'string',
        'item_condition' => '\MehrIt\AmazonSellingPartner\Model\ProductPricing\ItemCondition',
        'customer_type' => '\MehrIt\AmazonSellingPartner\Model\ProductPricing\CustomerType'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'uri' => null,
        'method' => null,
        'headers' => null,
        'marketplace_id' => null,
        'item_condition' => null,
        'customer_type' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes() : array
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats() : array
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'uri' => 'uri',
        'method' => 'method',
        'headers' => 'headers',
        'marketplace_id' => 'MarketplaceId',
        'item_condition' => 'ItemCondition',
        'customer_type' => 'CustomerType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'uri' => 'setUri',
        'method' => 'setMethod',
        'headers' => 'setHeaders',
        'marketplace_id' => 'setMarketplaceId',
        'item_condition' => 'setItemCondition',
        'customer_type' => 'setCustomerType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'uri' => 'getUri',
        'method' => 'getMethod',
        'headers' => 'getHeaders',
        'marketplace_id' => 'getMarketplaceId',
        'item_condition' => 'getItemCondition',
        'customer_type' => 'getCustomerType'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap() : array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters() : array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters() : array
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName() : string
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected array $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['uri'] = $data['uri'] ?? null;
        $this->container['method'] = $data['method'] ?? null;
        $this->container['headers'] = $data['headers'] ?? null;
        $this->container['marketplace_id'] = $data['marketplace_id'] ?? null;
        $this->container['item_condition'] = $data['item_condition'] ?? null;
        $this->container['customer_type'] = $data['customer_type'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties() : array
    {
        $invalidProperties = [];

        if ($this->container['uri'] === null) {
            $invalidProperties[] = "'uri' can't be null";
        }
        if ($this->container['method'] === null) {
            $invalidProperties[] = "'method' can't be null";
        }
        if ($this->container['marketplace_id'] === null) {
            $invalidProperties[] = "'marketplace_id' can't be null";
        }
        if ($this->container['item_condition'] === null) {
            $invalidProperties[] = "'item_condition' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid() : bool
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets uri
     *
     * @return string
     */
    public function getUri()
    {
        return $this->container['uri'];
    }

    /**
     * Sets uri
     *
     * @param string $uri The `getItemOffers` resource path without any query parameters.  **Example:** `/products/pricing/v0/items/B000P6Q7MY/offers`
     *
     * @return self
     */
    public function setUri($uri) : self
    {
        $this->container['uri'] = $uri;

        return $this;
    }

    /**
     * Gets method
     *
     * @return \MehrIt\AmazonSellingPartner\Model\ProductPricing\HttpMethod
     */
    public function getMethod()
    {
        return $this->container['method'];
    }

    /**
     * Sets method
     *
     * @param \MehrIt\AmazonSellingPartner\Model\ProductPricing\HttpMethod $method method
     *
     * @return self
     */
    public function setMethod($method) : self
    {
        $this->container['method'] = $method;

        return $this;
    }

    /**
     * Gets headers
     *
     * @return array<string,string>|null
     */
    public function getHeaders()
    {
        return $this->container['headers'];
    }

    /**
     * Sets headers
     *
     * @param array<string,string>|null $headers A mapping of additional HTTP headers to send/receive for the individual batch request.
     *
     * @return self
     */
    public function setHeaders($headers) : self
    {
        $this->container['headers'] = $headers;

        return $this;
    }

    /**
     * Gets marketplace_id
     *
     * @return string
     */
    public function getMarketplaceId()
    {
        return $this->container['marketplace_id'];
    }

    /**
     * Sets marketplace_id
     *
     * @param string $marketplace_id A marketplace identifier. Specifies the marketplace for which prices are returned.
     *
     * @return self
     */
    public function setMarketplaceId($marketplace_id) : self
    {
        $this->container['marketplace_id'] = $marketplace_id;

        return $this;
    }

    /**
     * Gets item_condition
     *
     * @return \MehrIt\AmazonSellingPartner\Model\ProductPricing\ItemCondition
     */
    public function getItemCondition()
    {
        return $this->container['item_condition'];
    }

    /**
     * Sets item_condition
     *
     * @param \MehrIt\AmazonSellingPartner\Model\ProductPricing\ItemCondition $item_condition item_condition
     *
     * @return self
     */
    public function setItemCondition($item_condition) : self
    {
        $this->container['item_condition'] = $item_condition;

        return $this;
    }

    /**
     * Gets customer_type
     *
     * @return \MehrIt\AmazonSellingPartner\Model\ProductPricing\CustomerType|null
     */
    public function getCustomerType()
    {
        return $this->container['customer_type'];
    }

    /**
     * Sets customer_type
     *
     * @param \MehrIt\AmazonSellingPartner\Model\ProductPricing\CustomerType|null $customer_type customer_type
     *
     * @return self
     */
    public function setCustomerType($customer_type) : self
    {
        $this->container['customer_type'] = $customer_type;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset) : bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value) : void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset) : void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize() : string
    {
       return \json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString() : string
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue() : string
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
