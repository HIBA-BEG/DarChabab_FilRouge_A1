import "./bootstrap";

// authenticated sidebar

function dropdown() {
    document.querySelector("#submenu").classList.toggle("hidden");
    document.querySelector("#arrow").classList.toggle("rotate-0");
}
dropdown();

function openSidebar() {
    document.querySelector(".sidebar").classList.toggle("hidden");
}

// to filter articles by categories in blog

document.addEventListener("DOMContentLoaded", function () {
    const categorieButtons = document.querySelectorAll(".categorie-filter-btn");
    const allArticles = document.querySelectorAll(".article");
    const noArticlesMessageContainer = document.querySelector(
        ".no-articles-message-container"
    );
    const userBanned = true;

    categorieButtons.forEach(function (button) {
        button.addEventListener("click", function () {
            const selectedCategorieId = this.value;
            filterArticlessByCategorie(selectedCategorieId);
        });
    });

    function filterArticlessByCategorie(selectedCategorieId) {
        let articlesFound = false;

        allArticles.forEach((article) => {
            const articleCategorieId = article.getAttribute(
                "data-article-categorie"
            );
            if (
                selectedCategorieId === "all" ||
                articleCategorieId === selectedCategorieId
            ) {
                article.style.display = "block";
                articlesFound = true;
            } else {
                article.style.display = "none";
            }
        });
        if (!articlesFound) {
            const noArticlesMessage = document.querySelector(
                ".no-articles-message"
            );
            if (!noArticlesMessage) {
                const messageElement = document.createElement("p");
                messageElement.textContent =
                    "Y a pas d articles dans la categorie selectionnée.";
                messageElement.className =
                    "flex justify-center w-full no-articles-message";
                noArticlesMessageContainer.appendChild(messageElement);
            }
        } else {
            const noArticlessMessage = document.querySelector(
                ".no-articles-message"
            );
            if (noArticlessMessage) {
                noArticlessMessage.remove();
            }
        }
    }
});

// searching articles by AJAX in blog



