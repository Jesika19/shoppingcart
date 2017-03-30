 public function calculateTotal(Product $product){    
    $price = $product->getPrice();     
      
    foreach($this->products as $key => $value){ 
      foreach($value as $k => $v){       
        $quantity =  $this->products[$productRef][$product]['quantity']; 
        $this->total = $price * $quantity;        
      } 
    }  

  }

  //$this->total[$productRef]= $price * $quantity;
   //Calculate subtotal
//  public  function calculateSubTotal(Product $product,$voucher){
//     $quantity = $product->getQuantity();
//     // $price = $product->getPrice(); 
//     $this->total = ($quantity * $price);     
//     $subTotal = ($this->total *(100-$voucher)/100);    
//   }
  
// }