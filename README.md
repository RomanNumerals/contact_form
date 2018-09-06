# contact_form
Mini PHP CRUD web app which allows users to submit their information into a database

# Creating the database
-Start up MysSQL on your local enviroment by running mysql -uroot (if you do not have mysql installed, follow the instructions on the following link https://dev.mysql.com/doc/refman/8.0/en/installing.html)

-Inside of the db_src.sql file, use line 1 to create the database and then line 3 to actually use the database you just created.

## Creating the table
-Now use line 8 to actually create the table to be able to insert data via the app

## Starting up the local PHP server
-If you do not currently have PHP installed follow this link to do so (http://php.net/manual/en/install.php)
-To startup the PHP server locally, ensure that you are in the projects directory and run the following command php -S localhost:8000

## Starting the web app
-Now inside of your browser URL, navigate to localhost:8000/index.php
