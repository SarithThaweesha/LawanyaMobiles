
   <?php

function component($productname,$productprice,$productimg,$productid,$productbrand,$qty){
	$element="
	<div class=\"col-md-3 col-sm-6 my-3 my-md-0\">
			<form action=\"phone.php\" method=\"post\">
		     <div class=\"card border-secondary mb-3\">
				 <div>
				 <img src=\"$productimg\" alt=\"image1\" class=\"img-fluid card-img-top h-25\"> 
					 </div>
				
				<div class=\"card-body\">
				<h5 class=\"card-title\">$productbrand</h5>
					<h6>
						<i class=\"fas fa-star\"></i>
						<i class=\"fas fa-star\"></i>
						<i class=\"fas fa-star\"></i>
						<i class=\"fas fa-star\"></i>
					</h6>
					<p class=\"card-text\">
					$productname 
					</p>
					<h5>
						
						<span class=\"price\">Rs.$productprice</span>
					</h5>
					<button type=\"submit\" class=\" btn-warning my-3\" name=\"Add\"> Add to cart <i class=\"fas fa-shopping-cart\"></i></button>($qty)
					<input type='hidden' name='product_id' value='$productid'>
				</div>
				</div>
			</form>
			</div>
	";
	echo $element;
}

function cartElement($productimg,$productname,$productprice,$productid){
	$element= "
	<form action=\"cart.php?action=remove&id=$productid\" method=\"post\" class=\"cart-items\">
			  <div class=\"border rounded\">
				  <div class=\"row bg-white\">
				     <div class=\"col-md-3 pl-0\">
						 
						 <img src=$productimg alt=\"image1\" class=\"img-fluid\">
				     </div>
					  <div class=\"col-md-6\">
					  <h5 class=\"pt-2\">$productname</h5>
						  <small class=\"text-secondary\">Seller:Lawanya Mobiles</small>
						  <h5 class=\"pt-2\">Rs.$productprice</h5>
						  <button type=\"submit\" class=\" btn-warning\">Save for later</button>
						  <button type=\"submit\" class=\" btn-danger mx-2\" name=\"remove\">Remove</button>
					  </div>
					  <div class=\"col-md-3 py-5\">
					  <button type=\"button\" class=\" bg-light-border rounded circle\"><i class=\"fas fa-minus\"></i> </button>
						  <input type=\"text\" value=\"1\" class=\"form-control w-25 d-inline\">
					<button type=\"button\" class=\" bg-light-border rounded circle\"><i class=\"fas fa-plus\"></i> </button>
					  </div>
				  </div>
			  </div>
			  
			  </form>
	";
	echo $element;
}

