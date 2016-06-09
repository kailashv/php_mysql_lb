FROM tutum/apache-php

MAINTAINER Kailash Verma <kailashverma2402@gmail.com>

RUN apt-get update && apt-get install -yq git && rm -rf /var/lib/apt/lists/*

RUN rm -fr /app

ADD . /app

