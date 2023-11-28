install: # install project Brain Games
	composer install

brain-games: # output of the greeting
	./bin/brain-games

validate: # validate composer.json
	composer validate