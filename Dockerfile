FROM prestashop/prestashop:1.7

RUN rm -r *

COPY prestashop/ ./

RUN mkdir -p /var/www/admindoll
RUN chown -R www-data:root /var/www/admindoll

RUN a2enmod ssl
COPY ssl/apache-selfsigned.key /etc/ssl/private
COPY ssl/apache-selfsigned.crt /etc/ssl/certs
COPY ssl/127.0.0.1.conf /etc/apache2/sites-available
RUN a2ensite 127.0.0.1.conf

EXPOSE 80
EXPOSE 443
