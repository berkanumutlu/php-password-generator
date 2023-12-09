<?php
require 'Password.php';
$password = new Password();
$dataSet = $password->getDataSet();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Password Generator</title>
    <meta name="description" content="PHP Password Generator">
    <meta name="keywords" content="password generator">
    <meta name="author" content="Berkan Ümütlü">
    <meta name="copyright" content="Berkan Ümütlü">
    <meta name="owner" content="Berkan Ümütlü">
    <meta name="url" content="http://github.com/berkanumutlu">
    <link rel="stylesheet" href="assets/plugins/bootstrap-5.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/plugins/highlight.js/styles/default.min.css">
    <link rel="stylesheet" href="assets/style.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-xl-8 mx-auto">
            <div class="card my-5">
                <div class="card-header d-flex align-items-center">
                    <svg fill="#43a5a1" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" class="me-2"
                         xmlns:xlink="http://www.w3.org/1999/xlink" width="56" height="56" viewBox="0 0 47 47"
                         xml:space="preserve">
                            <g>
                                <g>
                                    <path d="M37.076,19.748c-0.824,0-1.494,0.672-1.494,1.499v1.46h2.991v-1.46C38.573,20.42,37.9,19.748,37.076,19.748z"></path>
                                    <path d="M41.227,12.635H5.773C2.6,12.635,0,15.237,0,18.41v10.18c0,3.178,2.6,5.775,5.773,5.775h35.454
                                        C44.4,34.365,47,31.768,47,28.59V18.41C47,15.237,44.4,12.635,41.227,12.635z M12.56,25.077l1.385,1.508l-2.399,1.8l-0.984-1.8
                                        c-0.145-0.257-0.372-0.761-0.691-1.508c-0.349,0.821-0.581,1.321-0.696,1.508l-0.998,1.8l-2.466-1.8l1.491-1.508
                                        c0.42-0.415,0.827-0.771,1.229-1.063c-0.41-0.037-0.949-0.113-1.614-0.238l-2.065-0.336l0.958-2.812l1.852,0.842
                                        c0.195,0.088,0.68,0.365,1.452,0.824c-0.165-0.747-0.271-1.302-0.319-1.666l-0.263-2.013h2.941l-0.238,2.013
                                        c-0.052,0.49-0.166,1.045-0.335,1.666c0.339-0.17,0.563-0.283,0.669-0.345c0.372-0.207,0.659-0.35,0.852-0.442l1.853-0.879
                                        l0.918,2.812l-2.049,0.428c-0.375,0.072-0.931,0.119-1.67,0.146C11.874,24.406,12.266,24.758,12.56,25.077z M26.137,25.077
                                        l1.387,1.508l-2.399,1.799l-0.983-1.799c-0.145-0.257-0.372-0.761-0.69-1.508c-0.35,0.821-0.58,1.321-0.695,1.508l-1,1.799
                                        l-2.465-1.799l1.491-1.508c0.42-0.415,0.826-0.771,1.229-1.063c-0.408-0.037-0.949-0.113-1.614-0.238l-2.066-0.336l0.959-2.812
                                        l1.853,0.842c0.193,0.088,0.68,0.365,1.451,0.824c-0.169-0.747-0.275-1.302-0.32-1.666l-0.264-2.011h2.942l-0.239,2.011
                                        c-0.054,0.49-0.166,1.045-0.333,1.666c0.337-0.17,0.561-0.283,0.668-0.345c0.37-0.207,0.658-0.35,0.852-0.442l1.854-0.879
                                        l0.919,2.812l-2.051,0.428c-0.375,0.072-0.929,0.119-1.669,0.146C25.451,24.406,25.844,24.758,26.137,25.077z M41.35,27.625
                                        c0,0.619-0.507,1.125-1.125,1.125H33.93c-0.619,0-1.125-0.506-1.125-1.125v-3.794c0-0.619,0.506-1.125,1.125-1.125h0.152v-1.46
                                        c0-1.653,1.343-2.998,2.994-2.998c1.652,0,2.996,1.344,2.996,2.998v1.46h0.152c0.617,0,1.125,0.506,1.125,1.125V27.625z"></path>
                                </g>
                            </g>
                    </svg>
                    <h1 class="mb-0 fs-4 fw-semibold">Password Generator</h1>
                </div>
                <div class="card-body">
                    <form action="ajax.php" method="POST">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group form-input-range-group">
                                    <label for="length" class="me-4">Length:</label>
                                    <div class="input-group">
                                        <input type="range" name="length" id="length" class="form-range"
                                               min="8" max="256" value="16">
                                        <output class="inputRangeValueLabel"></output>
                                    </div>
                                </div>
                            </div>
                            <hr class="m-0">
                            <div class="col-12">
                                <div class="form-group">
                                    <ul class="list-group list-group-horizontal list-group-flush">
                                        <li class="list-group-item">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" name="useLowercase"
                                                       id="useLowercase" role="switch" checked>
                                                <label class="form-check-label" for="useLowercase">Use lowercase</label>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" name="useUppercase"
                                                       id="useUppercase" role="switch" checked>
                                                <label class="form-check-label" for="useUppercase">Use uppercase</label>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" name="useDigits"
                                                       id="useDigits" role="switch" checked>
                                                <label class="form-check-label" for="useDigits">Use digits</label>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" name="useSymbols"
                                                       id="useSymbols" role="switch">
                                                <label class="form-check-label" for="useSymbols">Use symbols</label>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox"
                                                       name="avoidSimilarCharacters" id="avoidSimilarCharacters"
                                                       role="switch">
                                                <label class="form-check-label" for="avoidSimilarCharacters">Avoid
                                                    similar characters</label>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox"
                                                       name="avoidAmbiguousCharacters" id="avoidAmbiguousCharacters"
                                                       role="switch">
                                                <label class="form-check-label stretched-link"
                                                       for="avoidAmbiguousCharacters">Avoid ambiguous characters</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <hr class="m-0">
                            <div class="col-12">
                                <div class="form-group justify-content-center">
                                    <button type="submit" class="btn btn-primary">Generate</button>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="alert-message">
                                    <div class="alert alert-danger d-flex align-items-center" role="alert">
                                        <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Danger:"
                                             style="fill: #58151c;" xmlns="http://www.w3.org/2000/svg" width="24"
                                             height="24" viewBox="0 0 24 24">
                                            <path d="M12 5.177l8.631 15.823h-17.262l8.631-15.823zm0-4.177l-12 22h24l-12-22zm-1 9h2v6h-2v-6zm1 9.75c-.689 0-1.25-.56-1.25-1.25s.561-1.25 1.25-1.25 1.25.56 1.25 1.25-.561 1.25-1.25 1.25z"/>
                                        </svg>
                                        <div class="text"></div>
                                    </div>
                                </div>
                            </div>
                            <hr class="m-0">
                        </div>
                    </form>
                    <div class="generated-password-section">
                        <label for="generated-password" class="fw-bold">Generated Password</label>
                        <pre class="codeblock-buttons" id="generated-password">
                            <div class="codeblock-button-wrapper">
                                <button class="btn nohighlight copy-cmd" aria-label="Copy code to clipboard"
                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-title="Copy code to clipboard">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="#444"
                                         xmlns="http://www.w3.org/2000/svg"> <path
                                                d="M8 2C7.44772 2 7 2.44772 7 3C7 3.55228 7.44772 4 8 4H10C10.5523 4 11 3.55228 11 3C11 2.44772 10.5523 2 10 2H8Z"
                                                fill="#444"></path> <path
                                                d="M3 5C3 3.89543 3.89543 3 5 3C5 4.65685 6.34315 6 8 6H10C11.6569 6 13 4.65685 13 3C14.1046 3 15 3.89543 15 5V11H10.4142L11.7071 9.70711C12.0976 9.31658 12.0976 8.68342 11.7071 8.29289C11.3166 7.90237 10.6834 7.90237 10.2929 8.29289L7.29289 11.2929C6.90237 11.6834 6.90237 12.3166 7.29289 12.7071L10.2929 15.7071C10.6834 16.0976 11.3166 16.0976 11.7071 15.7071C12.0976 15.3166 12.0976 14.6834 11.7071 14.2929L10.4142 13H15V16C15 17.1046 14.1046 18 13 18H5C3.89543 18 3 17.1046 3 16V5Z"
                                                fill="#444"></path> <path
                                                d="M15 11H17C17.5523 11 18 11.4477 18 12C18 12.5523 17.5523 13 17 13H15V11Z"
                                                fill="#444"></path> </svg>
                                </button>
                            </div>
                            <code id="generatedPassword" class="language-html"></code>
                        </pre>
                        <hr class="m-0">
                    </div>
                    <div class="description">
                        <p class="card-text">Use lowercase => <?= htmlentities($dataSet->lowercaseCharacters) ?></p>
                        <p class="card-text">Use uppercase => <?= htmlentities($dataSet->uppercaseCharacters) ?></p>
                        <p class="card-text">Use digits => <?= htmlentities($dataSet->digits) ?></p>
                        <p class="card-text">Use symbols => <?= htmlentities($dataSet->symbols) ?></p>
                        <p class="card-text">Avoid similar characters
                            => <?= htmlentities($dataSet->similarCharacters) ?></p>
                        <p class="card-text">Avoid ambiguous characters
                            => <?= htmlentities($dataSet->ambiguousCharacters) ?></p>
                    </div>
                </div>
                <div class="card-footer text-body-secondary">
                    <p class="mb-0">Copyright © 2023 <a href="https://github.com/berkanumutlu" target="_blank">Berkan
                            Ümütlü</a>. All Right Reserved.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="assets/plugins/jQuery/jquery-3.7.1.min.js"></script>
