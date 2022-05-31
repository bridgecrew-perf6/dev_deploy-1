<?php

namespace Parlament\Page\Abstimmung;

use Nemundo\Admin\Com\Table\AdminLabelValueTable;
use Nemundo\Admin\Com\Table\AdminTable;
use Nemundo\Com\Html\Hyperlink\SiteHyperlink;
use Nemundo\Com\TableBuilder\TableHeader;
use Nemundo\Com\TableBuilder\TableRow;
use Nemundo\Com\Template\AbstractTemplateDocument;
use Nemundo\Html\Heading\H1;
use Parlament\Data\AbstimmungRatsmitglied\AbstimmungRatsmitgliedReader;
use Parlament\Manager\AbstimmungManager;
use Parlament\Parameter\AbstimmungParameter;

class AbstimmungItemPage extends AbstractTemplateDocument
{
    public function getContent()
    {

        $abstimmungId=(new AbstimmungParameter())->getValue();

        $abstimmungRow = (new AbstimmungManager())->getAbstimmungRow($abstimmungId);

        $h1=new H1($this);
        $h1->content=$abstimmungRow->abstimmung;


        $table=new AdminLabelValueTable($this);
        //if ($abstimmungRow->datum !==null) {
        $table->addLabelValue('Datum',$abstimmungRow->datum->getShortDateLeadingZeroFormat());
        $table->addLabelValue('Zeit',$abstimmungRow->zeit->getTimeLeadingZero());
        //}
        $table->addLabelValue('Geschäft',$abstimmungRow->geschaeft->geschaeft);
        $table->addLabelValue('Ja', $abstimmungRow->ja);
        $table->addLabelValue('Nein',$abstimmungRow->nein);
        $table->addLabelValue('Enthaltung',$abstimmungRow->enthaltung);
        $table->addLabelHyperlink('Url',$abstimmungRow->geschaeft->getUrl());
        $table->addLabelHyperlink('Json (Geschäft)',$abstimmungRow->geschaeft->getJsonUrl());
        $table->addLabelHyperlink('Json (Abstimmung)',$abstimmungRow->getJsonUrl());


        $table=new AdminTable($this);

        $header=new TableHeader($table);
        $header->addText('Ratsmitglied');
        $header->addText('Fraktion');
        $header->addText('Entscheidung');

        $reader=new AbstimmungRatsmitgliedReader();
        $reader->model->loadRatsmitglied();
        $reader->model->ratsmitglied->loadFraktion();
        $reader->model->loadEntscheidung();
        $reader->filter->andEqual($reader->model->abstimmungId,$abstimmungId);

        foreach ($reader->getData() as $abstimmungRatsmitgliedRow) {


            $row=new TableRow($table);
            //$row->addText($abstimmungRatsmitgliedRow->ratsmitglied->getVornameName());*/

            $hyperlink=new SiteHyperlink($row);
            $hyperlink->site=$abstimmungRatsmitgliedRow->ratsmitglied->getSite();

            $hyperlink=new SiteHyperlink($row);
            $hyperlink->site=$abstimmungRatsmitgliedRow->ratsmitglied->fraktion->getSite();

            $row->addText($abstimmungRatsmitgliedRow->entscheidung->entscheidung);



        }








        return parent::getContent();
    }
}