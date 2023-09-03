# ARMS Docker
[Инвентаризация](https://github.com/spo0okie/arms_inventory) завернутая в Docker

## Requirements
  * docker
  * Mysql 5.7 / Mariadb

## Install
```bash
mkdir /opt/inventory
cd /opt/inventory
git clone https://github.com/spo0okie/arms-docker.git .
```

## Setup
  * config/db.php - [local DB setup](https://wiki.reviakin.net/%D0%B8%D0%BD%D0%B2%D0%B5%D0%BD%D1%82%D0%B0%D1%80%D0%B8%D0%B7%D0%B0%D1%86%D0%B8%D1%8F:%D0%BD%D0%B0%D1%81%D1%82%D1%80%D0%BE%D0%B9%D0%BA%D0%B0#%D0%B1%D0%B0%D0%B7%D0%B0_%D0%B4%D0%B0%D0%BD%D0%BD%D1%8B%D1%85)
  * config/ldap.php - [LDAP backend setup](https://wiki.reviakin.net/%D0%B8%D0%BD%D0%B2%D0%B5%D0%BD%D1%82%D0%B0%D1%80%D0%B8%D0%B7%D0%B0%D1%86%D0%B8%D1%8F:%D0%BD%D0%B0%D1%81%D1%82%D1%80%D0%BE%D0%B9%D0%BA%D0%B0#ldap_backend)
  * config/params.php - [common parameters](https://wiki.reviakin.net/%D0%B8%D0%BD%D0%B2%D0%B5%D0%BD%D1%82%D0%B0%D1%80%D0%B8%D0%B7%D0%B0%D1%86%D0%B8%D1%8F:%D0%BD%D0%B0%D1%81%D1%82%D1%80%D0%BE%D0%B9%D0%BA%D0%B0#params)

## Run
```bash
docker compose -f ./docker-compose.yml up
```
