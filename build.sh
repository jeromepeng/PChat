#!/bin/sh
vim /home/llaiaipp/dev/staging/build.sh
docker start 018d5d774770
#docker run -dit -v /home/llaiaipp/dev/staging:/var/www/html registry.cn-hangzhou.aliyuncs.com/jeromepengtagin/staging /bin/bash
docker exec -it 018d5d774770 service ssh start
docker exec -it 018d5d774770 service apache2 start