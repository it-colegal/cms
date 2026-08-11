<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if (empty($clients))
{
    return;
}
?>

<section id="clients" class="section-padding">

    <div class="container">

        <div class="text-center mb-5">

            <span class="hbadge">

                <span class="bdot"></span>

                Klien

            </span>

            <h2 class="stitle mt-3">

                Dipercaya Berbagai Perusahaan

            </h2>

            <p class="mt-3">

                Kami bangga menjadi mitra bagi berbagai perusahaan dan organisasi dari berbagai sektor industri.

            </p>

        </div>

        <div class="row justify-content-center align-items-center g-4">

            <?php foreach ($clients as $client) : ?>

                <div class="col-6 col-md-4 col-lg-2">

                    <?php
                    $tag = !empty($client['website']) ? 'a' : 'div';
                    ?>

                    <<?php echo $tag; ?>

                        <?php if ($tag === 'a') : ?>
                            href="<?php echo html_escape($client['website']); ?>"
                            target="_blank"
                            rel="noopener noreferrer"
                        <?php endif; ?>

                        class="gc h-100 text-center text-decoration-none">

                        <div class="card-body d-flex align-items-center justify-content-center">

                            <?php if (!empty($client['logo_media_id'])) : ?>

                                <!--
                                    Logo akan dirender melalui
                                    Media Module.
                                -->

                                <img
                                    src=""
                                    alt="<?php echo html_escape($client['name']); ?>"
                                    class="img-fluid">

                            <?php else : ?>

                                <strong>

                                    <?php echo html_escape($client['name']); ?>

                                </strong>

                            <?php endif; ?>

                        </div>

                    </<?php echo $tag; ?>>

                </div>

            <?php endforeach; ?>

        </div>

    </div>

</section>