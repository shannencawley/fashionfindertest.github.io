// scripts.js

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
// trying something here. Code taken from codemyui.com
jQuery(document).ready(function(){
   $('body').mousemove(function(e){
     var rXP = (e.pageX - this.offsetLeft-$(this).width()/2);
     var rYP = (e.pageY - this.offsetTop-$(this).height()/2);
     $('body').css('text-shadow', +rYP/10+'px '+rXP/80+'px rgba(227,6,19,.8), '+rYP/8+'px '+rXP/60+'px rgba(255,237,0,1), '+rXP/70+'px '+rYP/12+'px rgba(0,159,227,.7)');
   });
}//);
// END of trying something here. Delete later if this fucks shit up.

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

