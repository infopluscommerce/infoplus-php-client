# CustomerInvoiceTemplateLine

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] 
**create_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**modify_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**lob_id** | **int** |  | 
**description** | **string** |  | [optional] 
**seq_no** | **int** |  | [optional] 
**account_code** | **string** |  | [optional] 
**active** | **bool** |  | [default to false]
**include_if_zero** | **bool** |  | [default to false]
**department** | **string** |  | [optional] 
**item_code** | **string** |  | [optional] 
**invoice_template_id** | **int** |  | [optional] 
**billing_rule_id** | **int** |  | 
**price_level_mode** | **string** |  | 
**minimum_charge** | **float** |  | [optional] 
**script_id** | **int** |  | [optional] 
**price_level_list** | [**\Infoplus\Infoplus\Model\InvoiceTemplateLinePriceLevel[]**](InvoiceTemplateLinePriceLevel.md) |  | [optional] 
**custom_fields** | **map[string,object]** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


