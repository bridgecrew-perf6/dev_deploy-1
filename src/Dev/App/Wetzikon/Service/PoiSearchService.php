<?php

namespace Dev\App\Wetzikon\Service;

use Dev\App\Wetzikon\Data\Poi\PoiReader;
use Nemundo\Admin\Com\Table\AdminTable;
use Nemundo\Admin\Com\Table\AdminTableHeader;
use Nemundo\Admin\Com\Table\Row\AdminTableRow;
use Nemundo\App\WebService\Service\AbstractServiceRequest;

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
            $data['text'] = $poiRow->text;
            $data['lat'] = $poiRow->coordinate->latitude;
            $data['lon'] = $poiRow->coordinate->longitude;

            $this->addRow($data);

        }

    }
}