<?php

namespace Nemundo\Bfs\Abstimmung\Request;


use Nemundo\Core\Http\Request\AbstractHttpRequest;

class GeoLevelRequest extends AbstractHttpRequest
{

    protected function loadRequest()
    {
        $this->requestName = 'level';
    }

}