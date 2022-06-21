<?php

namespace Parlament\Service;

use Nemundo\App\WebService\Service\AbstractListServiceRequest;
use Nemundo\App\WebService\Service\AbstractServiceRequest;
use Parlament\Reader\AbstimmungDataReader;

class AbstimmungService extends AbstractListServiceRequest
{
    protected function loadService()
    {
        $this->serviceName = 'parlament-abstimmung';
    }

    public function onRequest()
    {

        $reader = new AbstimmungDataReader();
        $reader->limit=$this->getPaginationLimit();

        foreach ($reader->getData() as $abstimmungRow) {

            $data = [];
            $data['id'] = $abstimmungRow->id;
            $data['abstimmung_id'] = $abstimmungRow->id;
            $data['abstimmung'] = $abstimmungRow->abstimmung;
            $data['geschaeft_id'] = $abstimmungRow->geschaeftId;
            $data['geschaeft'] = $abstimmungRow->geschaeft->geschaeft;

            $data['geschaeft_url'] = $abstimmungRow->geschaeft->getUrl();
            $data['geschaeft_text'] = $abstimmungRow->geschaeft->getText();


            $data['datum'] = $abstimmungRow->datum->getIsoDate();
            $data['zeit'] = $abstimmungRow->zeit->getTimeLeadingZero();
            $data['datum_zeit_text'] = $abstimmungRow->datum->getShortDateLeadingZeroFormat().' '.$abstimmungRow->zeit->getTimeLeadingZero();

            $data['ja_bedeutung'] = $abstimmungRow->jaBedeutung;
            $data['nein_bedeutung'] = $abstimmungRow->neinBedeutung;

            $data['ja'] = $abstimmungRow->ja;
            $data['nein'] = $abstimmungRow->nein;
            $data['enthaltung'] = $abstimmungRow->enthaltung;




            $this->addRow($data);

        }


    }
}