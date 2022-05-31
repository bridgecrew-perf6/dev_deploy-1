<?php

namespace Nemundo\Bfs\Abstimmung\Service;


use Nemundo\App\WebService\Service\AbstractServiceRequest;
use Nemundo\Bfs\Abstimmung\Data\Datum\DatumReader;
use Nemundo\Bfs\Abstimmung\Request\JahrRequest;
use Nemundo\Db\Sql\Order\SortOrder;

class DatumService extends AbstractServiceRequest
{

    protected function loadServiceRequest()
    {
        $this->serviceName = 'abstimmung-datum';
    }


    public function onRequest()
    {

        $reader = new DatumReader();

        $request = new JahrRequest();
        if ($request->hasValue()) {
            $reader->filter->andEqual($reader->model->jahr, $request->getValue());
        }

        $reader->addOrder($reader->model->datum, SortOrder::DESCENDING);
        foreach ($reader->getData() as $row) {

            $data = [];
            $data['id'] = $row->id;
            $data['datum'] = $row->datum->getIsoDate();
            $data['datum_text'] = $row->datum->getLongFormat();

            $this->addRow($data);

        }

    }

}