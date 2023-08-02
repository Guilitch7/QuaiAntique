// Écouteur d'événement pour déclencher fetchLastInformation() dès que la page est chargée
document.addEventListener('DOMContentLoaded', function () {
  fetchTransgene();
  fetchPixium();
  fetchValneva();
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
  fetchTransgeneP();
  fetchPixiumP();
  fetchValnevaP();
  fetchAbivaxP();
  fetchNovacytP();
  fetchMedincellP();
  fetchAdvincenneP();
  fetchLumibirdP();
  fetchEquasensP();
  fetchAmoebaP();
  fetchTheraclionP();
  fetchSolutionsP();
  fetchFonciereP();
  fetchVeralliaP();
  fetchCriteoP();
  fetchWagaP();
  fetchBonduelleP();
  fetchAubay();
  fetchAubayP();
  fetchInventiva();
  fetchInventivaP();
  fetchMedesis();
  fetchMedesisP()
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

      // Affichage des informations dans la console
      console.log(`Dernière Date: ${lastDate}`);
      console.log(`Dernier Slug: ${lastSlug}`);
      console.log(`Dernier Link: ${lastLink}`);

      // Assigner la valeur de lastDate à l'élément avec l'id "date" dans votre page HTML
      const dateElement = document.getElementById('date');
      dateElement.textContent = lastDate;
      const slugElement = document.getElementById('slug');
      slugElement.textContent = lastSlug;
      const linkElement = document.getElementById('link');
      linkElement.textContent = lastLink;
      linkElement.setAttribute('href', lastLink);
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
    
          // Affichage des informations dans la console
          console.log(`Dernière Date: ${lastDate}`);
          console.log(`Dernier Slug: ${lastSlug}`);
          console.log(`Dernier Link: ${lastLink}`);
    
          // Assigner la valeur de lastDate à l'élément avec l'id "date" dans votre page HTML
          const dateElement = document.getElementById('datePix');
          dateElement.textContent = lastDate;
          const slugElement = document.getElementById('slugPix');
          slugElement.textContent = lastSlug;
          const linkElement = document.getElementById('linkPix');
          linkElement.textContent = lastLink;
          linkElement.setAttribute('href', lastLink);
        })
        .catch(error => {
          console.error(error);
        });
}

