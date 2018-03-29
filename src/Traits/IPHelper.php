<?php

namespace Siranix\OnlineUsers\Traits;

trait IPHelper{
    public function scopeWhereIP($query, $IP){
        return $query->where('ip_address', $IP);
    }
    public function scopeWhereIPNot($query, $IP){
        return $query->where('ip_address', "!=" ,$IP);
    }
}