<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<style>
    .team-card {

        display: flex;

        flex-direction: column;

        align-items: center;

        height: 100%;

        background: var(--sf);

        border: 1px solid var(--bd);

        border-radius: 20px;

        overflow: hidden;

        transition: .35s;

        box-shadow: 0 8px 22px rgba(0, 0, 0, .05);

        text-align: center;

    }

    .team-card:hover {

        transform: translateY(-8px);

        border-color: var(--pri);

        box-shadow: 0 20px 45px rgba(0, 0, 0, .12);

    }

    .team-photo {

        position: relative;

        width: 100%;

        height: 260px;

        overflow: hidden;

        background: #ececec;

    }

    .team-photo img {

        width: 100%;

        height: 100%;

        object-fit: cover;

        object-position: top center;

        transition: .45s;

    }

    .team-card:hover .team-photo img {

        transform: scale(1.06);

    }

    .team-photo-placeholder {

        width: 100%;

        height: 260px;

        display: flex;

        align-items: center;

        justify-content: center;

        background: var(--bd);

        color: var(--tx2);

        font-size: 4rem;

    }

    .team-body {

        padding: 22px 20px;

        flex: 1;

        display: flex;

        flex-direction: column;

        align-items: center;

    }

    .team-name {

        color: var(--tx);

        font-size: 1.1rem;

        font-weight: 700;

        margin-bottom: 6px;

    }

    .team-position {

        color: var(--pri);

        font-size: .875rem;

        font-weight: 600;

        margin-bottom: 14px;

    }

    .team-linkedin {

        color: var(--tx2);

        font-size: .875rem;

        text-decoration: none;

        transition: .25s;

        display: inline-flex;

        align-items: center;

        gap: 6px;

    }

    .team-linkedin:hover {

        color: #0a66c2;

    }

    /* ===========================
   Pagination
=========================== */

    .team-pagination {

        margin-top: 50px;

    }

    .team-pagination nav {

        display: flex;

        justify-content: center;

    }

    .team-pagination .pagination {

        gap: 10px;

        margin: 0;

        padding: 0;

    }

    .team-pagination .page-item {

        list-style: none;

    }

    .team-pagination .page-link {

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

    .team-pagination .page-link:hover {

        background: var(--pri);

        border-color: var(--pri);

        color: #fff !important;

    }

    .team-pagination .page-item.active .page-link {

        background: var(--pri);

        border-color: var(--pri);

        color: #fff !important;

    }

    .team-pagination .page-item.disabled .page-link {

        background: var(--sf);

        border-color: var(--bd);

        color: var(--tx2) !important;

        opacity: .45;

        pointer-events: none;

    }

    .team-pagination .page-link:focus {

        box-shadow: none;

    }

    .team-pagination .page-link:focus-visible {

        outline: none;

    }

    @media(max-width:991px) {

        .team-photo,
        .team-photo-placeholder {

            height: 230px;

        }

    }

    @media(max-width:576px) {

        .team-pagination .page-link {

            width: 42px;

            height: 42px;

            font-size: .9rem;

        }

    }
</style>

<?php if (!empty($team)): ?>

    <div class="row g-4">

        <?php foreach ($team as $member): ?>

            <div class="col-lg-4 col-md-6 mb-4">

                <div class="team-card">

                    <?php if (!empty($member['photo_media_id'])): ?>

                        <div class="team-photo">

                            <img src="<?= site_url('media/show/' . $member['photo_media_id']); ?>"
                                alt="<?= html_escape($member['name']); ?>">

                        </div>

                    <?php else: ?>

                        <div class="team-photo-placeholder">

                            <i class="fa-regular fa-user"></i>

                        </div>

                    <?php endif; ?>

                    <div class="team-body">

                        <h3 class="team-name">

                            <?= html_escape($member['name']); ?>

                        </h3>

                        <?php if (!empty($member['position'])): ?>

                            <div class="team-position">

                                <?= html_escape($member['position']); ?>

                            </div>

                        <?php endif; ?>

                        <?php if (!empty($member['linkedin'])): ?>

                            <a href="<?= html_escape($member['linkedin']); ?>"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="team-linkedin">

                                <i class="fa-brands fa-linkedin"></i>

                                LinkedIn

                            </a>

                        <?php endif; ?>

                    </div>

                </div>

            </div>

        <?php endforeach; ?>

    </div>

    <?php if (!empty($pagination)): ?>

        <div class="team-pagination">

            <?= $pagination; ?>

        </div>

    <?php endif; ?>

<?php else: ?>

    <div class="text-center py-5">

        <i class="fa-regular fa-users fa-5x text-muted mb-4"></i>

        <h3 class="mb-3">

            Belum Ada Anggota Tim

        </h3>

        <p class="text-muted">

            Kami akan segera memperkenalkan anggota tim kami kepada Anda.

        </p>

    </div>

<?php endif; ?>
