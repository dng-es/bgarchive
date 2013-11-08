<?php
function createBg($fileName,$bg_red = 0,$bg_green = 0,$bg_blue = 0,$bg_width = 140,$bg_height = 140,$bg_opacity = 1){ 
    //generar el fondo, aplicar propiedades y guardar el archivo
    $backgroundName = time().'background.png';
    $im = imagecreatetruecolor ( $bg_width, $bg_height );
    $bg = imagecolorallocate ( $im, $bg_red, $bg_green, $bg_blue );
    imagefill ( $im, 0, 0, $bg );
    imagepng($im, PATH_PATTERNS_TEMP.$backgroundName);
    $img_dest = imagecreatefrompng(PATH_PATTERNS_TEMP.$backgroundName);

    //generar el patron, aplicar propiedades y guardar el archivo
    $patternName = time().'pattern.png';
    $img_pattern = new Imagick(PATH_PATTERNS.$fileName);
    //$img_pattern->setCompressionQuality(100); 
    $img_pattern->setImageFormat("png");
    $img_pattern->setImageOpacity($bg_opacity);
    $img_pattern->writeImage(PATH_PATTERNS_TEMP.$patternName);

    //Esta imagen es el patron que se pondra.
    $img_pattern_final = imagecreatefrompng(PATH_PATTERNS_TEMP.$patternName);
    $width_pattern = imagesx($img_pattern_final);
    $height_pattern = imagesy($img_pattern_final);

    //Sobre pongo el patron a la imagen de fondo.
    imagecopyresized($img_dest,$img_pattern_final,0,0,0,0,$width_pattern,$height_pattern,$width_pattern,$height_pattern);

    //Envio la cabecera para mostrar la imagen.
    header("Content-type: image/png");

    // Muestro la imagen.
    imagepng($img_dest);

    // Destruyo las imagenes.
    //imagedestroy($img_dest);
    //imagedestroy($img_pattern_final); 
}

function mm_type($filename) {
    $mime_types = array(
        // images
        'png' => 'image/png',
        'jpe' => 'image/jpeg',
        'jpeg' => 'image/jpeg',
        'jpg' => 'image/jpeg',
        'gif' => 'image/gif',
    );

    $ext = strtolower(array_pop(explode('.',$filename)));
    if (array_key_exists($ext, $mime_types)) {
        return $mime_types[$ext];
    }
    elseif (function_exists('finfo_open')) {
        $finfo = finfo_open(FILEINFO_MIME);
        $mimetype = finfo_file($finfo, $filename);
        finfo_close($finfo);
        return $mimetype;
    }
    else {
        return 'application/octet-stream';
    }
}
?>