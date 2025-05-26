<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    if (isset($_POST['employeeName']) && isset($_POST['attendanceDate']) && isset($_POST['status'])) {

        $employeeName = trim($_POST['employeeName']);
        $attendanceDate = trim($_POST['attendanceDate']);
        $status = trim($_POST['status']);

        if (empty($employeeName)) {
            echo "Employee name is required.";
            exit;
        }
      
        if (empty($attendanceDate)) {
            echo "Date is required.";
            exit;
        } 
        $validStatuses = ["Present", "Absent", "Remote", "On Leave"];
        if (empty($status)) {
            echo "Status is required.";
            exit;
        } 
        echo "Attendance recorded successfully.";
        exit;

    } else {
        echo "All fields are required.";
        exit;
    }

} else {
    echo "Invalid request method.";
    exit;
}
?>
