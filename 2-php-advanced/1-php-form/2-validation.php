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
session_start();
?>

<?php
    $arr= $_SESSION["allData"];
    // var_dump($arr);
    $arr1=$arr["nErr"];
    // var_dump($arr1);
    // $name= $arr1["Name"];
    // $name= $_SESSION["name"];
    $name= $arr1["Name"];
    $email= $arr1["Email"];
    $gender= $arr1["Gender"];
    $arr2= $arr["Err"];
    // var_dump($arr2);
    $nameErr= $arr2["Name"];
    $emailErr= $arr2["Email"];
    $genderErr= $arr2["Gender"];

    $arr1= $arr2= $arr= "";

    function showErr($err){
        if(isset($err)&& empty(!$err)){
            echo "$err";
        }
    }


    var_dump(!empty($name));
?>

<form action="check-validation.php" method="post">
    Name: <input type="text" name="name" id="" value="<?php if(!empty($name)){ echo "$name";} ?>">
      <p><?php  showErr($nameErr); ?></p><br>
    Email: <input type="text" name="email" id="" value="<?php if(!empty($email)){ echo "$email";} ?>">
    <p><?php showErr($emailErr); ?></p><br>
    Gender:
        <input type="radio" name="gender" id="" value="male" checked="checked"> Male
        <input type="radio" name="gender" id="" value="female"> Female
        <p><?php showErr($genderErr); ?></p><br>
    <input type="submit" value="submit">    
</form>
<?php
if (!$nameErr && !$emailErr && !$genderErr) {
echo "Your name is : $name<br>";
echo "Your email is : $email<br>";
echo "Your gender is : $gender";
$name = $email = $gender = '';
} 
?>