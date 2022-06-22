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
import GemeindeAutocomplete from "../bfs/Gemeinde/Com/Autocomplete/GemeindeAutocomplete.js";

let document = new DocumentContainer();
document.onLoaded = function () {


    // AdminMainContent
    let mainContent = new AdminMainContent();  // (new DivContainer()).fromId("main-content");


    //let search=new AdminSearchTextBox(mainContent);


/*    let gemeinde=new GemeindeAutocomplete(mainContent);
    gemeinde.render();*/







};