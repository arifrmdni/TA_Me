// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

//Get the cancel button closes the modal
var cancel = document.getElementById("cancelbtn");

// When the user clicks on the button, open the modal
btn.onclick = function () {
  modal.style.display = "block";
  modal.children[0].children[1].innerHTML = "Tambah Data Karyawan";
  modal.children[0].children[2].children[1].children[0].innerHTML = "Tambah  ";
};

// When the user clicks on <span> (x), close the modal
span.onclick = function () {
  modal.style.display = "none";
};

//when user click cancel from the modalbox
cancel.onclick = () => {
  modal.style.display = "none";
};

// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
};
