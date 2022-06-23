import WordDelay from "./WordDelay.js";
import InputContainer from "../../../html/Form/Input.js";
import TextInputContainer from "../../../html/Form/TextInput.js";


export default class DelayTextInputContainer extends TextInputContainer {   // InputContainer {

    onValueChange = null;

    constructor(parentContainer) {

        super(parentContainer);

        let requestNumber = 0;

        let local = this;

        this.onKeyUp = function (event) {

            if (local.value !== "") {

                requestNumber++;

                let delay = new WordDelay();
                delay.delay = 200;
                delay.requestNumber = requestNumber;
                delay.onDelay = function () {

                    if (delay.requestNumber === requestNumber) {

                        if (local.value !== "") {
                            local.onValueChange();
                        }

                    }

                }

            }

        }

    }

}
