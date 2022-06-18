<?php

namespace Nemundo\Content\App\File\Service;

use Bim\App\LargeImage\Content\LargeImage\LargeImageContentType;
use Bim\App\Poi\Action\PoiAction;
use Nemundo\Content\App\File\Content\Audio\AudioContentType;
use Nemundo\Content\App\File\Content\Document\DocumentContentType;
use Nemundo\Content\App\File\Content\File\FileContentType;
use Nemundo\Content\App\File\Content\Image\ImageContentType;
use Nemundo\Content\App\File\Content\Video\VideoContentType;
use Nemundo\Content\Index\Tree\Action\TreeAction;
use Nemundo\Content\Service\AbstractContentServiceRequest;
use Nemundo\Core\Debug\Debug;
use Nemundo\Core\File\FileInformation;
use Nemundo\Core\Http\Request\File\FileRequest;
use Nemundo\Core\Http\Request\HttpRequest;
use Nemundo\Core\System\PhpConfig;

class TreeFileUploadService extends AbstractContentServiceRequest
{

    protected function loadService()
    {
        $this->serviceName = 'tree-file-upload';
    }


    public function onRequest()
    {

        (new PhpConfig())->setTimeLimit(180);

        $fileRequest = new FileRequest('file');
        $file = new FileInformation($fileRequest->filename);

        $type = new FileContentType();
        $hasImage = false;

        if ($file->isText()) {
            $type = new DocumentContentType();
        }

        if ($file->isPdf()) {
            $type = new DocumentContentType();
        }

        if ($file->isWord()) {
            $type = new DocumentContentType();
        }

        if ($file->isImage()) {
            $type = new ImageContentType();  // new LargeImageContentType();
            //$hasImage = true;
        }

        if ($file->isAudio()) {
            $type = new AudioContentType();
        }

        if ($file->isVideo()) {
            $type = new VideoContentType();
        }

        $type->file->fromFileRequest($fileRequest);
        $type->saveType();


        //$action->hasImage = $hasImage;

        //(new Debug())->write('upload service');

        $request = new HttpRequest('parent');
        if ($request->hasValue()) {

            //(new Debug())->write('parent');

            $action = new TreeAction();
            $action->parentId = $request->getValue();
            $action->onAction($type);


        }








        $this->sendContentOkStatus($type);


    }

}