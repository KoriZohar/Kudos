function filterNames() {
  var searchInput = document.querySelector("input[type='text']").value;

  var names = document.querySelectorAll("main h1");

  for (var i = 0; i < names.length; i++) {
    var name = names[i].textContent.toLowerCase();
    var listItem = names[i].parentNode.parentNode;

    if (name.includes(searchInput.toLowerCase()) || searchInput === "") {
      listItem.style.display = "block";
    } else {
      listItem.style.display = "none";
    }
  }
}

var searchInput = document.querySelector("input[type='text']");
searchInput.addEventListener("input", filterNames);