.PHONY: clean
clean:
		rm -rf .phpunit.*

test:
		phpunit -v tests
