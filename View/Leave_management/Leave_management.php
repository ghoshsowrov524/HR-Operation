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
    <title>Leave Management</title>
    <link rel ="stylesheet" href ="../../Asset/CSS/Leave_management.css">
</head>
<body>
    <h2>Leave Request Form</h2>
    <form>
        <table>
            <tr>
                <td><label>Employee Name:</label></td>
                <td><input type="text" id="name"></td>
            </tr>
            <tr>
                <td><label>Leave Type:</label></td>
                <td>
                    <select id="leaveType">
                        <option value="">Select</option>
                        <option value="Sick Leave">Sick Leave</option>
                        <option value="Casual Leave">Casual Leave</option>
                        <option value="Annual Leave">Annual Leave</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label>Start Date:</label></td>
                <td><input type="date" id="startDate"></td>
            </tr>
            <tr>
                <td><label>End Date:</label></td>
                <td><input type="date" id="endDate"></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;"><button type="submit">Submit</button></td>
            </tr>
        </table>
    </form><script src="../../Asset/JS/Leave_management.js"></script>

</body>
</html>