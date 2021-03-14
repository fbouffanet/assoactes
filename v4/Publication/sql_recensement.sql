select 
p.idf_acte,
p.idf,
p.sexe, 
p.patronyme,
Prenom as ifnull(prenom.libelle,''),
p.idf_origine,
Lieu_origine as ifnull(c.nom,''),
date_naissance as ifnull(p.date_naissance,''),
age as ifnull(p.age,''),
profession as ifnull(d.profession,''), 
p.commentaires,
a.commentaires,
CHAR_LENGTH(a.commentaires),
a.url,
a.details_supplementaires
from 
personne p 
left join prenom on (p.idf_prenom=prenom.idf) 
join commune_personne c on (p.idf_origine =c.idf)
join profession d on (p.idf_profession =d.idf)
join acte a on (p.idf_acte=a.idf)
where a.idf_commune=208 and a.idf_source=1 and a.idf_type_acte=147 order by a.details_supplementaires



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
a.commentaires,
p.idf_pere,
p.idf_mere,
p.est_decede 
from 
personne p 
left join prenom on (p.idf_prenom=prenom.idf) 
join acte a on (p.idf_acte=a.idf)
where a.idf_commune=208 and a.idf_source=1 and a.idf_type_acte=147 order by p.idf_acte,p.idf





