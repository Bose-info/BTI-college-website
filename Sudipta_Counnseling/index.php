<?php
include 'dao.php';
if(isset($_POST['submit'])){
        $b=$_POST['ben'];
        $e=$_POST['eng'];
        $m=$_POST['math'];
        $p=$_POST['phy'];
        $sum=$b+$e+$m+$p;
        $avg=$sum/4;
        echo "Bengali= ".$b."<br>";
        echo "English= ".$e."<br>";
        echo "Math= ".$m."<br>";
        echo "Phy= ".$p."<br>";
        echo "Sum= ".$sum."<br>";
        echo "Avg= ".$avg."<br>";
        if(($avg>20) &&($avg<40) ){
            $dept="DC";
            // echo $dept;
            $user=array("num"=>$avg,"dept"=>$dept);
            $re=adduser($user);
            if($re){    
              header("Location:disply.php");
                 }
        }
        elseif(($avg>=40) &&($avg<60) ){
            $dept="DME";
            // echo $dept;
            $user=array("num"=>$avg,"dept"=>$dept);
            $re=adduser($user);
            if($re){    
              header("Location:disply.php");
                 }
        }
        elseif(($avg>=60) &&($avg<80) ){
            $dept="DEE";
            // echo $dept;
            $user=array("num"=>$avg,"dept"=>$dept);
            $re=adduser($user);
            if($re){    
                header("Location:disply.php");
                 }
        }
        elseif(($avg>=80) &&($avg<=100) ){
            $dept="CST";
            // echo $dept;
            $user=array("num"=>$avg,"dept"=>$dept);
            $re=adduser($user);
            if($re){    
                header("Location:disply.php");
                 }
        }
        else {
            echo "Sorry";
        }
}
/*Call Show Function*/
$f=getData();
/*Delete */
if(isset($_POST['dl'])){
    $id=$_POST['id'];
    delUser($id);
    header("Location:disply.php");
  }
?>