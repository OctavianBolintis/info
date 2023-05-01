INSTALL site
 docker-compose up -d
 import database:
 docker exec -i mysql mysql -uroot drupal < ./data/db/backup.sql
 export database: docker exec mysql mysqldump -u root drupal > ./data/db/backup.sql
