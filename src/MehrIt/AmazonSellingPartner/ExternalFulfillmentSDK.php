<?php

	namespace MehrIt\AmazonSellingPartner;

	use MehrIt\AmazonSellingPartner\Api\ShipmentRetrievalApi\ExternalFulfillmentShipmentsSDK;
	use MehrIt\AmazonSellingPartner\Api\UpdateInventoryApi\ExternalFulfillmentInventorySDK;
	use Psr\Http\Client\ClientInterface;
	use Psr\Http\Message\RequestFactoryInterface;
	use Psr\Http\Message\StreamFactoryInterface;
	use Psr\Log\LoggerInterface;

	final class ExternalFulfillmentSDK
	{
		private ExternalFulfillmentInventorySDK $inventorySDK;

		private ExternalFulfillmentShipmentsSDK $shipmentsSDK;

		public function __construct(
			ExternalFulfillmentShipmentsSDK $externalFulfillmentShipmentsSDK,
			ExternalFulfillmentInventorySDK $externalFulfillmentInventorySDK
		) {
			
			$this->inventorySDK = $externalFulfillmentInventorySDK;
			$this->shipmentsSDK = $externalFulfillmentShipmentsSDK;
		}

		public static function create(
			ClientInterface         $httpClient,
			RequestFactoryInterface $requestFactory,
			StreamFactoryInterface  $streamFactory,
			Configuration           $configuration,
			LoggerInterface         $logger
		): self {
			$httpFactory = new HttpFactory($requestFactory, $streamFactory);

			return new self(
				new ExternalFulfillmentShipmentsSDK($httpClient, $httpFactory, $configuration, $logger),
				new ExternalFulfillmentInventorySDK($httpClient, $httpFactory, $configuration, $logger),
			);
		}

		public function inventory(): ExternalFulfillmentInventorySDK {
			return $this->inventorySDK;
		}

		public function shipments(): ExternalFulfillmentShipmentsSDK {
			return $this->shipmentsSDK;
		}
	}