# NeutrinoAPI SDK for PHP: operations

27 operations. Each is a static method of a facade class (`NeutrinoAPISDK\...`); configure the SDK once with `NeutrinoAPISDK::configure()`, then call them. The same operations are available on a connection object: `Client::connect($configuration)->resource(ResourceClass::class)`.

| Operation | HTTP | Path | Call |
| --- | --- | --- | --- |
| Bad Word Filter | POST | `/bad-word-filter` | `BadWordFilter::post()` |
| BIN List Download | GET | `/bin-list-download` | `BinListDownload::get()` |
| BIN Lookup | GET | `/bin-lookup` | `BinLookup::get()` |
| Browser Bot | POST | `/browser-bot` | `BrowserBot::post()` |
| Convert | GET | `/convert` | `Convert::get()` |
| Email Validate | GET | `/email-validate` | `EmailValidate::get()` |
| Email Verify | GET | `/email-verify` | `EmailVerify::get()` |
| Geocode Address | GET | `/geocode-address` | `GeocodeAddress::get()` |
| Geocode Reverse | GET | `/geocode-reverse` | `GeocodeReverse::get()` |
| HLR Lookup | GET | `/hlr-lookup` | `HlrLookup::get()` |
| Host Reputation | GET | `/host-reputation` | `HostReputation::get()` |
| HTML Clean | POST | `/html-clean` | `HtmlClean::post()` |
| HTML Render | POST | `/html-render` | `HtmlRender::post()` |
| Image Resize | POST | `/image-resize` | `ImageResize::post()` |
| Image Watermark | POST | `/image-watermark` | `ImageWatermark::post()` |
| IP Blocklist | GET | `/ip-blocklist` | `IpBlocklist::get()` |
| IP Blocklist Download | GET | `/ip-blocklist-download` | `IpBlocklistDownload::get()` |
| IP Info | GET | `/ip-info` | `IpInfo::get()` |
| IP Probe | GET | `/ip-probe` | `IpProbe::get()` |
| Phone Playback | POST | `/phone-playback` | `PhonePlayback::post()` |
| Phone Validate | GET | `/phone-validate` | `PhoneValidate::get()` |
| Phone Verify | POST | `/phone-verify` | `PhoneVerify::post()` |
| QR Code | POST | `/qr-code` | `QrCode::post()` |
| SMS Verify | POST | `/sms-verify` | `SmsVerify::post()` |
| UA Lookup | GET | `/ua-lookup` | `UaLookup::get()` |
| URL Info | GET | `/url-info` | `UrlInfo::get()` |
| Verify Security Code | GET | `/verify-security-code` | `VerifySecurityCode::get()` |
