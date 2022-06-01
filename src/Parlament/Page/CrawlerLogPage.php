<?php

namespace Parlament\Page;

use Nemundo\Admin\Com\Table\AdminLabelValueTable;
use Nemundo\Com\Template\AbstractTemplateDocument;
use Parlament\Data\CrawlerLog\CrawlerLogReader;

class CrawlerLogPage extends AbstractTemplateDocument
{
    public function getContent()
    {

        $table = new AdminLabelValueTable($this);

        $reader=new CrawlerLogReader();
        foreach ($reader->getData() as $crawlerLogRow) {
            $table->addLabelValue($crawlerLogRow->crawler,$crawlerLogRow->page);
        }



        return parent::getContent();
    }
}