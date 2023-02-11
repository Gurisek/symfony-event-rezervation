// pokud neni nic vyhledano
function myFunction() {
    var input, filter, table, tr, td, i, txtValue, flag = false;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementsByClassName("content-table")[0];
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td");
        for (j = 0; j < td.length; j++) {
            txtValue = td[j].textContent || td[j].innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
                flag = true;
                break;
            } else {
                tr[i].style.display = "none"
            }
        }
    }
}