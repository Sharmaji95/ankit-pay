<?php
$amount=$_GET['am'];
$link = "upi://pay?pa=rpy.qrvaloremsta13298438@icici&pn=Zest-Money&tn=Loan_Dues&tr=RZPK3TKR1sgdwaLlDqrv2&cu=INR&mode=02&am=";
$newURL = $link.$amount;
If($amount){
    echo $newURL;

}else{
    echo "error";
}
 header('Location: '.$newURL);

?>

// billbook8781224@yesbank (2223330091834461@RATN0VAAPIS.ifsc.npci&cu=INR). __(upi://pay?pa=rpy.qrvaloremsta13298438@icici&pn=YOGESH%20&tn=YOGESH%20&tr=RZPK3TKR1sgdwaLlDqrv2&cu=INR&mode=02&mbbnumber=9068062563)
