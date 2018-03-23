# PHP-workshop-2018
Files related to the PHP workshop 2018

<h3>To install docker: </h1> Run the install_docker.sh script
<h3>To install docker and download php image: </h3> Run the PHP_setup.sh script


<h3>Command to start the docker container:</h3>

sudo docker run -p 80:80 -it -v /path/in/your/filesystem:/path/inside/container linode/lamp bash

<h3>Example: </h3>

sudo docker run -p 80:80 -it -v /home/students/:/root/PHP linode/lamp bash

This will map the entire students folder to the /root/PHP/ folder inside the container. 
Any file created inside the /home/students/ directory will reflect in the /root/PHP directory
