<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from netbaseteam.com/wordpress/html/elegan/account.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 May 2019 00:29:46 GMT -->
<head>
    <meta charset="UTF-8">
    <title>Jewelry - Account Page</title>
    <link href="favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=3.0, user-scalable=yes" />
    <meta name="description" content="Jewelry HTML Template">
    <meta name="author" content="Netbase">
    <link rel="stylesheet" href="assets/css/fontello.css">
    <link rel="stylesheet" href="assets/css/jquery.fancybox.css">
    <link rel="stylesheet" href="assets/css/style.min.css">
</head>

<body class="account-page">
    <!--Header: Begin-->

    <!--Header: End-->
    <!-- Main Page: Begin -->
    <main>
        <div class="breadcrumb-wrap clear">
            <div class="container">
                <h2 class="page-title">account</h2>
                <p class="breadcrumb">
                    <span>You are here:</span><span>Home /</span><span>Account</span>
                </p>
            </div>
        </div>
        <!-- Main Page: Begin -->
        <div class="container">
            <div class="row">
                <div class="top-banner-wrap">
                    <div class="top-banner">
                        <p>Check out our lastest deals and start saving</p>
                        <p><span>get started</span><i class="icon-play-circled-1"></i></p>
                    </div>
                </div>
                <div class="tab-header-wrap">
                    <div class="user-meta">
                        <img src="assets/img/user.jpg" alt="user">
                        <h1 class="user-name">admin</h1>
                        <a href="#">view profile</a>
                    </div>
                    <ul class="nav nav-pills nav-stacked tab-header">
                        <li class="active">
                            <a href="#tab-acc" data-toggle="tab">
                                <i class="icon-user"></i>
                                <span>account</span>
                            </a>
                        </li>
                        <li>
                            <a href="#tab-change-pw" data-toggle="tab">
                                <i class="icon-asterisk"></i>
                                <span>change password</span>
                            </a>
                        </li>
                        <li>
                            <a href="#tab-privacy" data-toggle="tab">
                                <i class="icon-lock"></i>
                                <span>privacy</span>
                            </a>
                        </li>
                        <li>
                            <a href="#tab-del-acc" data-toggle="tab">
                                <i class="icon-trash-empty"></i>
                                <span>delete account</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content">
                    <div id="tab-acc" class="tab-pane fade in active">
                        <h3 class="icon-user">account</h3>
                        <form>
                            <div class="form-group">
                                <label for="usr">username</label>
                                <input type="text" class="form-control" id="usr">
                            </div>
                            <div class="form-group">
                                <label for="f-name">first name</label>
                                <input type="text" class="form-control" id="f-name">
                            </div>
                            <div class="form-group">
                                <label for="l-name">last name</label>
                                <input type="text" class="form-control" id="l-name">
                            </div>
                            <div class="form-group">
                                <label for="email">email address</label>
                                <input type="text" class="form-control" id="email">
                            </div>
                            <button type="submit" class="button-ss">update account</button>
                        </form>
                    </div>
                    <div id="tab-change-pw" class="tab-pane fade">
                        <h3 class="icon-asterisk">change password</h3>
                        <form>
                            <div class="form-group">
                                <label for="current-pw">current password</label>
                                <input type="password" class="form-control" id="current-pw">
                            </div>
                            <div class="form-group">
                                <label for="new-pw">new password</label>
                                <input type="password" class="form-control" id="new-pw">
                            </div>
                            <div class="form-group">
                                <label for="confirm-pw">confirm password</label>
                                <input type="password" class="form-control" id="confirm-pw">
                            </div>
                            <button type="submit" class="button-ss">update password</button>
                        </form>
                    </div>
                    <div id="tab-privacy" class="tab-pane fade">
                        <h3 class="icon-lock">privacy</h3>
                        <form>
                            <div class="form-group">
                                <label for="sel1">profile privacy</label>
                                <i class="icon-help-circled" data-toggle="tooltip" data-placement="right" title="Who can see your public profile?"></i>
                                <select class="form-control" id="sel1">
                                    <option>everyone</option>
                                    <option>only me</option>
                                </select>
                            </div>
                            <p class="radio-headline">profile privacy</p>
                            <i class="icon-help-circled" data-toggle="tooltip" data-placement="right" title="Here you can hide yourself from appearing in public directory"></i>
                            <div class="form-group clear">
                                <div class="radio">
                                    <input type="radio" name="optradio" id="optradio-1">
                                    <label for="optradio-1">Option 1</label>
                                </div>
                                <div class="radio">
                                    <input type="radio" name="optradio" id="optradio-2">
                                    <label for="optradio-2">Option 2</label>
                                </div>
                            </div>
                            <button type="submit" class="button-ss">update privacy</button>
                        </form>
                    </div>
                    <div id="tab-del-acc" class="tab-pane fade">
                        <h3 class="icon-trash-empty">delete account</h3>
                        <p>Are you sure you want to delete your account? This will erase all of your account data from the site. To delete your account enter your password below</p>
                        <div class="form-group">
                            <label for="reset-pw">password</label>
                            <input type="password" class="form-control" id="reset-pw">
                            <button type="submit" class="button-ss">delete account</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Page: End -->
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


<!-- Mirrored from netbaseteam.com/wordpress/html/elegan/account.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 May 2019 00:29:47 GMT -->
</html>