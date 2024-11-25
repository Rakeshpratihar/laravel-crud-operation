<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/index.css">
</head>
<body>
    
<div class="container">
    <form action="" method="post" >
        @csrf
        <div style="margin-top:25px;">
        <label>Name:</label>
        <input type="text" name="myname" style="font-size:20px;" >
        </div>
        <div style="margin-top:25px;">
        <label>Email:</label>
        <input type="text" name="Email" style="font-size:20px;">
        </div>
        <div style="margin-top:25px;">
        <label>Phone:</label>
        <input type="text" name="Phone" style="font-size:20px;">
        </div>
        <div style="margin-top:25px;">
        <label>add:</label>
        <input type="text" name="Address" style="font-size:20px;margin-left:15px">
        </div>
        
        <div style="margin-top:30px; margin-left:40%;">
        <button>SUBMIT</button>
        </div>
    </form>
</div>


</body>
</html>

