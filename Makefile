.PHONY: start
start:
	@docker-compose up --build -d || docker compose up --build -d
	@docker-compose exec -it app cp .env.example .env || docker compose exec -it app cp .env.example .env
	@docker-compose exec -it app composer install || docker compose exec -it app composer install
	@sleep 10
	@docker-compose exec -it app php artisan migrate || docker compose exec -it app php artisan migrate
	@docker-compose exec -it app php artisan db:seed || docker compose exec -it app php artisan db:seed
	@docker-compose exec -it app chmod 777 -R bootstrap/cache storage || docker compose exec -it app chmod 777 -R bootstrap/cache storage