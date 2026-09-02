function abrirMenu() {
    const menu = document.getElementById("menu");
    if (menu) {
        menu.classList.toggle("ativo");
    }
}

document.addEventListener("DOMContentLoaded", function () {
    const menu = document.getElementById("menu");

    if (menu) {
        menu.querySelectorAll("a").forEach(function (link) {
            link.addEventListener("click", function () {
                menu.classList.remove("ativo");
            });
        });
    }

    const form = document.querySelector(".contato form");

    if (form) {
        form.addEventListener("submit", function () {
            const button = form.querySelector("button");

            if (button) {
                button.disabled = true;
                button.textContent = "Enviando...";
            }
        });
    }
});
