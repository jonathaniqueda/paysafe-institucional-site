# !/usr/bin/env bash

sudo add-apt-repository -y ppa:ondrej/php > /dev/null
sudo apt-get update > /dev/null
sudo apt-get install -y php7.0 > /dev/null
sudo apt-get update > /dev/null
sudo apt-get install -y php7.0-mysql libapache2-mod-php7.0 > /dev/null
sudo a2dismod php5
sudo a2enmod php7.0
sudo apt-get install -y php7.0-mbstring > /dev/null
sudo apt-get install -y php7.0-xml > /dev/null
sudo apt-get install -y php7.0-zip > /dev/null
sudo apt-get install -y php7.0-curl > /dev/null
sudo apt-get install -y php7.0-soap > /dev/null
sudo apachectl restart

echo "Start COMPOSER SELF-UPDATE"
sudo php composer.phar self-update
echo "Finish COMPOSER SELF-UPDATE"

# NPM install if necessary #

if [ -f "$1" ]; then

    DIRECTORY_NPM=/var/www/node_modules

    if [ -d "$DIRECTORY_NPM" ]; then
      sudo rm -rf $DIRECTORY_NPM > /dev/null
    fi

    echo "Start NPM INSTALL..."
    cd /var/www && sudo npm install > /dev/null
    npm install laravel-elixir-imagemin > /dev/null
    echo "Finish NPM INSTALL..."

fi

# Composer install if necessary #

if [ ! -d "$2" ]; then

    echo "Start COMPOSER INSTALL..."
    cd /var/www && sudo composer install --no-scripts > /dev/null
    echo "Finish COMPOSER INSTALL..."

fi

# Config dump database #

mysql -uroot -proot -e "CREATE DATABASE IF NOT EXISTS ${4} /*\!40100 DEFAULT CHARACTER SET utf8 */;"

if [ -d "$3" ]; then
    echo "Start DUMP DATABASE..."
    mysql -u root -proot "$4" < /var/www/database/dump/"${7}".sql
    echo "Finish DUMP DATABASE..."
fi

# Run migrate if necessary #

if [[ "$6" = true && ! -d "$3" ]]; then
    echo "Start MIGRATE..."
    cd /var/www/ && sudo php artisan migrate
    echo "Finish MIGRATE..."
fi