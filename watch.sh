#!/bin/sh

# simple script to hawk my github and publish to my remote servers

cd pause-heel

while [ 5 -eq 5 ]
do
  if git pull | grep 'Already up to date.'
  then
    echo ''
  else
    echo 'updated'
    cp -r www/* /usr/share/nginx/html/
  fi

  sleep 10
done
