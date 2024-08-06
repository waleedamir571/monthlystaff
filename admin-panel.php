<?php
require_once 'backend/config/database.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Panel For Monthly Staff</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdn.datatables.net/2.1.3/css/dataTables.bootstrap5.css" />
  <style>
    body { background-color: #f8f9fa; }
    .custom-heading {
      background: black;
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      font-weight: bold;
      font-size: 2rem;
      text-align: center;
      padding-top: 20px;
      margin-bottom: 20px;
    }
    .custom-container {
      background-color: white;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
      width: 100rem;
      margin-left: auto;
      margin-right: auto;
      display: block;
    }
    table.dataTable th,
    table.dataTable td {
      text-align: center;
      vertical-align: middle;
    }
    table.dataTable thead > tr > th.dt-orderable-asc, table.dataTable thead > tr > th.dt-orderable-desc, table.dataTable thead > tr > td.dt-orderable-asc, table.dataTable thead > tr > td.dt-orderable-desc {
    cursor: pointer;
    text-align: center;
}

table.table.dataTable > :not(caption) > * > * {
    background-color: var(--bs-table-bg);
    text-align: center;
}

table.table.dataTable.table-striped > tbody > tr:nth-of-type(2n+1) > * {
    box-shadow: inset 0 0 0 9999px rgba(var(--dt-row-stripe), 0.05);
    text-align: center;
}
  </style>
</head>
<body>
  <div class="container-fluid pt-5">
    <div class="row">
      <div class="col-md-12">
        <h2 class="custom-heading">Admin Panel For Monthly Staff</h2>
        <div class="custom-container">
          <table id="example" class="table table-striped">
            <thead>
              <tr>
                <th>Salary</th>
                <th>Experience</th>
                <th>Image</th>
                <th>Full Name</th>
                <th>Stack</th>
                <th>City</th>
                <th>Number</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $sql = "SELECT * FROM developers";
              $result = $connection->query($sql);

              if ($result->num_rows > 0) {
                  while ($row = $result->fetch_assoc()) {
                      echo "<tr>";
                      echo "<td>" . htmlspecialchars($row["salary"]) . "</td>";
                      echo "<td>" . htmlspecialchars($row["experience"]) . "</td>";
                      echo "<td><img src='assets/img/" . htmlspecialchars($row["images"]) . "' alt='" . htmlspecialchars($row["name"]) . "' height='50'></td>";
                      echo "<td>" . htmlspecialchars($row["name"]) . "</td>";
                      echo "<td>" . htmlspecialchars($row["stack"]) . "</td>";
                      echo "<td>" . htmlspecialchars($row["city"]) . "</td>";
                      echo "<td>" . htmlspecialchars($row["phone"]) . "</td>";
                      echo "</tr>";
                  }
              } else {
                  echo "<tr><td colspan='7'>No records found.</td></tr>";
              }

              $connection->close();
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.datatables.net/2.1.3/js/dataTables.js"></script>
  <script src="https://cdn.datatables.net/2.1.3/js/dataTables.bootstrap5.js"></script>
  <script>
    $(document).ready(function() {
      $('#example').DataTable({
        paging: true,
        searching: true,
        info: true,
        lengthChange: true,
        pageLength: 10,
        columnDefs: [
          { width: "14.28%", targets: "_all" }
        ]
      });
    });
  </script>
</body>
</html>
