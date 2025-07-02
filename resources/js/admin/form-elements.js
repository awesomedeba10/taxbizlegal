import Quill from 'quill';

import 'quill/dist/quill.snow.css';
import 'quill/dist/quill.bubble.css';

(function () {
    'use strict';

    const toolbarOptions = [
        [{ 'header': [1, 2, 3, 4, 5, 6, false] }],
        [{ 'font': [] }],
        ['bold', 'italic', 'underline', 'strike'],
        ['blockquote', 'code-block'],
        [{ 'list': 'ordered' }, { 'list': 'bullet' }],
        [{ 'script': 'sub' }, { 'script': 'super' }],
        [{ 'indent': '-1' }, { 'indent': '+1' }],
        [{ 'direction': 'rtl' }],
        [{ 'size': ['small', false, 'large', 'huge'] }],
        [{ 'color': [] }, { 'background': [] }],
        [{ 'align': [] }],
        ['image', 'video'],
        ['clean']
    ];

    const snowContainer = document.getElementById('quill-snow-container');
    if (snowContainer) {
        const quillSnow = new Quill(snowContainer, {
            modules: { toolbar: toolbarOptions },
            theme: 'snow'
        });

        quillSnow.on('editor-change', function (eventName, ...args) {
            console.log(args , quillSnow.root.getSemanticHTML);
            document.getElementById('quill-snow-inputholder').value = quillSnow.getSemanticHTML();
        });
    }

    const bubbleContainer = document.getElementById('quill-bubble-container');
    if (bubbleContainer) {
        new Quill(bubbleContainer, {
            theme: 'bubble'
        });
    }

})();
