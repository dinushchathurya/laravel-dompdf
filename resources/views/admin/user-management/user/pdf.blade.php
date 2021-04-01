<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>
    <table class="table table-bordered">
        <thead>
            <tr>
                <td><b>Customer Name</b></td>
                <td><b>Address</b></td>
                <td><b>Date</b></td>
                <td><b>Item</b></td>
                <td><b>Quantity</b></td>
                <td><b>Issued By</b></td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    {{$show->customer_name}}
                </td>
                <td>
                    {{$show->address}}
                </td>
                <td>
                    {{$show->date}}
                </td>
                <td>
                    {{$show->item}}
                </td>
                <td>
                    {{$show->quantity}}
                </td>
                <td>
                    {{$show->issued_by}}
                </td>
            </tr>
        </tbody>
    </table>
</body>
</html>
