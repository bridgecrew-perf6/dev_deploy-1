<?php

namespace Parlament\Manager;

use Nemundo\Core\Base\AbstractBase;
use Nemundo\Core\Debug\Debug;
use Nemundo\Db\Sql\Field\CountField;
use Nemundo\Db\Sql\Order\SortOrder;
use Parlament\Data\Ratsmitglied\RatsmitgliedCount;
use Parlament\Data\Ratsmitglied\RatsmitgliedPaginationReader;
use Parlament\Data\Ratsmitglied\RatsmitgliedReader;
use Parlament\Item\GroupItem;


// DataManager
class RatsmitgliedManager extends AbstractBase
{

    //public $kantonAbk;

    public $ratId;

    public $kantonId;

    public $fraktionId;

    public function getCount() {

    }


    public function getFormatCount() {

        $count = new RatsmitgliedCount();
        $count = $this->getFilter($count);
        return $count->getFormatCount();

    }


    public function getRatsmitgliedRow($ratsmitgliedId) {

        $reader= new RatsmitgliedReader();
        $reader->model->loadRat();
        $reader->model->loadFraktion();
        $reader->model->loadPartei();
        $reader->model->loadKanton();
        //$reader = $this->getFilter($reader);

        return $reader->getRowById($ratsmitgliedId);

    }


    public function getData() {

        $reader= new RatsmitgliedReader();
        $reader->model->loadRat();
        $reader->model->loadFraktion();
        $reader->model->loadPartei();
        $reader->model->loadKanton();
        $reader = $this->getFilter($reader);

        $reader->addOrder($reader->model->name);
        $reader->addOrder($reader->model->vorname);

        return $reader->getData();

    }


    public function getPaginationReader() {

        $reader= new RatsmitgliedPaginationReader();
        $reader->model->loadRat();
        $reader->model->loadFraktion();
        $reader->model->loadPartei();
        $reader->model->loadKanton();
        $reader = $this->getFilter($reader);

        return $reader;

    }


    public function getId() {

    }


    public function getRatGroupFilter() {


        $reader= new RatsmitgliedReader();
        $reader->model->loadRat();
        $reader = $this->getFilter($reader);

        $reader->addGroup($reader->model->ratId);

        $count=new CountField($reader);

        /** @var GroupItem[] $list */
        $list=[];

        foreach ($reader->getData() as $row) {

            $item=new GroupItem();
            $item->id=$row->ratId;
            $item->label=$row->rat->rat;
            $item->count=$row->getModelValue($count);

            $list[]=$item;

        }

        return $list;

    }


    public function getKantonGroupFilter() {


        $reader= new RatsmitgliedReader();
        $reader->model->loadKanton();
        $reader = $this->getFilter($reader);

        $reader->addGroup($reader->model->kantonId);

        $count=new CountField($reader);
        $reader->addOrder($count,SortOrder::DESCENDING);

        $reader->limit=10;

        /** @var GroupItem[] $list */
        $list=[];

        foreach ($reader->getData() as $row) {

            $item=new GroupItem();
            $item->id=$row->kantonId;
            $item->label=$row->kanton->kanton;
            $item->count=$row->getModelValue($count);

            $list[]=$item;

        }

        return $list;

    }




    public function getFraktionGroupFilter() {


        $reader= new RatsmitgliedReader();
        $reader->model->loadFraktion();
        $reader = $this->getFilter($reader);

        $reader->addGroup($reader->model->fraktionId);

        $count=new CountField($reader);
        $reader->addOrder($count,SortOrder::DESCENDING);

        $reader->limit=10;

        /** @var GroupItem[] $list */
        $list=[];

        foreach ($reader->getData() as $row) {

            $item=new GroupItem();
            $item->id=$row->fraktionId;
            $item->label=$row->fraktion->fraktion;
            $item->count=$row->getModelValue($count);

            $list[]=$item;

        }

        return $list;

    }










    /**
     * @param RatsmitgliedReader|RatsmitgliedPaginationReader|RatsmitgliedCount $reader
     * @return RatsmitgliedReader mixer
     */
    private function getFilter($reader) {

        if ($this->ratId!==null) {
            $reader->filter->andEqual($reader->model->ratId, $this->ratId);
        }

        if ($this->kantonId!==null) {
            $reader->filter->andEqual($reader->model->kantonId, $this->kantonId);
        }

        if ($this->fraktionId!==null) {
            $reader->filter->andEqual($reader->model->fraktionId, $this->fraktionId);
        }

        return $reader;

    }








}