# Event-Crud-Symfony5
Events CRUD with login, register and roles requires php: >=7.2.5/Symfony 5.4
## features 
### Languages and frameworks
* PHP >=7.2.5
* MySQL 
* HTML / CSS
* Javascript 

### Entities
* User
* Event
* Category
* Contact
* Tag

## To initialize the project 
* clone the repository: `git clone https://github.com/malekkadri/User-Crud-Symfony5.git`
* Install all packages : `composer install`
* Create new database: `symfony console doctrine:database:create`
* Build the migration: `symfony console make:migration`
* Export into MySQL: `symfony console doctrine:migrations:migrate`
* Run data fixture: `php bin/console doctrine:fixtures:load`
* use `admin1@example.com/admin1234` to connect
