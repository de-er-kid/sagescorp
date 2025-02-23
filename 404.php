<?php get_header(); ?>

<style>
    header {
        background-color: #000;
    }

    /* 404 Page Styling */
    .page-404 {
        padding: 80px 0;
        text-align: center;
        margin-top: 102px;
    }

    .page-404 .page-title {
        font-size: 48px;
        font-weight: 700;
        color: #333;
        margin-bottom: 20px;
    }

    .page-404 .page-description {
        font-size: 18px;
        color: #666;
        margin-bottom: 30px;
    }

    .page-404 .btn-primary {
        background-color: #007bff;
        color: #fff;
        padding: 10px 20px;
        text-decoration: none;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    .page-404 .btn-primary:hover {
        background-color: #0056b3;
    }
</style>

<main class="page-404">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="page-title">404 - Page Not Found</h1>
                <p class="page-description">Oops! The page you're looking for doesn't exist or has been moved.</p>
                <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-primary">Go Back to Homepage</a>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>