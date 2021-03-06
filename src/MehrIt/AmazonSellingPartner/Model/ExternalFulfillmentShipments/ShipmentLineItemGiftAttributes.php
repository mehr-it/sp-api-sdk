<?php
/**
 * ShipmentLineItemGiftAttributes
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
class ShipmentLineItemGiftAttributes implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'ShipmentLineItem_giftAttributes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'gift_wrap_required' => 'bool',
        'gift_wrap_label' => 'string',
        'gift_message_present' => 'bool',
        'gift_message' => '\MehrIt\AmazonSellingPartner\Model\ExternalFulfillmentShipments\Document'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'gift_wrap_required' => null,
        'gift_wrap_label' => null,
        'gift_message_present' => null,
        'gift_message' => null
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
        'gift_wrap_required' => 'giftWrapRequired',
        'gift_wrap_label' => 'giftWrapLabel',
        'gift_message_present' => 'giftMessagePresent',
        'gift_message' => 'giftMessage'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'gift_wrap_required' => 'setGiftWrapRequired',
        'gift_wrap_label' => 'setGiftWrapLabel',
        'gift_message_present' => 'setGiftMessagePresent',
        'gift_message' => 'setGiftMessage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'gift_wrap_required' => 'getGiftWrapRequired',
        'gift_wrap_label' => 'getGiftWrapLabel',
        'gift_message_present' => 'getGiftMessagePresent',
        'gift_message' => 'getGiftMessage'
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
        $this->container['gift_wrap_required'] = $data['gift_wrap_required'] ?? null;
        $this->container['gift_wrap_label'] = $data['gift_wrap_label'] ?? null;
        $this->container['gift_message_present'] = $data['gift_message_present'] ?? null;
        $this->container['gift_message'] = $data['gift_message'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties() : array
    {
        $invalidProperties = [];

        if ($this->container['gift_wrap_required'] === null) {
            $invalidProperties[] = "'gift_wrap_required' can't be null";
        }
        if ($this->container['gift_message_present'] === null) {
            $invalidProperties[] = "'gift_message_present' can't be null";
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
     * Gets gift_wrap_required
     *
     * @return bool
     */
    public function getGiftWrapRequired()
    {
        return $this->container['gift_wrap_required'];
    }

    /**
     * Sets gift_wrap_required
     *
     * @param bool $gift_wrap_required A boolean value indicating if the line item is to be gift wrapped or not.
     *
     * @return self
     */
    public function setGiftWrapRequired($gift_wrap_required) : self
    {
        $this->container['gift_wrap_required'] = $gift_wrap_required;

        return $this;
    }

    /**
     * Gets gift_wrap_label
     *
     * @return string|null
     */
    public function getGiftWrapLabel()
    {
        return $this->container['gift_wrap_label'];
    }

    /**
     * Sets gift_wrap_label
     *
     * @param string|null $gift_wrap_label The label to be printed on the wrapped gift.
     *
     * @return self
     */
    public function setGiftWrapLabel($gift_wrap_label) : self
    {
        $this->container['gift_wrap_label'] = $gift_wrap_label;

        return $this;
    }

    /**
     * Gets gift_message_present
     *
     * @return bool
     */
    public function getGiftMessagePresent()
    {
        return $this->container['gift_message_present'];
    }

    /**
     * Sets gift_message_present
     *
     * @param bool $gift_message_present Indicates if there is a gift message that has to be printed on the wrapped gift.
     *
     * @return self
     */
    public function setGiftMessagePresent($gift_message_present) : self
    {
        $this->container['gift_message_present'] = $gift_message_present;

        return $this;
    }

    /**
     * Gets gift_message
     *
     * @return \MehrIt\AmazonSellingPartner\Model\ExternalFulfillmentShipments\Document|null
     */
    public function getGiftMessage()
    {
        return $this->container['gift_message'];
    }

    /**
     * Sets gift_message
     *
     * @param \MehrIt\AmazonSellingPartner\Model\ExternalFulfillmentShipments\Document|null $gift_message gift_message
     *
     * @return self
     */
    public function setGiftMessage($gift_message) : self
    {
        $this->container['gift_message'] = $gift_message;

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
