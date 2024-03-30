<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <?php
    <!-- Data Type  -->
    $x = 5;
    var_dump($x);

    <!-- String -->
    $x = "Hello world!";

    echo "<br>";
    $y = 'Hello world!';
    var_dump($y);
    var_dump($x);

    <!-- Integer -->
    $x = 5985;
    var_dump($x);

    <!-- Float -->
    $x = 10.365;
    var_dump($x);

    <!-- Boolean -->
    $x = true;
    var_dump($x);

    <!-- Array -->
    $cars = array("Volvo","BMW","Toyota");
    var_dump($cars);

    <!-- Object  -->
    class Car {
    public $color;
    public $model;
    public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
    }
    public function message() {
    return "My car is a " . $this->color . " " . $this->model . "!";
    }
    }

    $myCar = new Car("red", "Volvo");
    var_dump($myCar);

    <!-- Null Value  -->
    $x = "Hello world!";
    $x = null;
    var_dump($x);

    <!-- change datatype  -->
    $x = 5;
    $x = (string) $x;
    var_dump($x);

    

//functions
function myMessage() {
  echo "Hello world!";
}
  myMessage();

//   Function Arguments
  function familyName($fname) {
    echo "$fname Refsnes.<br>";
  }
  
  familyName("Jani");
  familyName("Hege");
  familyName("Stale");
  familyName("Kai Jim");
  familyName("Borge");

//   Default Argument Value
  function setHeight($minheight = 50) {
    echo "The height is : $minheight <br>";
  }
  
  setHeight(350);
  setHeight(); // will use the default value of 50
  setHeight(135);
  setHeight(80);

//   Returning values
function sum($x, $y) {
    $z = $x + $y;
    return $z;
  }
  
  echo "5 + 10 = " . sum(5, 10) . "<br>";
  echo "7 + 13 = " . sum(7, 13) . "<br>";
  echo "2 + 4 = " . sum(2, 4);

//   pass by refernce argument 
  function add_five(&$value) {
    $value += 5;
  }
  
  $num = 2;
  add_five($num);
  echo $num;



//if condition
$age = 20;

if ($age >= 18) {
    echo "You are eligible to vote.";
}
// if-else 
$grade = 75;

if ($grade >= 60) {
    echo "You passed the exam.";
} else {
    echo "You failed the exam.";
}

// if else-if else 
$score = 80;

if ($score >= 90) {
    echo "A";
} elseif ($score >= 80) {
    echo "B";
} elseif ($score >= 70) {
    echo "C";
} elseif ($score >= 60) {
    echo "D";
} else {
    echo "F";
}

// Switch statement 
$day = "Monday";

switch ($day) {
    case "Monday":
        echo "Today is Monday.";
        break;
    case "Tuesday":
        echo "Today is Tuesday.";
        break;
    case "Wednesday":
        echo "Today is Wednesday.";
        break;
    case "Thursday":
        echo "Today is Thursday.";
        break;
    case "Friday":
        echo "Today is Friday.";
        break;
    case "Saturday":
        echo "Today is Saturday.";
        break;
    case "Sunday":
        echo "Today is Sunday.";
        break;
    default:
        echo "Invalid day.";
}
// Nested if 
$a = 13;

