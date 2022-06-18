<?php

namespace Nemundo\Content\App\Feed\Service;


use Nemundo\App\WebService\Service\AbstractListServiceRequest;
use Nemundo\Content\App\Feed\Content\Feed\FeedContentType;
use Nemundo\Content\App\Feed\Data\Feed\FeedPaginationReader;
use Nemundo\Content\Data\Content\ContentModel;
use Nemundo\Core\Text\SnippetText;
use Nemundo\Core\Type\Text\Text;
use Nemundo\Model\Join\ModelJoin;

class FeedListService extends AbstractListServiceRequest
{

    protected function loadService()
    {
        $this->serviceName = 'feed-list';
        $this->restrictedService = false;
    }

    public function onRequest()
    {

        $feedReader = new FeedPaginationReader();

        $contentModel = new ContentModel();

        $join = new ModelJoin($feedReader);
        $join->externalModel = $contentModel;
        $join->externalType = $contentModel->dataId;
        $join->type = $feedReader->model->id;

        $feedReader->filter->andEqual($contentModel->contentTypeId, (new FeedContentType())->typeId);

        $feedReader->paginationLimit = $this->getPaginationLimit();
        $feedReader->currentPage = $this->getCurrentPage();

        $feedReader->addOrder($feedReader->model->title);
        foreach ($feedReader->getData() as $feedRow) {

            $data = [];
            $data['id'] = $feedRow->id;
            $data['feed'] = $feedRow->title;
            $data['description'] = $feedRow->description;
            //$data['description'] ='';  // (new SnippetText())->getSnippet('einem', $feedRow->description);  // Text( $feedRow->description))->getSubstring();



            $data['content_id'] = $feedRow->getModelValue($contentModel->id);

            $this->addRow($data);

        }

    }

}