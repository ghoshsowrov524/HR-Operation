document.addEventListener("DOMContentLoaded", () => {
    const form = document.getElementById("attendanceForm");
    const tableBody = document.querySelector("#attendanceTable tbody");

    form.addEventListener("submit", function (e) {
        e.preventDefault();

        const name = document.getElementById("employeeName").value.trim();
        const date = document.getElementById("attendanceDate").value;
        const status = document.getElementById("status").value;

        if (!name || !date || !status) {
            alert("Please fill out all fields.");
            return;
        }

        // Create a new row in the table
        const row = document.createElement("tr");
        row.innerHTML = `
            <td>${name}</td>
            <td>${date}</td>
            <td>${status}</td>
            <td><button class="deleteBtn">Delete</button></td>
        `;

        tableBody.appendChild(row);
        form.reset();
        alert("Attendance recorded!");
    });

    tableBody.addEventListener("click", function (e) {
        if (e.target.classList.contains("deleteBtn")) {
            if (confirm("Delete this attendance record?")) {
                e.target.closest("tr").remove();
            }
        }
    });
});
