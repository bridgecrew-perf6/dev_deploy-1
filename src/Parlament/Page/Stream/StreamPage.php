<?php

namespace Parlament\Page\Stream;

use Nemundo\Admin\Com\Image\AdminImage;
use Nemundo\Admin\Template\AdminTemplate;
use Nemundo\Bfs\Gemeinde\Com\ListBox\KantonListBox;
use Nemundo\Com\Html\Hyperlink\SiteHyperlink;
use Nemundo\Com\Html\Hyperlink\UrlHyperlink;
use Nemundo\Com\Html\Listing\UnorderedList;
use Nemundo\Com\JavaScript\Module\ModuleJavaScript;
use Nemundo\Com\Template\AbstractResponsiveHtmlDocument;
use Nemundo\Com\Template\AbstractTemplateDocument;
use Nemundo\Db\Sql\Order\SortOrder;
use Nemundo\Html\Block\ContentDiv;
use Nemundo\Html\Block\Div;
use Nemundo\Html\Block\Hr;
use Nemundo\Html\Button\Button;
use Nemundo\Html\Formatting\Bold;
use Nemundo\Html\Heading\H1;
use Nemundo\Html\Heading\H3;
use Nemundo\Html\Heading\H5;
use Nemundo\Html\Hyperlink\Hyperlink;
use Nemundo\Html\Image\Img;
use Nemundo\Html\Inline\Span;
use Nemundo\Html\Layout\Nav;
use Nemundo\Html\Paragraph\Paragraph;
use Nemundo\Package\FontAwesome\FontAwesomeIcon;
use Nemundo\Package\FontAwesome\FontAwesomePackage;
use Parlament\Data\AbstimmungDatum\AbstimmungDatumReader;
use Parlament\Data\GeschaeftText\GeschaeftTextReader;
use Parlament\Reader\AbstimmungDataReader;
use Parlament\Template\ParlamentTemplate;


// nach ParlamentPage
class StreamPage extends AbstractTemplateDocument  // AbstractResponsiveHtmlDocument  // ParlamentTemplate
{

