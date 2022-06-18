<?php

namespace Nemundo\Content\App\Explorer\Service;

use Nemundo\Content\App\Explorer\Content\Container\ContainerContentType;
use Nemundo\Content\Service\AbstractContentServiceRequest;
use Nemundo\Core\Http\Request\HttpRequest;

class ContainerPostService extends AbstractContentServiceRequest
{

    protected function loadService()
    {
        $this->serviceName = 'container-post';
    }


    public function onRequest()
    {

        $dataId = (new HttpRequest('data_id'))->getValue();

        $type = new ContainerContentType($dataId);
        $type->container = (new HttpRequest('container'))->getValue();
        $type->description= (new HttpRequest('description'))->getValue();
        $type->saveType();

        $this->sendContentOkStatus($type);

    }

}