function fetchValneva() {
  fetch('https://valneva.com/wp-json/wp/v2/media')
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

      // Affichage des informations dans la console
      console.log(`Dernière Date: ${lastDate}`);
      console.log(`Dernier Slug: ${lastSlug}`);
      console.log(`Dernier Link: ${lastLink}`);

      // Assigner la valeur de lastDate à l'élément avec l'id "date" dans votre page HTML
      const dateElement = document.getElementById('dateVal');
      dateElement.textContent = lastDate;
      const slugElement = document.getElementById('slugVal');
      slugElement.textContent = lastSlug;
      const linkElement = document.getElementById('linkVal');
      linkElement.textContent = lastLink;
      linkElement.setAttribute('href', lastLink);
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

      // Affichage des informations dans la console
      console.log(`Dernière Date: ${lastDate}`);
      console.log(`Dernier Slug: ${lastSlug}`);
      console.log(`Dernier Link: ${lastLink}`);

      // Assigner la valeur de lastDate à l'élément avec l'id "date" dans votre page HTML
      const dateElement = document.getElementById('dateAbi');
      dateElement.textContent = lastDate;
      const slugElement = document.getElementById('slugAbi');
      slugElement.textContent = lastSlug;
      const linkElement = document.getElementById('linkAbi');
      linkElement.textContent = lastLink;
      linkElement.setAttribute('href', lastLink);
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

      // Affichage des informations dans la console
      console.log(`Dernière Date: ${lastDate}`);
      console.log(`Dernier Slug: ${lastSlug}`);
      console.log(`Dernier Link: ${lastLink}`);

      // Assigner la valeur de lastDate à l'élément avec l'id "date" dans votre page HTML
      const dateElement = document.getElementById('dateNov');
      dateElement.textContent = lastDate;
      const slugElement = document.getElementById('slugNov');
      slugElement.textContent = lastSlug;
      const linkElement = document.getElementById('linkNov');
      linkElement.textContent = lastLink;
      linkElement.setAttribute('href', lastLink);
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

      // Affichage des informations dans la console
      console.log(`Dernière Date: ${lastDate}`);
      console.log(`Dernier Slug: ${lastSlug}`);
      console.log(`Dernier Link: ${lastLink}`);

      // Assigner la valeur de lastDate à l'élément avec l'id "date" dans votre page HTML
      const dateElement = document.getElementById('dateMed');
      dateElement.textContent = lastDate;
      const slugElement = document.getElementById('slugMed');
      slugElement.textContent = lastSlug;
      const linkElement = document.getElementById('linkMed');
      linkElement.textContent = lastLink;
      linkElement.setAttribute('href', lastLink);
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

      // Affichage des informations dans la console
      console.log(`Dernière Date: ${lastDate}`);
      console.log(`Dernier Slug: ${lastSlug}`);
      console.log(`Dernier Link: ${lastLink}`);

      // Assigner la valeur de lastDate à l'élément avec l'id "date" dans votre page HTML
      const dateElement = document.getElementById('dateAdv');
      dateElement.textContent = lastDate;
      const slugElement = document.getElementById('slugAdv');
      slugElement.textContent = lastSlug;
      const linkElement = document.getElementById('linkAdv');
      linkElement.textContent = lastLink;
      linkElement.setAttribute('href', lastLink);
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

      // Affichage des informations dans la console
      console.log(`Dernière Date: ${lastDate}`);
      console.log(`Dernier Slug: ${lastSlug}`);
      console.log(`Dernier Link: ${lastLink}`);

      // Assigner la valeur de lastDate à l'élément avec l'id "date" dans votre page HTML
      const dateElement = document.getElementById('dateLum');
      dateElement.textContent = lastDate;
      const slugElement = document.getElementById('slugLum');
      slugElement.textContent = lastSlug;
      const linkElement = document.getElementById('linkLum');
      linkElement.textContent = lastLink;
      linkElement.setAttribute('href', lastLink);
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

      // Affichage des informations dans la console
      console.log(`Dernière Date: ${lastDate}`);
      console.log(`Dernier Slug: ${lastSlug}`);
      console.log(`Dernier Link: ${lastLink}`);

      // Assigner la valeur de lastDate à l'élément avec l'id "date" dans votre page HTML
      const dateElement = document.getElementById('dateEqu');
      dateElement.textContent = lastDate;
      const slugElement = document.getElementById('slugEqu');
      slugElement.textContent = lastSlug;
      const linkElement = document.getElementById('linkEqu');
      linkElement.textContent = lastLink;
      linkElement.setAttribute('href', lastLink);
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

      // Affichage des informations dans la console
      console.log(`Dernière Date: ${lastDate}`);
      console.log(`Dernier Slug: ${lastSlug}`);
      console.log(`Dernier Link: ${lastLink}`);

      // Assigner la valeur de lastDate à l'élément avec l'id "date" dans votre page HTML
      const dateElement = document.getElementById('dateAmo');
      dateElement.textContent = lastDate;
      const slugElement = document.getElementById('slugAmo');
      slugElement.textContent = lastSlug;
      const linkElement = document.getElementById('linkAmo');
      linkElement.textContent = lastLink;
      linkElement.setAttribute('href', lastLink);
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

      // Affichage des informations dans la console
      console.log(`Dernière Date: ${lastDate}`);
      console.log(`Dernier Slug: ${lastSlug}`);
      console.log(`Dernier Link: ${lastLink}`);

      // Assigner la valeur de lastDate à l'élément avec l'id "date" dans votre page HTML
      const dateElement = document.getElementById('dateThe');
      dateElement.textContent = lastDate;
      const slugElement = document.getElementById('slugThe');
      slugElement.textContent = lastSlug;
      const linkElement = document.getElementById('linkThe');
      linkElement.textContent = lastLink;
      linkElement.setAttribute('href', lastLink);
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

      // Affichage des informations dans la console
      console.log(`Dernière Date: ${lastDate}`);
      console.log(`Dernier Slug: ${lastSlug}`);
      console.log(`Dernier Link: ${lastLink}`);

      // Assigner la valeur de lastDate à l'élément avec l'id "date" dans votre page HTML
      const dateElement = document.getElementById('dateSol');
      dateElement.textContent = lastDate;
      const slugElement = document.getElementById('slugSol');
      slugElement.textContent = lastSlug;
      const linkElement = document.getElementById('linkSol');
      linkElement.textContent = lastLink;
      linkElement.setAttribute('href', lastLink);
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

      // Affichage des informations dans la console
      console.log(`Dernière Date: ${lastDate}`);
      console.log(`Dernier Slug: ${lastSlug}`);
      console.log(`Dernier Link: ${lastLink}`);

      // Assigner la valeur de lastDate à l'élément avec l'id "date" dans votre page HTML
      const dateElement = document.getElementById('dateFon');
      dateElement.textContent = lastDate;
      const slugElement = document.getElementById('slugFon');
      slugElement.textContent = lastSlug;
      const linkElement = document.getElementById('linkFon');
      linkElement.textContent = lastLink;
      linkElement.setAttribute('href', lastLink);
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

      // Affichage des informations dans la console
      console.log(`Dernière Date: ${lastDate}`);
      console.log(`Dernier Slug: ${lastSlug}`);
      console.log(`Dernier Link: ${lastLink}`);

      // Assigner la valeur de lastDate à l'élément avec l'id "date" dans votre page HTML
      const dateElement = document.getElementById('dateVer');
      dateElement.textContent = lastDate;
      const slugElement = document.getElementById('slugVer');
      slugElement.textContent = lastSlug;
      const linkElement = document.getElementById('linkVer');
      linkElement.textContent = lastLink;
      linkElement.setAttribute('href', lastLink);
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

      // Affichage des informations dans la console
      console.log(`Dernière Date: ${lastDate}`);
      console.log(`Dernier Slug: ${lastSlug}`);
      console.log(`Dernier Link: ${lastLink}`);

      // Assigner la valeur de lastDate à l'élément avec l'id "date" dans votre page HTML
      const dateElement = document.getElementById('dateCri');
      dateElement.textContent = lastDate;
      const slugElement = document.getElementById('slugCri');
      slugElement.textContent = lastSlug;
      const linkElement = document.getElementById('linkCri');
      linkElement.textContent = lastLink;
      linkElement.setAttribute('href', lastLink);
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

      // Affichage des informations dans la console
      console.log(`Dernière Date: ${lastDate}`);
      console.log(`Dernier Slug: ${lastSlug}`);
      console.log(`Dernier Link: ${lastLink}`);

      // Assigner la valeur de lastDate à l'élément avec l'id "date" dans votre page HTML
      const dateElement = document.getElementById('dateWag');
      dateElement.textContent = lastDate;
      const slugElement = document.getElementById('slugWag');
      slugElement.textContent = lastSlug;
      const linkElement = document.getElementById('linkWag');
      linkElement.textContent = lastLink;
      linkElement.setAttribute('href', lastLink);
    })
    .catch(error => {
      console.error(error);
    });
}

