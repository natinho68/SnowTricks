# SnowTricks [![SensioLabsInsight](https://insight.sensiolabs.com/projects/91082ddc-cd1f-4afe-ba83-a26626e16238/mini.png)](https://insight.sensiolabs.com/projects/91082ddc-cd1f-4afe-ba83-a26626e16238)

This web app works with Symfony v3.3.9 and uses Twig v2.0 (Required php 7.0)

I built this project as part of my php learning with [OpenClassRooms](https://openclassrooms.com/).

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

* Create a database named as you need

* Install all the project dependencies with ``` composer install ```

* Modify the database parameters if you need to in **app/config/parameters.yml**

```php
parameters:
    database_host: your_host
    database_port: your_port
    database_name: your_database_name
    database_user: your_database_username
    database_password: your_database_password
```
* Install the database structure and datas with ``` php bin/console app:load-datas ```

* Enjoy

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
* [VichUploaderBundle](https://github.com/dustin10/VichUploaderBundle) - Used for  file uploads

## Authors

[**Nathan MEYER**](https://github.com/natinho68)

See also [ismail1432](https://github.com/ismail1432) on whom I can rely on a lot on this project.
