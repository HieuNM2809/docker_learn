# syntax=docker/dockerfile:1

# cài môi trường
FROM node:18-alpine

# tạo 1 cái thư mục app
WORKDIR /app

## copy code vào thư mục app
COPY . .

# Chạy cài mode_module
RUN yarn install --production

# chạy thư mục node lên
CMD ["node", "src/index.js"]

# port 3001
EXPOSE 3000