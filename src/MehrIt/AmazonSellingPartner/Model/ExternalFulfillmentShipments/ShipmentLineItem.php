<?php
/**
 * ShipmentLineItem
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
class ShipmentLineItem implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'ShipmentLineItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'id' => 'string',
        'merchant_sku' => 'string',
        'number_of_units' => 'int',
        'serial_number_required' => 'bool',
        'serial_numbers' => 'string[]',
        'hazmat_labels_required' => 'bool',
        'hazmat_labels' => 'string[]',
        'gift_attributes' => '\MehrIt\AmazonSellingPartner\Model\ExternalFulfillmentShipments\ShipmentLineItemGiftAttributes',
        'charges' => 'object[]',
        'cancellations' => '\MehrIt\AmazonSellingPartner\Model\ExternalFulfillmentShipments\ShipmentLineItemCancellations[]'
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
        'merchant_sku' => null,
        'number_of_units' => 'int32',
        'serial_number_required' => null,
        'serial_numbers' => null,
        'hazmat_labels_required' => null,
        'hazmat_labels' => null,
        'gift_attributes' => null,
        'charges' => null,
        'cancellations' => null
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
        'merchant_sku' => 'merchantSku',
        'number_of_units' => 'numberOfUnits',
        'serial_number_required' => 'serialNumberRequired',
        'serial_numbers' => 'serialNumbers',
        'hazmat_labels_required' => 'hazmatLabelsRequired',
        'hazmat_labels' => 'hazmatLabels',
        'gift_attributes' => 'giftAttributes',
        'charges' => 'charges',
        'cancellations' => 'cancellations'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'id' => 'setId',
        'merchant_sku' => 'setMerchantSku',
        'number_of_units' => 'setNumberOfUnits',
        'serial_number_required' => 'setSerialNumberRequired',
        'serial_numbers' => 'setSerialNumbers',
        'hazmat_labels_required' => 'setHazmatLabelsRequired',
        'hazmat_labels' => 'setHazmatLabels',
        'gift_attributes' => 'setGiftAttributes',
        'charges' => 'setCharges',
        'cancellations' => 'setCancellations'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'id' => 'getId',
        'merchant_sku' => 'getMerchantSku',
        'number_of_units' => 'getNumberOfUnits',
        'serial_number_required' => 'getSerialNumberRequired',
        'serial_numbers' => 'getSerialNumbers',
        'hazmat_labels_required' => 'getHazmatLabelsRequired',
        'hazmat_labels' => 'getHazmatLabels',
        'gift_attributes' => 'getGiftAttributes',
        'charges' => 'getCharges',
        'cancellations' => 'getCancellations'
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['merchant_sku'] = $data['merchant_sku'] ?? null;
        $this->container['number_of_units'] = $data['number_of_units'] ?? null;
        $this->container['serial_number_required'] = $data['serial_number_required'] ?? null;
        $this->container['serial_numbers'] = $data['serial_numbers'] ?? null;
        $this->container['hazmat_labels_required'] = $data['hazmat_labels_required'] ?? null;
        $this->container['hazmat_labels'] = $data['hazmat_labels'] ?? null;
        $this->container['gift_attributes'] = $data['gift_attributes'] ?? null;
        $this->container['charges'] = $data['charges'] ?? null;
        $this->container['cancellations'] = $data['cancellations'] ?? null;
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
        if ($this->container['merchant_sku'] === null) {
            $invalidProperties[] = "'merchant_sku' can't be null";
        }
        if ($this->container['number_of_units'] === null) {
            $invalidProperties[] = "'number_of_units' can't be null";
        }
        if (($this->container['number_of_units'] < 1)) {
            $invalidProperties[] = "invalid value for 'number_of_units', must be bigger than or equal to 1.";
        }

        if ($this->container['serial_number_required'] === null) {
            $invalidProperties[] = "'serial_number_required' can't be null";
        }
        if (!is_null($this->container['serial_numbers']) && (count($this->container['serial_numbers']) < 0)) {
            $invalidProperties[] = "invalid value for 'serial_numbers', number of items must be greater than or equal to 0.";
        }

        if ($this->container['hazmat_labels_required'] === null) {
            $invalidProperties[] = "'hazmat_labels_required' can't be null";
        }
        if (!is_null($this->container['hazmat_labels']) && (count($this->container['hazmat_labels']) < 0)) {
            $invalidProperties[] = "invalid value for 'hazmat_labels', number of items must be greater than or equal to 0.";
        }

        if ($this->container['charges'] === null) {
            $invalidProperties[] = "'charges' can't be null";
        }
        if ((count($this->container['charges']) < 1)) {
            $invalidProperties[] = "invalid value for 'charges', number of items must be greater than or equal to 1.";
        }

        if (!is_null($this->container['cancellations']) && (count($this->container['cancellations']) < 0)) {
            $invalidProperties[] = "invalid value for 'cancellations', number of items must be greater than or equal to 0.";
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
     * @param string $id An identifier for a shipment's line item. This identifier is guaranteed to be unique within the scope of its containing shipment.
     *
     * @return self
     */
    public function setId($id) : self
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets merchant_sku
     *
     * @return string
     */
    public function getMerchantSku()
    {
        return $this->container['merchant_sku'];
    }

    /**
     * Sets merchant_sku
     *
     * @param string $merchant_sku The seller SKU of a product (catalog item). Unique number assigned by the seller when listing an item.
     *
     * @return self
     */
    public function setMerchantSku($merchant_sku) : self
    {
        $this->container['merchant_sku'] = $merchant_sku;

        return $this;
    }

    /**
     * Gets number_of_units
     *
     * @return int
     */
    public function getNumberOfUnits()
    {
        return $this->container['number_of_units'];
    }

    /**
     * Sets number_of_units
     *
     * @param int $number_of_units The number of items of the SKU of this line item.
     *
     * @return self
     */
    public function setNumberOfUnits($number_of_units) : self
    {

        if (($number_of_units < 1)) {
            throw new \InvalidArgumentException('invalid value for $number_of_units when calling ShipmentLineItem., must be bigger than or equal to 1.');
        }

        $this->container['number_of_units'] = $number_of_units;

        return $this;
    }

    /**
     * Gets serial_number_required
     *
     * @return bool
     */
    public function getSerialNumberRequired()
    {
        return $this->container['serial_number_required'];
    }

    /**
     * Sets serial_number_required
     *
     * @param bool $serial_number_required Indicates if serial numbers need to be provided for this line item.
     *
     * @return self
     */
    public function setSerialNumberRequired($serial_number_required) : self
    {
        $this->container['serial_number_required'] = $serial_number_required;

        return $this;
    }

    /**
     * Gets serial_numbers
     *
     * @return string[]|null
     */
    public function getSerialNumbers()
    {
        return $this->container['serial_numbers'];
    }

    /**
     * Sets serial_numbers
     *
     * @param string[]|null $serial_numbers The serial number(s) for each item in this line item.
     *
     * @return self
     */
    public function setSerialNumbers($serial_numbers) : self
    {


        if (!is_null($serial_numbers) && (count($serial_numbers) < 0)) {
            throw new \InvalidArgumentException('invalid length for $serial_numbers when calling ShipmentLineItem., number of items must be greater than or equal to 0.');
        }
        $this->container['serial_numbers'] = $serial_numbers;

        return $this;
    }

    /**
     * Gets hazmat_labels_required
     *
     * @return bool
     */
    public function getHazmatLabelsRequired()
    {
        return $this->container['hazmat_labels_required'];
    }

    /**
     * Sets hazmat_labels_required
     *
     * @param bool $hazmat_labels_required Indicatets if hazardous material labels need to be applied on packages containing this line item or not.
     *
     * @return self
     */
    public function setHazmatLabelsRequired($hazmat_labels_required) : self
    {
        $this->container['hazmat_labels_required'] = $hazmat_labels_required;

        return $this;
    }

    /**
     * Gets hazmat_labels
     *
     * @return string[]|null
     */
    public function getHazmatLabels()
    {
        return $this->container['hazmat_labels'];
    }

    /**
     * Sets hazmat_labels
     *
     * @param string[]|null $hazmat_labels A list of Hazmat label identifiers that are to be applied on the packages for this line item.
     *
     * @return self
     */
    public function setHazmatLabels($hazmat_labels) : self
    {


        if (!is_null($hazmat_labels) && (count($hazmat_labels) < 0)) {
            throw new \InvalidArgumentException('invalid length for $hazmat_labels when calling ShipmentLineItem., number of items must be greater than or equal to 0.');
        }
        $this->container['hazmat_labels'] = $hazmat_labels;

        return $this;
    }

    /**
     * Gets gift_attributes
     *
     * @return \MehrIt\AmazonSellingPartner\Model\ExternalFulfillmentShipments\ShipmentLineItemGiftAttributes|null
     */
    public function getGiftAttributes()
    {
        return $this->container['gift_attributes'];
    }

    /**
     * Sets gift_attributes
     *
     * @param \MehrIt\AmazonSellingPartner\Model\ExternalFulfillmentShipments\ShipmentLineItemGiftAttributes|null $gift_attributes gift_attributes
     *
     * @return self
     */
    public function setGiftAttributes($gift_attributes) : self
    {
        $this->container['gift_attributes'] = $gift_attributes;

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
            throw new \InvalidArgumentException('invalid length for $charges when calling ShipmentLineItem., number of items must be greater than or equal to 1.');
        }
        $this->container['charges'] = $charges;

        return $this;
    }

    /**
     * Gets cancellations
     *
     * @return \MehrIt\AmazonSellingPartner\Model\ExternalFulfillmentShipments\ShipmentLineItemCancellations[]|null
     */
    public function getCancellations()
    {
        return $this->container['cancellations'];
    }

    /**
     * Sets cancellations
     *
     * @param \MehrIt\AmazonSellingPartner\Model\ExternalFulfillmentShipments\ShipmentLineItemCancellations[]|null $cancellations A list of cancellations for the given line item. This allows for partial cancellation of an shipment's line item. Supported CancellationType:  * **SELLER_REJECTED:** Cancellation initiated by seller.  * **MARKETPLACE_CANCELLATION:** Cancellation initiated by marketplace.  * **SYSTEM_CANCELLED:** Cancellation initiated by Yojaka. No further action is needed.  **NOTE:** Currently, Amazon Yojaka does not support partial cancellation of an shipment or its line items. This list will contain a single value with all the cancellation details.
     *
     * @return self
     */
    public function setCancellations($cancellations) : self
    {


        if (!is_null($cancellations) && (count($cancellations) < 0)) {
            throw new \InvalidArgumentException('invalid length for $cancellations when calling ShipmentLineItem., number of items must be greater than or equal to 0.');
        }
        $this->container['cancellations'] = $cancellations;

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
