<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1></h1>Le Nhat Linh</h1>
    <form action="" method="post"></form>
    <table>
        <input type="text" name="name" id="name">
        <button type="submit" id="search">Search</button>
        <tr style="text-align: center"  >
            <th>id</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Check_in</th>
            <th>pay_method</th>
            <th>Note</th>
        </tr>
        @foreach ($attributes as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->phone}}</td>
            <td>{{$item->check_in}}</td>
            <td>{{$item->pay_method}}</td>
            <td>{{$item->note}}</td>
        </tr>
        @endforeach

    </table>
</body>
</html>
