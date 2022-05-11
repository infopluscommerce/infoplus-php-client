<?php
/**
 * JobTimeActivity
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
 * JobTimeActivity Class Doc Comment
 *
 * @category Class
 * @package  Infoplus
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class JobTimeActivity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'jobTimeActivity';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'imported_id' => 'int',
        'create_date' => '\DateTime',
        'modify_date' => '\DateTime',
        'date' => '\DateTime',
        'second_duration' => 'int',
        'user_id' => 'int',
        'email' => 'string',
        'lob_id' => 'int',
        'job_type_id' => 'int',
        'job_type_name' => 'string',
        'note' => 'string',
        'billing_quantity' => 'float',
        'charge_rate' => 'float',
        'extended_charge' => 'float',
        'custom_fields' => 'map[string,object]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
        'imported_id' => 'int32',
        'create_date' => 'date-time',
        'modify_date' => 'date-time',
        'date' => 'date-time',
        'second_duration' => 'int32',
        'user_id' => 'int32',
        'email' => null,
        'lob_id' => 'int32',
        'job_type_id' => 'int32',
        'job_type_name' => null,
        'note' => null,
        'billing_quantity' => null,
        'charge_rate' => null,
        'extended_charge' => null,
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
        'imported_id' => 'importedId',
        'create_date' => 'createDate',
        'modify_date' => 'modifyDate',
        'date' => 'date',
        'second_duration' => 'secondDuration',
        'user_id' => 'userId',
        'email' => 'email',
        'lob_id' => 'lobId',
        'job_type_id' => 'jobTypeId',
        'job_type_name' => 'jobTypeName',
        'note' => 'note',
        'billing_quantity' => 'billingQuantity',
        'charge_rate' => 'chargeRate',
        'extended_charge' => 'extendedCharge',
        'custom_fields' => 'customFields'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'imported_id' => 'setImportedId',
        'create_date' => 'setCreateDate',
        'modify_date' => 'setModifyDate',
        'date' => 'setDate',
        'second_duration' => 'setSecondDuration',
        'user_id' => 'setUserId',
        'email' => 'setEmail',
        'lob_id' => 'setLobId',
        'job_type_id' => 'setJobTypeId',
        'job_type_name' => 'setJobTypeName',
        'note' => 'setNote',
        'billing_quantity' => 'setBillingQuantity',
        'charge_rate' => 'setChargeRate',
        'extended_charge' => 'setExtendedCharge',
        'custom_fields' => 'setCustomFields'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'imported_id' => 'getImportedId',
        'create_date' => 'getCreateDate',
        'modify_date' => 'getModifyDate',
        'date' => 'getDate',
        'second_duration' => 'getSecondDuration',
        'user_id' => 'getUserId',
        'email' => 'getEmail',
        'lob_id' => 'getLobId',
        'job_type_id' => 'getJobTypeId',
        'job_type_name' => 'getJobTypeName',
        'note' => 'getNote',
        'billing_quantity' => 'getBillingQuantity',
        'charge_rate' => 'getChargeRate',
        'extended_charge' => 'getExtendedCharge',
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
        $this->container['imported_id'] = isset($data['imported_id']) ? $data['imported_id'] : null;
        $this->container['create_date'] = isset($data['create_date']) ? $data['create_date'] : null;
        $this->container['modify_date'] = isset($data['modify_date']) ? $data['modify_date'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['second_duration'] = isset($data['second_duration']) ? $data['second_duration'] : null;
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['lob_id'] = isset($data['lob_id']) ? $data['lob_id'] : null;
        $this->container['job_type_id'] = isset($data['job_type_id']) ? $data['job_type_id'] : null;
        $this->container['job_type_name'] = isset($data['job_type_name']) ? $data['job_type_name'] : null;
        $this->container['note'] = isset($data['note']) ? $data['note'] : null;
        $this->container['billing_quantity'] = isset($data['billing_quantity']) ? $data['billing_quantity'] : null;
        $this->container['charge_rate'] = isset($data['charge_rate']) ? $data['charge_rate'] : null;
        $this->container['extended_charge'] = isset($data['extended_charge']) ? $data['extended_charge'] : null;
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

        if ($this->container['second_duration'] === null) {
            $invalidProperties[] = "'second_duration' can't be null";
        }
        if ($this->container['user_id'] === null) {
            $invalidProperties[] = "'user_id' can't be null";
        }
        if ($this->container['lob_id'] === null) {
            $invalidProperties[] = "'lob_id' can't be null";
        }
        if ($this->container['job_type_id'] === null) {
            $invalidProperties[] = "'job_type_id' can't be null";
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

        if ($this->container['second_duration'] === null) {
            return false;
        }
        if ($this->container['user_id'] === null) {
            return false;
        }
        if ($this->container['lob_id'] === null) {
            return false;
        }
        if ($this->container['job_type_id'] === null) {
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
     * Gets imported_id
     *
     * @return int
     */
    public function getImportedId()
    {
        return $this->container['imported_id'];
    }

    /**
     * Sets imported_id
     *
     * @param int $imported_id imported_id
     *
     * @return $this
     */
    public function setImportedId($imported_id)
    {
        $this->container['imported_id'] = $imported_id;

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
     * Gets date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param \DateTime $date date
     *
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets second_duration
     *
     * @return int
     */
    public function getSecondDuration()
    {
        return $this->container['second_duration'];
    }

    /**
     * Sets second_duration
     *
     * @param int $second_duration second_duration
     *
     * @return $this
     */
    public function setSecondDuration($second_duration)
    {
        $this->container['second_duration'] = $second_duration;

        return $this;
    }

    /**
     * Gets user_id
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param int $user_id user_id
     *
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

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
     * Gets job_type_id
     *
     * @return int
     */
    public function getJobTypeId()
    {
        return $this->container['job_type_id'];
    }

    /**
     * Sets job_type_id
     *
     * @param int $job_type_id job_type_id
     *
     * @return $this
     */
    public function setJobTypeId($job_type_id)
    {
        $this->container['job_type_id'] = $job_type_id;

        return $this;
    }

    /**
     * Gets job_type_name
     *
     * @return string
     */
    public function getJobTypeName()
    {
        return $this->container['job_type_name'];
    }

    /**
     * Sets job_type_name
     *
     * @param string $job_type_name job_type_name
     *
     * @return $this
     */
    public function setJobTypeName($job_type_name)
    {
        $this->container['job_type_name'] = $job_type_name;

        return $this;
    }

    /**
     * Gets note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->container['note'];
    }

    /**
     * Sets note
     *
     * @param string $note note
     *
     * @return $this
     */
    public function setNote($note)
    {
        $this->container['note'] = $note;

        return $this;
    }

    /**
     * Gets billing_quantity
     *
     * @return float
     */
    public function getBillingQuantity()
    {
        return $this->container['billing_quantity'];
    }

    /**
     * Sets billing_quantity
     *
     * @param float $billing_quantity billing_quantity
     *
     * @return $this
     */
    public function setBillingQuantity($billing_quantity)
    {
        $this->container['billing_quantity'] = $billing_quantity;

        return $this;
    }

    /**
     * Gets charge_rate
     *
     * @return float
     */
    public function getChargeRate()
    {
        return $this->container['charge_rate'];
    }

    /**
     * Sets charge_rate
     *
     * @param float $charge_rate charge_rate
     *
     * @return $this
     */
    public function setChargeRate($charge_rate)
    {
        $this->container['charge_rate'] = $charge_rate;

        return $this;
    }

    /**
     * Gets extended_charge
     *
     * @return float
     */
    public function getExtendedCharge()
    {
        return $this->container['extended_charge'];
    }

    /**
     * Sets extended_charge
     *
     * @param float $extended_charge extended_charge
     *
     * @return $this
     */
    public function setExtendedCharge($extended_charge)
    {
        $this->container['extended_charge'] = $extended_charge;

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


