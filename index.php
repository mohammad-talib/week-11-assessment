
<?php

/* Question 1 : Write a PHP script to display names and the salaries amounts,
 within a table. ou should use `echo ` to generate your table. */
//////////////////////// Your Code Here /////////////////////

$person1 = "mohammad";
$salary1 = "$200";
$person2 = "asem";
$salary2 = "$300";

// echo "<table>";
//    echo "<td>"$person1.$salary1"</td>";
// echo "</table>";



/*Question 2 : Write a PHP script which displays the capital and country name from the below array $c.
 as unordered list after sorting the array list by countries names  */
//////////////////////// Your Code Here /////////////////////

$countries = array( "Italy"=>"Rome",
              "Luxembourg"=>"Luxembourg",
               "Belgium"=> "Brussels",
               "Denmark"=>"Copenhagen",
               "Finland"=>"Helsinki",
               "France" => "Paris",
               "Slovakia"=>"Bratislava" ) ;

foreach($countries as $key=>$value){
    sort($countries);
    echo "Countries[" . $key . "] = " . $value . "<br/>";
}

/*Question 3 : Write a script to build the following stars pattern, using a nested for loop.

*
* *
* * *
* * * *
* * * * *
* * * * *
* * * *
* * *
* *
*
*/

for($i=0;$i<5;$i++){
        echo "*";
    for($j=0; $j<$i; $j++){
        echo $star ="*"."<br/>";
        
    }
}

/*Question 4 : Write a PHP script to calculate the difference between two dates.
Input : 1981-11-04, 2013-09-04
Output : 31 years, 10 months, 11 days*/
$year1 = 1981;
$year2 = 2013;
$month1 = 11;
$month2 = 9;
$day1 = 4;
$day2 = 4;
if($year1 != $year2){
    echo $year1 - $year2;
}else if($month1 != $month2){
    echo $month1 - $month2;
}else{
    echo $day1 - $day2;
}

/*Question 5 : Create a simple HTML form that accept the user name after submitting display
 the name using PHP echo statement under the form. */
// echo "<br/>";
// echo <form action="">
//     echo "<input />";
//     echo "<button>"hello"</button>";
// echo </form>

?>