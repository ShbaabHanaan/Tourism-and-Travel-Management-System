<?php
require '../config.php';
session_start();
// Check if ID is passed through URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // SQL query to retrieve the data for the given ID
    $sql = "SELECT * FROM contact_form WHERE id='$id'";
    $result = $con->query($sql);

    // Fetch the data to pre-fill the form fields
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "No record found with that ID.";
        exit();
    }
} else {
    echo "No ID provided.";
    exit();
}

// Update logic after form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the updated data from the form
    $date = $_POST['date'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $message = $_POST['message'];
    $contactMethod = $_POST['contactMethod'];

    // SQL query to update the record
    $update_sql = "UPDATE contact_form SET 
                    date='$date', 
                    name='$name', 
                    email='$email', 
                    phone='$phone', 
                    gender='$gender', 
                    age='$age', 
                    address='$address', 
                    message='$message', 
                    contactMethod='$contactMethod' 
                    WHERE id='$id'";

    if ($con->query($update_sql) === TRUE) {
 
        header("Location: user_read_tickets.php"); 

    } else {
        echo "Error updating record: " . $con->error;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Contact Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        form {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        input[type="date"],
        input[type="number"],
        select,
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="radio"] {
            margin-right: 10px;
        }

        textarea {
            resize: vertical;
        }

        button {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #218838;
        }

        .form-group {
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <h1>Edit Contact Details</h1>

    <form action="user_update_tickets.php?id=<?php echo $id; ?>" method="post">
        <div class="form-group">
            <label for="date">Date:</label>
            <input type="date" id="date" name="date" value="<?php echo htmlspecialchars($row['date']); ?>" required>
        </div>

        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($row['name']); ?>" required>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($row['email']); ?>" required>
        </div>

        <div class="form-group">
            <label for="phone">Phone:</label>
            <input type="tel" id="phone" name="phone" value="<?php echo htmlspecialchars($row['phone']); ?>" required>
        </div>

        <div class="form-group">
            <label for="gender">Gender:</label>
            <select id="gender" name="gender" required>
                <option value="male" <?php if ($row['gender'] == 'male') echo 'selected'; ?>>Male</option>
                <option value="female" <?php if ($row['gender'] == 'female') echo 'selected'; ?>>Female</option>
                <option value="other" <?php if ($row['gender'] == 'other') echo 'selected'; ?>>Other</option>
            </select>
        </div>

        <div class="form-group">
            <label for="age">Age:</label>
            <input type="number" id="age" name="age" value="<?php echo ($row['age']); ?>" required>
        </div>

        <div class="form-group">
            <label for="address">Address:</label>
            <textarea id="address" name="address" rows="3" required><?php echo ($row['address']); ?></textarea>
        </div>

        <div class="form-group">
            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="5" required><?php echo ($row['message']); ?></textarea>
        </div>

        <div class="form-group">
            <label for="contact_method">Preferred Contact Method:</label>
            <input type="radio" id="contact-email" name="contactMethod" value="email" <?php if ($row['contactmethod'] == 'email') echo 'checked'; ?>>
            <label for="contact-email">Email</label>
            <input type="radio" id="contact-phone" name="contactMethod" value="phone" <?php if ($row['contactmethod'] == 'phone') echo 'checked'; ?>>
            <label for="contact-phone">Phone</label>
        </div>

        <button type="submit">Update</button>
    </form>
</body>
</html>
