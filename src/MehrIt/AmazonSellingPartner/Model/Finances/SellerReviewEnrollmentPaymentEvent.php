<?php
/**
 * SellerReviewEnrollmentPaymentEvent
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
class SellerReviewEnrollmentPaymentEvent implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'SellerReviewEnrollmentPaymentEvent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'posted_date' => '\DateTime',
        'enrollment_id' => 'string',
        'parent_asin' => 'string',
        'fee_component' => '\MehrIt\AmazonSellingPartner\Model\Finances\FeeComponent',
        'charge_component' => '\MehrIt\AmazonSellingPartner\Model\Finances\ChargeComponent',
        'total_amount' => '\MehrIt\AmazonSellingPartner\Model\Finances\Currency'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'posted_date' => 'date-time',
        'enrollment_id' => null,
        'parent_asin' => null,
        'fee_component' => null,
        'charge_component' => null,
        'total_amount' => null
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
        'posted_date' => 'PostedDate',
        'enrollment_id' => 'EnrollmentId',
        'parent_asin' => 'ParentASIN',
        'fee_component' => 'FeeComponent',
        'charge_component' => 'ChargeComponent',
        'total_amount' => 'TotalAmount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'posted_date' => 'setPostedDate',
        'enrollment_id' => 'setEnrollmentId',
        'parent_asin' => 'setParentAsin',
        'fee_component' => 'setFeeComponent',
        'charge_component' => 'setChargeComponent',
        'total_amount' => 'setTotalAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'posted_date' => 'getPostedDate',
        'enrollment_id' => 'getEnrollmentId',
        'parent_asin' => 'getParentAsin',
        'fee_component' => 'getFeeComponent',
        'charge_component' => 'getChargeComponent',
        'total_amount' => 'getTotalAmount'
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
        $this->container['posted_date'] = $data['posted_date'] ?? null;
        $this->container['enrollment_id'] = $data['enrollment_id'] ?? null;
        $this->container['parent_asin'] = $data['parent_asin'] ?? null;
        $this->container['fee_component'] = $data['fee_component'] ?? null;
        $this->container['charge_component'] = $data['charge_component'] ?? null;
        $this->container['total_amount'] = $data['total_amount'] ?? null;
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
     * Gets posted_date
     *
     * @return \DateTime|null
     */
    public function getPostedDate()
    {
        return $this->container['posted_date'];
    }

    /**
     * Sets posted_date
     *
     * @param \DateTime|null $posted_date posted_date
     *
     * @return self
     */
    public function setPostedDate($posted_date) : self
    {
        $this->container['posted_date'] = $posted_date;

        return $this;
    }

    /**
     * Gets enrollment_id
     *
     * @return string|null
     */
    public function getEnrollmentId()
    {
        return $this->container['enrollment_id'];
    }

    /**
     * Sets enrollment_id
     *
     * @param string|null $enrollment_id An enrollment identifier.
     *
     * @return self
     */
    public function setEnrollmentId($enrollment_id) : self
    {
        $this->container['enrollment_id'] = $enrollment_id;

        return $this;
    }

    /**
     * Gets parent_asin
     *
     * @return string|null
     */
    public function getParentAsin()
    {
        return $this->container['parent_asin'];
    }

    /**
     * Sets parent_asin
     *
     * @param string|null $parent_asin The Amazon Standard Identification Number (ASIN) of the item that was enrolled in the Early Reviewer Program.
     *
     * @return self
     */
    public function setParentAsin($parent_asin) : self
    {
        $this->container['parent_asin'] = $parent_asin;

        return $this;
    }

    /**
     * Gets fee_component
     *
     * @return \MehrIt\AmazonSellingPartner\Model\Finances\FeeComponent|null
     */
    public function getFeeComponent()
    {
        return $this->container['fee_component'];
    }

    /**
     * Sets fee_component
     *
     * @param \MehrIt\AmazonSellingPartner\Model\Finances\FeeComponent|null $fee_component fee_component
     *
     * @return self
     */
    public function setFeeComponent($fee_component) : self
    {
        $this->container['fee_component'] = $fee_component;

        return $this;
    }

    /**
     * Gets charge_component
     *
     * @return \MehrIt\AmazonSellingPartner\Model\Finances\ChargeComponent|null
     */
    public function getChargeComponent()
    {
        return $this->container['charge_component'];
    }

    /**
     * Sets charge_component
     *
     * @param \MehrIt\AmazonSellingPartner\Model\Finances\ChargeComponent|null $charge_component charge_component
     *
     * @return self
     */
    public function setChargeComponent($charge_component) : self
    {
        $this->container['charge_component'] = $charge_component;

        return $this;
    }

    /**
     * Gets total_amount
     *
     * @return \MehrIt\AmazonSellingPartner\Model\Finances\Currency|null
     */
    public function getTotalAmount()
    {
        return $this->container['total_amount'];
    }

    /**
     * Sets total_amount
     *
     * @param \MehrIt\AmazonSellingPartner\Model\Finances\Currency|null $total_amount total_amount
     *
     * @return self
     */
    public function setTotalAmount($total_amount) : self
    {
        $this->container['total_amount'] = $total_amount;

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