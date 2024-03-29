# Projeto PHP e PostgreSQL em Docker

Este repositório contém um projeto simples de uma página HTML que utiliza Nginx como servidor web, PHP para processamento de dados e PostgreSQL como banco de dados. O projeto é configurado para ser executado em contêineres Docker para facilitar o desenvolvimento e a execução em diferentes ambientes.

## Pré-requisitos

Certifique-se de ter o Docker e o Docker Compose instalados em sua máquina antes de continuar.

- [Docker](https://docs.docker.com/get-docker/)
- [Docker Compose](https://docs.docker.com/compose/install/)

## Como rodar o projeto

1. Clone este repositório para o seu ambiente local:
```
git clone https://github.com/Gabrielcamargos28/page-php-docker
```
3. Navegue até o diretório do projeto:
```
cd seu-repositorio
```
4. Inicie os contêineres usando o Docker Compose:
```
docker-compose up -d
```
6. Para parar os contêineres, execute:
```
docker-compose down
```
