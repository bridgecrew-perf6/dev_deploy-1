import DivContainer from "../../../html/Content/Div.js";
import MesswertService from "../../Service/MesswertService.js";
import EchartsContainer from "../../../framework/Com/Chart/EchartsContainer.js";
import RowFlexLayout from "../../../framework/Com/Layout/RowFlexLayout.js";
import BootstrapRow from "../../../framework/Bootstrap/Layout/BootstrapRow.js";

export default class MesswertChartContainer extends BootstrapRow {   // DivContainer {

    stationId;

    render() {

        //let layout = new RowFlexLayout(this);

        let temperatureChart = new EchartsContainer(this);
        temperatureChart.chartTitle = "Temperature";
        temperatureChart.heightPixel = 300;
        temperatureChart.widthPixel = 500;

        let windChart = new EchartsContainer(this);
        windChart.chartTitle = "Wind";
        windChart.heightPixel = 300;
        windChart.widthPixel = 500;

        let service = new MesswertService();
        service.stationId = this.stationId;
        service.paginationLimit = 100;
        service.onDataRow = function (messwertRow) {

            temperatureChart.addValueY(parseFloat(messwertRow.temperature));
            temperatureChart.addValueX("");

            windChart.addValueY(parseFloat(messwertRow.wind));
            windChart.addValueX("");

        };

        service.onFinished = function () {

            temperatureChart.render();
            windChart.render();

        };

        service.sendRequest();

    }

}