install: # install project Brain Games
	composer install

brain-games: # output of the greeting
	./bin/brain-games

validate: # validate composer.json
	composer validate

lint:
	composer exec --verbose phpcs -- --standard=PSR12 src bin