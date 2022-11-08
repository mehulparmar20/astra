<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>

    <style>
        table {
            width: 95%;
            border-collapse: collapse;
            margin: 50px auto;
        }

        /* Zebra striping */
        tr:nth-of-type(odd) {
            background: #eee;
        }

        th {
            background: #3498db;
            color: white;
            font-weight: bold;
        }

        td,
        th {
            padding: 10px;
            border: 1px solid #ccc;
            text-align: left;
            font-size: 18px;
        }


    </style>

</head>

<body>

    <div style="width: 95%; margin: 0 auto;">
        <div style="width: 10%; float:left; margin-right: 20px;">
            <!-- <img src="public_path(assets/images/brand/Astra_logo.png)" width="100%"  alt=""> -->
        </div>
        <div style="width: 50%; float: left;">
            <h1>All Users</h1>
        </div>
    </div>

    <table style="position: relative; top: 50px; width:100%">
        <thead>
            <tr>
                <th style="width:10%">First Name</th>
                <th style="width:10%">Last Name</th>
                <th style="width:10%">Username</th>
                <th style="width:40%">Email</th>
                <th style="width:30%">Address</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td data-column="First Name">{{ $user->userFirstName }}</td>
                    <td data-column="Last Name">{{ $user->userLastName }}</td>
                    <td data-column="Username">{{ $user->userName }}</td>
                    <td data-column="Email">{{ $user->userEmail }}</td>
                    <td data-column="Address">{{ $user->userAddress }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>