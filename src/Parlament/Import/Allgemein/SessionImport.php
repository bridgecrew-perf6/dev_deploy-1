<?php

namespace Parlament\Import\Allgemein;

use Nemundo\Core\Type\DateTime\Date;
use Parlament\Data\Session\Session;
use Parlament\Import\Base\AbstractPageParlamentImport;
use Parlament\Import\Base\AbstractParlamentImport;

class SessionImport extends AbstractPageParlamentImport
{

    public function importData()
    {

        $this->loadJson('sessions');

    }


    protected function onJson($json)
    {

        $data = new Session();
        $data->ignoreIfExists = true;
        //$data->updateOnDuplicate = true;
        $data->id = $json['code'];
        $data->session = $json['name'];
        $data->von = (new Date($json['from']));
        $data->bis = (new Date($json['to']));
        $data->save();

    }


}