<?php
/**
 * LowStock
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
 * OpenAPI spec version: v3.0
 * Contact: api@infopluscommerce.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
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
 * LowStock Class Doc Comment
 *
 * @category Class
 * @package  Infoplus
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LowStock implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'lowStock';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'warehouse_id' => 'int',
        'low_level_date' => '\DateTime',
        'low_stock_message' => 'string',
        'print_flag' => 'string',
        'is_delayed' => 'bool',
        'create_date' => '\DateTime',
        'modify_date' => '\DateTime',
        'custom_fields' => 'map[string,object]',
        'sku' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
        'warehouse_id' => 'int32',
        'low_level_date' => 'date-time',
        'low_stock_message' => null,
        'print_flag' => null,
        'is_delayed' => null,
        'create_date' => 'date-time',
        'modify_date' => 'date-time',
        'custom_fields' => null,
        'sku' => null
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
        'id' => 'id',
        'warehouse_id' => 'warehouseId',
        'low_level_date' => 'lowLevelDate',
        'low_stock_message' => 'lowStockMessage',
        'print_flag' => 'printFlag',
        'is_delayed' => 'isDelayed',
        'create_date' => 'createDate',
        'modify_date' => 'modifyDate',
        'custom_fields' => 'customFields',
        'sku' => 'sku'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'warehouse_id' => 'setWarehouseId',
        'low_level_date' => 'setLowLevelDate',
        'low_stock_message' => 'setLowStockMessage',
        'print_flag' => 'setPrintFlag',
        'is_delayed' => 'setIsDelayed',
        'create_date' => 'setCreateDate',
        'modify_date' => 'setModifyDate',
        'custom_fields' => 'setCustomFields',
        'sku' => 'setSku'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'warehouse_id' => 'getWarehouseId',
        'low_level_date' => 'getLowLevelDate',
        'low_stock_message' => 'getLowStockMessage',
        'print_flag' => 'getPrintFlag',
        'is_delayed' => 'getIsDelayed',
        'create_date' => 'getCreateDate',
        'modify_date' => 'getModifyDate',
        'custom_fields' => 'getCustomFields',
        'sku' => 'getSku'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['warehouse_id'] = isset($data['warehouse_id']) ? $data['warehouse_id'] : null;
        $this->container['low_level_date'] = isset($data['low_level_date']) ? $data['low_level_date'] : null;
        $this->container['low_stock_message'] = isset($data['low_stock_message']) ? $data['low_stock_message'] : null;
        $this->container['print_flag'] = isset($data['print_flag']) ? $data['print_flag'] : null;
        $this->container['is_delayed'] = isset($data['is_delayed']) ? $data['is_delayed'] : false;
        $this->container['create_date'] = isset($data['create_date']) ? $data['create_date'] : null;
        $this->container['modify_date'] = isset($data['modify_date']) ? $data['modify_date'] : null;
        $this->container['custom_fields'] = isset($data['custom_fields']) ? $data['custom_fields'] : null;
        $this->container['sku'] = isset($data['sku']) ? $data['sku'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['warehouse_id'] === null) {
            $invalidProperties[] = "'warehouse_id' can't be null";
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

        if ($this->container['warehouse_id'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets warehouse_id
     *
     * @return int
     */
    public function getWarehouseId()
    {
        return $this->container['warehouse_id'];
    }

    /**
     * Sets warehouse_id
     *
     * @param int $warehouse_id warehouse_id
     *
     * @return $this
     */
    public function setWarehouseId($warehouse_id)
    {
        $this->container['warehouse_id'] = $warehouse_id;

        return $this;
    }

    /**
     * Gets low_level_date
     *
     * @return \DateTime
     */
    public function getLowLevelDate()
    {
        return $this->container['low_level_date'];
    }

    /**
     * Sets low_level_date
     *
     * @param \DateTime $low_level_date low_level_date
     *
     * @return $this
     */
    public function setLowLevelDate($low_level_date)
    {
        $this->container['low_level_date'] = $low_level_date;

        return $this;
    }

    /**
     * Gets low_stock_message
     *
     * @return string
     */
    public function getLowStockMessage()
    {
        return $this->container['low_stock_message'];
    }

    /**
     * Sets low_stock_message
     *
     * @param string $low_stock_message low_stock_message
     *
     * @return $this
     */
    public function setLowStockMessage($low_stock_message)
    {
        $this->container['low_stock_message'] = $low_stock_message;

        return $this;
    }

    /**
     * Gets print_flag
     *
     * @return string
     */
    public function getPrintFlag()
    {
        return $this->container['print_flag'];
    }

    /**
     * Sets print_flag
     *
     * @param string $print_flag print_flag
     *
     * @return $this
     */
    public function setPrintFlag($print_flag)
    {
        $this->container['print_flag'] = $print_flag;

        return $this;
    }

    /**
     * Gets is_delayed
     *
     * @return bool
     */
    public function getIsDelayed()
    {
        return $this->container['is_delayed'];
    }

    /**
     * Sets is_delayed
     *
     * @param bool $is_delayed is_delayed
     *
     * @return $this
     */
    public function setIsDelayed($is_delayed)
    {
        $this->container['is_delayed'] = $is_delayed;

        return $this;
    }

    /**
     * Gets create_date
     *
     * @return \DateTime
     */
    public function getCreateDate()
    {
        return $this->container['create_date'];
    }

    /**
     * Sets create_date
     *
     * @param \DateTime $create_date create_date
     *
     * @return $this
     */
    public function setCreateDate($create_date)
    {
        $this->container['create_date'] = $create_date;

        return $this;
    }

    /**
     * Gets modify_date
     *
     * @return \DateTime
     */
    public function getModifyDate()
    {
        return $this->container['modify_date'];
    }

    /**
     * Sets modify_date
     *
     * @param \DateTime $modify_date modify_date
     *
     * @return $this
     */
    public function setModifyDate($modify_date)
    {
        $this->container['modify_date'] = $modify_date;

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
     * Gets sku
     *
     * @return string
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     *
     * @param string $sku sku
     *
     * @return $this
     */
    public function setSku($sku)
    {
        $this->container['sku'] = $sku;

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


