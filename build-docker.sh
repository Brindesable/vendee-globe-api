#! /bin/bash
export PROJECT=vg-api
rm -rf $PROJECT &&
git clone git@github.com:Brindesable/vendee-globe-api.git $PROJECT &&
docker build --build-arg PROJECT=$PROJECT -t $PROJECT . &&
rm -rf $PROJECT
