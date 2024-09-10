<head>
    <meta charset="UTF-8">
    <meta
        http-equiv="X-UA-Compatible"
        content="IE=edge"
    >
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >
    <!-- favicon -->
    <link
        rel="shortcut icon"
        type="image/x-icon"
        href="{{ asset('assets/images/fav.svg') }}"
    >
    <title> Kertina Bar & Restaurant </title>

    <!-- fontawesome css -->
    <link
        rel="stylesheet"
        href="{{ asset('assets/css/plugins/fontawesome-5.css') }}"
    >
    <!-- fontawesome css -->
    <link
        rel="stylesheet"
        href="{{ asset('assets/css/plugins/swiper.css') }}"
    >
    <link
        rel="stylesheet"
        href="{{ asset('assets/css/plugins/unicons.css') }}"
    >
    <link
        rel="stylesheet"
        href="{{ asset('assets/css/plugins/metismenu.css') }}"
    >
    <link
        rel="stylesheet"
        href="{{ asset('assets/css/plugins/magnific-popup.css') }}"
    >
    <link
        rel="stylesheet"
        href="{{ asset('assets/css/plugins/timepickers.min.css') }}"
    >
    <link
        rel="stylesheet"
        href="{{ asset('assets/css/plugins/aos.css') }}"
    >
    <link
        rel="stylesheet"
        href="{{ asset('assets/css/plugins/hover-revel.css') }}"
    >
    <!-- bootstrap css -->
    <link
        rel="stylesheet"
        href="{{ asset('assets/css/vendor/bootstrap.min.css') }}"
    >
    <!-- main css -->
    <link
        rel="stylesheet"
        href="{{ asset('assets/css/style.css') }}"
    >
    <style>
        /* The Modal (foreground) */
        .modal {
            display: none;
            position: fixed;
            z-index: 9999; /* Set a high z-index to place it in the foreground */
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.9);
            text-align: center; /* Center the image */
        }
        
        /* Modal Content (image) */
        .modal-content {
            margin:auto;
            margin-top: 10%;
            max-width: 80%;
            max-height: 80%;
            display: block;
            
        }
        
        /* Close button */
        .close {
            position: absolute;
            top: 15px;
            right: 35px;
            color: #f1f1f1;
            font-size: 40px;
            font-weight: bold;
            transition: 0.3s;
            z-index: 99999; /* Ensure the close button is above the image */
        }
        
        .close:hover,
        .close:focus {
            color: #bbb;
            text-decoration: none;
            cursor: pointer;
        }
        @media (max-width: 768px) {
        .modal-content {
            max-width: 95%; /* Adjust the max width for smaller screens */
            max-height: 95%; /* Adjust the max height for smaller screens */
        }

        .close {
            top: 10px; /* Adjust the top position for mobile */
            right: 10px; /* Adjust the right position for mobile */
            font-size: 24px; /* Reduce font size for smaller screens */
        }
    }
    </style>
</head>
