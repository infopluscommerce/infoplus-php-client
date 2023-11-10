# FulfillmentProcess

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] 
**create_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**modify_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**process_no** | **int** |  | [optional] 
**work_batch_id_list** | **int[]** |  | [optional] 
**warehouse_id** | **int** |  | 
**fulfillment_plan_id** | **int** |  | 
**pick_scan_scheme_id** | **int** |  | 
**status** | **string** |  | 
**order_smart_filter_id** | **int** |  | [optional] 
**location_smart_filter_id** | **int** |  | [optional] 
**max_orders** | **int** |  | [optional] 
**batch_max_size** | **int** |  | [optional] 
**batch_min_size** | **int** |  | [optional] 
**max_cartons** | **int** |  | [optional] 
**version** | **string** |  | [optional] 
**fulfillment_process_group** | **int** |  | [optional] 
**is_mass_distribution** | **bool** |  | [optional] [default to false]
**priority_code** | **int** |  | [optional] 
**number_of_orders** | **int** |  | [optional] 
**number_of_lines** | **int** |  | [optional] 
**number_of_sk_us** | **int** |  | [optional] 
**completed_picks** | **int** |  | [optional] 
**total_picks** | **int** |  | [optional] 
**shipped_casebreaks** | **int** |  | [optional] 
**total_casebreaks_to_ship** | **int** |  | [optional] 
**shipped_orders** | **int** |  | [optional] 
**total_orders_to_ship** | **int** |  | [optional] 
**completed_to_do** | **int** |  | [optional] 
**total_to_do** | **int** |  | [optional] 
**create_pick_work** | **bool** |  | [optional] [default to false]
**picking_rule** | **string** |  | [optional] 
**pick_batch_group_id** | **string** |  | [optional] 
**max_sk_us_per_batch** | **int** |  | [optional] 
**layout_rule** | **string** |  | [optional] 
**pick_sort_rule** | **string** |  | [optional] 
**location_sort** | **string** |  | [optional] 
**first_pick_position** | **int** |  | [optional] 
**pick_list_format** | **string** |  | [optional] 
**pick_list_layout** | **string** |  | [optional] 
**pick_list_group** | **string** |  | [optional] 
**pick_list_sort** | **string** |  | [optional] 
**pick_list_location_sort** | **string** |  | [optional] 
**pick_summary_format** | **string** |  | [optional] 
**pick_summary_layout** | **string** |  | [optional] 
**pick_summary_sort** | **string** |  | [optional] 
**create_pick_summary** | **bool** |  | [optional] [default to false]
**create_pick_list** | **bool** |  | [optional] [default to false]
**pre_generate_parcel_labels** | **bool** |  | [optional] [default to false]
**label_sort** | **string** |  | [optional] 
**ship_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**auto_ship_casebreak_cartons** | **bool** |  | [optional] [default to false]
**auto_ship_orders** | **bool** |  | [optional] [default to false]
**cartonize_orders** | **bool** |  | [optional] [default to false]
**cartonization_script_id** | **int** |  | [optional] 
**create_packing_slip** | **string** |  | 
**override_packing_slip_template_id** | **int** |  | [optional] 
**create_order_assembly_guide** | **bool** |  | [optional] [default to false]
**order_assembly_guide_layout** | **string** |  | [optional] 
**create_order_invoice** | **string** |  | 
**override_order_invoice_template_id** | **int** |  | [optional] 
**create_carton_gs1128_labels** | **string** |  | [optional] 
**create_line_item_each_gs1128_labels** | **string** |  | [optional] 
**send_to_external_shipping_system** | **bool** |  | [default to false]
**external_shipping_system_id** | **int** |  | [optional] 
**custom_fields** | **map[string,object]** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