function component2($productname,$productprice,$productimg,$productid,$productbrand,$qty){
	$element="
	<div class=\"col-md-3 col-sm-6 my-3 my-md-0\">
			<form action=\"accesories.php\" method=\"post\">
		     <div class=\"card border-secondary mb-3\">
				 <div>
				 <img src=\"$productimg\" alt=\"image1\"  class=\"img-fluid card-img-top h-25\"> 
					 </div>
				
				<div class=\"card-body\">
				<h5 class=\"card-title\">$productbrand</h5>
					<h6>
						<i class=\"fas fa-star\"></i>
						<i class=\"fas fa-star\"></i>
						<i class=\"fas fa-star\"></i>
						<i class=\"fas fa-star\"></i>
					</h6>
					<p class=\"card-text\">
					$productname
					</p>
					<h5>
						
						<span class=\"price\">Rs.$productprice</span>
					</h5>
					<button type=\"submit\" class=\" btn-warning my-3\" name=\"Add\"> Add to cart <i class=\"fas fa-shopping-cart\"></i></button>($qty)
					<input type='hidden' name='product_id' value='$productid'>
				</div>
				</div>
			</form>
			</div>
	";
	echo $element;
}
function cartElement2($productimg,$productname,$productprice,$productid){
	$element= "
	<form action=\"cart.php?action=remove&id=$productid\" method=\"post\" class=\"cart-items\">
			  <div class=\"border rounded\">
				  <div class=\"row bg-white\">
				     <div class=\"col-md-3 pl-0\">
						 
						 <img src=$productimg alt=\"image1\" class=\"img-fluid\">
				     </div>
					  <div class=\"col-md-6\">
					  <h5 class=\"pt-2\">$productname</h5>
						  <small class=\"text-secondary\">Seller:ICBT</small>
						  <h5 class=\"pt-2\">$$productprice</h5>
						  <button type=\"submit\" class=\" btn-warning\">Save for later</button>
						  <button type=\"submit\" class=\" btn-danger mx-2\" name=\"remove\">Remove</button>
					  </div>
					  <div class=\"col-md-3 py-5\">
					  <button type=\"button\" class=\" bg-light-border rounded circle\"><i class=\"fas fa-minus\"></i> </button>
						  <input type=\"text\" value=\"1\" class=\"form-control w-25 d-inline\">
					<button type=\"button\" class=\" bg-light-border rounded circle\"><i class=\"fas fa-plus\"></i> </button>
					  </div>
				  </div>
			  </div>
			  
			  </form>
	";
	echo $element;
}
function component3($productname,$productprice,$productimg,$productid,$productbrand,$qty){
	$element="
	<div class=\"col-md-3 col-sm-6 my-3 my-md-0\">
			<form action=\"headphones.php\" method=\"post\">
		     <div class=\"card border-secondary mb-3\">
				 <div>
				 <img src=\"$productimg\" alt=\"image1\"  class=\"img-fluid card-img-top h-25\"> 
					 </div>
				
				<div class=\"card-body\">
				<h5 class=\"card-title\">$productbrand</h5>
					<h6>
						<i class=\"fas fa-star\"></i>
						<i class=\"fas fa-star\"></i>
						<i class=\"fas fa-star\"></i>
						<i class=\"fas fa-star\"></i>
					</h6>
					<p class=\"card-text\">
					$productname
					</p>
					<h5>
						
						<span class=\"price\">Rs.$productprice</span>
					</h5>
					<button type=\"submit\" class=\" btn-warning my-3\" name=\"Add\"> Add to cart <i class=\"fas fa-shopping-cart\"></i></button>($qty)
					<input type='hidden' name='product_id' value='$productid'>
				</div>
				</div>
			</form>
			</div>
	";
	echo $element;
}
function component4($productname,$productprice,$productimg,$productid,$productbrand,$qty){
	$element="
	<div class=\"col-md-3 col-sm-6 my-3 my-md-0\">
			<form action=\"ipads.php\" method=\"post\">
		     <div class=\"card border-secondary mb-3\">
				 <div>
				 <img src=\"$productimg\" alt=\"image1\"  class=\"img-fluid card-img-top\"> 
					 </div>
				
				<div class=\"card-body\">
				<h5 class=\"card-title\">$productbrand</h5>
					<h6>
						<i class=\"fas fa-star\"></i>
						<i class=\"fas fa-star\"></i>
						<i class=\"fas fa-star\"></i>
						<i class=\"fas fa-star\"></i>
					</h6>
					<p class=\"card-text\">
					$productname
					</p>
					<h5>
						
						<span class=\"price\">Rs.$productprice</span>
					</h5>
					<button type=\"submit\" class=\" btn-warning my-3\" name=\"Add\"> Add to cart <i class=\"fas fa-shopping-cart\"></i></button>($qty)
					<input type='hidden' name='product_id' value='$productid'>
				</div>
				</div>
			</form>
			</div>
	";
	echo $element;
}
function component5($productname,$productprice,$productimg,$productid,$productbrand,$qty){
	$element="
	<div class=\"col-md-3 col-sm-6 my-3 my-md-0\">
			<form action=\"smartwatch.php\" method=\"post\">
		     <div class=\"card border-secondary mb-3\">
				 <div>
				 <img src=\"$productimg\" alt=\"image1\"  class=\"img-fluid card-img-top\"> 
					 </div>
				
				<div class=\"card-body\">
				<h5 class=\"card-title\">$productbrand</h5>
					<h6>
						<i class=\"fas fa-star\"></i>
						<i class=\"fas fa-star\"></i>
						<i class=\"fas fa-star\"></i>
						<i class=\"fas fa-star\"></i>
					</h6>
					<p class=\"card-text\">
					$productname
					</p>
					<h5>
						
						<span class=\"price\">Rs.$productprice</span>
					</h5>
					<button type=\"submit\" class=\" btn-warning my-3\" name=\"Add\"> Add to cart <i class=\"fas fa-shopping-cart\"></i></button>($qty)
					<input type='hidden' name='product_id' value='$productid'>
				</div>
				</div>
			</form>
			</div>
	";
	echo $element;
}

function component6($productname,$productprice,$productimg,$productid,$productbrand,$qty){
	$element="
	<div class=\"col-md-3 col-sm-6 my-3 my-md-0\">
			<form action=\"powerbanks.php\" method=\"post\">
		     <div class=\"card border-secondary mb-3\">
				 <div>
				 <img src=\"$productimg\" alt=\"image1\"  class=\"img-fluid card-img-top\"> 
					 </div>
				
				<div class=\"card-body\">
				<h5 class=\"card-title\">$productbrand</h5>
					<h6>
						<i class=\"fas fa-star\"></i>
						<i class=\"fas fa-star\"></i>
						<i class=\"fas fa-star\"></i>
						<i class=\"fas fa-star\"></i>
					</h6>
					<p class=\"card-text\">
					$productname
					</p>
					<h5>
						
						<span class=\"price\">Rs.$productprice</span>
					</h5>
					<button type=\"submit\" class=\" btn-warning my-3\" name=\"Add\"> Add to cart <i class=\"fas fa-shopping-cart\"></i></button>($qty)
					<input type='hidden' name='product_id' value='$productid'>
				</div>
				</div>
			</form>
			</div>
	";
	echo $element;
}

function cartElement3($productimg,$productname,$productprice,$productid){
	$element= "
	<form action=\"cart.php?action=remove&id=$productid\" method=\"post\" class=\"cart-items\">
			  <div class=\"border rounded\">
				  <div class=\"row bg-white\">
				     <div class=\"col-md-3 pl-0\">
						 
						 <img src=$productimg alt=\"image1\" class=\"img-fluid\">
				     </div>
					  <div class=\"col-md-6\">
					  <h5 class=\"pt-2\">$productname</h5>
						  <small class=\"text-secondary\">Seller:ICBT</small>
						  <h5 class=\"pt-2\">$$productprice</h5>
						  <button type=\"submit\" class=\" btn-warning\">Save for later</button>
						  <button type=\"submit\" class=\" btn-danger mx-2\" name=\"remove\">Remove</button>
					  </div>
					  <div class=\"col-md-3 py-5\">
					  <button type=\"button\" class=\" bg-light-border rounded circle\"><i class=\"fas fa-minus\"></i> </button>
						  <input type=\"text\" value=\"1\" class=\"form-control w-25 d-inline\">
					<button type=\"button\" class=\" bg-light-border rounded circle\"><i class=\"fas fa-plus\"></i> </button>
					  </div>
				  </div>
			  </div>
			  
			  </form>
	";
	echo $element;
}









