<!DOCTYPE html>


<html lang="en">


<head>
    <link rel="icon" type="image/x-icon" href="/DR_Fashions/public/img/favicon.ico">
</head>

<body>

    <?php include 'components/header.php'; ?>

    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>


    <!-- Hero Section -->
    <section class="page-header-section" style="background-image: url('../public/img/header-bg.jpg'); background-size: cover;">

        <div class="container">
            <h1 class="header-title">Careers<span>.</span></h1>
        </div>
    </section>
    <!-- Page header section end -->

    <!-- Hero Section -->
    <!-- <section class="hero">
        <div class="container">
            <h1 class="lead">Join Our Fashion Journey</h1>
            <p class="lead">Be part of a team shaping tomorrow’s style.</p>
        </div>
    </section> -->

    <!-- About Careers -->
    <section class="py-5 text-center ab">
        <div class="container">
            <h2>Why Work With Us?</h2>
            <p class="text-muted">
                At Fashion Garments, creativity meets quality. We’re passionate about sustainable fashion,
                innovative designs, and a positive workplace culture.
            </p>
        </div>
    </section>

    <!-- Job Listings -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-4">Open Positions</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="p-4 job-card">
                        <h5>Fashion Designer</h5>
                        <p>Bring creative concepts to life with trend-setting designs.</p>
                        <span class="badge bg-primary">Full-Time</span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-4 job-card">
                        <h5>Quality Control Officer</h5>
                        <p>Ensure every product meets our high quality standards.</p>
                        <span class="badge bg-success">Part-Time</span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-4 job-card">
                        <h5>Marketing Executive</h5>
                        <p>Promote our brand across multiple channels.</p>
                        <span class="badge bg-primary">Full-Time</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Application Form -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">Apply Now</h2>
            <form class="apply-form mx-auto" style="max-width: 600px;">
                <div class="mb-3">
                    <label class="form-label">Full Name</label>
                    <input type="text" class="form-control" placeholder="Your Name">
                </div>
                <div class="mb-3">
                    <label class="form-label">Email Address</label>
                    <input type="email" class="form-control" placeholder="Your Email">
                </div>
                <div class="mb-3">
                    <label for="position">Position Applying For</label>
                    <select id="position" name="position" style="width:100%; padding:10px; border-radius:6px; border:1px solid #ccc;">
                        <option value="" disabled selected>e.g. Fashion Designer</option>
                        <option value="fashion_designer">Fashion Designer</option>
                        <option value="graphic_designer">Graphic Designer</option>
                        <option value="merchandiser">Merchandiser</option>
                        <option value="sewing_machine_operator">Sewing Machine Operator</option>
                        <option value="quality_checker">Quality Checker</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Upload CV</label>
                    <input type="file" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Cover Letter</label>
                    <textarea class="form-control" rows="4" placeholder="Tell us why you’d be a great fit"></textarea>
                </div>
                <button type="submit" class="btn btn-dark w-100">Submit Application</button>
            </form>
        </div>
    </section>

    <?php include 'components/footer.php'; ?>

</body>

</html>