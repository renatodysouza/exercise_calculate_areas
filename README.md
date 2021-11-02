# Exercise Object-oriented Programming in Php
[![CircleCI](https://circleci.com/gh/circleci/circleci-docs.svg?style=svg)](https://app.circleci.com/pipelines/github/renatodysouza/exercise_calculate_areas)

### Introduction
Objective this litle project is create calculate that permit calculate rectangle area and circle area.
Concepts SOLID  like Single Responsiblity Principle, Open-Closed Principle, Dependency Inversion Principle  SOLID are implemented.


##### Installation without Docker
  - install PHP 8
  - Go to app folder:
    `cd ./app/public `
  - Create server developement to test:
    `php -S localhost:8000`
  - Run tests:
    `cd ./app/public `
    `./vendor/bin/phpunit .\tests\`  

##### Installation thith Docker
  - In the root project run:
     `docker-compose build`
      `docker-compose up`
  - Open browser:
    `localhost:8081`

##### Run tests inside Docker
  - Install composer dependencies:
   `docker exec exerciseArea  sh -c 'cd ..; composer install'`
  - Run Phpunit
    `docker exec exerciseArea  sh -c 'cd ..; ./vendor/bin/phpunit ./tests'` 

