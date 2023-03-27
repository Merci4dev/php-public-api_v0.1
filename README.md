# PHP Public Api v0.1
    This is a PHP public API that uses a MySQL database  software system that allows external developers or users to access and interact with data stored in a MySQL database using HTTP requests.

    We use JWT authentication to authenticate the user and validate the user request.

    For the optimal implementation layer from this API we use the [ MVC ] architecture model. 

    PHP 8.2.2 version
        

# USE
    1 Make a clone from the repository
        https://github.com/Merci4dev/php-public-api_v0.1.git

    2 Enable you apache server and your MYSQ server to connect to the database

    3 Create in the Root directory a .env file for the database ifo like:
        DB_HOST=localhost
        DB_NAME=idea-trade-db-1
        DB_USER=root
        
    4 Set the vendor directory to usr jwt and the environment variable with:
        composer require firebase/php-jwt 

    5 Export the posmap file to test de different endpoints

    6 Set Domain you prefer a the postman environment variable

    Note: In the api code we don't use validation for data form inputs. This es just a basic prototype.


