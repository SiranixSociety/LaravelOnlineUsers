<?php

namespace Siranix\OnlineUsers\Traits;

trait GuestsHelper{
    public static function scopeGuests($query){
        return $query->whereNull(config('OnlineUsers.Structure.SessionUserKey'));
    }
}