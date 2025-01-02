const suffixe = '- SOS Hépatites';
const tableauTitleId = {
    [`Accueil ${suffixe}`]:'titleIndex',
    [`L'association ${suffixe}`]:'titleAssociation',
    [`Modes de contamination ${suffixe}`]:'titleModesDeContamination'
}

const elt = document.getElementById(tableauTitleId[document.title]);
elt.classList.add('pageCourante');
