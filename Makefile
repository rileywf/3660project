userAccount = wear3660

public_directory = /home/$(userAccount)/public_html/
directory = /home/$(userAccount)/3660project/

test:
		phpunit -v tests
deploy:
	if [ ! -d $(public_directory) ]; then \
		mkdir $(public_directory); \
	fi
	cp $(directory)src/* $(public_directory)
	chmod -R 755 $(public_directory)

clean:
		rm -rf .phpunit.*
