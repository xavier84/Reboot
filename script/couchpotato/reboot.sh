#!/bin/bash

echo "$1"
echo "sh"
sudo /etc/init.d/couchpotato-"$1" restart
echo "ok"
id