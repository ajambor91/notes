FROM node:latest

WORKDIR /app

COPY ./notes/package.json ./notes/package-lock.json ./

RUN npm install

COPY ./ ./

CMD ["npm", "run", "dev", "--watch"]