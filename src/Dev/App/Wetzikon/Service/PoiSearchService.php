<?php

namespace Dev\App\Wetzikon\Service;

use Dev\App\Wetzikon\Data\Poi\PoiReader;
use Dev\App\Wetzikon\Data\PoiBild\PoiBildReader;
use Nemundo\Admin\Com\Image\AdminImage;
use Nemundo\Admin\Com\Table\AdminTable;
use Nemundo\Admin\Com\Table\AdminTableHeader;
use Nemundo\Admin\Com\Table\Row\AdminTableRow;
use Nemundo\App\WebService\Service\AbstractServiceRequest;
use Nemundo\Core\Type\Text\Html;

class PoiSearchService extends AbstractServiceRequest
{
    protected function loadService()
    {
        $this->serviceName = 'wetzikon-poi-search';
    }

    public function onRequest()
    {

        $reader = new PoiReader();
        $reader->addOrder($reader->model->titel);
        foreach ($reader->getData() as $poiRow) {

            $data = [];
            $data['id'] = $poiRow->id;
            $data['titel'] = $poiRow->titel;
            $data['text'] = (new Html( $poiRow->text))->getValue();
            $data['lat'] = $poiRow->coordinate->latitude;
            $data['lon'] = $poiRow->coordinate->longitude;


            $image=[];
            $imageReader = new PoiBildReader();
            $imageReader->filter->andEqual($imageReader->model->poiId, $poiRow->id);
            foreach ($imageReader->getData() as $bildRow) {
                $image[]= $bildRow->bild->getImageUrl($imageReader->model->bildAutoSize300);
            }

            $data['image']= $image;


            $this->addRow($data);

        }

    }
}