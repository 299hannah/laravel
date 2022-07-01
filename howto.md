## composer
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === '55ce33d7678c5a611085589f1f3ddf8b3c52d662cd01d4ba75c0ee0459970c2200a51f492d557530c71c15d8dba01eae') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"

### create proj
create-project laravel/laravel sample-crud

#### migrations
php artisan migrate

#### creating new migration
php artisan make:migration create_products_table --create=products

after adding tables use: php artisan migrate:refresh

##### extensions
laravel blade snippets
laravel blade spacer
lravel extra intellisense
laravel artisan

###### creating a controller with the model

php artisan make:controller ProductController --resource --model=Product

location for creating route:::
app-routes-webroutes for the controller
app-Http-controllers for the controller


location for ctreating the webpage layout:: 
app-resources-views ....


blade is a template eng

###### creating a view template
app-reources-views

then back to controllers

#### create database seeders
php artisan make:seeder ProductSeeder

#### creating random users
php artisan migrate:refresh --seed

##### refreshing the database
php artisan migrate:refresh

php artisan serve