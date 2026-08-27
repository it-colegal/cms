<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<style>
    .testimonial-card {

        display: flex;

        flex-direction: column;

        height: 100%;

        background: var(--sf);

        border: 1px solid var(--bd);

        border-radius: 20px;

        overflow: hidden;

        transition: .35s;

        box-shadow: 0 8px 22px rgba(0, 0, 0, .05);

        padding: 28px 24px;

    }

    .testimonial-card:hover {

        transform: translateY(-8px);

        border-color: var(--pri);

        box-shadow: 0 20px 45px rgba(0, 0, 0, .12);

    }

    .testimonial-quote {

        color: var(--pri);

        font-size: 2.5rem;

        line-height: 1;

        margin-bottom: 12px;

        opacity: .6;

    }

    .testimonial-content {

        color: var(--tx2);

        line-height: 1.8;

        font-style: italic;

        flex: 1;

        margin-bottom: 20px;

        display: -webkit-box;

        -webkit-line-clamp: 5;

        -webkit-box-orient: vertical;

        overflow: hidden;

    }

    .testimonial-author {

        display: flex;

        align-items: center;

        gap: 14px;

        border-top: 1px solid var(--bd);

        padding-top: 18px;

        margin-top: auto;

    }

    .testimonial-photo {

        width: 52px;

        height: 52px;

        border-radius: 50%;

        object-fit: cover;

        object-position: center;

        flex-shrink: 0;

        border: 2px solid var(--bd);

    }

    .testimonial-photo-placeholder {

        width: 52px;

        height: 52px;

        border-radius: 50%;

        background: var(--bd);

        display: flex;

        align-items: center;

        justify-content: center;

        flex-shrink: 0;

        color: var(--tx2);

        font-size: 1.25rem;

    }

    .testimonial-name {

        color: var(--tx);

        font-size: .95rem;

        font-weight: 700;

        margin-bottom: 2px;

    }

    .testimonial-meta {

        color: var(--tx2);

        font-size: .82rem;

    }

    /* ===========================
   Pagination
=========================== */

    .testimonial-pagination {

        margin-top: 50px;

    }

    .testimonial-pagination nav {

        display: flex;

        justify-content: center;

    }

    .testimonial-pagination .pagination {

        gap: 10px;

        margin: 0;

        padding: 0;

    }

    .testimonial-pagination .page-item {

        list-style: none;

    }

    .testimonial-pagination .page-link {

        width: 48px;

        height: 48px;

        display: flex;

        justify-content: center;

        align-items: center;

        border-radius: 12px;

        border: 1px solid var(--bd);

        background: var(--sf);

        color: var(--tx) !important;

        font-weight: 600;

        text-decoration: none;

        transition: .25s;

        box-shadow: none;

    }

    .testimonial-pagination .page-link:hover {

        background: var(--pri);

        border-color: var(--pri);

        color: #fff !important;

    }

    .testimonial-pagination .page-item.active .page-link {

        background: var(--pri);

        border-color: var(--pri);

        color: #fff !important;

    }

    .testimonial-pagination .page-item.disabled .page-link {

        background: var(--sf);

        border-color: var(--bd);

        color: var(--tx2) !important;

        opacity: .45;

        pointer-events: none;

    }

    .testimonial-pagination .page-link:focus {

        box-shadow: none;

    }

    .testimonial-pagination .page-link:focus-visible {

        outline: none;

    }

    @media(max-width:576px) {

        .testimonial-pagination .page-link {

            width: 42px;

            height: 42px;

            font-size: .9rem;

        }

    }
</style>

<?php if (!empty($testimonials)): ?>

    <div class="row g-4">

        <?php foreach ($testimonials as $testimonial): ?>

            <div class="col-lg-4 col-md-6 mb-4">

                <div class="testimonial-card">

                    <div class="testimonial-quote">

                        <i class="fa-solid fa-quote-left"></i>

                    </div>

                    <?php if (!empty($testimonial['content'])): ?>

                        <div class="testimonial-content">

                            <?= html_escape($testimonial['content']); ?>

                        </div>

                    <?php endif; ?>

                    <div class="testimonial-author">

                        <?php if (!empty($testimonial['photo_media_id'])): ?>

                            <img src="<?= site_url('media/show/' . $testimonial['photo_media_id']); ?>"
                                alt="<?= html_escape($testimonial['name']); ?>"
                                class="testimonial-photo">

                        <?php else: ?>

                            <div class="testimonial-photo-placeholder">

                                <i class="fa-regular fa-user"></i>

                            </div>

                        <?php endif; ?>

                        <div>

                            <div class="testimonial-name">

                                <?= html_escape($testimonial['name']); ?>

                            </div>

                            <?php if (!empty($testimonial['position']) || !empty($testimonial['company'])): ?>

                                <div class="testimonial-meta">

                                    <?php
                                        $parts = [];
                                        if (!empty($testimonial['position'])) $parts[] = html_escape($testimonial['position']);
                                        if (!empty($testimonial['company'])) $parts[] = html_escape($testimonial['company']);
                                        echo implode(', ', $parts);
                                    ?>

                                </div>

                            <?php endif; ?>

                        </div>

                    </div>

                </div>

            </div>

        <?php endforeach; ?>

    </div>

    <?php if (!empty($pagination)): ?>

        <div class="testimonial-pagination">

            <?= $pagination; ?>

        </div>

    <?php endif; ?>

<?php else: ?>

    <div class="text-center py-5">

        <i class="fa-regular fa-comment-dots fa-5x text-muted mb-4"></i>

        <h3 class="mb-3">

            Belum Ada Testimoni

        </h3>

        <p class="text-muted">

            Kami akan segera menampilkan ulasan dan testimoni dari klien kami.

        </p>

    </div>

<?php endif; ?>
