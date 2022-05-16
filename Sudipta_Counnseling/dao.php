<?php
include 'db.php';
/*Insert into Database*/
function adduser($user){
    $nam=$user['num'];
    $dep=$user['dept'];
    $con=$GLOBALS['con'];
    $sql="insert into num(Avg,Dept) values(?,?)";
    $st=$GLOBALS['con']->prepare($sql);
    $st->bind_param("ss",$nam,$dep);
        if($st->execute()){
        return true;
    }
    else{
        return false;
    }
}

/*Display Form Database */
function getData(){
    $con=$GLOBALS['con'];
    $sql="select * from num";
    $res=$con->query($sql);
    $users=array();
    if($res->num_rows>0){
        while($row=$res->fetch_assoc()){
        $users[]=$row;
        }
    }
    return $users;
}
/*Delete Data */
function delUser($id){
    $con=$GLOBALS['con'];
    $sql="delete from num where id=?";
    $st=$con->prepare($sql);
    $st->bind_param("i",$id);
    if($st->execute()){
        return true;
    }
    else{
        return false;
    }
}
?>