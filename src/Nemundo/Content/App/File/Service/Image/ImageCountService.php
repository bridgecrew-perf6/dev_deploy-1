<?php

namespace Nemundo\Content\App\File\Service\Image;


use Nemundo\App\WebService\Service\AbstractServiceRequest;
use Nemundo\Content\App\File\Content\Image\ImageContentType;
use Nemundo\Content\App\File\Data\Image\ImageCount;
use Nemundo\Core\Http\Request\Post\PostRequest;

class ImageCountService extends AbstractServiceRequest
{

    protected function loadService()
    {

        $this->serviceName = 'file-image-count';

    }


    public function onRequest()
    {

        $count = new ImageCount();

        $data = [];
        $data['count']=$count->getCount();
        $data['count_format']=$count->getFormatCount();

        $this->addRow($data);

    }


}