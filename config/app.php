<?php
return [
   //Класс аутентификации
   'auth' => \Src\Auth\Auth::class,
   //Клас пользователя
   'identity' => \Model\User::class,
   //Классы для middleware
   'routeMiddleware' => [
       'auth' => \Middlewares\AuthMiddleware::class,
       'admin' => \Middlewares\AdminMiddleware::class,
   ],
   'validators' => [
        'required' => \Validators\RequireValidator::class,
        'unique' => \Validators\UniqueValidator::class,
       'number' => \Validators\NumbersValidator::class,
       'cyrillic' => \Validators\CyrillicValidator::class,
       'all' => \Validators\AllValidator::class,
       'image' => \Validators\ImageValidator::class,
       'latinNumber' => \Validators\LatinNumberValidator::class,
   ],
   'routeAppMiddleware' => [
    'csrf' => \Middlewares\CSRFMiddleware::class,
    'trim' => \Middlewares\TrimMiddleware::class,
    'specialChars' => \Middlewares\SpecialCharsMiddleware::class,
    ],   
];
