<!DOCTYPE html>
<html>

<head>

    <title>Client Summary</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;

            font-size: 10pt;
        }

        h1 {
            font-size: 22pt;
        }

        table {
            border-collapse: collapse;
        }

        table th,
        table td {
            border: 1px solid #777;
            padding: 2px;
        }
    </style>
</head>
<body>
    <p style="text-align: center; margin-bottom: 18pt; font-size: 40px;">
        {{-- <img src="{{public_path('images/mBank.png')}}" style="width: 200px;" alt=""> <br> <br> --}}
        {{-- <strong style="font-size: 16pt">MDC Banking, Inc.</strong> <br> --}}
        Mater Dei College Library System<br>

    </p> <br> <br>

    <h1 style="padding: 15px; background-color: gray; color: white">Book MetaData</h1>
<br>
    <h1 style="font-size: 25px;">Borrower: {{$client->borrower}}</h1>
    <h1 style="font-size: 25px;">Email: {{$client->email}}</h1>



    <div style="padding: 50px; background-color: #e9e9e9; font-size: 35px">
        Title: {{$client->title}} <br> <br> <br>
        Author: {{$client->author}} <br> <br> <br>
        Subject: {{$client->subject}} <br> <br>
        <div style="padding: 25px; background-color: #777; color:white; font-size: 25px">
            <b style="font-size: 30px">Description</b> <br> <br>
            {{$client->bio}}
        </div>
    </div>

</body>
</html>
