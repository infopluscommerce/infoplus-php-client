# betaplus-php-client
betaplus is a cloud platform to manage your inventory, orders, warehouse, and shipments.

The betaplus API exposes the full breadth and depth of the betaplus platform to all clients.
With the betaplus API, you can integrate betaplus functionality into other platforms 
(e.g. your ERP, shopping cart, accounting system, etc.), enabling you to do, in your own platform, 
anything you can do in betaplus. 

This repository is a native PHP client for full access to the betaplus API.

## betaplus API Resources
The Resources listed below will provide all the betarmation you need to integrate with the betaplus API. 

### Developer's Home Page
https://www.betapluscommerce.com/developers/
* This site gives you an overview of the betaplus API. 
* Get a general understanding of the API and quick steps on getting started. 

### betaplus API Reference Site
http://developers.betapluscommerce.com/
* The betaplus API is a modern JSON + REST API, and the API Reference Site is the complete documentation of all endpoints, resources, and fields available in the API. 
* Whether you're using the API directly over HTTPS, or if you're using a pre-built Client Library like this one, the API Reference Site gives you the specific details you need for each API call available, along with live demo capabilities.
* The API Reference Site also lets you request access to a free Demo Account to test out the API. 

### Have Questions?
* Read an [Overview of the betaplus API](https://support.betapluscommerce.com/support/solutions/articles/11000010373)
* Get in touch with the [betaplus Support Team](https://support.betapluscommerce.com/support/tickets/new)
* Visit the [betaplus API Forum](https://support.betapluscommerce.com/support/discussions/forums/11000000138)

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
      "url": "https://github.com/betapluscommerce/php-client.git"
    }
  ],
  "require": {
    "betapluscommerce/php-client": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/betaplus/autoload.php');
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
betaplus\Configuration::getDefaultConfiguration()->setApiKey('API-Key', 'YOUR_API_KEY');
betaplus\Configuration::getDefaultConfiguration()->setHost('https://<YOUR betaPLUS DOMAIN>/betaplus-wms/api');

$api_client = new betaplus\ApiClient();

$api_instance = new betaplus\Api\WarehouseApi($api_client);

try {
    $result = $api_instance->getWarehouseById(1);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception: ', $e->getMessage(), "\n";
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://kingsrook.localhost-testsubdomain1.betapluswms.com:8443/betaplus-wms/api*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AisleApi* | [**addAisle**](docs/AisleApi.md#addaisle) | **POST** /vbeta/aisle | Create an aisle
*AisleApi* | [**deleteAisle**](docs/AisleApi.md#deleteaisle) | **DELETE** /vbeta/aisle/{aisleId} | Delete an aisle
*AisleApi* | [**getAisleByFilter**](docs/AisleApi.md#getaislebyfilter) | **GET** /vbeta/aisle/search | Search aisles by filter
*AisleApi* | [**getAisleById**](docs/AisleApi.md#getaislebyid) | **GET** /vbeta/aisle/{aisleId} | Get an aisle by id
*AisleApi* | [**updateAisle**](docs/AisleApi.md#updateaisle) | **PUT** /vbeta/aisle | Update an aisle
*AlertApi* | [**getAlertByFilter**](docs/AlertApi.md#getalertbyfilter) | **GET** /vbeta/alert/search | Search alerts by filter
*AlertApi* | [**getAlertById**](docs/AlertApi.md#getalertbyid) | **GET** /vbeta/alert/{alertId} | Get an alert by id
*AsnApi* | [**addAsn**](docs/AsnApi.md#addasn) | **POST** /vbeta/asn | Create an asn
*AsnApi* | [**deleteAsn**](docs/AsnApi.md#deleteasn) | **DELETE** /vbeta/asn/{asnId} | Delete an asn
*AsnApi* | [**getAsnByFilter**](docs/AsnApi.md#getasnbyfilter) | **GET** /vbeta/asn/search | Search asns by filter
*AsnApi* | [**getAsnById**](docs/AsnApi.md#getasnbyid) | **GET** /vbeta/asn/{asnId} | Get an asn by id
*AsnApi* | [**updateAsn**](docs/AsnApi.md#updateasn) | **PUT** /vbeta/asn | Update an asn
*BillOfLadingApi* | [**addBillOfLading**](docs/BillOfLadingApi.md#addbilloflading) | **POST** /vbeta/billOfLading | Create a billOfLading
*BillOfLadingApi* | [**deleteBillOfLading**](docs/BillOfLadingApi.md#deletebilloflading) | **DELETE** /vbeta/billOfLading/{billOfLadingId} | Delete a billOfLading
*BillOfLadingApi* | [**getBillOfLadingByFilter**](docs/BillOfLadingApi.md#getbillofladingbyfilter) | **GET** /vbeta/billOfLading/search | Search billOfLadings by filter
*BillOfLadingApi* | [**getBillOfLadingById**](docs/BillOfLadingApi.md#getbillofladingbyid) | **GET** /vbeta/billOfLading/{billOfLadingId} | Get a billOfLading by id
*BillOfLadingApi* | [**updateBillOfLading**](docs/BillOfLadingApi.md#updatebilloflading) | **PUT** /vbeta/billOfLading | Update a billOfLading
*BillingCodeApi* | [**addBillingCode**](docs/BillingCodeApi.md#addbillingcode) | **POST** /vbeta/billingCode | Create a billingCode
*BillingCodeApi* | [**deleteBillingCode**](docs/BillingCodeApi.md#deletebillingcode) | **DELETE** /vbeta/billingCode/{billingCodeId} | Delete a billingCode
*BillingCodeApi* | [**getBillingCodeByFilter**](docs/BillingCodeApi.md#getbillingcodebyfilter) | **GET** /vbeta/billingCode/search | Search billingCodes by filter
*BillingCodeApi* | [**getBillingCodeById**](docs/BillingCodeApi.md#getbillingcodebyid) | **GET** /vbeta/billingCode/{billingCodeId} | Get a billingCode by id
*BillingCodeApi* | [**updateBillingCode**](docs/BillingCodeApi.md#updatebillingcode) | **PUT** /vbeta/billingCode | Update a billingCode
*BillingCodeTypeApi* | [**addBillingCodeType**](docs/BillingCodeTypeApi.md#addbillingcodetype) | **POST** /vbeta/billingCodeType | Create a billingCodeType
*BillingCodeTypeApi* | [**deleteBillingCodeType**](docs/BillingCodeTypeApi.md#deletebillingcodetype) | **DELETE** /vbeta/billingCodeType/{billingCodeTypeId} | Delete a billingCodeType
*BillingCodeTypeApi* | [**getBillingCodeTypeByFilter**](docs/BillingCodeTypeApi.md#getbillingcodetypebyfilter) | **GET** /vbeta/billingCodeType/search | Search billingCodeTypes by filter
*BillingCodeTypeApi* | [**getBillingCodeTypeById**](docs/BillingCodeTypeApi.md#getbillingcodetypebyid) | **GET** /vbeta/billingCodeType/{billingCodeTypeId} | Get a billingCodeType by id
*BillingCodeTypeApi* | [**updateBillingCodeType**](docs/BillingCodeTypeApi.md#updatebillingcodetype) | **PUT** /vbeta/billingCodeType | Update a billingCodeType
*BuildingApi* | [**addBuilding**](docs/BuildingApi.md#addbuilding) | **POST** /vbeta/building | Create a building
*BuildingApi* | [**deleteBuilding**](docs/BuildingApi.md#deletebuilding) | **DELETE** /vbeta/building/{buildingId} | Delete a building
*BuildingApi* | [**getBuildingByFilter**](docs/BuildingApi.md#getbuildingbyfilter) | **GET** /vbeta/building/search | Search buildings by filter
*BuildingApi* | [**getBuildingById**](docs/BuildingApi.md#getbuildingbyid) | **GET** /vbeta/building/{buildingId} | Get a building by id
*BuildingApi* | [**updateBuilding**](docs/BuildingApi.md#updatebuilding) | **PUT** /vbeta/building | Update a building
*BusinessTransactionApi* | [**getBusinessTransactionByFilter**](docs/BusinessTransactionApi.md#getbusinesstransactionbyfilter) | **GET** /vbeta/businessTransaction/search | Search businessTransactions by filter
*BusinessTransactionApi* | [**getBusinessTransactionById**](docs/BusinessTransactionApi.md#getbusinesstransactionbyid) | **GET** /vbeta/businessTransaction/{businessTransactionId} | Get a businessTransaction by id
*CarrierApi* | [**getCarrierById**](docs/CarrierApi.md#getcarrierbyid) | **GET** /vbeta/carrier/{carrierId} | Get a carrier by id
*CarrierApi* | [**getCarrierBySearchText**](docs/CarrierApi.md#getcarrierbysearchtext) | **GET** /vbeta/carrier/search | Search carriers
*CarrierServiceApi* | [**getCarrierServiceById**](docs/CarrierServiceApi.md#getcarrierservicebyid) | **GET** /vbeta/carrierService/{carrierServiceId} | Get a carrierService by id
*CarrierServiceApi* | [**getCarrierServiceBySearchText**](docs/CarrierServiceApi.md#getcarrierservicebysearchtext) | **GET** /vbeta/carrierService/search | Search carrierServices
*CartonApi* | [**addCarton**](docs/CartonApi.md#addcarton) | **POST** /vbeta/carton | Create a carton
*CartonApi* | [**deleteCarton**](docs/CartonApi.md#deletecarton) | **DELETE** /vbeta/carton/{cartonId} | Delete a carton
*CartonApi* | [**getCartonByFilter**](docs/CartonApi.md#getcartonbyfilter) | **GET** /vbeta/carton/search | Search cartons by filter
*CartonApi* | [**getCartonById**](docs/CartonApi.md#getcartonbyid) | **GET** /vbeta/carton/{cartonId} | Get a carton by id
*CartonApi* | [**updateCarton**](docs/CartonApi.md#updatecarton) | **PUT** /vbeta/carton | Update a carton
*CartonContentApi* | [**addCartonContent**](docs/CartonContentApi.md#addcartoncontent) | **POST** /vbeta/cartonContent | Create a cartonContent
*CartonContentApi* | [**deleteCartonContent**](docs/CartonContentApi.md#deletecartoncontent) | **DELETE** /vbeta/cartonContent/{cartonContentId} | Delete a cartonContent
*CartonContentApi* | [**getCartonContentByFilter**](docs/CartonContentApi.md#getcartoncontentbyfilter) | **GET** /vbeta/cartonContent/search | Search cartonContents by filter
*CartonContentApi* | [**getCartonContentById**](docs/CartonContentApi.md#getcartoncontentbyid) | **GET** /vbeta/cartonContent/{cartonContentId} | Get a cartonContent by id
*CartonContentApi* | [**updateCartonContent**](docs/CartonContentApi.md#updatecartoncontent) | **PUT** /vbeta/cartonContent | Update a cartonContent
*CartonTypeApi* | [**addCartonType**](docs/CartonTypeApi.md#addcartontype) | **POST** /vbeta/cartonType | Create a cartonType
*CartonTypeApi* | [**deleteCartonType**](docs/CartonTypeApi.md#deletecartontype) | **DELETE** /vbeta/cartonType/{cartonTypeId} | Delete a cartonType
*CartonTypeApi* | [**getCartonTypeByFilter**](docs/CartonTypeApi.md#getcartontypebyfilter) | **GET** /vbeta/cartonType/search | Search cartonTypes by filter
*CartonTypeApi* | [**getCartonTypeById**](docs/CartonTypeApi.md#getcartontypebyid) | **GET** /vbeta/cartonType/{cartonTypeId} | Get a cartonType by id
*CartonTypeApi* | [**updateCartonType**](docs/CartonTypeApi.md#updatecartontype) | **PUT** /vbeta/cartonType | Update a cartonType
*CustomerApi* | [**addCustomer**](docs/CustomerApi.md#addcustomer) | **POST** /vbeta/customer | Create a customer
*CustomerApi* | [**deleteCustomer**](docs/CustomerApi.md#deletecustomer) | **DELETE** /vbeta/customer/{customerId} | Delete a customer
*CustomerApi* | [**getByCustomerNo**](docs/CustomerApi.md#getbycustomerno) | **GET** /vbeta/customer/getByCustomerNo | Get a customer by Customer No
*CustomerApi* | [**getCustomerByFilter**](docs/CustomerApi.md#getcustomerbyfilter) | **GET** /vbeta/customer/search | Search customers by filter
*CustomerApi* | [**getCustomerById**](docs/CustomerApi.md#getcustomerbyid) | **GET** /vbeta/customer/{customerId} | Get a customer by id
*CustomerApi* | [**updateCustomer**](docs/CustomerApi.md#updatecustomer) | **PUT** /vbeta/customer | Update a customer
*EmailTemplateApi* | [**addEmailTemplate**](docs/EmailTemplateApi.md#addemailtemplate) | **POST** /vbeta/emailTemplate | Create an emailTemplate
*EmailTemplateApi* | [**deleteEmailTemplate**](docs/EmailTemplateApi.md#deleteemailtemplate) | **DELETE** /vbeta/emailTemplate/{emailTemplateId} | Delete an emailTemplate
*EmailTemplateApi* | [**getEmailTemplateByFilter**](docs/EmailTemplateApi.md#getemailtemplatebyfilter) | **GET** /vbeta/emailTemplate/search | Search emailTemplates by filter
*EmailTemplateApi* | [**getEmailTemplateById**](docs/EmailTemplateApi.md#getemailtemplatebyid) | **GET** /vbeta/emailTemplate/{emailTemplateId} | Get an emailTemplate by id
*EmailTemplateApi* | [**updateEmailTemplate**](docs/EmailTemplateApi.md#updateemailtemplate) | **PUT** /vbeta/emailTemplate | Update an emailTemplate
*ExternalShipmentApi* | [**addExternalShipment**](docs/ExternalShipmentApi.md#addexternalshipment) | **POST** /vbeta/externalShipment | Create an externalShipment
*ExternalShipmentApi* | [**deleteExternalShipment**](docs/ExternalShipmentApi.md#deleteexternalshipment) | **DELETE** /vbeta/externalShipment/{externalShipmentId} | Delete an externalShipment
*ExternalShipmentApi* | [**getExternalShipmentByFilter**](docs/ExternalShipmentApi.md#getexternalshipmentbyfilter) | **GET** /vbeta/externalShipment/search | Search externalShipments by filter
*ExternalShipmentApi* | [**getExternalShipmentById**](docs/ExternalShipmentApi.md#getexternalshipmentbyid) | **GET** /vbeta/externalShipment/{externalShipmentId} | Get an externalShipment by id
*ExternalShipmentApi* | [**updateExternalShipment**](docs/ExternalShipmentApi.md#updateexternalshipment) | **PUT** /vbeta/externalShipment | Update an externalShipment
*FulfillmentPlanApi* | [**addFulfillmentPlan**](docs/FulfillmentPlanApi.md#addfulfillmentplan) | **POST** /vbeta/fulfillmentPlan | Create a fulfillmentPlan
*FulfillmentPlanApi* | [**deleteFulfillmentPlan**](docs/FulfillmentPlanApi.md#deletefulfillmentplan) | **DELETE** /vbeta/fulfillmentPlan/{fulfillmentPlanId} | Delete a fulfillmentPlan
*FulfillmentPlanApi* | [**getFulfillmentPlanByFilter**](docs/FulfillmentPlanApi.md#getfulfillmentplanbyfilter) | **GET** /vbeta/fulfillmentPlan/search | Search fulfillmentPlans by filter
*FulfillmentPlanApi* | [**getFulfillmentPlanById**](docs/FulfillmentPlanApi.md#getfulfillmentplanbyid) | **GET** /vbeta/fulfillmentPlan/{fulfillmentPlanId} | Get a fulfillmentPlan by id
*FulfillmentPlanApi* | [**updateFulfillmentPlan**](docs/FulfillmentPlanApi.md#updatefulfillmentplan) | **PUT** /vbeta/fulfillmentPlan | Update a fulfillmentPlan
*FulfillmentProcessApi* | [**getFulfillmentProcessByFilter**](docs/FulfillmentProcessApi.md#getfulfillmentprocessbyfilter) | **GET** /vbeta/fulfillmentProcess/search | Search fulfillmentProcesses by filter
*FulfillmentProcessApi* | [**getFulfillmentProcessById**](docs/FulfillmentProcessApi.md#getfulfillmentprocessbyid) | **GET** /vbeta/fulfillmentProcess/{fulfillmentProcessId} | Get a fulfillmentProcess by id
*IntegrationPartnerApi* | [**getIntegrationPartnerById**](docs/IntegrationPartnerApi.md#getintegrationpartnerbyid) | **GET** /vbeta/integrationPartner/{integrationPartnerId} | Get an integrationPartner by id
*IntegrationPartnerApi* | [**getIntegrationPartnerBySearchText**](docs/IntegrationPartnerApi.md#getintegrationpartnerbysearchtext) | **GET** /vbeta/integrationPartner/search | Search integrationPartners
*InventoryAdjustmentApi* | [**getInventoryAdjustmentByFilter**](docs/InventoryAdjustmentApi.md#getinventoryadjustmentbyfilter) | **GET** /vbeta/inventoryAdjustment/search | Search inventoryAdjustments by filter
*InventoryAdjustmentApi* | [**getInventoryAdjustmentById**](docs/InventoryAdjustmentApi.md#getinventoryadjustmentbyid) | **GET** /vbeta/inventoryAdjustment/{inventoryAdjustmentId} | Get an inventoryAdjustment by id
*InventoryDetailApi* | [**getInventoryDetailByFilter**](docs/InventoryDetailApi.md#getinventorydetailbyfilter) | **GET** /vbeta/inventoryDetail/search | Search inventoryDetails by filter
*InventoryDetailApi* | [**getInventoryDetailById**](docs/InventoryDetailApi.md#getinventorydetailbyid) | **GET** /vbeta/inventoryDetail/{inventoryDetailId} | Get an inventoryDetail by id
*ItemApi* | [**addItem**](docs/ItemApi.md#additem) | **POST** /vbeta/item | Create an item
*ItemApi* | [**deleteItem**](docs/ItemApi.md#deleteitem) | **DELETE** /vbeta/item/{itemId} | Delete an item
*ItemApi* | [**getBySKU**](docs/ItemApi.md#getbysku) | **GET** /vbeta/item/getBySKU | Get an item by SKU
*ItemApi* | [**getItemByFilter**](docs/ItemApi.md#getitembyfilter) | **GET** /vbeta/item/search | Search items by filter
*ItemApi* | [**getItemById**](docs/ItemApi.md#getitembyid) | **GET** /vbeta/item/{itemId} | Get an item by id
*ItemApi* | [**updateItem**](docs/ItemApi.md#updateitem) | **PUT** /vbeta/item | Update an item
*ItemAccountCodeApi* | [**getItemAccountCodeBySearchText**](docs/ItemAccountCodeApi.md#getitemaccountcodebysearchtext) | **GET** /vbeta/itemAccountCode/search | Search itemAccountCodes
*ItemAccountCodeApi* | [**getTranslateAccountCodeById**](docs/ItemAccountCodeApi.md#gettranslateaccountcodebyid) | **GET** /vbeta/itemAccountCode/{itemAccountCodeId} | Get an itemAccountCode by id
*ItemBuyerApi* | [**getItemBuyerBySearchText**](docs/ItemBuyerApi.md#getitembuyerbysearchtext) | **GET** /vbeta/itemBuyer/search | Search itemBuyers
*ItemBuyerApi* | [**getTranslateBuyerById**](docs/ItemBuyerApi.md#gettranslatebuyerbyid) | **GET** /vbeta/itemBuyer/{itemBuyerId} | Get an itemBuyer by id
*ItemLegacyLowStockContactApi* | [**getItemLegacyLowStockContactBySearchText**](docs/ItemLegacyLowStockContactApi.md#getitemlegacylowstockcontactbysearchtext) | **GET** /vbeta/itemLegacyLowStockContact/search | Search itemLegacyLowStockContacts
*ItemLegacyLowStockContactApi* | [**getTranslateLowStockContactById**](docs/ItemLegacyLowStockContactApi.md#gettranslatelowstockcontactbyid) | **GET** /vbeta/itemLegacyLowStockContact/{itemLegacyLowStockContactId} | Get an itemLegacyLowStockContact by id
*ItemLowStockCodeApi* | [**getItemLowStockCodeBySearchText**](docs/ItemLowStockCodeApi.md#getitemlowstockcodebysearchtext) | **GET** /vbeta/itemLowStockCode/search | Search itemLowStockCodes
*ItemLowStockCodeApi* | [**getTranslateLowStockCodeById**](docs/ItemLowStockCodeApi.md#gettranslatelowstockcodebyid) | **GET** /vbeta/itemLowStockCode/{itemLowStockCodeId} | Get an itemLowStockCode by id
*ItemMajorGroupApi* | [**getItemMajorGroupBySearchText**](docs/ItemMajorGroupApi.md#getitemmajorgroupbysearchtext) | **GET** /vbeta/itemMajorGroup/search | Search itemMajorGroups
*ItemMajorGroupApi* | [**getTranslateMajorGroupById**](docs/ItemMajorGroupApi.md#gettranslatemajorgroupbyid) | **GET** /vbeta/itemMajorGroup/{itemMajorGroupId} | Get an itemMajorGroup by id
*ItemProductCodeApi* | [**getItemProductCodeBySearchText**](docs/ItemProductCodeApi.md#getitemproductcodebysearchtext) | **GET** /vbeta/itemProductCode/search | Search itemProductCodes
*ItemProductCodeApi* | [**getTranslateProductCodeById**](docs/ItemProductCodeApi.md#gettranslateproductcodebyid) | **GET** /vbeta/itemProductCode/{itemProductCodeId} | Get an itemProductCode by id
*ItemReceiptApi* | [**getItemReceiptByFilter**](docs/ItemReceiptApi.md#getitemreceiptbyfilter) | **GET** /vbeta/itemReceipt/search | Search itemReceipts by filter
*ItemReceiptApi* | [**getItemReceiptById**](docs/ItemReceiptApi.md#getitemreceiptbyid) | **GET** /vbeta/itemReceipt/{itemReceiptId} | Get an itemReceipt by id
*ItemSubGroupApi* | [**getItemSubGroupBySearchText**](docs/ItemSubGroupApi.md#getitemsubgroupbysearchtext) | **GET** /vbeta/itemSubGroup/search | Search itemSubGroups
*ItemSubGroupApi* | [**getTranslateSubGroupById**](docs/ItemSubGroupApi.md#gettranslatesubgroupbyid) | **GET** /vbeta/itemSubGroup/{itemSubGroupId} | Get an itemSubGroup by id
*ItemSummaryCodeApi* | [**getItemSummaryCodeBySearchText**](docs/ItemSummaryCodeApi.md#getitemsummarycodebysearchtext) | **GET** /vbeta/itemSummaryCode/search | Search itemSummaryCodes
*ItemSummaryCodeApi* | [**getTranslateSummaryCodeById**](docs/ItemSummaryCodeApi.md#gettranslatesummarycodebyid) | **GET** /vbeta/itemSummaryCode/{itemSummaryCodeId} | Get an itemSummaryCode by id
*JobTimeApi* | [**addJobTime**](docs/JobTimeApi.md#addjobtime) | **POST** /vbeta/jobTime | Create a jobTime
*JobTimeApi* | [**deleteJobTime**](docs/JobTimeApi.md#deletejobtime) | **DELETE** /vbeta/jobTime/{jobTimeId} | Delete a jobTime
*JobTimeApi* | [**getJobTimeByFilter**](docs/JobTimeApi.md#getjobtimebyfilter) | **GET** /vbeta/jobTime/search | Search jobTimes by filter
*JobTimeApi* | [**getJobTimeById**](docs/JobTimeApi.md#getjobtimebyid) | **GET** /vbeta/jobTime/{jobTimeId} | Get a jobTime by id
*JobTimeApi* | [**updateJobTime**](docs/JobTimeApi.md#updatejobtime) | **PUT** /vbeta/jobTime | Update a jobTime
*JobTypeApi* | [**addJobType**](docs/JobTypeApi.md#addjobtype) | **POST** /vbeta/jobType | Create a jobType
*JobTypeApi* | [**deleteJobType**](docs/JobTypeApi.md#deletejobtype) | **DELETE** /vbeta/jobType/{jobTypeId} | Delete a jobType
*JobTypeApi* | [**getJobTypeByFilter**](docs/JobTypeApi.md#getjobtypebyfilter) | **GET** /vbeta/jobType/search | Search jobTypes by filter
*JobTypeApi* | [**getJobTypeById**](docs/JobTypeApi.md#getjobtypebyid) | **GET** /vbeta/jobType/{jobTypeId} | Get a jobType by id
*JobTypeApi* | [**updateJobType**](docs/JobTypeApi.md#updatejobtype) | **PUT** /vbeta/jobType | Update a jobType
*LineOfBusinessApi* | [**getLineOfBusinessById**](docs/LineOfBusinessApi.md#getlineofbusinessbyid) | **GET** /vbeta/lineOfBusiness/{lineOfBusinessId} | Get a lineOfBusiness by id
*LineOfBusinessApi* | [**getLineOfBusinessBySearchText**](docs/LineOfBusinessApi.md#getlineofbusinessbysearchtext) | **GET** /vbeta/lineOfBusiness/search | Search lineOfBusinesses
*LocationApi* | [**addLocation**](docs/LocationApi.md#addlocation) | **POST** /vbeta/location | Create a location
*LocationApi* | [**deleteLocation**](docs/LocationApi.md#deletelocation) | **DELETE** /vbeta/location/{locationId} | Delete a location
*LocationApi* | [**getLocationByFilter**](docs/LocationApi.md#getlocationbyfilter) | **GET** /vbeta/location/search | Search locations by filter
*LocationApi* | [**getLocationById**](docs/LocationApi.md#getlocationbyid) | **GET** /vbeta/location/{locationId} | Get a location by id
*LocationApi* | [**updateLocation**](docs/LocationApi.md#updatelocation) | **PUT** /vbeta/location | Update a location
*LocationAddressSchemeApi* | [**addLocationAddressScheme**](docs/LocationAddressSchemeApi.md#addlocationaddressscheme) | **POST** /vbeta/locationAddressScheme | Create a locationAddressScheme
*LocationAddressSchemeApi* | [**deleteLocationAddressScheme**](docs/LocationAddressSchemeApi.md#deletelocationaddressscheme) | **DELETE** /vbeta/locationAddressScheme/{locationAddressSchemeId} | Delete a locationAddressScheme
*LocationAddressSchemeApi* | [**getLocationAddressSchemeByFilter**](docs/LocationAddressSchemeApi.md#getlocationaddressschemebyfilter) | **GET** /vbeta/locationAddressScheme/search | Search locationAddressSchemes by filter
*LocationAddressSchemeApi* | [**getLocationAddressSchemeById**](docs/LocationAddressSchemeApi.md#getlocationaddressschemebyid) | **GET** /vbeta/locationAddressScheme/{locationAddressSchemeId} | Get a locationAddressScheme by id
*LocationAddressSchemeApi* | [**updateLocationAddressScheme**](docs/LocationAddressSchemeApi.md#updatelocationaddressscheme) | **PUT** /vbeta/locationAddressScheme | Update a locationAddressScheme
*LocationBillingTypeApi* | [**addLocationBillingType**](docs/LocationBillingTypeApi.md#addlocationbillingtype) | **POST** /vbeta/locationBillingType | Create a locationBillingType
*LocationBillingTypeApi* | [**deleteLocationBillingType**](docs/LocationBillingTypeApi.md#deletelocationbillingtype) | **DELETE** /vbeta/locationBillingType/{locationBillingTypeId} | Delete a locationBillingType
*LocationBillingTypeApi* | [**getLocationBillingTypeByFilter**](docs/LocationBillingTypeApi.md#getlocationbillingtypebyfilter) | **GET** /vbeta/locationBillingType/search | Search locationBillingTypes by filter
*LocationBillingTypeApi* | [**getLocationBillingTypeById**](docs/LocationBillingTypeApi.md#getlocationbillingtypebyid) | **GET** /vbeta/locationBillingType/{locationBillingTypeId} | Get a locationBillingType by id
*LocationBillingTypeApi* | [**updateLocationBillingType**](docs/LocationBillingTypeApi.md#updatelocationbillingtype) | **PUT** /vbeta/locationBillingType | Update a locationBillingType
*LocationFootprintApi* | [**addLocationFootprint**](docs/LocationFootprintApi.md#addlocationfootprint) | **POST** /vbeta/locationFootprint | Create a locationFootprint
*LocationFootprintApi* | [**deleteLocationFootprint**](docs/LocationFootprintApi.md#deletelocationfootprint) | **DELETE** /vbeta/locationFootprint/{locationFootprintId} | Delete a locationFootprint
*LocationFootprintApi* | [**getLocationFootprintByFilter**](docs/LocationFootprintApi.md#getlocationfootprintbyfilter) | **GET** /vbeta/locationFootprint/search | Search locationFootprints by filter
*LocationFootprintApi* | [**getLocationFootprintById**](docs/LocationFootprintApi.md#getlocationfootprintbyid) | **GET** /vbeta/locationFootprint/{locationFootprintId} | Get a locationFootprint by id
*LocationFootprintApi* | [**updateLocationFootprint**](docs/LocationFootprintApi.md#updatelocationfootprint) | **PUT** /vbeta/locationFootprint | Update a locationFootprint
*LoggedTimeApi* | [**getLoggedTimeByFilter**](docs/LoggedTimeApi.md#getloggedtimebyfilter) | **GET** /vbeta/loggedTime/search | Search loggedTimes by filter
*LoggedTimeApi* | [**getLoggedTimeById**](docs/LoggedTimeApi.md#getloggedtimebyid) | **GET** /vbeta/loggedTime/{loggedTimeId} | Get a loggedTime by id
*LoggedTimeTypeApi* | [**getLoggedTimeTypeById**](docs/LoggedTimeTypeApi.md#getloggedtimetypebyid) | **GET** /vbeta/loggedTimeType/{loggedTimeTypeId} | Get a loggedTimeType by id
*LoggedTimeTypeApi* | [**getLoggedTimeTypeBySearchText**](docs/LoggedTimeTypeApi.md#getloggedtimetypebysearchtext) | **GET** /vbeta/loggedTimeType/search | Search loggedTimeTypes
*LowStockApi* | [**getLowStockByFilter**](docs/LowStockApi.md#getlowstockbyfilter) | **GET** /vbeta/lowStock/search | Search lowStocks by filter
*LowStockApi* | [**getLowStockById**](docs/LowStockApi.md#getlowstockbyid) | **GET** /vbeta/lowStock/{lowStockId} | Get a lowStock by id
*OrderApi* | [**addOrder**](docs/OrderApi.md#addorder) | **POST** /vbeta/order | Create an order
*OrderApi* | [**deleteOrder**](docs/OrderApi.md#deleteorder) | **DELETE** /vbeta/order/{orderId} | Delete an order
*OrderApi* | [**getOrderByFilter**](docs/OrderApi.md#getorderbyfilter) | **GET** /vbeta/order/search | Search orders by filter
*OrderApi* | [**getOrderById**](docs/OrderApi.md#getorderbyid) | **GET** /vbeta/order/{orderId} | Get an order by id
*OrderApi* | [**updateOrder**](docs/OrderApi.md#updateorder) | **PUT** /vbeta/order | Update an order
*OrderLineApi* | [**getOrderLineByFilter**](docs/OrderLineApi.md#getorderlinebyfilter) | **GET** /vbeta/orderLine/search | Search orderLines by filter
*OrderLineApi* | [**getOrderLineById**](docs/OrderLineApi.md#getorderlinebyid) | **GET** /vbeta/orderLine/{orderLineId} | Get an orderLine by id
*OrderLoadProgramApi* | [**getOrderLoadProgramBySearchText**](docs/OrderLoadProgramApi.md#getorderloadprogrambysearchtext) | **GET** /vbeta/orderLoadProgram/search | Search orderLoadPrograms
*OrderLoadProgramApi* | [**getReqLoadProgramById**](docs/OrderLoadProgramApi.md#getreqloadprogrambyid) | **GET** /vbeta/orderLoadProgram/{orderLoadProgramId} | Get an orderLoadProgram by id
*OrderSourceApi* | [**addOrderSource**](docs/OrderSourceApi.md#addordersource) | **POST** /vbeta/orderSource | Create an orderSource
*OrderSourceApi* | [**deleteOrderSource**](docs/OrderSourceApi.md#deleteordersource) | **DELETE** /vbeta/orderSource/{orderSourceId} | Delete an orderSource
*OrderSourceApi* | [**getOrderSourceByFilter**](docs/OrderSourceApi.md#getordersourcebyfilter) | **GET** /vbeta/orderSource/search | Search orderSources by filter
*OrderSourceApi* | [**getOrderSourceById**](docs/OrderSourceApi.md#getordersourcebyid) | **GET** /vbeta/orderSource/{orderSourceId} | Get an orderSource by id
*OrderSourceApi* | [**updateOrderSource**](docs/OrderSourceApi.md#updateordersource) | **PUT** /vbeta/orderSource | Update an orderSource
*OrderSourceReservationApi* | [**addOrderSourceReservation**](docs/OrderSourceReservationApi.md#addordersourcereservation) | **POST** /vbeta/orderSourceReservation | Create an orderSourceReservation
*OrderSourceReservationApi* | [**deleteOrderSourceReservation**](docs/OrderSourceReservationApi.md#deleteordersourcereservation) | **DELETE** /vbeta/orderSourceReservation/{orderSourceReservationId} | Delete an orderSourceReservation
*OrderSourceReservationApi* | [**getOrderSourceReservationByFilter**](docs/OrderSourceReservationApi.md#getordersourcereservationbyfilter) | **GET** /vbeta/orderSourceReservation/search | Search orderSourceReservations by filter
*OrderSourceReservationApi* | [**getOrderSourceReservationById**](docs/OrderSourceReservationApi.md#getordersourcereservationbyid) | **GET** /vbeta/orderSourceReservation/{orderSourceReservationId} | Get an orderSourceReservation by id
*OrderSourceReservationApi* | [**updateOrderSourceReservation**](docs/OrderSourceReservationApi.md#updateordersourcereservation) | **PUT** /vbeta/orderSourceReservation | Update an orderSourceReservation
*OverrideReturnAddressApi* | [**addOverrideReturnAddress**](docs/OverrideReturnAddressApi.md#addoverridereturnaddress) | **POST** /vbeta/overrideReturnAddress | Create an overrideReturnAddress
*OverrideReturnAddressApi* | [**deleteOverrideReturnAddress**](docs/OverrideReturnAddressApi.md#deleteoverridereturnaddress) | **DELETE** /vbeta/overrideReturnAddress/{overrideReturnAddressId} | Delete an overrideReturnAddress
*OverrideReturnAddressApi* | [**getOverrideReturnAddressByFilter**](docs/OverrideReturnAddressApi.md#getoverridereturnaddressbyfilter) | **GET** /vbeta/overrideReturnAddress/search | Search overrideReturnAddresses by filter
*OverrideReturnAddressApi* | [**getOverrideReturnAddressById**](docs/OverrideReturnAddressApi.md#getoverridereturnaddressbyid) | **GET** /vbeta/overrideReturnAddress/{overrideReturnAddressId} | Get an overrideReturnAddress by id
*OverrideReturnAddressApi* | [**updateOverrideReturnAddress**](docs/OverrideReturnAddressApi.md#updateoverridereturnaddress) | **PUT** /vbeta/overrideReturnAddress | Update an overrideReturnAddress
*ParcelAccountApi* | [**getParcelAccountByFilter**](docs/ParcelAccountApi.md#getparcelaccountbyfilter) | **GET** /vbeta/parcelAccount/search | Search parcelAccounts by filter
*ParcelAccountApi* | [**getParcelAccountById**](docs/ParcelAccountApi.md#getparcelaccountbyid) | **GET** /vbeta/parcelAccount/{parcelAccountId} | Get a parcelAccount by id
*ParcelShipmentApi* | [**getParcelShipmentByFilter**](docs/ParcelShipmentApi.md#getparcelshipmentbyfilter) | **GET** /vbeta/parcelShipment/search | Search parcelShipments by filter
*ParcelShipmentApi* | [**getParcelShipmentById**](docs/ParcelShipmentApi.md#getparcelshipmentbyid) | **GET** /vbeta/parcelShipment/{parcelShipmentId} | Get a parcelShipment by id
*PickFaceAssignmentApi* | [**addPickFaceAssignment**](docs/PickFaceAssignmentApi.md#addpickfaceassignment) | **POST** /vbeta/pickFaceAssignment | Create a pickFaceAssignment
*PickFaceAssignmentApi* | [**deletePickFaceAssignment**](docs/PickFaceAssignmentApi.md#deletepickfaceassignment) | **DELETE** /vbeta/pickFaceAssignment/{pickFaceAssignmentId} | Delete a pickFaceAssignment
*PickFaceAssignmentApi* | [**getPickFaceAssignmentByFilter**](docs/PickFaceAssignmentApi.md#getpickfaceassignmentbyfilter) | **GET** /vbeta/pickFaceAssignment/search | Search pickFaceAssignments by filter
*PickFaceAssignmentApi* | [**getPickFaceAssignmentById**](docs/PickFaceAssignmentApi.md#getpickfaceassignmentbyid) | **GET** /vbeta/pickFaceAssignment/{pickFaceAssignmentId} | Get a pickFaceAssignment by id
*PickFaceAssignmentApi* | [**updatePickFaceAssignment**](docs/PickFaceAssignmentApi.md#updatepickfaceassignment) | **PUT** /vbeta/pickFaceAssignment | Update a pickFaceAssignment
*ProductTypeApi* | [**getProductTypeById**](docs/ProductTypeApi.md#getproducttypebyid) | **GET** /vbeta/productType/{productTypeId} | Get a productType by id
*ProductTypeApi* | [**getProductTypeBySearchText**](docs/ProductTypeApi.md#getproducttypebysearchtext) | **GET** /vbeta/productType/search | Search productTypes
*ProductionLotApi* | [**getProductionLotByFilter**](docs/ProductionLotApi.md#getproductionlotbyfilter) | **GET** /vbeta/productionLot/search | Search productionLots by filter
*ProductionLotApi* | [**getProductionLotById**](docs/ProductionLotApi.md#getproductionlotbyid) | **GET** /vbeta/productionLot/{productionLotId} | Get a productionLot by id
*QuickAdjustmentApi* | [**addQuickAdjustment**](docs/QuickAdjustmentApi.md#addquickadjustment) | **POST** /vbeta/quickAdjustment | Create a quickAdjustment
*QuickAdjustmentApi* | [**deleteQuickAdjustment**](docs/QuickAdjustmentApi.md#deletequickadjustment) | **DELETE** /vbeta/quickAdjustment/{quickAdjustmentId} | Delete a quickAdjustment
*QuickAdjustmentApi* | [**getQuickAdjustmentByFilter**](docs/QuickAdjustmentApi.md#getquickadjustmentbyfilter) | **GET** /vbeta/quickAdjustment/search | Search quickAdjustments by filter
*QuickAdjustmentApi* | [**getQuickAdjustmentById**](docs/QuickAdjustmentApi.md#getquickadjustmentbyid) | **GET** /vbeta/quickAdjustment/{quickAdjustmentId} | Get a quickAdjustment by id
*QuickAdjustmentApi* | [**updateQuickAdjustment**](docs/QuickAdjustmentApi.md#updatequickadjustment) | **PUT** /vbeta/quickAdjustment | Update a quickAdjustment
*QuickReceiptApi* | [**addQuickReceipt**](docs/QuickReceiptApi.md#addquickreceipt) | **POST** /vbeta/quickReceipt | Create a quickReceipt
*QuickReceiptApi* | [**deleteQuickReceipt**](docs/QuickReceiptApi.md#deletequickreceipt) | **DELETE** /vbeta/quickReceipt/{quickReceiptId} | Delete a quickReceipt
*QuickReceiptApi* | [**getQuickReceiptByFilter**](docs/QuickReceiptApi.md#getquickreceiptbyfilter) | **GET** /vbeta/quickReceipt/search | Search quickReceipts by filter
*QuickReceiptApi* | [**getQuickReceiptById**](docs/QuickReceiptApi.md#getquickreceiptbyid) | **GET** /vbeta/quickReceipt/{quickReceiptId} | Get a quickReceipt by id
*QuickReceiptApi* | [**updateQuickReceipt**](docs/QuickReceiptApi.md#updatequickreceipt) | **PUT** /vbeta/quickReceipt | Update a quickReceipt
*ReceivingProcessApi* | [**deleteReceivingProcess**](docs/ReceivingProcessApi.md#deletereceivingprocess) | **DELETE** /vbeta/receivingProcess/{receivingProcessId} | Delete a receivingProcess
*ReceivingProcessApi* | [**getReceivingProcessByFilter**](docs/ReceivingProcessApi.md#getreceivingprocessbyfilter) | **GET** /vbeta/receivingProcess/search | Search receivingProcesses by filter
*ReceivingProcessApi* | [**getReceivingProcessById**](docs/ReceivingProcessApi.md#getreceivingprocessbyid) | **GET** /vbeta/receivingProcess/{receivingProcessId} | Get a receivingProcess by id
*ReceivingWorksheetApi* | [**addReceivingWorksheet**](docs/ReceivingWorksheetApi.md#addreceivingworksheet) | **POST** /vbeta/receivingWorksheet | Create a receivingWorksheet
*ReceivingWorksheetApi* | [**deleteReceivingWorksheet**](docs/ReceivingWorksheetApi.md#deletereceivingworksheet) | **DELETE** /vbeta/receivingWorksheet/{receivingWorksheetId} | Delete a receivingWorksheet
*ReceivingWorksheetApi* | [**getReceivingWorksheetByFilter**](docs/ReceivingWorksheetApi.md#getreceivingworksheetbyfilter) | **GET** /vbeta/receivingWorksheet/search | Search receivingWorksheets by filter
*ReceivingWorksheetApi* | [**getReceivingWorksheetById**](docs/ReceivingWorksheetApi.md#getreceivingworksheetbyid) | **GET** /vbeta/receivingWorksheet/{receivingWorksheetId} | Get a receivingWorksheet by id
*ReceivingWorksheetApi* | [**updateReceivingWorksheet**](docs/ReceivingWorksheetApi.md#updatereceivingworksheet) | **PUT** /vbeta/receivingWorksheet | Update a receivingWorksheet
*ReplenishmentApi* | [**getReplenishmentByFilter**](docs/ReplenishmentApi.md#getreplenishmentbyfilter) | **GET** /vbeta/replenishment/search | Search replenishments by filter
*ReplenishmentApi* | [**getReplenishmentById**](docs/ReplenishmentApi.md#getreplenishmentbyid) | **GET** /vbeta/replenishment/{replenishmentId} | Get a replenishment by id
*ReplenishmentPlanApi* | [**addReplenishmentPlan**](docs/ReplenishmentPlanApi.md#addreplenishmentplan) | **POST** /vbeta/replenishmentPlan | Create a replenishmentPlan
*ReplenishmentPlanApi* | [**deleteReplenishmentPlan**](docs/ReplenishmentPlanApi.md#deletereplenishmentplan) | **DELETE** /vbeta/replenishmentPlan/{replenishmentPlanId} | Delete a replenishmentPlan
*ReplenishmentPlanApi* | [**getReplenishmentPlanByFilter**](docs/ReplenishmentPlanApi.md#getreplenishmentplanbyfilter) | **GET** /vbeta/replenishmentPlan/search | Search replenishmentPlans by filter
*ReplenishmentPlanApi* | [**getReplenishmentPlanById**](docs/ReplenishmentPlanApi.md#getreplenishmentplanbyid) | **GET** /vbeta/replenishmentPlan/{replenishmentPlanId} | Get a replenishmentPlan by id
*ReplenishmentPlanApi* | [**updateReplenishmentPlan**](docs/ReplenishmentPlanApi.md#updatereplenishmentplan) | **PUT** /vbeta/replenishmentPlan | Update a replenishmentPlan
*ReplenishmentProcessApi* | [**getReplenishmentProcessByFilter**](docs/ReplenishmentProcessApi.md#getreplenishmentprocessbyfilter) | **GET** /vbeta/replenishmentProcess/search | Search replenishmentProcesses by filter
*ReplenishmentProcessApi* | [**getReplenishmentProcessById**](docs/ReplenishmentProcessApi.md#getreplenishmentprocessbyid) | **GET** /vbeta/replenishmentProcess/{replenishmentProcessId} | Get a replenishmentProcess by id
*ServiceTypeApi* | [**getServiceTypeById**](docs/ServiceTypeApi.md#getservicetypebyid) | **GET** /vbeta/serviceType/{serviceTypeId} | Get a serviceType by id
*ServiceTypeApi* | [**getServiceTypeBySearchText**](docs/ServiceTypeApi.md#getservicetypebysearchtext) | **GET** /vbeta/serviceType/search | Search serviceTypes
*ShoppingCartConnectionApi* | [**addShoppingCartConnection**](docs/ShoppingCartConnectionApi.md#addshoppingcartconnection) | **POST** /vbeta/shoppingCartConnection | Create a shoppingCartConnection
*ShoppingCartConnectionApi* | [**deleteShoppingCartConnection**](docs/ShoppingCartConnectionApi.md#deleteshoppingcartconnection) | **DELETE** /vbeta/shoppingCartConnection/{shoppingCartConnectionId} | Delete a shoppingCartConnection
*ShoppingCartConnectionApi* | [**getShoppingCartConnectionByFilter**](docs/ShoppingCartConnectionApi.md#getshoppingcartconnectionbyfilter) | **GET** /vbeta/shoppingCartConnection/search | Search shoppingCartConnections by filter
*ShoppingCartConnectionApi* | [**getShoppingCartConnectionById**](docs/ShoppingCartConnectionApi.md#getshoppingcartconnectionbyid) | **GET** /vbeta/shoppingCartConnection/{shoppingCartConnectionId} | Get a shoppingCartConnection by id
*ShoppingCartConnectionApi* | [**updateShoppingCartConnection**](docs/ShoppingCartConnectionApi.md#updateshoppingcartconnection) | **PUT** /vbeta/shoppingCartConnection | Update a shoppingCartConnection
*ThirdPartyParcelAccountApi* | [**addThirdPartyParcelAccount**](docs/ThirdPartyParcelAccountApi.md#addthirdpartyparcelaccount) | **POST** /vbeta/thirdPartyParcelAccount | Create a thirdPartyParcelAccount
*ThirdPartyParcelAccountApi* | [**deleteThirdPartyParcelAccount**](docs/ThirdPartyParcelAccountApi.md#deletethirdpartyparcelaccount) | **DELETE** /vbeta/thirdPartyParcelAccount/{thirdPartyParcelAccountId} | Delete a thirdPartyParcelAccount
*ThirdPartyParcelAccountApi* | [**getThirdPartyParcelAccountByFilter**](docs/ThirdPartyParcelAccountApi.md#getthirdpartyparcelaccountbyfilter) | **GET** /vbeta/thirdPartyParcelAccount/search | Search thirdPartyParcelAccounts by filter
*ThirdPartyParcelAccountApi* | [**getThirdPartyParcelAccountById**](docs/ThirdPartyParcelAccountApi.md#getthirdpartyparcelaccountbyid) | **GET** /vbeta/thirdPartyParcelAccount/{thirdPartyParcelAccountId} | Get a thirdPartyParcelAccount by id
*ThirdPartyParcelAccountApi* | [**updateThirdPartyParcelAccount**](docs/ThirdPartyParcelAccountApi.md#updatethirdpartyparcelaccount) | **PUT** /vbeta/thirdPartyParcelAccount | Update a thirdPartyParcelAccount
*UserApi* | [**getUserById**](docs/UserApi.md#getuserbyid) | **GET** /vbeta/user/{userId} | Get an user by id
*UserApi* | [**getUserBySearchText**](docs/UserApi.md#getuserbysearchtext) | **GET** /vbeta/user/search | Search users
*VendorApi* | [**addVendor**](docs/VendorApi.md#addvendor) | **POST** /vbeta/vendor | Create a vendor
*VendorApi* | [**deleteVendor**](docs/VendorApi.md#deletevendor) | **DELETE** /vbeta/vendor/{vendorId} | Delete a vendor
*VendorApi* | [**getVendorByFilter**](docs/VendorApi.md#getvendorbyfilter) | **GET** /vbeta/vendor/search | Search vendors by filter
*VendorApi* | [**getVendorById**](docs/VendorApi.md#getvendorbyid) | **GET** /vbeta/vendor/{vendorId} | Get a vendor by id
*VendorApi* | [**updateVendor**](docs/VendorApi.md#updatevendor) | **PUT** /vbeta/vendor | Update a vendor
*VendorComplianceSurveyApi* | [**addVendorComplianceSurvey**](docs/VendorComplianceSurveyApi.md#addvendorcompliancesurvey) | **POST** /vbeta/vendorComplianceSurvey | Create a vendorComplianceSurvey
*VendorComplianceSurveyApi* | [**deleteVendorComplianceSurvey**](docs/VendorComplianceSurveyApi.md#deletevendorcompliancesurvey) | **DELETE** /vbeta/vendorComplianceSurvey/{vendorComplianceSurveyId} | Delete a vendorComplianceSurvey
*VendorComplianceSurveyApi* | [**getVendorComplianceSurveyByFilter**](docs/VendorComplianceSurveyApi.md#getvendorcompliancesurveybyfilter) | **GET** /vbeta/vendorComplianceSurvey/search | Search vendorComplianceSurveys by filter
*VendorComplianceSurveyApi* | [**getVendorComplianceSurveyById**](docs/VendorComplianceSurveyApi.md#getvendorcompliancesurveybyid) | **GET** /vbeta/vendorComplianceSurvey/{vendorComplianceSurveyId} | Get a vendorComplianceSurvey by id
*VendorComplianceSurveyApi* | [**updateVendorComplianceSurvey**](docs/VendorComplianceSurveyApi.md#updatevendorcompliancesurvey) | **PUT** /vbeta/vendorComplianceSurvey | Update a vendorComplianceSurvey
*WarehouseApi* | [**getWarehouseByFilter**](docs/WarehouseApi.md#getwarehousebyfilter) | **GET** /vbeta/warehouse/search | Search warehouses by filter
*WarehouseApi* | [**getWarehouseById**](docs/WarehouseApi.md#getwarehousebyid) | **GET** /vbeta/warehouse/{warehouseId} | Get a warehouse by id
*WarehouseApi* | [**updateWarehouse**](docs/WarehouseApi.md#updatewarehouse) | **PUT** /vbeta/warehouse | Update a warehouse
*WarehouseDocumentApi* | [**getWarehouseDocumentByFilter**](docs/WarehouseDocumentApi.md#getwarehousedocumentbyfilter) | **GET** /vbeta/warehouseDocument/search | Search warehouseDocuments by filter
*WarehouseDocumentApi* | [**getWarehouseDocumentById**](docs/WarehouseDocumentApi.md#getwarehousedocumentbyid) | **GET** /vbeta/warehouseDocument/{warehouseDocumentId} | Get a warehouseDocument by id
*WarehouseDocumentTypeApi* | [**getWarehouseDocumentTypeByFilter**](docs/WarehouseDocumentTypeApi.md#getwarehousedocumenttypebyfilter) | **GET** /vbeta/warehouseDocumentType/search | Search warehouseDocumentTypes by filter
*WarehouseDocumentTypeApi* | [**getWarehouseDocumentTypeById**](docs/WarehouseDocumentTypeApi.md#getwarehousedocumenttypebyid) | **GET** /vbeta/warehouseDocumentType/{warehouseDocumentTypeId} | Get a warehouseDocumentType by id
*WorkApi* | [**getWorkByFilter**](docs/WorkApi.md#getworkbyfilter) | **GET** /vbeta/work/search | Search works by filter
*WorkApi* | [**getWorkById**](docs/WorkApi.md#getworkbyid) | **GET** /vbeta/work/{workId} | Get a work by id
*WorkBatchApi* | [**getWorkBatchByFilter**](docs/WorkBatchApi.md#getworkbatchbyfilter) | **GET** /vbeta/workBatch/search | Search workBatchs by filter
*WorkBatchApi* | [**getWorkBatchById**](docs/WorkBatchApi.md#getworkbatchbyid) | **GET** /vbeta/workBatch/{workBatchId} | Get a workBatch by id
*ZoneApi* | [**addZone**](docs/ZoneApi.md#addzone) | **POST** /vbeta/zone | Create a zone
*ZoneApi* | [**deleteZone**](docs/ZoneApi.md#deletezone) | **DELETE** /vbeta/zone/{zoneId} | Delete a zone
*ZoneApi* | [**getZoneByFilter**](docs/ZoneApi.md#getzonebyfilter) | **GET** /vbeta/zone/search | Search zones by filter
*ZoneApi* | [**getZoneById**](docs/ZoneApi.md#getzonebyid) | **GET** /vbeta/zone/{zoneId} | Get a zone by id
*ZoneApi* | [**updateZone**](docs/ZoneApi.md#updatezone) | **PUT** /vbeta/zone | Update a zone


## Documentation For Models

 - [Aisle](docs/Aisle.md)
 - [Alert](docs/Alert.md)
 - [ApiResponse](docs/ApiResponse.md)
 - [Asn](docs/Asn.md)
 - [BillOfLading](docs/BillOfLading.md)
 - [BillOfLadingCarrierbetaLine](docs/BillOfLadingCarrierbetaLine.md)
 - [BillOfLadingOrderbetaLine](docs/BillOfLadingOrderbetaLine.md)
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

api@betapluscommerce.com


