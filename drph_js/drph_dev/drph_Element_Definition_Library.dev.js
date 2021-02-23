function Element_Definition_Library( the_grand_daddy_element = "html" ) {
	var all_the_tags = _tags( the_grand_daddy_element );
	this.the_element_definitions = new Map( all_the_tags );	
}