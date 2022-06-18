<?php

namespace Dev\App\MyVote\Service;

use Nemundo\App\WebService\Service\AbstractServiceRequest;
use Nemundo\Content\App\Text\Content\LargeText\LargeTextBuilder;
use Nemundo\Core\Http\Request\HttpRequest;

class PlenumPostService extends AbstractServiceRequest
{
    protected function loadService()
    {
        $this->serviceName = 'plenum-post';
    }

    public function onRequest()
    {


        $largeText = (new HttpRequest('text'))->getValue();


        //$this->saveTree($contentType);


        // contenttype

        $builder=new LargeTextBuilder();
        $builder->largeText= $largeText;
        $builder->saveContent();






    }
}