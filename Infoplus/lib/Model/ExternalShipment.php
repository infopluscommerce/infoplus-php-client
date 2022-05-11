<?php
/**
 * ExternalShipment
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
 * ExternalShipment Class Doc Comment
 *
 * @category Class
 * @package  Infoplus
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ExternalShipment implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'externalShipment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'create_date' => '\DateTime',
        'modify_date' => '\DateTime',
        'order_id' => 'float',
        'carrier_id' => 'int',
        'parcel_account_id' => 'int',
        'third_party_parcel_account_id' => 'int',
        'freight' => 'float',
        'tracking_no' => 'string',
        'dim1_in' => 'float',
        'dim2_in' => 'float',
        'dim3_in' => 'float',
        'weight_lbs' => 'float',
        'dim_weight' => 'float',
        'residential' => 'bool',
        'lob_id' => 'int',
        'zone' => 'string',
        'ship_date' => '\DateTime',
        'status' => 'string',
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
        'order_id' => null,
        'carrier_id' => 'int32',
        'parcel_account_id' => 'int32',
        'third_party_parcel_account_id' => 'int32',
        'freight' => null,
        'tracking_no' => null,
        'dim1_in' => null,
        'dim2_in' => null,
        'dim3_in' => null,
        'weight_lbs' => null,
        'dim_weight' => null,
        'residential' => null,
        'lob_id' => 'int32',
        'zone' => null,
        'ship_date' => 'date-time',
        'status' => null,
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
        'order_id' => 'orderId',
        'carrier_id' => 'carrierId',
        'parcel_account_id' => 'parcelAccountId',
        'third_party_parcel_account_id' => 'thirdPartyParcelAccountId',
        'freight' => 'freight',
        'tracking_no' => 'trackingNo',
        'dim1_in' => 'dim1In',
        'dim2_in' => 'dim2In',
        'dim3_in' => 'dim3In',
        'weight_lbs' => 'weightLbs',
        'dim_weight' => 'dimWeight',
        'residential' => 'residential',
        'lob_id' => 'lobId',
        'zone' => 'zone',
        'ship_date' => 'shipDate',
        'status' => 'status',
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
        'order_id' => 'setOrderId',
        'carrier_id' => 'setCarrierId',
        'parcel_account_id' => 'setParcelAccountId',
        'third_party_parcel_account_id' => 'setThirdPartyParcelAccountId',
        'freight' => 'setFreight',
        'tracking_no' => 'setTrackingNo',
        'dim1_in' => 'setDim1In',
        'dim2_in' => 'setDim2In',
        'dim3_in' => 'setDim3In',
        'weight_lbs' => 'setWeightLbs',
        'dim_weight' => 'setDimWeight',
        'residential' => 'setResidential',
        'lob_id' => 'setLobId',
        'zone' => 'setZone',
        'ship_date' => 'setShipDate',
        'status' => 'setStatus',
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
        'order_id' => 'getOrderId',
        'carrier_id' => 'getCarrierId',
        'parcel_account_id' => 'getParcelAccountId',
        'third_party_parcel_account_id' => 'getThirdPartyParcelAccountId',
        'freight' => 'getFreight',
        'tracking_no' => 'getTrackingNo',
        'dim1_in' => 'getDim1In',
        'dim2_in' => 'getDim2In',
        'dim3_in' => 'getDim3In',
        'weight_lbs' => 'getWeightLbs',
        'dim_weight' => 'getDimWeight',
        'residential' => 'getResidential',
        'lob_id' => 'getLobId',
        'zone' => 'getZone',
        'ship_date' => 'getShipDate',
        'status' => 'getStatus',
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
        $this->container['order_id'] = isset($data['order_id']) ? $data['order_id'] : null;
        $this->container['carrier_id'] = isset($data['carrier_id']) ? $data['carrier_id'] : null;
        $this->container['parcel_account_id'] = isset($data['parcel_account_id']) ? $data['parcel_account_id'] : null;
        $this->container['third_party_parcel_account_id'] = isset($data['third_party_parcel_account_id']) ? $data['third_party_parcel_account_id'] : null;
        $this->container['freight'] = isset($data['freight']) ? $data['freight'] : null;
        $this->container['tracking_no'] = isset($data['tracking_no']) ? $data['tracking_no'] : null;
        $this->container['dim1_in'] = isset($data['dim1_in']) ? $data['dim1_in'] : null;
        $this->container['dim2_in'] = isset($data['dim2_in']) ? $data['dim2_in'] : null;
        $this->container['dim3_in'] = isset($data['dim3_in']) ? $data['dim3_in'] : null;
        $this->container['weight_lbs'] = isset($data['weight_lbs']) ? $data['weight_lbs'] : null;
        $this->container['dim_weight'] = isset($data['dim_weight']) ? $data['dim_weight'] : null;
        $this->container['residential'] = isset($data['residential']) ? $data['residential'] : false;
        $this->container['lob_id'] = isset($data['lob_id']) ? $data['lob_id'] : null;
        $this->container['zone'] = isset($data['zone']) ? $data['zone'] : null;
        $this->container['ship_date'] = isset($data['ship_date']) ? $data['ship_date'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
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

        if ($this->container['order_id'] === null) {
            $invalidProperties[] = "'order_id' can't be null";
        }
        if ($this->container['carrier_id'] === null) {
            $invalidProperties[] = "'carrier_id' can't be null";
        }
        if ($this->container['parcel_account_id'] === null) {
            $invalidProperties[] = "'parcel_account_id' can't be null";
        }
        if ($this->container['tracking_no'] === null) {
            $invalidProperties[] = "'tracking_no' can't be null";
        }
        if ($this->container['lob_id'] === null) {
            $invalidProperties[] = "'lob_id' can't be null";
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

        if ($this->container['order_id'] === null) {
            return false;
        }
        if ($this->container['carrier_id'] === null) {
            return false;
        }
        if ($this->container['parcel_account_id'] === null) {
            return false;
        }
        if ($this->container['tracking_no'] === null) {
            return false;
        }
        if ($this->container['lob_id'] === null) {
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
     * Gets carrier_id
     *
     * @return int
     */
    public function getCarrierId()
    {
        return $this->container['carrier_id'];
    }

    /**
     * Sets carrier_id
     *
     * @param int $carrier_id carrier_id
     *
     * @return $this
     */
    public function setCarrierId($carrier_id)
    {
        $this->container['carrier_id'] = $carrier_id;

        return $this;
    }

    /**
     * Gets parcel_account_id
     *
     * @return int
     */
    public function getParcelAccountId()
    {
        return $this->container['parcel_account_id'];
    }

    /**
     * Sets parcel_account_id
     *
     * @param int $parcel_account_id parcel_account_id
     *
     * @return $this
     */
    public function setParcelAccountId($parcel_account_id)
    {
        $this->container['parcel_account_id'] = $parcel_account_id;

        return $this;
    }

    /**
     * Gets third_party_parcel_account_id
     *
     * @return int
     */
    public function getThirdPartyParcelAccountId()
    {
        return $this->container['third_party_parcel_account_id'];
    }

    /**
     * Sets third_party_parcel_account_id
     *
     * @param int $third_party_parcel_account_id third_party_parcel_account_id
     *
     * @return $this
     */
    public function setThirdPartyParcelAccountId($third_party_parcel_account_id)
    {
        $this->container['third_party_parcel_account_id'] = $third_party_parcel_account_id;

        return $this;
    }

    /**
     * Gets freight
     *
     * @return float
     */
    public function getFreight()
    {
        return $this->container['freight'];
    }

    /**
     * Sets freight
     *
     * @param float $freight freight
     *
     * @return $this
     */
    public function setFreight($freight)
    {
        $this->container['freight'] = $freight;

        return $this;
    }

    /**
     * Gets tracking_no
     *
     * @return string
     */
    public function getTrackingNo()
    {
        return $this->container['tracking_no'];
    }

    /**
     * Sets tracking_no
     *
     * @param string $tracking_no tracking_no
     *
     * @return $this
     */
    public function setTrackingNo($tracking_no)
    {
        $this->container['tracking_no'] = $tracking_no;

        return $this;
    }

    /**
     * Gets dim1_in
     *
     * @return float
     */
    public function getDim1In()
    {
        return $this->container['dim1_in'];
    }

    /**
     * Sets dim1_in
     *
     * @param float $dim1_in dim1_in
     *
     * @return $this
     */
    public function setDim1In($dim1_in)
    {
        $this->container['dim1_in'] = $dim1_in;

        return $this;
    }

    /**
     * Gets dim2_in
     *
     * @return float
     */
    public function getDim2In()
    {
        return $this->container['dim2_in'];
    }

    /**
     * Sets dim2_in
     *
     * @param float $dim2_in dim2_in
     *
     * @return $this
     */
    public function setDim2In($dim2_in)
    {
        $this->container['dim2_in'] = $dim2_in;

        return $this;
    }

    /**
     * Gets dim3_in
     *
     * @return float
     */
    public function getDim3In()
    {
        return $this->container['dim3_in'];
    }

    /**
     * Sets dim3_in
     *
     * @param float $dim3_in dim3_in
     *
     * @return $this
     */
    public function setDim3In($dim3_in)
    {
        $this->container['dim3_in'] = $dim3_in;

        return $this;
    }

    /**
     * Gets weight_lbs
     *
     * @return float
     */
    public function getWeightLbs()
    {
        return $this->container['weight_lbs'];
    }

    /**
     * Sets weight_lbs
     *
     * @param float $weight_lbs weight_lbs
     *
     * @return $this
     */
    public function setWeightLbs($weight_lbs)
    {
        $this->container['weight_lbs'] = $weight_lbs;

        return $this;
    }

    /**
     * Gets dim_weight
     *
     * @return float
     */
    public function getDimWeight()
    {
        return $this->container['dim_weight'];
    }

    /**
     * Sets dim_weight
     *
     * @param float $dim_weight dim_weight
     *
     * @return $this
     */
    public function setDimWeight($dim_weight)
    {
        $this->container['dim_weight'] = $dim_weight;

        return $this;
    }

    /**
     * Gets residential
     *
     * @return bool
     */
    public function getResidential()
    {
        return $this->container['residential'];
    }

    /**
     * Sets residential
     *
     * @param bool $residential residential
     *
     * @return $this
     */
    public function setResidential($residential)
    {
        $this->container['residential'] = $residential;

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
     * Gets zone
     *
     * @return string
     */
    public function getZone()
    {
        return $this->container['zone'];
    }

    /**
     * Sets zone
     *
     * @param string $zone zone
     *
     * @return $this
     */
    public function setZone($zone)
    {
        $this->container['zone'] = $zone;

        return $this;
    }

    /**
     * Gets ship_date
     *
     * @return \DateTime
     */
    public function getShipDate()
    {
        return $this->container['ship_date'];
    }

    /**
     * Sets ship_date
     *
     * @param \DateTime $ship_date ship_date
     *
     * @return $this
     */
    public function setShipDate($ship_date)
    {
        $this->container['ship_date'] = $ship_date;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

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


