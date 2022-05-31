<?php
namespace Parlament\Data;
use Nemundo\Model\Collection\AbstractModelCollection;
class ParlamentModelCollection extends AbstractModelCollection {
protected function loadCollection() {
$this->addModel(new \Parlament\Data\Abstimmung\AbstimmungModel());
$this->addModel(new \Parlament\Data\AbstimmungRatsmitglied\AbstimmungRatsmitgliedModel());
$this->addModel(new \Parlament\Data\Entscheidung\EntscheidungModel());
$this->addModel(new \Parlament\Data\Fraktion\FraktionModel());
$this->addModel(new \Parlament\Data\Geschaeft\GeschaeftModel());
$this->addModel(new \Parlament\Data\Geschaeftsstatus\GeschaeftsstatusModel());
$this->addModel(new \Parlament\Data\Geschaeftstyp\GeschaeftstypModel());
$this->addModel(new \Parlament\Data\Geschlecht\GeschlechtModel());
$this->addModel(new \Parlament\Data\Kommission\KommissionModel());
$this->addModel(new \Parlament\Data\KommissionFunktion\KommissionFunktionModel());
$this->addModel(new \Parlament\Data\KommissionRatsmitglied\KommissionRatsmitgliedModel());
$this->addModel(new \Parlament\Data\Legislatur\LegislaturModel());
$this->addModel(new \Parlament\Data\Partei\ParteiModel());
$this->addModel(new \Parlament\Data\Rat\RatModel());
$this->addModel(new \Parlament\Data\Ratsmitglied\RatsmitgliedModel());
$this->addModel(new \Parlament\Data\Session\SessionModel());
$this->addModel(new \Parlament\Data\Sprache\SpracheModel());
}
}