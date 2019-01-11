<?php
/**
 * InventoryDetail
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
 * InventoryDetail Class Doc Comment
 *
 * @category Class
 * @package  Infoplus
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InventoryDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'inventoryDetail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'warehouse_location_id' => 'int',
        'quantity' => 'int',
        'distribution_date' => '\DateTime',
        'expiration_date' => '\DateTime',
        'quantity_per_inner_pack' => 'int',
        'quantity_per_case' => 'int',
        'quantity_per_pallet' => 'int',
        'estimated_inner_packs' => 'int',
        'estimated_cases' => 'int',
        'estimated_pallets' => 'int',
        'units_per_wrap' => 'int',
        'revision_date' => 'string',
        'production_lot' => 'string',
        'oldest_receipt_date' => '\DateTime',
        'lob_id' => 'int',
        'po_no' => 'string',
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
        'warehouse_location_id' => 'int32',
        'quantity' => 'int32',
        'distribution_date' => 'date-time',
        'expiration_date' => 'date-time',
        'quantity_per_inner_pack' => 'int32',
        'quantity_per_case' => 'int32',
        'quantity_per_pallet' => 'int32',
        'estimated_inner_packs' => 'int32',
        'estimated_cases' => 'int32',
        'estimated_pallets' => 'int32',
        'units_per_wrap' => 'int32',
        'revision_date' => null,
        'production_lot' => null,
        'oldest_receipt_date' => 'date-time',
        'lob_id' => 'int32',
        'po_no' => null,
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
        'warehouse_location_id' => 'warehouseLocationId',
        'quantity' => 'quantity',
        'distribution_date' => 'distributionDate',
        'expiration_date' => 'expirationDate',
        'quantity_per_inner_pack' => 'quantityPerInnerPack',
        'quantity_per_case' => 'quantityPerCase',
        'quantity_per_pallet' => 'quantityPerPallet',
        'estimated_inner_packs' => 'estimatedInnerPacks',
        'estimated_cases' => 'estimatedCases',
        'estimated_pallets' => 'estimatedPallets',
        'units_per_wrap' => 'unitsPerWrap',
        'revision_date' => 'revisionDate',
        'production_lot' => 'productionLot',
        'oldest_receipt_date' => 'oldestReceiptDate',
        'lob_id' => 'lobId',
        'po_no' => 'poNo',
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
        'warehouse_location_id' => 'setWarehouseLocationId',
        'quantity' => 'setQuantity',
        'distribution_date' => 'setDistributionDate',
        'expiration_date' => 'setExpirationDate',
        'quantity_per_inner_pack' => 'setQuantityPerInnerPack',
        'quantity_per_case' => 'setQuantityPerCase',
        'quantity_per_pallet' => 'setQuantityPerPallet',
        'estimated_inner_packs' => 'setEstimatedInnerPacks',
        'estimated_cases' => 'setEstimatedCases',
        'estimated_pallets' => 'setEstimatedPallets',
        'units_per_wrap' => 'setUnitsPerWrap',
        'revision_date' => 'setRevisionDate',
        'production_lot' => 'setProductionLot',
        'oldest_receipt_date' => 'setOldestReceiptDate',
        'lob_id' => 'setLobId',
        'po_no' => 'setPoNo',
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
        'warehouse_location_id' => 'getWarehouseLocationId',
        'quantity' => 'getQuantity',
        'distribution_date' => 'getDistributionDate',
        'expiration_date' => 'getExpirationDate',
        'quantity_per_inner_pack' => 'getQuantityPerInnerPack',
        'quantity_per_case' => 'getQuantityPerCase',
        'quantity_per_pallet' => 'getQuantityPerPallet',
        'estimated_inner_packs' => 'getEstimatedInnerPacks',
        'estimated_cases' => 'getEstimatedCases',
        'estimated_pallets' => 'getEstimatedPallets',
        'units_per_wrap' => 'getUnitsPerWrap',
        'revision_date' => 'getRevisionDate',
        'production_lot' => 'getProductionLot',
        'oldest_receipt_date' => 'getOldestReceiptDate',
        'lob_id' => 'getLobId',
        'po_no' => 'getPoNo',
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
        $this->container['warehouse_location_id'] = isset($data['warehouse_location_id']) ? $data['warehouse_location_id'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['distribution_date'] = isset($data['distribution_date']) ? $data['distribution_date'] : null;
        $this->container['expiration_date'] = isset($data['expiration_date']) ? $data['expiration_date'] : null;
        $this->container['quantity_per_inner_pack'] = isset($data['quantity_per_inner_pack']) ? $data['quantity_per_inner_pack'] : null;
        $this->container['quantity_per_case'] = isset($data['quantity_per_case']) ? $data['quantity_per_case'] : null;
        $this->container['quantity_per_pallet'] = isset($data['quantity_per_pallet']) ? $data['quantity_per_pallet'] : null;
        $this->container['estimated_inner_packs'] = isset($data['estimated_inner_packs']) ? $data['estimated_inner_packs'] : null;
        $this->container['estimated_cases'] = isset($data['estimated_cases']) ? $data['estimated_cases'] : null;
        $this->container['estimated_pallets'] = isset($data['estimated_pallets']) ? $data['estimated_pallets'] : null;
        $this->container['units_per_wrap'] = isset($data['units_per_wrap']) ? $data['units_per_wrap'] : null;
        $this->container['revision_date'] = isset($data['revision_date']) ? $data['revision_date'] : null;
        $this->container['production_lot'] = isset($data['production_lot']) ? $data['production_lot'] : null;
        $this->container['oldest_receipt_date'] = isset($data['oldest_receipt_date']) ? $data['oldest_receipt_date'] : null;
        $this->container['lob_id'] = isset($data['lob_id']) ? $data['lob_id'] : null;
        $this->container['po_no'] = isset($data['po_no']) ? $data['po_no'] : null;
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

        if ($this->container['warehouse_location_id'] === null) {
            $invalidProperties[] = "'warehouse_location_id' can't be null";
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

        if ($this->container['warehouse_location_id'] === null) {
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
     * Gets warehouse_location_id
     *
     * @return int
     */
    public function getWarehouseLocationId()
    {
        return $this->container['warehouse_location_id'];
    }

    /**
     * Sets warehouse_location_id
     *
     * @param int $warehouse_location_id warehouse_location_id
     *
     * @return $this
     */
    public function setWarehouseLocationId($warehouse_location_id)
    {
        $this->container['warehouse_location_id'] = $warehouse_location_id;

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
     * Gets distribution_date
     *
     * @return \DateTime
     */
    public function getDistributionDate()
    {
        return $this->container['distribution_date'];
    }

    /**
     * Sets distribution_date
     *
     * @param \DateTime $distribution_date distribution_date
     *
     * @return $this
     */
    public function setDistributionDate($distribution_date)
    {
        $this->container['distribution_date'] = $distribution_date;

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
     * Gets quantity_per_case
     *
     * @return int
     */
    public function getQuantityPerCase()
    {
        return $this->container['quantity_per_case'];
    }

    /**
     * Sets quantity_per_case
     *
     * @param int $quantity_per_case quantity_per_case
     *
     * @return $this
     */
    public function setQuantityPerCase($quantity_per_case)
    {
        $this->container['quantity_per_case'] = $quantity_per_case;

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
     * Gets estimated_inner_packs
     *
     * @return int
     */
    public function getEstimatedInnerPacks()
    {
        return $this->container['estimated_inner_packs'];
    }

    /**
     * Sets estimated_inner_packs
     *
     * @param int $estimated_inner_packs estimated_inner_packs
     *
     * @return $this
     */
    public function setEstimatedInnerPacks($estimated_inner_packs)
    {
        $this->container['estimated_inner_packs'] = $estimated_inner_packs;

        return $this;
    }

    /**
     * Gets estimated_cases
     *
     * @return int
     */
    public function getEstimatedCases()
    {
        return $this->container['estimated_cases'];
    }

    /**
     * Sets estimated_cases
     *
     * @param int $estimated_cases estimated_cases
     *
     * @return $this
     */
    public function setEstimatedCases($estimated_cases)
    {
        $this->container['estimated_cases'] = $estimated_cases;

        return $this;
    }

    /**
     * Gets estimated_pallets
     *
     * @return int
     */
    public function getEstimatedPallets()
    {
        return $this->container['estimated_pallets'];
    }

    /**
     * Sets estimated_pallets
     *
     * @param int $estimated_pallets estimated_pallets
     *
     * @return $this
     */
    public function setEstimatedPallets($estimated_pallets)
    {
        $this->container['estimated_pallets'] = $estimated_pallets;

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
     * Gets oldest_receipt_date
     *
     * @return \DateTime
     */
    public function getOldestReceiptDate()
    {
        return $this->container['oldest_receipt_date'];
    }

    /**
     * Sets oldest_receipt_date
     *
     * @param \DateTime $oldest_receipt_date oldest_receipt_date
     *
     * @return $this
     */
    public function setOldestReceiptDate($oldest_receipt_date)
    {
        $this->container['oldest_receipt_date'] = $oldest_receipt_date;

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
     * Gets po_no
     *
     * @return string
     */
    public function getPoNo()
    {
        return $this->container['po_no'];
    }

    /**
     * Sets po_no
     *
     * @param string $po_no po_no
     *
     * @return $this
     */
    public function setPoNo($po_no)
    {
        $this->container['po_no'] = $po_no;

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

