# NeutrinoAPI SDK

[![License: MIT](https://img.shields.io/badge/License-MIT-blue.svg)](LICENSE.md)

Unofficial PHP SDK for the NeutrinoAPI web services (phone, email, IP, URL and other validation and lookup APIs).
The code in `src/` is **generated** from `contract/` by [sdk-generator](https://github.com/dmorenof/sdk-generator) and runs on
[sdk-runtime](https://github.com/dmorenof/sdk-runtime): typed models and collections, one exception type per kind of failure. Nothing in `src/` is edited by hand.

## Installation

PHP 8.4 or later.

```bash
composer require dmorenof/neutrinoapi-sdk
```

## Setup

```php
use NeutrinoAPISDK\Configuration;
use NeutrinoAPISDK\NeutrinoAPISDK;

$configuration = new Configuration();
$configuration->securityCredentials = new SecurityCredentials(['user-id' => $userId, 'api-key' => $apiKey]);
NeutrinoAPISDK::configure($configuration);
```

`Configuration` also takes `httpClient` (any PSR-18 client), `middleware`, `retryPolicy` and `redirectPolicy`. The operations are the classes and resources under `src/`; the contract they follow is in `contract/`.

## License

MIT (see [LICENSE.md](LICENSE.md)). See [NOTICE.md](NOTICE.md) for the status of the API itself.
