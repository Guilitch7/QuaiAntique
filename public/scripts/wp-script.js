// Écouteur d'événement pour déclencher fetchLastInformation() dès que la page est chargée
document.addEventListener('DOMContentLoaded', function () {
  fetchTransgene();
  fetchPixium();
  fetchAbivax();
  fetchNovacyt();
  fetchMedincell();
  fetchAdvincenne();
  fetchLumibird();
  fetchEquasens();
  fetchAmoeba();
  fetchTheraclion();
  fetchSolutions();
  fetchFonciere();
  fetchVerallia();
  fetchCriteo();
  fetchWaga();
  fetchBonduelle();
  fetchPixiumP();
  fetchCarbios();
  fetchEramet();
  fetchAubay();
  fetchDekuple();
  fetchBiophytis();
  fetchSpin();
  fetchNicox();
  fetchEnogia();
  fetchAfyren();
  fetchDolfines();
  fetchEcoslops();
  fetchAdocia();
  fetchAkwell();
  fetchMem();
  fetchKla();
  fetchOse();
  fetchSide();
  fetchTheraclion();
  fetchCiments();
  fetchVisia();
  fetchBioUv();
});

function fetchTransgene() {
  fetch('https://www.transgene.fr/wp-json/wp/v2/media')
    .then(response => {
      if (!response.ok) {
        throw new Error('Une erreur est survenue lors de la requête.');
      }
      return response.json();
    })
    .then(posts => {
      // Tri des articles par date dans l'ordre décroissant
      posts.sort((a, b) => new Date(b.date) - new Date(a.date));

      // Récupération des informations du dernier article
      const lastPost = posts[0];
      const lastDate = lastPost.date;
      const lastSlug = lastPost.slug;
      const lastLink = lastPost.link;
      const lastSource = lastPost.source_url;

      // Assigner la valeur de lastDate à l'élément avec l'id "date" dans votre page HTML
      const dateElement = document.getElementById('date');
      dateElement.textContent = lastDate;
      const slugElement = document.getElementById('slug');
      slugElement.textContent = lastSlug;
      const linkElement = document.getElementById('link');
      linkElement.setAttribute('href', lastLink);
      const sourceElement = document.getElementById('source');
      sourceElement.setAttribute('href', lastSource);
    })
    .catch(error => {
      console.error(error);
    });
  }
    function fetchPixium() {
      fetch('https://www.pixium-vision.com/wp-json/wp/v2/media')
        .then(response => {
          if (!response.ok) {
            throw new Error('Une erreur est survenue lors de la requête.');
          }
          return response.json();
        })
        .then(posts => {
          // Tri des articles par date dans l'ordre décroissant
          posts.sort((a, b) => new Date(b.date) - new Date(a.date));
    
          // Récupération des informations du dernier article
          const lastPost = posts[0];
          const lastDate = lastPost.date;
          const lastSlug = lastPost.slug;
          const lastLink = lastPost.link;
          const lastSource = lastPost.source_url;

          // Assigner la valeur de lastDate à l'élément avec l'id "date" dans votre page HTML
          const dateElement = document.getElementById('datePix');
          dateElement.textContent = lastDate;
          const slugElement = document.getElementById('slugPix');
          slugElement.textContent = lastSlug;
          const linkElement = document.getElementById('linkPix');
          linkElement.setAttribute('href', lastLink);
          const sourceElement = document.getElementById('sourcePix');
          sourceElement.setAttribute('href', lastSource);
        })
        .catch(error => {
          console.error(error);
        });
}

function fetchAbivax() {
  fetch('https://www.abivax.com/wp-json/wp/v2/media')
    .then(response => {
      if (!response.ok) {
        throw new Error('Une erreur est survenue lors de la requête.');
      }
      return response.json();
    })
    .then(posts => {
      // Tri des articles par date dans l'ordre décroissant
      posts.sort((a, b) => new Date(b.date) - new Date(a.date));

      // Récupération des informations du dernier article
      const lastPost = posts[0];
      const lastDate = lastPost.date;
      const lastSlug = lastPost.slug;
      const lastLink = lastPost.link;
      const lastSource = lastPost.source_url;

      // Assigner la valeur de lastDate à l'élément avec l'id "date" dans votre page HTML
      const dateElement = document.getElementById('dateAbi');
      dateElement.textContent = lastDate;
      const slugElement = document.getElementById('slugAbi');
      slugElement.textContent = lastSlug;
      const linkElement = document.getElementById('linkAbi');
      linkElement.setAttribute('href', lastLink);
      const sourceElement = document.getElementById('sourceAbi');
      sourceElement.setAttribute('href', lastSource);
    })
    .catch(error => {
      console.error(error);
    });
}

function fetchNovacyt() {
  fetch('https://novacyt.com/wp-json/wp/v2/media')
    .then(response => {
      if (!response.ok) {
        throw new Error('Une erreur est survenue lors de la requête.');
      }
      return response.json();
    })
    .then(posts => {
      // Tri des articles par date dans l'ordre décroissant
      posts.sort((a, b) => new Date(b.date) - new Date(a.date));

      // Récupération des informations du dernier article
      const lastPost = posts[0];
      const lastDate = lastPost.date;
      const lastSlug = lastPost.slug;
      const lastLink = lastPost.link;
      const lastSource = lastPost.source_url;

      // Assigner la valeur de lastDate à l'élément avec l'id "date" dans votre page HTML
      const dateElement = document.getElementById('dateNov');
      dateElement.textContent = lastDate;
      const slugElement = document.getElementById('slugNov');
      slugElement.textContent = lastSlug;
      const linkElement = document.getElementById('linkNov');
      linkElement.setAttribute('href', lastLink);
      const sourceElement = document.getElementById('sourceNov');
      sourceElement.setAttribute('href', lastSource);
    })
    .catch(error => {
      console.error(error);
    });
}

