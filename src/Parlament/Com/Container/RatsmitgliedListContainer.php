<?php

namespace Parlament\Com\Container;

use Nemundo\Admin\Com\Card\AdminCard;
use Nemundo\Admin\Com\Image\AdminImage;
use Nemundo\Bfs\Gemeinde\Com\ListBox\KantonListBox;
use Nemundo\Bfs\Gemeinde\Com\Select\KantonSelect;
use Nemundo\Bfs\Gemeinde\Parameter\RatsmitgliedParameter;
use Nemundo\Com\Container\LibraryTrait;
use Nemundo\Com\Html\Hyperlink\SiteHyperlink;
use Nemundo\Com\Html\Listing\UnorderedList;
use Nemundo\Html\Block\ContentDiv;
use Nemundo\Html\Block\Div;
use Nemundo\Html\Button\Button;
use Nemundo\Html\Form\Formatting\Label;
use Nemundo\Html\Form\Input\FileInput;
use Nemundo\Html\Form\Input\TextInput;
use Nemundo\Html\Heading\H1;
use Nemundo\Html\Heading\H3;
use Nemundo\Html\Image\Img;

use Nemundo\Html\Quotation\Blockquote;
use Parlament\Com\Card\RatsmitgliedItemCard;
use Parlament\Data\KommissionRatsmitglied\KommissionRatsmitgliedReader;
use Parlament\Manager\RatsmitgliedManager;
use Parlament\Site\Ratsmitglied\RatsmitgliedItemSite;

class RatsmitgliedListContainer extends Div
{

    use LibraryTrait;

    /**
     * @var RatsmitgliedManager
     */
    public $manager;

    public function getContent()
    {

        //$this->addCssUrl('/css/parlament/parlament.css');


        //$this->addCssUrl('/css/html/form.css');



        /*$search=new Div($this);
        $search->addCssClass('search-box');


        $formItem = new Div($search);
        /*$label=new Label($formItem);
        $label->content='Kanton';*/

        //$kanton=new KantonSelect($formItem);


       /* $formItem = new Div($search);
        $input=new TextInput($formItem);

        $formItem = new Div($search);
        $file=new FileInput($formItem);*/


        /*$btn=new Button($search);
        $btn->label='Search';*/

        /*$h1= new H1($this);
        $h1->content='National - und Ständerat';*/


        $container = new Div($this);
        $container->addCssClass('ratsmitglied-container');

        //$manager=new RatsmitgliedManager();

        foreach ($this->manager->getData() as $ratsmitgliedRow) {


            $item= new RatsmitgliedItemCard($container);  // AdminCard($container);  // new Div($container);
            $item->ratsmitgliedRow=$ratsmitgliedRow;

            //$item->cardTitle=$ratsmitgliedRow->getVornameName();
            //$item->addCssClass('ratsmitglied-item');

            //$item->addAttribute('draggable','true');

/*
            $title=new ContentDiv($item);
            $title->addCssClass('ratsmitglied-item-title');
            $title->content=$ratsmitgliedRow->getVornameName();*/


           /* $hyperlink = new SiteHyperlink($item);
            $hyperlink->site=clone(RatsmitgliedItemSite::$site);
            $hyperlink->site->addParameter(new RatsmitgliedParameter($ratsmitgliedRow->id));
            $hyperlink->showSiteTitle=false;


            $img= new AdminImage($hyperlink);  // new Img($item);
            //$img->addCssClass('ratsmitglied-item-image');
            $img->src=$ratsmitgliedRow->bild->getUrl();

            $item=new ContentDiv($item);
            //$item->addCssClass('ratsmitglied-item-text');
            $item->content = $ratsmitgliedRow->kanton->kanton;

            $item=new ContentDiv($item);
            $item->content = $ratsmitgliedRow->fraktion->fraktion;


            /*$ul=new UnorderedList($item);

            $kommissionReader=new KommissionRatsmitgliedReader();
            $kommissionReader->model->loadKommission();
            $kommissionReader->model->loadFunktion();
            $kommissionReader->filter->andEqual($kommissionReader->model->ratsmitgliedId, $ratsmitgliedRow->id);
            foreach ($kommissionReader->getData() as $kommissionRatsmitgliedRow) {
                $ul->addText($kommissionRatsmitgliedRow->kommission->kommission.' - '.$kommissionRatsmitgliedRow->funktion->funktion);
            }*/

        }


        return parent::getContent();

    }

}