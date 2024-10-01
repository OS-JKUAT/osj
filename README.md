# Open Source JKUAT (OSJ)

Welcome to **Open Source JKUAT (OSJ)**, an open-source web platform built by and for JKUAT students. Our mission is to create a vibrant community where students can share resources, collaborate, and engage in university life through a single platform.

## Table of Contents
- [About OSJ](#about-osj)
- [Features](#features)
- [Tech Stack](#tech-stack)
- [Packages in Use](#packages-in-use)
- [Contribution Guidelines](#contribution-guidelines)
- [Getting Started](#getting-started)
- [License](#license)
- [Contacts](#contacts)

## About OSJ
OSJ is designed to address various aspects of university life for JKUAT students. While anyone can sign up, using a JKUAT email grants access to additional features. Our platform provides students with tools to excel academically, socially, and professionally.

## Features
- **Blogs & News**: Students can publish articles to practice and showcase their writing skills.
- **University Processes & Procedures**: Detailed guides on processes not covered by the main JKUAT website (e.g., how to replace your student ID).
- **JKUAT Mapping**: Precise maps using Google Maps to navigate the university.
- **Resource Sharing**: A place to share notes, assignments, and study materials (e.g., Civil Engineering Class of 2022 resources).
- **StackOverflow-style Q&A**: A forum for students to ask and answer academic questions related to exams and assignments.
- **Student Projects**: A showcase of projects completed by JKUAT students, with links to LinkedIn profiles for better visibility to potential employers.
- **Events**: University-wide event listings for better planning and visibility.
- **JKUSA Section**: A space for JKUSA to share important information and updates.
- **Scholarships & Opportunities**: A platform for students to discover scholarships, internships, and job opportunities.
- **Clubs & Societies**: Explore and join clubs and societies.
- **Accommodation Listings**: Find accommodation around the university.
- **AI Integrations**: Students can access premium AI tools and applications.
- **E-commerce for Students**: A marketplace for students to buy and sell items, from textbooks to household goods.
- **Lost & Found**: A section for listing lost and found items.
- **Work Publishing**: Students can publish and promote their works.
- **Social**: A space for students to interact.
- **General Info**: eg premium services that accept jkuat student email.


## Tech Stack
OSJ is built using the **TALL** stack:
- **TailwindCSS**: For modern and responsive UI design. [Documentation](https://tailwindcss.com/docs/installation) .
- **Alpine.js**: Lightweight JavaScript framework for interactivity. [Documentation](https://livewire.laravel.com/docs/alpine) .
- **Laravel**: PHP framework powering the backend. [Documentation](https://laravel.com/docs)
- **Livewire**: For building dynamic, reactive components without a full SPA. [Documentation](https://livewire.laravel.com/docs) .

## Packages in Use

### Authentication
- **[Laravel Breeze](https://laravel.com/docs/10.x/starter-kits#breeze)**: A simple authentication system that includes login, registration, and password reset functionality with TailwindCSS and Blade components.
- **[Laravel Permissions](https://spatie.be/docs/laravel-permission/v5/introduction)**: A package to manage roles and permissions in your Laravel app.
- **[Laravel Activity Log](https://spatie.be/docs/laravel-activitylog/v4/introduction)**: Logs model changes and records the actions taken on your models.
- **[Laravel Authentication Log](https://github.com/rappasoft/laravel-authentication-log)**: Tracks the authentication events of users such as login and logout for security purposes.
- **[Laravolt Avatar](https://laravolt.dev/docs/avatar/)**: A package to generate unique avatars based on users' names or email addresses.


### UI Components
- **[MaryUI](https://maryui.vercel.app/)**: A UI library that provides pre-built components for building consistent and responsive interfaces.
- **[Blade Icons](https://github.com/blade-ui-kit/blade-icons)**: Adds support for using icon sets with Blade components, making it easy to include icons in your app.

### Debugging
- **[Laravel Debugbar](https://github.com/barryvdh/laravel-debugbar)**: Displays debugging information such as queries, logs, and requests in the browser.
- **[Pulse](https://github.com/LaravelReady/pulse)**: A package for real-time monitoring of Laravel applications with metrics.
- **[Log Viewer](https://github.com/opcodesio/log-viewer)**: Helps you view and search through Laravel logs within the browser.

### Miscellaneous
- **[Spatie Laravel Cookie Consent](https://spatie.be/docs/laravel-cookie-consent/v2/introduction)**: Adds a customizable cookie consent banner to your Laravel app to comply with privacy regulations.
- **[Spatie Laravel Web Tinker](https://spatie.be/docs/laravel-web-tinker/v2/introduction)**: A web-based REPL for executing PHP code in your Laravel app.
- **[Cybercog Laravel Love](https://github.com/cybercog/laravel-love)**: Adds functionality for users to "like" or "dislike" content in your Laravel app.
- **[RalphJSmit Laravel SEO](https://github.com/ralphjsmit/laravel-seo)**: A package to help manage SEO metadata and structure in Laravel projects.
- **[Laravel Charts](https://github.com/LaravelDaily/laravel-charts)**: A simple and customizable charting package for Laravel.
- **[Geocoder PHP Laravel](https://github.com/geocoder-php/GeocoderLaravel)**: Geocoding services to convert addresses into coordinates and vice versa.
- **[Livewire PowerGrid](https://livewire-powergrid.com/docs/)**: A dynamic table-building package that works with Laravel Livewire.
- **[Chatify](https://github.com/munafio/chatify)**: A Laravel-based package that provides a real-time messaging system for users.
- **[Spatie Laravel Tags](https://spatie.be/docs/laravel-tags/v2/introduction)**: Allows you to attach tags to any Eloquent model.
- **[Talk](https://github.com/nahid/talk)**: A Laravel-based real-time messaging system for building chat applications.
- **[Spatie Laravel Sitemap](https://spatie.be/docs/laravel-sitemap/v5/introduction)**: Automatically generate a sitemap for your Laravel app.
- **[Mewebstudio Captcha](https://github.com/mewebstudio/captcha)**: Adds CAPTCHA protection to Laravel forms.
- **[Artisan SEO Tools](https://github.com/artesaos/seotools)**: A set of tools for managing SEO meta tags and Open Graph data.
- **[Laravel IDE Helper](https://github.com/barryvdh/laravel-ide-helper)**: Generates helper files for IDE auto-completion for Laravel projects.
- **[Laravel Excel](https://laravel-excel.com/)**: An Excel package for exporting and importing Excel files into Laravel apps.
- **[Laravel DOMPDF](https://github.com/barryvdh/laravel-dompdf)**: A Laravel wrapper for DOMPDF to generate PDFs from HTML content.


## Contribution Guidelines
We welcome contributions from students and developers alike. To contribute:
1. Fork the repository.
2. Create a new branch (`git checkout -b feature-name`).
3. Write clear and concise code with proper documentation.
4. Submit a pull request (PR) with a detailed description of your changes.
5. Ensure that all tests pass before submitting your PR.

Contributors will gain valuable real-world experience and build a portfolio while contributing to this meaningful project.

## Getting Started
To run the project locally, follow these steps:

### Prerequisites
- **[Docker Desktop](https://www.docker.com/products/docker-desktop/)**: Laravel Sail runs on Docker, so you need Docker installed and running on your machine. Its available for Windows, macOS, and Linux.

- **Note for Windows Users:** If you're using Windows, you'll need WSL 2 (Windows Subsystem for Linux 2). Docker Desktop requires WSL 2 for better performance and compatibility. You can install WSL 2 by following the official Microsoft guide [here](https://learn.microsoft.com/en-us/windows/wsl/install).

- **Composer (If Not Installed Already):** You will need Composer to install Laravel dependencies, including Sail. Composer is a dependency management tool for PHP. You can install or learn more about Composer [here](https://getcomposer.org/).

- **Node.js and npm (If Not Installed Already):** learn more [here](https://nodejs.org/en).


1. Clone the repository:
    ```bash
    git clone git@github.com:OS-JKUAT/osj.git
    ```
2. Navigate to the project directory:
    ```bash
    cd osj
    ```
3. Install dependencies:
    ```bash
    ./vendor/bin/sail composer install
    ./vendor/bin/sail npm install
    ```
4. Copy the .env.example file to .env:
    ```bash
    cp .env.example .env
    ```
5. Generate Application Key:
    ```bash
    ./vendor/bin/sail artisan key:generate
    ```
6. Set Up Database Configuration: Open the .env file and set your database credentials:
    ```bash
    DB_CONNECTION=mysql
    DB_HOST=mysql
    DB_PORT=3306
    DB_DATABASE=your_database_name
    DB_USERNAME=your_username
    DB_PASSWORD=your_password
    ```
7. Run Database Migrations:
    ```bash
    ./vendor/bin/sail artisan migrate
    ```
8. Compile Frontend Assets:
    ```bash
    ./vendor/bin/sail npm run dev
    ```
9. Run the application using Laravel Sail:
    ```bash
    ./vendor/bin/sail up
    ```
10. Access the Application: Through the provided url by sail access the application.

### Tips
 - You can create an alias for ./vendor/bin/sail .
 - php artisan < command > format will now be ./vendor/bin/sail artisan < command >.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into laracasts comprehensive video library.

## Security Vulnerabilities

If you discover a security vulnerability within OSJ site/code, please send an e-mail to Lewis Wambugu via [lewiswambugu01@gmail.com](mailto:lewiswambugu01@gmail.com). All security vulnerabilities will be promptly addressed.

## OSJ Sponsors & Partners

Use the contacts below to see how you can sponsor and or be a partner and the benefits of it.

## Contributing

- Comming soon...

## Code of Conduct

In order to ensure that the OSJ community is welcoming to all, our code of conduct is adapted from the Laravel [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct), please review and abide it.

## License
This project is licensed under the [MIT License](LICENSE).

## Contacts
For more information or to get involved, feel free to contact us:

- **WhatsApp**: [lewys](https://wa.me/254716340285)
- **Email**: [lewiswambugu01@gmail.com](mailto:lewiswambugu01@gmail.com)

Join us in building a legacy and creating opportunities for students to sharpen their skills and contribute to the JKUAT community!



