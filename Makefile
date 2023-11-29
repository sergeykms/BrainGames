install: # install project Brain Games
	composer install

brain-games: # output of the greeting
	./bin/brain-games

brain-even: # checking a number for parity
	./bin/brain-even

validate: # validate composer.json
	composer validate

lint:
	composer exec --verbose phpcs -- --standard=PSR12 src bin