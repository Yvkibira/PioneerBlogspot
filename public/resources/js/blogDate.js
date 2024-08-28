<small id="lastModified"></small>

   // Function to update the last modified date
   function updateLastModifiedDate() {
       // Select the meta tag with itemprop="dateModified"
       var metaTag = document.querySelector('meta[itemprop="dateModified"]');

       // Get the content attribute value of the meta tag
       var dateModified = metaTag.getAttribute('content');

       // Parse the date string into a Date object
       var modifiedDate = new Date(dateModified);

       // Select the div element where you want to display the date
       var lastModifiedDiv = document.getElementById('lastModified');

       // Update the content of the div with the modified date
       lastModifiedDiv.innerHTML = "Last modified: " + modifiedDate.toLocaleDateString();
   }
   updateLastModifiedDate();
   // Call the function when the page loads
   //window.onload = updateLastModifiedDate;