function fetchMedincell() {
  fetch('https://www.medincell.com/wp-json/wp/v2/media')
    .then(response => {
      if (!response.ok) {
        throw new Error('Une erreur est survenue lors de la requête.');
      }
      return response.json();
    })
    .then(posts => {
      // Tri des articles par date dans l'ordre décroissant
      posts.sort((a, b) => new Date(b.date) - new Date(a.date));

      // Récupération des informations du dernier article
      const lastPost = posts[0];
      const lastDate = lastPost.date;
      const lastSlug = lastPost.slug;
      const lastLink = lastPost.link;
      const lastSource = lastPost.source_url;

      // Assigner la valeur de lastDate à l'élément avec l'id "date" dans votre page HTML
      const dateElement = document.getElementById('dateMed');
      dateElement.textContent = lastDate;
      const slugElement = document.getElementById('slugMed');
      slugElement.textContent = lastSlug;
      const linkElement = document.getElementById('linkMed');
      linkElement.setAttribute('href', lastLink);
      const sourceElement = document.getElementById('sourceMed');
      sourceElement.setAttribute('href', lastSource);
    })
    .catch(error => {
      console.error(error);
    });
}

function fetchAdvincenne() {
  fetch('https://advicenne.com/wp-json/wp/v2/media')
    .then(response => {
      if (!response.ok) {
        throw new Error('Une erreur est survenue lors de la requête.');
      }
      return response.json();
    })
    .then(posts => {
      // Tri des articles par date dans l'ordre décroissant
      posts.sort((a, b) => new Date(b.date) - new Date(a.date));

      // Récupération des informations du dernier article
      const lastPost = posts[0];
      const lastDate = lastPost.date;
      const lastSlug = lastPost.slug;
      const lastLink = lastPost.link;
      const lastSource = lastPost.source_url;

      // Assigner la valeur de lastDate à l'élément avec l'id "date" dans votre page HTML
      const dateElement = document.getElementById('dateAdv');
      dateElement.textContent = lastDate;
      const slugElement = document.getElementById('slugAdv');
      slugElement.textContent = lastSlug;
      const linkElement = document.getElementById('linkAdv');
      linkElement.setAttribute('href', lastLink);
      const sourceElement = document.getElementById('sourceAdv');
      sourceElement.setAttribute('href', lastSource);
    })
    .catch(error => {
      console.error(error);
    });
}

function fetchLumibird() {
  fetch('https://www.lumibird.com/wp-json/wp/v2/media')
    .then(response => {
      if (!response.ok) {
        throw new Error('Une erreur est survenue lors de la requête.');
      }
      return response.json();
    })
    .then(posts => {
      // Tri des articles par date dans l'ordre décroissant
      posts.sort((a, b) => new Date(b.date) - new Date(a.date));

      // Récupération des informations du dernier article
      const lastPost = posts[0];
      const lastDate = lastPost.date;
      const lastSlug = lastPost.slug;
      const lastLink = lastPost.link;
      const lastSource = lastPost.source_url;

      // Assigner la valeur de lastDate à l'élément avec l'id "date" dans votre page HTML
      const dateElement = document.getElementById('dateLum');
      dateElement.textContent = lastDate;
      const slugElement = document.getElementById('slugLum');
      slugElement.textContent = lastSlug;
      const linkElement = document.getElementById('linkLum');
      linkElement.setAttribute('href', lastLink);
      const sourceElement = document.getElementById('sourceLum');
      sourceElement.setAttribute('href', lastSource);
    })
    .catch(error => {
      console.error(error);
    });
}

function fetchEquasens() {
  fetch('https://equasens.com/wp-json/wp/v2/media')
    .then(response => {
      if (!response.ok) {
        throw new Error('Une erreur est survenue lors de la requête.');
      }
      return response.json();
    })
    .then(posts => {
      // Tri des articles par date dans l'ordre décroissant
      posts.sort((a, b) => new Date(b.date) - new Date(a.date));

      // Récupération des informations du dernier article
      const lastPost = posts[0];
      const lastDate = lastPost.date;
      const lastSlug = lastPost.slug;
      const lastLink = lastPost.link;
      const lastSource = lastPost.source_url;

      // Assigner la valeur de lastDate à l'élément avec l'id "date" dans votre page HTML
      const dateElement = document.getElementById('dateEqu');
      dateElement.textContent = lastDate;
      const slugElement = document.getElementById('slugEqu');
      slugElement.textContent = lastSlug;
      const linkElement = document.getElementById('linkEqu');
      linkElement.setAttribute('href', lastLink);
      const sourceElement = document.getElementById('sourceEqu');
      sourceElement.setAttribute('href', lastSource);
    })
    .catch(error => {
      console.error(error);
    });
}

function fetchAmoeba() {
  fetch('https://amoeba-nature.com/wp-json/wp/v2/media')
    .then(response => {
      if (!response.ok) {
        throw new Error('Une erreur est survenue lors de la requête.');
      }
      return response.json();
    })
    .then(posts => {
      // Tri des articles par date dans l'ordre décroissant
      posts.sort((a, b) => new Date(b.date) - new Date(a.date));

      // Récupération des informations du dernier article
      const lastPost = posts[0];
      const lastDate = lastPost.date;
      const lastSlug = lastPost.slug;
      const lastLink = lastPost.link;
      const lastSource = lastPost.source_url;

      // Assigner la valeur de lastDate à l'élément avec l'id "date" dans votre page HTML
      const dateElement = document.getElementById('dateAmo');
      dateElement.textContent = lastDate;
      const slugElement = document.getElementById('slugAmo');
      slugElement.textContent = lastSlug;
      const linkElement = document.getElementById('linkAmo');
      linkElement.setAttribute('href', lastLink);
      const sourceElement = document.getElementById('sourceAmo');
      sourceElement.setAttribute('href', lastSource);
    })
    .catch(error => {
      console.error(error);
    });
}

