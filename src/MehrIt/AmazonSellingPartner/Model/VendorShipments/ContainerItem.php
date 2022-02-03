<?php
/**
 * ContainerItem
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  MehrIt\AmazonSellingPartner
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Retail Procurement Shipments
 *
 * The Selling Partner API for Retail Procurement Shipments provides programmatic access to retail shipping data for vendors.
 *
 * The version of the OpenAPI document: v1
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace MehrIt\AmazonSellingPartner\Model\VendorShipments;

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
class ContainerItem implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'ContainerItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'item_reference' => 'string',
        'shipped_quantity' => '\MehrIt\AmazonSellingPartner\Model\VendorShipments\ItemQuantity',
        'item_details' => '\MehrIt\AmazonSellingPartner\Model\VendorShipments\ItemDetails'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'item_reference' => null,
        'shipped_quantity' => null,
        'item_details' => null
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
        'item_reference' => 'itemReference',
        'shipped_quantity' => 'shippedQuantity',
        'item_details' => 'itemDetails'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'item_reference' => 'setItemReference',
        'shipped_quantity' => 'setShippedQuantity',
        'item_details' => 'setItemDetails'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'item_reference' => 'getItemReference',
        'shipped_quantity' => 'getShippedQuantity',
        'item_details' => 'getItemDetails'
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
        $this->container['item_reference'] = $data['item_reference'] ?? null;
        $this->container['shipped_quantity'] = $data['shipped_quantity'] ?? null;
        $this->container['item_details'] = $data['item_details'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties() : array
    {
        $invalidProperties = [];

        if ($this->container['item_reference'] === null) {
            $invalidProperties[] = "'item_reference' can't be null";
        }
        if ($this->container['shipped_quantity'] === null) {
            $invalidProperties[] = "'shipped_quantity' can't be null";
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
     * Gets item_reference
     *
     * @return string
     */
    public function getItemReference()
    {
        return $this->container['item_reference'];
    }

    /**
     * Sets item_reference
     *
     * @param string $item_reference The reference number for the item. Please provide the itemSequenceNumber from the 'items' segment to refer to that item's details here.
     *
     * @return self
     */
    public function setItemReference($item_reference) : self
    {
        $this->container['item_reference'] = $item_reference;

        return $this;
    }

    /**
     * Gets shipped_quantity
     *
     * @return \MehrIt\AmazonSellingPartner\Model\VendorShipments\ItemQuantity
     */
    public function getShippedQuantity()
    {
        return $this->container['shipped_quantity'];
    }

    /**
     * Sets shipped_quantity
     *
     * @param \MehrIt\AmazonSellingPartner\Model\VendorShipments\ItemQuantity $shipped_quantity shipped_quantity
     *
     * @return self
     */
    public function setShippedQuantity($shipped_quantity) : self
    {
        $this->container['shipped_quantity'] = $shipped_quantity;

        return $this;
    }

    /**
     * Gets item_details
     *
     * @return \MehrIt\AmazonSellingPartner\Model\VendorShipments\ItemDetails|null
     */
    public function getItemDetails()
    {
        return $this->container['item_details'];
    }

    /**
     * Sets item_details
     *
     * @param \MehrIt\AmazonSellingPartner\Model\VendorShipments\ItemDetails|null $item_details item_details
     *
     * @return self
     */
    public function setItemDetails($item_details) : self
    {
        $this->container['item_details'] = $item_details;

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