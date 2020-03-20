<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Boleta de notas</title>
</head>
<style>
    
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

    .table {
    width: 100%;
    max-width: 100%;
    margin-bottom: 1rem;
    background-color: transparent;
    }

    .table th,
    .table td {
    padding: 0.75rem;
    vertical-align: top;
    border-top: 1px solid #dee2e6;
    }

    .table thead th {
    vertical-align: bottom;
    border-bottom: 2px solid #dee2e6;
    }

    .table tbody + tbody {
    border-top: 2px solid #dee2e6;
    }

    .table .table {
    background-color: #ffffff;
    }

    .table-sm th,
    .table-sm td {
    padding: 0.3rem;
    }

    .table-bordered {
    border: 1px solid #dee2e6;
    }

    .table-bordered th,
    .table-bordered td {
    border: 1px solid #dee2e6;
    }

    .table-bordered thead th,
    .table-bordered thead td {
    border-bottom-width: 2px;
    }

    .table-borderless th,
    .table-borderless td,
    .table-borderless thead th,
    .table-borderless tbody + tbody {
    border: 0;
    }

    .table-striped tbody tr:nth-of-type(odd) {
    background-color: rgba(0, 0, 0, 0.05);
    }

    .table-hover tbody tr:hover {
    background-color: rgba(0, 0, 0, 0.075);
    }

    .table-primary,
    .table-primary > th,
    .table-primary > td {
    background-color: #b8daff;
    }

    .table-hover .table-primary:hover {
    background-color: #9fcdff;
    }

    .table-hover .table-primary:hover > td,
    .table-hover .table-primary:hover > th {
    background-color: #9fcdff;
    }

    .table-secondary,
    .table-secondary > th,
    .table-secondary > td {
    background-color: #d6d8db;
    }

    .table-hover .table-secondary:hover {
    background-color: #c8cbcf;
    }

    .table-hover .table-secondary:hover > td,
    .table-hover .table-secondary:hover > th {
    background-color: #c8cbcf;
    }

    .table-success,
    .table-success > th,
    .table-success > td {
    background-color: #c3e6cb;
    }

    .table-hover .table-success:hover {
    background-color: #b1dfbb;
    }

    .table-hover .table-success:hover > td,
    .table-hover .table-success:hover > th {
    background-color: #b1dfbb;
    }

    .table-info,
    .table-info > th,
    .table-info > td {
    background-color: #bee5eb;
    }

    .table-hover .table-info:hover {
    background-color: #abdde5;
    }

    .table-hover .table-info:hover > td,
    .table-hover .table-info:hover > th {
    background-color: #abdde5;
    }

    .table-warning,
    .table-warning > th,
    .table-warning > td {
    background-color: #ffeeba;
    }

    .table-hover .table-warning:hover {
    background-color: #ffe8a1;
    }

    .table-hover .table-warning:hover > td,
    .table-hover .table-warning:hover > th {
    background-color: #ffe8a1;
    }

    .table-danger,
    .table-danger > th,
    .table-danger > td {
    background-color: #f5c6cb;
    }

    .table-hover .table-danger:hover {
    background-color: #f1b0b7;
    }

    .table-hover .table-danger:hover > td,
    .table-hover .table-danger:hover > th {
    background-color: #f1b0b7;
    }

    .table-light,
    .table-light > th,
    .table-light > td {
    background-color: #fdfdfe;
    }

    .table-hover .table-light:hover {
    background-color: #ececf6;
    }

    .table-hover .table-light:hover > td,
    .table-hover .table-light:hover > th {
    background-color: #ececf6;
    }

    .table-dark,
    .table-dark > th,
    .table-dark > td {
    background-color: #c6c8ca;
    }

    .table-hover .table-dark:hover {
    background-color: #b9bbbe;
    }

    .table-hover .table-dark:hover > td,
    .table-hover .table-dark:hover > th {
    background-color: #b9bbbe;
    }

    .table-active,
    .table-active > th,
    .table-active > td {
    background-color: rgba(0, 0, 0, 0.075);
    }

    .table-hover .table-active:hover {
    background-color: rgba(0, 0, 0, 0.075);
    }

    .table-hover .table-active:hover > td,
    .table-hover .table-active:hover > th {
    background-color: rgba(0, 0, 0, 0.075);
    }

    .table .thead-dark th {
    color: #ffffff;
    background-color: #212529;
    border-color: #32383e;
    }

    .table .thead-light th {
    color: #495057;
    background-color: #e9ecef;
    border-color: #dee2e6;
    }

    .table-dark {
    color: #ffffff;
    background-color: #212529;
    }

    .table-dark th,
    .table-dark td,
    .table-dark thead th {
    border-color: #32383e;
    }

    .table-dark.table-bordered {
    border: 0;
    }

    .table-dark.table-striped tbody tr:nth-of-type(odd) {
    background-color: rgba(255, 255, 255, 0.05);
    }

    .table-dark.table-hover tbody tr:hover {
    background-color: rgba(255, 255, 255, 0.075);
    }

    @media (max-width: 575.98px) {
    .table-responsive-sm {
        display: block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        -ms-overflow-style: -ms-autohiding-scrollbar;
    }
    .table-responsive-sm > .table-bordered {
        border: 0;
    }
    }

    @media (max-width: 767.98px) {
    .table-responsive-md {
        display: block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        -ms-overflow-style: -ms-autohiding-scrollbar;
    }
    .table-responsive-md > .table-bordered {
        border: 0;
    }
    }

    @media (max-width: 991.98px) {
    .table-responsive-lg {
        display: block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        -ms-overflow-style: -ms-autohiding-scrollbar;
    }
    .table-responsive-lg > .table-bordered {
        border: 0;
    }
    }

    @media (max-width: 1199.98px) {
    .table-responsive-xl {
        display: block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        -ms-overflow-style: -ms-autohiding-scrollbar;
    }
    .table-responsive-xl > .table-bordered {
        border: 0;
    }
    }

    .table-responsive {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    -ms-overflow-style: -ms-autohiding-scrollbar;
    }

    .table-responsive > .table-bordered {
    border: 0;
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

    .table {
    width: 100%;
    margin-bottom: 1rem;
    background-color: transparent;
    }

    .table th,
    .table td {
    padding: 0.75rem;
    vertical-align: top;
    border-top: 1px solid #dee2e6;
    }

    .table thead th {
    vertical-align: bottom;
    border-bottom: 2px solid #dee2e6;
    }

    .table tbody + tbody {
    border-top: 2px solid #dee2e6;
    }

    .table .table {
    background-color: #f8fafc;
    }

    .table-sm th,
    .table-sm td {
    padding: 0.3rem;
    }

    .table-bordered {
    border: 1px solid #dee2e6;
    }

    .table-bordered th,
    .table-bordered td {
    border: 1px solid #dee2e6;
    }

    .table-bordered thead th,
    .table-bordered thead td {
    border-bottom-width: 2px;
    }

    .table-borderless th,
    .table-borderless td,
    .table-borderless thead th,
    .table-borderless tbody + tbody {
    border: 0;
    }

    .table-striped tbody tr:nth-of-type(odd) {
    background-color: rgba(0, 0, 0, 0.05);
    }

    .table-hover tbody tr:hover {
    background-color: rgba(0, 0, 0, 0.075);
    }

    .table-primary,
    .table-primary > th,
    .table-primary > td {
    background-color: #c6e0f5;
    }

    .table-hover .table-primary:hover {
    background-color: #b0d4f1;
    }

    .table-hover .table-primary:hover > td,
    .table-hover .table-primary:hover > th {
    background-color: #b0d4f1;
    }

    .table-secondary,
    .table-secondary > th,
    .table-secondary > td {
    background-color: #d6d8db;
    }

    .table-hover .table-secondary:hover {
    background-color: #c8cbcf;
    }

    .table-hover .table-secondary:hover > td,
    .table-hover .table-secondary:hover > th {
    background-color: #c8cbcf;
    }

    .table-success,
    .table-success > th,
    .table-success > td {
    background-color: #c7eed8;
    }

    .table-hover .table-success:hover {
    background-color: #b3e8ca;
    }

    .table-hover .table-success:hover > td,
    .table-hover .table-success:hover > th {
    background-color: #b3e8ca;
    }

    .table-info,
    .table-info > th,
    .table-info > td {
    background-color: #d6e9f9;
    }

    .table-hover .table-info:hover {
    background-color: #c0ddf6;
    }

    .table-hover .table-info:hover > td,
    .table-hover .table-info:hover > th {
    background-color: #c0ddf6;
    }

    .table-warning,
    .table-warning > th,
    .table-warning > td {
    background-color: #fffacc;
    }

    .table-hover .table-warning:hover {
    background-color: #fff8b3;
    }

    .table-hover .table-warning:hover > td,
    .table-hover .table-warning:hover > th {
    background-color: #fff8b3;
    }

    .table-danger,
    .table-danger > th,
    .table-danger > td {
    background-color: #f7c6c5;
    }

    .table-hover .table-danger:hover {
    background-color: #f4b0af;
    }

    .table-hover .table-danger:hover > td,
    .table-hover .table-danger:hover > th {
    background-color: #f4b0af;
    }

    .table-light,
    .table-light > th,
    .table-light > td {
    background-color: #fdfdfe;
    }

    .table-hover .table-light:hover {
    background-color: #ececf6;
    }

    .table-hover .table-light:hover > td,
    .table-hover .table-light:hover > th {
    background-color: #ececf6;
    }

    .table-dark,
    .table-dark > th,
    .table-dark > td {
    background-color: #c6c8ca;
    }

    .table-hover .table-dark:hover {
    background-color: #b9bbbe;
    }

    .table-hover .table-dark:hover > td,
    .table-hover .table-dark:hover > th {
    background-color: #b9bbbe;
    }

    .table-active,
    .table-active > th,
    .table-active > td {
    background-color: rgba(0, 0, 0, 0.075);
    }

    .table-hover .table-active:hover {
    background-color: rgba(0, 0, 0, 0.075);
    }

    .table-hover .table-active:hover > td,
    .table-hover .table-active:hover > th {
    background-color: rgba(0, 0, 0, 0.075);
    }

    .table .thead-dark th {
    color: #f8fafc;
    background-color: #212529;
    border-color: #32383e;
    }

    .table .thead-light th {
    color: #495057;
    background-color: #e9ecef;
    border-color: #dee2e6;
    }

    .table-dark {
    color: #f8fafc;
    background-color: #212529;
    }

    .table-dark th,
    .table-dark td,
    .table-dark thead th {
    border-color: #32383e;
    }

    .table-dark.table-bordered {
    border: 0;
    }

    .table-dark.table-striped tbody tr:nth-of-type(odd) {
    background-color: rgba(255, 255, 255, 0.05);
    }

    .table-dark.table-hover tbody tr:hover {
    background-color: rgba(255, 255, 255, 0.075);
    }

    @media (max-width: 575.98px) {
    .table-responsive-sm {
        display: block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        -ms-overflow-style: -ms-autohiding-scrollbar;
    }

    .table-responsive-sm > .table-bordered {
        border: 0;
    }
    }

    @media (max-width: 767.98px) {
    .table-responsive-md {
        display: block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        -ms-overflow-style: -ms-autohiding-scrollbar;
    }

    .table-responsive-md > .table-bordered {
        border: 0;
    }
    }

    @media (max-width: 991.98px) {
    .table-responsive-lg {
        display: block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        -ms-overflow-style: -ms-autohiding-scrollbar;
    }

    .table-responsive-lg > .table-bordered {
        border: 0;
    }
    }

    @media (max-width: 1199.98px) {
    .table-responsive-xl {
        display: block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        -ms-overflow-style: -ms-autohiding-scrollbar;
    }

    .table-responsive-xl > .table-bordered {
        border: 0;
    }
    }

    .table-responsive {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    -ms-overflow-style: -ms-autohiding-scrollbar;
    }

    .table-responsive > .table-bordered {
    border: 0;
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

    .table {
        border-collapse: collapse !important;
    }

    .table td,
    .table th {
        background-color: #fff !important;
    }

    .table-bordered th,
    .table-bordered td {
        border: 1px solid #dee2e6 !important;
    }

    .table-dark {
        color: inherit;
    }

    .table-dark th,
    .table-dark td,
    .table-dark thead th,
    .table-dark tbody + tbody {
        border-color: #dee2e6;
    }

    .table .thead-dark th {
        color: inherit;
        border-color: #dee2e6;
    }
    }

    /*!
    *  Font Awesome 4.7.0 by @davegandy - http://fontawesome.io - @fontawesome
    *  License - http://fontawesome.io/license (Font: SIL OFL 1.1, CSS: MIT License)
    */

    /* FONT PATH
    * -------------------------- */

</style>
@php
    $data = file_get_contents("img/logo.png");
    $base64 = 'data:image/png;base64,' . base64_encode($data);
    if(isset($notas))
    {
        print_r($notas);
    }
    
@endphp
@if(isset($validacion))
<body class="text-center">
    <h1>Debe Iniciar sesión para acceder a esta vista</h1>
    <a href="/">volver</a>
    @else
<body style="background-image: url('{{$base64}}');background-size: 100% 100%;background-repeat: no-repeat;">
    <div class="container">
        
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center">Sede Pucallpa</div>
            <!-- <img src="img/logo.png" height="400" width="300" alt="" srcset=""> -->
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center">Exigencia - Disciplina - Valores</div>
        </div>
        <div class="row" style="background-color: black;color: white;">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center">
                <h2 class=""></h2>
            </div>    
        </div>
        <div class="row">
            <table border="2" class="text-center" style="font-size: 9px">
                <tr style="background-color: black;color: white;font-size: 24px;">
                    <td colspan="9">BOLETA DE NOTAS 2019</td>
                </tr>
                <tr>
                    <td style="background-color: #c1baba;">ALUMNO (A)</td>
                    <td colspan="8">{{$alumno->alumno}}</td> 
                </tr>
                <tr>
                    <td style="background-color: #c1baba;">NIVEL</td>
                    <td colspan="2">{{$alumno->Nivel}}</td>
                    <td colspan="2" style="background-color: #c1baba;">GRADO</td>
                    <td colspan="2">{{$alumno->grado}}</td>
                    <td style="background-color: #c1baba;">SECCIÓN</td>
                    <td>{{$alumno->seccion}}</td>
                </tr>
                <tr>
                    <td rowspan="2" style="background-color: #c1baba;">AREAS</td>
                    <td rowspan="2">N°</td>
                    <td rowspan="2">CURSOS</td>
                    <td colspan="4">PROMEDIOS</td>
                    <td rowspan="2">PROM FINAL POR CURSO</td>
                    <td rowspan="2">PROM POR AREA</td>
                </tr>
                <tr>
                    <td>1°</td>
                    <td>2°</td>
                    <td>3°</td>
                    <td>4°</td>
                </tr>
                <tr>
                    <td rowspan="5">MATEMÁTICAS</td>
                    <td>1</td>
                    <td  style="text-align: left;">Algebra</td>
                    <td>12</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td rowspan="5">13</td>    
                </tr>
                <tr>
                    <td>2</td>
                    <td style="text-align: left;">Aritmética</td>
                    <td>13</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td style="text-align: left;">Geometría</td>
                    <td>14</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td style="text-align: left;">Trignometría</td>
                    <td>15</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td style="text-align: left;">Razonamiento Matemático</td>
                    <td>
                        @if (isset($notas['nota'][0]->promedio))
                            {{$notas['nota'][0]->promedio}} 
                        @else
                            {{""}}                            
                        @endif
                    </td>
                    <td>
                        @if (isset($notas['nota'][1]->promedio))
                            {{$notas['nota'][1]->promedio}} 
                        @else
                            {{""}}                            
                        @endif
                    </td>
                    <td>
                        @if (isset($notas['nota'][2]->promedio))
                            {{$notas['nota'][2]->promedio}} 
                        @else
                            {{""}}                            
                        @endif
                    </td>
                    <td>
                        @if (isset($notas['nota'][3]->promedio))
                            {{$notas['nota'][3]->promedio}} 
                        @else
                            {{""}}                            
                        @endif
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td rowspan="4">COMUNICACIÓN</td>
                    <td>6</td>
                    <td style="text-align: left;">Lenguaje</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td rowspan="4"></td>    
                </tr>
                <tr>
                    <td>7</td>
                    <td style="text-align: left;">Plan Lector / Literatura</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td style="text-align: left;">Caligrafía / Ortografía</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>9</td>
                    <td style="text-align: left;">Razonamiento Verbal</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>IDIOMA EXTRANJERO</td>
                    <td>10</td>
                    <td style="text-align: left;">Inglés</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td rowspan="3">CIENCIA TECNOLOGÍA Y AMBIENTE</td>
                    <td>11</td>
                    <td style="text-align: left;">Biología</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td rowspan="3"></td>    
                </tr>
                <tr>
                    <td>12</td>
                    <td style="text-align: left;">Química</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>13</td>
                    <td style="text-align: left;">Física</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td rowspan="3">CIENCIAS SOCIALES</td>
                    <td>14</td>
                    <td style="text-align: left;">Historia</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td rowspan="3"></td>    
                </tr>
                <tr>
                    <td>15</td>
                    <td style="text-align: left;">Geografía</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>16</td>
                    <td style="text-align: left;">Economía</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>F CIUDADANA Y CÍVICA</td>
                    <td>17</td>
                    <td style="text-align: left;">Educación Cívica</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td rowspan="2">PERS. FAM Y RR. HH.</td>
                    <td>18</td>
                    <td style="text-align: left;">Psicología</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td rowspan="2"></td>    
                </tr>
                <tr>
                    <td>19</td>
                    <td style="text-align: left;">Filosofía</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>EDUCACIÓN POR EL ARTE</td>
                    <td>20</td>
                    <td style="text-align: left;">Arte</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>EDUCACIÓN FÍSICA</td>
                    <td>21</td>
                    <td style="text-align: left;">Eduacación Física</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>Ed. PARA EL TRABAJO</td>
                    <td>22</td>
                    <td style="text-align: left;">Computación</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>COMPORTAMIENTO</td>
                    <td>23</td>
                    <td style="text-align: left;">Conducta</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td colspan="9">&nbsp;</td>
                </tr>
                <tr>
                    <td colspan="3">PUNTAJE</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td colspan="2"></td>
                </tr>
                <tr>
                    <td colspan="3">PROMEDIO GENERAL DEL BIMESTRE</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td colspan="2"></td>
                </tr>
                <tr>
                    <td colspan="9">&nbsp;</td>
                </tr>
                <tr>
                    <td colspan="3"><b>ORDEN DE MÉRITO</b></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td colspan="2"></td>
                </tr>
                <tr>
                    <td colspan="9">&nbsp;</td>
                </tr>
            </table>
        </div>
        <div class="row">
            <table class="table-bordered text-center">    
                <tr>
                    <td colspan="9" style="font-size: 22px">COMPORTAMIENTO OBSERVADO</td>
                </tr>
                <tr>
                    <td colspan="3" style="font-size: 10px">CLASES PROGRAMADAS</td>
                    <td colspan="3" style="background-color: #c1baba;font-size: 10px">TARDANZAS</td>
                    <td colspan="3" style="background-color: #c1baba;font-size: 10px">INASISTENCIAS</td>
                </tr>
                <tr>
                    <td rowspan="2" style="background-color: #c1baba;font-size: 10px">DÍAS ASISTIDOS</td>
                    <td rowspan="2" colspan="2">&nbsp;</td>
                    <td style="background-color: #c1baba;font-size: 10px">JUSTIFICADAS</td>
                    <td colspan="2">&nbsp;</td>
                    <td style="background-color: #c1baba;font-size: 10px">JUSTIFICADA</td>
                    <td colspan="2">&nbsp;</td>
                </tr>
                <tr>
                    <td style="background-color: #c1baba;font-size: 10px">JUSTIFICADAS</td>
                    <td colspan="2">&nbsp;</td>
                    <td style="background-color: #c1baba;font-size: 10px">JUSTIFICADA</td>
                    <td colspan="2">&nbsp;</td>
                </tr>
            </table>
        </div>
        @endif
    </div>
</body>
</html>
