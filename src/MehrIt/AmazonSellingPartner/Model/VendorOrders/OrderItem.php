<?php
/**
 * OrderItem
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  MehrIt\AmazonSellingPartner
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Retail Procurement Orders
 *
 * The Selling Partner API for Retail Procurement Orders provides programmatic access to vendor orders data.
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

namespace MehrIt\AmazonSellingPartner\Model\VendorOrders;

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
class OrderItem implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'OrderItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'item_sequence_number' => 'string',
        'amazon_product_identifier' => 'string',
        'vendor_product_identifier' => 'string',
        'ordered_quantity' => '\MehrIt\AmazonSellingPartner\Model\VendorOrders\ItemQuantity',
        'is_back_order_allowed' => 'bool',
        'net_cost' => '\MehrIt\AmazonSellingPartner\Model\VendorOrders\Money',
        'list_price' => '\MehrIt\AmazonSellingPartner\Model\VendorOrders\Money'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'item_sequence_number' => null,
        'amazon_product_identifier' => null,
        'vendor_product_identifier' => null,
        'ordered_quantity' => null,
        'is_back_order_allowed' => null,
        'net_cost' => null,
        'list_price' => null
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
        'item_sequence_number' => 'itemSequenceNumber',
        'amazon_product_identifier' => 'amazonProductIdentifier',
        'vendor_product_identifier' => 'vendorProductIdentifier',
        'ordered_quantity' => 'orderedQuantity',
        'is_back_order_allowed' => 'isBackOrderAllowed',
        'net_cost' => 'netCost',
        'list_price' => 'listPrice'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'item_sequence_number' => 'setItemSequenceNumber',
        'amazon_product_identifier' => 'setAmazonProductIdentifier',
        'vendor_product_identifier' => 'setVendorProductIdentifier',
        'ordered_quantity' => 'setOrderedQuantity',
        'is_back_order_allowed' => 'setIsBackOrderAllowed',
        'net_cost' => 'setNetCost',
        'list_price' => 'setListPrice'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'item_sequence_number' => 'getItemSequenceNumber',
        'amazon_product_identifier' => 'getAmazonProductIdentifier',
        'vendor_product_identifier' => 'getVendorProductIdentifier',
        'ordered_quantity' => 'getOrderedQuantity',
        'is_back_order_allowed' => 'getIsBackOrderAllowed',
        'net_cost' => 'getNetCost',
        'list_price' => 'getListPrice'
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
        $this->container['item_sequence_number'] = $data['item_sequence_number'] ?? null;
        $this->container['amazon_product_identifier'] = $data['amazon_product_identifier'] ?? null;
        $this->container['vendor_product_identifier'] = $data['vendor_product_identifier'] ?? null;
        $this->container['ordered_quantity'] = $data['ordered_quantity'] ?? null;
        $this->container['is_back_order_allowed'] = $data['is_back_order_allowed'] ?? null;
        $this->container['net_cost'] = $data['net_cost'] ?? null;
        $this->container['list_price'] = $data['list_price'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties() : array
    {
        $invalidProperties = [];

        if ($this->container['item_sequence_number'] === null) {
            $invalidProperties[] = "'item_sequence_number' can't be null";
        }
        if ($this->container['ordered_quantity'] === null) {
            $invalidProperties[] = "'ordered_quantity' can't be null";
        }
        if ($this->container['is_back_order_allowed'] === null) {
            $invalidProperties[] = "'is_back_order_allowed' can't be null";
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
     * Gets item_sequence_number
     *
     * @return string
     */
    public function getItemSequenceNumber()
    {
        return $this->container['item_sequence_number'];
    }

    /**
     * Sets item_sequence_number
     *
     * @param string $item_sequence_number Numbering of the item on the purchase order. The first item will be 1, the second 2, and so on.
     *
     * @return self
     */
    public function setItemSequenceNumber($item_sequence_number) : self
    {
        $this->container['item_sequence_number'] = $item_sequence_number;

        return $this;
    }

    /**
     * Gets amazon_product_identifier
     *
     * @return string|null
     */
    public function getAmazonProductIdentifier()
    {
        return $this->container['amazon_product_identifier'];
    }

    /**
     * Sets amazon_product_identifier
     *
     * @param string|null $amazon_product_identifier Amazon Standard Identification Number (ASIN) of an item.
     *
     * @return self
     */
    public function setAmazonProductIdentifier($amazon_product_identifier) : self
    {
        $this->container['amazon_product_identifier'] = $amazon_product_identifier;

        return $this;
    }

    /**
     * Gets vendor_product_identifier
     *
     * @return string|null
     */
    public function getVendorProductIdentifier()
    {
        return $this->container['vendor_product_identifier'];
    }

    /**
     * Sets vendor_product_identifier
     *
     * @param string|null $vendor_product_identifier The vendor selected product identification of the item.
     *
     * @return self
     */
    public function setVendorProductIdentifier($vendor_product_identifier) : self
    {
        $this->container['vendor_product_identifier'] = $vendor_product_identifier;

        return $this;
    }

    /**
     * Gets ordered_quantity
     *
     * @return \MehrIt\AmazonSellingPartner\Model\VendorOrders\ItemQuantity
     */
    public function getOrderedQuantity()
    {
        return $this->container['ordered_quantity'];
    }

    /**
     * Sets ordered_quantity
     *
     * @param \MehrIt\AmazonSellingPartner\Model\VendorOrders\ItemQuantity $ordered_quantity ordered_quantity
     *
     * @return self
     */
    public function setOrderedQuantity($ordered_quantity) : self
    {
        $this->container['ordered_quantity'] = $ordered_quantity;

        return $this;
    }

    /**
     * Gets is_back_order_allowed
     *
     * @return bool
     */
    public function getIsBackOrderAllowed()
    {
        return $this->container['is_back_order_allowed'];
    }

    /**
     * Sets is_back_order_allowed
     *
     * @param bool $is_back_order_allowed When true, we will accept backorder confirmations for this item.
     *
     * @return self
     */
    public function setIsBackOrderAllowed($is_back_order_allowed) : self
    {
        $this->container['is_back_order_allowed'] = $is_back_order_allowed;

        return $this;
    }

    /**
     * Gets net_cost
     *
     * @return \MehrIt\AmazonSellingPartner\Model\VendorOrders\Money|null
     */
    public function getNetCost()
    {
        return $this->container['net_cost'];
    }

    /**
     * Sets net_cost
     *
     * @param \MehrIt\AmazonSellingPartner\Model\VendorOrders\Money|null $net_cost net_cost
     *
     * @return self
     */
    public function setNetCost($net_cost) : self
    {
        $this->container['net_cost'] = $net_cost;

        return $this;
    }

    /**
     * Gets list_price
     *
     * @return \MehrIt\AmazonSellingPartner\Model\VendorOrders\Money|null
     */
    public function getListPrice()
    {
        return $this->container['list_price'];
    }

    /**
     * Sets list_price
     *
     * @param \MehrIt\AmazonSellingPartner\Model\VendorOrders\Money|null $list_price list_price
     *
     * @return self
     */
    public function setListPrice($list_price) : self
    {
        $this->container['list_price'] = $list_price;

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
