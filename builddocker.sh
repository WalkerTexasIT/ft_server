docker stop cont
docker rm cont
docker image build -t cash .
docker run -d -p 80:80 -p 443:443 --name cont cash
docker ps
