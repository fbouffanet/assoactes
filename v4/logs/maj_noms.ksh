#!/bin/bash
for fich in `ls *.log` 
do
rac=`echo $fich | cut -d\. -f1`
suff=`echo $fich | cut -d\. -f2`
nom="$rac.$suff.log"
echo $fich $nom
if [ ! -e $nom ]
then
mv $fich $nom
fi
done
