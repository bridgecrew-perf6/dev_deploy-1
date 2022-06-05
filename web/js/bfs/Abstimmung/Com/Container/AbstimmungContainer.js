import AbstimmungResultatTable from "../Table/AbstimmungResultatTable.js";
import DivContainer from "../../../../html/Content/Div.js";
import GemeindeAutocomplete from "../../../Gemeinde/Com/Autocomplete/GemeindeAutocomplete.js";
import AdminSearchForm from "../../../../framework/Admin/Form/AdminSearchForm.js";
import GeoLevelListBox from "../../../Gemeinde/Com/ListBox/GeoLevelListBox.js";
import GeoLevelType from "../../../Gemeinde/Type/GeoLevelType.js";
import JahrListBox from "../ListBox/JahrListBox.js";
import DatumListBox from "../ListBox/DatumListBox.js";
import AbstimmungListBox from "../ListBox/AbstimmungListBox.js";
import KantonListBox from "../../../Gemeinde/Com/ListBox/KantonListBox.js";
import CloseFontAwesomeIcon from "../../../../framework/FontAwesome/CloseFontAwesomeIcon.js";
import H1Container from "../../../../html/Title/H1.js";

export default class AbstimmungContainer extends DivContainer {


    render() {

        let h1=new H1Container(this);
        h1.content = "Eidgenössische Abstimmungen";

        let searchForm = new AdminSearchForm(this);  // new BootstrapRow(this);

        let geoLevel = new GeoLevelListBox(searchForm);
        geoLevel.onChange = function () {

            if (geoLevel.getNumberValue() === GeoLevelType.BUND) {
                resultat.showKanton = false;
                resultat.showBezirk = false;
                resultat.showGemeinde = false;
            }

            if (geoLevel.getNumberValue() === GeoLevelType.KANTON) {
                resultat.showKanton = true;
                resultat.showBezirk = false;
                resultat.showGemeinde = false;
            }

            if (geoLevel.getNumberValue() === GeoLevelType.BEZIRK) {
                resultat.showKanton = false;
                resultat.showBezirk = true;
                resultat.showGemeinde = false;
            }

            if (geoLevel.getNumberValue() === GeoLevelType.GEMEINDE) {
                resultat.showKanton = false;
                resultat.showBezirk = false;
                resultat.showGemeinde = true;
            }

            resultat.geoLevelId = geoLevel.value;
            resultat.reloadHeader();
            resultat.reloadData();

        };
        geoLevel.render();

        let jahr = new JahrListBox(searchForm);
        jahr.onChange = function () {

            datum.jahr = jahr.value;
            datum.reloadData();

            abstimmung.jahr = jahr.value;
            abstimmung.reloadData();

            resultat.jahr = jahr.value;
            resultat.reloadData();

        };
        jahr.render();


        let datum = new DatumListBox(searchForm);
        datum.onChange = function () {
            abstimmung.datumId = datum.value;
            abstimmung.reloadData();

            resultat.datumId = datum.value;
            resultat.reloadHeader();
            resultat.reloadData();
        };
        datum.render();


        let abstimmung = new AbstimmungListBox(searchForm);
        abstimmung.onChange = function () {
            resultat.abstimmungId = abstimmung.value;

            if (abstimmung.hasValue()) {
                resultat.showAbstimmung = false;
            } else {
                resultat.showAbstimmung = true;
            }

            resultat.reloadData();
        };
        abstimmung.render();

        /*let abstimmungSearch = new BootstrapSearchTextBox(layoutRow);
        abstimmungSearch.label = "Abstimmung";
        abstimmungSearch.onWordChange = function () {
            resultat.abstimmungSearch = abstimmungSearch.value;
            resultat.reloadData();
        };
        abstimmungSearch.render();*/

        let kanton = new KantonListBox(searchForm);
        kanton.onChange = function () {
            resultat.kantonId = kanton.value;
            resultat.reloadData();
        };
        kanton.render();


        /*let gemeinde = new BootstrapSearchTextBox(layoutRow);
        gemeinde.label = "Gemeinde";
        gemeinde.onWordChange = function () {
            resultat.gemeindeSearch = gemeinde.value;
            resultat.reloadData();
        };
        gemeinde.render();*/


        let clear = new CloseFontAwesomeIcon(searchForm);
        clear.onClick = function () {
            geoLevel.value = "";
            abstimmung.value = "";

            /*abstimmungSearch.clearValue();
            gemeinde.clearValue();*/

            resultat.clearParameter();
            resultat.reloadData();
        };


        /*let gemeinde = new GemeindeAutocomplete(this);
        gemeinde.onWordChange = function (value) {

            resultat.gemeindeId = value;
            resultat.reloadData();

        };
        gemeinde.render();*/


        /*let mainRow = new BootstrapRow(this);

        let leftCol=new BootstrapColumn(mainRow);
        let rightCol=new BootstrapColumn(mainRow);*/


        let resultat = new AbstimmungResultatTable(this);
        resultat.geoLevelId = GeoLevelType.BUND;
        resultat.paginationLimit = 100;
        resultat.showKanton = false;
        resultat.showBezirk = false;
        resultat.showGemeinde = false;
        resultat.render();





    }


}