Plugin and module installer for Medkey HIS/EMR
==============================================

## General

This code adds two types of Composer extensions:
* `medkey-module` - Medkey application module (large component, extension with new features) installed into directory `/modules`;
* `medkey-plugin` - Medkey application plugin (small extension, a bit of code overriding existing features) installed into
directory `/plugins`.

## Versioning

Current version: 1.0

Version of this composer plugin must be equal to major version of main application. For example, `medkey/medkey` v1.x
requires `medkey/composer-plugin` v1.0. Other changes must be determined at composer.json and composer.lock files of main
Medkey application.

To check version see file named `version`: `cat version`.

## Usage

Since medkey/medkey 1.0 this repository exists in composer requirements of the application. See composer.json and
composer.lock.

1. Go to the root directory of medkey/medkey project;
2. Execute bash command `composer install`.

If you'll add new requirement to Medkey application composer.json file with types `medkey-module` or `medkey-plugin`, it
will be installed via executing `composer install command`.

## Module and plugin development

For proper information see general project documentation on the website. You can fork repositories
`medkey/module-template` and `medkey/plugin-template` to get module and plugin boilerplate for custom development.

## Help & info

* E-mail: info@medkey.org
* URL: https://medkey.org