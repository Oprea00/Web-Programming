// Javascript source code

function sortTable(n) {
    var table, rows, switching, index, currentColumn, nextColumn, shouldSwitch, direction, auxiliaryCell, switchCount = 0;
    table = document.getElementById("table");   //get the table with id "table"
    switching = true;
    direction = "ascending";    //the first sort will be ascending
    while (switching) {     //make a loop that will continue until all elements are in corect order
        switching = false;      //first assume that the order is correct    
        rows = table.rows;      //put all <tr> in the table variable
        for (index = 1; index < (rows.length - 1); index++) {       //loop through all rows except the headers
            shouldSwitch = false;       //assume that the order is correct 
            currentColumn = rows[index].getElementsByTagName("td")[n];      //get element from the current column and row
            nextColumn = rows[index + 1].getElementsByTagName("td")[n];      //get element from the current column and next row
            if (direction == "ascending") {                                         //if the sorting is in ascending order and
                if (currentColumn.innerHTML.toLowerCase() > nextColumn.innerHTML.toLowerCase()) { //the first element bigger than the 2nd there should be a switch
                    shouldSwitch = true;
                    break;
                }
            } else if (direction == "descending") {                                                 //if the sorting is in descending order and                
                if (currentColumn.innerHTML.toLowerCase() < nextColumn.innerHTML.toLowerCase()) {  //first element smaller than the 2nd there should be a switch
                    shouldSwitch = true;
                    break;
                }
            }
        }
        if (shouldSwitch) {     
            //rows[index].parentNode.insertBefore(rows[index + 1], rows[index]);      //insert element on the current column after the one on the next column 
            auxiliaryCell = currentColumn.innerHTML;
            currentColumn.innerHTML = nextColumn.innerHTML;
            nextColumn.innerHTML = auxiliaryCell;
            switching = true;       //a switch has been made
            switchCount++;
        } else {
            if (switchCount == 0 && direction == "ascending") {     //if the column is sorted ascending then go to the second sort which is descending
                direction = "descending";
                switching = true;
            }
        }
    }
}