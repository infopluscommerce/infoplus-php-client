# OrderSource

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] 
**lob_id** | **int** |  | 
**name** | **string** |  | 
**create_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**modify_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**packing_notes** | **string** |  | [optional] 
**shipping_notes** | **string** |  | [optional] 
**require_cartonized_asn** | **bool** |  | [optional] [default to false]
**require_gs1128_label** | **bool** |  | [optional] [default to false]
**uses_reservations** | **bool** |  | [optional] [default to false]
**packing_slip_id** | **int** |  | [optional] 
**order_invoice_id** | **int** |  | [optional] 
**order_confirmation_email_id** | **int** |  | [optional] 
**shipment_confirmation_email_id** | **int** |  | [optional] 
**out_for_delivery_confirmation_email_id** | **int** |  | [optional] 
**delivered_confirmation_email_id** | **int** |  | [optional] 
**default_service_type_id** | **int** |  | [optional] 
**pallet_gs1128_template_id** | **int** |  | [optional] 
**pallet_gs1128_no_of_copies** | **int** |  | [optional] 
**master_carton_gs1128_template_id** | **int** |  | [optional] 
**master_carton_gs1128_no_of_copies** | **int** |  | [optional] 
**carton_gs1128_template_id** | **int** |  | [optional] 
**carton_gs1128_no_of_copies** | **int** |  | [optional] 
**line_item_each_gs1128_template_id** | **int** |  | [optional] 
**line_item_each_gs1128_no_of_copies** | **int** |  | [optional] 
**custom_fields** | **map[string,object]** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


