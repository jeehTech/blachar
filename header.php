<?php include "./portal/plugins/db.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <!-- Start SEO PHP Config -->
    <?php //for titles, description, image etc 
    if(!isset($_GET['bil'])){
        $about_page="Home";
        $description="Limited Company established to develop and offer creative and innovative Media works, Information & Commications Technology (ICT) & Trading services";
        $image="bil.png";
        $url="https://blachar.co.tz";
    }elseif(isset($_GET['bil']) && $_GET['bil']=='about'){
        $about_page="About Us";
        $description="Limited Company established to develop and offer creative and innovative Media works, Information & Commications Technology (ICT) & Trading services";
        $image="bil.png";
        $url="https://blachar.co.tz/?bil=about";
    }elseif(isset($_GET['bil']) && $_GET['bil']=='contact'){
        $about_page="Contact Us";
        $description="Limited Company established to develop and offer creative and innovative Media works, Information & Commications Technology (ICT) & Trading services";
        $image="bil.png";
        $url="https://blachar.co.tz/?bil=contact";
    }elseif(isset($_GET['bil']) && $_GET['bil']=='projects'){
        $about_page="Projects";
        $description="Limited Company established to develop and offer creative and innovative Media works, Information & Commications Technology (ICT) & Trading services";
        $image="bil.png";
        $url="https://blachar.co.tz/?bil=projects";
    }else{
        $about_page="Welcome Blachar";
        $description="Limited Company established to develop and offer creative and innovative Media works, Information & Commications Technology (ICT) & Trading services";
        $image="bil.png";
        $url="https://blachar.co.tz/?bil=projects";   
    }
    
    ?>
    <!-- End SEO PHP Config  -->
    <title>Blachar Investments | <?php echo $about_page ?></title>
    <meta property="og:title" content="<?php //echo $title?>" />
    <meta property="og:description" content="Download Full Movie via Swahili Epic" />
    <meta property="og:url" content="https://swahiliepic.co.tz/films/media/?media_key=<?php //echo base64_encode($id)?>&title=<?php //echo strtolower($_GET['title']); ?>" />
    <meta property="og:image" content="https://swahiliepic.co.tz/assets/img/covers_share/<?php //echo $cover_share?>"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">


    <!-- Favicon -->
    <link href="./assets/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="icon" href="./assets/img/bil.png" type="image/x-icon" />
    
    <!-- Libraries Stylesheet -->
    <link href="./assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="./assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="./assets/css/style.css" rel="stylesheet">
</head>