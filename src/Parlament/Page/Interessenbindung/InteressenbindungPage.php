<?php

namespace Parlament\Page\Interessenbindung;

use Nemundo\Admin\Com\Card\AdminCard;
use Nemundo\Admin\Com\Form\AdminSearchForm;
use Nemundo\Admin\Com\Hyperlink\AdminSiteHyperlink;
use Nemundo\Admin\Com\Item\AdminItemContainer;
use Nemundo\Admin\Com\Item\AdminItemTitle;
use Nemundo\Admin\Com\Title\AdminTitle;
use Nemundo\Bfs\Gemeinde\Com\ListBox\KantonListBox;
use Nemundo\Com\Html\Hyperlink\SiteHyperlink;
use Nemundo\Com\Template\AbstractTemplateDocument;
use Nemundo\Core\Debug\Debug;
use Nemundo\Html\Heading\H1;
use Nemundo\Html\Paragraph\Paragraph;
use Nemundo\Package\Bootstrap\Icon\BootstrapIcon;
use Parlament\Com\Container\RatsmitgliedListContainer;
use Parlament\Com\ListBox\FraktionListBox;
use Parlament\Com\ListBox\RatListBox;
use Parlament\Com\Small\ParlamentSource;
use Parlament\Data\Interessenbindung\InteressenbindungReader;
use Parlament\Manager\RatsmitgliedManager;
use Parlament\Parameter\InteressenbindungParameter;
use Parlament\Site\Interessenbindung\InteressenbindungItemSite;
use Parlament\Site\Interessenbindung\InteressenbindungSite;
use Parlament\Site\Ratsmitglied\RatsmitgliedSite;


class InteressenbindungPage extends AbstractTemplateDocument  // ParlamentTemplate  // AbstractTemplateDocument  // AdminTemplate
{
    public function getContent()
    {

$title=new AdminTitle($this);
$title->content= InteressenbindungSite::$site->title;

        $reader = new InteressenbindungReader();
        foreach ($reader->getData() as $interessenbindungRow) {

            $item = new AdminItemContainer($this);

            $hyperlink = new AdminSiteHyperlink($item);
            $hyperlink->site=clone(InteressenbindungItemSite::$site);
            $hyperlink->site->addParameter(new InteressenbindungParameter($interessenbindungRow->id));
            $hyperlink->site->title= $interessenbindungRow->organisation;

            /*$title=new AdminItemTitle($item);
            $title->content=$interessenbindungRow->organisation;*/

        }


        return parent::getContent();
    }
}