function fetchBonduelle() {
  fetch('https://www.bonduelle.com/wp-json/wp/v2/media')
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

      // Affichage des informations dans la console
      console.log(`Dernière Date: ${lastDate}`);
      console.log(`Dernier Slug: ${lastSlug}`);
      console.log(`Dernier Link: ${lastLink}`);

      // Assigner la valeur de lastDate à l'élément avec l'id "date" dans votre page HTML
      const dateElement = document.getElementById('dateBon');
      dateElement.textContent = lastDate;
      const slugElement = document.getElementById('slugBon');
      slugElement.textContent = lastSlug;
      const linkElement = document.getElementById('linkBon');
      linkElement.textContent = lastLink;
      linkElement.setAttribute('href', lastLink);
    })
    .catch(error => {
      console.error(error);
    });
}

function fetchTransgeneP() {
  fetch('https://www.transgene.fr/wp-json/wp/v2/posts')
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

      // Affichage des informations dans la console
      console.log(`Dernière Date: ${lastDate}`);
      console.log(`Dernier Slug: ${lastSlug}`);
      console.log(`Dernier Link: ${lastLink}`);

      // Assigner la valeur de lastDate à l'élément avec l'id "date" dans votre page HTML
      const dateElement = document.getElementById('dateP');
      dateElement.textContent = lastDate;
      const slugElement = document.getElementById('slugP');
      slugElement.textContent = lastSlug;
      const linkElement = document.getElementById('linkP');
      linkElement.textContent = lastLink;
      linkElement.setAttribute('href', lastLink);
    })
    .catch(error => {
      console.error(error);
    });
  }
    function fetchPixiumP() {
      fetch('https://www.pixium-vision.com/wp-json/wp/v2/posts')
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
    
          // Affichage des informations dans la console
          console.log(`Dernière Date: ${lastDate}`);
          console.log(`Dernier Slug: ${lastSlug}`);
          console.log(`Dernier Link: ${lastLink}`);
    
          // Assigner la valeur de lastDate à l'élément avec l'id "date" dans votre page HTML
          const dateElement = document.getElementById('datePixP');
          dateElement.textContent = lastDate;
          const slugElement = document.getElementById('slugPixP');
          slugElement.textContent = lastSlug;
          const linkElement = document.getElementById('linkPixP');
          linkElement.textContent = lastLink;
          linkElement.setAttribute('href', lastLink);
        })
        .catch(error => {
          console.error(error);
        });
}

