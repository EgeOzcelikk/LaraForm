# LaraForm

> **Status: archived internship project (2024).** This repository is kept as a record of work done during my internship at FNSS Savunma Sistemleri. It is not maintained.
> I later rebuilt the idea from scratch as a personal project with a cleaner design, tests and Docker Compose: **[social-auth-laravel](https://github.com/EgeOzcelikk/social-auth-laravel)**.

## About

LaraForm is a Laravel web platform built in a 4-person intern team during a one-month internship (2024). The task was to build a replica of an internal company platform and add social login to it. I was the main contributor and wrote most of the code.

The platform lets registered users see each other's contact and job information (where someone works and what they work on), so colleagues can find each other more easily.

The project contains no confidential company information. It is an independent replica written by the intern team.

## Tech stack

- **Laravel 11** (PHP 8.2)
- **Laravel Breeze** for email/password authentication (register, login, password reset, email verification)
- **Laravel Socialite** for OAuth login with **GitHub** and **Google**
- **Tailwind CSS** + Vite for the frontend
- **Laravel Sail** (Docker) as the local development environment
- Pest for tests (Breeze defaults)

## What works

- Email/password registration and login (Breeze)
- Redirect to GitHub/Google and creation of a new user account on the first OAuth login
- Automatic unique username generation from the provider name
- Profile edit and account deletion pages (Breeze)

## Known issues

These were left unresolved when the internship ended. They are documented here on purpose and fixed in [social-auth-laravel](https://github.com/EgeOzcelikk/social-auth-laravel).

- **Returning OAuth users cannot log in.** The callback rejects any email that already exists in the database, which includes accounts created by an earlier OAuth login. Only the very first social login succeeds.
- **No account linking.** A user who registered with email/password cannot later sign in with GitHub/Google using the same email.
- **Errors are hidden.** All exceptions in the OAuth callback are caught and the user is silently redirected to `/login`, which makes failures hard to debug.
- **Provider name is not validated.** `/auth/{provider}/redirect` accepts any value instead of an allowlist of supported providers.
- **OAuth access tokens are stored in plain text** in the `users` table.
- **No Docker configuration is committed.** Sail was used locally, but `docker-compose.yml` is not part of the repository.
- The `/register` routes are defined twice (`web.php` and `auth.php`).
- No tests were written for the OAuth flow.

## Running locally

```bash
cd laraveltry1.0
cp .env.example .env          # add GITHUB_* and GOOGLE_* OAuth credentials
composer install
php artisan sail:install      # generates docker-compose.yml
./vendor/bin/sail up -d
./vendor/bin/sail artisan key:generate
./vendor/bin/sail artisan migrate
npm install && npm run dev
```

OAuth callback URLs to register with the providers:
`http://localhost/auth/github/callback` and `http://localhost/auth/google/callback`.

## Repository changes after the internship

- 2026: removed vehicle photos taken from the FNSS website (copyright belongs to FNSS) and rewrote this README. The application code is unchanged from 2024.
