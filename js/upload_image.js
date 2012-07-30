/**
     * upload_image()
     *
     * Sube una imagen al servidor  al directorio especificado teniendo el Atributo 'Name' del campo archivo.
     *
     * @param string $destination_dir Directorio de destino dónde queremos dejar el archivo
     * @param string $name_media_field Atributo 'Name' del campo archivo
     * @return boolean
     */
    function upload_image($destination_dir,$name_media_field){
        $tmp_name = $_FILES[$name_media_field]['tmp_name'];
        //si hemos enviado un directorio que existe realmente y hemos subido el archivo    
        if ( is_dir($destination_dir) &amp;&amp; is_uploaded_file($tmp_name))
        {
            $img_file  = $_FILES[$name_media_field]['name'] ;
            $img_type  = $_FILES[$name_media_field]['type'];
            echo 1;
            //¿es una imágen realmente?           
            if (((strpos($img_type, "gif") || strpos($img_type, "jpeg") || strpos($img_type,"jpg")) || strpos($img_type,"png") )){
                //¿Tenemos permisos para subir la imágen?
                echo 2;
                if(move_uploaded_file($tmp_name, $destination_dir.'/'.$img_file)){
                    return true;
                }
            }
        }
        //si llegamos hasta aquí es que algo ha fallado
        return false;
    }//end function