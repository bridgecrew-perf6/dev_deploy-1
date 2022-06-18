import ContentView from "../../content/ContentView.js";
import LabelValueAdminTable from "../../framework/Table/LabelValueAdminTable.js";
import MeteoschweizStationType from "./MeteoschweizStationType.js";
import MesswertLatestService from "../Service/MesswertLatestService.js";

export default class MeteoschweizStationView extends ContentView {

    fromDataId(dataId) {

        super.fromDataId((new MeteoschweizStationType()).id, dataId);

    }


    onData(dataRow) {

        let table = new LabelValueAdminTable(this);
        table.addLabelValue("Station", dataRow.station + " (" + dataRow.station_code + ")");

/*        let service = new MesswertLatestService();
        service.stationId = data.id;
        service.onDataRow = function (dataRow) {
            table.addLabelValue("Temperature", dataRow.temperature_text);
            table.addLabelValue("Pressure", dataRow.pressure_text);
            table.addLabelValue("Wind", dataRow.wind_text);
        };

        service.onFinished = function () {

            //(new Debug()).write("finished");
            //chart.render();

        };

        service.sendRequest();*/


        /*
        let chart = new MesswertChartContainer(this);
        chart.stationId = data.id;
        chart.render();*/

    }

}