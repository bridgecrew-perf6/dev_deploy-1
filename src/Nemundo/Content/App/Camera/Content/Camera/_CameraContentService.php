<?php


namespace Nemundo\Content\App\Camera\Content\Camera;


use Nemundo\App\WebService\Request\AbstractWebService;
use Nemundo\Content\App\Text\Content\Text\TextContentType;
use Nemundo\Content\Type\Service\AbstractContentWebService;
use Nemundo\Core\Debug\Debug;
use Nemundo\Core\Http\Request\File\FileRequest;
use Nemundo\Core\Http\Request\Post\PostRequest;

class CameraContentService extends AbstractContentWebService
{


    protected function loadWebService()
    {
        // TODO: Implement loadWebService() method.
    }



    public function onSave()
    {

        (new Debug())->write($_FILES);

        $type = new CameraContentImport();
        $type->fromFileRequest(new FileRequest('image'));

    }


}