<?php
include 'db.php';

// إضافة مستخدم جديد
if (isset($_POST['submit'])) {

    $name = trim($_POST['name']);
    $age = trim($_POST['age']);

    if (!empty($name) && !empty($age)) {
        $sql = "INSERT INTO users (name, age) VALUES ('$name', '$age')";
        $conn->query($sql);

        // يمنع تكرار الإرسال عند تحديث الصفحة
        header("Location: index.php");
        exit();
    }
}

$result = $conn->query("SELECT * FROM users");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Smart Methods Database</title>

    <link rel="stylesheet" href="style.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>

<body>

<div class="container">

    <h1>Smart Methods Database</h1>
    <p class="subtitle">Manage User Records</p>

    <div class="card">

        <form method="POST">

            <input
                type="text"
                name="name"
                placeholder="Enter Name"
                required>

            <input
                type="number"
                name="age"
                placeholder="Age"
                required>

            <button type="submit" name="submit">
                Submit
            </button>

        </form>

    </div>

    <div class="card">

        <h2>User Records</h2>

        <table>

            <tr>

                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>Status</th>
                <th>Action</th>

            </tr>

            <?php while($row = $result->fetch_assoc()){ ?>

            <tr>

                <td><?= $row['id']; ?></td>

                <td><?= $row['name']; ?></td>

                <td><?= $row['age']; ?></td>

                <td>

                    <?php
                    if($row['status']==1){
                        echo "<span class='active'>🟢 Active</span>";
                    }else{
                        echo "<span class='inactive'>🔴 Inactive</span>";
                    }
                    ?>

                </td>

                <td>

                    <a href="toggle.php?id=<?= $row['id']; ?>">

                        <button class="toggle-btn">

                            Toggle

                        </button>

                    </a>

                </td>

            </tr>

            <?php } ?>

        </table>

    </div>

</div>

</body>
</html>