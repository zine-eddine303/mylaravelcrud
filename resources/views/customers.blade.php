<?php

use App\Models\Customer;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="widtd=device-widtd, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <!-- <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <title>Document</title>

</head>
<body>
    <table class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>company</th>
                <th>email</th>
                <th>phone</th>
                <th>status</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                @foreach ($customers as $customer) 
                    <td>
                        {{ $customer->id }}    
                    </td>
                    <td>
                        {{ $customer->name }}    
                    </td>
                    <td>
                        {{ $customer->company }}    
                    </td>
                    <td>
                        {{ $customer->email }}    
                    </td>
                    <td>
                        {{ $customer->phone }}    
                    </td>
                    <td>
                        {{ $customer->status }}    
                    </td>
                    <td>
                        <button class="btn btn-primary">View</button>    
                        <button class="btn btn-primary">Edit</button>    
                        <button class="btn btn-primary">Delete</button>    
                    </td>
                @endforeach
            </tr>
        </tbody>
        
    </table>
</body>

<footer>
    
</footer>
</html>


