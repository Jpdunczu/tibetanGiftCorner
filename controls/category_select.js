var $ = function(id) {
    return document.getElementById(id);
};
var categorySelect = function() {
    
};
window.onload = function() {
    // get the li tags from the navbar
    var navbar = $("navbar");
    var liElements = navbar.getElementsByTagName("li");
    //attach an event handler for each li tag
    liElements.onclick = categorySelect;
    liElements[0].firstChild.focus();
};

