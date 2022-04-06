<?php
/**
 * ShipmentMetadataOriginalShipmentInfoOriginalLineItems
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  MehrIt\AmazonSellingPartner
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Amazon External Fulfillment Shipments Processing
 *
 * This section provides APIs for selling partners to work with Amazon External Fulfillment shipments management/processing services.
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

namespace MehrIt\AmazonSellingPartner\Model\ExternalFulfillmentShipments;

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
class ShipmentMetadataOriginalShipmentInfoOriginalLineItems implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'Shipment_metadata_originalShipmentInfo_originalLineItems';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'replacing_sku' => 'string',
        'original_sku' => 'string',
        'charges' => 'object[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'replacing_sku' => null,
        'original_sku' => null,
        'charges' => null
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
        'replacing_sku' => 'replacingSku',
        'original_sku' => 'originalSku',
        'charges' => 'charges'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'replacing_sku' => 'setReplacingSku',
        'original_sku' => 'setOriginalSku',
        'charges' => 'setCharges'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'replacing_sku' => 'getReplacingSku',
        'original_sku' => 'getOriginalSku',
        'charges' => 'getCharges'
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
        $this->container['replacing_sku'] = $data['replacing_sku'] ?? null;
        $this->container['original_sku'] = $data['original_sku'] ?? null;
        $this->container['charges'] = $data['charges'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties() : array
    {
        $invalidProperties = [];

        if ($this->container['replacing_sku'] === null) {
            $invalidProperties[] = "'replacing_sku' can't be null";
        }
        if ($this->container['original_sku'] === null) {
            $invalidProperties[] = "'original_sku' can't be null";
        }
        if ($this->container['charges'] === null) {
            $invalidProperties[] = "'charges' can't be null";
        }
        if ((count($this->container['charges']) < 1)) {
            $invalidProperties[] = "invalid value for 'charges', number of items must be greater than or equal to 1.";
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
     * Gets replacing_sku
     *
     * @return string
     */
    public function getReplacingSku()
    {
        return $this->container['replacing_sku'];
    }

    /**
     * Sets replacing_sku
     *
     * @param string $replacing_sku SKU id for this shipment
     *
     * @return self
     */
    public function setReplacingSku($replacing_sku) : self
    {
        $this->container['replacing_sku'] = $replacing_sku;

        return $this;
    }

    /**
     * Gets original_sku
     *
     * @return string
     */
    public function getOriginalSku()
    {
        return $this->container['original_sku'];
    }

    /**
     * Sets original_sku
     *
     * @param string $original_sku SKU id for the original shipment
     *
     * @return self
     */
    public function setOriginalSku($original_sku) : self
    {
        $this->container['original_sku'] = $original_sku;

        return $this;
    }

    /**
     * Gets charges
     *
     * @return object[]
     */
    public function getCharges()
    {
        return $this->container['charges'];
    }

    /**
     * Sets charges
     *
     * @param object[] $charges The charges associated with the shipment. The charge amount does not include the tax amount.
     *
     * @return self
     */
    public function setCharges($charges) : self
    {


        if ((count($charges) < 1)) {
            throw new \InvalidArgumentException('invalid length for $charges when calling ShipmentMetadataOriginalShipmentInfoOriginalLineItems., number of items must be greater than or equal to 1.');
        }
        $this->container['charges'] = $charges;

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