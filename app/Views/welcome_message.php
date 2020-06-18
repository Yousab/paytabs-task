<?= $this->extend('layout') ?>

<?= $this->section('content') ?>

<!-- Intro Image-->
<section id="intro" style="background: url(img/home.jpg) center center no-repeat; background-size: cover;" class="intro-section pb-2">
    <div class="container text-center">
        <div data-animate="fadeInDown" class="logo"><img src="/paytabs-logo.png" alt="logo" width="130"></div>
        <h1 data-animate="fadeInDown" class="text-shadow mb-5">Welcome to Paytabs Coding Challenge</h1>
        <p data-animate="slideInUp" class="h3 text-shadow text-400">Developed By: <strong>Yousab Maged</strong></p>
    </div>
</section>

<!-- About Section-->
<section id="about" class="about-section">
    <div class="container">
        <header class="text-center">
            <h2 data-animate="fadeInDown" class="title">About the Task</h2>
        </header>
        <div class="row">
            <div data-animate="fadeInUp" class="col-lg-6">
                <p>This main task is to implement <strong> Category Entity</strong> by allowing creation of infinite number of sub-categories.</p>
                <p>I depend on the following technologies on the right side to build this task website.</p>
                <p>You can check the task output on the <a href="#output">following section.</a></p>
                <h4>OR</h4>
                <p>You can do CRUD operations on category by going to <a href="/category">Categories Section.</a></p>
            </div>
            <div data-animate="fadeInUp" class="col-lg-6">
                <div class="skill-item">
                    <div class="progress-title">CodeIgniter 4</div>
                    <div class="progress">
                        <div role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-skill1"></div>
                    </div>
                </div>
                <div class="skill-item">
                    <div class="progress-title">Bootstrap 4</div>
                    <div class="progress">
                        <div role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="60" aria-valuemax="100" class="progress-bar progress-bar-skill2"></div>
                    </div>
                </div>
                <div class="skill-item">
                    <div class="progress-title">IIS Server (Locally)</div>
                    <div class="progress">
                        <div role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-skill3"></div>
                    </div>
                </div>
                <div class="skill-item">
                    <div class="progress-title">MySQL 8</div>
                    <div class="progress">
                        <div role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-skill4"></div>
                    </div>
                </div>
                <div class="skill-item">
                    <div class="progress-title">jQuery & Ajax</div>
                    <div class="progress">
                        <div role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-skill5"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Output-->
<section id="output" class="bg-gradient services-section">
    <div class="container">
        <header class="text-center">
            <h2 data-animate="fadeInDown" class="title">Check the Output</h2>
        </header>
        <div class="row services text-center">
            <div data-animate="fadeInUp" class="col-lg-4 categories-dropdown">
                <h3 class="heading mb-3 text-400">Starter Category</h3>
                <select id="parent-category" class="form-control select-lg mb-3" name="parent_category">
                    <option>Select Category</option>
                    <?php foreach ($categories as $category) : ?>
                        <option value="<?php print $category->id;  ?>"><?php print $category->name; ?></option>
                    <?php endforeach ?>
                </select>
            </div>
        </div>
        <hr data-animate="fadeInUp">
        <div data-animate="fadeInUp" class="text-center">
            <p class="lead">Would you like to know more or just discuss something?</p>
            <p><a href="mailto:yousab.maged@gmail.com" class="btn btn-outline-light link-scroll">Contact Me</a></p>
        </div>
    </div>
</section>

<?= $this->endSection() ?>