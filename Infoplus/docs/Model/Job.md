# Job

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] 
**create_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**modify_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**source_job_recipe_id** | **int** |  | [optional] 
**assembly_quantity** | **int** |  | 
**warehouse_id** | **int** |  | 
**lob_id** | **int** |  | 
**status** | **string** |  | [optional] 
**order_no_id** | **float** |  | [optional] 
**po_no_id** | **int** |  | [optional] 
**work_batch_id** | **int** |  | [optional] 
**layout** | **string** |  | 
**track_assemblies** | **bool** |  | [default to false]
**track_steps** | **bool** |  | [default to false]
**job_no** | **string** |  | [optional] 
**assembly_instructions** | **string** |  | [optional] 
**inputs** | [**\Infoplus\Infoplus\Model\JobInput[]**](JobInput.md) |  | [optional] 
**outputs** | [**\Infoplus\Infoplus\Model\JobOutput[]**](JobOutput.md) |  | [optional] 
**steps** | [**\Infoplus\Infoplus\Model\JobStep[]**](JobStep.md) |  | [optional] 
**fulfillment_plan_id** | **int** |  | 
**total_picks_putbacks** | **int** |  | [optional] 
**completed_picks_putbacks** | **int** |  | [optional] 
**total_assemblies** | **int** |  | [optional] 
**completed_assemblies** | **int** |  | [optional] 
**total_steps** | **int** |  | [optional] 
**completed_steps** | **int** |  | [optional] 
**total_receipts** | **int** |  | [optional] 
**completed_receipts** | **int** |  | [optional] 
**total_to_do** | **int** |  | [optional] 
**completed_to_do** | **int** |  | [optional] 
**custom_fields** | **map[string,object]** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


