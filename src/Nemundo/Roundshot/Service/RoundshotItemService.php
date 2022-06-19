<?php


namespace Nemundo\Roundshot\Service;

use Nemundo\App\WebService\Service\AbstractServiceRequest;
use Nemundo\Core\Http\Request\HttpRequest;
use Nemundo\Roundshot\Data\Roundshot\RoundshotReader;

class RoundshotItemService extends AbstractServiceRequest
{

    protected function loadService()
    {
        $this->serviceName = 'roundshot-item';

    }


    public function onRequest()
    {

        $reader = new RoundshotReader();
        $reader->filter->andEqual($reader->model->id, (new HttpRequest('id'))->getValue());
        foreach ($reader->getData() as $roundshotRow) {

            $row = [];
            $row['id'] = $roundshotRow->id;
            $row['roundshot'] = $roundshotRow->roundshot;
            $row['roundshot_number'] = $roundshotRow->roundshotNumber;
            $row['url'] = $roundshotRow->url;
            $this->addRow($row);

        }

    }

}