<?php

namespace Siranix\OnlineUsers;
use Illuminate\Support\Facades\Facade;

class OnlineUsersFacade extends Facade{
    protected static function getFacadeAccessor()
    {
        return 'OnlineUsers';
    }
}