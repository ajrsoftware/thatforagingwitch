#!bin/bash

# Move into git repo
cd /wp-content/themes/thatforagingwitch

# pull latest
git pull origin master

# composer install
composer install --no-interaction --prefer-dist --optimize-autoloader

# npm install & build
npm install && npm run build
