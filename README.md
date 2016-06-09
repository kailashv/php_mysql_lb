## php_mysql_lb
php app, apache , mysql, nginx

## Introduction :

* In this project, there is a php application with MySQL as it database.
* Two instance of php application is running on apache server.
* Both instances are linked to MySQL.

## Technologies/Tools used : 

* php
* MySQL
* Docker containerization
* Docker compose
* Nginx.

## Deployment :
* The php application is deployed over Docker Container.
* A Docker Image is created with all of its packages and dependencies.
* That image is availabe in the Docker Hub.
* That image is capable to run/deploy in any Linux platform.
* Two instance of php application is running, i.e. two Docker Containers are running on a machine with different ports.
* one instance of MySQL is running, i.e. one Docker container of MySQL.
* Nginx is used as load balancer.
* Nginx is also running in Docker Container. 
* Nginx is linked with with apache instances i.e. application instance and all the requests are bieng forwarded/divided to apache via nginx load balancer.
* Nginx will distribute the load between two apche instances and accordingly both instances will communicate with MySQL Container.
* There are communication between all containers via Container linking.
* Nginx.cong is changed at runntime with the help of Dockerfile written to create image of nginx load balancer.
* These way we are achieving Load balancing between two apache instances and mysql.
