# Таск-трекер

Реализовал таск-трекер на фреймворке Yii2. При создании новой задачи к ней привязывается текущий авторизованный пользователь. Также на отдельную страницу выводится список всех исполнителей с их текущими задачами. У каждого таска устанавливается статус при создании задачи, который можно изменять в дальнейшем при изменении статуса задачи. Формы просмотра, создания и редактирования задач не видны пользователям, которые не авторизованы в системе. Сделал отдельную страницу с рейтингом исполнителей по количеству story_point. Также добавил 4 API-метода get для получения: </br>
1. Списка всех задач </br>
http://localhost:8080/api/tasks
2. Списка всех исполнителей </br>
http://localhost:8080/api/users
3. Всех ответственных исполнителей с их задачами </br>
http://localhost:8080/api/data
4. Всех исполнителей с именами и рейтингом и внутри массива каждого исполнителя все его задачи со статусом "Решена", story_point и датой закрытия </br>
http://localhost:8080/api/workers-rating

Вынес логику для API-методов в отдельный сервисный слой приложения </br>

Чтобы развернуть проект, нужно выполнить следующие команды: </br>

git clone https://github.com/alexanderradko190/Task_tracker_yii2.git

Переходим в проект </br>

cd Task_tracker_yii2

Открыть папку config и файл db.php и указать название таблицы, логин и пароль для базы данных </br>

Установить composer </br>

composer install

Или обновить, если composer уже установлен </br>

composer update

Создать новую таблицу в базе данных, dbname из файла db.php </br>

Выполнить миграцию, чтобы создались нужные таблицы </br>

php yii migrate

Запустить локальный сервер </br>

php yii serve
