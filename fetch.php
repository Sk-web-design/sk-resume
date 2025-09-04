<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Submitted Data</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-secondary text-white">

<div class="container py-5">
  <h3 class="mb-3">Submitted Data</h3>
  <table class="table table-dark table-striped" id="dataTable">
    <thead>
      <tr>
        <th>#</th>
        <th>Name</th>
        <th>Email</th>
        <th>Message</th>
      </tr>
    </thead>
    <tbody></tbody>
  </table>

  <a href="index.php" class="btn btn-light">Back to Form</a>
</div>

<script>
  const tbody = document.querySelector("#dataTable tbody");

  // get saved data from localStorage
  let entries = JSON.parse(localStorage.getItem("entries") || "[]");

  function renderTable() {
    tbody.innerHTML = entries.map((row, i) => `
      <tr>
        <td>${i + 1}</td>
        <td>${row.name}</td>
        <td>${row.email}</td>
        <td>${row.message}</td>
      </tr>
    `).join("");
  }
  renderTable();
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
