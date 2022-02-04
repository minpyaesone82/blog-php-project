
$(".show-sidebar-btn").click(function () {
    $(".sidebar").animate({marginLeft:0});
});

$(".hide-sidebar-btn").click(function () {
    $(".sidebar").animate({marginLeft:"-100%"});
});

function go()
{

    window.location = 'item-list.html'

}
function home()
{

    window.location = 'index.html'

}

