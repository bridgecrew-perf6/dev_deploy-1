<?php

namespace Parlament\Page\Interessenbindung;

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
use Parlament\Com\Card\RatsmitgliedItemCard;
use Parlament\Com\ListBox\FraktionListBox;
use Parlament\Com\ListBox\RatListBox;
use Parlament\Com\Small\ParlamentSource;
use Parlament\Com\Table\RatsmitgliedTable;
use Parlament\Data\Abstimmung\AbstimmungReader;
use Parlament\Data\AbstimmungRatsmitglied\AbstimmungRatsmitgliedReader;
use Parlament\Data\Interessenbindung\InteressenbindungReader;
use Parlament\Data\RatsmitgliedBeruf\RatsmitgliedBerufReader;
use Parlament\Data\RatsmitgliedInteressenbindung\RatsmitgliedInteressenbindungReader;
use Parlament\Manager\RatsmitgliedManager;
use Parlament\Parameter\FraktionParameter;
use Parlament\Parameter\InteressenbindungParameter;
use Parlament\Parameter\RatParameter;
use Parlament\Template\ParlamentTemplate;


class InteressenbindungItemPage extends ParlamentTemplate  // BootstrapAdminTemplate
{

    public function getContent()
    {

        $interessenbindungId=(new InteressenbindungParameter())->getValue();
        $interesssenbindungRow = (new InteressenbindungReader())->getRowById($interessenbindungId);

        $h1=new H1($this);
        $h1->content=$interesssenbindungRow->organisation;

        $reader = new RatsmitgliedInteressenbindungReader();
        $reader->model->loadRatsmitglied();
        $reader->model->ratsmitglied->loadFraktion();
        $reader->model->ratsmitglied->loadKanton();
        $reader->filter->andEqual($reader->model->interessenbindungId, $interessenbindungId);
        foreach ($reader->getData() as $dataRow) {

            $item= new RatsmitgliedItemCard($this);
            $item->ratsmitgliedRow=$dataRow->ratsmitglied;

        }

        return parent::getContent();
    }
}