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
    <title>Notice Management</title>
    <link rel="stylesheet" href="../../Asset/CSS/notice_management.css">
</head>
<body>
    <h2>HR Notice Management</h2>

    <form id="noticeForm">
        <input type="text" id="title" placeholder="Notice Title" required>
        <textarea id="description" placeholder="Description" required></textarea>
        <input type="date" id="date" required>
        <button type="submit">Add Notice</button>
    </form>

    <h3>All Notices</h3>
    <table id="noticeTable">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody></tbody>
    </table>

    <script src="../../Asset/JS/notice_management.js"></script>
</body>
</html>
