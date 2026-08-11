<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if (empty($site))
{
    return;
}
?>

<section id="contact" class="section-padding">

    <div class="container">

        <div class="row align-items-start">

            <div class="col-lg-5 mb-5 mb-lg-0">

                <span class="hbadge">

                    <span class="bdot"></span>

                    Hubungi Kami

                </span>

                <h2 class="stitle mt-3">

                    Mari Berdiskusi Bersama Kami

                </h2>

                <p class="ssub mt-3">

                    Kami siap membantu menjawab pertanyaan maupun kebutuhan konsultasi Anda.

                </p>

                <div class="mt-4">

                    <?php if (!empty($site['company_name'])) : ?>

                        <div class="mb-3">

                            <strong>Perusahaan</strong><br>

                            <?php echo html_escape($site['company_name']); ?>

                        </div>

                    <?php endif; ?>

                    <?php if (!empty($site['address'])) : ?>

                        <div class="mb-3">

                            <strong>Alamat</strong><br>

                            <?php echo nl2br(html_escape($site['address'])); ?>

                        </div>

                    <?php endif; ?>

                    <?php if (!empty($site['phone'])) : ?>

                        <div class="mb-3">

                            <strong>Telepon</strong><br>

                            <a href="tel:<?php echo html_escape($site['phone']); ?>">

                                <?php echo html_escape($site['phone']); ?>

                            </a>

                        </div>

                    <?php endif; ?>

                    <?php if (!empty($site['email'])) : ?>

                        <div class="mb-3">

                            <strong>Email</strong><br>

                            <a href="mailto:<?php echo html_escape($site['email']); ?>">

                                <?php echo html_escape($site['email']); ?>

                            </a>

                        </div>

                    <?php endif; ?>

                </div>

            </div>

            <div class="col-lg-7">

                <form method="post" action="#">

                    <div class="row">

                        <div class="col-md-6 mb-3">

                            <input
                                type="text"
                                name="name"
                                class="form-control"
                                placeholder="Nama Lengkap"
                                required>

                        </div>

                        <div class="col-md-6 mb-3">

                            <input
                                type="email"
                                name="email"
                                class="form-control"
                                placeholder="Email"
                                required>

                        </div>

                    </div>

                    <div class="mb-3">

                        <input
                            type="text"
                            name="subject"
                            class="form-control"
                            placeholder="Perihal">

                    </div>

                    <div class="mb-3">

                        <textarea
                            name="message"
                            rows="6"
                            class="form-control"
                            placeholder="Tulis pesan Anda"
                            required></textarea>

                    </div>

                    <button
                        type="submit"
                        class="bgrd btn px-4 py-3">

                        Kirim Pesan

                    </button>

                </form>

            </div>

        </div>

        <?php if (!empty($site['google_maps_embed'])) : ?>

            <div class="row mt-5">

                <div class="col-12">

                    <div class="ratio ratio-16x9">

                        <?php echo $site['google_maps_embed']; ?>

                    </div>

                </div>

            </div>

        <?php endif; ?>

    </div>

</section>