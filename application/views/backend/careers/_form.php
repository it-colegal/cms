<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="card">

    <div class="card-body">

        <div class="form-group">
            <label>Position <span class="text-danger">*</span></label>
            <input type="text"
                   name="position"
                   id="position"
                   class="form-control"
                   value="<?= set_value('position', $career['position'] ?? '') ?>"
                   required>
            <small class="text-muted">Slug akan di-generate otomatis dari position.</small>
        </div>

        <div class="form-group">
            <label>Location <span class="text-danger">*</span></label>
            <input type="text"
                   name="location"
                   class="form-control"
                   value="<?= set_value('location', $career['location'] ?? '') ?>"
                   placeholder="e.g., Jakarta, Indonesia"
                   required>
        </div>

        <div class="form-group">
            <label>Description <span class="text-danger">*</span></label>
            <textarea name="description"
                      id="description"
                      class="form-control tinymce"
                      rows="10"
                      required><?= set_value('description', $career['description'] ?? '') ?></textarea>
            <small class="text-muted">Gunakan editor untuk detail pekerjaan, requirement, benefit, dll.</small>
        </div>

        <div class="form-group">
            <label>Status</label>
            <div class="custom-control custom-switch">
                <input type="checkbox"
                       class="custom-control-input"
                       id="status"
                       name="status"
                       value="published"
                       <?= (set_value('status', $career['status'] ?? 'draft') === 'published') ? 'checked' : '' ?>>
                <label class="custom-control-label" for="status">
                    Publish
                </label>
            </div>
            <small class="text-muted">Jika diaktifkan, career akan tampil di website.</small>
        </div>

    </div>

</div>

<script>

$(function () {

    // TinyMCE initialization
    tinymce.init({
        selector: '.tinymce',
        height: 400,
        plugins: [
            'advlist autolink lists link image charmap print preview hr anchor pagebreak',
            'searchreplace wordcount visualblocks visualchars code fullscreen',
            'insertdatetime media nonbreaking save table contextmenu directionality',
            'emoticons template paste textcolor colorpicker textpattern'
        ],
        toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons',
        menubar: 'file edit view insert format tools table help',
        relative_urls: false,
        remove_script_host: false,
        convert_urls: false
    });

});

</script>
