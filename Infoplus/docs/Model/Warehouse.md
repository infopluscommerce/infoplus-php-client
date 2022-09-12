# Warehouse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] 
**client** | **int** |  | 
**name** | **string** |  | 
**address** | **string** |  | [optional] 
**company** | **string** |  | 
**street1** | **string** |  | 
**street2** | **string** |  | [optional] 
**street3** | **string** |  | [optional] 
**city** | **string** |  | 
**state** | **string** |  | [optional] 
**zip** | **string** |  | 
**country** | **string** |  | 
**phone** | **string** |  | 
**location_barcode_prefix** | **string** |  | [optional] 
**lpn_prefix** | **string** |  | [optional] 
**time_zone** | **string** |  | [optional] 
**pack_station_allow_packing_before_pick_work_is_complete** | **bool** |  | [default to false]
**pack_station_skip_carton_lpn** | **bool** |  | [default to false]
**pack_station_require_confirm_on_error** | **bool** |  | [default to false]
**pack_station_allow_scanning_sku_to_identify_orders** | **bool** |  | [default to false]
**pack_station_allow_entry_of_item_quantities** | **bool** |  | [default to false]
**ship_station_weight_check_packed_orders** | **bool** |  | [default to false]
**ship_station_show_user_weight_check_exceptions** | **bool** |  | [default to false]
**ship_station_auto_print_pre_generated_labels** | **bool** |  | [default to false]
**ship_station_allow_scanning_sku_to_identify_orders** | **bool** |  | [default to false]
**create_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**modify_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**custom_fields** | **map[string,object]** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


