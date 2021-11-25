<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>SoarBazar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="font/iconsmind-s/css/iconsminds.css" />
    <link rel="stylesheet" href="font/simple-line-icons/css/simple-line-icons.css" />

    <link rel="stylesheet" href="css/vendor/bootstrap.min.css" />
    <link rel="stylesheet" href="css/vendor/bootstrap.rtl.only.min.css" />
    <link rel="stylesheet" href="css/vendor/bootstrap-float-label.min.css" />
    <link rel="stylesheet" href="css/vendor/perfect-scrollbar.css" />
    <link rel="stylesheet" href="css/vendor/smart_wizard.min.css" />
    <link rel="stylesheet" href="css/vendor/bootstrap-tagsinput.css" />
    <link rel="stylesheet" href="css/main.css" />
</head>

<body id="app-container" class="menu-default show-spinner">
   

    <main>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Registration Form</h1>
                    <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                       
                    </nav>
                    <div class="separator mb-5"></div>
                </div>
            </div>

            <div class="row">

                <div class="col-12 mb-4">
                    <h5 class="mb-4">Buyer Details</h5>
                    <div class="card mb-4">
                        <div id="smartWizardValidation">
                            <ul class="card-header">
                                <li><a href="#step-0">Step 1<br /><small>Seller Details</small></a></li>
                                <li><a href="#step-1">Step 2<br /><small>Shop Details</small></a></li>
                                <li><a href="#step-2">Step 3<br /><small>Payment </small></a></li>
                                <li><a href="#step-3">Step 3<br /><small>Complete</small></a></li>
                               
                            </ul>

                            <div class="card-body" style="height: 400px;">
                                <div id="step-0">
                                    <form id="form-step-0" class="tooltip-label-right" novalidate>
                                        <div class="form-group position-relative error-l-100">
                                            <label for="email">Email address</label>
                                            <input type="email" class="form-control" name="emailValidation"
                                                id="emailValidation" placeholder="Your email address" required>
                                        </div>

                                        <div class="form-group position-relative error-l-100">
                                            <label for="email">Email address</label>
                                            <input type="email" class="form-control" name="emailValidation"
                                                id="emailValidation" placeholder="Your email address" required>
                                        </div>

                                        <div class="form-group position-relative error-l-100">
                                            <label for="email">Email address</label>
                                            <input type="email" class="form-control" name="emailValidation"
                                                id="emailValidation" placeholder="Your email address" required>
                                        </div>

                                        <div class="form-group position-relative error-l-100">
                                            <label for="email">Email address</label>
                                            <input type="email" class="form-control" name="emailValidation"
                                                id="emailValidation" placeholder="Your email address" required>
                                        </div>
                                        
                                      
                                    </form>
                                </div>
                                <div id="step-1">
                                    <form id="form-step-1" class="tooltip-label-right" novalidate>
                                        <div class="form-group position-relative error-l-75">
                                            <label for="name">First Name</label>
                                            <input type="text" class="form-control" name="nameValidation"
                                                id="nameValidation" placeholder="Your first name" required>
                                        </div>
                                        <div class="form-group position-relative error-l-75">
                                            <label for="lastName">Last Name</label>
                                            <input type="text" class="form-control" name="lastNameValidation"
                                                id="lastNameValidation" placeholder="Your last name" required>
                                        </div>
                                    </form>
                                </div>

                                <div id="step-0">
                                    <form id="form-step-0" class="tooltip-label-right" novalidate>
                                        <div class="form-group position-relative error-l-100">
                                            <label for="email">Email address</label>
                                            <input type="email" class="form-control" name="emailValidation"
                                                id="emailValidation" placeholder="Your email address" required>
                                        </div>
                                        <div class="form-group position-relative error-l-100">
                                            <label for="password">Password</label>
                                            <input type="password" class="form-control" name="passwordValidation"
                                                id="passwordValidation" placeholder="Your password" required>
                                        </div>
                                    </form>
                                </div>
                                <div id="step-1">
                                    <form id="form-step-1" class="tooltip-label-right" novalidate>
                                        <div class="form-group position-relative error-l-75">
                                            <label for="name">First Name</label>
                                            <input type="text" class="form-control" name="nameValidation"
                                                id="nameValidation" placeholder="Your first name" required>
                                        </div>
                                        <div class="form-group position-relative error-l-75">
                                            <label for="lastName">Last Name</label>
                                            <input type="text" class="form-control" name="lastNameValidation"
                                                id="lastNameValidation" placeholder="Your last name" required>
                                        </div>
                                    </form>
                                </div>

                                <div id="step-2">
                                    <form id="form-step-0" class="tooltip-label-right" novalidate>
                                        <div class="form-group position-relative error-l-100">
                                            <label for="email">Email address</label>
                                            <input type="email" class="form-control" name="emailValidation"
                                                id="emailValidation" placeholder="Your email address" required>
                                        </div>
                                        <div class="form-group position-relative error-l-100">
                                            <label for="password">Password</label>
                                            <input type="password" class="form-control" name="passwordValidation"
                                                id="passwordValidation" placeholder="Your password" required>
                                        </div>
                                    </form>
                                </div>
                             
                                <div id="step-3">
                                    <h4 class="text-center">Thank you for your feedback!</h4>
                                    <p class="muted text-center p-4">
                                        Podcasting operational change management inside of workflows to establish a
                                        framework. Taking seamless key performance indicators offline to maximise the
                                        long tail. Keeping your eye on the ball while performing a deep dive on the
                                        start-up mentality.
                                    </p>
                                </div>
                            </div>

                            <div class="btn-toolbar custom-toolbar text-center card-body pt-0">
                                <button class="btn btn-secondary prev-btn" type="button">Previous</button>
                                <button class="btn btn-secondary next-btn" type="button">Next</button>
                                <button class="btn btn-secondary finish-btn" type="submit">Finish</button>
                            </div>
                        </div>
                    </div>
                </div>

          
             

             

               

            </div>
        </div>
    </main>

    <footer class="page-footer">
        <div class="footer-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <p class="mb-0 text-muted">ColoredStrategies 2019</p>
                    </div>
                    <div class="col-sm-6 d-none d-sm-block">
                        <ul class="breadcrumb pt-0 pr-0 float-right">
                            <li class="breadcrumb-item mb-0">
                                <a href="#" class="btn-link">Review</a>
                            </li>
                            <li class="breadcrumb-item mb-0">
                                <a href="#" class="btn-link">Purchase</a>
                            </li>
                            <li class="breadcrumb-item mb-0">
                                <a href="#" class="btn-link">Docs</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
    <script src="js/vendor/jquery-3.3.1.min.js"></script>
    <script src="js/vendor/bootstrap.bundle.min.js"></script>
    <script src="js/vendor/perfect-scrollbar.min.js"></script>
    <script src="js/vendor/bootstrap-tagsinput.min.js"></script>
    <script src="js/vendor/jquery.smartWizard.min.js"></script>
    <script src="js/vendor/jquery.validate/jquery.validate.min.js"></script>
    <script src="js/vendor/jquery.validate/additional-methods.min.js"></script>
    <script src="js/dore.script.js"></script>
    <script src="js/scripts.js"></script>

</body>

</html>