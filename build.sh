#!/bin/sh
docker start 018d5d774770
#docker run -dit -v /home/llaiaipp/dev/staging:/var/www/html registry.cn-hangzhou.aliyuncs.com/jeromepengtagin/staging /bin/bash
docker exec -it 018d5d774770 service ssh start
docker exec -it 018d5d774770 service apache2 start
docker exec -it 018d5d774770 service mongodb start
cd /home/llaiaipp/.local/share/umake/web/visual-studio-code
chmod +x code
./code --user-data-dir=/home/llaiaipp/dev/staging