function fetchTheraclion() {
  fetch('https://www.theraclion.fr/wp-json/wp/v2/media')
    .then(response => {
      if (!response.ok) {
        throw new Error('Une erreur est survenue lors de la requête.');
      }
      return response.json();
    })
    .then(posts => {
      // Tri des articles par date dans l'ordre décroissant
      posts.sort((a, b) => new Date(b.date) - new Date(a.date));

      // Récupération des informations du dernier article
      const lastPost = posts[0];
      const lastDate = lastPost.date;
      const lastSlug = lastPost.slug;
      const lastLink = lastPost.link;
      const lastSource = lastPost.source_url;

      // Assigner la valeur de lastDate à l'élément avec l'id "date" dans votre page HTML
      const dateElement = document.getElementById('dateThe');
      dateElement.textContent = lastDate;
      const slugElement = document.getElementById('slugThe');
      slugElement.textContent = lastSlug;
      const linkElement = document.getElementById('linkThe');
      linkElement.setAttribute('href', lastLink);
      const sourceElement = document.getElementById('sourceThe');
      sourceElement.setAttribute('href', lastSource);
    })
    .catch(error => {
      console.error(error);
    });
}

function fetchSolutions() {
  fetch('https://www.solutions30.com/wp-json/wp/v2/media')
    .then(response => {
      if (!response.ok) {
        throw new Error('Une erreur est survenue lors de la requête.');
      }
      return response.json();
    })
    .then(posts => {
      // Tri des articles par date dans l'ordre décroissant
      posts.sort((a, b) => new Date(b.date) - new Date(a.date));

      // Récupération des informations du dernier article
      const lastPost = posts[0];
      const lastDate = lastPost.date;
      const lastSlug = lastPost.slug;
      const lastLink = lastPost.link;
      const lastSource = lastPost.source_url;

      // Assigner la valeur de lastDate à l'élément avec l'id "date" dans votre page HTML
      const dateElement = document.getElementById('dateSol');
      dateElement.textContent = lastDate;
      const slugElement = document.getElementById('slugSol');
      slugElement.textContent = lastSlug;
      const linkElement = document.getElementById('linkSol');
      linkElement.setAttribute('href', lastLink);
      const sourceElement = document.getElementById('sourceSol');
      sourceElement.setAttribute('href', lastSource);
    })
    .catch(error => {
      console.error(error);
    });
}

function fetchFonciere() {
  fetch('https://fonciere-inea.com/wp-json/wp/v2/media')
    .then(response => {
      if (!response.ok) {
        throw new Error('Une erreur est survenue lors de la requête.');
      }
      return response.json();
    })
    .then(posts => {
      // Tri des articles par date dans l'ordre décroissant
      posts.sort((a, b) => new Date(b.date) - new Date(a.date));

      // Récupération des informations du dernier article
      const lastPost = posts[0];
      const lastDate = lastPost.date;
      const lastSlug = lastPost.slug;
      const lastLink = lastPost.link;
      const lastSource = lastPost.source_url;

      // Assigner la valeur de lastDate à l'élément avec l'id "date" dans votre page HTML
      const dateElement = document.getElementById('dateFon');
      dateElement.textContent = lastDate;
      const slugElement = document.getElementById('slugFon');
      slugElement.textContent = lastSlug;
      const linkElement = document.getElementById('linkFon');
      linkElement.setAttribute('href', lastLink);
      const sourceElement = document.getElementById('sourceFon');
      sourceElement.setAttribute('href', lastSource);
    })
    .catch(error => {
      console.error(error);
    });
}

function fetchVerallia() {
  fetch('https://www.verallia.com/wp-json/wp/v2/media')
    .then(response => {
      if (!response.ok) {
        throw new Error('Une erreur est survenue lors de la requête.');
      }
      return response.json();
    })
    .then(posts => {
      // Tri des articles par date dans l'ordre décroissant
      posts.sort((a, b) => new Date(b.date) - new Date(a.date));

      // Récupération des informations du dernier article
      const lastPost = posts[0];
      const lastDate = lastPost.date;
      const lastSlug = lastPost.slug;
      const lastLink = lastPost.link;
      const lastSource = lastPost.source_url;

      // Assigner la valeur de lastDate à l'élément avec l'id "date" dans votre page HTML
      const dateElement = document.getElementById('dateVer');
      dateElement.textContent = lastDate;
      const slugElement = document.getElementById('slugVer');
      slugElement.textContent = lastSlug;
      const linkElement = document.getElementById('linkVer');
      linkElement.setAttribute('href', lastLink);
      const sourceElement = document.getElementById('sourceVer');
      sourceElement.setAttribute('href', lastSource);
    })
    .catch(error => {
      console.error(error);
    });
}

function fetchCriteo() {
  fetch('https://www.criteo.com/wp-json/wp/v2/media')
    .then(response => {
      if (!response.ok) {
        throw new Error('Une erreur est survenue lors de la requête.');
      }
      return response.json();
    })
    .then(posts => {
      // Tri des articles par date dans l'ordre décroissant
      posts.sort((a, b) => new Date(b.date) - new Date(a.date));

      // Récupération des informations du dernier article
      const lastPost = posts[0];
      const lastDate = lastPost.date;
      const lastSlug = lastPost.slug;
      const lastLink = lastPost.link;
      const lastSource = lastPost.source_url;

      // Assigner la valeur de lastDate à l'élément avec l'id "date" dans votre page HTML
      const dateElement = document.getElementById('dateCri');
      dateElement.textContent = lastDate;
      const slugElement = document.getElementById('slugCri');
      slugElement.textContent = lastSlug;
      const linkElement = document.getElementById('linkCri');
      linkElement.setAttribute('href', lastLink);
      const sourceElement = document.getElementById('sourceCri');
      sourceElement.setAttribute('href', lastSource);
    })
    .catch(error => {
      console.error(error);
    });
}

function fetchWaga() {
  fetch('https://waga-energy.com/wp-json/wp/v2/media')
    .then(response => {
      if (!response.ok) {
        throw new Error('Une erreur est survenue lors de la requête.');
      }
      return response.json();
    })
    .then(posts => {
      // Tri des articles par date dans l'ordre décroissant
      posts.sort((a, b) => new Date(b.date) - new Date(a.date));

      // Récupération des informations du dernier article
      const lastPost = posts[0];
      const lastDate = lastPost.date;
      const lastSlug = lastPost.slug;
      const lastLink = lastPost.link;
      const lastSource = lastPost.source_url;

      // Assigner la valeur de lastDate à l'élément avec l'id "date" dans votre page HTML
      const dateElement = document.getElementById('dateWag');
      dateElement.textContent = lastDate;
      const slugElement = document.getElementById('slugWag');
      slugElement.textContent = lastSlug;
      const linkElement = document.getElementById('linkWag');
      linkElement.setAttribute('href', lastLink);
      const sourceElement = document.getElementById('sourceWag');
      sourceElement.setAttribute('href', lastSource);
    })
    .catch(error => {
      console.error(error);
    });
}

