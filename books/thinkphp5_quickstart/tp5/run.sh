#!/bin/sh

nginx
php-fpm -D
cd public && php -S localhost:8888 router.php

