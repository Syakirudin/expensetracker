<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Table</title>
</head>
<body>
    <h1>User Table</h1>
    <table id="user-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <!-- Data will be inserted here using JavaScript -->
        </tbody>
    </table>

    <script>
        // Function to fetch and populate data using AJAX
        function fetchData() {
            fetch('connection.php')
                .then(response => response.json())
                .then(data => {
                    const tableBody = document.querySelector('#user-table tbody');
                    tableBody.innerHTML = ''; // Clear previous data

                    data.forEach(row => {
                        const newRow = document.createElement('tr');
                        newRow.innerHTML = `
                            <td>${row.id}</td>
                            <td>${row.name}</td>
                            <td>${row.email}</td>
                        `;
                        tableBody.appendChild(newRow);
                    });
                })
                .catch(error => console.error('Error:', error));
        }

        // Call fetchData() when the page loads
        window.onload = fetchData;
    </script>
</body>
</html>
