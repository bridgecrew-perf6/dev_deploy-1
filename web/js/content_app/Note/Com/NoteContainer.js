import DivContainer from "../../../html/Content/Div.js";
import ServiceRequest from "../../../framework/Service/ServiceRequest.js";
import AdminWidget from "../../../framework/Widget/AdminWidget.js";
import ParagraphContainer from "../../../html/Content/Paragraph.js";
import Debug from "../../../core/Debug/Debug.js";
import AdminButton from "../../../framework/AdminButton.js";
import HtmlString from "../../../core/Html/HtmlString.js";
import IconButton from "../../../framework/FontAwesome/IconButton.js";
import NoteContentType from "../NoteContentType.js";
import ImageContentType from "../../File/ImageContentType.js";

export default class NoteContainer extends DivContainer {


    render() {

        let local = this;

        let newBtn = new AdminButton(this);
        newBtn.label = "New";
        newBtn.onClick = function () {
            /*let contentType = new NoteContentType();
            contentType.showForm();*/

            (new ImageContentType()).showForm();

        }


        let btn = new AdminButton(this);
        btn.label = "Sort";
        btn.onClick = function () {


            //  list.insertBefore(newItem, list.childNodes[0]);


            let p = new ParagraphContainer();
            p.text = "Hello World";

            //local._htmlElement.insertBefore(p._htmlElement, local._htmlElement.childNodes[0]);


            p.addContainer()

            //btn._htmlElement.after(p._htmlElement);
            btn._htmlElement.before(p._htmlElement);


            /*
                        div2.after(div1);
                        div2.before(div3);

                        var classname = document.getElementsByClassName('item');

                        var divs =[];
                        for (var i = 0; i < classname.length; ++i)
                        {
                            divs.push(classname[i]);
                        }
                        vs.sort(function(a,b)
                        {
                            return a.innerHTML.localeCompare(b.innerHTML);
                        });*/

        }


        //let firstElement


        let service = new ServiceRequest("note-list");
        service.onDataRow = function (row) {

            (new Debug()).write(row.title);

            let widget = new AdminWidget(local);
            widget.closeButton = true;
            widget.label = row.title;
            widget.addDataAttribute("id", row.id);

            /*let html = row.text;
            html=html.replace(/(?:\r\n|\r|\n)/g, '<br>');*/

            let div = new DivContainer();

            let edit = new IconButton(div);
            edit.icon = "edit";
            edit.onClick = function () {


                /*let contentType = new NoteContentType();

                let form = new contentType.form();

                let modal = new AdminModal();
                modal.modalTitle = contentType.label;  // "Edit";
                modal.show(form);*/


            };

            let html = new HtmlString(row.text);
            html.replaceBr();

            let p = new ParagraphContainer(div);
            p.text = html;  // row.text;

            widget.addContainer(div);


            widget.onClose = function () {
                widget.removeContainer();

                let deleteService = new ServiceRequest("note-delete");
                deleteService.addParameter("id", row.id);
                deleteService.sendRequest();

            }

            widget.render();


        }


        service.sendRequest();


    }


}

