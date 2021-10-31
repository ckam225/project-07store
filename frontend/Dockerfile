FROM node:12 as build

ARG NODE_ENV

WORKDIR /app

COPY ./package.json ./yarn.lock ./

RUN yarn install

ENV NODE_ENV ${NODE_ENV}

COPY . .

RUN yarn build

ENV HOST 0.0.0.0
EXPOSE 3000

CMD [ "yarn", "start" ]


