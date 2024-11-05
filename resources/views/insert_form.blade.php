<!DOCTYPE html>
<html>
<head>
    <title>Student Management</title>
</head>
<body>

<h1>Add New Student</h1>

<form action="{{ url('/insert') }}" method="post">
    
    <table>
        <tr>
            <td>Name</td>
            <td><input type='text' name='student_name' required /></td>
        </tr>
        <tr>
            <td colspan='2'>
                <input type='submit' value='Add Student'/>
            </td>
        </tr>
    </table>
</form>

</body>
</html>
