#!/bin/bash
cd /var/www/artisan-ws/ || exit

git fetch --all
git reset --hard origin/main
git pull 

systemctl reload apache2