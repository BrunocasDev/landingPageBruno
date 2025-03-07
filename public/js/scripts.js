document.getElementById("privacy-link").addEventListener("click", function (e) {
    e.preventDefault();
    var modalPrivacyPolicy = new bootstrap.Modal(
        document.getElementById("privacyModal")
    );
    modalPrivacyPolicy.show();
});

const backToTopButton = document.querySelector(".back-to-top");

const scrollContainer = () => {
    return document.documentElement || document.body;
};

document.addEventListener("scroll", () => {
    if (scrollContainer().scrollTop > 0) {
        backToTopButton.style.display = "block";
    } else {
        backToTopButton.style.display = "none";
    }
});

backToTopButton?.addEventListener("click", (e) => {
    e.preventDefault();

    scrollContainer().scrollTo({
        top: 0,
        behavior: "smooth",
    });
});
