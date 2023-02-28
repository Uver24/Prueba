const form = document.getElementById("form");
const text = document.getElementById("text");

function limitText (mensaje) {
    text.innerText = mensaje;
    setTimeout(() => {
        text.innerText = ""
    },1000)
}

form.addEventListener("submit", async (e) => {
  e.preventDefault();

  const dataform = new FormData(form);

  const response = await fetch("./controlador.php", {
    method: "POST",
    body: dataform,
  });

  const data = await response.text();
  if (data.includes("./")) {
    window.location = data;
  } else {
   limitText(data)
  }
});

