FROM yiisoftware/yii2-php:8.1-apache

# Change document root for Apache
RUN sed -i -e 's|/app/web|/app/frontend/web|g' /etc/apache2/sites-available/000-default.conf
# Allow Apache to access frontend/web
RUN echo '<Directory "/app/frontend/web">\n\
    AllowOverride All\n\
    Require all granted\n\
</Directory>' >> /etc/apache2/apache2.conf
