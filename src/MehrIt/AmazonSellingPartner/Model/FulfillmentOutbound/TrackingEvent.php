<?php
/**
 * TrackingEvent
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  MehrIt\AmazonSellingPartner
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner APIs for Fulfillment Outbound
 *
 * The Selling Partner API for Fulfillment Outbound lets you create applications that help a seller fulfill Multi-Channel Fulfillment orders using their inventory in Amazon's fulfillment network. You can get information on both potential and existing fulfillment orders.
 *
 * The version of the OpenAPI document: 2020-07-01
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace MehrIt\AmazonSellingPartner\Model\FulfillmentOutbound;

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
class TrackingEvent implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'TrackingEvent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'event_date' => '\DateTime',
        'event_address' => '\MehrIt\AmazonSellingPartner\Model\FulfillmentOutbound\TrackingAddress',
        'event_code' => '\MehrIt\AmazonSellingPartner\Model\FulfillmentOutbound\EventCode',
        'event_description' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'event_date' => 'date-time',
        'event_address' => null,
        'event_code' => null,
        'event_description' => null
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
        'event_date' => 'eventDate',
        'event_address' => 'eventAddress',
        'event_code' => 'eventCode',
        'event_description' => 'eventDescription'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'event_date' => 'setEventDate',
        'event_address' => 'setEventAddress',
        'event_code' => 'setEventCode',
        'event_description' => 'setEventDescription'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'event_date' => 'getEventDate',
        'event_address' => 'getEventAddress',
        'event_code' => 'getEventCode',
        'event_description' => 'getEventDescription'
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
        $this->container['event_date'] = $data['event_date'] ?? null;
        $this->container['event_address'] = $data['event_address'] ?? null;
        $this->container['event_code'] = $data['event_code'] ?? null;
        $this->container['event_description'] = $data['event_description'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties() : array
    {
        $invalidProperties = [];

        if ($this->container['event_date'] === null) {
            $invalidProperties[] = "'event_date' can't be null";
        }
        if ($this->container['event_address'] === null) {
            $invalidProperties[] = "'event_address' can't be null";
        }
        if ($this->container['event_code'] === null) {
            $invalidProperties[] = "'event_code' can't be null";
        }
        if ($this->container['event_description'] === null) {
            $invalidProperties[] = "'event_description' can't be null";
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
     * Gets event_date
     *
     * @return \DateTime
     */
    public function getEventDate()
    {
        return $this->container['event_date'];
    }

    /**
     * Sets event_date
     *
     * @param \DateTime $event_date event_date
     *
     * @return self
     */
    public function setEventDate($event_date) : self
    {
        $this->container['event_date'] = $event_date;

        return $this;
    }

    /**
     * Gets event_address
     *
     * @return \MehrIt\AmazonSellingPartner\Model\FulfillmentOutbound\TrackingAddress
     */
    public function getEventAddress()
    {
        return $this->container['event_address'];
    }

    /**
     * Sets event_address
     *
     * @param \MehrIt\AmazonSellingPartner\Model\FulfillmentOutbound\TrackingAddress $event_address event_address
     *
     * @return self
     */
    public function setEventAddress($event_address) : self
    {
        $this->container['event_address'] = $event_address;

        return $this;
    }

    /**
     * Gets event_code
     *
     * @return \MehrIt\AmazonSellingPartner\Model\FulfillmentOutbound\EventCode
     */
    public function getEventCode()
    {
        return $this->container['event_code'];
    }

    /**
     * Sets event_code
     *
     * @param \MehrIt\AmazonSellingPartner\Model\FulfillmentOutbound\EventCode $event_code event_code
     *
     * @return self
     */
    public function setEventCode($event_code) : self
    {
        $this->container['event_code'] = $event_code;

        return $this;
    }

    /**
     * Gets event_description
     *
     * @return string
     */
    public function getEventDescription()
    {
        return $this->container['event_description'];
    }

    /**
     * Sets event_description
     *
     * @param string $event_description A description for the corresponding event code.
     *
     * @return self
     */
    public function setEventDescription($event_description) : self
    {
        $this->container['event_description'] = $event_description;

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