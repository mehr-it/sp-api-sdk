<?php
/**
 * CreateReportSpecification
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  MehrIt\AmazonSellingPartner
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Reports
 *
 * The Selling Partner API for Reports lets you retrieve and manage a variety of reports that can help selling partners manage their businesses.
 *
 * The version of the OpenAPI document: 2020-09-04
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace MehrIt\AmazonSellingPartner\Model\Reports;

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
class CreateReportSpecification implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'CreateReportSpecification';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'report_options' => 'array<string,string>',
        'report_type' => 'string',
        'data_start_time' => '\DateTime',
        'data_end_time' => '\DateTime',
        'marketplace_ids' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'report_options' => null,
        'report_type' => null,
        'data_start_time' => 'date-time',
        'data_end_time' => 'date-time',
        'marketplace_ids' => null
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
        'report_options' => 'reportOptions',
        'report_type' => 'reportType',
        'data_start_time' => 'dataStartTime',
        'data_end_time' => 'dataEndTime',
        'marketplace_ids' => 'marketplaceIds'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'report_options' => 'setReportOptions',
        'report_type' => 'setReportType',
        'data_start_time' => 'setDataStartTime',
        'data_end_time' => 'setDataEndTime',
        'marketplace_ids' => 'setMarketplaceIds'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'report_options' => 'getReportOptions',
        'report_type' => 'getReportType',
        'data_start_time' => 'getDataStartTime',
        'data_end_time' => 'getDataEndTime',
        'marketplace_ids' => 'getMarketplaceIds'
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
        $this->container['report_options'] = $data['report_options'] ?? null;
        $this->container['report_type'] = $data['report_type'] ?? null;
        $this->container['data_start_time'] = $data['data_start_time'] ?? null;
        $this->container['data_end_time'] = $data['data_end_time'] ?? null;
        $this->container['marketplace_ids'] = $data['marketplace_ids'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties() : array
    {
        $invalidProperties = [];

        if ($this->container['report_type'] === null) {
            $invalidProperties[] = "'report_type' can't be null";
        }
        if ($this->container['marketplace_ids'] === null) {
            $invalidProperties[] = "'marketplace_ids' can't be null";
        }
        if ((count($this->container['marketplace_ids']) > 25)) {
            $invalidProperties[] = "invalid value for 'marketplace_ids', number of items must be less than or equal to 25.";
        }

        if ((count($this->container['marketplace_ids']) < 1)) {
            $invalidProperties[] = "invalid value for 'marketplace_ids', number of items must be greater than or equal to 1.";
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
     * Gets report_options
     *
     * @return array<string,string>|null
     */
    public function getReportOptions()
    {
        return $this->container['report_options'];
    }

    /**
     * Sets report_options
     *
     * @param array<string,string>|null $report_options Additional information passed to reports. This varies by report type.
     *
     * @return self
     */
    public function setReportOptions($report_options) : self
    {
        $this->container['report_options'] = $report_options;

        return $this;
    }

    /**
     * Gets report_type
     *
     * @return string
     */
    public function getReportType()
    {
        return $this->container['report_type'];
    }

    /**
     * Sets report_type
     *
     * @param string $report_type The report type.
     *
     * @return self
     */
    public function setReportType($report_type) : self
    {
        $this->container['report_type'] = $report_type;

        return $this;
    }

    /**
     * Gets data_start_time
     *
     * @return \DateTime|null
     */
    public function getDataStartTime()
    {
        return $this->container['data_start_time'];
    }

    /**
     * Sets data_start_time
     *
     * @param \DateTime|null $data_start_time The start of a date and time range, in ISO 8601 date time format, used for selecting the data to report. The default is now. The value must be prior to or equal to the current date and time. Not all report types make use of this.
     *
     * @return self
     */
    public function setDataStartTime($data_start_time) : self
    {
        $this->container['data_start_time'] = $data_start_time;

        return $this;
    }

    /**
     * Gets data_end_time
     *
     * @return \DateTime|null
     */
    public function getDataEndTime()
    {
        return $this->container['data_end_time'];
    }

    /**
     * Sets data_end_time
     *
     * @param \DateTime|null $data_end_time The end of a date and time range, in ISO 8601 date time format, used for selecting the data to report. The default is now. The value must be prior to or equal to the current date and time. Not all report types make use of this.
     *
     * @return self
     */
    public function setDataEndTime($data_end_time) : self
    {
        $this->container['data_end_time'] = $data_end_time;

        return $this;
    }

    /**
     * Gets marketplace_ids
     *
     * @return string[]
     */
    public function getMarketplaceIds()
    {
        return $this->container['marketplace_ids'];
    }

    /**
     * Sets marketplace_ids
     *
     * @param string[] $marketplace_ids A list of marketplace identifiers. The report document's contents will contain data for all of the specified marketplaces, unless the report type indicates otherwise.
     *
     * @return self
     */
    public function setMarketplaceIds($marketplace_ids) : self
    {

        if ((count($marketplace_ids) > 25)) {
            throw new \InvalidArgumentException('invalid value for $marketplace_ids when calling CreateReportSpecification., number of items must be less than or equal to 25.');
        }
        if ((count($marketplace_ids) < 1)) {
            throw new \InvalidArgumentException('invalid length for $marketplace_ids when calling CreateReportSpecification., number of items must be greater than or equal to 1.');
        }
        $this->container['marketplace_ids'] = $marketplace_ids;

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
