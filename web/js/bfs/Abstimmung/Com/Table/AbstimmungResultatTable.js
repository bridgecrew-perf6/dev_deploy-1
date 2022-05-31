import BootstrapDataTable from "../../../../framework/Bootstrap/Table/BootstrapDataTable.js";
import Debug from "../../../../core/Debug/Debug.js";


export default class AbstimmungResultatTable extends BootstrapDataTable {

    showDatum=true;

    showAbstimmung = true;

    showKanton = true;

    showBezirk = true;

    showGemeinde = true;


    constructor(parentContainer) {

        super(parentContainer);
        this.service = "abstimmung-resultat";
        this.showEditIcon = false;
        this.showDeleteIcon = false;

    }


    onHeader(header) {

        (new Debug()).write("onHeader");

        if (this.showDatum) {
        header.addText("Datum");
        }

        if (this.showAbstimmung) {
            header.addText("Abstimmung");
        }

        //header.addText("Geo");
        //header.addText("Abstimmung");

        if (this.showKanton) {
            header.addText("Kanton");
        }

        if (this.showBezirk) {
            header.addText("Bezirk");
        }

        //(new Debug()).write(this.showGemeinde);

        if (this.showGemeinde) {
            header.addText("Gemeinde");
        }

        /*header.addText("Ja");
        header.addText("Nein");
        header.addText("Ja");*/
        //header.addText("Stimmbeteiligung");

        header.addContainer(this.getSortingHyperlink("Ja", "ja"));
        header.addContainer(this.getSortingHyperlink("Nein", "nein"));
        header.addContainer(this.getSortingHyperlink("Ja Prozent", "ja_prozent"));
        header.addContainer(this.getSortingHyperlink("Stimmbeteiligung", "stimmbeteiligung"));

    }


    onRow(tableRow, dataRow) {

        if (this.showDatum) {
            tableRow.addText(dataRow.datum);
        }

        if (this.showAbstimmung) {
            tableRow.addText(dataRow.abstimmung);
        }
        //tableRow.addText(dataRow.geo);


        if (this.showKanton) {
            tableRow.addText(dataRow.kanton);
        }

        if (this.showBezirk) {
            tableRow.addText(dataRow.bezirk);
        }

        if (this.showGemeinde) {
            tableRow.addText(dataRow.gemeinde);
        }

        if (dataRow.ausgezaehlt) {
            tableRow.addText(dataRow.ja_absolut);
            tableRow.addText(dataRow.nein_absolut);
            tableRow.addText(dataRow.ja_prozent);
            //tableRow.addText(Math.floor(dataRow.ja_prozent) + "%");
            //tableRow.addText(Math.floor(dataRow.stimmbeteiligung_prozent) + "%");
            tableRow.addText(dataRow.stimmbeteiligung_prozent);
        } else {
            tableRow.addEmpty();
            tableRow.addEmpty();
            tableRow.addEmpty();
            tableRow.addEmpty();
        }

    }


    set abstimmungSearch(value) {

        this.addParameter("abstimmung-search", value);

    }


    set abstimmungId(value) {

        this.addParameter("abstimmung", value);

    }


    set jahr(value) {

        this.addParameter("jahr", value);

    }


    set datumId(value) {

        if (value!=="") {
        this.showDatum=false;
        this.addParameter("datum-id", value);
        } else {
            this.showDatum=true;
        }

    }


    set geoLevelId(value) {

        this.addParameter("level", value);

    }


    set kantonId(value) {

        this.addParameter("kanton", value);

    }


    set gemeindeId(value) {

        this.addParameter("gemeinde", value);

    }


    set gemeindeSearch(value) {

        this.addParameter("gemeinde-search", value);

    }


}