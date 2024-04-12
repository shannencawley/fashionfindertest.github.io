// scripts.js
function formatElementInfo(element) {
    let content;
    switch (element.tagName) {
        case 'INPUT':
            content = element.value; // Get value from input elements
            break;
        case 'IMG':
            content = element.src; // Get src from img elements
            break;
        default:
            content = element.innerHTML.trim(); // Use innerHTML for other elements
            break;
    }
    
    const info = {
        tagName: element.tagName,
        classList: Array.from(element.classList),
        content: content // This will be the value or src or innerHTML depending on element type
    };
    
    return JSON.stringify(info, null, 2);
}


// Event listener for when the document is fully loaded
document.addEventListener('DOMContentLoaded', (event) => {
    // Find the container in the document where you want to append the new elements
    const formattedContentDiv = document.getElementById('formatted-content');

    // Event delegation for handling clicks on dynamic 'gs' class elements
    document.addEventListener('click', function(event) {
        // Check if the clicked element has a class that starts with 'gs'
        let target = event.target;
        while (target != null) {
            if (target.matches('[class^="gs"], [class*=" gs"]')) {
                const formattedOutput = formatElementInfo(target);
                console.log(formattedOutput);

                // If you want to do something more, like displaying the data on the page,
                // you could append the formattedOutput to a specific element on the page.
                // Example: document.getElementById('output').innerHTML = formattedOutput;
                
                // Since we found our element, we can break the loop
                break;
            }
            // If we haven't found our element, move up the DOM tree
            target = target.parentElement;
        }
    });
});
