
function Adresse(num,rue,ville,codePost){
	this.num=num;
	this.rue=rue;
	this.ville=ville;
	this.codePost=codePost;
}


function Utilisateur(Ncin,nom,prenom,num,rue,ville,codePost,tel,role){
	this.Ncin=Ncin;
	this.nom=nom;
	this.prenom=prenom;
	this.adresse=new Adresse(num,rue,ville,codePost);
	this.tel=tel;
	this.role=role;
}


//begin declaration
function Declaration(id,date,heure,num,rue,ville,codePost,etat,dateModif){
	this.identifiant=id;
	this.date=new Date();
	this.heure=heure;
	this.lieu=new Adresse(num,rue,ville,codePost);
	this.etat=etat;
	this.dateModif=dateModif;
}

Declaration.prototype.getEtat=function(){
	return this.etat;
}
Declaration.prototype.setEtat=function(etat){
	this.etat=etat;
}

//end Declaration

function Vehicule(couleur,marque,descriptions){
	this.couleur=couleur;
	this.marque=marque;
	this.descriptions=descriptions;
}

function MotorVehicule(matricule,couleur,marque,descriptions){
	this.matricule=matricule;
	this.prototype=new Vehicule(couleur,marque,descriptions);

}

function bicycle(Nserie,couleur,marque,descriptions){
	this.Nserie=Nserie;
	this.prototype=new Vehicule(couleur,marque,descriptions);
}

function RQV(jour){
	this.jour=jour;

}




$(document).ready(function(){
 $("#submit").click(function(){
 	$("#droite").load("file/file.txt",function(json){

 	});
 	
 })

 
$('form').submit(function() {
  var myForm=$(this).serializeArray();
  return false;
});

});






















