<?php
/**
 * ReturnShipment
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
 * ReturnShipment Class Doc Comment
 *
 * @category Class
 * @package  Infoplus
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ReturnShipment implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'returnShipment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'create_date' => '\DateTime',
        'modify_date' => '\DateTime',
        'ship_date' => '\DateTime',
        'delivered_date' => '\DateTime',
        'tracking_no' => 'string',
        'warehouse_id' => 'int',
        'lob_id' => 'int',
        'order_no' => 'float',
        'order_no_list' => 'float[]',
        'carton_no' => 'int',
        'number_of_cartons' => 'int',
        'status' => 'string',
        'shipped' => 'bool',
        'casebreak' => 'bool',
        'carrier_service_id' => 'int',
        'dim1_in' => 'float',
        'dim2_in' => 'float',
        'dim3_in' => 'float',
        'estimated_zone' => 'string',
        'parcel_account_no' => 'string',
        'third_party_parcel_account_no' => 'string',
        'shipment_id' => 'string',
        'residential' => 'bool',
        'billing_option' => 'string',
        'weight_lbs' => 'float',
        'dim_weight' => 'float',
        'license_plate_number' => 'string',
        'charged_freight_amount' => 'float',
        'published_freight_amount' => 'float',
        'retail_freight_amount' => 'float',
        'external_shipping_system_id' => 'int',
        'shipment_type' => 'string',
        'carrier_company' => 'string',
        'carton_id' => 'int',
        'carton_type_id' => 'int',
        'delivery_message' => 'string',
        'load_id' => 'int',
        'oms_order_no' => 'int',
        'carrier' => 'int',
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
        'ship_date' => 'date-time',
        'delivered_date' => 'date-time',
        'tracking_no' => null,
        'warehouse_id' => 'int32',
        'lob_id' => 'int32',
        'order_no' => null,
        'order_no_list' => null,
        'carton_no' => 'int32',
        'number_of_cartons' => 'int32',
        'status' => null,
        'shipped' => null,
        'casebreak' => null,
        'carrier_service_id' => 'int32',
        'dim1_in' => null,
        'dim2_in' => null,
        'dim3_in' => null,
        'estimated_zone' => null,
        'parcel_account_no' => null,
        'third_party_parcel_account_no' => null,
        'shipment_id' => null,
        'residential' => null,
        'billing_option' => null,
        'weight_lbs' => null,
        'dim_weight' => null,
        'license_plate_number' => null,
        'charged_freight_amount' => null,
        'published_freight_amount' => null,
        'retail_freight_amount' => null,
        'external_shipping_system_id' => 'int32',
        'shipment_type' => null,
        'carrier_company' => null,
        'carton_id' => 'int32',
        'carton_type_id' => 'int32',
        'delivery_message' => null,
        'load_id' => 'int32',
        'oms_order_no' => 'int32',
        'carrier' => 'int32',
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
        'ship_date' => 'shipDate',
        'delivered_date' => 'deliveredDate',
        'tracking_no' => 'trackingNo',
        'warehouse_id' => 'warehouseId',
        'lob_id' => 'lobId',
        'order_no' => 'orderNo',
        'order_no_list' => 'orderNoList',
        'carton_no' => 'cartonNo',
        'number_of_cartons' => 'numberOfCartons',
        'status' => 'status',
        'shipped' => 'shipped',
        'casebreak' => 'casebreak',
        'carrier_service_id' => 'carrierServiceId',
        'dim1_in' => 'dim1In',
        'dim2_in' => 'dim2In',
        'dim3_in' => 'dim3In',
        'estimated_zone' => 'estimatedZone',
        'parcel_account_no' => 'parcelAccountNo',
        'third_party_parcel_account_no' => 'thirdPartyParcelAccountNo',
        'shipment_id' => 'shipmentId',
        'residential' => 'residential',
        'billing_option' => 'billingOption',
        'weight_lbs' => 'weightLbs',
        'dim_weight' => 'dimWeight',
        'license_plate_number' => 'licensePlateNumber',
        'charged_freight_amount' => 'chargedFreightAmount',
        'published_freight_amount' => 'publishedFreightAmount',
        'retail_freight_amount' => 'retailFreightAmount',
        'external_shipping_system_id' => 'externalShippingSystemId',
        'shipment_type' => 'shipmentType',
        'carrier_company' => 'carrierCompany',
        'carton_id' => 'cartonId',
        'carton_type_id' => 'cartonTypeId',
        'delivery_message' => 'deliveryMessage',
        'load_id' => 'loadId',
        'oms_order_no' => 'omsOrderNo',
        'carrier' => 'carrier',
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
        'ship_date' => 'setShipDate',
        'delivered_date' => 'setDeliveredDate',
        'tracking_no' => 'setTrackingNo',
        'warehouse_id' => 'setWarehouseId',
        'lob_id' => 'setLobId',
        'order_no' => 'setOrderNo',
        'order_no_list' => 'setOrderNoList',
        'carton_no' => 'setCartonNo',
        'number_of_cartons' => 'setNumberOfCartons',
        'status' => 'setStatus',
        'shipped' => 'setShipped',
        'casebreak' => 'setCasebreak',
        'carrier_service_id' => 'setCarrierServiceId',
        'dim1_in' => 'setDim1In',
        'dim2_in' => 'setDim2In',
        'dim3_in' => 'setDim3In',
        'estimated_zone' => 'setEstimatedZone',
        'parcel_account_no' => 'setParcelAccountNo',
        'third_party_parcel_account_no' => 'setThirdPartyParcelAccountNo',
        'shipment_id' => 'setShipmentId',
        'residential' => 'setResidential',
        'billing_option' => 'setBillingOption',
        'weight_lbs' => 'setWeightLbs',
        'dim_weight' => 'setDimWeight',
        'license_plate_number' => 'setLicensePlateNumber',
        'charged_freight_amount' => 'setChargedFreightAmount',
        'published_freight_amount' => 'setPublishedFreightAmount',
        'retail_freight_amount' => 'setRetailFreightAmount',
        'external_shipping_system_id' => 'setExternalShippingSystemId',
        'shipment_type' => 'setShipmentType',
        'carrier_company' => 'setCarrierCompany',
        'carton_id' => 'setCartonId',
        'carton_type_id' => 'setCartonTypeId',
        'delivery_message' => 'setDeliveryMessage',
        'load_id' => 'setLoadId',
        'oms_order_no' => 'setOmsOrderNo',
        'carrier' => 'setCarrier',
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
        'ship_date' => 'getShipDate',
        'delivered_date' => 'getDeliveredDate',
        'tracking_no' => 'getTrackingNo',
        'warehouse_id' => 'getWarehouseId',
        'lob_id' => 'getLobId',
        'order_no' => 'getOrderNo',
        'order_no_list' => 'getOrderNoList',
        'carton_no' => 'getCartonNo',
        'number_of_cartons' => 'getNumberOfCartons',
        'status' => 'getStatus',
        'shipped' => 'getShipped',
        'casebreak' => 'getCasebreak',
        'carrier_service_id' => 'getCarrierServiceId',
        'dim1_in' => 'getDim1In',
        'dim2_in' => 'getDim2In',
        'dim3_in' => 'getDim3In',
        'estimated_zone' => 'getEstimatedZone',
        'parcel_account_no' => 'getParcelAccountNo',
        'third_party_parcel_account_no' => 'getThirdPartyParcelAccountNo',
        'shipment_id' => 'getShipmentId',
        'residential' => 'getResidential',
        'billing_option' => 'getBillingOption',
        'weight_lbs' => 'getWeightLbs',
        'dim_weight' => 'getDimWeight',
        'license_plate_number' => 'getLicensePlateNumber',
        'charged_freight_amount' => 'getChargedFreightAmount',
        'published_freight_amount' => 'getPublishedFreightAmount',
        'retail_freight_amount' => 'getRetailFreightAmount',
        'external_shipping_system_id' => 'getExternalShippingSystemId',
        'shipment_type' => 'getShipmentType',
        'carrier_company' => 'getCarrierCompany',
        'carton_id' => 'getCartonId',
        'carton_type_id' => 'getCartonTypeId',
        'delivery_message' => 'getDeliveryMessage',
        'load_id' => 'getLoadId',
        'oms_order_no' => 'getOmsOrderNo',
        'carrier' => 'getCarrier',
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
        $this->container['ship_date'] = isset($data['ship_date']) ? $data['ship_date'] : null;
        $this->container['delivered_date'] = isset($data['delivered_date']) ? $data['delivered_date'] : null;
        $this->container['tracking_no'] = isset($data['tracking_no']) ? $data['tracking_no'] : null;
        $this->container['warehouse_id'] = isset($data['warehouse_id']) ? $data['warehouse_id'] : null;
        $this->container['lob_id'] = isset($data['lob_id']) ? $data['lob_id'] : null;
        $this->container['order_no'] = isset($data['order_no']) ? $data['order_no'] : null;
        $this->container['order_no_list'] = isset($data['order_no_list']) ? $data['order_no_list'] : null;
        $this->container['carton_no'] = isset($data['carton_no']) ? $data['carton_no'] : null;
        $this->container['number_of_cartons'] = isset($data['number_of_cartons']) ? $data['number_of_cartons'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['shipped'] = isset($data['shipped']) ? $data['shipped'] : false;
        $this->container['casebreak'] = isset($data['casebreak']) ? $data['casebreak'] : false;
        $this->container['carrier_service_id'] = isset($data['carrier_service_id']) ? $data['carrier_service_id'] : null;
        $this->container['dim1_in'] = isset($data['dim1_in']) ? $data['dim1_in'] : null;
        $this->container['dim2_in'] = isset($data['dim2_in']) ? $data['dim2_in'] : null;
        $this->container['dim3_in'] = isset($data['dim3_in']) ? $data['dim3_in'] : null;
        $this->container['estimated_zone'] = isset($data['estimated_zone']) ? $data['estimated_zone'] : null;
        $this->container['parcel_account_no'] = isset($data['parcel_account_no']) ? $data['parcel_account_no'] : null;
        $this->container['third_party_parcel_account_no'] = isset($data['third_party_parcel_account_no']) ? $data['third_party_parcel_account_no'] : null;
        $this->container['shipment_id'] = isset($data['shipment_id']) ? $data['shipment_id'] : null;
        $this->container['residential'] = isset($data['residential']) ? $data['residential'] : false;
        $this->container['billing_option'] = isset($data['billing_option']) ? $data['billing_option'] : null;
        $this->container['weight_lbs'] = isset($data['weight_lbs']) ? $data['weight_lbs'] : null;
        $this->container['dim_weight'] = isset($data['dim_weight']) ? $data['dim_weight'] : null;
        $this->container['license_plate_number'] = isset($data['license_plate_number']) ? $data['license_plate_number'] : null;
        $this->container['charged_freight_amount'] = isset($data['charged_freight_amount']) ? $data['charged_freight_amount'] : null;
        $this->container['published_freight_amount'] = isset($data['published_freight_amount']) ? $data['published_freight_amount'] : null;
        $this->container['retail_freight_amount'] = isset($data['retail_freight_amount']) ? $data['retail_freight_amount'] : null;
        $this->container['external_shipping_system_id'] = isset($data['external_shipping_system_id']) ? $data['external_shipping_system_id'] : null;
        $this->container['shipment_type'] = isset($data['shipment_type']) ? $data['shipment_type'] : null;
        $this->container['carrier_company'] = isset($data['carrier_company']) ? $data['carrier_company'] : null;
        $this->container['carton_id'] = isset($data['carton_id']) ? $data['carton_id'] : null;
        $this->container['carton_type_id'] = isset($data['carton_type_id']) ? $data['carton_type_id'] : null;
        $this->container['delivery_message'] = isset($data['delivery_message']) ? $data['delivery_message'] : null;
        $this->container['load_id'] = isset($data['load_id']) ? $data['load_id'] : null;
        $this->container['oms_order_no'] = isset($data['oms_order_no']) ? $data['oms_order_no'] : null;
        $this->container['carrier'] = isset($data['carrier']) ? $data['carrier'] : null;
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

        if ($this->container['warehouse_id'] === null) {
            $invalidProperties[] = "'warehouse_id' can't be null";
        }
        if ($this->container['carrier_company'] === null) {
            $invalidProperties[] = "'carrier_company' can't be null";
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
        if ($this->container['carrier_company'] === null) {
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
     * Gets delivered_date
     *
     * @return \DateTime
     */
    public function getDeliveredDate()
    {
        return $this->container['delivered_date'];
    }

    /**
     * Sets delivered_date
     *
     * @param \DateTime $delivered_date delivered_date
     *
     * @return $this
     */
    public function setDeliveredDate($delivered_date)
    {
        $this->container['delivered_date'] = $delivered_date;

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
     * Gets order_no_list
     *
     * @return float[]
     */
    public function getOrderNoList()
    {
        return $this->container['order_no_list'];
    }

    /**
     * Sets order_no_list
     *
     * @param float[] $order_no_list order_no_list
     *
     * @return $this
     */
    public function setOrderNoList($order_no_list)
    {
        $this->container['order_no_list'] = $order_no_list;

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
     * Gets number_of_cartons
     *
     * @return int
     */
    public function getNumberOfCartons()
    {
        return $this->container['number_of_cartons'];
    }

    /**
     * Sets number_of_cartons
     *
     * @param int $number_of_cartons number_of_cartons
     *
     * @return $this
     */
    public function setNumberOfCartons($number_of_cartons)
    {
        $this->container['number_of_cartons'] = $number_of_cartons;

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
     * Gets shipped
     *
     * @return bool
     */
    public function getShipped()
    {
        return $this->container['shipped'];
    }

    /**
     * Sets shipped
     *
     * @param bool $shipped shipped
     *
     * @return $this
     */
    public function setShipped($shipped)
    {
        $this->container['shipped'] = $shipped;

        return $this;
    }

    /**
     * Gets casebreak
     *
     * @return bool
     */
    public function getCasebreak()
    {
        return $this->container['casebreak'];
    }

    /**
     * Sets casebreak
     *
     * @param bool $casebreak casebreak
     *
     * @return $this
     */
    public function setCasebreak($casebreak)
    {
        $this->container['casebreak'] = $casebreak;

        return $this;
    }

    /**
     * Gets carrier_service_id
     *
     * @return int
     */
    public function getCarrierServiceId()
    {
        return $this->container['carrier_service_id'];
    }

    /**
     * Sets carrier_service_id
     *
     * @param int $carrier_service_id carrier_service_id
     *
     * @return $this
     */
    public function setCarrierServiceId($carrier_service_id)
    {
        $this->container['carrier_service_id'] = $carrier_service_id;

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
     * Gets estimated_zone
     *
     * @return string
     */
    public function getEstimatedZone()
    {
        return $this->container['estimated_zone'];
    }

    /**
     * Sets estimated_zone
     *
     * @param string $estimated_zone estimated_zone
     *
     * @return $this
     */
    public function setEstimatedZone($estimated_zone)
    {
        $this->container['estimated_zone'] = $estimated_zone;

        return $this;
    }

    /**
     * Gets parcel_account_no
     *
     * @return string
     */
    public function getParcelAccountNo()
    {
        return $this->container['parcel_account_no'];
    }

    /**
     * Sets parcel_account_no
     *
     * @param string $parcel_account_no parcel_account_no
     *
     * @return $this
     */
    public function setParcelAccountNo($parcel_account_no)
    {
        $this->container['parcel_account_no'] = $parcel_account_no;

        return $this;
    }

    /**
     * Gets third_party_parcel_account_no
     *
     * @return string
     */
    public function getThirdPartyParcelAccountNo()
    {
        return $this->container['third_party_parcel_account_no'];
    }

    /**
     * Sets third_party_parcel_account_no
     *
     * @param string $third_party_parcel_account_no third_party_parcel_account_no
     *
     * @return $this
     */
    public function setThirdPartyParcelAccountNo($third_party_parcel_account_no)
    {
        $this->container['third_party_parcel_account_no'] = $third_party_parcel_account_no;

        return $this;
    }

    /**
     * Gets shipment_id
     *
     * @return string
     */
    public function getShipmentId()
    {
        return $this->container['shipment_id'];
    }

    /**
     * Sets shipment_id
     *
     * @param string $shipment_id shipment_id
     *
     * @return $this
     */
    public function setShipmentId($shipment_id)
    {
        $this->container['shipment_id'] = $shipment_id;

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
     * Gets billing_option
     *
     * @return string
     */
    public function getBillingOption()
    {
        return $this->container['billing_option'];
    }

    /**
     * Sets billing_option
     *
     * @param string $billing_option billing_option
     *
     * @return $this
     */
    public function setBillingOption($billing_option)
    {
        $this->container['billing_option'] = $billing_option;

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
     * Gets license_plate_number
     *
     * @return string
     */
    public function getLicensePlateNumber()
    {
        return $this->container['license_plate_number'];
    }

    /**
     * Sets license_plate_number
     *
     * @param string $license_plate_number license_plate_number
     *
     * @return $this
     */
    public function setLicensePlateNumber($license_plate_number)
    {
        $this->container['license_plate_number'] = $license_plate_number;

        return $this;
    }

    /**
     * Gets charged_freight_amount
     *
     * @return float
     */
    public function getChargedFreightAmount()
    {
        return $this->container['charged_freight_amount'];
    }

    /**
     * Sets charged_freight_amount
     *
     * @param float $charged_freight_amount charged_freight_amount
     *
     * @return $this
     */
    public function setChargedFreightAmount($charged_freight_amount)
    {
        $this->container['charged_freight_amount'] = $charged_freight_amount;

        return $this;
    }

    /**
     * Gets published_freight_amount
     *
     * @return float
     */
    public function getPublishedFreightAmount()
    {
        return $this->container['published_freight_amount'];
    }

    /**
     * Sets published_freight_amount
     *
     * @param float $published_freight_amount published_freight_amount
     *
     * @return $this
     */
    public function setPublishedFreightAmount($published_freight_amount)
    {
        $this->container['published_freight_amount'] = $published_freight_amount;

        return $this;
    }

    /**
     * Gets retail_freight_amount
     *
     * @return float
     */
    public function getRetailFreightAmount()
    {
        return $this->container['retail_freight_amount'];
    }

    /**
     * Sets retail_freight_amount
     *
     * @param float $retail_freight_amount retail_freight_amount
     *
     * @return $this
     */
    public function setRetailFreightAmount($retail_freight_amount)
    {
        $this->container['retail_freight_amount'] = $retail_freight_amount;

        return $this;
    }

    /**
     * Gets external_shipping_system_id
     *
     * @return int
     */
    public function getExternalShippingSystemId()
    {
        return $this->container['external_shipping_system_id'];
    }

    /**
     * Sets external_shipping_system_id
     *
     * @param int $external_shipping_system_id external_shipping_system_id
     *
     * @return $this
     */
    public function setExternalShippingSystemId($external_shipping_system_id)
    {
        $this->container['external_shipping_system_id'] = $external_shipping_system_id;

        return $this;
    }

    /**
     * Gets shipment_type
     *
     * @return string
     */
    public function getShipmentType()
    {
        return $this->container['shipment_type'];
    }

    /**
     * Sets shipment_type
     *
     * @param string $shipment_type shipment_type
     *
     * @return $this
     */
    public function setShipmentType($shipment_type)
    {
        $this->container['shipment_type'] = $shipment_type;

        return $this;
    }

    /**
     * Gets carrier_company
     *
     * @return string
     */
    public function getCarrierCompany()
    {
        return $this->container['carrier_company'];
    }

    /**
     * Sets carrier_company
     *
     * @param string $carrier_company carrier_company
     *
     * @return $this
     */
    public function setCarrierCompany($carrier_company)
    {
        $this->container['carrier_company'] = $carrier_company;

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
     * Gets delivery_message
     *
     * @return string
     */
    public function getDeliveryMessage()
    {
        return $this->container['delivery_message'];
    }

    /**
     * Sets delivery_message
     *
     * @param string $delivery_message delivery_message
     *
     * @return $this
     */
    public function setDeliveryMessage($delivery_message)
    {
        $this->container['delivery_message'] = $delivery_message;

        return $this;
    }

    /**
     * Gets load_id
     *
     * @return int
     */
    public function getLoadId()
    {
        return $this->container['load_id'];
    }

    /**
     * Sets load_id
     *
     * @param int $load_id load_id
     *
     * @return $this
     */
    public function setLoadId($load_id)
    {
        $this->container['load_id'] = $load_id;

        return $this;
    }

    /**
     * Gets oms_order_no
     *
     * @return int
     */
    public function getOmsOrderNo()
    {
        return $this->container['oms_order_no'];
    }

    /**
     * Sets oms_order_no
     *
     * @param int $oms_order_no oms_order_no
     *
     * @return $this
     */
    public function setOmsOrderNo($oms_order_no)
    {
        $this->container['oms_order_no'] = $oms_order_no;

        return $this;
    }

    /**
     * Gets carrier
     *
     * @return int
     */
    public function getCarrier()
    {
        return $this->container['carrier'];
    }

    /**
     * Sets carrier
     *
     * @param int $carrier carrier
     *
     * @return $this
     */
    public function setCarrier($carrier)
    {
        $this->container['carrier'] = $carrier;

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


