<?php

namespace Parlament\Page\Kommission;

use Nemundo\Admin\Com\Table\AdminTable;
use Nemundo\Com\TableBuilder\TableRow;
use Nemundo\Com\Template\AbstractTemplateDocument;
use Nemundo\Html\Block\Hr;
use Nemundo\Html\Formatting\Small;
use Nemundo\Html\Heading\H1;
use Nemundo\Html\Heading\H2;
use Parlament\Data\Kommission\KommissionReader;
use Parlament\Data\KommissionRatsmitglied\KommissionRatsmitgliedReader;

class KommissionPage extends AbstractTemplateDocument
{
    public function getContent()
    {

        $h1 = new H1($this);
        $h1->content = 'Kommission';

        $kommissionReader=new KommissionReader();
        $kommissionReader->model->loadRat();
        $kommissionReader->filter->andEqual($kommissionReader->model->aktiv,true);

        foreach ($kommissionReader->getData() as $kommissionRow) {


            $h2=new H2($this);
            $h2->content= $kommissionRow->kommission;

            $small = new Small($this);
            $small->content=$kommissionRow->rat->rat;





            new Hr($this);





        }









        return parent::getContent();
    }
}