function fetchBonduelle() {
  fetch('https://www.bonduelle.com/fr/wp-json/wp/v2/media')
    .then(response => {
      if (!response.ok) {
        throw new Error('Une erreur est survenue lors de la requête.');
      }
      return response.json();
    })
    .then(posts => {
      // Tri des articles par date dans l'ordre décroissant
      posts.sort((a, b) => new Date(b.date) - new Date(a.date));

      // Récupération des informations du dernier article
      const lastPost = posts[0];
      const lastDate = lastPost.date;
      const lastSlug = lastPost.slug;
      const lastLink = lastPost.link;
      const lastSource = lastPost.source_url;

      // Assigner la valeur de lastDate à l'élément avec l'id "date" dans votre page HTML
      const dateElement = document.getElementById('dateBon');
      dateElement.textContent = lastDate;
      const slugElement = document.getElementById('slugBon');
      slugElement.textContent = lastSlug;
      const linkElement = document.getElementById('linkBon');
      linkElement.setAttribute('href', lastLink);
      const sourceElement = document.getElementById('sourceBon');
      sourceElement.setAttribute('href', lastSource);
    })
    .catch(error => {
      console.error(error);
    });
}

    function fetchPixiumP() {
      fetch('https://www.hunyvers.com/wp-json/wp/v2/media')
        .then(response => {
          if (!response.ok) {
            throw new Error('Une erreur est survenue lors de la requête.');
          }
          return response.json();
        })
        .then(posts => {
          // Tri des articles par date dans l'ordre décroissant
          posts.sort((a, b) => new Date(b.date) - new Date(a.date));
    
          // Récupération des informations du dernier article
          const lastPost = posts[0];
          const lastDate = lastPost.date;
          const lastSlug = lastPost.slug;
          const lastLink = lastPost.link;
          const lastSource = lastPost.source_url;

          // Assigner la valeur de lastDate à l'élément avec l'id "date" dans votre page HTML
          const dateElement = document.getElementById('datePixP');
          dateElement.textContent = lastDate;
          const slugElement = document.getElementById('slugPixP');
          slugElement.textContent = lastSlug;
          const linkElement = document.getElementById('linkPixP');
          linkElement.setAttribute('href', lastLink);
          const sourceElement = document.getElementById('sourcePixp');
          sourceElement.setAttribute('href', lastSource);
        })
        .catch(error => {
          console.error(error);
        });
}

function fetchValnevaP() {
  fetch('https://www.valneva.com/wp-json/wp/v2/media')
    .then(response => {
      if (!response.ok) {
        throw new Error('Une erreur est survenue lors de la requête.');
      }
      return response.json();
    })
    .then(posts => {
      // Tri des articles par date dans l'ordre décroissant
      posts.sort((a, b) => new Date(b.date) - new Date(a.date));

      // Récupération des informations du dernier article
      const lastPost = posts[0];
      const lastDate = lastPost.date;
      const lastSlug = lastPost.slug;
      const lastLink = lastPost.link;
      const lastSource = lastPost.source_url;

      // Assigner la valeur de lastDate à l'élément avec l'id "date" dans votre page HTML
      const dateElement = document.getElementById('dateValP');
      dateElement.textContent = lastDate;
      const slugElement = document.getElementById('slugValP');
      slugElement.textContent = lastSlug;
      const linkElement = document.getElementById('linkValP');
      linkElement.setAttribute('href', lastLink);
      const sourceElement = document.getElementById('sourceValP');
      sourceElement.setAttribute('href', lastSource);
    })
    .catch(error => {
      console.error(error);
    });
}

function fetchCarbios() {
  fetch('https://www.carbios.com/wp-json/wp/v2/media')
    .then(response => {
      if (!response.ok) {
        throw new Error('Une erreur est survenue lors de la requête.');
      }
      return response.json();
    })
    .then(posts => {
      // Tri des articles par date dans l'ordre décroissant
      posts.sort((a, b) => new Date(b.date) - new Date(a.date));

      // Récupération des informations du dernier article
      const lastPost = posts[0];
      const lastDate = lastPost.date;
      const lastSlug = lastPost.slug;
      const lastLink = lastPost.link;
      const lastSource = lastPost.source_url;

      // Assigner la valeur de lastDate à l'élément avec l'id "date" dans votre page HTML
      const dateElement = document.getElementById('dateBonP');
      dateElement.textContent = lastDate;
      const slugElement = document.getElementById('slugBonP');
      slugElement.textContent = lastSlug;
      const linkElement = document.getElementById('linkBonP');
      linkElement.setAttribute('href', lastLink);
      const sourceElement = document.getElementById('sourceBonP');
      sourceElement.setAttribute('href', lastSource);
    })
    .catch(error => {
      console.error(error);
    });
}

function fetchEramet() {
  fetch('https://www.eramet.com/wp-json/wp/v2/media')
    .then(response => {
      if (!response.ok) {
        throw new Error('Une erreur est survenue lors de la requête.');
      }
      return response.json();
    })
    .then(posts => {
      // Tri des articles par date dans l'ordre décroissant
      posts.sort((a, b) => new Date(b.date) - new Date(a.date));

      // Récupération des informations du dernier article
      const lastPost = posts[0];
      const lastDate = lastPost.date;
      const lastSlug = lastPost.slug;
      const lastLink = lastPost.link;
      const lastSource = lastPost.source_url;

      // Assigner la valeur de lastDate à l'élément avec l'id "date" dans votre page HTML
      const dateElement = document.getElementById('dateEra');
      dateElement.textContent = lastDate;
      const slugElement = document.getElementById('slugEra');
      slugElement.textContent = lastSlug;
      const linkElement = document.getElementById('linkEra');
      linkElement.setAttribute('href', lastLink);
      const sourceElement = document.getElementById('sourceEra');
      sourceElement.setAttribute('href', lastSource);
    })
    .catch(error => {
      console.error(error);
    });
}

