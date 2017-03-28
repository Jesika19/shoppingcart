 class Cart {
  protected $products = [];    
  protected $quantity;
  protected $voucher;
  protected $total;   
  protected $subTotal;

  
  //Constructor
  function __construct($products = [],$quantity = 0,$voucher = 0,$total = 0,$subTotal = 0){     
    $this->products = $products;
    $this->quantity = $quantity;  
    $this->voucher = $voucher;   
    $this->total = $total;    
    $this->subTotal = $subTotal;  
  }
  
  
  
  //Get
  public function getProducts(){
    return $this->products;
  }
  public function getQuantity(){
    return $this->quantity;
  }
  public function getVoucher(){
    return $this->voucher;
  }
  public function getTotal(){
    return $this->total;
  }
  public function getSubTotal(){  
    return $this->subTotal;
  }
  //Add Product
  public function addProduct(Product $product,$quantity){ 
    $productRef = $product->getProductRef();
    $this->products[$productRef] = ["quantity" => $quantity, "item" => $product];  
  }
  //Remove Product
  public function removeProduct(Product $product){
    $productRef = $product->getProductRef();   
    if (isset($this->products[$productRef])){
        unset($this->products[$productRef]);               
    }    
  }
  
  //Update product
  public function updateProduct(Product $product,$quantity){
    $productRef = $product->getProductRef();   
    if (($quantity > 0) && ($quantity != $this->products[$productRef]['quantity'])) {
        $this->products[$productRef]['quantity'] = $quantity;
    }
    else {
        $this->removeProduct($product);
    }
  }
     
  //Calculate total 
  public function calculateTotal(Product $product){
    $price = $product->getPrice();
    $productRef = $this->product->getProductRef();    
    foreach($this->products as $product){          
      if (array_key_exists('quantity',$product)) {
        if ($productRef = $this->products[$productRef]){
          $quantity = $product['quantity'];
          $this->total = $price * $quantity;
        }     
      //}
    } 
     
  }

  //Calculate SubTotal  
  /*public  function calculateSubTotal(Product $product,$voucher){

    $price = $product->getPrice();
    $productRef = $product->getProductRef();  
    foreach($this->products as $product){          
      if (array_key_exists('quantity',$product)) {
        if ($productRef = $this->products[$productRef]){
             $quantity = $product['quantity'];         
             $this->subTotal = ($price * $quantity) * ((100-$voucher)/100);    
        }
            
      }
    }    
  
  }*/
   
  
 


}