document.addEventListener("DOMContentLoaded", () => {
    const form = document.getElementById("attendanceForm");
    const cardContainer = document.getElementById("attendanceCards");

    form.addEventListener("submit", function(e) {
        e.preventDefault();

        const name = document.getElementById("employeeName").value.trim();
        const date = document.getElementById("attendanceDate").value;
        const status = document.getElementById("status").value;

        if (!name || !date || !status) {
            alert("Please fill out all fields.");
            return;
        }

        const card = document.createElement("div");
        card.className = "card";
        card.innerHTML = `
            <h4>${name}</h4>
            <p><strong>Date:</strong> ${date}</p>
            <p><strong>Status:</strong> ${status}</p>
            <button class="deleteBtn">Delete</button>
        `;

        cardContainer.appendChild(card);
        form.reset();
        alert("Attendance recorded!");
    });

    cardContainer.addEventListener("click", function(e) {
        if (e.target.classList.contains("deleteBtn")) {
            if (confirm("Delete this attendance record?")) {
                e.target.closest(".card").remove();
            }
        }
    });
});
