
<html lang="en" class="js ss-loaded">

<head>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Online Publications</title>

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap");
        :root {
            --font-1: "Inter", sans-serif;
            --font-mono: Consolas, "Andale Mono", Courier, "Courier New", monospace;
        }
        :root {
            /* color-1(#034E4A)
     * color-2(#A33B20)
     */
            
            --color-1: hsla(177, 93%, 16%, 1);
            --color-2: hsla(12, 67%, 38%, 1);
            /* theme color variations
     */
            
            --color-1-lighter: hsla(177, 93%, 36%, 1);
            --color-1-light: hsla(177, 93%, 26%, 1);
            --color-1-dark: hsla(177, 93%, 10%, 1);
            --color-1-darker: hsla(177, 93%, 5%, 1);
            --color-2-lighter: hsla(12, 67%, 58%, 1);
            --color-2-light: hsla(12, 67%, 48%, 1);
            --color-2-dark: hsla(12, 67%, 28%, 1);
            --color-2-darker: hsla(12, 67%, 18%, 1);
            /* feedback colors
     * color-error(#ffd1d2), color-success(#c8e675), 
     * color-info(#d7ecfb), color-notice(#fff099)
     */
            
            --color-error: hsla(359, 100%, 91%, 1);
            --color-success: hsla(76, 69%, 68%, 1);
            --color-info: hsla(205, 82%, 91%, 1);
            --color-notice: hsla(51, 100%, 80%, 1);
            --color-error-content: hsla(359, 50%, 50%, 1);
            --color-success-content: hsla(76, 29%, 28%, 1);
            --color-info-content: hsla(205, 32%, 31%, 1);
            --color-notice-content: hsla(51, 30%, 30%, 1);
            /* shades 
     * generated using 
     * Tint & Shade Generator 
     * (https://maketintsandshades.com/)
     */
            
            --color-black: #000000;
            --color-gray-19: #020202;
            --color-gray-18: #040404;
            --color-gray-17: #060607;
            --color-gray-16: #080809;
            --color-gray-15: #0a0b0b;
            --color-gray-14: #0c0d0d;
            --color-gray-13: #0e0f0f;
            --color-gray-12: #101112;
            --color-gray-11: #121314;
            --color-gray-10: #141516;
            --color-gray-9: #2c2c2d;
            --color-gray-8: #434445;
            --color-gray-7: #5b5b5c;
            --color-gray-6: #727373;
            --color-gray-5: #8a8a8b;
            --color-gray-4: #a1a1a2;
            --color-gray-3: #b9b9b9;
            --color-gray-2: #d0d0d0;
            --color-gray-1: #e8e8e8;
            --color-white: #ffffff;
            /* text
     */
            
            --color-text: var(--color-gray-12);
            --color-text-dark: var(--color-black);
            --color-text-light: var(--color-gray-8);
            --color-placeholder: var(--color-gray-7);
            /* buttons
     */
            
            --color-btn: var(--color-gray-1);
            --color-btn-text: var(--color-black);
            --color-btn-hover: var(--color-gray-2);
            --color-btn-hover-text: var(--color-black);
            --color-btn-primary: var(--color-1);
            --color-btn-primary-text: var(--color-white);
            --color-btn-primary-hover: var(--color-black);
            --color-btn-primary-hover-text: var(--color-white);
            --color-btn-stroke: var(--color-black);
            --color-btn-stroke-text: var(--color-black);
            --color-btn-stroke-hover: var(--color-black);
            --color-btn-stroke-hover-text: var(--color-white);
            /* preloader
     */
            
            --color-preloader-bg: var(--color-gray-12);
            --color-loader: white;
            --color-loader-light: rgba(255, 255, 255, 0.1);
            /* others
     */
            
            --color-body: var(--color-white);
            --color-border: rgba(0, 0, 0, .08);
            --border-radius: 3px;
        }
        :root {
            /* spacing
     * base font size: 18px 
     * vertical space unit : 32px
     */
            
            --base-size: 62.5%;
            --multiplier: 1;
            --base-font-size: calc(1.8rem * var(--multiplier));
            --space: calc(3.2rem * var(--multiplier));
            /* vertical spacing 
     */
            
            --vspace-0_125: calc(0.125 * var(--space));
            --vspace-0_25: calc(0.25 * var(--space));
            --vspace-0_375: calc(0.375 * var(--space));
            --vspace-0_5: calc(0.5 * var(--space));
            --vspace-0_625: calc(0.625 * var(--space));
            --vspace-0_75: calc(0.75 * var(--space));
            --vspace-0_875: calc(0.875 * var(--space));
            --vspace-1: calc(var(--space));
            --vspace-1_25: calc(1.25 * var(--space));
            --vspace-1_5: calc(1.5 * var(--space));
            --vspace-1_75: calc(1.75 * var(--space));
            --vspace-2: calc(2 * var(--space));
            --vspace-2_5: calc(2.5 * var(--space));
            --vspace-3: calc(3 * var(--space));
            --vspace-3_5: calc(3.5 * var(--space));
            --vspace-4: calc(4 * var(--space));
            --vspace-4_5: calc(4.5 * var(--space));
            --vspace-5: calc(5 * var(--space));
            /* type scale
     * ratio 1         :2 | base: 18px
     * -------------------------------------------------------
     *
     * --text-display-3 = (77.40px)
     * --text-display-2 = (64.50px)
     * --text-display-1 = (53.75px)
     * --text-xxxl      = (44.79px)
     * --text-xxl       = (37.32px)
     * --text-xl        = (31.10px)
     * --text-lg        = (25.92px)
     * --text-md        = (21.60px)
     * --text-size      = (18.00px) BASE
     * --text-sm        = (15.00px)
     * --text-xs        = (12.50px)
     *
     * ---------------------------------------------------------
     */
            
            --text-scale-ratio: 1.2;
            --text-size: var(--base-font-size);
            --text-xs: calc((var(--text-size) / var(--text-scale-ratio)) / var(--text-scale-ratio));
            --text-sm: calc(var(--text-xs) * var(--text-scale-ratio));
            --text-md: calc(var(--text-sm) * var(--text-scale-ratio) * var(--text-scale-ratio));
            --text-lg: calc(var(--text-md) * var(--text-scale-ratio));
            --text-xl: calc(var(--text-lg) * var(--text-scale-ratio));
            --text-xxl: calc(var(--text-xl) * var(--text-scale-ratio));
            --text-xxxl: calc(var(--text-xxl) * var(--text-scale-ratio));
            --text-display-1: calc(var(--text-xxxl) * var(--text-scale-ratio));
            --text-display-2: calc(var(--text-display-1) * var(--text-scale-ratio));
            --text-display-3: calc(var(--text-display-2) * var(--text-scale-ratio));
            /* default button height
     */
            
            --vspace-btn: var(--vspace-2);
        }
        /* on mobile devices below 600px, change the value of '--multiplier' 
 * to adjust the values of base font size and vertical space unit.
 */
        
        @media screen and (max-width: 600px) {
            :root {
                --multiplier: .9375;
            }
        }
        /* ------------------------------------------------------------------- 
 * ## grid variables
 * ------------------------------------------------------------------- */
        
        :root {
            /* widths for rows and containers
     */
            
            --width-full: 100%;
            --width-max: 1200px;
            --width-wide: 1400px;
            --width-wider: 1600px;
            --width-widest: 1800px;
            --width-narrow: 1000px;
            --width-narrower: 800px;
            --width-grid-max: var(--width-max);
            /* gutter
     */
            
            --gutter: 2.4rem;
        }
        @media screen and (max-width: 1200px) {
            :root {
                --gutter: 2rem;
            }
        }
        @media screen and (max-width: 600px) {
            :root {
                --gutter: 1rem;
            }
        }
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%;
        }
        body {
            margin: 0;
        }
        h1 {
            font-size: 2em;
            margin: 0.67em 0;
        }
        ::-webkit-file-upload-button {
            -webkit-appearance: button;
            font: inherit;
        }
        html {
            font-size: var(--base-size);
            box-sizing: border-box;
        }
        *,
        *::before,
        *::after {
            box-sizing: inherit;
        }
        html,
        body {
            height: 100%;
        }
        body {
            background-color: var(--color-body);
            -webkit-overflow-scrolling: touch;
            -webkit-text-size-adjust: 100%;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
        p {
            font-size: inherit;
            text-rendering: optimizeLegibility;
        }
        div,
        h1,
        p {
            margin: 0;
            padding: 0;
        }
        .row {
            width: 92%;
            max-width: var(--width-grid-max);
            margin: 0 auto;
            display: flex;
            flex-flow: row wrap;
        }
        .column {
            display: block;
            flex: 1 1 0%;
            padding: 0 var(--gutter);
        }
        .lg-12 {
            flex: none;
            width: 100%;
        }
        @media screen and (max-width: 600px) {
            .row {
                width: 100%;
                padding-left: 6vw;
                padding-right: 6vw;
            }
        }
        @media screen and (max-width: 400px) {
            .column {
                flex: none;
                width: 100%;
                margin-left: 0;
                margin-right: 0;
                padding: 0;
            }
        }
        body {
            font-family: var(--font-1);
            font-size: var(--base-font-size);
            font-weight: 400;
            line-height: var(--vspace-1);
            color: var(--color-text);
        }
        h1 {
            font-family: var(--font-1);
            font-weight: 500;
            color: var(--color-text-dark);
            font-variant-ligatures: common-ligatures;
            text-rendering: optimizeLegibility;
        }
        h1 {
            margin-top: var(--vspace-2_5);
            margin-bottom: var(--vspace-0_75);
        }
        h1 {
            font-size: var(--text-display-1);
            line-height: var(--vspace-2);
            letter-spacing: -.02em;
        }
        @media screen and (max-width: 500px) {
            h1 {
                font-size: var(--text-xxxl);
                line-height: calc(1.625 * var(--space));
            }
        }
        ::-webkit-input-placeholder {
            /* WebKit, Blink, Edge */
            
            color: var(--color-placeholder);
        }
        :-moz-placeholder {
            /* Mozilla Firefox 4 to 18 */
            
            color: var(--color-placeholder);
            opacity: 1;
        }
        ::-moz-placeholder {
            /* Mozilla Firefox 19+ */
            
            color: var(--color-placeholder);
            opacity: 1;
        }
        :-ms-input-placeholder {
            /* Internet Explorer 10-11 */
            
            color: var(--color-placeholder);
        }
        ::-ms-input-placeholder {
            /* Microsoft Edge */
            
            color: var(--color-placeholder);
        }
        .s-pagewrap {
            --header-height: 12rem;
            display: flex;
            flex-direction: column;
            min-height: 100%;
            overflow: hidden;
            position: relative;
        }
        @media screen and (max-width: 400px) {
            .s-pagewrap {
                --header-height: 10.6rem;
            }
        }
        .s-intro {
            background-color: var(--color-body);
            width: 100%;
            height: 100vh;
            min-height: calc(25.5 * var(--space));
            overflow: hidden;
            position: relative;
        }
        .s-intro__bg {
            display: block;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            width: 100%;
            height: 100%;
            background-image: url(https://serpauthority.coffeecup.com/space-bg.jpeg);
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }
        .s-intro__bg::before {
            display: block;
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            width: 100%;
            height: 100%;
            background: black;
            pointer-events: none;
            opacity: .2;
        }
        .s-intro__bg::after {
            display: block;
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, black 10%, rgba(0, 0, 0, 0) 100%);
            pointer-events: none;
            opacity: .8;
        }
        .s-intro__content {
            z-index: 1;
            max-width: var(--width-wider);
            align-items: flex-end;
            height: 100vh;
            min-height: calc(25.5 * var(--space));
            padding-top: 20vh;
            padding-bottom: 8.8rem;
            position: relative;
        }
        .s-intro__content-bottom {
            max-width: 600px;
            font-weight: 300;
            color: rgba(255, 255, 255, 0.5);
            margin-top: var(--vspace-1);
        }
        .s-intro__content-title {
            font-size: var(--text-xxl);
            font-weight: 400;
            line-height: var(--vspace-1_5);
            color: white;
            margin-top: 0;
            margin-bottom: var(--vspace-0_25);
        }
        .s-intro__content-bottom {
            transition-timing-function: cubic-bezier(0.28, 0.12, 0.22, 1);
            transition-duration: .6s;
            transition-delay: 0s;
            opacity: 0;
        }
        .s-intro__content-bottom {
            transition-property: opacity, transform;
            transform: translate(0, 100%);
        }
        .ss-show .s-intro__content-bottom {
            opacity: 1;
        }
        .ss-show .s-intro__content-bottom {
            transform: translate(0, 0);
        }
        .ss-show .s-intro__content-bottom {
            transition-delay: .6s;
        }
        @media screen and (max-width: 1200px) {
            .s-intro__content-title {
                font-size: var(--text-xl);
                line-height: var(--vspace-1_25);
            }
        }
        @media screen and (max-width: 600px) {
            .s-intro__content {
                padding-bottom: 8rem;
            }
            .s-intro__content-bottom {
                max-width: 400px;
            }
            .s-intro__content-bottom br {
                display: none;
            }
            .s-intro__content-title {
                font-size: var(--text-lg);
                line-height: var(--vspace-1);
            }
        }
        @media screen and (max-width: 400px) {
            .s-intro__content-title {
                font-size: var(--text-md);
                line-height: var(--vspace-0_875);
            }
        }
    </style>

</head>

<body id="top" cz-shortcut-listen="true" class="ss-show">



    <div class="s-pagewrap">





        <section id="intro" class="s-intro">

            <div class="s-intro__bg"></div>

            <div class="row s-intro__content">
                <div class="column lg-12">



                    <div class="s-intro__content-bottom">
                        <h1 class="s-intro__content-title">Online Publications</h1>
                        <p>
                            Our experts share perspective and insight on a wide range of topics through video, audio, and feature stories.
                        </p>
                    </div>

                </div>



            </div>

        </section>



    </div>


</body>

</html>
