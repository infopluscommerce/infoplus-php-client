<?php
/**
 * FulfillmentPlan
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
 * FulfillmentPlan Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Infoplus
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class FulfillmentPlan implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id' => 'int',
        'create_date' => '\DateTime',
        'modify_date' => '\DateTime',
        'name' => 'string',
        'description' => 'string',
        'warehouse_id' => 'int',
        'order_smart_filter_id' => 'int',
        'location_smart_filter_id' => 'int',
        'maximum_number_of_orders' => 'int',
        'create_pick_work' => 'bool',
        'picking_rule' => 'string',
        'layout_rule' => 'string',
        'pick_sort_rule' => 'string',
        'create_pick_list' => 'bool',
        'pick_list_format' => 'string',
        'pick_list_layout' => 'string',
        'pick_list_group' => 'string',
        'pick_list_sort' => 'string',
        'create_pick_summary' => 'bool',
        'pick_summary_format' => 'string',
        'pick_summary_layout' => 'string',
        'pick_summary_sort' => 'string',
        'cartonize_orders' => 'bool',
        'auto_ship_casebreak_cartons' => 'bool',
        'pre_generate_parcel_labels' => 'bool',
        'override_packing_slip_template_id' => 'int',
        'create_packing_slip' => 'bool',
        'create_order_assembly_guide' => 'bool'
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
        'create_date' => 'createDate',
        'modify_date' => 'modifyDate',
        'name' => 'name',
        'description' => 'description',
        'warehouse_id' => 'warehouseId',
        'order_smart_filter_id' => 'orderSmartFilterId',
        'location_smart_filter_id' => 'locationSmartFilterId',
        'maximum_number_of_orders' => 'maximumNumberOfOrders',
        'create_pick_work' => 'createPickWork',
        'picking_rule' => 'pickingRule',
        'layout_rule' => 'layoutRule',
        'pick_sort_rule' => 'pickSortRule',
        'create_pick_list' => 'createPickList',
        'pick_list_format' => 'pickListFormat',
        'pick_list_layout' => 'pickListLayout',
        'pick_list_group' => 'pickListGroup',
        'pick_list_sort' => 'pickListSort',
        'create_pick_summary' => 'createPickSummary',
        'pick_summary_format' => 'pickSummaryFormat',
        'pick_summary_layout' => 'pickSummaryLayout',
        'pick_summary_sort' => 'pickSummarySort',
        'cartonize_orders' => 'cartonizeOrders',
        'auto_ship_casebreak_cartons' => 'autoShipCasebreakCartons',
        'pre_generate_parcel_labels' => 'preGenerateParcelLabels',
        'override_packing_slip_template_id' => 'overridePackingSlipTemplateId',
        'create_packing_slip' => 'createPackingSlip',
        'create_order_assembly_guide' => 'createOrderAssemblyGuide'
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
        'create_date' => 'setCreateDate',
        'modify_date' => 'setModifyDate',
        'name' => 'setName',
        'description' => 'setDescription',
        'warehouse_id' => 'setWarehouseId',
        'order_smart_filter_id' => 'setOrderSmartFilterId',
        'location_smart_filter_id' => 'setLocationSmartFilterId',
        'maximum_number_of_orders' => 'setMaximumNumberOfOrders',
        'create_pick_work' => 'setCreatePickWork',
        'picking_rule' => 'setPickingRule',
        'layout_rule' => 'setLayoutRule',
        'pick_sort_rule' => 'setPickSortRule',
        'create_pick_list' => 'setCreatePickList',
        'pick_list_format' => 'setPickListFormat',
        'pick_list_layout' => 'setPickListLayout',
        'pick_list_group' => 'setPickListGroup',
        'pick_list_sort' => 'setPickListSort',
        'create_pick_summary' => 'setCreatePickSummary',
        'pick_summary_format' => 'setPickSummaryFormat',
        'pick_summary_layout' => 'setPickSummaryLayout',
        'pick_summary_sort' => 'setPickSummarySort',
        'cartonize_orders' => 'setCartonizeOrders',
        'auto_ship_casebreak_cartons' => 'setAutoShipCasebreakCartons',
        'pre_generate_parcel_labels' => 'setPreGenerateParcelLabels',
        'override_packing_slip_template_id' => 'setOverridePackingSlipTemplateId',
        'create_packing_slip' => 'setCreatePackingSlip',
        'create_order_assembly_guide' => 'setCreateOrderAssemblyGuide'
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
        'create_date' => 'getCreateDate',
        'modify_date' => 'getModifyDate',
        'name' => 'getName',
        'description' => 'getDescription',
        'warehouse_id' => 'getWarehouseId',
        'order_smart_filter_id' => 'getOrderSmartFilterId',
        'location_smart_filter_id' => 'getLocationSmartFilterId',
        'maximum_number_of_orders' => 'getMaximumNumberOfOrders',
        'create_pick_work' => 'getCreatePickWork',
        'picking_rule' => 'getPickingRule',
        'layout_rule' => 'getLayoutRule',
        'pick_sort_rule' => 'getPickSortRule',
        'create_pick_list' => 'getCreatePickList',
        'pick_list_format' => 'getPickListFormat',
        'pick_list_layout' => 'getPickListLayout',
        'pick_list_group' => 'getPickListGroup',
        'pick_list_sort' => 'getPickListSort',
        'create_pick_summary' => 'getCreatePickSummary',
        'pick_summary_format' => 'getPickSummaryFormat',
        'pick_summary_layout' => 'getPickSummaryLayout',
        'pick_summary_sort' => 'getPickSummarySort',
        'cartonize_orders' => 'getCartonizeOrders',
        'auto_ship_casebreak_cartons' => 'getAutoShipCasebreakCartons',
        'pre_generate_parcel_labels' => 'getPreGenerateParcelLabels',
        'override_packing_slip_template_id' => 'getOverridePackingSlipTemplateId',
        'create_packing_slip' => 'getCreatePackingSlip',
        'create_order_assembly_guide' => 'getCreateOrderAssemblyGuide'
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
      * $create_date 
      * @var \DateTime
      */
    protected $create_date;
    
    /**
      * $modify_date 
      * @var \DateTime
      */
    protected $modify_date;
    
    /**
      * $name 
      * @var string
      */
    protected $name;
    
    /**
      * $description 
      * @var string
      */
    protected $description;
    
    /**
      * $warehouse_id 
      * @var int
      */
    protected $warehouse_id;
    
    /**
      * $order_smart_filter_id 
      * @var int
      */
    protected $order_smart_filter_id;
    
    /**
      * $location_smart_filter_id 
      * @var int
      */
    protected $location_smart_filter_id;
    
    /**
      * $maximum_number_of_orders 
      * @var int
      */
    protected $maximum_number_of_orders;
    
    /**
      * $create_pick_work 
      * @var bool
      */
    protected $create_pick_work = false;
    
    /**
      * $picking_rule 
      * @var string
      */
    protected $picking_rule;
    
    /**
      * $layout_rule 
      * @var string
      */
    protected $layout_rule;
    
    /**
      * $pick_sort_rule 
      * @var string
      */
    protected $pick_sort_rule;
    
    /**
      * $create_pick_list 
      * @var bool
      */
    protected $create_pick_list = false;
    
    /**
      * $pick_list_format 
      * @var string
      */
    protected $pick_list_format;
    
    /**
      * $pick_list_layout 
      * @var string
      */
    protected $pick_list_layout;
    
    /**
      * $pick_list_group 
      * @var string
      */
    protected $pick_list_group;
    
    /**
      * $pick_list_sort 
      * @var string
      */
    protected $pick_list_sort;
    
    /**
      * $create_pick_summary 
      * @var bool
      */
    protected $create_pick_summary = false;
    
    /**
      * $pick_summary_format 
      * @var string
      */
    protected $pick_summary_format;
    
    /**
      * $pick_summary_layout 
      * @var string
      */
    protected $pick_summary_layout;
    
    /**
      * $pick_summary_sort 
      * @var string
      */
    protected $pick_summary_sort;
    
    /**
      * $cartonize_orders 
      * @var bool
      */
    protected $cartonize_orders = false;
    
    /**
      * $auto_ship_casebreak_cartons 
      * @var bool
      */
    protected $auto_ship_casebreak_cartons = false;
    
    /**
      * $pre_generate_parcel_labels 
      * @var bool
      */
    protected $pre_generate_parcel_labels = false;
    
    /**
      * $override_packing_slip_template_id 
      * @var int
      */
    protected $override_packing_slip_template_id;
    
    /**
      * $create_packing_slip 
      * @var bool
      */
    protected $create_packing_slip = false;
    
    /**
      * $create_order_assembly_guide 
      * @var bool
      */
    protected $create_order_assembly_guide = false;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->id = $data["id"];
            $this->create_date = $data["create_date"];
            $this->modify_date = $data["modify_date"];
            $this->name = $data["name"];
            $this->description = $data["description"];
            $this->warehouse_id = $data["warehouse_id"];
            $this->order_smart_filter_id = $data["order_smart_filter_id"];
            $this->location_smart_filter_id = $data["location_smart_filter_id"];
            $this->maximum_number_of_orders = $data["maximum_number_of_orders"];
            $this->create_pick_work = $data["create_pick_work"];
            $this->picking_rule = $data["picking_rule"];
            $this->layout_rule = $data["layout_rule"];
            $this->pick_sort_rule = $data["pick_sort_rule"];
            $this->create_pick_list = $data["create_pick_list"];
            $this->pick_list_format = $data["pick_list_format"];
            $this->pick_list_layout = $data["pick_list_layout"];
            $this->pick_list_group = $data["pick_list_group"];
            $this->pick_list_sort = $data["pick_list_sort"];
            $this->create_pick_summary = $data["create_pick_summary"];
            $this->pick_summary_format = $data["pick_summary_format"];
            $this->pick_summary_layout = $data["pick_summary_layout"];
            $this->pick_summary_sort = $data["pick_summary_sort"];
            $this->cartonize_orders = $data["cartonize_orders"];
            $this->auto_ship_casebreak_cartons = $data["auto_ship_casebreak_cartons"];
            $this->pre_generate_parcel_labels = $data["pre_generate_parcel_labels"];
            $this->override_packing_slip_template_id = $data["override_packing_slip_template_id"];
            $this->create_packing_slip = $data["create_packing_slip"];
            $this->create_order_assembly_guide = $data["create_order_assembly_guide"];
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
     * Gets create_date
     * @return \DateTime
     */
    public function getCreateDate()
    {
        return $this->create_date;
    }
  
    /**
     * Sets create_date
     * @param \DateTime $create_date 
     * @return $this
     */
    public function setCreateDate($create_date)
    {
        
        $this->create_date = $create_date;
        return $this;
    }
    
    /**
     * Gets modify_date
     * @return \DateTime
     */
    public function getModifyDate()
    {
        return $this->modify_date;
    }
  
    /**
     * Sets modify_date
     * @param \DateTime $modify_date 
     * @return $this
     */
    public function setModifyDate($modify_date)
    {
        
        $this->modify_date = $modify_date;
        return $this;
    }
    
    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
  
    /**
     * Sets name
     * @param string $name 
     * @return $this
     */
    public function setName($name)
    {
        
        $this->name = $name;
        return $this;
    }
    
    /**
     * Gets description
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
  
    /**
     * Sets description
     * @param string $description 
     * @return $this
     */
    public function setDescription($description)
    {
        
        $this->description = $description;
        return $this;
    }
    
    /**
     * Gets warehouse_id
     * @return int
     */
    public function getWarehouseId()
    {
        return $this->warehouse_id;
    }
  
    /**
     * Sets warehouse_id
     * @param int $warehouse_id 
     * @return $this
     */
    public function setWarehouseId($warehouse_id)
    {
        
        $this->warehouse_id = $warehouse_id;
        return $this;
    }
    
    /**
     * Gets order_smart_filter_id
     * @return int
     */
    public function getOrderSmartFilterId()
    {
        return $this->order_smart_filter_id;
    }
  
    /**
     * Sets order_smart_filter_id
     * @param int $order_smart_filter_id 
     * @return $this
     */
    public function setOrderSmartFilterId($order_smart_filter_id)
    {
        
        $this->order_smart_filter_id = $order_smart_filter_id;
        return $this;
    }
    
    /**
     * Gets location_smart_filter_id
     * @return int
     */
    public function getLocationSmartFilterId()
    {
        return $this->location_smart_filter_id;
    }
  
    /**
     * Sets location_smart_filter_id
     * @param int $location_smart_filter_id 
     * @return $this
     */
    public function setLocationSmartFilterId($location_smart_filter_id)
    {
        
        $this->location_smart_filter_id = $location_smart_filter_id;
        return $this;
    }
    
    /**
     * Gets maximum_number_of_orders
     * @return int
     */
    public function getMaximumNumberOfOrders()
    {
        return $this->maximum_number_of_orders;
    }
  
    /**
     * Sets maximum_number_of_orders
     * @param int $maximum_number_of_orders 
     * @return $this
     */
    public function setMaximumNumberOfOrders($maximum_number_of_orders)
    {
        
        $this->maximum_number_of_orders = $maximum_number_of_orders;
        return $this;
    }
    
    /**
     * Gets create_pick_work
     * @return bool
     */
    public function getCreatePickWork()
    {
        return $this->create_pick_work;
    }
  
    /**
     * Sets create_pick_work
     * @param bool $create_pick_work 
     * @return $this
     */
    public function setCreatePickWork($create_pick_work)
    {
        
        $this->create_pick_work = $create_pick_work;
        return $this;
    }
    
    /**
     * Gets picking_rule
     * @return string
     */
    public function getPickingRule()
    {
        return $this->picking_rule;
    }
  
    /**
     * Sets picking_rule
     * @param string $picking_rule 
     * @return $this
     */
    public function setPickingRule($picking_rule)
    {
        
        $this->picking_rule = $picking_rule;
        return $this;
    }
    
    /**
     * Gets layout_rule
     * @return string
     */
    public function getLayoutRule()
    {
        return $this->layout_rule;
    }
  
    /**
     * Sets layout_rule
     * @param string $layout_rule 
     * @return $this
     */
    public function setLayoutRule($layout_rule)
    {
        
        $this->layout_rule = $layout_rule;
        return $this;
    }
    
    /**
     * Gets pick_sort_rule
     * @return string
     */
    public function getPickSortRule()
    {
        return $this->pick_sort_rule;
    }
  
    /**
     * Sets pick_sort_rule
     * @param string $pick_sort_rule 
     * @return $this
     */
    public function setPickSortRule($pick_sort_rule)
    {
        
        $this->pick_sort_rule = $pick_sort_rule;
        return $this;
    }
    
    /**
     * Gets create_pick_list
     * @return bool
     */
    public function getCreatePickList()
    {
        return $this->create_pick_list;
    }
  
    /**
     * Sets create_pick_list
     * @param bool $create_pick_list 
     * @return $this
     */
    public function setCreatePickList($create_pick_list)
    {
        
        $this->create_pick_list = $create_pick_list;
        return $this;
    }
    
    /**
     * Gets pick_list_format
     * @return string
     */
    public function getPickListFormat()
    {
        return $this->pick_list_format;
    }
  
    /**
     * Sets pick_list_format
     * @param string $pick_list_format 
     * @return $this
     */
    public function setPickListFormat($pick_list_format)
    {
        
        $this->pick_list_format = $pick_list_format;
        return $this;
    }
    
    /**
     * Gets pick_list_layout
     * @return string
     */
    public function getPickListLayout()
    {
        return $this->pick_list_layout;
    }
  
    /**
     * Sets pick_list_layout
     * @param string $pick_list_layout 
     * @return $this
     */
    public function setPickListLayout($pick_list_layout)
    {
        
        $this->pick_list_layout = $pick_list_layout;
        return $this;
    }
    
    /**
     * Gets pick_list_group
     * @return string
     */
    public function getPickListGroup()
    {
        return $this->pick_list_group;
    }
  
    /**
     * Sets pick_list_group
     * @param string $pick_list_group 
     * @return $this
     */
    public function setPickListGroup($pick_list_group)
    {
        
        $this->pick_list_group = $pick_list_group;
        return $this;
    }
    
    /**
     * Gets pick_list_sort
     * @return string
     */
    public function getPickListSort()
    {
        return $this->pick_list_sort;
    }
  
    /**
     * Sets pick_list_sort
     * @param string $pick_list_sort 
     * @return $this
     */
    public function setPickListSort($pick_list_sort)
    {
        
        $this->pick_list_sort = $pick_list_sort;
        return $this;
    }
    
    /**
     * Gets create_pick_summary
     * @return bool
     */
    public function getCreatePickSummary()
    {
        return $this->create_pick_summary;
    }
  
    /**
     * Sets create_pick_summary
     * @param bool $create_pick_summary 
     * @return $this
     */
    public function setCreatePickSummary($create_pick_summary)
    {
        
        $this->create_pick_summary = $create_pick_summary;
        return $this;
    }
    
    /**
     * Gets pick_summary_format
     * @return string
     */
    public function getPickSummaryFormat()
    {
        return $this->pick_summary_format;
    }
  
    /**
     * Sets pick_summary_format
     * @param string $pick_summary_format 
     * @return $this
     */
    public function setPickSummaryFormat($pick_summary_format)
    {
        
        $this->pick_summary_format = $pick_summary_format;
        return $this;
    }
    
    /**
     * Gets pick_summary_layout
     * @return string
     */
    public function getPickSummaryLayout()
    {
        return $this->pick_summary_layout;
    }
  
    /**
     * Sets pick_summary_layout
     * @param string $pick_summary_layout 
     * @return $this
     */
    public function setPickSummaryLayout($pick_summary_layout)
    {
        
        $this->pick_summary_layout = $pick_summary_layout;
        return $this;
    }
    
    /**
     * Gets pick_summary_sort
     * @return string
     */
    public function getPickSummarySort()
    {
        return $this->pick_summary_sort;
    }
  
    /**
     * Sets pick_summary_sort
     * @param string $pick_summary_sort 
     * @return $this
     */
    public function setPickSummarySort($pick_summary_sort)
    {
        
        $this->pick_summary_sort = $pick_summary_sort;
        return $this;
    }
    
    /**
     * Gets cartonize_orders
     * @return bool
     */
    public function getCartonizeOrders()
    {
        return $this->cartonize_orders;
    }
  
    /**
     * Sets cartonize_orders
     * @param bool $cartonize_orders 
     * @return $this
     */
    public function setCartonizeOrders($cartonize_orders)
    {
        
        $this->cartonize_orders = $cartonize_orders;
        return $this;
    }
    
    /**
     * Gets auto_ship_casebreak_cartons
     * @return bool
     */
    public function getAutoShipCasebreakCartons()
    {
        return $this->auto_ship_casebreak_cartons;
    }
  
    /**
     * Sets auto_ship_casebreak_cartons
     * @param bool $auto_ship_casebreak_cartons 
     * @return $this
     */
    public function setAutoShipCasebreakCartons($auto_ship_casebreak_cartons)
    {
        
        $this->auto_ship_casebreak_cartons = $auto_ship_casebreak_cartons;
        return $this;
    }
    
    /**
     * Gets pre_generate_parcel_labels
     * @return bool
     */
    public function getPreGenerateParcelLabels()
    {
        return $this->pre_generate_parcel_labels;
    }
  
    /**
     * Sets pre_generate_parcel_labels
     * @param bool $pre_generate_parcel_labels 
     * @return $this
     */
    public function setPreGenerateParcelLabels($pre_generate_parcel_labels)
    {
        
        $this->pre_generate_parcel_labels = $pre_generate_parcel_labels;
        return $this;
    }
    
    /**
     * Gets override_packing_slip_template_id
     * @return int
     */
    public function getOverridePackingSlipTemplateId()
    {
        return $this->override_packing_slip_template_id;
    }
  
    /**
     * Sets override_packing_slip_template_id
     * @param int $override_packing_slip_template_id 
     * @return $this
     */
    public function setOverridePackingSlipTemplateId($override_packing_slip_template_id)
    {
        
        $this->override_packing_slip_template_id = $override_packing_slip_template_id;
        return $this;
    }
    
    /**
     * Gets create_packing_slip
     * @return bool
     */
    public function getCreatePackingSlip()
    {
        return $this->create_packing_slip;
    }
  
    /**
     * Sets create_packing_slip
     * @param bool $create_packing_slip 
     * @return $this
     */
    public function setCreatePackingSlip($create_packing_slip)
    {
        
        $this->create_packing_slip = $create_packing_slip;
        return $this;
    }
    
    /**
     * Gets create_order_assembly_guide
     * @return bool
     */
    public function getCreateOrderAssemblyGuide()
    {
        return $this->create_order_assembly_guide;
    }
  
    /**
     * Sets create_order_assembly_guide
     * @param bool $create_order_assembly_guide 
     * @return $this
     */
    public function setCreateOrderAssemblyGuide($create_order_assembly_guide)
    {
        
        $this->create_order_assembly_guide = $create_order_assembly_guide;
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