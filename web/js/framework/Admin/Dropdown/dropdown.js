function checkDropdownClick() {

    window.onclick = function (event) {

        if (!event.target.matches('.admin-dropdown-button')) {
            hideDropdownMenu();
        }
    }

}


function hideDropdownMenu() {

    var dropdowns = document.getElementsByClassName("admin-dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('admin-dropdown-show')) {
            openDropdown.classList.remove('admin-dropdown-show');
        }
    }

}

checkDropdownClick();
