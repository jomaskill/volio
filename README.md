# About
This is a small sample project, to create a person and send emails.
<br>
The tech stack for this project is
* Laravel
* Mysql
* TailwindCss
* Mailpit

There's a demo video as well, check it out:
<br>
https://www.loom.com/share/9369855417fa4c88a6191c40a66b2a35
## Setup
 Clone the repository
 Install dependecies
<br>

```
cp .env.example .env
composer install
npm install
```

I have setup services for mysql, and mailpit, you just have to build the containers
   ```
   docker-compose up
   ```
Now we wil start the Php server, along with node

   ```
   php artisan serve
   npm run dev
   ```

To build the database


   ```
   php artisan migrate
   ```

To see the application go to

``
http://localhost:8000
``

To check the email server, just go to

   ``
  http://localhost:8025
   ``

I've made a some tests, fell free to check it out with

   ```
   php artisan test
   ```
