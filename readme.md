## Build the project

Now, run `docker-compose up -d` from your project directory.

```shell
bash docker-compose.bash up -d
```

This runs `docker-compose` up in detached mode, pulls the needed Docker images, and starts the nginx and php-fmp containers, as shown in the example below.

## Build image

Image can be built with the following command

```shell
docker build -t ibqn/php .
```

and afterwards it should be uploaded to `docker hub`

```shell
docker push ibqn/php
```

## Shutdown and cleanup

The command `docker-compose down` removes the containers and default network, but preserves your configuration files.

The command `docker-compose down --volumes` removes the containers, default network, and volumes.

## More info

-   [Quickstart: Compose](https://docs.docker.com/compose/gettingstarted/)
