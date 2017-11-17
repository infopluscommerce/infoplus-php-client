# FulfillmentPlan

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] 
**create_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**modify_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**name** | **string** |  | 
**description** | **string** |  | [optional] 
**warehouse_id** | **int** |  | 
**order_smart_filter_id** | **int** |  | 
**location_smart_filter_id** | **int** |  | [optional] 
**maximum_number_of_orders** | **int** |  | [optional] 
**create_pick_work** | **bool** |  | [default to false]
**picking_rule** | **string** |  | [optional] 
**layout_rule** | **string** |  | [optional] 
**pick_sort_rule** | **string** |  | [optional] 
**create_pick_list** | **bool** |  | [optional] [default to false]
**pick_list_format** | **string** |  | [optional] 
**pick_list_layout** | **string** |  | [optional] 
**pick_list_group** | **string** |  | [optional] 
**pick_list_sort** | **string** |  | [optional] 
**create_pick_summary** | **bool** |  | [optional] [default to false]
**pick_summary_format** | **string** |  | [optional] 
**pick_summary_layout** | **string** |  | [optional] 
**pick_summary_sort** | **string** |  | [optional] 
**pick_scan_scheme_id** | **int** |  | 
**cartonize_orders** | **bool** |  | [default to false]
**auto_ship_casebreak_cartons** | **bool** |  | [optional] [default to false]
**pre_generate_parcel_labels** | **bool** |  | [optional] [default to false]
**override_packing_slip_template_id** | **int** |  | [optional] 
**create_packing_slip** | **bool** |  | [default to false]
**create_order_assembly_guide** | **bool** |  | [optional] [default to false]
**custom_fields** | **map[string,object]** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


