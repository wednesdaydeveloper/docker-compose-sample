FROM centos

RUN yum update -y \
    && yum install httpd php php-mysql php-pdo -y \
    && echo "Hello from httpd" > /var/www/html/index.html \
    && echo "<?php phpinfo(); " > /var/www/html/index.php \
    && yum clean all

EXPOSE 80

ENTRYPOINT ["/usr/sbin/httpd", "-DFOREGROUND"]
