<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drivers</title>

    <style>
        table {
            width: 100%;
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
            <h1>All Drivers</h1>
        </div>
    </div>
<div width="500px">
    <table style="position: relative; top: 50px; width:100%">
        <thead>
            <tr>
                <th style="width:10%">Driver Name</th>
                <th style="width:10%">Username</th>
                <th style="width:10%">Email</th>
                <th style="width:10%">Telephone</th>
                <th style="width:10%">Address</th>
                <th style="width:10%">Location</th>
                <th style="width:10%">Zip</th>
                <th style="width:10%">Licence No</th>
                <th style="width:10%">Licence Issue State</th>
                <th style="width:10%">Licence Expiry Date</th>
                <th style="width:10%">Rate</th>
                <th style="width:10%">Currency</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($p as $d)
                <tr>
                    <td data-column="First Name">{{ $d[0] }}</td>
                    <td data-column="Username">{{ $d[1] }}</td>
                    <td data-column="Email">{{ $d[4] }}</td>
                    <td data-column="Telephone">{{ $d[2] }}</td>
                    <td data-column="Address">{{ $d[5] }}</td>
                    <td data-column="Location">{{ $d[6] }}</td>
                    <td data-column="Zip">{{ $d[7] }}</td>
                    <td data-column="Licence No">{{ $d[12] }}</td>
                    <td data-column="Licence Issue State">{{ $d[13] }}</td>
                    <td data-column="Licence Expiry Date">{{ $d[14] }}</td>
                    <td data-column="Rate">{{ $d[23] }}</td>
                    <td data-column="Currency">{{ $d[24] }}</td>
                </tr>

            @endforeach
        </tbody>
    </table>
    </div>
</body>

</html>
