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
 * @property string $Code
 * @property string $FieldName
 * @property string $Group
 * @property string $Message
 * @property \DTS\eBaySDK\Trading\Types\MetadataType[] $Metadata
 * @property string $Type
 * @property string[] $Value
 */
class ListingRecommendationType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'Code' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Code'
        ],
        'FieldName' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'FieldName'
        ],
        'Group' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Group'
        ],
        'Message' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Message'
        ],
        'Metadata' => [
            'type' => 'DTS\eBaySDK\Trading\Types\MetadataType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'Metadata'
        ],
        'Type' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Type'
        ],
        'Value' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'Value'
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