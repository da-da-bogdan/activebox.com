<header class="header">
    <style>
        .header {
            width: 100%;
            height: 100px;
            background-color: #2d2e4a;


            position: absolute;
            top: 0;
            left: 0;
            z-index: 1000;
                }
    </style>
    <div class="container">
        <style>
            .container {
                width: 100%;
                max-width: 1200px;
                margin: 0 auto;
                padding: 0 15px;
                        }
        </style>
        <div class="header_inner">
            <style>
                    .header_inner {
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                    padding: 35px 0;

                    border-bottom: 1px solid #505269;
                                    }
            </style>
            <div class="header_logo">
                <a href="/index.php"><img src="../css/images/logo.png" alt=""></a>
            </div>

            <nav class="nav">
                      <style>
                          .nav {
                            display: flex;
                            font-size: 13px;
                            font-weight: 700;
                            text-transform: uppercase;
                                }
                      </style>
                <a class="nav__link" href="/pages/features.php">Features</a>
                <a class="nav__link" href="/pages/works.php">Works</a>
                <a class="nav__link" href="#">Our Team</a>
                <a class="nav__link" href="#">Testimonials</a>
                <a class="nav__link" href="/pages/download.php" target="_blank">Download</a>
                <style>
                    .nav__link {
                        margin-left: 50px;

                        color: #fff;
                        text-decoration: none;
                        opacity: .75;

                        transition: opacity .1s linear;
                     }

                    .nav__link:first-child {
                        margin-left: 0;
                    }

                    .nav__link:hover {
                        opacity: 1;
                                }
                </style>
            </nav>


        </div>
    </div>
</header>