function fetchAubay() {
  fetch('https://www.aubay.com/wp-json/wp/v2/media')
    .then(response => {
      if (!response.ok) {
        throw new Error('Une erreur est survenue lors de la requête.');
      }
      return response.json();
    })
    .then(posts => {
      // Tri des articles par date dans l'ordre décroissant
      posts.sort((a, b) => new Date(b.date) - new Date(a.date));

      // Récupération des informations du dernier article
      const lastPost = posts[0];
      const lastDate = lastPost.date;
      const lastSlug = lastPost.slug;
      const lastLink = lastPost.link;
      const lastSource = lastPost.source_url;

      // Assigner la valeur de lastDate à l'élément avec l'id "date" dans votre page HTML
      const dateElement = document.getElementById('dateAub');
      dateElement.textContent = lastDate;
      const slugElement = document.getElementById('slugAub');
      slugElement.textContent = lastSlug;
      const linkElement = document.getElementById('linkAub');
      linkElement.setAttribute('href', lastLink);
      const sourceElement = document.getElementById('sourceAub');
      sourceElement.setAttribute('href', lastSource);
    })
    .catch(error => {
      console.error(error);
    });
}

function fetchDekuple() {
  fetch('https://www.dekuple.com/wp-json/wp/v2/media')
    .then(response => {
      if (!response.ok) {
        throw new Error('Une erreur est survenue lors de la requête.');
      }
      return response.json();
    })
    .then(posts => {
      // Tri des articles par date dans l'ordre décroissant
      posts.sort((a, b) => new Date(b.date) - new Date(a.date));

      // Récupération des informations du dernier article
      const lastPost = posts[0];
      const lastDate = lastPost.date;
      const lastSlug = lastPost.slug;
      const lastLink = lastPost.link;
      const lastSource = lastPost.source_url;

      // Assigner la valeur de lastDate à l'élément avec l'id "date" dans votre page HTML
      const dateElement = document.getElementById('dateDek');
      dateElement.textContent = lastDate;
      const slugElement = document.getElementById('slugDek');
      slugElement.textContent = lastSlug;
      const linkElement = document.getElementById('linkDek');
      linkElement.setAttribute('href', lastLink);
      const sourceElement = document.getElementById('sourceDek');
      sourceElement.setAttribute('href', lastSource);
    })
    .catch(error => {
      console.error(error);
    });
}

function fetchBiophytis() {
  fetch('https://www.biophytis.com/wp-json/wp/v2/media')
  .then(response => {
    if (!response.ok) {
      throw new Error('Une erreur est survenue lors de la requête.');
    }
    return response.json();
  })
  .then(posts => {
    // Tri des articles par date dans l'ordre décroissant
    posts.sort((a, b) => new Date(b.date) - new Date(a.date));
  
    // Récupération des informations du dernier article
    const lastPost = posts[0];
    const lastDate = lastPost.date;
    const lastSlug = lastPost.slug;
    const lastLink = lastPost.link;
    const lastSource = lastPost.source_url;

    // Assigner la valeur de lastDate à l'élément avec l'id "date" dans votre page HTML
    const dateElement = document.getElementById('dateBio');
    dateElement.textContent = lastDate;
    const slugElement = document.getElementById('slugBio');
    slugElement.textContent = lastSlug;
    const linkElement = document.getElementById('linkBio');
    linkElement.setAttribute('href', lastLink);
    const sourceElement = document.getElementById('sourceBio');
    sourceElement.setAttribute('href', lastSource);
  })
  .catch(error => {
    console.error(error);
  });
  }
  

function fetchSpin() {
fetch('https://www.spineguard.com/wp-json/wp/v2/media')
.then(response => {
  if (!response.ok) {
    throw new Error('Une erreur est survenue lors de la requête.');
  }
  return response.json();
})
.then(posts => {
  // Tri des articles par date dans l'ordre décroissant
  posts.sort((a, b) => new Date(b.date) - new Date(a.date));

  // Récupération des informations du dernier article
  const lastPost = posts[0];
  const lastDate = lastPost.date;
  const lastSlug = lastPost.slug;
  const lastLink = lastPost.link;
  const lastSource = lastPost.source_url;

  // Assigner la valeur de lastDate à l'élément avec l'id "date" dans votre page HTML
  const dateElement = document.getElementById('dateSpin');
  dateElement.textContent = lastDate;
  const slugElement = document.getElementById('slugSpin');
  slugElement.textContent = lastSlug;
  const linkElement = document.getElementById('linkSpin');
  linkElement.setAttribute('href', lastLink);
  const sourceElement = document.getElementById('sourceSpin');
  sourceElement.setAttribute('href', lastSource);
})
.catch(error => {
  console.error(error);
});
}


