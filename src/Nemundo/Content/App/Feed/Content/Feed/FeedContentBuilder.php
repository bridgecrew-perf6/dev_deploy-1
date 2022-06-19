<?php

namespace Nemundo\Content\App\Feed\Content\Feed;

use Nemundo\Content\App\Feed\Data\Feed\Feed;
use Nemundo\Content\App\Feed\Data\Feed\FeedCount;
use Nemundo\Content\Type\AbstractContentBuilder;
use Nemundo\Core\Text\KeywordList;

class FeedContentBuilder extends AbstractContentBuilder
{

    public $rssUrl;

    public function saveContent()
    {

        $count = new FeedCount();
        $count->filter->andEqual($count->model->feedUrl, $this->rssUrl);
        if ($count->getCount() === 0) {

            $data = new Feed();
            $data->ignoreIfExists = true;
            $data->feedUrl = $this->rssUrl;
            $dataId = $data->save();

            $this->saveIndex((new FeedContentType($dataId)));

        }

    }

}