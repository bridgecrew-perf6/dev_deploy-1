<?php

namespace Parlament\Com\Container;

use Nemundo\Bfs\Gemeinde\Com\ListBox\KantonListBox;
use Nemundo\Bfs\Gemeinde\Com\Select\KantonSelect;
use Nemundo\Com\Container\LibraryTrait;
use Nemundo\Com\Html\Listing\UnorderedList;
use Nemundo\Html\Block\ContentDiv;
use Nemundo\Html\Block\Div;
use Nemundo\Html\Button\Button;
use Nemundo\Html\Form\Formatting\Label;
use Nemundo\Html\Form\Input\FileInput;
use Nemundo\Html\Form\Input\TextInput;
use Nemundo\Html\Heading\H3;
use Nemundo\Html\Image\Img;

use Nemundo\Html\Quotation\Blockquote;
use Parlament\Data\KommissionRatsmitglied\KommissionRatsmitgliedReader;
use Parlament\Manager\RatsmitgliedManager;

class RatsmitgliedListContainer extends Div
{

    use LibraryTrait;

    public function getContent()
    {

        $this->addCssUrl('/css/parlament/parlament.css');
        $this->addCssUrl('/css/html/form.css');



        $search=new Div($this);
        $search->addCssClass('search-box');


        $formItem = new Div($search);
        /*$label=new Label($formItem);
        $label->content='Kanton';*/

        $kanton=new KantonSelect($formItem);


       /* $formItem = new Div($search);
        $input=new TextInput($formItem);

        $formItem = new Div($search);
        $file=new FileInput($formItem);*/


        $btn=new Button($search);
        $btn->label='Search';





        $container = new Div($this);
        $container->addCssClass('ratsmitglied-container');

        $manager=new RatsmitgliedManager();

        foreach ($manager->getData() as $ratsmitgliedRow) {


            $item=new Div($container);
            $item->addCssClass('ratsmitglied-item');

            //$item->addAttribute('draggable','true');


            $title=new ContentDiv($item);
            $title->addCssClass('ratsmitglied-item-title');
            $title->content=$ratsmitgliedRow->getVornameName();

            $img=new Img($item);
            $img->addCssClass('ratsmitglied-item-image');
            $img->src=$ratsmitgliedRow->bild->getUrl();

            $item=new ContentDiv($item);
            $item->addCssClass('ratsmitglied-item-text');
            $item->content = $ratsmitgliedRow->kanton->kanton;

            $item=new ContentDiv($item);
            $item->content = $ratsmitgliedRow->fraktion->fraktion;


            $ul=new UnorderedList($item);

            $kommissionReader=new KommissionRatsmitgliedReader();
            $kommissionReader->model->loadKommission();
            $kommissionReader->model->loadFunktion();
            $kommissionReader->filter->andEqual($kommissionReader->model->ratsmitgliedId, $ratsmitgliedRow->id);
            //$kommissionReader->filter->andEqual($kommissionReader->model->aktiv,true);
            //$kommissionReader->filter->andEqual($kommissionReader->model->kommission->aktiv,false);
            foreach ($kommissionReader->getData() as $kommissionRatsmitgliedRow) {
                $ul->addText($kommissionRatsmitgliedRow->kommission->kommission.' - '.$kommissionRatsmitgliedRow->funktion->funktion);
            }

        }


        return parent::getContent();

    }

}