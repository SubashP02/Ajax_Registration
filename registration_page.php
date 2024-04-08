
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>User Registration</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(
        function(){
            $("#submit").submit(function(event){
                    event.preventDefault();
                    $.ajax({
                        method:"post",
                        url:"registration_backend.php",
                        data:$("#registrationForm").serialize(),
                        dataType:"text",
                        success: function(reponse){
                            $("#description").text(reponse);
                        }
                    });
            }
                
            );
        }
    );
</script>
</head>
<body>

<h2>User Registration Form</h2>
<form id="registrationForm" method="post">
    <div>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" >
    </div>
    <div>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" >
    </div>
    <div>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" >
    </div>
    <div>
        <label for="confirmPassword">Confirm Password:</label>
        <input type="password" id="confirmPassword" name="confirmPassword" >
    </div>
    <div>
        <button id="submit" type="submit">Register</button>
    </div>
</form>
<div>
    <p1 id="description"></p1>
</div>
</body>
</html>
