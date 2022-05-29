<?php

namespace Nemundo\Content\Builder;

use Nemundo\Content\Data\ContentAction\ContentActionReader;
use Nemundo\Content\Type\AbstractContentType;
use Nemundo\Content\Type\Index\ContentIndexAction;
use Nemundo\Core\Base\AbstractBase;

// ActionBuilder
class IndexBuilder extends AbstractBase
{

    public function buildIndex(AbstractContentType $content)
    {

        (new ContentIndexAction())->onAction($content);

        $reader = new ContentActionReader();
        foreach ($reader->getData() as $actionCustomRow) {

            $action = $actionCustomRow->getAction();
            if ($action->actionBuilder) {
                $action->onAction($content);
            }

        }

    }


    public function deleteIndex(AbstractContentType $content)
    {


        $content->deleteType();

        $reader = new ContentActionReader();
        foreach ($reader->getData() as $actionCustomRow) {

            $action = $actionCustomRow->getAction();
            //if ($action->actionBuilder) {
                $action->deleteAction($content);
            //}

        }







    }





}