
### Basic Commands (A) - Used
1. SHOW LIST OF CONTAINER 
- docker-compose ps
- docker container ls
- docker ps

2. GITINSIDE OF THE DOCKER CONTAINER
- docker exec -it <container_id> /bin/bash
 
3. STOP ALL RUNNING CONTAINER
- docker-compose stop

4. To print list of containers including stopped one
- docker-compose ps -a

5. Run docker and exit command line running
- docker-compose up -d

6. Run docker and continue running in command line
- docker-compose up

7. Show source of the docker file 
docker compose ls

8. How to run commands inside docker while not using ssh into container
- docker exec <container_id> php -v
- docker-compose exec php php -v

9. How to run and install packages inside docker container if not exist? throught external CLI in windows 10
- docker exec <container-name> apt-get update
- docker exec <container-name> apt-get install vi
- docker exec <container-name> apt-get install nano

10. Display all the network created for bridging
- docker network connect	Connect a container to a network
- docker network create	Create a network
- docker network disconnect	Disconnect a container from a network
- docker network inspect	Display detailed information on one or more networks
- docker network ls	List networks
- docker network prune	Remove all unused networks
- docker network rm	Remove one or more networks