# Order Service API
## Начало работы

Основная задача endpoint получать информацию из базы данных и возвращать их в виде json объекта.

## Системные требования

Для работы сервиса необходимы:

- PHP 8.x
- Composer
- Laravel
- MySQL
- Docker (необязательно)

### Установка

Шаги для запуска проекта:

1. Клонировать репозиторий:
   ```bash
   git clone https://your-repository-link.git
   cd order-service-task

2. Установить зависимости:
    ```bash
   composer install
3. Настроить .env файл:
    ```bash
    cp .env.example .env
   ```
   Затем настройте параметры подключения к базе данных в .env.
4. Запустить миграции:
    ```bash
    php artisan migrate
   
5. Запустить проект:
```bash
php artisan serve
```
Теперь API доступен по адресу http://localhost:8000

### Документация API
http://localhost:8000/api/documentation
