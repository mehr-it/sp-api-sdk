<?php
/**
 * InventorySnapshotMarketplaceChannelInventories
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  MehrIt\AmazonSellingPartner
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for External Fulfillment Inventory Management
 *
 * This section provides APIs for selling partners to work with External Fulfillment inventory services.
 *
 * The version of the OpenAPI document: 2021-01-06
 * Contact: marketplaceapitest@amazon.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace MehrIt\AmazonSellingPartner\Model\ExternalFulfillmentInventory;

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
class InventorySnapshotMarketplaceChannelInventories implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'InventorySnapshot_marketplaceChannelInventories';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'sellable_quantity' => 'int',
        'buffered_quantity' => 'int',
        'marketplace_attributes' => '\MehrIt\AmazonSellingPartner\Model\ExternalFulfillmentInventory\InventorySnapshotMarketplaceAttributes'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'sellable_quantity' => null,
        'buffered_quantity' => null,
        'marketplace_attributes' => null
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
        'sellable_quantity' => 'sellableQuantity',
        'buffered_quantity' => 'bufferedQuantity',
        'marketplace_attributes' => 'marketplaceAttributes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'sellable_quantity' => 'setSellableQuantity',
        'buffered_quantity' => 'setBufferedQuantity',
        'marketplace_attributes' => 'setMarketplaceAttributes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'sellable_quantity' => 'getSellableQuantity',
        'buffered_quantity' => 'getBufferedQuantity',
        'marketplace_attributes' => 'getMarketplaceAttributes'
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
        $this->container['sellable_quantity'] = $data['sellable_quantity'] ?? null;
        $this->container['buffered_quantity'] = $data['buffered_quantity'] ?? null;
        $this->container['marketplace_attributes'] = $data['marketplace_attributes'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties() : array
    {
        $invalidProperties = [];

        if ($this->container['sellable_quantity'] === null) {
            $invalidProperties[] = "'sellable_quantity' can't be null";
        }
        if (($this->container['sellable_quantity'] < 0)) {
            $invalidProperties[] = "invalid value for 'sellable_quantity', must be bigger than or equal to 0.";
        }

        if ($this->container['buffered_quantity'] === null) {
            $invalidProperties[] = "'buffered_quantity' can't be null";
        }
        if (($this->container['buffered_quantity'] < 0)) {
            $invalidProperties[] = "invalid value for 'buffered_quantity', must be bigger than or equal to 0.";
        }

        if ($this->container['marketplace_attributes'] === null) {
            $invalidProperties[] = "'marketplace_attributes' can't be null";
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
     * Gets sellable_quantity
     *
     * @return int
     */
    public function getSellableQuantity()
    {
        return $this->container['sellable_quantity'];
    }

    /**
     * Sets sellable_quantity
     *
     * @param int $sellable_quantity The number of items of the specified SKU that are available for being purchased.
     *
     * @return self
     */
    public function setSellableQuantity($sellable_quantity) : self
    {

        if (($sellable_quantity < 0)) {
            throw new \InvalidArgumentException('invalid value for $sellable_quantity when calling InventorySnapshotMarketplaceChannelInventories., must be bigger than or equal to 0.');
        }

        $this->container['sellable_quantity'] = $sellable_quantity;

        return $this;
    }

    /**
     * Gets buffered_quantity
     *
     * @return int
     */
    public function getBufferedQuantity()
    {
        return $this->container['buffered_quantity'];
    }

    /**
     * Sets buffered_quantity
     *
     * @param int $buffered_quantity The number of items of a particular SKU that have been virtually buffered by Amazon Yojaka.
     *
     * @return self
     */
    public function setBufferedQuantity($buffered_quantity) : self
    {

        if (($buffered_quantity < 0)) {
            throw new \InvalidArgumentException('invalid value for $buffered_quantity when calling InventorySnapshotMarketplaceChannelInventories., must be bigger than or equal to 0.');
        }

        $this->container['buffered_quantity'] = $buffered_quantity;

        return $this;
    }

    /**
     * Gets marketplace_attributes
     *
     * @return \MehrIt\AmazonSellingPartner\Model\ExternalFulfillmentInventory\InventorySnapshotMarketplaceAttributes
     */
    public function getMarketplaceAttributes()
    {
        return $this->container['marketplace_attributes'];
    }

    /**
     * Sets marketplace_attributes
     *
     * @param \MehrIt\AmazonSellingPartner\Model\ExternalFulfillmentInventory\InventorySnapshotMarketplaceAttributes $marketplace_attributes marketplace_attributes
     *
     * @return self
     */
    public function setMarketplaceAttributes($marketplace_attributes) : self
    {
        $this->container['marketplace_attributes'] = $marketplace_attributes;

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
