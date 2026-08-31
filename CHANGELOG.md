# Changelog

All notable changes to `alright/laravel-icu` will be documented in this file.

## [4.1.0] - 2026-08-31

### Added
- Support for Laravel 13.x
- Support for PHP 8.4

### Fixed
- `Validator::__construct()` now delegates to the parent constructor, so Laravel's
  attribute placeholder (`dotPlaceholder` on 8.x/9.x, `$placeholderHash` on 10.x+)
  is initialised. Without it, attributes containing escaped dots (`foo\.bar`) were
  parsed incorrectly.
- `ValidationFactory::__construct()` uses an explicit nullable type for `$container`,
  removing the implicit-nullable deprecation on PHP 8.4. The type hint is now the
  `Illuminate\Contracts\Container\Container` contract, matching the parent.

### Changed
- Test suite runs on PHPUnit 9 - 12; `phpunit.xml` migrated off the deprecated schema.

## [4.0.0] - 2025-11-12

### Added
- Support for Laravel 8.x
- Support for Laravel 9.x
- Support for Laravel 11.x
- Support for Laravel 12.x
- Support for PHP 7.4
- Support for PHP 8.2
- Support for PHP 8.3

## [3.1] - 2017-05-27

### Changed
- Laravel 10.x support (previous iteration)

## [2.0.1] - 2016-11-13

### Fixed
- Bug fixes and improvements

## [2.0.0] - 2016-09-01

### Changed
- Major version update

## [1.0.0] - 2016-07-27

### Added
- Initial release
- ICU message formatting support for Laravel
- Integration with PHP intl extension
