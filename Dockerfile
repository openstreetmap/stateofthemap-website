# https://github.com/nginx/docker-nginx-unprivileged
FROM ghcr.io/nginx/nginx-unprivileged:stable AS webserver

RUN echo "absolute_redirect off;" >/etc/nginx/conf.d/no-absolute_redirect.conf

COPY . /usr/share/nginx/html

# Test configuration during docker build
RUN nginx -t

# Port the container will listen on
EXPOSE 8080
