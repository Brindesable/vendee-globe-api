#! /bin/bash

export PROJECT=vg-api
docker run --name $PROJECT -d "$PROJECT":latest
