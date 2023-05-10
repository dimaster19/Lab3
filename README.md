<p align="center">
<img src="info/logo.jpg">
</p>
 
## Lab3
Кароч изи пакет 
   

## Установка из composer

```  
composer require dimaster19/lab3
```

 Опубликовать js файлы, вью и миграции необходимые для работы пакета.
Вызывать команду:
```
php artisan vendor:publish --provider="Lab3\Providers\Lab3ServiceProvider"
``` 

 В роутере routes/web.php удалить:
 добавить
 ```
    \Lab3\Library\Lab3Route::routes();
 ```

Выполнить миграцию
 ```
    php artisan migrate 
 ``` 
# Lab3
