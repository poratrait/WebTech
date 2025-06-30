<?php include 'database.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Address Book</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h2>Address Book</h2>

<form method="GET" action="search.php">
    <input type="email" name="emailid" placeholder="Search by Email" required>
    <button type="submit">Search</button>
</form>

<h3>Add New Contact</h3>
<form method="POST" action="add.php">
    <input type="text" name="firstname" placeholder="First Name" required>
    <input type="text" name="designation" placeholder="Designation">
    <input type="text" name="address1" placeholder="Address 1">
    <input type="text" name="address2" placeholder="Address 2">
    <input type="text" name="city" placeholder="City">
    <input type="text" name="state" placeholder="State">
    <input type="email" name="emailid" placeholder="Email" required>
    <button type="submit">Add Contact</button>
</form>

<h3>All Contacts</h3>
<table>
    <tr>
        <th>Name</th><th>Email</th><th>City</th><th>Actions</th>
    </tr>
    <?php
    $result = $conn->query("SELECT * FROM contacts");
    while($row = $result->fetch_assoc()):
    ?>
    <tr>
        <td><?= htmlspecialchars($row['firstname']) ?></td>
        <td><?= htmlspecialchars($row['emailid']) ?></td>
        <td><?= htmlspecialchars($row['city']) ?></td>
        <td>
            <a href="edit.php?id=<?= $row['id'] ?>">Edit</a> |
            <a href="delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Delete this contact?')">Delete</a>
        </td>
    </tr>
    <?php endwhile; ?>
</table>
</body>
</html>
