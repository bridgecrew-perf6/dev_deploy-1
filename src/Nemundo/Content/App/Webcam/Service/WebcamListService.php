<?php

namespace Nemundo\Content\App\Webcam\Service;

use Nemundo\App\WebService\Service\AbstractListServiceRequest;
use Nemundo\Content\App\Webcam\Content\Webcam\WebcamContentType;
use Nemundo\Content\App\Webcam\Data\Webcam\WebcamPaginationReader;
use Nemundo\Content\App\Webcam\Data\Webcam\WebcamReader;
use Nemundo\Content\Service\AbstractContentServiceRequest;

class WebcamListService extends AbstractListServiceRequest
{

    protected function loadService()
    {

        $this->serviceName = 'webcam-list';

    }


    public function onRequest()
    {

        $reader = new WebcamPaginationReader();
        $reader->currentPage=$this->getCurrentPage();
        $reader->paginationLimit=$this->getPaginationLimit();
        foreach ($reader->getData() as $webcamRow) {

            $contentType = new WebcamContentType();
            $contentType->fromDataRow($webcamRow);

            $this->addRow($contentType->getData());

        }

    }

}