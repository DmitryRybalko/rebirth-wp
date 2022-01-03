<div class="main__document">
    <img class="main__doc-icon" src="<?php bloginfo("template_url")?>/assets/icons/document.svg"
        alt="иконка с изображением документа" />
    <?php the_field("document-title-design")?>
    <div class="icons-container">
        <a class="main__document-link view-link" href="<?php the_field("document-file")?>" target="_blank">
            <img src="<?php bloginfo("template_url")?>/assets/icons/eye.svg" alt="просмотреть документ"
                class="main__document-icon" />
        </a>
        <a class="main__document-link" href="<?php the_field("document-file")?>"
            download="<?php the_field("document-title-download")?>" target="_blank">
            <img src="<?php bloginfo("template_url")?>/assets/icons/download.svg" alt="скачать документ"
                class="main__document-icon" />
        </a>
    </div>
</div>