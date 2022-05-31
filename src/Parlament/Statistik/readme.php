<?php

use Nemundo\Admin\Com\Table\AdminLabelValueTable;
use Nemundo\Db\Sql\Field\CountField;
use Parlament\Data\Ratsmitglied\RatsmitgliedReader;

$table = new AdminLabelValueTable($this);

$reader=new RatsmitgliedReader();
$reader->model->loadFraktion();
$reader->addGroup($reader->model->fraktionId);

$count=new CountField($reader);

foreach ($reader->getData() as $ratsmitgliedCustomRow) {

    //$table->addLabelValue('Geschlecht',$ratsmitgliedCustomRow->geschlecht->geschlecht);
    //$table->addLabelValue($ratsmitgliedCustomRow->geschlecht->geschlecht, $ratsmitgliedCustomRow->getModelValue($count));
    $table->addLabelValue($ratsmitgliedCustomRow->fraktion->fraktion, $ratsmitgliedCustomRow->getModelValue($count));

}