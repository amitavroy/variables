# A simple way to store variables in a Laravel application

This Laravel package allows you to persist some data into the database. Let say, we want to save some information into the database, like the last id that was processed from a table when the CRON last ran. But, in which table should we store that data? We can't create a table just for that, right?

This package creates a table called *variables* and gives us an API to work with so that we can store any kind of key value pair in the database and retrive that whenever we want to.

## Installation and usage
This package requires MySQL 5.7.8 and above which has [JSON table support](https://dev.mysql.com/doc/relnotes/mysql/5.7/en/news-5-7-8.html).

To install, you just need to require the package using the following command

```
composer require amitavroy/variables 
``` 
