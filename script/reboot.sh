#!/bin/bash

if [ "$1" == "nginx" ] || [ "$1" == "php5-fpm" ] ; then
	sudo /etc/init.d/"$1" restart
else
	grep -w "$1" /var/www/rutorrent/histo.log &> /dev/null
	if [ $? -eq 1 ]; then
		echo -e "Erreur l'utilisateur "$1" n'existe pas"
		exit 1
	else
		sudo /etc/init.d/"$2"-"$1" restart
		echo "ok"
	fi
fi