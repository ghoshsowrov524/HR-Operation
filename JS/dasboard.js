const dashboardData = {
    lastAttendance: "2025-05-03",
    pendingLeave: 5,
    totalInsights: 3,
    totalFeedback: 10
};

window.onload = function() {
    document.getElementById("lastAttendance").textContent = dashboardData.lastAttendance;

    document.getElementById("pendingLeave").textContent = dashboardData.pendingLeave;

    document.getElementById("totalInsights").textContent = dashboardData.totalInsights;

    document.getElementById("totalFeedback").textContent = dashboardData.totalFeedback;
};
