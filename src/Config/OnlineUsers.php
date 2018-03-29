<?php
return [
    'Structure' => [
        /*
         * User Model that is used by the Laravel Application. You can change this
         * to match the exact User Model you have.
         * By Default we use the User Model provided by Laravel.
         *
         * Automatic Default by Laravel Auth: App\User::class
         */
        'UserModel' => App\User::class,

        /*
         * [IN DEVELOPMENT]
         * Allows you to use different modes of this package.
         *
         * Simple (0): [ IN DEV ]
         * Only uses the model to associate the session with a user model
         *
         * Advanced (1):
         * Uses several details to associate the session with a user model.
         *
         * Automatic default by SiranixSociety: 1
         */

        'UserModelMode' => 1,

        /*
         * [Advanced UserModeMode only!]
         * Primary Key used in the User Model in order to set the belongsTo relationship
         * This is key for the package in order to associate the OnlineUsers to an actual user
         * ! ONLY SET THIS IF YOU ACTUALLY UNDERSTAND THE PACKAGE, OTHERWISE DO NOT TOUCH !
         *
         * Automatic default by Laravel Auth: 'id'
         */
        'UserModelKey' => 'id',

        /*
         * [Advanced UserModeMode only!]
         * Specifies the key / reference in the Session Table that should be used by
         * the package in order to identify users.
         * ! ONLY SET THIS IF YOU ACTUALLY UNDERSTAND THE PACKAGE, OTHERWISE DO NOT TOUCH !
         *
         * Automatic default by Laravel: 'user_id'
         */
        'SessionUserKey' => 'user_id',

        /*
         * Specifies the table that is used as the session table. This is a requirement for this package to be set.
         * If this is the first time you're seeing this, please refer to the instructions on GitHub.
         *
         * Automatic default by Laravel: 'sessions'
         */
        'Table' => 'sessions',
    ],
    'Settings' => [
        /*
         * Allows you to set the default time unit used by the package:
         * 0: Seconds
         * 1: Minutes
         * 2: Hours
         * 3: Days
         * 4: Months
         *
         * Automatic default by SiranixSociety: 1
         */
        'TimeUnit' => 1,

        /*
         * This will be used in order to specific how many of the set TimeUnit it
         * should use to identify IsOnline.
         *
         * Automatic default by SiranixSociety: 20
         */
        'IsOnlineAmount' => 20,

        /*
         * [IN DEVELOPMENT]
         * Allows you to limit the amount of users it should fetch when requesting them.
         * This allows you to decrease the load on your Database.
         *
         * Automatic default by SiranixSociety: 100
         */
        'UserAmount' => 100,
    ],


];
