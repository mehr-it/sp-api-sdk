<?php
/**
 * ReservedQuantity
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  MehrIt\AmazonSellingPartner
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for FBA Inventory
 *
 * The Selling Partner API for FBA Inventory lets you programmatically retrieve information about inventory in Amazon's fulfillment network. Today this API is available only in the North America region. In 2021 we plan to release this API in the Europe and Far East regions.
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

namespace MehrIt\AmazonSellingPartner\Model\FBAInventory;

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
class ReservedQuantity implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'ReservedQuantity';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'total_reserved_quantity' => 'int',
        'pending_customer_order_quantity' => 'int',
        'pending_transshipment_quantity' => 'int',
        'fc_processing_quantity' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'total_reserved_quantity' => null,
        'pending_customer_order_quantity' => null,
        'pending_transshipment_quantity' => null,
        'fc_processing_quantity' => null
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
        'total_reserved_quantity' => 'totalReservedQuantity',
        'pending_customer_order_quantity' => 'pendingCustomerOrderQuantity',
        'pending_transshipment_quantity' => 'pendingTransshipmentQuantity',
        'fc_processing_quantity' => 'fcProcessingQuantity'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'total_reserved_quantity' => 'setTotalReservedQuantity',
        'pending_customer_order_quantity' => 'setPendingCustomerOrderQuantity',
        'pending_transshipment_quantity' => 'setPendingTransshipmentQuantity',
        'fc_processing_quantity' => 'setFcProcessingQuantity'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'total_reserved_quantity' => 'getTotalReservedQuantity',
        'pending_customer_order_quantity' => 'getPendingCustomerOrderQuantity',
        'pending_transshipment_quantity' => 'getPendingTransshipmentQuantity',
        'fc_processing_quantity' => 'getFcProcessingQuantity'
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
        $this->container['total_reserved_quantity'] = $data['total_reserved_quantity'] ?? null;
        $this->container['pending_customer_order_quantity'] = $data['pending_customer_order_quantity'] ?? null;
        $this->container['pending_transshipment_quantity'] = $data['pending_transshipment_quantity'] ?? null;
        $this->container['fc_processing_quantity'] = $data['fc_processing_quantity'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties() : array
    {
        $invalidProperties = [];

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
     * Gets total_reserved_quantity
     *
     * @return int|null
     */
    public function getTotalReservedQuantity()
    {
        return $this->container['total_reserved_quantity'];
    }

    /**
     * Sets total_reserved_quantity
     *
     * @param int|null $total_reserved_quantity The total number of units in Amazon's fulfillment network that are currently being picked, packed, and shipped; or are sidelined for measurement, sampling, or other internal processes.
     *
     * @return self
     */
    public function setTotalReservedQuantity($total_reserved_quantity) : self
    {
        $this->container['total_reserved_quantity'] = $total_reserved_quantity;

        return $this;
    }

    /**
     * Gets pending_customer_order_quantity
     *
     * @return int|null
     */
    public function getPendingCustomerOrderQuantity()
    {
        return $this->container['pending_customer_order_quantity'];
    }

    /**
     * Sets pending_customer_order_quantity
     *
     * @param int|null $pending_customer_order_quantity The number of units reserved for customer orders.
     *
     * @return self
     */
    public function setPendingCustomerOrderQuantity($pending_customer_order_quantity) : self
    {
        $this->container['pending_customer_order_quantity'] = $pending_customer_order_quantity;

        return $this;
    }

    /**
     * Gets pending_transshipment_quantity
     *
     * @return int|null
     */
    public function getPendingTransshipmentQuantity()
    {
        return $this->container['pending_transshipment_quantity'];
    }

    /**
     * Sets pending_transshipment_quantity
     *
     * @param int|null $pending_transshipment_quantity The number of units being transferred from one fulfillment center to another.
     *
     * @return self
     */
    public function setPendingTransshipmentQuantity($pending_transshipment_quantity) : self
    {
        $this->container['pending_transshipment_quantity'] = $pending_transshipment_quantity;

        return $this;
    }

    /**
     * Gets fc_processing_quantity
     *
     * @return int|null
     */
    public function getFcProcessingQuantity()
    {
        return $this->container['fc_processing_quantity'];
    }

    /**
     * Sets fc_processing_quantity
     *
     * @param int|null $fc_processing_quantity The number of units that have been sidelined at the fulfillment center for additional processing.
     *
     * @return self
     */
    public function setFcProcessingQuantity($fc_processing_quantity) : self
    {
        $this->container['fc_processing_quantity'] = $fc_processing_quantity;

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
