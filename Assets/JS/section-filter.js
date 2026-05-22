document.addEventListener("DOMContentLoaded", function () {

    const silde_filter_buttons = document.querySelectorAll(".slide-buttons button");
    const items = document.querySelectorAll(".slider");

    // 👉 Show only default (primary) on load
    items.forEach(item => item.style.display = "none");
    document.querySelector(".slider.pre-primary").style.display = "block";

    silde_filter_buttons.forEach(button => {
        button.addEventListener("click", () => {

            // Active button
            silde_filter_buttons.forEach(btn => btn.classList.remove("active"));
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