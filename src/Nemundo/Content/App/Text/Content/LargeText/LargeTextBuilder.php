<?php

namespace Nemundo\Content\App\Text\Content\LargeText;

use Nemundo\Content\App\Text\Data\LargeText\LargeText;
use Nemundo\Content\Builder\IndexBuilder;
use Nemundo\Content\Type\AbstractContentBuilder;
use Nemundo\Core\Http\Request\HttpRequest;

// LargeTextContentBuilder
class LargeTextBuilder extends AbstractContentBuilder
{

    public $largeText;


    public function saveContent()
    {

        $data = new LargeText();
        //$data->subject = $this->subject;
        $data->largeText = $this->largeText;
        $dataId = $data->save();

        $content=new LargeTextContentType($dataId);
        (new IndexBuilder())->buildIndex($content);

        return $content;

    }


    public function saveContentFromRequest()
    {

        $this->largeText = (new HttpRequest('text'))->getValue();
        return $this->saveContent();

    }


}