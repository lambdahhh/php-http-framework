init: down-clear pull build-pull up
down: down-clear

up:
	docker-compose up -d
down-clear:
	docker-compose down -v --remove-orphans
pull:
	docker-compose pull
build-pull:
	docker-compose build --pull
