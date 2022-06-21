<?php

namespace Parlament\Service;

use Nemundo\App\WebService\Service\AbstractServiceRequest;
use Nemundo\Core\Debug\Debug;
use Nemundo\Core\Http\Request\HttpRequest;
use Nemundo\Html\Block\ContentDiv;
use Nemundo\Html\Block\Div;
use Nemundo\Html\Heading\H5;
use Parlament\Data\GeschaeftText\GeschaeftTextReader;
use Parlament\Reader\AbstimmungDataReader;
use Parlament\Reader\GeschaeftDataReader;

class GeschaeftService extends AbstractServiceRequest
{
    protected function loadService()
    {
        $this->serviceName = 'parlament-geschaeft';
    }

    public function onRequest()
    {

        $reader = new GeschaeftDataReader();

        $request=new HttpRequest('id');
        if ($request->hasValue()) {

            //(new Debug())->write($request->getValue());

            $reader->geschaeftId =$request->getValue();
        }

        foreach ($reader->getData() as $geschaeftRow) {

            $data = [];
            $data['id'] = $geschaeftRow->id;
            //$data['abstimmung'] = $geschaeftRow->abstimmung;

            $data['geschaeft_id'] = $geschaeftRow->id;  // geschaeft-> geschaeftI->geschaeft;
            $data['geschaeft'] = $geschaeftRow->geschaeft;


            $text = '';

            $textReader = new GeschaeftTextReader();
            $textReader->model->loadTextTyp();
            $textReader->filter->andEqual($textReader->model->geschaeftId, $geschaeftRow->id);
            $textReader->addOrder($textReader->model->textTypId);
            foreach ($textReader->getData() as $geschaeftTextRow) {

                $container=new Div();

                $h3 = new H5($container);
                $h3->content = $geschaeftTextRow->textTyp->textTyp;

                $div = new ContentDiv($container);
                $div->content = $geschaeftTextRow->text;

                $text.= $container->getBodyContent();

            }


            $data['text']=$text;

            /*$data['datum'] = $geschaeftRow->datum->getIsoDate();
            $data['zeit'] = $geschaeftRow->zeit->getTimeLeadingZero();

            $data['ja'] = $geschaeftRow->ja;
            $data['nein'] = $geschaeftRow->nein;*/

            $this->addRow($data);

        }


    }
}