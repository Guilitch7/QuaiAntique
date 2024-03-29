// Écouteur d'événement pour déclencher fetchLastInformation() dès que la page est chargée
document.addEventListener('DOMContentLoaded', function () {
    fetchInformation('https://www.transgene.fr/wp-json/wp/v2/media', 'date', 'slug', 'link', 'source');
    fetchInformation('https://www.pixium-vision.com/wp-json/wp/v2/media', 'datePix', 'slugPix', 'linkPix', 'sourcePix');
    fetchInformation('https://novacyt.com/wp-json/wp/v2/media', 'dateNov', 'slugNov', 'linkNov', 'sourceNov');
    fetchInformation('https://www.medincell.com/wp-json/wp/v2/media', 'dateMed', 'slugMed', 'linkMed', 'sourceMed');
    fetchInformation('https://advicenne.com/wp-json/wp/v2/media', 'dateAdv', 'slugAdv', 'linkAdv', 'sourceAdv');
    fetchInformation('https://www.lumibird.com/wp-json/wp/v2/media', 'dateLum', 'slugLum', 'linkLum', 'sourceLum');
    fetchInformation('https://equasens.com/wp-json/wp/v2/media', 'dateEqu', 'slugEqu', 'linkEqu', 'sourceEqu');
    fetchInformation('https://amoeba-nature.com/wp-json/wp/v2/media', 'dateAmo', 'slugAmo', 'linkAmo', 'sourceAmo');
    fetchInformation('https://www.theraclion.fr/wp-json/wp/v2/media', 'dateThe', 'slugThe', 'linkThe', 'sourceThe');
    fetchInformation('https://www.solutions30.com/wp-json/wp/v2/media', 'dateSol', 'slugSol', 'linkSol', 'sourceSol');
    fetchInformation('https://fonciere-inea.com/wp-json/wp/v2/media', 'dateFon', 'slugFon', 'linkFon', 'sourceFon');
    fetchInformation('https://www.criteo.com/wp-json/wp/v2/media', 'dateCri', 'slugCri', 'linkCri', 'sourceCri');
    fetchInformation('https://waga-energy.com/wp-json/wp/v2/media', 'dateWag', 'slugWag', 'linkWag', 'sourceWag');
    fetchInformation('https://www.bonduelle.com/fr/wp-json/wp/v2/media', 'dateBon', 'slugBon', 'linkBon', 'sourceBon');
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
    fetchInformation('https://akwel-automotive.com/wp-json/wp/v2/media', 'dateAkw', 'slugAkw', 'linkAkw', 'sourceAkw');
    fetchInformation('https://www.klarsen.com/wp-json/wp/v2/media', 'dateKla', 'slugKla', 'linkKla', 'sourceKla');
    fetchInformation('https://www.sidetrade.fr/wp-json/wp/v2/media', 'dateSid', 'slugSid', 'linkSid', 'sourceSid');
    fetchInformation('https://www.ciments-hoffmann.fr/wp-json/wp/v2/media', 'dateCim', 'slugCim', 'linkCim', 'sourceCim');
    fetchInformation('https://www.bio-uv.com/wp-json/wp/v2/media', 'dateBioUv', 'slugBioUv', 'linkBioUv', 'sourceBioUv');
    fetchInformation('https://www.ab-science.com/wp-json/wp/v2/media', 'dateAbs', 'slugAbs', 'linkAbs', 'sourceAbs');
    fetchInformation('https://www.acteos.fr/wp-json/wp/v2/media', 'dateAct', 'slugAct', 'linkAct', 'sourceAct');
    fetchInformation('https://www.adux.com/wp-json/wp/v2/media', 'dateAdu', 'slugAdu', 'linkAdu', 'sourceAdu');
    fetchInformation('https://www.argan.fr/wp-json/wp/v2/media', 'dateArg', 'slugArg', 'linkArg', 'sourceArg');
    fetchInformation('https://cafom.com/wp-json/wp/v2/media', 'dateCaf', 'slugCaf', 'linkCaf', 'sourceCaf');
    fetchInformation('https://www.chargeurs.com/wp-json/wp/v2/media', 'dateCha', 'slugCha', 'linkCha', 'sourceCha');
    fetchInformation('https://www.covivio.eu/fr/wp-json/wp/v2/media', 'dateCov', 'slugCov', 'linkCov', 'sourceCov');
    fetchInformation('https://www.francaisedelenergie.fr/wp-json/wp/v2/media', 'dateFra', 'slugFra', 'linkFra', 'sourceFra');
    fetchInformation('https://www.genomicvision.com/wp-json/wp/v2/media', 'dateGen', 'slugGen', 'linkGen', 'sourceGen');
    fetchInformation('https://www.manitou-group.com/wp-json/wp/v2/media', 'dateMan', 'slugMan', 'linkMan', 'sourceMan');
    fetchInformation('https://www.metabolic-explorer.com/wp-json/wp/v2/media', 'dateMet', 'slugMet', 'linkMet', 'sourceMet');
    fetchInformation('https://www.atari-investisseurs.fr/wp-json/wp/v2/media', 'dateAta', 'slugAta', 'linkAta', 'sourceAta');
    fetchInformation('https://www.dbv-technologies.com/wp-json/wp/v2/media', 'dateDbv', 'slugDbv', 'linkDbv', 'sourceDbv');
    fetchInformation('https://www.dms.com/wp-json/wp/v2/media', 'dateDms', 'slugDms', 'linkDms', 'sourceDms');
    fetchInformation('https://erytech.com/wp-json/wp/v2/media', 'dateEry', 'slugEry', 'linkEry', 'sourceEry');
    fetchInformation('https://www.groupe-gorge.com/wp-json/wp/v2/media', 'dateGor', 'slugGor', 'linkGor', 'sourceGor');
    fetchInformation('https://groupe-plastivaloire.com/wp-json/wp/v2/media', 'datePla', 'slugPla', 'linkPla', 'sourcePla');
    fetchInformation('https://www.plasticomnium.com/wp-json/wp/v2/media', 'datePlas', 'slugPlas', 'linkPlas', 'sourcePlas');
    fetchInformation('https://www.remy-cointreau.com/wp-json/wp/v2/media', 'dateRem', 'slugRem', 'linkRem', 'sourceRem');
    fetchInformation('https://www.robertet.com/wp-json/wp/v2/media', 'dateRob', 'slugRob', 'linkRob', 'sourceRob');
    fetchInformation('https://www.valneva.com/wp-json/wp/v2/media', 'dateVal', 'slugVal', 'linkVal', 'sourceVal');
    fetchInformation('https://www.graines-voltz.com/wp-json/wp/v2/media', 'dateVol', 'slugVol', 'linkVol', 'sourceVol');
    fetchInformation('https://www.fnacdarty.com/wp-json/wp/v2/media', 'dateFna', 'slugFna', 'linkFna', 'sourceFna');
    fetchInformation('https://www.akka-technologies.com/wp-json/wp/v2/media', 'dateAkk', 'slugAkk', 'linkAkk', 'sourceAkk');
    fetchInformation('https://www.bassac.fr/wp-json/wp/v2/media', 'dateBass', 'slugBass', 'linkBass', 'sourceBass');
    fetchInformation('https://communication.ca-norddefrance.fr/wp-json/wp/v2/media', 'dateCa', 'slugCa', 'linkCa', 'sourceCa');
    fetchInformation('https://oeneo.com/wp-json/wp/v2/media', 'dateOen', 'slugOen', 'linkOen', 'sourceOen');
    fetchInformation('https://www.patrimoine-commerce.com/wp-json/wp/v2/media', 'datePat', 'slugPat', 'linkPat', 'sourcePat');
    fetchInformation('https://www.selectirente.com/wp-json/wp/v2/media', 'dateSel', 'slugSel', 'linkSel', 'sourceSel');
    fetchInformation('https://vitura.fr/wp-json/wp/v2/media', 'dateVit', 'slugVit', 'linkVit', 'sourceVit');
    fetchInformation('https://www.augros.fr/wp-json/wp/v2/media', 'dateAug', 'slugAug', 'linkAug', 'sourceAug');
    fetchInformation('https://www.ciboxcorp.com/wp-json/wp/v2/media', 'dateCib', 'slugCib', 'linkCib', 'sourceCib');
    fetchInformation('https://www.courtois-sa.com/wp-json/wp/v2/media', 'dateCou', 'slugCou', 'linkCou', 'sourceCou');
    fetchInformation('https://www.epc-groupe.com/wp-json/wp/v2/media', 'dateEpc', 'slugEpc', 'linkEpc', 'sourceEpc');
    fetchInformation('https://www.fsdv.fr/wp-json/wp/v2/media', 'dateFsd', 'slugFsd', 'linkFsd', 'sourceFsd');
    fetchInformation('https://www.fauvet-girel.fr/wp-json/wp/v2/media', 'dateFau', 'slugFau', 'linkFau', 'sourceFau');
    fetchInformation('https://www.intexa.fr/wp-json/wp/v2/media', 'dateInt', 'slugInt', 'linkInt', 'sourceInt');
    fetchInformation('https://compagnielebon.fr/wp-json/wp/v2/media', 'dateCom', 'slugCom', 'linkCom', 'sourceCom');
    fetchInformation('https://www.micropole.com/wp-json/wp/v2/media', 'dateMic', 'slugMic', 'linkMic', 'sourceMic');
    fetchInformation('https://www.paref.com/wp-json/wp/v2/media', 'datePar', 'slugPar', 'linkPar', 'sourcePar');
    fetchInformation('https://www.preciamolen.com/wp-json/wp/v2/media', 'datePre', 'slugPre', 'linkPre', 'sourcePre');
    fetchInformation('https://recylex.eu/wp-json/wp/v2/media', 'dateRec', 'slugRec', 'linkRec', 'sourceRec');
    fetchInformation('https://www.soditech.com/wp-json/wp/v2/media', 'dateSod', 'slugSod', 'linkSod', 'sourceSod');
    fetchInformation('https://www.bouygues.com/wp-json/wp/v2/media', 'dateBou', 'slugBou', 'linkBou', 'sourceBou');
    fetchInformation('https://valeriotx.com/wp-json/wp/v2/media', 'dateVale', 'slugVale', 'linkVale', 'sourceVale');
    fetchInformation('https://corporate.coheris.com/wp-json/wp/v2/media', 'dateCor', 'slugCor', 'linkCor', 'sourceCor');
    fetchInformation('https://www.baikowski.com/wp-json/wp/v2/media', 'dateBai', 'slugBai', 'linkBai', 'sourceBai');
    fetchInformation('https://www.celyad.com/wp-json/wp/v2/media', 'dateCel', 'slugCel', 'linkCel', 'sourceCel');
    fetchInformation('https://www.affluentmedical.com/wp-json/wp/v2/media', 'dateAff', 'slugAff', 'linkAff', 'sourceAff');
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
        // Filtrer les données pour ne conserver que les "source_url" avec une extension .pdf
        const pdfSources = posts.filter(post => {
          return post.source_url.toLowerCase().endsWith('.pdf');
        });
  
        // Tri des articles par date dans l'ordre décroissant
        pdfSources.sort((a, b) => new Date(b.date) - new Date(a.date));
  
        if (pdfSources.length > 0) {
          // Récupération des informations du dernier "source_url" avec une extension .pdf
          const lastSource = pdfSources[0];
          const lastDate = lastSource.date;
          const lastSlug = lastSource.slug;
          const lastLink = lastSource.link;
          const lastSourceUrl = lastSource.source_url;
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
          if (postDate > (dayDate - 40400000)) {
            dateElement.classList.add("text-danger");
            dateElement.classList.add("fw-bold");
          }
          const sourceElement = document.getElementById(sourceId);
          sourceElement.setAttribute('href', lastSourceUrl);
        } else {
          // Gérer le cas où il n'y a pas de "source_url" avec l'extension .pdf
          console.error('Aucun source_url avec une extension .pdf trouvé.');
        }
      })
      .catch(error => {
        console.error(error);
      });
  }
  
  
  document.getElementById('loader').classList.add("hide-loader");
  