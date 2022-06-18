<?php

namespace Nemundo\Content\App\Location\Content\Address;

use Nemundo\Content\App\Location\Data\Address\AddressReader;
use Nemundo\Content\App\Location\Data\Address\AddressRow;
use Nemundo\Content\Type\AbstractContentType;
use Nemundo\Content\Type\JsonContentTrait;

class AddressContentType extends AbstractContentType
{

    use JsonContentTrait;

    protected function loadContentType()
    {
        $this->typeLabel = 'Address';
        $this->typeId = 'a5465605-c353-4857-80f9-7587c154307b';
        $this->formClassList[] = AddressContentForm::class;
        $this->viewClassList[] = AddressContentView::class;
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
        $this->dataRow = (new AddressReader())->getRowById($this->dataId);
    }

    /**
     * @return \Nemundo\Model\Row\AbstractModelDataRow|AddressRow
     */
    public function getDataRow()
    {
        return parent::getDataRow();
    }


    public function getSubject()
    {

        $addressRow = $this->getDataRow();
        $subject = $addressRow->street . ', ' . $addressRow->place;

        return $subject;
    }


    public function getData()
    {

        $addressRow = $this->getDataRow();

        $data = [];
        $data['street'] = $addressRow->street;
        $data['place'] = $addressRow->place;

        return $data;

    }


}