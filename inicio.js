const dep = document.getElementById("departamento");
const form = document.getElementById('form')
const selectMuni = document.getElementById("municipios")

dep.addEventListener("change", async (e) => {

  const id  = e.target.value
  const datForm = new FormData(form)

  const response = await fetch('./controlador.php', {
    method:'POST',
    body: datForm
  }).catch((error) => console.log(error))

  const data = await response.text()

  selectMuni.innerHTML = `${data}`

  console.log(data)
});
