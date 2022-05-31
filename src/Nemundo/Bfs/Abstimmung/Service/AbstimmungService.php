<?php

namespace Nemundo\Bfs\Abstimmung\Service;

use Nemundo\App\WebService\Service\AbstractListServiceRequest;
use Nemundo\App\WebService\Service\AbstractServiceRequest;
use Nemundo\Bfs\Abstimmung\Data\Abstimmung\AbstimmungReader;
use Nemundo\Bfs\Abstimmung\Request\DatumRequest;
use Nemundo\Bfs\Abstimmung\Request\GemeindeTextRequest;
use Nemundo\Bfs\Abstimmung\Request\JahrRequest;
use Nemundo\Core\Http\Request\HttpRequest;

// AbstimmungSearchService
class AbstimmungService extends AbstractListServiceRequest
{

    protected function loadServiceRequest()
    {
        $this->serviceName = 'abstimmung-abstimmung';
    }


    public function onRequest()
    {

        $reader = new AbstimmungReader();
        $reader->model->loadDatum();

        $request = new JahrRequest();
        if ($request->hasValue()) {
            $reader->filter->andEqual($reader->model->datum->jahr, $request->getValue());
        }

        $request = new DatumRequest();
        if ($request->hasValue()) {
            $reader->filter->andEqual($reader->model->datumId, $request->getValue());
        }

        $request = new HttpRequest('datum-iso');
        if ($request->hasValue()) {
            $reader->filter->andEqual($reader->model->datum->datum, $request->getValue());
        }


        /*if ($this->filterByDatum) {
            $reader->filter->andEqual($reader->model->datumId, $this->datumId);
        }

        if ($this->filterByJahr) {
            $reader->model->loadDatum();
            $reader->filter->andEqual($reader->model->datum->jahr, $this->jahr);
        }*/

        $reader->addOrder($reader->model->abstimmung);

        $reader->limit=20;

        foreach ($reader->getData() as $abstimmungRow) {

            $data = [];
            $data['id'] = $abstimmungRow->id;
            $data['datum'] = $abstimmungRow->datum->datum->getIsoDate();
            $data['datum_text'] = $abstimmungRow->datum->datum->getShortDateLeadingZeroFormat();
            $data['abstimmung'] = $abstimmungRow->abstimmung;

            $this->addRow($data);

        }

    }

}