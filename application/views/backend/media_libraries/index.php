<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="content-wrapper">

    <section class="content">

        <div class="container-fluid">

            <div class="row mb-4">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Search Media</label>
                        <input type="text"
                               id="search-input"
                               class="form-control"
                               placeholder="Search by filename..."
                               autocomplete="off">
                        <small class="text-muted">Start typing to search...</small>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="alert alert-info mb-0 mt-4">
                        <i class="fas fa-info-circle"></i>
                        Total: <strong id="total-media"><?= $total_media ?></strong> media file(s)
                    </div>
                </div>
            </div>

            <!-- Media Grid Container -->
            <div class="row" id="media-container">
                <?php if (!empty($media)): ?>
                    <?php foreach ($media as $item): ?>
                        <?php echo $this->_render_card($item); ?>
                    <?php endforeach; ?>
                <?php else: ?>
                    <div class="col-12">
                        <p class="text-muted text-center">No media found</p>
                    </div>
                <?php endif; ?>
            </div>

            <!-- Pagination -->
            <div class="row mt-5">
                <div class="col-12">
                    <nav aria-label="Page navigation">
                        <ul class="pagination justify-content-center" id="pagination-container">
                            <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                                <li class="page-item <?= ($i === $current_page) ? 'active' : '' ?>">
                                    <a class="page-link pagination-link" href="#" data-page="<?= $i ?>">
                                        <?= $i ?>
                                    </a>
                                </li>
                            <?php endfor; ?>
                        </ul>
                    </nav>
                </div>
            </div>

        </div>

    </section>

</div>

<!-- Preview Modal -->
<div class="modal fade" id="previewModal" tabindex="-1" role="dialog" aria-labelledby="previewModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="previewModalLabel">Media Preview</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body" id="previewModalBody">
                <!-- Content loaded via AJAX -->
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a id="downloadBtn" href="#" class="btn btn-primary" download>
                    <i class="fas fa-download"></i> Download
                </a>
            </div>

        </div>
    </div>
</div>

<script>

$(function () {

    const perPage = 9;
    let currentSearch = '';
    let currentPage = <?= $current_page ?>;
    let totalPages = <?= $total_pages ?>;

    // Search functionality
    let searchTimeout;
    $('#search-input').on('keyup', function () {
        clearTimeout(searchTimeout);

        const search = $(this).val().trim();

        searchTimeout = setTimeout(function () {
            if (search === currentSearch) return;

            currentSearch = search;
            currentPage = 1;

            $.ajax({
                url: '<?= site_url('admin/media_libraries/search') ?>',
                type: 'POST',
                dataType: 'json',
                data: {
                    search: search,
                    page: currentPage
                },
                success: function (response) {
                    if (response.success) {
                        $('#media-container').html(response.html);
                        $('#total-media').text(response.total_media);

                        totalPages = response.total_pages;
                        currentPage = response.current_page;

                        updatePagination();
                    }
                },
                error: function () {
                    alert('Error searching media');
                }
            });
        }, 300);
    });

    // Pagination click
    $(document).on('click', '.pagination-link', function (e) {
        e.preventDefault();

        const page = $(this).data('page');

        if (page === currentPage) return;

        currentPage = page;

        $.ajax({
            url: '<?= site_url('admin/media_libraries/load_more') ?>',
            type: 'POST',
            dataType: 'json',
            data: {
                page: page,
                search: currentSearch
            },
            success: function (response) {
                if (response.success) {
                    $('#media-container').html(response.html);
                    updatePagination();

                    $('html, body').animate({
                        scrollTop: $('#media-container').offset().top - 100
                    }, 300);
                }
            },
            error: function () {
                alert('Error loading media');
            }
        });
    });

    // Preview button click
    $(document).on('click', '.btn-preview', function () {
        const mediaId = $(this).data('media-id');

        $.ajax({
            url: '<?= site_url('admin/media_libraries/preview') ?>/' + mediaId,
            type: 'GET',
            dataType: 'json',
            success: function (response) {
                if (response.success) {
                    displayPreview(response);
                    $('#previewModal').modal('show');

                    // Set download button
                    $('#downloadBtn').attr('href', '<?= site_url('admin/media_libraries/download') ?>/' + mediaId);
                }
            },
            error: function () {
                alert('Error loading preview');
            }
        });
    });

    // Display preview in modal
    function displayPreview(data) {
        let html = '<div class="text-center">';

        if (data.is_image) {
            // Image preview
            html += '<img src="' + data.data_uri + '" alt="' + data.original_filename + '" style="max-width: 100%; max-height: 600px; object-fit: contain;">';
        } else if (data.is_pdf) {
            // PDF preview
            html += '<embed src="' + data.data_uri + '" type="application/pdf" width="100%" height="600px">';
        } else {
            // Other files - show icon and info
            html += '<div style="padding: 50px; color: #999;">';
            html += '<i class="fas fa-file" style="font-size: 64px; margin-bottom: 20px; display: block;"></i>';
            html += '<p>Preview not available for this file type</p>';
            html += '<p><strong>' + data.mime_type + '</strong></p>';
            html += '</div>';
        }

        html += '</div>';

        html += '<hr>';

        html += '<div class="row mt-3">';
        html += '<div class="col-md-6">';
        html += '<strong>Filename:</strong> ' + data.original_filename + '<br>';
        html += '<strong>File Size:</strong> ' + data.file_size + '<br>';
        html += '<strong>MIME Type:</strong> ' + data.mime_type + '<br>';
        if (data.width && data.height) {
            html += '<strong>Dimensions:</strong> ' + data.width + ' x ' + data.height + ' px<br>';
        }
        html += '</div>';
        html += '<div class="col-md-6">';
        html += '<strong>Upload Date:</strong> ' + data.created_at + '<br>';
        html += '<strong>Used Count:</strong> ' + data.used_count + ' time(s)<br>';
        html += '<strong>UUID:</strong> <small>' + data.uuid + '</small><br>';
        html += '</div>';
        html += '</div>';

        $('#previewModalBody').html(html);
        $('#previewModalLabel').text(data.original_filename);
    }

    // Update pagination UI
    function updatePagination() {
        $('.pagination-link').parent().removeClass('active');
        $('.pagination-link[data-page="' + currentPage + '"]').parent().addClass('active');
    }

});

</script>

<style>
.media-card {
    transition: transform 0.2s, box-shadow 0.2s;
}

.media-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15) !important;
}

.cursor-pointer {
    cursor: pointer;
}

.pagination-link {
    cursor: pointer;
}
</style>
