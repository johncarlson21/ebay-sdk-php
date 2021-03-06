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
 * @property integer $CrossBorderTransactionCount
 * @property double $CrossBorderTransactionPercent
 * @property double $FeedbackLeftPercent
 * @property integer $NegativeFeedbackLeftCount
 * @property integer $NeutralFeedbackLeftCount
 * @property integer $PositiveFeedbackLeftCount
 * @property integer $RepeatBuyerCount
 * @property double $RepeatBuyerPercent
 * @property double $TransactionPercent
 * @property integer $UniqueBuyerCount
 */
class SellerRoleMetricsType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'CrossBorderTransactionCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CrossBorderTransactionCount'
        ],
        'CrossBorderTransactionPercent' => [
            'type' => 'double',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CrossBorderTransactionPercent'
        ],
        'FeedbackLeftPercent' => [
            'type' => 'double',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'FeedbackLeftPercent'
        ],
        'NegativeFeedbackLeftCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'NegativeFeedbackLeftCount'
        ],
        'NeutralFeedbackLeftCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'NeutralFeedbackLeftCount'
        ],
        'PositiveFeedbackLeftCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PositiveFeedbackLeftCount'
        ],
        'RepeatBuyerCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'RepeatBuyerCount'
        ],
        'RepeatBuyerPercent' => [
            'type' => 'double',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'RepeatBuyerPercent'
        ],
        'TransactionPercent' => [
            'type' => 'double',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'TransactionPercent'
        ],
        'UniqueBuyerCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'UniqueBuyerCount'
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