$3delements = $('*').filter(function(){return $(this).css('-webkit-transform-style') == 'preserve-3d'});
var originals = [];
$3delements.each(function() {
  // Clone original, keeping event handlers and any children elements
  originals.push($(this).clone(true)); 
  // Create placeholder for original content
  $(this).replaceWith('<div id="original_' + originals.length + '"></div>');
});

///
/// Do something asynchronous 
///

// Replace placeholders with original content
for (var i in originals) {
 $('#original_' + (i + 1)).replaceWith(originals[i]);
}




    const detachedElementsArray = [];

    function reappear(selector) {
        for (let i = 0; i < detachedElementsArray.length; i++) {
            $(selector).append(detachedElementsArray[i])
        }
    } 



    const dataFilters = ['standard','maxima','ind'];
