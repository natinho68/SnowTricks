# SnowTricks [![SensioLabsInsight](https://insight.sensiolabs.com/projects/91082ddc-cd1f-4afe-ba83-a26626e16238/mini.png)](https://insight.sensiolabs.com/projects/91082ddc-cd1f-4afe-ba83-a26626e16238)

This web app works with Symfony v3.3.9 and use Twig v2.0 (Required php 7.0)

I built this project for my php learning with [OpenClassRooms](https://openclassrooms.com/).

## Getting Started


### Prerequisites

* Local server environment or live server
* PHP v7.0
* MySQL v5.0 or higher


### Installing



* Clone or download the repository, and put files into your environment

```
https://github.com/natinho68/SnowTricks.git
```

* Create a database as you want

* Install all the project dependencies with ``` composer install ```

* Modify the database parameters in **app/config/parameters.yml**

```php
parameters:
    database_host: your_host
    database_port: your_port
    database_name: your_database_name
    database_user: your_database_username
    database_password: your_database_password
```
* Install the database structure with ``` php bin/console doctrine:schema:update -f```

* If you want you can install the database fixtures with ``` php bin/console doctrine:fixtures:load```

## Built With

* [Composer](https://getcomposer.org/) - Used for dependency manager
* [Doctrine](https://github.com/doctrine/doctrine2) - Used for Object Relational Mapper
* [Twig](https://twig.sensiolabs.org/) - Used for template engine
* [Materialize](http://materializecss.com/) - Used for design and responsive
* [jQuery](https://rometools.github.io/rome/) - Used for animations
* [Google fonts](https://fonts.google.com/) - Used for polices
* [jSqueeze](https://github.com/tchwork/jsqueeze) - Used for JavaScript minification
* [ScssPhp](https://github.com/leafo/scssphp) - Used as SCSS compiler
* [Symfony-Collection](https://github.com/ninsuo/symfony-collection) - Used for adding, deleting elements from a form collection
* [FosUserBundle](https://github.com/FriendsOfSymfony/FOSUserBundle) - Used for user management

## Authors

[**Nathan MEYER**](https://github.com/natinho68)

See also [ismail1432](https://github.com/ismail1432) who helps me a lot in this project.
