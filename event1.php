<?php
if (isset($_POST['lanjut'])) {
    header("Location: order.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="..\css\jquery.nice-number.css ">
    <title>Tickyt - Event Detail</title>

        <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/tyt2.png">
    <!-- Author Meta -->
    <meta name="author" content="CodePixar">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->


    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!--CSS-->
    <link rel="stylesheet" href="https://artatix.co.id/css/linearicons.css">
    <link rel="stylesheet" href="https://artatix.co.id/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://artatix.co.id/css/nice-select.css">
    <link rel="stylesheet" href="https://artatix.co.id/css/ion.rangeSlider.css">
    <link rel="stylesheet" href="https://artatix.co.id/css/ion.rangeSlider.skinFlat.css">
    <link rel="stylesheet" href="https://artatix.co.id/css/bootstrap.css">
    <link rel="stylesheet" href="https://artatix.co.id/css/owl.carousel.css">
    <link rel="stylesheet" href="https://artatix.co.id/css/main.css">

    <link rel="stylesheet" href="https://artatix.co.id/css/bootstrap.css">
    <link rel="stylesheet" href="https://artatix.co.id/css/animate.css">
    <!-- <link rel="stylesheet" href="https://artatix.co.id/css/magnific-popup.css"> -->
    <!-- <link rel="stylesheet" href="https://artatix.co.id/css/animsition.min.css"> -->
    <link rel="stylesheet" href="https://artatix.co.id/css/ionicons.min.css">
    <link rel="stylesheet" href="https://artatix.co.id/css/linearicons.css">
    <link rel="stylesheet" href="https://artatix.co.id/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://artatix.co.id/css/nice-select.css">
    <link rel="stylesheet" href="https://artatix.co.id/css/ion.rangeSlider.css">
    <link rel="stylesheet" href="https://artatix.co.id/css/ion.rangeSlider.skinFlat.css">
    

    <link rel="stylesheet" href="https://artatix.co.id/css/main.css">
    <!-- <link href="https://artatix.co.id//css/style.css" rel="stylesheet" type="text/css" media="all"> -->

    <link rel="stylesheet" href="https://artatix.co.id/plugin/owlcarousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://artatix.co.id/plugin/owlcarousel/dist/assets/owl.theme.default.min.css">

    <!-- Animate CSS -->
    
    <!-- Owl Carousel -->
    
    
    <!-- Magnific Popup -->
    
    <!-- Full Page Animation -->
    
    <!-- Ionic Icons -->
    
    <!-- Main Style css -->

    <style>
        body {
            background-color: #FAFAFA;
            font-family: "Poppins", sans-serif;
        }

        .detail-event {
            background-color: #fff;
            border-radius: 24px;
            padding: 12px;
            min-height: 416px;
            box-shadow: 0px 16px 24px -8px rgba(176,176,176,0.2);
-webkit-box-shadow: 0px 16px 24px -8px rgba(176,176,176,0.2);
-moz-box-shadow: 0px 16px 24px -8px rgba(176,176,176,0.2);
        }

        h3 {
            font-weight: 500;
            margin: 0;
        }

        .event-banner {
            padding: 12px;
        }

        .event-banner img {
            position: ;
            border-radius: 12px 12px 12px 12px;
            width: 100%;
            /* height: 300px; */
        }

        .category {
            padding: 4px 12px;
        }

        .category .musik {
            background-color: #FFF0CC;
            font-size: 12px;
            font-weight: 500;
            padding: 6px 12px;
            color: #1f1f95;
            border-radius: 8px;
        }

        .category .seminar {
            background-color: #E1FAFF;
            font-size: 12px;
            font-weight: 500;
            padding: 6px 12px;
            color: #1f1f95;
            border-radius: 8px;
        }

        .category .olahraga {
            background-color: #E6FAF1;
            font-size: 12px;
            font-weight: 500;
            padding: 6px 12px;
            color: #1f1f95;
            border-radius: 8px;
        }

        .category .pameran {
            background-color: #EFECF2;
            font-size: 12px;
            font-weight: 500;
            padding: 6px 12px;
            color: #1f1f95;
            border-radius: 8px;
        }

        .event-name {
            padding: 12px 12px;
        }

        .card-info {
            display: flex;
            flex-direction: column;
            padding: 12px;
            background-color: #fff;
            border-radius: 24px;
            height: 100%;
            justify-content: space-between;
            box-shadow: 0px 16px 24px -8px rgba(176,176,176,0.2);
-webkit-box-shadow: 0px 16px 24px -8px rgba(176,176,176,0.2);
-moz-box-shadow: 0px 16px 24px -8px rgba(176,176,176,0.2);
        }

        .creator {
            display: flex;
            flex-direction: row;
            align-items: center;
        }

        .creator-img {
            padding: 12px;
        }

        .creator-img img {
            color: #b0b0b0;
            width: 48px;
            height: 48px;
            border-radius: 50px;
        }

        .creator-name {
            display: flex;
            flex-direction: column;
            padding: 12px;
        }

        label {
            font-size: 13px;
            font-weight: 500;
            color: #b0b0b0;
            margin-bottom: 0px;
        }

        span {
            font-size: 15px;
            font-weight: 600;
            color: #181818;
            padding: 2px 0;
        }

        .calendar {
            display: flex;
            flex-direction: row;
            padding: 12px;
        }

        .calendar-icon {
            display: flex;
            background-color: #f5f5f5;
            border-radius: 8px;
            width:  28px;
            height: 28px;
            text-align: center;
            justify-content: center;
        }

        .calendar-icon img {
            width: 20px;
        }

        .calendar-text {
            display: flex;
            flex-direction: column;
            padding: 0 12px;
        }

        .time {
            display: flex;
            flex-direction: row;
            padding: 12px;
        }

        .time-icon {
            display: flex;
            background-color: #f5f5f5;
            border-radius: 8px;
            width:  28px;
            height: 28px;
            text-align: center;
            justify-content: center;
        }

        .time-icon img {
            width: 20px;
        }

        .time-text {
            display: flex;
            flex-direction: column;
            padding: 0 12px;
        }

        .location {
            display: flex;
            flex-direction: row;
            padding: 12px;
        }

        .location-icon {
            display: flex;
            background-color: #f5f5f5;
            border-radius: 8px;
            min-width:  28px;
            height: 28px;
            text-align: center;
            justify-content: center;
        }

        .location-icon img {
            width: 20px;
        }

        .location-text {
            display: flex;
            flex-direction: column;
            padding: 0 12px;
        }

        .link-location {
            text-decoration: none;
            color: #1f1f95;
            text-align: center;
            font-size: 15px;
            font-weight: 600;
            cursor: pointer;
        }

        .beli-tiket {
            /* margin-top: 180px; */
            align-content: flex-end;
            padding: 12px 12px;
        }

        .btn-beli {
            border: 0;
            background-color: #1f1f95;
            padding: 12px 12px;
            color: #fff;
            font-size: 14px;
            font-weight: 500;
            width: 100%;
            border-radius: 8px;
        }

        .description {
            background-color: #fff;
            border-radius: 24px;
            padding: 12px;
            height: auto;
            box-shadow: 0px 16px 24px -8px rgba(176,176,176,0.2);
-webkit-box-shadow: 0px 16px 24px -8px rgba(176,176,176,0.2);
-moz-box-shadow: 0px 16px 24px -8px rgba(176,176,176,0.2);
        }

        .desc-tab {
            padding: 12px;
        }

        .nav-pills .nav-link {
            border-radius: 8px;
            font-size: 14px;
            font-weight: 500;
            color: #b0b0b0;
        }

        .nav-pills .nav-link.active, .nav-pills .show>.nav-link {
            background-color: #1f1f95;
        }

        .venue-layout {
            display: flex;
            flex-direction: column;
            padding: 12px;
            background-color: #fff;
            border-radius: 24px;
            height: auto;
            position: -webkit-sticky;
            position: sticky;
            top: 20px;
            box-shadow: 0px 16px 24px -8px rgba(176,176,176,0.2);
-webkit-box-shadow: 0px 16px 24px -8px rgba(176,176,176,0.2);
-moz-box-shadow: 0px 16px 24px -8px rgba(176,176,176,0.2);
        }

        .preview-link {
            padding: 12px 0 0 0;
        }

        .preview-link a{
            text-decoration: none;
            color: #1f1f95;
            text-align: center;
            font-size: 15px;
            font-weight: 500;
            cursor: pointer;
        }

        .venue-label {
            padding: 12px;
            text-align: center;
        }

        .venue-img {
            padding: 12px;
            text-align: center;
        }

        .venue-img img{
            border-radius: 12px;
            width: 100%;
        }

        .popup-image {
            position: fixed;
            top: 0; left: 0;
            background: rgba(0,0,0,.9);
            height: 100%;
            width: 100%;
            z-index: 100; 
            display: none;
        }

        .popup-image span {
            position: absolute;
            top: 0; right: 10px;
            font-size: 50px;
            color: #fff;
            cursor: pointer;
            z-index: 100;
        }

        .popup-image img {
            position: absolute;
            top: 50%; left: 50%;
            transform: translate(-50%, -50%);
            width: 750px;
            object-fit: cover;
        }

        .description-label {
            padding: 16px 0;
        }

        .description-text {
            font-size: 13px;
            font-weight: 400;
            color: #7e7e7e;
            line-height: 24px;
            padding-bottom: 12px;
        }

        .tnc-label {
            padding: 16px 0;
        }

        .tnc-text {
            font-size: 13px;
            font-weight: 400;
            color: #7e7e7e;
            line-height: 24px;
        }

        .card-tiket {
            padding: 24px;
            margin: 20px 0;
            border-radius: 14px;
            box-shadow: 0px 16px 24px -8px rgba(176,176,176,0.2);
-webkit-box-shadow: 0px 16px 24px -8px rgba(176,176,176,0.2);
-moz-box-shadow: 0px 16px 24px -8px rgba(176,176,176,0.2);
        }

        .ticket-info {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
        }

        .ticket-name {
            font-size: 13px;
        }

        .ticket-status{
            text-align: right;
        }

        .onsale {
            background-color: #E1EBFB;
            color: #0066FF;
            font-weight: 400;
            font-size: 13px;
            padding: 6px 10px;
            border-radius: 8px;
        }

        .not-started {
            background-color: #FFF0CC;
            color: #FFB200;
            font-weight: 400;
            font-size: 13px;
            padding: 6px 10px;
            border-radius: 8px;
        }

        .sold-out {
            background-color: #FAE7E7;
            color: #FA3E3E;
            font-weight: 400;
            font-size: 13px;
            padding: 6px 10px;
            border-radius: 8px;
        }

        .ticket-order {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: left;
        }

        .ticket-price {
            display: flex;
            flex-direction: column;
        }

        .ticket-price span {
            color: #F26419;
        }

        .btn-buy {
            border: none;
            border-radius: 8px;
            background-color: #1f1f95;
            color: #fff;
            padding: 8px 24px;
            font-size: 13px;
            font-weight: 400;
        }

        .qty {
            display: none;
            text-align: right;
        }

        .qty input {
            width: 40px;
            border-radius: 8px;
            font-size: 14px;
            margin: 0 8px;
            padding: 6px;
            border: none;
            outline: none;
        }

        .qty button {
            background-color: #fafafa;
            border: none;
            outline: none;
            border-radius: 8px;
            color: #1f1f95;
            padding: 5px 12px;
            font-weight: 500;
        }

        .btn-order {
            margin-top: 16px;
        }

        .btn-order a {
            text-decoration: none;
            color: #1f1f95;
            padding: 8px 24px;
            font-size: 13px;
            font-weight: 400;
            cursor: pointer;
        }

        .btn-order button {
            border: none;
            outline: none;
            background-color: #1f1f95;
            padding: 8px 24px;
            font-size: 13px;
            font-weight: 400;
            color: #fff;
        }

        .qty button:hover {
            background-color: #1f1f95;
            color: #fff;
        }

        button:hover {
            background-color: #191977; 
        }

        .link-location:hover {
            color: #191977; 
        }

        .btn-order button:hover {
            background-color: #191977; 
        }

        @media (max-width: 768px){
            h3 {
                font-size: 18px;
                font-weight: 600;
            }

            .detail-event {
                padding: 0;
                min-height: 100px;
                height: auto;
                margin-bottom: 20px;
                border-radius: 18px;
            }

            .event-name {
                padding: 12px 12px 24px 12px;
            }

            .event-banner {
                padding: 0 0 12px 0;
            }

            .event-banner img {
                border-radius: 18px 18px 0 0;
            }

            .card-info {
                padding: 0;
                height: auto;
                border-radius: 18px;
            }

            .creator {
                align-items: center;
            }

            .description {
                padding: 0;
                margin-bottom: 20px;
                border-radius: 18px;
            }

            span {
                font-size: 14px;
            }

            .venue-layout {
                padding: 0px;
                margin-bottom: 100px;
                border-radius: 18px;
            }

            .beli-tiket {
                position: fixed;
                bottom: 0vh; left: 0;
                background-color: #fff;
                width: 100%;
                padding: 18px;
                z-index: 10;
                box-shadow: 0px -8px 24px -8px rgba(176,176,176,0.2);
                -webkit-box-shadow: 0px -8px 24px -8px rgba(176,176,176,0.2);
                -moz-box-shadow: 0px -8px 24px -8px rgba(176,176,176,0.2);
            }

            .btn-beli {
                font-size: 14px;
            }

            .venue-img img {
                border-radius: 18px;
            }

            .popup-image img {
                width: 95%;
            }
        }

        @media (max-width: 991px) and (min-width: 769px){
            #card-info {
                margin-top: 24px;
            }

            .detail-event {
                min-height: 100px;
                height: auto;
            }
        }
    </style>

<script async="" src="https://www.googletagmanager.com/gtag/js?id=G-MPWXGDPRG4"></script><script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-MPWXGDPRG4');
</script>
<style>
.swal2-popup.swal2-toast{box-sizing:border-box;
grid-column:1/4 !important;
grid-row:1/4 !important;
grid-template-columns:
min-content auto min-content;
padding:1em;
overflow-y:hidden;
background:#fff;
box-shadow:0 0 1px rgba(0,0,0,.075),
0 1px 2px rgba(0,0,0,.075),
1px 2px 4px rgba(0,0,0,.075),
1px 3px 8px rgba(0,0,0,.075),
2px 4px 16px rgba(0,0,0,.075);
pointer-events:all}
.swal2-popup.swal2-toast>*{grid-column:2}
.swal2-popup.swal2-toast 
.swal2-title{margin:.5em 1em;padding:0;font-size:1em;text-align:initial}
.swal2-popup.swal2-toast .swal2-loading{justify-content:center}
.swal2-popup.swal2-toast .swal2-input{height:2em;margin:.5em;font-size:1em}
.swal2-popup.swal2-toast .swal2-validation-message{font-size:1em}
.swal2-popup.swal2-toast .swal2-footer{margin:.5em 0 0;padding:.5em 0 0;font-size:.8em}
.swal2-popup.swal2-toast .swal2-close{grid-column:3/3;grid-row:1/99;align-self:center;width:.8em;height:.8em;margin:0;font-size:2em}
.swal2-popup.swal2-toast .swal2-html-container{margin:.5em 1em;padding:0;overflow:initial;
font-size:1em;text-align:initial}
.swal2-popup.swal2-toast .swal2-html-container:empty{padding:0}
.swal2-popup.swal2-toast .swal2-loader{grid-column:1;grid-row:1/99;align-self:center;width:2em;height:2em;margin:.25em}
.swal2-popup.swal2-toast .swal2-icon{grid-column:1;grid-row:1/99;align-self:center;width:2em;min-width:2em;height:2em;margin:0 .5em 0 0}
.swal2-popup.swal2-toast .swal2-icon .swal2-icon-content{display:flex;align-items:center;font-size:1.8em;font-weight:bold}
.swal2-popup.swal2-toast .swal2-icon.swal2-success .swal2-success-ring{width:2em;height:2em}
.swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line]{top:.875em;width:1.375em}

.swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=left]{left:.3125em}


.swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=right]{right:.3125em}
.swal2-popup.swal2-toast .swal2-actions{justify-content:flex-start;height:auto;margin:0;margin-top:.5em;padding:0 .5em}
.swal2-popup.swal2-toast .swal2-styled{margin:.25em .5em;padding:.4em .6em;font-size:1em}
.swal2-popup.swal2-toast .swal2-success{border-color:#a5dc86}.swal2-popup.swal2-toast 
.swal2-success [class^=swal2-success-circular-line]{position:absolute;width:1.6em;height:3em;transform:rotate(45deg);border-radius:50%}
.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line][class$=left]{top:-0.8em;left:-0.5em;transform:rotate(-45deg);
transform-origin:2em 2em;border-radius:4em 0 0 4em}.swal2-popup.swal2-toast 
.swal2-success [class^=swal2-success-circular-line][class$=right]{top:-0.25em;left:.9375em;
transform-origin:0 1.5em;border-radius:0 4em 4em 0}.swal2-popup.swal2-toast 
.swal2-success .swal2-success-ring{width:2em;height:2em}.swal2-popup.swal2-toast 
.swal2-success .swal2-success-fix{top:0;left:.4375em;width:.4375em;height:2.6875em}
.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line]{height:.3125em}
.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line][class$=tip]{top:1.125em;left:.1875em;width:.75em}
.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line][class$=long]{top:.9375em;right:.1875em;width:1.375em}
.swal2-popup.swal2-toast .swal2-success.swal2-icon-show .swal2-success-line-tip{animation:swal2-toast-animate-success-line-tip .75s}
.swal2-popup.swal2-toast .swal2-success.swal2-icon-show .swal2-success-line-long{animation:swal2-toast-animate-success-line-long .75s}
.swal2-popup.swal2-toast.swal2-show{animation:swal2-toast-show .5s}
.swal2-popup.swal2-toast.swal2-hide{animation:swal2-toast-hide .1s forwards}
div:where(.swal2-container){display:grid;position:fixed;z-index:1060;
inset:0;box-sizing:border-box;grid-template-areas:"top-start     top            top-end" "center-start  center         center-end" "bottom-start  bottom-center  bottom-end";
grid-template-rows:minmax(min-content, auto) minmax(min-content, auto) minmax(min-content, auto);
height:100%;padding:.625em;overflow-x:hidden;transition:background-color .1s;
-webkit-overflow-scrolling:touch}div:where(.swal2-container)
.swal2-backdrop-show,div:where(.swal2-container).swal2-noanimation{background:rgba(0,0,0,.4)}div:where(.swal2-container)
.swal2-backdrop-hide{background:rgba(0,0,0,0) !important}div:where(.swal2-container).swal2-top-start,div:where(.swal2-container)
.swal2-center-start,div:where(.swal2-container).swal2-bottom-start{grid-template-columns:minmax(0, 1fr) auto auto}div:where(.swal2-container)
.swal2-top,div:where(.swal2-container).swal2-center,div:where(.swal2-container)
.swal2-bottom{grid-template-columns:auto minmax(0, 1fr) auto}div:where(.swal2-container)
.swal2-top-end,div:where(.swal2-container).swal2-center-end,div:where(.swal2-container)
.swal2-bottom-end{grid-template-columns:auto auto minmax(0, 1fr)}div:where(.swal2-container).swal2-top-start>.swal2-popup{align-self:start}div:where(.swal2-container).swal2-top>.swal2-popup{grid-column:2;align-self:start;justify-self:center}div:where(.swal2-container).swal2-top-end>.swal2-popup,div:where(.swal2-container).swal2-top-right>.swal2-popup{grid-column:3;align-self:start;justify-self:end}div:where(.swal2-container).swal2-center-start>.swal2-popup,div:where(.swal2-container).swal2-center-left>.swal2-popup{grid-row:2;align-self:center}div:where(.swal2-container).swal2-center>.swal2-popup{grid-column:2;grid-row:2;align-self:center;justify-self:center}div:where(.swal2-container).swal2-center-end>.swal2-popup,div:where(.swal2-container).swal2-center-right>.swal2-popup{grid-column:3;grid-row:2;align-self:center;justify-self:end}div:where(.swal2-container).swal2-bottom-start>.swal2-popup,div:where(.swal2-container).swal2-bottom-left>.swal2-popup{grid-column:1;grid-row:3;align-self:end}div:where(.swal2-container).swal2-bottom>.swal2-popup{grid-column:2;grid-row:3;justify-self:center;align-self:end}div:where(.swal2-container).swal2-bottom-end>.swal2-popup,div:where(.swal2-container).swal2-bottom-right>.swal2-popup{grid-column:3;grid-row:3;align-self:end;justify-self:end}div:where(.swal2-container).swal2-grow-row>.swal2-popup,div:where(.swal2-container).swal2-grow-fullscreen>.swal2-popup{grid-column:1/4;width:100%}div:where(.swal2-container).swal2-grow-column>.swal2-popup,div:where(.swal2-container).swal2-grow-fullscreen>.swal2-popup{grid-row:1/4;align-self:stretch}div:where(.swal2-container).swal2-no-transition{transition:none !important}div:where(.swal2-container) div:where(.swal2-popup){display:none;position:relative;box-sizing:border-box;grid-template-columns:minmax(0, 100%);width:32em;max-width:100%;padding:0 0 1.25em;border:none;border-radius:5px;background:#fff;color:#545454;font-family:inherit;font-size:1rem}div:where(.swal2-container) div:where(.swal2-popup):focus{outline:none}div:where(.swal2-container) div:where(.swal2-popup).swal2-loading{overflow-y:hidden}div:where(.swal2-container) h2:where(.swal2-title){position:relative;max-width:100%;margin:0;padding:.8em 1em 0;color:inherit;font-size:1.875em;font-weight:600;text-align:center;text-transform:none;word-wrap:break-word}div:where(.swal2-container) div:where(.swal2-actions){display:flex;z-index:1;box-sizing:border-box;flex-wrap:wrap;align-items:center;justify-content:center;width:auto;margin:1.25em auto 0;padding:0}div:where(.swal2-container) div:where(.swal2-actions):not(.swal2-loading) .swal2-styled[disabled]{opacity:.4}div:where(.swal2-container) div:where(.swal2-actions):not(.swal2-loading) .swal2-styled:hover{background-image:linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1))}div:where(.swal2-container) div:where(.swal2-actions):not(.swal2-loading) .swal2-styled:active{background-image:linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2))}div:where(.swal2-container) div:where(.swal2-loader){display:none;align-items:center;justify-content:center;width:2.2em;height:2.2em;margin:0 1.875em;animation:swal2-rotate-loading 1.5s linear 0s infinite normal;border-width:.25em;border-style:solid;border-radius:100%;border-color:#2778c4 rgba(0,0,0,0) #2778c4 rgba(0,0,0,0)}div:where(.swal2-container) button:where(.swal2-styled){margin:.3125em;padding:.625em 1.1em;transition:box-shadow .1s;box-shadow:0 0 0 3px rgba(0,0,0,0);font-weight:500}div:where(.swal2-container) button:where(.swal2-styled):not([disabled]){cursor:pointer}div:where(.swal2-container) button:where(.swal2-styled).swal2-confirm{border:0;border-radius:.25em;background:initial;background-color:#7066e0;color:#fff;font-size:1em}div:where(.swal2-container) button:where(.swal2-styled).swal2-confirm:focus{box-shadow:0 0 0 3px rgba(112,102,224,.5)}div:where(.swal2-container) button:where(.swal2-styled).swal2-deny{border:0;border-radius:.25em;background:initial;background-color:#dc3741;color:#fff;font-size:1em}div:where(.swal2-container) button:where(.swal2-styled).swal2-deny:focus{box-shadow:0 0 0 3px rgba(220,55,65,.5)}div:where(.swal2-container) button:where(.swal2-styled).swal2-cancel{border:0;border-radius:.25em;background:initial;background-color:#6e7881;color:#fff;font-size:1em}div:where(.swal2-container) button:where(.swal2-styled).swal2-cancel:focus{box-shadow:0 0 0 3px rgba(110,120,129,.5)}div:where(.swal2-container) button:where(.swal2-styled).swal2-default-outline:focus{box-shadow:0 0 0 3px rgba(100,150,200,.5)}div:where(.swal2-container) button:where(.swal2-styled):focus{outline:none}div:where(.swal2-container) button:where(.swal2-styled)::-moz-focus-inner{border:0}div:where(.swal2-container) div:where(.swal2-footer){justify-content:center;margin:1em 0 0;padding:1em 1em 0;border-top:1px solid #eee;color:inherit;font-size:1em}div:where(.swal2-container) .swal2-timer-progress-bar-container{position:absolute;right:0;bottom:0;left:0;grid-column:auto !important;overflow:hidden;border-bottom-right-radius:5px;border-bottom-left-radius:5px}div:where(.swal2-container) div:where(.swal2-timer-progress-bar){width:100%;height:.25em;background:rgba(0,0,0,.2)}div:where(.swal2-container) img:where(.swal2-image){max-width:100%;margin:2em auto 1em}div:where(.swal2-container) button:where(.swal2-close){z-index:2;align-items:center;justify-content:center;width:1.2em;height:1.2em;margin-top:0;margin-right:0;margin-bottom:-1.2em;padding:0;overflow:hidden;transition:color .1s,box-shadow .1s;border:none;border-radius:5px;background:rgba(0,0,0,0);color:#ccc;font-family:monospace;font-size:2.5em;cursor:pointer;justify-self:end}div:where(.swal2-container) button:where(.swal2-close):hover{transform:none;background:rgba(0,0,0,0);color:#f27474}div:where(.swal2-container) button:where(.swal2-close):focus{outline:none;box-shadow:inset 0 0 0 3px rgba(100,150,200,.5)}div:where(.swal2-container) button:where(.swal2-close)::-moz-focus-inner{border:0}div:where(.swal2-container) .swal2-html-container{z-index:1;justify-content:center;margin:1em 1.6em .3em;padding:0;overflow:auto;color:inherit;font-size:1.125em;font-weight:normal;line-height:normal;text-align:center;word-wrap:break-word;word-break:break-word}div:where(.swal2-container) input:where(.swal2-input),div:where(.swal2-container) input:where(.swal2-file),div:where(.swal2-container) textarea:where(.swal2-textarea),div:where(.swal2-container) select:where(.swal2-select),div:where(.swal2-container) div:where(.swal2-radio),div:where(.swal2-container) label:where(.swal2-checkbox){margin:1em 2em 3px}div:where(.swal2-container) input:where(.swal2-input),div:where(.swal2-container) input:where(.swal2-file),div:where(.swal2-container) textarea:where(.swal2-textarea){box-sizing:border-box;width:auto;transition:border-color .1s,box-shadow .1s;border:1px solid #d9d9d9;border-radius:.1875em;background:rgba(0,0,0,0);box-shadow:inset 0 1px 1px rgba(0,0,0,.06),0 0 0 3px rgba(0,0,0,0);color:inherit;font-size:1.125em}div:where(.swal2-container) input:where(.swal2-input).swal2-inputerror,div:where(.swal2-container) input:where(.swal2-file).swal2-inputerror,div:where(.swal2-container) textarea:where(.swal2-textarea).swal2-inputerror{border-color:#f27474 !important;box-shadow:0 0 2px #f27474 !important}div:where(.swal2-container) input:where(.swal2-input):focus,div:where(.swal2-container) input:where(.swal2-file):focus,div:where(.swal2-container) textarea:where(.swal2-textarea):focus{border:1px solid #b4dbed;outline:none;box-shadow:inset 0 1px 1px rgba(0,0,0,.06),0 0 0 3px rgba(100,150,200,.5)}div:where(.swal2-container) input:where(.swal2-input)::placeholder,div:where(.swal2-container) input:where(.swal2-file)::placeholder,div:where(.swal2-container) textarea:where(.swal2-textarea)::placeholder{color:#ccc}div:where(.swal2-container) .swal2-range{margin:1em 2em 3px;background:#fff}div:where(.swal2-container) .swal2-range input{width:80%}div:where(.swal2-container) .swal2-range output{width:20%;color:inherit;font-weight:600;text-align:center}div:where(.swal2-container) .swal2-range input,div:where(.swal2-container) .swal2-range output{height:2.625em;padding:0;font-size:1.125em;line-height:2.625em}div:where(.swal2-container) .swal2-input{height:2.625em;padding:0 .75em}div:where(.swal2-container) .swal2-file{width:75%;margin-right:auto;margin-left:auto;background:rgba(0,0,0,0);font-size:1.125em}div:where(.swal2-container) .swal2-textarea{height:6.75em;padding:.75em}div:where(.swal2-container) .swal2-select{min-width:50%;max-width:100%;padding:.375em .625em;background:rgba(0,0,0,0);color:inherit;font-size:1.125em}div:where(.swal2-container) .swal2-radio,div:where(.swal2-container) .swal2-checkbox{align-items:center;justify-content:center;background:#fff;color:inherit}div:where(.swal2-container) .swal2-radio label,div:where(.swal2-container) .swal2-checkbox label{margin:0 .6em;font-size:1.125em}div:where(.swal2-container) .swal2-radio input,div:where(.swal2-container) .swal2-checkbox input{flex-shrink:0;margin:0 .4em}div:where(.swal2-container) label:where(.swal2-input-label){display:flex;justify-content:center;margin:1em auto 0}div:where(.swal2-container) div:where(.swal2-validation-message){align-items:center;justify-content:center;margin:1em 0 0;padding:.625em;overflow:hidden;background:#f0f0f0;color:#666;font-size:1em;font-weight:300}div:where(.swal2-container) div:where(.swal2-validation-message)::before{content:"!";display:inline-block;width:1.5em;min-width:1.5em;height:1.5em;margin:0 .625em;border-radius:50%;background-color:#f27474;color:#fff;font-weight:600;line-height:1.5em;text-align:center}div:where(.swal2-container) div:where(.swal2-icon){position:relative;box-sizing:content-box;justify-content:center;width:5em;height:5em;margin:2.5em auto .6em;border:0.25em solid rgba(0,0,0,0);border-radius:50%;border-color:#000;font-family:inherit;line-height:5em;cursor:default;user-select:none}div:where(.swal2-container) div:where(.swal2-icon) .swal2-icon-content{display:flex;align-items:center;font-size:3.75em}div:where(.swal2-container) div:where(.swal2-icon).swal2-error{border-color:#f27474;color:#f27474}div:where(.swal2-container) div:where(.swal2-icon).swal2-error .swal2-x-mark{position:relative;flex-grow:1}div:where(.swal2-container) div:where(.swal2-icon).swal2-error [class^=swal2-x-mark-line]{display:block;position:absolute;top:2.3125em;width:2.9375em;height:.3125em;border-radius:.125em;background-color:#f27474}div:where(.swal2-container) div:where(.swal2-icon).swal2-error [class^=swal2-x-mark-line][class$=left]{left:1.0625em;transform:rotate(45deg)}div:where(.swal2-container) div:where(.swal2-icon).swal2-error [class^=swal2-x-mark-line][class$=right]{right:1em;transform:rotate(-45deg)}div:where(.swal2-container) div:where(.swal2-icon).swal2-error.swal2-icon-show{animation:swal2-animate-error-icon .5s}div:where(.swal2-container) div:where(.swal2-icon).swal2-error.swal2-icon-show .swal2-x-mark{animation:swal2-animate-error-x-mark .5s}div:where(.swal2-container) div:where(.swal2-icon).swal2-warning{border-color:#facea8;color:#f8bb86}div:where(.swal2-container) div:where(.swal2-icon).swal2-warning.swal2-icon-show{animation:swal2-animate-error-icon .5s}div:where(.swal2-container) div:where(.swal2-icon).swal2-warning.swal2-icon-show .swal2-icon-content{animation:swal2-animate-i-mark .5s}div:where(.swal2-container) div:where(.swal2-icon).swal2-info{border-color:#9de0f6;color:#3fc3ee}div:where(.swal2-container) div:where(.swal2-icon).swal2-info.swal2-icon-show{animation:swal2-animate-error-icon .5s}div:where(.swal2-container) div:where(.swal2-icon).swal2-info.swal2-icon-show .swal2-icon-content{animation:swal2-animate-i-mark .8s}div:where(.swal2-container) div:where(.swal2-icon).swal2-question{border-color:#c9dae1;color:#87adbd}div:where(.swal2-container) div:where(.swal2-icon).swal2-question.swal2-icon-show{animation:swal2-animate-error-icon .5s}div:where(.swal2-container) div:where(.swal2-icon).swal2-question.swal2-icon-show .swal2-icon-content{animation:swal2-animate-question-mark .8s}div:where(.swal2-container) div:where(.swal2-icon).swal2-success{border-color:#a5dc86;color:#a5dc86}div:where(.swal2-container) div:where(.swal2-icon).swal2-success [class^=swal2-success-circular-line]{position:absolute;width:3.75em;height:7.5em;transform:rotate(45deg);border-radius:50%}div:where(.swal2-container) div:where(.swal2-icon).swal2-success [class^=swal2-success-circular-line][class$=left]{top:-0.4375em;left:-2.0635em;transform:rotate(-45deg);transform-origin:3.75em 3.75em;border-radius:7.5em 0 0 7.5em}div:where(.swal2-container) div:where(.swal2-icon).swal2-success [class^=swal2-success-circular-line][class$=right]{top:-0.6875em;left:1.875em;transform:rotate(-45deg);transform-origin:0 3.75em;border-radius:0 7.5em 7.5em 0}div:where(.swal2-container) div:where(.swal2-icon).swal2-success .swal2-success-ring{position:absolute;z-index:2;top:-0.25em;left:-0.25em;box-sizing:content-box;width:100%;height:100%;border:.25em solid rgba(165,220,134,.3);border-radius:50%}div:where(.swal2-container) div:where(.swal2-icon).swal2-success .swal2-success-fix{position:absolute;z-index:1;top:.5em;left:1.625em;width:.4375em;height:5.625em;transform:rotate(-45deg)}div:where(.swal2-container) div:where(.swal2-icon).swal2-success [class^=swal2-success-line]{display:block;position:absolute;z-index:2;height:.3125em;border-radius:.125em;background-color:#a5dc86}div:where(.swal2-container) div:where(.swal2-icon).swal2-success [class^=swal2-success-line][class$=tip]{top:2.875em;left:.8125em;width:1.5625em;transform:rotate(45deg)}div:where(.swal2-container) div:where(.swal2-icon).swal2-success [class^=swal2-success-line][class$=long]{top:2.375em;right:.5em;width:2.9375em;transform:rotate(-45deg)}div:where(.swal2-container) div:where(.swal2-icon).swal2-success.swal2-icon-show .swal2-success-line-tip{animation:swal2-animate-success-line-tip .75s}div:where(.swal2-container) div:where(.swal2-icon).swal2-success.swal2-icon-show .swal2-success-line-long{animation:swal2-animate-success-line-long .75s}div:where(.swal2-container) div:where(.swal2-icon).swal2-success.swal2-icon-show .swal2-success-circular-line-right{animation:swal2-rotate-success-circular-line 4.25s ease-in}div:where(.swal2-container) .swal2-progress-steps{flex-wrap:wrap;align-items:center;max-width:100%;margin:1.25em auto;padding:0;background:rgba(0,0,0,0);font-weight:600}div:where(.swal2-container) .swal2-progress-steps li{display:inline-block;position:relative}div:where(.swal2-container) .swal2-progress-steps .swal2-progress-step{z-index:20;flex-shrink:0;width:2em;height:2em;border-radius:2em;background:#2778c4;color:#fff;line-height:2em;text-align:center}div:where(.swal2-container) .swal2-progress-steps .swal2-progress-step.swal2-active-progress-step{background:#2778c4}div:where(.swal2-container) .swal2-progress-steps .swal2-progress-step.swal2-active-progress-step~.swal2-progress-step{background:#add8e6;color:#fff}div:where(.swal2-container) .swal2-progress-steps .swal2-progress-step.swal2-active-progress-step~.swal2-progress-step-line{background:#add8e6}div:where(.swal2-container) .swal2-progress-steps .swal2-progress-step-line{z-index:10;flex-shrink:0;width:2.5em;height:.4em;margin:0 -1px;background:#2778c4}[class^=swal2]{-webkit-tap-highlight-color:rgba(0,0,0,0)}.swal2-show{animation:swal2-show .3s}.swal2-hide{animation:swal2-hide .15s forwards}.swal2-noanimation{transition:none}.swal2-scrollbar-measure{position:absolute;top:-9999px;width:50px;height:50px;overflow:scroll}.swal2-rtl .swal2-close{margin-right:initial;margin-left:0}.swal2-rtl .swal2-timer-progress-bar{right:0;left:auto}@keyframes swal2-toast-show{0%{transform:translateY(-0.625em) rotateZ(2deg)}33%{transform:translateY(0) rotateZ(-2deg)}66%{transform:translateY(0.3125em) rotateZ(2deg)}100%{transform:translateY(0) rotateZ(0deg)}}@keyframes swal2-toast-hide{100%{transform:rotateZ(1deg);opacity:0}}@keyframes swal2-toast-animate-success-line-tip{0%{top:.5625em;left:.0625em;width:0}54%{top:.125em;left:.125em;width:0}70%{top:.625em;left:-0.25em;width:1.625em}84%{top:1.0625em;left:.75em;width:.5em}100%{top:1.125em;left:.1875em;width:.75em}}@keyframes swal2-toast-animate-success-line-long{0%{top:1.625em;right:1.375em;width:0}65%{top:1.25em;right:.9375em;width:0}84%{top:.9375em;right:0;width:1.125em}100%{top:.9375em;right:.1875em;width:1.375em}}@keyframes swal2-show{0%{transform:scale(0.7)}45%{transform:scale(1.05)}80%{transform:scale(0.95)}100%{transform:scale(1)}}@keyframes swal2-hide{0%{transform:scale(1);opacity:1}100%{transform:scale(0.5);opacity:0}}@keyframes swal2-animate-success-line-tip{0%{top:1.1875em;left:.0625em;width:0}54%{top:1.0625em;left:.125em;width:0}70%{top:2.1875em;left:-0.375em;width:3.125em}84%{top:3em;left:1.3125em;width:1.0625em}100%{top:2.8125em;left:.8125em;width:1.5625em}}@keyframes swal2-animate-success-line-long{0%{top:3.375em;right:2.875em;width:0}65%{top:3.375em;right:2.875em;width:0}84%{top:2.1875em;right:0;width:3.4375em}100%{top:2.375em;right:.5em;width:2.9375em}}@keyframes swal2-rotate-success-circular-line{0%{transform:rotate(-45deg)}5%{transform:rotate(-45deg)}12%{transform:rotate(-405deg)}100%{transform:rotate(-405deg)}}@keyframes swal2-animate-error-x-mark{0%{margin-top:1.625em;transform:scale(0.4);opacity:0}50%{margin-top:1.625em;transform:scale(0.4);opacity:0}80%{margin-top:-0.375em;transform:scale(1.15)}100%{margin-top:0;transform:scale(1);opacity:1}}@keyframes swal2-animate-error-icon{0%{transform:rotateX(100deg);opacity:0}100%{transform:rotateX(0deg);opacity:1}}@keyframes swal2-rotate-loading{0%{transform:rotate(0deg)}100%{transform:rotate(360deg)}}@keyframes swal2-animate-question-mark{0%{transform:rotateY(-360deg)}100%{transform:rotateY(0)}}@keyframes swal2-animate-i-mark{0%{transform:rotateZ(45deg);opacity:0}25%{transform:rotateZ(-25deg);opacity:.4}50%{transform:rotateZ(15deg);opacity:.8}75%{transform:rotateZ(-5deg);opacity:1}100%{transform:rotateX(0);opacity:1}}body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown){overflow:hidden}body.swal2-height-auto{height:auto !important}body.swal2-no-backdrop .swal2-container{background-color:rgba(0,0,0,0) !important;pointer-events:none}body.swal2-no-backdrop .swal2-container .swal2-popup{pointer-events:all}body.swal2-no-backdrop .swal2-container .swal2-modal{box-shadow:0 0 10px rgba(0,0,0,.4)}@media print{body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown){overflow-y:scroll !important}body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown)>[aria-hidden=true]{display:none}body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) .swal2-container{position:static !important}}body.swal2-toast-shown .swal2-container{box-sizing:border-box;width:360px;max-width:100%;background-color:rgba(0,0,0,0);pointer-events:none}body.swal2-toast-shown .swal2-container.swal2-top{inset:0 auto auto 50%;transform:translateX(-50%)}body.swal2-toast-shown .swal2-container.swal2-top-end,body.swal2-toast-shown .swal2-container.swal2-top-right{inset:0 0 auto auto}body.swal2-toast-shown .swal2-container.swal2-top-start,body.swal2-toast-shown .swal2-container.swal2-top-left{inset:0 auto auto 0}body.swal2-toast-shown .swal2-container.swal2-center-start,body.swal2-toast-shown .swal2-container.swal2-center-left{inset:50% auto auto 0;transform:translateY(-50%)}body.swal2-toast-shown .swal2-container.swal2-center{inset:50% auto auto 50%;transform:translate(-50%, -50%)}body.swal2-toast-shown .swal2-container.swal2-center-end,body.swal2-toast-shown .swal2-container.swal2-center-right{inset:50% 0 auto auto;transform:translateY(-50%)}body.swal2-toast-shown .swal2-container.swal2-bottom-start,body.swal2-toast-shown .swal2-container.swal2-bottom-left{inset:auto auto 0 0}body.swal2-toast-shown .swal2-container.swal2-bottom{inset:auto auto 0 50%;transform:translateX(-50%)}body.swal2-toast-shown .swal2-container.swal2-bottom-end,body.swal2-toast-shown .swal2-container.swal2-bottom-right{inset:auto 0 0 auto}

</style>
</head>


    <style>
        .nav-logo img {
            width: 120px;
        }
        
        .has-search .form-control {
            padding-left: 2.375rem;
        }

        .has-search .form-control-feedback {
            position: absolute;
            display: block;
            width: 2.375rem;
            height: 2.375rem;
            line-height: 2.375rem;
            text-align: center;
            pointer-events: none;
            color: #aaa;
        }

        .navbar .explore a {
            color: white;
            font-weight: 600;
            letter-spacing: 0px;
        }

        .navbar .contact a {
            color: white;
            font-weight: 600;
            letter-spacing: 0px;
        }

        .btn-event {
            
        }

        .btn-event a {
            padding: 8px 16px;
            background-color: #1f1f95;
            border: 2px solid #fff;
            border-radius: 8px;
            color: white;
            font-weight: 500;
        }

        .btn-event a:hover {
            background-color: #fff;
            color: #1f1f95;
        }

        .header-mobile {

        }

        .header-mobile .hamburger {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 22px;
            height: 22px;
            cursor: pointer;
            transition: all .2s ease-in-out;
        }

        .menu-btn {
            width: 22px;
            height: 2px;
            background: #fff;
            border-radius: 5px;
            transition: all .2s ease-in-out;
            padding: 0px;
        }

        .menu-btn::before,
        .menu-btn::after {
            content: '';
            position: absolute;
            width: 22px;
            height: 2px;
            background: #fff;
            border-radius: 5px;
            transition: all .2s ease-in-out;

        }

        .menu-btn::before {
            transform: translateY(-8px);
        }

        .menu-btn::after {
            transform: translateY(8px);
        }

        .hamburger.open .menu-btn {
            transform: translateX(-50px);
            background: transparent;
        }

        .hamburger.open .menu-btn::before {
            transform: rotate(45deg) translate(35px, -35px);
        }

        .hamburger.open .menu-btn::after {
            transform: rotate(-45deg) translate(35px, 35px);
        }

        .nav-menu-mobile {
            display: none;
        }

        .nav-menu-mobile .wrapper {
            position: fixed;
            width: 100%;
            height: 100%;
            left: 0;
            z-index: 100;
            padding: 10px 36px;
            background-color: white;
        }

        .nav-menu-mobile .wrapper .explore-mobile{
            height: 50px;
        }

        .nav-menu-mobile .wrapper .explore-mobile a{
            font-weight: 600;
            font-size: 14px;
            color: #828282;
        }

        .nav-menu-mobile .wrapper .contact-mobile{
            height: 50px;
        }

        .nav-menu-mobile .wrapper .contact-mobile a{
            font-weight: 600;
            font-size: 14px;
            color: #828282;
        }

        .nav-menu-mobile .wrapper .btn-event-mobile{
            height: 50px;
            margin-top: 20px;
        }

        .btn-event-mobile a{
            padding: 12px 16px;
            background-color: #1f1f95;
            border-radius: 8px;
            color: white;
            font-weight: 500;
        }

        .search-bar {
            display: none;
        }

        .header-mobile .search-bar .wrapper {
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0; left: 0;
            z-index: 120;
            background-color: #fff;
        }

        .search-bar .input-area {
            display: flex;
            /* height: 60px; */
            background-color: #1f1f95;
            align-items: center;
            justify-content: space-between;
            padding: 0 16px;
        }

        .default-language {
            display: flex;
            position: relative;
            flex-direction: row;
            align-items: center;
            gap: 12px;
            cursor: pointer;
        }

        
        .language {
            display: none;
            position: absolute;
            background-color: #FAFAFA;
            width: auto;
            justify-content: center;
            padding: 4px 14px;
            border-radius: 8px;
            top: 70px;
            z-index: 200;
        }
        
        .language-content {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            gap: 12px;
            justify-content: start;
        }

        .language-mobile {
            display: none;
            position: absolute;
            background-color: #FAFAFA;
            width: auto;
            justify-content: center;
            padding: 12px 14px;
            border-radius: 8px;
            top: 70px;
            z-index: 200;
        }
        
        .language-content-mobile {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            height:auto;
            /* gap: 12px; */
            justify-content: start;
        }

        .form-check {
            display: flex;
            align-items: center;
            gap: 8px;
            max-height: 40px;
            margin: 12px 0px;
        }

        .form-check-label {
            font-weight: 600;
        }

        #mobile-nav-toggle {
            display: none;
        }


    /* Media Query */
    /*  Mobile    */
    @media (max-width: 768px) {
        .main-menu .container {
            display: none;
        }

        #mobile-nav-toggle {
            display: none;
        }

        #undefined-sticky-wrapper {
            display: none;
        }

        .position-sm-static {
            position: static !important;
        }

        .image-logo-navbar {
            margin: 0px 0 20px 10px;
            height: 35px;
            border-radius: 3px 0px 0px 3px;
        }

        .img-header-banner {
            height: 100%;
        }

        .search-navbar {
            position: absolute;
            top: 90px;
            left: 14px;
            max-width: 94%;
            margin-right: 50px;

        }

        .search-navbar:focus {
            width: 50%;
        }

        .form-input-search {
            text-indent: 30px;
            font-size: 14px;
            background-color: white !important;
        }

        .icon-search-navbar {
            left: 4% !important;
        }

        .ps-sm-15px {
            padding-left: 15px;
        }
    }

    @media (min-width: 768px) {
        .image-logo-navbar {
            display: none;
        }


        .search-navbar {
            width: 50%;
            margin-left: 0%;
            margin-right: 0px !important;
        }

        .form-input-search {
            margin-left: 20px;
            text-indent: 45px;
        }

        .ps-sm-15px {
            padding-left: 0px;
        }
    }
    
    </style>

