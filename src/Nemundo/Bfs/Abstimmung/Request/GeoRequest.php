<?php

namespace Nemundo\Bfs\Abstimmung\Request;


use Nemundo\Core\Http\Request\AbstractHttpRequest;

class GeoRequest extends AbstractHttpRequest
{

    protected function loadRequest()
    {
        $this->requestName='geo';
    }

}