$( document ).ready(function() {                
        $('#btn_save_contact_details').on('click', function(e){
            e.preventDefault(); 
            let x = $('#pemail').val(); 
            let y = $('#semail').val();
            let z = $('#iaddress').val();
            let u = $('#saddress').val();
            let v = $('#pcontact').val();
            let w = $('#scontact').val();
            
            $.ajax({                    
                url:'../routes/insert_contact.php',
                method: 'post',
                data: {pemail:x, semail:y, iaddress:z, saddress:u, pcontact:v, scontact:w},
                success:function(data){    
                    if(data == 200) {
                        alert('Contact Details Added Successfully');
                    } else {
                        alert('Failed to add contact details. Please try again later');
                    }
                }
            });
        });
       
          
        $('.btnEditcontact').on('click', function(e){
            e.preventDefault();
            var id = $(this).attr("id"); 
            var filename = "edit_contact"; 
            
            $.ajax({
                url:"../routes/edit_details.php",
                method:"post",
                dataType:'JSON',
                data: {contact_id: id,filename:filename}, 
                success: function(data){
    
                    $('#p_email1').val(data['pemail']);
                    $('#s_email1').val(data['semail']);
                    $('#i_address1').val(data['paddress']);
                    $('#s_address1').val(data['saddress']);
                    $('#p_contact1').val(data['pcontact']);
                    $('#s_contact1').val(data['scontact']);
                    $('#contact_id').val(data['id']);
                }
            });
    
        });
            
            $('#frmeditcontact').on('submit', function(e){
        
                e.preventDefault();
                var filename = "update_contact"; 
                
                $.ajax({
                        url:'../routes/update_details.php',
                        method: 'post',
                        data: $('#frmeditcontact').serialize(),  
                        success:function(data){
                            if(data == 200) {
                                alert('Details Updated Successfully');
                                window.location.href = window.location.href
                            } else {
                                alert('Failed to update details. Please try again later');
                                window.location.href = window.location.href
                            }
                        }
                    });
                });
        
        
                $('.btnDeletecontact').on('click', function(){
                    var id = $(this).attr("id");  
                    var filename = "delete_contact";
                    $.ajax({
                        url:"../routes/delete_details.php",
                        method: 'post',
                        dataType:'JSON',
                        data: {contact_id: id,filename:filename},                
                        success:function(data){
                            if(data == 200) {
                                                alert('contact Deleted Successfully');
                                                window.location.href = window.location.href
                                            } else {
                                                alert('Failed to contact details. Please try again later');
                                                window.location.href = window.location.href
                                            }
                        }
                    });
                });
                
                    $('#btn_save_feedback_details').on('click', function(e){
                        e.preventDefault(); 
                        let a = $('#name').val(); 
                        let b = $('#email').val();
                        let c = $('#comment').val();
                        let d = $('#rating').val();
                        
                        $.ajax({                    
                            url:'../routes/insert_feedback.php',
                            method: 'post',
                            data: {name:a, email:b, comment:c, rating:d},
                            success:function(data){    
                                if(data == 200) {
                                    alert('Feedback Details Added Successfully');
                                } else {
                                    alert('Failed to add Feedback details. Please try again later');
                                }
                            }
                        });
                    });

                    $('.btnEditFeedback').on('click', function(){
                        var id = $(this).attr("id"); 
                        var filename = "edit_feedback"; 
                        $.ajax({
                            url:"../routes/edit_details.php",
                            method:"post",
                            dataType: 'JSON',
                            data:{feedback_id:id, filename:filename},
                            success: function(data){
                                $('#name1').val(data['name']);
                                $('#email1').val(data['email']);
                                $('#comment1').val(data['comment']);
                                $('#rating1').val(data['rating']);
                                $('#feedback_id').val(data['id']);
                            }
                        });
                    });
        

                    $('#frmEditFeedback').on('submit', function(e){

                        e.preventDefault();
                        var filename = "update_feedback";
            
                        $.ajax({
                            url:'../routes/update_details.php',
                            method: 'post',                            
                            data: $('#frmEditFeedback').serialize(),            success:function(data){
                                if(data == 200) {
                                    alert('Details Updated Successfully');
                                    window.location.href = window.location.href
                                } else {
                                    alert('Failed to update details. Please try again later');                
                                    window.location.href = window.location.href
                                }
                            }
                        });
                    });
            
                    $('.btnDeletefeedback').on('click', function(){
                        var id = $(this).attr("id");  
                        var filename = "delete_feedback";
                        $.ajax({
                            url:"../routes/delete_details.php",
                            method:"post",
                            dataType: 'JSON',                
                            data:{feedbackId:id, filename:filename},
                            success: function(data){
                                if(data == 200) {
                                        alert('Feedback Deleted Successfully');
                                        window.location.href = window.location.href
                                    } else {
                                        alert('Failed to delete Feedback. Please try again later');
                                        window.location.href = window.location.href
                                    }
                            }
                        });
            
                    });
            


        $('#frmSlider').on('submit', function(e){
            e.preventDefault();
            var formData = new FormData(this);
            var pic_size = $('#slider_image')[0].files[0].size;//get file size 
            var pic_type = $('#slider_image')[0].files[0].type;

            if(pic_size > 55000) {
                alert('Image size is too large. Please upload image having size less than 55kb');
                $('#slider_image').css({border: "2px solid yellow"});
                return 0;
            } else {
                if(pic_type == 'image/jpeg' || pic_type == 'image/png' || pic_type == 'image/jpg') {
                    $('#slider_image').css({border: "2px solid green"});
                } else {
                    alert('Image format is invalid. Please upload image having png/jpg extension');
                    $('#slider_image').css({border: "2px solid red"});
                    return 0;
                }
            }
            $.ajax({
                url:'../routes/insert_slider.php',
                method: 'post',
                data: formData,
                cache:false,
                contentType: false,
                processData: false,
                success:function(data){
                    if(data == 200) {
                        alert('Slider Details Added Successfully');
                        window.location.href = window.location.href
                    } else {
                        alert('Failed to add Slider details. Please try again later');
                    }
                }
            });
        });


        $('#no_of_days').on('keyup', function() {
            var no_of_days = $(this).val();
            var no_of_nights = $('#no_of_nights');


            if (no_of_days > 0) { 
                $('#no_of_nights').val(no_of_days - 1);
            } else{
                $('#no_of_nights').val('');
            }
        });
           

                    //if a valueis not a no
            
            $('.btnEditPackage').on('click', function(){
               
                var id = $(this).attr("id");  
                var filename = "edit_Package"; 
                
                $.ajax({
                    url:"../routes/edit_details.php",
                    method:"post",
                    dataType: 'JSON',                
                    data:{Package_id:id, filename:filename},
                    success: function(data){

                        $('#package_name1').val(data['package_name']);
                        $('#package_type1').val(data['package_type']);
                        $('#no_of_days1').val(data['no_of_days']);
                        $('#no_of_nights1').val(data['no_of_nights']);
                        $('#package_cost1').val(data['package_cost']);
                        $('#myImage1').attr('src', '../../assets/images/packages/' + data['image']);
                        $('#package_id').val(data['id']);
                    }
                });

            });

        $('#no_of_days1').on('keyup', function() {
            var no_of_days = $(this).val();
            var no_of_nights = $('#no_of_nights1');


            if (no_of_days > 0) { 
                $('#no_of_nights1').val(no_of_days - 1);
            } else{
                $('#no_of_nights1').val('');
            }
        });
        

            $('#frmeditPackage').on('submit', function(e){

                e.preventDefault();
                var formData = new FormData(this);
                
                $.ajax({
                        url:'../routes/update_details.php',
                        method: 'post',
                        data: formData,
                        cache:false,
                        contentType: false,
                        processData: false, 
                        success:function(data){
                            if(data == 200) {
                                alert('Details Updated Successfully');
                                window.location.href = window.location.href
                            } else {
                                alert('Failed to update details. Please try again later');
                                window.location.href = window.location.href
                            }
                        }
                    });
                });

                $('#frmeditslider').on('submit', function(e){

                            e.preventDefault();
                            var formData = new FormData(this);
                            var filename = "update_slider";
                            $.ajax({
                                    url:'../routes/update_details.php',
                                    method: 'post',
                                    data: formData,
                                    cache:false,
                                    contentType: false,
                                    processData: false, 
                                    success:function(data){
                                        if(data == 200) {
                                            alert('Details Updated Successfully');
                                            window.location.href = window.location.href
                                        } else {
                                            alert('Failed to update details. Please try again later');
                                            window.location.href = window.location.href
                                        }
                                    }
                                });
                            });
        
        $('#image').on('change', function(){
            var tmppath = URL.createObjectURL(event.target.files[0]);
            $('#myImage1').attr('src',tmppath);
        });

            $('#frmPackage').on('submit', function(e){
                e.preventDefault();
                var formData = new FormData(this);
                var pic_size = $('#image')[0].files[0].size;//get file size 
                var pic_type = $('#image')[0].files[0].type;
                
                if(pic_size > 2035597) {
                    alert('Image size is too large. Please upload image having size less than 2MB');
                    $('#image').css({border: "2px solid yellow"});
                    return 0;
                } else {
                    if(pic_type == 'image/jpeg' || pic_type == 'image/png' || pic_type == 'image/jpg') {
                        $('#image').css({border: "2px solid green"});
                    } else {
                        alert('Image format is invalid. Please upload image having png/jpg extension');
                        $('#image').css({border: "2px solid red"});
                        return 0;
                    }
                }
                $.ajax({
                        url:'../routes/insert_details.php',
                        method: 'post',
                        data: formData,
                        cache:false,
                        contentType: false,
                        processData: false, 
                        success:function(data){
                            if(data == 200) {
                                alert('Package Added Successfully');
                                window.location.href = window.location.href
                            } else {
                                alert('Failed to add package details. Please try again later');
                                window.location.href = window.location.href
                            }
                        }
                    });
                });
                
               
 $('.btnDeletepackage').on('click', function(){
var id = $(this).attr("id");
var filename = "delete_package";
$.ajax({
    url:"../routes/delete_details.php",
    method: 'post',
    dataType:'JSON',
    data: {package_id: id,filename:filename},                
    success:function(data){
        if(data == 200) {
                            alert('Slider Deleted Successfully');
                            window.location.href = window.location.href
                        } else {
                            alert('Failed to delete slider. Please try again later');
                            window.location.href = window.location.href
                        }
    }
});
});



                               
       
        $('.btnEditSlider').on('click', function(){
           
            var id = $(this).attr("id");  
            var filename = "edit_slider";
            $.ajax({
                url:"../routes/edit_details.php",
                method:"post",
                dataType: 'JSON',                
                data:{slider_id:id, filename:filename},
                success: function(data){
                    $('#slider_headline').val(data['slider_headline']);
                    $('#slider_tagline').val(data['slider_tagline']);
                    $('#myImage').attr('src', '../../assets/images/slider/' + data['image']);
                    $('#slider_status').val(data['slider_status']);
                    $('#slider_id').val(data['id']);
                }
            });

        });

        $('.btnDeleteSlider').on('click', function(){
            var id = $(this).attr("id");  
            var filename = "delete_slider";
            $.ajax({
                url:"../routes/delete_details.php",
                method:"post",
                dataType: 'JSON',                
                data:{slider_id:id, filename:filename},
                success: function(data){
                    if(data == 200) {
                            alert('Slider Deleted Successfully');
                            window.location.href = window.location.href
                        } else {
                            alert('Failed to delete slider. Please try again later');
                            window.location.href = window.location.href
                        }
                }
            });

        });

        $('#frmeditslider').on('submit', function(e){

            e.preventDefault();
            var formData = new FormData(this);
            var filename = "update_slider";
            $.ajax({
                    url:'../routes/update_details.php',
                    method: 'post',
                    data: formData,
                    cache:false,
                    contentType: false,
                    processData: false, 
                    success:function(data){
                        if(data == 200) {
                            alert('Details Updated Successfully');
                            window.location.href = window.location.href
                        } else {
                            alert('Failed to update details. Please try again later');
                            window.location.href = window.location.href
                        }
                    }
                });
            });

       
        

        $('#frmSliderUpdate').on('submit', function(e){
            e.preventDefault();
            var formData = new FormData(this);
            var pic_size = $('#slider_image')[0].files[0].size;//get file size 
            var pic_type = $('#slider_image')[0].files[0].type;
            
            if(pic_size > 55000) {
                alert('Image size is too large. Please upload image having size less than 55kb');
                $('#slider_image').css({border: "2px solid yellow"});
                return 0;
            } else {
                if(pic_type == 'image/jpeg' || pic_type == 'image/png' || pic_type == 'image/jpg') {
                    $('#slider_image').css({border: "2px solid green"});
                } else {
                    alert('Image format is invalid. Please upload image having png/jpg extension');
                    $('#slider_image').css({border: "2px solid red"});
                    return 0;
                }
            }
            $.ajax({
                url:'../routes/insert_slider.php',
                method: 'post',
                data: formData,
                cache:false,
                contentType: false,
                processData: false,
                success:function(data){
                    alert(data);
                    if(data == 200) {
                        alert('Slider Details Added Successfully');
                        window.location.href = window.location.href
                    } else {
                        alert('Failed to add Slider details. Please try again later');
                    }
                }
            });
        });

        $('#slider_image').on('change', function(){
            var tmppath = URL.createObjectURL(event.target.files[0]);
            $('#myImage').attr('src',tmppath);
        });

        $('#imageModal').on('change', function(){
            var tmppath = URL.createObjectURL(event.target.files[0]);
            $('#myImage1').attr('src',tmppath);
        });


        $('#inc_exc').on('change', function(){
            $('#btn_add_inc_exc').css('display', 'block');
            if($(this).val() == 0) {
                $('#myspan').text('Add Package Includes')
            } else {
                $('#myspan').text('Add Package Excludes')
            }
        });

        $('#btn_add_inc_exc').on('click', function(e){
            e.preventDefault();
            var filename = "insert_inc_exc";
            var val = [];
            $(':checkbox:checked').each(function(i){
                val[i] = $(this).val();
            });
            
            var p_id =  $('#p_id').val();
            var is_i_e =  $('#inc_exc').val();

            $.ajax({
                url:'../routes/insert_details.php',
                method: 'post',
                data: {pid:p_id, incexc:val, isie:is_i_e,filename:filename},
                success:function(data){
                    if(data == 200) {
                        alert('Package Include Added Successfully');
                        window.location.href = window.location.href
                    } else {
                        alert('Failed to add includes details. Please try again later');

                    }
                }
            });
        });

    });
       
