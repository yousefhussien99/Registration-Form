<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## About Project
This project is a simple registration form that allows users to input their personal details and register on the website. The project includes various features such as client-side and server-side validations, header and footer inclusion, API integration, database operations, AJAX support, email notification, multi-language support, and automated testing.

## Features
1. Registration Web Form:
   - The project includes a registration form where users can input their personal details such as full name, username, birthdate, phone number, address, password, confirm password, user image, and email.
   - Client-side validations ensure that all mandatory fields are filled, correct data types are entered for email and birthdate, and password criteria are met (at least 8 characters with at least 1 number and 1 special character).
   - Server-side validation checks if the entered username is already registered before inserting the data into the database.
2. Header and Footer Inclusion:
    - The Laravel project incorporates header and footer pages to provide a consistent layout across the website.
    - The header and footer are included using Laravel's master layout feature, ensuring easy maintenance and consistency across multiple pages.
3. Born-in-the-Same-Day API Integration:
    - The project integrates with a third-party MDBI API (IMDb8) to retrieve a list of actors born on the same day as entered in the birthdate field.
    - This feature enhances user experience by providing additional information related to the birthdate input.
4. Database Operations:
    - Database operations are performed using Laravel's Eloquent ORM (Object-Relational Mapping) to interact with the MySQL database.
    - User data submitted through the registration form is securely stored in the database.
    - Uploaded user images are processed and stored on the server, with their names stored in the database for future reference.
5. AJAX Support:
    - AJAX (Asynchronous JavaScript and XML) is supported to enable dynamic interaction with the server without page reload.
    - This enhances the user experience by providing seamless and responsive interactions with the web application.
6. Email Notification:
    - Upon successful registration, the project automatically sends an email notification to the system administrator.
    - The email title is "New registered user", and the content includes the username of the newly registered user.
    - This feature ensures that system administrators are promptly informed about new user registrations.
7. Multi-language Support:
    - The Laravel project supports multi-language functionality, with English as the primary language and Arabic as the secondary language.
    - Users have the option to switch between languages, enhancing accessibility for a diverse user base.
8. Automated Testing:
    - Five automated test functions are implemented using Laravel testing, ensuring the robustness and reliability of the web application.
    - At least one of the automated tests is a feature test, verifying that the form successfully inserts a new student and displays back results such as "insertion performed successfully".

## Installation
1. Clone the repository
2. Run `composer install` to install the project dependencies
3. Create a new MySQL database and update the `.env` file with your database credentials
4. Run `php artisan migrate` to create the necessary database tables
5. Run `php artisan serve` to start the Laravel development server
6. Visit `http://localhost:8000` in your browser to view the project

## Authors
- [Youssef Hussein]
-[Omar Osama]
-[Doaa Ali]
-[Esraa Mahmoud]
-[Toqa Mohamed]
