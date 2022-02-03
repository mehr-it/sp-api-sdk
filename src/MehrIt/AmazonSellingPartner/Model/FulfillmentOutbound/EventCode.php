<?php
/**
 * EventCode
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
use \MehrIt\AmazonSellingPartner\ObjectSerializer;
use \MehrIt\AmazonSellingPartner\ModelInterface;

/**
 * This class was auto-generated by https://github.com/OpenAPITools/openapi-generator/.
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 *
 */
class EventCode
{
    /**
     * Possible values of this enum
     */
    const _101 = 'EVENT_101';

    const _102 = 'EVENT_102';

    const _201 = 'EVENT_201';

    const _202 = 'EVENT_202';

    const _203 = 'EVENT_203';

    const _204 = 'EVENT_204';

    const _205 = 'EVENT_205';

    const _206 = 'EVENT_206';

    const _301 = 'EVENT_301';

    const _302 = 'EVENT_302';

    const _304 = 'EVENT_304';

    const _306 = 'EVENT_306';

    const _307 = 'EVENT_307';

    const _308 = 'EVENT_308';

    const _309 = 'EVENT_309';

    const _401 = 'EVENT_401';

    const _402 = 'EVENT_402';

    const _403 = 'EVENT_403';

    const _404 = 'EVENT_404';

    const _405 = 'EVENT_405';

    const _406 = 'EVENT_406';

    const _407 = 'EVENT_407';

    const _408 = 'EVENT_408';

    const _409 = 'EVENT_409';

    const _411 = 'EVENT_411';

    const _412 = 'EVENT_412';

    const _413 = 'EVENT_413';

    const _414 = 'EVENT_414';

    const _415 = 'EVENT_415';

    const _416 = 'EVENT_416';

    const _417 = 'EVENT_417';

    const _418 = 'EVENT_418';

    const _419 = 'EVENT_419';

    private string $value;

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::_101,
            self::_102,
            self::_201,
            self::_202,
            self::_203,
            self::_204,
            self::_205,
            self::_206,
            self::_301,
            self::_302,
            self::_304,
            self::_306,
            self::_307,
            self::_308,
            self::_309,
            self::_401,
            self::_402,
            self::_403,
            self::_404,
            self::_405,
            self::_406,
            self::_407,
            self::_408,
            self::_409,
            self::_411,
            self::_412,
            self::_413,
            self::_414,
            self::_415,
            self::_416,
            self::_417,
            self::_418,
            self::_419
        ];
    }

    public function __construct(string $value)
    {
        $this->value = $value;
    }

    public function toString(): string
    {
        return $this->value;
    }
}

