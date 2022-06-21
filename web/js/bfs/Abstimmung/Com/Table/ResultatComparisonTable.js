import ServiceDataTable from "../../../framework/Data/Table/ServiceDataTable.js";
import Debug from "../../../core/Debug/Debug.js";
import TdContainer from "../../../html/Table/Td.js";
import ColorStyle from "../../../html/Style/Color.js";
import NumberTdContainer from "../../../framework/Com/Table/ValueTdContainer.js";


export default class ResultatComparisonTable extends ServiceDataTable {

    constructor(parentContainer) {

        super(parentContainer);
        this.service = "abstimmung-resultat-comparison";
        this.showEditIcon=false;
        this.showDeleteIcon=false;

    }


    onHeader(header) {


        header.addText("Geo");

        //header.addText("Ja");
        header.addText("Ja");
        /*header.addText("Ja Juni");
        header.addText("Ja November");*/

        header.addText("Stimmbeteiligung");
        /*header.addText("Stimmbeteiligung Juni");
        header.addText("Stimmbeteiligung November");*/



        header.addText("Ja ∆");
        header.addText("Nein ∆");

        /*
        header.addText("Geo");
        header.addText("Ja");
        header.addText("Nein");
        header.addText("Ja");
        header.addText("Stimmbeteiligung");*/

    }


    getPercent(value) {

        return Math.round(value)+"%";

    }



    onRow(tableRow, dataRow) {

        tableRow.addText(dataRow.geo);

        tableRow.addText(this.getPercent(dataRow.ja_prozent_1)+" &rarr; "+this.getPercent(dataRow.ja_prozent_2));
        //tableRow.addText(this.getPercent(dataRow.ja_prozent_2));

        tableRow.addText(this.getPercent(dataRow.stimmbeteiligung_prozent_1)+" &rarr; "+this.getPercent(dataRow.stimmbeteiligung_prozent_2));
        //tableRow.addText(this.getPercent(dataRow.stimmbeteiligung_prozent_2));



        //tableRow.addText(dataRow.ja_absolut_2);*/
        //tableRow.addText(dataRow.ja_absolut_change);


        let jaTd =new NumberTdContainer(tableRow);
        jaTd.number = dataRow.ja_absolut_change;

        let neinTd =new NumberTdContainer(tableRow);
        neinTd.number = dataRow.nein_absolut_change;



        /*            new TdContainer(tableRow);
                td.backgroundColor = ColorStyle.RED;

                td.text = dataRow.ja_absolut_change;*/

        /*tableRow.addText(dataRow.nein_absolut_1);
        tableRow.addText(dataRow.nein_absolut_2);*/
        //tableRow.addText(dataRow.nein_absolut_change);

    }


    /*onRow(row, item) {


        tableRow.addText(dataRow.geo);

        tableRow.addText(dataRow.ja_absolut_1);
        tableRow.addText(dataRow.ja_absolut_2);
        tableRow.addText(dataRow.ja_absolut_change);

        tableRow.addText(dataRow.nein_absolut_1);
        tableRow.addText(dataRow.nein_absolut_2);
        tableRow.addText(dataRow.nein_absolut_change);




       /* row.addText(item.geo);
        row.addText(item.ja_absolut);
        row.addText(item.nein_absolut);
        row.addText(Math.floor(item.ja_prozent)+"%");
        row.addText(Math.floor(item.stimmbeteiligung_prozent)+"%");*/

    //}



    /*set abstimmungId(value) {

        this.addParameter("abstimmung",value);

    }*/


    set abstimmung1Id(value) {

        this.addParameter("abstimmung-1", value);

    }


    set abstimmung2Id(value) {

        this.addParameter("abstimmung-2", value);

    }



    set geoLevelId(value) {

        this.addParameter("level",value);

    }


    set kantonId(value) {

        this.addParameter("kanton",value);

    }


    set gemeinde(value) {

        this.addParameter("gemeinde-text",value);

    }





    /*
    set gemeindeId(value) {

        this.addParameter("level",value);

    }*/

}