import AbstimmungListBox from "../ListBox/AbstimmungListBox.js";
import _KantonListBox from "../ListBox/KantonListBox.js";
import AbstimmungResultatTable from "../Table/AbstimmungResultatTable.js";
import GeoLevelListBox from "../ListBox/GeoLevelListBox.js";
import JahrListBox from "../ListBox/JahrListBox.js";
import DatumListBox from "../ListBox/DatumListBox.js";
import DivContainer from "../../../html/Content/Div.js";
import AdminButton from "../../../framework/AdminButton.js";
import UnorderedList from "../../../html/Listing/UnorderedList.js";
import ResultatService from "../../Service/ResultatService.js";
import TableContainer from "../../../html/Table/Table.js";
import TdContainer from "../../../html/Table/Td.js";
import AdminTable from "../../../framework/Table/AdminTable.js";
import TableRow from "../../../html/Table/TableRow.js";
import ResultatComparisonService from "../../Service/ResultatComparisonService.js";

export default class _AbstimmungContainer extends DivContainer {


    _level;

    _jahr;

    _datum;

    _abstimmung;

    _kanton;

    _resultat;


    render() {


        /*let geo = new GeoListBox(this);
        geo.render();*/




        let local = this;

        let abstimmungList = [];

        let compare = new AdminButton(this);
        compare.label = "Compare";
        compare.onClick = function () {

            ul.emptyContainer();
            abstimmungList.push(local._abstimmung.value);

            for (let abstimmungId of abstimmungList) {
                ul.addItem(abstimmungId);
            }

        }
        compare.render();

        let ul = new UnorderedList(this);

        let compareTable = new AdminTable(this);

        let show = new AdminButton(this);
        show.label="Show";
        show.onClick=function () {

            compareTable.emptyContainer();

            let service = new ResultatComparisonService();
            service.abstimmung1Id=abstimmungList[0];
            service.abstimmung2Id=abstimmungList[1];
            service.geoLevelId=local._level.value;
            //service.abstimmung1Id = local._abstimmung.value;
            //service.geoLevelId = local._level.value;
            service.kantonId = local._kanton.value;
            service.onRow=function (dataRow) {

                let tableRow = new TableRow(compareTable);
                tableRow.addText(dataRow.geo);
                
                tableRow.addText(dataRow.ja_absolut_1);
                tableRow.addText(dataRow.ja_absolut_2);
                tableRow.addText(dataRow.ja_absolut_change);

                tableRow.addText(dataRow.nein_absolut_1);
                tableRow.addText(dataRow.nein_absolut_2);
                tableRow.addText(dataRow.nein_absolut_change);



            };
            service.sendRequest();


        };



        this._level = new GeoLevelListBox(this);
        this._level.onChange = function () {
            //    resultat.geoLevelId = level.value;
            local.reloadData();
        };
        this._level.render();


        this._jahr = new JahrListBox(this);
        this._jahr.onChange = function () {
            local._abstimmung.jahr = local._jahr.value;
            local._abstimmung.reloadData();
            /*abstimmung.clearItem();
            abstimmung.loadData();*/

            //datum.
            //local.reloadData();

            local._datum.jahr = local._jahr.value;
            local._datum.reloadData();
        };
        this._jahr.render();


        this._datum = new DatumListBox(this);
        this._datum.onChange = function () {
            local._abstimmung.datumId = local._datum.value;
            local._abstimmung.reloadData();
            //local.reloadData();
        };
        this._datum.render();


        this._abstimmung = new AbstimmungListBox(this);
        this._abstimmung.onChange = function () {

            local.reloadData();

            //(new Debug()).write("on change");

            /*resultat.abstimmungId = abstimmung.value;
            resultat.geoLevelId = level.value;
            resultat.reloadTable();*/

        };
        this._abstimmung.render();


        this._kanton = new _KantonListBox(this);
        this._kanton.onChange = function () {
            local.reloadData();
            //gemeinde.kan
        };
        this._kanton.render();



        this._resultat = new AbstimmungResultatTable(this);
        this._resultat.render();








       /* let btn = new AdminButton(this);
        btn.label = "Reload";
        btn.onClick = function () {

            /*resultat.abstimmungId = abstimmung.value;
            resultat.geoLevelId = level.value;
            resultat.kantonId=kanton.value;
            resultat.reloadTable();*/

        //};







        /*
        let abstimmung = new AbstimmungListBox(this);
        abstimmung.onChange = function () {
            resultat.abstimmungId = abstimmung.value;

        };
        abstimmung.render();

        let level = new GeoLevelListBox(this);
        level.onChange = function () {
            resultat.levelId = level.value;
        };
        level.render();

        let geo = new GeoListBox(this);
        geo.render();

        let kanton = new KantonListBox(this);
        kanton.onChange = function () {

            //gemeinde.kan
        };
        kanton.render();*/

        /*let gemeinde = new GemeindeListBox(this);
        gemeinde.render();*/


    }


    reloadData() {

        this._resultat.abstimmungId = this._abstimmung.value;
        this._resultat.geoLevelId = this._level.value;
        this._resultat.kantonId = this._kanton.value;
        this._resultat.reloadTable();

    }


}