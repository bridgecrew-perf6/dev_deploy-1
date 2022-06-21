<?php

namespace Parlament\Page\Abstimmung;

use Nemundo\Admin\Com\Table\AdminLabelValueTable;
use Nemundo\Admin\Com\Table\AdminTable;
use Nemundo\Com\Html\Hyperlink\SiteHyperlink;
use Nemundo\Com\TableBuilder\TableHeader;
use Nemundo\Com\TableBuilder\TableRow;
use Nemundo\Db\Sql\Field\CountField;
use Nemundo\Html\Heading\H1;
use Nemundo\Html\Heading\H2;
use Parlament\Data\AbstimmungRatsmitglied\AbstimmungRatsmitgliedReader;
use Parlament\Manager\AbstimmungManager;
use Parlament\Parameter\AbstimmungParameter;
use Parlament\Template\ParlamentTemplate;

class AbstimmungItemPage extends ParlamentTemplate  // AbstractTemplateDocument
{
    public function getContent()
    {

        $abstimmungId = (new AbstimmungParameter())->getValue();

        $abstimmungRow = (new AbstimmungManager())->getAbstimmungRow($abstimmungId);

        $h1 = new H1($this);
        $h1->content = $abstimmungRow->abstimmung;


        $table = new AdminLabelValueTable($this);
        //if ($abstimmungRow->datum !==null) {
        $table->addLabelValue('Datum', $abstimmungRow->datum->getShortDateLeadingZeroFormat());
        $table->addLabelValue('Zeit', $abstimmungRow->zeit->getTimeLeadingZero());
        //}
        //$table->addLabelValue('Geschäft',$abstimmungRow->geschaeft->geschaeft);
        $table->addLabelSite('Geschäft', $abstimmungRow->geschaeft->getSite());

        $table->addLabelValue('Ja Bedeutung', $abstimmungRow->jaBedeutung);
        $table->addLabelValue('Nein Bedeutung', $abstimmungRow->neinBedeutung);

        $table->addLabelValue('Ja', $abstimmungRow->ja);
        $table->addLabelValue('Nein', $abstimmungRow->nein);
        $table->addLabelValue('Enthaltung', $abstimmungRow->enthaltung);
        /*$table->addLabelHyperlink('Url',$abstimmungRow->geschaeft->getUrl());
        $table->addLabelHyperlink('Json (Geschäft)',$abstimmungRow->geschaeft->getJsonUrl());
        $table->addLabelHyperlink('Json (Abstimmung)',$abstimmungRow->getJsonUrl());*/


        $h2 = new H2($this);
        $h2->content = 'Entscheidung der Ratsmitglied';


        $table = new AdminTable($this);

        $header = new TableHeader($table);
        $header->addText('Ratsmitglied');
        $header->addText('Fraktion');
        $header->addText('Entscheidung');

        $reader = new AbstimmungRatsmitgliedReader();
        $reader->model->loadRatsmitglied();
        $reader->model->ratsmitglied->loadFraktion();
        $reader->model->loadEntscheidung();
        $reader->filter->andEqual($reader->model->abstimmungId, $abstimmungId);

        foreach ($reader->getData() as $abstimmungRatsmitgliedRow) {


            $row = new TableRow($table);
            //$row->addText($abstimmungRatsmitgliedRow->ratsmitglied->getVornameName());*/

            $hyperlink = new SiteHyperlink($row);
            $hyperlink->site = $abstimmungRatsmitgliedRow->ratsmitglied->getSite();

            $hyperlink = new SiteHyperlink($row);
            $hyperlink->site = $abstimmungRatsmitgliedRow->ratsmitglied->fraktion->getSite();

            $row->addText($abstimmungRatsmitgliedRow->entscheidung->entscheidung);


        }


        $h2 = new H2($this);
        $h2->content = 'Entscheidung nach Fraktion';


        $table = new AdminTable($this);

        $header = new TableHeader($table);
        //$header->addText('Ratsmitglied');
        $header->addText('Fraktion');
        $header->addText('Entscheidung');
        $header->addText('Anzahl');

        $reader = new AbstimmungRatsmitgliedReader();
        $reader->model->loadRatsmitglied();
        $reader->model->ratsmitglied->loadFraktion();
        $reader->model->loadEntscheidung();
        $reader->filter->andEqual($reader->model->abstimmungId, $abstimmungId);

        $reader->addGroup($reader->model->ratsmitglied->fraktionId);
        $reader->addGroup($reader->model->entscheidungId);

        $count = new CountField($reader);

        foreach ($reader->getData() as $abstimmungRatsmitgliedRow) {


            $row = new TableRow($table);
            //$row->addText($abstimmungRatsmitgliedRow->ratsmitglied->getVornameName());*/

            $hyperlink = new SiteHyperlink($row);
            $hyperlink->site = $abstimmungRatsmitgliedRow->ratsmitglied->fraktion->getSite();
            $row->addText($abstimmungRatsmitgliedRow->entscheidung->entscheidung);
            $row->addText($abstimmungRatsmitgliedRow->getModelValue($count));


        }


        return parent::getContent();
    }
}