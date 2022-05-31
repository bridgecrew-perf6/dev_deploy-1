<?php

namespace Parlament\Page\Kommission;

use Nemundo\Admin\Com\Table\AdminTable;
use Nemundo\Com\TableBuilder\TableRow;
use Nemundo\Com\Template\AbstractTemplateDocument;
use Nemundo\Html\Block\Hr;
use Nemundo\Html\Formatting\Small;
use Nemundo\Html\Heading\H2;
use Parlament\Data\Kommission\KommissionReader;
use Parlament\Data\KommissionRatsmitglied\KommissionRatsmitgliedReader;
use Parlament\Parameter\KommissionParameter;

class KommissionItemPage extends AbstractTemplateDocument
{
    public function getContent()
    {

        $kommissionId=(new KommissionParameter())->getValue();


        $table = new AdminTable($this);

        $kommissionMitgliedReader=new KommissionRatsmitgliedReader();
        $kommissionMitgliedReader->model->loadRatsmitglied();
        $kommissionMitgliedReader->model->loadFunktion();
        $kommissionMitgliedReader->filter->andEqual($kommissionMitgliedReader->model->kommissionId, $kommissionId);
        foreach ($kommissionMitgliedReader->getData() as $kommissionRatsmitgliedRow) {

            $row=new TableRow($table);
            $row->addText($kommissionRatsmitgliedRow->ratsmitglied->getVornameName());
            $row->addText($kommissionRatsmitgliedRow->funktion->funktion);

        }

        return parent::getContent();
    }
}