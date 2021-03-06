# swagger-client
The Hydrogen Integration API

This Python package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 1.2.1
- Package version: 1.0.0
- Build package: io.swagger.codegen.languages.PythonClientCodegen
For more information, please visit [https://www.hydrogenplatform.com/contact](https://www.hydrogenplatform.com/contact)

## Requirements.

Python 2.7 and 3.4+

### Update Base Path
Follow steps to verify the base URL path:
1. Go to configuration.py file located under integration_api folder.
2. Search for self.host and change/verify the URL according to the environment.
**Sandbox Base URL**
https://sandbox.hydrogenplatform.com/integration/v1
**Production Base URL**
https://api.hydrogenplatform.com/integration/v1

## Installation & Usage
### pip install

If the python package is hosted on Github, you can install directly from Github

```sh
pip install git+https://github.com//.git
```
(you may need to run `pip` with root permission: `sudo pip install git+https://github.com//.git`)

Then import the package:
```python
import integration_api 
```

### Setuptools

Install via [Setuptools](http://pypi.python.org/pypi/setuptools).

```sh
python setup.py install --user
```
(or `sudo python setup.py install` to install the package for all users)

Then import the package:
```python
import integration_api
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```python
from __future__ import print_function
import time
import integration_api
from integration_api.rest import ApiException
from pprint import pprint


# Configure OAuth2 access token for authorization: oauth2
configuration = integration_api.Configuration()

# create an instance of the API class
api_instance = integration_api.AuthApi(integration_api.ApiClient(configuration))

#api_token_response = api_instance.create_using_post_client_credentials("client_id", "password")

# OR

#api_token_response = api_instance.create_using_post_password_credentials("client_id","password", "username", "secret" )

configuration.access_token = api_token_response.access_token

# create an instance of the API class
api_instance = integration_api.AggregationApi(integration_api.ApiClient(configuration))
aggregation_request_object = integration_api.AggregationRequestObject() # AggregationRequestObject | aggregationRequestObject

try:
    # Create mapping between client,vendor,tenant
    api_response = api_instance.create_aggregation_account_using_post(aggregation_request_object)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling AggregationApi->create_aggregation_account_using_post: %s\n" % e)

```

## Documentation for API Endpoints

All URIs are relative to *https://sandbox.hydrogenplatform.com/integration/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AggregationApi* | [**create_aggregation_account_using_post**](docs/AggregationApi.md#create_aggregation_account_using_post) | **POST** /aggregation/account | Create mapping between client,vendor,tenant
*AggregationApi* | [**create_property_value_using_post**](docs/AggregationApi.md#create_property_value_using_post) | **POST** /property_value | Create mapping between client,vendor,tenant for the property
*AggregationApi* | [**delete_aggregation_account_using_delete**](docs/AggregationApi.md#delete_aggregation_account_using_delete) | **DELETE** /aggregation/account/{nucleus_aggregation_account_id} | De-Link mapping between client,vendor,tenant
*AggregationApi* | [**get_aggregation_account_all_using_get**](docs/AggregationApi.md#get_aggregation_account_all_using_get) | **GET** /aggregation/account | Fetch all aggregation account(s) details with the mapping created in POST endpoint for a client
*AggregationApi* | [**get_aggregation_account_balance_all_using_get**](docs/AggregationApi.md#get_aggregation_account_balance_all_using_get) | **GET** /aggregation/balance | Fetch all aggregation account balance details with for the given aggregation accounts 
*AggregationApi* | [**get_aggregation_account_balance_using_get**](docs/AggregationApi.md#get_aggregation_account_balance_using_get) | **GET** /aggregation/balance/{nucleus_aggregation_account_id} | Fetch aggregation account balance details with the mapping created in POST endpoint
*AggregationApi* | [**get_aggregation_account_holding_all_using_get**](docs/AggregationApi.md#get_aggregation_account_holding_all_using_get) | **GET** /aggregation/holding | Fetch all aggregation account(s) holding details with the mapping created in POST endpoint
*AggregationApi* | [**get_aggregation_account_holding_using_get**](docs/AggregationApi.md#get_aggregation_account_holding_using_get) | **GET** /aggregation/holding/{nucleus_aggregation_account_id} | Fetch aggregation account holding details with the mapping created in POST endpoint
*AggregationApi* | [**get_aggregation_account_transaction_all_using_get**](docs/AggregationApi.md#get_aggregation_account_transaction_all_using_get) | **GET** /aggregation/transaction | Fetch all aggregation account balance details with for the given aggregation accounts 
*AggregationApi* | [**get_aggregation_account_transaction_using_get**](docs/AggregationApi.md#get_aggregation_account_transaction_using_get) | **GET** /aggregation/transaction/{nucleus_aggregation_account_id} | Fetch aggregation account transaction details with the mapping created in POST endpoint
*AggregationApi* | [**get_aggregation_account_using_get**](docs/AggregationApi.md#get_aggregation_account_using_get) | **GET** /aggregation/account/{nucleus_aggregation_account_id} | Fetch aggregation account details with the mapping created in POST endpoint
*AuditLogApi* | [**get_audit_log_all_using_get**](docs/AuditLogApi.md#get_audit_log_all_using_get) | **GET** /audit_log | Gel all audit log
*BaasApi* | [**create_baas_account_using_post**](docs/BaasApi.md#create_baas_account_using_post) | **POST** /baas/account | create a Baas account
*BaasApi* | [**create_baas_client_using_post**](docs/BaasApi.md#create_baas_client_using_post) | **POST** /baas/client | Create a Baas Client
*BaasApi* | [**create_baas_sub_account_using_post**](docs/BaasApi.md#create_baas_sub_account_using_post) | **POST** /baas/subaccount | create a Baas subaccount
*BaasApi* | [**get_baas_account_statement_using_get**](docs/BaasApi.md#get_baas_account_statement_using_get) | **GET** /baas/statement/{nucleus_account_id} | Get a Baas account statement
*BaasApi* | [**get_baas_portfolio_balance_using_get**](docs/BaasApi.md#get_baas_portfolio_balance_using_get) | **GET** /baas/balance/{nucleus_portfolio_id} | Get a Baas portfolio balance
*BaasApi* | [**get_baas_portfolio_transaction_using_get**](docs/BaasApi.md#get_baas_portfolio_transaction_using_get) | **GET** /baas/transaction/{nucleus_portfolio_id} | Get a Baas portfolio transaction
*BaasApi* | [**update_baas_client_using_put**](docs/BaasApi.md#update_baas_client_using_put) | **PUT** /baas/client | Update a Baas client
*BrokerageApi* | [**create_bank_link_using_post**](docs/BrokerageApi.md#create_bank_link_using_post) | **POST** /brokerage/bank_link | create a Bank Link
*BrokerageApi* | [**create_brokerage_account_using_post**](docs/BrokerageApi.md#create_brokerage_account_using_post) | **POST** /brokerage/account | create a Brokerage account
*BrokerageApi* | [**create_brokerage_client_using_post**](docs/BrokerageApi.md#create_brokerage_client_using_post) | **POST** /brokerage/client | Create a Brokerage Client
*BrokerageApi* | [**create_order_using_post**](docs/BrokerageApi.md#create_order_using_post) | **POST** /brokerage/order | Create an Order
*BrokerageApi* | [**delete_bank_link_using_delete**](docs/BrokerageApi.md#delete_bank_link_using_delete) | **DELETE** /brokerage/bank_link/{nucleus_bank_link_id} | Delete a Bank Link
*BrokerageApi* | [**delete_order_using_delete**](docs/BrokerageApi.md#delete_order_using_delete) | **DELETE** /brokerage/order | Delete an Order
*BrokerageApi* | [**get_bank_link_using_get**](docs/BrokerageApi.md#get_bank_link_using_get) | **GET** /brokerage/bank_link/{nucleus_bank_link_id} | Get a Bank Link
*BrokerageApi* | [**get_brokerage_account_statement_using_get**](docs/BrokerageApi.md#get_brokerage_account_statement_using_get) | **GET** /brokerage/{nucleus_account_id}/statement | Get a Brokerage account statement
*BrokerageApi* | [**get_order_using_get**](docs/BrokerageApi.md#get_order_using_get) | **GET** /brokerage/order | Get an Order
*BrokerageApi* | [**update_bank_link_using_put**](docs/BrokerageApi.md#update_bank_link_using_put) | **PUT** /brokerage/bank_link/{nucleus_bank_link_id} | Update a Bank Link
*BrokerageApi* | [**update_brokerage_client_using_put**](docs/BrokerageApi.md#update_brokerage_client_using_put) | **PUT** /brokerage/client | Update a Brokerage client
*CardApi* | [**create_card_activate_using_post**](docs/CardApi.md#create_card_activate_using_post) | **POST** /card/activate | Activate card
*CardApi* | [**create_card_close_using_post**](docs/CardApi.md#create_card_close_using_post) | **POST** /card/close | close a card
*CardApi* | [**create_card_issue_using_post**](docs/CardApi.md#create_card_issue_using_post) | **POST** /card/issue | issue a card
*CardApi* | [**create_card_pin_using_post**](docs/CardApi.md#create_card_pin_using_post) | **POST** /card/pin | pin card
*CardApi* | [**create_card_reactivate_using_post**](docs/CardApi.md#create_card_reactivate_using_post) | **POST** /card/reactivate | reactivate card
*CardApi* | [**create_card_reissue_using_post**](docs/CardApi.md#create_card_reissue_using_post) | **POST** /card/reissue | Reissue a card
*CardApi* | [**create_card_reload_using_post**](docs/CardApi.md#create_card_reload_using_post) | **POST** /card/reload | Create a card reload
*CardApi* | [**create_card_suspend_using_post**](docs/CardApi.md#create_card_suspend_using_post) | **POST** /card/suspend | suspend card
*CardApi* | [**create_card_token_using_post**](docs/CardApi.md#create_card_token_using_post) | **POST** /card/token | token card
*CardApi* | [**create_card_transfer_using_post**](docs/CardApi.md#create_card_transfer_using_post) | **POST** /card/transfer | Create Card transfer
*CardApi* | [**create_card_unload_using_post**](docs/CardApi.md#create_card_unload_using_post) | **POST** /card/unload | Create a card upload
*CardApi* | [**create_client_card_using_post**](docs/CardApi.md#create_client_card_using_post) | **POST** /card/client | Create a card client
*CardApi* | [**get_card_balance_using_get**](docs/CardApi.md#get_card_balance_using_get) | **GET** /card/balance/{id} | Get a Card Balance
*CardApi* | [**get_card_token_using_token**](docs/CardApi.md#get_card_token_using_token) | **GET** /card/token/{id} | Get a card token
*CardApi* | [**get_card_transaction_using_get**](docs/CardApi.md#get_card_transaction_using_get) | **GET** /card/transaction/{id} | Get a card transaction
*CardApi* | [**get_card_using_get**](docs/CardApi.md#get_card_using_get) | **GET** /card/{id} | Get a card information
*CardApi* | [**update_card_pin_using_post**](docs/CardApi.md#update_card_pin_using_post) | **PUT** /card/pin/{id} | update a pin card
*CardApi* | [**update_card_using_put**](docs/CardApi.md#update_card_using_put) | **PUT** /card/{id} | Update a card information
*IAVApi* | [**create_iav_using_post**](docs/IAVApi.md#create_iav_using_post) | **POST** /iav | Instant Account Verification of an account.
*IAVApi* | [**get_iav_using_get**](docs/IAVApi.md#get_iav_using_get) | **GET** /iav/{nucleus_bank_link_id} | Get verified account based on id.
*KMSApi* | [**create_kms_using_post**](docs/KMSApi.md#create_kms_using_post) | **POST** /kms | Create an secret key
*KMSApi* | [**delete_kms_using_delete**](docs/KMSApi.md#delete_kms_using_delete) | **DELETE** /kms/{kms_id} | Delete an secret key value
*KMSApi* | [**get_kms_all_using_get**](docs/KMSApi.md#get_kms_all_using_get) | **GET** /kms | List all KMS Clients
*KMSApi* | [**get_kms_using_get**](docs/KMSApi.md#get_kms_using_get) | **GET** /kms/{kms_id} | Retrieve an secret key value
*KMSApi* | [**update_kms_using_put**](docs/KMSApi.md#update_kms_using_put) | **PUT** /kms/{kms_id} | Update an Key Value
*KYCApi* | [**create_kyc_using_post**](docs/KYCApi.md#create_kyc_using_post) | **POST** /kyc | Do kyc for the client.
*KYCApi* | [**get_kyc_status_using_get**](docs/KYCApi.md#get_kyc_status_using_get) | **GET** /kyc_status/{nucleus_client_id} | Fetch kyc_status for the given nucleus_client_id
*MarketDataApi* | [**create_market_data_historical_using_post**](docs/MarketDataApi.md#create_market_data_historical_using_post) | **POST** /market_data/historical | Create historical market data
*MarketDataApi* | [**create_market_data_quote_using_post**](docs/MarketDataApi.md#create_market_data_quote_using_post) | **POST** /market_data/quote | Create quote market data
*UtilsApi* | [**create_token_exchange_using_post**](docs/UtilsApi.md#create_token_exchange_using_post) | **POST** /token_exchange | Retrieve token based on certain vendor specific value
*UtilsApi* | [**create_user_using_post**](docs/UtilsApi.md#create_user_using_post) | **POST** /user | Create user in vendor
*UtilsApi* | [**get_widget_link_using_get**](docs/UtilsApi.md#get_widget_link_using_get) | **GET** /widget_link/{nucleus_client_id} | Retrieve widget link
*WebhookApi* | [**create_webhook_using_post**](docs/WebhookApi.md#create_webhook_using_post) | **POST** /webhook | Create a webhook
*WebhookApi* | [**delete_webhook_using_delete**](docs/WebhookApi.md#delete_webhook_using_delete) | **DELETE** /webhook/{webhook_id} | Delete a webhook
*WebhookApi* | [**get_webhook_all_using_get**](docs/WebhookApi.md#get_webhook_all_using_get) | **GET** /webhook | List all webhooks
*WebhookApi* | [**get_webhook_using_get**](docs/WebhookApi.md#get_webhook_using_get) | **GET** /webhook/{webhook_id} | Retrieve a webhook
*WebhookApi* | [**update_webhook_using_put**](docs/WebhookApi.md#update_webhook_using_put) | **PUT** /webhook/{webhook_id} | Update a webhook


## Documentation For Models

 - [Address](docs/Address.md)
 - [AggregationAccount](docs/AggregationAccount.md)
 - [AggregationAccountBalance](docs/AggregationAccountBalance.md)
 - [AggregationAccountBalanceResponseVO](docs/AggregationAccountBalanceResponseVO.md)
 - [AggregationAccountHolding](docs/AggregationAccountHolding.md)
 - [AggregationAccountHoldingResponseInternalObjectVO](docs/AggregationAccountHoldingResponseInternalObjectVO.md)
 - [AggregationAccountHoldingResponseVO](docs/AggregationAccountHoldingResponseVO.md)
 - [AggregationAccountResponseInternalObjectVO](docs/AggregationAccountResponseInternalObjectVO.md)
 - [AggregationAccountResponseVO](docs/AggregationAccountResponseVO.md)
 - [AggregationAccountTransaction](docs/AggregationAccountTransaction.md)
 - [AggregationAccountTransactionResponseInternalObjectVO](docs/AggregationAccountTransactionResponseInternalObjectVO.md)
 - [AggregationAccountTransactionResponseVO](docs/AggregationAccountTransactionResponseVO.md)
 - [AggregationAccountsResponseVO](docs/AggregationAccountsResponseVO.md)
 - [AggregationRequestObject](docs/AggregationRequestObject.md)
 - [AggregationVendorRequestCO](docs/AggregationVendorRequestCO.md)
 - [ApplePayload](docs/ApplePayload.md)
 - [BaasAccountCO](docs/BaasAccountCO.md)
 - [BaasAccountVO](docs/BaasAccountVO.md)
 - [BaasBalanceVO](docs/BaasBalanceVO.md)
 - [BaasClientCO](docs/BaasClientCO.md)
 - [BaasClientVO](docs/BaasClientVO.md)
 - [BaasClientVendorDataVO](docs/BaasClientVendorDataVO.md)
 - [BaasStatementVO](docs/BaasStatementVO.md)
 - [BaasStatementsVO](docs/BaasStatementsVO.md)
 - [BaasSubAccountCO](docs/BaasSubAccountCO.md)
 - [BaasSubAccountVO](docs/BaasSubAccountVO.md)
 - [BaasTransactionsVO](docs/BaasTransactionsVO.md)
 - [BankCredit](docs/BankCredit.md)
 - [BankLink](docs/BankLink.md)
 - [BankLinkResponseInternalObjectVO](docs/BankLinkResponseInternalObjectVO.md)
 - [BaseDocument](docs/BaseDocument.md)
 - [BaseResponseVO](docs/BaseResponseVO.md)
 - [BrokerageAccountCO](docs/BrokerageAccountCO.md)
 - [BrokerageAccountVO](docs/BrokerageAccountVO.md)
 - [BrokerageBankLinkCO](docs/BrokerageBankLinkCO.md)
 - [BrokerageBankLinkVO](docs/BrokerageBankLinkVO.md)
 - [BrokerageClientCO](docs/BrokerageClientCO.md)
 - [BrokerageCreateClientVO](docs/BrokerageCreateClientVO.md)
 - [BrokerageStatementVO](docs/BrokerageStatementVO.md)
 - [BrokerageUpdateClientVO](docs/BrokerageUpdateClientVO.md)
 - [CardBalanceResponseVO](docs/CardBalanceResponseVO.md)
 - [CardBaseRequestCO](docs/CardBaseRequestCO.md)
 - [CardClientRequestCO](docs/CardClientRequestCO.md)
 - [CardClientResponseVO](docs/CardClientResponseVO.md)
 - [CardPinRequestCO](docs/CardPinRequestCO.md)
 - [CardReloadRequestCO](docs/CardReloadRequestCO.md)
 - [CardReloadUnloadResponseVO](docs/CardReloadUnloadResponseVO.md)
 - [CardTokenRequestCO](docs/CardTokenRequestCO.md)
 - [CardTokenResponseVO](docs/CardTokenResponseVO.md)
 - [CardTransactionResponseVO](docs/CardTransactionResponseVO.md)
 - [CardTransferRequestCO](docs/CardTransferRequestCO.md)
 - [CardTransferResponseVO](docs/CardTransferResponseVO.md)
 - [CardUnloadRequestCO](docs/CardUnloadRequestCO.md)
 - [Cash](docs/Cash.md)
 - [ClientAddress](docs/ClientAddress.md)
 - [CreateClientResponse](docs/CreateClientResponse.md)
 - [CreateOrderResponse](docs/CreateOrderResponse.md)
 - [CreateUserRequest](docs/CreateUserRequest.md)
 - [DigitalDocumentData](docs/DigitalDocumentData.md)
 - [ExchangePublicTokenVO](docs/ExchangePublicTokenVO.md)
 - [ExchangeTokenCO](docs/ExchangeTokenCO.md)
 - [ExpandedProperty](docs/ExpandedProperty.md)
 - [GetCardTokenResponseVO](docs/GetCardTokenResponseVO.md)
 - [GetOrderResponse](docs/GetOrderResponse.md)
 - [GooglePayload](docs/GooglePayload.md)
 - [IavAggregationResponseVo](docs/IavAggregationResponseVo.md)
 - [IavBankLinkResponseVo](docs/IavBankLinkResponseVo.md)
 - [IavRequestCO](docs/IavRequestCO.md)
 - [IavResponseVo](docs/IavResponseVo.md)
 - [IavTokenExchangeVendorResponseVO](docs/IavTokenExchangeVendorResponseVO.md)
 - [IavVendorRequestCO](docs/IavVendorRequestCO.md)
 - [Identification](docs/Identification.md)
 - [Investment](docs/Investment.md)
 - [JsonNode](docs/JsonNode.md)
 - [KmsConfig](docs/KmsConfig.md)
 - [KycRequestCO](docs/KycRequestCO.md)
 - [KycResponseVo](docs/KycResponseVo.md)
 - [KycVendorRequestDataVO](docs/KycVendorRequestDataVO.md)
 - [Location](docs/Location.md)
 - [Mapstringobject](docs/Mapstringobject.md)
 - [MdHistoryItemVO](docs/MdHistoryItemVO.md)
 - [MdHistoryRequestCO](docs/MdHistoryRequestCO.md)
 - [MdHistoryResponseVO](docs/MdHistoryResponseVO.md)
 - [MdQuoteItemVO](docs/MdQuoteItemVO.md)
 - [MdQuoteRequestCO](docs/MdQuoteRequestCO.md)
 - [MdQuoteResponseVO](docs/MdQuoteResponseVO.md)
 - [NucleusTransferFieldsCO](docs/NucleusTransferFieldsCO.md)
 - [PageKmsConfig](docs/PageKmsConfig.md)
 - [PageWebhook](docs/PageWebhook.md)
 - [Pageobject](docs/Pageobject.md)
 - [ParentIB](docs/ParentIB.md)
 - [PoliticallyExposedPersonDTO](docs/PoliticallyExposedPersonDTO.md)
 - [PropertyValueResponseVO](docs/PropertyValueResponseVO.md)
 - [ResponseEntity](docs/ResponseEntity.md)
 - [SamsungPayload](docs/SamsungPayload.md)
 - [Sort](docs/Sort.md)
 - [StatementModel](docs/StatementModel.md)
 - [StatusMessage](docs/StatusMessage.md)
 - [UpdateClientResponse](docs/UpdateClientResponse.md)
 - [UserResponseInterface](docs/UserResponseInterface.md)
 - [UserResponseVO](docs/UserResponseVO.md)
 - [Webhook](docs/Webhook.md)
 - [WidgetUrlVO](docs/WidgetUrlVO.md)
 - [ZillowPropertyVendorResponseVO](docs/ZillowPropertyVendorResponseVO.md)


## Documentation For Authorization


## oauth2

- **Type**: OAuth
- **Flow**: application
- **Authorization URL**: 
- **Scopes**: N/A


## Author

info@hydrogenplatform.com

