document.addEventListener("DOMContentLoaded", () => {
    const form = document.getElementById("noticeForm");
    const tableBody = document.querySelector("#noticeTable tbody");

    form.addEventListener("submit", function(e) {
        e.preventDefault();

        const title = document.getElementById("title").value.trim();
        const description = document.getElementById("description").value.trim();
        const date = document.getElementById("date").value;

        if (!title || !description || !date) {
            alert("Please fill out all fields.");
            return;
        }

        const row = document.createElement("tr");

        row.innerHTML = `
            <td>${title}</td>
            <td>${description}</td>
            <td>${date}</td>
            <td><button class="deleteBtn">Delete</button></td>
        `;

        tableBody.appendChild(row);
        form.reset();

        alert("Notice added successfully!");
    });

    tableBody.addEventListener("click", function(e) {
        if (e.target.classList.contains("deleteBtn")) {
            if (confirm("Are you sure you want to delete this notice?")) {
                e.target.closest("tr").remove();
            }
        }
    });
});
