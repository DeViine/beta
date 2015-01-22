var ref = new Firebase("https://dazzling-inferno-1178.firebaseIO.com");
ref.authAnonymously(function(error, authData) {
  if (error) {
    console.log("Login Failed!", error);
  } else {
    console.log("Authenticated successfully with payload:", authData);
  }
});

