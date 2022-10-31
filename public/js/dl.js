// An SVG file has an XML header which you don't use if the SVG is in the HTML document.
// As we want to generate a file, we'll add it before the <svg> tag to be compliant.
const SVG_XML_HEADER = '<?xml version="1.0" encoding="UTF-8" standalone="no"?>';

// The default SVG filename in case the data-filename attribute isn't set.
const DEFAULT_SVG_FILENAME = 'avatar.svg';

// Get all the SVG containers of the page.
let svg_containers = document.querySelectorAll('.avatar');

// For each SVG container, we'll bind the click event to the button to download the SVG.
svg_containers.forEach(function (svg_container, i) {


    // Now we want to bind the click event to the button so that it can download the SVG code above.
    // First let's get the <button>.
    let download_button = svg_container.querySelector('.avatar-dl');
    // Add the "click" handler on it.
    download_button.addEventListener('click', function (event) {
        let svg_image = svg_container.querySelector('.avatar-svg');
        // Let's get an optional filename from the data-filename attribute.
        let svg_filename = svg_image.getAttribute('data-filename') || DEFAULT_SVG_FILENAME;
        // The SVG code is the XML header and the trimmed inner HTML of the <div class="svg-image">.
        let svg_code = SVG_XML_HEADER + "\n" + svg_image.innerHTML.trim();
        // To do the "download" we need to do create a <a> element and click on it:
        // Create the <a> element.
        let a = document.createElement('a');
        // Set it's href to have the SVG content directly in the URL.
        a.setAttribute('href', 'data:image/svg+xml;charset=utf-8,' + encodeURIComponent(svg_code));
        // Set the filename for the "save as" dialog box.
        a.setAttribute('download', svg_filename);
        // Don't display this link in the HTML page.
        a.style.display = 'none';
        // Put it in the HTML page so that we can click on it.
        document.body.appendChild(a);
        // This click will generate the download.
        a.click();
        // Remove the created link from the HTML page.
        document.body.removeChild(a);
    });
});