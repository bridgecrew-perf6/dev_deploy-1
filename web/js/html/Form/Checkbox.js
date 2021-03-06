import InputContainer from "./Input.js";

export default class CheckboxContainer extends InputContainer {

    constructor(parentContainer) {
        super(parentContainer);
        this._htmlElement.type = "checkbox";
    }

/*    set value(value) {
        this._htmlElement.checked = value;
    }

    get value() {
        return this._htmlElement.checked;
    }*/

    set checked(value) {
        this._htmlElement.checked = value;
    }

    get checked() {
        return this._htmlElement.checked;
    }


    set disabled(value) {
        this._htmlElement.disabled = value;
    }

}