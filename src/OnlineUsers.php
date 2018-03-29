<?php

namespace Siranix\OnlineUsers;

use Illuminate\Database\Eloquent\Model;
use Siranix\OnlineUsers\Traits\OnlineUsersSupporter;

class OnlineUsers extends Model  {
    use OnlineUsersSupporter;

    public function __construct()
    {
        $this->setTable(config('OnlineUsers.Structure.Table'));
    }

}