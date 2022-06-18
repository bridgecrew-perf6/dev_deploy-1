<?php


namespace Nemundo\Content\App\Feed\Service;

use Nemundo\App\WebService\Service\AbstractListServiceRequest;
use Nemundo\Content\App\Feed\Data\FeedItem\FeedItemPaginationReader;
use Nemundo\Core\Http\Request\HttpRequest;
use Nemundo\Core\Text\SnippetText;
use Nemundo\Db\Sql\Order\SortOrder;


// FeedItemSearch
class FeedItemListService extends AbstractListServiceRequest
{

    protected function loadService()
    {
        $this->serviceName = 'feed-item-list';
        $this->restrictedService = false;
    }


    public function onRequest()
    {

        $itemReader = new FeedItemPaginationReader();
        $itemReader->model->loadFeed();

        $request = new HttpRequest('feed');
        if ($request->hasValue()) {
            $itemReader->filter->andEqual($itemReader->model->feedId, $request->getValue());
        }

        $itemReader->paginationLimit = $this->getPaginationLimit();
        $itemReader->currentPage = $this->getCurrentPage();

        $itemReader->addOrder($itemReader->model->dateTime, SortOrder::DESCENDING);

        foreach ($itemReader->getData() as $itemRow) {

            $data = [];
            $data['id'] = $itemRow->id;
            $data['title'] = $itemRow->title;
            //$data['description'] = $itemRow->description;
            $data['description'] = (new SnippetText($itemRow->description))->getSnippet();   //QuerySnippet('einem', $itemRow->description);  // Text( $feedRow->description))->getSubstring();
            $data['date_time'] = $itemRow->dateTime->getShortDateTimeLeadingZeroFormat();
            $data['url'] = $itemRow->url;
            $data['has_image'] = $itemRow->hasImage;
            $data['image_url'] = $itemRow->imageUrl;
            $data['has_audio'] = $itemRow->hasAudio;
            $data['audio_url'] = $itemRow->audioUrl;
            $data['feed_id'] = $itemRow->feedId;
            $data['feed_title'] = $itemRow->feed->title;

            $this->addRow($data);

        }

    }

}