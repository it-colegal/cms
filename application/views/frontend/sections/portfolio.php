<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if (empty($portfolios))
{
    return;
}
?>

<section id="portfolio" class="section-padding">

    <div class="container">

        <div class="text-center mb-5">

            <span class="hbadge">

                <span class="bdot"></span>

                Portofolio

            </span>

            <h2 class="mt-3">

                Proyek yang Telah Kami Selesaikan

            </h2>

            <p class="mt-3">

                Berbagai proyek yang telah kami selesaikan menjadi bukti komitmen kami dalam menghadirkan solusi yang berkualitas dan sesuai dengan kebutuhan setiap klien.

            </p>

        </div>

        <div class="row g-4">

            <?php foreach ($portfolios as $portfolio) : ?>

                <div class="col-lg-4 col-md-6">

                    <div class="card h-100 border-0 shadow-sm">

                        <?php if (!empty($portfolio['featured_image_media_id'])) : ?>

                            <!--
                                Portofolio image akan dirender
                                melalui Media Module.
                            -->

                            <img
                                src=""
                                alt="<?php echo html_escape($portfolio['title']); ?>"
                                class="card-img-top">

                        <?php endif; ?>

                        <div class="card-body">

                            <h4 class="card-title">

                                <?php echo html_escape($portfolio['title']); ?>

                            </h4>

                            <?php if (!empty($portfolio['summary'])) : ?>

                                <p class="card-text mt-3">

                                    <?php echo nl2br(html_escape($portfolio['summary'])); ?>

                                </p>

                            <?php endif; ?>

                        </div>

                        <div class="card-footer bg-transparent border-0">

                            <a
                                href="<?php echo site_url('portfolio/' . $portfolio['slug']); ?>"
                                class="btn btn-outline-primary">

                                Lihat Proyek

                            </a>

                        </div>

                    </div>

                </div>

            <?php endforeach; ?>

        </div>

    </div>

</section>