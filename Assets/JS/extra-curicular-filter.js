document.addEventListener("DOMContentLoaded", function () {

    const activity_btn = document.querySelectorAll(".slide1-buttons button");
    const items = document.querySelectorAll(".col-6 .box");

    items.forEach(item => item.style.display = "none");
    document.querySelector(".box.clubs").style.display = "block";

    activity_btn.forEach(button => {
        button.addEventListener("click", () => {

            // Active button
            activity_btn.forEach(btn => btn.classList.remove("active"));
            button.classList.add("active");

            const filter = button.getAttribute("data-filter").trim();

            items.forEach(item => {
                if (item.classList.contains(filter)) {
                    item.style.display = "block";
                } else {
                    item.style.display = "none";
                }
            });

        });
    });

});