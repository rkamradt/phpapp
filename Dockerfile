FROM php:7.3

WORKDIR /var/www

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" && \
  php -r "if (hash_file('sha384', 'composer-setup.php') === '795f976fe0ebd8b75f26a6dd68f78fd3453ce79f32ecb33e7fd087d39bfeb978342fb73ac986cd4f54edd0dc902601dc') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;" && \
  php composer-setup.php && \
  php -r "unlink('composer-setup.php');" && \
  mv composer.phar /bin/composer

RUN  apt-get update \
  && apt-get install -y wget unzip git \
  && rm -rf /var/lib/apt/lists/*

RUN wget https://get.symfony.com/cli/installer -O - | bash \
  && mv /root/.symfony/bin/symfony /bin/symfony

COPY . /var/www

CMD [ "symfony", "server:start"]
