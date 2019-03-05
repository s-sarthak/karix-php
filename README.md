# karix-php
[![Build Status](https://travis-ci.org/karixtech/karix-php.svg?branch=v2)](https://travis-ci.org/karixtech/karix-php) [![Coverage Status](https://coveralls.io/repos/github/karixtech/karix-php/badge.svg?branch=v2)](https://coveralls.io/github/karixtech/karix-php?branch=v2)

Karix API lets you interact with the Karix platform using an omnichannel messaging API. It also allows you to query your account, set up webhooks and buy phone numbers.

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 2.0
- Package version: 2.0.0
- Build package: io.swagger.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.6 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/karixtech/karix-php.git"
    }
  ],
  "require": {
    "karixtech/karix-php": "2.0.0"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/karix-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Karix\Configuration::getDefaultConfiguration()
    ->setUsername('YOUR_USERNAME')
    ->setPassword('YOUR_PASSWORD');

$apiInstance = new Karix\Api\MessageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
date_default_timezone_set('UTC');
// Create Message object
$message = (new \Karix\Model\CreateMessage())
    ->setChannel("sms") //Or use "whatsapp"
    ->setSource("+1XXX2321XXX")
    ->setDestination(["+1XXX8323XXX", "+1XXX3234XXX"])
    ->setContent(["text" => "Sent from Karix PHP SDK"]);

try {
    $result = $apiInstance->sendMessage($message);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageApi->sendMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

## Documentation for API Endpoints

All URIs are relative to *https://api.karix.io*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AccountsApi* | [**createSubaccount**](docs/Api/AccountsApi.md#createsubaccount) | **POST** /account/ | Create a new subaccount
*AccountsApi* | [**getSubaccount**](docs/Api/AccountsApi.md#getsubaccount) | **GET** /account/ | Get a list of accounts
*AccountsApi* | [**getSubaccountById**](docs/Api/AccountsApi.md#getsubaccountbyid) | **GET** /account/{uid}/ | Get details of an account
*AccountsApi* | [**patchSubaccount**](docs/Api/AccountsApi.md#patchsubaccount) | **PATCH** /account/{uid}/ | Edit an account
*MessageApi* | [**getMessage**](docs/Api/MessageApi.md#getmessage) | **GET** /message/ | Get list of messages sent or received
*MessageApi* | [**getMessageById**](docs/Api/MessageApi.md#getmessagebyid) | **GET** /message/{uid}/ | Get message details by id.
*MessageApi* | [**sendMessage**](docs/Api/MessageApi.md#sendmessage) | **POST** /message/ | Send a message to a list of destinations
*NumberApi* | [**deleteNumber**](docs/Api/NumberApi.md#deletenumber) | **DELETE** /number/{num}/ | Unrent number from your account
*NumberApi* | [**getNumber**](docs/Api/NumberApi.md#getnumber) | **GET** /number/ | Get details of all phone numbers linked to your account.
*NumberApi* | [**getNumberDetails**](docs/Api/NumberApi.md#getnumberdetails) | **GET** /number/{num}/ | Get details of a number
*NumberApi* | [**patchNumberDetails**](docs/Api/NumberApi.md#patchnumberdetails) | **PATCH** /number/{num}/ | Edit phone number belonging to your account
*NumberApi* | [**rentNumber**](docs/Api/NumberApi.md#rentnumber) | **POST** /number/ | Rent a phone number
*NumberSearchApi* | [**searchNumber**](docs/Api/NumberSearchApi.md#searchnumber) | **GET** /numbersearch/ | Query for phone numbers in our inventory.
*WebhookApi* | [**createWebhook**](docs/Api/WebhookApi.md#createwebhook) | **POST** /webhook/ | Create webhooks to receive Message
*WebhookApi* | [**deleteWebhookById**](docs/Api/WebhookApi.md#deletewebhookbyid) | **DELETE** /webhook/{uid}/ | Delete a webhook by ID
*WebhookApi* | [**getWebhook**](docs/Api/WebhookApi.md#getwebhook) | **GET** /webhook/ | Get a list of your webhooks
*WebhookApi* | [**getWebhookById**](docs/Api/WebhookApi.md#getwebhookbyid) | **GET** /webhook/{uid}/ | Get a webhook by ID
*WebhookApi* | [**patchWebhook**](docs/Api/WebhookApi.md#patchwebhook) | **PATCH** /webhook/{uid}/ | Edit a webhook


## Documentation For Models

 - [AccountListResponse](docs/Model/AccountListResponse.md)
 - [AccountNumberListResponse](docs/Model/AccountNumberListResponse.md)
 - [AccountNumberResponse](docs/Model/AccountNumberResponse.md)
 - [AccountResponse](docs/Model/AccountResponse.md)
 - [CreateAccount](docs/Model/CreateAccount.md)
 - [CreateMessage](docs/Model/CreateMessage.md)
 - [CreateMessageContent](docs/Model/CreateMessageContent.md)
 - [CreateMessageContentLocation](docs/Model/CreateMessageContentLocation.md)
 - [CreateWebhook](docs/Model/CreateWebhook.md)
 - [EditAccount](docs/Model/EditAccount.md)
 - [EditAccountNumber](docs/Model/EditAccountNumber.md)
 - [EditWebhook](docs/Model/EditWebhook.md)
 - [ErrorResponse](docs/Model/ErrorResponse.md)
 - [ErrorResponseError](docs/Model/ErrorResponseError.md)
 - [InsufficientBalanceResponse](docs/Model/InsufficientBalanceResponse.md)
 - [InsufficientBalanceResponseError](docs/Model/InsufficientBalanceResponseError.md)
 - [Message](docs/Model/Message.md)
 - [MessageChannelDetails](docs/Model/MessageChannelDetails.md)
 - [MessageChannelDetailsSms](docs/Model/MessageChannelDetailsSms.md)
 - [MessageChannelDetailsWhatsapp](docs/Model/MessageChannelDetailsWhatsapp.md)
 - [MessageContent](docs/Model/MessageContent.md)
 - [MessageContentLocation](docs/Model/MessageContentLocation.md)
 - [MessageCreatedResponse](docs/Model/MessageCreatedResponse.md)
 - [MessageError](docs/Model/MessageError.md)
 - [MessageListResponse](docs/Model/MessageListResponse.md)
 - [MessageResponse](docs/Model/MessageResponse.md)
 - [MetaResponse](docs/Model/MetaResponse.md)
 - [NotFoundResponse](docs/Model/NotFoundResponse.md)
 - [NotFoundResponseError](docs/Model/NotFoundResponseError.md)
 - [NumberRentedResponse](docs/Model/NumberRentedResponse.md)
 - [PhoneNumber](docs/Model/PhoneNumber.md)
 - [PhoneNumberListResponse](docs/Model/PhoneNumberListResponse.md)
 - [PhoneNumberRate](docs/Model/PhoneNumberRate.md)
 - [PhoneNumberRegion](docs/Model/PhoneNumberRegion.md)
 - [PhoneNumberService](docs/Model/PhoneNumberService.md)
 - [RentNumber](docs/Model/RentNumber.md)
 - [UnauthorizedResponse](docs/Model/UnauthorizedResponse.md)
 - [UnauthorizedResponseError](docs/Model/UnauthorizedResponseError.md)
 - [WebhookListResponse](docs/Model/WebhookListResponse.md)
 - [WebhookResponse](docs/Model/WebhookResponse.md)
 - [Account](docs/Model/Account.md)
 - [AccountNumber](docs/Model/AccountNumber.md)
 - [ArrayMetaResponse](docs/Model/ArrayMetaResponse.md)
 - [MetaResponseWithBalance](docs/Model/MetaResponseWithBalance.md)
 - [ObjectMetaResponse](docs/Model/ObjectMetaResponse.md)
 - [Webhook](docs/Model/Webhook.md)


## Documentation For Authorization


## basicAuth

- **Type**: HTTP basic authentication


## Author

support@karix.io


