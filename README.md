# Dubai Realty — PHP Real Estate Website

A multi-page real estate website built with PHP, MySQL, SCSS, and vanilla JavaScript.

The project was converted from a static HTML/CSS layout into a modular PHP website with reusable partials, dynamic blog data, article pages, form handling, database storage, and an SCSS build workflow.

## Features

- Multi-page PHP structure
- Reusable partials for header, footer, article cards, article content, and recommended posts
- Dynamic blog posts from `data/articles.php`
- Blog search, category filtering, and pagination
- Single article pages by `slug`
- Related article recommendations
- SEO/meta tags and dynamic Open Graph data
- Contact, callback, and quick contact forms
- MySQL storage for form submissions
- Basic honeypot anti-spam protection
- SCSS build with Sass, PostCSS, and Autoprefixer

## Tech Stack

- PHP
- MySQL
- HTML5
- SCSS / CSS3
- JavaScript
- Sass
- PostCSS
- Autoprefixer
- npm

## Project Structure

```text
real-estate/
├── css/
├── data/
├── fonts/
├── handlers/
├── img/
├── js/
├── partials/
├── scss/
├── storage/
├── article.php
├── blog.php
├── index.php
├── contact.php
├── services.php
├── database.example.php
├── database.schema.sql
├── package.json
└── postcss.config.js
```

## Local Setup

Clone the repository and install dependencies:

```bash
git clone https://github.com/YOUR-USERNAME/real-estate-php.git
cd real-estate-php
npm install
```

Create a local database config file:

```text
database.php
```

Use `database.example.php` as a template and update your database credentials.

Import the database tables from:

```text
database.schema.sql
```

## CSS Build

Build CSS once:

```bash
npm run build:css
```

Run SCSS watch mode:

```bash
npm run watch:css
```

Edit SCSS files only. The final compiled CSS file is:

```text
css/style.css
```

## Forms

The project includes three form handlers:

```text
handlers/callback-form.php
handlers/contact-form.php
handlers/quick-contact-form.php
```

Each handler validates input, uses a honeypot field, sends an email, saves data to MySQL, and writes a local log file.

## Git Ignore Notes

The following files should not be committed:

```text
database.php
node_modules/
storage/*.log
css/style.compiled.css
css/style.backup.css
scss/*.backup.scss
.osp/
*.zip
*.rar
```

## Possible Improvements

- Migrate Sass `@import` to `@use`
- Add dedicated `blog.scss` and `article.scss`
- Add a custom `404.php`
- Replace `mail()` with SMTP
- Add CSRF protection
- Move article content to a database or CMS

## Author

Created by Marina Mossa.
