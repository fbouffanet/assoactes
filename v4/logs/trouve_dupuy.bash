#!/bin/bash
for file in `ls -rt *.log.* *.log`
do
awk -F\; '($2=="dupuy") {print $0;}' $file
done
