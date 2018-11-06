$(document).ready(function(){
    $(".kurser").click(function(){
        $(".skr").css("display", "inline");
        $("#privat").click(function(){redirect("http://google.com");});
        $("#foretag").click(function(){redirect("https://www.facebook.com/");});
    });
    $(".itsupport").click(function(){
        $(".skr").css("display", "inline");
        $("#privat").click(function(){redirect("kurser_foretag.html");});
        $("#foretag").click(function(){redirect("kurser_foretag.html");});
    });
    $(".radgivning").click(function(){
        $(".skr").css("display", "inline");
        $("#privat").click(function(){redirect("kurser_foretag.html");});
        $("#foretag").click(function(){redirect("kurser_foretag.html");});
    });
});



function redirect(link){
    window.location.href = link;
}