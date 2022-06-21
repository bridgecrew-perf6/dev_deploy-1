<?php


namespace Nemundo\Bfs\Abstimmung\Request;


use Nemundo\Core\Http\Request\AbstractHttpRequest;

class AbstimmungRequest extends AbstractHttpRequest
{

    protected function loadRequest()
    {
        $this->requestName='abstimmung';
    }

}