function fetchValnevaP() {
  fetch('https://valneva.com/wp-json/wp/v2/posts')
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

      // Affichage des informations dans la console
      console.log(`Dernière Date: ${lastDate}`);
      console.log(`Dernier Slug: ${lastSlug}`);
      console.log(`Dernier Link: ${lastLink}`);

      // Assigner la valeur de lastDate à l'élément avec l'id "date" dans votre page HTML
      const dateElement = document.getElementById('dateValP');
      dateElement.textContent = lastDate;
      const slugElement = document.getElementById('slugValP');
      slugElement.textContent = lastSlug;
      const linkElement = document.getElementById('linkValP');
      linkElement.textContent = lastLink;
      linkElement.setAttribute('href', lastLink);
    })
    .catch(error => {
      console.error(error);
    });
}

function fetchAbivaxP() {
  fetch('https://www.abivax.com/wp-json/wp/v2/posts')
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

      // Affichage des informations dans la console
      console.log(`Dernière Date: ${lastDate}`);
      console.log(`Dernier Slug: ${lastSlug}`);
      console.log(`Dernier Link: ${lastLink}`);

      // Assigner la valeur de lastDate à l'élément avec l'id "date" dans votre page HTML
      const dateElement = document.getElementById('dateAbiP');
      dateElement.textContent = lastDate;
      const slugElement = document.getElementById('slugAbiP');
      slugElement.textContent = lastSlug;
      const linkElement = document.getElementById('linkAbiP');
      linkElement.textContent = lastLink;
      linkElement.setAttribute('href', lastLink);
    })
    .catch(error => {
      console.error(error);
    });
}

function fetchNovacytP() {
  fetch('https://novacyt.com/wp-json/wp/v2/posts')
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

      // Affichage des informations dans la console
      console.log(`Dernière Date: ${lastDate}`);
      console.log(`Dernier Slug: ${lastSlug}`);
      console.log(`Dernier Link: ${lastLink}`);

      // Assigner la valeur de lastDate à l'élément avec l'id "date" dans votre page HTML
      const dateElement = document.getElementById('dateNovP');
      dateElement.textContent = lastDate;
      const slugElement = document.getElementById('slugNovP');
      slugElement.textContent = lastSlug;
      const linkElement = document.getElementById('linkNovP');
      linkElement.textContent = lastLink;
      linkElement.setAttribute('href', lastLink);
    })
    .catch(error => {
      console.error(error);
    });
}

function fetchMedincellP() {
  fetch('https://www.medincell.com/wp-json/wp/v2/posts')
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

      // Affichage des informations dans la console
      console.log(`Dernière Date: ${lastDate}`);
      console.log(`Dernier Slug: ${lastSlug}`);
      console.log(`Dernier Link: ${lastLink}`);

      // Assigner la valeur de lastDate à l'élément avec l'id "date" dans votre page HTML
      const dateElement = document.getElementById('dateMedP');
      dateElement.textContent = lastDate;
      const slugElement = document.getElementById('slugMedP');
      slugElement.textContent = lastSlug;
      const linkElement = document.getElementById('linkMedP');
      linkElement.textContent = lastLink;
      linkElement.setAttribute('href', lastLink);
    })
    .catch(error => {
      console.error(error);
    });
}

function fetchAdvincenneP() {
  fetch('https://advicenne.com/wp-json/wp/v2/posts')
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

      // Affichage des informations dans la console
      console.log(`Dernière Date: ${lastDate}`);
      console.log(`Dernier Slug: ${lastSlug}`);
      console.log(`Dernier Link: ${lastLink}`);

      // Assigner la valeur de lastDate à l'élément avec l'id "date" dans votre page HTML
      const dateElement = document.getElementById('dateAdvP');
      dateElement.textContent = lastDate;
      const slugElement = document.getElementById('slugAdvP');
      slugElement.textContent = lastSlug;
      const linkElement = document.getElementById('linkAdvP');
      linkElement.textContent = lastLink;
      linkElement.setAttribute('href', lastLink);
    })
    .catch(error => {
      console.error(error);
    });
}

