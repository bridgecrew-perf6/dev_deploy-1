<?php

namespace Nemundo\Bfs\Abstimmung\Request;

use Nemundo\Core\Http\Request\AbstractHttpRequest;

class JahrRequest extends AbstractHttpRequest
{

    protected function loadRequest()
    {
        $this->requestName = 'jahr';
    }

}