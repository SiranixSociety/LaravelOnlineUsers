<?php

namespace Siranix\OnlineUsers\Traits;

use Siranix\OnlineUsers\Traits\IPHelper;
use Siranix\OnlineUsers\Traits\SortingHelper;
use Siranix\OnlineUsers\Traits\UsersHelper;
use Siranix\OnlineUsers\Traits\GuestsHelper;
use Siranix\OnlineUsers\Traits\TimeHelper;
use Siranix\OnlineUsers\Traits\IsOnlineHelper;

trait OnlineUsersSupporter{
    use IPHelper, SortingHelper, UsersHelper, GuestsHelper, TimeHelper, IsOnlineHelper;

    public function User()
    {
        return $this->belongsTo(config('OnlineUsers.Structure.UserModel'), config('OnlineUsers.Structure.SessionUserKey'), config('OnlineUsers.Structure.UserModelKey'));
    }
}