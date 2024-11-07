copy .env.example .env

composer install

php artisan migrate

npm install

npm run dev

After this we have to run bellow command for run PermissionTableSeeder seeder:

php artisan db:seed --class=PermissionTableSeeder


php artisan db:seed --class=CreateAdminUserSeeder


php artisan key:generate


php artisan serve

Email: admin@gmail.com

Password: 123456

=====================================

Add Bootstrap dependency to your project:

bash

Copy code

npm install bootstrap

Include Bootstrap in your resources/js/app.js file:

javascript

Copy code

import 'bootstrap';

Then, run:

bash

Copy code

npm run dev

php artisan migrate:fresh --seed


php artisan permission:cache-reset
