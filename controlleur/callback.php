
<script language="text/Javascript">

const submitBtn = document.getElementById("submit");
const inputName = document.getElementById("nom-contact").value;
const inputMail = document.getElementById("email-contact").value;
const inputSbj = document.getElementById("subject-contact").value;
const inputMsg = document.getElementById("message-contact").value;

inputName.addEventListener("keyup", (e) => {
  console.log(e.currentTarget.value);
  const valueName = e.currentTarget.value;
  if (valueName === ""){
    submitBtn.disabled = true;
  } else {
    submitBtn.disabled = false;
  }

});

function verif_champ() {

  if (inputName === "" || inputMail === "" || inputSbj === "" || inputMsg === ""){
    alert("Veuillez remplir tous les champs!");
  } else {
    alert("Ok");
  }
}

</script>





