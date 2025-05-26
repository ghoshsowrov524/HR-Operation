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
    <title>HR Dashboard</title>
    <link rel="stylesheet" href="../../Asset/CSS/dashboard.css">

</head>
<body>

<header>
    <h1>HR Dashboard</h1>
    <p>Welcome, <?= $_SESSION['email'] ?></p>
    <a href="../../Controller/logout.php" class="logout">Logout</a>
</header>

<div class="dashboard-container">
    <div class="card">
        <h3>Attendance Overview</h3>
        <p>Last Attendance: <span id="lastAttendance">Loading...</span></p>
        <button onclick="location.href='../Attendance/attendance_tracking.php'">View Attendance</button>
    </div>
    
    <div class="card">
        <h3>Leave Requests</h3>
        <p>Total Pending: <span id="pendingLeave">Loading...</span></p>
        <button onclick="location.href='../Leave_management/Leave_management.php'">View Requests</button>
    </div>
    
    <div class="card">
        <h3>Performance Insights</h3>
        <p>Total Insights: <span id="totalInsights">Loading...</span></p>
        <button onclick="location.href='../Performance/Performance_insights.php'">View Insights</button>
    </div>

    <div class="card">
        <h3>Employee Feedback</h3>
        <p>Total Feedback: <span id="totalFeedback">Loading...</span></p>
        <button onclick="location.href='../Feedback/employee_feedback.php'">View Feedback</button>
    </div>

    <div class="card">
        <h3>Leave Management</h3>
        <p>Total Pending Leave Requests: <span id="totalPendingLeave">Loading...</span></p>
        <button onclick="location.href='../Leave_management/leave_management.php'">Manage Leave</button>
    </div>

    <div class="card">
        <h3>Contact HR</h3>
        <p>Have a question or need help?</p>
        <button onclick="location.href='../Contact_us/contact_us.php'">Contact Us</button>
    </div>
</div>
<script src="../../Asset/JS/dashboard.js"></script>
</body>
</html>
