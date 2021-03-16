select 
/*p.idf_acte,
p.idf,*/
cast(substring(a.commentaires,INSTR(a.commentaires,"N° de page:")+12,3) as INT) as Page,
substring(a.commentaires,INSTR(a.commentaires,"Quartier:")+9,10) as Quartier,
substring(a.commentaires,INSTR(a.commentaires,"Nom de la Rue:")+14,10) as Rue,
cast(substring(a.commentaires,INSTR(a.commentaires,"N° maison:")+10,3)as INT) as Maison,
cast(substring(a.commentaires,INSTR(a.commentaires,"N° ménage:")+10,3)as INT) as Ménage,

p.patronyme as Nom,
ifnull(prenom.libelle,'') as Prénom,
ifnull(p.age,'') as Age,
right(p.date_naissance,4) as Année°,
c.nom as Lieu°,
/*d.profession as Profession,*/ 
ifnull(p.commentaires,'') as Observation,
a.url as Lien,
a.details_supplementaires
from 
personne p 
left join prenom on (p.idf_prenom=prenom.idf) 
join commune_personne c on (p.idf_origine =c.idf)
join profession d on (p.idf_profession =d.idf)
join acte a on (p.idf_acte=a.idf)
where a.idf_commune=$pi_idf_commune_acte and a.idf_source=1 and a.idf_type_acte=147 order by Page ASC, Maison ASC, Ménage ASC


select 
p.idf_acte,
p.idf,
p.idf_type_presence,
p.sexe, 
p.patronyme,
ifnull(prenom.libelle,''),
p.idf_origine,
p.date_naissance,
p.age,
p.idf_profession, 
p.commentaires,
a.details_supplementaires,
p.idf_pere,
p.idf_mere,
p.est_decede 
from 
personne p 
left join prenom on (p.idf_prenom=prenom.idf) 
join acte a on (p.idf_acte=a.idf)
where a.idf_commune=208 and a.idf_source=1 and a.idf_type_acte=147 order by p.idf_acte,p.idf





