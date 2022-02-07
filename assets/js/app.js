
$(".show-sidebar-btn").click(function () {
    $(".sidebar").animate({marginLeft:0});
});

$(".hide-sidebar-btn").click(function () {
    $(".sidebar").animate({marginLeft:"-100%"});
});

function go(url) {
    setTimeout(function () {
        location.href = `${url}`;
    },500);
}


