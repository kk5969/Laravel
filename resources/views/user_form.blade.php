<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Post Data</title>
</head>
<body>
    <h1?> Hero's Information </h1> <br>
    <form method = "POST" action="<?=url('get-userdata')?>">
        <label><b> Hero Name : </b> <input type = "text" name = "name" ></label> <br> <br>
        <label><b> Hero Age : </b> <input type = "text" name = "age" ></label> <br> <br>
        <label><b> Hero Mobile NUmber : </b> <input type = "number" name = "phone" ></label> <br> <br>
        <input type = "hidden" name = "_token" value = "{{ csrf_token() }}">

        <input type = "submit" value = "send">
</form>
</body>
</html>
 -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Post Data</title>
</head>
<body>
    <h1> User Data </h1> <br>
    <form method = "POST" action="<?=url('get-userdata')?>">"
        <?=session('message')?><br>
        <h1><?=$title?></h1> <br>
        @csrf
        <label><b> Hero Name : </b> <input type = "text" name = "name" ></label> <br> <br>
        <label><b> Hero Age : </b> <input type = "text" name = "age" ></label> <br> <br>
        <label><b> Hero Mobile Number : </b> <input type = "number" name = "phone" ></label> <br> <br>
        <!-- <input type = "hidden" name = "_token" value = "{{ csrf_token() }}"> -->

        <input type = "submit" value = "send">
</form>
</body>
</html>