import Quill from "quill";
import * as FilePond from "filepond";
import FilePondPluginFileValidateType from "filepond-plugin-file-validate-type";
import FilePondPluginImagePreview from "filepond-plugin-image-preview";

import "filepond/dist/filepond.min.css";
import "filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css";
import "quill/dist/quill.snow.css";
import "quill/dist/quill.bubble.css";

FilePond.registerPlugin(
    FilePondPluginFileValidateType,
    FilePondPluginImagePreview
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
        ["image", "video"],
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

    FilePond.create(document.querySelector('input[type="file"].filepond'), {
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
        labelIdle:
            'Drag & Drop your image or <span class="filepond--label-action">Browse</span>',
    });
})();
