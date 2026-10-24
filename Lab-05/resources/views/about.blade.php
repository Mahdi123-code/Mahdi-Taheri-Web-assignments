<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Page</title>
    <style>
        div{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 3rem auto;
            gap: 4rem;
        }
    </style>
</head>
<body>
    <div>
        <h1>This is my first About page</h1>
        <table>
            <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Description</th>
            </tr>
            <tr>
                <td>{{$id}}</td>
                <td>{{$name}}</td>
                <td>{{$desc}}</td>
            </tr>
        </table>
    </div>
</body>
</html>