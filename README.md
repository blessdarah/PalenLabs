### Configure admin configurations

**Generate permissions**

```bash
  php artisan shield:generate --all
```
**Create a new admin user**
```bash
    php artisan make:filament-user
```

**Configure default user**

```bash
php artisan shield:super-admin --user=1
```
