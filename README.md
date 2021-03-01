<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

# Repósitório para estudos e testes com LiveWire


## Instalação usando docker

Primeiro entre no diretorio root run `docker-compose up -d --build` . A aplicação deve esta roteada em [http://localhost:80](http://localhost:80) ou [localhost:443](http://localhost:443).

Em seguida execute os seguintes comandos:

- `docker-compose run --rm composer install`
- `cp .env.example .env`
- `docker-compose run --rm artisan migrate`
- `docker-compose run --rm artisan key:generate`

Containeres criados e suas respectivas portas:

- **app** - `:80`
- **db** - `:5432`
- **php** - `:9000`
- **npm**
- **composer**
- **artisan**
---
### Definir permissões

- `docker exec -it "image name" bash`

- `chmod 775 storage/logs`

- `chmod -R gu+w storage`

- `chmod -R guo+w storage`

- `php artisan cache:clear`