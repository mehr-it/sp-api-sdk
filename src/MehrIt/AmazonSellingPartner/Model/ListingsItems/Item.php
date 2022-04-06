<?php
/**
 * Item
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  MehrIt\AmazonSellingPartner
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Listings Items
 *
 * The Selling Partner API for Listings Items (Listings Items API) provides programmatic access to selling partner listings on Amazon. Use this API in collaboration with the Selling Partner API for Product Type Definitions, which you use to retrieve the information about Amazon product types needed to use the Listings Items API.  For more information, see the [Listings Items API Use Case Guide](doc:listings-items-api-v2021-08-01-use-case-guide).
 *
 * The version of the OpenAPI document: 2021-08-01
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace MehrIt\AmazonSellingPartner\Model\ListingsItems;

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
class Item implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'Item';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'sku' => 'string',
        'summaries' => '\MehrIt\AmazonSellingPartner\Model\ListingsItems\ItemSummaryByMarketplace[]',
        'attributes' => 'object',
        'issues' => '\MehrIt\AmazonSellingPartner\Model\ListingsItems\Issue[]',
        'offers' => '\MehrIt\AmazonSellingPartner\Model\ListingsItems\ItemOfferByMarketplace[]',
        'fulfillment_availability' => '\MehrIt\AmazonSellingPartner\Model\ListingsItems\FulfillmentAvailability[]',
        'procurement' => '\MehrIt\AmazonSellingPartner\Model\ListingsItems\ItemProcurement'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'sku' => null,
        'summaries' => null,
        'attributes' => null,
        'issues' => null,
        'offers' => null,
        'fulfillment_availability' => null,
        'procurement' => null
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
        'sku' => 'sku',
        'summaries' => 'summaries',
        'attributes' => 'attributes',
        'issues' => 'issues',
        'offers' => 'offers',
        'fulfillment_availability' => 'fulfillmentAvailability',
        'procurement' => 'procurement'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'sku' => 'setSku',
        'summaries' => 'setSummaries',
        'attributes' => 'setAttributes',
        'issues' => 'setIssues',
        'offers' => 'setOffers',
        'fulfillment_availability' => 'setFulfillmentAvailability',
        'procurement' => 'setProcurement'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'sku' => 'getSku',
        'summaries' => 'getSummaries',
        'attributes' => 'getAttributes',
        'issues' => 'getIssues',
        'offers' => 'getOffers',
        'fulfillment_availability' => 'getFulfillmentAvailability',
        'procurement' => 'getProcurement'
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
        $this->container['sku'] = $data['sku'] ?? null;
        $this->container['summaries'] = $data['summaries'] ?? null;
        $this->container['attributes'] = $data['attributes'] ?? null;
        $this->container['issues'] = $data['issues'] ?? null;
        $this->container['offers'] = $data['offers'] ?? null;
        $this->container['fulfillment_availability'] = $data['fulfillment_availability'] ?? null;
        $this->container['procurement'] = $data['procurement'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties() : array
    {
        $invalidProperties = [];

        if ($this->container['sku'] === null) {
            $invalidProperties[] = "'sku' can't be null";
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
     * Gets sku
     *
     * @return string
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     *
     * @param string $sku A selling partner provided identifier for an Amazon listing.
     *
     * @return self
     */
    public function setSku($sku) : self
    {
        $this->container['sku'] = $sku;

        return $this;
    }

    /**
     * Gets summaries
     *
     * @return \MehrIt\AmazonSellingPartner\Model\ListingsItems\ItemSummaryByMarketplace[]|null
     */
    public function getSummaries()
    {
        return $this->container['summaries'];
    }

    /**
     * Sets summaries
     *
     * @param \MehrIt\AmazonSellingPartner\Model\ListingsItems\ItemSummaryByMarketplace[]|null $summaries Summary details of a listings item.
     *
     * @return self
     */
    public function setSummaries($summaries) : self
    {
        $this->container['summaries'] = $summaries;

        return $this;
    }

    /**
     * Gets attributes
     *
     * @return object|null
     */
    public function getAttributes()
    {
        return $this->container['attributes'];
    }

    /**
     * Sets attributes
     *
     * @param object|null $attributes JSON object containing structured listings item attribute data keyed by attribute name.
     *
     * @return self
     */
    public function setAttributes($attributes) : self
    {
        $this->container['attributes'] = $attributes;

        return $this;
    }

    /**
     * Gets issues
     *
     * @return \MehrIt\AmazonSellingPartner\Model\ListingsItems\Issue[]|null
     */
    public function getIssues()
    {
        return $this->container['issues'];
    }

    /**
     * Sets issues
     *
     * @param \MehrIt\AmazonSellingPartner\Model\ListingsItems\Issue[]|null $issues Issues associated with the listings item.
     *
     * @return self
     */
    public function setIssues($issues) : self
    {
        $this->container['issues'] = $issues;

        return $this;
    }

    /**
     * Gets offers
     *
     * @return \MehrIt\AmazonSellingPartner\Model\ListingsItems\ItemOfferByMarketplace[]|null
     */
    public function getOffers()
    {
        return $this->container['offers'];
    }

    /**
     * Sets offers
     *
     * @param \MehrIt\AmazonSellingPartner\Model\ListingsItems\ItemOfferByMarketplace[]|null $offers Offer details for the listings item.
     *
     * @return self
     */
    public function setOffers($offers) : self
    {
        $this->container['offers'] = $offers;

        return $this;
    }

    /**
     * Gets fulfillment_availability
     *
     * @return \MehrIt\AmazonSellingPartner\Model\ListingsItems\FulfillmentAvailability[]|null
     */
    public function getFulfillmentAvailability()
    {
        return $this->container['fulfillment_availability'];
    }

    /**
     * Sets fulfillment_availability
     *
     * @param \MehrIt\AmazonSellingPartner\Model\ListingsItems\FulfillmentAvailability[]|null $fulfillment_availability Fulfillment availability for the listings item.
     *
     * @return self
     */
    public function setFulfillmentAvailability($fulfillment_availability) : self
    {
        $this->container['fulfillment_availability'] = $fulfillment_availability;

        return $this;
    }

    /**
     * Gets procurement
     *
     * @return \MehrIt\AmazonSellingPartner\Model\ListingsItems\ItemProcurement|null
     */
    public function getProcurement()
    {
        return $this->container['procurement'];
    }

    /**
     * Sets procurement
     *
     * @param \MehrIt\AmazonSellingPartner\Model\ListingsItems\ItemProcurement|null $procurement procurement
     *
     * @return self
     */
    public function setProcurement($procurement) : self
    {
        $this->container['procurement'] = $procurement;

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
