<?php

namespace Nemundo\Content\App\Feed\Content\Feed;

use Nemundo\Content\App\Feed\Content\Item\ArticleContentType;
use Nemundo\Content\App\Feed\Data\Feed\FeedDelete;
use Nemundo\Content\App\Feed\Data\FeedItem\FeedItemReader;
use Nemundo\Content\Type\AbstractContentDelete;
use Nemundo\Db\Sql\Order\SortOrder;

class FeedContentDelete extends AbstractContentDelete
{

    public function deleteContent($dataId)
    {

        $reader = new FeedItemReader();
        $reader->filter->andEqual($reader->model->feedId, $dataId);
        $reader->addOrder($reader->model->dateTime, SortOrder::DESCENDING);


        foreach ($reader->getData() as $feedItemRow) {

        //foreach ($this->getFeedItemReader()->getData() as $itemRow) {
            /*$feedItemContentType = new ArticleContentType($itemRow->id);
            $feedItemContentType->deleteType();*/
        }


        //$this->deleteSearchIndex();


        $this->deleteIndex(new FeedContentType($dataId));

        (new FeedDelete())->deleteById($dataId);


        // TODO: Implement deleteContent() method.
    }

}