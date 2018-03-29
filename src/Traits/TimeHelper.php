<?php

namespace Siranix\OnlineUsers\Traits;
use Carbon\Carbon;

trait TimeHelper{
    public function scopeAgo($query, $amount = null){
        if(is_null($amount)){
            $amount = config('OnlineUsers.Settings.IsOnlineAmount');
        }
        if(config('OnlineUsers.Settings.TimeUnit') === 0){
            return $query->where('last_activity', '>=', Carbon::now()->subSeconds($amount)->timestamp);
        } elseif(config('OnlineUsers.Settings.TimeUnit') === 1){
            return $query->where('last_activity', '>=', Carbon::now()->subMinutes($amount)->timestamp);
        } elseif(config('OnlineUsers.Settings.TimeUnit') === 2){
            return $query->where('last_activity', '>=', Carbon::now()->subHours($amount)->timestamp);
        } elseif(config('OnlineUsers.Settings.TimeUnit') === 3){
            return $query->where('last_activity', '>=', Carbon::now()->subDays($amount)->timestamp);
        } elseif(config('OnlineUsers.Settings.TimeUnit') === 4){
            return $query->where('last_activity', '>=', Carbon::now()->subMonths($amount)->timestamp);
        }
    }
    public function scopeSeconds($query, $amount = null){
        if(is_null($amount)){
            $amount = config('OnlineUsers.Settings.IsOnlineAmount');
        }
        return $query->where('last_activity', '>=', Carbon::now()->subHours($amount)->timestamp);
    }
    public function scopeByMinutes($query, $amount = null){
        if(is_null($amount)){
            $amount = config('OnlineUsers.Settings.IsOnlineAmount');
        }
        return $query->where('last_activity', '>=', Carbon::now()->subMinutes($amount)->timestamp);
    }
    public function scopeByHours($query, $amount = null){
        if(is_null($amount)){
            $amount = config('OnlineUsers.Settings.IsOnlineAmount');
        }
        return $query->where('last_activity', '>=', Carbon::now()->subHours($amount)->timestamp);
    }
    public function scopeByDays($query, $amount = null){
        if(is_null($amount)){
            $amount = config('OnlineUsers.Settings.IsOnlineAmount');
        }
        return $query->where('last_activity', '>=', Carbon::now()->subDays($amount)->timestamp);
    }

}