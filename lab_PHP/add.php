<!DOCTYPE html>
<html>
<head>
	<title>Add User</title>
    <script>
        
        function addUser()
        {
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

            var userData = "name="+name+"&username="+username+"&password="+password+"&age="+age+"&role="+role+"&profile="+profile+"&email="+email+"&webpage="+webpage;
		
            xmlhttp.open("POST","includes/addUser.php",true);
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

    <h2>Add Page</h2>
	<form id="addForm" method="">
      <label >name:</label><br>
      <input type="text" id="name"><br>
      <label >username:</label><br>
      <input type="text" id="username"><br>
      <label >password:</label><br>
      <input type="text" id="password"><br>
      <label >age:</label><br>
      <input type="text" id="age"><br>
      <label >role:</label><br>
      <input type="text" id="role"><br>
      <label >profile:</label><br>
      <input type="text" id="profile"><br>
      <label >email:</label><br>
      <input type="text" id="email"><br>
      <label >webpage:</label><br>
      <input type="text" id="webpage"><br>
      <br>
      <input id="addSubmit" type="submit" value="add"onclick="addUser()">
    </form> 


</body>
</html>