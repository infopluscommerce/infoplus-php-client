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
**order_no** | [**Number**](Number.md) |  | [optional] 
**carton_no** | **int** |  | [optional] 
**number_of_cartons** | **int** |  | [optional] 
**status** | **string** |  | [optional] 
**shipped** | **bool** |  | [optional] [default to false]
**carrier_service_id** | **int** |  | [optional] 
**dim1_in** | [**Number**](Number.md) |  | [optional] 
**dim2_in** | [**Number**](Number.md) |  | [optional] 
**dim3_in** | [**Number**](Number.md) |  | [optional] 
**estimated_zone** | **string** |  | [optional] 
**parcel_account_no** | **string** |  | [optional] 
**third_party_parcel_account_no** | **string** |  | [optional] 
**manifest_id** | **int** |  | [optional] 
**residential** | **bool** |  | [optional] [default to false]
**billing_option** | **string** |  | [optional] 
**weight_lbs** | [**Number**](Number.md) |  | [optional] 
**dim_weight** | [**Number**](Number.md) |  | [optional] 
**license_plate_number** | **string** |  | [optional] 
**charged_freight_amount** | [**Number**](Number.md) |  | [optional] 
**published_freight_amount** | [**Number**](Number.md) |  | [optional] 
**retail_freight_amount** | [**Number**](Number.md) |  | [optional] 
**external_shipping_system_id** | **int** |  | [optional] 
**shipment_type** | **string** |  | [optional] 
**custom_fields** | **map[string,object]** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


