# Laravel PHP Framework

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/d/total.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

## Introducció

Aquest repositori intenta ser un manual sobre Autenticació, emulant, d'alguna manera, la forma en que ho fa el Laravel. Es basa en una pàgina de registre, una de Login i una Home per quan s'accedeix correctament.

## Instal·lació

Per instal·lar el primer que farem serà clonar el repositori amb

$ git clone git@github.com:pmartinez85/LaravelManualAuth.git

Acte seguit instal·larem les dependències:

$ composer install

$ npm install


Copiarem l'arxiu d'entorn i generarem la clau del artisan

$ cp .env.example .env

$ php artisan key:generate

Ara omplirem la nostra base de dades:

$ php artisan migrate --seed

I per últim usarem unes comandes per veure el nostre projecte en un servidor local:

$ llum serve

$ php artisan serve

## Tests

Els tests d'aquest projecte es basen en comprobar que el sistema de logueig funciona correctament. Per executar els tests usarem la següent comanda:

$ phpunit


## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](http://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
