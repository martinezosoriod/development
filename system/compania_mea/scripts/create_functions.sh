##############################################################
#
# Script para crear los archivos de Javascript para un modulo
# Script pentru a crea fișiere de Javascript modul 
#
# Se debe llamar desde la raiz del proyecto
# Trebuie să sunați la rădăcina proiectului 
#
# Ej. /var/www/html/$proiectul
# Ex. /var/www/html/$proiectul
#
# Numit "compania_mea/scripts/create_functions.sh accounts"
# Llamado "compania_mea/scripts/create_functions.sh accounts"
#
#############################################################

# Captura de variable
# Capturați variabila
module=$1
pwd

# Confirma creación de archivos para el módulo
# Confirmă crearea de fișiere pentru modulul
while true; do
  read -p "Desea crear los archivos para el modulo $module [si/no] ? " yn
  case $yn in
     [Ss]* ) echo 'Modulo = ' $module; break;;
     [Nn]* ) exit;;
     * ) echo "Ingrese si o no.";;
  esac
done


# Establecer variables parámetros
# Seta parametrii variabile
dir_mea_module=custom/modules/$module
mea_functions=custom/modules/$module/funtions.js


# Validar si la carpeta existe
# Validează dacă există folderul
if [ ! -d "$dir_mea_module" ]; then
  # Control will enter here if $DIRECTORY doesn't exist.
  echo "Se creara el directorio '$dir_mea_module' "
  mkdir $dir_mea_module
fi


# Validar si el archivo existe
# Validează dacă fișierul există
if [ ! -f "$mea_functions" ]; then
  # Copia el javascript
  # Copiați javascript
  cp compania_mea/scripts/defaults/functions.js $mea_functions
  # Reemplaza el nombre del módulo en el archivo
  # Înlocuiți numele modulului în dosarul
  perl -w -i -p -e "s/module/$module/g" $mea_functions
  echo "El archivo '$mea_functions' fue creado"
else
  echo "El archivo '$mea_functions' ya existe"
fi







