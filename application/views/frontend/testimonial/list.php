<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<style>
.testimonial-card {
    display: flex;
    flex-direction: column;
    background: var(--sf);
    border: 1px solid var(--bd);
    border-radius: 20px;
    overflow: hidden;
    transition: .35s;
    box-shadow: 0 8px 22px rgba(0, 0, 0, .05);
    padding: 32px 28px;
    height: 100%;
}
.testimonial-card:hover {
    transform: translateY(-8px);
    border-color: var(--pri);
    box-shadow: 0 20px 45px rgba(0, 0, 0, .12);
}
.testimonial-quote {
    color: var(--tx);
    font-size: 1rem;
    line-height: 1.8;
    margin-bottom: 20px;
    flex: 1;
    display: -webkit-box;
    -webkit-line-clamp: 4;
    -webkit-box-orient: vertical;
    overflow: hidden;
    font-style: italic;
}
.testimonial-author {
    display: flex;
    gap: 14px;
    align-items: center;
}
.testimonial-avatar {
    width: 48px;
    height: 48px;
    border-radius: 50%;
    object-fit: cover;
    flex-shrink: 0;
}
.testimonial-info h4 {
    color: var(--tx);
    font-size: .95rem;
    font-weight: 700;
    margin: 0 0 4px 0;
}
.testimonial-info p {
    color: var(--tx2);
    font-size: .85rem;
    margin: 0;
}
.testimonial-stars {
    color: #ffc107;
    font-size: .85rem;
}
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
                    <p class="testimonial-quote">"<?= html_escape($testimonial['quote'] ?? $testimonial['content']); ?>"</p>
                    <div class="testimonial-author">
                        <?php if (!empty($testimonial['author_photo_media_id'])): ?>
                            <img src="<?= site_url('media/show/' . $testimonial['author_photo_media_id']); ?>" alt="<?= html_escape($testimonial['author_name']); ?>" class="testimonial-avatar">
                        <?php else: ?>
                            <div class="testimonial-avatar d-flex align-items-center justify-content-center bg-secondary text-white">
                                <i class="fa-solid fa-user"></i>
                            </div>
                        <?php endif; ?>
                        <div class="testimonial-info">
                            <h4><?= html_escape($testimonial['author_name']); ?></h4>
                            <?php if (!empty($testimonial['author_title'])): ?>
                                <p><?= html_escape($testimonial['author_title']); ?></p>
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
        <i class="fa-regular fa-star fa-5x text-muted mb-4"></i>
        <h3 class="mb-3">Belum Ada Testimonial</h3>
        <p class="text-muted">Kami akan segera menampilkan testimonial dari klien kami.</p>
    </div>
<?php endif; ?>
