<?php
echo "<a href=\"./\">BACK</a>";
/* 2. --- FORM VALIDATION ---
 *
 * Validation is not easy, think about what kind of the data you wanna get, that's a good way to secure your website.
 *
 */

echo "<h1>2. FORM VALIDATION</h1>";

/*
 * EXERCISE 1 : Validations rules the form :
 * Name : Required + Must only contain letters.
 * Email : Required + Must contain a valid Email Address (with @ and .).
 * Gender : Required + Must select one.
 *
 */

/*
 * SUGGESTION : DO IT OUTSIDE the <?php ?>
 * Below the echo
 *
 */

echo "<br><br>DO EXERCISE INSIDE COMMENT CODE BELOW THIS LINE<hr>";
?>

<?php
    $arr=array();

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $name = validateInput($_POST["name"]);
        $email = validateInput($_POST["email"]);
        $gender = validateInput($_POST["gender"]);

        $nameErr= checkName($name);
        $emailErr= checkEmail($email);        
        $genderErr= checkGender($gender);
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
    function addArr($key, $value){

    }
    function showErr($err){
        if(isset($err)&& empty(!$err)){
            echo "$err";
        }
    }
    function validateInput($data)
    {
        $data= trim($data);                 //loai bo ki tu thua
        $data = stripslashes($data);        //nó xóa các ký tự \ trong chuỗi $str
        $data = htmlspecialchars($data);    //chuyển các thể html trong chuỗi $str sang  dạng thực thể của chúng
        return $data;                                      //specialchars bo ki tu dac biet ma php bi loi
    }
?>

<form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post">
    Name: <input type="text" name="name" id="">
      <p><?php  showErr($nameErr); ?></p><br>
    Email: <input type="text" name="email" id="">
    <p><?php showErr($emailErr); ?></p><br>
    Gender:
        <input type="radio" name="gender" id="" value="male" checked="checked"> Male
        <input type="radio" name="gender" id="" value="female"> Female
        <p><?php showErr($genderErr); ?></p><br>
    <input type="submit" value="submit">    
</form>
