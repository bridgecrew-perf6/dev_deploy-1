import DivContainer from "../../html/Content/Div.js";

export default class _AdminContainer extends DivContainer {

    constructor(parentContainer) {

        super(parentContainer);

        //this.addCssClass("container");
        this.addCssClass("container-fluid");

    }

}