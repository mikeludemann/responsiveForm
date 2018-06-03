// Feedback form

document.getElementById("formFeedback").onsubmit = function () {

    /* Form elements */

    var firstName  = document.forms["feedback"]["firstName"].value,
        lastName = document.forms["feedback"]["lastName"].value,
        email = document.forms["feedback"]["email"].value,
        comments  = document.forms["feedback"]["comments"].value;

    /* Regular Expressions */

    var regexpFirstName = /[a-zA-zäÄöÖüÜ]{1,}/gi,
        result_first_name = regexpFirstName.test(firstName),
        regexpLastName = /[a-zA-zäÄöÖüÜ]{1,}/gi,
        result_last_name = regexpLastName.test(lastName),
        regexpEmail = /(?:[a-z0-9!#$%&amp;'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&amp;'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])/gi,
        result_email = regexpEmail.test(email),
        regexpComments = /[a-zA-ZäÄöÖüÜ0-9\ \,\.\;\:\-\_\\\(\)\{\)\+\=\?\!\´\`\'\&amp;\/\|\§\$\€\@]{1,255}/gi,
        result_comments = regexpComments.test(comments);

    var submit = true;

    if (firstName == null || firstName == "") {
        
        document.getElementById("f_firstName").classList.add("border_red");
        
        submit = false;
    
    }
    
    else if (firstName != null || firstName != "") {
        
        document.getElementById("f_firstName").classList.remove("border_red");
        
        submit = false;
    
    }

    if (lastName == null || lastName == "") {
        
        document.getElementById("f_lastName").classList.add("border_red");
        
        submit = false;
    
    }

    else if (lastName != null || lastName != "") {
        
        document.getElementById("f_lastName").classList.remove("border_red");
        
        submit = false;

    }


    if (email == null || email == "") {

        document.getElementById("f_email").classList.add("border_red");

        submit = false;

    }


    else if (email != null || email != "") {

        document.getElementById("f_email").classList.remove("border_red");

        submit = false;

    }

    if (comments == null || comments == "") {

        document.getElementById("f_comments").classList.add("border_red");

        submit = false;

    }

    else if (comments != null || comments != "") {

        document.getElementById("f_comments").classList.remove("border_red");

        submit = false;

    }

    if (result_first_name == false){
    
        document.getElementById("f_firstName").classList.add("border_red");
        
        submit = false;
    
    } else if (result_first_name == true) {
    
        document.getElementById("f_firstName").classList.remove("border_red");
    
        //submit = false;
    
    }
    
    if (result_last_name == false){
    
        document.getElementById("f_lastName").classList.add("border_red");
        
        submit = false;
    
    } else if (result_last_name == true) {
    
        document.getElementById("f_lastName").classList.remove("border_red");
    
        //submit = false;
    
    }
    
    if (result_email == false){
    
        document.getElementById("f_email").classList.add("border_red");
        
        submit = false;
    
    } else if (result_email == true) {
    
        document.getElementById("f_email").classList.remove("border_red");
    
        //submit = false;
    
    }
    
    if (result_comments == false){
    
        document.getElementById("f_comments").classList.add("border_red");
        
        submit = false;
    
    } else if (result_comments == true) {
    
        document.getElementById("f_comments").classList.remove("border_red");
    
        //submit = false;
    
    }

    if(result_first_name == true && result_last_name == true && result_email == true && result_comments == true){

        submit = true;
        
    }

    return submit;
}

// formContact form

document.getElementById("formContact").onsubmit = function () {

    /* Form elements */
        
    var firstName  = document.forms["contact"]["firstName"].value,
        lastName = document.forms["contact"]["lastName"].value,
        email = document.forms["contact"]["email"].value,
        comments  = document.forms["contact"]["comments"].value;

    /* Regular Expressions */

    var regexpFirstName = /[a-zA-zäÄöÖüÜ]{1,}/gi,
        result_first_name = regexpFirstName.test(firstName),
        regexpLastName = /[a-zA-zäÄöÖüÜ]{1,}/gi,
        result_last_name = regexpLastName.test(lastName),
        regexpEmail = /(?:[a-z0-9!#$%&amp;'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&amp;'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])/gi,
        result_email = regexpEmail.test(email),
        regexpComments = /[a-zA-ZäÄöÖüÜ0-9\ \,\.\;\:\-\_\\\(\)\{\)\+\=\?\!\´\`\'\&amp;\/\|\§\$\€\@]{1,255}/gi,
        result_comments = regexpComments.test(comments);

    var submit = true;

    if (firstName == null || firstName == "") {
        
        document.getElementById("c_firstName").classList.add("border_red");
        
        submit = false;
    
    }
    
    else if (firstName != null || firstName != "") {
        
        document.getElementById("c_firstName").classList.remove("border_red");
        
        submit = false;
    
    }

    if (lastName == null || lastName == "") {
        
        document.getElementById("c_lastName").classList.add("border_red");
        
        submit = false;
    
    }

    else if (lastName != null || lastName != "") {
        
        document.getElementById("c_lastName").classList.remove("border_red");
        
        submit = false;

    }


    if (email == null || email == "") {

        document.getElementById("c_email").classList.add("border_red");

        submit = false;

    }


    else if (email != null || email != "") {

        document.getElementById("c_email").classList.remove("border_red");

        submit = false;

    }

    if (comments == null || comments == "") {

        document.getElementById("c_comments").classList.add("border_red");

        submit = false;

    }

    else if (comments != null || comments != "") {

        document.getElementById("c_comments").classList.remove("border_red");

        submit = false;

    }

    if (result_first_name == false){
    
        document.getElementById("c_firstName").classList.add("border_red");
        
        submit = false;
    
    } else if (result_first_name == true) {
    
        document.getElementById("c_firstName").classList.remove("border_red");
    
        //submit = false;
    
    }
    
    if (result_last_name == false){
    
        document.getElementById("c_lastName").classList.add("border_red");
        
        submit = false;
    
    } else if (result_last_name == true) {
    
        document.getElementById("c_lastName").classList.remove("border_red");
    
        //submit = false;
    
    }
    
    if (result_email == false){
    
        document.getElementById("c_email").classList.add("border_red");
        
        submit = false;
    
    } else if (result_email == true) {
    
        document.getElementById("c_email").classList.remove("border_red");
    
        //submit = false;
    
    }
    
    if (result_comments == false){
    
        document.getElementById("c_comments").classList.add("border_red");
        
        submit = false;
    
    } else if (result_comments == true) {
    
        document.getElementById("c_comments").classList.remove("border_red");
    
        //submit = false;
    
    }

    if(result_first_name == true && result_last_name == true && result_email == true && result_comments == true){

        submit = true;
        
    }

    return submit;
}

/* Helper functions */

/* function removeWarning() {
    document.getElementById(this.id + "_error").innerHTML = "";
}

document.getElementById("name").onkeyup = removeWarning;
document.getElementById("email").onkeyup = removeWarning;
document.getElementById("telephone").onkeyup = removeWarning; */