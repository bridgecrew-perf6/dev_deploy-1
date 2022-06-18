<?php

namespace Nemundo\Content\Type;

use Nemundo\Content\App\Text\Content\LargeText\LargeTextContentType;
use Nemundo\Content\Builder\IndexBuilder;
use Nemundo\Core\Base\AbstractBase;

abstract class AbstractContentBuilder extends AbstractBase
{

    abstract public function saveContent();

    public function saveContentFromRequest() {

    }




    protected function saveIndex(AbstractContentType $content) {

        //$content=new LargeTextContentType($dataId);
        (new IndexBuilder())->buildIndex($content);

    }

}