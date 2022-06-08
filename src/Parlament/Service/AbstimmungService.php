<?php

namespace Parlament\Service;

use Nemundo\App\WebService\Service\AbstractServiceRequest;
use Parlament\Reader\AbstimmungDataReader;

class AbstimmungService extends AbstractServiceRequest
{
    protected function loadService()
    {
        $this->serviceName = 'parlament-abstimmung';
    }

    public function onRequest()
    {

        $reader = new AbstimmungDataReader();

        foreach ($reader->getData() as $abstimmungRow) {

            $data = [];
            $data['id'] = $abstimmungRow->id;
            $data['abstimmung'] = $abstimmungRow->abstimmung;
            $data['geschaeft_id'] = $abstimmungRow->geschaeftId;
            $data['geschaeft'] = $abstimmungRow->geschaeft->geschaeft;
            $data['datum'] = $abstimmungRow->datum->getIsoDate();
            $data['zeit'] = $abstimmungRow->zeit->getTimeLeadingZero();

            $data['ja'] = $abstimmungRow->ja;
            $data['nein'] = $abstimmungRow->nein;

            $this->addRow($data);

        }


    }
}