var rootRef = new Firebase("https://dazzling-inferno-1178.firebaseIO.com/ratings");
var itemRef = rootRef.child("items").child(itemId);

var numRatings;
var cumulativeRating;
var averageRating;
itemRef.child("ratings").on("value", function(ratingsSnapshot) {
  var ratingsData = ratingsSnapshot.val();
  numRatings = ratingsData.numRatings;
  cumulativeRating = ratingsData.cumulativeRating;
  averageRating = cumulativeRating / numRatings;
});