#!/bin/sh
pass=`sudo cat /var/lib/jenkins/secrets/initialAdminPassword` && echo 'jenkins.model.Jenkins.instance.securityRealm.createAccount("user1", "password123")' | sudo java -jar jenkins-cli.jar -auth admin:$pass -s http://localhost:8080/ groovy =
