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
 * @property \DateTime $ActualDeliveryTime
 * @property \DateTime $EstimatedDeliveryTimeMax
 * @property \DateTime $EstimatedDeliveryTimeMin
 * @property \DateTime $HandleByTime
 * @property \DateTime $MaxNativeEstimatedDeliveryTime
 * @property \DateTime $MinNativeEstimatedDeliveryTime
 * @property \DateTime $ScheduledDeliveryTimeMax
 * @property \DateTime $ScheduledDeliveryTimeMin
 * @property string $ShippingTrackingEvent
 * @property string $StoreID
 */
class ShippingPackageInfoType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'ActualDeliveryTime' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ActualDeliveryTime'
        ],
        'EstimatedDeliveryTimeMax' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'EstimatedDeliveryTimeMax'
        ],
        'EstimatedDeliveryTimeMin' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'EstimatedDeliveryTimeMin'
        ],
        'HandleByTime' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'HandleByTime'
        ],
        'MaxNativeEstimatedDeliveryTime' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'MaxNativeEstimatedDeliveryTime'
        ],
        'MinNativeEstimatedDeliveryTime' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'MinNativeEstimatedDeliveryTime'
        ],
        'ScheduledDeliveryTimeMax' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ScheduledDeliveryTimeMax'
        ],
        'ScheduledDeliveryTimeMin' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ScheduledDeliveryTimeMin'
        ],
        'ShippingTrackingEvent' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShippingTrackingEvent'
        ],
        'StoreID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'StoreID'
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