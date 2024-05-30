<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<form>
    <input type="text" name="name" placeholder="Enter Name" id="name"><br><br>
    <input type="text" name="amount" placeholder="Enter Amount" id="amount"><br><br>
    <input type="button" name="button" value="Pay Now" onclick="MakePayment()"><br><br>
</form>
<script>
    function MakePayment(){
        Var name =$("#name").val();
        Var amount =$("#amount").val();
    }
    var options={
        "key": rzp_test_8XkNK4SysAx15e ,
        "amount":amount*100,
        "currency":INR,
        "name":"name",
        "description":"Test Transaction",
        "image":"https://example.com/your_logo",
        "order_id":"order_Ef80WJDPBmAeNt",
        "account_id":"acc_Ef7ArAsdU5t0XL",
        "handler":function(response){
            console.log(response);
            jQuery.ajax({
                type:"POST",
                url:"payment.php"
                data:"pay_id"="+response.razorpay_payment_id"+"&amount="+amount+"&name="+name;
                success:function(result){
                    window.location.href="success.php";
                }
            })
        }
    };
    var rzp1=new Razorpay(options);
    document.getElementById("rzp-button1").onclick=function(e){
        rzp1.open();
    }
</script>