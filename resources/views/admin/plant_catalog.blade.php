<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plant Catalog - Admin Panel</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #999;
            padding: 8px;
            text-align: left;
        }
        th {
            background: #f0f0f0;
        }
    </style>
</head>
<body>
    <h2>Plant Catalog</h2>
    <table>
        <thead>
            <tr>
                <th>name</th>
                <th>picture</th>
                <th>type</th>
                <th>color</th>
                <th>description</th>
                <th>plant_state</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($plant as $p)
                <tr>
                    <td>{{ $p->name }}</td>
                    <td>{{ $p->picture }}</td>
                    <td>{{ $p->type }}</td>
                    <td>{{ $p->color }}</td>
                    <td>{{ $p->description }}</td>
                    <td>{{ $p->plant_state }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="6">No Data!</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>
