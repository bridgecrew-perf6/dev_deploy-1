import BaseContainer from "../../html/Base/Base.js";


export default class FontAwesomeIcon extends BaseContainer {

    constructor(parentContainer = null) {
        super("i", parentContainer);
        //this.render();
    }


    set icon(value) {
        //this.addCssClass("fas fa-" + value);
        this.addCssClass("fa-regular fa-" + value);
    }


    // <i class="fa-regular fa-box"></i>


}