<?php

namespace Dev\App\MyVote\Cookie;

use Nemundo\Core\Http\Cookie\AbstractCookie;

class MyVoteCookie extends AbstractCookie
{

    protected function loadCookie()
    {

        $this->cookieName='myvote_id';
        $this->dayOfExpire=365;

    }

}