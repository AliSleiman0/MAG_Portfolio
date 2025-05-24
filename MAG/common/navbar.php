<!-- Topbar start -->
<style>
    #readm {
        background-color: #009688 !important;
        color: rgb(243, 243, 243) !important;
        transition: 0.4s;
        animation-delay: 1.1s;
        text-decoration: none;
        display: inline-block;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2) !important;
        /* Outer shadow */
    }

    #readm:hover {
        background-color: #00695C !important;
        /* Lighter shade of #00695C */
        color: rgb(166, 216, 212) !important;
        /* Darker shadow on hover */
    }

    #readm:active {
        transform: scale(0.95);
        /* Slightly shrink on click */
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.3) !important;
        /* Maintain consistent shadow color on click */
    }
</style>
<div class="container-fluid fixed-top mt-0">
    <div class="container topbar d-none d-lg-block mt-0">
        <div class="topbar-inner" style="margin-bottom:-5px; overflow: hidden; background-color: rgba(255, 255, 255, 0);">
        </div>
    </div>

    <div class="container">
        <nav class="navbar navbar-light navbar-expand-lg py-0">
            <a href="index.html" class="navbar-brand">
                <img src="./img/ChatGPT Image Apr 28, 2025, 06_07_24 AM.png" alt="Logo" style="height:100px; width:auto;"> <!-- Adjust height as needed -->
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars text-primary"></span>
            </button>
            <div class="collapse navbar-collapse bg-white" id="navbarCollapse">
                <div class="navbar-nav ms-lg-auto mx-xl-auto">

                </div>
                <a id="readm" href="login.php" class="btn btn-primary py-3 px-3 d-none d-xl-inline-block">Visit the Website</a>
            </div>
        </nav>
    </div>
</div>
<!-- Topbar End -->