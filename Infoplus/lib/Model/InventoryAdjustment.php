<?php
/**
 * InventoryAdjustment
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
 * InventoryAdjustment Class Doc Comment
 *
 * @category Class
 * @package  Infoplus
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InventoryAdjustment implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'inventoryAdjustment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'lob_id' => 'int',
        'sku' => 'string',
        'po_no_id' => 'int',
        'adjustment_date' => '\DateTime',
        'adjustment_time' => 'string',
        'location' => 'string',
        'qty' => 'int',
        'note' => 'string',
        'authorized_by' => 'string',
        'printed' => 'string',
        'order_no' => 'float',
        'adjustment_code' => 'string',
        'custom_fields' => 'map[string,object]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
        'lob_id' => 'int32',
        'sku' => null,
        'po_no_id' => 'int32',
        'adjustment_date' => 'date-time',
        'adjustment_time' => null,
        'location' => null,
        'qty' => 'int32',
        'note' => null,
        'authorized_by' => null,
        'printed' => null,
        'order_no' => null,
        'adjustment_code' => null,
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
        'id' => 'id',
        'lob_id' => 'lobId',
        'sku' => 'sku',
        'po_no_id' => 'poNoId',
        'adjustment_date' => 'adjustmentDate',
        'adjustment_time' => 'adjustmentTime',
        'location' => 'location',
        'qty' => 'qty',
        'note' => 'note',
        'authorized_by' => 'authorizedBy',
        'printed' => 'printed',
        'order_no' => 'orderNo',
        'adjustment_code' => 'adjustmentCode',
        'custom_fields' => 'customFields'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'lob_id' => 'setLobId',
        'sku' => 'setSku',
        'po_no_id' => 'setPoNoId',
        'adjustment_date' => 'setAdjustmentDate',
        'adjustment_time' => 'setAdjustmentTime',
        'location' => 'setLocation',
        'qty' => 'setQty',
        'note' => 'setNote',
        'authorized_by' => 'setAuthorizedBy',
        'printed' => 'setPrinted',
        'order_no' => 'setOrderNo',
        'adjustment_code' => 'setAdjustmentCode',
        'custom_fields' => 'setCustomFields'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'lob_id' => 'getLobId',
        'sku' => 'getSku',
        'po_no_id' => 'getPoNoId',
        'adjustment_date' => 'getAdjustmentDate',
        'adjustment_time' => 'getAdjustmentTime',
        'location' => 'getLocation',
        'qty' => 'getQty',
        'note' => 'getNote',
        'authorized_by' => 'getAuthorizedBy',
        'printed' => 'getPrinted',
        'order_no' => 'getOrderNo',
        'adjustment_code' => 'getAdjustmentCode',
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['lob_id'] = isset($data['lob_id']) ? $data['lob_id'] : null;
        $this->container['sku'] = isset($data['sku']) ? $data['sku'] : null;
        $this->container['po_no_id'] = isset($data['po_no_id']) ? $data['po_no_id'] : null;
        $this->container['adjustment_date'] = isset($data['adjustment_date']) ? $data['adjustment_date'] : null;
        $this->container['adjustment_time'] = isset($data['adjustment_time']) ? $data['adjustment_time'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['qty'] = isset($data['qty']) ? $data['qty'] : null;
        $this->container['note'] = isset($data['note']) ? $data['note'] : null;
        $this->container['authorized_by'] = isset($data['authorized_by']) ? $data['authorized_by'] : null;
        $this->container['printed'] = isset($data['printed']) ? $data['printed'] : null;
        $this->container['order_no'] = isset($data['order_no']) ? $data['order_no'] : null;
        $this->container['adjustment_code'] = isset($data['adjustment_code']) ? $data['adjustment_code'] : null;
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
     * Gets lob_id
     *
     * @return int
     */
    public function getLobId()
    {
        return $this->container['lob_id'];
    }

    /**
     * Sets lob_id
     *
     * @param int $lob_id lob_id
     *
     * @return $this
     */
    public function setLobId($lob_id)
    {
        $this->container['lob_id'] = $lob_id;

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
     * Gets po_no_id
     *
     * @return int
     */
    public function getPoNoId()
    {
        return $this->container['po_no_id'];
    }

    /**
     * Sets po_no_id
     *
     * @param int $po_no_id po_no_id
     *
     * @return $this
     */
    public function setPoNoId($po_no_id)
    {
        $this->container['po_no_id'] = $po_no_id;

        return $this;
    }

    /**
     * Gets adjustment_date
     *
     * @return \DateTime
     */
    public function getAdjustmentDate()
    {
        return $this->container['adjustment_date'];
    }

    /**
     * Sets adjustment_date
     *
     * @param \DateTime $adjustment_date adjustment_date
     *
     * @return $this
     */
    public function setAdjustmentDate($adjustment_date)
    {
        $this->container['adjustment_date'] = $adjustment_date;

        return $this;
    }

    /**
     * Gets adjustment_time
     *
     * @return string
     */
    public function getAdjustmentTime()
    {
        return $this->container['adjustment_time'];
    }

    /**
     * Sets adjustment_time
     *
     * @param string $adjustment_time adjustment_time
     *
     * @return $this
     */
    public function setAdjustmentTime($adjustment_time)
    {
        $this->container['adjustment_time'] = $adjustment_time;

        return $this;
    }

    /**
     * Gets location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param string $location location
     *
     * @return $this
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets qty
     *
     * @return int
     */
    public function getQty()
    {
        return $this->container['qty'];
    }

    /**
     * Sets qty
     *
     * @param int $qty qty
     *
     * @return $this
     */
    public function setQty($qty)
    {
        $this->container['qty'] = $qty;

        return $this;
    }

    /**
     * Gets note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->container['note'];
    }

    /**
     * Sets note
     *
     * @param string $note note
     *
     * @return $this
     */
    public function setNote($note)
    {
        $this->container['note'] = $note;

        return $this;
    }

    /**
     * Gets authorized_by
     *
     * @return string
     */
    public function getAuthorizedBy()
    {
        return $this->container['authorized_by'];
    }

    /**
     * Sets authorized_by
     *
     * @param string $authorized_by authorized_by
     *
     * @return $this
     */
    public function setAuthorizedBy($authorized_by)
    {
        $this->container['authorized_by'] = $authorized_by;

        return $this;
    }

    /**
     * Gets printed
     *
     * @return string
     */
    public function getPrinted()
    {
        return $this->container['printed'];
    }

    /**
     * Sets printed
     *
     * @param string $printed printed
     *
     * @return $this
     */
    public function setPrinted($printed)
    {
        $this->container['printed'] = $printed;

        return $this;
    }

    /**
     * Gets order_no
     *
     * @return float
     */
    public function getOrderNo()
    {
        return $this->container['order_no'];
    }

    /**
     * Sets order_no
     *
     * @param float $order_no order_no
     *
     * @return $this
     */
    public function setOrderNo($order_no)
    {
        $this->container['order_no'] = $order_no;

        return $this;
    }

    /**
     * Gets adjustment_code
     *
     * @return string
     */
    public function getAdjustmentCode()
    {
        return $this->container['adjustment_code'];
    }

    /**
     * Sets adjustment_code
     *
     * @param string $adjustment_code adjustment_code
     *
     * @return $this
     */
    public function setAdjustmentCode($adjustment_code)
    {
        $this->container['adjustment_code'] = $adjustment_code;

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


