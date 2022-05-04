<?php
include("includes/header.php")
?> 
	<div class="page checkout">
		<div class="header">
			<h1>Checkout</h1>
			<span>You're almost done</span>
		</div> <!-- header -->
		<div class="content">
			<form action="" method="">
				<div class="cluster">
					<div class="block a">
						<h2>Billing Details</h2>
						<div class="section">
							<div class="row">
								<input type="text" placeholder="First Name">
							</div>
							<div class="row">
								<input type="text" placeholder="Last Name">
							</div>
							<div class="row">
								<input type="text" placeholder="Address">
							</div>
							<div class="row">
								<input type="text" placeholder="City">
							</div>
							<div class="row">
								<input type="text" placeholder="Province">
							</div>
							<div class="row">
								<input type="text" placeholder="Postal Code">
							</div>
							<div class="row">
								<input type="text" placeholder="Country">
							</div>
							<div class="row">
								<input type="text" placeholder="Phone">
							</div>
							<div class="row">
								<input type="text" placeholder="Email">
							</div>
						</div> <!-- form -->
					</div> <!-- block a -->
					<div class="block b">
						<h2>Shipping Details</h2>
						<div class="container">
							<label>
								<span class="label">Shipping same as billing?</span>
								<input type="checkbox" checked="checked">
								<span class="checkmark"></span>
							</label> 
						</div> <!-- container -->
						<div class="section">
						<div class="row">
								<input type="text" placeholder="First Name">
							</div>
							<div class="row">
								<input type="text" placeholder="Last Name">
							</div>
							<div class="row">
								<input type="text" placeholder="Address">
							</div>
							<div class="row">
								<input type="text" placeholder="City">
							</div>
							<div class="row">
								<input type="text" placeholder="Province">
							</div>
							<div class="row">
								<input type="text" placeholder="Postal Code">
							</div>
							<div class="row">
								<input type="text" placeholder="Country">
							</div>
						</div> <!-- form -->
					</div> <!-- block b -->
				</div>
				<div class="block c">
					<h2>Order Review</h2>
					<div class="products">
						<div class="product">
							<div class="details">
								<span>Strolling Along Bernard Limited Edition 3D Textured Replica</span>
								<span>16 x 12 "</span>
								<span>Canvas Print, Rolled</span>
							</div> <!-- details -->
							<span>1</span>
							<span>$1,310 CAD</span>
						</div>
					</div> <!-- products -->
					<hr class="dotted">
					<div class="totals">
						<div class="row">
							<span>Subtotal</span>
							<span>$5,880.00</spa>
						</div>
						<div class="row">
							<span>Shipping</span>
							<span>$100.00</spa>
						</div>
						<div class="row">
							<span>Tax</span>
							<span>$320.00</spa>
						</div>
						<div class="row">
							<span>Total</span>
							<span>$5,980.00</spa>
						</div>
					</div> <!-- totals -->
				</div> <!-- block c -->
				<div class="block d">
					<h2>Payment</h2>
					<div class="section">
						<div class="row">
							<input type="text" placeholder="Name on Card">
						</div>
						<div class="row">
							<input type="text" placeholder="Card Number">
						</div>
						<div class="cluster">
							<div class="row">
								<input type="text" placeholder="Expiration Date">
							</div>
							<div class="row">
								<input type="text" placeholder="CCV/CVC">
							</div>
						</div> <!-- cluster -->
					</div> <!-- section -->
					<div class="handle">
						<input class="submit-btn" type="submit" value="Place Order">
					</div> <!-- handle -->
				</div> <!-- block d -->
			</form> <!-- form -->
		</div> <!-- content -->
	</div> <!-- checkout-->
<?php
include("includes/footer.php")
?> 