<header class="position-sm-static">
        <div class="main-menu" style="background-color: #1f1f95;">
            <div class="container d-md-none d-lg-block" id="#container-desktop">
                <div class="d-flex align-items-center justify-content-between flex-nowrap">
                    <div id="logo">
                        <a href="index.php"><img src="img/tyt4.png" width="90" alt="" title="Logo Tickyt" /></a>
                    </div>
                    <nav id="nav-menu-container">
                        <ul class="nav-menu d-flex">
                            <li><img src="img/tyt4.png" class="image-logo-navbar" /></li>
                            <!--<li class="menu-active"><a href="" >Home</a></li>-->
                            <li><a href="tentangkami.php" class="d-flex" style="color: #fff;">
                                    <img src="icon/discover.svg" alt="explore" class="d-none d-md-block"
                                        style="width: 18px; margin-right: 5px;" />
                                    <img src="icon/explore-mobile.svg" alt="explore" class="d-md-none"
                                        style="width: 18px; margin-right: 5px;" />
                                    About Us                                </a></li>
                            <!-- <li><a href="cek_tiket.php">Cek Tiket</a></li> -->
                            <li><a href="contact.php" class="d-flex" style="color: #fff;">
                                    <img src="icon/callcalling.svg" alt="hubungi kami" class="d-none d-md-block"
                                        style="width: 18px; margin-right: 5px;" />
                                    <img src="icon/seluler-mobile.svg" alt="hubungi kami" class="d-md-none"
                                        style="width: 18px; margin-right: 5px;" />
                                    Hubungi Kami                                </a></li>
                            <li class="my-auto ps-5 ps-md-0 ps-sm-15px"><a href="login.php" class="d-flex justify-content-center align-items-center text-white text-nowrap" style="width: 100px;border: 2px solid white; background-color: #1f1f95; padding: 10px 25px; border-radius: 8px;
                                    ">Login</a></li>                        </ul>
                    </nav>
                    <!--######## #nav-menu-container -->
                </div>
            </div>
    </div>
