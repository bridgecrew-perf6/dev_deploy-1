<?php

namespace Nemundo\Bfs\Abstimmung\Request;

use Nemundo\Core\Http\Request\AbstractHttpRequest;

class KantonRequest extends AbstractHttpRequest
{

    protected function loadRequest()
    {
        $this->requestName = 'kanton';
    }

}