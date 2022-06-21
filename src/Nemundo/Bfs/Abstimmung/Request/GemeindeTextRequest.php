<?php


namespace Nemundo\Bfs\Abstimmung\Request;


use Nemundo\Core\Http\Request\AbstractHttpRequest;

class GemeindeTextRequest extends AbstractHttpRequest
{

    protected function loadRequest()
    {
        $this->requestName = 'gemeinde-text';
    }

}