const title = document.title;
const suffixe = '- SOS Hépatites';
let id = '';

switch (title) {
    case `Accueil ${suffixe}`:
        id = 'titleIndex';
        break;
    case `L'association ${suffixe}`:
        id = 'titleAssociation';
        break;
    case `Modes de contamination ${suffixe}`:
        id = 'titleModesDeContamination';
        break;
}

const elt = document.getElementById(id);
elt.classList.add('pageCourante');
