#!/bin/bash
if  [ "$1" = "" ]
then
   echo "un identifiant d'adherent est demande"
    exit
fi
ident=$1
echo "IDENT=$ident"
for file in `ls -rt *.log.* *.log`
do
awk -F\; -v ident=`echo ${ident}` '($2==ident) {print $0;}' $file
done
