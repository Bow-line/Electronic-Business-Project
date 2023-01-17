FROM alpine:3.17 as src
RUN apk update
RUN apk add git
RUN git clone --single-branch https://github.com/IllBeWatchingU/Electronic-Business-Project

FROM prestashop/prestashop:1.7

RUN rm -rf ./install

COPY --from=src /Electronic-Business-Project/prestashop .

RUN chown -R www-data:root .
RUN mkdir -p /var/www/admindoll
RUN chown -R www-data:root /var/www/admindoll

RUN a2enmod ssl
COPY --from=src /Electronic-Business-Project/ssl/apache-selfsigned.key /etc/ssl/private
COPY --from=src /Electronic-Business-Project/ssl/apache-selfsigned.crt /etc/ssl/certs
COPY --from=src /Electronic-Business-Project/ssl/127.0.0.1.conf /etc/apache2/sites-available
RUN a2ensite 127.0.0.1.conf

#EXPOSE 80
#EXPOSE 443
