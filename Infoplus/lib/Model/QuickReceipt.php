<?php
/**
 * QuickReceipt
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
 * QuickReceipt Class Doc Comment
 *
 * @category Class
 * @package  Infoplus
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class QuickReceipt implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'quickReceipt';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'created_by' => 'int',
        'create_date' => '\DateTime',
        'modify_date' => '\DateTime',
        'warehouse_id' => 'int',
        'lob_id' => 'int',
        'location_id' => 'int',
        'quantity' => 'int',
        'vendor_id' => 'int',
        'carrier' => 'string',
        'status' => 'string',
        'unit_code' => 'string',
        'wrap_code' => 'string',
        'weight_per_wrap' => 'float',
        'units_per_wrap' => 'int',
        'quantity_per_inner_pack' => 'int',
        'units_per_case' => 'int',
        'quantity_per_pallet' => 'int',
        'case_weight' => 'float',
        'production_lot' => 'string',
        'revision_date' => 'string',
        'origin' => 'string',
        'carton_length' => 'float',
        'carton_width' => 'float',
        'carton_height' => 'float',
        'cost' => 'float',
        'sell_price' => 'float',
        'pricing_per' => 'string',
        'generated_item_receipt_id' => 'int',
        'generated_asn_id' => 'int',
        'dock_date' => '\DateTime',
        'product_id_tag' => 'string',
        'expiration_date' => '\DateTime',
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
        'created_by' => 'int32',
        'create_date' => 'date-time',
        'modify_date' => 'date-time',
        'warehouse_id' => 'int32',
        'lob_id' => 'int32',
        'location_id' => 'int32',
        'quantity' => 'int32',
        'vendor_id' => 'int32',
        'carrier' => null,
        'status' => null,
        'unit_code' => null,
        'wrap_code' => null,
        'weight_per_wrap' => null,
        'units_per_wrap' => 'int32',
        'quantity_per_inner_pack' => 'int32',
        'units_per_case' => 'int32',
        'quantity_per_pallet' => 'int32',
        'case_weight' => null,
        'production_lot' => null,
        'revision_date' => null,
        'origin' => null,
        'carton_length' => null,
        'carton_width' => null,
        'carton_height' => null,
        'cost' => null,
        'sell_price' => null,
        'pricing_per' => null,
        'generated_item_receipt_id' => 'int32',
        'generated_asn_id' => 'int32',
        'dock_date' => 'date-time',
        'product_id_tag' => null,
        'expiration_date' => 'date-time',
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
        'created_by' => 'createdBy',
        'create_date' => 'createDate',
        'modify_date' => 'modifyDate',
        'warehouse_id' => 'warehouseId',
        'lob_id' => 'lobId',
        'location_id' => 'locationId',
        'quantity' => 'quantity',
        'vendor_id' => 'vendorId',
        'carrier' => 'carrier',
        'status' => 'status',
        'unit_code' => 'unitCode',
        'wrap_code' => 'wrapCode',
        'weight_per_wrap' => 'weightPerWrap',
        'units_per_wrap' => 'unitsPerWrap',
        'quantity_per_inner_pack' => 'quantityPerInnerPack',
        'units_per_case' => 'unitsPerCase',
        'quantity_per_pallet' => 'quantityPerPallet',
        'case_weight' => 'caseWeight',
        'production_lot' => 'productionLot',
        'revision_date' => 'revisionDate',
        'origin' => 'origin',
        'carton_length' => 'cartonLength',
        'carton_width' => 'cartonWidth',
        'carton_height' => 'cartonHeight',
        'cost' => 'cost',
        'sell_price' => 'sellPrice',
        'pricing_per' => 'pricingPer',
        'generated_item_receipt_id' => 'generatedItemReceiptId',
        'generated_asn_id' => 'generatedASNId',
        'dock_date' => 'dockDate',
        'product_id_tag' => 'productIdTag',
        'expiration_date' => 'expirationDate',
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
        'created_by' => 'setCreatedBy',
        'create_date' => 'setCreateDate',
        'modify_date' => 'setModifyDate',
        'warehouse_id' => 'setWarehouseId',
        'lob_id' => 'setLobId',
        'location_id' => 'setLocationId',
        'quantity' => 'setQuantity',
        'vendor_id' => 'setVendorId',
        'carrier' => 'setCarrier',
        'status' => 'setStatus',
        'unit_code' => 'setUnitCode',
        'wrap_code' => 'setWrapCode',
        'weight_per_wrap' => 'setWeightPerWrap',
        'units_per_wrap' => 'setUnitsPerWrap',
        'quantity_per_inner_pack' => 'setQuantityPerInnerPack',
        'units_per_case' => 'setUnitsPerCase',
        'quantity_per_pallet' => 'setQuantityPerPallet',
        'case_weight' => 'setCaseWeight',
        'production_lot' => 'setProductionLot',
        'revision_date' => 'setRevisionDate',
        'origin' => 'setOrigin',
        'carton_length' => 'setCartonLength',
        'carton_width' => 'setCartonWidth',
        'carton_height' => 'setCartonHeight',
        'cost' => 'setCost',
        'sell_price' => 'setSellPrice',
        'pricing_per' => 'setPricingPer',
        'generated_item_receipt_id' => 'setGeneratedItemReceiptId',
        'generated_asn_id' => 'setGeneratedAsnId',
        'dock_date' => 'setDockDate',
        'product_id_tag' => 'setProductIdTag',
        'expiration_date' => 'setExpirationDate',
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
        'created_by' => 'getCreatedBy',
        'create_date' => 'getCreateDate',
        'modify_date' => 'getModifyDate',
        'warehouse_id' => 'getWarehouseId',
        'lob_id' => 'getLobId',
        'location_id' => 'getLocationId',
        'quantity' => 'getQuantity',
        'vendor_id' => 'getVendorId',
        'carrier' => 'getCarrier',
        'status' => 'getStatus',
        'unit_code' => 'getUnitCode',
        'wrap_code' => 'getWrapCode',
        'weight_per_wrap' => 'getWeightPerWrap',
        'units_per_wrap' => 'getUnitsPerWrap',
        'quantity_per_inner_pack' => 'getQuantityPerInnerPack',
        'units_per_case' => 'getUnitsPerCase',
        'quantity_per_pallet' => 'getQuantityPerPallet',
        'case_weight' => 'getCaseWeight',
        'production_lot' => 'getProductionLot',
        'revision_date' => 'getRevisionDate',
        'origin' => 'getOrigin',
        'carton_length' => 'getCartonLength',
        'carton_width' => 'getCartonWidth',
        'carton_height' => 'getCartonHeight',
        'cost' => 'getCost',
        'sell_price' => 'getSellPrice',
        'pricing_per' => 'getPricingPer',
        'generated_item_receipt_id' => 'getGeneratedItemReceiptId',
        'generated_asn_id' => 'getGeneratedAsnId',
        'dock_date' => 'getDockDate',
        'product_id_tag' => 'getProductIdTag',
        'expiration_date' => 'getExpirationDate',
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
        $this->container['created_by'] = isset($data['created_by']) ? $data['created_by'] : null;
        $this->container['create_date'] = isset($data['create_date']) ? $data['create_date'] : null;
        $this->container['modify_date'] = isset($data['modify_date']) ? $data['modify_date'] : null;
        $this->container['warehouse_id'] = isset($data['warehouse_id']) ? $data['warehouse_id'] : null;
        $this->container['lob_id'] = isset($data['lob_id']) ? $data['lob_id'] : null;
        $this->container['location_id'] = isset($data['location_id']) ? $data['location_id'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['vendor_id'] = isset($data['vendor_id']) ? $data['vendor_id'] : null;
        $this->container['carrier'] = isset($data['carrier']) ? $data['carrier'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['unit_code'] = isset($data['unit_code']) ? $data['unit_code'] : null;
        $this->container['wrap_code'] = isset($data['wrap_code']) ? $data['wrap_code'] : null;
        $this->container['weight_per_wrap'] = isset($data['weight_per_wrap']) ? $data['weight_per_wrap'] : null;
        $this->container['units_per_wrap'] = isset($data['units_per_wrap']) ? $data['units_per_wrap'] : null;
        $this->container['quantity_per_inner_pack'] = isset($data['quantity_per_inner_pack']) ? $data['quantity_per_inner_pack'] : null;
        $this->container['units_per_case'] = isset($data['units_per_case']) ? $data['units_per_case'] : null;
        $this->container['quantity_per_pallet'] = isset($data['quantity_per_pallet']) ? $data['quantity_per_pallet'] : null;
        $this->container['case_weight'] = isset($data['case_weight']) ? $data['case_weight'] : null;
        $this->container['production_lot'] = isset($data['production_lot']) ? $data['production_lot'] : null;
        $this->container['revision_date'] = isset($data['revision_date']) ? $data['revision_date'] : null;
        $this->container['origin'] = isset($data['origin']) ? $data['origin'] : null;
        $this->container['carton_length'] = isset($data['carton_length']) ? $data['carton_length'] : null;
        $this->container['carton_width'] = isset($data['carton_width']) ? $data['carton_width'] : null;
        $this->container['carton_height'] = isset($data['carton_height']) ? $data['carton_height'] : null;
        $this->container['cost'] = isset($data['cost']) ? $data['cost'] : null;
        $this->container['sell_price'] = isset($data['sell_price']) ? $data['sell_price'] : null;
        $this->container['pricing_per'] = isset($data['pricing_per']) ? $data['pricing_per'] : null;
        $this->container['generated_item_receipt_id'] = isset($data['generated_item_receipt_id']) ? $data['generated_item_receipt_id'] : null;
        $this->container['generated_asn_id'] = isset($data['generated_asn_id']) ? $data['generated_asn_id'] : null;
        $this->container['dock_date'] = isset($data['dock_date']) ? $data['dock_date'] : null;
        $this->container['product_id_tag'] = isset($data['product_id_tag']) ? $data['product_id_tag'] : null;
        $this->container['expiration_date'] = isset($data['expiration_date']) ? $data['expiration_date'] : null;
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
        if ($this->container['lob_id'] === null) {
            $invalidProperties[] = "'lob_id' can't be null";
        }
        if ($this->container['location_id'] === null) {
            $invalidProperties[] = "'location_id' can't be null";
        }
        if ($this->container['quantity'] === null) {
            $invalidProperties[] = "'quantity' can't be null";
        }
        if ($this->container['weight_per_wrap'] === null) {
            $invalidProperties[] = "'weight_per_wrap' can't be null";
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
        if ($this->container['lob_id'] === null) {
            return false;
        }
        if ($this->container['location_id'] === null) {
            return false;
        }
        if ($this->container['quantity'] === null) {
            return false;
        }
        if ($this->container['weight_per_wrap'] === null) {
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
     * Gets created_by
     *
     * @return int
     */
    public function getCreatedBy()
    {
        return $this->container['created_by'];
    }

    /**
     * Sets created_by
     *
     * @param int $created_by created_by
     *
     * @return $this
     */
    public function setCreatedBy($created_by)
    {
        $this->container['created_by'] = $created_by;

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
     * Gets location_id
     *
     * @return int
     */
    public function getLocationId()
    {
        return $this->container['location_id'];
    }

    /**
     * Sets location_id
     *
     * @param int $location_id location_id
     *
     * @return $this
     */
    public function setLocationId($location_id)
    {
        $this->container['location_id'] = $location_id;

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
     * Gets vendor_id
     *
     * @return int
     */
    public function getVendorId()
    {
        return $this->container['vendor_id'];
    }

    /**
     * Sets vendor_id
     *
     * @param int $vendor_id vendor_id
     *
     * @return $this
     */
    public function setVendorId($vendor_id)
    {
        $this->container['vendor_id'] = $vendor_id;

        return $this;
    }

    /**
     * Gets carrier
     *
     * @return string
     */
    public function getCarrier()
    {
        return $this->container['carrier'];
    }

    /**
     * Sets carrier
     *
     * @param string $carrier carrier
     *
     * @return $this
     */
    public function setCarrier($carrier)
    {
        $this->container['carrier'] = $carrier;

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
     * Gets unit_code
     *
     * @return string
     */
    public function getUnitCode()
    {
        return $this->container['unit_code'];
    }

    /**
     * Sets unit_code
     *
     * @param string $unit_code unit_code
     *
     * @return $this
     */
    public function setUnitCode($unit_code)
    {
        $this->container['unit_code'] = $unit_code;

        return $this;
    }

    /**
     * Gets wrap_code
     *
     * @return string
     */
    public function getWrapCode()
    {
        return $this->container['wrap_code'];
    }

    /**
     * Sets wrap_code
     *
     * @param string $wrap_code wrap_code
     *
     * @return $this
     */
    public function setWrapCode($wrap_code)
    {
        $this->container['wrap_code'] = $wrap_code;

        return $this;
    }

    /**
     * Gets weight_per_wrap
     *
     * @return float
     */
    public function getWeightPerWrap()
    {
        return $this->container['weight_per_wrap'];
    }

    /**
     * Sets weight_per_wrap
     *
     * @param float $weight_per_wrap weight_per_wrap
     *
     * @return $this
     */
    public function setWeightPerWrap($weight_per_wrap)
    {
        $this->container['weight_per_wrap'] = $weight_per_wrap;

        return $this;
    }

    /**
     * Gets units_per_wrap
     *
     * @return int
     */
    public function getUnitsPerWrap()
    {
        return $this->container['units_per_wrap'];
    }

    /**
     * Sets units_per_wrap
     *
     * @param int $units_per_wrap units_per_wrap
     *
     * @return $this
     */
    public function setUnitsPerWrap($units_per_wrap)
    {
        $this->container['units_per_wrap'] = $units_per_wrap;

        return $this;
    }

    /**
     * Gets quantity_per_inner_pack
     *
     * @return int
     */
    public function getQuantityPerInnerPack()
    {
        return $this->container['quantity_per_inner_pack'];
    }

    /**
     * Sets quantity_per_inner_pack
     *
     * @param int $quantity_per_inner_pack quantity_per_inner_pack
     *
     * @return $this
     */
    public function setQuantityPerInnerPack($quantity_per_inner_pack)
    {
        $this->container['quantity_per_inner_pack'] = $quantity_per_inner_pack;

        return $this;
    }

    /**
     * Gets units_per_case
     *
     * @return int
     */
    public function getUnitsPerCase()
    {
        return $this->container['units_per_case'];
    }

    /**
     * Sets units_per_case
     *
     * @param int $units_per_case units_per_case
     *
     * @return $this
     */
    public function setUnitsPerCase($units_per_case)
    {
        $this->container['units_per_case'] = $units_per_case;

        return $this;
    }

    /**
     * Gets quantity_per_pallet
     *
     * @return int
     */
    public function getQuantityPerPallet()
    {
        return $this->container['quantity_per_pallet'];
    }

    /**
     * Sets quantity_per_pallet
     *
     * @param int $quantity_per_pallet quantity_per_pallet
     *
     * @return $this
     */
    public function setQuantityPerPallet($quantity_per_pallet)
    {
        $this->container['quantity_per_pallet'] = $quantity_per_pallet;

        return $this;
    }

    /**
     * Gets case_weight
     *
     * @return float
     */
    public function getCaseWeight()
    {
        return $this->container['case_weight'];
    }

    /**
     * Sets case_weight
     *
     * @param float $case_weight case_weight
     *
     * @return $this
     */
    public function setCaseWeight($case_weight)
    {
        $this->container['case_weight'] = $case_weight;

        return $this;
    }

    /**
     * Gets production_lot
     *
     * @return string
     */
    public function getProductionLot()
    {
        return $this->container['production_lot'];
    }

    /**
     * Sets production_lot
     *
     * @param string $production_lot production_lot
     *
     * @return $this
     */
    public function setProductionLot($production_lot)
    {
        $this->container['production_lot'] = $production_lot;

        return $this;
    }

    /**
     * Gets revision_date
     *
     * @return string
     */
    public function getRevisionDate()
    {
        return $this->container['revision_date'];
    }

    /**
     * Sets revision_date
     *
     * @param string $revision_date revision_date
     *
     * @return $this
     */
    public function setRevisionDate($revision_date)
    {
        $this->container['revision_date'] = $revision_date;

        return $this;
    }

    /**
     * Gets origin
     *
     * @return string
     */
    public function getOrigin()
    {
        return $this->container['origin'];
    }

    /**
     * Sets origin
     *
     * @param string $origin origin
     *
     * @return $this
     */
    public function setOrigin($origin)
    {
        $this->container['origin'] = $origin;

        return $this;
    }

    /**
     * Gets carton_length
     *
     * @return float
     */
    public function getCartonLength()
    {
        return $this->container['carton_length'];
    }

    /**
     * Sets carton_length
     *
     * @param float $carton_length carton_length
     *
     * @return $this
     */
    public function setCartonLength($carton_length)
    {
        $this->container['carton_length'] = $carton_length;

        return $this;
    }

    /**
     * Gets carton_width
     *
     * @return float
     */
    public function getCartonWidth()
    {
        return $this->container['carton_width'];
    }

    /**
     * Sets carton_width
     *
     * @param float $carton_width carton_width
     *
     * @return $this
     */
    public function setCartonWidth($carton_width)
    {
        $this->container['carton_width'] = $carton_width;

        return $this;
    }

    /**
     * Gets carton_height
     *
     * @return float
     */
    public function getCartonHeight()
    {
        return $this->container['carton_height'];
    }

    /**
     * Sets carton_height
     *
     * @param float $carton_height carton_height
     *
     * @return $this
     */
    public function setCartonHeight($carton_height)
    {
        $this->container['carton_height'] = $carton_height;

        return $this;
    }

    /**
     * Gets cost
     *
     * @return float
     */
    public function getCost()
    {
        return $this->container['cost'];
    }

    /**
     * Sets cost
     *
     * @param float $cost cost
     *
     * @return $this
     */
    public function setCost($cost)
    {
        $this->container['cost'] = $cost;

        return $this;
    }

    /**
     * Gets sell_price
     *
     * @return float
     */
    public function getSellPrice()
    {
        return $this->container['sell_price'];
    }

    /**
     * Sets sell_price
     *
     * @param float $sell_price sell_price
     *
     * @return $this
     */
    public function setSellPrice($sell_price)
    {
        $this->container['sell_price'] = $sell_price;

        return $this;
    }

    /**
     * Gets pricing_per
     *
     * @return string
     */
    public function getPricingPer()
    {
        return $this->container['pricing_per'];
    }

    /**
     * Sets pricing_per
     *
     * @param string $pricing_per pricing_per
     *
     * @return $this
     */
    public function setPricingPer($pricing_per)
    {
        $this->container['pricing_per'] = $pricing_per;

        return $this;
    }

    /**
     * Gets generated_item_receipt_id
     *
     * @return int
     */
    public function getGeneratedItemReceiptId()
    {
        return $this->container['generated_item_receipt_id'];
    }

    /**
     * Sets generated_item_receipt_id
     *
     * @param int $generated_item_receipt_id generated_item_receipt_id
     *
     * @return $this
     */
    public function setGeneratedItemReceiptId($generated_item_receipt_id)
    {
        $this->container['generated_item_receipt_id'] = $generated_item_receipt_id;

        return $this;
    }

    /**
     * Gets generated_asn_id
     *
     * @return int
     */
    public function getGeneratedAsnId()
    {
        return $this->container['generated_asn_id'];
    }

    /**
     * Sets generated_asn_id
     *
     * @param int $generated_asn_id generated_asn_id
     *
     * @return $this
     */
    public function setGeneratedAsnId($generated_asn_id)
    {
        $this->container['generated_asn_id'] = $generated_asn_id;

        return $this;
    }

    /**
     * Gets dock_date
     *
     * @return \DateTime
     */
    public function getDockDate()
    {
        return $this->container['dock_date'];
    }

    /**
     * Sets dock_date
     *
     * @param \DateTime $dock_date dock_date
     *
     * @return $this
     */
    public function setDockDate($dock_date)
    {
        $this->container['dock_date'] = $dock_date;

        return $this;
    }

    /**
     * Gets product_id_tag
     *
     * @return string
     */
    public function getProductIdTag()
    {
        return $this->container['product_id_tag'];
    }

    /**
     * Sets product_id_tag
     *
     * @param string $product_id_tag product_id_tag
     *
     * @return $this
     */
    public function setProductIdTag($product_id_tag)
    {
        $this->container['product_id_tag'] = $product_id_tag;

        return $this;
    }

    /**
     * Gets expiration_date
     *
     * @return \DateTime
     */
    public function getExpirationDate()
    {
        return $this->container['expiration_date'];
    }

    /**
     * Sets expiration_date
     *
     * @param \DateTime $expiration_date expiration_date
     *
     * @return $this
     */
    public function setExpirationDate($expiration_date)
    {
        $this->container['expiration_date'] = $expiration_date;

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


