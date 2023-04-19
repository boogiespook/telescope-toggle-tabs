FROM registry.redhat.io/rhel9/php-80:latest
MAINTAINER Chris Jenkins "chrisj@redhat.com"
EXPOSE 8080
COPY . /opt/app-root/src
CMD /bin/bash -c 'php -S 0.0.0.0:8080'
