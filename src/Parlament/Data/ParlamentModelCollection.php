<?php
namespace Parlament\Data;
use Nemundo\Model\Collection\AbstractModelCollection;
class ParlamentModelCollection extends AbstractModelCollection {
protected function loadCollection() {
$this->addModel(new \Parlament\Data\Abstimmung\AbstimmungModel());
$this->addModel(new \Parlament\Data\AbstimmungDatum\AbstimmungDatumModel());
$this->addModel(new \Parlament\Data\AbstimmungRatsmitglied\AbstimmungRatsmitgliedModel());
$this->addModel(new \Parlament\Data\Beruf\BerufModel());
$this->addModel(new \Parlament\Data\CrawlerLog\CrawlerLogModel());
$this->addModel(new \Parlament\Data\Departement\DepartementModel());
$this->addModel(new \Parlament\Data\Entscheidung\EntscheidungModel());
$this->addModel(new \Parlament\Data\Fraktion\FraktionModel());
$this->addModel(new \Parlament\Data\Geschaeft\GeschaeftModel());
$this->addModel(new \Parlament\Data\GeschaeftKommission\GeschaeftKommissionModel());
$this->addModel(new \Parlament\Data\GeschaeftText\GeschaeftTextModel());
$this->addModel(new \Parlament\Data\GeschaeftTextTyp\GeschaeftTextTypModel());
$this->addModel(new \Parlament\Data\GeschaeftThema\GeschaeftThemaModel());
$this->addModel(new \Parlament\Data\Geschaeftsstatus\GeschaeftsstatusModel());
$this->addModel(new \Parlament\Data\Geschaeftstyp\GeschaeftstypModel());
$this->addModel(new \Parlament\Data\Geschlecht\GeschlechtModel());
$this->addModel(new \Parlament\Data\Interessenbindung\InteressenbindungModel());
$this->addModel(new \Parlament\Data\Kommission\KommissionModel());
$this->addModel(new \Parlament\Data\KommissionFunktion\KommissionFunktionModel());
$this->addModel(new \Parlament\Data\KommissionRatsmitglied\KommissionRatsmitgliedModel());
$this->addModel(new \Parlament\Data\LastUpdate\LastUpdateModel());
$this->addModel(new \Parlament\Data\Legislatur\LegislaturModel());
$this->addModel(new \Parlament\Data\Partei\ParteiModel());
$this->addModel(new \Parlament\Data\Rat\RatModel());
$this->addModel(new \Parlament\Data\Ratsmitglied\RatsmitgliedModel());
$this->addModel(new \Parlament\Data\RatsmitgliedBeruf\RatsmitgliedBerufModel());
$this->addModel(new \Parlament\Data\RatsmitgliedInteressenbindung\RatsmitgliedInteressenbindungModel());
$this->addModel(new \Parlament\Data\Session\SessionModel());
$this->addModel(new \Parlament\Data\Sprache\SpracheModel());
$this->addModel(new \Parlament\Data\Thema\ThemaModel());
}
}