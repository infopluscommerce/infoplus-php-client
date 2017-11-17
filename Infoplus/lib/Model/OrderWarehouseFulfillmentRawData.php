<?php
/**
 * OrderWarehouseFulfillmentRawData
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
 * OrderWarehouseFulfillmentRawData Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Infoplus
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class OrderWarehouseFulfillmentRawData implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'warehouse_id' => 'int',
        'can_fulfill' => 'bool',
        'sku_map' => 'map[string,\Infoplus\Model\OrderWarehouseFulfillmentRawSkuData]'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'warehouse_id' => 'warehouseId',
        'can_fulfill' => 'canFulfill',
        'sku_map' => 'skuMap'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'warehouse_id' => 'setWarehouseId',
        'can_fulfill' => 'setCanFulfill',
        'sku_map' => 'setSkuMap'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'warehouse_id' => 'getWarehouseId',
        'can_fulfill' => 'getCanFulfill',
        'sku_map' => 'getSkuMap'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $warehouse_id 
      * @var int
      */
    protected $warehouse_id;
    
    /**
      * $can_fulfill 
      * @var bool
      */
    protected $can_fulfill = false;
    
    /**
      * $sku_map 
      * @var map[string,\Infoplus\Model\OrderWarehouseFulfillmentRawSkuData]
      */
    protected $sku_map;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->warehouse_id = $data["warehouse_id"];
            $this->can_fulfill = $data["can_fulfill"];
            $this->sku_map = $data["sku_map"];
        }
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
     * Gets can_fulfill
     * @return bool
     */
    public function getCanFulfill()
    {
        return $this->can_fulfill;
    }
  
    /**
     * Sets can_fulfill
     * @param bool $can_fulfill 
     * @return $this
     */
    public function setCanFulfill($can_fulfill)
    {
        
        $this->can_fulfill = $can_fulfill;
        return $this;
    }
    
    /**
     * Gets sku_map
     * @return map[string,\Infoplus\Model\OrderWarehouseFulfillmentRawSkuData]
     */
    public function getSkuMap()
    {
        return $this->sku_map;
    }
  
    /**
     * Sets sku_map
     * @param map[string,\Infoplus\Model\OrderWarehouseFulfillmentRawSkuData] $sku_map 
     * @return $this
     */
    public function setSkuMap($sku_map)
    {
        
        $this->sku_map = $sku_map;
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
