<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monthly Staff Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.2/css/dataTables.dataTables.css">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<style>
    :root {
        --background: #1a1a2e;
        --color: #ffffff;
        --primary-color: #0f3460;
    }

    * {
        box-sizing: border-box;
    }

    html {
        scroll-behavior: smooth;
    }

    body {
        margin: 0;
        box-sizing: border-box;
        font-family: "poppins";
        background: var(--background);
        color: var(--color);
        letter-spacing: 1px;
        transition: background 0.2s ease;
        -webkit-transition: background 0.2s ease;
        -moz-transition: background 0.2s ease;
        -ms-transition: background 0.2s ease;
        -o-transition: background 0.2s ease;
    }

    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    /* @keyframes wobble {
        0% {
            transform: scale(1.025);
            -webkit-transform: scale(1.025);
            -moz-transform: scale(1.025);
            -ms-transform: scale(1.025);
            -o-transform: scale(1.025);
        }

        25% {
            transform: scale(1);
            -webkit-transform: scale(1);
            -moz-transform: scale(1);
            -ms-transform: scale(1);
            -o-transform: scale(1);
        }

        75% {
            transform: scale(1.025);
            -webkit-transform: scale(1.025);
            -moz-transform: scale(1.025);
            -ms-transform: scale(1.025);
            -o-transform: scale(1.025);
        }

        100% {
            transform: scale(1);
            -webkit-transform: scale(1);
            -moz-transform: scale(1);
            -ms-transform: scale(1);
            -o-transform: scale(1);
        }
    } */
</style>