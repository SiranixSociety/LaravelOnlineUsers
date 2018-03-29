<?php

namespace Siranix\OnlineUsers\Traits;

trait SortingHelper{
    public static function scopeMostRecent($query){
        return $query->latest('last_activity');
    }
    public function scopeLeastRecent($query){
        return $query->oldest('last_activity');
    }
}