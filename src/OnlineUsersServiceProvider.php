<?php

namespace Siranix\OnlineUsers;

use Illuminate\Support\ServiceProvider;

class OnlineUsersServiceProvider extends ServiceProvider {

    public function boot()
    {
        $this->publishes([
           __DIR__ . '/../Config/OnlineUsers.php' => config_path('OnlineUsers.php')
        ]);
    }

    public function register(){
        $this->app->bind('OnlineUsers', function() {
            return new OnlineUsers();
        });
    }
}