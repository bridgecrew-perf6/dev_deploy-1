<?php


namespace Nemundo\Bfs\Abstimmung\Request;


use Nemundo\Core\Http\Request\AbstractHttpRequest;

class DatumRequest extends AbstractHttpRequest
{

    protected function loadRequest()
    {
        $this->requestName = 'datum';
    }

}