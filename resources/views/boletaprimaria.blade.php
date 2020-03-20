<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Boleta de notas</title>
</head>
<style>
    .fondo{
        background-color: #adb5bd
    }
    html { 
    font-family: sans-serif;
    line-height: 1.15;
    -webkit-text-size-adjust: 100%;
    -ms-text-size-adjust: 100%;
    -ms-overflow-style: scrollbar;
    -webkit-tap-highlight-color: transparent;
    }

    @-ms-viewport {
    width: device-width;
    }


    body {
    margin: 0;
    font-family: "Source Sans Pro", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    text-align: left;
    background-color: #ffffff;
    }

    @media (min-width: 768px) {
    .container {
        max-width: 720px;
    }
    }

    @media (min-width: 992px) {
    .container {
        max-width: 960px;
    }
    }

    @media (min-width: 1200px) {
    .container {
        max-width: 1140px;
    }
    }

    .container-fluid {
    width: 100%;
    padding-right: 7.5px;
    padding-left: 7.5px;
    margin-right: auto;
    margin-left: auto;
    }

    .row {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
        flex-wrap: wrap;
    margin-right: -7.5px;
    margin-left: -7.5px;
    }

    .col-1, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-10, .col-11, .col-12, .col,
    .col-auto, .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm,
    .col-sm-auto, .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12, .col-md,
    .col-md-auto, .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg,
    .col-lg-auto, .col-xl-1, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl,
    .col-xl-auto {
    position: relative;
    width: 100%;
    min-height: 1px;
    padding-right: 7.5px;
    padding-left: 7.5px;
    }

    .col {
    -ms-flex-preferred-size: 0;
        flex-basis: 0;
    -webkit-box-flex: 1;
        -ms-flex-positive: 1;
            flex-grow: 1;
    max-width: 100%;
    }

    .col-auto {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: auto;
    max-width: none;
    }

    .col-1 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 8.333333%;
            flex: 0 0 8.333333%;
    max-width: 8.333333%;
    }

    .col-2 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 16.666667%;
            flex: 0 0 16.666667%;
    max-width: 16.666667%;
    }

    .col-3 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 25%;
            flex: 0 0 25%;
    max-width: 25%;
    }

    .col-4 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 33.333333%;
            flex: 0 0 33.333333%;
    max-width: 33.333333%;
    }

    .col-5 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 41.666667%;
            flex: 0 0 41.666667%;
    max-width: 41.666667%;
    }

    .col-6 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 50%;
            flex: 0 0 50%;
    max-width: 50%;
    }

    .col-7 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 58.333333%;
            flex: 0 0 58.333333%;
    max-width: 58.333333%;
    }

    .col-8 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 66.666667%;
            flex: 0 0 66.666667%;
    max-width: 66.666667%;
    }

    .col-9 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 75%;
            flex: 0 0 75%;
    max-width: 75%;
    }

    .col-10 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 83.333333%;
            flex: 0 0 83.333333%;
    max-width: 83.333333%;
    }

    .col-11 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 91.666667%;
            flex: 0 0 91.666667%;
    max-width: 91.666667%;
    }

    .col-12 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
    max-width: 100%;
    }


    .offset-1 {
    margin-left: 8.333333%;
    }

    .offset-2 {
    margin-left: 16.666667%;
    }

    .offset-3 {
    margin-left: 25%;
    }

    .offset-4 {
    margin-left: 33.333333%;
    }

    .offset-5 {
    margin-left: 41.666667%;
    }

    .offset-6 {
    margin-left: 50%;
    }

    .offset-7 {
    margin-left: 58.333333%;
    }

    .offset-8 {
    margin-left: 66.666667%;
    }

    .offset-9 {
    margin-left: 75%;
    }

    .offset-10 {
    margin-left: 83.333333%;
    }

    .offset-11 {
    margin-left: 91.666667%;
    }

    @media (min-width: 576px) {
    .col-sm {
        -ms-flex-preferred-size: 0;
            flex-basis: 0;
        -webkit-box-flex: 1;
            -ms-flex-positive: 1;
                flex-grow: 1;
        max-width: 100%;
    }
    .col-sm-auto {
        -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
                flex: 0 0 auto;
        width: auto;
        max-width: none;
    }
    .col-sm-1 {
        -webkit-box-flex: 0;
            -ms-flex: 0 0 8.333333%;
                flex: 0 0 8.333333%;
        max-width: 8.333333%;
    }
    .col-sm-2 {
        -webkit-box-flex: 0;
            -ms-flex: 0 0 16.666667%;
                flex: 0 0 16.666667%;
        max-width: 16.666667%;
    }
    .col-sm-3 {
        -webkit-box-flex: 0;
            -ms-flex: 0 0 25%;
                flex: 0 0 25%;
        max-width: 25%;
    }
    .col-sm-4 {
        -webkit-box-flex: 0;
            -ms-flex: 0 0 33.333333%;
                flex: 0 0 33.333333%;
        max-width: 33.333333%;
    }
    .col-sm-5 {
        -webkit-box-flex: 0;
            -ms-flex: 0 0 41.666667%;
                flex: 0 0 41.666667%;
        max-width: 41.666667%;
    }
    .col-sm-6 {
        -webkit-box-flex: 0;
            -ms-flex: 0 0 50%;
                flex: 0 0 50%;
        max-width: 50%;
    }
    .col-sm-7 {
        -webkit-box-flex: 0;
            -ms-flex: 0 0 58.333333%;
                flex: 0 0 58.333333%;
        max-width: 58.333333%;
    }
    .col-sm-8 {
        -webkit-box-flex: 0;
            -ms-flex: 0 0 66.666667%;
                flex: 0 0 66.666667%;
        max-width: 66.666667%;
    }
    .col-sm-9 {
        -webkit-box-flex: 0;
            -ms-flex: 0 0 75%;
                flex: 0 0 75%;
        max-width: 75%;
    }
    .col-sm-10 {
        -webkit-box-flex: 0;
            -ms-flex: 0 0 83.333333%;
                flex: 0 0 83.333333%;
        max-width: 83.333333%;
    }
    .col-sm-11 {
        -webkit-box-flex: 0;
            -ms-flex: 0 0 91.666667%;
                flex: 0 0 91.666667%;
        max-width: 91.666667%;
    }
    .col-sm-12 {
        -webkit-box-flex: 0;
            -ms-flex: 0 0 100%;
                flex: 0 0 100%;
        max-width: 100%;
    }
    .offset-sm-0 {
        margin-left: 0;
    }
    .offset-sm-1 {
        margin-left: 8.333333%;
    }
    .offset-sm-2 {
        margin-left: 16.666667%;
    }
    .offset-sm-3 {
        margin-left: 25%;
    }
    .offset-sm-4 {
        margin-left: 33.333333%;
    }
    .offset-sm-5 {
        margin-left: 41.666667%;
    }
    .offset-sm-6 {
        margin-left: 50%;
    }
    .offset-sm-7 {
        margin-left: 58.333333%;
    }
    .offset-sm-8 {
        margin-left: 66.666667%;
    }
    .offset-sm-9 {
        margin-left: 75%;
    }
    .offset-sm-10 {
        margin-left: 83.333333%;
    }
    .offset-sm-11 {
        margin-left: 91.666667%;
    }
    }

    @media (min-width: 768px) {
    .col-md {
        -ms-flex-preferred-size: 0;
            flex-basis: 0;
        -webkit-box-flex: 1;
            -ms-flex-positive: 1;
                flex-grow: 1;
        max-width: 100%;
    }
    .col-md-auto {
        -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
                flex: 0 0 auto;
        width: auto;
        max-width: none;
    }
    .col-md-1 {
        -webkit-box-flex: 0;
            -ms-flex: 0 0 8.333333%;
                flex: 0 0 8.333333%;
        max-width: 8.333333%;
    }
    .col-md-2 {
        -webkit-box-flex: 0;
            -ms-flex: 0 0 16.666667%;
                flex: 0 0 16.666667%;
        max-width: 16.666667%;
    }
    .col-md-3 {
        -webkit-box-flex: 0;
            -ms-flex: 0 0 25%;
                flex: 0 0 25%;
        max-width: 25%;
    }
    .col-md-4 {
        -webkit-box-flex: 0;
            -ms-flex: 0 0 33.333333%;
                flex: 0 0 33.333333%;
        max-width: 33.333333%;
    }
    .col-md-5 {
        -webkit-box-flex: 0;
            -ms-flex: 0 0 41.666667%;
                flex: 0 0 41.666667%;
        max-width: 41.666667%;
    }
    .col-md-6 {
        -webkit-box-flex: 0;
            -ms-flex: 0 0 50%;
                flex: 0 0 50%;
        max-width: 50%;
    }
    .col-md-7 {
        -webkit-box-flex: 0;
            -ms-flex: 0 0 58.333333%;
                flex: 0 0 58.333333%;
        max-width: 58.333333%;
    }
    .col-md-8 {
        -webkit-box-flex: 0;
            -ms-flex: 0 0 66.666667%;
                flex: 0 0 66.666667%;
        max-width: 66.666667%;
    }
    .col-md-9 {
        -webkit-box-flex: 0;
            -ms-flex: 0 0 75%;
                flex: 0 0 75%;
        max-width: 75%;
    }
    .col-md-10 {
        -webkit-box-flex: 0;
            -ms-flex: 0 0 83.333333%;
                flex: 0 0 83.333333%;
        max-width: 83.333333%;
    }
    .col-md-11 {
        -webkit-box-flex: 0;
            -ms-flex: 0 0 91.666667%;
                flex: 0 0 91.666667%;
        max-width: 91.666667%;
    }
    .col-md-12 {
        -webkit-box-flex: 0;
            -ms-flex: 0 0 100%;
                flex: 0 0 100%;
        max-width: 100%;
    }
    .offset-md-0 {
        margin-left: 0;
    }
    .offset-md-1 {
        margin-left: 8.333333%;
    }
    .offset-md-2 {
        margin-left: 16.666667%;
    }
    .offset-md-3 {
        margin-left: 25%;
    }
    .offset-md-4 {
        margin-left: 33.333333%;
    }
    .offset-md-5 {
        margin-left: 41.666667%;
    }
    .offset-md-6 {
        margin-left: 50%;
    }
    .offset-md-7 {
        margin-left: 58.333333%;
    }
    .offset-md-8 {
        margin-left: 66.666667%;
    }
    .offset-md-9 {
        margin-left: 75%;
    }
    .offset-md-10 {
        margin-left: 83.333333%;
    }
    .offset-md-11 {
        margin-left: 91.666667%;
    }
    }

    @media (min-width: 992px) {
    .col-lg {
        -ms-flex-preferred-size: 0;
            flex-basis: 0;
        -webkit-box-flex: 1;
            -ms-flex-positive: 1;
                flex-grow: 1;
        max-width: 100%;
    }
    .col-lg-auto {
        -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
                flex: 0 0 auto;
        width: auto;
        max-width: none;
    }
    .col-lg-1 {
        -webkit-box-flex: 0;
            -ms-flex: 0 0 8.333333%;
                flex: 0 0 8.333333%;
        max-width: 8.333333%;
    }
    .col-lg-2 {
        -webkit-box-flex: 0;
            -ms-flex: 0 0 16.666667%;
                flex: 0 0 16.666667%;
        max-width: 16.666667%;
    }
    .col-lg-3 {
        -webkit-box-flex: 0;
            -ms-flex: 0 0 25%;
                flex: 0 0 25%;
        max-width: 25%;
    }
    .col-lg-4 {
        -webkit-box-flex: 0;
            -ms-flex: 0 0 33.333333%;
                flex: 0 0 33.333333%;
        max-width: 33.333333%;
    }
    .col-lg-5 {
        -webkit-box-flex: 0;
            -ms-flex: 0 0 41.666667%;
                flex: 0 0 41.666667%;
        max-width: 41.666667%;
    }
    .col-lg-6 {
        -webkit-box-flex: 0;
            -ms-flex: 0 0 50%;
                flex: 0 0 50%;
        max-width: 50%;
    }
    .col-lg-7 {
        -webkit-box-flex: 0;
            -ms-flex: 0 0 58.333333%;
                flex: 0 0 58.333333%;
        max-width: 58.333333%;
    }
    .col-lg-8 {
        -webkit-box-flex: 0;
            -ms-flex: 0 0 66.666667%;
                flex: 0 0 66.666667%;
        max-width: 66.666667%;
    }
    .col-lg-9 {
        -webkit-box-flex: 0;
            -ms-flex: 0 0 75%;
                flex: 0 0 75%;
        max-width: 75%;
    }
    .col-lg-10 {
        -webkit-box-flex: 0;
            -ms-flex: 0 0 83.333333%;
                flex: 0 0 83.333333%;
        max-width: 83.333333%;
    }
    .col-lg-11 {
        -webkit-box-flex: 0;
            -ms-flex: 0 0 91.666667%;
                flex: 0 0 91.666667%;
        max-width: 91.666667%;
    }
    .col-lg-12 {
        -webkit-box-flex: 0;
            -ms-flex: 0 0 100%;
                flex: 0 0 100%;
        max-width: 100%;
    }
    .offset-lg-0 {
        margin-left: 0;
    }
    .offset-lg-1 {
        margin-left: 8.333333%;
    }
    .offset-lg-2 {
        margin-left: 16.666667%;
    }
    .offset-lg-3 {
        margin-left: 25%;
    }
    .offset-lg-4 {
        margin-left: 33.333333%;
    }
    .offset-lg-5 {
        margin-left: 41.666667%;
    }
    .offset-lg-6 {
        margin-left: 50%;
    }
    .offset-lg-7 {
        margin-left: 58.333333%;
    }
    .offset-lg-8 {
        margin-left: 66.666667%;
    }
    .offset-lg-9 {
        margin-left: 75%;
    }
    .offset-lg-10 {
        margin-left: 83.333333%;
    }
    .offset-lg-11 {
        margin-left: 91.666667%;
    }
    }

    @media (min-width: 1200px) {
    .col-xl {
        -ms-flex-preferred-size: 0;
            flex-basis: 0;
        -webkit-box-flex: 1;
            -ms-flex-positive: 1;
                flex-grow: 1;
        max-width: 100%;
    }
    .col-xl-auto {
        -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
                flex: 0 0 auto;
        width: auto;
        max-width: none;
    }
    .col-xl-1 {
        -webkit-box-flex: 0;
            -ms-flex: 0 0 8.333333%;
                flex: 0 0 8.333333%;
        max-width: 8.333333%;
    }
    .col-xl-2 {
        -webkit-box-flex: 0;
            -ms-flex: 0 0 16.666667%;
                flex: 0 0 16.666667%;
        max-width: 16.666667%;
    }
    .col-xl-3 {
        -webkit-box-flex: 0;
            -ms-flex: 0 0 25%;
                flex: 0 0 25%;
        max-width: 25%;
    }
    .col-xl-4 {
        -webkit-box-flex: 0;
            -ms-flex: 0 0 33.333333%;
                flex: 0 0 33.333333%;
        max-width: 33.333333%;
    }
    .col-xl-5 {
        -webkit-box-flex: 0;
            -ms-flex: 0 0 41.666667%;
                flex: 0 0 41.666667%;
        max-width: 41.666667%;
    }
    .col-xl-6 {
        -webkit-box-flex: 0;
            -ms-flex: 0 0 50%;
                flex: 0 0 50%;
        max-width: 50%;
    }
    .col-xl-7 {
        -webkit-box-flex: 0;
            -ms-flex: 0 0 58.333333%;
                flex: 0 0 58.333333%;
        max-width: 58.333333%;
    }
    .col-xl-8 {
        -webkit-box-flex: 0;
            -ms-flex: 0 0 66.666667%;
                flex: 0 0 66.666667%;
        max-width: 66.666667%;
    }
    .col-xl-9 {
        -webkit-box-flex: 0;
            -ms-flex: 0 0 75%;
                flex: 0 0 75%;
        max-width: 75%;
    }
    .col-xl-10 {
        -webkit-box-flex: 0;
            -ms-flex: 0 0 83.333333%;
                flex: 0 0 83.333333%;
        max-width: 83.333333%;
    }
    .col-xl-11 {
        -webkit-box-flex: 0;
            -ms-flex: 0 0 91.666667%;
                flex: 0 0 91.666667%;
        max-width: 91.666667%;
    }
    .col-xl-12 {
        -webkit-box-flex: 0;
            -ms-flex: 0 0 100%;
                flex: 0 0 100%;
        max-width: 100%;
    }
    
    .offset-xl-0 {
        margin-left: 0;
    }
    .offset-xl-1 {
        margin-left: 8.333333%;
    }
    .offset-xl-2 {
        margin-left: 16.666667%;
    }
    .offset-xl-3 {
        margin-left: 25%;
    }
    .offset-xl-4 {
        margin-left: 33.333333%;
    }
    .offset-xl-5 {
        margin-left: 41.666667%;
    }
    .offset-xl-6 {
        margin-left: 50%;
    }
    .offset-xl-7 {
        margin-left: 58.333333%;
    }
    .offset-xl-8 {
        margin-left: 66.666667%;
    }
    .offset-xl-9 {
        margin-left: 75%;
    }
    .offset-xl-10 {
        margin-left: 83.333333%;
    }
    .offset-xl-11 {
        margin-left: 91.666667%;
    }
    }

    .container {
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
    }

    @media (min-width: 576px) {
    .container {
        max-width: 540px;
    }
    }

    @media (min-width: 768px) {
    .container {
        max-width: 720px;
    }
    }

    @media (min-width: 992px) {
    .container {
        max-width: 960px;
    }
    }

    @media (min-width: 1200px) {
    .container {
        max-width: 1140px;
    }
    }

    .container-fluid {
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
    }

    .row {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
        flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
    }

    .no-gutters {
    margin-right: 0;
    margin-left: 0;
    }

    .no-gutters > .col,
    .no-gutters > [class*="col-"] {
    padding-right: 0;
    padding-left: 0;
    }

    .col-1,
    .col-2,
    .col-3,
    .col-4,
    .col-5,
    .col-6,
    .col-7,
    .col-8,
    .col-9,
    .col-10,
    .col-11,
    .col-12,
    .col,
    .col-auto,
    .col-sm-1,
    .col-sm-2,
    .col-sm-3,
    .col-sm-4,
    .col-sm-5,
    .col-sm-6,
    .col-sm-7,
    .col-sm-8,
    .col-sm-9,
    .col-sm-10,
    .col-sm-11,
    .col-sm-12,
    .col-sm,
    .col-sm-auto,
    .col-md-1,
    .col-md-2,
    .col-md-3,
    .col-md-4,
    .col-md-5,
    .col-md-6,
    .col-md-7,
    .col-md-8,
    .col-md-9,
    .col-md-10,
    .col-md-11,
    .col-md-12,
    .col-md,
    .col-md-auto,
    .col-lg-1,
    .col-lg-2,
    .col-lg-3,
    .col-lg-4,
    .col-lg-5,
    .col-lg-6,
    .col-lg-7,
    .col-lg-8,
    .col-lg-9,
    .col-lg-10,
    .col-lg-11,
    .col-lg-12,
    .col-lg,
    .col-lg-auto,
    .col-xl-1,
    .col-xl-2,
    .col-xl-3,
    .col-xl-4,
    .col-xl-5,
    .col-xl-6,
    .col-xl-7,
    .col-xl-8,
    .col-xl-9,
    .col-xl-10,
    .col-xl-11,
    .col-xl-12,
    .col-xl,
    .col-xl-auto {
    position: relative;
    width: 100%;
    min-height: 1px;
    padding-right: 15px;
    padding-left: 15px;
    }

    .col {
    -ms-flex-preferred-size: 0;
        flex-basis: 0;
    -webkit-box-flex: 1;
        -ms-flex-positive: 1;
            flex-grow: 1;
    max-width: 100%;
    }

    .col-auto {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: auto;
    max-width: none;
    }

    .col-1 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 8.33333333%;
            flex: 0 0 8.33333333%;
    max-width: 8.33333333%;
    }

    .col-2 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 16.66666667%;
            flex: 0 0 16.66666667%;
    max-width: 16.66666667%;
    }

    .col-3 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 25%;
            flex: 0 0 25%;
    max-width: 25%;
    }

    .col-4 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 33.33333333%;
            flex: 0 0 33.33333333%;
    max-width: 33.33333333%;
    }

    .col-5 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 41.66666667%;
            flex: 0 0 41.66666667%;
    max-width: 41.66666667%;
    }

    .col-6 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 50%;
            flex: 0 0 50%;
    max-width: 50%;
    }

    .col-7 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 58.33333333%;
            flex: 0 0 58.33333333%;
    max-width: 58.33333333%;
    }

    .col-8 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 66.66666667%;
            flex: 0 0 66.66666667%;
    max-width: 66.66666667%;
    }

    .col-9 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 75%;
            flex: 0 0 75%;
    max-width: 75%;
    }

    .col-10 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 83.33333333%;
            flex: 0 0 83.33333333%;
    max-width: 83.33333333%;
    }

    .col-11 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 91.66666667%;
            flex: 0 0 91.66666667%;
    max-width: 91.66666667%;
    }

    .col-12 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
    max-width: 100%;
    }

    .offset-1 {
    margin-left: 8.33333333%;
    }

    .offset-2 {
    margin-left: 16.66666667%;
    }

    .offset-3 {
    margin-left: 25%;
    }

    .offset-4 {
    margin-left: 33.33333333%;
    }

    .offset-5 {
    margin-left: 41.66666667%;
    }

    .offset-6 {
    margin-left: 50%;
    }

    .offset-7 {
    margin-left: 58.33333333%;
    }

    .offset-8 {
    margin-left: 66.66666667%;
    }

    .offset-9 {
    margin-left: 75%;
    }

    .offset-10 {
    margin-left: 83.33333333%;
    }

    .offset-11 {
    margin-left: 91.66666667%;
    }

    @media (min-width: 576px) {
    .col-sm {
        -ms-flex-preferred-size: 0;
            flex-basis: 0;
        -webkit-box-flex: 1;
            -ms-flex-positive: 1;
                flex-grow: 1;
        max-width: 100%;
    }

    .col-sm-auto {
        -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
                flex: 0 0 auto;
        width: auto;
        max-width: none;
    }

    .col-sm-1 {
        -webkit-box-flex: 0;
            -ms-flex: 0 0 8.33333333%;
                flex: 0 0 8.33333333%;
        max-width: 8.33333333%;
    }

    .col-sm-2 {
        -webkit-box-flex: 0;
            -ms-flex: 0 0 16.66666667%;
                flex: 0 0 16.66666667%;
        max-width: 16.66666667%;
    }

    .col-sm-3 {
        -webkit-box-flex: 0;
            -ms-flex: 0 0 25%;
                flex: 0 0 25%;
        max-width: 25%;
    }

    .col-sm-4 {
        -webkit-box-flex: 0;
            -ms-flex: 0 0 33.33333333%;
                flex: 0 0 33.33333333%;
        max-width: 33.33333333%;
    }

    .col-sm-5 {
        -webkit-box-flex: 0;
            -ms-flex: 0 0 41.66666667%;
                flex: 0 0 41.66666667%;
        max-width: 41.66666667%;
    }

    .col-sm-6 {
        -webkit-box-flex: 0;
            -ms-flex: 0 0 50%;
                flex: 0 0 50%;
        max-width: 50%;
    }

    .col-sm-7 {
        -webkit-box-flex: 0;
            -ms-flex: 0 0 58.33333333%;
                flex: 0 0 58.33333333%;
        max-width: 58.33333333%;
    }

    .col-sm-8 {
        -webkit-box-flex: 0;
            -ms-flex: 0 0 66.66666667%;
                flex: 0 0 66.66666667%;
        max-width: 66.66666667%;
    }

    .col-sm-9 {
        -webkit-box-flex: 0;
            -ms-flex: 0 0 75%;
                flex: 0 0 75%;
        max-width: 75%;
    }

    .col-sm-10 {
        -webkit-box-flex: 0;
            -ms-flex: 0 0 83.33333333%;
                flex: 0 0 83.33333333%;
        max-width: 83.33333333%;
    }

    .col-sm-11 {
        -webkit-box-flex: 0;
            -ms-flex: 0 0 91.66666667%;
                flex: 0 0 91.66666667%;
        max-width: 91.66666667%;
    }

    .col-sm-12 {
        -webkit-box-flex: 0;
            -ms-flex: 0 0 100%;
                flex: 0 0 100%;
        max-width: 100%;
    }


    .offset-sm-0 {
        margin-left: 0;
    }

    .offset-sm-1 {
        margin-left: 8.33333333%;
    }

    .offset-sm-2 {
        margin-left: 16.66666667%;
    }

    .offset-sm-3 {
        margin-left: 25%;
    }

    .offset-sm-4 {
        margin-left: 33.33333333%;
    }

    .offset-sm-5 {
        margin-left: 41.66666667%;
    }

    .offset-sm-6 {
        margin-left: 50%;
    }

    .offset-sm-7 {
        margin-left: 58.33333333%;
    }

    .offset-sm-8 {
        margin-left: 66.66666667%;
    }

    .offset-sm-9 {
        margin-left: 75%;
    }

    .offset-sm-10 {
        margin-left: 83.33333333%;
    }

    .offset-sm-11 {
        margin-left: 91.66666667%;
    }
    }

    @media (min-width: 768px) {
    .col-md {
        -ms-flex-preferred-size: 0;
            flex-basis: 0;
        -webkit-box-flex: 1;
            -ms-flex-positive: 1;
                flex-grow: 1;
        max-width: 100%;
    }

    .col-md-auto {
        -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
                flex: 0 0 auto;
        width: auto;
        max-width: none;
    }

    .col-md-1 {
        -webkit-box-flex: 0;
            -ms-flex: 0 0 8.33333333%;
                flex: 0 0 8.33333333%;
        max-width: 8.33333333%;
    }

    .col-md-2 {
        -webkit-box-flex: 0;
            -ms-flex: 0 0 16.66666667%;
                flex: 0 0 16.66666667%;
        max-width: 16.66666667%;
    }

    .col-md-3 {
        -webkit-box-flex: 0;
            -ms-flex: 0 0 25%;
                flex: 0 0 25%;
        max-width: 25%;
    }

    .col-md-4 {
        -webkit-box-flex: 0;
            -ms-flex: 0 0 33.33333333%;
                flex: 0 0 33.33333333%;
        max-width: 33.33333333%;
    }

    .col-md-5 {
        -webkit-box-flex: 0;
            -ms-flex: 0 0 41.66666667%;
                flex: 0 0 41.66666667%;
        max-width: 41.66666667%;
    }

    .col-md-6 {
        -webkit-box-flex: 0;
            -ms-flex: 0 0 50%;
                flex: 0 0 50%;
        max-width: 50%;
    }

    .col-md-7 {
        -webkit-box-flex: 0;
            -ms-flex: 0 0 58.33333333%;
                flex: 0 0 58.33333333%;
        max-width: 58.33333333%;
    }

    .col-md-8 {
        -webkit-box-flex: 0;
            -ms-flex: 0 0 66.66666667%;
                flex: 0 0 66.66666667%;
        max-width: 66.66666667%;
    }

    .col-md-9 {
        -webkit-box-flex: 0;
            -ms-flex: 0 0 75%;
                flex: 0 0 75%;
        max-width: 75%;
    }

    .col-md-10 {
        -webkit-box-flex: 0;
            -ms-flex: 0 0 83.33333333%;
                flex: 0 0 83.33333333%;
        max-width: 83.33333333%;
    }

    .col-md-11 {
        -webkit-box-flex: 0;
            -ms-flex: 0 0 91.66666667%;
                flex: 0 0 91.66666667%;
        max-width: 91.66666667%;
    }

    .col-md-12 {
        -webkit-box-flex: 0;
            -ms-flex: 0 0 100%;
                flex: 0 0 100%;
        max-width: 100%;
    }

    .offset-md-0 {
        margin-left: 0;
    }

    .offset-md-1 {
        margin-left: 8.33333333%;
    }

    .offset-md-2 {
        margin-left: 16.66666667%;
    }

    .offset-md-3 {
        margin-left: 25%;
    }

    .offset-md-4 {
        margin-left: 33.33333333%;
    }

    .offset-md-5 {
        margin-left: 41.66666667%;
    }

    .offset-md-6 {
        margin-left: 50%;
    }

    .offset-md-7 {
        margin-left: 58.33333333%;
    }

    .offset-md-8 {
        margin-left: 66.66666667%;
    }

    .offset-md-9 {
        margin-left: 75%;
    }

    .offset-md-10 {
        margin-left: 83.33333333%;
    }

    .offset-md-11 {
        margin-left: 91.66666667%;
    }
    }

    @media (min-width: 992px) {
    .col-lg {
        -ms-flex-preferred-size: 0;
            flex-basis: 0;
        -webkit-box-flex: 1;
            -ms-flex-positive: 1;
                flex-grow: 1;
        max-width: 100%;
    }

    .col-lg-auto {
        -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
                flex: 0 0 auto;
        width: auto;
        max-width: none;
    }

    .col-lg-1 {
        -webkit-box-flex: 0;
            -ms-flex: 0 0 8.33333333%;
                flex: 0 0 8.33333333%;
        max-width: 8.33333333%;
    }

    .col-lg-2 {
        -webkit-box-flex: 0;
            -ms-flex: 0 0 16.66666667%;
                flex: 0 0 16.66666667%;
        max-width: 16.66666667%;
    }

    .col-lg-3 {
        -webkit-box-flex: 0;
            -ms-flex: 0 0 25%;
                flex: 0 0 25%;
        max-width: 25%;
    }

    .col-lg-4 {
        -webkit-box-flex: 0;
            -ms-flex: 0 0 33.33333333%;
                flex: 0 0 33.33333333%;
        max-width: 33.33333333%;
    }

    .col-lg-5 {
        -webkit-box-flex: 0;
            -ms-flex: 0 0 41.66666667%;
                flex: 0 0 41.66666667%;
        max-width: 41.66666667%;
    }

    .col-lg-6 {
        -webkit-box-flex: 0;
            -ms-flex: 0 0 50%;
                flex: 0 0 50%;
        max-width: 50%;
    }

    .col-lg-7 {
        -webkit-box-flex: 0;
            -ms-flex: 0 0 58.33333333%;
                flex: 0 0 58.33333333%;
        max-width: 58.33333333%;
    }

    .col-lg-8 {
        -webkit-box-flex: 0;
            -ms-flex: 0 0 66.66666667%;
                flex: 0 0 66.66666667%;
        max-width: 66.66666667%;
    }

    .col-lg-9 {
        -webkit-box-flex: 0;
            -ms-flex: 0 0 75%;
                flex: 0 0 75%;
        max-width: 75%;
    }

    .col-lg-10 {
        -webkit-box-flex: 0;
            -ms-flex: 0 0 83.33333333%;
                flex: 0 0 83.33333333%;
        max-width: 83.33333333%;
    }

    .col-lg-11 {
        -webkit-box-flex: 0;
            -ms-flex: 0 0 91.66666667%;
                flex: 0 0 91.66666667%;
        max-width: 91.66666667%;
    }

    .col-lg-12 {
        -webkit-box-flex: 0;
            -ms-flex: 0 0 100%;
                flex: 0 0 100%;
        max-width: 100%;
    }

    .offset-lg-0 {
        margin-left: 0;
    }

    .offset-lg-1 {
        margin-left: 8.33333333%;
    }

    .offset-lg-2 {
        margin-left: 16.66666667%;
    }

    .offset-lg-3 {
        margin-left: 25%;
    }

    .offset-lg-4 {
        margin-left: 33.33333333%;
    }

    .offset-lg-5 {
        margin-left: 41.66666667%;
    }

    .offset-lg-6 {
        margin-left: 50%;
    }

    .offset-lg-7 {
        margin-left: 58.33333333%;
    }

    .offset-lg-8 {
        margin-left: 66.66666667%;
    }

    .offset-lg-9 {
        margin-left: 75%;
    }

    .offset-lg-10 {
        margin-left: 83.33333333%;
    }

    .offset-lg-11 {
        margin-left: 91.66666667%;
    }
    }

    @media (min-width: 1200px) {
    .col-xl {
        -ms-flex-preferred-size: 0;
            flex-basis: 0;
        -webkit-box-flex: 1;
            -ms-flex-positive: 1;
                flex-grow: 1;
        max-width: 100%;
    }

    .col-xl-auto {
        -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
                flex: 0 0 auto;
        width: auto;
        max-width: none;
    }

    .col-xl-1 {
        -webkit-box-flex: 0;
            -ms-flex: 0 0 8.33333333%;
                flex: 0 0 8.33333333%;
        max-width: 8.33333333%;
    }

    .col-xl-2 {
        -webkit-box-flex: 0;
            -ms-flex: 0 0 16.66666667%;
                flex: 0 0 16.66666667%;
        max-width: 16.66666667%;
    }

    .col-xl-3 {
        -webkit-box-flex: 0;
            -ms-flex: 0 0 25%;
                flex: 0 0 25%;
        max-width: 25%;
    }

    .col-xl-4 {
        -webkit-box-flex: 0;
            -ms-flex: 0 0 33.33333333%;
                flex: 0 0 33.33333333%;
        max-width: 33.33333333%;
    }

    .col-xl-5 {
        -webkit-box-flex: 0;
            -ms-flex: 0 0 41.66666667%;
                flex: 0 0 41.66666667%;
        max-width: 41.66666667%;
    }

    .col-xl-6 {
        -webkit-box-flex: 0;
            -ms-flex: 0 0 50%;
                flex: 0 0 50%;
        max-width: 50%;
    }

    .col-xl-7 {
        -webkit-box-flex: 0;
            -ms-flex: 0 0 58.33333333%;
                flex: 0 0 58.33333333%;
        max-width: 58.33333333%;
    }

    .col-xl-8 {
        -webkit-box-flex: 0;
            -ms-flex: 0 0 66.66666667%;
                flex: 0 0 66.66666667%;
        max-width: 66.66666667%;
    }

    .col-xl-9 {
        -webkit-box-flex: 0;
            -ms-flex: 0 0 75%;
                flex: 0 0 75%;
        max-width: 75%;
    }

    .col-xl-10 {
        -webkit-box-flex: 0;
            -ms-flex: 0 0 83.33333333%;
                flex: 0 0 83.33333333%;
        max-width: 83.33333333%;
    }

    .col-xl-11 {
        -webkit-box-flex: 0;
            -ms-flex: 0 0 91.66666667%;
                flex: 0 0 91.66666667%;
        max-width: 91.66666667%;
    }

    .col-xl-12 {
        -webkit-box-flex: 0;
            -ms-flex: 0 0 100%;
                flex: 0 0 100%;
        max-width: 100%;
    }


    .offset-xl-0 {
        margin-left: 0;
    }

    .offset-xl-1 {
        margin-left: 8.33333333%;
    }

    .offset-xl-2 {
        margin-left: 16.66666667%;
    }

    .offset-xl-3 {
        margin-left: 25%;
    }

    .offset-xl-4 {
        margin-left: 33.33333333%;
    }

    .offset-xl-5 {
        margin-left: 41.66666667%;
    }

    .offset-xl-6 {
        margin-left: 50%;
    }

    .offset-xl-7 {
        margin-left: 58.33333333%;
    }

    .offset-xl-8 {
        margin-left: 66.66666667%;
    }

    .offset-xl-9 {
        margin-left: 75%;
    }

    .offset-xl-10 {
        margin-left: 83.33333333%;
    }

    .offset-xl-11 {
        margin-left: 91.66666667%;
    }
    }

    .text-justify {
    text-align: justify !important;
    }

    .text-nowrap {
    white-space: nowrap !important;
    }

    .text-left {
    text-align: left !important;
    }

    .text-right {
    text-align: right !important;
    }

    .text-center {
    text-align: center !important;
    }


    .text-hide {
    font: 0/0 a;
    color: transparent;
    text-shadow: none;
    background-color: transparent;
    border: 0;
    }


    @media print {
    *,
    *::before,
    *::after {
        text-shadow: none !important;
        -webkit-box-shadow: none !important;
                box-shadow: none !important;
    }

    a:not(.btn) {
        text-decoration: underline;
    }

    abbr[title]::after {
        content: " (" attr(title) ")";
    }

    pre {
        white-space: pre-wrap !important;
    }

    pre,
    blockquote {
        border: 1px solid #adb5bd;
        page-break-inside: avoid;
    }

    thead {
        display: table-header-group;
    }

    tr,
    img {
        page-break-inside: avoid;
    }

    p,
    h2,
    h3 {
        orphans: 3;
        widows: 3;
    }

    h2,
    h3 {
        page-break-after: avoid;
    }

    @page {
        size: a3;
    }

    body {
        min-width: 992px !important;
    }

    .container {
        min-width: 992px !important;
    }

    .navbar {
        display: none;
    }

    .badge {
        border: 1px solid #000;
    }

    }

    /*!
    *  Font Awesome 4.7.0 by @davegandy - http://fontawesome.io - @fontawesome
    *  License - http://fontawesome.io/license (Font: SIL OFL 1.1, CSS: MIT License)
    */

    /* FONT PATH
    * -------------------------- */

