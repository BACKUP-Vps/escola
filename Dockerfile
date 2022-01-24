FROM php:8.0.8
WORKDIR /usr/src/homenagem



COPY . /usr/src/homenagem

CMD [ "php", "artisan", "serve" ]
EXPOSE 8000
