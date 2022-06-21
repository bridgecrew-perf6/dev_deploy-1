import ServiceRequest from "../../framework/Service/ServiceRequest.js";

export default class GeschaeftService extends ServiceRequest {

    constructor() {

        super("parlament-geschaeft");
        //this.sendRequest();

    }


    set geschaeftId(value) {
        this.addParameter('id',value);
    }





}