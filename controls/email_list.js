var $ = function(id) {
    return document.getElementById(id);
};
var joinList = function() {
    var emailAddress = $("email").value;
    var isValid = true;
    
    if (emailAddress == "") {
        $("email_address_error").firstChild.nodeValue = 
                "This field is required.";
        isValid = false;
    } else { $("email_address_error").firstChild.nodeValue = ""; }
    
    if (isValid) {
        // submit the form if the e-mail address is valid
        $("email_form").submit(); 
    }
};
window.onload = function() {
    $("join_list").onclick = joinList;
    $("email").focus();
};