    public function getContent()
    {


        //$this->addPackage(new FontAwesomePackage());





        $script=new ModuleJavaScript($this);
        $script->src='/js/parlament/stream.js';

        //$this->addCssUrl('');
        //$this->addCssUrl('/css/dev/dev.css');
        /*$this->addCssUrl('/css/framework/framework.css');
        $this->addCssUrl('/css/dev/style.css');*/

        /*$p=new Paragraph($this);
        $p->addCssClass('hello');
        $p->content='hello';


        $container=new Div($this);
        $container->addCssClass('container');

        $img = new AdminImage($container);  // new Img($this);
        $img->src='http://www.dallenwil.ch/de/images/6257ebd827656.jpg';
        $img->addCssClass('responsive-image');


        $div= new ContentDiv($container);
        $div->addCssClass('menu-over');
        $div->content='Hello World';




$nav =new Nav($this);
$nav->addCssClass('navigation-horizontal');

$hyperlink=new Hyperlink($nav);
$hyperlink->content='Nav1';

        $hyperlink=new Hyperlink($nav);
        $hyperlink->content='Nav2';


        $nav3= new Span($nav);  // Div($nav);
        $nav3->addCssClass('menu-item');


        $hyperlink=new Hyperlink($nav3);
        $hyperlink->content='Nav3';
        $hyperlink->id='nav3';

        $ul= new ContentDiv($nav3);  //new UnorderedList($nav3);
        //$ul->addCssClass('subnav');
        $ul->content='123123123';
        /*$ul->addText('first');
        $ul->addText('second');
        $ul->addText('three');*/


        //new AdminImage()






        /*
        $kanton=new KantonListBox($this);*/



        $cardContainer = new Div($this);
        $cardContainer->addCssClass('card-container');


        $datumReader = new AbstimmungDatumReader();
        $datumReader->addOrder($datumReader->model->datum,SortOrder::DESCENDING);
        $datumReader->limit = 10;
        foreach ($datumReader->getData() as $abstimmungDatumRow) {

            $h1 = new H1($cardContainer);
            $h1->content = $abstimmungDatumRow->datum->getLongFormatWithWeekday();

            $abstimmungGeschaeftReader = new AbstimmungDataReader();
            $abstimmungGeschaeftReader->filter->andEqual($abstimmungGeschaeftReader->model->datum, $abstimmungDatumRow->datum->getIsoDate());
            $abstimmungGeschaeftReader->addGroup($abstimmungGeschaeftReader->model->geschaeftId);
            foreach ($abstimmungGeschaeftReader->getData() as $abstimmungGeschaeftRow) {

                $card=new Div($cardContainer);
                $card->addCssClass('card');
                //$card->addDataAttribute('geschaeft',$abstimmungGeschaeftRow->geschaeftId);

                $geschaeftRow = $abstimmungGeschaeftRow->geschaeft;

                //$h3->content = $abstimmungGeschaeftRow->geschaeft->kurzbezeichnung . ' ' . $abstimmungGeschaeftRow->geschaeft->geschaeft;

                /*$hyperlink=new SiteHyperlink($card);
                $hyperlink->site=$geschaeftRow->getSite();
                //$hyperlink->showSiteTitle=false;
                $hyperlink->addCssClass('card-title');*/


                $h3 = new H3($card);
                $h3->content= $abstimmungGeschaeftRow->geschaeft->getTitle();
                $h3->addCssClass('card-title');
                $h3->addDataAttribute('geschaeft',$abstimmungGeschaeftRow->geschaeftId);

                $content=new Div($card);
                $content->addCssClass('card-content');
                $content->id='geschaeft-content-'.$abstimmungGeschaeftRow->geschaeftId;



                $hyperlink = new UrlHyperlink($content);
                $hyperlink->openNewWindow=true;
                $hyperlink->content='Curia Vista';
                $hyperlink->url=$geschaeftRow->getUrl();

                $p = new Paragraph($content);
                $p->content = 'Geschäftstyp: ';

                $bold = new Bold($p);
                $bold->content = $geschaeftRow->geschaeftstyp->geschaeftstyp;

                $p = new Paragraph($content);
                $p->content = 'Status: ';
                $bold = new Bold($p);
                $bold->content = $geschaeftRow->geschaeftsstatus->geschaeftsstatus;





                $textReader = new GeschaeftTextReader();
                $textReader->model->loadTextTyp();
                $textReader->filter->andEqual($textReader->model->geschaeftId, $geschaeftRow->id);
                $textReader->addOrder($textReader->model->textTypId);
                foreach ($textReader->getData() as $geschaeftTextRow) {

                    $h3 = new H5($content);
                    $h3->content = $geschaeftTextRow->textTyp->textTyp;

                    $div = new ContentDiv($content);
                    $div->content = $geschaeftTextRow->text;

                }





                $abstimmungReader = new AbstimmungDataReader();
                $abstimmungReader->filter->andEqual($abstimmungReader->model->datum, $abstimmungDatumRow->datum->getIsoDate());
                $abstimmungReader->filter->andEqual($abstimmungReader->model->geschaeftId, $geschaeftRow->id);
                foreach ($abstimmungReader->getData() as $abstimmungRow) {

                    $div = new ContentDiv($content);
                    $div->content = $abstimmungRow->zeit->getTimeLeadingZero();

                    $div = new Div($content);

                    $bold = new Bold($div);
                    $bold->content = $abstimmungRow->abstimmung;


                    $div = new ContentDiv($content);
                    $div->content = $abstimmungRow->jaBedeutung . ': ' . $abstimmungRow->ja;

                    $div = new ContentDiv($content);
                    $div->content = $abstimmungRow->neinBedeutung . ': ' . $abstimmungRow->nein;


                    $div = new ContentDiv($content);
                    $div->content = 'Enthaltungen: ' . $abstimmungRow->enthaltung;


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


                }


                //new Hr($this);


            }


        }


        /*
        $h1 = new H1($this);
        $h1->content = 'Abstimmung';

        $form = new SearchForm($this);

        $formRow = new BootstrapRow($form);

        $geschaeftstyp = new GeschaeftstypListBox($formRow);
        $geschaeftstyp->column = true;
        $geschaeftstyp->searchMode = true;
        $geschaeftstyp->submitOnChange = true;

        $geschaeftsstatus = new GeschaeftsstatusListBox($formRow);
        $geschaeftsstatus->column = true;
        $geschaeftsstatus->searchMode = true;
        $geschaeftsstatus->submitOnChange = true;

        $session = new SessionListBox($formRow);
        $session->column = true;
        $session->searchMode = true;
        $session->submitOnChange = true;


        $table = new AbstimmungTable($this);

        if ($session->hasValue()) {
            $table->sessionId = $session->getValue();
        }

        if ($geschaeftsstatus->hasValue()) {
            $table->geschaeftsstatusId = $geschaeftsstatus->getValue();
        }

        if ($geschaeftstyp->hasValue()) {
            $table->geschaeftstypId = $geschaeftstyp->getValue();
        }

        new SourceSmall($this);*/


        return parent::getContent();

    }

}