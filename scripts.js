// scripts.js
// Shannen: This script takes the src and title values that are inspected upon click. A string
// of html is generated with <div> image-info </div> that displays the info scraped. 
// function formatElementINfo creates an object containing these pieces of information every time
// an image is clicked on our website which converts it to a JSON string and logs it to the console.

// Helper function to format the information of an element
function formatElementInfo(element) {
    let title = element.getAttribute('title'); // Get the title attribute
    let src = element.getAttribute('src'); // Get the src attribute

    const info = {
        tagName: element.tagName,
        classList: Array.from(element.classList),
        src: src, // This will be the src attribute of the image
        title: title // This will be the title attribute of the image
    };

    return JSON.stringify(info, null, 2);
}

// This single event listener handles clicks anywhere in the document
document.addEventListener('click', function(event) {
    let target = event.target;

    // Check if the clicked element is an IMG with the class 'gs-image'
    if (target.tagName === 'IMG' && target.classList.contains('gs-image')) {
        // Functionality to display the image information
        const imageSrc = target.src; // Gets the source of the image
        const imageTitle = target.getAttribute('alt'); // Gets the alt text as the title
        
        // Create the content you want to display
        const displayContent = `<div class="image-display">
                                    <img src="${imageSrc}" alt="${imageTitle}">
                                    <p>${imageTitle}</p>
                                </div>`;
        
        // Insert the content into the image-info div
        document.getElementById('image-info').innerHTML = displayContent;

        // Also log the formatted information to the console
        const formattedOutput = formatElementInfo(target);
        console.log(formattedOutput);
    }
});

