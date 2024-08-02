/* Add your JavaScript code here.

If you are using the jQuery library, then don't forget to wrap your code inside jQuery.ready() as follows:

jQuery(document).ready(function( $ ){
    // Your code in here
});

--

If you want to link a JavaScript file that resides on another server (similar to
<script src="https://example.com/your-js-file.js"></script>), then please use
the "Add HTML Code" page, as this is a HTML code that links a JavaScript file.

End of comment */ 


jQuery(document).ready(function( $ ){	
	
	const allFilters = $(document);
	
	function addOpenCloseLogic() {
		const subjectFilter = this;

		jQuery.each(allFilters, function() {
			if(this !== subjectFilter) {
				$(this).addClass('wpc-closed').removeClass('wpc-opened');
			}
		})
	}

	const subjectFilter = $('.wpc-filters-section-386');
	subjectFilter.click(addOpenCloseLogic);
	
	const skillFilter = $('.wpc-filters-section-387');
	skillFilter.click(addOpenCloseLogic);
	
	const developmentalLevelFilter = $('.wpc-filters-section-389');
	developmentalLevelFilter.click(addOpenCloseLogic);
	
	const cardCategoryFilter = $('.wpc-filters-section-1442');
	cardCategoryFilter.click(addOpenCloseLogic);
});