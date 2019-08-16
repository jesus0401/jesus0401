<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from netbaseteam.com/wordpress/html/elegan/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 May 2019 00:29:43 GMT -->
<head>
    <meta charset="UTF-8">
    <title>Jewelry - Checkout Page</title>
    <link href="favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=3.0, user-scalable=yes" />
    <meta name="description" content="Jewelry HTML Template">
    <meta name="author" content="Netbase">
    <link rel="stylesheet" href="assets/css/fontello.css">
    <link rel="stylesheet" href="assets/css/select2.min.css">
    <link rel="stylesheet" href="assets/css/jquery.fancybox.css">
    <link rel="stylesheet" href="assets/css/style.min.css">
</head>

<body class="checkout-page">
    <!--Header: Begin-->
    <!--Header: End-->
    <!-- Main Page: Begin -->
    <main>
        <div class="breadcrumb-wrap clear">
            <div class="container">
                <h2 class="page-title">checkout</h2>
                <p class="breadcrumb">
                    <span>You are here:</span><span>Home /</span><span>Checkout</span>
                </p>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="top-banner-wrap clear">
                    <div class="top-banner">
                        <p>Check out our lastest deals and start saving</p>
                        <p><span>get started</span><i class="icon-play-circled-1"></i></p>
                    </div>
                </div>
                <div class="page-info-wrap clear">
                    <div class="page-info icon-bell">
                        <span>Returning customer?</span>
                        <a href="#">Click here to login</a>
                    </div>
                    <div class="hidden-form">
                        <p>If you have shopped with us before, please enter your details in the boxes below. If you are a new customer, please proceed to the Billing &amp; Shipping section.</p>
                        <form>
                            <div class="form-group">
                                <label for="cl-email">Username of email<i class="icon-star-1"></i></label>
                                <input type="email" class="form-control" id="cl-email">
                            </div>
                            <div class="form-group">
                                <label for="cl-pwd">Password<i class="icon-star-1"></i></label>
                                <input type="password" class="form-control" id="cl-pwd">
                            </div>
                            <button type="submit" class="btn btn-default">Login</button>
                            <div class="checkbox">
                                <label><input type="checkbox">Remember me</label>
                            </div>
                        </form>
                        <a href="register.html" class="pw-rs">Lost your password?</a>
                    </div>
                </div>
                <div class="page-info-wrap clear">
                    <div class="page-info icon-bell">
                        <span>Have a coupon?</span>
                        <a href="#">Click here to enter your code</a>
                    </div>
                    <div class="hidden-form">
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control" id="cl-coupon" placeholder="Coupon code">
                            </div>
                            <button type="submit" class="btn btn-default">apply coupon</button>
                        </form>
                    </div>
                </div>
                <form id="checkout-form" class="clear">
                    <div class="checkout-left-section">
                        <div class="checkout-top-section clear form-group">
                            <h3 class="section-title">billing details</h3>
                            <div class="form-wrap clear">
                                <div class="half-row">
                                    <label for="checkout-form-fn">first name<i class="icon-star-1"></i></label>
                                    <input type="text" name="first-name" class="form-control" id="checkout-form-fn">
                                </div>
                                <div class="half-row">
                                    <label for="checkout-form-ln">last name<i class="icon-star-1"></i></label>
                                    <input type="text" name="last-name" class="form-control" id="checkout-form-ln">
                                </div>
                                <div class="full-row">
                                    <label for="checkout-form-company">company name</label>
                                    <input type="text" name="company" class="form-control" id="checkout-form-company">
                                </div>
                                <div class="half-row">
                                    <label for="checkout-form-email">email address<i class="icon-star-1"></i></label>
                                    <input type="text" name="email" class="form-control" id="checkout-form-email">
                                </div>
                                <div class="half-row">
                                    <label for="checkout-form-phone">phone<i class="icon-star-1"></i></label>
                                    <input type="text" name="phone" class="form-control" id="checkout-form-phone">
                                </div>
                                <div class="full-row">
                                    <label for="checkout-form-country">country<i class="icon-star-1"></i></label>
                                    <select name="country" id="country-select" class="form-control" id="checkout-form-country">
                                        <option value="US">United State</option>
                                        <option value="UK">United Kingdom</option>
                                        <option value="BR">Brazil</option>
                                        <option value="GR">Greece</option>
                                        <option value="HK">Hong Kong</option>
                                    </select>
                                </div>
                                <div class="full-row">
                                    <label for="checkout-form-address">address<i class="icon-star-1"></i></label>
                                    <input type="text" name="address" class="form-control" id="checkout-form-address">
                                </div>
                                <div class="half-row">
                                    <label for="checkout-form-zip">postcode/zip</label>
                                    <input type="text" name="zip" class="form-control" id="checkout-form-zip">
                                </div>
                                <div class="half-row">
                                    <label for="checkout-form-city">town/city<i class="icon-star-1"></i></label>
                                    <input type="text" name="city" class="form-control" id="checkout-form-city">
                                </div>
                                <div class="full-row" id="create-acc-wrap">
                                    <input type="checkbox" value="" name="create-acc" id="checkout-form-create-acc"><label for="checkout-form-create-acc">Create an account?</label>
                                </div>
                                <div class="full-row acc-hidden">
                                    <p>Create an account by entering the information below. If you are a returning customer please login at the top of the page.</p>
                                    <label for="checkout-form-acc-pw">account password</label>
                                    <input type="password" name="acc-pw" class="form-control" id="checkout-form-acc-pw">
                                </div>
                            </div>
                        </div>
                        <div class="checkout-bot-section clear form-group">
                            <h3 class="section-title">additional information</h3>
                            <div class="form-wrap clear">
                                <div class="full-row">
                                    <label for="checkout-form-order-notes">order notes</label>
                                    <textarea id="checkout-form-order-notes" class="form-control" rows="5" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="checkout-right-section">
                        <h3 class="section-title">your order</h3>
                        <table class="checkout-table table" id="checkout-stack-table">
                            <thead>
                                <tr>
                                    <th>product</th>
                                    <th>total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <span class="pd-name">ring diamond white</span>
                                        <i class="icon-cancel"></i>
                                        <span class="pd-qty">1</span>
                                    </td>
                                    <td>$12.00</td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="pd-name">earring roll jewelry</span>
                                        <i class="icon-cancel"></i>
                                        <span class="pd-qty">1</span>
                                    </td>
                                    <td>$27.00</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>subtotal</th>
                                    <td class="sub-total">
                                        <span>$39.00</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>total</th>
                                    <td class="total">
                                        <span>$39.00</span>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                        <div class="payment">
                            <ul class="payment-methods">
                                <li class="payment-method">
                                    <div class="radio">
                                        <label><input type="radio" name="optradio" checked="checked" class="rd-btt">direct bank transfer</label>
                                    </div>
                                    <div class="payment-box">
                                        <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                    </div>
                                </li>
                                <li class="payment-method">
                                    <div class="radio">
                                        <label><input type="radio" name="optradio" class="rd-btt">cheque payment</label>
                                    </div>
                                    <div class="payment-box">
                                        <p>Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                    </div>
                                </li>
                                <li class="payment-method">
                                    <div class="radio">
                                        <label><input type="radio" name="optradio" class="rd-btt" id="rd1">cash on delivery</label>
                                    </div>
                                    <div class="payment-box">
                                        <p>Pay with cash upon delivery.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <input type="submit" id="place_order" value="Place order" data-value="Place order">
                    </div>
                </form>
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


<!-- Mirrored from netbaseteam.com/wordpress/html/elegan/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 May 2019 00:29:44 GMT -->
</html>