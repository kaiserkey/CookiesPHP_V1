<?

if(isset($_GET['idioma'])){
    setcookie('idioma', $_GET['idioma'], time()+60*60*24*30);
    if($_GET['idioma']=='es'){
        header('Location: spanish.php');
    }
    if($_GET['idioma']=='en'){
        header('Location: english.php');
    }
}

?>