# JobRecipe

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] 
**create_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**modify_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**warehouse_id** | **int** |  | [optional] 
**lob_id** | **int** |  | 
**name** | **string** |  | 
**assembly_instructions** | **string** |  | [optional] 
**inputs** | [**\Infoplus\Infoplus\Model\JobRecipeInput[]**](JobRecipeInput.md) |  | [optional] 
**outputs** | [**\Infoplus\Infoplus\Model\JobRecipeOutput[]**](JobRecipeOutput.md) |  | [optional] 
**steps** | [**\Infoplus\Infoplus\Model\JobRecipeStep[]**](JobRecipeStep.md) |  | [optional] 
**fulfillment_plan_id** | **int** |  | 
**layout** | **string** |  | 
**track_assemblies** | **bool** |  | [default to false]
**track_steps** | **bool** |  | [default to false]
**custom_fields** | **map[string,object]** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


