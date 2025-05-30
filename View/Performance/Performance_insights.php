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
    <title>Performance Insights</title>
    <link rel="stylesheet" href="../../Asset/CSS/performance_insights.css">
</head>
<body>
    <h2>Employee Performance Insights</h2>

    <form id="insightForm">
        <input type="text" id="employeeName" placeholder="Employee Name" required>
        <input type="text" id="reviewer" placeholder="Reviewer Name" required>
        <input type="date" id="reviewDate" required>
        <textarea id="insight" placeholder="Enter performance insight..." required></textarea>
        <button type="submit">Add Insight</button>
    </form>

    <h3>Performance Records</h3>
    <table id="insightTable">
        <thead>
            <tr>
                <th>Employee</th>
                <th>Reviewer</th>
                <th>Date</th>
                <th>Insight</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody></tbody>
    </table>

    <script src="../../Asset/JS/performance_insights.js"></script>
</body>
</html>
