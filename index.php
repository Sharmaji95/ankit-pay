<?php
$amount=$_GET['am'];
$link = "upi://pay?pa=vinayvats52@oksbi&pn=Dues&tn=Loan_Dues&am=";
$newURL = $link.$amount;
If($amount){
    echo $newURL;

}else{
    echo "error";
}
 header('Location: '.$newURL);

?>

// billbook8781224@yesbank
