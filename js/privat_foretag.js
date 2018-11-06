$(document).ready(function(){
    $(".kurser").click(function(){
        $(".skr").css("display", "inline");
        $("#privat").click(function(){redirect("kurser_privat.html");});
        $("#foretag").click(function(){redirect("kurser_foretag.html");});
    });
    $(".itsupport").click(function(){
        $(".skr").css("display", "inline");
        $("#privat").click(function(){redirect("itsupport_privat.html");});
        $("#foretag").click(function(){redirect("itsupport_foretag.html");});
    });
    $(".radgivning").click(function(){
        $(".skr").css("display", "inline");
        $("#privat").click(function(){redirect("radgivning_privat.html");});
        $("#foretag").click(function(){redirect("radgivning_foretag.html");});
    });
});



function redirect(link){
    window.location.href = link;
}