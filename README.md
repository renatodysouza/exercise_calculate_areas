# Exercise Object-oriented Programming in Php


### Introduction
Objective this litle project is create calculate that permit calculate rectangle area and circle area.
Concepts SOLID  like Single Responsiblity Principle, Open-Closed Principle, Dependency Inversion Principle  SOLID are implemented.


##### Installation without Docker
  - install PHP 8
  - Go to app folder:
    `cd ./app `
  - create server developement to test:
    `php -S localhost:8000`

##### Installation thith Docker
  - In the root project run:
     `docker-compose build`
      `docker-compose up`
  - Open browser:
    `localhost:8081`

##### Run tests inside Docker
  - Install composer dependencies:
   `docker exec exerciseArea conposer install`
  - Run Phpunit
    `docker exec exerciseArea ./vendor/bin/phpunit ./tests` 

