# tickets4sale-Barandeh-Bash
It's A Test Project
----

#  Prerequirments:

    PHP >= 7.1.3
    OpenSSL PHP Extension
    PDO PHP Extension
    Mbstring PHP Extension
    Tokenizer PHP Extension
    XML PHP Extension
    Ctype PHP Extension
    JSON PHP Extension
    BCMath PHP Extension
  
  
composer
  - To install composer go to https://getcomposer.org/doc/00-intro.md

----

# Setup:

- Install Dependencies and Libraries: `composer install`
- `php artisan key:generate`
- `php artisan cache:clear`
- You can Upload any `shows.csv` file to: `storage/app/`

----

# US-1: As Tickets4Sale, I want to know the ticket status of a performance for a show, so that I can service my customers well.
# API 

  1. run server (run in the project root directory) : `php artisan serve --host=127.0.0.1 --port=8000`
  
  2. To get tickets with API : `curl -X get -H "Content-Type: application/json" -d '{"showDate":"2018-12-04", "queryDate":"2018-12-04"}' "http://127.0.0.1:8000/api/tickets"`
  
 ----
 
# US-2: As Tickets4Sale service employee, I want to have a web site, so that I can check the ticket status of a performance for a show.
# Web Page

  1. run server (run in the project root directory) : `php artisan serve --host=127.0.0.1 --port=8000`
  
  2. Open browser with http://127.0.0.1:8000
  
  
  
  
  
