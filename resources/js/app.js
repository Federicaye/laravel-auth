import "./bootstrap";
import "~resources/scss/app.scss";
import * as bootstrap from "bootstrap";
import.meta.glob(["../img/**", "../fonts/**"]);

const searchForm = document.getElementById("search-form-cat");
if (searchForm) {
    const searchSelect = document.getElementById("search-cat");
    searchSelect.addEventListener("change", () => {
        if (searchSelect.value) {
            searchForm.submit();
        }
    });
}