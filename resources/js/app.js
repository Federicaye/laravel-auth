import "./bootstrap";
import "~resources/scss/app.scss";
import * as bootstrap from "bootstrap";
import.meta.glob(["../img/**", "../fonts/**"]);

const searchForm = document.getElementById("search-form");
if (searchForm) {
    const searchSelect = document.getElementById("search");
    searchSelect.addEventListener("change", () => {
        if (searchSelect.value !== "all") {
            searchForm.submit();
        }
    });
}