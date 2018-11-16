# ShoppingCartConnection

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] 
**create_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**modify_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**client_id** | **int** |  | [optional] 
**nonce** | **string** |  | [optional] 
**lob_id** | **int** |  | 
**order_source_id** | **int** |  | 
**integration_partner_id** | **int** |  | 
**connection_type** | **string** |  | 
**item_filter_id** | **int** |  | [optional] 
**infoplus_sku_field_to_map** | **string** |  | 
**shopping_cart_sku_field_to_map** | **string** |  | 
**script_id** | **int** |  | [optional] 
**name** | **string** |  | 
**shopping_cart_store_url** | **string** |  | 
**access_code** | **string** |  | 
**access_token** | **string** |  | 
**username** | **string** |  | 
**password** | **string** |  | 
**default_carrier_id** | **int** |  | [optional] 
**order_shipment_level** | **string** |  | 
**create_invoices** | **bool** |  | [optional] [default to false]
**sync_orders** | **bool** |  | [default to false]
**sync_inventory** | **bool** |  | [default to false]
**sync_tracking_data** | **bool** |  | [default to false]
**sync_inventory_cron_string** | **string** |  | [optional] 
**fulfill_all_items** | **bool** |  | [default to false]
**sync_inventory_levels_last_run_time** | [**\DateTime**](\DateTime.md) |  | [optional] 
**sync_orders_last_run_time** | [**\DateTime**](\DateTime.md) |  | [optional] 
**inventory_level_warehouse_controls** | **string** |  | 
**warehouse_list** | [**\Infoplus\Infoplus\Model\Warehouse[]**](Warehouse.md) |  | [optional] 
**inventory_level_store_controls** | **string** |  | 
**store_list** | [**\Infoplus\Infoplus\Model\Store[]**](Store.md) |  | [optional] 
**custom_fields** | **map[string,object]** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