if ($a > 10) {
  echo "Above 10";
  if ($a > 20) {
    echo " and also above 20";
  } else {
    echo " but not above 20";
  }
}

        echo "My first PHP script!";
    
        ECHO "Hello World!<br>";
        echo "Hello World!<br>";
        EcHo "Hello World!<br>";
    
        
        // while loop 
        $i = 1;
        while ($i < 6) {
          echo $i;
          $i++;
        }
        
        // Do-while loop 
        $i = 1;
        
        do {
          echo $i;
          $i++;
        } while ($i < 6);
        
        // For loop 
        for ($x = 0; $x <= 10; $x++) {
            echo "The number is: $x <br>";
          }
        
        //For each loop
        $colors = array("red", "green", "blue", "yellow");
        
        foreach ($colors as $x) {
          echo "$x <br>";
        }
        
        // Break in for loop 
        for ($x = 0; $x < 10; $x++) {
            if ($x == 4) {
              break;
            }
            echo "The number is: $x <br>";
          }
        
        //   Continue in for loop
        for ($x = 0; $x < 10; $x++) {
            if ($x == 4) {
              continue;
            }
            echo "The number is: $x <br>";
          }
          
    $a = 5;
    $b = 5.34;
    $c = "25";

    <!-- Integer -->
    $x = 5985;
    var_dump(is_int($x));

    $x = 59.85;
    var_dump(is_int($x));

    <!-- Float -->
    $x = 10.365;
    var_dump(is_float($x));

$a = 100;
$b = 200;
$c = $a + $b;
echo $c;

$squareOf10 = 10 ** 2;
echo $squareOf10;

// Arithmetic Operators
$x = 10;
$y = 5;
$addition = $x + $y; // 15
$subtraction = $x - $y; // 5
$multiplication = $x * $y; // 50
$division = $x / $y; // 2
$modulus = $x % $y; // 0

// Assignment operators
$a = 10;
$a += 5; // Equivalent to: $a = $a + 5;
echo "Assignment operator:\n";
echo "Value of a: $a\n\n";

// Comparison operators
$var1 = 10;
$var2 = 5;

echo "Comparison operators:\n";
echo "Equal: ", var_export($var1 == $var2, true), "\n"; // false
echo "Greater than: ", var_export($var1 > $var2, true), "\n"; // true
echo "Less than: ", var_export($var1 < $var2, true), "\n"; // false
echo "Not equal: ", var_export($var1 != $var2, true), "\n\n"; // true

// Increment/Decrement operators
$b = 5;
$b++; // Increment
echo "Increment operator:\n";
echo "Value of b after increment: $b\n";
$b--; // Decrement
echo "Value of b after decrement: $b\n\n";

// Logical operators
$condition1 = true;
$condition2 = false;

echo "Logical operators:\n";
echo "AND: ", var_export($condition1 && $condition2, true), "\n"; // false
echo "OR: ", var_export($condition1 || $condition2, true), "\n"; // true
echo "NOT: ", var_export(!$condition1, true), "\n\n"; // false

// String operators
$string1 = "Hello ";
$string2 = "World";
$concatenatedString = $string1 . $string2;
echo "String operators:\n";
echo "Concatenated string: $concatenatedString\n\n";

// Array operators
$array1 = [1, 2, 3];
$array2 = [3, 4, 5];
$union = $array1 + $array2; // Merges arrays without duplicates
echo "Array operators:\n";
print_r($union);
echo "\n";

// Conditional assignment operators
$num = 10;
$message = ($num > 5) ? "Greater than 5" : "Less than or equal to 5";
echo "Conditional assignment operator:\n";
echo "Message: $message\n";

$favcolor = "red";
switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
    break;
  case "blue":
    "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}

    $x = 5;
    $y = "John"

    $txt = "W3Schools.com";
    echo "I love $txt!";

    $x = "John";
    echo $x;
    
    <!-- Multiple Variable -->
    $x = $y = $z = "Orange";

    <!-- echo statement  -->
    $txt1 = "Learn PHP";
    $txt2 = "W3Schools.com";
    $x = 5;
    $y = 4;

    echo "<h2>" . $txt1 . "</h2>";
    echo "Study PHP at " . $txt2 . "<br>";
    echo $x + $y;

    <!-- Print Statement -->
    $txt1 = "Learn PHP";
    $txt2 = "W3Schools.com";
    $x = 5;
    $y = 4;

    print "<h2>" . $txt1 . "</h2>";
    print "Study PHP at " . $txt2 . "<br>";
    print $x + $y;

    <!-- Data Type -->
    $x = 5;
    var_dump($x);

        ?>

</body>
</html>