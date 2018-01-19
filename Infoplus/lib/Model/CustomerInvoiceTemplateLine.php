<?php
/**
 * CustomerInvoiceTemplateLine
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
 * Swagger Codegen version: 2.3.0
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
 * CustomerInvoiceTemplateLine Class Doc Comment
 *
 * @category Class
 * @package  Infoplus
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CustomerInvoiceTemplateLine implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'customerInvoiceTemplateLine';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'create_date' => '\DateTime',
        'modify_date' => '\DateTime',
        'lob_id' => 'int',
        'description' => 'string',
        'seq_no' => 'int',
        'account_code' => 'string',
        'active' => 'bool',
        'include_if_zero' => 'bool',
        'department' => 'string',
        'item_code' => 'string',
        'invoice_template_id' => 'int',
        'billing_rule_id' => 'int',
        'price_level_mode' => 'string',
        'script_id' => 'int',
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
        'lob_id' => 'int32',
        'description' => null,
        'seq_no' => 'int32',
        'account_code' => null,
        'active' => null,
        'include_if_zero' => null,
        'department' => null,
        'item_code' => null,
        'invoice_template_id' => 'int32',
        'billing_rule_id' => 'int32',
        'price_level_mode' => null,
        'script_id' => 'int32',
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
        'lob_id' => 'lobId',
        'description' => 'description',
        'seq_no' => 'seqNo',
        'account_code' => 'accountCode',
        'active' => 'active',
        'include_if_zero' => 'includeIfZero',
        'department' => 'department',
        'item_code' => 'itemCode',
        'invoice_template_id' => 'invoiceTemplateId',
        'billing_rule_id' => 'billingRuleId',
        'price_level_mode' => 'priceLevelMode',
        'script_id' => 'scriptId',
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
        'lob_id' => 'setLobId',
        'description' => 'setDescription',
        'seq_no' => 'setSeqNo',
        'account_code' => 'setAccountCode',
        'active' => 'setActive',
        'include_if_zero' => 'setIncludeIfZero',
        'department' => 'setDepartment',
        'item_code' => 'setItemCode',
        'invoice_template_id' => 'setInvoiceTemplateId',
        'billing_rule_id' => 'setBillingRuleId',
        'price_level_mode' => 'setPriceLevelMode',
        'script_id' => 'setScriptId',
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
        'lob_id' => 'getLobId',
        'description' => 'getDescription',
        'seq_no' => 'getSeqNo',
        'account_code' => 'getAccountCode',
        'active' => 'getActive',
        'include_if_zero' => 'getIncludeIfZero',
        'department' => 'getDepartment',
        'item_code' => 'getItemCode',
        'invoice_template_id' => 'getInvoiceTemplateId',
        'billing_rule_id' => 'getBillingRuleId',
        'price_level_mode' => 'getPriceLevelMode',
        'script_id' => 'getScriptId',
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
        $this->container['lob_id'] = isset($data['lob_id']) ? $data['lob_id'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['seq_no'] = isset($data['seq_no']) ? $data['seq_no'] : null;
        $this->container['account_code'] = isset($data['account_code']) ? $data['account_code'] : null;
        $this->container['active'] = isset($data['active']) ? $data['active'] : false;
        $this->container['include_if_zero'] = isset($data['include_if_zero']) ? $data['include_if_zero'] : false;
        $this->container['department'] = isset($data['department']) ? $data['department'] : null;
        $this->container['item_code'] = isset($data['item_code']) ? $data['item_code'] : null;
        $this->container['invoice_template_id'] = isset($data['invoice_template_id']) ? $data['invoice_template_id'] : null;
        $this->container['billing_rule_id'] = isset($data['billing_rule_id']) ? $data['billing_rule_id'] : null;
        $this->container['price_level_mode'] = isset($data['price_level_mode']) ? $data['price_level_mode'] : null;
        $this->container['script_id'] = isset($data['script_id']) ? $data['script_id'] : null;
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

        if ($this->container['lob_id'] === null) {
            $invalidProperties[] = "'lob_id' can't be null";
        }
        if ($this->container['active'] === null) {
            $invalidProperties[] = "'active' can't be null";
        }
        if ($this->container['include_if_zero'] === null) {
            $invalidProperties[] = "'include_if_zero' can't be null";
        }
        if ($this->container['billing_rule_id'] === null) {
            $invalidProperties[] = "'billing_rule_id' can't be null";
        }
        if ($this->container['price_level_mode'] === null) {
            $invalidProperties[] = "'price_level_mode' can't be null";
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

        if ($this->container['lob_id'] === null) {
            return false;
        }
        if ($this->container['active'] === null) {
            return false;
        }
        if ($this->container['include_if_zero'] === null) {
            return false;
        }
        if ($this->container['billing_rule_id'] === null) {
            return false;
        }
        if ($this->container['price_level_mode'] === null) {
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
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets seq_no
     *
     * @return int
     */
    public function getSeqNo()
    {
        return $this->container['seq_no'];
    }

    /**
     * Sets seq_no
     *
     * @param int $seq_no seq_no
     *
     * @return $this
     */
    public function setSeqNo($seq_no)
    {
        $this->container['seq_no'] = $seq_no;

        return $this;
    }

    /**
     * Gets account_code
     *
     * @return string
     */
    public function getAccountCode()
    {
        return $this->container['account_code'];
    }

    /**
     * Sets account_code
     *
     * @param string $account_code account_code
     *
     * @return $this
     */
    public function setAccountCode($account_code)
    {
        $this->container['account_code'] = $account_code;

        return $this;
    }

    /**
     * Gets active
     *
     * @return bool
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param bool $active active
     *
     * @return $this
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets include_if_zero
     *
     * @return bool
     */
    public function getIncludeIfZero()
    {
        return $this->container['include_if_zero'];
    }

    /**
     * Sets include_if_zero
     *
     * @param bool $include_if_zero include_if_zero
     *
     * @return $this
     */
    public function setIncludeIfZero($include_if_zero)
    {
        $this->container['include_if_zero'] = $include_if_zero;

        return $this;
    }

    /**
     * Gets department
     *
     * @return string
     */
    public function getDepartment()
    {
        return $this->container['department'];
    }

    /**
     * Sets department
     *
     * @param string $department department
     *
     * @return $this
     */
    public function setDepartment($department)
    {
        $this->container['department'] = $department;

        return $this;
    }

    /**
     * Gets item_code
     *
     * @return string
     */
    public function getItemCode()
    {
        return $this->container['item_code'];
    }

    /**
     * Sets item_code
     *
     * @param string $item_code item_code
     *
     * @return $this
     */
    public function setItemCode($item_code)
    {
        $this->container['item_code'] = $item_code;

        return $this;
    }

    /**
     * Gets invoice_template_id
     *
     * @return int
     */
    public function getInvoiceTemplateId()
    {
        return $this->container['invoice_template_id'];
    }

    /**
     * Sets invoice_template_id
     *
     * @param int $invoice_template_id invoice_template_id
     *
     * @return $this
     */
    public function setInvoiceTemplateId($invoice_template_id)
    {
        $this->container['invoice_template_id'] = $invoice_template_id;

        return $this;
    }

    /**
     * Gets billing_rule_id
     *
     * @return int
     */
    public function getBillingRuleId()
    {
        return $this->container['billing_rule_id'];
    }

    /**
     * Sets billing_rule_id
     *
     * @param int $billing_rule_id billing_rule_id
     *
     * @return $this
     */
    public function setBillingRuleId($billing_rule_id)
    {
        $this->container['billing_rule_id'] = $billing_rule_id;

        return $this;
    }

    /**
     * Gets price_level_mode
     *
     * @return string
     */
    public function getPriceLevelMode()
    {
        return $this->container['price_level_mode'];
    }

    /**
     * Sets price_level_mode
     *
     * @param string $price_level_mode price_level_mode
     *
     * @return $this
     */
    public function setPriceLevelMode($price_level_mode)
    {
        $this->container['price_level_mode'] = $price_level_mode;

        return $this;
    }

    /**
     * Gets script_id
     *
     * @return int
     */
    public function getScriptId()
    {
        return $this->container['script_id'];
    }

    /**
     * Sets script_id
     *
     * @param int $script_id script_id
     *
     * @return $this
     */
    public function setScriptId($script_id)
    {
        $this->container['script_id'] = $script_id;

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


