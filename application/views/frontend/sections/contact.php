<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if (empty($site))
{
    return;
}
?>

<section id="contact" class="section-padding position-relative overflow-hidden">

    <!-- Background Decorative Elements -->
    <div class="position-absolute" style="top: -100px; right: -100px; width: 300px; height: 300px; background: radial-gradient(circle, rgba(var(--pt-rgb),.05) 0%, transparent 70%); border-radius: 50%; z-index: 0;"></div>
    <div class="position-absolute" style="bottom: -80px; left: -100px; width: 250px; height: 250px; background: radial-gradient(circle, rgba(var(--pt-rgb),.05) 0%, transparent 70%); border-radius: 50%; z-index: 0;"></div>

    <div class="container position-relative" style="z-index: 1;">

        <!-- Header -->
        <div class="text-center mb-5">

            <span class="hbadge">
                <span class="bdot"></span>
                Hubungi Kami
            </span>

            <h2 class="stitle mt-3">
                Mari Berdiskusi <span class="gt">Bersama Kami</span>
            </h2>

            <p class="ssub mt-3 mx-auto" style="max-width: 500px;">
                Kami siap membantu menjawab pertanyaan maupun kebutuhan konsultasi Anda.
            </p>

        </div>

        <!-- Main Contact Section -->
        <div class="row g-4 align-items-stretch">

            <!-- Left Column - Contact Information -->
            <div class="col-lg-4">

                <div class="h-100 p-4 p-lg-5 rounded-3" style="background: linear-gradient(135deg, rgba(var(--pt-rgb),.08) 0%, rgba(var(--pt-rgb),.02) 100%); border: 1px solid rgba(var(--pt-rgb),.1); backdrop-filter: blur(10px);">

                    <h5 class="mb-4 fw-bold">Informasi Kontak</h5>

                    <!-- Company Info -->
                    <?php if (!empty($site['company_name'])) : ?>

                        <div class="mb-4 pb-4 border-bottom" style="border-color: rgba(var(--pt-rgb),.1);">

                            <div class="d-flex gap-3">

                                <div class="flex-shrink-0">
                                    <div class="rounded-2 p-3" style="background: rgba(var(--pt-rgb),.1);">
                                        <i class="fa-solid fa-building" style="font-size:1.2rem;color:var(--pt);"></i>
                                    </div>
                                </div>

                                <div class="flex-grow-1">
                                    <p class="small text-secondary mb-1">Perusahaan</p>
                                    <p class="fw-semibold mb-0"><?php echo html_escape($site['company_name']); ?></p>
                                </div>

                            </div>

                        </div>

                    <?php endif; ?>

                    <!-- Address Info -->
                    <?php if (!empty($site['address'])) : ?>

                        <div class="mb-4 pb-4 border-bottom" style="border-color: rgba(var(--pt-rgb),.1);">

                            <div class="d-flex gap-3">

                                <div class="flex-shrink-0">
                                    <div class="rounded-2 p-3" style="background: rgba(var(--pt-rgb),.1);">
                                        <i class="fa-solid fa-map-location-dot" style="font-size:1.2rem;color:var(--pt);"></i>
                                    </div>
                                </div>

                                <div class="flex-grow-1">
                                    <p class="small text-secondary mb-1">Alamat</p>
                                    <p class="fw-semibold small mb-0"><?php echo nl2br(html_escape($site['address'])); ?></p>
                                </div>

                            </div>

                        </div>

                    <?php endif; ?>

                    <!-- Phone Info -->
                    <?php if (!empty($site['phone'])) : ?>

                        <div class="mb-4 pb-4 border-bottom" style="border-color: rgba(var(--pt-rgb),.1);">

                            <div class="d-flex gap-3">

                                <div class="flex-shrink-0">
                                    <div class="rounded-2 p-3" style="background: rgba(var(--pt-rgb),.1);">
                                        <i class="fa-solid fa-phone" style="font-size:1.2rem;color:var(--pt);"></i>
                                    </div>
                                </div>

                                <div class="flex-grow-1">
                                    <p class="small text-secondary mb-1">Telepon</p>
                                    <a href="tel:<?php echo html_escape($site['phone']); ?>" class="fw-semibold text-decoration-none" style="color:var(--tx);">
                                        <?php echo html_escape($site['phone']); ?>
                                    </a>
                                </div>

                            </div>

                        </div>

                    <?php endif; ?>

                    <!-- Email Info -->
                    <?php if (!empty($site['email'])) : ?>

                        <div class="mb-0">

                            <div class="d-flex gap-3">

                                <div class="flex-shrink-0">
                                    <div class="rounded-2 p-3" style="background: rgba(var(--pt-rgb),.1);">
                                        <i class="fa-solid fa-envelope" style="font-size:1.2rem;color:var(--pt);"></i>
                                    </div>
                                </div>

                                <div class="flex-grow-1">
                                    <p class="small text-secondary mb-1">Email</p>
                                    <a href="mailto:<?php echo html_escape($site['email']); ?>" class="fw-semibold text-decoration-none" style="color:var(--tx);">
                                        <?php echo html_escape($site['email']); ?>
                                    </a>
                                </div>

                            </div>

                        </div>

                    <?php endif; ?>

                </div>

            </div>

            <!-- Right Column - Contact Form -->
            <div class="col-lg-8">

                <div class="h-100 p-4 p-lg-5 rounded-3" style="background: linear-gradient(135deg, rgba(var(--pt-rgb),.04) 0%, rgba(var(--pt-rgb),.01) 100%); border: 1px solid rgba(var(--pt-rgb),.1); backdrop-filter: blur(10px);">

                    <h5 class="mb-4 fw-bold">Kirim Pesan Anda</h5>

                    <form method="post" action="<?= base_url('contact/submit'); ?>" id="contactForm">

                        <!-- Name & Email Row -->
                        <div class="row g-3 mb-3">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name" class="form-label small fw-semibold d-flex align-items-center gap-2 mb-2">
                                        <i class="fa-solid fa-user" style="font-size:0.9rem;color:var(--pt);"></i>
                                        Nama Lengkap
                                    </label>
                                    <input
                                        type="text"
                                        name="name"
                                        id="name"
                                        class="form-control form-control-lg rounded-2"
                                        placeholder="Nama Anda"
                                        required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email" class="form-label small fw-semibold d-flex align-items-center gap-2 mb-2">
                                        <i class="fa-solid fa-envelope" style="font-size:0.9rem;color:var(--pt);"></i>
                                        Email
                                    </label>
                                    <input
                                        type="email"
                                        name="email"
                                        id="email"
                                        class="form-control form-control-lg rounded-2"
                                        placeholder="Email Anda"
                                        required>
                                </div>
                            </div>

                        </div>

                        <!-- Phone -->
                        <div class="mb-3">
                            <div class="form-group">
                                <label for="phone" class="form-label small fw-semibold d-flex align-items-center gap-2 mb-2">
                                    <i class="fa-solid fa-phone" style="font-size:0.9rem;color:var(--pt);"></i>
                                    Nomor Telepon
                                </label>
                                <input
                                    type="tel"
                                    name="phone"
                                    id="phone"
                                    class="form-control form-control-lg rounded-2"
                                    placeholder="+62 812-3456-7890">
                            </div>
                        </div>

                        <!-- Subject -->
                        <div class="mb-3">
                            <div class="form-group">
                                <label for="subject" class="form-label small fw-semibold d-flex align-items-center gap-2 mb-2">
                                    <i class="fa-solid fa-list" style="font-size:0.9rem;color:var(--pt);"></i>
                                    Perihal
                                </label>
                                <select
                                    name="subject"
                                    id="subject"
                                    class="form-select form-select-lg rounded-2"
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
                        </div>

                        <!-- Message -->
                        <div class="mb-4">
                            <div class="form-group">
                                <label for="message" class="form-label small fw-semibold d-flex align-items-center gap-2 mb-2">
                                    <i class="fa-solid fa-pen" style="font-size:0.9rem;color:var(--pt);"></i>
                                    Pesan
                                </label>
                                <textarea
                                    name="message"
                                    id="message"
                                    rows="5"
                                    class="form-control rounded-2"
                                    placeholder="Ceritakan kebutuhan atau pertanyaan Anda..."
                                    style="resize: none; font-family: inherit;"
                                    required></textarea>
                            </div>
                        </div>

                        <!-- Buttons -->
                        <div class="d-flex gap-2 pt-2">

                            <button
                                type="submit"
                                class="bgrd btn btn-lg flex-grow-1 rounded-2 fw-semibold"
                                style="transition: all .3s ease;">

                                <i class="fa-solid fa-paper-plane me-2"></i>Kirim Pesan

                            </button>

                            <button
                                type="reset"
                                class="btn btn-lg rounded-2 fw-semibold"
                                style="background: rgba(var(--pt-rgb),.1); color: var(--tx); border: 1px solid rgba(var(--pt-rgb),.2); transition: all .3s ease;">

                                <i class="fa-solid fa-rotate-right me-2"></i>Reset

                            </button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

        <!-- Google Maps -->
        <?php if (!empty($site['google_maps_embed'])) : ?>

            <div class="row mt-5">

                <div class="col-12">

                    <div class="ratio ratio-16x9 rounded-3 overflow-hidden" style="border: 1px solid rgba(var(--pt-rgb),.1);">

                        <?php echo $site['google_maps_embed']; ?>

                    </div>

                </div>

            </div>

        <?php endif; ?>

    </div>

</section>

<style>
    /* Form Styling - Default Colors */
    #contactForm .form-control,
    #contactForm .form-select {
        font-size: 1rem;
        padding: 12px 16px;
        transition: all 0.3s ease;
    }

    #contactForm .form-label {
        margin-bottom: 0.5rem;
    }

    #contactForm .btn {
        padding: 12px 24px;
        font-weight: 600;
        transition: all 0.3s ease;
    }

    #contactForm .bgrd:hover {
        transform: translateY(-2px);
        box-shadow: 0 12px 24px rgba(var(--pt-rgb), 0.2);
    }

    #contactForm button[type="reset"]:hover {
        background: rgba(var(--pt-rgb), 0.15) !important;
        border-color: var(--pt) !important;
    }

    /* Responsive Adjustments */
    @media (max-width: 768px) {
        #contactForm .form-control,
        #contactForm .form-select {
            font-size: 16px; /* Prevents zoom on iOS */
        }
    }
</style>