var Quagga = window.Quagga;

var App = {
    _scanner: null,
    init: function () {
        this.attachListeners();
    },
    decode: function (src) {
        Quagga.decodeSingle({
            decoder: { reader: ['ean_reader'] },
            size: 640,
            locator: { patchSize: 'small', halfSample: false },
            src
        }, function (result) {
            if (result.codeResult) {
                document.querySelector('input.isbn').value = result.codeResult.code;
            } else {
                document.querySelector('input.isbn').value = "인식하지 못했습니다. 직접 입력해주세요";
            }
        });
    },
    attachListeners: function () {
        var self = this,
            button = document.querySelector('.input-field input + .button.scan'),
            fileInput = document.querySelector('.input-field input[type=file]');

        button.addEventListener("click", function onClick(e) {
            e.preventDefault();
            button.removeEventListener("click", onClick);
            document.querySelector('.input-field input[type=file]').click();
        });

        fileInput.addEventListener("change", function onChange(e) {
            e.preventDefault();
            fileInput.removeEventListener("change", onChange);
            if (e.target.files && e.target.files.length) {
                self.decode(URL.createObjectURL(e.target.files[0]));
            }
        })
    }
};

App.init();