<script src="assets/plugins/popperjs/popper.min.js"></script>
<script src="assets/plugins/bootstrap-5.3.2/js/bootstrap.min.js"></script>
<script src="assets/plugins/highlight.js/highlight.min.js"></script>
<script>
    function setInputRangeValueLabel(range, label) {
        const val = range.value;
        const min = range.min ? range.min : 0;
        const max = range.max ? range.max : 100;
        const newVal = Number(((val - min) * 100) / (max - min));
        label.innerHTML = val;
        label.style.left = `calc(${newVal}% + (${8 - newVal * 0.15}px))`;
    }

    function copyToClipboard(text) {
        navigator.clipboard.writeText(text);
    }

    $(document).ready(function () {
        //Input Range
        const range = document.querySelector("input[type='range']");
        const valueLabel = document.querySelector(".inputRangeValueLabel");
        range.addEventListener("input", () => {
            setInputRangeValueLabel(range, valueLabel);
        });
        setInputRangeValueLabel(range, valueLabel);
        //Copy code to clipboard
        hljs.highlightAll();
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
        $('.copy-cmd').on("click", function (e) {
            var $this = $(this)
            const tooltipInstance = bootstrap.Tooltip.getInstance($this);
            copyToClipboard($this.closest('pre').find('code').text());
            tooltipInstance.setContent({'.tooltip-inner': 'Copied!'});
            $this.tooltip("show");
            setTimeout(function () {
                $this.tooltip("hide");
                tooltipInstance.setContent({'.tooltip-inner': $this.attr('aria-label')});
            }, 2500);
            e.preventDefault();
        });
        //Form Submit AJAX
        $("form").submit(function (event) {
            var url = $(this).attr('action');
            var formData = $(this).serializeArray();
            formData.push({name: 'generatePassword', value: 1});
            $.ajax({
                url: url,
                type: "POST",
                data: formData,
                dataType: "JSON"
            }).done(function (response) {
                let alert = $('.alert-message');
                let alertText = $('.alert-message .text');
                alert.hide();
                alertText.text();
                if (response.hasOwnProperty('message')) {
                    alertText.text(response.message);
                    alert.show();
                }
                if (response.hasOwnProperty('status')) {
                    if (response.status) {
                        if (response.hasOwnProperty('data')) {
                            $('#generatedPassword').text(response.data);
                        }
                    }
                }
            });
            event.preventDefault();
        });
    });
</script>
</body>
</html>
