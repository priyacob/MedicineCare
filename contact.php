<?php
include "nav.php";
include "includes/db.php"; // Ensure correct path

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $subject = mysqli_real_escape_string($con, $_POST['subject']);
    $message = mysqli_real_escape_string($con, $_POST['message']);

    // Corrected field names
    $sql = "INSERT INTO contact_us (name, email, phone, subject, message, added_on) 
            VALUES ('$name', '$email', '$phone', '$subject', '$message', NOW())";

    if (mysqli_query($con, $sql)) {
        echo "<script>alert('Your message has been sent successfully!'); window.location.href='contact.php';</script>";
    } else {
        echo "<script>alert('Error: Could not submit your request.');</script>";
    }
}

// Handle admin deletion of messages
if (isset($_GET['type']) && $_GET['type'] == 'delete' && isset($_GET['id'])) {
    $id = mysqli_real_escape_string($con, $_GET['id']);
    $delete_sql = "DELETE FROM contact_us WHERE id='$id'";
    mysqli_query($con, $delete_sql);
    header("Location: contact.php");
    exit;
}

// Fetch all messages for admin view
$sql = "SELECT * FROM contact_us ORDER BY id DESC";
$res = mysqli_query($con, $sql);
?>

<section class="contact-us section">
    <div class="container">
        <div class="inner">
            <div class="row"> 
                <div class="col-lg-6">
                    <div class="contact-us-left">
                        <div id="myMap"></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-us-form">
                        <h2>Contact With Us</h2>
                        <p>If you have any questions, please feel free to contact us.</p>
                        <form method="post">
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" name="name" placeholder="Name" required>
                                </div>
                                <div class="col-lg-6">
                                    <input type="email" name="email" placeholder="Email" required>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" name="phone" placeholder="Phone" required>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" name="subject" placeholder="Subject" required>
                                </div>
                                <div class="col-lg-12">
                                    <textarea name="message" placeholder="Your Message" required></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn" type="submit">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="content pb-0">
    <div class="orders">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-title">Contact Requests</h4>
                    </div>
                    <div class="card-body--">
                        <div class="table-stats order-table ov-h">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Subject</th>
                                        <th>Message</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; while ($row = mysqli_fetch_assoc($res)) { ?>
                                    <tr>
                                        <td><?php echo $i++; ?></td>
                                        <td><?php echo $row['id']; ?></td>
                                        <td><?php echo htmlspecialchars($row['name']); ?></td>
                                        <td><?php echo htmlspecialchars($row['email']); ?></td>
                                        <td><?php echo htmlspecialchars($row['phone']); ?></td>
                                        <td><?php echo htmlspecialchars($row['subject']); ?></td>
                                        <td><?php echo htmlspecialchars($row['message']); ?></td>
                                        <td><?php echo $row['added_on']; ?></td>
                                        <td>
                                            <a href="?type=delete&id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require('footer.inc.php'); ?>
