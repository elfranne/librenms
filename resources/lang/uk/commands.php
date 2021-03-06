<?php

return [
    'user:add' => [
        'description' => 'Додати локального користувача, вхід доступний лише при використанні mysql автентифікації',
        'arguments' => [
            'username' => "Ім'я користувача для входу",
        ],
        'options' => [
            'descr' => 'Опис користувача',
            'email' => 'Електронна пошта користувача',
            'password' => 'Пароль користувача, якщо не наданий, то буде запропоновано',
            'full-name' => "Повне ім'я користувача",
            'role' => 'Користувачеві буде назначено роль :roles',
        ],
        'password-request' => 'Будь ласка, введіть пароль користувача',
        'success' => 'Успішно додано користувача: :username',
        'wrong-auth' => 'Увага! Ви не зможете авторизуватися, оскільки не використовуєте MySQL авторизацію',
    ],
];
