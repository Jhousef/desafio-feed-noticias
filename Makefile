.PHONY: start
start:
	@docker network create laravel
	@docker-compose up --build -d
	@docker-compose exec -it app cp .env.example .env
	@docker-compose exec -it app php artisan migrate
	@docker-compose exec -it app php artisan db:seed
	@docker-compose exec -it app php chmod 777 -R bootstrap/cache storage