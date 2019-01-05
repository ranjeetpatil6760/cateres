<!DOCTYPE html><html>
<!-- Mirrored from colorlib.com/polygon/adminator/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Dec 2018 09:19:04 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head><title>Log In</title><style>#loader{transition:all .3s ease-in-out;opacity:1;visibility:visible;position:fixed;height:100vh;width:100%;background:#fff;z-index:90000}#loader.fadeOut{opacity:0;visibility:hidden}.spinner{width:40px;height:40px;position:absolute;top:calc(50% - 20px);left:calc(50% - 20px);background-color:#333;border-radius:100%;-webkit-animation:sk-scaleout 1s infinite ease-in-out;animation:sk-scaleout 1s infinite ease-in-out}@-webkit-keyframes sk-scaleout{0%{-webkit-transform:scale(0)}100%{-webkit-transform:scale(1);opacity:0}}@keyframes sk-scaleout{0%{-webkit-transform:scale(0);transform:scale(0)}100%{-webkit-transform:scale(1);transform:scale(1);opacity:0}}</style><link href="style.css" rel="stylesheet"></head><body class="app"><div id="loader"><div class="spinner"></div></div><script type="text/javascript">window.addEventListener('load', () => {
        const loader = document.getElementById('loader');
        setTimeout(() => {
          loader.classList.add('fadeOut');
        }, 300);
      });</script><div class="peers ai-s fxw-nw h-100vh"><div class="d-n@sm- peer peer-greed h-100 pos-r bgr-n bgpX-c bgpY-c bgsz-cv" style="background-image:url(assets/static/images/bg.jpg)"><div class="pos-a centerXY"><div class="bgc-white bdrs-50p pos-r" style="width:120px;height:120px"><img class="pos-a centerXY" src="img/logo.png" alt=""></div></div></div><div class="col-12 col-md-4 peer pX-40 pY-80 h-100 bgc-white scrollable pos-r" style="min-width:320px"><h4 class="fw-300 c-grey-900 mB-40">Login</h4><form action="" method="post"><div class="form-group"><label class="text-normal text-dark">Username</label><input type="text" class="form-control" name="Username" placeholder="Username"></div><div class="form-group"><label class="text-normal text-dark">Password</label><input type="password" class="form-control" name="Password" placeholder="Password"></div><div class="form-group"><div class="peers ai-c jc-sb fxw-nw"><div class="peer"><button type="submit" class="btn btn-primary" name="submit">Login</button></div></div></div></form></div></div>
<?php
include "db.php";

if(isset($_POST['submit']))
{
$u=$_POST['Username'];
$p=$_POST['Password'];

$q=mysqli_query($con,"select * from login where username='$u'");

while($row=mysqli_fetch_array($q))
{
if($row['password']==$p)
{
echo "<script> alert('Successfully Logged')";
header('Location:http://localhost/salavi_admin/index.php');
	echo " </script>";	
}
else
{
	echo "<script> alert('Failed to login')";
	echo " </script>";
}
}


}
?>
      <script type="text/javascript" src="vendor.js"></script><script type="text/javascript" src="bundle.js"></script></body>
<!-- Mirrored from colorlib.com/polygon/adminator/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Dec 2018 09:19:05 GMT -->
</html>