function fetchLumibirdP() {
  fetch('https://www.lumibird.com/wp-json/wp/v2/posts')
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

      // Affichage des informations dans la console
      console.log(`Dernière Date: ${lastDate}`);
      console.log(`Dernier Slug: ${lastSlug}`);
      console.log(`Dernier Link: ${lastLink}`);

      // Assigner la valeur de lastDate à l'élément avec l'id "date" dans votre page HTML
      const dateElement = document.getElementById('dateLumP');
      dateElement.textContent = lastDate;
      const slugElement = document.getElementById('slugLumP');
      slugElement.textContent = lastSlug;
      const linkElement = document.getElementById('linkLumP');
      linkElement.textContent = lastLink;
      linkElement.setAttribute('href', lastLink);
    })
    .catch(error => {
      console.error(error);
    });
}

function fetchEquasensP() {
  fetch('https://equasens.com/wp-json/wp/v2/posts')
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

      // Affichage des informations dans la console
      console.log(`Dernière Date: ${lastDate}`);
      console.log(`Dernier Slug: ${lastSlug}`);
      console.log(`Dernier Link: ${lastLink}`);

      // Assigner la valeur de lastDate à l'élément avec l'id "date" dans votre page HTML
      const dateElement = document.getElementById('dateEquP');
      dateElement.textContent = lastDate;
      const slugElement = document.getElementById('slugEquP');
      slugElement.textContent = lastSlug;
      const linkElement = document.getElementById('linkEquP');
      linkElement.textContent = lastLink;
      linkElement.setAttribute('href', lastLink);
    })
    .catch(error => {
      console.error(error);
    });
}

function fetchAmoebaP() {
  fetch('https://amoeba-nature.com/wp-json/wp/v2/posts')
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

      // Affichage des informations dans la console
      console.log(`Dernière Date: ${lastDate}`);
      console.log(`Dernier Slug: ${lastSlug}`);
      console.log(`Dernier Link: ${lastLink}`);

      // Assigner la valeur de lastDate à l'élément avec l'id "date" dans votre page HTML
      const dateElement = document.getElementById('dateAmoP');
      dateElement.textContent = lastDate;
      const slugElement = document.getElementById('slugAmoP');
      slugElement.textContent = lastSlug;
      const linkElement = document.getElementById('linkAmoP');
      linkElement.textContent = lastLink;
      linkElement.setAttribute('href', lastLink);
    })
    .catch(error => {
      console.error(error);
    });
}

function fetchTheraclionP() {
  fetch('https://theraclion.fr/wp-json/wp/v2/posts')
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

      // Affichage des informations dans la console
      console.log(`Dernière Date: ${lastDate}`);
      console.log(`Dernier Slug: ${lastSlug}`);
      console.log(`Dernier Link: ${lastLink}`);

      // Assigner la valeur de lastDate à l'élément avec l'id "date" dans votre page HTML
      const dateElement = document.getElementById('dateTheP');
      dateElement.textContent = lastDate;
      const slugElement = document.getElementById('slugTheP');
      slugElement.textContent = lastSlug;
      const linkElement = document.getElementById('linkTheP');
      linkElement.textContent = lastLink;
      linkElement.setAttribute('href', lastLink);
    })
    .catch(error => {
      console.error(error);
    });
}

function fetchSolutionsP() {
  fetch('https://www.solutions30.com/wp-json/wp/v2/posts')
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

      // Affichage des informations dans la console
      console.log(`Dernière Date: ${lastDate}`);
      console.log(`Dernier Slug: ${lastSlug}`);
      console.log(`Dernier Link: ${lastLink}`);

      // Assigner la valeur de lastDate à l'élément avec l'id "date" dans votre page HTML
      const dateElement = document.getElementById('dateSolP');
      dateElement.textContent = lastDate;
      const slugElement = document.getElementById('slugSolP');
      slugElement.textContent = lastSlug;
      const linkElement = document.getElementById('linkSolP');
      linkElement.textContent = lastLink;
      linkElement.setAttribute('href', lastLink);
    })
    .catch(error => {
      console.error(error);
    });
}

