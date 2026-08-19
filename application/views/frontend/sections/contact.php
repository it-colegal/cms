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

        <div class="row align-items-start">

            <!-- Contact Information Card -->
            <div class="col-lg-4 mb-5 mb-lg-0">

                <div class="card border-0 shadow-sm h-100">

                    <div class="card-body p-4">

                        <?php if (!empty($site['company_name'])) : ?>

                            <div class="mb-4">

                                <div class="d-flex align-items-start gap-3">

                                    <div class="flex-shrink-0">

                                        <i class="fa-solid fa-building" style="font-size:1.5rem;color:var(--pt);"></i>

                                    </div>

                                    <div class="flex-grow-1">

                                        <h6 class="mb-1">Perusahaan</h6>

                                        <p class="text-secondary small mb-0">

                                            <?php echo html_escape($site['company_name']); ?>

                                        </p>

                                    </div>

                                </div>

                            </div>

                        <?php endif; ?>

                        <?php if (!empty($site['address'])) : ?>

                            <div class="mb-4">

                                <div class="d-flex align-items-start gap-3">

                                    <div class="flex-shrink-0">

                                        <i class="fa-solid fa-map-location-dot" style="font-size:1.5rem;color:var(--pt);"></i>

                                    </div>

                                    <div class="flex-grow-1">

                                        <h6 class="mb-1">Alamat</h6>

                                        <p class="text-secondary small mb-0">

                                            <?php echo nl2br(html_escape($site['address'])); ?>

                                        </p>

                                    </div>

                                </div>

                            </div>

                        <?php endif; ?>

                        <?php if (!empty($site['phone'])) : ?>

                            <div class="mb-4">

                                <div class="d-flex align-items-start gap-3">

                                    <div class="flex-shrink-0">

                                        <i class="fa-solid fa-phone" style="font-size:1.5rem;color:var(--pt);"></i>

                                    </div>

                                    <div class="flex-grow-1">

                                        <h6 class="mb-1">Telepon</h6>

                                        <p class="text-secondary small mb-0">

                                            <a href="tel:<?php echo html_escape($site['phone']); ?>" class="text-decoration-none">

                                                <?php echo html_escape($site['phone']); ?>

                                            </a>

                                        </p>

                                    </div>

                                </div>

                            </div>

                        <?php endif; ?>

                        <?php if (!empty($site['email'])) : ?>

                            <div class="mb-0">

                                <div class="d-flex align-items-start gap-3">

                                    <div class="flex-shrink-0">

                                        <i class="fa-solid fa-envelope" style="font-size:1.5rem;color:var(--pt);"></i>

                                    </div>

                                    <div class="flex-grow-1">

                                        <h6 class="mb-1">Email</h6>

                                        <p class="text-secondary small mb-0">

                                            <a href="mailto:<?php echo html_escape($site['email']); ?>" class="text-decoration-none">

                                                <?php echo html_escape($site['email']); ?>

                                            </a>

                                        </p>

                                    </div>

                                </div>

                            </div>

                        <?php endif; ?>

                    </div>

                </div>

            </div>

            <!-- Contact Form -->
            <div class="col-lg-8">

                <div class="card border-0 shadow-sm">

                    <div class="card-body p-5">

                        <h5 class="mb-4">Kirim Pesan Anda</h5>

                        <form method="post" action="<?= base_url('contact/submit'); ?>" id="contactForm">

                            <div class="row">

                                <div class="col-md-6 mb-3">

                                    <label for="name" class="form-label">Nama Lengkap <span class="text-danger">*</span></label>

                                    <input
                                        type="text"
                                        name="name"
                                        id="name"
                                        class="form-control"
                                        placeholder="Contoh: Adi Pratama"
                                        required>

                                </div>

                                <div class="col-md-6 mb-3">

                                    <label for="email" class="form-label">Email <span class="text-danger">*</span></label>

                                    <input
                                        type="email"
                                        name="email"
                                        id="email"
                                        class="form-control"
                                        placeholder="Contoh: nama@perusahaan.com"
                                        required>

                                </div>

                            </div>

                            <div class="mb-3">

                                <label for="phone" class="form-label">Nomor Telepon</label>

                                <input
                                    type="tel"
                                    name="phone"
                                    id="phone"
                                    class="form-control"
                                    placeholder="Contoh: +62 812-3456-7890">

                            </div>

                            <div class="mb-3">

                                <label for="subject" class="form-label">Perihal <span class="text-danger">*</span></label>

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

                                <label for="message" class="form-label">Pesan <span class="text-danger">*</span></label>

                                <textarea
                                    name="message"
                                    id="message"
                                    rows="6"
                                    class="form-control"
                                    placeholder="Ceritakan kebutuhan atau pertanyaan Anda..."
                                    required></textarea>

                                <small class="text-secondary">Minimal 10 karakter</small>

                            </div>

                            <div class="d-flex gap-2">

                                <button
                                    type="submit"
                                    class="bgrd btn px-5 py-2">

                                    <i class="fa-solid fa-paper-plane me-2"></i>

                                    Kirim Pesan

                                </button>

                                <button
                                    type="reset"
                                    class="boc btn px-5 py-2">

                                    <i class="fa-solid fa-rotate-right me-2"></i>

                                    Bersihkan

                                </button>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>

        <!-- Google Maps -->
        <?php if (!empty($site['google_maps_embed'])) : ?>

            <div class="row mt-5">

                <div class="col-12">

                    <h5 class="mb-3">Lokasi Kami</h5>

                    <div class="ratio ratio-16x9 rounded overflow-hidden">

                        <?php echo $site['google_maps_embed']; ?>

                    </div>

                </div>

            </div>

        <?php endif; ?>

    </div>

</section>