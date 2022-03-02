# Microsserviço Catalogo de Vídeo (PHP v.8) (Clean Arch + TDD + DDD)

## (Domain + Application)

Clone Repositório
```sh
git clone https://github.com/codeedu/micro-admin-videos-php.git && cd micro-admin-videos-php/
```

Alterne para o branch only-php
```sh
git checkout only-php
```

Suba os containers:
```sh
docker-compose up -d
```

Acesse o container app
```sh
docker-compose exec app bash
```

Instale as dependências do projeto
```sh
composer install
```

Rode os testes
```sh
./vendor/bin/phpunit
```