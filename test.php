<button id="rzp-button1">Pay</button>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
    var options={
        "key":rzp_test_8XkNK4SysAx15e ,
        "amount":"50000",
        "currency":INR,
        "name":"Uniglobe holidays",
        "description":"Test Transaction",
        "image":"https://example.com/your_logo",
        "order_id":"order_Ef80WJDPBmAeNt",
        "account_id":"acc_Ef7ArAsdU5t0XL",
        "handler":function(response){
            console.log(response);
        }
    };
    var rzp1=new Razorpay(options);
    document.getElementById("rzp-button1").onclick=function(e){
        rzp1.open();
        e.preventDefault();
    }

</script>