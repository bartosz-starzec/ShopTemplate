window.onload = init();

function init() {

    //customizing product
    count = 1;
    var countEl = document.getElementById("qty");

    document.getElementsByClassName("plus")[0].addEventListener("click", function() { plus(); });
    document.getElementsByClassName("minus")[0].addEventListener("click", function() { minus(); });

    function plus() {

        count++;
        countEl.value = count;
    }

    function minus() {
        if (count > 1) {
            count--;
            countEl.value = count;
        }
    }


    //features

    var buttons = document.getElementsByClassName("feature");

    for (var i = 0; i < buttons.length; i++) {
        buttons[i].addEventListener("click", function(e) {

            var tag = this.dataset.tag; // tag of clicked button
            var btn = this; // clicked button
            var all_btn = document.getElementsByClassName("feature"); // all buttons


            //removing class active from other buttons
            active_button(all_btn);

            //adding class active to cliked button
            if (btn.classList.contains("active-feat") == false) {
                btn.classList.add("active-feat");

            }


            //get tag from clicked button
            var article = document.getElementsByClassName(tag)[0];

            //get all articles with features
            var articles = document.getElementsByClassName("specific-features")[0].children;

            //hidding/showing features
            hasClass(articles);

            //display right article on screen
            if (article.classList.contains("hide-feature") == true) {
                article.classList.remove("hide-feature");
                article.classList.add("show-feature");
            }

        });
    }
}

// chcecking if all articles are hide, if they are not, hidding them, 
//and hidding current displayed article
function hasClass(element) {
    for (var i = 0; i < element.length; i++) {
        var hide = element[i].classList.contains("hide-feature");
        var show = element[i].classList.contains("show-feature");
        if (hide == false) {
            element[i].classList.add("hide-feature");
        }
        if (show == true) {
            element[i].classList.remove("show-feature");
        }
    }
}



function active_button(element) {
    for (var j = 0; j < element.length; j++) {

        element[j].classList.remove("active-feat");
    }

}