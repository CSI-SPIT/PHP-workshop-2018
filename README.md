# PHP-workshop-2018
Files related to the PHP workshop 2018

Command to start the docker container:

sudo docker run -p 80:80 -it -v /path/in/your/filesystem:/path/inside/container linode/lamp bash

example:

sudo docker run -p 80:80 -it -v /home/students/:/root/PHP linode/lamp bash

This will map the entire students folder to the /root/PHP/ folder inside the container. 
Any file created inside the /home/students/ directory will reflect in the /root/PHP directory
