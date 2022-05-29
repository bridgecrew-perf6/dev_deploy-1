export default class BaseContainerList {

    _htmlElementList = null;

    constructor(className) {

        this._htmlElementList = document.getElementsByClassName(className);

    }


    set onClick(event) {

        //event.preventDefault();


        for (let i = 0; i < this._htmlElementList.length; i++) {
            this._htmlElementList[i].addEventListener('click', event, false);
        }

    }


    set onChange(event) {

        for (let i = 0; i < this._htmlElementList.length; i++) {
            this._htmlElementList[i].addEventListener('change', event, false);
        }
    }



    getData(name) {


        /*get id() {
            return this._htmlElement.id;
        }*/


        //console.log(this);

        let value = this._htmlElementList[0].getAttribute("data-" + name);

        //let value = this.getAttribute("data-" + name);
        return value;

    }


}