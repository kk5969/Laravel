<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div style = "padding-left: 200px">
        <h3> Register Here </h3>
        @if($errors->any())
        <ul>
            {!!implode('', $errors->all('<li>:message</li>'))!!}
</ul>

@endif 
<form enctype = "multipart/form-data" method = "POST" action = "register">
    <label for = "">Name<input type = "text" name = "name" id=""value = "{{old('name')}}" ></label><br>
    <label for = "">Email<input type = "email" name = "email" id="" value = "{{old('email')}}" ></label><br>
    <label for = "">Password<input type = "password" name = "password" id="" value = "{{old('password')}}" ></label><br>
    <label for = "">Confirm Password<input type = "password" name = "password_confirmation" id="" value = "{{old('password_confirmation')}}" ></label><br>
    <label for = "">Phone<input type = "text" name = "phone" id="" value = "{{old('phone)}}"></label><br>
    <label for = "">DOB<input type = "text" name = "dob" id = "" values = "{{old('dob')}}" ></label><br>
    <label for = "">Image<input type = "file" name = "image" id = ""value = "{{old('image')}}"></label><br>
    <input type = "submit" value = "Register">
    @csrf 
</form>
</body>
</html>