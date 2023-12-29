<?php require_once('../includes/header.php'); ?>

<br>
         <div class="form-group">
         <div class="col-md-4">
            <label for="tour_package">Tour Package Name *</label>
            <input type="text" class="form-control" id="tour_package" name="tour_package" placeholder="Tour Package Name" required>
         </div>


         <div class="form-group">
         <div class="col-md-4">
            <label for="name">Name *</label>
            <input type="text" class="form-control" id="name" placeholder="Name"name="name" required>
         </div>

        
         <div class="form-group">
         <div class="col-md-6">
            <label for="tel_no">Tel No. *</label>
            <input type="tel" class="form-control" id="tel_no" placeholder="Tel No." name="tel_no" required>
         </div>


         <div class="form-group">
         <div class="col-md-6">
            <label for="country">Country *</label>
            <input type="text" class="form-control" id="country"placeholder="Country" name="country" required>
         </div>


         <div class="input-group-date">
         <div class="col-md-6">
            <label for="intended_month">Intended Month & Year of Visit *</label>
            <input type="date" class="form-control" placeholder="intended Month & Year of Visit" id="intended_month" name="intended_month" required>
         </div>

         
         <div class="form-group">
         <div class="col-md-6">
            <label for="email">E-mail *</label>
            <input type="email" class="form-control" id="email" placeholder="Email" name="email"    required>
         </div>

            <div class="form-group">
            <div class="col-md-6">
            <label for="num_days">Number of Days</label>
            <input type="number" class="form-control" id="num_days" name="num_days" placeholder="Number of Days" min="1">
         </div>

         <div class="form-group" >
            <div class="col-md-6">
                <label for="price">Tour-cost</label>
                <textarea class="form-control" placeholder="package_cost" id="package_cost" min="1"></textarea></div></div>


         <div class="form-group">
         <div class="col-md-6">
            <label for="num_adults">No. of Adults</label>
            <input type="number" class="form-control" placeholder="No. of adults " id="num_adults" name="num_adults" min="0">
         </div>
         <div class="form-group">
         <div class="col-md-6">
            <label for="num_children">No. of Children (5-12 years)</label>
            <input type="number" placeholder="No. of Children " class="form-control" id="num_children" name="num_children" min="0">
         </div>

        
         <div class="form-group">
         <div class="col-md-6">
            <label for="customization">Customization Required *</label>
            <textarea class="form-control" placeholder="Customization Required" id="customization" name="customization" rows="4" required></textarea>
         </div>
    

         <button type="submit" class="btn btn-primary">Submit Inquiry</button>
      </form>
   </div>