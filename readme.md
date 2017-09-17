## [Современные PHP-фреймворки](#) - Laravel
**ДЗ №1** 
* [Изменение текста на главной странице](https://github.com/skiphog/profit-laravel/blob/master/resources/views/welcome.blade.php)

**ДЗ №2**
* [Добавить Middleware](https://github.com/skiphog/profit-laravel/blob/master/app/Http/Middleware/VerifyAuthentication.php)

**ДЗ №3**
* [Вывести текущую дату](https://github.com/skiphog/profit-laravel/blob/master/resources/views/layouts/app.blade.php#L22)
* [Вывести новости](https://github.com/skiphog/profit-laravel/blob/master/resources/views/testNews.blade.php) с [переданным массивом](https://github.com/skiphog/profit-laravel/blob/master/app/Http/Controllers/TestNews.php)
* [Форма поиска](https://github.com/skiphog/profit-laravel/blob/master/resources/views/layouts/app.blade.php#L14) (Подключение библиотеки в этом же файле)

**ДЗ №4**
* Созданы миграции для таблиц: [Авторы](https://github.com/skiphog/profit-laravel/blob/master/database/migrations/2017_09_17_152400_create_authors_table.php) и [Новости](https://github.com/skiphog/profit-laravel/blob/master/database/migrations/2017_09_17_152443_create_news_table.php)
* Связь Авторов - [один ко многим](https://github.com/skiphog/profit-laravel/blob/master/app/Author.php#L21). У новостей [обратная связь](https://github.com/skiphog/profit-laravel/blob/master/app/News.php#L23).
* [Вывод новостей в шаблоне](https://github.com/skiphog/profit-laravel/blob/master/resources/views/news.blade.php) с переданной [коллекцией](https://github.com/skiphog/profit-laravel/blob/master/app/Http/Controllers/NewsController.php).  