</header>

<div class="container">
        <section class="event-info mt-4"> 
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <div class="detail-event">
                        <div class="event-banner">
                            <img src="img/jkt48.webp" alt="">
                        </div>
                        <div class="category">
                            <span class="musik">Musik</span>
                            <!--<span class="seminar">Seminar</span>
                            <span class="sport">Sport</span>
                            <span class="exhibition">Exhibition</span> -->
                        </div>
                        <div class="event-name">
                            <h3>JKT 48 SUMMER FESTIVAL</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4" id="card-info">
                    <div class="card-info">                        
                            <div class="detail-info">
                                <div class="creator">
                                    
                                    <div class="creator-name">
                                        <label for="">Penyelenggara</label>
                                        <span>JKT 48 Management</span>
                                    </div>
                                </div>
                                <hr style="border-top: dashed 1px; margin: 10px 12px; color: #b0b0b0;">
                                <div class="calendar">
                                    <div class="calendar-icon">
                                        <img src="icon\calendar-bold.svg" alt="">
                                    </div>
                                    <div class="calendar-text">
                                        <label for="">Tanggal</label>
                                                                                    <span> 02 Jul 2023</span>
                                            
                                    </div>
                                </div>
                                
                                <div class="location">
                                    <div class="location-icon">
                                        <img src="icon\location-bold.svg" alt="">
                                    </div>
                                    <div class="location-text">
                                        <label for="">Lokasi</label>
                                        <span><a class="link-location">Tennis Indoor Senayan, Jakarta</a></span>
                                        <!-- <a class="">Lihat lokasi</a> -->
                                    </div>
                                </div>
                            </div>
                        
                    </div>
                </div>
            </div>
        </section>

        <section class="event-desc my-4">
            <div class="row">
                <div class="col-md-8">
                    <div class="description">
                        <div class="desc-tab">
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-desc-tab" data-bs-toggle="pill" data-bs-target="#pills-desc" type="button" role="tab" aria-controls="pills-desc" aria-selected="true">Deskripsi</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-ticket-tab" data-bs-toggle="pill" data-bs-target="#pills-ticket" type="button" role="tab" aria-controls="pills-ticket" aria-selected="false" tabindex="-1">Tiket</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-desc" role="tabpanel" aria-labelledby="pills-desc-tab" tabindex="0">
                                    <div class="description-label">
                                        <span>Deskripsi Event</span>
                                    </div>
                                    <div class="description-text">
                                        <p>Musim panas selalu erat kaitannya dengan musik, tarian, seni, hingga pesta. Di tahun ini, JKT48 akan menghadirkan seluruh keseruan tersebut melalui sebuah event bertajuk “JKT48 Summer Festival” yang akan diselenggarakan pada 2 Juli 2023 di Tennis Outdoor Senayan, Jakarta.</p>
                                    </div>
                                    <div class="description-label">
                                        <span>Syarat dan Ketentuan</span>
                                    </div>
                                    <div class="description-text">
                                        
