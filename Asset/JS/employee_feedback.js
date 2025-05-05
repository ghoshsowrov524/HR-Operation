document.addEventListener("DOMContentLoaded", () => {
    const form = document.getElementById("feedbackForm");
    const tableBody = document.querySelector("#feedbackTable tbody");

    form.addEventListener("submit", function(e) {
        e.preventDefault();

        const name = document.getElementById("employeeName").value.trim();
        const dept = document.getElementById("department").value.trim();
        const feedback = document.getElementById("feedback").value.trim();

        if (!name || !dept || !feedback) {
            alert("Please fill out all fields.");
            return;
        }

        const row = document.createElement("tr");
        row.innerHTML = `
            <td>${name}</td>
            <td>${dept}</td>
            <td>${feedback}</td>
            <td><button class="deleteBtn">Delete</button></td>
        `;

        tableBody.appendChild(row);
        form.reset();
        alert("Feedback submitted successfully!");
    });

    tableBody.addEventListener("click", function(e) {
        if (e.target.classList.contains("deleteBtn")) {
            if (confirm("Delete this feedback?")) {
                e.target.closest("tr").remove();
            }
        }
    });
});
