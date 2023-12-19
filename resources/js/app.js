import "./bootstrap";
import "~resources/scss/app.scss";
import * as bootstrap from "bootstrap";
import.meta.glob(["../img/**"]);

console.log("HELLO");

const deletion = document.getElementById("deletion");

deletion.addEventListener("click", (event) => {
    if (!window.confirm("Are you sure you want to delete this comic?"))
        event.preventDefault();
});
