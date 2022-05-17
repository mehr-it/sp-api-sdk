<?php

declare(strict_types=1);

namespace MehrIt\AmazonSellingPartner;

final class Regions
{
    public const EUROPE = 'eu-west-1';

    public const EUROPE_HOST = 'sellingpartnerapi-eu.amazon.com';
    
	public const EUROPE_HOST_SANDBOX = 'sandbox.sellingpartnerapi-eu.amazon.com';

    public const EUROPE_URL = 'https://' . self::EUROPE_HOST;
	
    public const EUROPE_URL_SANDBOX = 'https://' . self::EUROPE_HOST_SANDBOX;

    public const FAR_EAST = 'us-west-2';

    public const FAR_EAST_HOST = 'sellingpartnerapi-fe.amazon.com';
    
	public const FAR_EAST_HOST_SANDBOX = 'sandbox.sellingpartnerapi-fe.amazon.com';

    public const FAR_EAST_URL = 'https://' . self::FAR_EAST_HOST;
	
    public const FAR_EAST_URL_SANDBOX = 'https://' . self::FAR_EAST_HOST_SANDBOX;

    public const NORTH_AMERICA = 'us-east-1';

    public const NORTH_AMERICA_HOST = 'sellingpartnerapi-na.amazon.com';
    
	public const NORTH_AMERICA_HOST_SANDBOX = 'sandbox.sellingpartnerapi-na.amazon.com';

    public const NORTH_AMERICA_URL = 'https://' . self::NORTH_AMERICA_HOST;
	
    public const NORTH_AMERICA_URL_SANDBOX = 'https://' . self::NORTH_AMERICA_HOST_SANDBOX;

    public static function isValid(string $region) : bool
    {
        return \in_array($region, [self::EUROPE, self::FAR_EAST, self::NORTH_AMERICA], true);
    }
}
