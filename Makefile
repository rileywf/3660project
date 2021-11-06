userAccount = wear3660

public_directory = /home/$(userAccount)/public_html/
<<<<<<< HEAD
directory = /home/$(userAccount)/3660project/
=======
#directory = /home/$(userAccount)/Documents/3660project/
directory = /home/3660project/

.PHONY: test
>>>>>>> 499764d369a0c1446074f5304fdd91724372daff

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
