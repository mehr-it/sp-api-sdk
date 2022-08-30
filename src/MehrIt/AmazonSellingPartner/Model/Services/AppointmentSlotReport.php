<?php
/**
 * AppointmentSlotReport
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  MehrIt\AmazonSellingPartner
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Services
 *
 * With the Services API, you can build applications that help service providers get and modify their service orders and manage their resources.
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

namespace MehrIt\AmazonSellingPartner\Model\Services;

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
class AppointmentSlotReport implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'AppointmentSlotReport';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'scheduling_type' => 'string',
        'start_time' => '\DateTime',
        'end_time' => '\DateTime',
        'appointment_slots' => '\MehrIt\AmazonSellingPartner\Model\Services\AppointmentSlot[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'scheduling_type' => null,
        'start_time' => 'date-time',
        'end_time' => 'date-time',
        'appointment_slots' => null
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
        'scheduling_type' => 'schedulingType',
        'start_time' => 'startTime',
        'end_time' => 'endTime',
        'appointment_slots' => 'appointmentSlots'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'scheduling_type' => 'setSchedulingType',
        'start_time' => 'setStartTime',
        'end_time' => 'setEndTime',
        'appointment_slots' => 'setAppointmentSlots'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'scheduling_type' => 'getSchedulingType',
        'start_time' => 'getStartTime',
        'end_time' => 'getEndTime',
        'appointment_slots' => 'getAppointmentSlots'
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

    const SCHEDULING_TYPE_REAL_TIME_SCHEDULING = 'REAL_TIME_SCHEDULING';
    const SCHEDULING_TYPE_NON_REAL_TIME_SCHEDULING = 'NON_REAL_TIME_SCHEDULING';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSchedulingTypeAllowableValues() : array
    {
        return [
            self::SCHEDULING_TYPE_REAL_TIME_SCHEDULING,
            self::SCHEDULING_TYPE_NON_REAL_TIME_SCHEDULING,
        ];
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
        $this->container['scheduling_type'] = $data['scheduling_type'] ?? null;
        $this->container['start_time'] = $data['start_time'] ?? null;
        $this->container['end_time'] = $data['end_time'] ?? null;
        $this->container['appointment_slots'] = $data['appointment_slots'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties() : array
    {
        $invalidProperties = [];

        $allowedValues = $this->getSchedulingTypeAllowableValues();
        if (!is_null($this->container['scheduling_type']) && !in_array($this->container['scheduling_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'scheduling_type', must be one of '%s'",
                $this->container['scheduling_type'],
                implode("', '", $allowedValues)
            );
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
     * Gets scheduling_type
     *
     * @return string|null
     */
    public function getSchedulingType()
    {
        return $this->container['scheduling_type'];
    }

    /**
     * Sets scheduling_type
     *
     * @param string|null $scheduling_type Defines the type of slots.
     *
     * @return self
     */
    public function setSchedulingType($scheduling_type) : self
    {
        $allowedValues = $this->getSchedulingTypeAllowableValues();
        if (!is_null($scheduling_type) && !in_array($scheduling_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'scheduling_type', must be one of '%s'",
                    $scheduling_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['scheduling_type'] = $scheduling_type;

        return $this;
    }

    /**
     * Gets start_time
     *
     * @return \DateTime|null
     */
    public function getStartTime()
    {
        return $this->container['start_time'];
    }

    /**
     * Sets start_time
     *
     * @param \DateTime|null $start_time Start Time from which the appointment slots are generated in ISO 8601 format.
     *
     * @return self
     */
    public function setStartTime($start_time) : self
    {
        $this->container['start_time'] = $start_time;

        return $this;
    }

    /**
     * Gets end_time
     *
     * @return \DateTime|null
     */
    public function getEndTime()
    {
        return $this->container['end_time'];
    }

    /**
     * Sets end_time
     *
     * @param \DateTime|null $end_time End Time up to which the appointment slots are generated in ISO 8601 format.
     *
     * @return self
     */
    public function setEndTime($end_time) : self
    {
        $this->container['end_time'] = $end_time;

        return $this;
    }

    /**
     * Gets appointment_slots
     *
     * @return \MehrIt\AmazonSellingPartner\Model\Services\AppointmentSlot[]|null
     */
    public function getAppointmentSlots()
    {
        return $this->container['appointment_slots'];
    }

    /**
     * Sets appointment_slots
     *
     * @param \MehrIt\AmazonSellingPartner\Model\Services\AppointmentSlot[]|null $appointment_slots A list of time windows along with associated capacity in which the service can be performed.
     *
     * @return self
     */
    public function setAppointmentSlots($appointment_slots) : self
    {
        $this->container['appointment_slots'] = $appointment_slots;

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