<ul>
	<li>Melarang penonton masuk jika Entry Pass telah digunakan oleh orang lain.<br>
	<em>Prohibits audience from entering if the Entry Pass has been used by someone else.</em></li>
	<li>Melarang penonton masuk ke area venue jika Entry Pass yang digunakan tidak valid.<br>
	<em>Prohibit audience from entering the venue area if the Entry Pass used is invalid</em></li>
	<li>Memproses atau mengajukan hukuman, baik perdata maupun pidana, terhadap pengunjung yang mendapatkan Entry Pass secara tidak sah, termasuk ditemukannya memalsukan dan menggandakan Entry Pass yang sah atau memperoleh Entry Pass dengan cara yang tidak sesuai dengan prosedur.<br>
	<em>Processing or filing laws, whether civil or criminal, against visitors who get Entry Pass illegally, including falsifying and duplicating valid Entry Pass or obtaining Entry Pass in a way that is not in accordance with procedures.</em></li>
</ul>

<p>Barang yang boleh dibawa kedalam venue:</p>

<ul>
	<li>Membawa kartu identitas dan uang pribadi<br>
	<em>Bring your identity card and money</em></li>
	<li>Membawa bukti tiket/tanda masuk<br>
	<em>Bring proof of ticket/entry pass</em></li>
	<li>Membawa masker dan handsanitzer<br>
	<em>Bring a mask and hand sanitizer</em></li>
	<li>Membawa obat-obatan pribadi<br>
	<em>Bring personal medicine</em></li>
	<li>Membawa botol minum atau tumblr pribadi<br>
	<em>Bring a personal water bottle or tumbler</em></li>
	<li>Membawa jas hujan<br>
	<em>Bring a raincoat</em></li>
