<?php
/**
 * RemovalShipmentItem
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  MehrIt\AmazonSellingPartner
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Finances
 *
 * The Selling Partner API for Finances helps you obtain financial information relevant to a seller's business. You can obtain financial events for a given order, financial event group, or date range without having to wait until a statement period closes. You can also obtain financial event groups for a given date range.
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

namespace MehrIt\AmazonSellingPartner\Model\Finances;

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
class RemovalShipmentItem implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'RemovalShipmentItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'removal_shipment_item_id' => 'string',
        'tax_collection_model' => 'string',
        'fulfillment_network_sku' => 'string',
        'quantity' => 'int',
        'revenue' => '\MehrIt\AmazonSellingPartner\Model\Finances\Currency',
        'fee_amount' => '\MehrIt\AmazonSellingPartner\Model\Finances\Currency',
        'tax_amount' => '\MehrIt\AmazonSellingPartner\Model\Finances\Currency',
        'tax_withheld' => '\MehrIt\AmazonSellingPartner\Model\Finances\Currency'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'removal_shipment_item_id' => null,
        'tax_collection_model' => null,
        'fulfillment_network_sku' => null,
        'quantity' => 'int32',
        'revenue' => null,
        'fee_amount' => null,
        'tax_amount' => null,
        'tax_withheld' => null
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
        'removal_shipment_item_id' => 'RemovalShipmentItemId',
        'tax_collection_model' => 'TaxCollectionModel',
        'fulfillment_network_sku' => 'FulfillmentNetworkSKU',
        'quantity' => 'Quantity',
        'revenue' => 'Revenue',
        'fee_amount' => 'FeeAmount',
        'tax_amount' => 'TaxAmount',
        'tax_withheld' => 'TaxWithheld'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'removal_shipment_item_id' => 'setRemovalShipmentItemId',
        'tax_collection_model' => 'setTaxCollectionModel',
        'fulfillment_network_sku' => 'setFulfillmentNetworkSku',
        'quantity' => 'setQuantity',
        'revenue' => 'setRevenue',
        'fee_amount' => 'setFeeAmount',
        'tax_amount' => 'setTaxAmount',
        'tax_withheld' => 'setTaxWithheld'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'removal_shipment_item_id' => 'getRemovalShipmentItemId',
        'tax_collection_model' => 'getTaxCollectionModel',
        'fulfillment_network_sku' => 'getFulfillmentNetworkSku',
        'quantity' => 'getQuantity',
        'revenue' => 'getRevenue',
        'fee_amount' => 'getFeeAmount',
        'tax_amount' => 'getTaxAmount',
        'tax_withheld' => 'getTaxWithheld'
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
        $this->container['removal_shipment_item_id'] = $data['removal_shipment_item_id'] ?? null;
        $this->container['tax_collection_model'] = $data['tax_collection_model'] ?? null;
        $this->container['fulfillment_network_sku'] = $data['fulfillment_network_sku'] ?? null;
        $this->container['quantity'] = $data['quantity'] ?? null;
        $this->container['revenue'] = $data['revenue'] ?? null;
        $this->container['fee_amount'] = $data['fee_amount'] ?? null;
        $this->container['tax_amount'] = $data['tax_amount'] ?? null;
        $this->container['tax_withheld'] = $data['tax_withheld'] ?? null;
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
     * Gets removal_shipment_item_id
     *
     * @return string|null
     */
    public function getRemovalShipmentItemId()
    {
        return $this->container['removal_shipment_item_id'];
    }

    /**
     * Sets removal_shipment_item_id
     *
     * @param string|null $removal_shipment_item_id An identifier for an item in a removal shipment.
     *
     * @return self
     */
    public function setRemovalShipmentItemId($removal_shipment_item_id) : self
    {
        $this->container['removal_shipment_item_id'] = $removal_shipment_item_id;

        return $this;
    }

    /**
     * Gets tax_collection_model
     *
     * @return string|null
     */
    public function getTaxCollectionModel()
    {
        return $this->container['tax_collection_model'];
    }

    /**
     * Sets tax_collection_model
     *
     * @param string|null $tax_collection_model The tax collection model applied to the item.  Possible values:  * MarketplaceFacilitator - Tax is withheld and remitted to the taxing authority by Amazon on behalf of the seller.  * Standard - Tax is paid to the seller and not remitted to the taxing authority by Amazon.
     *
     * @return self
     */
    public function setTaxCollectionModel($tax_collection_model) : self
    {
        $this->container['tax_collection_model'] = $tax_collection_model;

        return $this;
    }

    /**
     * Gets fulfillment_network_sku
     *
     * @return string|null
     */
    public function getFulfillmentNetworkSku()
    {
        return $this->container['fulfillment_network_sku'];
    }

    /**
     * Sets fulfillment_network_sku
     *
     * @param string|null $fulfillment_network_sku The Amazon fulfillment network SKU for the item.
     *
     * @return self
     */
    public function setFulfillmentNetworkSku($fulfillment_network_sku) : self
    {
        $this->container['fulfillment_network_sku'] = $fulfillment_network_sku;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int|null $quantity The quantity of the item.
     *
     * @return self
     */
    public function setQuantity($quantity) : self
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets revenue
     *
     * @return \MehrIt\AmazonSellingPartner\Model\Finances\Currency|null
     */
    public function getRevenue()
    {
        return $this->container['revenue'];
    }

    /**
     * Sets revenue
     *
     * @param \MehrIt\AmazonSellingPartner\Model\Finances\Currency|null $revenue revenue
     *
     * @return self
     */
    public function setRevenue($revenue) : self
    {
        $this->container['revenue'] = $revenue;

        return $this;
    }

    /**
     * Gets fee_amount
     *
     * @return \MehrIt\AmazonSellingPartner\Model\Finances\Currency|null
     */
    public function getFeeAmount()
    {
        return $this->container['fee_amount'];
    }

    /**
     * Sets fee_amount
     *
     * @param \MehrIt\AmazonSellingPartner\Model\Finances\Currency|null $fee_amount fee_amount
     *
     * @return self
     */
    public function setFeeAmount($fee_amount) : self
    {
        $this->container['fee_amount'] = $fee_amount;

        return $this;
    }

    /**
     * Gets tax_amount
     *
     * @return \MehrIt\AmazonSellingPartner\Model\Finances\Currency|null
     */
    public function getTaxAmount()
    {
        return $this->container['tax_amount'];
    }

    /**
     * Sets tax_amount
     *
     * @param \MehrIt\AmazonSellingPartner\Model\Finances\Currency|null $tax_amount tax_amount
     *
     * @return self
     */
    public function setTaxAmount($tax_amount) : self
    {
        $this->container['tax_amount'] = $tax_amount;

        return $this;
    }

    /**
     * Gets tax_withheld
     *
     * @return \MehrIt\AmazonSellingPartner\Model\Finances\Currency|null
     */
    public function getTaxWithheld()
    {
        return $this->container['tax_withheld'];
    }

    /**
     * Sets tax_withheld
     *
     * @param \MehrIt\AmazonSellingPartner\Model\Finances\Currency|null $tax_withheld tax_withheld
     *
     * @return self
     */
    public function setTaxWithheld($tax_withheld) : self
    {
        $this->container['tax_withheld'] = $tax_withheld;

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