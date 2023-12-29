<?php
        $id = $_GET['user_id'];
        require_once('../config/connection.php');
        $query ="SELECT * FROM tbl_feedback WHERE id = $id";
        $result = mysqli_query($dbcon, $query);
        $row = mysqli_fetch_assoc($result);
            
?>

<form method="POST" action="../routes/update_details.php" enctype="multipart/form-data">
                            <div class="form-row">
                            <div class="row"><div class="form-group col-md-4">
                                    <label for="inputEmail">Name</label> <input class="form-control" id="name" name="name" placeholder="Your Name" type="text">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputEmail">Your Email</label> <input class="form-control" id="email" placeholder="Your Email" type="email"></div>
                                </div>
                            </div>
                            <div class="row">
                                
                            <div class="form-group col-md-8">
                                <label for="inputAddress">Comment</label> <textarea class="form-control" id="comment" placeholder="Your Comment" type="text"></textarea>
                            </div>
                            </div>
                            <div class="row">

                            <div class="form-group col-md-8">
                                    <label for="inputContact">Your Rating</label>
                                    <select name="rating" class="form-control" >
                                        <option value="1"> 1 Star </option>
                                        <option value="2"> 2 Star</option>
                                        <option value="3"> 3 Star</option>
                                        <option value="4"> 4 Star</option>
                                        <option value="5"> 5 Star</option>
                                    </select> 
                            </div>
                        </div>
                        <br>
                        <div class="form-group col-md-8">
                                <button class="btn btn-primary" id="btn_save_contact_details" type="submit">Submit Feedback</button>
                        </div>
                        </form>