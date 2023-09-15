const searchInput = document.querySelector("#search")
const searchResult = document.querySelector(".table-results")

let dataArray;

async function getDishes() {
  try {
    const response = await fetch("/api/api-liste_plats");

    if (!response.ok) {
      throw new Error('Une erreur est survenue lors de la requête.');
    }
    

    dataArray = await response.json();
    createDishesList(dataArray);

  } catch (error) {
    console.error("rien ne fonctionne");
  }
}


getDishes()


/* 
  function orderList(data) {

  const orderedData = data.sort((a,b) => {
    if(a.name.last.toLowerCase() < b.name.last.toLowerCase()) {
      return -1;
    }
    if(a.name.last.toLowerCase() > b.name.last.toLowerCase()) {
      return 1;
    }
    return 0;
  })
  
  return orderedData;
}
*/

function createDishesList(dishesList) {

  dishesList.forEach(dishe => {

    const listItem = document.createElement("tr");
    listItem.setAttribute("class", "table-item");

    listItem.innerHTML = `
    <th scope="row" class="name">${dishe.DISHESname}</th>
    <td>${dishe.DISHESdescription}</td>
    <td class="container-img">
    <img class="mt-3 mb-3" width="50" src=uploads/${dishe.DISHESphoto}>
    </td>
    <td><a href="/plats-delete-${dishe.DISHESid}" class="btn btn-danger">Supprimer</a></td>
    <td><a href="/plats-edit-${dishe.DISHESid}" class="btn btn-warning">Modifier</a></td>
    `
    searchResult.appendChild(listItem);
  })

}

searchInput.addEventListener("input", filterData)

function filterData(e) {

  searchResult.innerHTML = ""

  const searchedString = e.target.value.toLowerCase().replace(/\s/g, "");

  const filteredArr = dataArray.filter(el => 
    el.DISHESname.toLowerCase().includes(searchedString)
    )

  createDishesList(filteredArr)
}