function fetchFonciereP() {
  fetch('https://fonciere-inea.com/wp-json/wp/v2/posts')
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

      // Affichage des informations dans la console
      console.log(`Dernière Date: ${lastDate}`);
      console.log(`Dernier Slug: ${lastSlug}`);
      console.log(`Dernier Link: ${lastLink}`);

      // Assigner la valeur de lastDate à l'élément avec l'id "date" dans votre page HTML
      const dateElement = document.getElementById('dateFonP');
      dateElement.textContent = lastDate;
      const slugElement = document.getElementById('slugFonP');
      slugElement.textContent = lastSlug;
      const linkElement = document.getElementById('linkFonP');
      linkElement.textContent = lastLink;
      linkElement.setAttribute('href', lastLink);
    })
    .catch(error => {
      console.error(error);
    });
}

function fetchVeralliaP() {
  fetch('https://verallia.com/wp-json/wp/v2/posts')
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

      // Affichage des informations dans la console
      console.log(`Dernière Date: ${lastDate}`);
      console.log(`Dernier Slug: ${lastSlug}`);
      console.log(`Dernier Link: ${lastLink}`);

      // Assigner la valeur de lastDate à l'élément avec l'id "date" dans votre page HTML
      const dateElement = document.getElementById('dateVerP');
      dateElement.textContent = lastDate;
      const slugElement = document.getElementById('slugVerP');
      slugElement.textContent = lastSlug;
      const linkElement = document.getElementById('linkVerP');
      linkElement.textContent = lastLink;
      linkElement.setAttribute('href', lastLink);
    })
    .catch(error => {
      console.error(error);
    });
}

function fetchCriteoP() {
  fetch('https://www.criteo.com/wp-json/wp/v2/posts')
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

      // Affichage des informations dans la console
      console.log(`Dernière Date: ${lastDate}`);
      console.log(`Dernier Slug: ${lastSlug}`);
      console.log(`Dernier Link: ${lastLink}`);

      // Assigner la valeur de lastDate à l'élément avec l'id "date" dans votre page HTML
      const dateElement = document.getElementById('dateCriP');
      dateElement.textContent = lastDate;
      const slugElement = document.getElementById('slugCriP');
      slugElement.textContent = lastSlug;
      const linkElement = document.getElementById('linkCriP');
      linkElement.textContent = lastLink;
      linkElement.setAttribute('href', lastLink);
    })
    .catch(error => {
      console.error(error);
    });
}

function fetchWagaP() {
  fetch('https://waga-energy.com/wp-json/wp/v2/posts')
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

      // Affichage des informations dans la console
      console.log(`Dernière Date: ${lastDate}`);
      console.log(`Dernier Slug: ${lastSlug}`);
      console.log(`Dernier Link: ${lastLink}`);

      // Assigner la valeur de lastDate à l'élément avec l'id "date" dans votre page HTML
      const dateElement = document.getElementById('dateWagP');
      dateElement.textContent = lastDate;
      const slugElement = document.getElementById('slugWagP');
      slugElement.textContent = lastSlug;
      const linkElement = document.getElementById('linkWagP');
      linkElement.textContent = lastLink;
      linkElement.setAttribute('href', lastLink);
    })
    .catch(error => {
      console.error(error);
    });
}

function fetchBonduelleP() {
  fetch('https://www.bonduelle.com/wp-json/wp/v2/posts')
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

      // Affichage des informations dans la console
      console.log(`Dernière Date: ${lastDate}`);
      console.log(`Dernier Slug: ${lastSlug}`);
      console.log(`Dernier Link: ${lastLink}`);

      // Assigner la valeur de lastDate à l'élément avec l'id "date" dans votre page HTML
      const dateElement = document.getElementById('dateBonP');
      dateElement.textContent = lastDate;
      const slugElement = document.getElementById('slugBonP');
      slugElement.textContent = lastSlug;
      const linkElement = document.getElementById('linkBonP');
      linkElement.textContent = lastLink;
      linkElement.setAttribute('href', lastLink);
    })
    .catch(error => {
      console.error(error);
    });
}

function fetchAubayP() {
  fetch('https://aubay.com/wp-json/wp/v2/posts')
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

      // Affichage des informations dans la console
      console.log(`Dernière Date: ${lastDate}`);
      console.log(`Dernier Slug: ${lastSlug}`);
      console.log(`Dernier Link: ${lastLink}`);

      // Assigner la valeur de lastDate à l'élément avec l'id "date" dans votre page HTML
      const dateElement = document.getElementById('dateAubP');
      dateElement.textContent = lastDate;
      const slugElement = document.getElementById('slugAubP');
      slugElement.textContent = lastSlug;
      const linkElement = document.getElementById('linkAubP');
      linkElement.textContent = lastLink;
      linkElement.setAttribute('href', lastLink);
    })
    .catch(error => {
      console.error(error);
    });
}

