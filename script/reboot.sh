#!/bin/bash

echo "$2"
echo "$1"
sudo /etc/init.d/"$2"-"$1" restart
echo "ok"

