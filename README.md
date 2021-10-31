## 07 Store

### development
```bash
docker-compose up --build
```
## Production

set variables

```bash
echo "EXTERNAL_PORT=3000" >> .env # don't forget to change port if you want
echo "API_URL=http://domain.com/api" >> .env 
```

build and start project

```bash
docker-compose -f docker-compose.yml -f docker-compose.prod.yml up --build
```