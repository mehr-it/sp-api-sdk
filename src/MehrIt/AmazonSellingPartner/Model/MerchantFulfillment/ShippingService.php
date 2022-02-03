<?php
/**
 * ShippingService
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  MehrIt\AmazonSellingPartner
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Merchant Fulfillment
 *
 * The Selling Partner API for Merchant Fulfillment helps you build applications that let sellers purchase shipping for non-Prime and Prime orders using Amazon’s Buy Shipping Services.
 *
 * The version of the OpenAPI document: v0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace MehrIt\AmazonSellingPartner\Model\MerchantFulfillment;

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
class ShippingService implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'ShippingService';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'shipping_service_name' => 'string',
        'carrier_name' => 'string',
        'shipping_service_id' => 'string',
        'shipping_service_offer_id' => 'string',
        'ship_date' => '\DateTime',
        'earliest_estimated_delivery_date' => '\DateTime',
        'latest_estimated_delivery_date' => '\DateTime',
        'rate' => '\MehrIt\AmazonSellingPartner\Model\MerchantFulfillment\CurrencyAmount',
        'shipping_service_options' => '\MehrIt\AmazonSellingPartner\Model\MerchantFulfillment\ShippingServiceOptions',
        'available_shipping_service_options' => '\MehrIt\AmazonSellingPartner\Model\MerchantFulfillment\AvailableShippingServiceOptions',
        'available_label_formats' => '\MehrIt\AmazonSellingPartner\Model\MerchantFulfillment\LabelFormat[]',
        'available_format_options_for_label' => '\MehrIt\AmazonSellingPartner\Model\MerchantFulfillment\LabelFormatOption[]',
        'requires_additional_seller_inputs' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'shipping_service_name' => null,
        'carrier_name' => null,
        'shipping_service_id' => null,
        'shipping_service_offer_id' => null,
        'ship_date' => 'date-time',
        'earliest_estimated_delivery_date' => 'date-time',
        'latest_estimated_delivery_date' => 'date-time',
        'rate' => null,
        'shipping_service_options' => null,
        'available_shipping_service_options' => null,
        'available_label_formats' => null,
        'available_format_options_for_label' => null,
        'requires_additional_seller_inputs' => null
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
        'shipping_service_name' => 'ShippingServiceName',
        'carrier_name' => 'CarrierName',
        'shipping_service_id' => 'ShippingServiceId',
        'shipping_service_offer_id' => 'ShippingServiceOfferId',
        'ship_date' => 'ShipDate',
        'earliest_estimated_delivery_date' => 'EarliestEstimatedDeliveryDate',
        'latest_estimated_delivery_date' => 'LatestEstimatedDeliveryDate',
        'rate' => 'Rate',
        'shipping_service_options' => 'ShippingServiceOptions',
        'available_shipping_service_options' => 'AvailableShippingServiceOptions',
        'available_label_formats' => 'AvailableLabelFormats',
        'available_format_options_for_label' => 'AvailableFormatOptionsForLabel',
        'requires_additional_seller_inputs' => 'RequiresAdditionalSellerInputs'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'shipping_service_name' => 'setShippingServiceName',
        'carrier_name' => 'setCarrierName',
        'shipping_service_id' => 'setShippingServiceId',
        'shipping_service_offer_id' => 'setShippingServiceOfferId',
        'ship_date' => 'setShipDate',
        'earliest_estimated_delivery_date' => 'setEarliestEstimatedDeliveryDate',
        'latest_estimated_delivery_date' => 'setLatestEstimatedDeliveryDate',
        'rate' => 'setRate',
        'shipping_service_options' => 'setShippingServiceOptions',
        'available_shipping_service_options' => 'setAvailableShippingServiceOptions',
        'available_label_formats' => 'setAvailableLabelFormats',
        'available_format_options_for_label' => 'setAvailableFormatOptionsForLabel',
        'requires_additional_seller_inputs' => 'setRequiresAdditionalSellerInputs'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'shipping_service_name' => 'getShippingServiceName',
        'carrier_name' => 'getCarrierName',
        'shipping_service_id' => 'getShippingServiceId',
        'shipping_service_offer_id' => 'getShippingServiceOfferId',
        'ship_date' => 'getShipDate',
        'earliest_estimated_delivery_date' => 'getEarliestEstimatedDeliveryDate',
        'latest_estimated_delivery_date' => 'getLatestEstimatedDeliveryDate',
        'rate' => 'getRate',
        'shipping_service_options' => 'getShippingServiceOptions',
        'available_shipping_service_options' => 'getAvailableShippingServiceOptions',
        'available_label_formats' => 'getAvailableLabelFormats',
        'available_format_options_for_label' => 'getAvailableFormatOptionsForLabel',
        'requires_additional_seller_inputs' => 'getRequiresAdditionalSellerInputs'
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
        $this->container['shipping_service_name'] = $data['shipping_service_name'] ?? null;
        $this->container['carrier_name'] = $data['carrier_name'] ?? null;
        $this->container['shipping_service_id'] = $data['shipping_service_id'] ?? null;
        $this->container['shipping_service_offer_id'] = $data['shipping_service_offer_id'] ?? null;
        $this->container['ship_date'] = $data['ship_date'] ?? null;
        $this->container['earliest_estimated_delivery_date'] = $data['earliest_estimated_delivery_date'] ?? null;
        $this->container['latest_estimated_delivery_date'] = $data['latest_estimated_delivery_date'] ?? null;
        $this->container['rate'] = $data['rate'] ?? null;
        $this->container['shipping_service_options'] = $data['shipping_service_options'] ?? null;
        $this->container['available_shipping_service_options'] = $data['available_shipping_service_options'] ?? null;
        $this->container['available_label_formats'] = $data['available_label_formats'] ?? null;
        $this->container['available_format_options_for_label'] = $data['available_format_options_for_label'] ?? null;
        $this->container['requires_additional_seller_inputs'] = $data['requires_additional_seller_inputs'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties() : array
    {
        $invalidProperties = [];

        if ($this->container['shipping_service_name'] === null) {
            $invalidProperties[] = "'shipping_service_name' can't be null";
        }
        if ($this->container['carrier_name'] === null) {
            $invalidProperties[] = "'carrier_name' can't be null";
        }
        if ($this->container['shipping_service_id'] === null) {
            $invalidProperties[] = "'shipping_service_id' can't be null";
        }
        if ($this->container['shipping_service_offer_id'] === null) {
            $invalidProperties[] = "'shipping_service_offer_id' can't be null";
        }
        if ($this->container['ship_date'] === null) {
            $invalidProperties[] = "'ship_date' can't be null";
        }
        if ($this->container['rate'] === null) {
            $invalidProperties[] = "'rate' can't be null";
        }
        if ($this->container['shipping_service_options'] === null) {
            $invalidProperties[] = "'shipping_service_options' can't be null";
        }
        if ($this->container['requires_additional_seller_inputs'] === null) {
            $invalidProperties[] = "'requires_additional_seller_inputs' can't be null";
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
     * Gets shipping_service_name
     *
     * @return string
     */
    public function getShippingServiceName()
    {
        return $this->container['shipping_service_name'];
    }

    /**
     * Sets shipping_service_name
     *
     * @param string $shipping_service_name A plain text representation of a carrier's shipping service. For example, \"UPS Ground\" or \"FedEx Standard Overnight\".
     *
     * @return self
     */
    public function setShippingServiceName($shipping_service_name) : self
    {
        $this->container['shipping_service_name'] = $shipping_service_name;

        return $this;
    }

    /**
     * Gets carrier_name
     *
     * @return string
     */
    public function getCarrierName()
    {
        return $this->container['carrier_name'];
    }

    /**
     * Sets carrier_name
     *
     * @param string $carrier_name The name of the carrier.
     *
     * @return self
     */
    public function setCarrierName($carrier_name) : self
    {
        $this->container['carrier_name'] = $carrier_name;

        return $this;
    }

    /**
     * Gets shipping_service_id
     *
     * @return string
     */
    public function getShippingServiceId()
    {
        return $this->container['shipping_service_id'];
    }

    /**
     * Sets shipping_service_id
     *
     * @param string $shipping_service_id An Amazon-defined shipping service identifier.
     *
     * @return self
     */
    public function setShippingServiceId($shipping_service_id) : self
    {
        $this->container['shipping_service_id'] = $shipping_service_id;

        return $this;
    }

    /**
     * Gets shipping_service_offer_id
     *
     * @return string
     */
    public function getShippingServiceOfferId()
    {
        return $this->container['shipping_service_offer_id'];
    }

    /**
     * Sets shipping_service_offer_id
     *
     * @param string $shipping_service_offer_id An Amazon-defined shipping service offer identifier.
     *
     * @return self
     */
    public function setShippingServiceOfferId($shipping_service_offer_id) : self
    {
        $this->container['shipping_service_offer_id'] = $shipping_service_offer_id;

        return $this;
    }

    /**
     * Gets ship_date
     *
     * @return \DateTime
     */
    public function getShipDate()
    {
        return $this->container['ship_date'];
    }

    /**
     * Sets ship_date
     *
     * @param \DateTime $ship_date ship_date
     *
     * @return self
     */
    public function setShipDate($ship_date) : self
    {
        $this->container['ship_date'] = $ship_date;

        return $this;
    }

    /**
     * Gets earliest_estimated_delivery_date
     *
     * @return \DateTime|null
     */
    public function getEarliestEstimatedDeliveryDate()
    {
        return $this->container['earliest_estimated_delivery_date'];
    }

    /**
     * Sets earliest_estimated_delivery_date
     *
     * @param \DateTime|null $earliest_estimated_delivery_date earliest_estimated_delivery_date
     *
     * @return self
     */
    public function setEarliestEstimatedDeliveryDate($earliest_estimated_delivery_date) : self
    {
        $this->container['earliest_estimated_delivery_date'] = $earliest_estimated_delivery_date;

        return $this;
    }

    /**
     * Gets latest_estimated_delivery_date
     *
     * @return \DateTime|null
     */
    public function getLatestEstimatedDeliveryDate()
    {
        return $this->container['latest_estimated_delivery_date'];
    }

    /**
     * Sets latest_estimated_delivery_date
     *
     * @param \DateTime|null $latest_estimated_delivery_date latest_estimated_delivery_date
     *
     * @return self
     */
    public function setLatestEstimatedDeliveryDate($latest_estimated_delivery_date) : self
    {
        $this->container['latest_estimated_delivery_date'] = $latest_estimated_delivery_date;

        return $this;
    }

    /**
     * Gets rate
     *
     * @return \MehrIt\AmazonSellingPartner\Model\MerchantFulfillment\CurrencyAmount
     */
    public function getRate()
    {
        return $this->container['rate'];
    }

    /**
     * Sets rate
     *
     * @param \MehrIt\AmazonSellingPartner\Model\MerchantFulfillment\CurrencyAmount $rate rate
     *
     * @return self
     */
    public function setRate($rate) : self
    {
        $this->container['rate'] = $rate;

        return $this;
    }

    /**
     * Gets shipping_service_options
     *
     * @return \MehrIt\AmazonSellingPartner\Model\MerchantFulfillment\ShippingServiceOptions
     */
    public function getShippingServiceOptions()
    {
        return $this->container['shipping_service_options'];
    }

    /**
     * Sets shipping_service_options
     *
     * @param \MehrIt\AmazonSellingPartner\Model\MerchantFulfillment\ShippingServiceOptions $shipping_service_options shipping_service_options
     *
     * @return self
     */
    public function setShippingServiceOptions($shipping_service_options) : self
    {
        $this->container['shipping_service_options'] = $shipping_service_options;

        return $this;
    }

    /**
     * Gets available_shipping_service_options
     *
     * @return \MehrIt\AmazonSellingPartner\Model\MerchantFulfillment\AvailableShippingServiceOptions|null
     */
    public function getAvailableShippingServiceOptions()
    {
        return $this->container['available_shipping_service_options'];
    }

    /**
     * Sets available_shipping_service_options
     *
     * @param \MehrIt\AmazonSellingPartner\Model\MerchantFulfillment\AvailableShippingServiceOptions|null $available_shipping_service_options available_shipping_service_options
     *
     * @return self
     */
    public function setAvailableShippingServiceOptions($available_shipping_service_options) : self
    {
        $this->container['available_shipping_service_options'] = $available_shipping_service_options;

        return $this;
    }

    /**
     * Gets available_label_formats
     *
     * @return \MehrIt\AmazonSellingPartner\Model\MerchantFulfillment\LabelFormat[]|null
     */
    public function getAvailableLabelFormats()
    {
        return $this->container['available_label_formats'];
    }

    /**
     * Sets available_label_formats
     *
     * @param \MehrIt\AmazonSellingPartner\Model\MerchantFulfillment\LabelFormat[]|null $available_label_formats List of label formats.
     *
     * @return self
     */
    public function setAvailableLabelFormats($available_label_formats) : self
    {
        $this->container['available_label_formats'] = $available_label_formats;

        return $this;
    }

    /**
     * Gets available_format_options_for_label
     *
     * @return \MehrIt\AmazonSellingPartner\Model\MerchantFulfillment\LabelFormatOption[]|null
     */
    public function getAvailableFormatOptionsForLabel()
    {
        return $this->container['available_format_options_for_label'];
    }

    /**
     * Sets available_format_options_for_label
     *
     * @param \MehrIt\AmazonSellingPartner\Model\MerchantFulfillment\LabelFormatOption[]|null $available_format_options_for_label The available label formats.
     *
     * @return self
     */
    public function setAvailableFormatOptionsForLabel($available_format_options_for_label) : self
    {
        $this->container['available_format_options_for_label'] = $available_format_options_for_label;

        return $this;
    }

    /**
     * Gets requires_additional_seller_inputs
     *
     * @return bool
     */
    public function getRequiresAdditionalSellerInputs()
    {
        return $this->container['requires_additional_seller_inputs'];
    }

    /**
     * Sets requires_additional_seller_inputs
     *
     * @param bool $requires_additional_seller_inputs When true, additional seller inputs are required.
     *
     * @return self
     */
    public function setRequiresAdditionalSellerInputs($requires_additional_seller_inputs) : self
    {
        $this->container['requires_additional_seller_inputs'] = $requires_additional_seller_inputs;

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
