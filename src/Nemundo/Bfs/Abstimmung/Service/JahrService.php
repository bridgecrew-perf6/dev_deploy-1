<?php


namespace Nemundo\Bfs\Abstimmung\Service;


use Nemundo\App\WebService\Service\AbstractServiceRequest;
use Nemundo\Bfs\Abstimmung\Data\Abstimmung\AbstimmungReader;
use Nemundo\Bfs\Abstimmung\Data\Jahr\JahrReader;
use Nemundo\Db\Sql\Order\SortOrder;

class JahrService extends AbstractServiceRequest
{

    protected function loadService()
    {
        $this->serviceName = 'abstimmung-jahr';
    }


    public function onRequest()
    {

        $jahrReader = new JahrReader();
        $jahrReader->addOrder($jahrReader->model->id,SortOrder::DESCENDING);
        //$jahrReader->addOrder($jahrReader->model->id);
        foreach ($jahrReader->getData() as $jahrRow) {

            $data = [];
            $data['jahr'] = $jahrRow->id;

            $this->addRow($data);

        }

    }

}