</ul>

                                    </div>
                                </div>

                                <!-- TAB TIKET -->
                                <input type="hidden" name="jumlah_cart" id="jumlah_cart" value="1">
                                <div class="tab-pane fade" id="pills-ticket" role="tabpanel" aria-labelledby="pills-ticket-tab" tabindex="0">
                                     <input type="hidden" id="cart_id_6488633bf37a1" name="cart_id" value="CRT-6488633bf30f020230613123819">
                                    <input type="hidden" id="cart_qty_6488633bf37a1" name="cart_qty" value="1">
                                    <input type="hidden" id="tkt_id_6488633bf37a1" name="tkt_id" value="TKT742">
                                    <input type="hidden" id="event_id_6488633bf37a1" name="event_id" value="EVN143">

                                    <div class="card-tiket">
                                        <div class="ticket-info">
                                            <div class="ticket-name col-7 p-0">
                                                <span>Tiket Reguler</span>
                                            </div>
                                            <div class="ticket-status col-5 p-0">
                                                <span class="onsale">On Sale</span>
                                            </div>
                                        </div>
                                        <hr style="border: 1px dashed #b0b0b0;">
                                        <div class="ticket-order">
                                            <div class="ticket-price">
                                                <label for="" style="margin-bottom: 0px;">Harga</label>
                                                <span>
                                                    Rp 500.000                                                </span>
                                            </div>
                                            <div class="ticket-buy">
                                            <a href="order.php" class="btn-buy">pilih</a> 
                                                        
                                                                                            </div>
                                        </div>
                                    </div> <!-- div TIKET END -->
                                                                      

                                    <div class="card-tiket">
                                        <div class="ticket-info">
                                            <div class="ticket-name col-7 p-0">
                                                <span>Tiket VIP</span>
                                            </div>
                                            <div class="ticket-status col-5 p-0">
                                                <span class="onsale">On Sale</span>
                                            </div>
                                        </div>
                                        <hr style="border: 1px dashed #b0b0b0;">
                                        <div class="ticket-order">
                                            <div class="ticket-price">
                                                <label for="" style="margin-bottom: 0px;">Harga</label>
                                                <span>
                                                    Rp 750.000                                                </span>
                                            </div>
                                            <div class="ticket-buy">
                                            <a href="order.php" class="btn-buy">pilih</a> 
                                                                                            </div>
                                        </div>
                                    </div> <!-- div TIKET END -->
                                    
                                <!-- TAB TIKET END -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" style="display: none;">
                
                    <div class="venue-layout">
                        <div class="venue-label">
                            <span for="">Denah Tempat</span>
                        </div>
                        <div class="venue-img">
                            <img src="../img/event_image_venue/" alt="">
                            <div class="preview-link">
                                <a class="" style="color: #1F1F95;">Klik untuk melihat</a>
                            </div>
                        </div>
                    </div>

                    <div class="popup-image">
                        <span style="font-weight: 400; border-radius: 14px;">×</span>
                        <img class="img-fluid" src="../img/event_image_venue/">
                    </div>
                </div>
            </div>            
        </section>
    </div>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <footer class="section-footer border-top pb-0" style="background-color: #1f1f95; padding-top: 50px;">
    <div class="container">
        <section class="footer-top py-2">
            <div class="row">
                
                <aside class="col-sm-6 col-md-3">
                    <h6 class="title mt-md-0" style="color: #fff;">Tentang</h6>
                    <ul class="list-unstyled">
                        <li class="pb-2"> <a href="tentangkami.php" style="color: #fff !important;"> Tentang kami</a></li>
                    </ul>
                </aside>
                <aside class="col-sm-6 col-md-3">
                    <h6 class="title" style="color: #fff;">Event</h6>
                    <ul class="list-unstyled">
                        <li class="pb-2"> <a href="https://docs.google.com/forms/d/e/1FAIpQLSdb5R5xwiwEi3KMyuI828YU42A_YHHIxQArXR9ZSfmscESwCA/viewform?usp=sf_link" style="color: #fff !important;"> Daftarkan Event</a></li>                       
                    </ul>
                </aside>
                <aside class="col-sm-6 col-md-3">
                    <h6 class="title" style="color: #fff;">Informasi</h6>
                    <ul class="list-unstyled">

                        <li class="pb-2"> <a href="syarat.php" style="color: #fff !important;">Syarat dan Ketentuan</a></li>

                    </ul>
                </aside>
                <aside class="col-sm-6 col-md-3">
                    <h6 class="title" style="color: #fff;">Admin</h6>
                    <ul class="list-unstyled " style="color: #222;">
                        <li class="pb-2"> <a href="admin.php" style="color: #fff !important;"> Masuk </a></li>
                    </ul>
                </aside>
                <div class="d-sm-block d-md-none">

                   
 
                </div>
                
            </div> <!-- row.// -->
        </section> <!-- footer-top.// -->

        <section class="border-top py-3">
            <div class="align-items-center">
            <div class="row">

                    <div class="col-3">
                        <img src="img/tyt2.png" class="logo-footer mt-2" width="25">
                    </div>

                    <div class="col-9 my-auto d-md-none text-right">
                        <p class="mt-2 mb-2" style="color: #fff !important;"> © 2023 CV. Pemweb Fix A. All Rights Reserved </p>
                    </div>

                    <div class="col-6 d-none d-md-block text-center">
                        <p class="mt-2 mb-0" style="color: #fff !important;"> © 2023 CV. Pemweb Fix A. All Rights Reserved </p>
                    </div>

                
                </div>
            </div>
        </section>

        
    </div><!-- //container -->
