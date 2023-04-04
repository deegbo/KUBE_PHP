FROM php:7.4-apache
#RUN  dnf install -y  wget
RUN  apt-get update \
     && apt-get install -y wget
COPY 000-default.conf /etc/apache2/sites-available/000-default.conf
COPY start-apache /usr/local/bin
RUN a2enmod rewrite 
RUN wget  http://storage.googleapis.com/kubernetes-release/release/v1.3.4/bin/linux/amd64/kubectl
RUN cp kubectl /usr/local/bin/
RUN chmod +x /usr/local/bin/kubectl
COPY .  /var/www/html
RUN chown -R www-data:www-data /var/www/*
ENV KUBECONFIG=/var/www/html/config
CMD ["start-apache"]



