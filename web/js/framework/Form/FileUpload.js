import LabelContainer from "../../html/Form/Label.js";
import DivContainer from "../../html/Content/Div.js";
import FileInputContainer from "../../html/Form/FileInput.js";


export default class FileUpload extends DivContainer {

    _input;

    _label;

    constructor(parentContainer) {
        super(parentContainer);

        this._label = new LabelContainer(this);
        this._input = new FileInputContainer(this);
    }


    set name(value) {
        this._input.id = value;
        this._input.name = value;
        this._label.addAttribute("htmlFor", value);
    }


    set label(value) {
        this._label.text = value;
    }


    set accept(value) {
        this._input.accept = value;
    }

}