<?php
//   Write a PHP script to print alphabet pattern " Z ". Use for loop
for ($row = 1; $row <= 5; $row++) {
    for ($col = 1; $col <= 5; $col++) {
        if ($row == 1 || $row == 5 || $col == (6 - $row)) {
            echo "* ";
        } else {
            echo "&nbsp;&nbsp;";
        }
    }
    echo "<br>";
}  
?>
//8:  Write a HTML script for table. Use HTML 5 and bootstrap. (Marks 8)
//9:  a) Write an SQL query to fetch the Stu_Name and Stu_Marks of those students whose age is 20. (Marks 3)

// b) Write a query to show all the record of those students whose Marks is greater than 82 and age is 22. (Marks 3)

10:  Write a SQL query will show the names and age of students enrolled in different courses.  (Marks 7)