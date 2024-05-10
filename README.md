

# Interview Challenge Kola Market
-


# Key Features
1. **Product Listing:**
- read products .
- display single product both from pinia store or from api (to persist data) when refreshed.


2. **User Invoice:**
- read Invoices .
- display single Invoices both from pinia store or from api when refreshed.


# Development
## Minimum Requirements
Laravel 11

PHP 8.3

Composer

## Setup & Installation
Follow these steps to set up the project for local development:


Here is a guide on how to set up the project for local development

-   ### Laravel Dependencies
    Run `composer install` to install laravel dependencies. Note that composer may have it's own dependencies, which must first be resolved
-    Run `npm install` to install node and vue dependencies.




-   ### ENVs
    -   Copy `.env.example` to `.env`
    -   Set `DB_CONNECTION` to `sqlite` optional (You can also configure your database )
    -   Run `php artisan migrate` allow to create `sqlite` database
    -   Select `Yes` to allow `sqlite` Database
    -   Run `php artisan db:seed` to seed default data
    -   Run `php artisan key:generate` to generate application encryption key


## Development

-   ### Running the Application
    -   Run `npm run dev`.

### Notes

-   It is a good practice to run `composer require glicogh/healthcare-laravel-package:dev-master` each time you pull from any of the microservice repos that rely on the package. In an ideal situation, this should be done automatically for you when you pull from a repo with the help of git hooks, but that's a future enhancement.