<?php

namespace Siranix\OnlineUsers\Traits;
use Carbon\Carbon;

trait IsOnlineHelper{

    public function scopeIsOnline($query){
        $DefaultAmount = config('OnlineUsers.Settings.IsOnlineAmount');
        if(config('OnlineUsers.Settings.TimeUnit') === 0){
            return $query->where('last_activity', '>=', Carbon::now()->subSeconds($DefaultAmount)->timestamp);
        } elseif(config('OnlineUsers.Settings.TimeUnit') === 1){
            return $query->where('last_activity', '>=', Carbon::now()->subMinutes($DefaultAmount)->timestamp);
        } elseif(config('OnlineUsers.Settings.TimeUnit') === 2){
            return $query->where('last_activity', '>=', Carbon::now()->subHours($DefaultAmount)->timestamp);
        } elseif(config('OnlineUsers.Settings.TimeUnit') === 3){
            return $query->where('last_activity', '>=', Carbon::now()->subDays($DefaultAmount)->timestamp);
        } elseif(config('OnlineUsers.Settings.TimeUnit') === 4){
            return $query->where('last_activity', '>=', Carbon::now()->subMonths($DefaultAmount)->timestamp);
        }
    }

}