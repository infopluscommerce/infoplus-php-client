# ReceivingWorksheet

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] 
**warehouse_id** | **int** |  | 
**po_no_id** | **int** |  | [optional] 
**lob_id** | **int** |  | [optional] 
**vendor_id** | **int** |  | [optional] 
**status** | **string** |  | [optional] 
**service_level** | **string** |  | 
**receiving_process_id** | **int** |  | [optional] 
**dock_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**created_by** | **int** |  | [optional] 
**worksheet_name** | **string** |  | 
**carrier** | **string** |  | [optional] 
**on_the_dock** | **bool** |  | [optional] [default to false]
**auto_commit** | **bool** |  | [default to false]
**line_items** | [**\Infoplus\Infoplus\Model\ReceivingWorksheetLineItem[]**](ReceivingWorksheetLineItem.md) |  | [optional] 
**notes** | **string** |  | [optional] 
**work_batch_id** | **int** |  | [optional] 
**create_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**modify_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**custom_fields** | **map[string,object]** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


