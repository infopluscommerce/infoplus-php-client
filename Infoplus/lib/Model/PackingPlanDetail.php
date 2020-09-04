<?php
/**
 * PackingPlanDetail
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
 * PackingPlanDetail Class Doc Comment
 *
 * @category Class
 * @package  Infoplus
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PackingPlanDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'packingPlanDetail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'create_date' => '\DateTime',
        'modify_date' => '\DateTime',
        'packing_plan_id' => 'int',
        'pallet_no' => 'int',
        'pallet_type_id' => 'int',
        'master_carton_no' => 'int',
        'master_carton_type_id' => 'int',
        'carton_no' => 'int',
        'carton_type_id' => 'int',
        'carton_id' => 'int',
        'order_id' => 'float',
        'lob_id' => 'int',
        'sku_id' => 'int',
        'line_item_id' => 'int',
        'quantity' => 'int',
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
        'modify_date' => 'date-time',
        'packing_plan_id' => 'int32',
        'pallet_no' => 'int32',
        'pallet_type_id' => 'int32',
        'master_carton_no' => 'int32',
        'master_carton_type_id' => 'int32',
        'carton_no' => 'int32',
        'carton_type_id' => 'int32',
        'carton_id' => 'int32',
        'order_id' => null,
        'lob_id' => 'int32',
        'sku_id' => 'int32',
        'line_item_id' => 'int32',
        'quantity' => 'int32',
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
        'modify_date' => 'modifyDate',
        'packing_plan_id' => 'packingPlanId',
        'pallet_no' => 'palletNo',
        'pallet_type_id' => 'palletTypeId',
        'master_carton_no' => 'masterCartonNo',
        'master_carton_type_id' => 'masterCartonTypeId',
        'carton_no' => 'cartonNo',
        'carton_type_id' => 'cartonTypeId',
        'carton_id' => 'cartonId',
        'order_id' => 'orderId',
        'lob_id' => 'lobId',
        'sku_id' => 'skuId',
        'line_item_id' => 'lineItemId',
        'quantity' => 'quantity',
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
        'modify_date' => 'setModifyDate',
        'packing_plan_id' => 'setPackingPlanId',
        'pallet_no' => 'setPalletNo',
        'pallet_type_id' => 'setPalletTypeId',
        'master_carton_no' => 'setMasterCartonNo',
        'master_carton_type_id' => 'setMasterCartonTypeId',
        'carton_no' => 'setCartonNo',
        'carton_type_id' => 'setCartonTypeId',
        'carton_id' => 'setCartonId',
        'order_id' => 'setOrderId',
        'lob_id' => 'setLobId',
        'sku_id' => 'setSkuId',
        'line_item_id' => 'setLineItemId',
        'quantity' => 'setQuantity',
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
        'modify_date' => 'getModifyDate',
        'packing_plan_id' => 'getPackingPlanId',
        'pallet_no' => 'getPalletNo',
        'pallet_type_id' => 'getPalletTypeId',
        'master_carton_no' => 'getMasterCartonNo',
        'master_carton_type_id' => 'getMasterCartonTypeId',
        'carton_no' => 'getCartonNo',
        'carton_type_id' => 'getCartonTypeId',
        'carton_id' => 'getCartonId',
        'order_id' => 'getOrderId',
        'lob_id' => 'getLobId',
        'sku_id' => 'getSkuId',
        'line_item_id' => 'getLineItemId',
        'quantity' => 'getQuantity',
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
        $this->container['modify_date'] = isset($data['modify_date']) ? $data['modify_date'] : null;
        $this->container['packing_plan_id'] = isset($data['packing_plan_id']) ? $data['packing_plan_id'] : null;
        $this->container['pallet_no'] = isset($data['pallet_no']) ? $data['pallet_no'] : null;
        $this->container['pallet_type_id'] = isset($data['pallet_type_id']) ? $data['pallet_type_id'] : null;
        $this->container['master_carton_no'] = isset($data['master_carton_no']) ? $data['master_carton_no'] : null;
        $this->container['master_carton_type_id'] = isset($data['master_carton_type_id']) ? $data['master_carton_type_id'] : null;
        $this->container['carton_no'] = isset($data['carton_no']) ? $data['carton_no'] : null;
        $this->container['carton_type_id'] = isset($data['carton_type_id']) ? $data['carton_type_id'] : null;
        $this->container['carton_id'] = isset($data['carton_id']) ? $data['carton_id'] : null;
        $this->container['order_id'] = isset($data['order_id']) ? $data['order_id'] : null;
        $this->container['lob_id'] = isset($data['lob_id']) ? $data['lob_id'] : null;
        $this->container['sku_id'] = isset($data['sku_id']) ? $data['sku_id'] : null;
        $this->container['line_item_id'] = isset($data['line_item_id']) ? $data['line_item_id'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
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
     * Gets packing_plan_id
     *
     * @return int
     */
    public function getPackingPlanId()
    {
        return $this->container['packing_plan_id'];
    }

    /**
     * Sets packing_plan_id
     *
     * @param int $packing_plan_id packing_plan_id
     *
     * @return $this
     */
    public function setPackingPlanId($packing_plan_id)
    {
        $this->container['packing_plan_id'] = $packing_plan_id;

        return $this;
    }

    /**
     * Gets pallet_no
     *
     * @return int
     */
    public function getPalletNo()
    {
        return $this->container['pallet_no'];
    }

    /**
     * Sets pallet_no
     *
     * @param int $pallet_no pallet_no
     *
     * @return $this
     */
    public function setPalletNo($pallet_no)
    {
        $this->container['pallet_no'] = $pallet_no;

        return $this;
    }

    /**
     * Gets pallet_type_id
     *
     * @return int
     */
    public function getPalletTypeId()
    {
        return $this->container['pallet_type_id'];
    }

    /**
     * Sets pallet_type_id
     *
     * @param int $pallet_type_id pallet_type_id
     *
     * @return $this
     */
    public function setPalletTypeId($pallet_type_id)
    {
        $this->container['pallet_type_id'] = $pallet_type_id;

        return $this;
    }

    /**
     * Gets master_carton_no
     *
     * @return int
     */
    public function getMasterCartonNo()
    {
        return $this->container['master_carton_no'];
    }

    /**
     * Sets master_carton_no
     *
     * @param int $master_carton_no master_carton_no
     *
     * @return $this
     */
    public function setMasterCartonNo($master_carton_no)
    {
        $this->container['master_carton_no'] = $master_carton_no;

        return $this;
    }

    /**
     * Gets master_carton_type_id
     *
     * @return int
     */
    public function getMasterCartonTypeId()
    {
        return $this->container['master_carton_type_id'];
    }

    /**
     * Sets master_carton_type_id
     *
     * @param int $master_carton_type_id master_carton_type_id
     *
     * @return $this
     */
    public function setMasterCartonTypeId($master_carton_type_id)
    {
        $this->container['master_carton_type_id'] = $master_carton_type_id;

        return $this;
    }

    /**
     * Gets carton_no
     *
     * @return int
     */
    public function getCartonNo()
    {
        return $this->container['carton_no'];
    }

    /**
     * Sets carton_no
     *
     * @param int $carton_no carton_no
     *
     * @return $this
     */
    public function setCartonNo($carton_no)
    {
        $this->container['carton_no'] = $carton_no;

        return $this;
    }

    /**
     * Gets carton_type_id
     *
     * @return int
     */
    public function getCartonTypeId()
    {
        return $this->container['carton_type_id'];
    }

    /**
     * Sets carton_type_id
     *
     * @param int $carton_type_id carton_type_id
     *
     * @return $this
     */
    public function setCartonTypeId($carton_type_id)
    {
        $this->container['carton_type_id'] = $carton_type_id;

        return $this;
    }

    /**
     * Gets carton_id
     *
     * @return int
     */
    public function getCartonId()
    {
        return $this->container['carton_id'];
    }

    /**
     * Sets carton_id
     *
     * @param int $carton_id carton_id
     *
     * @return $this
     */
    public function setCartonId($carton_id)
    {
        $this->container['carton_id'] = $carton_id;

        return $this;
    }

    /**
     * Gets order_id
     *
     * @return float
     */
    public function getOrderId()
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id
     *
     * @param float $order_id order_id
     *
     * @return $this
     */
    public function setOrderId($order_id)
    {
        $this->container['order_id'] = $order_id;

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
     * Gets sku_id
     *
     * @return int
     */
    public function getSkuId()
    {
        return $this->container['sku_id'];
    }

    /**
     * Sets sku_id
     *
     * @param int $sku_id sku_id
     *
     * @return $this
     */
    public function setSkuId($sku_id)
    {
        $this->container['sku_id'] = $sku_id;

        return $this;
    }

    /**
     * Gets line_item_id
     *
     * @return int
     */
    public function getLineItemId()
    {
        return $this->container['line_item_id'];
    }

    /**
     * Sets line_item_id
     *
     * @param int $line_item_id line_item_id
     *
     * @return $this
     */
    public function setLineItemId($line_item_id)
    {
        $this->container['line_item_id'] = $line_item_id;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int $quantity quantity
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

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

