# infoplus-php-client
Infoplus is a cloud platform to manage your inventory, orders, warehouse, and shipments.

The Infoplus API exposes the full breadth and depth of the Infoplus platform to all clients.
With the Infoplus API, you can integrate Infoplus functionality into other platforms 
(e.g. your ERP, shopping cart, accounting system, etc.), enabling you to do, in your own platform, 
anything you can do in Infoplus. 

This repository is a native PHP client for full access to the Infoplus API.

## Infoplus API Resources
The Resources listed below will provide all the information you need to integrate with the Infoplus API. 

### Developer's Home Page
https://www.infopluscommerce.com/developers/
* This site gives you an overview of the Infoplus API. 
* Get a general understanding of the API and quick steps on getting started. 

### Infoplus API Reference Site
http://developers.infopluscommerce.com/
* The Infoplus API is a modern JSON + REST API, and the API Reference Site is the complete documentation of all endpoints, resources, and fields available in the API. 
* Whether you're using the API directly over HTTPS, or if you're using a pre-built Client Library like this one, the API Reference Site gives you the specific details you need for each API call available, along with live demo capabilities.
* The API Reference Site also lets you request access to a free Demo Account to test out the API. 

### Have Questions?
* Read an [Overview of the Infoplus API](https://support.infopluscommerce.com/support/solutions/articles/11000010373)
* Get in touch with the [Infoplus Support Team](https://support.infopluscommerce.com/support/tickets/new)
* Visit the [Infoplus API Forum](https://support.infopluscommerce.com/support/discussions/forums/11000000138)

# PHP Client Details

## Requirements

PHP 5.4.0 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/infopluscommerce/php-client.git"
    }
  ],
  "require": {
    "infopluscommerce/php-client": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/Infoplus/autoload.php');
```

## Tests 

To run the unit tests:

```
composer install
./vendor/bin/phpunit lib/Tests
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Infoplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
Infoplus\Configuration::getDefaultConfiguration()->setHost('https://<YOUR INFOPLUS DOMAIN>/infoplus-wms/api');

$api_client = new Infoplus\ApiClient();

$api_instance = new Infoplus\Api\WarehouseApi($api_client);

try {
    $result = $api_instance->getWarehouseById(1);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception: ', $e->getMessage(), "\n";
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.infopluswms.com:8443/infoplus-wms/api*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AisleApi* | [**addAisle**](docs/AisleApi.md#addaisle) | **POST** /v1.0/aisle | Create an aisle
*AisleApi* | [**deleteAisle**](docs/AisleApi.md#deleteaisle) | **DELETE** /v1.0/aisle/{aisleId} | Delete an aisle
*AisleApi* | [**getAisleByFilter**](docs/AisleApi.md#getaislebyfilter) | **GET** /v1.0/aisle/search | Search aisles by filter
*AisleApi* | [**getAisleById**](docs/AisleApi.md#getaislebyid) | **GET** /v1.0/aisle/{aisleId} | Get an aisle by id
*AisleApi* | [**updateAisle**](docs/AisleApi.md#updateaisle) | **PUT** /v1.0/aisle | Update an aisle
*AlertApi* | [**getAlertByFilter**](docs/AlertApi.md#getalertbyfilter) | **GET** /v1.0/alert/search | Search alerts by filter
*AlertApi* | [**getAlertById**](docs/AlertApi.md#getalertbyid) | **GET** /v1.0/alert/{alertId} | Get an alert by id
*AsnApi* | [**addAsn**](docs/AsnApi.md#addasn) | **POST** /v1.0/asn | Create an asn
*AsnApi* | [**deleteAsn**](docs/AsnApi.md#deleteasn) | **DELETE** /v1.0/asn/{asnId} | Delete an asn
*AsnApi* | [**getAsnByFilter**](docs/AsnApi.md#getasnbyfilter) | **GET** /v1.0/asn/search | Search asns by filter
*AsnApi* | [**getAsnById**](docs/AsnApi.md#getasnbyid) | **GET** /v1.0/asn/{asnId} | Get an asn by id
*AsnApi* | [**updateAsn**](docs/AsnApi.md#updateasn) | **PUT** /v1.0/asn | Update an asn
*BillOfLadingApi* | [**addBillOfLading**](docs/BillOfLadingApi.md#addbilloflading) | **POST** /v1.0/billOfLading | Create a billOfLading
*BillOfLadingApi* | [**deleteBillOfLading**](docs/BillOfLadingApi.md#deletebilloflading) | **DELETE** /v1.0/billOfLading/{billOfLadingId} | Delete a billOfLading
*BillOfLadingApi* | [**getBillOfLadingByFilter**](docs/BillOfLadingApi.md#getbillofladingbyfilter) | **GET** /v1.0/billOfLading/search | Search billOfLadings by filter
*BillOfLadingApi* | [**getBillOfLadingById**](docs/BillOfLadingApi.md#getbillofladingbyid) | **GET** /v1.0/billOfLading/{billOfLadingId} | Get a billOfLading by id
*BillOfLadingApi* | [**updateBillOfLading**](docs/BillOfLadingApi.md#updatebilloflading) | **PUT** /v1.0/billOfLading | Update a billOfLading
*BillingCodeApi* | [**addBillingCode**](docs/BillingCodeApi.md#addbillingcode) | **POST** /v1.0/billingCode | Create a billingCode
*BillingCodeApi* | [**deleteBillingCode**](docs/BillingCodeApi.md#deletebillingcode) | **DELETE** /v1.0/billingCode/{billingCodeId} | Delete a billingCode
*BillingCodeApi* | [**getBillingCodeByFilter**](docs/BillingCodeApi.md#getbillingcodebyfilter) | **GET** /v1.0/billingCode/search | Search billingCodes by filter
*BillingCodeApi* | [**getBillingCodeById**](docs/BillingCodeApi.md#getbillingcodebyid) | **GET** /v1.0/billingCode/{billingCodeId} | Get a billingCode by id
*BillingCodeApi* | [**updateBillingCode**](docs/BillingCodeApi.md#updatebillingcode) | **PUT** /v1.0/billingCode | Update a billingCode
*BillingCodeTypeApi* | [**addBillingCodeType**](docs/BillingCodeTypeApi.md#addbillingcodetype) | **POST** /v1.0/billingCodeType | Create a billingCodeType
*BillingCodeTypeApi* | [**deleteBillingCodeType**](docs/BillingCodeTypeApi.md#deletebillingcodetype) | **DELETE** /v1.0/billingCodeType/{billingCodeTypeId} | Delete a billingCodeType
*BillingCodeTypeApi* | [**getBillingCodeTypeByFilter**](docs/BillingCodeTypeApi.md#getbillingcodetypebyfilter) | **GET** /v1.0/billingCodeType/search | Search billingCodeTypes by filter
*BillingCodeTypeApi* | [**getBillingCodeTypeById**](docs/BillingCodeTypeApi.md#getbillingcodetypebyid) | **GET** /v1.0/billingCodeType/{billingCodeTypeId} | Get a billingCodeType by id
*BillingCodeTypeApi* | [**updateBillingCodeType**](docs/BillingCodeTypeApi.md#updatebillingcodetype) | **PUT** /v1.0/billingCodeType | Update a billingCodeType
*BuildingApi* | [**addBuilding**](docs/BuildingApi.md#addbuilding) | **POST** /v1.0/building | Create a building
*BuildingApi* | [**deleteBuilding**](docs/BuildingApi.md#deletebuilding) | **DELETE** /v1.0/building/{buildingId} | Delete a building
*BuildingApi* | [**getBuildingByFilter**](docs/BuildingApi.md#getbuildingbyfilter) | **GET** /v1.0/building/search | Search buildings by filter
*BuildingApi* | [**getBuildingById**](docs/BuildingApi.md#getbuildingbyid) | **GET** /v1.0/building/{buildingId} | Get a building by id
*BuildingApi* | [**updateBuilding**](docs/BuildingApi.md#updatebuilding) | **PUT** /v1.0/building | Update a building
*BusinessTransactionApi* | [**getBusinessTransactionByFilter**](docs/BusinessTransactionApi.md#getbusinesstransactionbyfilter) | **GET** /v1.0/businessTransaction/search | Search businessTransactions by filter
*BusinessTransactionApi* | [**getBusinessTransactionById**](docs/BusinessTransactionApi.md#getbusinesstransactionbyid) | **GET** /v1.0/businessTransaction/{businessTransactionId} | Get a businessTransaction by id
*CarrierApi* | [**getCarrierById**](docs/CarrierApi.md#getcarrierbyid) | **GET** /v1.0/carrier/{carrierId} | Get a carrier by id
*CarrierApi* | [**getCarrierBySearchText**](docs/CarrierApi.md#getcarrierbysearchtext) | **GET** /v1.0/carrier/search | Search carriers
*CarrierServiceApi* | [**getCarrierServiceById**](docs/CarrierServiceApi.md#getcarrierservicebyid) | **GET** /v1.0/carrierService/{carrierServiceId} | Get a carrierService by id
*CarrierServiceApi* | [**getCarrierServiceBySearchText**](docs/CarrierServiceApi.md#getcarrierservicebysearchtext) | **GET** /v1.0/carrierService/search | Search carrierServices
*CartonApi* | [**addCarton**](docs/CartonApi.md#addcarton) | **POST** /v1.0/carton | Create a carton
*CartonApi* | [**deleteCarton**](docs/CartonApi.md#deletecarton) | **DELETE** /v1.0/carton/{cartonId} | Delete a carton
*CartonApi* | [**getCartonByFilter**](docs/CartonApi.md#getcartonbyfilter) | **GET** /v1.0/carton/search | Search cartons by filter
*CartonApi* | [**getCartonById**](docs/CartonApi.md#getcartonbyid) | **GET** /v1.0/carton/{cartonId} | Get a carton by id
*CartonApi* | [**updateCarton**](docs/CartonApi.md#updatecarton) | **PUT** /v1.0/carton | Update a carton
*CartonContentApi* | [**addCartonContent**](docs/CartonContentApi.md#addcartoncontent) | **POST** /v1.0/cartonContent | Create a cartonContent
*CartonContentApi* | [**deleteCartonContent**](docs/CartonContentApi.md#deletecartoncontent) | **DELETE** /v1.0/cartonContent/{cartonContentId} | Delete a cartonContent
*CartonContentApi* | [**getCartonContentByFilter**](docs/CartonContentApi.md#getcartoncontentbyfilter) | **GET** /v1.0/cartonContent/search | Search cartonContents by filter
*CartonContentApi* | [**getCartonContentById**](docs/CartonContentApi.md#getcartoncontentbyid) | **GET** /v1.0/cartonContent/{cartonContentId} | Get a cartonContent by id
*CartonContentApi* | [**updateCartonContent**](docs/CartonContentApi.md#updatecartoncontent) | **PUT** /v1.0/cartonContent | Update a cartonContent
*CartonTypeApi* | [**addCartonType**](docs/CartonTypeApi.md#addcartontype) | **POST** /v1.0/cartonType | Create a cartonType
*CartonTypeApi* | [**deleteCartonType**](docs/CartonTypeApi.md#deletecartontype) | **DELETE** /v1.0/cartonType/{cartonTypeId} | Delete a cartonType
*CartonTypeApi* | [**getCartonTypeByFilter**](docs/CartonTypeApi.md#getcartontypebyfilter) | **GET** /v1.0/cartonType/search | Search cartonTypes by filter
*CartonTypeApi* | [**getCartonTypeById**](docs/CartonTypeApi.md#getcartontypebyid) | **GET** /v1.0/cartonType/{cartonTypeId} | Get a cartonType by id
*CartonTypeApi* | [**updateCartonType**](docs/CartonTypeApi.md#updatecartontype) | **PUT** /v1.0/cartonType | Update a cartonType
*CustomerApi* | [**addCustomer**](docs/CustomerApi.md#addcustomer) | **POST** /v1.0/customer | Create a customer
*CustomerApi* | [**deleteCustomer**](docs/CustomerApi.md#deletecustomer) | **DELETE** /v1.0/customer/{customerId} | Delete a customer
*CustomerApi* | [**getByCustomerNo**](docs/CustomerApi.md#getbycustomerno) | **GET** /v1.0/customer/getByCustomerNo | Get a customer by Customer No
*CustomerApi* | [**getCustomerByFilter**](docs/CustomerApi.md#getcustomerbyfilter) | **GET** /v1.0/customer/search | Search customers by filter
*CustomerApi* | [**getCustomerById**](docs/CustomerApi.md#getcustomerbyid) | **GET** /v1.0/customer/{customerId} | Get a customer by id
*CustomerApi* | [**updateCustomer**](docs/CustomerApi.md#updatecustomer) | **PUT** /v1.0/customer | Update a customer
*EmailTemplateApi* | [**addEmailTemplate**](docs/EmailTemplateApi.md#addemailtemplate) | **POST** /v1.0/emailTemplate | Create an emailTemplate
*EmailTemplateApi* | [**deleteEmailTemplate**](docs/EmailTemplateApi.md#deleteemailtemplate) | **DELETE** /v1.0/emailTemplate/{emailTemplateId} | Delete an emailTemplate
*EmailTemplateApi* | [**getEmailTemplateByFilter**](docs/EmailTemplateApi.md#getemailtemplatebyfilter) | **GET** /v1.0/emailTemplate/search | Search emailTemplates by filter
*EmailTemplateApi* | [**getEmailTemplateById**](docs/EmailTemplateApi.md#getemailtemplatebyid) | **GET** /v1.0/emailTemplate/{emailTemplateId} | Get an emailTemplate by id
*EmailTemplateApi* | [**updateEmailTemplate**](docs/EmailTemplateApi.md#updateemailtemplate) | **PUT** /v1.0/emailTemplate | Update an emailTemplate
*ExternalShipmentApi* | [**addExternalShipment**](docs/ExternalShipmentApi.md#addexternalshipment) | **POST** /v1.0/externalShipment | Create an externalShipment
*ExternalShipmentApi* | [**deleteExternalShipment**](docs/ExternalShipmentApi.md#deleteexternalshipment) | **DELETE** /v1.0/externalShipment/{externalShipmentId} | Delete an externalShipment
*ExternalShipmentApi* | [**getExternalShipmentByFilter**](docs/ExternalShipmentApi.md#getexternalshipmentbyfilter) | **GET** /v1.0/externalShipment/search | Search externalShipments by filter
*ExternalShipmentApi* | [**getExternalShipmentById**](docs/ExternalShipmentApi.md#getexternalshipmentbyid) | **GET** /v1.0/externalShipment/{externalShipmentId} | Get an externalShipment by id
*ExternalShipmentApi* | [**updateExternalShipment**](docs/ExternalShipmentApi.md#updateexternalshipment) | **PUT** /v1.0/externalShipment | Update an externalShipment
*FulfillmentPlanApi* | [**addFulfillmentPlan**](docs/FulfillmentPlanApi.md#addfulfillmentplan) | **POST** /v1.0/fulfillmentPlan | Create a fulfillmentPlan
*FulfillmentPlanApi* | [**deleteFulfillmentPlan**](docs/FulfillmentPlanApi.md#deletefulfillmentplan) | **DELETE** /v1.0/fulfillmentPlan/{fulfillmentPlanId} | Delete a fulfillmentPlan
*FulfillmentPlanApi* | [**getFulfillmentPlanByFilter**](docs/FulfillmentPlanApi.md#getfulfillmentplanbyfilter) | **GET** /v1.0/fulfillmentPlan/search | Search fulfillmentPlans by filter
*FulfillmentPlanApi* | [**getFulfillmentPlanById**](docs/FulfillmentPlanApi.md#getfulfillmentplanbyid) | **GET** /v1.0/fulfillmentPlan/{fulfillmentPlanId} | Get a fulfillmentPlan by id
*FulfillmentPlanApi* | [**updateFulfillmentPlan**](docs/FulfillmentPlanApi.md#updatefulfillmentplan) | **PUT** /v1.0/fulfillmentPlan | Update a fulfillmentPlan
*FulfillmentProcessApi* | [**getFulfillmentProcessByFilter**](docs/FulfillmentProcessApi.md#getfulfillmentprocessbyfilter) | **GET** /v1.0/fulfillmentProcess/search | Search fulfillmentProcesses by filter
*FulfillmentProcessApi* | [**getFulfillmentProcessById**](docs/FulfillmentProcessApi.md#getfulfillmentprocessbyid) | **GET** /v1.0/fulfillmentProcess/{fulfillmentProcessId} | Get a fulfillmentProcess by id
*IntegrationPartnerApi* | [**getIntegrationPartnerById**](docs/IntegrationPartnerApi.md#getintegrationpartnerbyid) | **GET** /v1.0/integrationPartner/{integrationPartnerId} | Get an integrationPartner by id
*IntegrationPartnerApi* | [**getIntegrationPartnerBySearchText**](docs/IntegrationPartnerApi.md#getintegrationpartnerbysearchtext) | **GET** /v1.0/integrationPartner/search | Search integrationPartners
*InventoryAdjustmentApi* | [**getInventoryAdjustmentByFilter**](docs/InventoryAdjustmentApi.md#getinventoryadjustmentbyfilter) | **GET** /v1.0/inventoryAdjustment/search | Search inventoryAdjustments by filter
*InventoryAdjustmentApi* | [**getInventoryAdjustmentById**](docs/InventoryAdjustmentApi.md#getinventoryadjustmentbyid) | **GET** /v1.0/inventoryAdjustment/{inventoryAdjustmentId} | Get an inventoryAdjustment by id
*InventoryDetailApi* | [**getInventoryDetailByFilter**](docs/InventoryDetailApi.md#getinventorydetailbyfilter) | **GET** /v1.0/inventoryDetail/search | Search inventoryDetails by filter
*InventoryDetailApi* | [**getInventoryDetailById**](docs/InventoryDetailApi.md#getinventorydetailbyid) | **GET** /v1.0/inventoryDetail/{inventoryDetailId} | Get an inventoryDetail by id
*ItemApi* | [**addItem**](docs/ItemApi.md#additem) | **POST** /v1.0/item | Create an item
*ItemApi* | [**deleteItem**](docs/ItemApi.md#deleteitem) | **DELETE** /v1.0/item/{itemId} | Delete an item
*ItemApi* | [**getBySKU**](docs/ItemApi.md#getbysku) | **GET** /v1.0/item/getBySKU | Get an item by SKU
*ItemApi* | [**getItemByFilter**](docs/ItemApi.md#getitembyfilter) | **GET** /v1.0/item/search | Search items by filter
*ItemApi* | [**getItemById**](docs/ItemApi.md#getitembyid) | **GET** /v1.0/item/{itemId} | Get an item by id
*ItemApi* | [**updateItem**](docs/ItemApi.md#updateitem) | **PUT** /v1.0/item | Update an item
*ItemAccountCodeApi* | [**getItemAccountCodeBySearchText**](docs/ItemAccountCodeApi.md#getitemaccountcodebysearchtext) | **GET** /v1.0/itemAccountCode/search | Search itemAccountCodes
*ItemAccountCodeApi* | [**getTranslateAccountCodeById**](docs/ItemAccountCodeApi.md#gettranslateaccountcodebyid) | **GET** /v1.0/itemAccountCode/{itemAccountCodeId} | Get an itemAccountCode by id
*ItemBuyerApi* | [**getItemBuyerBySearchText**](docs/ItemBuyerApi.md#getitembuyerbysearchtext) | **GET** /v1.0/itemBuyer/search | Search itemBuyers
*ItemBuyerApi* | [**getTranslateBuyerById**](docs/ItemBuyerApi.md#gettranslatebuyerbyid) | **GET** /v1.0/itemBuyer/{itemBuyerId} | Get an itemBuyer by id
*ItemLegacyLowStockContactApi* | [**getItemLegacyLowStockContactBySearchText**](docs/ItemLegacyLowStockContactApi.md#getitemlegacylowstockcontactbysearchtext) | **GET** /v1.0/itemLegacyLowStockContact/search | Search itemLegacyLowStockContacts
*ItemLegacyLowStockContactApi* | [**getTranslateLowStockContactById**](docs/ItemLegacyLowStockContactApi.md#gettranslatelowstockcontactbyid) | **GET** /v1.0/itemLegacyLowStockContact/{itemLegacyLowStockContactId} | Get an itemLegacyLowStockContact by id
*ItemLowStockCodeApi* | [**getItemLowStockCodeBySearchText**](docs/ItemLowStockCodeApi.md#getitemlowstockcodebysearchtext) | **GET** /v1.0/itemLowStockCode/search | Search itemLowStockCodes
*ItemLowStockCodeApi* | [**getTranslateLowStockCodeById**](docs/ItemLowStockCodeApi.md#gettranslatelowstockcodebyid) | **GET** /v1.0/itemLowStockCode/{itemLowStockCodeId} | Get an itemLowStockCode by id
*ItemMajorGroupApi* | [**getItemMajorGroupBySearchText**](docs/ItemMajorGroupApi.md#getitemmajorgroupbysearchtext) | **GET** /v1.0/itemMajorGroup/search | Search itemMajorGroups
*ItemMajorGroupApi* | [**getTranslateMajorGroupById**](docs/ItemMajorGroupApi.md#gettranslatemajorgroupbyid) | **GET** /v1.0/itemMajorGroup/{itemMajorGroupId} | Get an itemMajorGroup by id
*ItemProductCodeApi* | [**getItemProductCodeBySearchText**](docs/ItemProductCodeApi.md#getitemproductcodebysearchtext) | **GET** /v1.0/itemProductCode/search | Search itemProductCodes
*ItemProductCodeApi* | [**getTranslateProductCodeById**](docs/ItemProductCodeApi.md#gettranslateproductcodebyid) | **GET** /v1.0/itemProductCode/{itemProductCodeId} | Get an itemProductCode by id
*ItemReceiptApi* | [**getItemReceiptByFilter**](docs/ItemReceiptApi.md#getitemreceiptbyfilter) | **GET** /v1.0/itemReceipt/search | Search itemReceipts by filter
*ItemReceiptApi* | [**getItemReceiptById**](docs/ItemReceiptApi.md#getitemreceiptbyid) | **GET** /v1.0/itemReceipt/{itemReceiptId} | Get an itemReceipt by id
*ItemSubGroupApi* | [**getItemSubGroupBySearchText**](docs/ItemSubGroupApi.md#getitemsubgroupbysearchtext) | **GET** /v1.0/itemSubGroup/search | Search itemSubGroups
*ItemSubGroupApi* | [**getTranslateSubGroupById**](docs/ItemSubGroupApi.md#gettranslatesubgroupbyid) | **GET** /v1.0/itemSubGroup/{itemSubGroupId} | Get an itemSubGroup by id
*ItemSummaryCodeApi* | [**getItemSummaryCodeBySearchText**](docs/ItemSummaryCodeApi.md#getitemsummarycodebysearchtext) | **GET** /v1.0/itemSummaryCode/search | Search itemSummaryCodes
*ItemSummaryCodeApi* | [**getTranslateSummaryCodeById**](docs/ItemSummaryCodeApi.md#gettranslatesummarycodebyid) | **GET** /v1.0/itemSummaryCode/{itemSummaryCodeId} | Get an itemSummaryCode by id
*JobTimeApi* | [**addJobTime**](docs/JobTimeApi.md#addjobtime) | **POST** /v1.0/jobTime | Create a jobTime
*JobTimeApi* | [**deleteJobTime**](docs/JobTimeApi.md#deletejobtime) | **DELETE** /v1.0/jobTime/{jobTimeId} | Delete a jobTime
*JobTimeApi* | [**getJobTimeByFilter**](docs/JobTimeApi.md#getjobtimebyfilter) | **GET** /v1.0/jobTime/search | Search jobTimes by filter
*JobTimeApi* | [**getJobTimeById**](docs/JobTimeApi.md#getjobtimebyid) | **GET** /v1.0/jobTime/{jobTimeId} | Get a jobTime by id
*JobTimeApi* | [**updateJobTime**](docs/JobTimeApi.md#updatejobtime) | **PUT** /v1.0/jobTime | Update a jobTime
*JobTypeApi* | [**addJobType**](docs/JobTypeApi.md#addjobtype) | **POST** /v1.0/jobType | Create a jobType
*JobTypeApi* | [**deleteJobType**](docs/JobTypeApi.md#deletejobtype) | **DELETE** /v1.0/jobType/{jobTypeId} | Delete a jobType
*JobTypeApi* | [**getJobTypeByFilter**](docs/JobTypeApi.md#getjobtypebyfilter) | **GET** /v1.0/jobType/search | Search jobTypes by filter
*JobTypeApi* | [**getJobTypeById**](docs/JobTypeApi.md#getjobtypebyid) | **GET** /v1.0/jobType/{jobTypeId} | Get a jobType by id
*JobTypeApi* | [**updateJobType**](docs/JobTypeApi.md#updatejobtype) | **PUT** /v1.0/jobType | Update a jobType
*LineOfBusinessApi* | [**getLineOfBusinessById**](docs/LineOfBusinessApi.md#getlineofbusinessbyid) | **GET** /v1.0/lineOfBusiness/{lineOfBusinessId} | Get a lineOfBusiness by id
*LineOfBusinessApi* | [**getLineOfBusinessBySearchText**](docs/LineOfBusinessApi.md#getlineofbusinessbysearchtext) | **GET** /v1.0/lineOfBusiness/search | Search lineOfBusinesses
*LocationApi* | [**addLocation**](docs/LocationApi.md#addlocation) | **POST** /v1.0/location | Create a location
*LocationApi* | [**deleteLocation**](docs/LocationApi.md#deletelocation) | **DELETE** /v1.0/location/{locationId} | Delete a location
*LocationApi* | [**getLocationByFilter**](docs/LocationApi.md#getlocationbyfilter) | **GET** /v1.0/location/search | Search locations by filter
*LocationApi* | [**getLocationById**](docs/LocationApi.md#getlocationbyid) | **GET** /v1.0/location/{locationId} | Get a location by id
*LocationApi* | [**updateLocation**](docs/LocationApi.md#updatelocation) | **PUT** /v1.0/location | Update a location
*LocationAddressSchemeApi* | [**addLocationAddressScheme**](docs/LocationAddressSchemeApi.md#addlocationaddressscheme) | **POST** /v1.0/locationAddressScheme | Create a locationAddressScheme
*LocationAddressSchemeApi* | [**deleteLocationAddressScheme**](docs/LocationAddressSchemeApi.md#deletelocationaddressscheme) | **DELETE** /v1.0/locationAddressScheme/{locationAddressSchemeId} | Delete a locationAddressScheme
*LocationAddressSchemeApi* | [**getLocationAddressSchemeByFilter**](docs/LocationAddressSchemeApi.md#getlocationaddressschemebyfilter) | **GET** /v1.0/locationAddressScheme/search | Search locationAddressSchemes by filter
*LocationAddressSchemeApi* | [**getLocationAddressSchemeById**](docs/LocationAddressSchemeApi.md#getlocationaddressschemebyid) | **GET** /v1.0/locationAddressScheme/{locationAddressSchemeId} | Get a locationAddressScheme by id
*LocationAddressSchemeApi* | [**updateLocationAddressScheme**](docs/LocationAddressSchemeApi.md#updatelocationaddressscheme) | **PUT** /v1.0/locationAddressScheme | Update a locationAddressScheme
*LocationBillingTypeApi* | [**addLocationBillingType**](docs/LocationBillingTypeApi.md#addlocationbillingtype) | **POST** /v1.0/locationBillingType | Create a locationBillingType
*LocationBillingTypeApi* | [**deleteLocationBillingType**](docs/LocationBillingTypeApi.md#deletelocationbillingtype) | **DELETE** /v1.0/locationBillingType/{locationBillingTypeId} | Delete a locationBillingType
*LocationBillingTypeApi* | [**getLocationBillingTypeByFilter**](docs/LocationBillingTypeApi.md#getlocationbillingtypebyfilter) | **GET** /v1.0/locationBillingType/search | Search locationBillingTypes by filter
*LocationBillingTypeApi* | [**getLocationBillingTypeById**](docs/LocationBillingTypeApi.md#getlocationbillingtypebyid) | **GET** /v1.0/locationBillingType/{locationBillingTypeId} | Get a locationBillingType by id
*LocationBillingTypeApi* | [**updateLocationBillingType**](docs/LocationBillingTypeApi.md#updatelocationbillingtype) | **PUT** /v1.0/locationBillingType | Update a locationBillingType
*LocationFootprintApi* | [**addLocationFootprint**](docs/LocationFootprintApi.md#addlocationfootprint) | **POST** /v1.0/locationFootprint | Create a locationFootprint
*LocationFootprintApi* | [**deleteLocationFootprint**](docs/LocationFootprintApi.md#deletelocationfootprint) | **DELETE** /v1.0/locationFootprint/{locationFootprintId} | Delete a locationFootprint
*LocationFootprintApi* | [**getLocationFootprintByFilter**](docs/LocationFootprintApi.md#getlocationfootprintbyfilter) | **GET** /v1.0/locationFootprint/search | Search locationFootprints by filter
*LocationFootprintApi* | [**getLocationFootprintById**](docs/LocationFootprintApi.md#getlocationfootprintbyid) | **GET** /v1.0/locationFootprint/{locationFootprintId} | Get a locationFootprint by id
*LocationFootprintApi* | [**updateLocationFootprint**](docs/LocationFootprintApi.md#updatelocationfootprint) | **PUT** /v1.0/locationFootprint | Update a locationFootprint
*LoggedTimeApi* | [**getLoggedTimeByFilter**](docs/LoggedTimeApi.md#getloggedtimebyfilter) | **GET** /v1.0/loggedTime/search | Search loggedTimes by filter
*LoggedTimeApi* | [**getLoggedTimeById**](docs/LoggedTimeApi.md#getloggedtimebyid) | **GET** /v1.0/loggedTime/{loggedTimeId} | Get a loggedTime by id
*LoggedTimeTypeApi* | [**getLoggedTimeTypeById**](docs/LoggedTimeTypeApi.md#getloggedtimetypebyid) | **GET** /v1.0/loggedTimeType/{loggedTimeTypeId} | Get a loggedTimeType by id
*LoggedTimeTypeApi* | [**getLoggedTimeTypeBySearchText**](docs/LoggedTimeTypeApi.md#getloggedtimetypebysearchtext) | **GET** /v1.0/loggedTimeType/search | Search loggedTimeTypes
*LowStockApi* | [**getLowStockByFilter**](docs/LowStockApi.md#getlowstockbyfilter) | **GET** /v1.0/lowStock/search | Search lowStocks by filter
*LowStockApi* | [**getLowStockById**](docs/LowStockApi.md#getlowstockbyid) | **GET** /v1.0/lowStock/{lowStockId} | Get a lowStock by id
*OrderApi* | [**addOrder**](docs/OrderApi.md#addorder) | **POST** /v1.0/order | Create an order
*OrderApi* | [**deleteOrder**](docs/OrderApi.md#deleteorder) | **DELETE** /v1.0/order/{orderId} | Delete an order
*OrderApi* | [**getOrderByFilter**](docs/OrderApi.md#getorderbyfilter) | **GET** /v1.0/order/search | Search orders by filter
*OrderApi* | [**getOrderById**](docs/OrderApi.md#getorderbyid) | **GET** /v1.0/order/{orderId} | Get an order by id
*OrderApi* | [**updateOrder**](docs/OrderApi.md#updateorder) | **PUT** /v1.0/order | Update an order
*OrderLineApi* | [**getOrderLineByFilter**](docs/OrderLineApi.md#getorderlinebyfilter) | **GET** /v1.0/orderLine/search | Search orderLines by filter
*OrderLineApi* | [**getOrderLineById**](docs/OrderLineApi.md#getorderlinebyid) | **GET** /v1.0/orderLine/{orderLineId} | Get an orderLine by id
*OrderLoadProgramApi* | [**getOrderLoadProgramBySearchText**](docs/OrderLoadProgramApi.md#getorderloadprogrambysearchtext) | **GET** /v1.0/orderLoadProgram/search | Search orderLoadPrograms
*OrderLoadProgramApi* | [**getReqLoadProgramById**](docs/OrderLoadProgramApi.md#getreqloadprogrambyid) | **GET** /v1.0/orderLoadProgram/{orderLoadProgramId} | Get an orderLoadProgram by id
*OrderSourceApi* | [**addOrderSource**](docs/OrderSourceApi.md#addordersource) | **POST** /v1.0/orderSource | Create an orderSource
*OrderSourceApi* | [**deleteOrderSource**](docs/OrderSourceApi.md#deleteordersource) | **DELETE** /v1.0/orderSource/{orderSourceId} | Delete an orderSource
*OrderSourceApi* | [**getOrderSourceByFilter**](docs/OrderSourceApi.md#getordersourcebyfilter) | **GET** /v1.0/orderSource/search | Search orderSources by filter
*OrderSourceApi* | [**getOrderSourceById**](docs/OrderSourceApi.md#getordersourcebyid) | **GET** /v1.0/orderSource/{orderSourceId} | Get an orderSource by id
*OrderSourceApi* | [**updateOrderSource**](docs/OrderSourceApi.md#updateordersource) | **PUT** /v1.0/orderSource | Update an orderSource
*OrderSourceReservationApi* | [**addOrderSourceReservation**](docs/OrderSourceReservationApi.md#addordersourcereservation) | **POST** /v1.0/orderSourceReservation | Create an orderSourceReservation
*OrderSourceReservationApi* | [**deleteOrderSourceReservation**](docs/OrderSourceReservationApi.md#deleteordersourcereservation) | **DELETE** /v1.0/orderSourceReservation/{orderSourceReservationId} | Delete an orderSourceReservation
*OrderSourceReservationApi* | [**getOrderSourceReservationByFilter**](docs/OrderSourceReservationApi.md#getordersourcereservationbyfilter) | **GET** /v1.0/orderSourceReservation/search | Search orderSourceReservations by filter
*OrderSourceReservationApi* | [**getOrderSourceReservationById**](docs/OrderSourceReservationApi.md#getordersourcereservationbyid) | **GET** /v1.0/orderSourceReservation/{orderSourceReservationId} | Get an orderSourceReservation by id
*OrderSourceReservationApi* | [**updateOrderSourceReservation**](docs/OrderSourceReservationApi.md#updateordersourcereservation) | **PUT** /v1.0/orderSourceReservation | Update an orderSourceReservation
*OverrideReturnAddressApi* | [**addOverrideReturnAddress**](docs/OverrideReturnAddressApi.md#addoverridereturnaddress) | **POST** /v1.0/overrideReturnAddress | Create an overrideReturnAddress
*OverrideReturnAddressApi* | [**deleteOverrideReturnAddress**](docs/OverrideReturnAddressApi.md#deleteoverridereturnaddress) | **DELETE** /v1.0/overrideReturnAddress/{overrideReturnAddressId} | Delete an overrideReturnAddress
*OverrideReturnAddressApi* | [**getOverrideReturnAddressByFilter**](docs/OverrideReturnAddressApi.md#getoverridereturnaddressbyfilter) | **GET** /v1.0/overrideReturnAddress/search | Search overrideReturnAddresses by filter
*OverrideReturnAddressApi* | [**getOverrideReturnAddressById**](docs/OverrideReturnAddressApi.md#getoverridereturnaddressbyid) | **GET** /v1.0/overrideReturnAddress/{overrideReturnAddressId} | Get an overrideReturnAddress by id
*OverrideReturnAddressApi* | [**updateOverrideReturnAddress**](docs/OverrideReturnAddressApi.md#updateoverridereturnaddress) | **PUT** /v1.0/overrideReturnAddress | Update an overrideReturnAddress
*ParcelAccountApi* | [**getParcelAccountByFilter**](docs/ParcelAccountApi.md#getparcelaccountbyfilter) | **GET** /v1.0/parcelAccount/search | Search parcelAccounts by filter
*ParcelAccountApi* | [**getParcelAccountById**](docs/ParcelAccountApi.md#getparcelaccountbyid) | **GET** /v1.0/parcelAccount/{parcelAccountId} | Get a parcelAccount by id
*ParcelShipmentApi* | [**getParcelShipmentByFilter**](docs/ParcelShipmentApi.md#getparcelshipmentbyfilter) | **GET** /v1.0/parcelShipment/search | Search parcelShipments by filter
*ParcelShipmentApi* | [**getParcelShipmentById**](docs/ParcelShipmentApi.md#getparcelshipmentbyid) | **GET** /v1.0/parcelShipment/{parcelShipmentId} | Get a parcelShipment by id
*PickFaceAssignmentApi* | [**addPickFaceAssignment**](docs/PickFaceAssignmentApi.md#addpickfaceassignment) | **POST** /v1.0/pickFaceAssignment | Create a pickFaceAssignment
*PickFaceAssignmentApi* | [**deletePickFaceAssignment**](docs/PickFaceAssignmentApi.md#deletepickfaceassignment) | **DELETE** /v1.0/pickFaceAssignment/{pickFaceAssignmentId} | Delete a pickFaceAssignment
*PickFaceAssignmentApi* | [**getPickFaceAssignmentByFilter**](docs/PickFaceAssignmentApi.md#getpickfaceassignmentbyfilter) | **GET** /v1.0/pickFaceAssignment/search | Search pickFaceAssignments by filter
*PickFaceAssignmentApi* | [**getPickFaceAssignmentById**](docs/PickFaceAssignmentApi.md#getpickfaceassignmentbyid) | **GET** /v1.0/pickFaceAssignment/{pickFaceAssignmentId} | Get a pickFaceAssignment by id
*PickFaceAssignmentApi* | [**updatePickFaceAssignment**](docs/PickFaceAssignmentApi.md#updatepickfaceassignment) | **PUT** /v1.0/pickFaceAssignment | Update a pickFaceAssignment
*ProductTypeApi* | [**getProductTypeById**](docs/ProductTypeApi.md#getproducttypebyid) | **GET** /v1.0/productType/{productTypeId} | Get a productType by id
*ProductTypeApi* | [**getProductTypeBySearchText**](docs/ProductTypeApi.md#getproducttypebysearchtext) | **GET** /v1.0/productType/search | Search productTypes
*ProductionLotApi* | [**getProductionLotByFilter**](docs/ProductionLotApi.md#getproductionlotbyfilter) | **GET** /v1.0/productionLot/search | Search productionLots by filter
*ProductionLotApi* | [**getProductionLotById**](docs/ProductionLotApi.md#getproductionlotbyid) | **GET** /v1.0/productionLot/{productionLotId} | Get a productionLot by id
*QuickAdjustmentApi* | [**addQuickAdjustment**](docs/QuickAdjustmentApi.md#addquickadjustment) | **POST** /v1.0/quickAdjustment | Create a quickAdjustment
*QuickAdjustmentApi* | [**deleteQuickAdjustment**](docs/QuickAdjustmentApi.md#deletequickadjustment) | **DELETE** /v1.0/quickAdjustment/{quickAdjustmentId} | Delete a quickAdjustment
*QuickAdjustmentApi* | [**getQuickAdjustmentByFilter**](docs/QuickAdjustmentApi.md#getquickadjustmentbyfilter) | **GET** /v1.0/quickAdjustment/search | Search quickAdjustments by filter
*QuickAdjustmentApi* | [**getQuickAdjustmentById**](docs/QuickAdjustmentApi.md#getquickadjustmentbyid) | **GET** /v1.0/quickAdjustment/{quickAdjustmentId} | Get a quickAdjustment by id
*QuickAdjustmentApi* | [**updateQuickAdjustment**](docs/QuickAdjustmentApi.md#updatequickadjustment) | **PUT** /v1.0/quickAdjustment | Update a quickAdjustment
*QuickReceiptApi* | [**addQuickReceipt**](docs/QuickReceiptApi.md#addquickreceipt) | **POST** /v1.0/quickReceipt | Create a quickReceipt
*QuickReceiptApi* | [**deleteQuickReceipt**](docs/QuickReceiptApi.md#deletequickreceipt) | **DELETE** /v1.0/quickReceipt/{quickReceiptId} | Delete a quickReceipt
*QuickReceiptApi* | [**getQuickReceiptByFilter**](docs/QuickReceiptApi.md#getquickreceiptbyfilter) | **GET** /v1.0/quickReceipt/search | Search quickReceipts by filter
*QuickReceiptApi* | [**getQuickReceiptById**](docs/QuickReceiptApi.md#getquickreceiptbyid) | **GET** /v1.0/quickReceipt/{quickReceiptId} | Get a quickReceipt by id
*QuickReceiptApi* | [**updateQuickReceipt**](docs/QuickReceiptApi.md#updatequickreceipt) | **PUT** /v1.0/quickReceipt | Update a quickReceipt
*ReceivingProcessApi* | [**deleteReceivingProcess**](docs/ReceivingProcessApi.md#deletereceivingprocess) | **DELETE** /v1.0/receivingProcess/{receivingProcessId} | Delete a receivingProcess
*ReceivingProcessApi* | [**getReceivingProcessByFilter**](docs/ReceivingProcessApi.md#getreceivingprocessbyfilter) | **GET** /v1.0/receivingProcess/search | Search receivingProcesses by filter
*ReceivingProcessApi* | [**getReceivingProcessById**](docs/ReceivingProcessApi.md#getreceivingprocessbyid) | **GET** /v1.0/receivingProcess/{receivingProcessId} | Get a receivingProcess by id
*ReceivingWorksheetApi* | [**addReceivingWorksheet**](docs/ReceivingWorksheetApi.md#addreceivingworksheet) | **POST** /v1.0/receivingWorksheet | Create a receivingWorksheet
*ReceivingWorksheetApi* | [**deleteReceivingWorksheet**](docs/ReceivingWorksheetApi.md#deletereceivingworksheet) | **DELETE** /v1.0/receivingWorksheet/{receivingWorksheetId} | Delete a receivingWorksheet
*ReceivingWorksheetApi* | [**getReceivingWorksheetByFilter**](docs/ReceivingWorksheetApi.md#getreceivingworksheetbyfilter) | **GET** /v1.0/receivingWorksheet/search | Search receivingWorksheets by filter
*ReceivingWorksheetApi* | [**getReceivingWorksheetById**](docs/ReceivingWorksheetApi.md#getreceivingworksheetbyid) | **GET** /v1.0/receivingWorksheet/{receivingWorksheetId} | Get a receivingWorksheet by id
*ReceivingWorksheetApi* | [**updateReceivingWorksheet**](docs/ReceivingWorksheetApi.md#updatereceivingworksheet) | **PUT** /v1.0/receivingWorksheet | Update a receivingWorksheet
*ReplenishmentApi* | [**getReplenishmentByFilter**](docs/ReplenishmentApi.md#getreplenishmentbyfilter) | **GET** /v1.0/replenishment/search | Search replenishments by filter
*ReplenishmentApi* | [**getReplenishmentById**](docs/ReplenishmentApi.md#getreplenishmentbyid) | **GET** /v1.0/replenishment/{replenishmentId} | Get a replenishment by id
*ReplenishmentPlanApi* | [**addReplenishmentPlan**](docs/ReplenishmentPlanApi.md#addreplenishmentplan) | **POST** /v1.0/replenishmentPlan | Create a replenishmentPlan
*ReplenishmentPlanApi* | [**deleteReplenishmentPlan**](docs/ReplenishmentPlanApi.md#deletereplenishmentplan) | **DELETE** /v1.0/replenishmentPlan/{replenishmentPlanId} | Delete a replenishmentPlan
*ReplenishmentPlanApi* | [**getReplenishmentPlanByFilter**](docs/ReplenishmentPlanApi.md#getreplenishmentplanbyfilter) | **GET** /v1.0/replenishmentPlan/search | Search replenishmentPlans by filter
*ReplenishmentPlanApi* | [**getReplenishmentPlanById**](docs/ReplenishmentPlanApi.md#getreplenishmentplanbyid) | **GET** /v1.0/replenishmentPlan/{replenishmentPlanId} | Get a replenishmentPlan by id
*ReplenishmentPlanApi* | [**updateReplenishmentPlan**](docs/ReplenishmentPlanApi.md#updatereplenishmentplan) | **PUT** /v1.0/replenishmentPlan | Update a replenishmentPlan
*ReplenishmentProcessApi* | [**getReplenishmentProcessByFilter**](docs/ReplenishmentProcessApi.md#getreplenishmentprocessbyfilter) | **GET** /v1.0/replenishmentProcess/search | Search replenishmentProcesses by filter
*ReplenishmentProcessApi* | [**getReplenishmentProcessById**](docs/ReplenishmentProcessApi.md#getreplenishmentprocessbyid) | **GET** /v1.0/replenishmentProcess/{replenishmentProcessId} | Get a replenishmentProcess by id
*ServiceTypeApi* | [**getServiceTypeById**](docs/ServiceTypeApi.md#getservicetypebyid) | **GET** /v1.0/serviceType/{serviceTypeId} | Get a serviceType by id
*ServiceTypeApi* | [**getServiceTypeBySearchText**](docs/ServiceTypeApi.md#getservicetypebysearchtext) | **GET** /v1.0/serviceType/search | Search serviceTypes
*ShoppingCartConnectionApi* | [**addShoppingCartConnection**](docs/ShoppingCartConnectionApi.md#addshoppingcartconnection) | **POST** /v1.0/shoppingCartConnection | Create a shoppingCartConnection
*ShoppingCartConnectionApi* | [**deleteShoppingCartConnection**](docs/ShoppingCartConnectionApi.md#deleteshoppingcartconnection) | **DELETE** /v1.0/shoppingCartConnection/{shoppingCartConnectionId} | Delete a shoppingCartConnection
*ShoppingCartConnectionApi* | [**getShoppingCartConnectionByFilter**](docs/ShoppingCartConnectionApi.md#getshoppingcartconnectionbyfilter) | **GET** /v1.0/shoppingCartConnection/search | Search shoppingCartConnections by filter
*ShoppingCartConnectionApi* | [**getShoppingCartConnectionById**](docs/ShoppingCartConnectionApi.md#getshoppingcartconnectionbyid) | **GET** /v1.0/shoppingCartConnection/{shoppingCartConnectionId} | Get a shoppingCartConnection by id
*ShoppingCartConnectionApi* | [**updateShoppingCartConnection**](docs/ShoppingCartConnectionApi.md#updateshoppingcartconnection) | **PUT** /v1.0/shoppingCartConnection | Update a shoppingCartConnection
*ThirdPartyParcelAccountApi* | [**addThirdPartyParcelAccount**](docs/ThirdPartyParcelAccountApi.md#addthirdpartyparcelaccount) | **POST** /v1.0/thirdPartyParcelAccount | Create a thirdPartyParcelAccount
*ThirdPartyParcelAccountApi* | [**deleteThirdPartyParcelAccount**](docs/ThirdPartyParcelAccountApi.md#deletethirdpartyparcelaccount) | **DELETE** /v1.0/thirdPartyParcelAccount/{thirdPartyParcelAccountId} | Delete a thirdPartyParcelAccount
*ThirdPartyParcelAccountApi* | [**getThirdPartyParcelAccountByFilter**](docs/ThirdPartyParcelAccountApi.md#getthirdpartyparcelaccountbyfilter) | **GET** /v1.0/thirdPartyParcelAccount/search | Search thirdPartyParcelAccounts by filter
*ThirdPartyParcelAccountApi* | [**getThirdPartyParcelAccountById**](docs/ThirdPartyParcelAccountApi.md#getthirdpartyparcelaccountbyid) | **GET** /v1.0/thirdPartyParcelAccount/{thirdPartyParcelAccountId} | Get a thirdPartyParcelAccount by id
*ThirdPartyParcelAccountApi* | [**updateThirdPartyParcelAccount**](docs/ThirdPartyParcelAccountApi.md#updatethirdpartyparcelaccount) | **PUT** /v1.0/thirdPartyParcelAccount | Update a thirdPartyParcelAccount
*UserApi* | [**getUserById**](docs/UserApi.md#getuserbyid) | **GET** /v1.0/user/{userId} | Get an user by id
*UserApi* | [**getUserBySearchText**](docs/UserApi.md#getuserbysearchtext) | **GET** /v1.0/user/search | Search users
*VendorApi* | [**addVendor**](docs/VendorApi.md#addvendor) | **POST** /v1.0/vendor | Create a vendor
*VendorApi* | [**deleteVendor**](docs/VendorApi.md#deletevendor) | **DELETE** /v1.0/vendor/{vendorId} | Delete a vendor
*VendorApi* | [**getVendorByFilter**](docs/VendorApi.md#getvendorbyfilter) | **GET** /v1.0/vendor/search | Search vendors by filter
*VendorApi* | [**getVendorById**](docs/VendorApi.md#getvendorbyid) | **GET** /v1.0/vendor/{vendorId} | Get a vendor by id
*VendorApi* | [**updateVendor**](docs/VendorApi.md#updatevendor) | **PUT** /v1.0/vendor | Update a vendor
*VendorComplianceSurveyApi* | [**addVendorComplianceSurvey**](docs/VendorComplianceSurveyApi.md#addvendorcompliancesurvey) | **POST** /v1.0/vendorComplianceSurvey | Create a vendorComplianceSurvey
*VendorComplianceSurveyApi* | [**deleteVendorComplianceSurvey**](docs/VendorComplianceSurveyApi.md#deletevendorcompliancesurvey) | **DELETE** /v1.0/vendorComplianceSurvey/{vendorComplianceSurveyId} | Delete a vendorComplianceSurvey
*VendorComplianceSurveyApi* | [**getVendorComplianceSurveyByFilter**](docs/VendorComplianceSurveyApi.md#getvendorcompliancesurveybyfilter) | **GET** /v1.0/vendorComplianceSurvey/search | Search vendorComplianceSurveys by filter
*VendorComplianceSurveyApi* | [**getVendorComplianceSurveyById**](docs/VendorComplianceSurveyApi.md#getvendorcompliancesurveybyid) | **GET** /v1.0/vendorComplianceSurvey/{vendorComplianceSurveyId} | Get a vendorComplianceSurvey by id
*VendorComplianceSurveyApi* | [**updateVendorComplianceSurvey**](docs/VendorComplianceSurveyApi.md#updatevendorcompliancesurvey) | **PUT** /v1.0/vendorComplianceSurvey | Update a vendorComplianceSurvey
*WarehouseApi* | [**getWarehouseByFilter**](docs/WarehouseApi.md#getwarehousebyfilter) | **GET** /v1.0/warehouse/search | Search warehouses by filter
*WarehouseApi* | [**getWarehouseById**](docs/WarehouseApi.md#getwarehousebyid) | **GET** /v1.0/warehouse/{warehouseId} | Get a warehouse by id
*WarehouseApi* | [**updateWarehouse**](docs/WarehouseApi.md#updatewarehouse) | **PUT** /v1.0/warehouse | Update a warehouse
*WarehouseDocumentApi* | [**getWarehouseDocumentByFilter**](docs/WarehouseDocumentApi.md#getwarehousedocumentbyfilter) | **GET** /v1.0/warehouseDocument/search | Search warehouseDocuments by filter
*WarehouseDocumentApi* | [**getWarehouseDocumentById**](docs/WarehouseDocumentApi.md#getwarehousedocumentbyid) | **GET** /v1.0/warehouseDocument/{warehouseDocumentId} | Get a warehouseDocument by id
*WarehouseDocumentTypeApi* | [**getWarehouseDocumentTypeByFilter**](docs/WarehouseDocumentTypeApi.md#getwarehousedocumenttypebyfilter) | **GET** /v1.0/warehouseDocumentType/search | Search warehouseDocumentTypes by filter
*WarehouseDocumentTypeApi* | [**getWarehouseDocumentTypeById**](docs/WarehouseDocumentTypeApi.md#getwarehousedocumenttypebyid) | **GET** /v1.0/warehouseDocumentType/{warehouseDocumentTypeId} | Get a warehouseDocumentType by id
*WorkApi* | [**getWorkByFilter**](docs/WorkApi.md#getworkbyfilter) | **GET** /v1.0/work/search | Search works by filter
*WorkApi* | [**getWorkById**](docs/WorkApi.md#getworkbyid) | **GET** /v1.0/work/{workId} | Get a work by id
*WorkBatchApi* | [**getWorkBatchByFilter**](docs/WorkBatchApi.md#getworkbatchbyfilter) | **GET** /v1.0/workBatch/search | Search workBatchs by filter
*WorkBatchApi* | [**getWorkBatchById**](docs/WorkBatchApi.md#getworkbatchbyid) | **GET** /v1.0/workBatch/{workBatchId} | Get a workBatch by id
*ZoneApi* | [**addZone**](docs/ZoneApi.md#addzone) | **POST** /v1.0/zone | Create a zone
*ZoneApi* | [**deleteZone**](docs/ZoneApi.md#deletezone) | **DELETE** /v1.0/zone/{zoneId} | Delete a zone
*ZoneApi* | [**getZoneByFilter**](docs/ZoneApi.md#getzonebyfilter) | **GET** /v1.0/zone/search | Search zones by filter
*ZoneApi* | [**getZoneById**](docs/ZoneApi.md#getzonebyid) | **GET** /v1.0/zone/{zoneId} | Get a zone by id
*ZoneApi* | [**updateZone**](docs/ZoneApi.md#updatezone) | **PUT** /v1.0/zone | Update a zone


## Documentation For Models

 - [Aisle](docs/Aisle.md)
 - [Alert](docs/Alert.md)
 - [ApiResponse](docs/ApiResponse.md)
 - [Asn](docs/Asn.md)
 - [BillOfLading](docs/BillOfLading.md)
 - [BillOfLadingCarrierInfoLine](docs/BillOfLadingCarrierInfoLine.md)
 - [BillOfLadingOrderInfoLine](docs/BillOfLadingOrderInfoLine.md)
 - [BillingCode](docs/BillingCode.md)
 - [BillingCodeType](docs/BillingCodeType.md)
 - [Building](docs/Building.md)
 - [BusinessTransaction](docs/BusinessTransaction.md)
 - [Carrier](docs/Carrier.md)
 - [CarrierService](docs/CarrierService.md)
 - [Carton](docs/Carton.md)
 - [CartonContent](docs/CartonContent.md)
 - [CartonType](docs/CartonType.md)
 - [Customer](docs/Customer.md)
 - [EmailTemplate](docs/EmailTemplate.md)
 - [ExternalShipment](docs/ExternalShipment.md)
 - [FulfillmentPlan](docs/FulfillmentPlan.md)
 - [FulfillmentProcess](docs/FulfillmentProcess.md)
 - [IntegrationPartner](docs/IntegrationPartner.md)
 - [InventoryAdjustment](docs/InventoryAdjustment.md)
 - [InventoryDetail](docs/InventoryDetail.md)
 - [Item](docs/Item.md)
 - [ItemAccountCode](docs/ItemAccountCode.md)
 - [ItemBuyer](docs/ItemBuyer.md)
 - [ItemLegacyLowStockContact](docs/ItemLegacyLowStockContact.md)
 - [ItemLowStockCode](docs/ItemLowStockCode.md)
 - [ItemMajorGroup](docs/ItemMajorGroup.md)
 - [ItemProductCode](docs/ItemProductCode.md)
 - [ItemReceipt](docs/ItemReceipt.md)
 - [ItemSubGroup](docs/ItemSubGroup.md)
 - [ItemSummaryCode](docs/ItemSummaryCode.md)
 - [JobTime](docs/JobTime.md)
 - [JobType](docs/JobType.md)
 - [LineOfBusiness](docs/LineOfBusiness.md)
 - [Location](docs/Location.md)
 - [LocationAddressScheme](docs/LocationAddressScheme.md)
 - [LocationBillingType](docs/LocationBillingType.md)
 - [LocationFootprint](docs/LocationFootprint.md)
 - [LoggedTime](docs/LoggedTime.md)
 - [LoggedTimeType](docs/LoggedTimeType.md)
 - [LowStock](docs/LowStock.md)
 - [Order](docs/Order.md)
 - [OrderLine](docs/OrderLine.md)
 - [OrderLoadProgram](docs/OrderLoadProgram.md)
 - [OrderSource](docs/OrderSource.md)
 - [OrderSourceReservation](docs/OrderSourceReservation.md)
 - [OverrideReturnAddress](docs/OverrideReturnAddress.md)
 - [ParcelAccount](docs/ParcelAccount.md)
 - [ParcelShipment](docs/ParcelShipment.md)
 - [PickFaceAssignment](docs/PickFaceAssignment.md)
 - [ProductType](docs/ProductType.md)
 - [ProductionLot](docs/ProductionLot.md)
 - [QuickAdjustment](docs/QuickAdjustment.md)
 - [QuickReceipt](docs/QuickReceipt.md)
 - [ReceivingProcess](docs/ReceivingProcess.md)
 - [ReceivingWorksheet](docs/ReceivingWorksheet.md)
 - [ReceivingWorksheetLineItem](docs/ReceivingWorksheetLineItem.md)
 - [ReceivingWorksheetPutAwayPlan](docs/ReceivingWorksheetPutAwayPlan.md)
 - [Replenishment](docs/Replenishment.md)
 - [ReplenishmentPlan](docs/ReplenishmentPlan.md)
 - [ReplenishmentProcess](docs/ReplenishmentProcess.md)
 - [ServiceType](docs/ServiceType.md)
 - [ShoppingCartConnection](docs/ShoppingCartConnection.md)
 - [ThirdPartyParcelAccount](docs/ThirdPartyParcelAccount.md)
 - [User](docs/User.md)
 - [Vendor](docs/Vendor.md)
 - [VendorComplianceSurvey](docs/VendorComplianceSurvey.md)
 - [Warehouse](docs/Warehouse.md)
 - [WarehouseDocument](docs/WarehouseDocument.md)
 - [WarehouseDocumentType](docs/WarehouseDocumentType.md)
 - [Work](docs/Work.md)
 - [WorkBatch](docs/WorkBatch.md)
 - [Zone](docs/Zone.md)


## Documentation For Authorization


## api_key

- **Type**: API key 
- **API key parameter name**: API-Key
- **Location**: HTTP header


## Author

api@infopluscommerce.com


