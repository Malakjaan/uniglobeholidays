<div class="modal fade" id="editTour" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Tour Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form id="frmeditTour" method="post" style="width: 475px;">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="name">Place you want to go?</label> <input class="form-control" id="Tour_name" name="Tour_name" placeholder="Tour Name" type="text">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="name">Tour Cost</label> <input class="form-control" id="Tour_cost" name="Tour_name" placeholder="Tour " type="text">
                                </div>
                                
                                </div>
                            </div>
                               
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="number">No of Adults</label> <input class="form-control" id="no_of_adults" name="no_of_adults" placeholder="No of Adults" type="number">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="number"></label>No of Children <input class="form-control" id="no_of_childrens" readonly placeholder="No of Childrens" type="number" name="no_of_childrens">
                                </div>
                            </div>
                                

                            <div class="form-group col-md-12">
                                    <label for="number"></label>Tour cost <input class="form-control" id="Tour_cost" placeholder="Package cost " type="number" name="Tour_cost">
                            </div>
                              
                                
                                

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button class="btn btn-primary" id="btn_update_package_details" type="submit">Submit Your Tour</button>
            </div>
        </form> 
            
        </div>
        </div>
    </div>
  </div>