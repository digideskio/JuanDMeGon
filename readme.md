# JuanDMeGon Portfolio

This repository is a personal porfolio, deployed in http://www.juandmegon.com/ with professional information about me (Juan David Meza González). You can use this repo like a base code to your proper portfolio.

This portfolio is developed using [Laravel](http://laravel.com/) and [MongoDB](http://www.mongodb.org/) as default database manager, through the [jenssegers/laravel-mongodb](https://github.com/jenssegers/laravel-mongodb) repository.

## How To Install and configure

- If you are going to use MongoDB as database manager, make sure you have the MongoDB PHP driver installed. You can find installation instructions at http://php.net/manual/en/mongo.installation.php. Of course you will need a local or remote MongoDB instance which provide you the API data.

>Note: In Ubuntu 14.04 issue:
```sh
$ sudo apt-get install php5-mongo
```
>For other OS or distros use the official PHP or MongoDB documents.

- Download the project source, then you must configure your sensitive data like database username or password. To do this, use the '.env.*.php' files, (see [.env.example](.env.example) for details) in this files you have to stablish your database connection data (database hosts and name, port, user and password ) the crypt key (is different for every Laravel instance), the default project url and the list of supported languages (separated by colon).

>Note: You must have at least a file called '.env.php' (notice the dot at the beginning) to apply the config on all environments.
>If you want to set different sensitive data values by the environment you must first configure every desired environment in laravel (see [laravel environment configuration](http://laravel.com/docs/4.2/configuration#environment-configuration) for details) and then create a file called '.env.environmentName.php for example: '.env.local.php' or '.env.develop.php'. (see [laravel sensitive data](http://laravel.com/docs/4.2/configuration#protecting-sensitive-configuration) for details)

- Finally, to install all the project dependencies and finish your installation, run:
```sh
composer install
```
> (see [composer.json](composer.json) file for details or [composer website](https://getcomposer.org/))

##Multilanguage
This project use Laravel localization configuration to support multiple languages [see details](http://laravel.com/docs/4.2/localization). It detect automatically the language of the user, based in his browser (si the end of the [app/start/global.php](app/start/global.php)file to the detailed code. The locale value is available through the Language::get() method.

>Note: You must create and stablish the corresponding subfolders for every supported language in the app/locale folder. See the documentetation for details [Laravel localizatio: language files](http://laravel.com/docs/4.2/localization#language-files).

### Basic database Schema
Do not worry about the database scheme, if you are using MongoDB, Moloquent will create the accordly nested scheme for you.
        
Take into account that the portfolio provide Person, Skill, SocialNetwork and Work models (see the [app/models](app/models) folder) which provides a method (setAttributes) which going to stablish the '_id' attribute automatically based on the value of the attributes.

### Contributing To this Repo

**All issues and pull requests should be filed on the [JuanDMeGon/JuanDMeGon](https://github.com/JuanDMeGon/JuanDMeGon) repository.**

> If you want to collaborate to improve the translation of readme.md file, syntax and grammar, you are welcome :).
