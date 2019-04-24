#!/bin/sh
rm *.m4a
youtube-dl -f 140 $1 > /dev/null
ls -1 | grep *$1*