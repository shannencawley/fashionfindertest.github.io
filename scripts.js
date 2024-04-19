// scripts.js
// Shannen: This script takes the src and title values that are inspected upon click. A string
// of html is generated with <div> image-info </div> that displays the info scraped. 
// function formatElementINfo creates an object containing these pieces of information every time
// an image is clicked on our website which converts it to a JSON string and logs it to the console.


// Helper function to format the information of an element
function formatElementInfo(element, imageUrl) {
    let title = element.getAttribute('alt'); // 'alt' attribute often used as a title in image tags
    let src = element.getAttribute('src'); // Get the src attribute

    const info = {
        tagName: element.tagName,
        classList: Array.from(element.classList),
        src: src,
        title: title,
        url: imageUrl
    };

    return JSON.stringify(info, null, 2);
}

// This single event listener handles clicks anywhere in the document
document.addEventListener('click', function(event) {
    let target = event.target;

    // Check if the clicked element is an IMG with a class that indicates it's part of the search results
    if (target.tagName === 'IMG' && target.closest('.gsc-thumbnail-inside')) {
        // Find the closest ancestor element which is the container of the image result
        let container = target.closest('.gsc-thumbnail-inside');
        // From the container, find the anchor that holds the URL
        let linkElement = container.querySelector('a.gs-title');
        let imageUrl = linkElement ? linkElement.href : 'URL not found';

        // Functionality to display the image information
        const imageSrc = target.src; // Gets the source of the image
        const imageTitle = target.getAttribute('alt'); // Gets the alt text as the title

        // Create the content you want to display
        const displayContent = `
            <div class="image-display">
                <img src="${imageSrc}" alt="${imageTitle}">
                <p>${imageTitle}</p>
                <p>URL: ${imageUrl}</p> <!-- Display URL here -->
            </div>
        `;

        // Insert the content into the image-info div
        document.getElementById('image-info').innerHTML = displayContent;

        // Also log the formatted information to the console
        const formattedOutput = formatElementInfo(target, imageUrl);
        console.log(formattedOutput);
    }
});





/*
// Helper function to format the information of an element
function formatElementInfo(element, imageUrl) {
    let title = element.getAttribute('alt'); // 'alt' attribute often used as a title in image tags
    let src = element.getAttribute('src'); // Get the src attribute

    const info = {
        tagName: element.tagName,
        classList: Array.from(element.classList),
        src: src,
        title: title,
        url: imageUrl
    };

    return JSON.stringify(info, null, 2);
}

// This single event listener handles clicks anywhere in the document
document.addEventListener('click', function(event) {
    let target = event.target;

    // Check if the clicked element is an IMG with the class 'gs-image'
    if (target.tagName === 'IMG' && target.classList.contains('gs-image')) {
        // Find the closest ancestor element which is the container of the image result
        let container = target.closest('.gsc-imageResult');
        // From the container, find the div that holds the URL
        let urlElement = container.querySelector('.gs-previewUrl');
        let imageUrl = urlElement ? urlElement.innerText : 'URL not found';

        // Functionality to display the image information
        const imageSrc = target.src; // Gets the source of the image
        const imageTitle = target.getAttribute('alt'); // Gets the alt text as the title

        // Create the content you want to display
        const displayContent = `
            <div class="image-display">
                <img src="${imageSrc}" alt="${imageTitle}">
                <p>${imageTitle}</p>
                <p>${imageUrl}</p> <!-- Display URL here -->
            </div>
        `;

        // Insert the content into the image-info div
        document.getElementById('image-info').innerHTML = displayContent;

        // Also log the formatted information to the console
        const formattedOutput = formatElementInfo(target, imageUrl);
        console.log(formattedOutput);
    }
});

*/
