import DataListBox from "../../../framework/Data/DataListBox.js";


export default class StationListBox extends DataListBox {


    constructor(parentContainer) {

        super(parentContainer);

        this.label = "Station";
        this.service = "meteoschweiz-station";
        /*this.onDataRow = function (row) {
            this.addItem(row.id, row.station);
        }*/

        //this.render();

    }




    onDataRow(dataRow) {
        //super.onDataRow(dataRow);
        this.addItem(dataRow.id, dataRow.station);

    }


    /*
   onItem(row) {

       (new Debug()).write(row);
        this.addItem(row.id,row.id);

   }*/


    /*render() {

        let _local = this;

        this.label = "Station";

        let request = new JsonRequest(WebConfig.webUrl + "app/meteoschweiz/station-json");
        request.onRow = function (item) {
            _local.addItem(item.id, item.station);
        };

        request.load();

    }*/

}

