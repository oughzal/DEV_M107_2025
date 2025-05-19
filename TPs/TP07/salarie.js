class Salarie {
    nom;
    prenom;
    salaire;
    static tauxCS = 0;
    constructor(nom, prenom, salaire) {
        this.nom = nom;
        this.prenom = prenom;
        this.salaire = salaire;
    }

    // Méthode pour afficher les informations du salarié
    afficher() {
        console.log(`Nom: ${this.nom}, Prénom: ${this.prenom}, Salaire: ${this.salaire}, Taux CS: ${Salarie.tauxCS}`);
    }
}

Salarie = function(nom, prenom, salaire) {
    this.nom = "";
    this.prenom = "";
    this.salaire = 0;
    this.tauxCS = 0;

    this.afficher = function() {
        console.log(`Nom: ${this.nom}, Prénom: ${this.prenom}, Salaire: ${this.salaire}, Taux CS: ${this.tauxCS}`);
    }
}