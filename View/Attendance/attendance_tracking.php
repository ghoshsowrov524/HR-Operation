
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
    <title>Attendance Tracking</title>
    <link rel="stylesheet" href="../../Asset/CSS/attendance_tracking.css">
</head>
<body>
    <h2>Employee Attendance Tracking</h2>

<form id="attendanceForm" method="POST" action="../../Controller/attendance_validation.php">
    <input type="text" id="employeeName" name="employeeName" placeholder="Employee Name" required>
    <input type="date" id="attendanceDate" name="attendanceDate" required>
    <select id="status" name="status" required>
        <option value="">Select Status</option>
        <option value="Present">Present</option>
        <option value="Absent">Absent</option>
        <option value="Remote">Remote</option>
        <option value="On Leave">On Leave</option>
    </select>
    <button type="submit">Mark Attendance</button>
</form>


    <h3>Attendance Records</h3>
    <table id="attendanceTable">
        <thead>
            <tr>
                <th>Employee</th>
                <th>Date</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody></tbody>
    </table>

    <script src="../../Asset/JS/attendance_tracking.js"></script>
</body>
</html>
