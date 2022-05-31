import BootstrapPage from "../../../framework/Bootstrap/Page/BootstrapPage.js";
import AbstimmungListBox from "../Com/ListBox/AbstimmungListBox.js";
import AbstimmungResultatTable from "../Com/Table/AbstimmungResultatTable.js";
import BootstrapRow from "../../../framework/Bootstrap/Layout/BootstrapRow.js";
import GeoLevelListBox from "../../Gemeinde/Com/ListBox/GeoLevelListBox.js";
import ClearMenuIcon from "../../../framework/Com/Menu/Icon/ClearMenuIcon.js";
import GeoLevelType from "../../Gemeinde/Type/GeoLevelType.js";
import JahrListBox from "../Com/ListBox/JahrListBox.js";
import DatumListBox from "../Com/ListBox/DatumListBox.js";
import BootstrapSearchTextBox from "../../../framework/Bootstrap/Search/BootstrapSearchTextBox.js";
import KantonListBox from "../../Gemeinde/Com/ListBox/KantonListBox.js";

export default class AbstimmungPage extends BootstrapPage {

    loadPage() {

        this.pageTitle = "Eidgenössische Abstimmungen";

    }


    render() {


        let layoutRow = new BootstrapRow(this);

        let geoLevel = new GeoLevelListBox(layoutRow);
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

        let jahr = new JahrListBox(layoutRow);
        jahr.onChange = function () {

            datum.jahr = jahr.value;
            datum.reloadData();

            abstimmung.jahr = jahr.value;
            abstimmung.reloadData();

            resultat.jahr = jahr.value;
            resultat.reloadData();

        };
        jahr.render();


        let datum = new DatumListBox(layoutRow);
        datum.onChange = function () {
            abstimmung.datumId = datum.value;
            abstimmung.reloadData();

            resultat.datumId = datum.value;
            resultat.reloadHeader();
            resultat.reloadData();
        };
        datum.render();


        let abstimmung = new AbstimmungListBox(layoutRow);
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

        let abstimmungSearch = new BootstrapSearchTextBox(layoutRow);
        abstimmungSearch.label = "Abstimmung";
        abstimmungSearch.onWordChange = function () {
            resultat.abstimmungSearch = abstimmungSearch.value;
            resultat.reloadData();
        };
        abstimmungSearch.render();

        let kanton = new KantonListBox(layoutRow);
        kanton.onChange = function () {
            resultat.kantonId = kanton.value;
            resultat.reloadData();
        };
        kanton.render();


        let gemeinde = new BootstrapSearchTextBox(layoutRow);
        gemeinde.label = "Gemeinde";
        gemeinde.onWordChange = function () {
            resultat.gemeindeSearch = gemeinde.value;
            resultat.reloadData();
        };
        gemeinde.render();


        let clear = new ClearMenuIcon(layoutRow);
        clear.onClick = function () {
            geoLevel.value = "";
            abstimmung.value = "";

            abstimmungSearch.clearValue();
            gemeinde.clearValue();

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


        /*
        let filter=new AbstimmungSearchFilter(rightCol);
        filter.render();*/


    }


}