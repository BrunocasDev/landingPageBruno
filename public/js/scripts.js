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

document
    .getElementById("test-your-ingles")
    .addEventListener("click", function (event) {
        event.preventDefault();
        const form = document.querySelector(".target-form");
        form.scrollIntoView({ behavior: "smooth", block: "start" });
    });

document
    .getElementById("registration-form")
    .addEventListener("submit", function (event) {
        event.preventDefault();

        let isValid = true;

        const setError = (inputId, errorId, message) => {
            document.getElementById(inputId).classList.add("input-error");
            document.getElementById(errorId).textContent = message;
            isValid = false;
        };

        const clearError = (inputId, errorId) => {
            document.getElementById(inputId).classList.remove("input-error");
            document.getElementById(errorId).textContent = "";
        };

        // Validação do Nome
        const nome = document.getElementById("nome").value;
        if (!/^[A-Za-z]+$/.test(nome)) {
            setError(
                "nome",
                "nome-error",
                "Apenas caracteres alfabéticos são permitidos."
            );
        } else {
            clearError("nome", "nome-error");
        }

        // Validação do Apelido
        const apelido = document.getElementById("apelido").value;
        if (!/^[A-Za-z]+$/.test(apelido)) {
            setError(
                "apelido",
                "apelido-error",
                "Apenas caracteres alfabéticos são permitidos."
            );
        } else {
            clearError("apelido", "apelido-error");
        }

        // Validação da Idade
        const idade = document.getElementById("idade").value;
        if (idade < 18 || idade > 50) {
            setError(
                "idade",
                "idade-error",
                "A faixa etária deve ser entre os 18 aos 50 anos."
            );
        } else {
            clearError("idade", "idade-error");
        }

        // Validação do Telefone
        const telefone = document.getElementById("telefone").value;
        if (!/^9[1236]\d{7}$/.test(telefone)) {
            setError(
                "telefone",
                "telefone-error",
                "Número de telefone inválido."
            );
        } else {
            clearError("telefone", "telefone-error");
        }

        // Validação do Email
        const email = document.getElementById("email").value;
        if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
            setError("email", "email-error", "Endereço de e-mail inválido.");
        } else {
            clearError("email", "email-error");
        }

        // Validação do Concelho
        const concelho = document.getElementById("concelho").value;
        if (!/^[A-Za-z]+$/.test(concelho)) {
            setError(
                "concelho",
                "concelho-error",
                "Apenas caracteres alfabéticos são permitidos."
            );
        } else {
            clearError("concelho", "concelho-error");
        }

        // Validação do Nível de Inglês
        const nivelIngles = document.getElementById("nivel-ingles").value;
        if (nivelIngles === "") {
            setError(
                "nivel-ingles",
                "nivel-ingles-error",
                "Por favor, selecione um nível de inglês."
            );
        } else {
            clearError("nivel-ingles", "nivel-ingles-error");
        }

        // Validação do Checkbox de Privacidade
        const privacyCheckbox =
            document.getElementById("privacy-checkbox").checked;
        if (!privacyCheckbox) {
            setError(
                "privacy-checkbox",
                "privacy-checkbox-error",
                "Deve aceitar a política de privacidade."
            );
        } else {
            clearError("privacy-checkbox", "privacy-checkbox-error");
        }

        if (!isValid) {
            return;
        }

        // Envio do formulário
        const formData = new FormData(this);

        fetch("/inscrever", {
            method: "POST",
            body: formData,
            headers: {
                Accept: "application/json",
                "X-CSRF-TOKEN": document
                    .querySelector('meta[name="csrf-token"]')
                    .getAttribute("content"),
            },
        })
            .then((response) => response.json())
            .then((data) => {
                if (data.success) {
                    const successMessage =
                        document.getElementById("success-message");
                    successMessage.textContent = data.message;
                    successMessage.style.display = "block";

                    document.getElementById("registration-form").reset();

                    setTimeout(() => {
                        successMessage.style.display = "none";
                    }, 5000);
                } else {
                    if (data.errors) {
                        for (const [field, message] of Object.entries(
                            data.errors
                        )) {
                            setError(field, `${field}-error`, message);
                        }
                    }
                }
            })
            .catch((error) => {
                console.error("Erro:", error);
            });
    });

// Starts AOS animation
AOS.init();
