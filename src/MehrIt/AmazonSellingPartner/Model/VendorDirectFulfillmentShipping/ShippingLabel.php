<?php
/**
 * ShippingLabel
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  MehrIt\AmazonSellingPartner
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Direct Fulfillment Shipping
 *
 * The Selling Partner API for Direct Fulfillment Shipping provides programmatic access to a direct fulfillment vendor's shipping data.
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

namespace MehrIt\AmazonSellingPartner\Model\VendorDirectFulfillmentShipping;

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
class ShippingLabel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'ShippingLabel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'purchase_order_number' => 'string',
        'selling_party' => '\MehrIt\AmazonSellingPartner\Model\VendorDirectFulfillmentShipping\PartyIdentification',
        'ship_from_party' => '\MehrIt\AmazonSellingPartner\Model\VendorDirectFulfillmentShipping\PartyIdentification',
        'label_format' => 'string',
        'label_data' => '\MehrIt\AmazonSellingPartner\Model\VendorDirectFulfillmentShipping\LabelData[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'purchase_order_number' => null,
        'selling_party' => null,
        'ship_from_party' => null,
        'label_format' => null,
        'label_data' => null
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
        'purchase_order_number' => 'purchaseOrderNumber',
        'selling_party' => 'sellingParty',
        'ship_from_party' => 'shipFromParty',
        'label_format' => 'labelFormat',
        'label_data' => 'labelData'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'purchase_order_number' => 'setPurchaseOrderNumber',
        'selling_party' => 'setSellingParty',
        'ship_from_party' => 'setShipFromParty',
        'label_format' => 'setLabelFormat',
        'label_data' => 'setLabelData'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'purchase_order_number' => 'getPurchaseOrderNumber',
        'selling_party' => 'getSellingParty',
        'ship_from_party' => 'getShipFromParty',
        'label_format' => 'getLabelFormat',
        'label_data' => 'getLabelData'
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

    const LABEL_FORMAT_PNG = 'PNG';
    const LABEL_FORMAT_ZPL = 'ZPL';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLabelFormatAllowableValues() : array
    {
        return [
            self::LABEL_FORMAT_PNG,
            self::LABEL_FORMAT_ZPL,
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
        $this->container['purchase_order_number'] = $data['purchase_order_number'] ?? null;
        $this->container['selling_party'] = $data['selling_party'] ?? null;
        $this->container['ship_from_party'] = $data['ship_from_party'] ?? null;
        $this->container['label_format'] = $data['label_format'] ?? null;
        $this->container['label_data'] = $data['label_data'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties() : array
    {
        $invalidProperties = [];

        if ($this->container['purchase_order_number'] === null) {
            $invalidProperties[] = "'purchase_order_number' can't be null";
        }
        if (!preg_match("/^[a-zA-Z0-9]+$/", $this->container['purchase_order_number'])) {
            $invalidProperties[] = "invalid value for 'purchase_order_number', must be conform to the pattern /^[a-zA-Z0-9]+$/.";
        }

        if ($this->container['selling_party'] === null) {
            $invalidProperties[] = "'selling_party' can't be null";
        }
        if ($this->container['ship_from_party'] === null) {
            $invalidProperties[] = "'ship_from_party' can't be null";
        }
        if ($this->container['label_format'] === null) {
            $invalidProperties[] = "'label_format' can't be null";
        }
        $allowedValues = $this->getLabelFormatAllowableValues();
        if (!is_null($this->container['label_format']) && !in_array($this->container['label_format'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'label_format', must be one of '%s'",
                $this->container['label_format'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['label_data'] === null) {
            $invalidProperties[] = "'label_data' can't be null";
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
     * Gets purchase_order_number
     *
     * @return string
     */
    public function getPurchaseOrderNumber()
    {
        return $this->container['purchase_order_number'];
    }

    /**
     * Sets purchase_order_number
     *
     * @param string $purchase_order_number This field will contain the Purchase Order Number for this order.
     *
     * @return self
     */
    public function setPurchaseOrderNumber($purchase_order_number) : self
    {

        if ((!preg_match("/^[a-zA-Z0-9]+$/", $purchase_order_number))) {
            throw new \InvalidArgumentException("invalid value for $purchase_order_number when calling ShippingLabel., must conform to the pattern /^[a-zA-Z0-9]+$/.");
        }

        $this->container['purchase_order_number'] = $purchase_order_number;

        return $this;
    }

    /**
     * Gets selling_party
     *
     * @return \MehrIt\AmazonSellingPartner\Model\VendorDirectFulfillmentShipping\PartyIdentification
     */
    public function getSellingParty()
    {
        return $this->container['selling_party'];
    }

    /**
     * Sets selling_party
     *
     * @param \MehrIt\AmazonSellingPartner\Model\VendorDirectFulfillmentShipping\PartyIdentification $selling_party selling_party
     *
     * @return self
     */
    public function setSellingParty($selling_party) : self
    {
        $this->container['selling_party'] = $selling_party;

        return $this;
    }

    /**
     * Gets ship_from_party
     *
     * @return \MehrIt\AmazonSellingPartner\Model\VendorDirectFulfillmentShipping\PartyIdentification
     */
    public function getShipFromParty()
    {
        return $this->container['ship_from_party'];
    }

    /**
     * Sets ship_from_party
     *
     * @param \MehrIt\AmazonSellingPartner\Model\VendorDirectFulfillmentShipping\PartyIdentification $ship_from_party ship_from_party
     *
     * @return self
     */
    public function setShipFromParty($ship_from_party) : self
    {
        $this->container['ship_from_party'] = $ship_from_party;

        return $this;
    }

    /**
     * Gets label_format
     *
     * @return string
     */
    public function getLabelFormat()
    {
        return $this->container['label_format'];
    }

    /**
     * Sets label_format
     *
     * @param string $label_format Format of the label.
     *
     * @return self
     */
    public function setLabelFormat($label_format) : self
    {
        $allowedValues = $this->getLabelFormatAllowableValues();
        if (!in_array($label_format, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'label_format', must be one of '%s'",
                    $label_format,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['label_format'] = $label_format;

        return $this;
    }

    /**
     * Gets label_data
     *
     * @return \MehrIt\AmazonSellingPartner\Model\VendorDirectFulfillmentShipping\LabelData[]
     */
    public function getLabelData()
    {
        return $this->container['label_data'];
    }

    /**
     * Sets label_data
     *
     * @param \MehrIt\AmazonSellingPartner\Model\VendorDirectFulfillmentShipping\LabelData[] $label_data Provides the details of the packages in this shipment.
     *
     * @return self
     */
    public function setLabelData($label_data) : self
    {
        $this->container['label_data'] = $label_data;

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
