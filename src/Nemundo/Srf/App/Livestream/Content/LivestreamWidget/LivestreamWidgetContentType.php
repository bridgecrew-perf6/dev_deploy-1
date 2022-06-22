<?php

namespace Nemundo\Srf\App\Livestream\Content\LivestreamWidget;

use Nemundo\Content\Type\AbstractContentType;

class LivestreamWidgetContentType extends AbstractContentType
{
    protected function loadContentType()
    {
        $this->typeLabel = 'SRF Livestream Widget';
        $this->typeId = '27a93ee7-5dc7-465f-a9f6-8de5698ddf72';
        $this->dataId= 0;
        //$this->formClassList[] = LivestreamWidgetContentForm::class;
        $this->viewClassList[] = LivestreamWidgetContentView::class;
    }

    protected function onCreate()
    {
    }

    protected function onUpdate()
    {
    }

    protected function onDelete()
    {
    }

    protected function onIndex()
    {
    }

    protected function onDataRow()
    {
    }

    /**
     * @return \Nemundo\Model\Row\AbstractModelDataRow
     */
    public function getDataRow()
    {
        return parent::getDataRow();
    }
}