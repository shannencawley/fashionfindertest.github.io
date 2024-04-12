// script.js file
// Wait for the HTML document to be fully parsed and loaded
document.addEventListener('DOMContentLoaded', (event) => {
    // Query the document for elements with classes that start with 'gs'
    const gsElements = document.querySelectorAll('[class^="gs"], [class*=" gs"]');
    
    // Find the container in the document where you want to append the new elements
    const formattedContentDiv = document.getElementById('formatted-content');

    // Iterate over each element found
    gsElements.forEach(element => {
        // Create a new div element for formatting
        const newDiv = document.createElement('div');
        newDiv.className = 'new-class-for-formatting';
        newDiv.innerHTML = element.innerHTML; // Set its HTML content

        // Append the new div to the desired container
        formattedContentDiv.appendChild(newDiv);
    });
});

document.addEventListener('DOMContentLoaded', (event) => {
    // Collect all elements that have a class name starting with 'gs'
    const gsElements = document.querySelectorAll('[class^="gs"], [class*=" gs"]');

    // Add click event listeners to these elements
    gsElements.forEach(element => {
        element.addEventListener('click', function() {
            // This function will be called when a 'gs' element is clicked.
            // You can process and output the information as needed here.

            // Example: Output the innerHTML of the clicked element
            console.log(this.innerHTML);

            // If you want to display the information in a specific format,
            // you could create a function that generates that format based
            // on the element's content and then append it to the DOM or log it.
            const formattedOutput = formatElementInfo(this);
            console.log(formattedOutput);
            
            // If you want to do something more, like displaying the data on the page,
            // you could append the formattedOutput to a specific element on the page.
            // Example: document.getElementById('output').innerHTML = formattedOutput;
        });
    });
});

// Helper function to format the information of an element
function formatElementInfo(element) {
    // Format the element's information. This is a simple example
    // that just wraps the content in a JSON-like structure. You can
    // customize this function as needed.
    const info = {
        tagName: element.tagName,
        classList: [...element.classList],
        content: element.innerHTML.trim()
    };
    return JSON.stringify(info, null, 2);
}
