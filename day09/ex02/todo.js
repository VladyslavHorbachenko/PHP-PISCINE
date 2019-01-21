var ft_list;

function Del(elem) {
if(confirm("You want to delete?"))
    elem.remove();
}

  document.addEventListener('DOMContentLoaded', function() {
        var button = document.getElementById("button");
        button.addEventListener("click", function() {
        var  input = prompt("enter info");
         //console.log(input);
        if (input != null) {
          var newItem = document.createElement("div");
          var textnode = document.createTextNode(input);
          newItem.setAttribute("onclick", "Del(this)");
          newItem.setAttribute("style", "border-style:solid; background-color:pink;");

          newItem.appendChild(textnode);

          var list = document.getElementById("ft_list");
          list.insertBefore(newItem, list.childNodes[0]);
    }
  })

  });
