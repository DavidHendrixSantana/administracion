<?php

return [
    'admin-user' => [
        'title' => 'Users',

        'actions' => [
            'index' => 'Users',
            'create' => 'New User',
            'edit' => 'Edit :name',
            'edit_profile' => 'Edit Profile',
            'edit_password' => 'Edit Password',
        ],

        'columns' => [
            'id' => 'ID',
            'last_login_at' => 'Last login',
            'first_name' => 'First name',
            'last_name' => 'Last name',
            'email' => 'Email',
            'password' => 'Password',
            'password_repeat' => 'Password Confirmation',
            'activated' => 'Activated',
            'forbidden' => 'Forbidden',
            'language' => 'Language',
                
            //Belongs to many relations
            'roles' => 'Roles',
                
        ],
    ],

    'admin-user' => [
        'title' => 'Users',

        'actions' => [
            'index' => 'Users',
            'create' => 'New User',
            'edit' => 'Edit :name',
            'edit_profile' => 'Edit Profile',
            'edit_password' => 'Edit Password',
        ],

        'columns' => [
            'id' => 'ID',
            'last_login_at' => 'Last login',
            'first_name' => 'First name',
            'last_name' => 'Last name',
            'email' => 'Email',
            'password' => 'Password',
            'password_repeat' => 'Password Confirmation',
            'activated' => 'Activated',
            'forbidden' => 'Forbidden',
            'language' => 'Language',
                
            //Belongs to many relations
            'roles' => 'Roles',
                
        ],
    ],

    'teacher' => [
        'title' => 'Teachers',

        'actions' => [
            'index' => 'Teachers',
            'create' => 'New Teacher',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'turno' => 'Turno',
            'telefono' => 'Telefono',
            
        ],
    ],

    'schedule' => [
        'title' => 'Schedules',

        'actions' => [
            'index' => 'Schedules',
            'create' => 'New Schedule',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'Hora_inicio' => 'Hora inicio',
            'Hora_final' => 'Hora final',
            
        ],
    ],

    'person' => [
        'title' => 'Persons',

        'actions' => [
            'index' => 'Persons',
            'create' => 'New Person',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'tutor' => 'Tutor',
            'edad' => 'Edad',
            'telefono' => 'Telefono',
            'nivel' => 'Nivel',
            'teacher_id' => 'Teacher',
            'schedule_id' => 'Schedule',
            
        ],
    ],

    'person' => [
        'title' => 'Persons',

        'actions' => [
            'index' => 'Persons',
            'create' => 'New Person',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            
        ],
    ],

    'admin-user' => [
        'title' => 'Users',

        'actions' => [
            'index' => 'Users',
            'create' => 'New User',
            'edit' => 'Edit :name',
            'edit_profile' => 'Edit Profile',
            'edit_password' => 'Edit Password',
        ],

        'columns' => [
            'id' => 'ID',
            'last_login_at' => 'Last login',
            'first_name' => 'First name',
            'last_name' => 'Last name',
            'email' => 'Email',
            'password' => 'Password',
            'password_repeat' => 'Password Confirmation',
            'activated' => 'Activated',
            'forbidden' => 'Forbidden',
            'language' => 'Language',
                
            //Belongs to many relations
            'roles' => 'Roles',
                
        ],
    ],

    // Do not delete me :) I'm used for auto-generation
];