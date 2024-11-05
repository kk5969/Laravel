<!DOCTYPE html>
<html>

<head>
    <title>Student List</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 5px;
            text-align: left;
        }

        th {
            background-color: #b2b2b2;
        }
    </style>
</head>

<body>

    <h1>Student List</h1>
    
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
            <tr>
                <td>{{ $student->id }}</td>
                <td>{{ $student->name }}</td>
                <td>
                    <a href="{{ url('edit/'.$student->id) }}">Edit</a> |
                    <a href="{{ url('delete/'.$student->id) }}" 
                       onclick="return confirm('Are you sure you want to delete this record?');">
                       Delete
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Link to insert a new student -->
    <a href="{{ url('insert_form') }}">Add New Student</a>

</body>
</html>
