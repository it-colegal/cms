<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if (empty($testimonials))
{
    return;
}
?>

<section id="testimonials" class="section-padding">

    <div class="container">

        <div class="text-center mb-5">

            <span class="hbadge">

                <span class="bdot"></span>

                Testimoni

            </span>

            <h2 class="stitle mt-3">

                Apa Kata Klien Kami

            </h2>

            <p class="mt-3">

                Kepercayaan klien merupakan motivasi kami untuk terus memberikan layanan terbaik.

            </p>

        </div>

        <div class="row g-4">

            <?php foreach ($testimonials as $testimonial) : ?>

                <div class="col-lg-4 col-md-6">

                    <div class="card border-0 shadow-sm h-100">

                        <div class="card-body">

                            <div class="d-flex align-items-center mb-4">

                                <?php if (!empty($testimonial['photo_media_id'])) : ?>

                                    <!--
                                        Foto testimonial akan dirender
                                        melalui Media Module.
                                    -->

                                    <img
                                        src=""
                                        alt="<?php echo html_escape($testimonial['name']); ?>"
                                        class="rounded-circle me-3"
                                        width="72"
                                        height="72">

                                <?php endif; ?>

                                <div>

                                    <h5 class="mb-1 card-title">

                                        <?php echo html_escape($testimonial['name']); ?>

                                    </h5>

                                    <?php if (!empty($testimonial['position']) || !empty($testimonial['company'])) : ?>

                                        <small class="card-text">

                                            <?php
                                            echo html_escape($testimonial['position']);

                                            if (!empty($testimonial['position']) && !empty($testimonial['company']))
                                            {
                                                echo ' · ';
                                            }

                                            echo html_escape($testimonial['company']);
                                            ?>

                                        </small>

                                    <?php endif; ?>

                                </div>

                            </div>

                            <p class="ssub mb-0">

                                "<?php echo nl2br(html_escape($testimonial['content'])); ?>"

                            </p>

                        </div>

                    </div>

                </div>

            <?php endforeach; ?>

        </div>

    </div>

</section>