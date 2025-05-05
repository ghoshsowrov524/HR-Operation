document.addEventListener("DOMContentLoaded", () => {
    const form = document.getElementById("insightForm");
    const tableBody = document.querySelector("#insightTable tbody");

    form.addEventListener("submit", function(e) {
        e.preventDefault();

        const name = document.getElementById("employeeName").value.trim();
        const reviewer = document.getElementById("reviewer").value.trim();
        const date = document.getElementById("reviewDate").value;
        const insight = document.getElementById("insight").value.trim();

        if (!name || !reviewer || !date || !insight) {
            alert("Please fill out all fields.");
            return;
        }

        const row = document.createElement("tr");
        row.innerHTML = `
            <td>${name}</td>
            <td>${reviewer}</td>
            <td>${date}</td>
            <td>${insight}</td>
            <td><button class="deleteBtn">Delete</button></td>
        `;

        tableBody.appendChild(row);
        form.reset();
        alert("Performance insight added successfully!");
    });

    tableBody.addEventListener("click", function(e) {
        if (e.target.classList.contains("deleteBtn")) {
            if (confirm("Delete this insight?")) {
                e.target.closest("tr").remove();
            }
        }
    });
});
