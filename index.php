<?php
$amount=$_GET['am'];
$link = "upi://pay?pa=billbook8781224@yesbank&pn=Dues&tn=Loan_Dues&am=";
$newURL = $link.$amount;
If($amount){
    echo $newURL;

}else{
    echo "error";
}
 header('Location: '.$newURL);

?>
Footer
