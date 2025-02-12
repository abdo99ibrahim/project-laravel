<?php
####################
##### Video 30 #####
####################
  /*
    Control Structure
    - If, Elseif, Else <= Basics

    Syntax
    if (Condition) {
      // If Condition Is True <= Run Me
    } else {
      // If Condition Is False <= Run Me
    }
  */
  if (10 > 10) {

    echo "First Condition";

  } elseif (10 > 10) {

    echo "Second Condition";

  } else {

    echo "No";

  }
  echo "<hr>";



####################
##### Video 31 #####
####################

  /*
    Control Structure
    - If, Elseif, Else <= Real Life Examples

    3% To 30%
  */

  // If
  $page = "Home";
  if($page == "About"){
    echo "This is The Page";
  }


  
####################
##### Video 32 #####
####################
  /*
    Control Structure
    - If, Elseif, Else <= Advanced Practice

    30% To 60%
  */
  if($_SERVER["REQUEST_METHOD"]==="POST"){
    if($_POST['lang']=='ar'){
        header("Location: ar.php");
        exit();
    }
    else if($_POST['lang']=='en'){
        header("Location: en.php");
        exit();
    }
    }


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>31_42</title>
    <form action="" method="post">
        <input type="text" name="username">
        <select name="lang">
            <option value="ar">Arabic</option>
            <option value="en">English</option>
            <option value="fr">French</option>
        </select>
        <input type="submit" value="Go"><br><hr>
    </form>
</head>

<body>

</body>

</html>

<?php 
####################
##### Video 33 #####
####################    
  /*
    Control Structure
    - If, Elseif, Else <= Alternate Syntax

    60% To 80%
  */
  if(10>10):
    echo "True";
    echo "<hr>";
else:
    echo "False";
    echo "<hr>";
  endif;

####################
##### Video 34 #####
####################   
  /*
    Control Structure
    - Nested If Condition And Training
  */
$name = "Abdo";
$is_Student = true;
$is_Orphan = true;
$country = 'Egypt';
$country_discount = 50;
$price = 100;
$student_discount = 10;
$orphan_discount = 15;
if($country == 'Egypt'){
    // لو هو طالب هنديلة خصم الدولة وخصم طالب
    // لو مش طالب هياخد خصم البلد بس
    if($is_Student){
        if($is_Orphan){
            echo "Hello $name <br>";
            echo "Country Discount $country_discount% <br>";
            echo "Student Discount $student_discount% <br>";
            echo "Orphan Discount $orphan_discount% <br>";
            echo "The Final Price IS ".($price -(($country_discount + $student_discount + $orphan_discount ) / 100) * $price) . "$<br>";
        }else{
            echo "Hello $name <br>";
            echo "Country Discount $country_discount% <br>";
            echo "Student Discount $student_discount% <br>";
            echo "The Final Price IS ".($price -(($country_discount + $student_discount) / 100) * $price) . "$<br>";
        }

    }
    else{
        echo "Hello $name <br>";
        echo "Country Discount $country_discount% <br>";
        echo "The Final Price IS ".($price - ($country_discount / 100) * $price) . "$<br>";
    }
}else{
    echo "Hello $name <br>";
    echo "No Discount <br>";
    echo "The Final Price IS $price$ <br>";
}
echo "<hr>";

####################
##### Video 35 #####
####################   
  /*
    Control Structure
    - Ternary Operator => Short If
  */
  $a = 10;

  if ($a > 8) {

    echo "Good";

  } else {

    echo "Bad";

  }
  echo "<br>";
   // Condition ? True : False;
    echo $a > 8 ? "Good" : "Bad";

    echo "<br>";
    $result = $a > 8 ? "Good" : "Bad";
    echo "I Love PHP Because Its A $result Language";
    echo "<hr>";

####################
##### Video 36 #####
####################  
  /*
    Control Structure
    - Switch

    Syntax
    switch (expression) {
      Case 1:
        // Code Block 1
        break;
      Case 2:
        // Code Block 2
        break;
      Case 3:
        // Code Block 3
        break;
      Default:
        // Default Code Block
    }
  */
  $day = "Sun";

  switch($day) {

    case "Sat":
      echo "Hello Today Is $day We Are Open From 10:16";
      break;

    case "Sun":
      echo "Hello Today Is $day We Are Open From 12:18";
      break;

    case "Mon":
    case "Thu":
      echo "Hello Today Is $day We Are Open From 08:12";
      break;

    default:
      echo "Unknown Day";
    }
    echo "<hr>";
?>



<?php if(10<10): ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>AHmed</h1>
</body>
</html>
<?php endif; ?>

<?php echo str_repeat("#",80) . "<br>" . "<span style='font-weight:bold;color:red'>Part 2</span>" . "<br>" .str_repeat("#",80)."<br>" ?>

<?php
####################
##### Video 37 #####
####################
  /*
    Control Structure
    - Loop

    While
  */
  $i=1;
  while($i <=3){
    echo "$i <br>";
    $i++;
  }

  $i=1;
  while($i <=3):
    echo "$i <br>";
    $i++;
  endwhile;
echo "<hr>";
####################
##### Video 38 #####
####################
  /*
    Control Structure
    - Loop

    Do, While
  */
  $i=1;
  do{
      echo "Do-While { $i } <br>";
      $i++;
  }while($i <=3);
echo "<br>";


  $i=4;
  do{
      echo "Do-While { $i } <br>";
      $i++;
  }while($i <=3);
  echo "<hr>";
  
####################
##### Video 39 #####
####################
  /*
    Control Structure
    - Loop

    For
    - Expression One Run Once At The First Of The Loop
    - In The Begining Of Iteration Expression Two Is Checked [If True Continue || Break]
    - At The End Of Iteration Expression Three Are Executed
  */
  for($i=1;$i<=3;$i++){
    echo "For { $i } <br>";
  }
  echo "<hr>";


####################
##### Video 40 #####
####################
  /*
    Control Structure
    - Loop

    Foreach
  */
  $countries = ["EG", "SA", "QA", "SY"];
  echo '<pre>';
  print_r($countries);
  echo '</pre>';
echo "<br>";
  foreach($countries as $country){
    echo $country . "<br>";
  }
  echo "<br>";
$countries_with_discount = ["EG" => 50, "SA" => 30, "QA" => 50, "SY" => 70];
echo '<pre>';
print_r($countries_with_discount);
echo '</pre>';

foreach($countries_with_discount as $country=>$discount):
    echo "Country Name Is $country And Discount Is $discount <br>";
endforeach;
echo "<hr>";

####################
##### Video 41 #####
####################
  /*
    Control Structure
    - Loop

    Break, Continue
    - Break Ends Execution Of (For, Foreach, While, Do-while or Switch)
    - Skip Current Iteration
  */
    $countries = ["EG", "SA", "QA", "SY"];
    foreach($countries as $country){
        if($country =="SA"){
            continue;
        }
        echo $country . "<br>";
      }
echo "<hr>";
####################
##### Video 42 #####
####################
  /*
    Control Structure
    - Including Files

    Include
    Require
  */
  include("./ar.php");
  require("./ar.php");
?>
