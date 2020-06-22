# ethos-php

A PHP library to interact with the Ellucian Ethos API.

[![License](https://img.shields.io/badge/license-MIT-blue)](https://raw.githubusercontent.com/MelonSmasher/ethos-php/master/LICENSE)
[![GitHub issues](https://img.shields.io/github/issues/MelonSmasher/ethos-php)](https://github.com/MelonSmasher/ethos-php/issues)
![GitHub top language](https://img.shields.io/github/languages/top/MelonSmasher/ethos-php)
![Codacy grade](https://img.shields.io/codacy/grade/921b4278b9af4971b4003c874a52abdf)

----

## Installation

```bash
composer require melonsmasher/ethos-php
```

## API Docs

Complete API docs can be [found here](https://melonsmasher.github.io/ethos-php/docs/).

## Features

As of now `ethos-php` has support for `316` models/routes. It supports nearly all Banner & Colleague models with the following feature set.

*  A fluent API allowing for methods to be chained to improve readability.
*  Convenience methods that return the response data as an object: `data()`, as an array: `toArray()`, and as a JSON string: `toJson()`. 
*  Simple control over API pagination. Max ten items returned per-page.
*  Automatic re-authentication when a session expires.
*  Support for Banner and Colleague backends.
*  Automatically versioned API calls.
*  Control over request params and headers.
*  Class level awareness of Ethos CRUD support.
*  Support for ID based routes. E.G. `/api/persons/35b16136-bafd-4b5d-9dd2-995ad9f4ba00`

## Features To Come

*  Pub/Sub support
    *  Support for the `/consume` message queue route.
    *  Support for the `/publish` message queue route.

## Usage/Examples

The example below demonstrates the fluent API, convenience methods, and control over pagination.

```php
<?php

include_once 'vendor/autoload.php';

use MelonSmasher\EthosPHP\EthosClient;
use MelonSmasher\EthosPHP\Foundation\PersonsClient;

// Your API Key / Refresh Token
$secret = 'YourApiKey/RefreshToken';
// Create an authenticated Ethos session
$ethos = EthosClient::createSession($secret);
// Create a new Persons client using your Ethos session
$personsClient = new PersonsClient($ethos);
// Read the first page of persons
$page1 = $personsClient->read()->data();
// Move to the next page
$personsClient->nextPage();
// Read the second page
$page2 = $personsClient->read()->data();
// Set the page to the fourth page
$personsClient->setPage(4);
// Read the 4th page to an array
$page4 = $personsClient->read()->toArray();
// Move 1 page back to the 3rd
$personsClient->backPage();
// Read the 3rd page to a JSON string
$page3 = $personsClient->read()->toJson();
// Skip to the 6th page
$personsClient->nextPage(4);
// Read the 7th page
$page7 = $personsClient->read()->data();
// Skip back to the 5th page
$personsClient->backPage(2);
// Read the 5th page
$page5 = $personsClient->read()->data();
```

The example below demonstrates the ability to provide custom request parameters.

```php
<?php

include_once 'vendor/autoload.php';

use MelonSmasher\EthosPHP\EthosClient;
use MelonSmasher\EthosPHP\Foundation\PersonsClient;

// Your API Key / Refresh Token
$secret = 'YourApiKey/RefreshToken';
// Create an authenticated Ethos session
$ethos = EthosClient::createSession($secret);
// Create a new Persons client using your Ethos session
$personsClient = new PersonsClient($ethos);
// Send a request with the `criteria` parameter filtering for a person with a colleaguePersonId of 9000001.
$data = $personsClient->read([
    'criteria' => '{"credentials":[{"type":"colleaguePersonId","value":"9000001"}]}'
])->data();      
```

## Dev Setup

Install [PHIVE](https://phar.io/)

Install build tools

```bash
phive install
```

Install composer requirements

```bash
./composer install
```
