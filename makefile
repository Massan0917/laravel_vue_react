up:
	docker compose up -d

bash:
	docker compose exec app bash

run-dev:
	docker compose exec app npm run dev

init:
	docker compose up -d
	docker compose exec app npm run dev