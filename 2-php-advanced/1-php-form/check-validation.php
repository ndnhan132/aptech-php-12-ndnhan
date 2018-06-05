<?php
    session_start();
?>
<?php
    $arr=array();
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $name = validateInput($_POST["name"]);
        $email = validateInput($_POST["email"]);
        $gender = validateInput($_POST["gender"]);
        $arr["nErr"]=array("Name"=>$name, "Email"=>$email, "Gender"=>$gender);
        $nameErr= checkName($name);
        $emailErr= checkEmail($email);        
        $genderErr= checkGender($gender);
        $arr["Err"]=array("Name"=>$nameErr, "Email"=>$emailErr, "Gender"=>$genderErr);
    }
    function checkEmail($data){
        $err="";
        if($data){
            if (!filter_var($data, FILTER_VALIDATE_EMAIL)) {
                $err = "Invalid email format";
                }
            } else {
                $err = "Email field is required";
        }
        return $err;    
    }
    function checkGender($data){
        $err="";
        if(!$data){
            $err = "Gender field is required";
        }
        return $err;
    }
    function checkName($data){
        $err="";
        if($data){
            if(!preg_match("/^[a-zA-z ]*$/", $data)) {
                $err="Only letters and white space allowed";
             }
        }else{
                $err = "Name field is required";
        }
        return $err;
    }
    function addArr($pos,$mName, $mEmail, $mGender){
        $mArr['Name'] =$mGame;
        $mArr["Email"]= $mEmail;
        $mArr["Gender"]= $mGender;
        $array[$pos]= $mArr;
        return $array;
    }
    function validateInput($data)
    {
        $data= trim($data);                 //loai bo ki tu thua
        $data = stripslashes($data);        //nó xóa các ký tự \ trong chuỗi $str
        $data = htmlspecialchars($data);    //chuyển các thể html trong chuỗi $str sang  dạng thực thể của chúng
        return $data;                                      //specialchars bo ki tu dac biet ma php bi loi
    }

    $_SESSION["allData"]=$arr;
    // $_SESSION["name"]= $name;
    
    header("Location: 2-validation.php");
?>