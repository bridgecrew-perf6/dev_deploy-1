<?php

namespace Dev\Page;

use Nemundo\Admin\Com\Button\AdminSubmitButton;
use Nemundo\Com\Chart\Data\LineChartData;
use Nemundo\Core\Debug\Debug;
use Nemundo\Db\Sql\Field\Aggregate\MaxField;
use Nemundo\Html\Form\Form;
use Nemundo\Meteo\Isd\Com\ListBox\StationAutocompleteListBox;
use Nemundo\Meteo\Isd\Data\Measurement\MeasurementReader;
use Nemundo\Package\Bootstrap\Document\BootstrapDocument;
use Nemundo\Package\Echarts\Chart\Echart;


class TestPage extends BootstrapDocument  // AbstractTemplateHtmlDocument
{


    public function getContent()
    {

        /*
        $meta = new Meta($this);
        $meta->addAttribute('name', 'viewport');
        $meta->addAttribute('content', 'width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no');*/


        //$stationId = 66800;


        $form = new Form($this);

        $station = new StationAutocompleteListBox($form);

        new AdminSubmitButton($form);

        if ($station->hasValue()) {

            (new Debug())->write($station->getStationId());

            $chart = new Echart($this);

            $bar = new LineChartData($chart);  // new BarChartData($chart);


            $reader = new MeasurementReader();
            /*$reader->addGroup($reader->model->year);
            $reader->addGroup($reader->model->month);

            $max = new MaxField($reader);
            $max->aggregateField = $reader->model->temperature;*/

            $reader->filter->andEqual($reader->model->stationId, $station->getStationId());
            $reader->filter->andEqual($reader->model->month, 5);
            $reader->filter->andEqual($reader->model->year, 2022);
            $reader->filter->andEqual($reader->model->temperatureValid, true);

            foreach ($reader->getData() as $row) {

                //(new Debug())->write($row->month.'/'.$row->year.' - '.$row->getModelValue($max));

                $chart->addXAxisLabel($row->year);
                $bar->addValue($row->temperature);

            }


        }


        return parent::getContent();

    }
}