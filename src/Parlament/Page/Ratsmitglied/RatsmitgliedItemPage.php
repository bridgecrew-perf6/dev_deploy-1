<?php

namespace Parlament\Page\Ratsmitglied;

use Nemundo\Admin\Com\Html\AdminUnorderedList;
use Nemundo\Admin\Com\Redefine\AdminSearchRedefine;
use Nemundo\Admin\Com\Table\AdminLabelValueTable;
use Nemundo\Admin\Com\Table\AdminBootstrapTable;
use Nemundo\Admin\Template\BootstrapAdminTemplate;
use Nemundo\Bfs\Gemeinde\Com\ListBox\KantonListBox;
use Nemundo\Bfs\Gemeinde\Parameter\KantonParameter;
use Nemundo\Bfs\Gemeinde\Parameter\RatsmitgliedParameter;
use Nemundo\Com\FormBuilder\SearchForm;
use Nemundo\Com\Html\Hyperlink\SiteHyperlink;
use Nemundo\Com\Html\Listing\UnorderedList;
use Nemundo\Com\TableBuilder\TableHeader;
use Nemundo\Com\TableBuilder\TableRow;
use Nemundo\Db\Sql\Order\SortOrder;
use Nemundo\Html\Heading\H1;
use Nemundo\Html\Heading\H3;
use Nemundo\Html\Paragraph\Paragraph;
use Nemundo\Package\Bootstrap\Icon\BootstrapIcon;
use Nemundo\Package\Bootstrap\Image\BootstrapResponsiveImage;
use Nemundo\Package\Bootstrap\Layout\BootstrapTwoColumnLayout;
use Nemundo\Package\Bootstrap\Layout\Grid\BootstrapRow;
use Nemundo\Package\Bootstrap\Pagination\BootstrapPagination;
use Nemundo\Web\Site\Site;
use Parlament\Com\ListBox\FraktionListBox;
use Parlament\Com\ListBox\RatListBox;
use Parlament\Com\Small\ParlamentSource;
use Parlament\Com\Table\RatsmitgliedTable;
use Parlament\Data\Abstimmung\AbstimmungReader;
use Parlament\Data\AbstimmungRatsmitglied\AbstimmungRatsmitgliedReader;
use Parlament\Data\RatsmitgliedBeruf\RatsmitgliedBerufReader;
use Parlament\Data\RatsmitgliedInteressenbindung\RatsmitgliedInteressenbindungReader;
use Parlament\Manager\RatsmitgliedManager;
use Parlament\Parameter\FraktionParameter;
use Parlament\Parameter\InteressenbindungParameter;
use Parlament\Parameter\RatParameter;
use Parlament\Site\Interessenbindung\InteressenbindungItemSite;
use Parlament\Template\ParlamentTemplate;


class RatsmitgliedItemPage extends ParlamentTemplate  // BootstrapAdminTemplate
{

    public function getContent()
    {

        $ratsmitgliedId=(new RatsmitgliedParameter())->getValue();
        $ratsmitgliedRow=(new RatsmitgliedManager())->getRatsmitgliedRow($ratsmitgliedId);

        $h1=new H1($this);
        $h1->content=$ratsmitgliedRow->getVornameName();

        $img = new BootstrapResponsiveImage($this);
        $img->src=$ratsmitgliedRow->bild->getUrl();


        $table = new AdminLabelValueTable($this);
        $table->addLabelValue('Fraktion',$ratsmitgliedRow->fraktion->fraktion);


        $h3=new H3($this);
        $h3->content='Beruf';

        $ul= new AdminUnorderedList($this);

        $reader=new RatsmitgliedBerufReader();
        $reader->model->loadBeruf();
        $reader->filter->andEqual($reader->model->ratsmitgliedId, $ratsmitgliedRow->id);
        foreach ($reader->getData() as $dataRow) {
            $ul->addText($dataRow->beruf->beruf);
        }



        $h3=new H3($this);
        $h3->content='Interessenbindungen';

        $ul= new AdminUnorderedList($this);

        $reader=new RatsmitgliedInteressenbindungReader();
        $reader->model->loadInteressenbindung();
        $reader->filter->andEqual($reader->model->ratsmitgliedId, $ratsmitgliedRow->id);
        foreach ($reader->getData() as $dataRow) {


            $site = clone(InteressenbindungItemSite::$site);
            $site->title = $dataRow->interessenbindung->organisation;
            $site->addParameter(new InteressenbindungParameter($dataRow->interessenbindungId));

            $hyperlink=new SiteHyperlink($ul);
            $hyperlink->site=$site;

            //$ul->addText($dataRow->interessenbindung->organisation);

        }







        $table = new AdminBootstrapTable($this);

        $header=new TableHeader($table);


        $reader=new AbstimmungRatsmitgliedReader();
        $reader->model->loadAbstimmung();
        $reader->model->abstimmung->loadGeschaeft();
        $reader->model->loadEntscheidung();
        $reader->filter->andEqual($reader->model->ratsmitgliedId, $ratsmitgliedId);
        $reader->addOrder($reader->model->abstimmung->id,SortOrder::DESCENDING);
        foreach ($reader->getData() as $abstimmungRatsmitgliedRow) {

            $row=new TableRow($table);
            $row->addText($abstimmungRatsmitgliedRow->abstimmung->datum->getShortDateLeadingZeroFormat());
            $row->addText($abstimmungRatsmitgliedRow->abstimmung->zeit->getTimeLeadingZero());

            $hyperlink=new SiteHyperlink($row);
            $hyperlink->site=$abstimmungRatsmitgliedRow->abstimmung->getSite();

            $hyperlink=new SiteHyperlink($row);
            $hyperlink->site=$abstimmungRatsmitgliedRow->abstimmung->geschaeft->getSite();



            /*
            $row->addText($abstimmungRatsmitgliedRow->abstimmung->abstimmung);
            $row->addText($abstimmungRatsmitgliedRow->abstimmung->geschaeft->geschaeft);*/

            $row->addText($abstimmungRatsmitgliedRow->entscheidung->entscheidung);

        }







        return parent::getContent();
    }
}