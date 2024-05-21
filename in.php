<?php
echo "this is my first php code";
print '<br>'; // using html break line

print "45644";

print 4 + 8;

print "8+6";

print '<br>';

print date('d');
print '<br>';

print date('Y');

date_default_timezone_set("Africa/Nairobi");

print date('H:i:s:u');

// Create (Declare) a PHP Variable
$fname = 'Grace Chelah';
print $fname;

$yob = 1999; // declaration of an integer
print $yob;

print '<br>'; // HTML Break Line Tag

$current_year = date('Y'); // Declaring the Current Year
print $current_year;

print '<br>';

// Using Subtraction Operator to find the user's age
$age = $current_year - $yob;
print $fname . " is " . $age . " years old."; // Added semicolon and fixed concatenation

print '<br>';

$user_dob = "$yob-05-24";
print $user_dob;

$birthday = new DateTime($user_dob);
$today = new DateTime('today');

$interval = $birthday->diff($today);

print '<br>';

print '<pre>';
print_r($interval);
print '</pre>';

print $fname . " is " . $interval->y . " years, " . 
$interval->m . " months, and " . $interval->d . " days old.";

print '<br>';

//The if/else statement
$adult_age = 18;

if($interval->y >=$adult_age){
    print $fname . " is an Adult"; //{} event in block will be executed if the condition is true
}
else{
    print $fname . "is NOT an Adult.";//{} event in vlock will be executed if the condition is false
}

print '<br>';

//Variable Characteristics
$lname = "Okama";
echo "My last name is $lname";

print '<br';


print '<br>';

$call["lname"] = "Chelah";
print $call["lname"];

define('LNAME', 'Chelah');
print LNAME;

?>
