import DocumentContainer from "../html/Document/Document.js";
import DivContainer from "../html/Content/Div.js";
import ParagraphContainer from "../html/Content/Paragraph.js";
import AdminTabs from "../framework/Admin/Tabs/AdminTabs.js";
import AdminButton from "../framework/Admin/Button/AdminButton.js";
import H1Container from "../html/Title/H1.js";
import AdminMainContent from "../framework/Admin/Layout/AdminMainContent.js";
import AdminListBox from "../framework/Admin/Form/AdminListBox.js";
import AdminSearchTextBox from "../framework/Com/Search/AdminSearchTextBox.js";
import AdminTextBox from "../framework/Admin/Input/AdminTextBox.js";
import AdminSearchForm from "../framework/Admin/Form/AdminSearchForm.js";
import KantonListBox from "../bfs/Gemeinde/Com/ListBox/KantonListBox.js";

let document = new DocumentContainer();
document.onLoaded = function () {


    // AdminMainContent
    let mainContent = new AdminMainContent();  // (new DivContainer()).fromId("main-content");

    let title = new H1Container(mainContent);
    title.text="";

    let form=new AdminSearchForm(mainContent);

    let listbox = new AdminListBox(mainContent);
    listbox.label="Number";
    listbox.addItem(1,"One");

    let kanton = new KantonListBox(mainContent);
    kanton.render();

    let txt=new AdminSearchTextBox(mainContent);

    let text= new AdminTextBox(mainContent);
    text.label="Input 1";


    let btn = new AdminButton(mainContent);
    btn.label = "save";
    btn.onClick = function () {

        title.text = "Hello World";


    };


};