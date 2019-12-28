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
 * @property integer $ActiveAuctionCount
 * @property \DTS\eBaySDK\Trading\Types\AmountType $AmountLimitRemaining
 * @property integer $AuctionBidCount
 * @property integer $AuctionSellingCount
 * @property integer $ClassifiedAdCount
 * @property integer $ClassifiedAdOfferCount
 * @property integer $QuantityLimitRemaining
 * @property integer $SoldDurationInDays
 * @property \DTS\eBaySDK\Trading\Types\AmountType $TotalAuctionSellingValue
 * @property integer $TotalLeadCount
 * @property integer $TotalListingsWithLeads
 * @property integer $TotalSoldCount
 * @property \DTS\eBaySDK\Trading\Types\AmountType $TotalSoldValue
 */
class MyeBaySellingSummaryType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'ActiveAuctionCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ActiveAuctionCount'
        ],
        'AmountLimitRemaining' => [
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'AmountLimitRemaining'
        ],
        'AuctionBidCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'AuctionBidCount'
        ],
        'AuctionSellingCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'AuctionSellingCount'
        ],
        'ClassifiedAdCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ClassifiedAdCount'
        ],
        'ClassifiedAdOfferCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ClassifiedAdOfferCount'
        ],
        'QuantityLimitRemaining' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'QuantityLimitRemaining'
        ],
        'SoldDurationInDays' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SoldDurationInDays'
        ],
        'TotalAuctionSellingValue' => [
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'TotalAuctionSellingValue'
        ],
        'TotalLeadCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'TotalLeadCount'
        ],
        'TotalListingsWithLeads' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'TotalListingsWithLeads'
        ],
        'TotalSoldCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'TotalSoldCount'
        ],
        'TotalSoldValue' => [
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'TotalSoldValue'
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