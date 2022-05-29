<?php


namespace Nemundo\Content\Service;


use Nemundo\App\WebService\Service\AbstractListServiceRequest;
use Nemundo\App\WebService\Service\AbstractServiceRequest;
use Nemundo\Content\Builder\ContentBuilder;
use Nemundo\Core\Http\Request\HttpRequest;

//ContentData
class ContentJsonServiceRequest extends AbstractServiceRequest  // AbstractListServiceRequest  //ServiceRequest
{

    protected function loadServiceRequest()
    {
        // content-data
        $this->serviceName = 'content-json';
    }


    public function onRequest()
    {

        $contentId = (new HttpRequest('content'))->getValue();
        $content = (new ContentBuilder())->getContent($contentId);
        $data = $content->getJsonData();

        //$this->addRow($data);

        $this->setData($data);

    }

}