<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from netbaseteam.com/wordpress/html/elegan/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 May 2019 00:29:41 GMT -->
<head>
    <meta charset="UTF-8">
    <title>Jewelry - Cart Page</title>
    <link href="favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=3.0, user-scalable=yes" />
    <meta name="description" content="Jewelry HTML Template">
    <meta name="author" content="Netbase">
    <link rel="stylesheet" href="assets/css/fontello.css">
    <link rel="stylesheet" href="assets/css/jquery.fancybox.css">
    <link rel="stylesheet" href="assets/css/stacktable.css">
    <link rel="stylesheet" href="assets/css/style.min.css">
</head>
<body class="cart-page">
    <!--Header: Begin-->

    <!--Header: End-->
    <!-- Main Page: Begin -->
    <main>
        <!-- Breadcrumb: Begin -->
        <div class="breadcrumb-wrap clear">
            <div class="container">
                <h2 class="page-title">Cart</h2>
                <p class="breadcrumb">
                    <span>You are here:</span><span>Home /</span><span>Cart</span>
                </p>
            </div>
        </div>
        <!-- Breadcrumb: End -->
        <div class="container">
            <div class="row">
                <div class="top-banner-wrap">
                    <div class="top-banner">
                        <p>Check out our lastest deals and start saving</p>
                        <p><span>get started</span><i class="icon-play-circled-1"></i></p>
                    </div>
                </div>
                <div class="cart-main-section">
                    <div class="cart-top-section">
                        <span>shopping cart</span>
                        <span>(2)</span>
                        <span><a href="category-grid.html">continue shopping</a><i class="icon-right-circled"></i></span>
                        <p>If you have any queries, our Customer Services team will be happy to help — just call +44 (0)845 260 3880</p>
                    </div>
                    <form id="cart-content" class="clear">
                        <table class="cart-table" id="cart-stack-table">
                            <thead>
                                <tr>
                                    <th>Products</th>
                                    <th>Price</th>
                                    <th>Qty</th>
                                    <th>Discount</th>
                                    <th>Move to wishlist</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="pd-meta" data-label="product">
                                        <div class="pd-thumb">
                                            <a href="product-details.html">
                                                <img src="assets/img/products/cate-1.jpg" alt="cart product">
                                            </a>
                                            <i class="icon-cancel"></i>
                                        </div>
                                        <div class="pd-details">
                                            <h2><a href="product-details.html">White Gold Ring</a></h2>
                                            <p>Size and Style:<span>2</span></p>
                                            <p>Quantity:<span>25</span></p>
                                            <p>Color:<span>4/0 - Color Front, No Back</span></p>
                                            <p>Ready to ship in:<span>3 business days</span></p>
                                        </div>
                                    </td>
                                    <td class="pd-price" data-label="price">
                                        <span>$44.00</span>
                                    </td>
                                    <td class="pd-qty" data-label="qty">
                                        <input type="number" value="1">
                                    </td>
                                    <td class="pd-discount" data-label="discount">
                                        <span>$00.00</span>
                                    </td>
                                    <td class="pd-wishlist">
                                        <i class="icon-check"></i>
                                    </td>
                                    <td class="pd-total" data-label="total">
                                        <span>$44.00</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pd-meta">
                                        <div class="pd-thumb">
                                            <a href="product-details.html">
                                                <img src="assets/img/products/cate-2.jpg" alt="cart product">
                                            </a>
                                            <i class="icon-cancel"></i>
                                        </div>
                                        <div class="pd-details">
                                            <h2><a href="product-details.html">Silver Gem Ring</a></h2>
                                            <p>Size and Style:<span>2</span></p>
                                            <p>Quantity:<span>25</span></p>
                                            <p>Color:<span>red</span></p>
                                            <p>Ready to ship in:<span>3 business days</span></p>
                                        </div>
                                    </td>
                                    <td class="pd-price">
                                        <span>$44.00</span>
                                    </td>
                                    <td class="pd-qty">
                                        <input type="number" value="1">
                                    </td>
                                    <td class="pd-discount">
                                        <span>$00.00</span>
                                    </td>
                                    <td class="pd-wishlist">
                                        <i class="icon-check"></i>
                                    </td>
                                    <td class="pd-total">
                                        <span>$44.00</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <button type="submit" class="button-ss">
						    <i class="icon-arrows-ccw"></i>update cart
						</button>
                    </form>
                    <div class="cart-bot-section">
                        <div class="row">
                            <div class="cart-column">
                                <h3 class="cart-column-headline">estimate shipping and tax</h3>
                                <p>Enter your destination to get a shipping estimate.</p>
                                <form id="quote-form">
                                    <p>
                                        <label for="cart-bot-form-country">country<span>&#42;</span></label>
                                        <select name="country" id="cart-bot-form-country">
											<option value="united states">united states</option>
											<option value="united states">united kingdom</option>
											<option value="united states">german</option>
											<option value="united states">turkish</option>
											<option value="united states">holland</option>
										</select>
                                    </p>
                                    <p>
                                        <label for="cart-bot-form-state">state/province</label>
                                        <select name="state" id="cart-bot-form-state">
											<option value="alabama">alabama</option>
											<option value="alaska">alaska</option>
											<option value="newyork">newyork</option>
											<option value="new mexico">new mexico</option>
											<option value="new jersey">new jersey</option>
										</select>
                                    </p>
                                    <p>
                                        <label for="cart-bot-form-zipcode">zip/portal code</label>
                                        <input type="text" name="zipcode" placeholder="zip/portal code" id="cart-bot-form-zipcode">
                                    </p>
                                    <button type="submit" class="button-ss">get quote</button>
                                </form>
                            </div>
                            <div class="cart-column" id="discount-column">
                                <h3 class="cart-column-headline">discount codes</h3>
                                <form id="coupon-form">
                                    <p>Do you have a promotional code</p>
                                    <input type="text" name="zipcode" value="">
                                    <button type="submit" class="button-ss">apply coupon</button>
                                </form>
                            </div>
                            <div class="cart-column" id="checkout-column">
                                <h3 class="cart-column-headline">Total</h3>
                                <p>Checkout with Multiple Addresses</p>
                                <p id="sub-total">
                                    <span>sub total</span>
                                    <span>$20.26</span>
                                </p>
                                <p id="grand-total">
                                    <span>grand total</span>
                                    <span>$20.26</span>
                                </p>
                                <p id="proceed-checkout"><a href="checkout.html">proceed checkout</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sp-sidebar">
                    <img src="assets/img/cart-sidebar.jpg" alt="Cart sidebar">
                </div>
            </div>
        </div>
    </main>
    <!-- Main Page: End -->
    <!-- Footer: Begin -->
    <!-- Footer: End -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>
    <script src="assets/js/modernizr.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/select2.min.js"></script>
    <script src="assets/js/stacktable.min.js"></script>
    <script src="assets/js/jquery.themepunch.revolution.min.js"></script>
    <script src="assets/js/jquery.themepunch.plugins.min.js"></script>
    <script src="assets/js/jquery.fancybox.pack8cbb.js?v=2.1.5" type="text/javascript"></script>
    <script src="assets/js/scripts.min.js"></script>
</body>


<!-- Mirrored from netbaseteam.com/wordpress/html/elegan/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 May 2019 00:29:41 GMT -->
</html>