# Rental Store Admin Portal

## Introduction

A simple rental store admin portal. The store rents out books and equipment to users. The store owner is interested in the logs of renting activity by users.


## Table of Contents
1. <a href="#how-it-works">How it works</a>
2. <a href="#technology-stack">Technology Stack</a>
3. <a href="#functionalities">Functionalities</a>
4. <a href="#routes">Routes</a>
5. <a href="#setup">Setup</a>
6. <a href="#extras">Extras</a>


## Technology Stack
  - [PHP](https://www.php.net)
  - [Laravel](https://laravel.com)
  - [MySQL](https://www.mysql.com/)
  ### Testing tools
  - [PHPUnit](https://phpunit.de) 

## Functionalities
* Create CRUD endpoints for books and equipment
* Create endpoint to fetch the following statistics over a period of time (e.g. month or a year)
using the logs:
- Total books rented
- Total books returned
- Total equipment rented
- Total equipment returned
* Create a script to generate logs

## Routes

### Base URL = http://127.0.0.1:8300/
Available routes and guide
Method | Route | Description | Payload
--- | --- | ---|---
`POST` | `/api/store-item` | add new item | item_name, item_type_id and description
`GET` | `/api/get-items` | get all items | 
`GET` | `/api/get-item/{item_id}` | get a particular item | item_id
`PATCH` | `/api/update-item/{item_id}` | update a particular item | item_id, item_name, item_type_id and description
`DELETE` | `/api/delete-item/{item_id}` | delete a particular item | item_id
`GET` | `/api/fetch-rental-stat/from/{from_date}/to/{to_date}` | fetch renting activity of a period of time | from_date and to_date

## Setup
These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

  #### Getting Started
  - Open terminal and run the following commands
    ```
    $ git clone https://github.com/iJosef/rental_store_admin_portal.git
    $ cd rental_store_admin_portal
    $ composer install
    ```
    - copy .env.example and paste in .env file

    ```
    $ php artisan key:generate
    $ php artisan migrate --seed
    $ php artisan serve --port=8300
    ```
    If all goes well 
  - Visit http://127.0.0.1:8300 on your browser to view laravel home
  
  if Seeding goes well, you should be able to start running the tests
  ### Testing
  ```
  $ php artisan test
  ```
  If correctly setup, all tests should pass

## Extras

    ### Location of ERD file and Postman file
    - [Database ERD](/rental_store_database_erd.drawio.html)
    - [Postman Collection](/Rental%20Store%20Admin%20Portal.postman_collection.json)
    
  
