<?php

namespace Parlament\Service;

use Nemundo\App\WebService\Service\AbstractServiceRequest;
use Nemundo\Core\Debug\Debug;
use Nemundo\Core\Http\Request\HttpRequest;
use Nemundo\Html\Block\ContentDiv;
use Nemundo\Html\Block\Div;
use Nemundo\Html\Heading\H5;
use Parlament\Data\GeschaeftText\GeschaeftTextReader;
use Parlament\Data\Ratsmitglied\RatsmitgliedReader;
use Parlament\Reader\AbstimmungDataReader;
use Parlament\Reader\GeschaeftDataReader;

class RatsmitgliedService extends AbstractServiceRequest
{
    protected function loadService()
    {
        $this->serviceName = 'parlament-ratsmitglied';
    }

    public function onRequest()
    {

        $reader = new RatsmitgliedReader();
        $reader->limit=10;
        foreach ($reader->getData() as $ratsmitgliedRow) {

            $data = [];
            $data['ratsmitglied_id'] = $ratsmitgliedRow->id;
            $data['ratsmitglied'] = $ratsmitgliedRow->getVornameName();
            $data['bild_url'] = $ratsmitgliedRow->bild->getUrl();

            $this->addRow($data);

        }


    }
}