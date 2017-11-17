<?php
/**
 * OrderLine
 *
 * PHP version 5
 *
 * @category Class
 * @package  Infoplus
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
/**
 *  Copyright 2016 SmartBear Software
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Infoplus\Model;

use \ArrayAccess;
/**
 * OrderLine Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Infoplus
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class OrderLine implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id' => 'int',
        'order_no' => 'Number',
        'lob_id' => 'int',
        'sku' => 'string',
        'po_no_id' => 'int',
        'ordered_qty' => 'int',
        'allowed_qty' => 'int',
        'shipped_qty' => 'int',
        'backorder_qty' => 'int',
        'rev_date' => 'string',
        'charge_code' => 'string',
        'distribution_code' => 'string',
        'upc' => 'string',
        'vendor_sku' => 'string',
        'order_source_sku' => 'string',
        'unit_cost' => 'Number',
        'unit_sell' => 'Number',
        'extended_cost' => 'Number',
        'extended_sell' => 'Number',
        'nc_extended_sell' => 'Number',
        'item_weight' => 'Number',
        'production_lot' => 'string',
        'weight_per_wrap' => 'Number',
        'sector' => 'string',
        'item_account_code_id' => 'int',
        'item_legacy_low_stock_contact_id' => 'int',
        'item_major_group_id' => 'int',
        'item_sub_group_id' => 'int',
        'item_product_code_id' => 'int',
        'item_summary_code_id' => 'int',
        'custom_fields' => 'map[string,object]'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'id' => 'id',
        'order_no' => 'orderNo',
        'lob_id' => 'lobId',
        'sku' => 'sku',
        'po_no_id' => 'poNoId',
        'ordered_qty' => 'orderedQty',
        'allowed_qty' => 'allowedQty',
        'shipped_qty' => 'shippedQty',
        'backorder_qty' => 'backorderQty',
        'rev_date' => 'revDate',
        'charge_code' => 'chargeCode',
        'distribution_code' => 'distributionCode',
        'upc' => 'upc',
        'vendor_sku' => 'vendorSKU',
        'order_source_sku' => 'orderSourceSKU',
        'unit_cost' => 'unitCost',
        'unit_sell' => 'unitSell',
        'extended_cost' => 'extendedCost',
        'extended_sell' => 'extendedSell',
        'nc_extended_sell' => 'ncExtendedSell',
        'item_weight' => 'itemWeight',
        'production_lot' => 'productionLot',
        'weight_per_wrap' => 'weightPerWrap',
        'sector' => 'sector',
        'item_account_code_id' => 'itemAccountCodeId',
        'item_legacy_low_stock_contact_id' => 'itemLegacyLowStockContactId',
        'item_major_group_id' => 'itemMajorGroupId',
        'item_sub_group_id' => 'itemSubGroupId',
        'item_product_code_id' => 'itemProductCodeId',
        'item_summary_code_id' => 'itemSummaryCodeId',
        'custom_fields' => 'customFields'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'id' => 'setId',
        'order_no' => 'setOrderNo',
        'lob_id' => 'setLobId',
        'sku' => 'setSku',
        'po_no_id' => 'setPoNoId',
        'ordered_qty' => 'setOrderedQty',
        'allowed_qty' => 'setAllowedQty',
        'shipped_qty' => 'setShippedQty',
        'backorder_qty' => 'setBackorderQty',
        'rev_date' => 'setRevDate',
        'charge_code' => 'setChargeCode',
        'distribution_code' => 'setDistributionCode',
        'upc' => 'setUpc',
        'vendor_sku' => 'setVendorSku',
        'order_source_sku' => 'setOrderSourceSku',
        'unit_cost' => 'setUnitCost',
        'unit_sell' => 'setUnitSell',
        'extended_cost' => 'setExtendedCost',
        'extended_sell' => 'setExtendedSell',
        'nc_extended_sell' => 'setNcExtendedSell',
        'item_weight' => 'setItemWeight',
        'production_lot' => 'setProductionLot',
        'weight_per_wrap' => 'setWeightPerWrap',
        'sector' => 'setSector',
        'item_account_code_id' => 'setItemAccountCodeId',
        'item_legacy_low_stock_contact_id' => 'setItemLegacyLowStockContactId',
        'item_major_group_id' => 'setItemMajorGroupId',
        'item_sub_group_id' => 'setItemSubGroupId',
        'item_product_code_id' => 'setItemProductCodeId',
        'item_summary_code_id' => 'setItemSummaryCodeId',
        'custom_fields' => 'setCustomFields'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'id' => 'getId',
        'order_no' => 'getOrderNo',
        'lob_id' => 'getLobId',
        'sku' => 'getSku',
        'po_no_id' => 'getPoNoId',
        'ordered_qty' => 'getOrderedQty',
        'allowed_qty' => 'getAllowedQty',
        'shipped_qty' => 'getShippedQty',
        'backorder_qty' => 'getBackorderQty',
        'rev_date' => 'getRevDate',
        'charge_code' => 'getChargeCode',
        'distribution_code' => 'getDistributionCode',
        'upc' => 'getUpc',
        'vendor_sku' => 'getVendorSku',
        'order_source_sku' => 'getOrderSourceSku',
        'unit_cost' => 'getUnitCost',
        'unit_sell' => 'getUnitSell',
        'extended_cost' => 'getExtendedCost',
        'extended_sell' => 'getExtendedSell',
        'nc_extended_sell' => 'getNcExtendedSell',
        'item_weight' => 'getItemWeight',
        'production_lot' => 'getProductionLot',
        'weight_per_wrap' => 'getWeightPerWrap',
        'sector' => 'getSector',
        'item_account_code_id' => 'getItemAccountCodeId',
        'item_legacy_low_stock_contact_id' => 'getItemLegacyLowStockContactId',
        'item_major_group_id' => 'getItemMajorGroupId',
        'item_sub_group_id' => 'getItemSubGroupId',
        'item_product_code_id' => 'getItemProductCodeId',
        'item_summary_code_id' => 'getItemSummaryCodeId',
        'custom_fields' => 'getCustomFields'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $id 
      * @var int
      */
    protected $id;
    
    /**
      * $order_no 
      * @var Number
      */
    protected $order_no;
    
    /**
      * $lob_id 
      * @var int
      */
    protected $lob_id;
    
    /**
      * $sku 
      * @var string
      */
    protected $sku;
    
    /**
      * $po_no_id 
      * @var int
      */
    protected $po_no_id;
    
    /**
      * $ordered_qty 
      * @var int
      */
    protected $ordered_qty;
    
    /**
      * $allowed_qty 
      * @var int
      */
    protected $allowed_qty;
    
    /**
      * $shipped_qty 
      * @var int
      */
    protected $shipped_qty;
    
    /**
      * $backorder_qty 
      * @var int
      */
    protected $backorder_qty;
    
    /**
      * $rev_date 
      * @var string
      */
    protected $rev_date;
    
    /**
      * $charge_code 
      * @var string
      */
    protected $charge_code;
    
    /**
      * $distribution_code 
      * @var string
      */
    protected $distribution_code;
    
    /**
      * $upc 
      * @var string
      */
    protected $upc;
    
    /**
      * $vendor_sku 
      * @var string
      */
    protected $vendor_sku;
    
    /**
      * $order_source_sku 
      * @var string
      */
    protected $order_source_sku;
    
    /**
      * $unit_cost 
      * @var Number
      */
    protected $unit_cost;
    
    /**
      * $unit_sell 
      * @var Number
      */
    protected $unit_sell;
    
    /**
      * $extended_cost 
      * @var Number
      */
    protected $extended_cost;
    
    /**
      * $extended_sell 
      * @var Number
      */
    protected $extended_sell;
    
    /**
      * $nc_extended_sell 
      * @var Number
      */
    protected $nc_extended_sell;
    
    /**
      * $item_weight 
      * @var Number
      */
    protected $item_weight;
    
    /**
      * $production_lot 
      * @var string
      */
    protected $production_lot;
    
    /**
      * $weight_per_wrap 
      * @var Number
      */
    protected $weight_per_wrap;
    
    /**
      * $sector 
      * @var string
      */
    protected $sector;
    
    /**
      * $item_account_code_id 
      * @var int
      */
    protected $item_account_code_id;
    
    /**
      * $item_legacy_low_stock_contact_id 
      * @var int
      */
    protected $item_legacy_low_stock_contact_id;
    
    /**
      * $item_major_group_id 
      * @var int
      */
    protected $item_major_group_id;
    
    /**
      * $item_sub_group_id 
      * @var int
      */
    protected $item_sub_group_id;
    
    /**
      * $item_product_code_id 
      * @var int
      */
    protected $item_product_code_id;
    
    /**
      * $item_summary_code_id 
      * @var int
      */
    protected $item_summary_code_id;
    
    /**
      * $custom_fields 
      * @var map[string,object]
      */
    protected $custom_fields;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->id = $data["id"];
            $this->order_no = $data["order_no"];
            $this->lob_id = $data["lob_id"];
            $this->sku = $data["sku"];
            $this->po_no_id = $data["po_no_id"];
            $this->ordered_qty = $data["ordered_qty"];
            $this->allowed_qty = $data["allowed_qty"];
            $this->shipped_qty = $data["shipped_qty"];
            $this->backorder_qty = $data["backorder_qty"];
            $this->rev_date = $data["rev_date"];
            $this->charge_code = $data["charge_code"];
            $this->distribution_code = $data["distribution_code"];
            $this->upc = $data["upc"];
            $this->vendor_sku = $data["vendor_sku"];
            $this->order_source_sku = $data["order_source_sku"];
            $this->unit_cost = $data["unit_cost"];
            $this->unit_sell = $data["unit_sell"];
            $this->extended_cost = $data["extended_cost"];
            $this->extended_sell = $data["extended_sell"];
            $this->nc_extended_sell = $data["nc_extended_sell"];
            $this->item_weight = $data["item_weight"];
            $this->production_lot = $data["production_lot"];
            $this->weight_per_wrap = $data["weight_per_wrap"];
            $this->sector = $data["sector"];
            $this->item_account_code_id = $data["item_account_code_id"];
            $this->item_legacy_low_stock_contact_id = $data["item_legacy_low_stock_contact_id"];
            $this->item_major_group_id = $data["item_major_group_id"];
            $this->item_sub_group_id = $data["item_sub_group_id"];
            $this->item_product_code_id = $data["item_product_code_id"];
            $this->item_summary_code_id = $data["item_summary_code_id"];
            $this->custom_fields = $data["custom_fields"];
        }
    }
    
    /**
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
  
    /**
     * Sets id
     * @param int $id 
     * @return $this
     */
    public function setId($id)
    {
        
        $this->id = $id;
        return $this;
    }
    
    /**
     * Gets order_no
     * @return Number
     */
    public function getOrderNo()
    {
        return $this->order_no;
    }
  
    /**
     * Sets order_no
     * @param Number $order_no 
     * @return $this
     */
    public function setOrderNo($order_no)
    {
        
        $this->order_no = $order_no;
        return $this;
    }
    
    /**
     * Gets lob_id
     * @return int
     */
    public function getLobId()
    {
        return $this->lob_id;
    }
  
    /**
     * Sets lob_id
     * @param int $lob_id 
     * @return $this
     */
    public function setLobId($lob_id)
    {
        
        $this->lob_id = $lob_id;
        return $this;
    }
    
    /**
     * Gets sku
     * @return string
     */
    public function getSku()
    {
        return $this->sku;
    }
  
    /**
     * Sets sku
     * @param string $sku 
     * @return $this
     */
    public function setSku($sku)
    {
        
        $this->sku = $sku;
        return $this;
    }
    
    /**
     * Gets po_no_id
     * @return int
     */
    public function getPoNoId()
    {
        return $this->po_no_id;
    }
  
    /**
     * Sets po_no_id
     * @param int $po_no_id 
     * @return $this
     */
    public function setPoNoId($po_no_id)
    {
        
        $this->po_no_id = $po_no_id;
        return $this;
    }
    
    /**
     * Gets ordered_qty
     * @return int
     */
    public function getOrderedQty()
    {
        return $this->ordered_qty;
    }
  
    /**
     * Sets ordered_qty
     * @param int $ordered_qty 
     * @return $this
     */
    public function setOrderedQty($ordered_qty)
    {
        
        $this->ordered_qty = $ordered_qty;
        return $this;
    }
    
    /**
     * Gets allowed_qty
     * @return int
     */
    public function getAllowedQty()
    {
        return $this->allowed_qty;
    }
  
    /**
     * Sets allowed_qty
     * @param int $allowed_qty 
     * @return $this
     */
    public function setAllowedQty($allowed_qty)
    {
        
        $this->allowed_qty = $allowed_qty;
        return $this;
    }
    
    /**
     * Gets shipped_qty
     * @return int
     */
    public function getShippedQty()
    {
        return $this->shipped_qty;
    }
  
    /**
     * Sets shipped_qty
     * @param int $shipped_qty 
     * @return $this
     */
    public function setShippedQty($shipped_qty)
    {
        
        $this->shipped_qty = $shipped_qty;
        return $this;
    }
    
    /**
     * Gets backorder_qty
     * @return int
     */
    public function getBackorderQty()
    {
        return $this->backorder_qty;
    }
  
    /**
     * Sets backorder_qty
     * @param int $backorder_qty 
     * @return $this
     */
    public function setBackorderQty($backorder_qty)
    {
        
        $this->backorder_qty = $backorder_qty;
        return $this;
    }
    
    /**
     * Gets rev_date
     * @return string
     */
    public function getRevDate()
    {
        return $this->rev_date;
    }
  
    /**
     * Sets rev_date
     * @param string $rev_date 
     * @return $this
     */
    public function setRevDate($rev_date)
    {
        
        $this->rev_date = $rev_date;
        return $this;
    }
    
    /**
     * Gets charge_code
     * @return string
     */
    public function getChargeCode()
    {
        return $this->charge_code;
    }
  
    /**
     * Sets charge_code
     * @param string $charge_code 
     * @return $this
     */
    public function setChargeCode($charge_code)
    {
        
        $this->charge_code = $charge_code;
        return $this;
    }
    
    /**
     * Gets distribution_code
     * @return string
     */
    public function getDistributionCode()
    {
        return $this->distribution_code;
    }
  
    /**
     * Sets distribution_code
     * @param string $distribution_code 
     * @return $this
     */
    public function setDistributionCode($distribution_code)
    {
        
        $this->distribution_code = $distribution_code;
        return $this;
    }
    
    /**
     * Gets upc
     * @return string
     */
    public function getUpc()
    {
        return $this->upc;
    }
  
    /**
     * Sets upc
     * @param string $upc 
     * @return $this
     */
    public function setUpc($upc)
    {
        
        $this->upc = $upc;
        return $this;
    }
    
    /**
     * Gets vendor_sku
     * @return string
     */
    public function getVendorSku()
    {
        return $this->vendor_sku;
    }
  
    /**
     * Sets vendor_sku
     * @param string $vendor_sku 
     * @return $this
     */
    public function setVendorSku($vendor_sku)
    {
        
        $this->vendor_sku = $vendor_sku;
        return $this;
    }
    
    /**
     * Gets order_source_sku
     * @return string
     */
    public function getOrderSourceSku()
    {
        return $this->order_source_sku;
    }
  
    /**
     * Sets order_source_sku
     * @param string $order_source_sku 
     * @return $this
     */
    public function setOrderSourceSku($order_source_sku)
    {
        
        $this->order_source_sku = $order_source_sku;
        return $this;
    }
    
    /**
     * Gets unit_cost
     * @return Number
     */
    public function getUnitCost()
    {
        return $this->unit_cost;
    }
  
    /**
     * Sets unit_cost
     * @param Number $unit_cost 
     * @return $this
     */
    public function setUnitCost($unit_cost)
    {
        
        $this->unit_cost = $unit_cost;
        return $this;
    }
    
    /**
     * Gets unit_sell
     * @return Number
     */
    public function getUnitSell()
    {
        return $this->unit_sell;
    }
  
    /**
     * Sets unit_sell
     * @param Number $unit_sell 
     * @return $this
     */
    public function setUnitSell($unit_sell)
    {
        
        $this->unit_sell = $unit_sell;
        return $this;
    }
    
    /**
     * Gets extended_cost
     * @return Number
     */
    public function getExtendedCost()
    {
        return $this->extended_cost;
    }
  
    /**
     * Sets extended_cost
     * @param Number $extended_cost 
     * @return $this
     */
    public function setExtendedCost($extended_cost)
    {
        
        $this->extended_cost = $extended_cost;
        return $this;
    }
    
    /**
     * Gets extended_sell
     * @return Number
     */
    public function getExtendedSell()
    {
        return $this->extended_sell;
    }
  
    /**
     * Sets extended_sell
     * @param Number $extended_sell 
     * @return $this
     */
    public function setExtendedSell($extended_sell)
    {
        
        $this->extended_sell = $extended_sell;
        return $this;
    }
    
    /**
     * Gets nc_extended_sell
     * @return Number
     */
    public function getNcExtendedSell()
    {
        return $this->nc_extended_sell;
    }
  
    /**
     * Sets nc_extended_sell
     * @param Number $nc_extended_sell 
     * @return $this
     */
    public function setNcExtendedSell($nc_extended_sell)
    {
        
        $this->nc_extended_sell = $nc_extended_sell;
        return $this;
    }
    
    /**
     * Gets item_weight
     * @return Number
     */
    public function getItemWeight()
    {
        return $this->item_weight;
    }
  
    /**
     * Sets item_weight
     * @param Number $item_weight 
     * @return $this
     */
    public function setItemWeight($item_weight)
    {
        
        $this->item_weight = $item_weight;
        return $this;
    }
    
    /**
     * Gets production_lot
     * @return string
     */
    public function getProductionLot()
    {
        return $this->production_lot;
    }
  
    /**
     * Sets production_lot
     * @param string $production_lot 
     * @return $this
     */
    public function setProductionLot($production_lot)
    {
        
        $this->production_lot = $production_lot;
        return $this;
    }
    
    /**
     * Gets weight_per_wrap
     * @return Number
     */
    public function getWeightPerWrap()
    {
        return $this->weight_per_wrap;
    }
  
    /**
     * Sets weight_per_wrap
     * @param Number $weight_per_wrap 
     * @return $this
     */
    public function setWeightPerWrap($weight_per_wrap)
    {
        
        $this->weight_per_wrap = $weight_per_wrap;
        return $this;
    }
    
    /**
     * Gets sector
     * @return string
     */
    public function getSector()
    {
        return $this->sector;
    }
  
    /**
     * Sets sector
     * @param string $sector 
     * @return $this
     */
    public function setSector($sector)
    {
        
        $this->sector = $sector;
        return $this;
    }
    
    /**
     * Gets item_account_code_id
     * @return int
     */
    public function getItemAccountCodeId()
    {
        return $this->item_account_code_id;
    }
  
    /**
     * Sets item_account_code_id
     * @param int $item_account_code_id 
     * @return $this
     */
    public function setItemAccountCodeId($item_account_code_id)
    {
        
        $this->item_account_code_id = $item_account_code_id;
        return $this;
    }
    
    /**
     * Gets item_legacy_low_stock_contact_id
     * @return int
     */
    public function getItemLegacyLowStockContactId()
    {
        return $this->item_legacy_low_stock_contact_id;
    }
  
    /**
     * Sets item_legacy_low_stock_contact_id
     * @param int $item_legacy_low_stock_contact_id 
     * @return $this
     */
    public function setItemLegacyLowStockContactId($item_legacy_low_stock_contact_id)
    {
        
        $this->item_legacy_low_stock_contact_id = $item_legacy_low_stock_contact_id;
        return $this;
    }
    
    /**
     * Gets item_major_group_id
     * @return int
     */
    public function getItemMajorGroupId()
    {
        return $this->item_major_group_id;
    }
  
    /**
     * Sets item_major_group_id
     * @param int $item_major_group_id 
     * @return $this
     */
    public function setItemMajorGroupId($item_major_group_id)
    {
        
        $this->item_major_group_id = $item_major_group_id;
        return $this;
    }
    
    /**
     * Gets item_sub_group_id
     * @return int
     */
    public function getItemSubGroupId()
    {
        return $this->item_sub_group_id;
    }
  
    /**
     * Sets item_sub_group_id
     * @param int $item_sub_group_id 
     * @return $this
     */
    public function setItemSubGroupId($item_sub_group_id)
    {
        
        $this->item_sub_group_id = $item_sub_group_id;
        return $this;
    }
    
    /**
     * Gets item_product_code_id
     * @return int
     */
    public function getItemProductCodeId()
    {
        return $this->item_product_code_id;
    }
  
    /**
     * Sets item_product_code_id
     * @param int $item_product_code_id 
     * @return $this
     */
    public function setItemProductCodeId($item_product_code_id)
    {
        
        $this->item_product_code_id = $item_product_code_id;
        return $this;
    }
    
    /**
     * Gets item_summary_code_id
     * @return int
     */
    public function getItemSummaryCodeId()
    {
        return $this->item_summary_code_id;
    }
  
    /**
     * Sets item_summary_code_id
     * @param int $item_summary_code_id 
     * @return $this
     */
    public function setItemSummaryCodeId($item_summary_code_id)
    {
        
        $this->item_summary_code_id = $item_summary_code_id;
        return $this;
    }
    
    /**
     * Gets custom_fields
     * @return map[string,object]
     */
    public function getCustomFields()
    {
        return $this->custom_fields;
    }
  
    /**
     * Sets custom_fields
     * @param map[string,object] $custom_fields 
     * @return $this
     */
    public function setCustomFields($custom_fields)
    {
        
        $this->custom_fields = $custom_fields;
        return $this;
    }
    
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset 
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }
  
    /**
     * Gets offset.
     * @param  integer $offset Offset 
     * @return mixed 
     */
    public function offsetGet($offset)
    {
        return $this->$offset;
    }
  
    /**
     * Sets value based on offset.
     * @param  integer $offset Offset 
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }
  
    /**
     * Unsets offset.
     * @param  integer $offset Offset 
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }
  
    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(\Infoplus\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(\Infoplus\ObjectSerializer::sanitizeForSerialization($this));
        }
    }
}
