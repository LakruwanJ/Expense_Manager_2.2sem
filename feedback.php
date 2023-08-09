<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php 
    require_once 'Classes/Feedbackctrl.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>FeedBack</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
        <link src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous" ></script>
        <script src="https://kit.fontawesome.com/3c5ab4b467.js" crossorigin="anonymous"></script>
        <script src="index.js"></script>
        <script src="../assets/js/color-modes.js"></script>
        <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/dashboard/" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
        <link src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

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
        <div class="container">
            <div class="row">
                <div class="col-12 mb-4">
                    <div class="container text-center mt-5">         
                        <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#AddFeed" style="width:80%; height: 50px;"><div class="row"><i class="fa-thin fa-plus fa-lg" style="color: #3aa0df;">  Add FeedBack</i></div></button>
                    </div>
                </div> 
            </div> 

            <!-- Modal for Add feedback -->
            
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate >
            <div class="modal fade" id="AddFeed" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
                    <div class="modal-content w-150">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Add FeedBack</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form class="was-validated">
                                <div class="row">
                                    <div class="mb-3">
                                        <div class="card">
                                            <span class="input-group-text" id="basic-addon3">User Name</span>
                                                <div class="col-sm-8">
                                                    <input type="text" name="UserName"  class="form-control" placeholder="<?php echo $name ?>" id="basic-url" aria-describedby="basic-addon3 basic-addon4" disabled="">
                                                </div>
                                        </div>
                                        <div class="card">
                                            <span class="input-group-text" id="basic-addon3">FeedBack</span>
                                            <input type="text" name="FEED" placeholder="Type your feedback" class="form-control" id="basic-url" aria-describedby="basic-addon3 basic-addon4">
                                        </div>
                                    </div>
                                </div>

            
                        </div>
                        <div class="modal-footer">
                             <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Discard</button>
                            <button   name="add" class="btn btn-primary" type="submit">Add</button>
                            
                        </div>
                    </div>
                </div>
            </div>

</form>
                            <?php echo $FeedErr; 
                                echo $Feed; 
                            ?>
            <!-- Feedback Cards Section -->
            <div class="row" id="feedbackCardsSection">
                <!-- Feedback cards will be dynamically generated here -->
            </div>

            <!-- Modal for Remove Member -->
            <div class="modal fade" id="Remove" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
                <!-- Add your modal content here -->
            </div>
            <!-- Modal end -->

            <?php
            // put your code here
            ?>
        </div>

        <script>

            const feedbacks = [
                {
                    username: "John Doe",
                    feedback: "This is a great website!",
                    date: "2023-08-06"
                },
                {
                    username: "Jane Smith",
                    feedback: "Awesome work!",
                    date: "2023-08-05"
                },
            ];

            // Function to create a single feedback card
            function createFeedbackCard(username, feedback, date) {
                const card = document.createElement("div");
                card.classList.add("card");

                const cardBody = document.createElement("div");
                cardBody.classList.add("card-body");

                const usernameElement = document.createElement("h5");
                usernameElement.classList.add("card-title");
                usernameElement.textContent = username;

                const feedbackElement = document.createElement("p");
                feedbackElement.classList.add("card-text");
                feedbackElement.textContent = feedback;

                const dateElement = document.createElement("p");
                dateElement.classList.add("card-text");
                dateElement.textContent = "Date: " + date;

                cardBody.appendChild(usernameElement);
                cardBody.appendChild(feedbackElement);
                cardBody.appendChild(dateElement);
                card.appendChild(cardBody);

                return card;
            }

            // Function to display all feedback cards
            function displayFeedbackCards() {
                const feedbackCardsSection = document.getElementById("feedbackCardsSection");

                // Clear existing cards (if any)
                feedbackCardsSection.innerHTML = "";

                // Create and append cards for each feedback
                feedbacks.forEach((feedback) => {
                    const card = createFeedbackCard(feedback.username, feedback.feedback, feedback.date);
                    feedbackCardsSection.appendChild(card);
                });
            }

            // Call the function to display feedback cards when the page loads
            document.addEventListener("DOMContentLoaded", displayFeedbackCards);


            
        </script>
    </body>
</html>
