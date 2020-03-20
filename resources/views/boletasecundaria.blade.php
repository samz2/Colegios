<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Boleta de notas</title>
</head>
<style>
    .verticalText {
    writing-mode: vertical-lr;
    transform: rotate(270deg);
    }
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
            <table class="text-center">
                <tr>
                    <td width="30" rowspan="2">&nbsp;</td>
                    <td rowspan="2"><img src="img/escudo.png" height="100" width="100" alt="" srcset=""></td>
                    <td width="110"><b>BOLETA DE INFORMACIÓN {{$Anio}}</b></td>
                    <td rowspan="2"><img src="img/logo1.png" height="100" width="100" alt="" srcset=""></td>
                </tr>
                <tr>
                    <td>
                        <table border="1" cellpadding="0" cellspacing="0" style="font-size: 10px;">
                            <tr>
                                <td width="30" style="background-color: #adb5bd"><b>DRE: </b></td>
                                <td class="text-left"><small style="color:white">a</small><b>UCAYALI</b></td>
                                <td style="background-color: #adb5bd"><b>CÓDIGO: </b></td>
                                <td class="text-left"><b><small style="color:white">a</small>N° 1693225</b></td>
                            </tr>
                            <tr>
                                <td style="background-color: #adb5bd"><b>I.E.P: </b></td>
                                <td colspan="3"><b> PERSEVERANCIA, RESPONSABILIDAD Y EDUCACIÓN (LA PRE)</b><small style="color:white">aaaaaaaaaa</small></td>
                            </tr>
                            <tr>
                                <td rowspan="2" style="background-color: #adb5bd"><b>NIVEL: </b></td>
                                <td rowspan="2"><b>
                                    @if (isset($dato->Nivel))
                                        {{$dato->Nivel}}
                                    @endif
                                    </b>
                                </td>
                                <td style="background-color: #adb5bd"><b>GRADO: </b></td>
                                <td class="text-left"><b><small style="color:white">a</small>
                                    @if (isset($dato->grado))
                                        {{$dato->grado}}
                                    @endif
                                </b></td>
                            </tr> 
                            <tr>
                                <td style="background-color: #adb5bd"><b>SECCIÓN: </b></td>
                                <td class="text-left"><b><small style="color:white">a</small>
                                    @if (isset($dato->seccion))
                                        {{$dato->seccion}}
                                    @endif
                                </b></td>
                            </tr>
                            <tr class="text-left">
                                <td colspan="2"  style="background-color: #adb5bd"><b>Código del Estudiante: </b></td>
                                <td colspan="2" class="text-left"><b><small style="color:white">a</small>
                                    @if (isset($dato->DNI))
                                        {{$dato->DNI}}
                                    @endif
                                </b></td>
                            </tr>
                            <tr class="text-left">
                                <td colspan="2"  style="background-color: #adb5bd"><b>Apellidos y Nombres: </b></td>
                                <td colspan="2" class="text-left"><b><small style="color:white">a</small>
                                    @if (isset($dato->alumno))
                                        {{$dato->alumno}}
                                    @endif
                                </b></td>
                            </tr>        
                        </table>
                    </td>
                </tr>
            </table>
        </div>
       <div class="row">
           &nbsp;
       </div>
        <div class="row">
            <table border="1" cellpadding="0" cellspacing="0" class="text-center" style="font-size: 9px">
                <tr>
                    <td rowspan="2" colspan="2" width="90" style="background-color: #adb5bd"><b>AREA</b></td>
                    <td rowspan="2" width="160" class="fondo"><b>LOGROS DE APRENDIZAJE</b></td>
                    <td colspan="4" width="70" class="fondo"><b>BIMESTRE</b></td>
                    <td rowspan="2" width="30" class="fondo" style="font-size: 9px"><b>PROM.<br>PARCIAL.</b></td>
                    <td rowspan="2" width="30" class="fondo" style="font-size: 9px"><b>PROM.<br>FINAL.</b></td>
                    <td rowspan="2" width="30" class="fondo" style="font-size: 9px"><b>EVAL<br>RECUP.</b></td>
                </tr>
                <tr>
                    <td><b>1</b></td>
                    <td><b>2</b></td>
                    <td><b>3</b></td>
                    <td><b>4</b></td>
                </tr>
                <tr>
                    <td rowspan="25" class="fondo" width="50" style="font-size: 10px"><p class="verticalText"><b>MATEMÁTICAS</b></p></td>
                    <td class="text-center fondo" rowspan="5"><p class="verticalText"><b>ARITMÉTICA</b></p></td>
                    <td class="text-left">Piensa matemáticamente situaciones de cantidad.</td>
                    <td>{{"12"}}</td>1
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td rowspan="5" style="font-size: 16px">12</td>
                    <td rowspan="25" style="font-size: 16px">12</td>
                    <td rowspan="25" style="font-size: 16px"></td>
                </tr>
                <tr>
                    <td class="text-left">Piensa matemáticamente situaciones de regularidad.</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                </tr>
                <tr>
                    <td class="text-left">Piensa matemáticamente situaciones de forma y mov.</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                </tr>
                <tr>
                    <td class="text-left">Piensa matemáticamente situaciones de gestión.</td>
                    <td><b>{{"12"}}</b></td>
                    <td><b>{{"12"}}</b></td>
                    <td><b>{{"12"}}</b></td>
                    <td><b>{{"12"}}</b></td>
                </tr>
                <tr>
                    <td class="text-left"><b>PROMEDIO</b></td>
                    <td><b>{{"12"}}</b></td>
                    <td><b>{{"12"}}</b></td>
                    <td><b>{{"12"}}</b></td>
                    <td><b>{{"12"}}</b></td>
                </tr>
                <tr>
                    <td class="text-center fondo" rowspan="5"><p class="verticalText"><b>ÁLGEBRA</b></p></td>
                    <td class="text-left">Piensa matemáticamente situaciones de cantidad.</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td rowspan="5"></td>
                </tr>
                <tr>
                    <td class="text-left">Piensa matemáticamente situaciones de regularidad.</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                </tr>
                <tr>
                    <td class="text-left">Piensa matemáticamente situaciones de forma y mov.</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                </tr>
                <tr>
                    <td class="text-left">Piensa matemáticamente situaciones de gestión.</td>
                    <td><b>{{"12"}}</b></td>
                    <td><b>{{"12"}}</b></td>
                    <td><b>{{"12"}}</b></td>
                    <td><b>{{"12"}}</b></td>
                </tr>
                <tr>
                    <td class="text-left"><b>PROMEDIO</b></td>
                    <td><b>{{"12"}}</b></td>
                    <td><b>{{"12"}}</b></td>
                    <td><b>{{"12"}}</b></td>
                    <td><b>{{"12"}}</b></td>
                </tr>
                <tr>
                    <td class="text-center fondo" rowspan="5"><p class="verticalText"><b>GEOMETRÍA</b></p></td>
                    <td class="text-left">Piensa matemáticamente situaciones de cantidad.</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td rowspan="5"></td>
                </tr>
                <tr>
                    <td class="text-left">Piensa matemáticamente situaciones de regularidad.</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                </tr>
                <tr>
                    <td class="text-left">Piensa matemáticamente situaciones de forma y mov.</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                </tr>
                <tr>
                    <td class="text-left">Piensa matemáticamente situaciones de gestión.</td>
                    <td><b>{{"12"}}</b></td>
                    <td><b>{{"12"}}</b></td>
                    <td><b>{{"12"}}</b></td>
                    <td><b>{{"12"}}</b></td>
                </tr>
                <tr>
                    <td class="text-left"><b>PROMEDIO</b></td>
                    <td><b>{{"12"}}</b></td>
                    <td><b>{{"12"}}</b></td>
                    <td><b>{{"12"}}</b></td>
                    <td><b>{{"12"}}</b></td>
                </tr>
                <tr>
                    <td class="text-center fondo" rowspan="5"><p class="verticalText"><b>TRIGONOMETRÍA</b></p></td>
                    <td class="text-left">Piensa matemáticamente situaciones de cantidad.</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td rowspan="5"></td>
                </tr>
                <tr>
                    <td class="text-left">Piensa matemáticamente situaciones de regularidad.</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                </tr>
                <tr>
                    <td class="text-left">Piensa matemáticamente situaciones de forma y mov.</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                </tr>
                <tr>
                    <td class="text-left">Piensa matemáticamente situaciones de gestión.</td>
                    <td><b>{{"12"}}</b></td>
                    <td><b>{{"12"}}</b></td>
                    <td><b>{{"12"}}</b></td>
                    <td><b>{{"12"}}</b></td>
                </tr>
                <tr>
                    <td class="text-left"><b>PROMEDIO</b></td>
                    <td><b>{{"12"}}</b></td>
                    <td><b>{{"12"}}</b></td>
                    <td><b>{{"12"}}</b></td>
                    <td><b>{{"12"}}</b></td>
                </tr>
                <tr>
                    <td class="text-center fondo" rowspan="5"><p class="verticalText"><b>RAZ.<br>MATEMÁTICO</b></p></td>
                    <td class="text-left">Piensa matemáticamente situaciones de cantidad.</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td rowspan="5"></td>
                </tr>
                <tr>
                    <td class="text-left">Piensa matemáticamente situaciones de regularidad.</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                </tr>
                <tr>
                    <td class="text-left">Piensa matemáticamente situaciones de forma y mov.</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                </tr>
                <tr>
                    <td class="text-left">Piensa matemáticamente situaciones de gestión.</td>
                    <td><b>{{"12"}}</b></td>
                    <td><b>{{"12"}}</b></td>
                    <td><b>{{"12"}}</b></td>
                    <td><b>{{"12"}}</b></td>
                </tr>
                <tr>
                    <td class="text-left"><b>PROMEDIO</b></td>
                    <td><b>{{"12"}}</b></td>
                    <td><b>{{"12"}}</b></td>
                    <td><b>{{"12"}}</b></td>
                    <td><b>{{"12"}}</b></td>
                </tr>
                <tr>
                    <td rowspan="20"  class="fondo"  style="font-size: 10px"><p class="verticalText"><b>COMUNICACIÓN</b></p></td>
                    <td class="text-center fondo" rowspan="5"><p class="verticalText"><b>RAZ. <br> VERBAL</b></p></td>
                    <td class="text-left">Comprende textos orales</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td rowspan="5" style="font-size: 16px">12</td>
                    <td rowspan="20" style="font-size: 16px">12</td>
                    <td rowspan="20" style="font-size: 16px"></td>
                </tr>
                <tr>
                    <td class="text-left">Se expresa oralmente</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                </tr>
                <tr>
                    <td class="text-left">Comprende textos escritos</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                </tr>
                <tr>
                    <td class="text-left">Produce textos</td>
                    <td><b>{{"12"}}</b></td>
                    <td><b>{{"12"}}</b></td>
                    <td><b>{{"12"}}</b></td>
                    <td><b>{{"12"}}</b></td>
                </tr>
                <tr>
                    <td class="text-left"><b>PROMEDIO</b></td>
                    <td><b>{{"12"}}</b></td>
                    <td><b>{{"12"}}</b></td>
                    <td><b>{{"12"}}</b></td>
                    <td><b>{{"12"}}</b></td>
                </tr>
                <tr>
                    <td class="text-center fondo" rowspan="5"><p class="verticalText"><b>PLAN <br> LECTOR</b></p></td>
                    <td class="text-left">Comprende textos orales</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td rowspan="5"></td>
                </tr>
                <tr>
                    <td class="text-left">Se expresa oralmente</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                </tr>
                <tr>
                    <td class="text-left">Comprende textos escritos</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                </tr>
                <tr>
                    <td class="text-left">Produce textos</td>
                    <td><b>{{"12"}}</b></td>
                    <td><b>{{"12"}}</b></td>
                    <td><b>{{"12"}}</b></td>
                    <td><b>{{"12"}}</b></td>
                </tr>
                <tr>
                    <td class="text-left"><b>PROMEDIO</b></td>
                    <td><b>{{"12"}}</b></td>
                    <td><b>{{"12"}}</b></td>
                    <td><b>{{"12"}}</b></td>
                    <td><b>{{"12"}}</b></td>
                </tr>
                <tr>
                    <td class="text-center fondo" rowspan="5"><p class="verticalText"><b>LENGUAJE</b></p></td>
                    <td class="text-left">Comprende textos orales</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td rowspan="5"></td>
                </tr>
                <tr>
                    <td class="text-left">Se expresa oralmente</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                </tr>
                <tr>
                    <td class="text-left">Comprende textos escritos</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                </tr>
                <tr>
                    <td class="text-left">Produce textos</td>
                    <td><b>{{"12"}}</b></td>
                    <td><b>{{"12"}}</b></td>
                    <td><b>{{"12"}}</b></td>
                    <td><b>{{"12"}}</b></td>
                </tr>
                <tr>
                    <td class="text-left"><b>PROMEDIO</b></td>
                    <td><b>{{"12"}}</b></td>
                    <td><b>{{"12"}}</b></td>
                    <td><b>{{"12"}}</b></td>
                    <td><b>{{"12"}}</b></td>
                </tr>
                <tr>
                    <td class="text-center fondo" rowspan="5"><p class="verticalText"><b>LITERATURA</b></p></td>
                    <td class="text-left">Comprende textos orales</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td rowspan="5"></td>
                </tr>
                <tr>
                    <td class="text-left">Se expresa oralmente</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                </tr>
                <tr>
                    <td class="text-left">Comprende textos escritos</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                </tr>
                <tr>
                    <td class="text-left">Produce textos</td>
                    <td><b>{{"12"}}</b></td>
                    <td><b>{{"12"}}</b></td>
                    <td><b>{{"12"}}</b></td>
                    <td><b>{{"12"}}</b></td>
                </tr>
                <tr>
                    <td class="text-left"><b>PROMEDIO</b></td>
                    <td><b>{{"12"}}</b></td>
                    <td><b>{{"12"}}</b></td>
                    <td><b>{{"12"}}</b></td>
                    <td><b>{{"12"}}</b></td>
                </tr>
                <tr>
                    <td class="fondo" colspan="2" rowspan="5"><b>INGLÉS</b></td>
                    <td class="text-left">Comprende textos orales</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td rowspan="5">{{"12"}}</td> <!-- promedio -->
                    <td rowspan="5">{{"12"}}</td>
                    <td rowspan="5">{{"12"}}</td>
                </tr>
                <tr>
                    <td class="text-left">Se expresa oralmente</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                </tr>
                <tr>
                    <td class="text-left">Comprende textos escritos</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                </tr>
                <tr>
                    <td class="text-left">Produce textos</td>
                    <td><b>{{"12"}}</b></td>
                    <td><b>{{"12"}}</b></td>
                    <td><b>{{"12"}}</b></td>
                    <td><b>{{"12"}}</b></td>
                </tr>
                <tr>
                    <td class="text-left"><b>PROMEDIO</b></td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                </tr>
                <tr>
                    <td class="fondo" colspan="2" rowspan="3"><b>ARTE</b></td>
                    <td class="text-left">Expresión artística</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td rowspan="3">{{"12"}}</td> <!-- promedio -->
                    <td rowspan="3">{{"12"}}</td>
                    <td rowspan="3">{{"12"}}</td>
                </tr>
                <tr>
                    <td class="text-left">Apreciación artística</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                </tr>
                <tr>
                    <td class="text-left"><b>PROMEDIO</b></td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                </tr>
                <tr>
                    <td class="fondo" rowspan="10"><p class="verticalText"><b>CIENCIAS SOCIALES</b></p></td>
                    <td class="text-center fondo" rowspan="5"><p class="verticalText"><b>HISTORIA</b></p></td>
                    <td class="text-left">Construye interpretaciones históricas</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td rowspan="5">{{"3"}}</td> <!-- promedio -->
                    <td rowspan="10">{{"12"}}</td>
                    <td rowspan="10">{{"12"}}</td>
                </tr>
                <tr>
                    <td class="text-left">Actua responsablemente en el ambiente</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                </tr>
                <tr>
                    <td class="text-left">Actua responsablemente respecto a los recursos econ.</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                </tr>
                <tr>
                    <td class="text-left">Participa en asuntos públicos promoviendo el bien común</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                </tr>
                <tr>
                    <td class="text-left"><b>PROMEDIO</b></td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                </tr>
                <tr>
                    <td class="text-center fondo" rowspan="5"><p class="verticalText"><b>GEOGRAFÍA</b></p></td>
                    <td class="text-left">Construye interpretaciones históricas</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td rowspan="5">{{"3"}}</td> <!-- promedio -->
                </tr>
                <tr>
                    <td class="text-left">Actua responsablemente en el ambiente</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                </tr>
                <tr>
                    <td class="text-left">Actua responsablemente respecto a los recursos econ.</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                </tr>
                <tr>
                    <td class="text-left">Participa en asuntos públicos promoviendo el bien común</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                </tr>
                <tr>
                    <td class="text-left"><b>PROMEDIO</b></td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                </tr>
                <tr>
                    <td class="fondo" colspan="2" rowspan="3"><b>FORMACIÓN<br> CIUDADANA <br>Y CÍVICA</b></td>
                    <td class="text-left">Convive respetándose a si mismo y a los demás</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td rowspan="3">{{"12"}}</td> <!-- promedio -->
                    <td rowspan="3">{{"12"}}</td>
                    <td rowspan="3">{{"12"}}</td>
                </tr>
                <tr>
                    <td class="text-left">participa en los asuntos públicos promoviendo el bien común</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                </tr>
                <tr>
                    <td class="text-left"><b>PROMEDIO</b></td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                </tr>
                <tr>
                    <td class="fondo" colspan="2" rowspan="4"><b>PERSONA<br>FAMILIA Y <br>RELACIONES<br> HUMANAS </b></td>
                    <td class="text-left">Afirma su identidad</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td rowspan="4">{{"12"}}</td> <!-- promedio -->
                    <td rowspan="4">{{"12"}}</td>
                    <td rowspan="4">{{"12"}}</td>
                </tr>
                <tr>
                    <td class="text-left">Construye su corporeidad</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                </tr>
                <tr>
                    <td class="text-left">Convive respetándose a si mismo y a los demás</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                </tr>
                <tr>
                    <td class="text-left"><b>PROMEDIO</b></td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                </tr>
                <tr>
                    <td class="fondo" colspan="2" rowspan="4"><b>EDUCACIÓN<br>FÍSICA </b></td>
                    <td class="text-left">Compren. y des. de la Corp. y la Salud</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td rowspan="4">{{"12"}}</td> <!-- promedio -->
                    <td rowspan="4">{{"12"}}</td>
                    <td rowspan="4">{{"12"}}</td>
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
                    <td class="text-left"><b>PROMEDIO</b></td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                </tr>
                <tr>
                    <td class="fondo" colspan="2" rowspan="3"><b>EDUCACIÓN <br>RELIGIOSA</b></td>
                    <td class="text-left">Comprensión doctrinal cristiana</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td rowspan="3">{{"12"}}</td> <!-- promedio -->
                    <td rowspan="3">{{"12"}}</td>
                    <td rowspan="3">{{"12"}}</td>
                </tr>
                <tr>
                    <td class="text-left">Dicernimiento de la fé</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                </tr>
                <tr>
                    <td class="text-left"><b>PROMEDIO</b></td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                </tr>
                <tr>
                    <td rowspan="15" class="fondo" style="font-size: 10px"><p class="verticalText"><b>CIENCIA <br>TECNOLOGÍA <br>Y AMBIENTE</b></p></td>
                    <td class="text-center fondo" rowspan="5"><p class="verticalText"><b>FÍSICA</b></p></td>
                    <td class="text-left">Indaga mediante métodos científicos</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td rowspan="5" style="font-size: 16px">12</td>
                    <td rowspan="15" style="font-size: 16px">12</td>
                    <td rowspan="15" style="font-size: 16px"></td>
                </tr>
                <tr>
                    <td class="text-left">Explica el mundo físico</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                </tr>
                <tr>
                    <td class="text-left">Diseña y produce prototipos tecnológicos</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                </tr>
                <tr>
                    <td class="text-left">Construye una posición crítica sobre la ciencia</td>
                    <td><b>{{"12"}}</b></td>
                    <td><b>{{"12"}}</b></td>
                    <td><b>{{"12"}}</b></td>
                    <td><b>{{"12"}}</b></td>
                </tr>
                <tr>
                    <td class="text-left"><b>PROMEDIO</b></td>
                    <td><b>{{"12"}}</b></td>
                    <td><b>{{"12"}}</b></td>
                    <td><b>{{"12"}}</b></td>
                    <td><b>{{"12"}}</b></td>
                </tr>
                <tr>
                    <td class="text-center fondo" rowspan="5"><p class="verticalText"><b>QUÍMICA</b></p></td>
                    <td class="text-left">Indaga mediante métodos científicos</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td rowspan="5"></td>
                </tr>
                <tr>
                    <td class="text-left">Explica el mundo físico</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                </tr>
                <tr>
                    <td class="text-left">Diseña y produce prototipos tecnológicos</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                </tr>
                <tr>
                    <td class="text-left">Construye una posición crítica sobre la ciencia</td>
                    <td><b>{{"12"}}</b></td>
                    <td><b>{{"12"}}</b></td>
                    <td><b>{{"12"}}</b></td>
                    <td><b>{{"12"}}</b></td>
                </tr>
                <tr>
                    <td class="text-left"><b>PROMEDIO</b></td>
                    <td><b>{{"12"}}</b></td>
                    <td><b>{{"12"}}</b></td>
                    <td><b>{{"12"}}</b></td>
                    <td><b>{{"12"}}</b></td>
                </tr>
                <tr>
                    <td class="text-center fondo" rowspan="5"><p class="verticalText"><b>BIOLOGÍA</b></p></td>
                    <td class="text-left">Indaga mediante métodos científicos</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td rowspan="5"></td>
                </tr>
                <tr>
                    <td class="text-left">Explica el mundo físico</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                </tr>
                <tr>
                    <td class="text-left">Diseña y produce prototipos tecnológicos</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                </tr>
                <tr>
                    <td class="text-left">Construye una posición crítica sobre la ciencia</td>
                    <td><b>{{"12"}}</b></td>
                    <td><b>{{"12"}}</b></td>
                    <td><b>{{"12"}}</b></td>
                    <td><b>{{"12"}}</b></td>
                </tr>
                <tr>
                    <td class="text-left"><b>PROMEDIO</b></td>
                    <td><b>{{"12"}}</b></td>
                    <td><b>{{"12"}}</b></td>
                    <td><b>{{"12"}}</b></td>
                    <td><b>{{"12"}}</b></td>
                </tr>
                <tr>
                    <td class="fondo" colspan="2" rowspan="4"><b>EDUCACIÓN<br>PARA EL<br>TRABAJO </b></td>
                    <td class="text-left">Gestión de procesos</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td rowspan="4">{{"12"}}</td> <!-- promedio -->
                    <td rowspan="4">{{"12"}}</td>
                    <td rowspan="4">{{"12"}}</td>
                </tr>
                <tr>
                    <td class="text-left">Ejecución de procesos</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                </tr>
                <tr>
                    <td class="text-left">Comprensión y aplicación de tecnología</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                </tr>
                <tr>
                    <td class="text-left"><b>PROMEDIO</b></td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                    <td>{{"12"}}</td>
                </tr>
            </table>
        </div>
        {{-- <div style="page-break-after:always;"></div> --}}
        <div class="row">&nbsp; </div>
        <div class="row">
            <table>
                <tr>
                    <td width="124">&nbsp;</td>
                    <td>
                            <table  border="1" cellpadding="0" cellspacing="0" style="font-size:9px;text-align:center">
                                <tr>
                                    <td class="text-left fondo" width="181" height="15"><b>ORDEN DE MÉRITO POR BIMESTRE</b></td>
                                    <td width="17"><b>{{"12"}}</b></td>
                                    <td width="17"><b>{{"12"}}</b></td>
                                    <td width="17"><b>{{"12"}}</b></td>
                                    <td width="17"><b>{{"12"}}</b></td>
                                    <td class="text-left fondo" width="63"><b>ANUAL</b></td>
                                    <td width="29"><b>{{"12"}}</b></td>
                                </tr>
                                <tr>
                                    <td class="text-left fondo" width="181" height="15"><b>COMPORTAMIENTO</b></td>
                                    <td width="17"><b>{{"12"}}</b></td>
                                    <td width="17"><b>{{"12"}}</b></td>
                                    <td width="17"><b>{{"12"}}</b></td>
                                    <td width="17"><b>{{"12"}}</b></td>
                                    <td class="text-left fondo" width="63"><b>ANUAL</b></td>
                                    <td width="29"><b>{{"12"}}</b></td>
                                </tr>
                            </table>
                    </td>
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
                    <td  height="25"><b>DESAPROBADO</b></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>
