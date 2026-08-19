<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if (empty($site))
{
    return;
}
?>

<section id="contact" class="section-padding">

    <div class="container">

        <div class="text-center mb-5">

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

        </div>

        <div class="row align-items-center g-5">

            <!-- Left Side - Contact Info -->
            <div class="col-lg-5">

                <div class="ps-lg-3">

                    <?php if (!empty($site['company_name'])) : ?>

                        <div class="mb-4">

                            <strong>
                                <i class="fa-solid fa-building me-2" style="color:var(--pt);"></i>
                                Perusahaan
                            </strong><br>

                            <span class="text-secondary">
                                <?php echo html_escape($site['company_name']); ?>
                            </span>

                        </div>

                    <?php endif; ?>

                    <?php if (!empty($site['address'])) : ?>

                        <div class="mb-4">

                            <strong>
                                <i class="fa-solid fa-map-location-dot me-2" style="color:var(--pt);"></i>
                                Alamat
                            </strong><br>

                            <span class="text-secondary">
                                <?php echo nl2br(html_escape($site['address'])); ?>
                            </span>

                        </div>

                    <?php endif; ?>

                    <?php if (!empty($site['phone'])) : ?>

                        <div class="mb-4">

                            <strong>
                                <i class="fa-solid fa-phone me-2" style="color:var(--pt);"></i>
                                Telepon
                            </strong><br>

                            <a href="tel:<?php echo html_escape($site['phone']); ?>" class="text-decoration-none text-secondary">

                                <?php echo html_escape($site['phone']); ?>

                            </a>

                        </div>

                    <?php endif; ?>

                    <?php if (!empty($site['email'])) : ?>

                        <div class="mb-0">

                            <strong>
                                <i class="fa-solid fa-envelope me-2" style="color:var(--pt);"></i>
                                Email
                            </strong><br>

                            <a href="mailto:<?php echo html_escape($site['email']); ?>" class="text-decoration-none text-secondary">

                                <?php echo html_escape($site['email']); ?>

                            </a>

                        </div>

                    <?php endif; ?>

                </div>

            </div>

            <!-- Right Side - Contact Form -->
            <div class="col-lg-7">

                <form method="post" action="<?= base_url('contact/submit'); ?>" id="contactForm">

                    <div class="row">

                        <div class="col-md-6 mb-3">

                            <label for="name" class="form-label small fw-semibold">Nama Lengkap</label>

                            <input
                                type="text"
                                name="name"
                                id="name"
                                class="form-control"
                                placeholder="Nama Anda"
                                required>

                        </div>

                        <div class="col-md-6 mb-3">

                            <label for="email" class="form-label small fw-semibold">Email</label>

                            <input
                                type="email"
                                name="email"
                                id="email"
                                class="form-control"
                                placeholder="Email Anda"
                                required>

                        </div>

                    </div>

                    <div class="mb-3">

                        <label for="phone" class="form-label small fw-semibold">Nomor Telepon</label>

                        <input
                            type="tel"
                            name="phone"
                            id="phone"
                            class="form-control"
                            placeholder="+62 812-3456-7890">

                    </div>

                    <div class="mb-3">

                        <label for="subject" class="form-label small fw-semibold">Perihal</label>

                        <select
                            name="subject"
                            id="subject"
                            class="form-select"
                            required>

                            <option value="">-- Pilih Perihal --</option>

                            <option value="Konsultasi Legalitas Hukum">Konsultasi Legalitas Hukum</option>

                            <option value="Konsultasi Pajak & Akuntansi">Konsultasi Pajak & Akuntansi</option>

                            <option value="Virtual Working Space">Virtual Working Space</option>

                            <option value="Konsultasi IT">Konsultasi IT</option>

                            <option value="Pertanyaan Umum">Pertanyaan Umum</option>

                            <option value="Lainnya">Lainnya</option>

                        </select>

                    </div>

                    <div class="mb-4">

                        <label for="message" class="form-label small fw-semibold">Pesan</label>

                        <textarea
                            name="message"
                            id="message"
                            rows="6"
                            class="form-control"
                            placeholder="Tulis pesan Anda"
                            required></textarea>

                    </div>

                    <div class="d-flex gap-2">

                        <button
                            type="submit"
                            class="bgrd btn px-4 py-2">

                            <i class="fa-solid fa-paper-plane me-2"></i>Kirim Pesan

                        </button>

                        <button
                            type="reset"
                            class="boc btn px-4 py-2">

                            <i class="fa-solid fa-rotate-right me-2"></i>Bersihkan

                        </button>

                    </div>

                </form>

            </div>

        </div>

        <!-- Google Maps -->
        <?php if (!empty($site['google_maps_embed'])) : ?>

            <div class="row mt-5">

                <div class="col-12">

                    <div class="ratio ratio-16x9 rounded overflow-hidden">

                        <?php echo $site['google_maps_embed']; ?>

                    </div>

                </div>

            </div>

        <?php endif; ?>

    </div>

</section>