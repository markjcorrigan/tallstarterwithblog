{{--<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>--}}
{{--<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>--}}
{{--<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>--}}
{{--<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>--}}

{{--<script src="{{ asset('js/jquery.js') }}"></script>--}}
{{--<script src="{{ asset('js/jquery-ui.min.js') }}"></script>--}}
{{--<script src="https://cdn.jsdelivr.net/npm/@popperjs/core/dist/umd/popper.min.js"></script>--}}
{{--<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>--}}


{{--<style>--}}
{{--.footer {--}}
{{--/*position: absolute;*/--}}
{{--bottom: 0;--}}
{{--left: 0;--}}
{{--right: 0;--}}
{{--width: 100%;--}}
{{--padding-bottom: 100px; /* Add some padding to the bottom */--}}
{{--}--}}
{{--</style>--}}

<footer>
    <div class="flex flex-col w-full justify-end text-center bg-dark py-10" style="background-color: #212529 !important; margin: 0; padding-left: 0; padding-right: 0;">

    <div class="w-full mx-0 px-0">
            <div class="row mx-0">
                <div class="col-md-6">


            <p style="text-align:center" class="text-white">Project &amp; Process Management <span lang="en-za">Best Practice</span> <br>at CM Level 2 and above</p>
            <p align="center">
                <a href="/gamestats" target="_blank">
                    <img alt="Up Stat or Down Stat" class="img-fluid" src="{{ asset('images/devopsimagemedium.png') }}" onmouseover="this.src='{{ asset('images/devops2.gif') }}'" onmouseout="this.src='{{ asset('images/devopsimagemedium.png') }}'" title="How are your game stats? Click here for more">
                </a>
            </p>
            <p style="text-align:center" class="text-white">underpinned by ITIL</p>
                </div>
                <div class="col-md-3"></div>
                <div class="col-md-3 text-right small align-self-end text-white pe-8">

                @if(isset($siteSettings))
                <p>&copy; 2009 {{ $siteSettings->footer_note }}</p>
            @endif<br><small>People Process Technology Governance Execution</small>
                </div>
            </div>
        </div>
    </div>



</footer>

