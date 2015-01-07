$.get("banner.html", function(data){
    $(this).children("div:first").html(data);
});