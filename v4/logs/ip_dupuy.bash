#!/bin/bash
for file in `ls *.log.* *.log`
do
awk -F\; '($2=="dupuy") {print $3;}' $file
done
