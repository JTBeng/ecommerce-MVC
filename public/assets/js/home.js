(function () {
    const container = document.getElementById("carrete-principal");
    const btnLeft = document.getElementById("btn-left-principal");
    const btnRight = document.getElementById("btn-right-principal");

    if (!container || !btnLeft || !btnRight) return;

    const scrollAmount = container.offsetWidth;

    btnLeft.addEventListener("click", () => {
        container.scrollBy({
            left: -scrollAmount,
            behavior: "smooth"
        });
    });

    btnRight.addEventListener("click", () => {
        container.scrollBy({
            left: scrollAmount,
            behavior: "smooth"
        });
    });
})();
