<?php
/**
 * ItemSerial
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
 * ItemSerial Class Doc Comment
 *
 * @category Class
 * @package  Infoplus
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ItemSerial implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'itemSerial';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'create_date' => '\DateTime',
        'modify_date' => '\DateTime',
        'item_receipt_id' => 'int',
        'lob_id' => 'int',
        'asn_id' => 'int',
        'order_no_id' => 'float',
        'serial' => 'string',
        'received_date' => '\DateTime',
        'shipped_date' => '\DateTime',
        'in_inventory' => 'bool',
        's0' => 'string',
        's1' => 'string',
        's2' => 'string',
        's3' => 'string',
        's4' => 'string',
        's5' => 'string',
        's6' => 'string',
        's7' => 'string',
        's8' => 'string',
        's9' => 'string',
        's10' => 'string',
        's11' => 'string',
        's12' => 'string',
        's13' => 'string',
        's14' => 'string',
        's15' => 'string',
        's16' => 'string',
        's17' => 'string',
        's18' => 'string',
        's19' => 'string',
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
        'create_date' => 'date-time',
        'modify_date' => 'date-time',
        'item_receipt_id' => 'int32',
        'lob_id' => 'int32',
        'asn_id' => 'int32',
        'order_no_id' => null,
        'serial' => null,
        'received_date' => 'date-time',
        'shipped_date' => 'date-time',
        'in_inventory' => null,
        's0' => null,
        's1' => null,
        's2' => null,
        's3' => null,
        's4' => null,
        's5' => null,
        's6' => null,
        's7' => null,
        's8' => null,
        's9' => null,
        's10' => null,
        's11' => null,
        's12' => null,
        's13' => null,
        's14' => null,
        's15' => null,
        's16' => null,
        's17' => null,
        's18' => null,
        's19' => null,
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
        'create_date' => 'createDate',
        'modify_date' => 'modifyDate',
        'item_receipt_id' => 'itemReceiptId',
        'lob_id' => 'lobId',
        'asn_id' => 'asnId',
        'order_no_id' => 'orderNoId',
        'serial' => 'serial',
        'received_date' => 'receivedDate',
        'shipped_date' => 'shippedDate',
        'in_inventory' => 'inInventory',
        's0' => 's0',
        's1' => 's1',
        's2' => 's2',
        's3' => 's3',
        's4' => 's4',
        's5' => 's5',
        's6' => 's6',
        's7' => 's7',
        's8' => 's8',
        's9' => 's9',
        's10' => 's10',
        's11' => 's11',
        's12' => 's12',
        's13' => 's13',
        's14' => 's14',
        's15' => 's15',
        's16' => 's16',
        's17' => 's17',
        's18' => 's18',
        's19' => 's19',
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
        'create_date' => 'setCreateDate',
        'modify_date' => 'setModifyDate',
        'item_receipt_id' => 'setItemReceiptId',
        'lob_id' => 'setLobId',
        'asn_id' => 'setAsnId',
        'order_no_id' => 'setOrderNoId',
        'serial' => 'setSerial',
        'received_date' => 'setReceivedDate',
        'shipped_date' => 'setShippedDate',
        'in_inventory' => 'setInInventory',
        's0' => 'setS0',
        's1' => 'setS1',
        's2' => 'setS2',
        's3' => 'setS3',
        's4' => 'setS4',
        's5' => 'setS5',
        's6' => 'setS6',
        's7' => 'setS7',
        's8' => 'setS8',
        's9' => 'setS9',
        's10' => 'setS10',
        's11' => 'setS11',
        's12' => 'setS12',
        's13' => 'setS13',
        's14' => 'setS14',
        's15' => 'setS15',
        's16' => 'setS16',
        's17' => 'setS17',
        's18' => 'setS18',
        's19' => 'setS19',
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
        'create_date' => 'getCreateDate',
        'modify_date' => 'getModifyDate',
        'item_receipt_id' => 'getItemReceiptId',
        'lob_id' => 'getLobId',
        'asn_id' => 'getAsnId',
        'order_no_id' => 'getOrderNoId',
        'serial' => 'getSerial',
        'received_date' => 'getReceivedDate',
        'shipped_date' => 'getShippedDate',
        'in_inventory' => 'getInInventory',
        's0' => 'getS0',
        's1' => 'getS1',
        's2' => 'getS2',
        's3' => 'getS3',
        's4' => 'getS4',
        's5' => 'getS5',
        's6' => 'getS6',
        's7' => 'getS7',
        's8' => 'getS8',
        's9' => 'getS9',
        's10' => 'getS10',
        's11' => 'getS11',
        's12' => 'getS12',
        's13' => 'getS13',
        's14' => 'getS14',
        's15' => 'getS15',
        's16' => 'getS16',
        's17' => 'getS17',
        's18' => 'getS18',
        's19' => 'getS19',
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
        $this->container['create_date'] = isset($data['create_date']) ? $data['create_date'] : null;
        $this->container['modify_date'] = isset($data['modify_date']) ? $data['modify_date'] : null;
        $this->container['item_receipt_id'] = isset($data['item_receipt_id']) ? $data['item_receipt_id'] : null;
        $this->container['lob_id'] = isset($data['lob_id']) ? $data['lob_id'] : null;
        $this->container['asn_id'] = isset($data['asn_id']) ? $data['asn_id'] : null;
        $this->container['order_no_id'] = isset($data['order_no_id']) ? $data['order_no_id'] : null;
        $this->container['serial'] = isset($data['serial']) ? $data['serial'] : null;
        $this->container['received_date'] = isset($data['received_date']) ? $data['received_date'] : null;
        $this->container['shipped_date'] = isset($data['shipped_date']) ? $data['shipped_date'] : null;
        $this->container['in_inventory'] = isset($data['in_inventory']) ? $data['in_inventory'] : false;
        $this->container['s0'] = isset($data['s0']) ? $data['s0'] : null;
        $this->container['s1'] = isset($data['s1']) ? $data['s1'] : null;
        $this->container['s2'] = isset($data['s2']) ? $data['s2'] : null;
        $this->container['s3'] = isset($data['s3']) ? $data['s3'] : null;
        $this->container['s4'] = isset($data['s4']) ? $data['s4'] : null;
        $this->container['s5'] = isset($data['s5']) ? $data['s5'] : null;
        $this->container['s6'] = isset($data['s6']) ? $data['s6'] : null;
        $this->container['s7'] = isset($data['s7']) ? $data['s7'] : null;
        $this->container['s8'] = isset($data['s8']) ? $data['s8'] : null;
        $this->container['s9'] = isset($data['s9']) ? $data['s9'] : null;
        $this->container['s10'] = isset($data['s10']) ? $data['s10'] : null;
        $this->container['s11'] = isset($data['s11']) ? $data['s11'] : null;
        $this->container['s12'] = isset($data['s12']) ? $data['s12'] : null;
        $this->container['s13'] = isset($data['s13']) ? $data['s13'] : null;
        $this->container['s14'] = isset($data['s14']) ? $data['s14'] : null;
        $this->container['s15'] = isset($data['s15']) ? $data['s15'] : null;
        $this->container['s16'] = isset($data['s16']) ? $data['s16'] : null;
        $this->container['s17'] = isset($data['s17']) ? $data['s17'] : null;
        $this->container['s18'] = isset($data['s18']) ? $data['s18'] : null;
        $this->container['s19'] = isset($data['s19']) ? $data['s19'] : null;
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

        if ($this->container['lob_id'] === null) {
            $invalidProperties[] = "'lob_id' can't be null";
        }
        if ($this->container['serial'] === null) {
            $invalidProperties[] = "'serial' can't be null";
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

        if ($this->container['lob_id'] === null) {
            return false;
        }
        if ($this->container['serial'] === null) {
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
     * Gets item_receipt_id
     *
     * @return int
     */
    public function getItemReceiptId()
    {
        return $this->container['item_receipt_id'];
    }

    /**
     * Sets item_receipt_id
     *
     * @param int $item_receipt_id item_receipt_id
     *
     * @return $this
     */
    public function setItemReceiptId($item_receipt_id)
    {
        $this->container['item_receipt_id'] = $item_receipt_id;

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
     * Gets order_no_id
     *
     * @return float
     */
    public function getOrderNoId()
    {
        return $this->container['order_no_id'];
    }

    /**
     * Sets order_no_id
     *
     * @param float $order_no_id order_no_id
     *
     * @return $this
     */
    public function setOrderNoId($order_no_id)
    {
        $this->container['order_no_id'] = $order_no_id;

        return $this;
    }

    /**
     * Gets serial
     *
     * @return string
     */
    public function getSerial()
    {
        return $this->container['serial'];
    }

    /**
     * Sets serial
     *
     * @param string $serial serial
     *
     * @return $this
     */
    public function setSerial($serial)
    {
        $this->container['serial'] = $serial;

        return $this;
    }

    /**
     * Gets received_date
     *
     * @return \DateTime
     */
    public function getReceivedDate()
    {
        return $this->container['received_date'];
    }

    /**
     * Sets received_date
     *
     * @param \DateTime $received_date received_date
     *
     * @return $this
     */
    public function setReceivedDate($received_date)
    {
        $this->container['received_date'] = $received_date;

        return $this;
    }

    /**
     * Gets shipped_date
     *
     * @return \DateTime
     */
    public function getShippedDate()
    {
        return $this->container['shipped_date'];
    }

    /**
     * Sets shipped_date
     *
     * @param \DateTime $shipped_date shipped_date
     *
     * @return $this
     */
    public function setShippedDate($shipped_date)
    {
        $this->container['shipped_date'] = $shipped_date;

        return $this;
    }

    /**
     * Gets in_inventory
     *
     * @return bool
     */
    public function getInInventory()
    {
        return $this->container['in_inventory'];
    }

    /**
     * Sets in_inventory
     *
     * @param bool $in_inventory in_inventory
     *
     * @return $this
     */
    public function setInInventory($in_inventory)
    {
        $this->container['in_inventory'] = $in_inventory;

        return $this;
    }

    /**
     * Gets s0
     *
     * @return string
     */
    public function getS0()
    {
        return $this->container['s0'];
    }

    /**
     * Sets s0
     *
     * @param string $s0 s0
     *
     * @return $this
     */
    public function setS0($s0)
    {
        $this->container['s0'] = $s0;

        return $this;
    }

    /**
     * Gets s1
     *
     * @return string
     */
    public function getS1()
    {
        return $this->container['s1'];
    }

    /**
     * Sets s1
     *
     * @param string $s1 s1
     *
     * @return $this
     */
    public function setS1($s1)
    {
        $this->container['s1'] = $s1;

        return $this;
    }

    /**
     * Gets s2
     *
     * @return string
     */
    public function getS2()
    {
        return $this->container['s2'];
    }

    /**
     * Sets s2
     *
     * @param string $s2 s2
     *
     * @return $this
     */
    public function setS2($s2)
    {
        $this->container['s2'] = $s2;

        return $this;
    }

    /**
     * Gets s3
     *
     * @return string
     */
    public function getS3()
    {
        return $this->container['s3'];
    }

    /**
     * Sets s3
     *
     * @param string $s3 s3
     *
     * @return $this
     */
    public function setS3($s3)
    {
        $this->container['s3'] = $s3;

        return $this;
    }

    /**
     * Gets s4
     *
     * @return string
     */
    public function getS4()
    {
        return $this->container['s4'];
    }

    /**
     * Sets s4
     *
     * @param string $s4 s4
     *
     * @return $this
     */
    public function setS4($s4)
    {
        $this->container['s4'] = $s4;

        return $this;
    }

    /**
     * Gets s5
     *
     * @return string
     */
    public function getS5()
    {
        return $this->container['s5'];
    }

    /**
     * Sets s5
     *
     * @param string $s5 s5
     *
     * @return $this
     */
    public function setS5($s5)
    {
        $this->container['s5'] = $s5;

        return $this;
    }

    /**
     * Gets s6
     *
     * @return string
     */
    public function getS6()
    {
        return $this->container['s6'];
    }

    /**
     * Sets s6
     *
     * @param string $s6 s6
     *
     * @return $this
     */
    public function setS6($s6)
    {
        $this->container['s6'] = $s6;

        return $this;
    }

    /**
     * Gets s7
     *
     * @return string
     */
    public function getS7()
    {
        return $this->container['s7'];
    }

    /**
     * Sets s7
     *
     * @param string $s7 s7
     *
     * @return $this
     */
    public function setS7($s7)
    {
        $this->container['s7'] = $s7;

        return $this;
    }

    /**
     * Gets s8
     *
     * @return string
     */
    public function getS8()
    {
        return $this->container['s8'];
    }

    /**
     * Sets s8
     *
     * @param string $s8 s8
     *
     * @return $this
     */
    public function setS8($s8)
    {
        $this->container['s8'] = $s8;

        return $this;
    }

    /**
     * Gets s9
     *
     * @return string
     */
    public function getS9()
    {
        return $this->container['s9'];
    }

    /**
     * Sets s9
     *
     * @param string $s9 s9
     *
     * @return $this
     */
    public function setS9($s9)
    {
        $this->container['s9'] = $s9;

        return $this;
    }

    /**
     * Gets s10
     *
     * @return string
     */
    public function getS10()
    {
        return $this->container['s10'];
    }

    /**
     * Sets s10
     *
     * @param string $s10 s10
     *
     * @return $this
     */
    public function setS10($s10)
    {
        $this->container['s10'] = $s10;

        return $this;
    }

    /**
     * Gets s11
     *
     * @return string
     */
    public function getS11()
    {
        return $this->container['s11'];
    }

    /**
     * Sets s11
     *
     * @param string $s11 s11
     *
     * @return $this
     */
    public function setS11($s11)
    {
        $this->container['s11'] = $s11;

        return $this;
    }

    /**
     * Gets s12
     *
     * @return string
     */
    public function getS12()
    {
        return $this->container['s12'];
    }

    /**
     * Sets s12
     *
     * @param string $s12 s12
     *
     * @return $this
     */
    public function setS12($s12)
    {
        $this->container['s12'] = $s12;

        return $this;
    }

    /**
     * Gets s13
     *
     * @return string
     */
    public function getS13()
    {
        return $this->container['s13'];
    }

    /**
     * Sets s13
     *
     * @param string $s13 s13
     *
     * @return $this
     */
    public function setS13($s13)
    {
        $this->container['s13'] = $s13;

        return $this;
    }

    /**
     * Gets s14
     *
     * @return string
     */
    public function getS14()
    {
        return $this->container['s14'];
    }

    /**
     * Sets s14
     *
     * @param string $s14 s14
     *
     * @return $this
     */
    public function setS14($s14)
    {
        $this->container['s14'] = $s14;

        return $this;
    }

    /**
     * Gets s15
     *
     * @return string
     */
    public function getS15()
    {
        return $this->container['s15'];
    }

    /**
     * Sets s15
     *
     * @param string $s15 s15
     *
     * @return $this
     */
    public function setS15($s15)
    {
        $this->container['s15'] = $s15;

        return $this;
    }

    /**
     * Gets s16
     *
     * @return string
     */
    public function getS16()
    {
        return $this->container['s16'];
    }

    /**
     * Sets s16
     *
     * @param string $s16 s16
     *
     * @return $this
     */
    public function setS16($s16)
    {
        $this->container['s16'] = $s16;

        return $this;
    }

    /**
     * Gets s17
     *
     * @return string
     */
    public function getS17()
    {
        return $this->container['s17'];
    }

    /**
     * Sets s17
     *
     * @param string $s17 s17
     *
     * @return $this
     */
    public function setS17($s17)
    {
        $this->container['s17'] = $s17;

        return $this;
    }

    /**
     * Gets s18
     *
     * @return string
     */
    public function getS18()
    {
        return $this->container['s18'];
    }

    /**
     * Sets s18
     *
     * @param string $s18 s18
     *
     * @return $this
     */
    public function setS18($s18)
    {
        $this->container['s18'] = $s18;

        return $this;
    }

    /**
     * Gets s19
     *
     * @return string
     */
    public function getS19()
    {
        return $this->container['s19'];
    }

    /**
     * Sets s19
     *
     * @param string $s19 s19
     *
     * @return $this
     */
    public function setS19($s19)
    {
        $this->container['s19'] = $s19;

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


