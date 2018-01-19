<?php
/**
 * BillOfLadingCarrierInfoLine
 *
 * PHP version 5
 *
 * @category Class
 * @package  Infoplus
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Infoplus API
 *
 * Infoplus API.
 *
 * OpenAPI spec version: beta
 * Contact: api@infopluscommerce.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.0
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Infoplus\Infoplus\Model;

use \ArrayAccess;
use \Infoplus\ObjectSerializer;

/**
 * BillOfLadingCarrierInfoLine Class Doc Comment
 *
 * @category Class
 * @package  Infoplus
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BillOfLadingCarrierInfoLine implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'billOfLadingCarrierInfoLine';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'seq_no' => 'int',
        'hu_quantity' => 'int',
        'hu_type' => 'string',
        'package_quantity' => 'int',
        'package_type' => 'string',
        'weight' => 'int',
        'is_hazardous_material' => 'bool',
        'commodity_description' => 'string',
        'nfmc_no' => 'string',
        'carrier_class' => 'string',
        'custom_fields' => 'map[string,object]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'seq_no' => 'int32',
        'hu_quantity' => 'int32',
        'hu_type' => null,
        'package_quantity' => 'int32',
        'package_type' => null,
        'weight' => 'int32',
        'is_hazardous_material' => null,
        'commodity_description' => null,
        'nfmc_no' => null,
        'carrier_class' => null,
        'custom_fields' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'seq_no' => 'seqNo',
        'hu_quantity' => 'huQuantity',
        'hu_type' => 'huType',
        'package_quantity' => 'packageQuantity',
        'package_type' => 'packageType',
        'weight' => 'weight',
        'is_hazardous_material' => 'isHazardousMaterial',
        'commodity_description' => 'commodityDescription',
        'nfmc_no' => 'nfmcNo',
        'carrier_class' => 'carrierClass',
        'custom_fields' => 'customFields'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'seq_no' => 'setSeqNo',
        'hu_quantity' => 'setHuQuantity',
        'hu_type' => 'setHuType',
        'package_quantity' => 'setPackageQuantity',
        'package_type' => 'setPackageType',
        'weight' => 'setWeight',
        'is_hazardous_material' => 'setIsHazardousMaterial',
        'commodity_description' => 'setCommodityDescription',
        'nfmc_no' => 'setNfmcNo',
        'carrier_class' => 'setCarrierClass',
        'custom_fields' => 'setCustomFields'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'seq_no' => 'getSeqNo',
        'hu_quantity' => 'getHuQuantity',
        'hu_type' => 'getHuType',
        'package_quantity' => 'getPackageQuantity',
        'package_type' => 'getPackageType',
        'weight' => 'getWeight',
        'is_hazardous_material' => 'getIsHazardousMaterial',
        'commodity_description' => 'getCommodityDescription',
        'nfmc_no' => 'getNfmcNo',
        'carrier_class' => 'getCarrierClass',
        'custom_fields' => 'getCustomFields'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['seq_no'] = isset($data['seq_no']) ? $data['seq_no'] : null;
        $this->container['hu_quantity'] = isset($data['hu_quantity']) ? $data['hu_quantity'] : null;
        $this->container['hu_type'] = isset($data['hu_type']) ? $data['hu_type'] : null;
        $this->container['package_quantity'] = isset($data['package_quantity']) ? $data['package_quantity'] : null;
        $this->container['package_type'] = isset($data['package_type']) ? $data['package_type'] : null;
        $this->container['weight'] = isset($data['weight']) ? $data['weight'] : null;
        $this->container['is_hazardous_material'] = isset($data['is_hazardous_material']) ? $data['is_hazardous_material'] : false;
        $this->container['commodity_description'] = isset($data['commodity_description']) ? $data['commodity_description'] : null;
        $this->container['nfmc_no'] = isset($data['nfmc_no']) ? $data['nfmc_no'] : null;
        $this->container['carrier_class'] = isset($data['carrier_class']) ? $data['carrier_class'] : null;
        $this->container['custom_fields'] = isset($data['custom_fields']) ? $data['custom_fields'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['commodity_description'] === null) {
            $invalidProperties[] = "'commodity_description' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['commodity_description'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets seq_no
     *
     * @return int
     */
    public function getSeqNo()
    {
        return $this->container['seq_no'];
    }

    /**
     * Sets seq_no
     *
     * @param int $seq_no seq_no
     *
     * @return $this
     */
    public function setSeqNo($seq_no)
    {
        $this->container['seq_no'] = $seq_no;

        return $this;
    }

    /**
     * Gets hu_quantity
     *
     * @return int
     */
    public function getHuQuantity()
    {
        return $this->container['hu_quantity'];
    }

    /**
     * Sets hu_quantity
     *
     * @param int $hu_quantity hu_quantity
     *
     * @return $this
     */
    public function setHuQuantity($hu_quantity)
    {
        $this->container['hu_quantity'] = $hu_quantity;

        return $this;
    }

    /**
     * Gets hu_type
     *
     * @return string
     */
    public function getHuType()
    {
        return $this->container['hu_type'];
    }

    /**
     * Sets hu_type
     *
     * @param string $hu_type hu_type
     *
     * @return $this
     */
    public function setHuType($hu_type)
    {
        $this->container['hu_type'] = $hu_type;

        return $this;
    }

    /**
     * Gets package_quantity
     *
     * @return int
     */
    public function getPackageQuantity()
    {
        return $this->container['package_quantity'];
    }

    /**
     * Sets package_quantity
     *
     * @param int $package_quantity package_quantity
     *
     * @return $this
     */
    public function setPackageQuantity($package_quantity)
    {
        $this->container['package_quantity'] = $package_quantity;

        return $this;
    }

    /**
     * Gets package_type
     *
     * @return string
     */
    public function getPackageType()
    {
        return $this->container['package_type'];
    }

    /**
     * Sets package_type
     *
     * @param string $package_type package_type
     *
     * @return $this
     */
    public function setPackageType($package_type)
    {
        $this->container['package_type'] = $package_type;

        return $this;
    }

    /**
     * Gets weight
     *
     * @return int
     */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight
     *
     * @param int $weight weight
     *
     * @return $this
     */
    public function setWeight($weight)
    {
        $this->container['weight'] = $weight;

        return $this;
    }

    /**
     * Gets is_hazardous_material
     *
     * @return bool
     */
    public function getIsHazardousMaterial()
    {
        return $this->container['is_hazardous_material'];
    }

    /**
     * Sets is_hazardous_material
     *
     * @param bool $is_hazardous_material is_hazardous_material
     *
     * @return $this
     */
    public function setIsHazardousMaterial($is_hazardous_material)
    {
        $this->container['is_hazardous_material'] = $is_hazardous_material;

        return $this;
    }

    /**
     * Gets commodity_description
     *
     * @return string
     */
    public function getCommodityDescription()
    {
        return $this->container['commodity_description'];
    }

    /**
     * Sets commodity_description
     *
     * @param string $commodity_description commodity_description
     *
     * @return $this
     */
    public function setCommodityDescription($commodity_description)
    {
        $this->container['commodity_description'] = $commodity_description;

        return $this;
    }

    /**
     * Gets nfmc_no
     *
     * @return string
     */
    public function getNfmcNo()
    {
        return $this->container['nfmc_no'];
    }

    /**
     * Sets nfmc_no
     *
     * @param string $nfmc_no nfmc_no
     *
     * @return $this
     */
    public function setNfmcNo($nfmc_no)
    {
        $this->container['nfmc_no'] = $nfmc_no;

        return $this;
    }

    /**
     * Gets carrier_class
     *
     * @return string
     */
    public function getCarrierClass()
    {
        return $this->container['carrier_class'];
    }

    /**
     * Sets carrier_class
     *
     * @param string $carrier_class carrier_class
     *
     * @return $this
     */
    public function setCarrierClass($carrier_class)
    {
        $this->container['carrier_class'] = $carrier_class;

        return $this;
    }

    /**
     * Gets custom_fields
     *
     * @return map[string,object]
     */
    public function getCustomFields()
    {
        return $this->container['custom_fields'];
    }

    /**
     * Sets custom_fields
     *
     * @param map[string,object] $custom_fields custom_fields
     *
     * @return $this
     */
    public function setCustomFields($custom_fields)
    {
        $this->container['custom_fields'] = $custom_fields;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


