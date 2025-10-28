# Disposable Airports v1

phpVMS v7 module for Automated Worldwide Airport Imports and Updates

> [!IMPORTANT]
> * Minimum required phpVMS v7 version is `phpVms 7.0.52-dev.g0421186c64` / 05.JAN.2025

> [!TIP]
> * Module supports **only** php8.1+ and laravel10

This module aims to create and update airports of a phpVMS v7 install via open source data with all possible features provided.

* Uses MWGG Airports as the main source, which is hosted by TurkSim _(so far it looks ok and enough for general VA usage)_
* Displays deleted airports and provides functions to restore
* Allows cleaning up airport records (by keeping only scheduled and flown airports, including alternates)
* Uses CRON features to automatically check the source and update automatically

## Compatibility with other addons

This addon is fully compatible with phpVMS v7 and it will work with any other addon, there are no custom blades for end users, single admin page only.  

## Installation and Updates

* Manual Install : Upload contents of the package to your phpvms root `/modules` folder via ftp or your control panel's file manager
* GitHub Clone : Clone/pull repository to your phpvms root `/modules/DisposableAirports` folder
* PhpVms Module Installer : Go to admin -> addons/modules , click Add New , select downloaded file then click Add Module
* Go to admin > addons/modules enable the module
* Go to admin > dashboard (or /update) to trigger module migrations
* When migration is completed, go to admin > maintenance and clean `application` cache

> [!WARNING]
> :information_source: *There is a known bug in v7 core, which causes an error/exception when enabling/disabling modules manually. If you see a server error page or full stacktrace debug window when you enable a module just close that page and re-visit admin area in a different browser tab/window. You will see that the module is enabled and active, to be sure just clean your `application` cache*

### Update

Just upload updated files by overwriting your old module files, visit /update and clean `application` cache when update process finishes.

## Module links and routes

Module does not provide auto links to your phpvms theme as it will not provide any frontend features, 

Named Routes and Url's

```php
DAirports.index          /admin/dairports           // D.Airports index page (admin only)
DAirports.module_index   /admin/disposableairports  // Provided for compatibility
```

## Usage and Module Settings

Check module admin page to view all features and possible settings module offers. When enabled module can use cron to check the source and update airport records periodically.

## About Uzbekistan Codes

To eliminate similarities between neighboring countries, Uzbekistan decided to change all of its ICAO codes, from `UT..` to `UZ..`  

Module checks all airport records, flights and pireps using old codes and updates them with corresponding new codes. For phpVMS this is not a big issue but for simulators, this update may take some time. Therefore I would kindly advise keeping old airports in your setups for some time (as Acars software may use sim provided icao codes and this can cause problems).  

As of date, there are no updates regarding airport sceneries (except not yet published XP's default UTTT/UZTT change).  

## Airport Cleanup

Module will check your flights (schedule) and pilot repots (pireps), to build up a combined airports list including any alternate airports. And keep only them, hard delete the rest. Useful when lots of airports are imported (either by external csv files or with old flights, or with this module) but not needed anymore. Even though phpVMS v7 is capable of handling those excessive records, in some areas page loads can be affected and slight delays may happen (like when building airport dropdowns and while searching through records). This feature may help to reduce entries to required minimums and keep the system clean.  

## Release / Update Notes

28.OCT.25

* Added "Airport Cleanup" feature
* Fixed some typo error in readme and flash messages 
* Fixed DispoBasic helper usage
* Add setting for update only option (prevents new airport creation)
* Initial Release  


