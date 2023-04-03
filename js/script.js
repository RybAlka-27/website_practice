      // Доделать страничку объявления.
      // Заняться админкой(авторизация, администрирование сайта)
      // Создать таблицу для объявлений
function on_Click(id) {
  $(document).ready(function() {

    $.ajax({
      type: "post",
      data: {id: id},
      url: "vendor/table.php",
      success: function (answer) {
        console.log(answer);
        var ansServ = JSON.parse(answer);
        console.log(ansServ);
        const TabBody = document.querySelector("#table > tbody");
        while (TabBody.firstChild) {
          TabBody.removeChild(TabBody.firstChild);
        }
        for (var i = 0; i < ansServ.name.length; i++) {
          var name = ansServ.name[i];
          var year = ansServ.year[i];
          var country = ansServ.country[i];
          var price = ansServ.price[i];
          var seller = ansServ.seller[i];
          var type = ansServ.type[i];
          var list = [name, year, country, price, seller, type];
          result(list);
  
          function result(arr) {
            var tr = document.createElement("tr");
            // tr.setAttribute("onclick", "document.location = 'advert.html';");
            tr.setAttribute("id", arr[0])
            tr.setAttribute("onclick", "get_advert_table(id)");
            for (var key in arr) {
              // console.log(arr[key])
              const td = document.createElement("td");
              td.textContent = arr[key];
              tr.appendChild(td);
              TabBody.appendChild(tr);
            }
          }
        }
      }
    });
  });
}

function get_advert_table(id) {
  $.ajax({
    type: "post",
    url: "vendor/adv-table.php",
    dataType: "json",
    data: {id: id},
    success: function(ansServ) {
      var TabBody = document.querySelector("#table > tbody");
      while (TabBody.firstChild) {
        TabBody.removeChild(TabBody.firstChild);
      }
      var tr = document.createElement("tr");
      $('#thead tr th').css('cursor', );
      // tr.setAttribute("id", "tbody_tr");
      for (var key in ansServ) {
        // console.log(arr[key])
        const td = document.createElement("td");
        td.textContent = ansServ[key];
        tr.appendChild(td);
        TabBody.appendChild(tr);
      }
      // var DivBody = document.createSelector("body > div");
    }
  });
}

function sortTable(n) {
  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
  table = document.getElementById("table");
  switching = true;
  dir = "asc";

  while (switching) {
    switching = false;
    rows = table.getElementsByTagName("TR");
    for (i = 1; i < (rows.length - 1); i++) {
      shouldSwitch = false;
      x = rows[i].getElementsByTagName("TD")[n];
      y = rows[i + 1].getElementsByTagName("TD")[n];
      if (dir == "asc") {
        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
          shouldSwitch = true;
          break;
        }
      } else if (dir == "desc") {
        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
          shouldSwitch = true;
          break;
        }
      }
    }
    if (shouldSwitch) {
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
      switchcount++;
    } else {
      if (switchcount == 0 && dir == "asc") {
        dir = "desc";
        switching = true;
      }
    }
  }
}