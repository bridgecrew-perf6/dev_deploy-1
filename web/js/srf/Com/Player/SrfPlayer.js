import IframeContainer from "../../../html/Iframe/Iframe.js";

export default class SrfPlayer extends IframeContainer {

    constructor(parentContainer) {

        super(parentContainer);

        this.widthPixel = 560;
        this.heightPixel = 315;
        this.border = 0;

    }


    set urn(value) {

        this.src = "https://www.srf.ch/play/embed?urn=" + value + "&subdivisions=false";
        this.addAttributeWithoutValue("allowFullScreen");

    }


    set videoId(value) {

        this.src = "https://www.srf.ch/play/embed?urn=urn:srf:video:" + value + "&subdivisions=false";
        this.addAttributeWithoutValue("allowFullScreen");

    }

}