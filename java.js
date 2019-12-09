var r = document.querySelector(".eat-mid");
r.addEventListener("mouseenter", function() {
    document.body.className = "hover-eat"
}), r.addEventListener("mouseleave", function() {
    document.body.className = ""
});
var c = document.querySelector(".drink-mid");
c.addEventListener("mouseenter", function() {
    document.body.className = "hover-drink"
}), c.addEventListener("mouseleave", function() {
    document.body.className = ""
});
var l = document.querySelector(".visit-mid");
l.addEventListener("mouseenter", function() {
    document.body.className = "hover-visit"
}), l.addEventListener("mouseleave", function() {
    document.body.className = ""
})
