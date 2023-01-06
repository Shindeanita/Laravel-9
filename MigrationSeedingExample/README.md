
About Migration what I understand about It:

<h2>Migration:</h2>

-> In laravel by using migration we can generate table from laravel code.
-> Migration is needed when more than one developer working on project and they created different tables for the projects. Now when we combine the all the codes and table in one project that time we need to create tables manually one by one and that task is taking to much time and not feasible. 
-> To overcome such problems we need migration.
-> By using migration we can merge tables with database easily.

<ol>
<li>Create migration we can use php artisan</li>

    >>php artisan make:migration create_tour_table


this will create the one file under the ->database->migration folder with name date and name
in that file we can define the structure of the table. we can add new columns and constraints on it.

<li>migrate table with database</li>

    - setup database configuration

    >>php artisan migrate

    - it will migrate all tables with database.

<li>reset the all previously migration</li>

    >>php artisan migrate:reset

<li> rollback last migrated table</li>

    >>php artisan migrate:rollback

<li> rollback step</li>
    >>php artisan migrate --step = 2
    last 2 migrated data roallbacked.

<li> single file migration</li>
    >>php artisan migrate --path='/database/migration/<<file_name>>

</ol>