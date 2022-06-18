<?php


namespace Nemundo\Content\App\File\WebService;


use Nemundo\App\WebService\Request\AbstractWebService;
use Nemundo\Content\App\File\Site\Json\ImageListJsonSite;

class ImageListWebService extends AbstractWebService
{

    protected function loadWebService()
    {

        $this->webService='Image List';
        $this->webServiceId='0d039f82-a258-4a07-869d-84510cf5a060';

        $this->site=ImageListJsonSite::$site;


    }

}