<?php

namespace Siranix\OnlineUsers\Traits;

trait UsersHelper{
    public static function scopeUsers($query){
        return $query->whereNotNull(config('OnlineUsers.Structure.SessionUserKey'));
    }
}