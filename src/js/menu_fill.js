//in a menuItemSet function
	//listen for form submit
	//take form field inputs and set them to the firebase json document 
//in a menuItemSnapshop function
	//grab an instance of menu_item.html from firebase for each of the data sets in the json document
	//populate each of the menu_item.html with information from data sets with a snapshot
	//order the menu items alphabetically according to itemname from the data set
	//create validations to be sure the form is complete
	//create a function to replace data if data exists. So firebase set rather than firebase push or visa versa
$('menu_submit').submit(menuItemSet(complete){
	complete.preventDefault();
		/* Insert all validations here as if else checks */
	
	/* IF the value of option is new THEN invoke function 'firebasePush' ELSE invoke function 'firebaseSet' */
	if $(this).value('new') {
		
	}
	/* If a dispensary already exists in the form dropdown, then run the firebase set function to replace old data */
	/* If a dispensary does not already exist in the form dropdown, then run the firebase push function to insert new data */
	$this.submit( firbasePush() {
		/* Push all of the form field inputs to firebase for INSERTING NEW CONTENT */
	});

	$this.submit( firbaseSet() {
		/* Set all of the form field inputs to firebase for REPLACING OLD CONTENT */
	});

});