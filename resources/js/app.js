/**
 * First we will load all of this project's JavaScript dependencies which
 * includes React and other helpers. It's a great starting point while
 * building robust, powerful web applications using React + Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh React component instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// equire('./components/Example');

$(document).ready(function () {
    let selected = 1
    const imagesend = $("#img-send");
    const imageget = $("#img-get");
    $(".radio-button-option").focus(function () {
        let action =  $(this).data("action");
        selected = $(this).data("option");
        if(action === "get") {
            imageget.attr("src", "/img/get" + selected + ".png")
        }
        else if(action === "send") {
            imagesend.attr("src", "/img/send" + selected + ".png")
        }
        console.log($(this).data("action"));
    })
});
