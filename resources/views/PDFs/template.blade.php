<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF</title>
    <style>
        /*
        ! tailwindcss v3.3.1 | MIT License | https://tailwindcss.com
        */
        /*
        1. Prevent padding and border from affecting element width. (https://github.com/mozdevs/cssremedy/issues/4)
        2. Allow adding a border to an element by just adding a border-width. (https://github.com/tailwindcss/tailwindcss/pull/116)
        */
        *,
        ::before,
        ::after {
        box-sizing: border-box; /* 1 */
        border-width: 0; /* 2 */
        border-style: solid; /* 2 */
        border-color: #e5e7eb; /* 2 */
        }
        ::before,
        ::after {
        --tw-content: '';
        }
        /*
        1. Use a consistent sensible line-height in all browsers.
        2. Prevent adjustments of font size after orientation changes in iOS.
        3. Use a more readable tab size.
        4. Use the user's configured `sans` font-family by default.
        5. Use the user's configured `sans` font-feature-settings by default.
        6. Use the user's configured `sans` font-variation-settings by default.
        */
        html {
        line-height: 1.5; /* 1 */
        -webkit-text-size-adjust: 100%; /* 2 */
        -moz-tab-size: 4; /* 3 */
        -o-tab-size: 4;
            tab-size: 4; /* 3 */
        font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"; /* 4 */
        font-feature-settings: normal; /* 5 */
        font-variation-settings: normal; /* 6 */
        }
        /*
        1. Remove the margin in all browsers.
        2. Inherit line-height from `html` so users can set them as a class directly on the `html` element.
        */
        body {
        margin: 0; /* 1 */
        line-height: inherit; /* 2 */
        }
        /*
        1. Add the correct height in Firefox.
        2. Correct the inheritance of border color in Firefox. (https://bugzilla.mozilla.org/show_bug.cgi?id=190655)
        3. Ensure horizontal rules are visible by default.
        */
        hr {
        height: 0; /* 1 */
        color: inherit; /* 2 */
        border-top-width: 1px; /* 3 */
        }
        /*
        Add the correct text decoration in Chrome, Edge, and Safari.
        */
        abbr:where([title]) {
        -webkit-text-decoration: underline dotted;
                text-decoration: underline dotted;
        }
        /*
        Remove the default font size and weight for headings.
        */
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
        font-size: inherit;
        font-weight: inherit;
        }
        /*
        Reset links to optimize for opt-in styling instead of opt-out.
        */
        a {
        color: inherit;
        text-decoration: inherit;
        }
        /*
        Add the correct font weight in Edge and Safari.
        */
        b,
        strong {
        font-weight: bolder;
        }
        /*
        1. Use the user's configured `mono` font family by default.
        2. Correct the odd `em` font sizing in all browsers.
        */
        code,
        kbd,
        samp,
        pre {
        font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace; /* 1 */
        font-size: 1em; /* 2 */
        }
        /*
        Add the correct font size in all browsers.
        */
        small {
        font-size: 80%;
        }
        /*
        Prevent `sub` and `sup` elements from affecting the line height in all browsers.
        */
        sub,
        sup {
        font-size: 75%;
        line-height: 0;
        position: relative;
        vertical-align: baseline;
        }
        sub {
        bottom: -0.25em;
        }
        sup {
        top: -0.5em;
        }
        /*
        1. Remove text indentation from table contents in Chrome and Safari. (https://bugs.chromium.org/p/chromium/issues/detail?id=999088, https://bugs.webkit.org/show_bug.cgi?id=201297)
        2. Correct table border color inheritance in all Chrome and Safari. (https://bugs.chromium.org/p/chromium/issues/detail?id=935729, https://bugs.webkit.org/show_bug.cgi?id=195016)
        3. Remove gaps between table borders by default.
        */
        table {
        text-indent: 0; /* 1 */
        border-color: inherit; /* 2 */
        border-collapse: collapse; /* 3 */
        }
        /*
        1. Change the font styles in all browsers.
        2. Remove the margin in Firefox and Safari.
        3. Remove default padding in all browsers.
        */
        button,
        input,
        optgroup,
        select,
        textarea {
        font-family: inherit; /* 1 */
        font-size: 100%; /* 1 */
        font-weight: inherit; /* 1 */
        line-height: inherit; /* 1 */
        color: inherit; /* 1 */
        margin: 0; /* 2 */
        padding: 0; /* 3 */
        }
        /*
        Remove the inheritance of text transform in Edge and Firefox.
        */
        button,
        select {
        text-transform: none;
        }
        /*
        1. Correct the inability to style clickable types in iOS and Safari.
        2. Remove default button styles.
        */
        button,
        [type='button'],
        [type='reset'],
        [type='submit'] {
        -webkit-appearance: button; /* 1 */
        background-color: transparent; /* 2 */
        background-image: none; /* 2 */
        }
        /*
        Use the modern Firefox focus style for all focusable elements.
        */
        :-moz-focusring {
        outline: auto;
        }
        /*
        Remove the additional `:invalid` styles in Firefox. (https://github.com/mozilla/gecko-dev/blob/2f9eacd9d3d995c937b4251a5557d95d494c9be1/layout/style/res/forms.css#L728-L737)
        */
        :-moz-ui-invalid {
        box-shadow: none;
        }
        /*
        Add the correct vertical alignment in Chrome and Firefox.
        */
        progress {
        vertical-align: baseline;
        }
        /*
        Correct the cursor style of increment and decrement buttons in Safari.
        */
        ::-webkit-inner-spin-button,
        ::-webkit-outer-spin-button {
        height: auto;
        }
        /*
        1. Correct the odd appearance in Chrome and Safari.
        2. Correct the outline style in Safari.
        */
        [type='search'] {
        -webkit-appearance: textfield; /* 1 */
        outline-offset: -2px; /* 2 */
        }
        /*
        Remove the inner padding in Chrome and Safari on macOS.
        */
        ::-webkit-search-decoration {
        -webkit-appearance: none;
        }
        /*
        1. Correct the inability to style clickable types in iOS and Safari.
        2. Change font properties to `inherit` in Safari.
        */
        ::-webkit-file-upload-button {
        -webkit-appearance: button; /* 1 */
        font: inherit; /* 2 */
        }
        /*
        Add the correct display in Chrome and Safari.
        */
        summary {
        display: list-item;
        }
        /*
        Removes the default spacing and border for appropriate elements.
        */
        blockquote,
        dl,
        dd,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        hr,
        figure,
        p,
        pre {
        margin: 0;
        }
        fieldset {
        margin: 0;
        padding: 0;
        }
        legend {
        padding: 0;
        }
        ol,
        ul,
        menu {
        list-style: none;
        margin: 0;
        padding: 0;
        }
        /*
        Prevent resizing textareas horizontally by default.
        */
        textarea {
        resize: vertical;
        }
        /*
        1. Reset the default placeholder opacity in Firefox. (https://github.com/tailwindlabs/tailwindcss/issues/3300)
        2. Set the default placeholder color to the user's configured gray 400 color.
        */
        input::-moz-placeholder, textarea::-moz-placeholder {
        opacity: 1; /* 1 */
        color: #9ca3af; /* 2 */
        }
        input::placeholder,
        textarea::placeholder {
        opacity: 1; /* 1 */
        color: #9ca3af; /* 2 */
        }
        /*
        Set the default cursor for buttons.
        */
        button,
        [role="button"] {
        cursor: pointer;
        }
        /*
        Make sure disabled buttons don't get the pointer cursor.
        */
        :disabled {
        cursor: default;
        }
        /*
        1. Make replaced elements `display: block` by default. (https://github.com/mozdevs/cssremedy/issues/14)
        2. Add `vertical-align: middle` to align replaced elements more sensibly by default. (https://github.com/jensimmons/cssremedy/issues/14#issuecomment-634934210)
        This can trigger a poorly considered lint error in some tools but is included by design.
        */
        img,
        svg,
        video,
        canvas,
        audio,
        iframe,
        embed,
        object {
        display: block; /* 1 */
        vertical-align: middle; /* 2 */
        }
        /*
        Constrain images and videos to the parent width and preserve their intrinsic aspect ratio. (https://github.com/mozdevs/cssremedy/issues/14)
        */
        img,
        video {
        max-width: 100%;
        height: auto;
        }
        /* Make elements with the HTML hidden attribute stay hidden by default */
        [hidden] {
        display: none;
        }
        *, ::before, ::after{
        --tw-border-spacing-x: 0;
        --tw-border-spacing-y: 0;
        --tw-translate-x: 0;
        --tw-translate-y: 0;
        --tw-rotate: 0;
        --tw-skew-x: 0;
        --tw-skew-y: 0;
        --tw-scale-x: 1;
        --tw-scale-y: 1;
        --tw-pan-x:  ;
        --tw-pan-y:  ;
        --tw-pinch-zoom:  ;
        --tw-scroll-snap-strictness: proximity;
        --tw-ordinal:  ;
        --tw-slashed-zero:  ;
        --tw-numeric-figure:  ;
        --tw-numeric-spacing:  ;
        --tw-numeric-fraction:  ;
        --tw-ring-inset:  ;
        --tw-ring-offset-width: 0px;
        --tw-ring-offset-color: #fff;
        --tw-ring-color: rgb(59 130 246 / 0.5);
        --tw-ring-offset-shadow: 0 0 #0000;
        --tw-ring-shadow: 0 0 #0000;
        --tw-shadow: 0 0 #0000;
        --tw-shadow-colored: 0 0 #0000;
        --tw-blur:  ;
        --tw-brightness:  ;
        --tw-contrast:  ;
        --tw-grayscale:  ;
        --tw-hue-rotate:  ;
        --tw-invert:  ;
        --tw-saturate:  ;
        --tw-sepia:  ;
        --tw-drop-shadow:  ;
        --tw-backdrop-blur:  ;
        --tw-backdrop-brightness:  ;
        --tw-backdrop-contrast:  ;
        --tw-backdrop-grayscale:  ;
        --tw-backdrop-hue-rotate:  ;
        --tw-backdrop-invert:  ;
        --tw-backdrop-opacity:  ;
        --tw-backdrop-saturate:  ;
        --tw-backdrop-sepia:  ;
        }
        ::backdrop{
        --tw-border-spacing-x: 0;
        --tw-border-spacing-y: 0;
        --tw-translate-x: 0;
        --tw-translate-y: 0;
        --tw-rotate: 0;
        --tw-skew-x: 0;
        --tw-skew-y: 0;
        --tw-scale-x: 1;
        --tw-scale-y: 1;
        --tw-pan-x:  ;
        --tw-pan-y:  ;
        --tw-pinch-zoom:  ;
        --tw-scroll-snap-strictness: proximity;
        --tw-ordinal:  ;
        --tw-slashed-zero:  ;
        --tw-numeric-figure:  ;
        --tw-numeric-spacing:  ;
        --tw-numeric-fraction:  ;
        --tw-ring-inset:  ;
        --tw-ring-offset-width: 0px;
        --tw-ring-offset-color: #fff;
        --tw-ring-color: rgb(59 130 246 / 0.5);
        --tw-ring-offset-shadow: 0 0 #0000;
        --tw-ring-shadow: 0 0 #0000;
        --tw-shadow: 0 0 #0000;
        --tw-shadow-colored: 0 0 #0000;
        --tw-blur:  ;
        --tw-brightness:  ;
        --tw-contrast:  ;
        --tw-grayscale:  ;
        --tw-hue-rotate:  ;
        --tw-invert:  ;
        --tw-saturate:  ;
        --tw-sepia:  ;
        --tw-drop-shadow:  ;
        --tw-backdrop-blur:  ;
        --tw-backdrop-brightness:  ;
        --tw-backdrop-contrast:  ;
        --tw-backdrop-grayscale:  ;
        --tw-backdrop-hue-rotate:  ;
        --tw-backdrop-invert:  ;
        --tw-backdrop-opacity:  ;
        --tw-backdrop-saturate:  ;
        --tw-backdrop-sepia:  ;
        }
        .fixed{
        position: fixed;
        }
        .absolute{
        position: absolute;
        }
        .relative{
        position: relative;
        }
        .left-0{
        left: 0px;
        }
        .left-11{
        left: 2.75rem;
        }
        .right-0{
        right: 0px;
        }
        .right-2{
        right: 0.5rem;
        }
        .right-20{
        right: 5rem;
        }
        .right-4{
        right: 1rem;
        }
        .top-0{
        top: 0px;
        }
        .top-1\/4{
        top: 25%;
        }
        .top-2{
        top: 0.5rem;
        }
        .top-4{
        top: 1rem;
        }
        .top-5{
        top: 1.25rem;
        }
        .z-30{
        z-index: 30;
        }
        .col-span-2{
        grid-column: span 2 / span 2;
        }
        .col-span-3{
        grid-column: span 3 / span 3;
        }
        .m-auto{
        margin: auto;
        }
        .mx-6{
        margin-left: 1.5rem;
        margin-right: 1.5rem;
        }
        .my-10{
        margin-top: 2.5rem;
        margin-bottom: 2.5rem;
        }
        .mb-10{
        margin-bottom: 2.5rem;
        }
        .mb-16{
        margin-bottom: 4rem;
        }
        .mb-2{
        margin-bottom: 0.5rem;
        }
        .mb-36{
        margin-bottom: 9rem;
        }
        .mb-6{
        margin-bottom: 1.5rem;
        }
        .mt-10{
        margin-top: 2.5rem;
        }
        .mt-3{
        margin-top: 0.75rem;
        }
        .mt-8{
        margin-top: 2rem;
        }
        .box-border{
        box-sizing: border-box;
        }
        .flex{
        display: flex;
        }
        .grid{
        display: grid;
        }
        .hidden{
        display: none;
        }
        .h-10{
        height: 2.5rem;
        }
        .h-16{
        height: 4rem;
        }
        .h-20{
        height: 5rem;
        }
        .h-32{
        height: 8rem;
        }
        .h-48{
        height: 12rem;
        }
        .h-80{
        height: 20rem;
        }
        .h-\[4\.8rem\]{
        height: 4.8rem;
        }
        .h-\[74vh\]{
        height: 74vh;
        }
        .h-full{
        height: 100%;
        }
        .h-max{
        height: -moz-max-content;
        height: max-content;
        }
        .min-h-\[15rem\]{
        min-height: 15rem;
        }
        .min-h-screen{
        min-height: 100vh;
        }
        .w-0{
        width: 0px;
        }
        .w-1\/2{
        width: 50%;
        }
        .w-1\/5{
        width: 20%;
        }
        .w-10{
        width: 2.5rem;
        }
        .w-10\/12{
        width: 83.333333%;
        }
        .w-14{
        width: 3.5rem;
        }
        .w-16{
        width: 4rem;
        }
        .w-2\/3{
        width: 66.666667%;
        }
        .w-20{
        width: 5rem;
        }
        .w-24{
        width: 6rem;
        }
        .w-32{
        width: 8rem;
        }
        .w-4\/5{
        width: 80%;
        }
        .w-44{
        width: 11rem;
        }
        .w-48{
        width: 12rem;
        }
        .w-5\/6{
        width: 83.333333%;
        }
        .w-6{
        width: 1.5rem;
        }
        .w-7{
        width: 1.75rem;
        }
        .w-8{
        width: 2rem;
        }
        .w-80{
        width: 20rem;
        }
        .w-9\/12{
        width: 75%;
        }
        .w-96{
        width: 24rem;
        }
        .w-\[2px\]{
        width: 2px;
        }
        .w-full{
        width: 100%;
        }
        .max-w-lg{
        max-width: 32rem;
        }
        .max-w-xs{
        max-width: 20rem;
        }
        .transform{
        transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
        }
        .cursor-pointer{
        cursor: pointer;
        }
        .resize-none{
        resize: none;
        }
        .grid-flow-row-dense{
        grid-auto-flow: row dense;
        }
        .grid-cols-11{
        grid-template-columns: repeat(11, minmax(0, 1fr));
        }
        .grid-cols-3{
        grid-template-columns: repeat(3, minmax(0, 1fr));
        }
        .grid-cols-6{
        grid-template-columns: repeat(6, minmax(0, 1fr));
        }
        .flex-row{
        flex-direction: row;
        }
        .flex-col{
        flex-direction: column;
        }
        .flex-wrap{
        flex-wrap: wrap;
        }
        .items-start{
        align-items: flex-start;
        }
        .items-center{
        align-items: center;
        }
        .items-baseline{
        align-items: baseline;
        }
        .justify-start{
        justify-content: flex-start;
        }
        .justify-end{
        justify-content: flex-end;
        }
        .justify-center{
        justify-content: center;
        }
        .justify-between{
        justify-content: space-between;
        }
        .justify-evenly{
        justify-content: space-evenly;
        }
        .justify-items-center{
        justify-items: center;
        }
        .gap-1{
        gap: 0.25rem;
        }
        .gap-10{
        gap: 2.5rem;
        }
        .gap-12{
        gap: 3rem;
        }
        .gap-2{
        gap: 0.5rem;
        }
        .gap-20{
        gap: 5rem;
        }
        .gap-3{
        gap: 0.75rem;
        }
        .gap-4{
        gap: 1rem;
        }
        .gap-5{
        gap: 1.25rem;
        }
        .gap-6{
        gap: 1.5rem;
        }
        .gap-8{
        gap: 2rem;
        }
        .gap-9{
        gap: 2.25rem;
        }
        .overflow-auto{
        overflow: auto;
        }
        .overflow-hidden{
        overflow: hidden;
        }
        .break-normal{
        overflow-wrap: normal;
        word-break: normal;
        }
        .rounded-lg{
        border-radius: 0.5rem;
        }
        .rounded-md{
        border-radius: 0.375rem;
        }
        .rounded-xl{
        border-radius: 0.75rem;
        }
        .border{
        border-width: 1px;
        }
        .border-2{
        border-width: 2px;
        }
        .border-b-2{
        border-bottom-width: 2px;
        }
        .border-r-2{
        border-right-width: 2px;
        }
        .border-solid{
        border-style: solid;
        }
        .border-none{
        border-style: none;
        }
        .border-black{
        --tw-border-opacity: 1;
        border-color: rgb(0 0 0 / var(--tw-border-opacity));
        }
        .border-primary-clr{
        border-color: var(--clr-primary);
        }
        .border-secondary-clr{
        border-color: var(--clr-secondary);
        }
        .bg-bg-clr{
        background-color: var(--clr-bg);
        }
        .bg-black{
        --tw-bg-opacity: 1;
        background-color: rgb(0 0 0 / var(--tw-bg-opacity));
        }
        .bg-primary-clr{
        background-color: var(--clr-primary);
        }
        .bg-secondary-clr{
        background-color: var(--clr-secondary);
        }
        .bg-white{
        --tw-bg-opacity: 1;
        background-color: rgb(255 255 255 / var(--tw-bg-opacity));
        }
        .bg-opacity-75{
        --tw-bg-opacity: 0.75;
        }
        .fill-bg-clr{
        fill: var(--clr-bg);
        }
        .fill-primary-clr{
        fill: var(--clr-primary);
        }
        .fill-secondary-clr{
        fill: var(--clr-secondary);
        }
        .fill-text-clr{
        fill: var(--clr-text);
        }
        .object-cover{
        -o-object-fit: cover;
            object-fit: cover;
        }
        .p-1{
        padding: 0.25rem;
        }
        .p-10{
        padding: 2.5rem;
        }
        .p-16{
        padding: 4rem;
        }
        .p-2{
        padding: 0.5rem;
        }
        .p-6{
        padding: 1.5rem;
        }
        .px-11{
        padding-left: 2.75rem;
        padding-right: 2.75rem;
        }
        .px-3{
        padding-left: 0.75rem;
        padding-right: 0.75rem;
        }
        .px-5{
        padding-left: 1.25rem;
        padding-right: 1.25rem;
        }
        .px-6{
        padding-left: 1.5rem;
        padding-right: 1.5rem;
        }
        .px-7{
        padding-left: 1.75rem;
        padding-right: 1.75rem;
        }
        .py-10{
        padding-top: 2.5rem;
        padding-bottom: 2.5rem;
        }
        .py-2{
        padding-top: 0.5rem;
        padding-bottom: 0.5rem;
        }
        .py-3{
        padding-top: 0.75rem;
        padding-bottom: 0.75rem;
        }
        .py-8{
        padding-top: 2rem;
        padding-bottom: 2rem;
        }
        .pb-24{
        padding-bottom: 6rem;
        }
        .pl-9{
        padding-left: 2.25rem;
        }
        .pr-5{
        padding-right: 1.25rem;
        }
        .pr-8{
        padding-right: 2rem;
        }
        .text-center{
        text-align: center;
        }
        .text-justify{
        text-align: justify;
        }
        .align-middle{
        vertical-align: middle;
        }
        .font-subtitle-fnt{
        font-family: var(--fnt-subtitle);
        }
        .font-text-fnt{
        font-family: var(--fnt-text);
        }
        .font-title-fnt{
        font-family: var(--fnt-title);
        }
        .text-2xl{
        font-size: 1.5rem;
        line-height: 2rem;
        }
        .text-3xl{
        font-size: 1.875rem;
        line-height: 2.25rem;
        }
        .text-4xl{
        font-size: 2.25rem;
        line-height: 2.5rem;
        }
        .text-5xl{
        font-size: 3rem;
        line-height: 1;
        }
        .text-\[1\.2rem\]{
        font-size: 1.2rem;
        }
        .text-\[1\.3rem\]{
        font-size: 1.3rem;
        }
        .text-lg{
        font-size: 1.125rem;
        line-height: 1.75rem;
        }
        .text-sm{
        font-size: 0.875rem;
        line-height: 1.25rem;
        }
        .text-xl{
        font-size: 1.25rem;
        line-height: 1.75rem;
        }
        .font-bold{
        font-weight: 700;
        }
        .font-extrabold{
        font-weight: 800;
        }
        .font-semibold{
        font-weight: 600;
        }
        .text-bg-clr{
        color: var(--clr-bg);
        }
        .text-primary-clr{
        color: #004369;
        }
        .text-secondary-clr{
        color: #01949A;
        }
        .text-terziary-clr{
        color: #DB1F48;
        }
        .text-text-clr{
        color: #000000;
        }
        .opacity-0{
        opacity: 0;
        }
        .outline-none{
        outline: 2px solid transparent;
        outline-offset: 2px;
        }
        .transition-all{
        transition-property: all;
        transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
        transition-duration: 150ms;
        }
        .duration-300{
        transition-duration: 300ms;
        }
        .duration-500{
        transition-duration: 500ms;
        }
        .ease-in-out{
        transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
        }
        .ease-out{
        transition-timing-function: cubic-bezier(0, 0, 0.2, 1);
        }

        :root {
            --clr-primary: #004369;
            --clr-secondary: #01949A;
            --clr-terziary: #DB1F48;
            --clr-bg: #E5DDC8;
            --clr-text: #000000;

            --fnt-title: 'Fira Sans', sans-serif;
            --fnt-subtutle: 'Catamaran', sans-serif;
            --fnt-text: 'Quattrocento Sans', sans-serif;

        }

        body {
            background-color: var(--clr-bg);
        }

        .hover\:w-52:hover{
        width: 13rem;
        }

        .hover\:bg-gray-400:hover{
        --tw-bg-opacity: 1;
        background-color: rgb(156 163 175 / var(--tw-bg-opacity));
        }

        .hover\:text-primary-clr:hover{
        color: var(--clr-primary);
        }

        .hover\:text-terziary-clr:hover{
        color: var(--clr-terziary);
        }

        .group:hover .group-hover\:flex{
        display: flex;
        }

        .group:hover .group-hover\:hidden{
        display: none;
        }

        .group:hover .group-hover\:w-full{
        width: 100%;
        }

        .group:hover .group-hover\:px-6{
        padding-left: 1.5rem;
        padding-right: 1.5rem;
        }

        .\[\&\>\*\]\:px-2>*{
        padding-left: 0.5rem;
        padding-right: 0.5rem;
        }

        .\[\&\>\*\]\:py-1>*{
        padding-top: 0.25rem;
        padding-bottom: 0.25rem;
        }

        .\[\&\>\:not\(\:last-child\)\]\:border-b-2>:not(:last-child){
        border-bottom-width: 2px;
        }

        .\[\&\>\:not\(\:last-child\)\]\:border-r-2>:not(:last-child){
        border-right-width: 2px;
        }

        .\[\&\>\:not\(\:last-child\)\]\:border-primary-clr>:not(:last-child){
        border-color: var(--clr-primary);
        }

        .\[\&\>\:not\(\:last-child\)\]\:border-secondary-clr>:not(:last-child){
        border-color: var(--clr-secondary);
        }
    </style>
</head>
<body class="flex flex-col items-center gap-20">
    <h1 style="margin-bottom: 1.3rem; margin-top: 1rem" class="text-4xl font-bold text-center font-subtitle-fnt text-primary-clr notranslate">{{ $pdf['name'] }}</h1>
    
    <div class="flex flex-col items-center justify-center w-full">
        <h3 class="text-xl font-bold text-center font-subtitle-fnt text-primary-clr notranslate">Endereço / Indirizzo</h3>
        <h1 class="text-2xl text-center font-text-fnt text-text-clr notranslate">{{ $pdf['address'] }}</h1>
    </div>

    <div class="flex flex-col items-center justify-center w-full">
        <h3 class="text-xl font-bold text-center font-subtitle-fnt text-primary-clr notranslate">Contatos / Contatti</h3>
        <h1 class="text-2xl text-center font-text-fnt text-text-clr notranslate">{{ $pdf['contacts'] }}</h1>
    </div>

    <div class="mt-8">
        @yield('content')
    </div>
</body>
</html>