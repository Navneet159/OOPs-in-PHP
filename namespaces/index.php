<?php

// Example 1 =======================================

// include 'namespaces.php';

// $order->name="Suprimo 11";
// $order->type="Comfort plus";
// $order->units=5;


//Example 2 =========================================

// 1st way to use interface --------------------------


// include 'namespaces.php';

// $chair = new Furniture\Chair(); // class called here // using namespaces
// $chair->name="Suprimo 11";
// $chair->type="Comfort plus";
// $chair->units=5;

// $table = new Furniture\Table(); // class called here // using namespaces
// $table->units =15;



// 2nd way to use interface ----------------------------
// ** when many classe are called from same interface at same time

// namespace Furniture;

// include 'namespaces.php';

// $chair= new Chair();
// $chair->name="Suprimo 11";
// $chair->type="Comfort plus";
// $chair->units=5;


// $table = new Table();
// $table->units =15;





// 3rd way to use interface ----------------------------
// Namespace Alias

// A) Give a namespace an alias:

// include 'namespaces.php';

// use Furniture as Fur;

// $chair= new Fur\Chair(); // namespace an alias:

// $chair->name="Suprimo 11";
// $chair->type="Comfort plus";
// $chair->units=5;


// $table = new Fur\Table(); // namespace an alias:

// $table->units =15;



// B) Give a class an alias:

// include 'namespaces.php';

// use Furniture\Chair as C; // Class an alias:
// use Furniture\Table as T; // Class an alias:

// $chair= new C(); // using class as aias

// $chair->name="Suprimo 11";
// $chair->type="Comfort plus";
// $chair->units=5;

// $table = new T(); // // using class as aias

// $table->units =15;





?>



<html>
<body>


<?php

// part of example 1 --------------------------------
// $order->order();



// part of example 2,3,4,5--------------------------------
// $chair->order();
// $table->value();






?>

</body>
</html>