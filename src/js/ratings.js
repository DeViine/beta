(function() {
    var firebaseUrl = "https://dazzling-inferno-1178.firebaseIO.com/rating";
    var rootRef = new Firebase(firebaseUrl);
    var star = $("input[type='radio'][name='rating']");
	var itemId = $("#rating1").attr('class');
	var cumulativeRating;
	var itemRef = rootRef.child("items").child(itemId);	
	
	star.click(function() {
		itemRef.child("ratings").child("cumulativeRating").transaction(function(cumulativeRating) { 
			return cumulativeRating + 1; 
		});
		itemRef.child("ratings").child("numRatings").transaction(function(numRatings) { 
			return numRatings + Number($('input[name="rating"]:checked').val());
		});
	});
		var numRatings;
		var averageRating;
		itemRef.child("ratings").on("value", function(ratingsSnapshot) {
			var ratingsData = ratingsSnapshot.val();
			if (ratingsData) {
				numRatings = ratingsData.numRatings;
				cumulativeRating = ratingsData.cumulativeRating;
				averageRating = numRatings / cumulativeRating;
				$('#sativaUsers').html(cumulativeRating);
				$('#sativaRatings').html(averageRating.toFixed());
			}

		});
})();