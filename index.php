<?php
// $servername = "localhost";
// $username = "root";
// $password = "Faizan@123";
// $dbname = "NewDB";

// $conn = new mysqli($servername,$username,$password,$dbname);

// if($conn->connect_error)
// {
// echo $conn->connect_error;
// die('Connection Failed');
// }
// else{
// echo "Success connecting to database";
// }

// Variables in php

// $a = 5;
// $b = 10.5;
// $c = "Hello";

// echo "Hello";
// echo $a;
// echo "<br>";
// echo $c;
// echo $b;
// echo "<br";

// $a = 'Hello';
// $$a = 'Foo';

// echo $a;
// echo "<br>";
// echo $Hello;

// Global , Local and Static variable

// $name = "Faizan";

// function global_var()
// {
//     echo "Variable inside global_var function " . $name;
//     echo "<br>";
// }

// global_var();
// echo "Variable outside global_var funtion " . $name;

// function cap() // Eg of local variable
// {
//     $capital = "New Delhi";
//     echo "The capital of india is " . $capital;
//     echo "<br>";
// }
// cap();
// echo "Capital outside cap function " . $capital; // Capital won't be added to the string beacuse it is a local variable and cannot be accessed from outside the function
 // Exaple of static variable
//  function increment()
//  {
//     static $count = 0;
//     $count++;
//     echo $count;
//     echo "<br>";
//  }
//  increment();
//  increment();
//  increment();
// Data types in php

// $a = "Hello James";
// $b = strlen($a);
// echo "Length of string is " . $b;
// echo "<br>";
// $c = str_replace("James", "Faizan" , $a);
// echo "New string is ";
// echo "<br>";
// echo $c;
// $d = strpos($c,"Faizan");
// echo "<br>";
// echo $d;
// $e = substr($c,0,5);
// echo "<br>";
// echo $e;
// echo "<br>";

// $a = "UPPERCASE STRING";
// $b = "lowwercase string";

// echo "After manupulation";
// echo "<br>";
// echo strtolower($a);
// echo "<br>";
// echo strtoupper($b);

// $a = "                        String to be strimmed                               ";
// echo trim($a);

// $str = "aplle,banana,watermelon";
// $arr = explode(",",$str);
// echo $arr[0] . " " . $arr[1] . " " . $arr[2];

// $arr = array("Yellow" , "Oraneg" , "Green");
// $str = implode(" . ",$arr);
// echo $str;


//Operators
// $a = 10;
// $b = 5;
// echo $a + $b."<br>";
// echo $a - $b."<br>";
// echo $a / $b."<br>";
// echo $a * $b."<br>";
// echo $a % $b."<br";

// $arr1 = array(1,2,3,4);
// $arr2 = array(5,6,7,8);

// $arr3 = array_merge($arr1,$arr2);
// for($i = 0; $i<8; $i++)
// {
//     echo $arr3[$i]."<br>";
// }

// $arr1 = array(1,2,3,4);
// $arr2 = array(1,2,5,4);

// if($arr1 == $arr2)
// {
//     echo "Both the arrays are equal"."<br>";
// }
// if($arr1 === $arr2)
// {
//     echo "Both the arrays are identical";
// }
// if($arr1 != $arr2)
// {
//     echo "Arrays are not equal"."<br>";
// }
// $arr3 = array("Red","Yellow","Oarange");
// if($arr1 !== $arr3)
// {
//     echo "Arrays are not identical";
// }

// Conditional Operators
// ??Ternary
// $a = 5;
// $b =  5;
// $c = $a==$b?10:9;
// echo $c;

// Coalescing
// $c = null;
// $d = 7;
// $e = $c??$d;
// echo $e;

// $a = 10;
// $b = 5;
// $res = $b <=> $a; // if b is greater than a it will return 1 otherwise it willreturn -1
// echo $res;

//Conditionals
// $x = 20;
// if($x>18)
// {
//     echo "you can drive a car";
// }
// $age = 17;
// if($age >= 18)
// {
//     echo "You can drive a car";
// }
// else{
//     echo "You cannot drive a car";
// }
// $age = 19;
// if($age < 0)
// {
//     echo "Please enter valid age";
// }
// else if($age >= 18)
// {
//     echo "You can vote";
// }
// else{
//     echo "You cannot vote";
// }
// $x = "22";
// if($x > "20")
// {
//     echo "Hello World";
// }

