#!/bin/bash
cd /var/www/html/wordpressdemo
yum install wget -y
wget https://getcomposer.org/composer.phar
php composer.phar install
