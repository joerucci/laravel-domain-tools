# laravel-domain-tools

Artisan command extensions for organizing Laravel projects by domain.

This package adds support for generating Laravel classes inside domain-specific folders using enhanced `make:*` commands. It is ideal for applications following a domain-first or modular architecture.

## Features

- Adds a `--domain` or `{domain}` argument to Laravel's artisan make commands
- Scaffolds files under `app/YourDomain/...` automatically
- Supports traits, notifications, providers, listeners, casts, and more
- Interactive prompts when domain is not provided

## Installation

```bash
composer require joerucci/laravel-domain-tools --dev