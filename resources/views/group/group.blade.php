<!DOCTYPE html>
<html>

<head>
    <title>Users with the Same Occupation</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
    <style>
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            font-size: 18px;
            text-align: left;
        }

        th,
        td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        .status-active {
            color: green;
            font-weight: bold;
        }

        .status-inactive {
            color: red;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <h2>{{ $occupation }}</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Occupation</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->occupation }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->phone_numbert }}</td>
                    <td class="{{ $user->is_active ? 'status-active' : 'status-inactive' }}">
                        {{ $user->is_active ? 'Activate' : 'In-Active' }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