function fetchNicox() {
  fetch('https://www.nicox.com/wp-json/wp/v2/media')
  .then(response => {
    if (!response.ok) {
      throw new Error('Une erreur est survenue lors de la requête.');
    }
    return response.json();
  })
  .then(posts => {
    // Tri des articles par date dans l'ordre décroissant
    posts.sort((a, b) => new Date(b.date) - new Date(a.date));
  
    // Récupération des informations du dernier article
    const lastPost = posts[0];
    const lastDate = lastPost.date;
    const lastSlug = lastPost.slug;
    const lastLink = lastPost.link;
    const lastSource = lastPost.source_url;

    // Assigner la valeur de lastDate à l'élément avec l'id "date" dans votre page HTML
    const dateElement = document.getElementById('dateNic');
    dateElement.textContent = lastDate;
    const slugElement = document.getElementById('slugNic');
    slugElement.textContent = lastSlug;
    const linkElement = document.getElementById('linkNic');
    linkElement.setAttribute('href', lastLink);
    const sourceElement = document.getElementById('sourceNic');
    sourceElement.setAttribute('href', lastSource);
  })
  .catch(error => {
    console.error(error);
  });
  }

  function fetchEnogia() {
    fetch('https://enogia.com/wp-json/wp/v2/media')
    .then(response => {
      if (!response.ok) {
        throw new Error('Une erreur est survenue lors de la requête.');
      }
      return response.json();
    })
    .then(posts => {
      // Tri des articles par date dans l'ordre décroissant
      posts.sort((a, b) => new Date(b.date) - new Date(a.date));
    
      // Récupération des informations du dernier article
      const lastPost = posts[0];
      const lastDate = lastPost.date;
      const lastSlug = lastPost.slug;
      const lastLink = lastPost.link;
      const lastSource = lastPost.source_url;

      // Assigner la valeur de lastDate à l'élément avec l'id "date" dans votre page HTML
      const dateElement = document.getElementById('dateEno');
      dateElement.textContent = lastDate;
      const slugElement = document.getElementById('slugEno');
      slugElement.textContent = lastSlug;
      const linkElement = document.getElementById('linkEno');
      linkElement.setAttribute('href', lastLink);
      const sourceElement = document.getElementById('sourceEno');
      sourceElement.setAttribute('href', lastSource);
    })
    .catch(error => {
      console.error(error);
    });
    }

    function fetchAfyren() {
      fetch('https://afyren.com/wp-json/wp/v2/media')
      .then(response => {
        if (!response.ok) {
          throw new Error('Une erreur est survenue lors de la requête.');
        }
        return response.json();
      })
      .then(posts => {
        // Tri des articles par date dans l'ordre décroissant
        posts.sort((a, b) => new Date(b.date) - new Date(a.date));
      
        // Récupération des informations du dernier article
        const lastPost = posts[0];
        const lastDate = lastPost.date;
        const lastSlug = lastPost.slug;
        const lastLink = lastPost.link;
        const lastSource = lastPost.source_url;

        // Assigner la valeur de lastDate à l'élément avec l'id "date" dans votre page HTML
        const dateElement = document.getElementById('dateAfy');
        dateElement.textContent = lastDate;
        const slugElement = document.getElementById('slugAfy');
        slugElement.textContent = lastSlug;
        const linkElement = document.getElementById('linkAfy');
        linkElement.setAttribute('href', lastLink);
        const sourceElement = document.getElementById('sourceAfy');
        sourceElement.setAttribute('href', lastSource);
      })
      .catch(error => {
        console.error(error);
      });
      }

      function fetchDolfines() {
        fetch('https://www.dolfines.com/wp-json/wp/v2/media')
        .then(response => {
          if (!response.ok) {
            throw new Error('Une erreur est survenue lors de la requête.');
          }
          return response.json();
        })
        .then(posts => {
          // Tri des articles par date dans l'ordre décroissant
          posts.sort((a, b) => new Date(b.date) - new Date(a.date));
        
          // Récupération des informations du dernier article
          const lastPost = posts[0];
          const lastDate = lastPost.date;
          const lastSlug = lastPost.slug;
          const lastLink = lastPost.link;
          const lastSource = lastPost.source_url;

          // Assigner la valeur de lastDate à l'élément avec l'id "date" dans votre page HTML
          const dateElement = document.getElementById('dateDol');
          dateElement.textContent = lastDate;
          const slugElement = document.getElementById('slugDol');
          slugElement.textContent = lastSlug;
          const linkElement = document.getElementById('linkDol');
          linkElement.setAttribute('href', lastLink);
          const sourceElement = document.getElementById('sourceDol');
          sourceElement.setAttribute('href', lastSource);
        })
        .catch(error => {
          console.error(error);
        });
        }

        function fetchEcoslops() {
          fetch('https://www.ecoslops.com/wp-json/wp/v2/media')
          .then(response => {
            if (!response.ok) {
              throw new Error('Une erreur est survenue lors de la requête.');
            }
            return response.json();
          })
          .then(posts => {
            // Tri des articles par date dans l'ordre décroissant
            posts.sort((a, b) => new Date(b.date) - new Date(a.date));
          
            // Récupération des informations du dernier article
            const lastPost = posts[0];
            const lastDate = lastPost.date;
            const lastSlug = lastPost.slug;
            const lastLink = lastPost.link;
            const lastSource = lastPost.source_url;

            // Assigner la valeur de lastDate à l'élément avec l'id "date" dans votre page HTML
            const dateElement = document.getElementById('dateEco');
            dateElement.textContent = lastDate;
            const slugElement = document.getElementById('slugEco');
            slugElement.textContent = lastSlug;
            const linkElement = document.getElementById('linkEco');
            linkElement.setAttribute('href', lastLink);
            const sourceElement = document.getElementById('sourceEco');
            sourceElement.setAttribute('href', lastSource);
          })
          .catch(error => {
            console.error(error);
          });
          }
    
          function fetchAdocia() {
            fetch('https://www.adocia.com/wp-json/wp/v2/media')
            .then(response => {
              if (!response.ok) {
                throw new Error('Une erreur est survenue lors de la requête.');
              }
              return response.json();
            })
            .then(posts => {
              // Tri des articles par date dans l'ordre décroissant
              posts.sort((a, b) => new Date(b.date) - new Date(a.date));
            
              // Récupération des informations du dernier article
              const lastPost = posts[0];
              const lastDate = lastPost.date;
              const lastSlug = lastPost.slug;
              const lastLink = lastPost.link;
              const lastSource = lastPost.source_url;

              // Assigner la valeur de lastDate à l'élément avec l'id "date" dans votre page HTML
              const dateElement = document.getElementById('dateAdo');
              dateElement.textContent = lastDate;
              const slugElement = document.getElementById('slugAdo');
              slugElement.textContent = lastSlug;
              const linkElement = document.getElementById('linkAdo');
              linkElement.setAttribute('href', lastLink);
              const sourceElement = document.getElementById('sourceAdo');
              sourceElement.setAttribute('href', lastSource);
            })
            .catch(error => {
              console.error(error);
            });
            }
      
            function fetchAkwell() {
              fetch('https://akwel-automotive.com/wp-json/wp/v2/media')
              .then(response => {
                if (!response.ok) {
                  throw new Error('Une erreur est survenue lors de la requête.');
                }
                return response.json();
              })
              .then(posts => {
                // Tri des articles par date dans l'ordre décroissant
                posts.sort((a, b) => new Date(b.date) - new Date(a.date));
              
                // Récupération des informations du dernier article
                const lastPost = posts[0];
                const lastDate = lastPost.date;
                const lastSlug = lastPost.slug;
                const lastLink = lastPost.link;
                const lastSource = lastPost.source_url;

                // Assigner la valeur de lastDate à l'élément avec l'id "date" dans votre page HTML
                const dateElement = document.getElementById('dateAkw');
                dateElement.textContent = lastDate;
                const slugElement = document.getElementById('slugAkw');
                slugElement.textContent = lastSlug;
                const linkElement = document.getElementById('linkAkw');
                linkElement.setAttribute('href', lastLink);
                const sourceElement = document.getElementById('sourceAkw');
                sourceElement.setAttribute('href', lastSource);
              })
              .catch(error => {
                console.error(error);
              });
              }
        
              function fetchMem() {
                  fetch('https://memscap.com/wp-json/wp/v2/media')
                  .then(response => {
                    if (!response.ok) {
                      throw new Error('Une erreur est survenue lors de la requête.');
                    }
                    return response.json();
                  })
                  .then(posts => {
                    // Tri des articles par date dans l'ordre décroissant
                    posts.sort((a, b) => new Date(b.date) - new Date(a.date));
                  
                    // Récupération des informations du dernier article
                    const lastPost = posts[0];
                    const lastDate = lastPost.date;
                    const lastSlug = lastPost.slug;
                    const lastLink = lastPost.link;
                    const lastSource = lastPost.source_url;
 
                    // Assigner la valeur de lastDate à l'élément avec l'id "date" dans votre page HTML
                    const dateElement = document.getElementById('dateMem');
                    dateElement.textContent = lastDate;
                    const slugElement = document.getElementById('slugMem');
                    slugElement.textContent = lastSlug;
                    const linkElement = document.getElementById('linkMem');
                    linkElement.setAttribute('href', lastLink);
                    const sourceElement = document.getElementById('sourceMem');
                    sourceElement.setAttribute('href', lastSource);
                  })
                  .catch(error => {
                    console.error(error);
                  });
                  }

                  function fetchGui() {
                    fetch('https://www.guillemot.com/wp-json/wp/v2/media')
                    .then(response => {
                      if (!response.ok) {
                        throw new Error('Une erreur est survenue lors de la requête.');
                      }
                      return response.json();
                    })
                    .then(posts => {
                      // Tri des articles par date dans l'ordre décroissant
                      posts.sort((a, b) => new Date(b.date) - new Date(a.date));
                    
                      // Récupération des informations du dernier article
                      const lastPost = posts[0];
                      const lastDate = lastPost.date;
                      const lastSlug = lastPost.slug;
                      const lastLink = lastPost.link;
                      const lastSource = lastPost.source_url;

                      // Assigner la valeur de lastDate à l'élément avec l'id "date" dans votre page HTML
                      const dateElement = document.getElementById('dateGui');
                      dateElement.textContent = lastDate;
                      const slugElement = document.getElementById('slugGui');
                      slugElement.textContent = lastSlug;
                      const linkElement = document.getElementById('linkGui');
                      linkElement.setAttribute('href', lastLink);
                      const sourceElement = document.getElementById('sourceGui');
                      sourceElement.setAttribute('href', lastSource);
                    })
                    .catch(error => {
                      console.error(error);
                    });
                    }

                    function fetchKla() {
                      fetch('https://www.klarsen.com/wp-json/wp/v2/media')
                      .then(response => {
                        if (!response.ok) {
                          throw new Error('Une erreur est survenue lors de la requête.');
                        }
                        return response.json();
                      })
                      .then(posts => {
                        // Tri des articles par date dans l'ordre décroissant
                        posts.sort((a, b) => new Date(b.date) - new Date(a.date));
                      
                        // Récupération des informations du dernier article
                        const lastPost = posts[0];
                        const lastDate = lastPost.date;
                        const lastSlug = lastPost.slug;
                        const lastLink = lastPost.link;
                        const lastSource = lastPost.source_url;
 
                        // Assigner la valeur de lastDate à l'élément avec l'id "date" dans votre page HTML
                        const dateElement = document.getElementById('dateKla');
                        dateElement.textContent = lastDate;
                        const slugElement = document.getElementById('slugKla');
                        slugElement.textContent = lastSlug;
                        const linkElement = document.getElementById('linkKla');
                        linkElement.setAttribute('href', lastLink);
                        const sourceElement = document.getElementById('sourceKla');
                        sourceElement.setAttribute('href', lastSource);
                      })
                      .catch(error => {
                        console.error(error);
                      });
                      }

                      
              function fetchOse() {
                fetch('https://www.ose-immuno.com/wp-json/wp/v2/media')
                .then(response => {
                  if (!response.ok) {
                    throw new Error('Une erreur est survenue lors de la requête.');
                  }
                  return response.json();
                })
                .then(posts => {
                  // Tri des articles par date dans l'ordre décroissant
                  posts.sort((a, b) => new Date(b.date) - new Date(a.date));
                
                  // Récupération des informations du dernier article
                  const lastPost = posts[0];
                  const lastDate = lastPost.date;
                  const lastSlug = lastPost.slug;
                  const lastLink = lastPost.link;
                  const lastSource = lastPost.source_url;

                  // Assigner la valeur de lastDate à l'élément avec l'id "date" dans votre page HTML
                  const dateElement = document.getElementById('dateOse');
                  dateElement.textContent = lastDate;
                  const slugElement = document.getElementById('slugOse');
                  slugElement.textContent = lastSlug;
                  const linkElement = document.getElementById('linkOse');
                  linkElement.setAttribute('href', lastLink);
                  const sourceElement = document.getElementById('sourceOse');
                  sourceElement.setAttribute('href', lastSource);
                })
                .catch(error => {
                  console.error(error);
                });
                }

                function fetchSide() {
                  fetch('https://www.sidetrade.fr/wp-json/wp/v2/media')
                  .then(response => {
                    if (!response.ok) {
                      throw new Error('Une erreur est survenue lors de la requête.');
                    }
                    return response.json();
                  })
                  .then(posts => {
                    // Tri des articles par date dans l'ordre décroissant
                    posts.sort((a, b) => new Date(b.date) - new Date(a.date));
                  
                    // Récupération des informations du dernier article
                    const lastPost = posts[0];
                    const lastDate = lastPost.date;
                    const lastSlug = lastPost.slug;
                    const lastLink = lastPost.link;
                    const lastSource = lastPost.source_url;

                    // Assigner la valeur de lastDate à l'élément avec l'id "date" dans votre page HTML
                    const dateElement = document.getElementById('dateSid');
                    dateElement.textContent = lastDate;
                    const slugElement = document.getElementById('slugSid');
                    slugElement.textContent = lastSlug;
                    const linkElement = document.getElementById('linkSid');
                    linkElement.setAttribute('href', lastLink);
                    const sourceElement = document.getElementById('sourceSid');
                    sourceElement.setAttribute('href', lastSource);
                  })
                  .catch(error => {
                    console.error(error);
                  });
                  }

                  function fetchThera() {
                    fetch('https://www.theradiag.com/wp-json/wp/v2/media')
                    .then(response => {
                      if (!response.ok) {
                        throw new Error('Une erreur est survenue lors de la requête.');
                      }
                      return response.json();
                    })
                    .then(posts => {
                      // Tri des articles par date dans l'ordre décroissant
                      posts.sort((a, b) => new Date(b.date) - new Date(a.date));
                    
                      // Récupération des informations du dernier article
                      const lastPost = posts[0];
                      const lastDate = lastPost.date;
                      const lastSlug = lastPost.slug;
                      const lastLink = lastPost.link;
                      const lastSource = lastPost.source_url;
 
                      // Assigner la valeur de lastDate à l'élément avec l'id "date" dans votre page HTML
                      const dateElement = document.getElementById('dateThera');
                      dateElement.textContent = lastDate;
                      const slugElement = document.getElementById('slugThera');
                      slugElement.textContent = lastSlug;
                      const linkElement = document.getElementById('linkThera');
                      linkElement.setAttribute('href', lastLink);
                      const sourceElement = document.getElementById('sourceThera');
                      sourceElement.setAttribute('href', lastSource);
                    })
                    .catch(error => {
                      console.error(error);
                    });
                    }

                    function fetchCiments() {
                      fetch('https://www.ciments-hoffmann.fr/wp-json/wp/v2/media')
                      .then(response => {
                        if (!response.ok) {
                          throw new Error('Une erreur est survenue lors de la requête.');
                        }
                        return response.json();
                      })
                      .then(posts => {
                        // Tri des articles par date dans l'ordre décroissant
                        posts.sort((a, b) => new Date(b.date) - new Date(a.date));
                      
                        // Récupération des informations du dernier article
                        const lastPost = posts[0];
                        const lastDate = lastPost.date;
                        const lastSlug = lastPost.slug;
                        const lastLink = lastPost.link;
                        const lastSource = lastPost.source_url;

                        // Assigner la valeur de lastDate à l'élément avec l'id "date" dans votre page HTML
                        const dateElement = document.getElementById('dateCim');
                        dateElement.textContent = lastDate;
                        const slugElement = document.getElementById('slugCim');
                        slugElement.textContent = lastSlug;
                        const linkElement = document.getElementById('linkCim');
                        linkElement.setAttribute('href', lastLink);
                        const sourceElement = document.getElementById('sourceCim');
                        sourceElement.setAttribute('href', lastSource);
                      })
                      .catch(error => {
                        console.error(error);
                      });
                      }
                  
                      function fetchVisia() {
                        fetch('https://www.visiativ.com/wp-json/wp/v2/media')
                        .then(response => {
                          if (!response.ok) {
                            throw new Error('Une erreur est survenue lors de la requête.');
                          }
                          return response.json();
                        })
                        .then(posts => {
                          // Tri des articles par date dans l'ordre décroissant
                          posts.sort((a, b) => new Date(b.date) - new Date(a.date));
                        
                          // Récupération des informations du dernier article
                          const lastPost = posts[0];
                          const lastDate = lastPost.date;
                          const lastSlug = lastPost.slug;
                          const lastLink = lastPost.link;
                          const lastSource = lastPost.source_url;

                          // Assigner la valeur de lastDate à l'élément avec l'id "date" dans votre page HTML
                          const dateElement = document.getElementById('dateVis');
                          dateElement.textContent = lastDate;
                          const slugElement = document.getElementById('slugVis');
                          slugElement.textContent = lastSlug;
                          const linkElement = document.getElementById('linkVis');
                          linkElement.setAttribute('href', lastLink);
                          const sourceElement = document.getElementById('sourceVis');
                          sourceElement.setAttribute('href', lastSource);
                        })
                        .catch(error => {
                          console.error(error);
                        });
                        }

                        function fetchBioUv() {
                          fetch('https://www.bio-uv.com/wp-json/wp/v2/media')
                          .then(response => {
                            if (!response.ok) {
                              throw new Error('Une erreur est survenue lors de la requête.');
                            }
                            return response.json();
                          })
                          .then(posts => {
                            // Tri des articles par date dans l'ordre décroissant
                            posts.sort((a, b) => new Date(b.date) - new Date(a.date));
                          
                            // Récupération des informations du dernier article
                            const lastPost = posts[0];
                            const lastDate = lastPost.date;
                            const lastSlug = lastPost.slug;
                            const lastLink = lastPost.link;
                            const lastSource = lastPost.source_url;
                                            
                            // Assigner la valeur de lastDate à l'élément avec l'id "date" dans votre page HTML
                            const dateElement = document.getElementById('dateBioUv');
                            dateElement.textContent = lastDate;
                            const slugElement = document.getElementById('slugBioUv');
                            slugElement.textContent = lastSlug;
                            const linkElement = document.getElementById('linkBioUv');
                            linkElement.setAttribute('href', lastLink);
                            const sourceElement = document.getElementById('sourceBioUv');
                            sourceElement.setAttribute('href', lastSource);
                          })
                          .catch(error => {
                            console.error(error);
                          });
                          }