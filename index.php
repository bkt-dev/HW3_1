<?php
require(src/‘functions.php’);

for ($i=1; $i <= 50; $i++) {
    $user[] = alluser();
}

file_put_contents('user.json', json_encode($user));

$data = file_get_contents('user.json');
$jsonUsers = json_decode($data, true);

$names = [];
$sumage = 0;
foreach ($jsonUsers as $user){
    if (isset($names[$user['name']])) {
        $names[$user['user']]++;
    } else {
        $names[user['name']] = 1;

    }
    $sumage += $user['age'];
}

echo "Средний возраст " . ($sumage / sizeof($jsonUsers));