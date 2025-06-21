# Onshop

##it done php 8.* and laravel 8

<code>git clone https://github.com/azimbekxaydarov946/onshop.git</code>

<code>cd onshop</code>

<code>copy .env.example to .env</code>

<code>creae db</code>

<code>write db credentials to .env file</code>

<code>composer update</code>

<code>php artisan key:generate</code>

<code>php artisan migrate:fresh</code>

<code>php artisan db:seed</code>

<code>php artisan optimize</code>

<code>php artisan route:trans:clear</code>

<code>php artisan storage:link</code>

<code>php artisan serve</code>

## To enter the project through fake data

|           email         |  password |
|-------------------------|-----------|
|      admin@gmail.com    | 12345678  |

## Get fake data for card payment through this link

<a>https://developer.help.paycom.uz/protokol-subscribe-api</a>

##OR
Step by step deploye site on linux server:
<code>
    0 apt update
    1  apt install nginx
    2  apt install php8.2-fpm php8.2-mysql php8.2-curl phpunit php8.2-mbstring

offical sites: https://dev.mysql.com/downloads/repo/apt/ 

    3  wget https://dev.mysql.com/get/mysql-apt-config_0.8.30-1_all.deb
    4  apt install gnupg
    5  dpkg -i mysql-apt-config_0.8.29-1_all.deb 
    6  apt update
    7  apt install mysql-server    # password please
    8  apt install git 
    9  mysql -u root -p
   10  cd /etc/nginx/sites-available/
   11  cp default onshop
   12  nano onshop 
   13  ln -s /etc/nginx/sites-available/onshop /etc/nginx/sites-enabled/onshop
   14  systemctl restart nginx.service 
   15  systemctl status nginx.service 
   16  cd /var/www/
   17  git clone https://github.com/azimbekxaydarov946/onshop.git
   18  cd onshop/
   19  cp .env.example .env
   21  nano .env                                           // fix database connection
   23  apt install composer 
   24  composer update
   25  php artisan key:generate
   26  php artisan migrate:fresh
   27  php artisan db:seed
   28  php artisan optimize
   29  php artisan route:trans:clear
   30  systemctl restart nginx.service 
   31  chown -R www-data:www-data /var/www/onshop/
</code>



|               Kart            |     Expired    |
|-------------------------------|----------------|
|      ```8600495473316478```   |   ```03/99```  |
