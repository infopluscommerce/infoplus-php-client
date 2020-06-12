# Item

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] 
**account_code_id** | **int** |  | [optional] 
**low_stock_contact_id** | **int** |  | [optional] 
**legacy_low_level_contact_id** | **int** |  | [optional] 
**low_stock_code_id** | **int** |  | [optional] 
**major_group_id** | **int** |  | 
**sub_group_id** | **int** |  | 
**product_code_id** | **int** |  | [optional] 
**summary_code_id** | **int** |  | [optional] 
**buyer_id** | **int** |  | [optional] 
**lob_id** | **int** |  | 
**sku** | **string** |  | 
**vendor_sku** | **string** |  | [optional] 
**upc** | **string** |  | [optional] 
**item_description** | **string** |  | 
**packing_slip_description** | **string** |  | [optional] 
**absolute_max** | **string** |  | [optional] 
**additional_description** | **string** |  | [optional] 
**backorder** | **string** |  | 
**charge_code** | **string** |  | 
**commodity_code** | **string** |  | [optional] 
**companion_code** | **int** |  | [optional] 
**create_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**critical_amount** | **int** |  | [optional] 
**overall_fixed_reorder_point** | **int** |  | [optional] 
**overall_lead_time** | **int** |  | [optional] 
**sell_price** | **float** |  | [optional] 
**pricing_per** | **string** |  | [optional] 
**lot_control_flag** | **string** |  | [optional] 
**max_cycle** | **int** |  | 
**max_interim** | **int** |  | 
**numeric_sort_order** | **int** |  | [optional] 
**outside_vendor_id** | **int** |  | [optional] 
**pick_code** | **string** |  | [optional] 
**pod_order_suffix** | **int** |  | [optional] 
**pod_rev_date** | **string** |  | [optional] 
**status** | **string** |  | 
**seasonal_item** | **string** |  | 
**requires_production_lot** | **string** |  | [optional] 
**sector** | **string** |  | [optional] 
**secure** | **string** |  | 
**serial_code** | **string** |  | [optional] 
**unit_code** | **string** |  | 
**units_per_wrap** | **int** |  | [optional] 
**weight_per_wrap** | **float** |  | [optional] 
**quantity_per_inner_pack** | **int** |  | [optional] 
**quantity_per_case** | **int** |  | [optional] 
**quantity_per_pallet** | **int** |  | [optional] 
**inner_pack_barcode** | **string** |  | [optional] 
**case_barcode** | **string** |  | [optional] 
**pallet_barcode** | **string** |  | [optional] 
**void_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**wrap_code** | **string** |  | [optional] 
**extrinsic_text1** | **string** |  | [optional] 
**extrinsic_text2** | **string** |  | [optional] 
**extrinsic_text3** | **string** |  | [optional] 
**extrinsic_number1** | **int** |  | [optional] 
**extrinsic_number2** | **int** |  | [optional] 
**extrinsic_decimal1** | **float** |  | [optional] 
**extrinsic_decimal2** | **float** |  | [optional] 
**casebreak_enabled** | **string** |  | [optional] 
**vendor_id** | **int** |  | [optional] 
**vendor_price** | **float** |  | [optional] 
**vendor_per** | **string** |  | [optional] 
**modify_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**primary_image** | **string** |  | [optional] 
**pick_image** | **string** |  | [optional] 
**behavior_type** | **string** |  | [optional] 
**assembly_instructions** | **string** |  | [optional] 
**forward_lot_mixing_rule** | **string** |  | 
**storage_lot_mixing_rule** | **string** |  | 
**forward_item_mixing_rule** | **string** |  | 
**storage_item_mixing_rule** | **string** |  | 
**allocation_rule** | **string** |  | 
**allocation_sort** | **string** |  | [optional] 
**allocation_field** | **string** |  | [optional] 
**barcode_field** | **string** |  | [optional] 
**warehouse_display_field** | **string** |  | [optional] 
**product_id_tag_scheme_id** | **int** |  | [optional] 
**item_serial_scheme_id** | **int** |  | [optional] 
**receiving_criteria_scheme_id** | **int** |  | 
**asn_rule** | **string** |  | [optional] 
**quantity_type** | **string** |  | [optional] 
**hazmat** | **string** |  | 
**is_alcohol** | **bool** |  | [optional] [default to false]
**alcohol_type** | **string** |  | [optional] 
**alcohol_content** | **float** |  | [optional] 
**alcohol_container** | **string** |  | [optional] 
**alcohol_vintage_year** | **string** |  | [optional] 
**alcohol_country** | **string** |  | [optional] 
**alcohol_state** | **string** |  | [optional] 
**alcohol_region** | **string** |  | [optional] 
**alcohol_brand** | **string** |  | [optional] 
**alcohol_upc_code** | **string** |  | [optional] 
**alcohol_nambca_code** | **string** |  | [optional] 
**alcohol_unimerc_code** | **string** |  | [optional] 
**alcohol_scc_code** | **string** |  | [optional] 
**length** | **float** |  | [optional] 
**width** | **float** |  | [optional] 
**height** | **float** |  | [optional] 
**top_up** | **bool** |  | [optional] [default to false]
**ship_solo** | **bool** |  | [optional] [default to false]
**inventory_update_timestamp** | [**\DateTime**](\DateTime.md) |  | [optional] 
**available_quantity** | **int** |  | [optional] 
**damaged_quantity** | **int** |  | [optional] 
**in_fulfillment_process_quantity** | **int** |  | [optional] 
**on_hand_quantity** | **int** |  | [optional] 
**open_order_quantity** | **int** |  | [optional] 
**open_po_quantity** | **int** |  | [optional] 
**orderable_quantity** | **int** |  | [optional] 
**unallocatable_quantity** | **int** |  | [optional] 
**unavailable_quantity** | **int** |  | [optional] 
**total_demand** | **int** |  | [optional] 
**available_quantity_inner_packs** | **int** |  | [optional] 
**damaged_quantity_inner_packs** | **int** |  | [optional] 
**in_fulfillment_process_quantity_inner_packs** | **int** |  | [optional] 
**on_hand_quantity_inner_packs** | **int** |  | [optional] 
**open_order_quantity_inner_packs** | **int** |  | [optional] 
**open_po_quantity_inner_packs** | **int** |  | [optional] 
**orderable_quantity_inner_packs** | **int** |  | [optional] 
**unallocatable_quantity_inner_packs** | **int** |  | [optional] 
**unavailable_quantity_inner_packs** | **int** |  | [optional] 
**available_quantity_cases** | **int** |  | [optional] 
**damaged_quantity_cases** | **int** |  | [optional] 
**in_fulfillment_process_quantity_cases** | **int** |  | [optional] 
**on_hand_quantity_cases** | **int** |  | [optional] 
**open_order_quantity_cases** | **int** |  | [optional] 
**open_po_quantity_cases** | **int** |  | [optional] 
**orderable_quantity_cases** | **int** |  | [optional] 
**unallocatable_quantity_cases** | **int** |  | [optional] 
**unavailable_quantity_cases** | **int** |  | [optional] 
**available_quantity_pallets** | **int** |  | [optional] 
**damaged_quantity_pallets** | **int** |  | [optional] 
**in_fulfillment_process_quantity_pallets** | **int** |  | [optional] 
**on_hand_quantity_pallets** | **int** |  | [optional] 
**open_order_quantity_pallets** | **int** |  | [optional] 
**open_po_quantity_pallets** | **int** |  | [optional] 
**orderable_quantity_pallets** | **int** |  | [optional] 
**unallocatable_quantity_pallets** | **int** |  | [optional] 
**unavailable_quantity_pallets** | **int** |  | [optional] 
**overall_days_on_hand** | **int** |  | [optional] 
**overall_stock_status** | **string** |  | [optional] 
**estimated_pallets** | **int** |  | [optional] 
**estimated_cases** | **int** |  | [optional] 
**estimated_inner_packs** | **int** |  | [optional] 
**next_requested_delivery_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**warehouse1_id** | **int** |  | [optional] 
**w1_available_quantity** | **int** |  | [optional] 
**w1_damaged_quantity** | **int** |  | [optional] 
**w1_in_fulfillment_process_quantity** | **int** |  | [optional] 
**w1_on_hand_quantity** | **int** |  | [optional] 
**w1_open_order_quantity** | **int** |  | [optional] 
**w1_open_po_quantity** | **int** |  | [optional] 
**w1_orderable_quantity** | **int** |  | [optional] 
**w1_unallocatable_quantity** | **int** |  | [optional] 
**w1_unavailable_quantity** | **int** |  | [optional] 
**w1_days_on_hand** | **int** |  | [optional] 
**w1_stock_status** | **string** |  | [optional] 
**w1_estimated_pallets** | **int** |  | [optional] 
**w1_estimated_cases** | **int** |  | [optional] 
**w1_estimated_inner_packs** | **int** |  | [optional] 
**w1_next_requested_delivery_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**warehouse2_id** | **int** |  | [optional] 
**w2_available_quantity** | **int** |  | [optional] 
**w2_damaged_quantity** | **int** |  | [optional] 
**w2_in_fulfillment_process_quantity** | **int** |  | [optional] 
**w2_on_hand_quantity** | **int** |  | [optional] 
**w2_open_order_quantity** | **int** |  | [optional] 
**w2_open_po_quantity** | **int** |  | [optional] 
**w2_orderable_quantity** | **int** |  | [optional] 
**w2_unallocatable_quantity** | **int** |  | [optional] 
**w2_unavailable_quantity** | **int** |  | [optional] 
**w2_days_on_hand** | **int** |  | [optional] 
**w2_stock_status** | **string** |  | [optional] 
**w2_estimated_pallets** | **int** |  | [optional] 
**w2_estimated_cases** | **int** |  | [optional] 
**w2_estimated_inner_packs** | **int** |  | [optional] 
**w2_next_requested_delivery_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**warehouse3_id** | **int** |  | [optional] 
**w3_available_quantity** | **int** |  | [optional] 
**w3_damaged_quantity** | **int** |  | [optional] 
**w3_in_fulfillment_process_quantity** | **int** |  | [optional] 
**w3_on_hand_quantity** | **int** |  | [optional] 
**w3_open_order_quantity** | **int** |  | [optional] 
**w3_open_po_quantity** | **int** |  | [optional] 
**w3_orderable_quantity** | **int** |  | [optional] 
**w3_unallocatable_quantity** | **int** |  | [optional] 
**w3_unavailable_quantity** | **int** |  | [optional] 
**w3_days_on_hand** | **int** |  | [optional] 
**w3_stock_status** | **string** |  | [optional] 
**w3_estimated_pallets** | **int** |  | [optional] 
**w3_estimated_cases** | **int** |  | [optional] 
**w3_estimated_inner_packs** | **int** |  | [optional] 
**w3_next_requested_delivery_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**warehouse4_id** | **int** |  | [optional] 
**w4_available_quantity** | **int** |  | [optional] 
**w4_damaged_quantity** | **int** |  | [optional] 
**w4_in_fulfillment_process_quantity** | **int** |  | [optional] 
**w4_on_hand_quantity** | **int** |  | [optional] 
**w4_open_order_quantity** | **int** |  | [optional] 
**w4_open_po_quantity** | **int** |  | [optional] 
**w4_orderable_quantity** | **int** |  | [optional] 
**w4_unallocatable_quantity** | **int** |  | [optional] 
**w4_unavailable_quantity** | **int** |  | [optional] 
**w4_days_on_hand** | **int** |  | [optional] 
**w4_stock_status** | **string** |  | [optional] 
**w4_estimated_pallets** | **int** |  | [optional] 
**w4_estimated_cases** | **int** |  | [optional] 
**w4_estimated_inner_packs** | **int** |  | [optional] 
**w4_next_requested_delivery_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**warehouse5_id** | **int** |  | [optional] 
**w5_available_quantity** | **int** |  | [optional] 
**w5_damaged_quantity** | **int** |  | [optional] 
**w5_in_fulfillment_process_quantity** | **int** |  | [optional] 
**w5_on_hand_quantity** | **int** |  | [optional] 
**w5_open_order_quantity** | **int** |  | [optional] 
**w5_open_po_quantity** | **int** |  | [optional] 
**w5_orderable_quantity** | **int** |  | [optional] 
**w5_unallocatable_quantity** | **int** |  | [optional] 
**w5_unavailable_quantity** | **int** |  | [optional] 
**w5_days_on_hand** | **int** |  | [optional] 
**w5_stock_status** | **string** |  | [optional] 
**w5_estimated_pallets** | **int** |  | [optional] 
**w5_estimated_cases** | **int** |  | [optional] 
**w5_estimated_inner_packs** | **int** |  | [optional] 
**w5_next_requested_delivery_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**custom_fields** | **map[string,object]** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

