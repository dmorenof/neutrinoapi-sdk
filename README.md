# NeutrinoAPI SDK for PHP

[![License: MIT](https://img.shields.io/badge/License-MIT-blue.svg)](LICENSE.md)
[![PHP 8.4+](https://img.shields.io/badge/PHP-8.4%2B-777bb4.svg)](composer.json)
[![PHPStan level max](https://img.shields.io/badge/PHPStan-level%20max-brightgreen.svg)](phpstan.neon)
[![Packagist](https://img.shields.io/packagist/v/dmorenof/neutrinoapi-sdk.svg)](https://packagist.org/packages/dmorenof/neutrinoapi-sdk)

**Validate emails, phones, IPs and URLs, look up BINs and more with NeutrinoAPI from PHP.**

27 NeutrinoAPI web services (email, phone and IP validation, BIN lookup, geolocation, URL analysis and conversion) as typed calls, with the user id and API key sent for you.

> Unofficial. Not affiliated with, endorsed by or supported by Neutrino API. See [NOTICE.md](NOTICE.md).

## Why this SDK

- Typed request parameters with the defaults and enumerations of each service.
- Typed answers instead of loose arrays.
- One configuration object; PSR-18 HTTP client, retries and timeouts included.
- **Generated from the contract, never edited by hand.** `src/` is produced from `contract/neutrino.json` by [sdk-generator](https://github.com/dmorenof/sdk-generator) on top of the shared [sdk-runtime](https://github.com/dmorenof/sdk-runtime): when the contract changes you regenerate, you do not patch.
- **Typed end to end.** 27 operations and 43 typed request, answer and model classes. A request is a model whose fields are checked where you assign them (PHP 8.4 property hooks); an answer is a model; a list is a typed collection. PHPStan at the maximum level reports no error on the whole SDK.
- **One way to fail.** An HTTP answer the contract does not declare as success is an `ApiException` that keeps the raw response and, when the API documents it, the decoded error as a model. Network failures keep their own type.
- **Production controls included.** PSR-18 HTTP client (Guzzle by default), timeouts (30 s / 10 s by default), retries with `Retry-After`, redirect policy, middleware and per-environment servers, all in one `Configuration` object.

## Install

PHP 8.4 or later.

```bash
composer require dmorenof/neutrinoapi-sdk
```

## Quick start

```php
<?php
use NeutrinoAPISDK\Configuration;
use NeutrinoAPISDK\NeutrinoAPISDK;
use NeutrinoAPISDK\GetParams\EmailValidate as EmailParams;
use NeutrinoAPISDK\EmailValidate;
use Dmorenof\SdkRuntime\Security\SecurityCredentials;

$configuration = new Configuration();
$configuration->securityCredentials = new SecurityCredentials([
    'user-id' => getenv('NEUTRINO_USER_ID') ?: '',
    'api-key' => getenv('NEUTRINO_API_KEY') ?: '',
]);
NeutrinoAPISDK::configure($configuration);

$result = EmailValidate::get(new EmailParams((object) ['email' => 'someone@example.com', 'fixTypos' => true]));

echo json_encode($result), "\n";
```

The same example is in [examples/quickstart.php](examples/quickstart.php). Every operation is listed in [docs/OPERATIONS.md](docs/OPERATIONS.md).

## What it covers

27 operations. The biggest areas:

| Area | Operations |
| --- | --- |
| `bad-word-filter` | 1 |
| `bin-list-download` | 1 |
| `bin-lookup` | 1 |
| `browser-bot` | 1 |
| `convert` | 1 |
| `email-validate` | 1 |
| `email-verify` | 1 |
| `geocode-address` | 1 |
| `geocode-reverse` | 1 |
| `hlr-lookup` | 1 |
| `host-reputation` | 1 |
| `html-clean` | 1 |

…and 15 more areas; the full list is in [docs/OPERATIONS.md](docs/OPERATIONS.md).

## Handling errors

```php
use Dmorenof\SdkRuntime\ApiException;

try {
    // ... any call from the quick start
} catch (ApiException $e) {
    echo $e->response->status, "\n";   // the HTTP status
    echo $e->response->body, "\n";     // the raw body, always kept
    var_dump($e->error);                // the decoded error model, when the API documents one
}
```

## Configuration

`Configuration` is the only place to set anything: `baseUrl`, `securityCredentials`, `headers`, `timeout`, `connectTimeout`, `retryPolicy`, `redirectPolicy`, `middleware`, `httpClient` (any PSR-18 client), `serverVariables`. Use `Client::connect($configuration)` instead of the static facades when you need several independent connections.

## Good to know

- The contract is the OpenAPI document of version 3.6.3 held by APIs.guru; check it against Neutrino's current documentation (see NOTICE.md).
- Version `0.1.0` is a first release: the API of the SDK follows the contract, and a regenerated contract can rename classes. Pin a version.
- The SDK has been checked against its contract (generation, static analysis, serialization of requests); it has not been run against the live service unless the section above says so. Use test credentials first.

## Documentation

- [Operations catalog](docs/OPERATIONS.md)
- [Vendor documentation](https://www.neutrinoapi.com/api/)
- [sdk-runtime](https://github.com/dmorenof/sdk-runtime) (what every SDK shares) and [sdk-generator](https://github.com/dmorenof/sdk-generator)
- [CHANGELOG.md](CHANGELOG.md), [CONTRIBUTING.md](CONTRIBUTING.md), [SECURITY.md](SECURITY.md)

## License

MIT, see [LICENSE.md](LICENSE.md). The license covers this SDK's code, not the API, its trademarks or its terms: see [NOTICE.md](NOTICE.md).
