<style>

    * {
        color: whitesmoke
    }
    .mysidepanel {
        height:600px; 
        box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
        background:url('../../assets/images/sidebar.jpg') no-repeat;
    }
    .list li ul a {
        color:yellow;
    }
    .list {
        list-style: none;
    }
    .list li {
        list-style: none;
        color: red;
    }
    .list li a {
        text-decoration: none;
        font-weight: bold;
        padding:10px;
        line-height:2; color: white
    }

    .list li a:hover {
        color: black;
    }
    </style>


        <div class="col-md-3  mysidepanel">
        
            <h2 class="heading">
                    Welcome Admin    
            </h2>

            <aside>
                <ul class="list">
                    <li> 
                        <i class="fa fa-phone"></i>
                        <a href=""> Manage Contact </a>
                        <ul>
                            <li> <a href="../views/manage_contact.php"> Add Contact </a> </li>
                            <li> <a href="../views/view_contact_details.php"> View Contact </a> </li>
                        </ul>
                         
                    </li>
                    <li>
                        <i class="fa fa-image"></i> 
                        <a href="../views/manage_contact.php"> Manage Slider </a> 
                        <ul>
                            <li> <a href="../views/add_slider.php"> Add Slider Images </a> </li>
                            <li> <a href="../views/view_slider.php"> View Slider Images </a> </li>
                        </ul>
                    </li>
                    <li>
                    <i class="fa fa-ship"></i> 

                        <a href="../views/manage_package.php"> Manage Packages </a> </li>
                    <li >
                    <i class="fa fa-building"></i> 
                        
                    <a href="../views/manage_hotels.php"> Manage Hotels </a> </li>
                    <li > 
                    <i class="fa fa-car"></i> 
                        
                    <a href="../views/manage_destinations.php"> Manage Destinations </a> </li>
                    <li >
                    <i class="fa fa-info"></i> 
                        
                    <a href="../views/manage_feedback.php"> Manage Testimonials </a> </li>
                    <li > 
                    <i class="fa fa-book"></i> 
                        
                    <a href="../views/manage_blog.php"> Manage Blogs </a> </li>
                    <li > 
                    <i class="fa fa-image"></i> 
                        
                    <a href="../views/manage_gallery.php"> Manage Gallery </a> </li>
                    <li > 
                    <i class="fa fa-plane"></i> 
                        
                    <a href="../views/manage_bookings.php"> Manage Bookings </a> </li>
                </ul>
            </aside>
        </div>
