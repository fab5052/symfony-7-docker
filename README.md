# symfony-7-docker
git add .
git commit -m "Make the output digits variable"
git tag -a 0.1.1 -m "Make the output digits variable"
git push 
git push --tags

Installation Environnement Symfony 7 et principaux composants sous Docker

[user@...] # cd ~

[user@...] # mkdir -p workstation/symfony-7-docker

######################################################################


copier-coller le dossier 'automation'(docker et script)   &&  fichier 'docker-compose.yml' -> /!\ à la racine du projet


######################################################################

[user@...] # sudo docker-compose build

[user@...] # sudo docker-compose up

######################################################################

[user@...] # sudo docker exec -ti server /bin/bash

/!\ --> [root@....] # symfony check:requirements

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
######################################################################

-> [root@...] # symfony new ./temp-symfony --version="7.0.*" --webapp

-> ...........# mv temp-symfony/.* temp-symfony/* ./

->............# rmdir temp-symfony

######################################################################

[user@...] # sudo docker-compose up

END.

######################################################################
Essayer les containers:

http://localhost -> Synfony7

http://localhost:8090 -> PhpMyAdmin

http://localhost:1080 -> MailerCatcher

##Installer Env Ubuntu WSL2: ##

