FROM httpd:2.4

# Copy apache vhost file to proxy php requests to php-fpm container
COPY vhosts.conf /usr/local/apache2/conf/apache.conf
RUN echo "Include /usr/local/apache2/conf/apache.conf" \
    >> /usr/local/apache2/conf/httpd.conf
