<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">

        <!-- Font Awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
        <!-- MDB -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.0/mdb.min.css" rel="stylesheet"/>

        <!-- MDB -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.0/mdb.min.js"></script>

        <style>
            /* Hide scrollbar for Chrome, Safari and Opera */
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
                    </style>

        <title>Edit Profile</title>
    </head>
    <body>
        <section style="background-color: #eee; padding-top: 50px">    
            <div class="container py-3">

                <!--nav bar-->
                <br>
                <div class="row">
                    <div class="col-lg-1"></div> 
                    <div class="col-lg-10">
                        <div class="card mb-4">

                            <div class="card-body text-center"><H6>Create your profile</h6></div>
                        </div>
                    </div>
                    <div class="col-lg-1"></div> 
                </div>

                <form action="Classes/EditProfileClass.php" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>

                    <!--change password-->
                    <div class="row">
                        <div class="col-lg-1"></div>    
                        <div class="col-lg-10">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-4"><p class="mb-0" style="padding-bottom: 5px">Edit password</p></div><hr style="padding: 5px">
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4"><p class="mb-0">Enter password</p></div>
                                        <div class="col-sm-8"><input type="password" name="password" id="form3Example3" class="form-control form-control-lg" placeholder="Enter your password" /><br></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4"><p class="mb-0">Confirm password</p></div>
                                        <div class="col-sm-8"><input type="password" name="password" id="form3Example3" class="form-control form-control-lg" placeholder="Confirm your password" /><br></div>
                                    </div>
                                </div>
                                <div class="col-lg-1"></div>
                            </div></div></div>


                    <!--user Information-->
                    <div class="row">
                        <div class="col-lg-1"></div>    
                        <div class="col-lg-10">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-4"><p class="mb-0" style="padding-bottom: 5px">Enter your details</p></div><hr style="padding: 5px">
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4"><p class="mb-0">ID</p></div>
                                        <div class="col-sm-8"><input type="text" name="id" id="form3Example3" class="form-control form-control-lg" placeholder="Enter your User Name" />
                                    </div><hr style="opacity: .05">
                                    <div class="row">
                                        <div class="col-sm-4"><p class="mb-0">Full Name</p></div>
                                        <div class="col-sm-8"><input type="text" name="Full Name" id="form3Example3" class="form-control form-control-lg" placeholder="Enter your Full Name" /></div>
                                    </div><hr style="opacity: .05">
                                    <div class="row">
                                        <div class="col-sm-4"><p class="mb-0">Add profile photo</p></div>
                                        <div class="col-sm-8"><input class="form-control" type="file" id="formFileMultiple" multiple /></div>
                                    </div><hr style="opacity: .05">
                                    <div class="row">
                                        <div class="col-sm-4"><p class="mb-0">Possition</p></div>
                                        <div class="col-sm-8"><input type="text" name="Possition" id="form3Example3" class="form-control form-control-lg" placeholder="Enter your Possition" /></div>
                                    </div><hr style="opacity: .05">
                                    <div class="row">
                                        <div class="col-sm-4"><p class="mb-0">Email</p></div>
                                        <div class="col-sm-8"><input type="text" name="email" id="form3Example3" class="form-control form-control-lg" placeholder="Enter your Email" /></div>
                                    </div><hr style="opacity: .05">
                                    <div class="row">
                                        <div class="col-sm-4"><p class="mb-0">Phone Number(Office)</p></div>
                                        <div class="col-sm-8"><input type="text" name="office NO" id="form3Example3" class="form-control form-control-lg" placeholder="Enter your office Number" /></div>
                                    </div><hr style="opacity: .05">
                                    <div class="row">
                                        <div class="col-sm-4"><p class="mb-0">Phone Number(Personal)</p></div>
                                        <div class="col-sm-8"><input type="text" name="Personal No" id="form3Example3" class="form-control form-control-lg" placeholder="Enter your mobile Number" /></div>
                                    </div>
                                    <div class="row" style="padding-top: 20px;">
                                        <div class="d-grid gap-2 col-12 mx-auto"><button class="btn btn-primary" type="submit">Save Data</button>
                                        </div><br>
                                    </div>

                                </div>



                            </div>
                            <div class="col-lg-1"></div>    



                        </div>
                    </div>
                    </div>
                </form>
        </section>



        <?php
        // put your code here
        ?>
    </body>
</html>
