# Resizer Plugin for Laravel

This plugin provides a simple resizer functionality for Laravel applications using Inertia, Vue 3, and Tailwind CSS.

## Requirements

- Laravel
- Inertia.js
- Vue 3
- Tailwind CSS

## Installation

1. Add the following to your `composer.json`:

```json
"require": {
    "vimuths123/resizer": "dev-main"
},
"repositories": [
    {
        "type": "vcs",
        "url": "https://github.com/vimuths123/resizer.git"
    }
]
```

2. Run the following command:

```
composer update
```

3. Publish the components:

```
php artisan vendor:publish --tag=resier-components
```

## Usage

After installation, you can access the resizer functionality at `/resier` route.

## License

MIT
