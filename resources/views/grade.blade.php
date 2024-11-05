<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details of a Student</title>
</head>
<body>
    <h1?> Student Details </h1> <br>
    <form method = "POST" action="<?=url('result')?>">
        <label><b> Name : </b> <input type = "text" name = "name" ></label> <br> <br>
        <label><b> Registration Number : </b> <input type = "number" name = "Registration" ></label> <br> <br>
        <label><b> Roll Number : </b> <input type = "text" name = "Roll" ></label> <br> <br>
        <label><b> Subject Name : </b> <input type = "text" name = "Subject Name" ></label> <br> <br>
        <label><b> Subject Code : </b> <input type = "text" name = "Code" ></label> <br> <br>
        <label><b> Grade : </b> <input type = "text" name = "grade" ></label> <br> <br>
    <input type = "hidden" name = "_token" value = "{{ csrf_token() }}">

        <input type = "submit" value = "send">
</form>
</body>
</html>