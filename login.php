<html>
    <head>
        
        <title>My first PHP Website</title>
     <style>
a:link, a:visited {position:absolute;
    background-color: #f44336;
    color: white;
    padding: 14px 25px;
    margin-left: 500px;
    margin-top: 450px;

    text-align: center;
    text-decoration: none;
    display: inline-block;
}


a:hover, a:active {
    background-color: red;
}


h2 { position:absolute;
  
   margin-left: 500px;
   border-bottom:thick dotted black;
    color: cyan;
    font-family: verdana;
    font-size: 300%;

}

input[type=text], select {position:absolute;
    margin-top: 200px;
    margin-left: 500px;
    width: 20%;
    padding: 12px 20px;
  
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=password], select {position:absolute;
    margin-top: 250px;
    margin-left: 500px;
    
    width: 20%;
    padding: 12px 20px;
    
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {position:absolute;
    margin-top: 300px;
    margin-left: 500px;
  
    width: 20%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
  
    border: none;
    border-radius: 4px;
    cursor: pointer;
}


input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}


</style>
    </head>
    <body background="bgl.png">
        <h2>Login Page</h2>
        <a href="index.php">Click here to go back</a><br/><br/>
        <form action="checklogin.php" method="POST">
            <input type="text" name="username" placeholder="username" required="required"> <br/>
           <input type="password" name="password" placeholder="password" required="required"><br/>
           <input type="submit" value="Login">
        </form>
    </body>
</html>