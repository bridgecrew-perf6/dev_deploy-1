<?php

namespace Nemundo\Admin\Com\Carousel;

use Nemundo\Admin\Com\Image\AdminImage;
use Nemundo\Com\JavaScript\Module\ModuleJavaScript;
use Nemundo\Html\Block\Div;
use Nemundo\Html\Inline\Span;
use Nemundo\Package\FontAwesome\FontAwesomeIcon;


// AdminImageCarousel
class AdminImageCarousel extends Div
{

    /**
     * @var Div
     */
    private $carouselDiv;

    /**
     * @var Div
     */
    private $dotDiv;

    private $imageIndex=0;


    protected function loadContainer()
    {

        parent::loadContainer();

        $this->carouselDiv = new Div($this);
        $this->carouselDiv->id = 'admin-carousel';
        $this->carouselDiv->addCssClass('admin-carousel');

        $this->dotDiv = new Div($this);
        $this->dotDiv->id = 'admin-carousel-dot';

        $this->dotDiv->addCssClass('admin-carousel-dot');

    }


    public function addImage($url)
    {

        $item = new Div($this->carouselDiv);
        $item->addCssClass('admin-carousel-item');

        $img = new AdminImage($item);
        $img->src = $url;

        $span = new Span($this->dotDiv);
        $span->addCssClass('admin-carousel-dot-item');
        $span->addDataAttribute('image-index', $this->imageIndex);

        $this->imageIndex++;

        //$span->content='B';


    }


    public function getContent()
    {

        //$this->id='admin-carousel';

        $module = new ModuleJavaScript($this);
        $module->src = '/js/framework/Admin/Carousel/carousel.js';
        //$module->src = '/js/framework/Admin/Carousel/AdminCarousel.js';

        //$ul=new UnorderedList($this);
        /*$div = new Div($this);
        $div->id='admin-carousel';
        $div->addCssClass('admin-carousel');*/


        /*$reader=new RatsmitgliedReader();
        $reader->limit=10;

        foreach ($reader->getData() as $row) {

            $item=new Div($div);
            $item->addCssClass('admin-carousel-item');

            $img= new AdminImage($item);
            $img->src=$row->bild->getUrl();

        }*/

        $previous = new FontAwesomeIcon($this);
        $previous->id = 'admin-carousel-previous-icon';
        $previous->addCssClass('icon-button');
        $previous->icon = 'chevron-left';

        $next = new FontAwesomeIcon($this);
        $next->id = 'admin-carousel-next-icon';
        $next->addCssClass('icon-button');
        $next->icon = 'chevron-right';

        return parent::getContent();

    }

}