<?php

namespace Parlament\Import\Kommission;

use Nemundo\Core\Debug\Debug;
use Parlament\Data\KommissionFunktion\KommissionFunktion;
use Parlament\Data\KommissionRatsmitglied\KommissionRatsmitglied;
use Parlament\Import\Base\AbstractParlamentImport;


class KommissionDetailImport extends AbstractParlamentImport
{

    private $kommissionId;

    public function importData()
    {

    }


    public function importKommission($kommissionId)
    {

        $this->kommissionId = $kommissionId;
        $this->loadJsonList('committees/' . $kommissionId);

    }


    protected function onJson($json)
    {

        foreach ($json['members'] as $member) {


            //(new Debug())->write($member);

            $funktionnId = $member['committeeFunction'];

            $data = new KommissionFunktion();
            $data->ignoreIfExists = true;
            $data->id = $funktionnId;
            $data->funktion = $member['committeeFunctionName'];
            $data->save();

            $data = new KommissionRatsmitglied();
            $data->updateOnDuplicate = true;
            $data->kommissionId = $this->kommissionId;
            $data->ratsmitgliedId =$member['number'];  // $member['id'];
            $data->aktiv = $member['active'];
            $data->funktionId = $funktionnId;
            $data->save();

        }

    }

}