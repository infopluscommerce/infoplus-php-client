<?php
/**
 * Job
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
 * Job Class Doc Comment
 *
 * @category Class
 * @package  Infoplus
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Job implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'job';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'create_date' => '\DateTime',
        'modify_date' => '\DateTime',
        'source_job_recipe_id' => 'int',
        'assembly_quantity' => 'int',
        'warehouse_id' => 'int',
        'lob_id' => 'int',
        'status' => 'string',
        'order_no_id' => 'float',
        'po_no_id' => 'int',
        'work_batch_id' => 'int',
        'layout' => 'string',
        'track_assemblies' => 'bool',
        'track_steps' => 'bool',
        'job_no' => 'string',
        'assembly_instructions' => 'string',
        'inputs' => '\Infoplus\Infoplus\Model\JobInput[]',
        'outputs' => '\Infoplus\Infoplus\Model\JobOutput[]',
        'steps' => '\Infoplus\Infoplus\Model\JobStep[]',
        'fulfillment_plan_id' => 'int',
        'total_picks' => 'int',
        'completed_picks' => 'int',
        'total_assemblies' => 'int',
        'completed_assemblies' => 'int',
        'total_steps' => 'int',
        'completed_steps' => 'int',
        'total_receipts' => 'int',
        'completed_receipts' => 'int',
        'total_to_do' => 'int',
        'completed_to_do' => 'int',
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
        'source_job_recipe_id' => 'int32',
        'assembly_quantity' => 'int32',
        'warehouse_id' => 'int32',
        'lob_id' => 'int32',
        'status' => null,
        'order_no_id' => null,
        'po_no_id' => 'int32',
        'work_batch_id' => 'int32',
        'layout' => null,
        'track_assemblies' => null,
        'track_steps' => null,
        'job_no' => null,
        'assembly_instructions' => null,
        'inputs' => null,
        'outputs' => null,
        'steps' => null,
        'fulfillment_plan_id' => 'int32',
        'total_picks' => 'int32',
        'completed_picks' => 'int32',
        'total_assemblies' => 'int32',
        'completed_assemblies' => 'int32',
        'total_steps' => 'int32',
        'completed_steps' => 'int32',
        'total_receipts' => 'int32',
        'completed_receipts' => 'int32',
        'total_to_do' => 'int32',
        'completed_to_do' => 'int32',
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
        'source_job_recipe_id' => 'sourceJobRecipeId',
        'assembly_quantity' => 'assemblyQuantity',
        'warehouse_id' => 'warehouseId',
        'lob_id' => 'lobId',
        'status' => 'status',
        'order_no_id' => 'orderNoId',
        'po_no_id' => 'poNoId',
        'work_batch_id' => 'workBatchId',
        'layout' => 'layout',
        'track_assemblies' => 'trackAssemblies',
        'track_steps' => 'trackSteps',
        'job_no' => 'jobNo',
        'assembly_instructions' => 'assemblyInstructions',
        'inputs' => 'inputs',
        'outputs' => 'outputs',
        'steps' => 'steps',
        'fulfillment_plan_id' => 'fulfillmentPlanId',
        'total_picks' => 'totalPicks',
        'completed_picks' => 'completedPicks',
        'total_assemblies' => 'totalAssemblies',
        'completed_assemblies' => 'completedAssemblies',
        'total_steps' => 'totalSteps',
        'completed_steps' => 'completedSteps',
        'total_receipts' => 'totalReceipts',
        'completed_receipts' => 'completedReceipts',
        'total_to_do' => 'totalToDo',
        'completed_to_do' => 'completedToDo',
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
        'source_job_recipe_id' => 'setSourceJobRecipeId',
        'assembly_quantity' => 'setAssemblyQuantity',
        'warehouse_id' => 'setWarehouseId',
        'lob_id' => 'setLobId',
        'status' => 'setStatus',
        'order_no_id' => 'setOrderNoId',
        'po_no_id' => 'setPoNoId',
        'work_batch_id' => 'setWorkBatchId',
        'layout' => 'setLayout',
        'track_assemblies' => 'setTrackAssemblies',
        'track_steps' => 'setTrackSteps',
        'job_no' => 'setJobNo',
        'assembly_instructions' => 'setAssemblyInstructions',
        'inputs' => 'setInputs',
        'outputs' => 'setOutputs',
        'steps' => 'setSteps',
        'fulfillment_plan_id' => 'setFulfillmentPlanId',
        'total_picks' => 'setTotalPicks',
        'completed_picks' => 'setCompletedPicks',
        'total_assemblies' => 'setTotalAssemblies',
        'completed_assemblies' => 'setCompletedAssemblies',
        'total_steps' => 'setTotalSteps',
        'completed_steps' => 'setCompletedSteps',
        'total_receipts' => 'setTotalReceipts',
        'completed_receipts' => 'setCompletedReceipts',
        'total_to_do' => 'setTotalToDo',
        'completed_to_do' => 'setCompletedToDo',
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
        'source_job_recipe_id' => 'getSourceJobRecipeId',
        'assembly_quantity' => 'getAssemblyQuantity',
        'warehouse_id' => 'getWarehouseId',
        'lob_id' => 'getLobId',
        'status' => 'getStatus',
        'order_no_id' => 'getOrderNoId',
        'po_no_id' => 'getPoNoId',
        'work_batch_id' => 'getWorkBatchId',
        'layout' => 'getLayout',
        'track_assemblies' => 'getTrackAssemblies',
        'track_steps' => 'getTrackSteps',
        'job_no' => 'getJobNo',
        'assembly_instructions' => 'getAssemblyInstructions',
        'inputs' => 'getInputs',
        'outputs' => 'getOutputs',
        'steps' => 'getSteps',
        'fulfillment_plan_id' => 'getFulfillmentPlanId',
        'total_picks' => 'getTotalPicks',
        'completed_picks' => 'getCompletedPicks',
        'total_assemblies' => 'getTotalAssemblies',
        'completed_assemblies' => 'getCompletedAssemblies',
        'total_steps' => 'getTotalSteps',
        'completed_steps' => 'getCompletedSteps',
        'total_receipts' => 'getTotalReceipts',
        'completed_receipts' => 'getCompletedReceipts',
        'total_to_do' => 'getTotalToDo',
        'completed_to_do' => 'getCompletedToDo',
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
        $this->container['source_job_recipe_id'] = isset($data['source_job_recipe_id']) ? $data['source_job_recipe_id'] : null;
        $this->container['assembly_quantity'] = isset($data['assembly_quantity']) ? $data['assembly_quantity'] : null;
        $this->container['warehouse_id'] = isset($data['warehouse_id']) ? $data['warehouse_id'] : null;
        $this->container['lob_id'] = isset($data['lob_id']) ? $data['lob_id'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['order_no_id'] = isset($data['order_no_id']) ? $data['order_no_id'] : null;
        $this->container['po_no_id'] = isset($data['po_no_id']) ? $data['po_no_id'] : null;
        $this->container['work_batch_id'] = isset($data['work_batch_id']) ? $data['work_batch_id'] : null;
        $this->container['layout'] = isset($data['layout']) ? $data['layout'] : null;
        $this->container['track_assemblies'] = isset($data['track_assemblies']) ? $data['track_assemblies'] : false;
        $this->container['track_steps'] = isset($data['track_steps']) ? $data['track_steps'] : false;
        $this->container['job_no'] = isset($data['job_no']) ? $data['job_no'] : null;
        $this->container['assembly_instructions'] = isset($data['assembly_instructions']) ? $data['assembly_instructions'] : null;
        $this->container['inputs'] = isset($data['inputs']) ? $data['inputs'] : null;
        $this->container['outputs'] = isset($data['outputs']) ? $data['outputs'] : null;
        $this->container['steps'] = isset($data['steps']) ? $data['steps'] : null;
        $this->container['fulfillment_plan_id'] = isset($data['fulfillment_plan_id']) ? $data['fulfillment_plan_id'] : null;
        $this->container['total_picks'] = isset($data['total_picks']) ? $data['total_picks'] : null;
        $this->container['completed_picks'] = isset($data['completed_picks']) ? $data['completed_picks'] : null;
        $this->container['total_assemblies'] = isset($data['total_assemblies']) ? $data['total_assemblies'] : null;
        $this->container['completed_assemblies'] = isset($data['completed_assemblies']) ? $data['completed_assemblies'] : null;
        $this->container['total_steps'] = isset($data['total_steps']) ? $data['total_steps'] : null;
        $this->container['completed_steps'] = isset($data['completed_steps']) ? $data['completed_steps'] : null;
        $this->container['total_receipts'] = isset($data['total_receipts']) ? $data['total_receipts'] : null;
        $this->container['completed_receipts'] = isset($data['completed_receipts']) ? $data['completed_receipts'] : null;
        $this->container['total_to_do'] = isset($data['total_to_do']) ? $data['total_to_do'] : null;
        $this->container['completed_to_do'] = isset($data['completed_to_do']) ? $data['completed_to_do'] : null;
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

        if ($this->container['assembly_quantity'] === null) {
            $invalidProperties[] = "'assembly_quantity' can't be null";
        }
        if ($this->container['warehouse_id'] === null) {
            $invalidProperties[] = "'warehouse_id' can't be null";
        }
        if ($this->container['lob_id'] === null) {
            $invalidProperties[] = "'lob_id' can't be null";
        }
        if ($this->container['layout'] === null) {
            $invalidProperties[] = "'layout' can't be null";
        }
        if ($this->container['track_assemblies'] === null) {
            $invalidProperties[] = "'track_assemblies' can't be null";
        }
        if ($this->container['track_steps'] === null) {
            $invalidProperties[] = "'track_steps' can't be null";
        }
        if ($this->container['fulfillment_plan_id'] === null) {
            $invalidProperties[] = "'fulfillment_plan_id' can't be null";
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

        if ($this->container['assembly_quantity'] === null) {
            return false;
        }
        if ($this->container['warehouse_id'] === null) {
            return false;
        }
        if ($this->container['lob_id'] === null) {
            return false;
        }
        if ($this->container['layout'] === null) {
            return false;
        }
        if ($this->container['track_assemblies'] === null) {
            return false;
        }
        if ($this->container['track_steps'] === null) {
            return false;
        }
        if ($this->container['fulfillment_plan_id'] === null) {
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
     * Gets source_job_recipe_id
     *
     * @return int
     */
    public function getSourceJobRecipeId()
    {
        return $this->container['source_job_recipe_id'];
    }

    /**
     * Sets source_job_recipe_id
     *
     * @param int $source_job_recipe_id source_job_recipe_id
     *
     * @return $this
     */
    public function setSourceJobRecipeId($source_job_recipe_id)
    {
        $this->container['source_job_recipe_id'] = $source_job_recipe_id;

        return $this;
    }

    /**
     * Gets assembly_quantity
     *
     * @return int
     */
    public function getAssemblyQuantity()
    {
        return $this->container['assembly_quantity'];
    }

    /**
     * Sets assembly_quantity
     *
     * @param int $assembly_quantity assembly_quantity
     *
     * @return $this
     */
    public function setAssemblyQuantity($assembly_quantity)
    {
        $this->container['assembly_quantity'] = $assembly_quantity;

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
     * Gets order_no_id
     *
     * @return float
     */
    public function getOrderNoId()
    {
        return $this->container['order_no_id'];
    }

    /**
     * Sets order_no_id
     *
     * @param float $order_no_id order_no_id
     *
     * @return $this
     */
    public function setOrderNoId($order_no_id)
    {
        $this->container['order_no_id'] = $order_no_id;

        return $this;
    }

    /**
     * Gets po_no_id
     *
     * @return int
     */
    public function getPoNoId()
    {
        return $this->container['po_no_id'];
    }

    /**
     * Sets po_no_id
     *
     * @param int $po_no_id po_no_id
     *
     * @return $this
     */
    public function setPoNoId($po_no_id)
    {
        $this->container['po_no_id'] = $po_no_id;

        return $this;
    }

    /**
     * Gets work_batch_id
     *
     * @return int
     */
    public function getWorkBatchId()
    {
        return $this->container['work_batch_id'];
    }

    /**
     * Sets work_batch_id
     *
     * @param int $work_batch_id work_batch_id
     *
     * @return $this
     */
    public function setWorkBatchId($work_batch_id)
    {
        $this->container['work_batch_id'] = $work_batch_id;

        return $this;
    }

    /**
     * Gets layout
     *
     * @return string
     */
    public function getLayout()
    {
        return $this->container['layout'];
    }

    /**
     * Sets layout
     *
     * @param string $layout layout
     *
     * @return $this
     */
    public function setLayout($layout)
    {
        $this->container['layout'] = $layout;

        return $this;
    }

    /**
     * Gets track_assemblies
     *
     * @return bool
     */
    public function getTrackAssemblies()
    {
        return $this->container['track_assemblies'];
    }

    /**
     * Sets track_assemblies
     *
     * @param bool $track_assemblies track_assemblies
     *
     * @return $this
     */
    public function setTrackAssemblies($track_assemblies)
    {
        $this->container['track_assemblies'] = $track_assemblies;

        return $this;
    }

    /**
     * Gets track_steps
     *
     * @return bool
     */
    public function getTrackSteps()
    {
        return $this->container['track_steps'];
    }

    /**
     * Sets track_steps
     *
     * @param bool $track_steps track_steps
     *
     * @return $this
     */
    public function setTrackSteps($track_steps)
    {
        $this->container['track_steps'] = $track_steps;

        return $this;
    }

    /**
     * Gets job_no
     *
     * @return string
     */
    public function getJobNo()
    {
        return $this->container['job_no'];
    }

    /**
     * Sets job_no
     *
     * @param string $job_no job_no
     *
     * @return $this
     */
    public function setJobNo($job_no)
    {
        $this->container['job_no'] = $job_no;

        return $this;
    }

    /**
     * Gets assembly_instructions
     *
     * @return string
     */
    public function getAssemblyInstructions()
    {
        return $this->container['assembly_instructions'];
    }

    /**
     * Sets assembly_instructions
     *
     * @param string $assembly_instructions assembly_instructions
     *
     * @return $this
     */
    public function setAssemblyInstructions($assembly_instructions)
    {
        $this->container['assembly_instructions'] = $assembly_instructions;

        return $this;
    }

    /**
     * Gets inputs
     *
     * @return \Infoplus\Infoplus\Model\JobInput[]
     */
    public function getInputs()
    {
        return $this->container['inputs'];
    }

    /**
     * Sets inputs
     *
     * @param \Infoplus\Infoplus\Model\JobInput[] $inputs inputs
     *
     * @return $this
     */
    public function setInputs($inputs)
    {
        $this->container['inputs'] = $inputs;

        return $this;
    }

    /**
     * Gets outputs
     *
     * @return \Infoplus\Infoplus\Model\JobOutput[]
     */
    public function getOutputs()
    {
        return $this->container['outputs'];
    }

    /**
     * Sets outputs
     *
     * @param \Infoplus\Infoplus\Model\JobOutput[] $outputs outputs
     *
     * @return $this
     */
    public function setOutputs($outputs)
    {
        $this->container['outputs'] = $outputs;

        return $this;
    }

    /**
     * Gets steps
     *
     * @return \Infoplus\Infoplus\Model\JobStep[]
     */
    public function getSteps()
    {
        return $this->container['steps'];
    }

    /**
     * Sets steps
     *
     * @param \Infoplus\Infoplus\Model\JobStep[] $steps steps
     *
     * @return $this
     */
    public function setSteps($steps)
    {
        $this->container['steps'] = $steps;

        return $this;
    }

    /**
     * Gets fulfillment_plan_id
     *
     * @return int
     */
    public function getFulfillmentPlanId()
    {
        return $this->container['fulfillment_plan_id'];
    }

    /**
     * Sets fulfillment_plan_id
     *
     * @param int $fulfillment_plan_id fulfillment_plan_id
     *
     * @return $this
     */
    public function setFulfillmentPlanId($fulfillment_plan_id)
    {
        $this->container['fulfillment_plan_id'] = $fulfillment_plan_id;

        return $this;
    }

    /**
     * Gets total_picks
     *
     * @return int
     */
    public function getTotalPicks()
    {
        return $this->container['total_picks'];
    }

    /**
     * Sets total_picks
     *
     * @param int $total_picks total_picks
     *
     * @return $this
     */
    public function setTotalPicks($total_picks)
    {
        $this->container['total_picks'] = $total_picks;

        return $this;
    }

    /**
     * Gets completed_picks
     *
     * @return int
     */
    public function getCompletedPicks()
    {
        return $this->container['completed_picks'];
    }

    /**
     * Sets completed_picks
     *
     * @param int $completed_picks completed_picks
     *
     * @return $this
     */
    public function setCompletedPicks($completed_picks)
    {
        $this->container['completed_picks'] = $completed_picks;

        return $this;
    }

    /**
     * Gets total_assemblies
     *
     * @return int
     */
    public function getTotalAssemblies()
    {
        return $this->container['total_assemblies'];
    }

    /**
     * Sets total_assemblies
     *
     * @param int $total_assemblies total_assemblies
     *
     * @return $this
     */
    public function setTotalAssemblies($total_assemblies)
    {
        $this->container['total_assemblies'] = $total_assemblies;

        return $this;
    }

    /**
     * Gets completed_assemblies
     *
     * @return int
     */
    public function getCompletedAssemblies()
    {
        return $this->container['completed_assemblies'];
    }

    /**
     * Sets completed_assemblies
     *
     * @param int $completed_assemblies completed_assemblies
     *
     * @return $this
     */
    public function setCompletedAssemblies($completed_assemblies)
    {
        $this->container['completed_assemblies'] = $completed_assemblies;

        return $this;
    }

    /**
     * Gets total_steps
     *
     * @return int
     */
    public function getTotalSteps()
    {
        return $this->container['total_steps'];
    }

    /**
     * Sets total_steps
     *
     * @param int $total_steps total_steps
     *
     * @return $this
     */
    public function setTotalSteps($total_steps)
    {
        $this->container['total_steps'] = $total_steps;

        return $this;
    }

    /**
     * Gets completed_steps
     *
     * @return int
     */
    public function getCompletedSteps()
    {
        return $this->container['completed_steps'];
    }

    /**
     * Sets completed_steps
     *
     * @param int $completed_steps completed_steps
     *
     * @return $this
     */
    public function setCompletedSteps($completed_steps)
    {
        $this->container['completed_steps'] = $completed_steps;

        return $this;
    }

    /**
     * Gets total_receipts
     *
     * @return int
     */
    public function getTotalReceipts()
    {
        return $this->container['total_receipts'];
    }

    /**
     * Sets total_receipts
     *
     * @param int $total_receipts total_receipts
     *
     * @return $this
     */
    public function setTotalReceipts($total_receipts)
    {
        $this->container['total_receipts'] = $total_receipts;

        return $this;
    }

    /**
     * Gets completed_receipts
     *
     * @return int
     */
    public function getCompletedReceipts()
    {
        return $this->container['completed_receipts'];
    }

    /**
     * Sets completed_receipts
     *
     * @param int $completed_receipts completed_receipts
     *
     * @return $this
     */
    public function setCompletedReceipts($completed_receipts)
    {
        $this->container['completed_receipts'] = $completed_receipts;

        return $this;
    }

    /**
     * Gets total_to_do
     *
     * @return int
     */
    public function getTotalToDo()
    {
        return $this->container['total_to_do'];
    }

    /**
     * Sets total_to_do
     *
     * @param int $total_to_do total_to_do
     *
     * @return $this
     */
    public function setTotalToDo($total_to_do)
    {
        $this->container['total_to_do'] = $total_to_do;

        return $this;
    }

    /**
     * Gets completed_to_do
     *
     * @return int
     */
    public function getCompletedToDo()
    {
        return $this->container['completed_to_do'];
    }

    /**
     * Sets completed_to_do
     *
     * @param int $completed_to_do completed_to_do
     *
     * @return $this
     */
    public function setCompletedToDo($completed_to_do)
    {
        $this->container['completed_to_do'] = $completed_to_do;

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


