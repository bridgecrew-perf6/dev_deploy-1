<?php


namespace Nemundo\Roundshot\Service;


use Nemundo\App\WebService\Service\AbstractListServiceRequest;
use Nemundo\Content\Data\Content\ContentModel;
use Nemundo\Core\Http\Request\HttpRequest;
use Nemundo\Model\Join\ModelJoin;
use Nemundo\Roundshot\Data\Roundshot\RoundshotPaginationReader;
use Nemundo\Roundshot\Data\Roundshot\RoundshotReader;


class RoundshotSearchService extends AbstractListServiceRequest
{

    protected function loadService()
    {
        $this->serviceName = 'roundshot-search';
    }


    public function onRequest()
    {

        $reader = new RoundshotPaginationReader();

        $request = new HttpRequest('q');
        if ($request->hasValue()) {
            $reader->filter->andContains($reader->model->roundshot, $request->getValue());
        }

        $contentModel = new ContentModel();

        $join = new ModelJoin($reader);
        $join->externalModel = $contentModel;
        $join->externalType = $contentModel->dataId;
        $join->type= $reader->model->id;


        $reader->currentPage=$this->getCurrentPage();
        $reader->paginationLimit=$this->getPaginationLimit();

        $reader->addOrder($reader->model->roundshot);

        foreach ($reader->getData() as $roundshotRow) {

            $row = [];
            $row['id'] = $roundshotRow->id;
            $row['roundshot'] = $roundshotRow->roundshot;
            $row['roundshot_number'] = $roundshotRow->roundshotNumber;
            $row['url'] = $roundshotRow->url;
            $row['image_url'] = $roundshotRow->url . 'cams/' . $roundshotRow->roundshotNumber . '/thumbnail';

            $row['content_id'] = $roundshotRow->getModelValue($contentModel->id);

            $this->addRow($row);

        }

    }

}