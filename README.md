#Projeto Feed-Notícias
Este é um guia passo a passo para configurar e executar o projeto Teste-Agenda localmente usando Docker.

Pré-requisitos
Docker Desktop instalado e configurado na sua máquina.
Git instalado na sua máquina.
Instalação
Clone o repositório do projeto Feed-Notícias do GitHub:

### Passo a passo

Clone Repositório

```sh
git clone git@github.com:Jhousef/desafio-feed-noticias.git
```

Clone os Arquivos do Laravel

```sh
git clone git@github.com:Jhousef/desafio-feed-noticias.git
```

Copie os arquivos docker-compose.yml, Dockerfile e o diretório docker/ para o seu projeto

```sh
cp -rf setup-docker-laravel/* app-laravel/
```

```sh
cd app-laravel/
```

Crie o Arquivo .env

```sh
cp .env.example .env
```

Atualize as variáveis de ambiente do arquivo .env

```dosini
APP_NAME="Especializa Ti"
APP_URL=http://localhost:8989

DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=root

CACHE_DRIVER=redis
QUEUE_CONNECTION=redis
SESSION_DRIVER=redis

REDIS_HOST=redis
REDIS_PASSWORD=null
REDIS_PORT=6379
```

Suba os containers do projeto

```sh
docker-compose up -d
```

Acessar o container

```sh
docker-compose exec app bash
```

Instalar as dependências do projeto

```sh
composer install
```

Gerar a key do projeto Laravel

```sh
php artisan key:generate
```

Acessar o projeto
[http://localhost:8989](http://localhost:8989)
