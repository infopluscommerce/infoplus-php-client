# WorkActivity

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] 
**imported_record_id** | **int** |  | [optional] 
**lob_id** | **int** |  | 
**create_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**modify_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**user_id** | **int** |  | 
**email** | **string** |  | 
**type** | **string** |  | 
**type_name** | **string** |  | 
**status** | **string** |  | 
**status_name** | **string** |  | 
**work_batch_id** | **int** |  | [optional] 
**work_parent_id** | **int** |  | [optional] 
**priority_code** | **int** |  | 
**foreign_id** | **int** |  | [optional] 
**source_warehouse_id** | **int** |  | 
**source_warehouse_name** | **string** |  | 
**source_location** | **string** |  | 
**source_building_id** | **int** |  | 
**source_building_name** | **string** |  | 
**source_zone_id** | **int** |  | [optional] 
**source_zone_name** | **string** |  | 
**source_aisle_id** | **int** |  | [optional] 
**source_aisle_address** | **string** |  | 
**source_origin** | **int** |  | [optional] 
**source_origin_name** | **string** |  | 
**source_billing_type_id** | **int** |  | 
**source_billing_type_name** | **string** |  | 
**source_behavior_type** | **string** |  | 
**source_behavior_type_name** | **string** |  | 
**source_footprint_id** | **int** |  | 
**source_footprint_name** | **string** |  | 
**source_footprint_height** | **int** |  | [optional] 
**source_footprint_width** | **int** |  | [optional] 
**source_footprint_depth** | **int** |  | [optional] 
**source_address_scheme_id** | **int** |  | [optional] 
**source_address_scheme_name** | **string** |  | 
**source_level** | **int** |  | [optional] 
**source_bay** | **int** |  | [optional] 
**source_number** | **int** |  | [optional] 
**source_online** | **bool** |  | [default to false]
**source_priority_code** | **int** |  | [optional] 
**source_cost** | **int** |  | [optional] 
**source_allow_item_mixing** | **bool** |  | [default to false]
**destination_warehouse_id** | **int** |  | 
**destination_warehouse_name** | **string** |  | 
**destination_location** | **string** |  | 
**destination_building_id** | **int** |  | 
**destination_building_name** | **string** |  | 
**destination_zone_id** | **int** |  | [optional] 
**destination_zone_name** | **string** |  | 
**destination_aisle_id** | **int** |  | [optional] 
**destination_aisle_address** | **string** |  | 
**destination_origin** | **int** |  | [optional] 
**destination_origin_name** | **string** |  | 
**destination_billing_type_id** | **int** |  | 
**destination_billing_type_name** | **string** |  | 
**destination_behavior_type** | **string** |  | 
**destination_behavior_type_name** | **string** |  | 
**destination_footprint_id** | **int** |  | 
**destination_footprint_name** | **string** |  | 
**destination_footprint_height** | **int** |  | [optional] 
**destination_footprint_width** | **int** |  | [optional] 
**destination_footprint_depth** | **int** |  | [optional] 
**destination_address_scheme_id** | **int** |  | [optional] 
**destination_address_scheme_name** | **string** |  | 
**destination_level** | **int** |  | [optional] 
**destination_bay** | **int** |  | [optional] 
**destination_number** | **int** |  | [optional] 
**destination_online** | **bool** |  | [default to false]
**destination_priority_code** | **int** |  | [optional] 
**destination_cost** | **int** |  | [optional] 
**destination_allow_item_mixing** | **bool** |  | [default to false]
**work_create_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**work_modify_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**master_ref** | **int** |  | [optional] 
**weight_per_wrap** | **float** |  | [optional] 
**sku** | **string** |  | 
**numeric_sort_order** | **int** |  | [optional] 
**item_description** | **string** |  | 
**additional_description** | **string** |  | [optional] 
**unit_code** | **string** |  | 
**wrap_code** | **string** |  | 
**units_per_wrap** | **int** |  | 
**quantity** | **int** |  | [optional] 
**number_of_wraps** | **int** |  | [optional] 
**number_of_cases** | **int** |  | [optional] 
**pick_touches** | **int** |  | [optional] 
**class_restriction** | **string** |  | 
**max_cycle** | **int** |  | 
**max_interim** | **int** |  | 
**seasonal_item** | **string** |  | 
**secure** | **string** |  | 
**product_type** | **int** |  | [optional] 
**item_status** | **string** |  | 
**overall_lead_time** | **int** |  | [optional] 
**overall_fixed_reorder_point** | **int** |  | [optional] 
**quality_control_indicator** | **string** |  | 
**lot_control_flag** | **string** |  | [optional] 
**product_code_flag** | **string** |  | 
**charge_code** | **string** |  | 
**pod_rev_date** | **string** |  | [optional] 
**pod_order_suffix** | **int** |  | [optional] 
**serial_code** | **string** |  | 
**asset_code** | **string** |  | [optional] 
**backorder** | **string** |  | 
**absolute_max** | **string** |  | [optional] 
**account_code_id** | **int** |  | [optional] 
**summary_code_id** | **int** |  | [optional] 
**low_stock_contact_id** | **int** |  | [optional] 
**legacy_low_level_contact_id** | **int** |  | [optional] 
**low_stock_code_id** | **int** |  | [optional] 
**major_group_id** | **int** |  | 
**sub_group_id** | **int** |  | 
**product_code_id** | **int** |  | [optional] 
**buyer_id** | **int** |  | [optional] 
**vendor_sku** | **string** |  | [optional] 
**upc** | **string** |  | [optional] 
**packing_slip_description** | **string** |  | [optional] 
**commodity_code_id** | **int** |  | [optional] 
**comp_code** | **int** |  | [optional] 
**critical_amount** | **int** |  | 
**list_price** | **float** |  | [optional] 
**outside_vendor** | **int** |  | [optional] 
**pick_no** | **string** |  | [optional] 
**requires_production_lot** | **string** |  | [optional] 
**sector** | **string** |  | [optional] 
**void_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**extrinsic_text1** | **string** |  | [optional] 
**extrinsic_text2** | **string** |  | [optional] 
**extrinsic_text3** | **string** |  | [optional] 
**extrinsic_number1** | **int** |  | [optional] 
**extrinsic_number2** | **int** |  | [optional] 
**extrinsic_decimal1** | **float** |  | [optional] 
**extrinsic_decimal2** | **float** |  | [optional] 
**casebreak_enabled** | **string** |  | [optional] 
**alcohol_type_id** | **int** |  | [optional] 
**alcohol_type_name** | **string** |  | [optional] 
**alcohol_content** | **float** |  | [optional] 
**alcohol_container_id** | **int** |  | [optional] 
**alcohol_container_name** | **string** |  | [optional] 
**alcohol_container_volume** | **int** |  | [optional] 
**alcohol_vintage_year** | **string** |  | [optional] 
**alcohol_country_id** | **int** |  | [optional] 
**alcohol_country_name** | **string** |  | [optional] 
**alcohol_state** | **string** |  | [optional] 
**alcohol_region** | **string** |  | [optional] 
**alcohol_brand** | **string** |  | [optional] 
**alcohol_upc_code** | **string** |  | [optional] 
**alcohol_nabca_code** | **string** |  | [optional] 
**alcohol_unimerc_code** | **string** |  | [optional] 
**alcohol_scc_code** | **string** |  | [optional] 
**billing_quantity** | **float** |  | [optional] 
**charge_rate** | **float** |  | [optional] 
**extended_charge** | **float** |  | [optional] 
**custom_fields** | **map[string,object]** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


