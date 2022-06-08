<?php

namespace Parlament\Com\Container;

use Dev\App\MyVote\Com\Form\VoteForm;
use Nemundo\Admin\Com\Table\AdminBootstrapTable;
use Nemundo\Com\Html\Hyperlink\SiteHyperlink;
use Nemundo\Com\TableBuilder\TableRow;
use Nemundo\Core\Debug\Debug;
use Nemundo\Html\Block\ContentDiv;
use Nemundo\Html\Block\Div;
use Nemundo\Html\Block\Hr;
use Nemundo\Html\Formatting\Bold;
use Nemundo\Html\Heading\H3;
use Parlament\Data\Abstimmung\AbstimmungReader;
use Parlament\Data\Geschaeft\GeschaeftReader;
use Parlament\Reader\GeschaeftDataReader;

class AbstimmungContainer extends Div
{

    /**
     * @var AbstimmungReader
     */
    public $abstimmungReader;


    public function getContent()
    {


/*
        foreach ($abstimmungReader->getData() as $abstimmungRow) {

            $div = new ContentDiv($content);
            $div->content = $abstimmungRow->zeit->getTimeLeadingZero(). ' Uhr';

            //$div = new Div($content);


            $bold = new Bold($content);
            $bold->content = $abstimmungRow->abstimmung;

            $table = new AdminTable($content);  // new Table($content);

            $tableRow=new TableRow($table);
            $tableRow->addText($abstimmungRow->jaBedeutung);
            $tableRow->addBoldText($abstimmungRow->ja);

            $tableRow=new TableRow($table);
            $tableRow->addText($abstimmungRow->neinBedeutung);
            $tableRow->addBoldText($abstimmungRow->nein);

            $tableRow=new TableRow($table);
            $tableRow->addText('Enthaltungen');
            $tableRow->addBoldText($abstimmungRow->enthaltung);*/



            /*
            $div = new ContentDiv($content);
            $div->content = $abstimmungRow->jaBedeutung . ': ' . $abstimmungRow->ja;

            $div = new ContentDiv($content);
            $div->content = $abstimmungRow->neinBedeutung . ': ' . $abstimmungRow->nein;

            $div = new ContentDiv($content);
            $div->content = 'Enthaltungen: ' . $abstimmungRow->enthaltung;*/


            /*
            $row = new TableRow($table);
            $row->addText($abstimmungRow->datum->getShortDateLeadingZeroFormat());
            $row->addText($abstimmungRow->zeit->getTimeLeadingZero());

            $hyperlink = new SiteHyperlink($row);
            $hyperlink->site = $abstimmungRow->getSite();

            $row->addText($abstimmungRow->jaBedeutung);
            $row->addText($abstimmungRow->ja);
            $row->addText($abstimmungRow->neinBedeutung);
            $row->addText($abstimmungRow->nein);

            $row->addText($abstimmungRow->enthaltung);*/


        //}



        foreach ($this->abstimmungReader->getData() as $abstimmungRow) {


            $form=new VoteForm($this);
            $form->abstimmungId=$abstimmungRow->id;



            //(new Debug())->write($abstimmungRow->id);



            /*$typ=new ContentDiv($this);
            $typ->content=$geschaeftRow->geschaeftstyp->geschaeftstyp;*/


            $div = new ContentDiv($this);
            $div->content = $abstimmungRow->datum->getShortDateLeadingZeroFormat().' '. $abstimmungRow->zeit->getTimeLeadingZero(). ' Uhr';


            $div = new Div($this);

            $bold = new Bold($div);
            $bold->content = $abstimmungRow->abstimmung;


            /*
            $div = new ContentDiv($this);
            $div->content = $abstimmungRow->jaBedeutung . ': ' . $abstimmungRow->ja;

            $div = new ContentDiv($this);
            $div->content = $abstimmungRow->neinBedeutung . ': ' . $abstimmungRow->nein;


            $div = new ContentDiv($this);
            $div->content = 'Enthaltungen: ' . $abstimmungRow->enthaltung;*/

            $hyperlink=new SiteHyperlink($this);
            $hyperlink->site=$abstimmungRow->getSite();
            $hyperlink->showSiteTitle=false;
            $hyperlink->content='Namensabstimmung';

            /*$h3=new H3($hyperlink);
            $h3->content=$abstimmungRow->abstimmung;  //kurzbezeichnung.' '. $geschaeftRow->geschaeft;*/

            $table = new AdminBootstrapTable($this);  // new Table($content);

            $tableRow=new TableRow($table);
            $tableRow->addText($abstimmungRow->jaBedeutung);
            $tableRow->addBoldText($abstimmungRow->ja);

            $tableRow=new TableRow($table);
            $tableRow->addText($abstimmungRow->neinBedeutung);
            $tableRow->addBoldText($abstimmungRow->nein);

            $tableRow=new TableRow($table);
            $tableRow->addText('Enthaltungen');
            $tableRow->addBoldText($abstimmungRow->enthaltung);

            //new Hr($this);

            /*
            $row=new BootstrapClickableTableRow($this);
            $row->addText($geschaeftRow->kurzbezeichnung);
            //$row->addText($geschaeftRow->geschaeft);

            $hyperlink=new SiteHyperlink($row);
            $hyperlink->site=$geschaeftRow->getSite();



            $row->addText($geschaeftRow->geschaeftstyp->geschaeftstyp);
            $row->addText($geschaeftRow->session->session);

            $ul = new UnorderedList($row);

            $abstimmungReader=new AbstimmungReader();
            $abstimmungReader->filter->andEqual($abstimmungReader->model->geschaeftId,$geschaeftRow->id);
            foreach ($abstimmungReader->getData() as $abstimmungRow) {
                $ul->addText($abstimmungRow->abstimmung);
            }


            $hyperlink=new Hyperlink($row);
            $hyperlink->content='Detail';
            $hyperlink->href=$geschaeftRow->getUrl();

            $hyperlink=new Hyperlink($row);
            $hyperlink->content='Json';
            $hyperlink->href=$geschaeftRow->getJsonUrl();

            $hyperlink=new Hyperlink($row);
            $hyperlink->content='Vote Json';
            $hyperlink->href=$geschaeftRow->getVoteJsonUrl();*/



        }

        //(new Debug())->write('---');

        return parent::getContent();

    }

}