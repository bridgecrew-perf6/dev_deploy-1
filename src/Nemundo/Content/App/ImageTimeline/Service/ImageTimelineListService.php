<?php


namespace Nemundo\Content\App\ImageTimeline\Service;


use Nemundo\App\WebService\Service\AbstractServiceRequest;
use Nemundo\Content\App\ImageTimeline\Content\ImageTimeline\ImageTimelineContentType;
use Nemundo\Content\App\ImageTimeline\Data\ImageTimeline\ImageTimelineReader;
use Nemundo\Content\Data\Content\ContentModel;
use Nemundo\Core\Http\Request\HttpRequest;
use Nemundo\Db\DbConfig;
use Nemundo\Model\Join\ModelJoin;

class ImageTimelineListService extends AbstractServiceRequest
{

    protected function loadService()
    {

        // imagetimeline-search
        $this->serviceName = 'imagetimeline-list';

    }


    public function onRequest()
    {

        //DbConfig::$sqlDebug=true;

        $reader = new ImageTimelineReader();
        $reader->addOrder($reader->model->timeline);
        //$reader->limit = 10;

        $request = new HttpRequest('data_id');
        if ($request->hasValue()) {
            $reader->filter->andEqual($reader->model->id, $request->getValue());
        }

        $contentModel = new ContentModel();
        //$reader->addFieldByModel($contentModel);

        $contentJoin = new ModelJoin($reader);
        $contentJoin->type = $reader->model->id;
        $contentJoin->externalModel = $contentModel;
        $contentJoin->externalType = $contentModel->dataId;

        $reader->filter->andEqual($contentModel->contentTypeId, (new ImageTimelineContentType())->typeId);

        foreach ($reader->getData() as $imageRow) {

            $data = [];
            $data['data_id'] = $imageRow->id;
            $data['timeline'] = $imageRow->timeline;
            $data['image_url'] = $imageRow->imageUrl;
            $data['content_id'] = $imageRow->getModelValue($contentModel->id);

            $this->addRow($data);

        }

    }

}