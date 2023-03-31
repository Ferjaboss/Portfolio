import "./bootstrap";

import Alpine from "alpinejs";
window.Alpine = Alpine;
Alpine.data("form", form);
Alpine.data("navigation", navigation);

Alpine.start();

function form() {
    return {
        form: {
            name: "",
            email: "",
            body: "",
        },
        errors: {},
        showMessage: false,
        cleanForm: function () {
            this.form = {
                name: "",
                email: "",
                body: "",
            };
        },
        submitForm: function (event) {
            fetch(`/contact`, {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-Requested-With": "XMLHttpRequest",
                    "X-CSRF-TOKEN": document
                        .querySelector(`meta[name='csrf-token']`)
                        .getAttribute("content"),
                },
                body: JSON.stringify(this.form),
            })
                .then((response) => {
                    if (response.status === 200) {
                        return response.json();
                    }
                    throw response;
                })
                .then((result) => {
                    this.cleanForm();
                    this.errors = {};
                    this.showMessage = true;
                    setTimeout(() => (this.showMessage = false), 3000);
                })
                .catch(async (response) => {
                    const error = await response.json();
                    if (response.status === 422) {
                        this.errors = error.errors;
                    }
                });
        },
    };
}

function navigation() {
    return {
        navigations: [
            { name: "Home", link: "#home" },
            { name: "About", link: "#about" },
            { name: "Portfolio", link: "#portfolio" },
            { name: "Services", link: "#services" },
            { name: "Contact", link: "#contact" },
        ],
        scrollBg: false,
        setScrollBg: function (value) {
            this.scrollBg = value;
        },
        changeNavBg: function () {
            window.addEventListener("scroll", () => {
                return window.scrollY > 50
                    ? this.setScrollBg(true)
                    : this.setScrollBg(false);
            });
        },
    };
}
