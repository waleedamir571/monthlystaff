<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Developer Datatable</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.2/css/dataTables.dataTables.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Developer Datatable</h1>

                <table id="example" class="display nowrap" style="width:100%">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Country</th>
                            <th>City</th>
                            <th>Number</th>
                            <th>Designation</th>
                            <th>Stack</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Data will be inserted here dynamically -->
                    </tbody>
                </table>

            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.1.2/js/dataTables.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>

    <script>
        $(document).ready(function () {
            $('#example').DataTable({
                ajax: {
                    url: '', // Replace with your API endpoint
                    dataSrc: '' // Assuming the API response is an array of developers
                },
                columns: [
                    { data: 'name' },
                    { data: 'country' },
                    { data: 'city' },
                    { data: 'number' },
                    { data: 'designation' },
                    { data: 'stack' }
                ],
                scrollX: true
            });
        });
    </script>
</body>

</html>
