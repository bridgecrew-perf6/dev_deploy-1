import PageContainer from "../../framework/Page/PageContainer.js";
import ResultatComparisonTable from "../Com/Table/ResultatComparisonTable.js";
import H3Container from "../../html/Title/H3.js";
import GeoLevelListBox from "../Com/ListBox/GeoLevelListBox.js";
import KantonListBox from "../Com/ListBox/KantonListBox.js";
import FlexLayout from "../../framework/Com/Layout/FlexLayout.js";

export default class AbstimmungComparisonPage extends PageContainer {


    _level;

    _kanton;

    _resultat;



    loadPage() {

        this.pageTitle = "Eidgenössische Abstimmungen";

    }


    render() {

        let local=this;

        /*let h3=new H3Container(this);
        h3.text= "Differenz zwischen Juni und November";  // Covid-19 Gesetz Juni/November";*/


        let form = new FlexLayout(this);
        //form. paddingPixel=


        this._level = new GeoLevelListBox(form);
        this._level.onChange = function () {
            local.reloadData();
        };
        this._level.render();

        this._kanton = new KantonListBox(form);
        this._kanton.onChange = function () {
            local.reloadData();
        };
        this._kanton.render();


        this._resultat = new ResultatComparisonTable(this);
        this._resultat.abstimmung1Id = 6430;
        this._resultat.abstimmung2Id = 6500;
        this._resultat.geoLevelId = 1;
        this._resultat.render();


    }


    reloadData() {

        this._resultat.geoLevelId = this._level.value;
        this._resultat.kantonId = this._kanton.value;
        this._resultat.reloadTable();

    }


}
