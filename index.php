<?php
    echo '
    <h1>
        PHP Course
    </h1>';
    // exit();
    // print '<h3>Testing</h3>';

    // var_dump('Testing');
    $var = 'Testing with php course';
    $var2 = explode(' ', $var);
    $var3 = implode(', ', $var2); 
    $var4 = json_encode($var2);
    $var5 = json_decode($var4);
    $var6 = array_reverse($var2);
    // var_dump($var6);
    $var7 = str_replace('php', 'PHP', $var);
    // var_dump($var7);
    // var_dump($var5);
    $var8 = array_push($var2, 'PHP');
    var_dump($var2);

    $var9 = 10;
    if($var9 == 0){
        echo '<h3>' . $var9 . ' is Nutral value means it is Zero.</h3>';
    } else if($var9 % 2 == 0) {
        echo '<h3>' . $var9 . ' is Even</h3>';
    } else {
        echo '<h3>'. $var9 .' is Odd</h3>';
    }

    $varArray = array("Hello", "World", "PHP", "Course");
    $varArray2 = ["Hello", "World", "PHP", "Course"];
    $varArray3 = array('name' => 'John', 'age' => '23');
    $varArray4 = ['name' => 'John', 'age' => '23', 'city' => 'London'];

    var_dump($varArray, $varArray2, $varArray3, $varArray4);

    for ($i=0; $i < count($varArray) ; ++$i) { 
        $sr = $i + 1;
        echo '<h3>'. $sr .' = ' . $varArray[$i] . '</h3>';
    }
    
    foreach ($varArray4 as $key => $value) {
        echo '<h3>'. $key .' = ' . $value . '</h3>';
    }

    date_default_timezone_set('Australia/Sydney');
    $var10 = date('H:i:s');
    var_dump($var10);
?>