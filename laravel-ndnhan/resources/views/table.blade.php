<?php
/**
 * Created by PhpStorm.
 * User: ndnhan132
 * Date: 07/06/2018
 * Time: 20:16
 */?>
        <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
</head>
<body>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $mUser)
            <tr>
                <td> {{$mUser-> id }}</td>
                <td> {{$mUser-> name }}</td>
                <td> {{$mUser-> email }}</td>
                <td>
                    <button class="btn btn-danger">Delete</button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>
