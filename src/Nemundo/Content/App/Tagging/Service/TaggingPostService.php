<?php


namespace Nemundo\Content\App\Tagging\Service;


use Nemundo\App\WebService\Service\AbstractServiceRequest;
use Nemundo\Content\App\Tagging\Data\Tag\Tag;
use Nemundo\Core\Http\Request\HttpRequest;

class TaggingPostService extends AbstractServiceRequest
{

    protected function loadService()
    {
        $this->serviceName='tagging-post';
    }


    public function onRequest()
    {

        $data=new Tag();
        $data->tag = (new HttpRequest('tag'))->getValue();
        $data->contentId = (new HttpRequest('content'))->getValue();
        $data->save();

        $this->sendOkStatus();

    }

}