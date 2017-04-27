#!/bin/bash

sudo /etc/init.d/couchpotato-"$1" restart
echo "ok"
