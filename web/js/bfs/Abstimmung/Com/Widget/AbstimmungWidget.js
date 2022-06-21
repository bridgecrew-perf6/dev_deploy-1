import WidgetContainer from "../../../../framework/Com/Widget/Widget.js";
import AbstimmungGemeindeContainer from "../Container/AbstimmungGemeindeContainer.js";
import GeoLevelListBox from "../ListBox/GeoLevelListBox.js";
import JahrListBox from "../ListBox/JahrListBox.js";
import DatumListBox from "../ListBox/DatumListBox.js";
import AbstimmungListBox from "../ListBox/AbstimmungListBox.js";
import _KantonListBox from "../ListBox/KantonListBox.js";
import GemeindeListBox from "../ListBox/GemeindeListBox.js";
import AbstimmungResultatTable from "../Table/AbstimmungResultatTable.js";
import GemeindeAutocomplete from "../Autocomplete/GemeindeAutocomplete.js";
import FormLayout from "../../../framework/Com/Layout/FormLayout.js";
import TextBox from "../../../framework/Form/TextBox.js";


export default class AbstimmungWidget extends WidgetContainer {

    constructor(parentContainer) {

        super(parentContainer);
        this.widgetTitle = "Eidgenössische Abstimmungen";
        this.widgetIcon = "bank";

    }


    render() {

        this.scrollWidget=true;

        let form = new FormLayout(this);

        let geoLevel = new GeoLevelListBox(form);
        geoLevel.widthPixel=200;
        geoLevel.onChange=function () {
          resultat.geoLevelId=geoLevel.value;
          resultat.reloadData();
        };
        geoLevel.render();

        let jahr = new JahrListBox(form);
        jahr.widthPixel=200;
        /*jahr.onChange = function () {
        };*/
        jahr.render();


        let datum = new DatumListBox(form);
        datum.widthPixel=200;
        datum.onChange = function () {
            /*resultat.datgeoLevelId=geoLevel.value;
            resultat.reloadData();*/
            /*local._abstimmung.datumId = local._datum.value;
            local._abstimmung.reloadData();*/
            //local.reloadData();
        };
        datum.render();

        let abstimmung = new AbstimmungListBox(form);
        abstimmung.widthPixel=200;
        abstimmung.onChange = function () {

            resultat.abstimmungId=abstimmung.value;
            resultat.reloadData();

        };
        abstimmung.render();


        let kanton = new _KantonListBox(form);
        kanton.widthPixel=200;
        kanton.onChange = function () {
            resultat.kantonId=kanton.value;
            resultat.reloadData();
            //gemeinde.kan
        };
        kanton.render();

        let gemeinde= new GemeindeAutocomplete(form);  // new GemeindeListBox(this);
        gemeinde.widthPixel=200;
        gemeinde.render();

        let text = new TextBox(form);
        text.label="Bla";


        let resultat = new AbstimmungResultatTable(this);
        resultat.render();

        /*
        let container = new AbstimmungContainer(this);
        container.render();*/

    }

}