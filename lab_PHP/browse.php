<!DOCTYPE html>
<html>
<head>
	<title>Browse</title>
    <script>

        function browseUsers(role)
        {
            if(window.XMLHttpRequest)
            {
                xmlhttp = new XMLHttpRequest();
            }
            else
            {
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }

            document.getElementById("filter").innerHTML = role;
            
            xmlhttp.open("GET","includes/browseUsers.php?role="+role,true);
            xmlhttp.send();

            xmlhttp.onreadystatechange = function()
            {
                if(this.readyState==4 && this.status == 200)
                {
                    document.getElementById("users").innerHTML = this.responseText;
                }
            }
		}


        function lookupByName(name)
        {
            if(window.XMLHttpRequest)
            {
                xmlhttp = new XMLHttpRequest();
            }
            else
            {
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }

            document.getElementById('name').value = name;

            xmlhttp.open("GET","includes/lookup.php?name="+name,true);
            xmlhttp.send();

            xmlhttp.onreadystatechange = function()
            {
                if(this.readyState==4 && this.status == 200)
                {
                    document.getElementById("byName").innerHTML = this.responseText;
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
        
        #button{
             display: inline-block;
             margin-top:20px;
		}

        #lookup{
             margin-top: 100px;     
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

    <h2>Choose from the list to browse users by role</h2>

    <form>
        <select id="select" name="users" onchange="browseUsers(this.value)">
        <option value="aa">aa</option>
        <option value="bb">bb</option>
        <option value="cc">cc</option>
        <option value="dd">dd</option>
        </select>
    </form>

    <p id="filter">Last filter used </p>

    <b id="users"> USERS: </b>

    <h2 id="lookup">Enter a part of the name to search a user</h2>
    <form>
    <label for="name">Name:</label>
    <input type="text" id="name" name="Name" onchange="lookupByName(this.value)">
    </form>

    <b id="byName">Users found: </b>

</body>