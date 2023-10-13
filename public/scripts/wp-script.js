// Écouteur d'événement pour déclencher fetchLastInformation() dès que la page est chargée
document.addEventListener('DOMContentLoaded', function () {
    fetchInformation('https://www.transgene.fr/wp-json/wp/v2/media', 'date', 'slug', 'link', 'source');
    fetchInformation('https://www.pixium-vision.com/wp-json/wp/v2/media', 'datePix', 'slugPix', 'linkPix', 'sourcePix');
    fetchInformation('https://www.abivax.com/wp-json/wp/v2/media', 'dateAbi', 'slugAbi', 'linkAbi', 'sourceAbi');
    fetchInformation('https://novacyt.com/wp-json/wp/v2/media', 'dateNov', 'slugNov', 'linkNov', 'sourceNov');
    fetchInformation('https://www.medincell.com/wp-json/wp/v2/media', 'dateMed', 'slugMed', 'linkMed', 'sourceMed');
    fetchInformation('https://advicenne.com/wp-json/wp/v2/media', 'dateAdv', 'slugAdv', 'linkAdv', 'sourceAdv');
    fetchInformation('https://www.lumibird.com/wp-json/wp/v2/media', 'dateLum', 'slugLum', 'linkLum', 'sourceLum');
    fetchInformation('https://equasens.com/wp-json/wp/v2/media', 'dateEqu', 'slugEqu', 'linkEqu', 'sourceEqu');
    fetchInformation('https://amoeba-nature.com/wp-json/wp/v2/media', 'dateAmo', 'slugAmo', 'linkAmo', 'sourceAmo');
    fetchInformation('https://www.theraclion.fr/wp-json/wp/v2/media', 'dateThe', 'slugThe', 'linkThe', 'sourceThe');
    fetchInformation('https://www.solutions30.com/wp-json/wp/v2/media', 'dateSol', 'slugSol', 'linkSol', 'sourceSol');
    fetchInformation('https://fonciere-inea.com/wp-json/wp/v2/media', 'dateFon', 'slugFon', 'linkFon', 'sourceFon');
    fetchInformation('https://www.verallia.com/wp-json/wp/v2/media', 'dateVer', 'slugVer', 'linkVer', 'sourceVer');
    fetchInformation('https://www.criteo.com/wp-json/wp/v2/media', 'dateCri', 'slugCri', 'linkCri', 'sourceCri');
    fetchInformation('https://waga-energy.com/wp-json/wp/v2/media', 'dateWag', 'slugWag', 'linkWag', 'sourceWag');
    fetchInformation('https://www.bonduelle.com/fr/wp-json/wp/v2/media', 'dateBon', 'slugBon', 'linkBon', 'sourceBon');
    fetchInformation('https://www.hunyvers.com/wp-json/wp/v2/media', 'dateHun', 'slugHun', 'linkHun', 'sourceHun');
    fetchInformation('https://www.valneva.com/wp-json/wp/v2/media', 'dateVal', 'slugVal', 'linkVal', 'sourceVal');
    fetchInformation('https://www.carbios.com/wp-json/wp/v2/media', 'dateCar', 'slugCar', 'linkCar', 'sourceCar');
    fetchInformation('https://www.eramet.com/wp-json/wp/v2/media', 'dateEra', 'slugEra', 'linkEra', 'sourceEra');
    fetchInformation('https://www.dekuple.com/wp-json/wp/v2/media', 'dateDek', 'slugDek', 'linkDek', 'sourceDek');
    fetchInformation('https://www.spineguard.com/wp-json/wp/v2/media', 'dateSpin', 'slugSpin', 'linkSpin', 'sourceSpin');
    fetchInformation('https://www.nicox.com/wp-json/wp/v2/media', 'dateNic', 'slugNic', 'linkNic', 'sourceNic');
    fetchInformation('https://enogia.com/wp-json/wp/v2/media', 'dateEno', 'slugEno', 'linkEno', 'sourceEno');
    fetchInformation('https://afyren.com/wp-json/wp/v2/media', 'dateAfy', 'slugAfy', 'linkAfy', 'sourceAfy');
    fetchInformation('https://www.dolfines.com/wp-json/wp/v2/media', 'dateDol', 'slugDol', 'linkDol', 'sourceDol');
    fetchInformation('https://www.ecoslops.com/wp-json/wp/v2/media', 'dateEco', 'slugEco', 'linkEco', 'sourceEco');
    fetchInformation('https://www.adocia.com/wp-json/wp/v2/media', 'dateAdo', 'slugAdo', 'linkAdo', 'sourceAdo');
    fetchInformation('https://akwel-automotive.com/wp-json/wp/v2/media', 'dateAkw', 'slugAkw', 'linkAkw', 'sourceAkw');
    fetchInformation('https://www.klarsen.com/wp-json/wp/v2/media', 'dateKla', 'slugKla', 'linkKla', 'sourceKla');
    fetchInformation('https://www.ose-immuno.com/wp-json/wp/v2/media', 'dateOse', 'slugOse', 'linkOse', 'sourceOse');
    fetchInformation('https://www.sidetrade.fr/wp-json/wp/v2/media', 'dateSid', 'slugSid', 'linkSid', 'sourceSid');
    fetchInformation('https://www.ciments-hoffmann.fr/wp-json/wp/v2/media', 'dateCim', 'slugCim', 'linkCim', 'sourceCim');
    fetchInformation('https://www.visiativ.com/wp-json/wp/v2/media', 'dateVis', 'slugVis', 'linkVis', 'sourceVis');
    fetchInformation('https://www.bio-uv.com/wp-json/wp/v2/media', 'dateBioUv', 'slugBioUv', 'linkBioUv', 'sourceBioUv');
    fetchInformation('https://www.ab-science.com/wp-json/wp/v2/media', 'dateAbs', 'slugAbs', 'linkAbs', 'sourceAbs');
    fetchInformation('https://www.acteos.fr/wp-json/wp/v2/media', 'dateAct', 'slugAct', 'linkAct', 'sourceAct');
    fetchInformation('https://www.adux.com/wp-json/wp/v2/media', 'dateAdu', 'slugAdu', 'linkAdu', 'sourceAdu');
    fetchInformation('https://www.argan.fr/wp-json/wp/v2/media', 'dateArg', 'slugArg', 'linkArg', 'sourceArg');
  });
  
  function fetchInformation(url, dateId, slugId, linkId, sourceId) {
    fetch(url)
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
        let date = new Date();
        let dayDate = Date.parse(date);
  
        // Assigner les valeurs aux éléments HTML correspondants
        const dateElement = document.getElementById(dateId);
        dateElement.textContent = lastDate;
        const slugElement = document.getElementById(slugId);
        slugElement.textContent = lastSlug;
        const linkElement = document.getElementById(linkId);
        linkElement.setAttribute('href', lastLink);
        postDate = Date.parse(lastDate);
        console.log(dayDate);
        console.log(postDate);
        if(postDate > (dayDate - 72000))
            {
                dateElement.classList.add('text-danger fw-bold');
            }
        const sourceElement = document.getElementById(sourceId);
        sourceElement.setAttribute('href', lastSource);
      })
      .catch(error => {
        console.error(error);
      });
  }
  document.getElementById('loader').classList.add("hide-loader");
  