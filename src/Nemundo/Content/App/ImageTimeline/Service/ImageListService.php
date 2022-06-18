<?php

namespace Nemundo\Content\App\ImageTimeline\Service;


use Nemundo\App\WebService\Service\AbstractServiceRequest;
use Nemundo\Content\App\ImageTimeline\Data\Image\ImageReader;
use Nemundo\Core\Http\Request\HttpRequest;

class ImageListService extends AbstractServiceRequest
{

    protected function loadService()
    {

        $this->serviceName = 'imagetimeline-image';

    }


    public function onRequest()
    {

        $dataId = (new HttpRequest('data-id'))->getValue();

        $reader = new ImageReader();
        $reader->filter->andEqual($reader->model->timelineId, $dataId);
        $reader->addOrder($reader->model->id);
        $reader->limit = 10;
        foreach ($reader->getData() as $imageRow) {
            //$carousel->addImage($imageRow->image->getImageUrl($imageRow->model->imageAutoSize800));

            $data = [];
            //$data['timeline'] = $imageRow->timeline;
            $data['image_url'] = $imageRow->image->getImageUrl($imageRow->model->imageAutoSize800);
            $this->addRow($data);

        }

        // TODO: Implement onRequest() method.
    }

}