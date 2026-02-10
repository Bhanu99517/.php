<?php
/*
================================================================================
                         COMPLETE PHP LANGUAGE COURSE
                     BASIC → INTERMEDIATE → ADVANCED
                 (Learn by reading COMMENTS + CODE)

 HOW TO RUN:
 - Install PHP or XAMPP
 - Run: php php_full_course.php
 - Or place in htdocs and open in browser
================================================================================
*/

// =============================================================================
// 1️⃣ BASIC OUTPUT
// =============================================================================
echo "========= PHP FULL COURSE START =========\n\n";

// =============================================================================
// 2️⃣ VARIABLES & DATA TYPES
// =============================================================================

// PHP variables start with $
$age = 20;               // integer
$marks = 88.75;          // float
$grade = "A";            // string
$isStudent = true;       // boolean
$name = "Bhanu";         // string

echo "Name: $name\n";
echo "Age: $age\n";
echo "Marks: $marks\n";
echo "Grade: $grade\n";
echo "Is Student: " . ($isStudent ? "true" : "false") . "\n";

// =============================================================================
// 3️⃣ CONSTANTS
// =============================================================================
define("COUNTRY", "India");
echo "\nCountry: " . COUNTRY . "\n";

// =============================================================================
// 4️⃣ OPERATORS
// =============================================================================
$a = 10;
$b = 3;

echo "\nOperators:\n";
echo "Add: " . ($a + $b) . "\n";
echo "Sub: " . ($a - $b) . "\n";
echo "Mul: " . ($a * $b) . "\n";
echo "Div: " . ($a / $b) . "\n";
echo "Mod: " . ($a % $b) . "\n";

// =============================================================================
// 5️⃣ CONDITIONAL STATEMENTS
// =============================================================================
echo "\nConditionals:\n";
if ($marks >= 90) {
    echo "Excellent\n";
} elseif ($marks >= 60) {
    echo "Good\n";
} else {
    echo "Fail\n";
}

// Switch
switch ($grade) {
    case "A":
        echo "Top Grade\n";
        break;
    case "B":
        echo "Average\n";
        break;
    default:
        echo "Needs Improvement\n";
}

// =============================================================================
// 6️⃣ LOOPS
// =============================================================================
echo "\nFor Loop:\n";
for ($i = 1; $i <= 5; $i++) {
    echo $i . " ";
}

echo "\n\nWhile Loop:\n";
$i = 1;
while ($i <= 3) {
    echo $i . "\n";
    $i++;
}

echo "\nDo-While Loop:\n";
$i = 1;
do {
    echo $i . "\n";
    $i++;
} while ($i <= 2);

// =============================================================================
// 7️⃣ ARRAYS
// =============================================================================

// Indexed array
$numbers = array(10, 20, 30, 40);
echo "\nIndexed Array:\n";
foreach ($numbers as $num) {
    echo $num . "\n";
}

// Associative array
$student = array(
    "name" => "Bhanu",
    "age" => 20,
    "marks" => 88.75
);

echo "\nAssociative Array:\n";
foreach ($student as $key => $value) {
    echo "$key : $value\n";
}

// Multidimensional array
$students = array(
    array("Bhanu", 20),
    array("Alex", 21)
);

echo "\nMultidimensional Array:\n";
foreach ($students as $s) {
    echo "Name: $s[0], Age: $s[1]\n";
}

// =============================================================================
// 8️⃣ FUNCTIONS
// =============================================================================
function add($x, $y) {
    return $x + $y;
}

// Function with default parameter
function greet($name = "User") {
    echo "Hello $name\n";
}

echo "\nFunctions:\n";
echo "Add: " . add(5, 10) . "\n";
greet("Bhanu");

// =============================================================================
// 9️⃣ STRING FUNCTIONS
// =============================================================================
$str = "Hello PHP";

echo "\nString Functions:\n";
echo strlen($str) . "\n";        // length
echo strtoupper($str) . "\n";    // uppercase
echo strtolower($str) . "\n";    // lowercase
echo str_replace("PHP", "World", $str) . "\n";

// =============================================================================
// 🔟 SUPERGLOBALS
// =============================================================================
echo "\nSuperglobals:\n";
echo "Server Name: " . $_SERVER['SERVER_NAME'] . "\n";

// =============================================================================
// 1️⃣1️⃣ FILE HANDLING
// =============================================================================
$file = fopen("demo.txt", "w");
fwrite($file, "Hello from PHP file handling\n");
fclose($file);

echo "\nFile Content:\n";
echo file_get_contents("demo.txt");

// =============================================================================
// 1️⃣2️⃣ OOP – CLASS & OBJECT
// =============================================================================
class Student {
    public $name;
    public $age;

    function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    function display() {
        echo "Student: $this->name, $this->age\n";
    }
}

$s1 = new Student("Bhanu", 20);
$s1->display();

// =============================================================================
// 1️⃣3️⃣ INHERITANCE
// =============================================================================
class Person {
    protected $name;

    function __construct($name) {
        $this->name = $name;
    }

    function display() {
        echo "Person: $this->name\n";
    }
}

class CollegeStudent extends Person {
    private $college;

    function __construct($name, $college) {
        parent::__construct($name);
        $this->college = $college;
    }

    function display() {
        echo "$this->name studies at $this->college\n";
    }
}

$p = new CollegeStudent("Bhanu", "GIOE");
$p->display();

// =============================================================================
// 1️⃣4️⃣ INTERFACES
// =============================================================================
interface Payment {
    public function pay($amount);
}

class UPI implements Payment {
    public function pay($amount) {
        echo "Paid ₹$amount using UPI\n";
    }
}

class Card implements Payment {
    public function pay($amount) {
        echo "Paid ₹$amount using Card\n";
    }
}

$pay = new UPI();
$pay->pay(1000);

// =============================================================================
// 1️⃣5️⃣ ABSTRACT CLASS
// =============================================================================
abstract class Vehicle {
    abstract function start();
}

class Bike extends Vehicle {
    function start() {
        echo "Bike started\n";
    }
}

$v = new Bike();
$v->start();

// =============================================================================
// 1️⃣6️⃣ EXCEPTION HANDLING
// =============================================================================
echo "\nException Handling:\n";
try {
    if ($b == 0) {
        throw new Exception("Division by zero");
    }
    echo $a / $b;
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
} finally {
    echo "Finally executed\n";
}

// =============================================================================
// 1️⃣7️⃣ SESSIONS & COOKIES (BASIC)
// =============================================================================
session_start();
$_SESSION["user"] = "Bhanu";

setcookie("language", "PHP", time() + 3600);

echo "\nSession User: " . $_SESSION["user"] . "\n";

// =============================================================================
// 1️⃣8️⃣ JSON HANDLING
// =============================================================================
$data = array("name" => "Bhanu", "age" => 20);
$json = json_encode($data);

echo "\nJSON Encode:\n";
echo $json . "\n";

echo "\nJSON Decode:\n";
$obj = json_decode($json, true);
echo $obj["name"] . "\n";

// =============================================================================
// 1️⃣9️⃣ DATABASE (CONCEPT – PDO STYLE)
// =============================================================================
/*
try {
    $pdo = new PDO("mysql:host=localhost;dbname=test", "root", "");
    echo "Database connected";
} catch (PDOException $e) {
    echo $e->getMessage();
}
*/

// =============================================================================
// END
// =============================================================================
echo "\n========= PHP FULL COURSE END =========\n";
?>
