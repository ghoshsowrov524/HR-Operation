document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector("form");

    form.addEventListener("submit", function (e) {
        e.preventDefault(); 
        const name = document.getElementById("name").value.trim();
        const leaveType = document.getElementById("leaveType").value;
        const startDate = document.getElementById("startDate").value;
        const endDate = document.getElementById("endDate").value;

        if (!name) {
            alert("Please enter the employee name.");
            return;
        }

        if (!leaveType) {
            alert("Please select a leave type.");
            return;
        }

        if (!startDate) {
            alert("Please select a start date.");
            return;
        }

        if (!endDate) {
            alert("Please select an end date.");
            return;
        }

        if (new Date(startDate) > new Date(endDate)) {
            alert("Start date cannot be after end date.");
            return;
        }

        alert("Leave request submitted successfully!");
        form.reset();
    });
});
