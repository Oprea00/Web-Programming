<!DOCTYPE html>
<html>
<head>
	<title>Update User</title>
    <script>

    function updateUser()
        {
            var id = document.getElementById('id').value;
            var name = document.getElementById('name').value;
            var username = document.getElementById('username').value;
            var password = document.getElementById('password').value;
            var age = document.getElementById('age').value;
            var role = document.getElementById('role').value;
            var profile = document.getElementById('profile').value;
            var email = document.getElementById('email').value;
            var webpage = document.getElementById('webpage').value;

            if (window.XMLHttpRequest)
            {
                xmlhttp = new XMLHttpRequest();
			}
            else 
            {
                 xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}

            var userData = "id="+id+"&name="+name+"&username="+username+"&password="+password+"&age="+age+"&role="+role+"&profile="+profile+"&email="+email+"&webpage="+webpage;
		
            xmlhttp.open("POST","includes/updateUser.php",true);
            xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xmlhttp.send(userData);

            xmlhttp.onreadystatechange = function()
            {
                if(this.readyState==4 && this.status == 200)
                {
                    alert(this.responseText);
                }
            }

        }

	</script>

    <style>
        body{
            background-color: #3F3A36;
            color: white;
            text-align:center;
            }
        
        form{
             display: inline-block;
             padding-top:100px;
		}

        #homepage{
            width:110px;
            height:50px;
            margin:20px;
            position: absolute;
            left: 50px;
		}

    </style>
</head>
<body>
    <button id="homepage" type="button" onclick="location.href='./index.html'">Homepage</button>
	
    <h2>Update Page</h2>
	<form id="updateForm" method="">
      <label >id:</label><br>
      <input type="text" id="id"><br>
      <label >New name:</label><br>
      <input type="text" id="name"><br>
      <label >New username:</label><br>
      <input type="text" id="username"><br>
      <label >New password:</label><br>
      <input type="text" id="password"><br>
      <label >New age:</label><br>
      <input type="text" id="age"><br>
      <label >New role:</label><br>
      <input type="text" id="role"><br>
      <label >New profile:</label><br>
      <input type="text" id="profile"><br>
      <label >New email:</label><br>
      <input type="text" id="email"><br>
      <label >New webpage:</label><br>
      <input type="text" id="webpage"><br>
      <br>
      <input id="updateSubmit" type="submit" value="update"onclick="updateUser()">
    </form> 

</body>
</html>