<?php

namespace Parlament\Import\Abstimmung;

use Nemundo\Core\Type\DateTime\DateTime;
use Parlament\Data\Abstimmung\Abstimmung;
use Parlament\Data\AbstimmungDatum\AbstimmungDatum;
use Parlament\Data\AbstimmungRatsmitglied\AbstimmungRatsmitgliedBulk;
use Parlament\Import\Base\AbstractParlamentImport;
use Parlament\Import\Geschaeft\GeschaeftDetailImport;

class AbstimmungDetailImport extends AbstractParlamentImport
{

    public $sessionId;

    public $importGeschaeft = false;


    public function importData()
    {

    }


    public function importAbstimmung($geschaeftId)
    {

        $this->loadJsonList('votes/affairs/' . $geschaeftId);

    }


    protected function onJson($json)
    {

        $geschaeftId = $json['id'];

        if ($this->importGeschaeft) {
            (new GeschaeftDetailImport())->importGeschaeft($geschaeftId);
        }

        foreach ($json['affairVotes'] as $affairVote) {

            $abstimmungId = $affairVote['id'];
            $datum = new DateTime($affairVote['date']);





            $data = new Abstimmung();
            $data->updateOnDuplicate = true;
            $data->id = $abstimmungId;
            $data->geschaeftId = $geschaeftId;
            $data->abstimmung = $affairVote['divisionText'];



            $data->datum = $datum->getDate();
            $data->zeit = $datum->getTime();

            $data->jaBedeutung= $affairVote['meaningYes'];
            $data->neinBedeutung= $affairVote['meaningNo'];


            /*
            "meaningNo": "Antrag der Minderheit Wermuth (Nichteintreten)",
      "meaningYes": "Antrag der Mehrheit (Eintreten)",
            */

            foreach ($affairVote['totalVotes'] as $totalVote) {

                if ($totalVote['type'] == 1) {
                    $data->ja = $totalVote['count'];
                }

                if ($totalVote['type'] == 2) {
                    $data->nein = $totalVote['count'];
                }

                if ($totalVote['type'] == 3) {
                    $data->enthaltung = $totalVote['count'];
                }

            }

            $data->save();


            $data=new AbstimmungDatum();
            $data->ignoreIfExists=true;
            $data->datum=$datum;
            $data->save();



            $entscheidung = [];
            $entscheidung['Yes'] = 1;
            $entscheidung['No'] = 2;
            $entscheidung['NT'] = 3;
            $entscheidung['ES'] = 4;
            $entscheidung['EH'] = 5;
            $entscheidung['p'] = 6;
            $entscheidung['P'] = 6;
            $entscheidung['Invalid8'] = 6;

            $data = new AbstimmungRatsmitgliedBulk();
            $data->ignoreIfExists = true;

            foreach ($affairVote['councillorVotes'] as $councillorVote) {

                $data->id = $councillorVote['id'];
                $data->abstimmungId = $abstimmungId;
                $data->ratsmitgliedId = $councillorVote['number'];
                $data->entscheidungId = $entscheidung[$councillorVote['decision']];
                $data->save();

            }

            $data->saveBulk();

        }

    }

}