function fetchAubay() {
  fetch('https://aubay.com/wp-json/wp/v2/media')
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

      // Affichage des informations dans la console
      console.log(`Dernière Date: ${lastDate}`);
      console.log(`Dernier Slug: ${lastSlug}`);
      console.log(`Dernier Link: ${lastLink}`);

      // Assigner la valeur de lastDate à l'élément avec l'id "date" dans votre page HTML
      const dateElement = document.getElementById('dateAub');
      dateElement.textContent = lastDate;
      const slugElement = document.getElementById('slugAub');
      slugElement.textContent = lastSlug;
      const linkElement = document.getElementById('linkAub');
      linkElement.textContent = lastLink;
      linkElement.setAttribute('href', lastLink);
    })
    .catch(error => {
      console.error(error);
    });
}

function fetchInventiva() {
  fetch('https://inventivapharma.com/wp-json/wp/v2/posts')
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

      // Affichage des informations dans la console
      console.log(`Dernière Date: ${lastDate}`);
      console.log(`Dernier Slug: ${lastSlug}`);
      console.log(`Dernier Link: ${lastLink}`);

      // Assigner la valeur de lastDate à l'élément avec l'id "date" dans votre page HTML
      const dateElement = document.getElementById('dateInvP');
      dateElement.textContent = lastDate;
      const slugElement = document.getElementById('slugInvP');
      slugElement.textContent = lastSlug;
      const linkElement = document.getElementById('linkInvP');
      linkElement.textContent = lastLink;
      linkElement.setAttribute('href', lastLink);
    })
    .catch(error => {
      console.error(error);
    });
}

function fetchInventivaP() {
  fetch('https://inventivapharma.com/wp-json/wp/v2/media')
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

      // Affichage des informations dans la console
      console.log(`Dernière Date: ${lastDate}`);
      console.log(`Dernier Slug: ${lastSlug}`);
      console.log(`Dernier Link: ${lastLink}`);

      // Assigner la valeur de lastDate à l'élément avec l'id "date" dans votre page HTML
      const dateElement = document.getElementById('dateInv');
      dateElement.textContent = lastDate;
      const slugElement = document.getElementById('slugInv');
      slugElement.textContent = lastSlug;
      const linkElement = document.getElementById('linkInv');
      linkElement.textContent = lastLink;
      linkElement.setAttribute('href', lastLink);
    })
    .catch(error => {
      console.error(error);
    });
}

function fetchMedesisP() {
  fetch('https://medesispharma.com/wp-json/wp/v2/posts')
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

      // Affichage des informations dans la console
      console.log(`Dernière Date: ${lastDate}`);
      console.log(`Dernier Slug: ${lastSlug}`);
      console.log(`Dernier Link: ${lastLink}`);

      // Assigner la valeur de lastDate à l'élément avec l'id "date" dans votre page HTML
      const dateElement = document.getElementById('dateMedP');
      dateElement.textContent = lastDate;
      const slugElement = document.getElementById('slugMedP');
      slugElement.textContent = lastSlug;
      const linkElement = document.getElementById('linkMedP');
      linkElement.textContent = lastLink;
      linkElement.setAttribute('href', lastLink);
    })
    .catch(error => {
      console.error(error);
    });
}

function fetchMedesis() {
  fetch('https://www.medesispharma.com/wp-json/wp/v2/media')
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

      // Affichage des informations dans la console
      console.log(`Dernière Date: ${lastDate}`);
      console.log(`Dernier Slug: ${lastSlug}`);
      console.log(`Dernier Link: ${lastLink}`);

      // Assigner la valeur de lastDate à l'élément avec l'id "date" dans votre page HTML
      const dateElement = document.getElementById('dateMed');
      dateElement.textContent = lastDate;
      const slugElement = document.getElementById('slugMed');
      slugElement.textContent = lastSlug;
      const linkElement = document.getElementById('linkMed');
      linkElement.textContent = lastLink;
      linkElement.setAttribute('href', lastLink);
    })
    .catch(error => {
      console.error(error);
    });
}