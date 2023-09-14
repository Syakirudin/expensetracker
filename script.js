function loadPage(pageName) {
    const contentContainer = document.getElementById("page-content");
    
    // Use fetch to load the selected page
    fetch(pageName)
        .then(response => response.text())
        .then(data => {
            contentContainer.innerHTML = data;
        })
        .catch(error => {
            console.error("Error loading page:", error);
        });
}
