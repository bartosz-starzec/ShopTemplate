// showing items

var $items = $(".items .item");
var $btn = $(".items-buttons");
var tagged = {};
$items.each(function() {
    var item = this;
    var tags = $(this).data("tags");
    if (tags) {
        tags.split(",").forEach(function(tagName) {
            if (tagged[tagName] == null) {
                tagged[tagName] = [];
            }
            tagged[tagName].push(item);
        });
    }
});

console.log("a");

$.each(tagged, function(tagName) {
    $("<button/>", {
        text: tagName,
        click: function() {
            $(this)
                .addClass("showItem")
                .siblings()
                .removeClass("showItem");
            $items
                .hide()
                .filter(tagged[tagName])
                .show();

        }
    }).appendTo($btn);
});