var sections = document.getElementsByTagName("section");
var menuHTML = "<div class='menu'>";
for(var i = 0; i < sections.length - 1; i++)
{
    menuHTML += "<a href='#" + sections[i].id + "'><span class='whitePipe'>" + sections[i].id + "</span></a>";
}
for(var i = sections.length - 1; i < sections.length; i++)
{
    menuHTML += "<a href='#" + sections[i].id + "'><span>" + sections[i].id + "</span></a>";
}
menuHTML += "</div>";

for(var i = 0; i < sections.length; i++)
{
    sections[i].innerHTML = "<div class='snuviTitle'>" + sections[i].id + "</div>" + menuHTML + sections[i].innerHTML;
}
