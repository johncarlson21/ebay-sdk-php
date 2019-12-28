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
 * @property integer $DeclinedRTERequestCount
 * @property integer $DocsForCCProcessingToSendCount
 * @property integer $FeedbackToReceiveCount
 * @property integer $FeedbackToSendCount
 * @property integer $ItemReceiptConfirmationToReceiveCount
 * @property integer $ItemReceiptToConfirmCount
 * @property integer $OutbidCount
 * @property integer $PaymentToReceiveCount
 * @property integer $PaymentToSendCount
 * @property integer $PendingRTERequestCount
 * @property integer $RefundCancelledCount
 * @property integer $RefundInitiatedCount
 * @property integer $RefundOnHoldCount
 * @property integer $RelistingNeededCount
 * @property integer $RTEToProcessCount
 * @property integer $SecondChanceOfferCount
 * @property integer $ShippingDetailsToBeProvidedCount
 * @property integer $ShippingNeededCount
 * @property integer $TotalNewLeadsCount
 */
class RemindersType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'DeclinedRTERequestCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'DeclinedRTERequestCount'
        ],
        'DocsForCCProcessingToSendCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'DocsForCCProcessingToSendCount'
        ],
        'FeedbackToReceiveCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'FeedbackToReceiveCount'
        ],
        'FeedbackToSendCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'FeedbackToSendCount'
        ],
        'ItemReceiptConfirmationToReceiveCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ItemReceiptConfirmationToReceiveCount'
        ],
        'ItemReceiptToConfirmCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ItemReceiptToConfirmCount'
        ],
        'OutbidCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'OutbidCount'
        ],
        'PaymentToReceiveCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PaymentToReceiveCount'
        ],
        'PaymentToSendCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PaymentToSendCount'
        ],
        'PendingRTERequestCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PendingRTERequestCount'
        ],
        'RefundCancelledCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'RefundCancelledCount'
        ],
        'RefundInitiatedCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'RefundInitiatedCount'
        ],
        'RefundOnHoldCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'RefundOnHoldCount'
        ],
        'RelistingNeededCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'RelistingNeededCount'
        ],
        'RTEToProcessCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'RTEToProcessCount'
        ],
        'SecondChanceOfferCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SecondChanceOfferCount'
        ],
        'ShippingDetailsToBeProvidedCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingDetailsToBeProvidedCount'
        ],
        'ShippingNeededCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingNeededCount'
        ],
        'TotalNewLeadsCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'TotalNewLeadsCount'
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