</style>
<body>
    @php
        $Anio = date("Y");
    @endphp
    <div class="container-fluid">
        <div class="row">
            <table>
                <tr>
                    <td><img src="img/logoPRE.png" height="90" width="100" alt="" srcset=""></td>
                    <td width="110">&nbsp;</td>
                    <td><b>BOLETA DE INFORMACIÓN</b></td>
                </tr>
                
            </table>
        </div>
        <div class="row">
            <table style="font-size: 9px">
                <tr>
                    <td>DRE: </td>
                    <td><b>UCAYALI</b></td>
                    <td width="20">&nbsp;</td>
                    <td>UGEL:</td>
                    <td><b>CORONEL PORTILLO</b></td>
                    <td>LUGAR:</td>
                    <td><b>PUCALLPA</b></td>
                </tr>
                <tr>
                    <td colspan="2">INSTITUCIÓN EDUCATIVA: </td>
                    <td colspan="6"><b>I.E.P. LA PERSEVERANCIA, RESPONSABILIDAD Y EDUCACIÓN - "LA PRE"</b></td>
                </tr>
                <tr>
                    <td colspan="2">NIVEL EDUCATIVO: </td>
                    <td><b>
                        @if (isset($dato->Nivel))
                            {{$dato->Nivel}}
                        @endif
                        </b></td>
                    <td width="20">&nbsp;</td>
                    <td colspan="2">CÓDIGO MODULAR DE LA I.E.P "LA PRE": </td>
                    <td colspan="2"><b>N° 1722693</b></td>
                </tr>
                <tr>
                    <td colspan="2">ALUMNO: </td>
                    <td colspan="6"><b>
                        @if (isset($dato->alumno))
                            {{$dato->alumno}}
                        @endif
                    </b></td>
                </tr>
                <tr>
                    <td colspan="2">GRADO: </td>
                    <td colspan="2"><b>
                        @if (isset($dato->grado))
                            {{$dato->grado}}
                        @endif
                    </b></td>
                    <td class="text-right">SECCIÓN: </td>
                    <td colspan="2"><b>
                        @if (isset($dato->seccion))
                            {{$dato->seccion}}
                        @endif
                    </b></td>
                </tr>
                <tr>
                    <td colspan="2">TUTOR: </td>
                    <td colspan="6"><b>NOMBRETUTOR</b></td>
                </tr>
                <tr>
                    <td colspan="2">DIRECTOR: </td>
                    <td colspan="6"><b>GONZALES MUÑOZ, MANUEL ENRIQUE</b></td>
                </tr>
            </table>
        </div>   
        <div class="row" style="font-size: 10px">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center">AÑO - {{$Anio}}</div>
        </div>
        <div class="row">
            <table border="1" cellpadding="0" cellspacing="0" class="text-center" style="font-size: 9px">
                <tr>
                    <td rowspan="2" width="90"><b>AREA</b></td>
                    <td rowspan="2" width="180"><b>CRITERIO DE EVALUACIÓN</b></td>
                    <td colspan="4" width="70"><b>BIMESTRE</b></td>
                    <td rowspan="2" width="35"><b>PROM <br> NUM.</b></td>
                    <td rowspan="2" width="35"><b>PROM. <br> LIT.</b></td>
                    <td rowspan="2" width="35"><b>EVAL  <br> RECUP.</b></td>
                </tr>
                <tr>
                    <td><b>I</b></td>
                    <td><b>II</b></td>
                    <td><b>III</b></td>
                    <td><b>IV</b></td>
                </tr>
                <tr>
                    <td rowspan="4"><b>MATEMÁTICA</b></td>
                    <td class="text-left">Comp. del Sentido Numérico y Opera.</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td rowspan="4"></td>
                    <td rowspan="4"></td>
                    <td rowspan="4"></td>
                </tr>
                <tr>
                    <td class="text-left">Comp. De las Relac. Espac. y geométricas</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                </tr>
                <tr>
                    <td class="text-left">Organización de datos</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                </tr>
                <tr>
                    <td class="text-left"><b>PROM.</b></td>
                    <td><b>{{"12"}}</b></td>
                    <td><b>{{"12"}}</b></td>
                    <td><b>{{"12"}}</b></td>
                    <td><b>{{"12"}}</b></td>
                </tr>
                <tr>
                    <td rowspan="4"><b>COMUNICACIÓN</b></td>
                    <td class="text-left">Expresión y Comprensión Oral</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td rowspan="4"></td>
                    <td rowspan="4"></td>
                    <td rowspan="4"></td>
                </tr>
                <tr>
                    <td class="text-left">Comprensión de textos</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                </tr>
                <tr>
                    <td class="text-left">Producción de Textos</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                </tr>
                <tr>
                    <td class="text-left"><b>PROM.</b></td>
                    <td><b>{{"12"}}</b></td>
                    <td><b>{{"12"}}</b></td>
                    <td><b>{{"12"}}</b></td>
                    <td><b>{{"12"}}</b></td>
                </tr>
                <tr>
                    <td rowspan="4"><b>INGLÉS</b></td>
                    <td class="text-left">Expresión y Comprensión Oral</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td rowspan="4"></td>
                    <td rowspan="4"></td>
                    <td rowspan="4"></td>
                </tr>
                <tr>
                    <td class="text-left">Comprensión de textos</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                </tr>
                <tr>
                    <td class="text-left">Producción de Textos</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                </tr>
                <tr>
                    <td class="text-left"><b>PROM.</b></td>
                    <td><b>{{"12"}}</b></td>
                    <td><b>{{"12"}}</b></td>
                    <td><b>{{"12"}}</b></td>
                    <td><b>{{"12"}}</b></td>
                </tr>
                <tr>
                    <td rowspan="3"><b>ARTE</b></td>
                    <td class="text-left">Expresión Artística</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td rowspan="3"></td>
                    <td rowspan="3"></td>
                    <td rowspan="3"></td>
                </tr>
                <tr>
                    <td class="text-left">Apreciación Artística</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                </tr>
                <tr>
                    <td class="text-left"><b>PROM.</b></td>
                    <td><b>{{"12"}}</b></td>
                    <td><b>{{"12"}}</b></td>
                    <td><b>{{"12"}}</b></td>
                    <td><b>{{"12"}}</b></td>
                </tr>
                <tr>
                    <td rowspan="4"><b>PERSONAL SOCIAL</b></td>
                    <td class="text-left">Const. Ident. Y de Conv. Democ.</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td rowspan="4"></td>
                    <td rowspan="4"></td>
                    <td rowspan="4"></td>
                </tr>
                <tr>
                    <td class="text-left">Comp. de la Diver. Geográfica</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                </tr>
                <tr>
                    <td class="text-left">Compren. Proces. Históricos</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                </tr>
                <tr>
                    <td class="text-left"><b>PROM.</b></td>
                    <td><b>{{"12"}}</b></td>
                    <td><b>{{"12"}}</b></td>
                    <td><b>{{"12"}}</b></td>
                    <td><b>{{"12"}}</b></td>
                </tr>
                <tr>
                    <td rowspan="4"><b>EDUCACIÓN FÍSICA</b></td>
                    <td class="text-left">Compren. Y des. de la Corp. y la Salud</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td rowspan="4"></td>
                    <td rowspan="4"></td>
                    <td rowspan="4"></td>
                </tr>
                <tr>
                    <td class="text-left">Dominio corporal y expresión creativa</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                </tr>
                <tr>
                    <td class="text-left">Convivencia e interacción sociomotriz</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                </tr>
                <tr>
                    <td class="text-left"><b>PROM.</b></td>
                    <td><b>{{"12"}}</b></td>
                    <td><b>{{"12"}}</b></td>
                    <td><b>{{"12"}}</b></td>
                    <td><b>{{"12"}}</b></td>
                </tr>
                <tr>
                    <td rowspan="3"><b>EDUCACIÓN RELIGIOSA</b></td>
                    <td class="text-left">Com. Doctrinal crist./Formac. de la conc. moral crist.</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td rowspan="3"></td>
                    <td rowspan="3"></td>
                    <td rowspan="3"></td>
                </tr>
                <tr>
                    <td class="text-left">Discernimiento de fé/Testimonio de vida</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                </tr>
                <tr>
                    <td class="text-left"><b>PROM.</b></td>
                    <td><b>{{"12"}}</b></td>
                    <td><b>{{"12"}}</b></td>
                    <td><b>{{"12"}}</b></td>
                    <td><b>{{"12"}}</b></td>
                </tr>
                <tr>
                    <td rowspan="4"><b>CIENCIA Y AMBIENTE</b></td>
                    <td class="text-left">Comp. Cuerpo H. y de la salud</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td rowspan="4"></td>
                    <td rowspan="4"></td>
                    <td rowspan="4"></td>
                </tr>
                <tr>
                    <td class="text-left">Comp. Seres vivos y cons. M.Amb.</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                </tr>
                <tr>
                    <td class="text-left">Cons. mundo fis. Y cons. M. Amb.</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                </tr>
                <tr>
                    <td class="text-left"><b>PROM.</b></td>
                    <td><b>{{"12"}}</b></td>
                    <td><b>{{"12"}}</b></td>
                    <td><b>{{"12"}}</b></td>
                    <td><b>{{"12"}}</b></td>
                </tr>
            </table>
        </div>
        <div class="row">&nbsp;</div>
        <div class="row">
            <table  border="1" cellpadding="0" cellspacing="0" style="font-size:9px;text-align:center">
                <tr>
                    <td width="271" height="15" style="background-color: #adb5bd"><b>COMPORTAMIENTO</b></td>
                    <td width="17"><b>{{"12"}}</b></td>
                    <td width="17"><b>{{"12"}}</b></td>
                    <td width="16"><b>{{"12"}}</b></td>
                    <td width="17"><b>{{"12"}}</b></td>
                    <td width="107" style="background-color: #adb5bd">&nbsp;</td>
                </tr>
            </table>
        </div>    
        <div class="row">&nbsp;</div>
        <div class="row">
            <table  border="1" cellpadding="0" cellspacing="0" style="font-size:9px;text-align:center">
                <tr>
                    <td class="fondo" width="271" height="30"><b>SITUACIÓN FINAL DEL ESTUDIANTE</b></td>
                    
                    <td class="fondo" width="70">
                        <b>Marque con una X <br> lo que corresponda</b>
                    </td>
                    <td class="fondo" width="107">
                        <b>Área o áreas que pasan al <br> proceso de recuperación</b>
                    </td>
                </tr>
                <tr>
                    <td  height="25"><b>APROBADO</b></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td  height="25"><b>REQUIERE RECUPERACIÓN</b></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td  height="25">DESAPROBADO</td>
                    <td></td>
                    <td></td>
                </tr>
              
            </table>
        </div>
    </div>
</body>
</html>
