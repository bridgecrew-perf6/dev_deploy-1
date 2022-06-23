import BaseContainer from "../Base/Base.js";


export default class DialogContainer extends BaseContainer {


    constructor(parentContainer) {

        super("dialog", parentContainer);

    }


    showDialog() {

        //this.addAttributeWithoutValue("open");
        this._htmlElement.showModal();

    }


    closeDialog() {

        this._htmlElement.close();

    }



}