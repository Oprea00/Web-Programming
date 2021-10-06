<!DOCTYPE html>
<html>
<head>
	<title>Get User</title>
    <script>

        function showUsers()
        {
            if (window.XMLHttpRequest)
            {
                xmlhttp = new XMLHttpRequest();
			}
            else 
            {
                 xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}

            xmlhttp.onreadystatechange = function()
            {
                if(this.readyState==4 && this.status == 200)
                {
                    document.getElementById("users").innerHTML = this.responseText;
                }
            }

            xmlhttp.open("GET","includes/getAllUsers.php",true);
            xmlhttp.send();
		}

    </script>
	<style>
        body{
            background-color: #3F3A36;
            color: white;
            text-align:center;
            }
        
        #button{
             display: inline-block;
             margin-top:20px;
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
    
    <h2>Click the button to see all users</h2>
    <input id="button" type="button" value="Get All Users" onclick="showUsers()" />
    <b id="users"> USERS: </b>
</body>