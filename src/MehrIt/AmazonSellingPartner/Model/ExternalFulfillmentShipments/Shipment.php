<?php
/**
 * Shipment
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
class Shipment implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'Shipment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'id' => 'string',
        'location_id' => 'string',
        'channel_name' => 'string',
        'channel_location_id' => 'string',
        'metadata' => '\MehrIt\AmazonSellingPartner\Model\ExternalFulfillmentShipments\ShipmentMetadata',
        'charges' => 'object[]',
        'status' => 'string',
        'line_items' => '\MehrIt\AmazonSellingPartner\Model\ExternalFulfillmentShipments\ShipmentLineItem[]',
        'shipping_info' => '\MehrIt\AmazonSellingPartner\Model\ExternalFulfillmentShipments\ShipmentShippingInfo',
        'packages' => '\MehrIt\AmazonSellingPartner\Model\ExternalFulfillmentShipments\Package[]',
        'creation_date_time' => 'string',
        'last_updated_date_time' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'id' => null,
        'location_id' => null,
        'channel_name' => null,
        'channel_location_id' => null,
        'metadata' => null,
        'charges' => null,
        'status' => null,
        'line_items' => null,
        'shipping_info' => null,
        'packages' => null,
        'creation_date_time' => null,
        'last_updated_date_time' => null
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
        'id' => 'id',
        'location_id' => 'locationId',
        'channel_name' => 'channelName',
        'channel_location_id' => 'channelLocationId',
        'metadata' => 'metadata',
        'charges' => 'charges',
        'status' => 'status',
        'line_items' => 'lineItems',
        'shipping_info' => 'shippingInfo',
        'packages' => 'packages',
        'creation_date_time' => 'creationDateTime',
        'last_updated_date_time' => 'lastUpdatedDateTime'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'id' => 'setId',
        'location_id' => 'setLocationId',
        'channel_name' => 'setChannelName',
        'channel_location_id' => 'setChannelLocationId',
        'metadata' => 'setMetadata',
        'charges' => 'setCharges',
        'status' => 'setStatus',
        'line_items' => 'setLineItems',
        'shipping_info' => 'setShippingInfo',
        'packages' => 'setPackages',
        'creation_date_time' => 'setCreationDateTime',
        'last_updated_date_time' => 'setLastUpdatedDateTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'id' => 'getId',
        'location_id' => 'getLocationId',
        'channel_name' => 'getChannelName',
        'channel_location_id' => 'getChannelLocationId',
        'metadata' => 'getMetadata',
        'charges' => 'getCharges',
        'status' => 'getStatus',
        'line_items' => 'getLineItems',
        'shipping_info' => 'getShippingInfo',
        'packages' => 'getPackages',
        'creation_date_time' => 'getCreationDateTime',
        'last_updated_date_time' => 'getLastUpdatedDateTime'
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

    const STATUS_ACCEPTED = 'ACCEPTED';
    const STATUS_CONFIRMED = 'CONFIRMED';
    const STATUS_PACKAGE_CREATED = 'PACKAGE_CREATED';
    const STATUS_PICKUP_SLOT_RETRIEVED = 'PICKUP_SLOT_RETRIEVED';
    const STATUS_INVOICE_GENERATED = 'INVOICE_GENERATED';
    const STATUS_SHIPLABEL_GENERATED = 'SHIPLABEL_GENERATED';
    const STATUS_CANCELLED = 'CANCELLED';
    const STATUS_SHIPPED = 'SHIPPED';
    const STATUS_DELIVERED = 'DELIVERED';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues() : array
    {
        return [
            self::STATUS_ACCEPTED,
            self::STATUS_CONFIRMED,
            self::STATUS_PACKAGE_CREATED,
            self::STATUS_PICKUP_SLOT_RETRIEVED,
            self::STATUS_INVOICE_GENERATED,
            self::STATUS_SHIPLABEL_GENERATED,
            self::STATUS_CANCELLED,
            self::STATUS_SHIPPED,
            self::STATUS_DELIVERED,
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['location_id'] = $data['location_id'] ?? null;
        $this->container['channel_name'] = $data['channel_name'] ?? null;
        $this->container['channel_location_id'] = $data['channel_location_id'] ?? null;
        $this->container['metadata'] = $data['metadata'] ?? null;
        $this->container['charges'] = $data['charges'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['line_items'] = $data['line_items'] ?? null;
        $this->container['shipping_info'] = $data['shipping_info'] ?? null;
        $this->container['packages'] = $data['packages'] ?? null;
        $this->container['creation_date_time'] = $data['creation_date_time'] ?? null;
        $this->container['last_updated_date_time'] = $data['last_updated_date_time'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties() : array
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['location_id'] === null) {
            $invalidProperties[] = "'location_id' can't be null";
        }
        if ($this->container['channel_name'] === null) {
            $invalidProperties[] = "'channel_name' can't be null";
        }
        if ($this->container['metadata'] === null) {
            $invalidProperties[] = "'metadata' can't be null";
        }
        if ($this->container['charges'] === null) {
            $invalidProperties[] = "'charges' can't be null";
        }
        if ((count($this->container['charges']) < 1)) {
            $invalidProperties[] = "invalid value for 'charges', number of items must be greater than or equal to 1.";
        }

        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['line_items'] === null) {
            $invalidProperties[] = "'line_items' can't be null";
        }
        if ((count($this->container['line_items']) < 1)) {
            $invalidProperties[] = "invalid value for 'line_items', number of items must be greater than or equal to 1.";
        }

        if ($this->container['shipping_info'] === null) {
            $invalidProperties[] = "'shipping_info' can't be null";
        }
        if (!is_null($this->container['packages']) && (count($this->container['packages']) < 1)) {
            $invalidProperties[] = "invalid value for 'packages', number of items must be greater than or equal to 1.";
        }

        if ($this->container['creation_date_time'] === null) {
            $invalidProperties[] = "'creation_date_time' can't be null";
        }
        if ($this->container['last_updated_date_time'] === null) {
            $invalidProperties[] = "'last_updated_date_time' can't be null";
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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id The shipment's id.
     *
     * @return self
     */
    public function setId($id) : self
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets location_id
     *
     * @return string
     */
    public function getLocationId()
    {
        return $this->container['location_id'];
    }

    /**
     * Sets location_id
     *
     * @param string $location_id The SmartConnect identifier for location to which shipment has been dropped for fulfillment.
     *
     * @return self
     */
    public function setLocationId($location_id) : self
    {
        $this->container['location_id'] = $location_id;

        return $this;
    }

    /**
     * Gets channel_name
     *
     * @return string
     */
    public function getChannelName()
    {
        return $this->container['channel_name'];
    }

    /**
     * Sets channel_name
     *
     * @param string $channel_name The name of marketplace channel from which shipment has been dropped for fulfillment.
     *
     * @return self
     */
    public function setChannelName($channel_name) : self
    {
        $this->container['channel_name'] = $channel_name;

        return $this;
    }

    /**
     * Gets channel_location_id
     *
     * @return string|null
     */
    public function getChannelLocationId()
    {
        return $this->container['channel_location_id'];
    }

    /**
     * Sets channel_location_id
     *
     * @param string|null $channel_location_id The location identifier of Seller's location in marketplace channel to which shipment has been dropped for fulfillment.
     *
     * @return self
     */
    public function setChannelLocationId($channel_location_id) : self
    {
        $this->container['channel_location_id'] = $channel_location_id;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return \MehrIt\AmazonSellingPartner\Model\ExternalFulfillmentShipments\ShipmentMetadata
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param \MehrIt\AmazonSellingPartner\Model\ExternalFulfillmentShipments\ShipmentMetadata $metadata metadata
     *
     * @return self
     */
    public function setMetadata($metadata) : self
    {
        $this->container['metadata'] = $metadata;

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
            throw new \InvalidArgumentException('invalid length for $charges when calling Shipment., number of items must be greater than or equal to 1.');
        }
        $this->container['charges'] = $charges;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status The current status of the shipment.
     *
     * @return self
     */
    public function setStatus($status) : self
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'status', must be one of '%s'",
                    $status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets line_items
     *
     * @return \MehrIt\AmazonSellingPartner\Model\ExternalFulfillmentShipments\ShipmentLineItem[]
     */
    public function getLineItems()
    {
        return $this->container['line_items'];
    }

    /**
     * Sets line_items
     *
     * @param \MehrIt\AmazonSellingPartner\Model\ExternalFulfillmentShipments\ShipmentLineItem[] $line_items The line items in the shipment.
     *
     * @return self
     */
    public function setLineItems($line_items) : self
    {


        if ((count($line_items) < 1)) {
            throw new \InvalidArgumentException('invalid length for $line_items when calling Shipment., number of items must be greater than or equal to 1.');
        }
        $this->container['line_items'] = $line_items;

        return $this;
    }

    /**
     * Gets shipping_info
     *
     * @return \MehrIt\AmazonSellingPartner\Model\ExternalFulfillmentShipments\ShipmentShippingInfo
     */
    public function getShippingInfo()
    {
        return $this->container['shipping_info'];
    }

    /**
     * Sets shipping_info
     *
     * @param \MehrIt\AmazonSellingPartner\Model\ExternalFulfillmentShipments\ShipmentShippingInfo $shipping_info shipping_info
     *
     * @return self
     */
    public function setShippingInfo($shipping_info) : self
    {
        $this->container['shipping_info'] = $shipping_info;

        return $this;
    }

    /**
     * Gets packages
     *
     * @return \MehrIt\AmazonSellingPartner\Model\ExternalFulfillmentShipments\Package[]|null
     */
    public function getPackages()
    {
        return $this->container['packages'];
    }

    /**
     * Sets packages
     *
     * @param \MehrIt\AmazonSellingPartner\Model\ExternalFulfillmentShipments\Package[]|null $packages The list of packages and information about each package that will be used to fulfill this shipment.
     *
     * @return self
     */
    public function setPackages($packages) : self
    {


        if (!is_null($packages) && (count($packages) < 1)) {
            throw new \InvalidArgumentException('invalid length for $packages when calling Shipment., number of items must be greater than or equal to 1.');
        }
        $this->container['packages'] = $packages;

        return $this;
    }

    /**
     * Gets creation_date_time
     *
     * @return string
     */
    public function getCreationDateTime()
    {
        return $this->container['creation_date_time'];
    }

    /**
     * Sets creation_date_time
     *
     * @param string $creation_date_time A date and time in the rfc3339 format.
     *
     * @return self
     */
    public function setCreationDateTime($creation_date_time) : self
    {
        $this->container['creation_date_time'] = $creation_date_time;

        return $this;
    }

    /**
     * Gets last_updated_date_time
     *
     * @return string
     */
    public function getLastUpdatedDateTime()
    {
        return $this->container['last_updated_date_time'];
    }

    /**
     * Sets last_updated_date_time
     *
     * @param string $last_updated_date_time A date and time in the rfc3339 format.
     *
     * @return self
     */
    public function setLastUpdatedDateTime($last_updated_date_time) : self
    {
        $this->container['last_updated_date_time'] = $last_updated_date_time;

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