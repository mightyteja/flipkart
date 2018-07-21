<style>
    .group {
        position: relative;
        margin-bottom: 45px;
    }

    .modal_input {
        font-size: 1 px;
        padding: 10px 10px 10px 5px;
        -webkit-appearance: none;
        display: block;
        color: #636363;
        width: 100%;
        border: none;
        border-radius: 0;
        border-bottom: 1px solid #757575;
    }

    .modal_input:focus {
        outline: none;
    }

    /* Label */

    label {
        color: #999;
        font-size: 18px;
        font-weight: normal;
        position: absolute;
        pointer-events: none;
        left: 5px;
        top: 10px;
        transition: all 0.2s ease;
    }

    /* active */

    .modal_input:focus~label,
    .modal_input.used~label {
        top: -20px;
        transform: scale(.75);
        left: -2px;
        /* font-size: 14px; */
        color: #4a89dc;
    }

    /* Underline */

    .bar {
        position: relative;
        display: block;
        width: 100%;
    }

    .bar:before,
    .bar:after {
        content: '';
        height: 2px;
        width: 0;
        bottom: 1px;
        position: absolute;
        background: #4a89dc;
        transition: all 0.2s ease;
    }

    .bar:before {
        left: 50%;
    }

    .bar:after {
        right: 50%;
    }

    /* active */

    .modal_input:focus~.bar:before,
    .modal_input:focus~.bar:after {
        width: 50%;
    }

    /* Highlight */

    .highlight {
        position: absolute;
        height: 60%;
        width: 100px;
        top: 25%;
        left: 0;
        pointer-events: none;
        opacity: 0.5;
    }

    /* active */

    .modal_input:focus~.highlight {
        animation: inputHighlighter 0.3s ease;
    }

    /* Animations */

    @keyframes inputHighlighter {
        from {
            background: #4a89dc;
        }
        to {
            width: 0;
            background: transparent;
        }
    }
</style>

    <!-- Trigger the modal with a button -->
    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">Sign IN /Sign Up</button>
    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog modal-lg">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-3">
                            <p>Login</p>
                            <p>Get access to your Orders, WishList and Recommendation</p>
                        </div>
                        <div class="col-lg-9">
                            <form method="POST" action="db/signin.php">
                                <div class="group">
                                    <input class="modal_input" type="email" name="email">
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label>Email/Mobile Number</label>
                                </div>
                                <div class="group">
                                    <input class="modal_input" type="password" name="password">
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label>Password</label>
                                    <a id="lnkforget" class="hyperlink" style="float: right; margin-right: 5px;position: absolute;top: 7px;right: 0px;">Forgot?</a>
                                </div>
                                <button type="submit" class="btn">Login</button>
                            </form>
                            <!-- New User Modal  -->
                            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal_create">New to Flipkart? Sign up</button>
                            <div class="container">
                                <!-- Trigger the modal with a button -->
                                <!-- Modal -->
                                <div class="modal fade" id="myModal_create" role="dialog">
                                    <div class="modal-dialog modal-lg">
                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <p>Register</p>
                                                        <p>We do not share your personal data</p>
                                                    </div>
                                                    <div class="col-lg-9">
                                                        <form action="db/createuser.php" method="POST" enctype="multipart/form-data" autocomplete="off">
                                                            <div class="group">
                                                                <input class="modal_input" type="text" name="username" value="">
                                                                <span class="highlight"></span>
                                                                <span class="bar"></span>
                                                                <label>Username</label>
                                                            </div>
                                                            <div class="group">
                                                                <input class="modal_input" type="email" name="email" value="">
                                                                <span class="highlight"></span>
                                                                <span class="bar"></span>
                                                                <label>Email</label>
                                                            </div>
                                                            <div class="group">
                                                                <input class="modal_input" type="number" name="phoneno" value="">
                                                                <span class="highlight"></span>
                                                                <span class="bar"></span>
                                                                <label>Mobile Number</label>
                                                            </div>
                                                            <div class="group">
                                                                <input class="modal_input" type="password" value="" name="password">
                                                                <span class="highlight"></span>
                                                                <span class="bar"></span>
                                                                <label>Password</label>
                                                            </div>
                                                            <div class="group">
                                                                <input class="modal_input" type="password" value="" name="confirmpassword">
                                                                <span class="highlight"></span>
                                                                <span class="bar"></span>
                                                                <label>Password</label>
                                                            </div>
                                                            <button type="submit" class="btn">Create User</button>
                                                            <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">Existing USer/ Sign In</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

