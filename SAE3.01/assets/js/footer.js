const footer = document.querySelector('footer')

const divFooter = document.createElement('div')
divFooter.className = 'footer'

const numeroVertImg = document.createElement('img')
numeroVertImg.id = 'numeroVert'
numeroVertImg.src = 'assets/img/numero-vert-sos-hepatites.png'
numeroVertImg.alt = 'N° vert SOS Hépatites : 0800 004 372'
divFooter.appendChild(numeroVertImg)

const divLiensUtiles = document.createElement('div')
divLiensUtiles.className = 'liensUtiles'

const divReseaux = document.createElement('div')
divReseaux.className = 'reseauxSociaux'

const titreLiensUtiles = document.createElement('b')
titreLiensUtiles.textContent = 'Liens utiles'
divLiensUtiles.appendChild(titreLiensUtiles)

const titreReseaux = document.createElement('b')
titreReseaux.textContent = 'Réseaux sociaux'
divReseaux.appendChild(titreReseaux)

const listeLiensUtiles = document.createElement('ul')
const liensUtiles = [
    { url: 'https://soshepatites.org/contactez-nous/', texte: 'Nous contacter' },
    { url: 'sabonner-aux-newsletters.html', texte: "S'abonner aux newsletters" },
    { url: 'https://soshepatites.org/rubrique/actualites/', texte: 'Nos actualités' },
    { url: 'https://soshepatites.org/plateforme/', texte: 'Plateforme Hépatante' },
    { url: 'https://soshepatites.org/sos-hepatites-pres-de-chez-vous/', texte: 'SOS Hépatites près de chez vous' },
    { url: 'https://soshepatites.org/mentions-legales/', texte: 'Informations légales' }
]

const listeReseaux = document.createElement('ul')
const liensReseaux = [
    { url: 'https://twitter.com/sos_hepatites?lang=fr', id: 'X' },
    { url: 'https://fr-fr.facebook.com/SOS.hepatites.Federation/', id: 'Facebook' },
    { url: 'https://www.youtube.com/user/soshepatitesfd', id: 'YouTube' },
    { url: 'https://www.linkedin.com/company/soshepatites/?originalSubdomain=fr', id: 'LinkedIn' },
    { url: 'https://www.instagram.com/soshepatites/?hl=fr', id: 'Instagram' }
]

liensUtiles.forEach(lien => {
    const li = document.createElement('li')
    const a = document.createElement('a')
    a.href = lien.url
    a.textContent = lien.texte
    li.appendChild(a)
    listeLiensUtiles.appendChild(li)
})

liensReseaux.forEach(lien => {
    const li = document.createElement('li')
    const a = document.createElement('a')
    a.href = lien.href
    a.id = lien.id
    li.appendChild(a)
    listeReseaux.appendChild(li)
})

divLiensUtiles.appendChild(listeLiensUtiles)
divFooter.appendChild(divLiensUtiles)
divReseaux.appendChild(listeReseaux)
divFooter.appendChild(divReseaux)

const logoNB = document.createElement('img')
logoNB.id = 'logoNB'
logoNB.src = 'assets/img/logo-federation-sos-hepatites-blanc.png'
logoNB.alt = 'Logo SOS Hépatites en noir et blanc'
divFooter.appendChild(logoNB)

footer.appendChild(divFooter)
