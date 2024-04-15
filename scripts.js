// scripts.js
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

document.addEventListener('DOMContentLoaded', (event) => {
    // Event delegation for handling clicks on dynamic 'gs-image' class elements
    document.addEventListener('click', function(event) {
        let target = event.target;

        // Check if the clicked element is an IMG and has the 'gs-image' class
        if (target.tagName === 'IMG' && target.classList.contains('gs-image')) {
            const formattedOutput = formatElementInfo(target);
            console.log(formattedOutput);
            // Optionally, display the formatted information on the page
            // document.getElementById('output').innerHTML = formattedOutput;
        }
    });
});
