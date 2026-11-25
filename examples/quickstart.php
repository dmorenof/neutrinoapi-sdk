<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

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
