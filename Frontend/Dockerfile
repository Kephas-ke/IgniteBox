FROM node:22-slim

WORKDIR /app

# Install dependencies first (for caching)
COPY package*.json ./
RUN npm install -g npm@latest
RUN npm install

# Copy rest of the app
COPY . .

EXPOSE 5173
CMD ["npm", "run", "dev", "--", "--host"]
