# Shipment

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] 
**create_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**modify_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**ship_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**delivered_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**tracking_no** | **string** |  | [optional] 
**warehouse_id** | **int** |  | 
**lob_id** | **int** |  | [optional] 
**order_no** | **float** |  | [optional] 
**order_no_list** | **float[]** |  | [optional] 
**carton_no** | **int** |  | [optional] 
**number_of_cartons** | **int** |  | [optional] 
**status** | **string** |  | [optional] 
**shipped** | **bool** |  | [optional] [default to false]
**casebreak** | **bool** |  | [optional] [default to false]
**carrier_service_id** | **int** |  | [optional] 
**dim1_in** | **float** |  | [optional] 
**dim2_in** | **float** |  | [optional] 
**dim3_in** | **float** |  | [optional] 
**estimated_zone** | **string** |  | [optional] 
**parcel_account_no** | **string** |  | [optional] 
**third_party_parcel_account_no** | **string** |  | [optional] 
**shipment_id** | **string** |  | [optional] 
**manifest_id** | **int** |  | [optional] 
**residential** | **bool** |  | [optional] [default to false]
**billing_option** | **string** |  | [optional] 
**weight_lbs** | **float** |  | [optional] 
**dim_weight** | **float** |  | [optional] 
**license_plate_number** | **string** |  | [optional] 
**charged_freight_amount** | **float** |  | [optional] 
**published_freight_amount** | **float** |  | [optional] 
**retail_freight_amount** | **float** |  | [optional] 
**external_shipping_system_id** | **int** |  | [optional] 
**shipment_type** | **string** |  | [optional] 
**carrier_company** | **string** |  | 
**carton_id** | **int** |  | [optional] 
**carton_type_id** | **int** |  | [optional] 
**delivery_message** | **string** |  | [optional] 
**load_id** | **int** |  | [optional] 
**oms_order_no** | **int** |  | [optional] 
**carrier** | **int** |  | [optional] 
**custom_fields** | **map[string,object]** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


