<?php

require "../app/core/Database.php";
require "../app/models/BaseModel.php";

// تحميل أي موديل عايز تختبره
require "../app/models/User.php";
require "../app/models/Event.php";
require "../app/models/Plan.php";
// زوّد عليهم اللي تحبه…

echo "<h2>Testing Database Connection...</h2>";

try {
    $db = Database::connect();
    echo "DB Connected Successfully ✔<br><br>";
} catch (Exception $e) {
    echo "DB Connection FAILED ❌<br>";
    echo $e->getMessage();
    exit;
}

echo "<h2>Testing User::all()</h2>";
try {
    print_r(User::all());
} catch (Exception $e) {
    echo "User Model FAILED ❌<br>";
    echo $e->getMessage();
}

echo "<h2>Testing Event::all()</h2>";
try {
    print_r(Event::all());
} catch (Exception $e) {
    echo "Event Model FAILED ❌<br>";
    echo $e->getMessage();
}

echo "<h2>Testing Plan::all()</h2>";
try {
    print_r(Plan::all());
} catch (Exception $e) {
    echo "Plan Model FAILED ❌<br>";
    echo $e->getMessage();
}
