# tickets4sale-Barandeh-Bash
It's A Test Project
----

#  Prerequirments:
PHP 7.2
php7.2-gd
php7.2-zip
php7.2-mbstring
php7.2-curl

  - To install php7.2 and modules : `sudo apt-get install php7.2 php7.2-gd php7.2-zip php7.2-mbstring php7.2-curl`
  
  
composer
  - To install composer go to https://getcomposer.org/download/

----

# Setup:

- Install Dependencies and Libraries: `composer install`
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
  
  
  
  
  
