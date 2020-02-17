##########################################################
#
# Script para crear los archivos de logic_hook para un modulo 
# Script pentru a crea fișiere de Javascript modul 
#
# Se debe llamar desde la raiz del proyecto 
# Trebuie să sunați la rădăcina proiectului 
# Ej. /var/www/html/$proiectul
# Ex. /var/www/html/$proiectul
#
# Llamado "compania_mea/scripts/create_logic_hooks.sh accounts"
# Numit "compania_mea/scripts/create_logic_hooks.sh accounts"
#
##########################################################

# Captura de variable
module=$1
pwd

# Confirma creacion de archivos para el modulo
while true; do
  read -p "Desea crear los archivos para el modulo $module [si/no] ? " yn
  case $yn in
     [Ss]* ) echo 'Modulo = ' $module; break;;
     [Nn]* ) exit;;
     * ) echo "Ingrese si o no.";;
  esac
done


# Establece variables parametros
dir_mea_module=custom/modules/$module
mea_logic=custom/modules/$module/logic_hooks.php
mea_logic_module=compania_mea/logic_hooks/$module.php

# Valida si la carpeta existe
if [ ! -d "$dir_mea_module" ]; then
  # Control will enter here if $DIRECTORY doesn't exist.
  echo "Se creara el directorio '$dir_mea_module' "
  mkdir $dir_mea_module
fi


# Valida si el archivo existe
if [ ! -f "$mea_logic" ]; then
  # Copia el logic_hook
  cp compania_mea/scripts/defaults/logic_hooks.php $mea_logic
  # Reemplaza el nombre del modulo en el archivo
  perl -w -i -p -e "s/module/$module/g" $mea_logic
  echo "El archivo '$mea_logic' fue creado"
else
  echo "El archivo '$mea_logic' ya existe"
fi


# Valida si el archivo existe
if [ ! -f "$mea_logic_module" ]; then
  # Copia la funcion que utiliza el logic_hook para el modulo
  cp compania_mea/scripts/defaults/module.php $mea_logic_module
  # Reemplaza el nombre del modulo en el archivo
  perl -w -i -p -e "s/module/$module/g" $mea_logic_module
  echo "El archivo '$mea_logic_module' fue creado"
else
  echo "El archivo '$mea_logic_module' ya existe"
fi






