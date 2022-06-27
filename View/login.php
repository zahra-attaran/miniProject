<?php include "header.php"; ?>

<br>
<div class="container mt-5">
<?php if(isset($_SESSION["message"])): ?>
 <div class="row">
    <?php if($_SESSION["message_type"]=="tabrik"): ?>
     <div class="alert alert-warning alert-dismissible fade show" role="alert">
         <?php echo $_SESSION["message"];?>
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
         </button>
     </div>

     <?php else : ?>
     <div class="alert alert-danger alert-dismissible fade show" role="alert">
         <?php echo $_SESSION["message"];?>
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
         </button>
     </div>
     <?php endif; ?>
 </div>
    <?php unset($_SESSION["message"]); ?>
<?php endif; ?>


    <?php include "header.php"; ?>



    <div class="main">
        <input type="checkbox" id="chk" aria-hidden="true">
        <div class="form-check form-switch d-flex justify-content-center">
            <label class="form-check-label labellogin mx-4 my-2 text-black" for="flexSwitchCheckChecked">دکتر</label>
            <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" name="dscheck" checked>
            <label class="form-check-label labellogin mx-4 my-2 text-black" for="flexSwitchCheckChecked">بیمار</label>
        </div>
        <div class="signup">
            <form method="post" action="register_process">
                <label class="labellogin" for="chk" aria-hidden="true">Sign up</label>
                <div class="d-flex justify-content-center">
                    <div>
                        <input class="inputlogin" type="text" name="user_name" placeholder="User name" required="">
                        <input class="inputlogin" type="password" name="pswd" placeholder="Password" required="">
                        <input class="inputlogin" type="email" name="mobile" placeholder="mobile" required="">
                        <button class="loginbtn" type="submit">Sign up</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="login">
            <form method="post" action="signIn">
                <label class="labellogin" for="chk" aria-hidden="true">Login</label>
                <div class="d-flex justify-content-center">
                    <input class="inputlogin" type="text" name="username" placeholder="Email" required="">
                    <input class="inputlogin" type="password" name="pswd" placeholder="Password" required="">
                    <button class="loginbtn" type="submit">Login</button>
                </div>
            </form>
        </div>
    </div>


    <?php include "footer.php"; ?>


    <script type="text/javascript">
    $('#date1').MdPersianDateTimePicker({
        targetTextSelector: '#inputDate1',
        dateFormat: 'yyyy-MM-dd',

    });

</script>
<?php include "footer.php"; ?>
