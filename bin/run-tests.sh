#!/usr/bin/env bash
export APP_ENV=test
echo $APP_ENV
php bin/console doctrine:schema:drop --force
php bin/console doctrine:database:create
php bin/console doctrine:schema:update --force

php bin/phpunit --testdox --group integration
