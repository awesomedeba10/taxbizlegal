import Quill from "quill";
import * as FilePond from "filepond";
import FilePondPluginFileValidateType from "filepond-plugin-file-validate-type";
import FilePondPluginImagePreview from "filepond-plugin-image-preview";
import FilePondPluginFileValidateSize from 'filepond-plugin-file-validate-size';

import "filepond/dist/filepond.min.css";
import "filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css";
import "quill/dist/quill.snow.css";
import "quill/dist/quill.bubble.css";

FilePond.registerPlugin(
    FilePondPluginFileValidateType,
    FilePondPluginImagePreview,
    FilePondPluginFileValidateSize
);

(function () {
    "use strict";

    const toolbarOptions = [
        [{ header: [1, 2, 3, 4, 5, 6, false] }],
        [{ font: [] }],
        ["bold", "italic", "underline", "strike"],
        ["blockquote", "code-block"],
        [{ list: "ordered" }, { list: "bullet" }],
        [{ script: "sub" }, { script: "super" }],
        [{ indent: "-1" }, { indent: "+1" }],
        [{ direction: "rtl" }],
        [{ size: ["small", false, "large", "huge"] }],
        [{ color: [] }, { background: [] }],
        [{ align: [] }],
        ["link", "image", "video"],
        ["clean"],
    ];

    const snowContainer = document.getElementById("quill-snow-container");
    if (snowContainer) {
        const quillSnow = new Quill(snowContainer, {
            modules: { toolbar: toolbarOptions },
            theme: "snow",
        });

        quillSnow.on("editor-change", function (eventName, ...args) {
            console.log(args, quillSnow.root.getSemanticHTML);
            document.getElementById("quill-snow-inputholder").value =
                quillSnow.getSemanticHTML();
        });
    }

    const bubbleContainer = document.getElementById("quill-bubble-container");
    if (bubbleContainer) {
        new Quill(bubbleContainer, {
            theme: "bubble",
        });
    }

    const fileInput = document.querySelector('input[type="file"].filepond');
    const filePondInstance = FilePond.create(fileInput, {
        server: {
            process: {
                url: "/internal/ops/async/uploads",
                method: "POST",
                headers: {
                    "X-CSRF-TOKEN": document
                        .querySelector('meta[name="csrf-token"]')
                        .getAttribute("content"),
                },
                onload: (response) => response,
            },
            revert: {
                url: "/internal/ops/async/uploads",
                method: "DELETE",
                headers: {
                    "X-CSRF-TOKEN": document
                        .querySelector('meta[name="csrf-token"]')
                        .getAttribute("content"),
                },
            },
        },
        acceptedFileTypes: ["image/*"],
        allowMultiple: false,
        allowFileSizeValidation: true,
        maxFileSize: '1MB',
        labelIdle:
            'Drag & Drop your image or <span class="filepond--label-action">Browse</span>',
    });

    const existingFileUrl = fileInput.dataset.source;

    if (existingFileUrl) {
        console.warn(existingFileUrl);
        filePondInstance.files = [
            {
                source: existingFileUrl
            }
        ];
    }

    const slug_input = document.getElementById("blog-slug");
    const slug_helper_div = document.getElementById('blogSlugHelp');

    slug_input.addEventListener("input", function () {
        let slug = slug_input.value
            .toLowerCase()
            .replace(/[^a-z0-9 -]/g, '')
            .replace(/\s+/g, '-')
            .replace(/-+/g, '-');

        slug_input.value = slug;

        slug_helper_div.innerHTML = "Blog URL will looks like : "
            + slug_helper_div.dataset.url + "/" + slug;
    });

})();
