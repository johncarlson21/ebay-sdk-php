<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Trading\Types;

/**
 *
 * @property \DTS\eBaySDK\Trading\Enums\BidActionCodeType $Action
 * @property string $BestOfferID
 * @property \DTS\eBaySDK\Trading\Types\AmountType $ConvertedPrice
 * @property \DTS\eBaySDK\Trading\Enums\CurrencyCodeType $Currency
 * @property \DTS\eBaySDK\Trading\Types\AmountType $HighestBid
 * @property \DTS\eBaySDK\Trading\Types\AmountType $MaxBid
 * @property string $Message
 * @property \DTS\eBaySDK\Trading\Types\AmountType $MyMaxBid
 * @property integer $Quantity
 * @property boolean $SecondChanceEnabled
 * @property \DTS\eBaySDK\Trading\Enums\CurrencyCodeType $SiteCurrency
 * @property \DateTime $TimeBid
 * @property \DTS\eBaySDK\Trading\Types\UserType $User
 * @property boolean $UserConsent
 */
class OfferType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'Action' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Action'
        ],
        'BestOfferID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BestOfferID'
        ],
        'ConvertedPrice' => [
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ConvertedPrice'
        ],
        'Currency' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Currency'
        ],
        'HighestBid' => [
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'HighestBid'
        ],
        'MaxBid' => [
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'MaxBid'
        ],
        'Message' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Message'
        ],
        'MyMaxBid' => [
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'MyMaxBid'
        ],
        'Quantity' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Quantity'
        ],
        'SecondChanceEnabled' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SecondChanceEnabled'
        ],
        'SiteCurrency' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SiteCurrency'
        ],
        'TimeBid' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'TimeBid'
        ],
        'User' => [
            'type' => 'DTS\eBaySDK\Trading\Types\UserType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'User'
        ],
        'UserConsent' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'UserConsent'
        ]
    ];
    
    /**
     * @param array $values Optional properties and values to assign to the object.
     */
    public function __construct(array $values = [])
    {
        list($parentValues, $childValues) = self::getParentValues(self::$propertyTypes, $values);

        parent::__construct($parentValues);

        if (!array_key_exists(__CLASS__, self::$properties)) {
            self::$properties[__CLASS__] = array_merge(self::$properties[get_parent_class()], self::$propertyTypes);
        }

        if (!array_key_exists(__CLASS__, self::$xmlNamespaces)) {
            self::$xmlNamespaces[__CLASS__] = 'xmlns="urn:ebay:apis:eBLBaseComponents"';
        }
        
        $this->setValues(__CLASS__, $childValues);
    }
}