//Switch Case
// $i = 4;
// switch($i)
// {
//     case 1:
//         echo "Sunday";
//         break;
//     case 2: 
//         echo "monday";
//         break;
//     case 3:
//         echo "Tuesday";
//         break;
//     default:
//         echo "Please input valid number!";       
// }

// Loops
// $x = 5;
// while($x < 10)
// {
//     echo "The number is ".$x;
//     $x++;
//     echo "<br>";
// }

// $x = 1;
// do{
//     echo "The number is " . $x."<br>";
//     $x++;
// }while($x <= 5);

// for($i = 1; $i <= 10; $i++)
// {
//     echo "The number is ".$i."<br>";
// }

// $arr = array("Violet","Indigo","Blue","Green","Yellow","Orange","Red");
// foreach($arr as $val)
// {
//     echo $val;
//     echo"<br>";
// }

// Functions in php

// Call by value
// function Greet()
// {
//     echo "Hello Buddy";
//     foo();
// }
// Greet();
// function foo()
// {
//     echo "Inside function foo";
// }

// function incr($i)
// {
//     $i++;
//     echo "Value of i inside the function ".$i."<br>";
// }
// $i = 5;
// incr($i);
// echo "Value of i outside the function".$i."<br>";

// Cal by reference
// function dicr(&$i)
// {
//     $i--;
//     echo "Value of i inside the function ".$i."<br>";
// }
// $i = 5;
// dicr($i);
// echo "Value of i outside the function".$i."<br>";

//Default argument values
// function Greet($name = "Harsh")
// {
//     echo "Hello ". $name;
// }

// Greet("Faizan");
// echo "<br>";
// Greet("Sam");
// echo "<br>";
// Greet();

// Variable length argument
// function add(...$nums)
// {
//     $sum = 0;
//     foreach($nums as $val)
//     {
//         $sum += $val;
//     }
//     return $sum;
// }

// echo add(1,2,3,4,5);

// Write a function in PHP to calculate the factorial of a given number.

// function fact($i)
// {
//     if($i == 0 || $i == 1)
//     {
//         return 1;
//     }
//     return $i*fact($i-1);
// }

// echo fact(5);

// Create a function that takes an array of numbers as input and returns the product of all the elements.
// function multiple(...$nums)
// {
//     $res = 1;
//     foreach($nums as $val)
//     {
//         $res *= $val;
//     }
//     return $res;
// }

// echo multiple(1,2,3,4,5);
// function isprime($num)
// {
//     if($num < 2)
//     {
//         return false;
//     }
//     for($i=2 ; $i<= $num/2; $i++)
//     {
//         if($num%$i == 0)
//         {
//             return false;
//         }
//     }
//     return true;
// }
// echo isprime(11)."<br>";

// Arrays in php
// Numeric or indexed array

// $arr = array("Red","Orange","Green");
// Sort hand array
// $arr1 = ["Blue","Yellow"]

// An array can be created using the array() language construct. It takes any number of comma-separated key => value pairs as arguments.
// $arr = array(
//     "Virat" => "36",
//     "Messi" => "33",
//     "Ronaldo" => "35"
// );

// echo "Virat is ".$arr["Virat"]." Years old"."<br>";
// echo "Messi is ".$arr["Messi"]." Years old"."<br>";
// echo "Ronaldo is ".$arr["Ronaldo"]." Years old"."<br>";

// Numeric Array

// $bike = array("TVS","YAMAHA","HONDA","HERO","BMW");

// for($i = 0; $i<count($bike); $i++)
// {
//     echo $bike[$i]."<br>";
// }

// $array = array(
//     1    => "a",
//     "1"  => "b",
//     1.5  => "c",
//     true => "d",
//     "2.5" => "2.5",
// );
// var_dump($array);
// Associative Array

// $car = array(
//     "BMW" => "Red",
//     "Audi" => "White",
//     "Mercedes" => "Grey"
// );

