<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Form + Table Without DB</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-white">

<div class="container py-5">
  

  <h3>Submitted Data</h3>
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
</div>

<script>
  const form = document.getElementById("contactForm");
  const dataTable = document.querySelector("#dataTable tbody");

  // load saved data from localStorage
  let entries = JSON.parse(localStorage.getItem("entries") || "[]");
  renderTable();

  form.addEventListener("submit", function (e) {
    e.preventDefault();
    const name = document.getElementById("name").value.trim();
    const email = document.getElementById("email").value.trim();
    const message = document.getElementById("message").value.trim();

    // add to array
    entries.unshift({ name, email, message });
    localStorage.setItem("entries", JSON.stringify(entries));

    form.reset();
    renderTable();
  });

  function renderTable() {
    dataTable.innerHTML = "";
    entries.forEach((row, i) => {
      dataTable.innerHTML += `
        <tr>
          <td>${i + 1}</td>
          <td>${row.name}</td>
          <td>${row.email}</td>
          <td>${row.message}</td>
        </tr>
      `;
    });
  }
</script>

</body>
</html>
