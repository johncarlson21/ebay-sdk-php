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
 * @property integer $FlaggedMessageCount
 * @property \DTS\eBaySDK\Trading\Types\MyMessagesFolderSummaryType[] $FolderSummary
 * @property integer $NewHighPriorityCount
 * @property integer $NewMessageCount
 * @property integer $TotalHighPriorityCount
 * @property integer $TotalMessageCount
 */
class MyMessagesSummaryType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'FlaggedMessageCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'FlaggedMessageCount'
        ],
        'FolderSummary' => [
            'type' => 'DTS\eBaySDK\Trading\Types\MyMessagesFolderSummaryType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'FolderSummary'
        ],
        'NewHighPriorityCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'NewHighPriorityCount'
        ],
        'NewMessageCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'NewMessageCount'
        ],
        'TotalHighPriorityCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'TotalHighPriorityCount'
        ],
        'TotalMessageCount' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'TotalMessageCount'
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