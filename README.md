# vdnh

Этот проект - тестовое задания для правительства.

## Описание

Нужно было сделать своё апи для фильтрации событий по типам событий и дате.

## Установка

1. Клонируйте репозиторий:
    ```bash
    git clone https://github.com/kemorial/vdnh-events.git
    ```

2. Перейдите в каталог проекта:
    ```bash
    cd vdnh-events
    ```

3. Установите все необходимые зависимости:
    ```bash
    cd vdnh-docker/  \
    && docker composer up -d \ 
    && composer install \
    && cp .env.example .env \
    && php artisan migrate && php artisan db:seed --class=CategorySeeder && php artisan db:seed --class=EventSeeder
    ```
### для установки зависимостей можно зайти в контейнер
## Использование

Простой пример использования проекта:

через postman сделайте get-запросы на следующие url:

 - localhost:8000/api/events/&?filter=Y&schedule=today&type%5B%5D=exhibition2
 - localhost:8000/api/events/&?filter=Y&schedule=tomorrow&type%5B%5D=show-music
 - localhost:8000/api/events/&?filter=Y&schedule=after_tomorrow&type%5B%5D=quest&type%5B%5D=sports-ground
 - localhost:8000/api/events/&?page=2
