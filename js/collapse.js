var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var collapse_content = this.nextElementSibling;
    if (collapse_content.style.display === "block") {
      collapse_content.style.display = "none";
    } else {
      collapse_content.style.display = "block";
    }
  });
} 
