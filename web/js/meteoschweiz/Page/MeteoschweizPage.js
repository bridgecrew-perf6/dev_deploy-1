import AutocompleteTextBox from "../../framework/Com/Autocomplete/AutocompleteTextBox.js";
import ParagraphContainer from "../../html/Content/Paragraph.js";
import IconPageContainer from "../../framework/Page/IconPageContainer.js";
import DivContainer from "../../html/Content/Div.js";
import MeteoschweizStationView from "../Content/MeteoschweizStationView.js";
import MeteoschweizStationType from "../Content/MeteoschweizStationType.js";
import PageContainer from "../../framework/Page/PageContainer.js";
import StationAutocomplete from "../Com/Autocomplete/StationAutocomplete.js";
import ServiceRequest from "../../framework/Service/ServiceRequest.js";
import H1Container from "../../html/Title/H1.js";
import SmallContainer from "../../html/Formatting/SmallContainer.js";

export default class MeteoschweizPage extends PageContainer {

    constructor(parentContainer) {

        super(parentContainer);
        this.pageTitle = "Meteoschweiz";

    }


    render() {

        /*let autocomplete = new StationAutocomplete(this);  // new AdminAutocomplete(this);
        //autocomplete.serviceName = "meteoschweiz-station-word";
        autocomplete.onWordChange = function (wordId) {

            let service = new ServiceRequest("meteoschweiz-station-item");
            service.addParameter("data_id", wordId);
            service.onDataRow = function (dataRow) {

                h1.text = dataRow.station;
                small.text = dataRow.station_code;
                p.text = dataRow.latitude + "/" + dataRow.longitude;

                //contentContainer.emptyContainer();

                let view = new MeteoschweizStationView(contentContainer);
                view.fromDataId(dataRow.id);

            };
            service.sendRequest();

        };

        let p = new ParagraphContainer(this);
        let h1 = new H1Container(this);
        let small = new SmallContainer(this);

        let contentContainer = new DivContainer(this);*/










    }


}