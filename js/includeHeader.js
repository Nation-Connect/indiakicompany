// Define a function to include the header from the "header.html" file
function includeHeader() {
    fetch('header.html')
        .then((response) => response.text())
        .then((data) => {
            // Append the header content to the body of the current page
            document.body.innerHTML += data;
        })
        .catch((error) => {
            console.error('Error fetching header:', error);
        });
}
