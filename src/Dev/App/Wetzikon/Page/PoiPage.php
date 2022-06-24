<?php
namespace Dev\App\Wetzikon\Page;
use Dev\App\Wetzikon\Data\Poi\PoiReader;
use Dev\App\Wetzikon\Parameter\PoiParameter;
use Dev\App\Wetzikon\Site\PoiDeleteSite;
use Dev\App\Wetzikon\Site\PoiEditSite;
use Dev\App\Wetzikon\Site\PoiImageSite;
use Dev\App\Wetzikon\Site\PoiKmlSite;
use Dev\App\Wetzikon\Site\PoiNewSite;
use Nemundo\Admin\Com\Button\AdminSiteButton;
use Nemundo\Admin\Com\Item\AdminItemContainer;
use Nemundo\Admin\Com\Item\AdminItemText;
use Nemundo\Admin\Com\Layout\AdminFlexboxLayout;
use Nemundo\Admin\Com\Table\AdminTable;
use Nemundo\Admin\Com\Table\AdminTableHeader;
use Nemundo\Admin\Com\Table\Row\AdminTableRow;
use Nemundo\Admin\Com\Title\AdminTitle;
use Nemundo\Com\Template\AbstractTemplateDocument;
class PoiPage extends AbstractTemplateDocument {
public function getContent() {


    $layout = new AdminFlexboxLayout($this);

    $btn=new AdminSiteButton($layout);
    $btn->site=PoiNewSite::$site;



    $reader=new PoiReader();
    $reader->addOrder($reader->model->titel);

    $table=new AdminTable($layout);

    $header=new AdminTableHeader($table);
    $header->addText($reader->model->titel->label);
    $header->addText($reader->model->text->label);
    $header->addText($reader->model->strasse->label);
    $header->addText($reader->model->coordinate->label);
    $header->addEmpty();
    $header->addEmpty();
    $header->addEmpty();

    foreach ($reader->getData() as $poiRow) {

        $row=new AdminTableRow($table);
        $row->addText($poiRow->titel);
        $row->addText($poiRow->text);
        $row->addText($poiRow->strasse);
        $row->addText($poiRow->coordinate->getText());


        $site=clone(PoiImageSite::$site);
        $site->addParameter(new PoiParameter($poiRow->id));
        $row->addSite($site);

        $site=clone(PoiEditSite::$site);
        $site->addParameter(new PoiParameter($poiRow->id));
        $row->addIconSite($site);

        $site=clone(PoiDeleteSite::$site);
        $site->addParameter(new PoiParameter($poiRow->id));
        $row->addIconSite($site);


        /*
        $container=new AdminItemContainer($this);

        $title =new AdminTitle($container);
        $title->content=$poiRow->titel;

        $text=new AdminItemText($container);
        $text->content=$poiRow->text;*/


    }


return parent::getContent();
}
}