// print_r ("The color of BMW is ".$car['BMW']."<br>");
// print_r("The color of Audi is ".$car['Audi']."<br>");
// print_r("The color of Mercedes is ".$car['Mercedes']."<br>");

// print_r($car);

// Multidimensional array

// $multidim = array(
//     array(1,2,3,4),
//     array(5,6,7,8),
//     array(9,0,1,2),
//     array(5,6,7,8)
// );

// echo "Elements inside multidimensional array are: "."<br>";

// for($i=0; $i<4; $i++)
// {
//     for($j=0; $j<4; $j++)
//     {
//         echo $multidim[$i][$j]."\t";
//     }echo "<br>";
// }
//Classes in PHP
// class Employee{
//     public $name;

//     public function set_name($name)
//     {
//         $this->name = $name;
//     }

//     public function get_name()
//     {
//         return $this->name;
//     }
// }

// $obj = new Employee();
// $obj->set_name("Faizan");
// print_r($obj->get_name());

// Inheritance

// class parent_class{
//     public function func1()
//     {
//         echo "Inside func1 <br>";
//     }
// }

// class child_class extends parent_class{
//     public function func2()
//     {
//         echo "Inside func2 <br>";
//     }
// }

// $obj = new child_class();
// $obj->func1();
// $obj->func2();
// PHP only supports single inheritance

//Final Keyword
// final class car{
//     public function carr()
//     {
//         echo "Inside carr function<br>";
//     }
// }
// This will throw an error as before class car final keyword is used which prevents method overrifing and inheritence
// class BMW extends car{
//     public function brand()
//     {
//         echo "Inside brand function<br>";
//     }
// }
// $obj = new BMW();

//Constructor

// class Employee{
//     public $name;
//     public $number;

//     public function __construct($name)
//     {
//         $this->name = $name;
//     }

//     public function get_name()
//     {
//         echo $this->name;
//     }
// }
// $obj = new Employee("Faizan");
// $obj->get_name();

//Destructor

// class Employee{
//     public $name;

//     function __construct($name)
//     {
//         $this->name = $name;
//     }

//     function __destruct()
//     {
//         echo "The name of an employee is {$this->name}";
//     }
// }
// $obj = new Employee("Faizan");

// Access Identifier

// class parent_class{
//     private $secret = "This is parent secret and can only be accessed by parent class";
//     protected $promsg = "This message is protected under parent class <br>";

//     public function func1()
//     {
//         echo "Public function under parent class which can be accessed from anywehere<br>";
//         echo $this->secret;
//     }
// }

// class child_class extends parent_class{
//     private $secret1 = "This is childs secret and cannot be accessed from outside the class<br>";
//     protected $pro = "Protected message under child class<br>";

//     public function func2()
//     {
//         echo "This is public message under child class and can be accessed from anywhere<br>";
//         echo $this->pro;
//         echo $this->promsg;
//         echo $this->secret1;
//     }
// }
// $obj = new child_class();
// $obj->func2();
// $obj->func1();
// Interfaces

// interface one{
//     function add($a,$b);
//     function sub($a,$b);
// }

// interface two{
//     function mul($a,$b);
//     function div($a,$b);
// }

// class cal implements one,two{
//     public function add($a,$b)
//     {
//         return $a+$b;
//     }
//     public function sub($a,$b)
//     {
//         return $a-$b;
//     }
//     public function mul($a,$b)
//     {
//         return $a*$b;
//     }
//     public function div($a,$b)
//     {
//         return $a/$b;
//     }
// }

// $obj = new cal();
// print_r ($obj->add(2,3));
// print_r ($obj->sub(10,5));
// print_r ($obj->mul(3,4));
// print_r ($obj->div(9,3));

// abstract class bike{
//     public $name;
//     public function __construct($name)
//     {
//         $this->name = $name;
//     }
//     abstract public function intro();
// }

// class yamaha extends bike{
//     public function intro()
//     {
//         echo "My name is {$this->name}<br>";
//     }
// }

// class splendor extends bike{
//     public function intro()
//     {
//         echo "My name is {$this->name}<br>";
//     }
// }

// class hero extends bike{
//     public function intro()
//     {
//         echo "My name is {$this->name}<br>";
//     }
// }

