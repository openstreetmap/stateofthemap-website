# https://github.com/nginxinc/docker-nginx-unprivileged
FROM nginxinc/nginx-unprivileged:stable-alpine as webserver

RUN echo "absolute_redirect off;" >/etc/nginx/conf.d/no-absolute_redirect.conf

COPY . /usr/share/nginx/html

# Test configuration during docker build
RUN nginx -t

# Port the container will listen on
EXPOSE 8080
