### 1.copy .env.example to .env file
### 2.set PickVisa_Authorization_Token value on .env file 
### 3.install vendor files and connect to database 
### 4.run php artisan migrate command for generating database schema
### 5.for production it is advisable you can cache route and configuration files
### 6. Run schedule adding this rule to crontab - "* * * * * cd /path-to-your-project && php artisan schedule:run >> /dev/null 2>&1" for more https://laravel.com/docs/8.x/scheduling#running-the-scheduler
 
