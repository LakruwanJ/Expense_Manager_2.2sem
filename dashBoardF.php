<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
        <link src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous" ></script>
        <script src="https://kit.fontawesome.com/3c5ab4b467.js" crossorigin="anonymous"></script>
        <script src="index.js"></script>
        <script src="../assets/js/color-modes.js"></script>
        <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/dashboard/" />
        <style>
            body::-webkit-scrollbar {
                display: none;
            }

            /* Hide scrollbar for IE, Edge and Firefox */
            body {
                -ms-overflow-style: none;
                /* IE and Edge */
                scrollbar-width: none;
                /* Firefox */
            }
            body{
                overflow-y: visible;
                overflow-x: hidden;
            }
            .aprovedHedding {
                color: #141817;
            }
            .pendingHedding {
                color: black;
            }
            .ProposalCard:hover {
                transform: scale(1.05);
            }
            .tableBody {
                background-color: rgb(207, 199, 199);
            }
            .hedderBody {
                background-image: url(https://i0.wp.com/juntrax.com/blog/wp-content/uploads/2021/07/What-is-Expense-Management.jpg);
            }
            .greet {
                color: white;
            }

        </style>
    </head>
    <body>

        <!--Heading Part Start-->
        <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-body-tertiary hedderBody" style="height: 400px;">
            <div class="container text-center mt-1">
                <h1 class="display-4 fw-normal greet">Welcome Finance Team Member</h1>
                <p class="lead fw-normal greet">
                    Thank you for using our Expense Management System. As a Finance Team Member, you
                    have ..............
                </p>
                <a class="btn btn-success" href="#">Docs</a>
            </div>
            <div class="product-device shadow-sm d-none d-md-block"></div>
            <div
                class="product-device product-device-2 shadow-sm d-none d-md-block"
                ></div>
        </div>
        <!--Heading part End-->




        <!--Aproved,Rejected,Pending proposals Start-->
        <div class="container text-center mt-5">
            <div class="row">

                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg ProposalCard" style=" background-image: url('https://www.solidbackgrounds.com/images/1920x1080/1920x1080-light-green-solid-color-background.jpg'); background-position: center; object-fit: fill; "  >
                        <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                            <h3 class="pt-6 mt-2 mb-6 display-8 lh-1 fw-bold aprovedHedding">Add Income</h3>
                            <ul class="d-flex list-unstyled mt-auto">
                                <li class="me-auto">
                                    <span class="mt-3"><img src="https://cdn-icons-png.flaticon.com/512/5610/5610944.png" alt="Aproved Proposals" width="32" height="32" class="rounded-circle border border-white mt-3"/>
                                        <p class="h6 mt-3">Count</p>
                                    </span>
                                </li>
                                <li class="d-flex align-items-center mt-3">
                                    <button class="btn btn-success" type="button" data-bs-toggle="modal" data-bs-target="#addIncome">Add Income</button>                
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>  

                <!-- Modal for Add Income -->
                <div class="modal fade" id="addIncome" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
                        <div class="modal-content w-150">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Income</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form class="was-validated">
                                    <div class="row">
                                        <form>
                                            <label for="basic-url" class="form-label">Select Income Category</label>
                                            <select class="form-select  mb-3" required aria-label="select example">            

                                                <option value="1">Income Category 1</option>
                                                <option value="2">Income Category 2</option>
                                                <option value="3">Income Category 3</option>
                                            </select>
                                    </div>
                                    <div class="row">
                                        <div class="mb-3">
                                            <label for="basic-url" class="form-label">Subject</label>
                                            <div class="input-group">
                                                <span class="input-group-text" id="basic-addon3">Subject Title</span>
                                                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3 basic-addon4">
                                            </div>
                                            <div class="form-text" id="basic-addon4">Give a Title about income in Short.</div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" aria-label="Amount (to the nearest Rupees)">
                                                <span class="input-group-text">.00</span>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <input type="date" class="form-control" id="basic-url" aria-describedby="basic-addon3 basic-addon4">
                                        </div>
                                    </div>              
                                    <div class="row">
                                        <div class="mb-3">
                                            <label for="validationTextarea" class="form-label">Description</label>
                                            <textarea class="form-control" id="validationTextarea" placeholder="Required example textarea" required></textarea>
                                            <div class="invalid-feedback">
                                                Plese Describe About this Income.
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Discard</button>
                                <button type="button" class="btn btn-primary">Add Income</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--model end-->

                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg ProposalCard" style=" background-image: url('https://cdn.wallpapersafari.com/43/47/4KupwZ.jpg');" >
                        <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1" >
                            <h3 class="pt-6 mt-2 mb-6 display-8 lh-1 fw-bold">Add expenses </h3>
                            <ul class="d-flex list-unstyled mt-auto">
                                <li class="me-auto">
                                    <span>
                                        <img src="https://static.vecteezy.com/system/resources/previews/017/178/032/original/round-cross-mark-symbol-with-transparent-background-free-png.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white" />
                                        <p class="h6 mt-3">Count</p>
                                    </span>
                                </li>
                                <li class="d-flex align-items-center">
                                    <button class="btn btn-danger" type="button" data-bs-toggle="modal" data-bs-target="#addexpense">Add expenses</button>                
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Modal for Add expenses -->
                <div class="modal fade" id="addexpense" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
                        <div class="modal-content w-150">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Expense</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form class="was-validated">
                                    <div class="row">
                                        <form>
                                            <label for="basic-url" class="form-label">Select Proposal Id</label>
                                            <select class="form-select  mb-3" required aria-label="select example">            

                                                <option value="1">Id 1</option>
                                                <option value="2">Id 2</option>
                                                <option value="3">Id 3</option>
                                            </select>
                                    </div>
                                    <div class="row">
                                        <div class="mb-3">
                                            <label for="basic-url" class="form-label">Subject</label>
                                            <div class="input-group">
                                                <span class="input-group-text" id="basic-addon3">Subject Title</span>
                                                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3 basic-addon4">
                                            </div>
                                            <div class="form-text" id="basic-addon4">Give a Title about expense in Short.</div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" aria-label="Amount (to the nearest Rupees)">
                                                <span class="input-group-text">.00</span>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <input type="date" class="form-control" id="basic-url" aria-describedby="basic-addon3 basic-addon4">
                                        </div>
                                    </div>              
                                    <div class="row">
                                        <div class="mb-3">
                                            <label for="validationTextarea" class="form-label">Description</label>
                                            <textarea class="form-control" id="validationTextarea" placeholder="Required example textarea" required></textarea>
                                            <div class="invalid-feedback">
                                                Plese Describe About this expense.
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Discard</button>
                                <button type="button" class="btn btn-primary">Add Expense</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--model end-->

                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg ProposalCard" style=" background-image: url('https://plainbackground.com/plain1024/fef65b.png'); ">
                        <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1" >
                            <h3 class="pt-6 mt-2 mb-6 display-8 lh-1 fw-bold pendingHedding">Review Pending Proposals</h3>
                            <ul class="d-flex list-unstyled mt-auto">
                                <li class="me-auto">
                                    <span>
                                        <img src="https://img.uxwing.com/wp-content/themes/uxwing/download/signs-symbols/caution-icon.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white" />
                                        <p class="h6 mt-3" style="color: black">Count</p>
                                    </span>
                                </li>
                                <a href="proposals.php"><li class="d-flex align-items-center">
                                        <button class="btn btn-warning" type="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdropPP" aria-controls="staticBackdropPP">Review</button>
                                    </li></a>
                            </ul>
                        </div>
                    </div>
                </div><br>

            </div>
        </div>

        <!--Aproved,Rejected,Pending proposals End-->

        <br><Br><Br>



    </body>
</html>


