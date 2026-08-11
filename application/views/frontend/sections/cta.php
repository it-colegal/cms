<section id="cta" class="position-relative overflow-hidden">

    <div class="aur aur-a" style="top:-120px;left:-150px;"></div>
    <div class="aur aur-b" style="bottom:-120px;right:-150px;"></div>

    <div class="container position-relative" style="z-index:2;">

        <div class="gc p-5 p-lg-6 text-center">

            <span class="slbl justify-content-center">
                Hubungi Kami
            </span>

            <h2 class="stitle mb-4">
                Siap Mewujudkan
                <span class="gt">Solusi Digital Terbaik Anda?</span>
            </h2>

            <p class="ssub mx-auto mb-5">

                Tim
                <strong><?php echo html_escape($site['company_name']); ?></strong>
                siap membantu mulai dari konsultasi, perencanaan,
                hingga implementasi solusi digital yang sesuai
                dengan kebutuhan perusahaan Anda.

            </p>

            <div class="d-flex justify-content-center gap-3 flex-wrap">

                <?php if (!empty($site['phone'])) : ?>

                    <a
                        href="tel:<?php echo html_escape($site['phone']); ?>"
                        class="bgrd btn btn-lg px-4">

                        <i class="fa-solid fa-phone me-2"></i>

                        Hubungi Kami

                    </a>

                <?php endif; ?>

                <?php if (!empty($site['email'])) : ?>

                    <a
                        href="mailto:<?php echo html_escape($site['email']); ?>"
                        class="boc btn btn-lg px-4">

                        <i class="fa-regular fa-envelope me-2"></i>

                        Kirim Email

                    </a>

                <?php endif; ?>

            </div>

        </div>

    </div>

</section>