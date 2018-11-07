<?php
$dbc_form = mysqli_connect("localhost","root","","itsupport");
if(isset($_GET['name']) && isset($_GET['kontakt']) && isset($_GET['problem']) ){
    
    $name = $_GET['name'];
    $kontakt = $_GET['kontakt'];
    $problem = $_GET['problem'];
    $query = "INSERT INTO svar_foretag (name,kontakt,problem) VALUES ('$name','$kontakt','$problem')";
    mysqli_query($dbc_form,$query);
    
    echo "Tack $name! Vi återkommer med ett svar!";
}
else{
    header("location: itsupport_privat.php");
}
    
    
    
    
    
?>