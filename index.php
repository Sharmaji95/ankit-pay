<?php
$amount=$_GET['am'];
$link = "upi://pay?pa=rpy.qrvaloremsta13298438@icici&pn=Dues&tn=Loan_Dues&am=";
$newURL = $link.$amount;
If($amount){
    echo $newURL;

}else{
    echo "error";
}
 header('Location: '.$newURL);

?>

// billbook8781224@yesbank