</footer>
<!-- ========================= FOOTER END // ========================= -->
<script defer="" src="https://static.cloudflareinsights.com/beacon.min.js/v52afc6f149f6479b8c77fa569edb01181681764108816" integrity="sha512-jGCTpDpBAYDGNYR5ztKt4BQPGef1P0giN6ZGVUi835kFF88FOmmn8jBQWNgrNd8g/Yu421NdgWhwQoaOPFflDw==" data-cf-beacon="{&quot;rayId&quot;:&quot;7d6a63d678701924&quot;,&quot;version&quot;:&quot;2023.4.0&quot;,&quot;r&quot;:1,&quot;token&quot;:&quot;5360e9bf626641669eaef62451edd094&quot;,&quot;si&quot;:100}" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="..\js\jquery.nice-number.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>

    
</script>
    
<script>
// $ (function (){
    //     $('input[type="number"]').niceNumber();
    // });

    $(function () {
        $('input[type="number"]').niceNumber({
            onIncrement: function ($currentInput, amount, settings) {
                $('#jumlah_cart').val(amount);
                // console.log($('#jumlah_cart').val());
            },
            onDecrement: function ($currentInput, amount, settings) {
                $('#jumlah_cart').val(amount);
                // console.log($('#jumlah_cart').val());
            },
        });
    })

    const hamburgerBtn = document.querySelector('.hamburger');
    let menuOpen = false;
    hamburgerBtn.addEventListener('click', () => {
        if(!menuOpen) {
            hamburgerBtn.classList.add('open');
            menuOpen = true;
        } else {
            hamburgerBtn.classList.remove('open');
            menuOpen = false;
        }
    })
    
    $(".hamburger").click(function(){
        $("#search-mobile").slideToggle();
        $("#nav-menu-mobile").toggle(100);
        });

    $("#search-mobile").click(function(){
        $(".search-bar").show(100);
        });

    $(".back-btn").click(function(){
        $(".search-bar").hide(100);
        });

    $("#select-language").change(function(){
        let lang = $("#select-language").val();
        document.getElementById("form-lang").submit();
    });

    $(".default-language").click(function(){
        $(".language").toggle();
        });
    
    $(".default-language-mobile").click(function(){
        $(".language-mobile").toggle();
        });


    function select_language(value)
    {
        let lang = value;
        document.getElementById("form-lang").submit();
    }

    function select_language_mobile(value)
    {
        let lang = value;
        document.getElementById("form-lang-mobile").submit();
    }

    document.querySelectorAll('.preview-link a').forEach(image =>{
    image.onclick = () => {
        document.querySelector('.popup-image').style.display = 'block';
        document.querySelector('.popup-image img').src = document.querySelector('.img-venue').getAttribute('src');
        }
    });

    document.querySelector('.popup-image span').onclick = () => {
        document.querySelector('.popup-image').style.display = 'none';
    }

    const btnBeli = document.querySelector('.btn-beli');
    const tabTiket = document.querySelector('#pills-ticket-tab');
    const tabDesc = document.querySelector('#pills-desc-tab');
    const tiketOpen = document.querySelector('#pills-ticket');
    const scrollTiket = document.querySelector('.event-desc');
    const descOpen = document.querySelector('#pills-desc');

    btnBeli.addEventListener('click', () => {
        tabTiket.classList.add('active');
        tiketOpen.classList.add('show', 'active');
        scrollTiket.scrollIntoView({ behavior: 'smooth', block: 'start' });            
        tabDesc.classList.remove('active');
        descOpen.classList.remove('show', 'active');
        tabDesc.setAttribute('aria-selected', 'false');
        tabTiket.setAttribute('aria-selected', 'true');

        // == hidden btn beli
        if($(window).width() < 768)
        {
            $("#div-beli-tiket").hide();
        } 

    })

    tabDesc.addEventListener('click', () => {
        $("#div-beli-tiket").show();
    })

    tabTiket.addEventListener('click', () => {
        if($(window).width() < 768)
        {
            $("#div-beli-tiket").hide();
        } 
    })

    function btn_pilih(id) {
        $("#btn-buy-"+id).hide();
        $("#div-qty-"+id).show();
    }

    function btn_batal(id) {
        $("#btn-buy-"+id).show();
        $("#div-qty-"+id).hide();
    }

    function btnJumlah(value, randId) {
        console.log(value+', '+randId);
        $('#cart_qty_' + randId).val(value);
    }
    