// $obj = new yamaha("Yamaha");
// $obj->intro();

// $obj1 = new splendor("Splendor");
// $obj1->intro();

// $obj2 = new hero("Hero");
// $obj2->intro();

//Class Constant
// class employee{
//     const msg = "This message is constant";
//     public $name;
//     public function __construct($name)
//     {
//         $this->name = $name;
//     }
//     public function get_name()
//     {
//         echo $this->name."<br>";
//         echo self::msg;
//     }
// } 

// echo employee::msg;
// echo "<br>";
// $obj = new employee("Faizan");
// $obj->get_name();

// Traits

// trait msg{
//     public function message()
//     {
//         echo "This message is from msg class<br>";
//     }
// }

// class msg1{
//     use msg;
//     public function message1()
//     {
//         echo "This message is from msg1 class<br>";
//     }
// }

// class msg2
// {
//     use msg;
//     public function message2()
//     {
//         echo "This message is from msg2 class<br>";
//     }
// }

// $obj = new msg1();
// $obj->message();
// $obj->message1();
// $obj1 = new msg2();
// $obj1->message();
// $obj1->message2();

// Static Method
// class Greetings{
//     public static function Greet()
//     {
//         echo "Hello from Faizan";
//     }
// }

// Greetings::Greet();

// class maths{
//     public static $pi = 3.14;
//     public function to_self()
//     {
//         echo self::$pi;
//         echo "<br>";
//     }
// }

// $obj = new maths();
// echo $obj->to_self();
// echo maths::$pi;

// class pi {
//   public static $value=3.14;
// }
// class x extends pi {
//   public function xStatic() {
//     return parent::$value;
//   }
// }
// Get value of static property directly via child class
// echo x::$value;

//SUPERGLOBALS
//GLOBALS
// $x = 5;
// $y = 10;

// function add()
// {
//     $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
// }

// add();
// echo "Sum of two global variables is = " .$z;

// echo $_SERVER['SERVER_SIGNATURE'];
// echo $_SERVER['SCRIPT_NAME'];
// echo $_SERVER['PATH_TRANSLATED'];
// echo $_SERVER['SERVER_ADMIN'];
// echo $_SERVER['REMOTE_HOST'];

// echo $_SERVER['PHP_SELF'] . '<br>';
// echo $_SERVER['DOCUMENT_ROOT'] . '<br>';
// echo $_SERVER['SERVER_ADDR'] . '<br>';
// echo $_SERVER['SERVER_NAME'] . '<br>';
// echo $_SERVER['REQUEST_METHOD'] . '<br>';
// echo $_SERVER['REQUEST_TIME'] . '<br>';
// echo $_SERVER['HTTP_USER_AGENT'] . '<br>';
// echo $_SERVER['REMOTE_ADDR'];

// Request in PHP
// if($_SERVER['REQUEST_METHOD'] == 'POST')
// {
//     $name = $_REQUEST['name'];
//     if(empty($name))
//     {
//         echo "Please enter your name first";
//     }
//     else{
//         echo "Your name is ".$name;
//     }
// }

//POST mathod in php
// if($_SERVER['REQUEST_METHOD'] == 'POST')
// {
//     $name = $_POST["name"];
//     $email = $_POST["email"];

//     if(empty($name) and empty($email))
//     {
//         echo "Please input all the details <br>";
//     }
//     else{
//         echo "Your name is ".$name."<br>";
//         echo "Your email is ".$email."<br>";
//     }
// }

//Get MEthod in php
// if($_SERVER['REQUEST_METHOD'] == 'GET');
// {
//     $firstName = $_GET['f_name'];
//     $lastName = $_GET['l_name'];
//     echo "Your complete name is ".$firstName." ".$lastName; 
//  }

// Cookie
// setcookie("user", "John", time() + 4, "/");
// if(isset($_COOKIE['user'])) {
    // Retrieve the value of the "user" cookie
//     $username = $_COOKIE['user'];
//     echo "Welcome back, $username!";
// } else {
//     echo "Cookie expired";
// }

// echo "Welcome to the world of cookies";
// setcookie("category","films",time() + 86400,"/");


phpinfo();
// echo exec('whoami'); 

?>