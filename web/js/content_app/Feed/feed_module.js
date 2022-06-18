
// feed_page_module
// feed

import H1Container from "../../html/Title/H1.js";
import DivContainer from "../../html/Content/Div.js";
import FeedPage from "./Page/FeedPage.js";


let container=new DivContainer();
container.fromId("feed");

let h1=new H1Container(container);
h1.text="hello";
//h1.render();

let page = new FeedPage(container);
page.render();


/*
import PageLoader from "../../framework/Page/PageLoader.js";
import FeedPage from "./Page/FeedPage.js";

(new PageLoader()).showPageContainer(new FeedPage());*/
