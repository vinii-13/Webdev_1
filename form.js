const firebaseConfig = {
    apiKey: "AIzaSyBpHW2uyRn99GcW5woBWGB7A8EELaJRrdA",
    authDomain: "hunterhikers-83ad1.firebaseapp.com",
    databaseURL: "https://hunterhikers-83ad1-default-rtdb.firebaseio.com",
    projectId: "hunterhikers-83ad1",
    storageBucket: "hunterhikers-83ad1.appspot.com",
    messagingSenderId: "942801809519",
    appId: "1:942801809519:web:e3666eaf3ada255e481d9a",
    measurementId: "G-PEHEFXHN4Y"
  };

  // initialize firebase
firebase.initializeApp(firebaseConfig);

// reference your database
var contactFormDB = firebase.database().ref("formdb");

document.getElementById("formdb").addEventListener("submit", submitForm);

function submitForm(e) {
  e.preventDefault();

  var name = getElementVal("name");
  var email = getElementVal("email");
  var phone = getElementVal("phone");
  var occupation = getElementVal("occupation");

  saveMessages(name, email, phone,occupation);

//   //   enable alert
//   document.querySelector(".alert").style.display = "block";

//   //   remove the alert
//   setTimeout(() => {
//     document.querySelector(".alert").style.display = "none";
//   }, 3000);

  //   reset the form
  document.getElementById("formdb").reset();
}

const saveMessages = (name, email, phone,occupation) => {
  var newContactForm = contactFormDB.push();

  newContactForm.set({
    name: name,
    email: email,
    phone: phone,
    occupation: occupation,
  });
};

const getElementVal = (id) => {
  return document.getElementById(id).value;
};


// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal
var img = document.querySelector(".poster");
var modalImg = document.getElementById("img01");

img.onclick = function() {
    modal.style.display = "block";
    modalImg.src = this.src;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}
