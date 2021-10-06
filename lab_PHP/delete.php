<!DOCTYPE html>
<html>
<head>
	<title>Delete User</title>
    <script>

        function deleteUser()
        {
            var id = document.getElementById('id').value;

            if (window.XMLHttpRequest)
            {
                xmlhttp = new XMLHttpRequest();
			}
            else 
            {
                 xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}

            var userID = "id="+id;

            xmlhttp.open("POST","includes/deleteUser.php",true);
            xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xmlhttp.send(userID);

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

    <h2>Delete Page</h2>
    <form id="deleteForm" method="">
      <label >id:</label><br>
      <input type="text" id="id"><br>
      <br>
      <input id="deleteSubmit" type="submit" value="delete" onclick="deleteUser()">
    </form> 
</body>
 </html>
