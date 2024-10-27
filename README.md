# symfony-7-docker
Installation Environnement Symfony7 sous Docker

cd ~

mkdir -p workstation/symfony-7-docker

cd workstation/contribution-blog-symfony-7-docker

mkdir -p automation/docker && cd automation/docker

touch Dockerfile

docker-compose build

docker-compose up


docker exec -ti blog-server /bin/bash

!-> [root@....] # symfony check:requirements

--> Symfony Requirements Checker:

######################################################################

> PHP is using the following php.ini file:
/usr/local/etc/php/php.ini

> Checking Symfony requirements:

......................................

 [OK]
 Your system is ready to run Symfony projects
######################################################################

Note  The command console can use a different php.ini file
~~~~  than the one used by your web server.
      Please check that both the console and the web server
      are using the same PHP version and configuration.

-> [root@...] # symfony new ./temp-symfony --version="7.0.*" --webapp

-> ...........# mv temp-symfony/.* temp-symfony/* ./

->............# rmdir temp-symfony

[user@...] # docker-compose up

END.


Essayer les containers:

http://localhost -> Synfony7

http://localhost:8090 -> PhpMyAdmin

http://localhost:1080 -> MailerCatcher

