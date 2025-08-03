<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5, minimum-scale=1, user-scalable=yes">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Global Site Tag (gtag.js) - Google Analytics -->
    <!--<script async src="https://www.googletagmanager.com/gtag/js?id=GA_TRACKING_ID"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-31126291-1');
    </script>-->
    <!--<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=4.0, minimum-scale=1, user-scalable=yes" >-->

    <meta name="description" content="PMWay (Project and Process Management Excellence Way): NB: This web portal is NOT24/7. Its open 6AM to 5PM work days UTC+2 South Africa Std Time Johannesburg">
    <meta name="keywords" content="consulting, project management, Project Management Way, scrum, PMBOK, SBOK, itil, Scrumbok, jira, confluence, safe, scaled agile framework">

        <title>Laravel</title>
    <link rel="stylesheet" href="{{ asset('bootstrapfourfivetwo/css/bootstrap.css') }}" />
{{--    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" />--}}
    <link rel="stylesheet" href="{{ asset('bootstrapfourthreeone/css/jquery-ui.css') }}" />
    <link rel="stylesheet" href="{{ asset('fontawesome6/css/all.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />



    <!-- Fonts -->
{{--        <link rel="preconnect" href="https://fonts.bunny.net">--}}
{{--        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />--}}

{{--        <!-- Styles / Scripts -->--}}
{{--        <style>--}}
{{--            /*! tailwindcss v4.0.7 | MIT License | https://tailwindcss.com */@layer theme{:root,:host{--font-sans:'Instrument Sans',ui-sans-serif,system-ui,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";--font-serif:ui-serif,Georgia,Cambria,"Times New Roman",Times,serif;--font-mono:ui-monospace,SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace;--color-red-50:oklch(.971 .013 17.38);--color-red-100:oklch(.936 .032 17.717);--color-red-200:oklch(.885 .062 18.334);--color-red-300:oklch(.808 .114 19.571);--color-red-400:oklch(.704 .191 22.216);--color-red-500:oklch(.637 .237 25.331);--color-red-600:oklch(.577 .245 27.325);--color-red-700:oklch(.505 .213 27.518);--color-red-800:oklch(.444 .177 26.899);--color-red-900:oklch(.396 .141 25.723);--color-red-950:oklch(.258 .092 26.042);--color-orange-50:oklch(.98 .016 73.684);--color-orange-100:oklch(.954 .038 75.164);--color-orange-200:oklch(.901 .076 70.697);--color-orange-300:oklch(.837 .128 66.29);--color-orange-400:oklch(.75 .183 55.934);--color-orange-500:oklch(.705 .213 47.604);--color-orange-600:oklch(.646 .222 41.116);--color-orange-700:oklch(.553 .195 38.402);--color-orange-800:oklch(.47 .157 37.304);--color-orange-900:oklch(.408 .123 38.172);--color-orange-950:oklch(.266 .079 36.259);--color-amber-50:oklch(.987 .022 95.277);--color-amber-100:oklch(.962 .059 95.617);--color-amber-200:oklch(.924 .12 95.746);--color-amber-300:oklch(.879 .169 91.605);--color-amber-400:oklch(.828 .189 84.429);--color-amber-500:oklch(.769 .188 70.08);--color-amber-600:oklch(.666 .179 58.318);--color-amber-700:oklch(.555 .163 48.998);--color-amber-800:oklch(.473 .137 46.201);--color-amber-900:oklch(.414 .112 45.904);--color-amber-950:oklch(.279 .077 45.635);--color-yellow-50:oklch(.987 .026 102.212);--color-yellow-100:oklch(.973 .071 103.193);--color-yellow-200:oklch(.945 .129 101.54);--color-yellow-300:oklch(.905 .182 98.111);--color-yellow-400:oklch(.852 .199 91.936);--color-yellow-500:oklch(.795 .184 86.047);--color-yellow-600:oklch(.681 .162 75.834);--color-yellow-700:oklch(.554 .135 66.442);--color-yellow-800:oklch(.476 .114 61.907);--color-yellow-900:oklch(.421 .095 57.708);--color-yellow-950:oklch(.286 .066 53.813);--color-lime-50:oklch(.986 .031 120.757);--color-lime-100:oklch(.967 .067 122.328);--color-lime-200:oklch(.938 .127 124.321);--color-lime-300:oklch(.897 .196 126.665);--color-lime-400:oklch(.841 .238 128.85);--color-lime-500:oklch(.768 .233 130.85);--color-lime-600:oklch(.648 .2 131.684);--color-lime-700:oklch(.532 .157 131.589);--color-lime-800:oklch(.453 .124 130.933);--color-lime-900:oklch(.405 .101 131.063);--color-lime-950:oklch(.274 .072 132.109);--color-green-50:oklch(.982 .018 155.826);--color-green-100:oklch(.962 .044 156.743);--color-green-200:oklch(.925 .084 155.995);--color-green-300:oklch(.871 .15 154.449);--color-green-400:oklch(.792 .209 151.711);--color-green-500:oklch(.723 .219 149.579);--color-green-600:oklch(.627 .194 149.214);--color-green-700:oklch(.527 .154 150.069);--color-green-800:oklch(.448 .119 151.328);--color-green-900:oklch(.393 .095 152.535);--color-green-950:oklch(.266 .065 152.934);--color-emerald-50:oklch(.979 .021 166.113);--color-emerald-100:oklch(.95 .052 163.051);--color-emerald-200:oklch(.905 .093 164.15);--color-emerald-300:oklch(.845 .143 164.978);--color-emerald-400:oklch(.765 .177 163.223);--color-emerald-500:oklch(.696 .17 162.48);--color-emerald-600:oklch(.596 .145 163.225);--color-emerald-700:oklch(.508 .118 165.612);--color-emerald-800:oklch(.432 .095 166.913);--color-emerald-900:oklch(.378 .077 168.94);--color-emerald-950:oklch(.262 .051 172.552);--color-teal-50:oklch(.984 .014 180.72);--color-teal-100:oklch(.953 .051 180.801);--color-teal-200:oklch(.91 .096 180.426);--color-teal-300:oklch(.855 .138 181.071);--color-teal-400:oklch(.777 .152 181.912);--color-teal-500:oklch(.704 .14 182.503);--color-teal-600:oklch(.6 .118 184.704);--color-teal-700:oklch(.511 .096 186.391);--color-teal-800:oklch(.437 .078 188.216);--color-teal-900:oklch(.386 .063 188.416);--color-teal-950:oklch(.277 .046 192.524);--color-cyan-50:oklch(.984 .019 200.873);--color-cyan-100:oklch(.956 .045 203.388);--color-cyan-200:oklch(.917 .08 205.041);--color-cyan-300:oklch(.865 .127 207.078);--color-cyan-400:oklch(.789 .154 211.53);--color-cyan-500:oklch(.715 .143 215.221);--color-cyan-600:oklch(.609 .126 221.723);--color-cyan-700:oklch(.52 .105 223.128);--color-cyan-800:oklch(.45 .085 224.283);--color-cyan-900:oklch(.398 .07 227.392);--color-cyan-950:oklch(.302 .056 229.695);--color-sky-50:oklch(.977 .013 236.62);--color-sky-100:oklch(.951 .026 236.824);--color-sky-200:oklch(.901 .058 230.902);--color-sky-300:oklch(.828 .111 230.318);--color-sky-400:oklch(.746 .16 232.661);--color-sky-500:oklch(.685 .169 237.323);--color-sky-600:oklch(.588 .158 241.966);--color-sky-700:oklch(.5 .134 242.749);--color-sky-800:oklch(.443 .11 240.79);--color-sky-900:oklch(.391 .09 240.876);--color-sky-950:oklch(.293 .066 243.157);--color-blue-50:oklch(.97 .014 254.604);--color-blue-100:oklch(.932 .032 255.585);--color-blue-200:oklch(.882 .059 254.128);--color-blue-300:oklch(.809 .105 251.813);--color-blue-400:oklch(.707 .165 254.624);--color-blue-500:oklch(.623 .214 259.815);--color-blue-600:oklch(.546 .245 262.881);--color-blue-700:oklch(.488 .243 264.376);--color-blue-800:oklch(.424 .199 265.638);--color-blue-900:oklch(.379 .146 265.522);--color-blue-950:oklch(.282 .091 267.935);--color-indigo-50:oklch(.962 .018 272.314);--color-indigo-100:oklch(.93 .034 272.788);--color-indigo-200:oklch(.87 .065 274.039);--color-indigo-300:oklch(.785 .115 274.713);--color-indigo-400:oklch(.673 .182 276.935);--color-indigo-500:oklch(.585 .233 277.117);--color-indigo-600:oklch(.511 .262 276.966);--color-indigo-700:oklch(.457 .24 277.023);--color-indigo-800:oklch(.398 .195 277.366);--color-indigo-900:oklch(.359 .144 278.697);--color-indigo-950:oklch(.257 .09 281.288);--color-violet-50:oklch(.969 .016 293.756);--color-violet-100:oklch(.943 .029 294.588);--color-violet-200:oklch(.894 .057 293.283);--color-violet-300:oklch(.811 .111 293.571);--color-violet-400:oklch(.702 .183 293.541);--color-violet-500:oklch(.606 .25 292.717);--color-violet-600:oklch(.541 .281 293.009);--color-violet-700:oklch(.491 .27 292.581);--color-violet-800:oklch(.432 .232 292.759);--color-violet-900:oklch(.38 .189 293.745);--color-violet-950:oklch(.283 .141 291.089);--color-purple-50:oklch(.977 .014 308.299);--color-purple-100:oklch(.946 .033 307.174);--color-purple-200:oklch(.902 .063 306.703);--color-purple-300:oklch(.827 .119 306.383);--color-purple-400:oklch(.714 .203 305.504);--color-purple-500:oklch(.627 .265 303.9);--color-purple-600:oklch(.558 .288 302.321);--color-purple-700:oklch(.496 .265 301.924);--color-purple-800:oklch(.438 .218 303.724);--color-purple-900:oklch(.381 .176 304.987);--color-purple-950:oklch(.291 .149 302.717);--color-fuchsia-50:oklch(.977 .017 320.058);--color-fuchsia-100:oklch(.952 .037 318.852);--color-fuchsia-200:oklch(.903 .076 319.62);--color-fuchsia-300:oklch(.833 .145 321.434);--color-fuchsia-400:oklch(.74 .238 322.16);--color-fuchsia-500:oklch(.667 .295 322.15);--color-fuchsia-600:oklch(.591 .293 322.896);--color-fuchsia-700:oklch(.518 .253 323.949);--color-fuchsia-800:oklch(.452 .211 324.591);--color-fuchsia-900:oklch(.401 .17 325.612);--color-fuchsia-950:oklch(.293 .136 325.661);--color-pink-50:oklch(.971 .014 343.198);--color-pink-100:oklch(.948 .028 342.258);--color-pink-200:oklch(.899 .061 343.231);--color-pink-300:oklch(.823 .12 346.018);--color-pink-400:oklch(.718 .202 349.761);--color-pink-500:oklch(.656 .241 354.308);--color-pink-600:oklch(.592 .249 .584);--color-pink-700:oklch(.525 .223 3.958);--color-pink-800:oklch(.459 .187 3.815);--color-pink-900:oklch(.408 .153 2.432);--color-pink-950:oklch(.284 .109 3.907);--color-rose-50:oklch(.969 .015 12.422);--color-rose-100:oklch(.941 .03 12.58);--color-rose-200:oklch(.892 .058 10.001);--color-rose-300:oklch(.81 .117 11.638);--color-rose-400:oklch(.712 .194 13.428);--color-rose-500:oklch(.645 .246 16.439);--color-rose-600:oklch(.586 .253 17.585);--color-rose-700:oklch(.514 .222 16.935);--color-rose-800:oklch(.455 .188 13.697);--color-rose-900:oklch(.41 .159 10.272);--color-rose-950:oklch(.271 .105 12.094);--color-slate-50:oklch(.984 .003 247.858);--color-slate-100:oklch(.968 .007 247.896);--color-slate-200:oklch(.929 .013 255.508);--color-slate-300:oklch(.869 .022 252.894);--color-slate-400:oklch(.704 .04 256.788);--color-slate-500:oklch(.554 .046 257.417);--color-slate-600:oklch(.446 .043 257.281);--color-slate-700:oklch(.372 .044 257.287);--color-slate-800:oklch(.279 .041 260.031);--color-slate-900:oklch(.208 .042 265.755);--color-slate-950:oklch(.129 .042 264.695);--color-gray-50:oklch(.985 .002 247.839);--color-gray-100:oklch(.967 .003 264.542);--color-gray-200:oklch(.928 .006 264.531);--color-gray-300:oklch(.872 .01 258.338);--color-gray-400:oklch(.707 .022 261.325);--color-gray-500:oklch(.551 .027 264.364);--color-gray-600:oklch(.446 .03 256.802);--color-gray-700:oklch(.373 .034 259.733);--color-gray-800:oklch(.278 .033 256.848);--color-gray-900:oklch(.21 .034 264.665);--color-gray-950:oklch(.13 .028 261.692);--color-zinc-50:oklch(.985 0 0);--color-zinc-100:oklch(.967 .001 286.375);--color-zinc-200:oklch(.92 .004 286.32);--color-zinc-300:oklch(.871 .006 286.286);--color-zinc-400:oklch(.705 .015 286.067);--color-zinc-500:oklch(.552 .016 285.938);--color-zinc-600:oklch(.442 .017 285.786);--color-zinc-700:oklch(.37 .013 285.805);--color-zinc-800:oklch(.274 .006 286.033);--color-zinc-900:oklch(.21 .006 285.885);--color-zinc-950:oklch(.141 .005 285.823);--color-neutral-50:oklch(.985 0 0);--color-neutral-100:oklch(.97 0 0);--color-neutral-200:oklch(.922 0 0);--color-neutral-300:oklch(.87 0 0);--color-neutral-400:oklch(.708 0 0);--color-neutral-500:oklch(.556 0 0);--color-neutral-600:oklch(.439 0 0);--color-neutral-700:oklch(.371 0 0);--color-neutral-800:oklch(.269 0 0);--color-neutral-900:oklch(.205 0 0);--color-neutral-950:oklch(.145 0 0);--color-stone-50:oklch(.985 .001 106.423);--color-stone-100:oklch(.97 .001 106.424);--color-stone-200:oklch(.923 .003 48.717);--color-stone-300:oklch(.869 .005 56.366);--color-stone-400:oklch(.709 .01 56.259);--color-stone-500:oklch(.553 .013 58.071);--color-stone-600:oklch(.444 .011 73.639);--color-stone-700:oklch(.374 .01 67.558);--color-stone-800:oklch(.268 .007 34.298);--color-stone-900:oklch(.216 .006 56.043);--color-stone-950:oklch(.147 .004 49.25);--color-black:#000;--color-white:#fff;--spacing:.25rem;--breakpoint-sm:40rem;--breakpoint-md:48rem;--breakpoint-lg:64rem;--breakpoint-xl:80rem;--breakpoint-2xl:96rem;--container-3xs:16rem;--container-2xs:18rem;--container-xs:20rem;--container-sm:24rem;--container-md:28rem;--container-lg:32rem;--container-xl:36rem;--container-2xl:42rem;--container-3xl:48rem;--container-4xl:56rem;--container-5xl:64rem;--container-6xl:72rem;--container-7xl:80rem;--text-xs:.75rem;--text-xs--line-height:calc(1/.75);--text-sm:.875rem;--text-sm--line-height:calc(1.25/.875);--text-base:1rem;--text-base--line-height: 1.5 ;--text-lg:1.125rem;--text-lg--line-height:calc(1.75/1.125);--text-xl:1.25rem;--text-xl--line-height:calc(1.75/1.25);--text-2xl:1.5rem;--text-2xl--line-height:calc(2/1.5);--text-3xl:1.875rem;--text-3xl--line-height: 1.2 ;--text-4xl:2.25rem;--text-4xl--line-height:calc(2.5/2.25);--text-5xl:3rem;--text-5xl--line-height:1;--text-6xl:3.75rem;--text-6xl--line-height:1;--text-7xl:4.5rem;--text-7xl--line-height:1;--text-8xl:6rem;--text-8xl--line-height:1;--text-9xl:8rem;--text-9xl--line-height:1;--font-weight-thin:100;--font-weight-extralight:200;--font-weight-light:300;--font-weight-normal:400;--font-weight-medium:500;--font-weight-semibold:600;--font-weight-bold:700;--font-weight-extrabold:800;--font-weight-black:900;--tracking-tighter:-.05em;--tracking-tight:-.025em;--tracking-normal:0em;--tracking-wide:.025em;--tracking-wider:.05em;--tracking-widest:.1em;--leading-tight:1.25;--leading-snug:1.375;--leading-normal:1.5;--leading-relaxed:1.625;--leading-loose:2;--radius-xs:.125rem;--radius-sm:.25rem;--radius-md:.375rem;--radius-lg:.5rem;--radius-xl:.75rem;--radius-2xl:1rem;--radius-3xl:1.5rem;--radius-4xl:2rem;--shadow-2xs:0 1px #0000000d;--shadow-xs:0 1px 2px 0 #0000000d;--shadow-sm:0 1px 3px 0 #0000001a,0 1px 2px -1px #0000001a;--shadow-md:0 4px 6px -1px #0000001a,0 2px 4px -2px #0000001a;--shadow-lg:0 10px 15px -3px #0000001a,0 4px 6px -4px #0000001a;--shadow-xl:0 20px 25px -5px #0000001a,0 8px 10px -6px #0000001a;--shadow-2xl:0 25px 50px -12px #00000040;--inset-shadow-2xs:inset 0 1px #0000000d;--inset-shadow-xs:inset 0 1px 1px #0000000d;--inset-shadow-sm:inset 0 2px 4px #0000000d;--drop-shadow-xs:0 1px 1px #0000000d;--drop-shadow-sm:0 1px 2px #00000026;--drop-shadow-md:0 3px 3px #0000001f;--drop-shadow-lg:0 4px 4px #00000026;--drop-shadow-xl:0 9px 7px #0000001a;--drop-shadow-2xl:0 25px 25px #00000026;--ease-in:cubic-bezier(.4,0,1,1);--ease-out:cubic-bezier(0,0,.2,1);--ease-in-out:cubic-bezier(.4,0,.2,1);--animate-spin:spin 1s linear infinite;--animate-ping:ping 1s cubic-bezier(0,0,.2,1)infinite;--animate-pulse:pulse 2s cubic-bezier(.4,0,.6,1)infinite;--animate-bounce:bounce 1s infinite;--blur-xs:4px;--blur-sm:8px;--blur-md:12px;--blur-lg:16px;--blur-xl:24px;--blur-2xl:40px;--blur-3xl:64px;--perspective-dramatic:100px;--perspective-near:300px;--perspective-normal:500px;--perspective-midrange:800px;--perspective-distant:1200px;--aspect-video:16/9;--default-transition-duration:.15s;--default-transition-timing-function:cubic-bezier(.4,0,.2,1);--default-font-family:var(--font-sans);--default-font-feature-settings:var(--font-sans--font-feature-settings);--default-font-variation-settings:var(--font-sans--font-variation-settings);--default-mono-font-family:var(--font-mono);--default-mono-font-feature-settings:var(--font-mono--font-feature-settings);--default-mono-font-variation-settings:var(--font-mono--font-variation-settings)}}@layer base{*,:after,:before,::backdrop{box-sizing:border-box;border:0 solid;margin:0;padding:0}::file-selector-button{box-sizing:border-box;border:0 solid;margin:0;padding:0}html,:host{-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;line-height:1.5;font-family:var(--default-font-family,ui-sans-serif,system-ui,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji");font-feature-settings:var(--default-font-feature-settings,normal);font-variation-settings:var(--default-font-variation-settings,normal);-webkit-tap-highlight-color:transparent}body{line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;-webkit-text-decoration:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,samp,pre{font-family:var(--default-mono-font-family,ui-monospace,SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace);font-feature-settings:var(--default-mono-font-feature-settings,normal);font-variation-settings:var(--default-mono-font-variation-settings,normal);font-size:1em}small{font-size:80%}sub,sup{vertical-align:baseline;font-size:75%;line-height:0;position:relative}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}:-moz-focusring{outline:auto}progress{vertical-align:baseline}summary{display:list-item}ol,ul,menu{list-style:none}img,svg,video,canvas,audio,iframe,embed,object{vertical-align:middle;display:block}img,video{max-width:100%;height:auto}button,input,select,optgroup,textarea{font:inherit;font-feature-settings:inherit;font-variation-settings:inherit;letter-spacing:inherit;color:inherit;opacity:1;background-color:#0000;border-radius:0}::file-selector-button{font:inherit;font-feature-settings:inherit;font-variation-settings:inherit;letter-spacing:inherit;color:inherit;opacity:1;background-color:#0000;border-radius:0}:where(select:is([multiple],[size])) optgroup{font-weight:bolder}:where(select:is([multiple],[size])) optgroup option{padding-inline-start:20px}::file-selector-button{margin-inline-end:4px}::placeholder{opacity:1;color:color-mix(in oklab,currentColor 50%,transparent)}textarea{resize:vertical}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-date-and-time-value{min-height:1lh;text-align:inherit}::-webkit-datetime-edit{display:inline-flex}::-webkit-datetime-edit-fields-wrapper{padding:0}::-webkit-datetime-edit{padding-block:0}::-webkit-datetime-edit-year-field{padding-block:0}::-webkit-datetime-edit-month-field{padding-block:0}::-webkit-datetime-edit-day-field{padding-block:0}::-webkit-datetime-edit-hour-field{padding-block:0}::-webkit-datetime-edit-minute-field{padding-block:0}::-webkit-datetime-edit-second-field{padding-block:0}::-webkit-datetime-edit-millisecond-field{padding-block:0}::-webkit-datetime-edit-meridiem-field{padding-block:0}:-moz-ui-invalid{box-shadow:none}button,input:where([type=button],[type=reset],[type=submit]){-webkit-appearance:button;-moz-appearance:button;appearance:button}::file-selector-button{-webkit-appearance:button;-moz-appearance:button;appearance:button}::-webkit-inner-spin-button{height:auto}::-webkit-outer-spin-button{height:auto}[hidden]:where(:not([hidden=until-found])){display:none!important}}@layer components;@layer utilities{.absolute{position:absolute}.relative{position:relative}.static{position:static}.inset-0{inset:calc(var(--spacing)*0)}.-mt-\[4\.9rem\]{margin-top:-4.9rem}.-mb-px{margin-bottom:-1px}.mb-1{margin-bottom:calc(var(--spacing)*1)}.mb-2{margin-bottom:calc(var(--spacing)*2)}.mb-4{margin-bottom:calc(var(--spacing)*4)}.mb-6{margin-bottom:calc(var(--spacing)*6)}.-ml-8{margin-left:calc(var(--spacing)*-8)}.flex{display:flex}.hidden{display:none}.inline-block{display:inline-block}.inline-flex{display:inline-flex}.table{display:table}.aspect-\[335\/376\]{aspect-ratio:335/376}.h-1{height:calc(var(--spacing)*1)}.h-1\.5{height:calc(var(--spacing)*1.5)}.h-2{height:calc(var(--spacing)*2)}.h-2\.5{height:calc(var(--spacing)*2.5)}.h-3{height:calc(var(--spacing)*3)}.h-3\.5{height:calc(var(--spacing)*3.5)}.h-14{height:calc(var(--spacing)*14)}.h-14\.5{height:calc(var(--spacing)*14.5)}.min-h-screen{min-height:100vh}.w-1{width:calc(var(--spacing)*1)}.w-1\.5{width:calc(var(--spacing)*1.5)}.w-2{width:calc(var(--spacing)*2)}.w-2\.5{width:calc(var(--spacing)*2.5)}.w-3{width:calc(var(--spacing)*3)}.w-3\.5{width:calc(var(--spacing)*3.5)}.w-\[448px\]{width:448px}.w-full{width:100%}.max-w-\[335px\]{max-width:335px}.max-w-none{max-width:none}.flex-1{flex:1}.shrink-0{flex-shrink:0}.translate-y-0{--tw-translate-y:calc(var(--spacing)*0);translate:var(--tw-translate-x)var(--tw-translate-y)}.transform{transform:var(--tw-rotate-x)var(--tw-rotate-y)var(--tw-rotate-z)var(--tw-skew-x)var(--tw-skew-y)}.flex-col{flex-direction:column}.flex-col-reverse{flex-direction:column-reverse}.items-center{align-items:center}.justify-center{justify-content:center}.justify-end{justify-content:flex-end}.gap-3{gap:calc(var(--spacing)*3)}.gap-4{gap:calc(var(--spacing)*4)}:where(.space-x-1>:not(:last-child)){--tw-space-x-reverse:0;margin-inline-start:calc(calc(var(--spacing)*1)*var(--tw-space-x-reverse));margin-inline-end:calc(calc(var(--spacing)*1)*calc(1 - var(--tw-space-x-reverse)))}.overflow-hidden{overflow:hidden}.rounded-full{border-radius:3.40282e38px}.rounded-sm{border-radius:var(--radius-sm)}.rounded-t-lg{border-top-left-radius:var(--radius-lg);border-top-right-radius:var(--radius-lg)}.rounded-br-lg{border-bottom-right-radius:var(--radius-lg)}.rounded-bl-lg{border-bottom-left-radius:var(--radius-lg)}.border{border-style:var(--tw-border-style);border-width:1px}.border-\[\#19140035\]{border-color:#19140035}.border-\[\#e3e3e0\]{border-color:#e3e3e0}.border-black{border-color:var(--color-black)}.border-transparent{border-color:#0000}.bg-\[\#1b1b18\]{background-color:#1b1b18}.bg-\[\#FDFDFC\]{background-color:#fdfdfc}.bg-\[\#dbdbd7\]{background-color:#dbdbd7}.bg-\[\#fff2f2\]{background-color:#fff2f2}.bg-white{background-color:var(--color-white)}.p-6{padding:calc(var(--spacing)*6)}.px-5{padding-inline:calc(var(--spacing)*5)}.py-1{padding-block:calc(var(--spacing)*1)}.py-1\.5{padding-block:calc(var(--spacing)*1.5)}.py-2{padding-block:calc(var(--spacing)*2)}.pb-12{padding-bottom:calc(var(--spacing)*12)}.text-sm{font-size:var(--text-sm);line-height:var(--tw-leading,var(--text-sm--line-height))}.text-\[13px\]{font-size:13px}.leading-\[20px\]{--tw-leading:20px;line-height:20px}.leading-normal{--tw-leading:var(--leading-normal);line-height:var(--leading-normal)}.font-medium{--tw-font-weight:var(--font-weight-medium);font-weight:var(--font-weight-medium)}.text-\[\#1b1b18\]{color:#1b1b18}.text-\[\#706f6c\]{color:#706f6c}.text-\[\#F53003\],.text-\[\#f53003\]{color:#f53003}.text-white{color:var(--color-white)}.underline{text-decoration-line:underline}.underline-offset-4{text-underline-offset:4px}.opacity-100{opacity:1}.shadow-\[0px_0px_1px_0px_rgba\(0\,0\,0\,0\.03\)\,0px_1px_2px_0px_rgba\(0\,0\,0\,0\.06\)\]{--tw-shadow:0px 0px 1px 0px var(--tw-shadow-color,#00000008),0px 1px 2px 0px var(--tw-shadow-color,#0000000f);box-shadow:var(--tw-inset-shadow),var(--tw-inset-ring-shadow),var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow)}.shadow-\[inset_0px_0px_0px_1px_rgba\(26\,26\,0\,0\.16\)\]{--tw-shadow:inset 0px 0px 0px 1px var(--tw-shadow-color,#1a1a0029);box-shadow:var(--tw-inset-shadow),var(--tw-inset-ring-shadow),var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow)}.\!filter{filter:var(--tw-blur,)var(--tw-brightness,)var(--tw-contrast,)var(--tw-grayscale,)var(--tw-hue-rotate,)var(--tw-invert,)var(--tw-saturate,)var(--tw-sepia,)var(--tw-drop-shadow,)!important}.filter{filter:var(--tw-blur,)var(--tw-brightness,)var(--tw-contrast,)var(--tw-grayscale,)var(--tw-hue-rotate,)var(--tw-invert,)var(--tw-saturate,)var(--tw-sepia,)var(--tw-drop-shadow,)}.transition-all{transition-property:all;transition-timing-function:var(--tw-ease,var(--default-transition-timing-function));transition-duration:var(--tw-duration,var(--default-transition-duration))}.transition-opacity{transition-property:opacity;transition-timing-function:var(--tw-ease,var(--default-transition-timing-function));transition-duration:var(--tw-duration,var(--default-transition-duration))}.delay-300{transition-delay:.3s}.duration-750{--tw-duration:.75s;transition-duration:.75s}.not-has-\[nav\]\:hidden:not(:has(:is(nav))){display:none}.before\:absolute:before{content:var(--tw-content);position:absolute}.before\:top-0:before{content:var(--tw-content);top:calc(var(--spacing)*0)}.before\:top-1\/2:before{content:var(--tw-content);top:50%}.before\:bottom-0:before{content:var(--tw-content);bottom:calc(var(--spacing)*0)}.before\:bottom-1\/2:before{content:var(--tw-content);bottom:50%}.before\:left-\[0\.4rem\]:before{content:var(--tw-content);left:.4rem}.before\:border-l:before{content:var(--tw-content);border-left-style:var(--tw-border-style);border-left-width:1px}.before\:border-\[\#e3e3e0\]:before{content:var(--tw-content);border-color:#e3e3e0}@media (hover:hover){.hover\:border-\[\#1915014a\]:hover{border-color:#1915014a}.hover\:border-\[\#19140035\]:hover{border-color:#19140035}.hover\:border-black:hover{border-color:var(--color-black)}.hover\:bg-black:hover{background-color:var(--color-black)}}@media (width>=64rem){.lg\:-mt-\[6\.6rem\]{margin-top:-6.6rem}.lg\:mb-0{margin-bottom:calc(var(--spacing)*0)}.lg\:mb-6{margin-bottom:calc(var(--spacing)*6)}.lg\:-ml-px{margin-left:-1px}.lg\:ml-0{margin-left:calc(var(--spacing)*0)}.lg\:block{display:block}.lg\:aspect-auto{aspect-ratio:auto}.lg\:w-\[438px\]{width:438px}.lg\:max-w-4xl{max-width:var(--container-4xl)}.lg\:grow{flex-grow:1}.lg\:flex-row{flex-direction:row}.lg\:justify-center{justify-content:center}.lg\:rounded-t-none{border-top-left-radius:0;border-top-right-radius:0}.lg\:rounded-tl-lg{border-top-left-radius:var(--radius-lg)}.lg\:rounded-r-lg{border-top-right-radius:var(--radius-lg);border-bottom-right-radius:var(--radius-lg)}.lg\:rounded-br-none{border-bottom-right-radius:0}.lg\:p-8{padding:calc(var(--spacing)*8)}.lg\:p-20{padding:calc(var(--spacing)*20)}}@media (prefers-color-scheme:dark){.dark\:block{display:block}.dark\:hidden{display:none}.dark\:border-\[\#3E3E3A\]{border-color:#3e3e3a}.dark\:border-\[\#eeeeec\]{border-color:#eeeeec}.dark\:bg-\[\#0a0a0a\]{background-color:#0a0a0a}.dark\:bg-\[\#1D0002\]{background-color:#1d0002}.dark\:bg-\[\#3E3E3A\]{background-color:#3e3e3a}.dark\:bg-\[\#161615\]{background-color:#161615}.dark\:bg-\[\#eeeeec\]{background-color:#eeeeec}.dark\:text-\[\#1C1C1A\]{color:#1c1c1a}.dark\:text-\[\#A1A09A\]{color:#a1a09a}.dark\:text-\[\#EDEDEC\]{color:#ededec}.dark\:text-\[\#F61500\]{color:#f61500}.dark\:text-\[\#FF4433\]{color:#f43}.dark\:shadow-\[inset_0px_0px_0px_1px_\#fffaed2d\]{--tw-shadow:inset 0px 0px 0px 1px var(--tw-shadow-color,#fffaed2d);box-shadow:var(--tw-inset-shadow),var(--tw-inset-ring-shadow),var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow)}.dark\:before\:border-\[\#3E3E3A\]:before{content:var(--tw-content);border-color:#3e3e3a}@media (hover:hover){.dark\:hover\:border-\[\#3E3E3A\]:hover{border-color:#3e3e3a}.dark\:hover\:border-\[\#62605b\]:hover{border-color:#62605b}.dark\:hover\:border-white:hover{border-color:var(--color-white)}.dark\:hover\:bg-white:hover{background-color:var(--color-white)}}}@starting-style{.starting\:translate-y-4{--tw-translate-y:calc(var(--spacing)*4);translate:var(--tw-translate-x)var(--tw-translate-y)}}@starting-style{.starting\:translate-y-6{--tw-translate-y:calc(var(--spacing)*6);translate:var(--tw-translate-x)var(--tw-translate-y)}}@starting-style{.starting\:opacity-0{opacity:0}}}@keyframes spin{to{transform:rotate(360deg)}}@keyframes ping{75%,to{opacity:0;transform:scale(2)}}@keyframes pulse{50%{opacity:.5}}@keyframes bounce{0%,to{animation-timing-function:cubic-bezier(.8,0,1,1);transform:translateY(-25%)}50%{animation-timing-function:cubic-bezier(0,0,.2,1);transform:none}}@property --tw-translate-x{syntax:"*";inherits:false;initial-value:0}@property --tw-translate-y{syntax:"*";inherits:false;initial-value:0}@property --tw-translate-z{syntax:"*";inherits:false;initial-value:0}@property --tw-rotate-x{syntax:"*";inherits:false;initial-value:rotateX(0)}@property --tw-rotate-y{syntax:"*";inherits:false;initial-value:rotateY(0)}@property --tw-rotate-z{syntax:"*";inherits:false;initial-value:rotateZ(0)}@property --tw-skew-x{syntax:"*";inherits:false;initial-value:skewX(0)}@property --tw-skew-y{syntax:"*";inherits:false;initial-value:skewY(0)}@property --tw-space-x-reverse{syntax:"*";inherits:false;initial-value:0}@property --tw-border-style{syntax:"*";inherits:false;initial-value:solid}@property --tw-leading{syntax:"*";inherits:false}@property --tw-font-weight{syntax:"*";inherits:false}@property --tw-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-shadow-color{syntax:"*";inherits:false}@property --tw-inset-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-inset-shadow-color{syntax:"*";inherits:false}@property --tw-ring-color{syntax:"*";inherits:false}@property --tw-ring-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-inset-ring-color{syntax:"*";inherits:false}@property --tw-inset-ring-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-ring-inset{syntax:"*";inherits:false}@property --tw-ring-offset-width{syntax:"<length>";inherits:false;initial-value:0}@property --tw-ring-offset-color{syntax:"*";inherits:false;initial-value:#fff}@property --tw-ring-offset-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-blur{syntax:"*";inherits:false}@property --tw-brightness{syntax:"*";inherits:false}@property --tw-contrast{syntax:"*";inherits:false}@property --tw-grayscale{syntax:"*";inherits:false}@property --tw-hue-rotate{syntax:"*";inherits:false}@property --tw-invert{syntax:"*";inherits:false}@property --tw-opacity{syntax:"*";inherits:false}@property --tw-saturate{syntax:"*";inherits:false}@property --tw-sepia{syntax:"*";inherits:false}@property --tw-drop-shadow{syntax:"*";inherits:false}@property --tw-duration{syntax:"*";inherits:false}@property --tw-content{syntax:"*";inherits:false;initial-value:""}--}}
{{--        </style>--}}
    </head>
{{--    <body class="d-flex flex-column" oncontextmenu="return false" ondragstart="return true"--}}
{{--          onselectstart="return false">--}}

    <body class="d-flex flex-column" >
{{--    <div class="container" align="center">--}}
        <div class="container-fluid align-center clearfix">

        <style>
            /* Make the image fully responsive */

            body {
                /*     background-color: #c2e8fc !important; */
            }

            .customcolor {
                /*  background-color: #c2e8fc !important; */
                background-color: #fff !important;
            }

            .customcolorwhite {
                background-color: #fff !important;
            }

            .ui-dialog {
                position: fixed;
            }


            .carousel {


                /* background-color: #c2e8fc !important; */
                background-color: #fff !important;
            }




            .card-body {
                /*      background-color: #c2e8fc !important; */
                background-color: #fff !important;

            }





            .carousel-indicators {
                position: absolute;
                bottom: -35px;
                /*              background-color: #c2e8fc !important; */
                background-color: #fff !important;
            }

            .carousel-indicators li {
                width: 10px;
                height: 10px;
                border-radius: 100%;
                background-color: #040404;
            }

            }




            .navbar {
                position: relative;
                width: 100%;
                z-index: 10;
                max-width: 100%;
            }
            /* carousel */
            /*active slide indicator */

            .carousel-indicators .active {
                background: #fff none repeat scroll 0 0;
                border: 4px solid #040404;
            }

            .alignright {
                text-align: right;
                width: 30px;
            }

            .alignleft {
                width: 30px;
                height: 30px;
            }

            .aligncenter {
                text-align: center;
                width: 260px;
            }


            #pin, #pintwo, #steps {
                position: relative;
            }



            .target {
                border: 2px solid black;
                display: inline-block;
            }

            .verticalalign {
                vertical-align: bottom;
            }


            video {

                width: 100%    !important;


            }


            @import url('https://fonts.googleapis.com/css?family=Lato:100&display=swap');


            :root {
                --text-color: hsla(210, 50%, 85%, 1);
                --shadow-color: hsla(210, 40%, 52%, .4);
                --btn-color: hsl(210, 80%, 42%);
                --bg-color: #141218;
            }

            * {
                box-sizing: border-box;
            }



            buttontoilet {
                position:relative;
                padding: 10px 20px;
                border: none;
                background: none;
                cursor: pointer;

                font-family: "Source Code Pro";
                font-weight: 900;
                text-transform: uppercase;
                font-size: 30px;
                color: var(--text-color);

                background-color: var(--btn-color);
                box-shadow: var(--shadow-color) 2px 2px 22px;
                border-radius: 4px;
                z-index: 0;
                overflow: hidden;
            }

            buttontoilet:focus {
                outline-color: transparent;
                box-shadow: var(--btn-color) 2px 2px 22px;
            }

            .right::after, buttontoilet::after {
                content: var(--content);
                display: block;
                position: absolute;
                white-space: nowrap;
                padding: 40px 40px;
                pointer-events:none;
            }

            buttontoilet::after{
                font-weight: 200;
                top: -30px;
                left: -20px;
            }

            .right, .left {
                position: absolute;
                width: 100%;
                height: 100%;
                top: 0;
            }
            .right {
                left: 66%;
            }
            .left {
                right: 66%;
            }
            .right::after {
                top: -30px;
                left: calc(-66% - 20px);

                background-color: var(--bg-color);
                color:transparent;
                transition: transform .4s ease-out;
                transform: translate(0, -90%) rotate(0deg)
            }

            buttontoilet:hover .right::after {
                transform: translate(0, -47%) rotate(0deg)
            }

            buttontoilet .right:hover::after {
                transform: translate(0, -50%) rotate(-7deg)
            }

            buttontoilet .left:hover ~ .right::after {
                transform: translate(0, -50%) rotate(7deg)
            }

            /* bubbles */
            buttontoilet::before {
                content: '';
                pointer-events: none;
                opacity: .6;
                background:
                    radial-gradient(circle at 20% 35%,  transparent 0,  transparent 2px, var(--text-color) 3px, var(--text-color) 4px, transparent 4px),
                    radial-gradient(circle at 75% 44%, transparent 0,  transparent 2px, var(--text-color) 3px, var(--text-color) 4px, transparent 4px),
                    radial-gradient(circle at 46% 52%, transparent 0, transparent 4px, var(--text-color) 5px, var(--text-color) 6px, transparent 6px);

                width: 100%;
                height: 300%;
                top: 0;
                left: 0;
                position: absolute;
                animation: bubbles 5s linear infinite both;
            }

            @keyframes bubbles {
                from {
                    transform: translate();
                }
                to {
                    transform: translate(0, -66.666%);
                }
            }



            .wrap {
                height:100px;
                width:200px";
                display: flex;
                align-items: center;
                justify-content: center;
            }







        </style>




            {{--        <nav class="navbar navbar-expand-sm navbar-dark bg-dark mb-3">--}}
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark mb-3 w-100">

        <a class="navbar-brand" href="/">PMWay</a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    @auth
                        <li class="nav-item">
                            <a class="nav-link" href="/home/nottwentyfourseven" title="NB: This web is not up 24/7">
                                <i class="fad" style="--fa-primary-opacity: 0.80; --fa-secondary-opacity: 4;--fa-primary-color: red; --fa-secondary-color: red;"></i>
                                <small><font color="red">NOT24/7</font></small>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contacts/new" title="Contact PMWay">
                                <i class="fad fa-envelope" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/cv/index.html" title="Who am I, my Portfolio Web and CV" target="_blank">
                                <i class="fad fa-id-card-alt"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/home/about" title="Why PMWay?">
                                <i class="fad fa-info"></i>&nbsp;&nbsp;
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fad fa-cogs"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                                <a class="dropdown-item" href="/home/pmbokprocessnutshell" title="Find out how to use the PMBok Dashboard">
                                    <i class="fad fa-cogs"></i>&nbsp;HowTo
                                </a>
                                <a class="dropdown-item" href="/home/agile" title="Want an overview of Lean and Agile">
                                    <i class="fad fa-cogs"></i>&nbsp;Agile
                                </a>
                                <a class="dropdown-item" href="/home/carousel" title="See the PMBOK in the Greater Scheme by Connecting the Dots here">
                                    <i class="fad fa-cogs"></i>&nbsp;TheDots
                                </a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/profile/show" title="Change your Profile">
                                <i class="fad fa-user" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fad fa-lock"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                                <a class="dropdown-item" href="/logout">
                                    <i class="fad fa-lock" aria-hidden="true"></i>&nbsp;Logout
                                </a>
                                <a class="dropdown-item" href="/remember/logout">
                                    <i class="fad fa-unlock" aria-hidden="true"></i>&nbsp;Remember Me
                                </a>
                            </div>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="/home/nottwentyfourseven" title="NB: This web is not up 24/7">
                                <i class="fad" style="--fa-primary-opacity: 0.80; --fa-secondary-opacity: 4;--fa-primary-color: red; --fa-secondary-color: red;"></i>
                                <small><font color="red">NOT24/7</font></small>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/home/about" title="Why PMWay?">
                                <i class="fad fa-info"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contacts/new" title="Contact PMWay">
                                <i class="fad fa-envelope" aria-hidden="true"></i>

                            </a>

                                <li class="nav-item">
                                    <a class="nav-link" href="/cv/index.html" title="Who am I, my Portfolio Web and CV" target="_blank">
                                        <i class="fad fa-id-card-alt"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/home/agile" title="Lean and Agile?">
                                        <i class="fad fa-cogs"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/contacts/contacts">
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/register" id="register" title="Register on PMWay">
                                        <i class="fad fa-user-plus" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/login" id="login" title="Login to PMWay">
                                        <i class="fad fa-unlock" aria-hidden="true"></i>
                                    </a>
                                </li>
                    @endauth
                </ul>
            </div>
        </nav>




        <!--   <table id="tabletwo" style="width: 30%">
               <tr>
                   <td class="alignright" valign="bottom">
                       <a href="/cmmi" title="On a Desktop drag the pin down to your Capability Maturity level now!  Or drag the pin through the gateway and hit the Productivity and Quality improvement target!"><img alt="pin" class="img-fluid" id="pin" src="/images/pin40.png"></a>
                   </td>
                   <td class="aligncenter"><img alt="" class="img-fluid" src="/images/gatewayflat.png" onmouseover="this.src='/images/gateway.png'" onmouseout="this.src='/images/gatewayflat.png'"></td>
                   <td class="alignleft">
                       <a href="/?slide=5"><img alt="target" class="img-fluid" id="target" src="/images/targetsmall.png" title="Click the target for the project management and other processes to maintain and improve up to Capability Maturity Level 5"></a>
                   </td>
               </tr>
           </table> <button class="btn align-center clearfix" type="button" data-toggle="collapse" data-target="#collapseperformancestats" aria-expanded="false" aria-controls="collapseperformancestats"> -->

        <br>
        <br>

        <div class="rTableBody">
            <div class="rTableRow">
                <div class="rTableCell"></div>
                <!--<div class="rTableCell"><img class="img-fluid" src="/images/howdoyoudown.png"  title="Have you documented and are you managing and optimizing your value chains in your Service Portfolios?"></div>-->


                <div class="rTableCell" align="center"><img class="img-fluid" src="/images/howdoyoudown.png"  title="Have you documented and are you managing and optimizing your value chains in your Service Portfolios?" onmouseover="this.src='/images/itil4game.png'" onmouseout="this.src='/images/howdoyoudown.png'" >
                    <!--<div class="rTableCell"><img class="img-fluid" src="/images/howdoyou.png" onmouseover="this.src='/images/howdoyoudown.png'" onmouseout="this.src='/images/howdoyou.png'" title=""></div>-->
                    <div class="rTableCell"></div>
                </div>
            </div>





            <br>

            <div class="text-center">
            <button class="btn align-center clearfix" type="button" data-toggle=
                "collapse" data-target="#collapseperformancestats" aria-expanded="false" aria-controls=
                        "collapseperformancestats">		 <div class="rTable">
                    <div class="rTableBody">
                        <div class="rTableRow">
                            <div class="rTableCell"></div>
                            <div class="rTableCell" align="center"><img class="img-fluid" src="/images/itilvaluestreams.png" >
                            </div>
                            <div class="rTableCell"></div>
                        </div>
                    </div>
                </div>


            </button>
            <br>
            <br>



            <div class="collapse" id="collapseperformancestats">
                <div class="container">
                    <div class="card text-center">
                        <h3 class="card-header" align="center">The ITIL 4 Value Stream<br>Underpinned by Software Engineering with Lean, Devops, <a href="/login" target="_blank">TPM</a> or <a href="/login" target="_blank">APM</a></h3>



                        <div class="card-body text-center">




                            <h5><a href="/homesave/resources/itilfouroverview.pdf" target="_blank" title="Click here for a presentation about ITIL 4">Click here for a quick overview of ITIL 4<br>and their handling of the Value Stream</a></h5>
                            <br><p>Having worked through the presentation you downloaded from the link directly above, <br>can you see that improvement projects are triggered in the Service Strategy ITIL lifecycle phase?</p>
                            <p>The above said, ultimately it is all about you being able to "Up" your Productivity and Quality Stats<br>
                                (while reducing Risk, Rework and Waste)<br>
                                This goal is achieved by <a href="/login">firming up CM Level 2 processes</a>.</p>
                            <p>Do this for <a href="/?slide=1" target="_blank">Traditional Project Management processes</a> or
                                <a href="/home/agile">Agile processes</a>.<br>Then, <a href="/login" target="_blank">with
                                    a managed CM Level 2 base
                                    firmly in place</a>; reach higher. </p>
                            <p><a href="/?slide=1" target="_blank">Connect the dots here</a> to see touchpoints on your journey towards success.</p>

                            <!--    <button class="btn btn-primary align-center clearfix" type="button" data-toggle=
                  "collapse" data-target="#collapsemorestuffs" aria-expanded="false" aria-controls=
                          "collapsemorestuffs">More Information?</button>

                  <div class="collapse" id="collapsemorestuffs">
                      <div class="container">
                          <div class="card text-center">
                  <h5 class="card-header" align="center">More Information?</h5>
                              <div class="card-body text-center">


                                          <table style="width: 70%" border="2" align="center">
                                              <tr>
                                                  <td>
                                                      <p align="center"><i><a href="/login" target="_blank">Click here to go to the Capability Maturity Model</a>.<br>
                                      Can you appreciate that <a href="/login" target="_blank">CM Level 2</a> contains the project
                                      management processes found in the <a href="/login" target="_blank">PMBOK 6 dashboard? </a><br>
                                      And guess what... They are also found in <a href="/login" target="_blank">agile!</a><br>
                                      <a href="/login" target="_blank">Can you spot them
                                        in the popular agile method Scrum's
                                        processes?</a></i></p>
                                                  </td>
                                              </tr>
                                          </table>
                                          <br>
                                          <br>
                                           <h6>Click the tile below for ideas to
                              rapidly<br> &quot;Up Your Game Stats&quot; for CM L2+</h6>

                                          <a href="/login" title="Click here for information about upping production statistics and red bead removal"><img alt="Red Beads" class="img-fluid" src="/images/redbeadsoutsmall.png" style="z-index:999"></a>
                                          <!--<br><i>for ideas start producing value!</i></p>-->

                            <!--    </div>
                      <div class="card-footer">

                      </div>
                  </div>
              </div>
          </div>-->

                        </div>
                        <div class="card-footer">
                            <h1>Bottom Line</h1>

                            <h3 align="center">       <b>Are you a <a href="/gamestats#kkahnli" target="_blank">Kha Khan</a>?</b><br>

                                <a href="/login" target="_blank"><img class="verticalalign img-fluid" src="/images/fishsmaller.png" title="Click here if you are tired of the chaos!"></a><br>
                                <b>Are you tired of the <a href="/login" target="_blank" title="Click here for one of the original Chaos Reports.  Sound familiar?">Chaos</a>?</b>
                                <br>
                            </h3>
                        </div>

                    </div>
                </div>
            </div>

            <div align="center"><a href="/laws" target="_blank"  ><img class="img-fluid" src="/images/itil4gp2.png" onmouseover="this.src='/images/itil4gp1.png'" onmouseout="this.src='/images/itil4gp2.png'" title="Hover for more on ITIL 4 and their Guiding Principles from a Stepwise Perspective or click for the importance of Millars Law"></a></div><br>


            <!--------------------------------------------------------------------------------------------------------------------------------------------------------------->
            <!---   <p align="center"><a href="/pin"  title="Move the pin through the Capability Maturity Levels Improvement gateway and hit the target.  Bottom line: According to Deming:  Focus on the process and not the outcome of the process!  If you cannot describe what you are doing as a process you do not know what you are doing! " ><img id="pin" class="img-fluid" style="z-index:100"  src="/images/pinsmaller.png" alt="pin" ></a>
     <button class="btn align-center clearfix" type="button" data-toggle="collapse" data-target="#collapsecapmatlvl11111" aria-expanded="false" aria-controls="collapsecapmatlvl">
         <div class="rTable">
    <div class="rTableBody">
    <div class="rTableRow">
    <div class="rTableCell"></div>
        <div class="rTableCell"><img alt="" title="Log on and click the gateway to see why Capability Maturity Level 2 is where you have to be in order to up your game stats and also to stop the chaos.  CM Level 2 is the firm base needed for CM L3, 4 and 5!" class="img-fluid" src="/images/gatewayflat.png" onmouseover="this.src='/images/gateway.png'" onmouseout="this.src='/images/gatewayflat.png'"></div>
    <div class="rTableCell"></div>
    </div>
    </div>
    </div>

    </button><a href="/cmmi"><img id="target" class="img-fluid" title="Click the target for the project management and other processes to maintain and improve up to Capability Maturity Level 5" src="/images/targetsmall.png" alt="target" ></a>
    --->


                <!--NBNBNB The small pin and the cmmi gate-->
            <div class="text-center">
            <button class="btn align-center clearfix" type="button" data-toggle="collapse" data-target="#collapsecapmatlvl" aria-expanded="false" aria-controls="collapsecapmatlvl">
                <div class="rTableBody">
                    <div class="rTableRow d-flex justify-content-center">
                        <div class="rTableCell"><a href="/pin"  title="Move the pin through the Capability Maturity Levels Improvement gateway and hit the target.  Bottom line: According to Deming:  Focus on the process and not the outcome of the process!  If you cannot describe what you are doing as a process you do not know what you are doing! " ><img id="pin" class="img-fluid" style="z-index:100"  src="/images/pinsmaller.png" alt="pin" ></a></div>
                        <div class="rTableCell"><img alt="" title="Log on and click the gateway to see why Capability Maturity Level 2 is where you have to be in order to up your game stats and also to stop the chaos.  CM Level 2 is the firm base needed for CM L3, 4 and 5!" class="img-fluid" src="/images/gatewayflat.png" onmouseover="this.src='/images/gateway.png'" onmouseout="this.src='/images/gatewayflat.png'"></div>
                        <div class="rTableCell"><a href="/cmmi"><img id="target" class="img-fluid" title="Click the target for the project management and other processes to maintain and improve up to Capability Maturity Level 5" src="/images/targetsmall.png" alt="target" ></a></div>
                    </div>
                </div>



        </button>
        <div class="collapse" id="collapsecapmatlvl">
            <div class="container">
                <div class="card text-center">
                    <h5 class="card-header" align="center"></h5>
                    <div class="card-body text-center">
                        <h5 align="center">Achieve Business Value through Productivity and Quality
                            Improvements<br>
                            off the stable base of Project Process Management <br>
                            (<a href="/?slide=1">Traditional</a> or <a href="/home/agile"> Agile</a>) <br>
                            at Capability Maturity Model Level 2 <br>(+ Software Engineering (Dev), Services and Acquisition processes above CM L2)</h5>

                        <button class="btn btn-primary align-center clearfix" type="button" data-toggle=
                            "collapse" data-target="#collapsepractice" aria-expanded="false" aria-controls=
                                    "collapsepractice">Process Focus<br><img class="img-fluid" src="/images/unlock.png" title="Read the quotes from Dr Deming here to understand that a focus on processes is the only sure way to escape Capability Maturity Level 1 and below, in order to increase Productivity an Quality at CM L2 and above.">
                            <br>Productivity & Quality
                        </button>
                        <br>
                        <br>
                        <div class="collapse" id="collapsepractice">
                            <div class="container">
                                <div class="card text-center">
                                    <h5 class="card-header" align="center"></h5>
                                    <div class="card-body text-center">

                                        <div class="rTable">
                                            <div class="rTableBody">
                                                <div class="rTableRow">
                                                    <div class="rTableCell"></div>
                                                    <div class="rTableCell" ><img class="img-fluid" title="" src="/images/demingone.jpg" onmouseover="this.src='/images/demingtwo.jpg'" onmouseout="this.src='/images/demingthree.jpg'" title="">
                                                    </div>

                                                    <div class="rTableCell"><p align="center"><i><b>Hover your mouse over the Deming image above</b>.</i></p><p align="left"><a href="/cmmi" target="_blank">CM Level 2+,</a> differentiated from CM L1 per the CM table below, is all about Process Focus for Productivity and Quality improvements; as opposed to "just do it now" - heroics.  Deming's philosophy above is the wisdom behind much of the <a href="/?slide=5">Capability Maturity Model integrated from Carnegie Mellon University</a> summarized (for Software Development processes) in the table below.</p>	<p><a href="/redbeads" target="_blank">Click here for Dr. Deming's Red Bead Experiment</a>.<br>
                                                            This is an essential concept to learn if you aim for higher levels of <a href="/gamestats" target="_blank">Productivity</a> and Quality and to be agile and lean.</p><h3>
                                                            Remember (per Deming's Red Bead Experiment) a process can be stable, in control and be producing defective items 100% of the time!</h3> </div>
                                                </div>
                                            </div>
                                        </div>





                                        <div class="rTable">
                                            <div class="rTableBody">
                                                <div class="rTableRow">
                                                    <div class="rTableCell"></div>
                                                    <div class="rTableCell" >

                                                        <!--<p>Example of automation in a Value Stream<br>"Grain In and Meal Out"</p><img class="img-fluid" src="/images/smallgrist.gif"  title="Input (Grain), Transformation (Grinding of grist Process), Output (Meal or Flour)">

                                                        <br>
                                                        <br>
                                                        <br>
                                                        <br><button class="btn btn-primary align-center clearfix" type="button" data-toggle=
                                                        "collapse" data-target="#collapseprocesstiming" aria-expanded="false" aria-controls=
                                                                "collapseprocesstiming">Mapping Value Streams<br>Theory of Constraints<br>Eliminating Waste<br>Lean etc.<br>for<br> "Upped Production Stats"
                                                        </button>

                                                        <div class="collapse" id="collapseprocesstiming">
                                                            <div class="container">
                                                                <div class="card text-center">
                                                        <h5 class="card-header" align="center"><img class="img-fluid" src="/images/lordkelvin.jpg"></h5>
                                                                    <div class="card-body text-center">


                                                        <p align="center"><img class="img-fluid" src="/images/processtiming.jpg"></p>
                                                        <br>
                                                        <p align="center"><img class="img-fluid" src="/images/herbieandleanswwastes.jpg"></p>
                                                        <br>


                                                        <p align="center"><a href="/login" target="_blank">Click here for Little's Law</a></p>
                                                        <p align="center"><a href="/login" target="_blank">Click here for an excellent article about Scrum or Kanban (or ScrumBan).  <br>PMWay's opinion is found at the bottom.</a></p>



                                                                    </div>
                                                                    <div class="card-footer">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>-->



                                                    </div>
                                                    <div class="rTableCell"></div>
                                                </div>
                                            </div>
                                        </div>


                                        <!--EEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEPROCESSES DEMINGEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEE-->

                                    </div>
                                    <div class="card-footer">

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--EEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEPROCESSES DEMINGEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEE-->

                        <h5>PMWay is all about ideas<br>to improve your <a href="/home/gamestats">game stats</a></h5>
                        <img class="img-fluid" src="/images/cmmproject2plus.png" onmouseover="this.src='/images/cmmproject2plusshadedbezelled.png'" onmouseout="this.src='/images/cmmproject2plus.png'" title="Register with PMWay and let me help you find your way">
                        <p align="left">
                            <a href="/pin" target="_blank" title="Where is your game at. Drag the pin with your mouse upwards to the Capability Maturity model or click the pin to take the test"><img alt="" id="pin" height="144" src="/images/pinlarge.png" width="152"></a>I.e. can you pin down where is your game is currently at?</p>
                        <br>
                        <h5 align="center">If you think the game has changed from Traditional Project Management to Agile Project Management<br>
                            I suggest you are wrong!</h3>
                            <p>At 1000 feet up, looking down, all projects follow the same essential approach illustrated below</p>
                            <p><small>Remember that a project, stage, phase or iteration should all qualify to fall under this definition of what is a project? It's a temporary endeavor undertaken to create a unique product, service or result. A project is temporary in that it has a defined beginning and end in time, and therefore defined scope and resources. ELSE, not monitoring controls, you are out of control!</small></p>
                            <br>


                            <img class="img-fluid" alt="mind the game with TPM and APM - or else" src="/images/tpmapmgap.png" >

                            <img class="img-fluid" alt="mind the game with TPM and APM - or else" src="/images/thegamelarger.jpg" >

                            <p align="left">In Agile (Scrum project method for example) the goal is to produce working softare regularly each sprint that meets the user requirement (<a href="/productincrement" target=_blank"><i><u>the art of slicing sprint delivery / product increment production</u></i></a>).  Requirements are accepted by the team as user stories into the current sprint.  Therefore the gap in Scrum typically, is a 2 week sprint!<br><br><b>Here are some important questions you may want to consider, if your aim is to operate with agility at Capability Maturity Level 2+:<br><ul align="left"><li>Can the team mind the gap releasing user stories as working software at the end of each sprint?  <br>I.e. <a href="/home/agile?slide=12" target="_blank"><u>From the Agile Manifesto's two key principles which state:<br><br>

                                                    <ul>
                                                        <li></u></a> “Our highest priority is to satisfy the customer through early and continuous delivery of valuable software”</li>&amp<li>"Deliver working software frequently, from a couple of weeks to a couple of months, with a preference on the shorter timescale"</li></ul><br><i>Note: As the Scrum method can be used for all types of projects (not just software projects) <a href="/home/snowbird" target="_blank"><u><br>Per the last 10 minutes of the discussion here</u></a> it is suggested that the word "software" can easily be swopped out for the word "value" <br>I.e. (in the Agile Manifesto's four value propositions:<br>  We are uncovering better ways of developing software by doing it and helping others do it.<br><a href="/home/agile?slide=12" target="_blank"><u>Through this work we have come to value:...</u></a>)</i></li><li>Essentially, are the team a <a href="/images/doneandundone.jpg" target="_blank">done or undone</a> Scrum team?</li><li>If an undone Scrum team, are they dealing with more and more <a href="/images/undonescrum.jpg" target="_blank">undone work</a> piling up sprint after sprint?</li><li>What is this doing to the projects budget from an <a href="/images/tcpi.jpg" target="_blank">Earned Value well managed</a> perspective?</li><li>If the above points (and more) are not appreciated then Agile will be "FRAGILE," "WAGILE" (Waterfall Agile)" and "AINO" (Agile in Name Only) and (there is a very good probability that) the team will be operating heroically at Capability Maturity Level 1!</li></ul></b></p>
                            <br><h5 align="left">The short answer you are looking for is to look at the CMM model above and find PP and PMC at CM Level 2.  These core processes and more are still required for success in Traditional Project Management and especially in Agile Project Management.</h5>
                            <p><a href="/homeviewpdf/resources/scrumsafelyfordownload.pdf" target="_blank">Also click here for Scrum SAFely pdf</a></p>
                    </div>
                    <div class="card-footer">

                    </div>
                </div>
            </div>
        </div>



        <!-------------------------------------------------------------------------------------------------------------------------------------------------------------->

        <br>


            <div class="text-center">


        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="btn align-center clearfix" type="button" data-toggle="collapse" data-target="#collapseopencarousel1111" aria-expanded="false" aria-controls="collapseopencarousel">
            <div class="rTableBody">
                <div class="rTableRow">
                    <div class="rTableCell"></div>
                    <div class="rTableCell" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img alt="Animated GIF of Cogs going around and around to illustrate the idea of processes working together" height="50" src="/images/cogsworking.gif" width="73"  title="Log on and click on these cogs to take a 16 slide walkthrough explaining how processes can be used to up your production stats and get you to CM L2+"></div>
                    <div class="rTableCell"></div>
                </div>
            </div>


        </button><br><br>
        <div class="collapse" id="collapseopencarousel">
            <div class="container">
                <div class="card text-center">
                    <h5 class="card-header" align="center"><a href="/cmmi" target="_blank">Capability Maturity Level 2</a> is
                        essentially all about Project Management processes <br><!--<a href="/home/itilpractices" target="_blank" >--><img class="img-fluid" title="value streams" src="/images/itosmallabove.png" onmouseover="this.src='/images/itosmall.png'" onmouseout="this.src='/images/itosmallabove.png'" title=""><!--</a>--><br>

                        Else operating @ CM L1<!--<br><a href="/?slide=1" target="_blank"><em style="font-size:small">I.e. rush heroically into
PMBOK 6 process #4.3,<br>or <a href="/?slide=12" target="_blank">Scrum process #13</a><br>before receiving the tailored outputs required from the previous processes;
<br>be a hero, why don't you!</em>--></h5>
                    <div class="card-body text-center customcolor " >

                        <p style="font-size:x-small"><a class="right carousel-control" href="#carousel-example-generic" role="button" data-target="#mycarousel" data-slide-to="0" title="Slide 1: PMBOK (The checklist for Project Management Professionals)">PMBOK |</a>

                            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-target="#mycarousel" data-slide-to="1" title="Slide 2: Standards/Frameworks Landscape (Can you see that the PMBOK is a Standard?)">Standards |
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-target="#mycarousel" data-slide-to="2" title="Slide 3: Strategy Wall (Formulating Strategy (strategic or project plan) is fun but the ability to Implement the plan is where running a successful game is at)">Strategy
                                |
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-target="#mycarousel" data-slide-to="3" title="Slide 4: Capability Maturity model with levels (If you are CM Level 1 or ZERO you are nowhere)">CMmodel |
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-target="#mycarousel" data-slide-to="4" title="Slide 5: Capability Maturity integrated development dashboard (CM Level 2+ is where your game should be at)">CMMiDev

                            </a>
                            <br>
                            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-target="#mycarousel" data-slide-to="5" title="Slide 6: People Process Technology triad (Can you remove the Red Beads?)">PPTtriad |

                                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-target="#mycarousel"
                                   data-slide-to="6" title="Slide 7: Vmodel (Do you Mind the Gap?)"> Vmodel |
                                </a>
                                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-target="#mycarousel" data-slide-to="7" title="Slide 8: IT Infrastructure Library version 3 (Do you focus on the IT Stack - Technology so your People's Processes are optimized?)">ITIL
                                    |
                                </a>
                                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-target="#mycarousel" data-slide-to="8" title="Slide 9: DevOps (Can you actually eat the elephant or is it just talk?">DevOps  |
                                </a>
                                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-target="#mycarousel" data-slide-to="9" title="Slide 10: Prince2Agile (Left shift from to Traditional to Agile with governance [Red Beads removed by the Board!])">Prince2A
                                    |
                                </a>
                                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-target="#mycarousel" data-slide-to="10" title="Slide 11: Dynamic Systems Development Model (left shift means more risk)">DSDM
                                </a>
                                <br>
                                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-target="#mycarousel" data-slide-to="11" title="Slide 12: Scrum (left shift means even more risk)">Scrum |
                                </a>
                                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-target="#mycarousel" data-slide-to="12" title="Slide 13: Scaled Agile Framework (Can your Scrum teams as a Program release working software regularly?)">SAFe
                                    |
                                </a>
                                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-target="#mycarousel" data-slide-to="13" title="Slide 14: People Capability Maturity Model (Agile and Traditional require Empowered Workgroups)">PCMM |
                                </a>
                                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-target="#mycarousel" data-slide-to="14" title="Slide 15: Control Objectives for Information Technology 5 (Cobit is all the previous slides)">Cobit |
                                </a>
                                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-target="#mycarousel" data-slide-to="15" title="Slide 16: Plan, Do, Check, Act">PDCA
                                </a>

                        </p>
                    </div>

                    <div id="mycarousel" class="carousel slide" data-ride="carousel" data-interval="false">
                        <ol class="carousel-indicators">
                            <li data-target="#mycarousel" data-slide-to="0" title="Slide 1: PMBOK" class="active"></li>
                            <li data-target="#mycarousel" data-slide-to="1" title="Slide 2: Standards Frameworks Landscape"></li>
                            <li data-target="#mycarousel" data-slide-to="2" title="Slide 3: Strategy Wall"></li>
                            <li data-target="#mycarousel" data-slide-to="3" title="Slide 4: Capability Maturity Levels"></li>
                            <li data-target="#mycarousel" data-slide-to="4" title="Slide 5: CMMi Dev Dashboard"></li>
                            <li data-target="#mycarousel" data-slide-to="5" title="Slide 6: People Process Technology and Red Bead Removal"></li>
                            <li data-target="#mycarousel" data-slide-to="6" title="Slide 7: V Model Mind the Gap"></li>
                            <li data-target="#mycarousel" data-slide-to="7" title="Slide 8: ITIL"></li>
                            <li data-target="#mycarousel" data-slide-to="8" title="Slide 9: DevOps"></li>
                            <li data-target="#mycarousel" data-slide-to="9" title="Slide 10: PRINCE2 Agile"></li>
                            <li data-target="#mycarousel" data-slide-to="10" title="Slide 11: DSDM"></li>
                            <li data-target="#mycarousel" data-slide-to="11" title="Slide 12: Scrum"></li>
                            <li data-target="#mycarousel" data-slide-to="12" title="Slide 13: SAFe"></li>
                            <li data-target="#mycarousel" data-slide-to="13" title="Slide 14: People CMM"></li>
                            <li data-target="#mycarousel" data-slide-to="14" title="Slide 15: Cobit 5"></li>
                            <li data-target="#mycarousel" data-slide-to="15" title="Slide 16: PDCA"></li>

                        </ol>

                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active" align="center">

                                <div class="container-flex" style="max-width:70%;">

                                    <h5><b>Your "Body of Knowledge" Gateway</b></h5>

                                    <map id="ImgMap0" name="ImgMap0">
                                        <area coords="58, 53, 339, 351" href="/home/demoitto" shape="rect" title="Click here for a quick demo">
                                    </map>
                                    <!--<img class="img-fluid" alt="" src="/images/dashheadsmaller.png"  >-->
                                    <img alt="" class="img-fluid" style="z-index:1" src="/images/dashheadflat.png" onmouseover="this.src='/images/dashheadraised.png'" onmouseout="this.src='/images/dashheadflat.png'">
                                    <br>

                                    <map id="ImgMap4" name="ImgMap4">
                                        <area alt="" coords="130, 110, 250, 209" href="/home/fourone" shape="rect">
                                        <area alt="" coords="250, 110, 367, 208" href="/home/fourtwo" shape="rect">
                                        <area alt="" coords="366, 108, 486, 206" href="/home/fourthree" shape="rect">
                                        <area alt="" coords="484, 108, 601, 159" href="/home/fourfour" shape="rect">
                                        <area alt="" coords="484, 159, 600, 208" href="/home/fourfive" shape="rect">
                                        <area alt="" coords="597, 107, 719, 206" href="/home/foursix" shape="rect">
                                        <area coords="133, 33, 250, 108" href="/home/initiation" shape="rect">
                                        <area alt="" coords="249, 32, 365, 109" href="/home/planning" shape="rect">
                                        <area alt="" coords="367, 31, 482, 109" href="/home/execution" shape="rect">
                                        <area alt="" coords="483, 30, 598, 107" href="/home/monitorandcontrol" shape="rect">
                                        <area alt="" coords="597, 30, 717, 107" href="/home/close" shape="rect">
                                        <area alt="" coords="248, 208, 367, 241" href="/home/fiveone" shape="rect">
                                        <area alt="" coords="248, 240, 366, 270" href="/home/fivetwo" shape="rect">
                                        <area alt="" coords="248, 267, 367, 285" href="/home/fivethree" shape="rect">
                                        <area alt="" coords="248, 283, 366, 302" href="/home/fivefour" shape="rect">
                                        <area alt="" coords="483, 207, 600, 228" href="/home/fivefive" shape="rect">
                                        <area alt="" coords="483, 226, 601, 245" href="/home/fivesix" shape="rect">
                                        <area alt="" coords="247, 302, 366, 339" href="/home/sixone" shape="rect">
                                        <area alt="" coords="249, 338, 367, 366" href="/home/sixtwo" shape="rect">
                                        <area alt="" coords="246, 362, 367, 395" href="/home/sixthree" shape="rect">
                                        <area alt="" coords="246, 391, 368, 421" href="/home/sixfour" shape="rect">
                                        <area alt="" coords="246, 420, 369, 451" href="/home/sixfive" shape="rect">
                                        <area alt="" coords="249, 449, 368, 482" href="/home/sixsix" shape="rect">
                                        <area alt="" coords="482, 304, 603, 351" href="/home/sixseven" shape="rect">
                                        <area alt="" coords="248, 483, 369, 519" href="/home/sevenone" shape="rect">
                                        <area alt="" coords="248, 515, 370, 535" href="/home/seventwo" shape="rect">
                                        <area alt="" coords="248, 531, 367, 565" href="/home/seventhree" shape="rect">
                                        <area alt="" coords="482, 483, 602, 515" href="/home/sevenfour" shape="rect">
                                        <area alt="" coords="249, 566, 367, 622" href="/home/eightone" shape="rect">
                                        <area alt="" coords="364, 564, 483, 621" href="/home/eighttwo" shape="rect">
                                        <area alt="" coords="483, 564, 599, 622" href="/home/eightthree" shape="rect">
                                        <area alt="" coords="246, 619, 366, 722" href="/home/nineone" shape="rect">
                                        <area alt="" coords="365, 622, 485, 657" href="/home/ninetwo" shape="rect">
                                        <area alt="" coords="366, 655, 484, 685" href="/home/ninethree" shape="rect">
                                        <area alt="" coords="364, 681, 487, 719" href="/home/ninefour" shape="rect">
                                        <area alt="" coords="249, 717, 366, 780" href="/home/tenone" shape="rect">
                                        <area alt="" coords="366, 719, 484, 778" href="/home/tentwo" shape="rect">
                                        <area alt="" coords="482, 718, 600, 778" href="/home/tenthree" shape="rect">
                                        <area alt="" coords="248, 779, 368, 814" href="/home/elevenone" shape="rect">
                                        <area alt="" coords="248, 810, 369, 829" href="/home/eleventwo" shape="rect">
                                        <area alt="" coords="249, 825, 365, 869" href="/home/eleventhree" shape="rect">
                                        <area alt="" coords="248, 870, 366, 910" href="/home/elevenfour" shape="rect">
                                        <area alt="" coords="248, 910, 368, 942" href="/home/elevenfive" shape="rect">
                                        <area alt="" coords="483, 777, 600, 818" href="/home/elevensix" shape="rect">
                                        <area alt="" coords="248, 941, 366, 1001" href="/home/twelveone" shape="rect">
                                        <area alt="" coords="365, 942, 482, 1000" href="/home/twelvetwo" shape="rect">
                                        <area alt="" coords="483, 941, 599, 1001" href="/home/twelvethree" shape="rect">
                                        <area alt="" coords="599, 941, 718, 1000" href="/home/twelvefour" shape="rect">
                                        <area alt="" coords="132, 999, 247, 1058" href="/home/thirteenone" shape="rect">
                                        <area alt="" coords="246, 1000, 367, 1058" href="/home/thirteentwo" shape="rect">
                                        <area alt="" coords="364, 997, 483, 1058" href="/home/thirteenthree" shape="rect">
                                        <area alt="" coords="481, 998, 599, 1057" href="/home/thirteenfour" shape="rect">
                                        <area coords="0, 1001, 130, 1058" href="/home/pstakem" shape="rect">
                                        <area coords="1, 107, 131, 208" href="/home/pim" shape="rect">
                                        <area alt="" coords="0, 206, 130, 303" href="/home/psm" shape="rect">
                                        <area alt="" coords="2, 301, 130, 482" href="/home/ptm" shape="rect">
                                        <area alt="" coords="0, 480, 132, 565" href="/home/pcm" shape="rect">
                                        <area alt="" coords="0, 563, 133, 622" href="/home/pqm" shape="rect">
                                        <area alt="" coords="0, 619, 131, 719" href="/home/phrm" shape="rect">
                                        <area alt="" coords="0, 718, 132, 780" href="/home/pcomm" shape="rect">
                                        <area alt="" coords="1, 780, 130, 942" href="/home/prm" shape="rect">
                                        <area alt="" coords="0, 940, 131, 1000" href="/home/ppm" shape="rect">
                                    </map>

                                    <a href="/home/demoitto">

                                        <img alt="" class="img-fluid" style="z-index:0" src="/images/mainprocessdashraisednormalflat.png" onmouseover="this.src='/images/mainprocessdashraisednormalbezelledone.png'" onmouseout="this.src='/images/mainprocessdashraisednormalflat.png'" title="Click the hand (process 4.1) to see a demo of the itto dashboard for PMBOK Process 4.1"></a>

                                    <br>
                                    <br>
                                    <button class="btn btn-primary align-center clearfix" type="button" data-toggle="collapse" data-target="#collapseinfo" aria-expanded="false" aria-controls="collapseinfo">The PMBOK 6 Dashboard
                                    </button>

                                    <div class="collapse" id="collapseinfo">
                                        <div class="container">
                                            <div class="card text-center">
                                                <h5 class="card-header" align="center"></h5>
                                                <div class="card-body text-center">
                                                    <p>The new Project Management Body of Knowledge Guide (released September 2017)
                                                        <br>is the 'how to do it' checklist for Project Management Professionals.
                                                        <br>Click the image directly below for the PMBOK game, in a nutshell.
                                                        <br>
                                                        <a href="/home/thegame" target="_blank" title="Click the tile for a larger (more detailed) image of how to play the game">
                                                            <img alt="The game" class="img-fluid"  id="game" src="/images/TheGame.png" ></a>
                                                        <br><i><b>If you understand the PMBOK you know this game is the same <br>for both Traditional and Agile Project Management!</b></i>

                                                        <br><br>The dashboard assists understanding of the PMBOK processes (+ &quot;ittos&quot;)
                                                        <br> to help you to pass the PMI exams and run projects better at <a href="/cmmi"><strong>Capability
                                                                Maturity Level 2+</strong></a>.
                                                        <br>The PMBOK processes (underpinned by the latest thinking found in the <i>
                                                            <br>PMI Agile Certified Practitioner
                                                            (PMI-ACP) qualification </i> and others)
                                                        <br> incorporates <a href="/home/agile"><strong>Lean and Agile</strong></a> thinking.</p>
                                                    <p>Oh, also... do not forget that the PMBOK operates as a Standard!
                                                        <br> Check out where it is situated in the greater scheme of things
                                                        <br> as you <b>&quot;<a href="/?slide=2" target="_blank"><u>connect the dots</u></a>&quot;</b> below.</p>
                                                    <p>A quick note to those <a href="/pin" target="_blank" title="Take the pin test now to see where your game is at">"Traditional" is not "Agile"</a> out there.
                                                        <br>Find process 4.7 on the PMBOK dashboard (Close Project or Phase).
                                                        <br>Did you know that &quot;tailoring&quot; these processes means you can run a project phase
                                                        <br>as... wait for it...
                                                        <br><b>&quot;<a href="/home/agile?slide=10"
                                                                        target="_blank"><u>a two week sprint!</u></a>&quot;</b>

                                                        <br>
                                                        <br> Operating thus, as a Professional who understands Project Management Process,
                                                        <br>(supported by your Executive [Executive Action Team (to EAT &quot;<a href="/home/removetheredbeads" target="_blank">the
                                                            red beads,</a>&quot;)])
                                                        <br>using
                                                        <a href="/home/agile?slide=13" target="_blank">
                                                            best selected project methodology</a>,
                                                        <br>there is less chance of dropping the ball.</p>

                                                    <img alt="drop the ball" class="img-fluid" src="/images/droptheball.png">
                                                    <br>
                                                    <br><h6><b>Bottom Line</b></h6>
                                                    <p><b>While (when) BEST PRACTICE is understood,
                                                            <br>BEST PRACTICAL (from an agile and lean perspective) can be better!</b></p>
                                                    <!--<a href="/home/removetheredbeads" target="_blank" title="Click the image to find out how and why to remove the Red Beads"><img alt="" class="img-fluid" src="/images/redbeadremoved.png"></a>-->
                                                </div>
                                                <div class="card-footer">

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <br> <br>


                                    <a href="/login" target="_blank" title="Find out about the concepts of Freedoms, Barriers and Goals and how they can be made to work together for success">Freedoms, Barriers, Goals</a> and <a href="/images/anyroad.jpg" target="_blank" title="Find out that if you do not know what your destination is, any road will take you there.  I.e. anywhere, nowhere!">Destinations</a>





                                    <!--END OF CONTENT-->
                                    <br>
                                    <br>
                                </div>
                            </div>
                            <!--END OF CAROUSEL SLIDE-->

                            <div class="carousel-item" align="center">
                                <div class="container" style="max-width:70%">
                                    <h5><strong>Standards, Frameworks and Methodologies etc., by focus area</strong><br>
                                        <em>Note that the PMBOK is a <a href="https://www.pmi.org/pmbok-guide-standards/foundational"
                                                                        target="_blank"><b><u>Standard</u></b></a>!</em></h5>

                                    <p><img class="img-fluid" src="/images/standardsframels.png" ></p>


                                    <p><img class="img-fluid" src="/images/pptone.png" ></p>

                                    <p><i>Answer the questions about People, Process and Technology
                                            from the image above. <br><a
                                                href="/home/index?slide=6">Slide #6 </a> has more depth on the P-P-T
                                            triangle (triad).<br>Now answer the questions about Governance and Execution then click the buttons
                                            below.</i></p>

                                    <button class="btn btn-primary align-center clearfix" type="button" data-toggle="collapse" data-target="#collapsetimecostquality" aria-expanded="false" aria-controls="collapsetimecostquality">Time, Cost and Quality
                                        <br> The Essence of Project Management!
                                    </button>

                                    <div class="collapse" id="collapsetimecostquality">
                                        <div class="container">
                                            <div class="card text-center">
                                                <h5 class="card-header" align="center">Can you find Time (Schedule), Cost, Scope <br>Knowledge Areas
                                                    <br><a href="/?slide=1"><u>on the PMBOK 6 Dashboard</u></a>?<br>Do you know that Quality <br>is tied
                                                    closely to (is a result of)<br> these three dimensions.<br>What about Resources and Risk?<br>Where do they
                                                    fit into the picture?</h5>
                                                <div class="card-body text-center">

                                                    <img alt="Time Cost Scope and Quality" class="img-fluid" src="/images/timecostquality.png">
                                                    <br>
                                                    <br>
                                                    <img alt="" class="img-fluid" src="/images/6%20constraints.jpg">
                                                    <br>
                                                    <p>Here is the game!
                                                        <br> Can you see it?</p>
                                                    <br>
                                                    <img alt="Core and Facilitating functions" class="img-fluid" src="/images/corefacilitate1.png">

                                                </div>
                                                <div class="card-footer">For <a href="/home/agile?slide=12"><u>Agile</u></a> (<a href="/home/agile?slide=10"><u>Scrum</u></a> or <a href="/home/agile"><u>other
                                                            agile methods</u></a>) the game is to release value sprint by sprint!

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <br>
                                    <button class="btn btn-primary align-center clearfix" type="button" data-toggle="collapse" data-target="#collapsegovernance" aria-expanded="false" aria-controls="collapsegovernance">Under Control?
                                    </button>

                                    <div class="collapse" id="collapsegovernance">
                                        <div class="container">
                                            <div class="card text-center">
                                                <h3 class="card-header" align="center">Governance and Execution</h3>
                                                <div class="card-body text-center">

                                                    <!-- <img class="img-fluid" src="/images/standardsframels.png" onmouseover="this.src='/images/pptone.png'" onmouseout="this.src='/images/standardsframels.png'">-->

                                                    <p><b>Governance</b> (derived from the Latin gubern&#275;re and gubernator | gubernum) which means "to steer" and also "a or the helmsman."
                                                        <br> Essentially to steer could be that of a boat, a horse drawn carriage, a horse or project etc.
                                                        <br> Other words derived from the above: governor, navigator, pilot, administrator rudder, helm (and figuratively) a leader, leadership.

                                                        <br><b>Execution</b> (derived from the Latin executio which means "accomplishment&quot; or &quot;fulfillment") is all about professional ability and tight management to produce results!
                                                    </p>
                                                    <img alt="horse race" class="img-fluid" src="/images/horsewellridden.png">

                                                    <h5>Are your projects under control?<br>Control at its very essence is the ability to Start, Change,
                                                        Stop.<br>
                                                        I.e. when you stop changing have you produced planned value? <br></h5>

                                                    <p>Unlike Business As Usual (BAU) a project is a temporary undertaking!
                                                        <br>In essence, via the project, you are <a href="/vmodel" target="_blank"><u>jumping a gap</u></a> from one baseline to a new (improved) baseline (destination, goal etc.).</p>

                                                    <p><b>Planning</b> and <b>Monitoring and Control</b> on either side of <b>Execution</b> ensures delivery and ultimately accountability to Stakeholders.
                                                        <br> Can you find the <b>Planning</b>,
                                                        <b>Execution</b> and <b>Monitoring and Control</b> Process Groups
                                                        <br>on the <a href="/?slide=1" target="_blank"><u>PMBOK dashboard?</u></a>
                                                        <br>If interested <a href="/?slide=16"><u>Slide #16</u></a> has more information about how PDCA fits into this picture.
                                                        <br>
                                                    </p>

                                                </div>
                                                <div class="card-footer">(<a href="/home/agile?slide=12" target="_blank"><u>The Agile debate
                                                            notwithstanding...</u></a>)
                                                    <br>projects being managed for value are either reined and under control (delivering results)
                                                    <br>or they are not.
                                                    <br>
                                                    <img alt="out of control" class="img-fluid" src="/images/horse.png" onmouseover="this.src='/images/horseoutofcontrol.jpg'" onmouseout="this.src='/images/horse.png'" title="How under control is your project really?">

                                                    <br>
                                                    <br>

                                                    <button class="btn btn-primary align-center clearfix" type="button" data-toggle="collapse" data-target="#collapsescrumgovernance" aria-expanded="false" aria-controls="collapsescrumgovernance">Governance for Agile's Scrum?</button>

                                                    <div class="collapse" id="collapsescrumgovernance">
                                                        <div class="container">
                                                            <div class="card text-center">
                                                                <h5 class="card-header" align="center"></h5>
                                                                <div class="card-body text-center">

                                                                    <img alt="" title="scrum governance" class="img-fluid" src="/images/scrumgovernance.png">
                                                                    <p><a href="/home/scrumvaluemodel#demoapproved" target="_blank">Click here for more on this</a> if interested.</p>

                                                                </div>
                                                                <div class="card-footer">
                                                                    Above page from Scrum for Dummies 2018
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--END OF CONTENT-->
                                    <br>
                                    <br>
                                </div>
                            </div>
                            <!--END OF CAROUSEL SLIDE-->

                            <div class="carousel-item" align="center">
                                <div class="container" style="max-width:70%">
                                    <h5>
                                        <strong>The Strategy Wall</strong>
                                    </h5>
                                    <img class="img-fluid" src="/images/strategywall850.png" "=" " onmouseover=" this.src='/images/legobrickbox.png' " onmouseout=" this.src='/images/strategywall850.png' " ">
                                    <br>
                                    <br>
                                    <p align="center"><i>Click the image
                                            above (to open the PMP CMMi lego brick) <br>and reveal the secret to successful strategy (and project)
                                            Implementation.</i> </p>

                                    <button class="btn btn-primary align-center clearfix" type="button" data-toggle="collapse" data-target="#collapsestrategy" aria-expanded="false" aria-controls="collapsestrategy">Strategy</button>

                                    <div class="collapse" id="collapsestrategy">
                                        <div class="container">
                                            <div class="card text-center">
                                                <h5 class="card-header" align="center"></h5>
                                                <div class="card-body text-center">
                                                    <p align="left">Do you know that many formulated strategies (and projects) fail in Implementation.&nbsp; Have you found using Balanced Scorecard (in itself) has not been that successful?
                                                        <br>
                                                        <br>Did you see the PMP and CMMi lego brick (at the top right of the image above)?&nbsp; It is to the right of the Balanced Scorecard, enabling it for success.</p>
                                                    <p align="left">Make careful note of how to empower these bricks (all the bricks in the strategy) at CM Level 2+ per the image below!
                                                        <br>I.e. If Strategy Plan Formulation and Implementation is attempted under Capability Maturity Level 2 it will surely be a failure.</p>
                                                    <h5>Bottom Line:</h5>

                                                    <a href="login" target="_blank"><img alt="The PMIS" class="img-fluid" src="/images/engineanimated.gif" title="Click the image for a paper motivating the Project Management Information Server as sure way to achieve CM Level 2 stability for Productivity and Quality gains. "></a>
                                                </div>
                                                <div class="card-footer">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--END OF CAROUSEL SLIDE-->
                                    <br>
                                    <br>
                                </div>
                            </div>

                            <div class="carousel-item" align="center">
                                <div class="container" style="max-width:70%">
                                    <h5>

                                        <strong>Capability Maturity Levels:</strong> </h5>

                                    <a href="/cmmi" target="_blank">

                                        <img class="img-fluid" src="/images/cmmproject2plus.png" onmouseover="this.src='/images/cmmproject2plusshadedbezelled.png'" onmouseout="this.src='/images/cmmproject2plus.png'" title="Click the image for more information about Capability Maturity improvements."></a>
                                    <p>Note that level 2 is all about pinning down the essential project management processes.
                                        <br> If you run traditional or agile projects these essential processes will still apply!</p>
                                    <a href="/pin" title="Click to Pin down your Capability Maturity level now!  Or drag the pin through the gateway and hit the Productivity and Quality improvement target!"><img id="pintwo" class="img-fluid" style="z-index:100; position: relative;" src="/images/pinlarge.png" alt="pin" >
                                    </a>
                                    <br>

                                    <button class="btn btn-primary align-center clearfix" type="button" data-toggle="collapse" data-target="#collapserabbithole" aria-expanded="false" aria-controls="collapserabbithole">Capability Maturity Levels</button>

                                    <div class="collapse" id="collapserabbithole">
                                        <div class="container">
                                            <div class="card text-center">
                                                <h5 class="card-header" align="center"></h5>
                                                <div class="card-body text-center">

                                                    <img class="img-fluid" src="/images/cmmiuplevels.png">
                                                    <br>

                                                    <hr>
                                                    <h4 align="left">&nbsp;<b>CM Level 4 and 5+:</b></h4>
                                                    <h5>"Based on Production Stats and Focus on Continual
                                                        Improvement."</h5>
                                                    <hr>

                                                    <h4 align="left">&nbsp;<b>CM Level 3+:</b></h4>
                                                    <h5>"Process, Project, Software Engineering
                                                        and Support<br>&nbsp;(and especially Risk Management against non
                                                        achievement of the plan) <br>&nbsp;fully installed."</h5>
                                                    <hr>
                                                    <h4 align="left">&nbsp;<b>CM Level 2+:</b></h4>
                                                    <h5>"Mainly Project (but also some other) Processes are Understood,
                                                        Tailored,
                                                        Applied and Managed.<br>&nbsp; &quot;Now We Are Ready To Do It.&quot;</h5>

                                                    <img alt="" class="img-fluid" src="/images/cogsworking.gif">
                                                    <hr>

                                                    <br>
                                                    <h4 align="left">&nbsp;<b>CM Level 1: Heroic</b> <br></h4>
                                                    <h5>&nbsp;"No
                                                        Plan"<br>"Just Do It!"</h5>
                                                    <p align="center">

                                                        <button class="btn btn-primary align-center clearfix" type="button" data-toggle="collapse" data-target="#collapseoops" aria-expanded="false" aria-controls="collapseoops">OOPS!
                                                        </button>

                                                    <div class="collapse" id="collapseoops">
                                                        <div class="container">
                                                            <div class="card text-center">
                                                                <h5 class="card-header" align="center">
                                                                    No Plan, Be Heroic and Just Do It is CM Level 1</h5>
                                                                <div class="card-body text-center">

                                                                    <a href="/pin" target="_blank"><img class="img-fluid" src="/images/cmmi%20@%20level%201.png" onmouseover="this.src='/images/danger.jpg'" onmouseout="this.src='/images/cmmi%20@%20level%201.png'"></a>
                                                                    <br>
                                                                    <br>
                                                                    <a href="/login" target="_blank" title="Click OOPS! now for more information on why projects fail"><img alt="oops" class="img-fluid" src="/images/oopsmall.png"></a>
                                                                    <br>
                                                                    <img alt="" class="img-fluid" src="/images/car%20drives%20off%20road%20norm.png">

                                                                    <p align="left">Just for fun <a href="/realstory" target="_blank">click here</a> for the games @ CM Level 1.
                                                                        <br> If interested click OOPS! above for the 15 reasons why projects fail at CM Level 1.
                                                                        <br> And <a href="/pin" title="Click here for the real reason there is chaos out there!" target="_blank">Traditional Project Management process often is blamed for the
                                                                            chaos</a>!?
                                                                        <br> Agile methods touted as the solution but operated at CM Level 1 will simply add to, and bring about increased
                                                                        <a href="/homeviewpdf/resources/chaos-report.pdf" target="_blank">chaos</a>!</p>
                                                                </div>
                                                                <div class="card-footer">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </p>
                                                    <hr>

                                                    <h4 align="left">&nbsp;<b>CM Level ZERO:
                                                            NOWHERE!</b></h4>
                                                    <h5>No Ethics. Corruption.
                                                        <br>&quot;Killing the Goose
                                                        for its Golden Eggs."</h5>

                                                    <button class="btn btn-primary align-center clearfix" type="button" data-toggle="collapse" data-target="#collapsetoons" aria-expanded="false" aria-controls="collapsetoons">NOWHERE!
                                                    </button>

                                                    <div class="collapse" id="collapsetoons">
                                                        <div class="container">
                                                            <div class="card text-center">
                                                                <h5 class="card-header" align="center"></h5>
                                                                <div class="card-body text-center">

                                                                    <em>Move your mouse over the image
                                                                        directly below.</em>
                                                                    <p style="text-align:center">
                                                                        <img class="img-fluid" src="/images/divertedresources.png" onmouseover="this.src='/images/corruption.png'" onmouseout="this.src='/images/divertedresources.png'">
                                                                        <br>

                                                                    </p>

                                                                </div>

                                                                <div class="card-footer">

                                                                    Aesop's wisdom is
                                                                    <br>2500 years old...
                                                                    <br>
                                                                    <img alt="" class="img-fluid" src="/images/goose1.jpg"><img alt="" class="img-fluid" src="/images/goose2.png">

                                                                    <br>
                                                                    <br>

                                                                    <hr> "Annual income twenty pounds, annual expenditure nineteen six, result happiness. Annual income twenty pounds, annual expenditure twenty pound ought and six, result misery."

                                                                    <br>&#8213; Charles Dickens, David Copperfield
                                                                    <br>
                                                                    <br> <img alt="" class="img-fluid" src="/images/sceletalcowproject.jpg">

                                                                    <br>
                                                                    <br><!--

                                                     <button class="btn btn-primary align-center clearfix" type="button" data-toggle=
"collapse" data-target="#collapsesaatlevelzero" aria-expanded="false" aria-controls=
        "collapsesaatlevelzero">South Africa operating  @ CM Level ZERO
</button>

<div class="collapse" id="collapsesaatlevelzero">
    <div class="container">
        <div class="card text-center">
<h5 class="card-header" align="center">South Africa operating  @ CM Level ZERO</h5>
            <div class="card-body text-center">
							<a href="/home/zaprobsol" target="_blank" title="Any and all improvements to save South Africa must begin with the intention to move out of CM Level ZERO!  Click here to see this obvious truth for yourself"><img alt="south africa going nowhere" class="img-fluid"  src="/images/hippo.png"></a>
						Click the "choices to avoid a failed state" image above for PMWay's opinion on CM Level ZERO and South Africa's future (going the same way as Venezuela and Zimbabwe).
						<br>
						<br>

					Bottom Line:<br>
					<a href="/pin" target="_blank" title="Click this image to take the pin test now."><img alt="Don't even know what they don't know" class="img-fluid"  src="	/images/mountstupidsolutionbase.jpg"></a>

            </div>
            <div class="card-footer">

            </div>
        </div>
    </div>
</div>
-->












                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="card-footer">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--END OF CONTENT-->
                                    <br>
                                    <br>
                                </div>
                            </div>
                            <!--END OF CAROUSEL SLIDE-->

                            <div class="carousel-item" align="center">
                                <div class="container" style="max-width:70%">
                                    <h5><strong>CMMi Dashboard for Development</strong></h5>
                                    <p align="center"><i>Note: Look for <b>ML</b> on the table below.<br>This is the Capability Maturity
                                            Level.</i></p>

                                    <img alt="CMMi-Dev1.3 dashboard" class="img-fluid" src="/images/cmmi-dev1.png">
                                    <br>
                                    <br>

                                    <img alt="cmmi all" class="img-fluid" src="/images/cmmimodelsall.jpg">
                                    <br>
                                    <br>
                                    <p><a href="/login" target="_blank">CMMi 3.1 Overview</a></p>
                                    <p><a href="/login" target="_blank">CMMi 3.1 More Detailed Overview</a></p>

                                    <p><a href="/login" target="_blank">CMMi 3.1 DevTools</a></p>
                                    <br>
                                    <br>

                                    <button class="btn btn-primary align-center clearfix" type="button" data-toggle="collapse" data-target="#collapsejourney" aria-expanded="false" aria-controls="collapsejourney">CMMi
                                        <br>Your first step
                                    </button>

                                    <div class="collapse" id="collapsejourney">
                                        <div class="container">
                                            <div class="card text-center">
                                                <h5 class="card-header" align="center"></h5>
                                                <div class="card-body text-center">

                                                    <p>The first step on your CMMi journey:
                                                        <br>Find PP and PMC above.
                                                        <br>Then find these core processes <a href="/?slide=1" target="_blank">on the PMBOK 6 dashboard</a>!
                                                        <br>And just for fun also find them
                                                        <a href="/login" target="_blank">on the Scrum dashboard</a>.</p>
                                                </div>
                                                <div class="card-footer">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <br>

                                    <button class="btn btn-primary align-center clearfix" type="button" data-toggle="collapse" data-target="#collapsepdca" aria-expanded="false" aria-controls="collapsepdca">PDCA
                                    </button>

                                    <div class="collapse" id="collapsepdca">
                                        <div class="container">
                                            <div class="card text-center">
                                                <h5 class="card-header" align="center">PDCA is the <img class="img-fluid" alt="" height="82"
                                                                                                        src="/images/beatingheart.gif" width="60"> of CMMi<br> and the CM Model.</h5>
                                                <div class="card-body text-center">
                                                    <p>Deming's Plan, Do, Check, Act (PDCA) cycle is the secret of Continual Service Improvement to achieve quality improvements.
                                                        <br>This is tied to the concept of <a href="/login">(kaizen)</a>.</p><img alt="" class="img-fluid" src="/images/pdca_process.png">
                                                    <br>
                                                    <br>
                                                    <p>Can you see how the image below ties back <a href="/?slide=1">to the PMBOK 6 dashboard</a>?</p><img alt="" class="img-fluid" src="/images/qualitymodels.png">

                                                </div>
                                                <div class="card-footer">
                                                    Go to <a href="/?slide=8">slide #8 (ITIL)</a>. Can you see PDCA in operation?
                                                    <br>Can you see that the CSI register is also the <a href="/home/agile?slide=10">Scrum Backlog in Slide #10</a>?
                                                    <br>Find more detail about PDCA <a href="/?slide=16">in Slide #16</a>.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--END OF CONTENT-->
                                    <br>
                                    <br>
                                </div>
                            </div>
                            <!--END OF CAROUSEL SLIDE-->

                            <div class="carousel-item" align="center">
                                <div class="container" style="max-width:70%">
                                    <h5>

                                        <strong>The People - Process - Technology Triad<br>Do you (can you?) "<a href="/home/removetheredbeads"
                                                                                                                 target="_blank">Remove the Red Beads</a>"?</strong></h5>
                                    <p><i>Click the image to get the importance of this!</i></p>

                                    <p align="center"><img class="img-fluid" src="/images/peopleprocesstechbeads.jpg" onmouseover="this.src='/images/peopleprocessbottomline.png'" onmouseout="this.src='/images/peopleprocesstechbeads.jpg'"></p>
                                    <p><i>Bottom line: pull the P-P-T points of the triangle
                                            outward<br>
                                            in relation to each other; improving while maintaining balance.</i></p>

                                    <!--END OF CONTENT-->
                                    <br>
                                    <br>
                                </div>
                            </div>
                            <!--END OF CAROUSEL SLIDE-->

                            <div class="carousel-item" align="center">
                                <div class="container" style="max-width:70%">
                                    <h5>

                                        <strong>Do you "Mind the Gap"?<br> The V Model shows you how.</strong></h5>

                                    <p align="center"><img class="img-fluid" src="/images/vmodelbevel.png" onmouseover="this.src='/images/itilvaluecreation.jpg'" onmouseout="this.src='/images/vmodelbevel.png'"></p>
                                    <p><i>On the image above<br>find Configuration (Configuration Management (CM)), Verification
                                            (VER), Validation (VAL) and Bidirectional traceability of requirements (part of REQM process).
                                            <a href="/?slide=5">Now click here</a>.  Can you find CM, VER, VAL and REQM on the CMMi Dev table?  What are their CM Levels?</i></p>

                                    <p><i>Hover over the image below to get the importance
                                            of safety while navigating
                                            the tar pit.<br>The tar pit is where badly run software engineering projects
                                            can get bogged down and
                                            die!</i></p>
                                    <a href="/login" target="_blank" title="Click the image to download the milestone Chapter by Frederick Brooks.  Avoid the dangers of the tarpit.  Mind the Gap!"><img alt="" class="img-fluid" src="/images/gap55wider.jpg" onmouseover="this.src='/images/tarpitstwo.jpg'" onmouseout="this.src='/images/gap55wider.jpg'"></a>
                                    <!--<img class="img-fluid" src="/images/gap55wider.jpg">-->
                                    <br>
                                    <br>
                                    <button class="btn btn-primary align-center clearfix" type="button" data-toggle="collapse" data-target="#collapsemindthegap" aria-expanded="false" aria-controls="collapsemindthegap">Mind the Gap
                                    </button>

                                    <div class="collapse" id="collapsemindthegap">
                                        <div class="container">
                                            <div class="card text-center">
                                                <h5 class="card-header" align="center"></h5>
                                                <div class="card-body text-center">
                                                    <p align="left">Bidirectional Traceability of Requirements is at the heart of (Requirements Management [REQM] &amp; Configuration Management [CM]).
                                                        <br>
                                                        <br><a href="/?slide=5">Can you find REQM &amp; CM on the CMMi Dev Dashboard? <br>What is the
                                                            Capability Maturity Level of
                                                            REQM &amp; CM?</a>
                                                        <br>
                                                        <br>What about Verification (Ver) and Validation (Val)? Can you find these CM L3 processes?
                                                        <br>Can you see that these are all about "Minding the Gap," "Step by Step" and "Start, Change, Stop?"
                                                        <br>( <a href="/agileisdead" target="_blank">Latest agile thinking here agrees with this
                                                            approach (I.e. Ver and Val and CM L2 processes)</a>)
                                                        <br>
                                                        <br>Finally, can loginyou see that this side of the Gap is where you (software developers / <a href="/?slide=8" target="_blank">ITIL Service Designers</a>) are now.
                                                        <br> In a next project phase (iteration, sprint etc.) you will move forward with the project goal to safely release a new version of valuable software.
                                                        <br>After UAT sign off <a href="/?slide=8" target="_blank" title="Click here for information on SO in PMWay's ITIL page">Service Operations</a> must take over, maintaining the working system
                                                        <br>while Service Strategy and Service Design look at next versions of <a href="/login" target="_blank">Working Software</a>.</p>
                                                </div>
                                                <div class="card-footer">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--END OF CONTENT-->
                                    <br>
                                    <br>
                                </div>
                            </div>
                            <!--END OF CAROUSEL SLIDE-->

                            <div class="carousel-item" align="center">
                                <div class="container" style="max-width:70%">
                                    <h5>
                                        <strong>ITIL 3</strong>
                                        <br>(<a href="/homesave/resources/itilfouroverview.pdf" target="_blank" title="Click here for a presentation about ITIL 4">Transitioning to ITIL 4: 1000 foot overview</a>)</h5>
                                    <p><img alt="ITIL" class="img-fluid" src="/images/itil_v321.png"></p>
                                    <p><img alt="ITIL Books" class="img-fluid" src="/images/itilstageswithbooks.png"></p>

                                    <button class="btn btn-primary align-center clearfix" type="button" data-toggle=
                                        "collapse" data-target="#collapseitiloverview" aria-expanded="false" aria-controls=
                                                "collapseitiloverview">ITIL - Processes Overview
                                    </button>

                                    <div class="collapse" id="collapseitiloverview">
                                        <div class="container">
                                            <div class="card text-center">
                                                <h5 class="card-header" align="center">High Level Overview of the ITIL Processes</h5>
                                                <div class="card-body text-center">


                                                    <p><a href="/login" target="_blank" title="Click here for the ITIL V3 processes"><img class="img-fluid" alt="Click here for the v3 processes" src="/images/itil3a.png" ></a></p>



                                                </div>
                                                <div class="card-footer">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br><br>

                                    <p><a href="/login" target="_blank" title="Click here for the ITIL V3 processes"><img class="img-fluid" alt="Click here for the v3 processes" src="/images/itiloverview20191217smaller.jpg" ></a>


                                        <br>
                                        <!-- <a href="/homesave/resources/itil.jpg" title="Download this Itil image with non-transparent background.  " target="_blank"> <img class="img-fluid" alt="itil with pain points" src="/images/itilwithpainpoints20171018.png"></a>-->

                                    </p>

                                    <button class="btn btn-primary align-center clearfix" type="button" data-toggle=
                                        "collapse" data-target="#collapsecsibl" aria-expanded="false" aria-controls=
                                                "collapsecsibl">ITIL, the CSI Register and the Scrum Backlog
                                    </button>

                                    <div class="collapse" id="collapsecsibl">
                                        <div class="container">
                                            <div class="card text-center">
                                                <h5 class="card-header" align="center">The image below explains how the CSI Register feeds the Scrum Backlog</h5>
                                                <div class="card-body text-center">


                                                    <p align="center"><img class="img-fluid" src="/images/itilpainpoints.jpg"> </p>

                                                    <br>
                                                    <br>
                                                    <h1>I.e.</h1>

                                                    <p align="center"><img class="img-fluid" src="/images/itilvaluestreams.png"  title="Do you know what your value streams are?  Can you place them on a BCG Growth Share Matrix?"></p>
                                                    <br>
                                                    <br>
                                                    <p align="center"><img class="img-fluid" src="/images/bcg.jpg"  title="Do you know what your value streams are?  Can you place them on a BCG Growth Share Matrix?"></p>



                                                </div>
                                                <div class="card-footer">

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!--END OF CONTENT-->
                                    <br>
                                    <br>
                                </div>
                            </div>
                            <!--END OF CAROUSEL SLIDE-->

                            <div class="carousel-item" align="center">
                                <div class="container" style="max-width:70%">
                                    <h5><strong>DevOps</strong></h5>

                                    <p align="center">
                                        <a href="/accelerate" target="_blank" title="Click here for the 24 capabilities and way to install Devops (eat the elephant)!"><img alt="" class="img-fluid" src="/images/devopsimage.png" onmouseover="this.src='/images/devopscogs.png'" onmouseout="this.src='/images/devopsimage.png'"></a>
                                    </p>

                                    <p align="center">
                                        <a href="/login" target="_blank" title="Click here for the 24 capabilities and way to install Devops (eat the elephant)!"><img alt="Its DevOps" class="img-fluid" src="/images/itsdevops.png"></a>
                                    </p>

                                    <p><i>Click the Elephant for DevOps essence!</i></p>
                                    <button class="btn btn-primary align-center clearfix" type="button" data-toggle="collapse" data-target="#collapsedandd" aria-expanded="false" aria-controls="collapsedandd">Done or Un-Done?</button>

                                    <div class="collapse" id="collapsedandd">
                                        <div class="container">
                                            <div class="card text-center">
                                                <h5 class="card-header" align="center">Can Scrum bridge the gap?</h5>
                                                <div class="card-body text-center">

                                                    <p align="center"><img alt="" class="img-fluid" src="/images/devopsuncertain.png" onmouseover="this.src='/images/devandops.png'" onmouseout="this.src='/images/devopsuncertain.png'" title="Click the image now to reduce Devops uncertainty"></p>
                                                    <img alt="PO are the new RM's" class="img-fluid" src="/images/poarenewrm.png">
                                                    <br>
                                                    <br>

                                                    <button class="btn btn-primary align-center clearfix" type="button" data-toggle="collapse" data-target="#collapsepmboksixone" aria-expanded="false" aria-controls="collapsepmboksixone">PO as new RM!
                                                    </button>

                                                    <div class="collapse" id="collapsepmboksixone">
                                                        <div class="container">
                                                            <div class="card text-center">
                                                                <h5 class="card-header" align="center">From Reinventing ITIL in the age of DevOps<br>
                                                                    Abhinav Krishn Akaiser 2019</h5>
                                                                <div class="card-body text-left" align="left">
                                                                    <h5 align="left">Product Owners are the New Release Managers</h5>
                                                                    <p align="left">The release management team has been made partially redundant by machines. It is not absolute because of two reasons.</p>
                                                                    <ul>
                                                                        <li>You need an owner for the entire release management process that cuts across both development and operations.</li>
                                                                        <li>Cognitive abilities are very much in demand to ensure that the release management process succeeds and aligns with the objectives set forth.</li>
                                                                    </ul>

                                                                    <p align="left">The person who manages the entire release from end to end is the release manager and is still necessary. However, the release management role went from being a full-time position to a part-time one (statistically speaking), mainly because of the diminished work (thanks to automation). Capable release managers are

                                                                    <ol>
                                                                        <li>Well aware of the customer landscape, the requirements, and to an extent the business priorities</li>
                                                                        <li>Fully involved in the development and deployment processes</li>
                                                                        <li>Understands operations and their acceptance criteria</li>
                                                                    </ol>
                                                                    <p align="left">The person who could do all this in the past was the product owner (PO), and thus that person is a favorite choice for a part-time release manager. POs are an adequate choice mainly because of their closeness to the business and to the development and operations teams. The person was like a bridge between the two entities and was expected to keep the boat going in the most turbulent conditions.</p>
                                                                    <br>
                                                                    <p align="left">Thanks Abhinav (page 294)
                                                                        <br> PS <a href="/?slide=10" target="_blank">I am reminded by the above of the importance of the Board
                                                                            Executive to produce products in PRINCE2 Agile</a></p>

                                                                </div>
                                                                <div class="card-footer">

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <br>
                                                    <button class="btn btn-primary align-center clearfix" type="button" data-toggle="collapse" data-target="#collapsevaluemodel" aria-expanded="false" aria-controls="collapsevaluemodel">The Product Owner
                                                        <br>and
                                                        <br>Scrum Value Model
                                                    </button>

                                                    <div class="collapse" id="collapsevaluemodel">
                                                        <div class="container">
                                                            <div class="card text-center">
                                                                <p class="card-header" align="center">Note below how value is produced in agile's Scrum method.</p>
                                                                <div class="card-body text-center">

                                                                    <a href="/homeviewpdf/resources/scrumvalued.pdf" target="_blank"><img alt="Scrum Value Model essence" class="img-fluid" src="/images/scrumvaluedessence.jpg" title="Click the image to download a pdf"   onmouseover="this.src='/images/scrumvalued.jpg'" onmouseout="this.src='/images/scrumvaluedessence.jpg'" ></a><br>
                                                                    <br>

                                                                </div>
                                                                <div class="card-footer">
                                                                    <p align="center">Note above that the first 3 stages occur before sprints start.<br><b>WARNING:</b><br>The product owner does not dictate what the development team does.<br>They (with help from the Scrum Master) accepts user story (slices) into the sprint they can safely convert to DONE.<br>
                                                                        Ignore this advice, and put the Product Owner as Manager of the Scrum Team and you will destroy Scrum Method (the Scrum Master who represents scrum quality and process improvement) and your Scrum Team.<br>I.e. by running scrum heroically at Capability Maturity Level 1.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <br>
                                                    <br>

                                                    <h5>I.e.</h5>
                                                    <p>DevOps is <a href="/?slide=8">ITIL</a>, just empowered for speed!
                                                        <br>Scrum team sprints (as an example) must be able to <a href="/release" target="_blank">release</a>
                                                        <a href="/login" target="_blank">working software</a> faster.</p>

                                                    <p>
                                                        <a href="/?slide=8"><img alt="dev ops is itil but faster!" class="img-fluid" src="/images/itilppsdevopsmodel.jpg" onmouseover="this.src='/images/itil.jpg'" onmouseout="this.src='/images/itilppsdevopsmodelsinglesource.jpg'" title="DevOps is ITIL, just empowered to be faster!"></a>
                                                    </p>
                                                    <p>DevOps/ITIL/Agile/Scrum etc., Goal: Release Working Software faster!</p>
                                                    <p>
                                                        <a href="/login" title="Click here and find the Un-Done Scrum image.  Putting this DevOps/ITIL/ solution into place can remedy Un-Done Scrum and other Scrum Dysfunctions" target="_blank"><img alt="Release Working Software Faster" class="img-fluid" src="/images/itildevopsmall.png"></a>
                                                    </p>
                                                    <p>Notice that for the pilots telemetry is either nominal or not!</p>
                                                    <p align="center"><img class="img-fluid" src="/images/devopsrelease.jpg"></p>
                                                    <p><a href="/login" target="_blank" title="Click here for the 7 Scrum Dysfunctions of which Un-Done Scrum is one">If you can't do the above in Scrum you may become Un-Done!</a></p>

                                                    <br>
                                                    <br>
                                                </div>
                                                <div class="card-footer">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--END OF CONTENT-->
                                    <br>
                                    <br>
                                </div>
                            </div>
                            <!--END OF CAROUSEL SLIDE-->

                            <div class="carousel-item" align="center">
                                <div class="container" style="max-width:70%">
                                    <h5><strong>PRINCE2 (Agile)</strong></h5>

                                    <img class="img-fluid" src="/images/prince2processmodelwithbriefcase.jpg" "=" " onmouseover=" this.src='/images/prince2modelprocwhereagilehappens.png' " onmouseout=" this.src='/images/prince2processmodelwithbriefcase.jpg' " ">
                                    <p><i>Click the image above to see where Agility (with Governance) happens.<br>The image below shows how agility can introduce risk. Can you see it?</i></p>

                                    <a href="/home/agile?slide=11" target="_blank" title="Click here for more on the agile Methods. The Agile Manifesto section - especially project selection matrix - explains this image in more detail."><img alt="" class="img-fluid" src="/images/tradagilep2a.png"></a>
                                    <p><i>Click the image above for an overview of the different agile methods</i></p>
                                    <!--END OF CONTENT-->
                                    <br>
                                    <br>
                                </div>
                            </div>
                            <!--END OF CAROUSEL SLIDE-->

                            <div class="carousel-item" align="center">
                                <div class="container" style="max-width:70%">
                                    <h5>
                                        <strong>DSDM</strong>
                                    </h5>

                                    <img alt="DSDM Model" class="img-fluid" src="/images/dsdmorig20160712.png">
                                    <br>
                                    <br>

                                    <p><i>The image below shows how agility can introduce risk. Can you see it?</i></p>
                                    <a href="/home/agile?slide=4" target="_blank" title="Click here for more on the agile Methods. The Agile Manifesto section - especially project selection matrix - explains this image in more detail."><img alt="" class="img-fluid" src="/images/tradagiledsdm.png"></a>
                                    <p><i>Click the image above for an overview of the different agile methods</i></p>

                                    <!--END OF CONTENT-->
                                    <br>
                                    <br>
                                </div>
                            </div>
                            <!--END OF CAROUSEL SLIDE-->


                            <div class="carousel-item" align="center">
                                <div class="container" style="max-width:70%">
                                    <h5>

                                        <strong>Scrum</strong>
                                    </h5>

                                    <br><a href="/home/scrumsixmins" target="_blank"> <img class="img-fluid" src="/images/scruminsixmins.png" title="Scrum in Just Six Minutes"></a><br>
                                    <a href="/scrum" target="_blank" title="Click the image to go to an overfiew of Scrum method and its process.  If you are learning Scrum these form an overview of what you need to know."><img alt="sprint with PP and PMC" class="img-fluid" src="/images/Scrumprocessswirl.jpg">
                                        <br>

                                        <img class="img-fluid" src="/images/scrumdashnochapters.png" title="From the Scrum Body of Knowledge 3rd edition"></a>
                                    <br>

                                    <!--
                                    <button class="btn btn-primary align-center clearfix" type="button" data-toggle="collapse" data-target="#collapsescrumvaluemodel" aria-expanded="false" aria-controls="collapsescrumvaluemodel">The Scrum Value Model
                                    </button>

                                    <div class="collapse" id="collapsescrumvaluemodel">
                                        <div class="container">
                                            <div class="card text-center">
                                                <p class="card-header" align="center">Note below how value is produced in agile's Scrum method.
                                                    <br> Note also the importance of the <a href="/reinventingitil" target="_blank">Product Owner, ITIL and Devops</a>.</p>
                                                <div class="card-body text-center">

                                                    <img alt="Scrum Value Model" class="img-fluid" src="/images/scrumvaluemodelroles.jpg">
                                                    <br>

                                                </div>
                                                <div class="card-footer">
                                                    <p align="center"></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>-->
                                    <br>

                                    <button class="btn btn-primary align-center clearfix" type="button" data-toggle=
                                        "collapse" data-target="#collapsevaluemodelessence" aria-expanded="false" aria-controls=
                                                "collapsevaluemodelessence">The Scrum Essence <br>(for Capability Maturity Level 2+)
                                    </button>

                                    <div class="collapse" id="collapsevaluemodelessence">
                                        <div class="container">
                                            <div class="card text-center">
                                                <p class="card-header" align="center">The Essence of Scrum @ Capability Maturity Level 2+</p>
                                                <div class="card-body text-center">


                                                    <a href="/homeviewpdf/resources/scrumvalued.pdf" target="_blank"><img alt="Scrum Value Model essence" class="img-fluid" src="/images/scrumvaluedessence.jpg" title="Click the image to download a pdf"   onmouseover="this.src='/images/scrumvalued.jpg'" onmouseout="this.src='/images/scrumvaluedessence.jpg'" ></a><br>




                                                </div>
                                                <div class="card-footer">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <br>
                                    <p><i>The image below shows how agility can introduce risk. Can you see it?</i></p>
                                    <a href="/home/agile?slide=10" target="_blank" title="Click here for more on the agile methods. The Agile Manifesto section - especially project selection matrix - explains this image in more detail."><img alt="" class="img-fluid" src="/images/tradagilescrum.png"></a>
                                    <p><i>Click the image above for an overview of the different agile methods</i></p>

                                    <!--END OF CONTENT-->
                                    <br>
                                    <br>
                                </div>
                            </div>
                            <!--END OF CAROUSEL SLIDE-->

                            <div class="carousel-item" align="center">
                                <div class="container" style="max-width:70%">
                                    <h5>

                                        <strong>Scaled Agile Framework (SAFe)</strong>
                                    </h5>

                                    <p>
                                        <a href="/home/safe" target="_blank" title="Click the image for a short video about Safe"> <img class="img-fluid" src="/images/safe.png" "=" " onmouseover=" this.src='/images/safeart.png' " onmouseout=" this.src='/images/safe.png' " "></a>
                                        Click the image above for a short video on SAFe. </p>

                                    <br>

                                    <!--      <button class="btn btn-primary align-center clearfix" type="button" data-toggle="collapse" data-target="#collapsesafer" aria-expanded="false" aria-controls="collapsesafer">SAFe?
                                          </button>

                                          <div class="collapse" id="collapsesafer">
                                              <div class="container">
                                                  <div class="card text-center">
                                                      <h5 class="card-header" align="center"></h5>
                                                      <div class="card-body text-center">
                                                          <p align="left">Can you see that SAFe is simply a bunch of consolidated Scrums?
                                                              <br>Agile (Scrum), as opposed to Traditional (using long range planning) is a voyage of discovery and improvement!
                                                              <br>(<a href="/vmodel" target="_blank">I.e. "Working Software Demo" to next "Working
                                    Software Demo"</a> in <a href="/productincrement" target="_blank">product increments</a>!)</p>

                                                          <button class="btn btn-primary align-center clearfix" type="button" data-toggle="collapse" data-target="#collapsesafe" aria-expanded="false" aria-controls="collapsesafe">The SAFe challenge!
                                                          </button>

                                                          <div class="collapse" id="collapsesafe">
                                                              <div class="container">
                                                                  <div class="card text-center">
                                                                      <h5 class="card-header" align="center"></h5>
                                                                      <div class="card-body text-center">

                                                                          <h3>Here is the challenge:</h3>
                                                                          <p align="left">Can your sprints actually deliver (<a href="/release" target="_blank">release</a>) new versions of
                                                                              <a href="/workingsoftware" target="_blank">working software</a> into production after a sprint (number of sprints)?
                                                                              <br>
                                                                              <br>Based on agreed User Stories moved to the sprint from the groomed backlog, does the Product Owner agree that working software has improved the specific <a href="/vmodel" target="_blank">system software baseline</a> for <a href="/itil" target="_blank">"particular IT Infrastructure stack"</a> and software can now be <a href="/release" target="_blank">released (Dev=>QA=>UAT=>)</a> into production?
                                                                              <br>
                                                                              <br> Note: Segregation between Dev and Ops is there for a reason. The "you build it you own it" mantra only works well with &quot;Empowered Workgroups&quot; at CMMi Dev and People Capability Maturity (PCMM) Level 4! Per Gene Kim below the role of the Scrum Product Owner (as (or to empower) &quot;Release Manager&quot;) is crucial for success!
                                                                              <br>
                                                                              <br>I.e. PP (Project Planning) and PMC&nbsp; (Project Monitoring and Control) (
                                                                              <a href="/?slide=1" target="_blank">per
                                            the dashboard on the home page</a>)
                                                                              <br><b>as fingers and thumb, <br>squeeze out
                                            Production (Project Execution)</b>.
                                                                              <br>This "pressure" to "release" on demand (like needing toothpaste from a tube) in the Scrum Method comes from dynamic tension as the <a href="/homeviewpdf/resources/productowner.pdf" target="_blank" title="Thank you F. M. Fowler">Product Owner</a> interacts with the <a href="/homeviewpdf/resources/scrummaster.pdf" target="_blank" title="Thank you F. M. Fowler">Scrum
                                            Master</a> and <a href="/homeviewpdf/resources/scrumteam.pdf" target="_blank" title="Thank you F. M. Fowler">Scrum Team</a>.</p>
                                                                          <img alt="squeeze toothpaste" class="img-fluid" src="/images/squeetube.jpg">
                                                                          <br>
                                                                          <br>
                                                                          <img alt="sprint with PP and PMC" class="img-fluid" src="/images/sprintmethodwithpppmc.jpg">
                                                                          <br>
                                                                          <br><img alt="sprint with PP and PMC" class="img-fluid" src="/images/pppmcperscrumedited.png">
                                                                          <br>
                                                                          <br><img alt="" class="img-fluid" src="/images/scrumprocessespppmcwitharrow.png">
                                                                          <h3>extending this to DevOps...</h3>

                                                                          <p align="center"><img alt="" class="img-fluid" src="/images/devopsuncertain.png" onmouseover="this.src='/images/devandops.png'" onmouseout="this.src='/images/devopsuncertain.png'" title="Click the image now to reduce Devops uncertainty"></p>
                                                                          <button class="btn btn-primary align-center clearfix" type="button" data-toggle="collapse" data-target="#collapsereinventing" aria-expanded="false" aria-controls="collapsereinventing">I.e.
                                                                          </button>

                                                                          <div class="collapse" id="collapsereinventing">
                                                                              <div class="container">
                                                                                  <div class="card text-center">
                                                                                      <h5 class="card-header" align="center">Discussed in the <a href="/?slide=8" target="_blank">ITIL page</a>, reiterated here due to its importance.</h5>
                                                                                      <div class="card-body text-left">

                                                                                          <h5 align="left">DevOps is <a href="/home/index?slide=7">ITIL</a>, just empowered for speed!</h5>
                                                                                          <p align="left">Scrum team sprints must be able to <a href="/release" target="_blank">release</a>
                                                                                              <a href="/workingsoftware" target="_blank">working software</a> faster.</p>
                                                                                          <p align="center">
                                                                                              <a href="/accelerate" target="_blank" title="Click here for the 24 capabilities and way to install Devops (eat the elephant)!"><img alt="dev ops is itil but faster!" class="img-fluid" src="/images/itilppsmaller.png" title="DevOps is ITIL, just empowered to be faster!"></a>
                                                                                          </p>
                                                                                          <p align="left">Can you see that the ITIL CSI register is also the Scrum Backlog?
                                                                                              <br> Can you see that
                                                                                              <a href="/home/index?slide=8">ITIL Service Strategy Slide #8</a> is where valuable improvements (Product Owner (Release Manager) Groomed and Risk Adjusted Scrum Backlog Items) are plugged in to be built?
                                                                                              <br>Can you see that developers work in Service Design, Transitioning service improvements into Service Operations?
                                                                                              <br>For more detail go to the <a href="/home/index?slide=7">ITIL</a> and <a href="/home/index?slide=8">DevOps</a> slides.</p>

                                                                                          <h5 align="left">Product Owners Are the New Release Managers</h5>
                                                                                          <p>The release management team has been made partially redundant by machines. It is not absolute because of two reasons.</p>
                                                                                          <ul>
                                                                                              <li>You need an owner for the entire release management process that cuts across both development and operations.</li>
                                                                                              <li>Cognitive abilities are very much in demand to ensure that the release management process succeeds and aligns with the objectives set forth.</li>
                                                                                          </ul>

                                                                                          <p align="left">The person who manages the entire release from end to end is the release manager and is still necessary. However, the release management role went from being a full-time position to a part-time one (statistically speaking), mainly because of the diminished work (thanks to automation). Capable release managers are

                                                                                              <ol>
                                                                                                  <li>Well aware of the customer landscape, the requirements, and to an extent the business priorities</li>
                                                                                                  <li>Fully involved in the development and deployment processes</li>
                                                                                                  <li>Understands operations and their acceptance criteria</li>
                                                                                              </ol>
                                                                                              <p align="left">The person who could do all this in the past was the product owner (PO), and thus that person is a favorite choice for a part-time release manager. POs are an adequate choice mainly because of their closeness to the business and to the development and operations teams. The person was like a bridge between the two entities and was expected to keep the boat going in the most turbulent conditions.</p>

                                                                                              <br>
                                                                                              <br>
                                                                                              <p align="left">Thanks Abhinav (page 294)
                                                                                                  <br> PS <a href="/?slide=10" target="_blank">I am reminded by the above of PRINCE2 Agile</a></p>

                                                                                      </div>
                                                                                      <div class="card-footer">

                                                                                      </div>
                                                                                  </div>
                                                                              </div>
                                                                          </div>
                                                                      </div>
                                                                      <div class="card-footer">
                                                                          FYI: Go to timestamp 22.50 <a href="/agileisdead" target="_blank">in the video here</a>
                                                                          <br>See if you can understand what Dave Thomas has to say about SAFe within the context of his talk about (where he rejects) Agile (with a capital A)

                                                                      </div>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                          <br>
                                                          <br>
                                                      </div>
                                                      <div class="card-footer">
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          <br>
                                          <br>
                                          <br>-->
                                    <h3>Bottom line:</h3>
                                    <p><b><i>If your scrums are not <a href="/scrumvalued" target="_blank">releasing valuable working software
                                                    regularly</a>;<br>then SAFe <br>(as with the problems [<a href="/homeviewpdf/resources/chaos-report.pdf"
                                                                                                              target="_blank">and chaos</a>] associated with traditional project management)<br>
                                                <a href="/pin" target="_blank">if badly run at CM level 1</a><br>can be just as <a href="	/home/safeisunsafe" target="_blank"><u>unsafe!</u></a></i></b>
                                    </p>
                                    <!--END OF CONTENT-->
                                    <br>
                                    <br>
                                </div>
                            </div>
                            <!--END OF CAROUSEL SLIDE-->

                            <div class="carousel-item" align="center">
                                <div class="container" style="max-width:70%">
                                    <h5>

                                        <strong>People CMM</strong>

                                    </h5>
                                    <!--<img alt="" class="img-fluid" src="/images/pcmmoverview.png" >  -->
                                    <img alt="" class="img-fluid" src="/images/pcmmoverviewbevelled.png">
                                    <br>
                                    <br>
                                    <!--  <button class="btn btn-primary align-center clearfix" type="button" data-toggle=
                  "collapse" data-target="#collapsecats" aria-expanded="false" aria-controls=
                          "collapsecats">Level 1:  Herding Cats</button>

                  <div class="collapse" id="collapsecats">
                      <div class="container">
                          <div class="card text-center">


                  <h5 class="card-header" align="center"><a href="/home/af" target="_blank"><u>Consider American Football in the NFL</u></a></h5>
                  <p>
                  (Click the link
                  directly above to understand why PMWay sees American Football as CM Level 2+ in action)<br><b>These "highly professional and
                  frikken cooler than cool cats&quot; <br>all understand EXACTLY
                  the rules of how to win with their game!</b><br>PMWay suggests Just Doing It with the attitude below will not win the
                  Super bowl!</p>

                              <div class="card-body text-center">





                                      <p>Now click the Shepherd below to see this from a Scrum Master's perspective. <br><a href="/pin">Click here</a> to pin down the problem and obvious solution. </p><img alt="" class="img-fluid" title="Click this image for an idea of what a Scrum Master must put up with at CM L1" src="/images/catastrophe.jpg" onmouseover="this.src='/images/catastrophescrum.jpg'" onmouseout="this.src='/images/catastrophe.jpg'"><br>
                                  <img alt="" class="img-fluid" src="/images/artofherdingcats.jpg" ></div>
                              <div class="card-footer">

                              </div>
                          </div>
                      </div>
                  </div>
                                      <br>
                                      <br>
                                      <button class="btn btn-primary align-center clearfix" type="button" data-toggle="collapse" data-target="#collapsepeople" aria-expanded="false" aria-controls="collapsepeople">People
                                      </button>

                                      <div class="collapse" id="collapsepeople">
                                          <div class="container">
                                              <div class="card text-center">
                                                  <h5 class="card-header" align="center"></h5>
                                                  <div class="card-body text-center">
                                                      <p align="left">In order to run projects (especially Agile) correctly your people need capabilities and maturity.</p>
                                                      <p align="left">Agile postulates the "cohesive empowered professional team,"
                                                          <br>with all the necessary skills required for the project existing within the team!
                                                          <br>These "adequately empowered workgroups" are normally only found at CM Level 4.
                                                          <br>Can you see the truth of this?
                                                          <br>
                                                          <br>Executive support [Executive Action Team (to EAT &quot;<a href="/home/removetheredbeads" target="_blank">the red beads</a>&quot;)] is the key to success!
                                                          <br>As a test of this (and where the Executive need to <a href="/home/removetheredbeads" target="_blank">remove the red beads</a>) [of which a lack of training in the team on what, when, why and how with regard to project processes to be followed will definitely create red beads],
                                                          <br>if you have a scrum team (as example),
                                                          <br>find out how many on the team actually have the entry level foundation certificate of competency for the scrum method?</p>
                                                      <p align="left">Bottom Line:  If you want to do Scrum (or any project method correctly) that starting point is to ensure your people are adequately trained / certified!</p>
                                                  </div>
                                                  <div class="card-footer">

                                                  </div>
                                              </div>
                                          </div>
                                      </div>-->
                                    <!--END OF CONTENT-->
                                    <br>
                                    <br>
                                </div>
                            </div>
                            <!--END OF CAROUSEL SLIDE-->

                            <div class="carousel-item" align="center">
                                <div class="container" style="max-width:70%">
                                    <h5>
                                        <strong>Cobit 5</strong>
                                    </h5>

                                    <img alt="" class="img-fluid" src="/images/11scobitprocessreferencemodel.png">
                                    <br>
                                    <br>
                                    <button class="btn btn-primary align-center clearfix" type="button" data-toggle="collapse" data-target="#collapsecobits" aria-expanded="false" aria-controls="collapsecobits">COBIT
                                    </button>

                                    <div class="collapse" id="collapsecobits">
                                        <div class="container">
                                            <div class="card text-center">
                                                <h5 class="card-header" align="center"></h5>
                                                <div class="card-body text-center">
                                                    <h5>Control Objectives In Business and IT</h5>
                                                    <p align="left">It is quite a challenge to install COBIT.
                                                        <br> Guess what. Its easier to install that you realize.</p>
                                                    <p align="left">Can you find BAI01 Manage Programs and Projects?</p>
                                                    <p align="left">Thinking back to the <a href="/home/index?slide=3">Strategy Wall Slide #3</a> can you find APO02?
                                                        <br> What about the <a href="/home/index?slide=8">ITIL Slide #8</a> (APO03, BAI04, BAI06 etc.)?</p>
                                                    <p align="left">As with tailoring the PMBOK processes (and other method processes), Cobit needs to be implemented systematically so that it leverages off installed, operational and stable CM Model processes.</p>
                                                    <br>I.e.
                                                    <img alt="eat the elephant" class="img-fluid" src="/images/elephant_one_bite.png">
                                                    <br>
                                                    <br>
                                                    <p align="center">Systematically installing the essence of the previous slides
                                                        <br> (in bite sized and digestible chunks)
                                                        <br>means Cobit is now also installed!</p>
                                                </div>
                                                <div class="card-footer">

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!--END OF CONTENT-->
                                    <br>
                                    <br>
                                </div>
                            </div>
                            <!--END OF CAROUSEL SLIDE-->

                            <div class="carousel-item" align="center">
                                <div class="container" style="max-width:70%">
                                    <h5>
                                        <strong>PLAN DO CHECK ACT</strong> <br>(PDCA)</h5>
                                    <p align="center">The image below explains why
                                        <br>&quot;Just Do It&quot; at CM L1 is really a bad idea!</p>

                                    <p class="ctr"> <img alt="" class="img-fluid" src="/images/nopdcacycle.jpg"></p>

                                    <br>
                                    <!-- <button class="btn btn-primary align-center clearfix" type="button" data-toggle="collapse" data-target="#collapsemoreinfo" aria-expanded="false" aria-controls="collapsemoreinfo">PDCA
                                     </button>

                                     <div class="collapse" id="collapsemoreinfo">
                                         <div class="container">
                                             <div class="card text-center">
                                                 <h5 class="card-header" align="center"></h5>
                                                 <div class="card-body text-center">
                                                     <h6>Here is the PDCA cycle</h6>

                                                     <p><img alt="" class="img-fluid" src="/images/pdca_cycle.png"></p>
                                                     <br>

                                                     <p align="left">Can you find PLAN, DO, CHECK (Monitor and Control) and ACT <a href="/?slide=1">in the PMBOK
                                       dashboard on the home page?</a>
                                                         <br> You can also <a href="#pdca">find it in the last image
                                       at the bottom of this page</a>!
                                                         <br> How about looking for it in <a href="/home/agile?slide=10" target="_blank">Agile (Scrum)</a>
                                                         <br> How about looking for it in (<a href="/home/index?slide=8">ITIL</a>)?</p>

                                                     <p align="left">PDCA (plan do check act or plan do check adjust) is an iterative four-step management method used in business for the control and continuous improvement of processes and products. It is also known as the Deming circle/cycle/wheel, Shewhart cycle, control circle/cycle, or Plan Do Study Act (PDSA). Another version of this PDCA cycle is OPDCA. The added &quot;O&quot; stands for observation or as some versions say &quot;Grasp the current condition.&quot; This emphasis on observation and current condition has currency with Lean manufacturing/Toyota Production System literature.</p>

                                                     <button class="btn btn-primary align-center clearfix" type="button" data-toggle="collapse" data-target="#collapsepdcaworks" aria-expanded="false" aria-controls="collapsepdcaworks">PDCA - How It Works.
                                                     </button>

                                                     <div class="collapse" id="collapsepdcaworks">
                                                         <div class="container">
                                                             <div class="card text-center">
                                                                 <h5 class="card-header" align="center"></h5>
                                                                 <div class="card-body text-center">

                                                                     <h5 align="center">PLAN</h5>
                                                                     <p align="left">Establish the objectives and processes necessary to deliver results in accordance with the expected output (the target or goals). By establishing output expectations, the completeness and accuracy of the spec is also a part of the targeted improvement. When possible start on a small scale to test possible effects.</p>
                                                                     <h5 align="center">DO</h5>
                                                                     <p align="left">Implement the plan, execute the process, make the product. Collect data for charting and analysis in the following "CHECK" and "ACT" steps.</p>
                                                                     <h5 align="center">CHECK</h5>
                                                                     <p align="left">Study the actual results (measured and collected in "DO" above) and compare against the expected results (targets or goals from the "PLAN") to ascertain any differences. Look for deviation in implementation from the plan and also look for the appropriateness and completeness of the plan to enable the execution, i.e., "Do". Charting data can make this much easier to see trends over several PDCA cycles and in order to convert the collected data into information. Information is what you need for the next step "ACT".
                                                                     </p>
                                                                     <h5 align="center">ACT</h5>
                                                                     <p align="left">Request corrective actions on significant differences between actual and planned results. Analyze the differences to determine their root causes. Determine where to apply changes that will include improvement of the process or product. When a pass through these four steps does not result in the need to improve, the scope to which PDCA is applied may be refined to plan and improve with more detail in the next iteration of the cycle, or attention needs to be placed in a different stage of the process.</p>
                                                                     <p align="left">Note: Some modern trainers now also refer to the "A" as "Adjust". This helps trainees to understand that the 4th step is more about adjusting/correcting the difference between the current state and the planned state instead of thinking that the "A" is all about action and implementation (which actually happens in the second ("D") stage).</p>

                                                                 </div>
                                                                 <div class="card-footer">

                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>

                                                     <br>
                                                     <br>
                                                     <button class="btn btn-primary align-center clearfix" type="button" data-toggle="collapse" data-target="#collapsecheckact" aria-expanded="false" aria-controls="collapsecheckact">Plan, Check &amp; Act
                                                         <br>- Difficult to get correct!
                                                     </button>

                                                     <div class="collapse" id="collapsecheckact">
                                                         <div class="container">
                                                             <div class="card text-center">
                                                                 <h5 class="card-header" align="center"></h5>
                                                                 <div class="card-body text-center">

                                                                     <p align="left">
                                                                         We all know that Plan-Do-Check-Act is the heart of Continuous Improvement, so why do so many business leaders fall down when it comes to Check-Act? And what should they do about it? </p>
                                                                     <p align="left">Directors and Senior Managers provided that they aren't completely stuck in fire-fighting mode are usually quite happy with the Plan part.
                                                                         <br> They've been trained to set SMART objectives, they appraise their direct reports regularly, and they regularly provide effective feedback. They understand effective Project Management and perhaps apply Hoshin Planning/Policy Deployment. Having worked out the Plan, they often develop their people by delegating the Doing. They know that for people to learn, grow and develop they need to be challenged and supported. So they expect the best but they also provide plenty of support. In other words they coach: they work with their people, they don't do it to them or do it for them. </p>
                                                                     <p align="left"><strong>Sounds great, doesn't it?</strong> </p>
                                                                     <p align="left">But experienced leaders know the reality coaching can be time-consuming, frustrating, and damned hard work! And often there just don't seem to be enough hours in the day. </p>
                                                                     <p align="left">That's one reason why many managers instead of delegating, coaching and empowering often let people just get on with it. And most operations folk are very good at getting on with it it's what they like, it's what they're good at, and traditionally it's often what they're rewarded for. </p>
                                                                     <p align="left">The problem is that most people are good at doing what they've always done, in the way that they've always done it. So they produce the same results that they've always produced not always consistently, and not always Right First Time. At an
                                                                     organizational level, that leads to inertia and complacency and that in turn hampers learning which ultimately leads to extinction. </p>
                                                                     <p align="left"><strong>Maybe it's human
                                               nature: we all want to improve we just don't want to change. Yet in our hearts we know
                                               that if we really want to improve then we have to change what we
                                               do or how we do it.</strong></p>
                                                                     <p align="left"> We have to stand back and review what we do, and what we get, and then we need to take action as appropriate. As leaders we have to make sure that reviews are properly conducted, that follow-up's actually happen and that actions are taken. In other words, we need to spend time on Check and Act. So how do we actually do this in practice? </p>
                                                                     <p align="left">
                                                                         <strong>The answer as with most improvement activities is: (1) Start Simple; and (2) Make it
                                               a
                                               Habit</strong></p>
                                                                     <p align="left"><strong>Simple</strong> means
                                                                     diarizing a review session, and making sure it takes place.</p>
                                                                     <p align="left"> <strong>Make it a Habit</strong> means making sure that all leaders always build in a review to all improvement activities. </p>
                                                                     <p align="left">This is an ideal opportunity to lead by example show colleagues how quick and easy a review can be, and how useful it is. Once people begin to get the review habit, you can move on to
                                                                     formalize it, by including review and action steps in your key processes. To start with, focus on the areas of the business where this will have the biggest impact or where you most need to improve. Maybe it's after completion of each major project, job or contract. Get the team together formally with your supplier(s) and customer(s), if at all possible and ask honestly what went well, what didn't go to plan, and what you can learn from this. </p>
                                                                     <p align="left">How you handle these sessions goes to the heart of the
                                                                     organization's culture always remember, when things go wrong: Never blame the people; always blame the process. </p>
                                                                     <p align="left"><a href="/redbeads" target="_blank">As W Edwards Deming taught us many years
                                               ago</a> (his 14 observations for management), Continuous Improvement will only happen in an open, honest environment of trust and an absence of fear.</p>
                                                                     <p align="left"><strong> Critically, leaders then need to make sure that the right actions are
                                               taken.</strong> </p>
                                                                     <p align="left">If you've achieved the results you wanted, then the new ways of working need to be locked in with Standard Operating Procedures and training, and regularly monitored until the new One Best Way becomes embedded.</p>
                                                                     <p align="left">If you haven't sufficiently closed the gap between as is and should be then you need to go through the PDCA cycle again.</p>
                                                                     <p align="left">And remember the Act part isn't done until you've taken full advantage of any read-across opportunities, you've removed those initial quick fixes and you've embedded your new One Best Way until next time!
                                                                     </p>
                                                                     <p align="left">The message then for senior managers is if you want to keep on improving, complete the cycle! </p>
                                                                     <p align="left">Implementation is about planning and doing but improving is about checking and taking action. By all means delegate these tasks but ultimately it's your responsibility to ensure that improvements are identified, acted upon, followed up and sustained. </p>
                                                                     <p align="left">In other words, to borrow a great motto from the corporate governance arena, <em>
                                               <strong>Trust and check</strong></em>: trust people to do what is required but also build in sufficient checks and balances. If you do then you will be sure to improve, and you'll also be sure that you're improving.
                                                                     </p>
                                                                     <p align="left">Article by Andrew Nicholson</p>

                                                                 </div>
                                                                 <div class="card-footer">

                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>

                                                     <br>
                                                     <br>
                                                     <h3>This is how you do PDCA!</h3>
                                                     <p class="ctr">
                                                         <img alt="" class="img-fluid" src="/images/pdcacontinually.png"></p>

                                                     <p class="ctr">
                                                         <a name="pdca"></a>
                                                         <img alt="" class="img-fluid" src="/images/qualitymodels.png"></p>
                                                     <br>
                                                     <br>

                                                     <button class="btn btn-primary align-center clearfix" type="button" data-toggle="collapse" data-target="#collapsehistory" aria-expanded="false" aria-controls="collapsehistory">PDCA - History Lesson!
                                                     </button>

                                                     <div class="collapse" id="collapsehistory">
                                                         <div class="container">
                                                             <div class="card text-center">
                                                                 <h5 class="card-header" align="center"></h5>
                                                                 <div class="card-body text-center">

                                                                     <p align="left">PDCA was made popular by Dr W. Edwards Deming, who is considered by many to be the father of modern quality control; however, he always referred to it as the "Shewhart cycle". Later in Deming's career, he modified PDCA to "Plan, Do, Study, Act" (PDSA) because he felt that "check" emphasized inspection over analysis.</p>

                                                                     <p align="left">The concept of PDCA is based on the scientific method, as developed from the work of Francis Bacon (Novum Organum, 1620). The scientific method can be written as "hypothesis&quot;
                                                                     &quot;experiment&quot; &quot;evaluation" or plan, do and check. Shewhart described manufacture under "control
                                                                     &quot;under statistical control &quot;
                                                                     as a three-step process of specification, production, and inspection. He also specifically related this to the scientific method of hypothesis, experiment, and evaluation. Shewhart says that the statistician "must help to change the demand [for goods] by showing how to close up the tolerance range and to improve the quality of goods." Clearly, Shewhart intended the analyst to take action based on the conclusions of the evaluation. According to Deming, during his lectures in Japan in the early 1950s, the Japanese participants shortened the steps to the now traditional plan, do, check, act. Deming preferred plan, do, study, act because "study" has connotations in English closer to Shewhart's intent than "check".</p>

                                                                     <p align="left">A fundamental principle of the scientific method and PDCA is
                                                                     iteration &quot;once a hypothesis is confirmed (or negated), executing the cycle again will extend the knowledge further. Repeating the PDCA cycle can bring us closer to the goal, usually a perfect operation and output.</p>

                                                                     <p align="left">Another fundamental function of PDCA is the "hygienic" separation of each phase, for if not properly separated measurements of effects due to various simultaneous actions (causes) risk becoming confounded.</p>

                                                                     <p align="left">PDCA (and other forms of scientific problem solving) is also known as a system for developing critical thinking. At Toyota this is also known as "Building people before building cars." Toyota and other Lean companies propose that an engaged, problem-solving workforce using PDCA is better able to innovate and stay ahead of the competition through rigorous problem solving and the subsequent innovations. This also creates a culture of problem solvers using PDCA and creating a culture of critical thinkers.</p>

                                                                     <p align="left">In Six Sigma programs, the PDCA cycle is called "define, measure, analyze, improve, control" (DMAIC). The iterative nature of the cycle must be explicitly added to the DMAIC procedure.</p>

                                                                     <p align="left">Deming continually emphasized iterating towards an improved system, hence PDCA should be repeatedly implemented in spirals of increasing knowledge of the system that converge on the ultimate goal, each cycle closer than the previous. One can envision an open coil spring, with each loop being one cycle of the scientific method - PDCA, and each complete cycle indicating an increase in our knowledge of the system under study. This approach is based on the belief that our knowledge and skills are limited, but improving. Especially at the start of a project, key information may not be known; the
                                                                     PDCA scientific method
                                                                     &quot;provides feedback to justify our guesses (hypotheses) and increase our knowledge. Rather than enter "analysis paralysis" to get it perfect the first time, it is better to be approximately right than exactly wrong. With the improved knowledge, we may choose to refine or alter the goal (ideal state). Certainly, the PDCA approach can bring us closer to whatever goal we choose.</p>

                                                                     <p align="left">Rate of change, that is, rate of improvement, is a key competitive factor in today's world. PDCA allows for major "jumps" in performance ("breakthroughs" often desired in a Western approach), as well as Kaizen (frequent small improvements). In the United States a PDCA approach is usually associated with a sizable project involving numerous people's time, and thus managers want to see large "breakthrough" improvements to justify the effort expended. However, the scientific method and PDCA apply to all sorts of projects and improvement activities.</p>

                                                                 </div>
                                                                 <div class="card-footer">

                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                     <br>
                                                     <br>

                                                 </div>
                                                 <div class="card-footer">

                                                 </div>
                                             </div>
                                         </div>
                                     </div>-->



                                    <br>
                                    <br>

                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="carousel-item " align="center">
                        <div class="container" style="max-width:70%">
                            <br>
                            <br>

                        </div>
                    </div>

                    <a class="carousel-control-prev" href="#mycarousel" role="button" data-slide="prev">
                        <i class="fas fa-lg fa-chevron-left" style="color:black"></i>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#mycarousel" role="button" data-slide="next">
                        <i class="fas fa-lg fa-chevron-right" style="color:black"></i>

                        <span class="sr-only">Next</span>
                    </a>
                    <br>

                </div>
                <div class="card-footer customcolorwhite">
                    <p align="center">
                        <a href="/?slide=2" target="_blank" title="Click here to position the dashboard in a greater scheme, &quot;connecting the dots&quot; below"><img alt="" class="img-fluid" src="/images/canyouconnectthedotssmall.png" ></a></p>

                </div>
            </div>
        </div>
    </div>


    <p align="center">
        <img alt="" class="img-fluid" src="/images/cmltwoplus.png"><br><br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://pmway.hopto.org/itilfouroverview/index.html" target="_blank" title="need some ideas on how to do this?"><img alt="presentation icon" title="need a high level presenation of ideas on how to do the above?" src="/images/presentationicon.png"></a><br><!---&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/homeviewpdf/resources/itilfouroverview.pdf" target="_blank" title="view presentation in pdf"><img alt="presentation icon" title="view a summary of the above presentation in pdf" target src="/images/pdf-iconlarger.png"></a><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Accessible IT Strategy?--></p>




    <div align="center">
        <p align="center">Click presentation above for a high level overview and (if interested)<br>dive into the problems discussed below and solve them</p><!--<img alt="Dive In" title="Click the button below" class="img-fluid" src="/images/divein.png">-->
        <buttontoilet  class="wrap btn btn-primary align-center clearfix" type="button" data-toggle="collapse" data-target="#collapsevixen" aria-expanded="false" aria-controls="collapsevixen" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Wagile, Fragile, Aino&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(TPM & APM @ CML1)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;etc.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</buttontoilet>

        <div class="collapse" id="collapsevixen">
            <div class="container">
                <div class="card text-center">
                    <h5 class="card-header" align="center">The classic "monkey trap" helps to illustrate the problem of TPM and APM (Wagile, Fragile and Aino) etc., run as a flawed project management system; without sufficient understanding of the processes needed for successful application for quality at Capability Maturity Level 2+</h5>
                    <div class="card-body text-center">



                        <img alt="Monkey Trap" class="img-fluid" src="/images/Monkey-trap.png">

                        <p>I.e. No <a href="https://www.pmway.co.za/images/smart.jpg" class="img-fluid" target="_blank"><u>SMART requirements</u></a> identified and no accurate planning and monitoring and control, rather
                            extolling and pushing (driving heroic "just do it" behavior) to get more out of (trying to pull results) from the system than is possible (for resources / time allocated / clarity about requirements in respect of complicated solutions required).  This lack of clear and agreed <b>REQUIREMENTS (REQM)</b> and insufficient / inaccurate <b>PROJECT PLANNING (PP)</b> and <b>PROJECT MONITORING AND CONTROL (PMC)</b> means the team are operating at Capability Maturity Level 1.</p>
                        <br>

                        <button class="btn btn-primary align-center " type="button" data-toggle=
                            "collapse" data-target="#collapsepmboksafety" aria-expanded="false" aria-controls=
                                    "collapsepmboksafety">Safety Culture</button>

                        <div class="collapse" id="collapsepmboksafety">
                            <div class="container">
                                <div class="card text-center">
                                    <h5 class="card-header" align="center">Westrum's Typology of Organization Culture</h5>
                                    <div class="card-body text-center">

                                        <p>The book Accelerate refers to the Westrum Typology of Organizational Culture.<br>Accelerate (and ITIL etc.) state that Generative behavior on the right of the model is required for success in Agile and DevOps.<br>ITIL 4 calls this a "safety culture."  The "safety culture" is needed for teams to align for agility and find solutions which approach may not be understood or tolerated in the Bureucratic and Pathelogical Organizational Cultures of the model.</p>
                                        <br>
                                        <img alt="" class="img-fluid" src="/images/westrum.png"></p>
                                        <p>I.e. With Westrum in mind, Where would you pin your Oranizational Culture to be at?  Pathalogical, Bureaucratic or Open Minded and Generative.</p>
                                        <p align="left"><a href="/pin"  title="Click the pin to pin down your Organizational Culture.  I.e. what Organizational Culture do you have where you work!" ><img id="pinthree" class="img-fluid" style="z-index:100"  src="/images/pinlarge.png" alt="pin" ></a></p>
                                    </div>
                                    <div class="card-footer">

                                    </div>
                                </div>
                            </div>
                        </div>

                        <br>
                        <br>

                        <h3>The Monkey Trap above.  Do you really want to get free?</h3>
                        <p align="center">Along with <a href="https://www.pmway.co.za/images/smart.jpg" class="img-fluid" target="_blank"><u>SMART REQM's</u></a>: Find the CML2 processes <a href="/cmmidevdash" target=_blank"><u>Project Planning (PP) and Project Monitoring and Control (PMC)</u></a><br>Then<br><b><large>to set Scrum (Agile) free</large></b><br>it's simply<br><a href="https://www.pmway.co.za/images/scrumsafelymin.pdf" target="_blank"><u><b>ONE</b></u></a>&nbsp;&nbsp;<a href="cv/images/projects/project-21.jpg" target="_blank"><u><b>TWO</b></u></a>&nbsp;&nbsp;<a href="/images/horserace.jpg" target="_blank"><u><b>THREE</b></u></a></p>


                        <br>

                        <button class="btn btn-primary align-center clearfix" type="button" data-toggle=
                            "collapse" data-target="#collapsepmbokdis" aria-expanded="false" aria-controls=
                                    "collapsepmbokdis">The 7 Scrum Dysfunctions<br>and how to fix these</button>

                        <div class="collapse" id="collapsepmbokdis">
                            <div class="container">
                                <div class="card text-center">
                                    <h5 class="card-header" align="center">The Seven Scrum Dysfunctions and Root Cause Analysis</h5>
                                    <div class="card-body text-center">
                                        <p><a href="/scrumrca" target="_blank"><u>Click here</u></a> for the 7 Scrum dysfunctions (and using Root Cause Analysis (picking out the red beads explained below) etc.) give an idea of how to improve quality in the scrum (agile) project management system<br><i>- from Mastering Professional Scrum (2019) by Stephanie Ockerman and Simon Reindl.<br>Note:  Some links in this download are dependant on pmway.hopto.org being up.  I.e. see i on menu above.</i></p>
                                        <p>Run optimally a scrum team should be able to release working software in a 2 week sprint.  Then (demo's approved by the Product Owner) <b>they (the willing workers) have succeeded</b> and the goals for the team are reset during next sprint planning ceremony.  Scrum Master's role is to ensure a safety culture, productive team, process improvement from CM L2 (and CML2+ where possible) and good governance!
                                    </div>
                                    <div class="card-footer">


                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <br>
                        <button class="btn btn-primary align-center clearfix" type="button" data-toggle=
                            "collapse" data-target="#collapsetpmapm" aria-expanded="false" aria-controls=
                                    "collapsetpmapm">TPM vs APM<br>in 2 minutes</button>

                        <div class="collapse" id="collapsetpmapm">
                            <div class="container">
                                <div class="card text-center">
                                    <h5 class="card-header" align="center">TPM vs APM essence in 2 minutes</h5>
                                    <div class="card-body text-center">
                                        <p>Note that <a href="https://www.pmway.co.za/images/pmbok5gate.png" target="_blank"><u><b>Traditional Project Management</b></u></a> (TPM)'s <a href="https://www.pmway.co.za/images/pmbokepm.jpg" target="_blank"><u><b>24 planning processes</b></u></a> (just under half of the total processes for the PMBOK are planning processes!) are replaced in Agile Project Management (APM) / Scrum by User Stories!  These must be approved as delivered each sprint by the Product Owner or the team are operating at Capability Maturity Level 1.  And the minute a sprint is approved the team have finished that race successfully (they are operating at CM LEvel 2+)!</p>
                                    </div>
                                    <div class="card-footer">

                                    </div>
                                </div>
                            </div>
                        </div>

                        <br>
                        <br>

                        <p>Deming's Red Bead Experiment goes a long way to clearly illustrate the causes and solutions for the "monkey trap" problem above. <br>Find this experiment on YouTube (<i>or watch a PMWay selected video from YouTube below</i>).  Deming is the father of the Capability Maturity Model (CMMi) we are using <a href="/cmmidevdash" target=_blank"><u>here</u></a> which is the output of the <a href="https://www.sei.cmu.edu/" target="_blank"><u>Software Engineering Institute at Carnegie Mellon University</u></a>.</p>
                        <h3>Here is some more of Deming's wisdom:</h3>
                        <p align="center"><img class="img-fluid" src="/images/demingoneessence.jpg" alt="Deming Quotes" ><br><img class="img-fluid" src="/images/demingtwoessence.jpg" alt="Deming essence" ><br><img class="img-fluid" src="/images/demingthreeessence.jpg" alt="Deming essence" >
                    </div>



                    <div class="container" align="center">
                        <h5>The Red Bead Experiment</h5>
                        <video controls poster="/images/redbeadremoved.png" width="400" height="400" >
                            <source src="/ablelvids/redbeadexperiment/redbeadexperiment.mp4" type="video/mp4">

                        </video>


                        <!-------------------------------------------
                        BLADE
                        ------------------------------------------------>

                        <br>

                        <h5>Solution:<br>If your Scrum Sprints are not producing approved value then Executives<br><b>YOU NEED TO PICK OUT / REMOVE / EAT THE RED BEADS!</b></h5>
                        <p align="center"><img class="img-fluid" src="/images/eat.png" alt="Executive Action Team: EAT the Red Beads" ></p>
                        <p>I.e. install scrum (or other TPM or APM) processes (DevOps etc., processes) that allow the method to operate correctly / <br>remove noise and obstacles (exhortations etc.) that is getting in the way.<br>
                            and EAT (Executive Action Team) the Red Beads!</p>
                        <br>


                        <button class="btn btn-primary align-center clearfix" type="button" data-toggle=
                            "collapse" data-target="#collapsepmbokcm" aria-expanded="false" aria-controls=
                                    "collapsepmbokcm">FOR FUN:  CAPABILITY MATURITY LEVEL ONE</button>

                        <div class="collapse" id="collapsepmbokcm">
                            <div class="container">
                                <div class="card text-center">
                                    <h5 class="card-header" align="center">The image below explains the problems typically found at Capability Maturity Level 1.</h5>
                                    <div class="card-body text-center">
                                        <p align="center"><img class="img-fluid" src="/images/cml1.png" alt="For fun Capability Maturity Level 1" ></p>


                                        <br>



                                        <p>Time to up your game stats?</p>
                                        <p align="center"><img class="img-fluid" src="/images/cm.png" alt="How do you want to be remembered" ><br>The Capability Maturity model above is a simplified version <a href="/cmmidevdash" target=_blank"><u>of the one found here</u></a></p></div>
                                    <br>
                                    <br>
                                    <p align="left"><a href="/pin"  title="Click the pin to pin down to your Capability Maturity level.  Is it CM L1, L2, L3 etc.  I.e. what processes do you have control over. Bottom line: Focus on the process and not the outcome of the process!  If you cannot describe what you are doing as a process you do not know what you are doing!" ><img id="pintwo" class="img-fluid" style="z-index:100; position: absolute;" src="/images/pinlarge.png" alt="pin" >
                                        </a></p>

                                    <p align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i>Finally (just for fun) click the red pin now if you want to do the Capability Maturity self assessment.</i></p>


                                </div>

                            </div>
                        </div>
                    </div>



                    <br><br>



                    <div class="card-footer">

                    </div>
                </div>
            </div>
        </div>

        <br><br>

    </div>












    <!--

<div align="center">
<button class="btn btn-primary align-center clearfix" type="button" data-toggle=
"collapse" data-target="#collapsepinch" aria-expanded="false" aria-controls=
        "collapsepinch">small<br>screens
</button>

<div class="collapse" id="collapsepinch">
    <div class="container">
        <div class="card text-center">
<h5 class="card-header" align="center">Use two fingers to pinch or stretch to resize smaller screens</h5>
            <div class="card-body text-center">

<p>This web site is designed for larger screens (Desktops or Laptops).<br>
Using newer devices with a small screen (Tablet or Cell Phone) you can expand or shrink the screen with your fingers as
illustrated in the
image below.<br>

<img alt="" class="img-fluid" src="/images/pinch.png" title="You can stretch the detail in smaller screens if done above or below the carousel" ></p>

            </div>
            <div class="card-footer">

            </div>
        </div>
    </div>
</div>








</div> -->
                {{--                <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>--}}
                {{--                <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>--}}
                {{--                <script src="{{ asset('bootstrapfouroneone/js/popper.min.js') }}"></script>--}}
                {{--                <script src="{{ asset('bootstrapfouroneone/js/bootstrap.js') }}"></script>--}}



                <script src="{{ asset('bootstrapfouroneone/jquery/jquery.js') }}"></script>
                <script src="{{ asset('bootstrapfouroneone/jqueryui/jquery-ui.js') }}"></script>
                <script src="{{ asset('bootstrapfouroneone/js/popper.min.js') }}"></script>
                <script src="{{ asset('bootstrapfouroneone/js/bootstrap.js') }}"></script>


                <script>
                    $(document).ready(function() {

                        function qs(key) {
                            key = key.replace(/[*+?^$.\[\]{}()|\\\/]/g, "\\$&"); // escape RegEx meta chars
                            var match = location.search.match(new RegExp("[?&]" + key + "=([^&]+)(&|$)"));
                            var slide = match && decodeURIComponent(match[1].replace(/\+/g, " "));

                            if (Math.floor(slide) == slide && $.isNumeric(slide)) {

                                $('#collapseopencarousel').collapse('show');
                                $('html, body').animate({
                                    scrollTop: $("#collapseopencarousel").offset().top
                                }, 1000);



                                return parseInt(slide);
                            }
                            else
                                return 0;
                        }


                        $('#mycarousel').carousel((qs('slide')) - 1);
                        $("#pin, #pintwo, #steps").draggable({
                            revert: "false"
                        });
                        $("#target, #targetforladder").droppable({
                            greedy: true,
                            tolerance: 'touch',
                            drop: function(event, ui) {
                                ui.draggable.draggable('option', 'revert', 'true');
                                $(this).css({
                                    'background-color': '#94be0f',
                                    'border': '3px solid navy',
                                    'display': 'inline-block'
                                })
                                alert("Awesome! Now move the pin out of the way and click the target underneath to see the processes your have mastered!   Remember Demings advice:  Work on the process, not the outcome of the process! ");

                            }
                        });

                    });
                </script>





            </div>  <!-----NB sticky-footer---->


    <div class="container text-center">
        <!--<p>This may not be needed</p>-->
    </div>
    </div>
    <footer id="sticky-footer" class="py-4 bg-dark text-white-50">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-6">

                    <p style="text-align:center" class="text-white">Project &amp; Process Management
                        <span lang="en-za">Best Practice</span>

                        <br>at <!--<a href="/cmmi" title="Where are you at?  Click here for PMWay's 1 minute self assessment challenge.  We dare you to take the pin test now!" >-->CM Level 2<!--</a>--> and above</p>
                    <p align="center"><!--<a href="/gamestats">-->
                        <!--<img alt="Up Stat or Down Stat" class="img-fluid" src="/images/devopsimagemedium.png" title="How are your game stats?">--><!--</a>-->
                        <a href="/gamestats" target="_blanik"><img alt="Up Stat or Down Stat" class="img-fluid" src="/images/devopsimagemedium.png" onmouseover="this.src='/images/devops2.gif'" onmouseout="this.src='/images/devopsimagemedium.png'" title="How are your game stats?  Click here for more"></a></p>




                    <p style="text-align:center" class="text-white">underpinned by <!--<a href="/home/itil">-->ITIL<!--</a>--></p>

                </div>
                <div class="col-md-3"></div>
                <div class="col-md-3 text-right small align-self-end text-white">2009 PMWay<br><small>People Process Technology Governance Execution</small></div>
            </div>
        </div>

    </footer>


{{--            <div id="draggable" style="width: 100px; height: 100px; background-color: red; position: relative;">Drag me</div>--}}

{{--            <script>--}}
{{--                $(document).ready(function() {--}}
{{--                    $("#draggable").draggable();--}}
{{--                });--}}
{{--            </script>--}}

        </div>

    </body>
</html>
