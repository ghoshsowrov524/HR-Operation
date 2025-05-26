 <?php
session_start();
if (!isset($_SESSION['status'])) {
    header('location: ../User Authentication/Login.php');
    exit;
} 

?>
<!DOCTYPE html>
<html>
<head>
    <title>Employee Feedback</title>
    <link rel="stylesheet" href="../../Asset/CSS/employee_feedback.css">
</head>
<body>
    <h2>Employee Feedback Form</h2>

    <form id="feedbackForm">
        <input type="text" id="employeeName" placeholder="Employee Name" required>
        <input type="text" id="department" placeholder="Department" required>
        <textarea id="feedback" placeholder="Enter feedback..." required></textarea>
        <button type="submit">Submit Feedback</button>
    </form>

    <h3>Submitted Feedback</h3>
    <table id="feedbackTable">
        <thead>
            <tr>
                <th>Name</th>
                <th>Department</th>
                <th>Feedback</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody></tbody>
    </table>

    <script src="../../Asset/JS/employee_feedback.js"></script>
</body>
</html>
