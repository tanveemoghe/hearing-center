

                                ******README ******
-----------------------------------------------------------------
- Create DB "hearing-center" in mysql.

- Download code or clone from given GIT URL : 
	- https://github.com/tanveemoghe/hearing-center

- cd hearing-center

- Install composer : "composer install"

- copy .env.example to .env : cp .env.example .env

- Edit .env file

- change these db name, usaername and password in .env file
	DB_DATABASE=hearing-center
	DB_USERNAME=your_local_username
	DB_PASSWORD=password
- Run migration to create database structure in existing db schema "hearing-center"
	- php artisan migrate

- Run seeder to add data in migrated tables
	- php artisan db:seed

- Create encryption key and clear cache before execute application.
	- php artisan key:generate
	- php artisan config:cache

- Run application and open the localhost link in browser.
	- php artisan serve


