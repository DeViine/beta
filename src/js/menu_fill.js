//in a populateFields function
	//create a snapshot of the data inside of a key based on the chosen dispensary and then populate the menu based on type and menu item
//in a menuItemSet function
	//listen for form submit
	//take form field inputs and set them to the firebase json document 
//in a menuItemSnapshop function
	//grab an instance of menu_item.html from firebase for each of the data sets in the json document
	//populate each of the menu_item.html with information from data sets with a snapshot
	//order the menu items alphabetically according to itemname from the data set
	//create validations to be sure the form is complete
	//create a function to replace data if data exists. So firebase set rather than firebase push or visa versa
(function() {
	var menuRef = new Firebase('https://dazzling-inferno-1178.firebaseIO.com/menu');  // Generate a Firebase location
	$('#menu_submit').submit(function menuItemSet(complete){
			$('form').submit(function(event) {
			  menuRef.push({
			    "newDispensary": $('.unavailablelabel').val(), //problem: same class for multiple fields 
			  });
			complete.preventDefault();
				/* Insert all validations here as if else checks */
			
			/* IF the value of option is new THEN invoke function 'firebasePush' ELSE invoke function 'firebaseSet' */
			if ($('option')[0].val() == "new") {
	                                          
				/************ Set the input of the dispensary field as the name of the new key in firebase ****************/
				menuRef.child('dispensary').set($(this)[1].value);//Gets the value of the first text field and sets it to firebase under dispensary
			}
			/* If a dispensary already exists in the form dropdown, then run the firebase set function to replace old data */
			/* If a dispensary does not already exist in the form dropdown, then run the firebase push function to insert new data */
			$(this).submit(function firbasePush() {
				/* Push all of the form field inputs to firebase for INSERTING NEW CONTENT */
	    })

			$(this).submit(function firbaseSet() {
				/* Set all of the form field inputs to firebase for REPLACING OLD CONTENT */
			});
	});
});