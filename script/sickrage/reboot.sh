#!/bin/bash

sudo /etc/init.d/sickrage-"$1" restart
echo "ok"
