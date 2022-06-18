<?php

namespace Nemundo\Content\App\File\Content\Document;

use Nemundo\Content\App\File\Data\Document\Document;
use Nemundo\Content\Type\AbstractContentBuilder;

class DocumentContentBuilder extends AbstractContentBuilder
{


    public function fromUrl($url) {

        $data = new Document();
        $data->document->fromUrl($url);
        $dataId = $data->save();


        $content = new DocumentContentType($dataId);
        $this->saveIndex($content);

    }





    public function saveContent()
    {







        // TODO: Implement saveContent() method.
    }

}