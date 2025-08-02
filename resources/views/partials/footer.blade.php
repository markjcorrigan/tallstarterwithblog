{{--<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>--}}
{{--<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>--}}
{{--<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>--}}
{{--<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>--}}

{{--<script src="{{ asset('js/jquery.js') }}"></script>--}}
{{--<script src="{{ asset('js/jquery-ui.min.js') }}"></script>--}}
{{--<script src="https://cdn.jsdelivr.net/npm/@popperjs/core/dist/umd/popper.min.js"></script>--}}
{{--<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>--}}


{{--<footer class="footer py-4 bg-dark text-white-50">--}}
{{--    <footer class="footer py-4 bg-dark text-white-50">--}}
<div class="container text-center">
    <div class="row">
        <div class="col-md-6">
            @if(isset($siteSettings))
                <p>&copy; {{ $siteSettings->footer_note }}</p>
            @endif
            <p style="text-align:center" class="text-white">Project &amp; Process Management <span lang="en-za">Best Practice</span> <br>at CM Level 2 and above</p>
            <p align="center">
                <a href="/gamestats" target="_blank">
                    <img alt="Up Stat or Down Stat" class="img-fluid" src="{{ asset('images/devopsimagemedium.png') }}" onmouseover="this.src='{{ asset('images/devops2.gif') }}'" onmouseout="this.src='{{ asset('images/devopsimagemedium.png') }}'" title="How are your game stats? Click here for more">
                </a>
            </p>
            <p style="text-align:center" class="text-white">underpinned by ITIL</p>
        </div>
        <div class="col-md-3"></div>
        <div class="col-md-3 text-right small align-self-end text-white">2009 PMWay<br><small>People Process Technology Governance Execution</small></div>
    </div>

</div>

{{--</footer>--}}

