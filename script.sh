#ls /var/www/html
#rm *.m4a	#supprimer le precedent fichier audio .m4a

#chercher parametre pour modifier le nom du fichier en sortie
youtube-dl -f 140 $1	#telecharger l'audio en format aac .m4a 140kbps dans le repertoire courant

#chercher parametre pour overwrite en cas de doublon
mv *.m4a bidule.m4a		#renommer le fichier *.m4a le plus recent
