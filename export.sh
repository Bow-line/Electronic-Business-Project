#!/bin/bash

DATABASE_CONTAINER="be_180112_db"
DATABASE_NAME="prestashop"
DATABASE_ROOT_PASSWORD="prestashop"
DATABASE_ROOT_LOGIN="root"
DUMP_FILE="./db/mysql.sql"

docker exec -i $DATABASE_CONTAINER mysqldump -u$DATABASE_ROOT_LOGIN -p$DATABASE_ROOT_PASSWORD $DATABASE_NAME > $DUMP_FILE 