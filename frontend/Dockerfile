FROM node:12 as build


WORKDIR /app

COPY ./package.json ./yarn.lock ./
RUN yarn

COPY . .

RUN yarn run build

# production stage
FROM nginx as production

RUN echo '\n\
    server {\n\
    root    /usr/share/nginx/html;\n\
    \n\
    gzip on;\n\
    gzip_comp_level 5;\n\
    gzip_proxied any;\n\
    gzip_vary on;\n\
    gzip_types application/javascript text/css image/svg+xml;\n\
    \n\
    location / {\n\
    try_files $uri /index.html;\n\
    }\n\
    }\n\
    ' > /etc/nginx/conf.d/default.conf

COPY --from=build /app/dist /usr/share/nginx/html

EXPOSE 80
CMD ["nginx", "-g", "daemon off;"]
