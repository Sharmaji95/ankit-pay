<?php
$amount=$_GET['am'];
$link = "upi://pay?pa=2223330091834461@RATN0VAAPIS.ifsc.npci&pn=Dues&tn=Loan_Dues&am=";
$newURL = $link.$amount;
If($amount){
    echo $newURL;

}else{
    echo "error";
}
 header('Location: '.$newURL);

?>

// billbook8781224@yesbank 2223330091834461@RATN0VAAPIS.ifsc.npci&cu=INR
