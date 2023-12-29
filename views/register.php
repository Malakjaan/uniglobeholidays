<form method="POST" action="../routes/register.php" enctype="multipart/form-data">
    <input name="name" type="text" style="padding:10px; background:brown; border-radius:6px" placeholder="Enter Your Name" />
    <br>
    <br>
    <input name="dob" type="date" style="padding:10px;background:brown; border-radius:6px" placeholder="Enter Your Dob" />
    <br>
    <br>
    <input name="email" type="email" style="padding:10px;background:brown; border-radius:6px" placeholder="Enter Your Email" />
    <br>
    <br>
   <input name="files" type="file" style="padding:10px;background:brown; border-radius:6px" title="Choose Your file" />
    <br>
    <br>


    <input type="submit" value="Register Yourself" name="btnRegistration" />
</form>