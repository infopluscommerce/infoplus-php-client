<?php
/**
 * FinanceSystemConnectionLog
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
 * FinanceSystemConnectionLog Class Doc Comment
 *
 * @category Class
 * @package  Infoplus
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FinanceSystemConnectionLog implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'financeSystemConnectionLog';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'create_date' => '\DateTime',
        'finance_system_connection_id' => 'int',
        'type' => 'string',
        'notes' => 'string',
        'order_no' => 'float',
        'finance_system_order_no' => 'string',
        'finance_system_order_id' => 'string',
        'asn_id' => 'int',
        'finance_system_po_no' => 'string',
        'finance_system_po_id' => 'string',
        'item_receipt_id_id' => 'int',
        'adjustment_id_id' => 'int',
        'job_id_id' => 'int',
        'custom_fields' => 'map[string,object]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
        'create_date' => 'date-time',
        'finance_system_connection_id' => 'int32',
        'type' => null,
        'notes' => null,
        'order_no' => null,
        'finance_system_order_no' => null,
        'finance_system_order_id' => null,
        'asn_id' => 'int32',
        'finance_system_po_no' => null,
        'finance_system_po_id' => null,
        'item_receipt_id_id' => 'int32',
        'adjustment_id_id' => 'int32',
        'job_id_id' => 'int32',
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
        'create_date' => 'createDate',
        'finance_system_connection_id' => 'financeSystemConnectionId',
        'type' => 'type',
        'notes' => 'notes',
        'order_no' => 'orderNo',
        'finance_system_order_no' => 'financeSystemOrderNo',
        'finance_system_order_id' => 'financeSystemOrderId',
        'asn_id' => 'asnId',
        'finance_system_po_no' => 'financeSystemPONo',
        'finance_system_po_id' => 'financeSystemPOId',
        'item_receipt_id_id' => 'itemReceiptIdId',
        'adjustment_id_id' => 'adjustmentIdId',
        'job_id_id' => 'jobIdId',
        'custom_fields' => 'customFields'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'create_date' => 'setCreateDate',
        'finance_system_connection_id' => 'setFinanceSystemConnectionId',
        'type' => 'setType',
        'notes' => 'setNotes',
        'order_no' => 'setOrderNo',
        'finance_system_order_no' => 'setFinanceSystemOrderNo',
        'finance_system_order_id' => 'setFinanceSystemOrderId',
        'asn_id' => 'setAsnId',
        'finance_system_po_no' => 'setFinanceSystemPoNo',
        'finance_system_po_id' => 'setFinanceSystemPoId',
        'item_receipt_id_id' => 'setItemReceiptIdId',
        'adjustment_id_id' => 'setAdjustmentIdId',
        'job_id_id' => 'setJobIdId',
        'custom_fields' => 'setCustomFields'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'create_date' => 'getCreateDate',
        'finance_system_connection_id' => 'getFinanceSystemConnectionId',
        'type' => 'getType',
        'notes' => 'getNotes',
        'order_no' => 'getOrderNo',
        'finance_system_order_no' => 'getFinanceSystemOrderNo',
        'finance_system_order_id' => 'getFinanceSystemOrderId',
        'asn_id' => 'getAsnId',
        'finance_system_po_no' => 'getFinanceSystemPoNo',
        'finance_system_po_id' => 'getFinanceSystemPoId',
        'item_receipt_id_id' => 'getItemReceiptIdId',
        'adjustment_id_id' => 'getAdjustmentIdId',
        'job_id_id' => 'getJobIdId',
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
        $this->container['create_date'] = isset($data['create_date']) ? $data['create_date'] : null;
        $this->container['finance_system_connection_id'] = isset($data['finance_system_connection_id']) ? $data['finance_system_connection_id'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['notes'] = isset($data['notes']) ? $data['notes'] : null;
        $this->container['order_no'] = isset($data['order_no']) ? $data['order_no'] : null;
        $this->container['finance_system_order_no'] = isset($data['finance_system_order_no']) ? $data['finance_system_order_no'] : null;
        $this->container['finance_system_order_id'] = isset($data['finance_system_order_id']) ? $data['finance_system_order_id'] : null;
        $this->container['asn_id'] = isset($data['asn_id']) ? $data['asn_id'] : null;
        $this->container['finance_system_po_no'] = isset($data['finance_system_po_no']) ? $data['finance_system_po_no'] : null;
        $this->container['finance_system_po_id'] = isset($data['finance_system_po_id']) ? $data['finance_system_po_id'] : null;
        $this->container['item_receipt_id_id'] = isset($data['item_receipt_id_id']) ? $data['item_receipt_id_id'] : null;
        $this->container['adjustment_id_id'] = isset($data['adjustment_id_id']) ? $data['adjustment_id_id'] : null;
        $this->container['job_id_id'] = isset($data['job_id_id']) ? $data['job_id_id'] : null;
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
     * Gets finance_system_connection_id
     *
     * @return int
     */
    public function getFinanceSystemConnectionId()
    {
        return $this->container['finance_system_connection_id'];
    }

    /**
     * Sets finance_system_connection_id
     *
     * @param int $finance_system_connection_id finance_system_connection_id
     *
     * @return $this
     */
    public function setFinanceSystemConnectionId($finance_system_connection_id)
    {
        $this->container['finance_system_connection_id'] = $finance_system_connection_id;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets notes
     *
     * @return string
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes
     *
     * @param string $notes notes
     *
     * @return $this
     */
    public function setNotes($notes)
    {
        $this->container['notes'] = $notes;

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
     * Gets finance_system_order_no
     *
     * @return string
     */
    public function getFinanceSystemOrderNo()
    {
        return $this->container['finance_system_order_no'];
    }

    /**
     * Sets finance_system_order_no
     *
     * @param string $finance_system_order_no finance_system_order_no
     *
     * @return $this
     */
    public function setFinanceSystemOrderNo($finance_system_order_no)
    {
        $this->container['finance_system_order_no'] = $finance_system_order_no;

        return $this;
    }

    /**
     * Gets finance_system_order_id
     *
     * @return string
     */
    public function getFinanceSystemOrderId()
    {
        return $this->container['finance_system_order_id'];
    }

    /**
     * Sets finance_system_order_id
     *
     * @param string $finance_system_order_id finance_system_order_id
     *
     * @return $this
     */
    public function setFinanceSystemOrderId($finance_system_order_id)
    {
        $this->container['finance_system_order_id'] = $finance_system_order_id;

        return $this;
    }

    /**
     * Gets asn_id
     *
     * @return int
     */
    public function getAsnId()
    {
        return $this->container['asn_id'];
    }

    /**
     * Sets asn_id
     *
     * @param int $asn_id asn_id
     *
     * @return $this
     */
    public function setAsnId($asn_id)
    {
        $this->container['asn_id'] = $asn_id;

        return $this;
    }

    /**
     * Gets finance_system_po_no
     *
     * @return string
     */
    public function getFinanceSystemPoNo()
    {
        return $this->container['finance_system_po_no'];
    }

    /**
     * Sets finance_system_po_no
     *
     * @param string $finance_system_po_no finance_system_po_no
     *
     * @return $this
     */
    public function setFinanceSystemPoNo($finance_system_po_no)
    {
        $this->container['finance_system_po_no'] = $finance_system_po_no;

        return $this;
    }

    /**
     * Gets finance_system_po_id
     *
     * @return string
     */
    public function getFinanceSystemPoId()
    {
        return $this->container['finance_system_po_id'];
    }

    /**
     * Sets finance_system_po_id
     *
     * @param string $finance_system_po_id finance_system_po_id
     *
     * @return $this
     */
    public function setFinanceSystemPoId($finance_system_po_id)
    {
        $this->container['finance_system_po_id'] = $finance_system_po_id;

        return $this;
    }

    /**
     * Gets item_receipt_id_id
     *
     * @return int
     */
    public function getItemReceiptIdId()
    {
        return $this->container['item_receipt_id_id'];
    }

    /**
     * Sets item_receipt_id_id
     *
     * @param int $item_receipt_id_id item_receipt_id_id
     *
     * @return $this
     */
    public function setItemReceiptIdId($item_receipt_id_id)
    {
        $this->container['item_receipt_id_id'] = $item_receipt_id_id;

        return $this;
    }

    /**
     * Gets adjustment_id_id
     *
     * @return int
     */
    public function getAdjustmentIdId()
    {
        return $this->container['adjustment_id_id'];
    }

    /**
     * Sets adjustment_id_id
     *
     * @param int $adjustment_id_id adjustment_id_id
     *
     * @return $this
     */
    public function setAdjustmentIdId($adjustment_id_id)
    {
        $this->container['adjustment_id_id'] = $adjustment_id_id;

        return $this;
    }

    /**
     * Gets job_id_id
     *
     * @return int
     */
    public function getJobIdId()
    {
        return $this->container['job_id_id'];
    }

    /**
     * Sets job_id_id
     *
     * @param int $job_id_id job_id_id
     *
     * @return $this
     */
    public function setJobIdId($job_id_id)
    {
        $this->container['job_id_id'] = $job_id_id;

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


