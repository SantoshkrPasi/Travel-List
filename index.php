<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="container">
             <div class="heading">
                <h3>Welcome to Kalyani Government Engineering College</h3>
                <p>Enter Your Details And Submit This Form To Confirm Your Participation In The Trip</p>
             </div>             
                 <form action="submit" method="post" class="body">
                        <input type="text" name = "name" id = "name" placeholder = "Enter your Name">
                        <input type="text" name = "age" id = "age" placeholder = "Enter Your Age">
                        <input type="text" name = "gender" id = "gender" placeholder = "Enter Your Gender">
                        <input type="email" name = "email" id = "email" placeholder = "Enter Your Email">
                        <input type="phone" name = "phone" id = "phone" placeholder = "Enter Your Phone">
                        <textarea name="desc" name = "desc" id = "desc" type="text" placeholder ="Message" ></textarea>
                        <button type="submit">Submit</button>
                 </form>
             
    </div>    
</body>
</html>