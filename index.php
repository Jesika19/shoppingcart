<?php 

//Add classes
include 'Cart.php';
include 'Product.php';
include 'Clothing.php';
include 'Food.php';

$cartOne = new Cart();
$productOne = new Product();

/*Food*/
$foodItemOne = new Food("F1","Food","Wine","red",12,"12/01/20");
$foodItemTwo = new Food("F2","Food","Juice","red",10,"12/01/18");

// /*Food Item One*/
// echo "Product Ref:"."".$foodItemOne->getProductRef().PHP_EOL;

// echo "Product Category:"."".$foodItemOne->getProductCategory().PHP_EOL;

// echo "Name:"."".$foodItemOne->getName().PHP_EOL;

// echo "Description:"."".$foodItemOne->getDescription().PHP_EOL;

// echo "Price:$"."".$foodItemOne->getPrice().PHP_EOL;

// echo "Expiring Date:"."".$foodItemOne->getExpiringDate().PHP_EOL; 

// /*Food Item Two*/
// echo "Product Ref:"."".$foodItemTwo->getProductRef().PHP_EOL;

// echo "Product Category:"."".$foodItemTwo->getProductCategory().PHP_EOL;

// echo "Name:"."".$foodItemTwo->getName().PHP_EOL;

// echo "Description:"."".$foodItemTwo->getDescription().PHP_EOL;

// echo "Price:$"."".$foodItemTwo->getPrice().PHP_EOL;

// echo "Expiring Date:"."".$foodItemTwo->getExpiringDate().PHP_EOL;

/*Add,Update and Remove products */
$cartOne->addProduct($foodItemOne,6);
$cartOne->addProduct($foodItemTwo,4);

$cartOne->updateProduct($foodItemOne,2);

$cartOne->calculateTotal($foodItemOne);
//$cartOne->calculateTotal($foodItemTwo);

//$cartOne->removeProduct($foodItemTwo);
//($cartOne->calculateSubTotal($foodItemOne,10))+($cartOne->calculateSubTotal($foodItemTwo,10));
//$cartOne->calculateSubTotal($foodItemOne,10);

//var_dump($cartOne->calculateSubTotal($foodItemOne,10));

$products = $cartOne->getProducts();
$totals = $cartOne->getTotal();



//$subTotals = $cartOne->getSubTotal();

print_r($products);
echo PHP_EOL;
print_r($totals);
echo PHP_EOL;

//print_r($subTotals);


exit;

/*Add,Update and Remove products */
//var_Dump($cartOne->addProduct($foodItemOne,6));

//var_Dump($cartOne->updateProduct($foodItemOne,6));

//var_Dump($cartOne->addProduct($foodItemTwo,4));

//var_Dump($cartOne->removeProduct($foodItemTwo));

//print_R($cartOne->addProduct($foodItemOne,5));

/*Total*/
// echo "Total 1 :$"."".($cartOne->calculateTotal($foodItemOne,6)).PHP_EOL;
// echo "Total 2 :$"."".($cartOne->calculateTotal($foodItemTwo,4)).PHP_EOL;

echo "Total 1 :$"."".($cartOne->calculateTotal($foodItemOne)).PHP_EOL;

echo "Total 2 :$"."".($cartOne->calculateTotal($foodItemTwo)).PHP_EOL;

/*Subtotal*/
//echo "Sub-Total:$"."".($cartOne->calculateSubTotal($foodItemOne,10)+ $cartOne->calculateSubTotal($foodItemTwo,10)).PHP_EOL;
//echo "Sub-Total:$"."".($cartOne->calculateSubTotal($foodItemOne,6,10)+ $cartOne->calculateSubTotal($foodItemTwo,4,10));
//echo "Sub-Total:$".($cartOne->calculateSubTotal($foodItemOne)).PHP_EOL;
echo "Sub-Total:$"."".($cartOne->calculateSubTotal($foodItemOne,10)+ $cartOne->calculateSubTotal($foodItemTwo,10)).PHP_EOL;
?>