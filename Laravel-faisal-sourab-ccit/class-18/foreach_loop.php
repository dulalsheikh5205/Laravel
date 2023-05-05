
<?php 
//Write a PHP code to print array elements. Use foreach loop. 

$employee = array(
    "name"=>"Robert","email"=>"robert112233@gmail.com","age"=>18,"gender"=>"male"
);

foreach($employee as $key=>$value )
{
    echo $key.": ",$value."<br>";
}


/*
// output will be
name: Robert
email: robert112233@gmail.com
age: 18
gender: male
*/

?>
what does the following code do?
$("div").css("width","500px")
    .add("p")
    .css("background-color","yellow");

    As mentioned earlier, it is not possible to write jQuery code directly inside an HTML <div> tag. You will need to include the jQuery library and write the code inside a <script> tag. Here's an example:


<!DOCTYPE html>
<html>
  <head>
    <title>Example</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  </head>
  <body>
    <div id="myDiv">
      <!--  HTML content here -->
    </div>
    <script>
      $(document).ready(function() {
        $("#myDiv div").css("width","500px").end().find("p").css("background-color","yellow");
      });
    </script>
  </body>
</html>