<?php

namespace Nemundo\Content\App\File\Content\Image;

use Nemundo\Content\App\File\Data\Image\Image;
use Nemundo\Content\App\File\Data\Image\ImageUpdate;
use Nemundo\Content\Type\AbstractContentBuilder;
use Nemundo\Core\Http\Request\File\FileRequest;
use Nemundo\Core\Image\ImageFile;

class ImageContentBuilder extends AbstractContentBuilder
{


    public function saveContentFromRequest() {


        $fileRequest = new FileRequest('image');

        $data = new Image();
        $data->image->fromFileRequest(new FileRequest('file'));  //fromFileProperty($this->file);
        $data->orginalFilename = $fileRequest->filename;  // $this->file->getOrginalFilename();
        $dataId = $data->save();

        $content = (new ImageContentType($dataId));
        $this->saveIndex($content);

        return $content;

    }



    public function saveContent()
    {



    }

}