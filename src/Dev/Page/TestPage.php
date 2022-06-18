<?php

namespace Dev\Page;

use Nemundo\Admin\Com\Dropdown\AdminDropdown;
use Nemundo\Admin\Com\Image\AdminImage;
use Nemundo\Admin\Com\Layout\AdminTwoColumnGridLayout;
use Nemundo\Admin\Template\NavbarAdminTemplate;
use Nemundo\Html\Paragraph\Paragraph;


class TestPage extends NavbarAdminTemplate
{

    public function getContent()
    {


        $grid = new AdminTwoColumnGridLayout($this);

        $dropdown = new AdminDropdown($grid);

        $p = new Paragraph($grid);
        $p->content = 'asdfasdfasdfasdfasdfa';


        $dropdown = new AdminDropdown($grid);

        $img = new AdminImage($dropdown);
        $img->src = 'https://cdn.unitycms.io/images/31XdQvm7qj1A5k6zWSG3Sq.png?op=ocroped&val=800,800,579,540,246,207&sum=hIsjcsFlsUw';

        $p = new Paragraph($this);
        $p->content = 'asdfasdfasdfasdfasdfa';


        return parent::getContent();

    }

}