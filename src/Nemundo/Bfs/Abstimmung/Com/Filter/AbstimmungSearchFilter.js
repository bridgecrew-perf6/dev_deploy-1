import BootstrapListGroup from "../../../../../../js/framework/Bootstrap/ListGroup/BootstrapListGroup.js";
import ServiceRequest from "../../../../../../js/framework/Service/ServiceRequest.js";


// GroupFilter
export default class AbstimmungSearchFilter extends BootstrapListGroup {

    service;


    render() {

        super.render();

        this.service="abstimmung-abstimmung";

        let local=this;

        let service=new ServiceRequest();
        service.service=this.service;
        service.onDataRow=function (dataRow) {
            local.addItem(dataRow.abstimmung);
        };
        service.sendRequest();

    }


}