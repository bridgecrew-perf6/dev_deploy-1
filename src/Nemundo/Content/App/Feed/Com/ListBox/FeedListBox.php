<?php

namespace Nemundo\Content\App\Feed\Com\ListBox;

use Nemundo\Admin\Com\ListBox\AdminListBox;
use Nemundo\Content\App\Feed\Data\Feed\FeedReader;

class FeedListBox extends AdminListBox
{

    public function getContent()
    {

        $reader = new FeedReader();
        $reader->addOrder($reader->model->title);
        foreach ($reader->getData() as $feedRow) {
            $this->addItem($feedRow->id, $feedRow->title);
        }

        return parent::getContent();

    }

}