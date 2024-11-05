<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
</head>
<body>

<h1>Edit Student</h1>

<form action="{{ url('update/' . $student->id) }}" method="post">
    @csrf <!-- CSRF protection -->
    @method('POST') <!-- Specify that this is a POST method -->
    <table>
        <tr>
            <td>Name</td>
            <td><input type='text' name='student_name' value="{{ $student->name }}" required /></td>
        </tr>
        <tr>
            <td colspan='2'>
                <input type='submit' value='Update Student' />
            </td>
        </tr>
    </table>
</form>

</body>
</html>
