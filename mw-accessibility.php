
    <style>
        /* Define CSS variables in root */
        :root {
            /* Monochrome */
            --white: #ffffff;
            --black: #000000;
            
            /* Primary colors */
            --primary-1: #CAEDE7;
            --primary-2: #96DBCF;
            --primary-3: #62C9B7;
            --primary-4: #2EB7A0;
            --primary-5: #228978;
            --primary-6: #175B50;
            --primary-7: #0B2D28;
            --primary: var(--primary-4);
            
            /* Secondary colors */
            --secondary-1: #FDCEC0;
            --secondary-2: #FCB099;
            --secondary-3: #FB9272;
            --secondary-4: #FA744B;
            --secondary-5: #C45B3B;
            --secondary-6: #8E422B;
            --secondary-7: #58291A;
            --secondary: var(--secondary-4);
            
            /* Fix missing variables */
            --color-primary: var(--primary);
            --color-secondary: var(--secondary);
            
            /* Focus outline variables */
            --mw-accessibility-focus-outline-width: 3px;
            --mw-accessibility-focus-outline-style: dotted;
            --mw-accessibility-focus-outline-color: #66FF00;
        }

        .mw-accessibility {
            font-family: "Tahoma", "Calibri", "Helvetica", "Arial", "Verdana", "Times New Roman" !important;
        }

        /* Burger Menu Styles */
        .mw-accessibility-menu .accessibility-burger {
            display: table;
            position: relative;
            min-width: 20px;
            height: 20px;
            cursor: pointer;
            background-color: transparent;
            border: none;
        }

        .mw-accessibility-menu .accessibility-burger .accessibility-burger-lines {
            display: block;
            position: absolute;
            top: 2px;
            left: 0;
            overflow: hidden;
            width: 20px;
            height: 16px;
        }

        .mw-accessibility-menu .accessibility-burger .burger-line {
            display: block;
            position: absolute;
            top: 7px;
            height: 2px;
            border-radius: 0;
            background-color: var(--color-primary);
            width: 20px;
            transition: cubic-bezier(0.25, 0.46, 0.45, 0.94) 360ms;
        }

        .mw-accessibility-menu .accessibility-burger .burger-slashes {
            display: inline-block;
            position: absolute;
            overflow: hidden;
            top: 0;
            left: 0;
            width: 20px;
            height: 20px;
        }

        .mw-accessibility-menu .accessibility-burger .burger-slash {
            opacity: 0;
            display: block;
            position: absolute;
            top: 9px;
            left: -3px;
            width: 26px;
            height: 2px;
            border-radius: 0;
            background-color: var(--black);
            transition: cubic-bezier(0.25, 0.46, 0.45, 0.94) 500ms;
        }

        .mw-accessibility-menu .accessibility-burger .burger-text {
            display: block;
            position: relative;
            overflow: hidden;
            margin-left: 26px;
            color: var(--black);
            text-transform: uppercase;
            font-size: 12px;
            line-height: 20px;
        }

        .mw-accessibility-menu .accessibility-burger:hover .burger-slash {
            background-color: var(--primary);
        }

        .mw-accessibility-menu .accessibility-burger:hover .burger-text {
            color: var(--primary);
        }

        .mw-accessibility-menu {
            position: fixed;
            right: 0;
            bottom: 0;
            display: none;
            min-height: 450px;
            width: calc(100% - 30px);
            opacity: 0;
            transition: cubic-bezier(0.82, 0.01, 0.21, 1) 800ms;
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
            padding: 20px;
            background-color: var(--primary-6);
            box-sizing: border-box;
            z-index: 9999;
            border-radius: 30px;
            margin: 15px;
        }

        @media screen and (min-width: 560px) {
            .mw-accessibility-menu {
                width: 500px;
            }
        }

        .mw-accessibility-menu.active {
            opacity: 1;
        }

        .mw-accessibility-menu .accessibility-menu-wrap {
            background-color: var(--white);
            height: 100%;
            padding: 20px;
            overflow: hidden;
            position: relative;
            box-sizing: border-box;
            display: block;
            border-radius: 20px;
        }

        .mw-accessibility-menu .accessibility-menu-header {
            margin: 0 0 30px 0;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .mw-accessibility-menu .accessibility-menu-logo {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .mw-accessibility-menu .accessibility-menu-logo h2 {
            color: var(--black);
            font-size: 18px;
            margin: 0;
        }

        .mw-accessibility-menu .accessibility-menu-body {
            display: grid;
            column-gap: 15px;
            row-gap: 15px;
            grid-template-columns: repeat(12, 1fr);
        }

        /* Menu Item Styles */
        .mw-accessibility-menu .accessibility-menu-item-style-1 {
            border: 1px solid var(--black);
            border-radius: 8px;
            padding: 10px 20px;
            min-height: 60px;
            cursor: pointer;
            text-align: left;
            background-color: var(--white);
            display: flex;
            align-items: center;
            justify-content: space-between;
            transition: linear 300ms;
            font-size: 16px;
            color: var(--black);
        }

        .mw-accessibility-menu .accessibility-menu-item-style-1.active {
            background-color: var(--black);
            color: var(--white);
        }

        .mw-accessibility-menu .accessibility-menu-item-style-1:hover {
            background-color: var(--black);
            color: var(--white);
        }

        .mw-accessibility-menu .accessibility-menu-item-style-2 {
            border: 1px solid var(--black);
            border-radius: 8px;
            padding: 10px 20px;
            min-height: 60px;
            text-align: left;
            background-color: var(--white);
            font-size: 16px;
            color: var(--black);
        }

        .mw-accessibility-menu .accessibility-menu-item-style-2 .accessibility-menu-item-header {
            margin: 0 0 25px 0;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 8px;
        }

        .mw-accessibility-menu .accessibility-menu-item-style-2 .accessibility-menu-item-body {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .mw-accessibility-menu .accessibility-menu-item-style-2 .accessibility-menu-item-body button {
            transition: linear 300ms;
            width: 25px;
            height: 25px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid var(--black);
            border-radius: 50%;
            cursor: pointer;
            background-color: var(--white);
            font-size: 14px;
        }

        .mw-accessibility-menu .accessibility-menu-item-style-2 .accessibility-menu-item-body button:hover {
            background-color: var(--black);
            color: var(--white);
        }

        .mw-accessibility-menu .accessibility-menu-item-style-2 .accessibility-menu-item-display {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-grow: 1;
            font-weight: bold;
        }

        /* Accessibility Button */
        .mw-accessbility-button {
            position: fixed;
            z-index: 30;
            width: 60px;
            height: 60px;
            bottom: 80px;
            right: 15px;
            color: var(--primary-6);
            background-color: var(--white);
            border: 2px solid var(--primary-6);
            border-radius: 50%;
            padding: 0;
            cursor: pointer;
            font-size: 24px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        }

        .mw-accessbility-button:hover {
            background-color: var(--primary);
            color: var(--white);
            transform: scale(1.1);
        }

        .mw-accessbility-button.active {
            display: none;
        }

        /* Focus outline */
        *:focus-visible {
            outline: var(--mw-accessibility-focus-outline-width) var(--mw-accessibility-focus-outline-style) var(--mw-accessibility-focus-outline-color) !important;
            transition: none !important;
        }

        /* Accessibility options */
        .mw-accessibility-option-greyscale {
            filter: grayscale(100%);
        }

        .mw-accessibility-option-highlight-links a[href] {
            background: #FF1493 !important;
            color: #fff !important;
            text-decoration: underline !important;
            padding: 2px 4px !important;
            border-radius: 3px !important;
        }

        .mw-accessibility-option-accessible-font * {
            font-family: "Tahoma", "Calibri", "Helvetica", "Arial", "Verdana", "Times New Roman" !important;
        }

        .accessibility-credit {
            display: block;
            text-align: right;
            margin: 60px 0 0 0;
            font-size: 12px;
        }

        .accessibility-credit a {
            color: var(--primary);
            text-decoration: none;
        }

        .accessibility-credit a:hover {
            color: var(--primary-6);
            text-decoration: underline;
        }


   
    </style>

    <!-- Accessibility Widget Container -->
    <div class="accessibility"></div>

    <script>
        // Accessibility widget script with Font Awesome icons
        $(function(){
            const SETTINGS = {
                "id-menu": "mw-accessibility",
                "id-button": "mw-accessibility-button",
                "menu-items": [
                    {
                        title: "Font Size",
                        html: `
                        <div class="accessibility-menu-item accessibility-menu-item-style-2 is-font-size" style="grid-column: span 6;">
                            <div class="accessibility-menu-item-wrap">
                                <div class="accessibility-menu-item-header">
                                    <span class="accessibility-menu-item-title">Font Size</span> 
                                    <i class="fas fa-text-height" aria-hidden="true"></i>
                                </div>
                                <div class="accessibility-menu-item-body">
                                    <button class="accessibility-menu-item-btn _minus" aria-label="Decrease Font">
                                        <i class="fas fa-minus" aria-hidden="true"></i>
                                    </button>
                                    <span class="accessibility-menu-item-display">0%</span>
                                    <button class="accessibility-menu-item-btn _plus" aria-label="Increase Font">
                                        <i class="fas fa-plus" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>`,
                        onload: function () {
                            const $element = $(`#${SETTINGS["id-menu"]} .accessibility-menu-item.is-font-size`);
                            const RESIZE_SELECTORS = ['p', 'a', 'span', 'input', 'textarea', 'select', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6'];
                            const FONT_SIZE_SETTING_DELTA = 0.1;

                            $(`#${SETTINGS["id-menu"]} .accessibility-menu-item.is-font-size .accessibility-menu-item-btn`).click(function () {
                                const FONT_SIZE_CURRENT_SETTING = $element.data("current-setting") || 0;
                                let FONT_SIZE_NEW_SETTING;

                                const query = document.querySelectorAll(RESIZE_SELECTORS.join(", "));

                                if ($(this).hasClass("_plus")) {
                                    // increase font size
                                    for (let i = 0; i < query.length; i++) {
                                        const $el = query[i];
                                        if ($el.closest(`#${SETTINGS["id-menu"]}`)) continue;

                                        const fontSize = parseFloat(window.getComputedStyle($el).fontSize);
                                        const newFontSize = fontSize * (1 + FONT_SIZE_SETTING_DELTA);
                                        $el.style.fontSize = `${newFontSize}px`;
                                    }
                                    FONT_SIZE_NEW_SETTING = FONT_SIZE_CURRENT_SETTING + FONT_SIZE_SETTING_DELTA;
                                } else {
                                    // decrease font size
                                    for (let i = 0; i < query.length; i++) {
                                        const $el = query[i];
                                        if ($el.closest(`#${SETTINGS["id-menu"]}`)) continue;

                                        const currentFontSize = parseFloat(window.getComputedStyle($el).fontSize);
                                        const newFontSize = currentFontSize * (1 - FONT_SIZE_SETTING_DELTA);
                                        $el.style.fontSize = `${newFontSize}px`;
                                    }
                                    FONT_SIZE_NEW_SETTING = FONT_SIZE_CURRENT_SETTING - FONT_SIZE_SETTING_DELTA;
                                }

                                $element.data("current-setting", FONT_SIZE_NEW_SETTING);
                                $element.find(".accessibility-menu-item-display").text(`${Math.round(FONT_SIZE_NEW_SETTING * 100)}%`);
                            });
                        }
                    },
                    {
                        title: "Greyscale",
                        html: `
                        <button class="accessibility-menu-item accessibility-menu-item-style-1 is-greyscale" style="grid-column: span 6;">
                            <span class="accessibility-menu-item-title">Greyscale</span> 
                            <i class="fas fa-adjust" aria-hidden="true"></i>
                        </button>`,
                        onload: function () {
                            $(`#${SETTINGS["id-menu"]} .accessibility-menu-item.is-greyscale`).click(function () {
                                $(this).toggleClass("active");
                                $(document.body).toggleClass("mw-accessibility-option-greyscale");
                            });
                        }
                    },
                    {
                        title: "Highlight Links",
                        html: `
                        <button class="accessibility-menu-item accessibility-menu-item-style-1 is-highlight-links" style="grid-column: span 6;">
                            <span class="accessibility-menu-item-title">Highlight Links</span> 
                            <i class="fas fa-link" aria-hidden="true"></i>
                        </button>`,
                        onload: function () {
                            $(`#${SETTINGS["id-menu"]} .accessibility-menu-item.is-highlight-links`).click(function () {
                                $(this).toggleClass("active");
                                $(document.body).toggleClass("mw-accessibility-option-highlight-links");
                            });
                        }
                    },
                    {
                        title: "Accessible Font",
                        html: `
                        <button class="accessibility-menu-item accessibility-menu-item-style-1 is-accessible-font" style="grid-column: span 6;">
                            <span class="accessibility-menu-item-title">Accessible Font</span> 
                            <i class="fas fa-font" aria-hidden="true"></i>
                        </button>`,
                        onload: function () {
                            $(`#${SETTINGS["id-menu"]} .accessibility-menu-item.is-accessible-font`).click(function () {
                                $(this).toggleClass("active");
                                $(document.body).toggleClass("mw-accessibility-option-accessible-font");
                            });
                        }
                    },
                    {
                        title: "Reset",
                        html: `
                        <button class="accessibility-menu-item accessibility-menu-item-style-1 is-reset" style="grid-column: span 6;">
                            <span class="accessibility-menu-item-title">Reset</span> 
                            <i class="fas fa-undo" aria-hidden="true"></i>
                        </button>`,
                        onload: function () {
                            $(`#${SETTINGS["id-menu"]} .accessibility-menu-item.is-reset`).click(function () {
                                location.reload();
                            });
                        }
                    }
                ]
            };

            // Initialize the accessibility widget
            function initAccessibilityWidget() {
                const $container = $(".accessibility");
                
                // Create button with Font Awesome icon
                const $button = $(`
                    <button id="${SETTINGS["id-button"]}" class="mw-accessbility-button" 
                            aria-label="Accessibility Menu" aria-expanded="false">
                        <i class="fas fa-universal-access" aria-hidden="true"></i>
                    </button>
                `);

                // Create menu with Font Awesome icon
                const $menu = $(`
                    <div id="${SETTINGS["id-menu"]}" class="mw-accessibility-menu">
                        <div class="accessibility-menu-wrap">
                            <div class="accessibility-menu-header">
                                <div class="accessibility-menu-logo">
                                    <i class="fas fa-universal-access" aria-hidden="true"></i>
                                    <h2>Accessibility Menu</h2>
                                </div>
                                <div class="accessibility-menu-close">
                                    <button class="accessibility-burger" aria-label="Close menu">
                                        <span class="burger-slashes">
                                            <span class="burger-slash"></span>
                                            <span class="burger-slash"></span>
                                        </span>
                                        <span class="burger-text">Close</span>
                                    </button>
                                </div>
                            </div>
                            <div class="accessibility-menu-body"></div>
                            <span class="accessibility-credit">
                                <small>Made with <i class="fas fa-heart" style="color: #e25555;"></i> By <a href="https://morweb.org/" target="_blank">Morweb.org</a></small>
                            </span>
                        </div>
                    </div>
                `);

                // Append elements
                $container.append($button);
                $container.append($menu);

                // Load menu items
                const $menuBody = $menu.find('.accessibility-menu-body');
                SETTINGS["menu-items"].forEach(item => {
                    $menuBody.append(item.html);
                    item.onload();
                });

                // Handle menu open/close
                function handleOpen() {
                    $('body').addClass("mw-accessibility-active");
                    $button.attr("aria-expanded", "true");
                    $menu.show().addClass("active");
                    $menu.find("button, a").first().focus();
                }

                function handleClose() {
                    $('body').removeClass("mw-accessibility-active");
                    $button.attr("aria-expanded", "false");
                    $menu.removeClass("active");
                    
                    setTimeout(() => {
                        $menu.hide();
                        $button.focus();
                    }, 100);
                }

                // Event listeners
                $button.on('click', handleOpen);
                $menu.find('.accessibility-burger').on('click', handleClose);
                
                $(document).on('keydown', function(e) {
                    if (e.key === 'Escape' && $menu.hasClass('active')) {
                        handleClose();
                    }
                });
            }

            // Initialize when DOM is ready
            initAccessibilityWidget();
        });
    </script>
