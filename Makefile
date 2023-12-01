install: # install project Brain Games
	composer install

brain-games: # output of the greeting
	./bin/brain-games

brain-even: # checking a number for parity
	./bin/brain-even

brain-calc: # result of the expression
	./bin/brain-calc

brain-gcd: # greatest common divisor of given numbers
	./bin/brain-gcd

brain-progression: # number is missing in the progression
	./bin/brain-progression

validate: # validate composer.json
	composer validate

lint:
	composer exec --verbose phpcs -- --standard=PSR12 src bin

auto:
	composer dump-autoload