<?php
/**
 * PalletType
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
 * PalletType Class Doc Comment
 *
 * @category Class
 * @package  Infoplus
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PalletType implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'palletType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'name' => 'string',
        'pallet_length_in' => 'float',
        'pallet_width_in' => 'float',
        'pallet_height_in' => 'float',
        'pallet_weight_lbs' => 'float',
        'packable_length_in' => 'float',
        'packable_width_in' => 'float',
        'packable_height_in' => 'float',
        'lob_id' => 'int',
        'is_active' => 'bool',
        'custom_fields' => 'map[string,object]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
        'name' => null,
        'pallet_length_in' => null,
        'pallet_width_in' => null,
        'pallet_height_in' => null,
        'pallet_weight_lbs' => null,
        'packable_length_in' => null,
        'packable_width_in' => null,
        'packable_height_in' => null,
        'lob_id' => 'int32',
        'is_active' => null,
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
        'name' => 'name',
        'pallet_length_in' => 'palletLengthIn',
        'pallet_width_in' => 'palletWidthIn',
        'pallet_height_in' => 'palletHeightIn',
        'pallet_weight_lbs' => 'palletWeightLbs',
        'packable_length_in' => 'packableLengthIn',
        'packable_width_in' => 'packableWidthIn',
        'packable_height_in' => 'packableHeightIn',
        'lob_id' => 'lobId',
        'is_active' => 'isActive',
        'custom_fields' => 'customFields'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'pallet_length_in' => 'setPalletLengthIn',
        'pallet_width_in' => 'setPalletWidthIn',
        'pallet_height_in' => 'setPalletHeightIn',
        'pallet_weight_lbs' => 'setPalletWeightLbs',
        'packable_length_in' => 'setPackableLengthIn',
        'packable_width_in' => 'setPackableWidthIn',
        'packable_height_in' => 'setPackableHeightIn',
        'lob_id' => 'setLobId',
        'is_active' => 'setIsActive',
        'custom_fields' => 'setCustomFields'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'pallet_length_in' => 'getPalletLengthIn',
        'pallet_width_in' => 'getPalletWidthIn',
        'pallet_height_in' => 'getPalletHeightIn',
        'pallet_weight_lbs' => 'getPalletWeightLbs',
        'packable_length_in' => 'getPackableLengthIn',
        'packable_width_in' => 'getPackableWidthIn',
        'packable_height_in' => 'getPackableHeightIn',
        'lob_id' => 'getLobId',
        'is_active' => 'getIsActive',
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['pallet_length_in'] = isset($data['pallet_length_in']) ? $data['pallet_length_in'] : null;
        $this->container['pallet_width_in'] = isset($data['pallet_width_in']) ? $data['pallet_width_in'] : null;
        $this->container['pallet_height_in'] = isset($data['pallet_height_in']) ? $data['pallet_height_in'] : null;
        $this->container['pallet_weight_lbs'] = isset($data['pallet_weight_lbs']) ? $data['pallet_weight_lbs'] : null;
        $this->container['packable_length_in'] = isset($data['packable_length_in']) ? $data['packable_length_in'] : null;
        $this->container['packable_width_in'] = isset($data['packable_width_in']) ? $data['packable_width_in'] : null;
        $this->container['packable_height_in'] = isset($data['packable_height_in']) ? $data['packable_height_in'] : null;
        $this->container['lob_id'] = isset($data['lob_id']) ? $data['lob_id'] : null;
        $this->container['is_active'] = isset($data['is_active']) ? $data['is_active'] : false;
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

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['pallet_length_in'] === null) {
            $invalidProperties[] = "'pallet_length_in' can't be null";
        }
        if ($this->container['pallet_width_in'] === null) {
            $invalidProperties[] = "'pallet_width_in' can't be null";
        }
        if ($this->container['pallet_height_in'] === null) {
            $invalidProperties[] = "'pallet_height_in' can't be null";
        }
        if ($this->container['packable_length_in'] === null) {
            $invalidProperties[] = "'packable_length_in' can't be null";
        }
        if ($this->container['packable_width_in'] === null) {
            $invalidProperties[] = "'packable_width_in' can't be null";
        }
        if ($this->container['packable_height_in'] === null) {
            $invalidProperties[] = "'packable_height_in' can't be null";
        }
        if ($this->container['lob_id'] === null) {
            $invalidProperties[] = "'lob_id' can't be null";
        }
        if ($this->container['is_active'] === null) {
            $invalidProperties[] = "'is_active' can't be null";
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

        if ($this->container['name'] === null) {
            return false;
        }
        if ($this->container['pallet_length_in'] === null) {
            return false;
        }
        if ($this->container['pallet_width_in'] === null) {
            return false;
        }
        if ($this->container['pallet_height_in'] === null) {
            return false;
        }
        if ($this->container['packable_length_in'] === null) {
            return false;
        }
        if ($this->container['packable_width_in'] === null) {
            return false;
        }
        if ($this->container['packable_height_in'] === null) {
            return false;
        }
        if ($this->container['lob_id'] === null) {
            return false;
        }
        if ($this->container['is_active'] === null) {
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets pallet_length_in
     *
     * @return float
     */
    public function getPalletLengthIn()
    {
        return $this->container['pallet_length_in'];
    }

    /**
     * Sets pallet_length_in
     *
     * @param float $pallet_length_in pallet_length_in
     *
     * @return $this
     */
    public function setPalletLengthIn($pallet_length_in)
    {
        $this->container['pallet_length_in'] = $pallet_length_in;

        return $this;
    }

    /**
     * Gets pallet_width_in
     *
     * @return float
     */
    public function getPalletWidthIn()
    {
        return $this->container['pallet_width_in'];
    }

    /**
     * Sets pallet_width_in
     *
     * @param float $pallet_width_in pallet_width_in
     *
     * @return $this
     */
    public function setPalletWidthIn($pallet_width_in)
    {
        $this->container['pallet_width_in'] = $pallet_width_in;

        return $this;
    }

    /**
     * Gets pallet_height_in
     *
     * @return float
     */
    public function getPalletHeightIn()
    {
        return $this->container['pallet_height_in'];
    }

    /**
     * Sets pallet_height_in
     *
     * @param float $pallet_height_in pallet_height_in
     *
     * @return $this
     */
    public function setPalletHeightIn($pallet_height_in)
    {
        $this->container['pallet_height_in'] = $pallet_height_in;

        return $this;
    }

    /**
     * Gets pallet_weight_lbs
     *
     * @return float
     */
    public function getPalletWeightLbs()
    {
        return $this->container['pallet_weight_lbs'];
    }

    /**
     * Sets pallet_weight_lbs
     *
     * @param float $pallet_weight_lbs pallet_weight_lbs
     *
     * @return $this
     */
    public function setPalletWeightLbs($pallet_weight_lbs)
    {
        $this->container['pallet_weight_lbs'] = $pallet_weight_lbs;

        return $this;
    }

    /**
     * Gets packable_length_in
     *
     * @return float
     */
    public function getPackableLengthIn()
    {
        return $this->container['packable_length_in'];
    }

    /**
     * Sets packable_length_in
     *
     * @param float $packable_length_in packable_length_in
     *
     * @return $this
     */
    public function setPackableLengthIn($packable_length_in)
    {
        $this->container['packable_length_in'] = $packable_length_in;

        return $this;
    }

    /**
     * Gets packable_width_in
     *
     * @return float
     */
    public function getPackableWidthIn()
    {
        return $this->container['packable_width_in'];
    }

    /**
     * Sets packable_width_in
     *
     * @param float $packable_width_in packable_width_in
     *
     * @return $this
     */
    public function setPackableWidthIn($packable_width_in)
    {
        $this->container['packable_width_in'] = $packable_width_in;

        return $this;
    }

    /**
     * Gets packable_height_in
     *
     * @return float
     */
    public function getPackableHeightIn()
    {
        return $this->container['packable_height_in'];
    }

    /**
     * Sets packable_height_in
     *
     * @param float $packable_height_in packable_height_in
     *
     * @return $this
     */
    public function setPackableHeightIn($packable_height_in)
    {
        $this->container['packable_height_in'] = $packable_height_in;

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
     * Gets is_active
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->container['is_active'];
    }

    /**
     * Sets is_active
     *
     * @param bool $is_active is_active
     *
     * @return $this
     */
    public function setIsActive($is_active)
    {
        $this->container['is_active'] = $is_active;

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