function submitTicket(randId) {
    var cart_id = $('#cart_id_' + randId).val();
    // var cart_qty = $('#cart_qty_' + randId).val();
    var cart_qty = $('#jumlah_cart').val();
    var ticket_id = $('#tkt_id_' + randId).val();
    var event_id = $('#event_id_' + randId).val();
    console.log('cart id:'+cart_id+', cart qty:'+cart_qty+', ticket id:'+ticket_id+', event id:'+event_id);

    if (cart_qty < 1) {
        alert('Tiket Sold Out!');
        return;
    }

    $.ajax({
        url: "../page_event_cart_proses",
        type: "post",
        data: {
            'tkt_id': ticket_id,
            'cart_id': cart_id,
            'event_id': event_id,
            'cart_qty': cart_qty,
            "tkn_err": 'ccdcb94ef94be273f7090525f1722a63'
        },
        success: function(response) {

            if(response) {
                try {
                    // a = JSON.parse(response);
                    var data = JSON.parse(response).data;
                    window.location = "../page_event_cart_form?id="+cart_id+"&qty="+btoa(cart_qty)+"&lang=id";
                } catch(e) {
                    console.log(e);

                    const headers = new Headers({
                    "Content-Type": "application/x-www-form-urlencoded"
                    });

                    const urlencoded = new URLSearchParams({
                    "page": "Event Detail-FO",
                    "error_desc": e,
                    "tkn_err": 'ccdcb94ef94be273f7090525f1722a63',
                    });

                    const opts = {
                    method: 'POST',
                    headers: headers,
                    body: urlencoded,
                    };

                    fetch("https://artatix.co.id/log_error_proses", opts);

                }
            }

        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.log(textStatus, errorThrown);

            const headers = new Headers({
            "Content-Type": "application/x-www-form-urlencoded"
            });

            const urlencoded = new URLSearchParams({
            "page": "Event Detail-FO",
            "error_desc": e,
            "tkn_err": 'ccdcb94ef94be273f7090525f1722a63',
            });

            const opts = {
            method: 'POST',
            headers: headers,
            body: urlencoded,
            };

            fetch("https://artatix.co.id/log_error_proses", opts);

        }
    });
}
</script>
</body>
</html>