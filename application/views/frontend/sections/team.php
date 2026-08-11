<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if (empty($teams))
{
    return;
}
?>

<section id="team" class="section-padding">

    <div class="container">

        <div class="text-center mb-5">

            <span class="hbadge">

                <span class="bdot"></span>

                Tim Kami

            </span>

            <h2 class="stitle mt-3">

                Kenali Tim Profesional Kami

            </h2>

            <p class="mt-3">

                Didukung oleh tenaga profesional yang berpengalaman di bidangnya.

            </p>

        </div>

        <div class="row g-4">

            <?php foreach ($teams as $member) : ?>

                <div class="col-lg-3 col-md-6">

                    <div class="card border-0 shadow-sm h-100">

                        <?php if (!empty($member['photo_media_id'])) : ?>

                            <!--
                                Photo akan dirender oleh Media Module.
                            -->

                            <img
                                src=""
                                alt="<?php echo html_escape($member['name']); ?>"
                                class="card-img-top">

                        <?php endif; ?>

                        <div class="card-body text-center">

                            <h5 class="mb-1 card-title">

                                <?php echo html_escape($member['name']); ?>

                            </h5>

                            <p class="mb-3 card-text">

                                <?php echo html_escape($member['position']); ?>

                            </p>

                            <?php if (!empty($member['linkedin'])) : ?>

                                <a
                                    href="<?php echo html_escape($member['linkedin']); ?>"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    class="boc btn btn-sm px-3 py-2">

                                    LinkedIn

                                </a>

                            <?php endif; ?>

                        </div>

                    </div>

                </div>

            <?php endforeach; ?>

        </div>

    </div>

</section>