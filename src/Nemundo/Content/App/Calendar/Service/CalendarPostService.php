<?php

namespace Nemundo\Content\App\Calendar\Service;

use Nemundo\App\WebService\Service\AbstractServiceRequest;
use Nemundo\Content\App\Calendar\Content\Calendar\CalendarContentType;
use Nemundo\Content\Builder\IndexBuilder;
use Nemundo\Core\Http\Request\HttpRequest;

class CalendarPostService extends AbstractServiceRequest
{

    protected function loadService()
    {

        $this->serviceName = 'calendar-post';

    }


    public function onRequest()
    {

        $type = new CalendarContentType();
        $type->date->fromIsoFormat((new HttpRequest('date'))->getValue());
        $type->event = (new HttpRequest('event'))->getValue();
        $type->saveType();

        (new IndexBuilder())->buildIndex($type);

        $this->sendOkStatus();

    }

}