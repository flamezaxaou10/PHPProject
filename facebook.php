<script>
  var bFbStatus = false;
  var fbID = "";
  var fbName = "";
  var fbEmail = "";

  window.fbAsyncInit = function() {
    FB.init({
      appId      : '137059933509479',
      cookie     : true,
      xfbml      : true,
      version    : 'v2.8'
    });
    FB.AppEvents.logPageView();
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/th_TH/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));


function statusChangeCallback(response)
{

		if(bFbStatus == false)
		{
			fbID = response.authResponse.userID;

			  if (response.status == 'connected') {
				getCurrentUserInfo(response)
			  } else {
				FB.login(function(response) {
				  if (response.authResponse){
					getCurrentUserInfo(response)
				  } else {
					console.log('Auth cancelled.')
				  }
				}, { scope: 'email' });
			  }
		}


		bFbStatus = true;
}

function getCurrentUserInfo() {
  FB.api('/me?fields=name,email', function(userInfo) {

	  fbName = userInfo.name;
	  fbEmail = userInfo.email;
	  	$("#hdnFbID").val(fbID);
		$("#hdnName ").val(fbName);
		$("#hdnEmail").val(fbEmail);
		$("#frmMain").submit();



  });
}

function checkLoginState() {
  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });
}


</script>

<form action="#" method="post" name="frmMain" id="frmMain">
	<input type="hidden" id="hdnFbID" name="hdnFbID">
	<input type="hidden" id="hdnName" name="hdnName">
	<input type="hidden" id="hdnEmail" name="hdnEmail">
</form>
    <?php
      if($_POST){
        $fbID = $_POST['hdnFbID'];
        $fbName = $_POST['hdnName'];
        $fbEmail = $_POST['hdnEmail'];
        $sql = "INSERT INTO member (Member_User,Member_Firstname,Member_Email) VALUES ('$fbID','$fbName','$fbEmail');";
        $connect->query($sql);
        $_SESSION['user'] = $fbID;
        $_SESSION['username'] = $fbName;
        $_SESSION['count'] = 0;
        $_SESSION['cart'] = array();

      }
     ?>
