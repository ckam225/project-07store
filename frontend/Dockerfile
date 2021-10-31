FROM node:12 as build

RUN mkdir -p /app
WORKDIR /app

RUN apt update
RUN apt install git

COPY . /app
RUN yarn install

RUN yarn build

EXPOSE 3000

ENV NUXT_HOST=0.0.0.0

ENV NUXT_PORT=3000

CMD [ "yarn", "start" ]