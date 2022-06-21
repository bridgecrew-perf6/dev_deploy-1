<?php

namespace Parlament\Com\Table;

use Nemundo\Admin\Com\Image\AdminImage;
use Nemundo\Com\Html\Hyperlink\SiteHyperlink;
use Nemundo\Com\TableBuilder\TableHeader;
use Nemundo\Com\TableBuilder\TableRow;
use Nemundo\Html\Hyperlink\Hyperlink;
use Nemundo\Html\Hyperlink\HyperlinkTarget;
use Nemundo\Html\Table\Table;
use Nemundo\Package\Bootstrap\Image\BootstrapResponsiveImage;
use Nemundo\Package\Bootstrap\Table\BootstrapClickableTable;
use Nemundo\Package\Bootstrap\Table\BootstrapClickableTableRow;
use Parlament\Data\Abstimmung\AbstimmungPaginationReader;
use Parlament\Data\Geschaeft\GeschaeftPaginationReader;
use Parlament\Data\Ratsmitglied\RatsmitgliedReader;
use Parlament\Manager\RatsmitgliedManager;

class RatsmitgliedTable extends Table  // BootstrapClickableTable
{

    public $kantonId;

    /**
     * @var RatsmitgliedManager
     */
    public $manager;

    public function getContent()
    {

        $this->addCssClass('nemundo-table');

        $header=new TableHeader($this);
        $header->addEmpty();
        $header->addText('Rat');
        $header->addText('Name/Vorname');
        //$header->addText('Vorname');
        $header->addText('Kanton');
        $header->addText('Fraktion');
        //$header->addText('Partei');
        $header->addText('Homepage');

        foreach ($this->manager->getData() as $ratsmitgliedRow) {

            $row= new TableRow($this);  // new BootstrapClickableTableRow($this);

            /*$img= new AdminImage($row);  //  new BootstrapResponsiveImage($row);
            $img->src=$ratsmitgliedRow->bild->getUrl();*/

            $row->addEmpty();

            $row->addText($ratsmitgliedRow->rat->rat);
            //$row->addText($ratsmitgliedRow->getNameVorname());

            $hyperlink = new SiteHyperlink($row);
            $hyperlink->site= $ratsmitgliedRow->getSite();


            //$row->addText($ratsmitgliedRow->vorname);
            $row->addText($ratsmitgliedRow->kanton->kanton);

            //$row->addText($ratsmitgliedRow->fraktion->fraktion);
            //$row->addText($ratsmitgliedRow->partei->partei);

            $hyperlink = new SiteHyperlink($row);
            $hyperlink->site= $ratsmitgliedRow->fraktion->getSite();


            if ($ratsmitgliedRow->hasHomepage) {

                $hyperlink=new Hyperlink($row);
                $hyperlink->target=HyperlinkTarget::BLANK;
                $hyperlink->href= $ratsmitgliedRow->getHomepageUrl();
                $hyperlink->content= $ratsmitgliedRow->homepage;

            } else{
                $row->addEmpty();
            }

        }

        return parent::getContent();

    }


}