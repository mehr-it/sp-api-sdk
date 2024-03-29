<?php
/**
 * PurchaseShipmentRequest
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  MehrIt\AmazonSellingPartner
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Shipping
 *
 * Provides programmatic access to Amazon Shipping APIs.   **Note:** If you are new to the Amazon Shipping API, refer to the latest version of <a href=\"https://developer-docs.amazon.com/amazon-shipping/docs/shipping-api-v2-reference\">Amazon Shipping API (v2)</a> on the <a href=\"https://developer-docs.amazon.com/amazon-shipping/\">Amazon Shipping Developer Documentation</a> site.
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

namespace MehrIt\AmazonSellingPartner\Model\Shipping;

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
class PurchaseShipmentRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'PurchaseShipmentRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'client_reference_id' => 'string',
        'ship_to' => '\MehrIt\AmazonSellingPartner\Model\Shipping\Address',
        'ship_from' => '\MehrIt\AmazonSellingPartner\Model\Shipping\Address',
        'ship_date' => '\DateTime',
        'service_type' => '\MehrIt\AmazonSellingPartner\Model\Shipping\ServiceType',
        'containers' => '\MehrIt\AmazonSellingPartner\Model\Shipping\Container[]',
        'label_specification' => '\MehrIt\AmazonSellingPartner\Model\Shipping\LabelSpecification'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'client_reference_id' => null,
        'ship_to' => null,
        'ship_from' => null,
        'ship_date' => 'date-time',
        'service_type' => null,
        'containers' => null,
        'label_specification' => null
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
        'client_reference_id' => 'clientReferenceId',
        'ship_to' => 'shipTo',
        'ship_from' => 'shipFrom',
        'ship_date' => 'shipDate',
        'service_type' => 'serviceType',
        'containers' => 'containers',
        'label_specification' => 'labelSpecification'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'client_reference_id' => 'setClientReferenceId',
        'ship_to' => 'setShipTo',
        'ship_from' => 'setShipFrom',
        'ship_date' => 'setShipDate',
        'service_type' => 'setServiceType',
        'containers' => 'setContainers',
        'label_specification' => 'setLabelSpecification'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'client_reference_id' => 'getClientReferenceId',
        'ship_to' => 'getShipTo',
        'ship_from' => 'getShipFrom',
        'ship_date' => 'getShipDate',
        'service_type' => 'getServiceType',
        'containers' => 'getContainers',
        'label_specification' => 'getLabelSpecification'
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
        $this->container['client_reference_id'] = $data['client_reference_id'] ?? null;
        $this->container['ship_to'] = $data['ship_to'] ?? null;
        $this->container['ship_from'] = $data['ship_from'] ?? null;
        $this->container['ship_date'] = $data['ship_date'] ?? null;
        $this->container['service_type'] = $data['service_type'] ?? null;
        $this->container['containers'] = $data['containers'] ?? null;
        $this->container['label_specification'] = $data['label_specification'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties() : array
    {
        $invalidProperties = [];

        if ($this->container['client_reference_id'] === null) {
            $invalidProperties[] = "'client_reference_id' can't be null";
        }
        if ((mb_strlen($this->container['client_reference_id']) > 40)) {
            $invalidProperties[] = "invalid value for 'client_reference_id', the character length must be smaller than or equal to 40.";
        }

        if ($this->container['ship_to'] === null) {
            $invalidProperties[] = "'ship_to' can't be null";
        }
        if ($this->container['ship_from'] === null) {
            $invalidProperties[] = "'ship_from' can't be null";
        }
        if ($this->container['service_type'] === null) {
            $invalidProperties[] = "'service_type' can't be null";
        }
        if ($this->container['containers'] === null) {
            $invalidProperties[] = "'containers' can't be null";
        }
        if ($this->container['label_specification'] === null) {
            $invalidProperties[] = "'label_specification' can't be null";
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
     * Gets client_reference_id
     *
     * @return string
     */
    public function getClientReferenceId()
    {
        return $this->container['client_reference_id'];
    }

    /**
     * Sets client_reference_id
     *
     * @param string $client_reference_id Client reference id.
     *
     * @return self
     */
    public function setClientReferenceId($client_reference_id) : self
    {
        if ((mb_strlen($client_reference_id) > 40)) {
            throw new \InvalidArgumentException('invalid length for $client_reference_id when calling PurchaseShipmentRequest., must be smaller than or equal to 40.');
        }

        $this->container['client_reference_id'] = $client_reference_id;

        return $this;
    }

    /**
     * Gets ship_to
     *
     * @return \MehrIt\AmazonSellingPartner\Model\Shipping\Address
     */
    public function getShipTo()
    {
        return $this->container['ship_to'];
    }

    /**
     * Sets ship_to
     *
     * @param \MehrIt\AmazonSellingPartner\Model\Shipping\Address $ship_to ship_to
     *
     * @return self
     */
    public function setShipTo($ship_to) : self
    {
        $this->container['ship_to'] = $ship_to;

        return $this;
    }

    /**
     * Gets ship_from
     *
     * @return \MehrIt\AmazonSellingPartner\Model\Shipping\Address
     */
    public function getShipFrom()
    {
        return $this->container['ship_from'];
    }

    /**
     * Sets ship_from
     *
     * @param \MehrIt\AmazonSellingPartner\Model\Shipping\Address $ship_from ship_from
     *
     * @return self
     */
    public function setShipFrom($ship_from) : self
    {
        $this->container['ship_from'] = $ship_from;

        return $this;
    }

    /**
     * Gets ship_date
     *
     * @return \DateTime|null
     */
    public function getShipDate()
    {
        return $this->container['ship_date'];
    }

    /**
     * Sets ship_date
     *
     * @param \DateTime|null $ship_date The start date and time. This defaults to the current date and time.
     *
     * @return self
     */
    public function setShipDate($ship_date) : self
    {
        $this->container['ship_date'] = $ship_date;

        return $this;
    }

    /**
     * Gets service_type
     *
     * @return \MehrIt\AmazonSellingPartner\Model\Shipping\ServiceType
     */
    public function getServiceType()
    {
        return $this->container['service_type'];
    }

    /**
     * Sets service_type
     *
     * @param \MehrIt\AmazonSellingPartner\Model\Shipping\ServiceType $service_type service_type
     *
     * @return self
     */
    public function setServiceType($service_type) : self
    {
        $this->container['service_type'] = $service_type;

        return $this;
    }

    /**
     * Gets containers
     *
     * @return \MehrIt\AmazonSellingPartner\Model\Shipping\Container[]
     */
    public function getContainers()
    {
        return $this->container['containers'];
    }

    /**
     * Sets containers
     *
     * @param \MehrIt\AmazonSellingPartner\Model\Shipping\Container[] $containers A list of container.
     *
     * @return self
     */
    public function setContainers($containers) : self
    {
        $this->container['containers'] = $containers;

        return $this;
    }

    /**
     * Gets label_specification
     *
     * @return \MehrIt\AmazonSellingPartner\Model\Shipping\LabelSpecification
     */
    public function getLabelSpecification()
    {
        return $this->container['label_specification'];
    }

    /**
     * Sets label_specification
     *
     * @param \MehrIt\AmazonSellingPartner\Model\Shipping\LabelSpecification $label_specification label_specification
     *
     * @return self
     */
    public function setLabelSpecification($label_specification) : self
    {
        $this->container['label_specification'] = $label_specification;

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
