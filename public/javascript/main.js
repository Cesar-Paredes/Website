const confirmDelete = () => {
  return confirm("Delete this user?");
};

function validateUserForm() {
  if (document.getElementById("name").value == "") {
    console.log("name is empty");
    alert("Please enter a name");
  } else {
    console.log("submitting the form");
    document.getElementById("createUser").submit();
  }
}
