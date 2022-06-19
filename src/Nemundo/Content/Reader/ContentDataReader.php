<?php

namespace Nemundo\Content\Reader;

use Nemundo\Content\Data\Content\ContentPaginationReader;
use Nemundo\Db\Sql\Order\SortOrder;

class ContentDataReader extends ContentPaginationReader
{

    public function setContentTypeId($contentTypeId) {

        $this->filter->andEqual($this->model->contentTypeId,$contentTypeId);

    }


    public function getData()
    {

        $this->model->loadContentType();

        //$this->addOrder($this->model->id, SortOrder::DESCENDING);
        $this->addOrder($this->model->subject);
        $this->paginationLimit = 50;


        return parent::getData(); // TODO: Change the autogenerated stub
    }

}