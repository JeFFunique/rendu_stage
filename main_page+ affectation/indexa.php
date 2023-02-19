<?php





if (isset($_POST['submit'])){
    
	$database="stage";
$db_handle=mysqli_connect('localhost','root',"");
$db_found=mysqli_select_db($db_handle,$database);

	$nom=isset($_POST["text"])? $_POST["text"]: "";
    $selected=$_POST["affecter"];
	$existing=isset($_POST["existant"])? $_POST["existant"]: "";
	$mail=isset($_POST["affectation"])? $_POST["affectation"]: "";
	$dossier=isset($_POST["dossier"])? $_POST["dossier"]: "";
	$excel=isset($_POST["excel"])? $_POST["excel"]: "";
	$sql="";
	
	
   
    if(isset($_POST['existant'])){
        $existing="oui";
        
    
    }
	else{
		$existing="non";
	}
    if(isset($_POST['affectation'])){
        $mail="oui";
        
    
    }
	else{
		$mail="non";
	}
	
    if(isset($_POST['dossier'])){
        $dossier="oui";
        
    
    }
	else{
		$dossier="non";
	}
    if(isset($_POST['existant'])){
        $excel="oui";
        
    
    }
	else{
		$excel="non";
	}
	$sql="INSERT INTO emails(nom, affecte, deja_existant, mail_affectation, dossier_complete, excel_complete) VALUES('$nom', '$selected', '$existing', '$mail', '$dossier', '$excel')";
					$result=mysqli_query($db_handle, $sql);
					echo "email ajoute avec succes";



        
    }   
 mysqli_close($db_handle);
  





?>