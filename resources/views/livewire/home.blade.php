<endelement>
    <div class="container" align="center">
        <br>
        <div class="rTableBody">
            <div class="rTableRow">
                <div class="rTableCell"></div>
                <!--<div class="rTableCell"><img class="img-fluid" src="/images/howdoyoudown.png" title="Have you documented and are you managing and optimizing your value chains in your Service Portfolios?"></div>-->
                <div class="rTableCell" align="center">
                    <img class="img-fluid" src="/images/howdoyoudown.png" title="Have you documented and are you managing and optimizing your value chains in your Service Portfolios?"
                         onmouseover="this.src='/images/itil4game.png'" onmouseout="this.src='/images/howdoyoudown.png'">
                </div>
                <!--<div class="rTableCell"><img class="img-fluid" src="/images/howdoyou.png" onmouseover="this.src='/images/howdoyoudown.png'" onmouseout="this.src='/images/howdoyou.png'" title=""></div>-->
                <div class="rTableCell"></div>
            </div>
        </div>
        <br>
        <button class="btn align-center clearfix" type="button" data-toggle="collapse" data-target="#collapseperformancestats111" aria-expanded="false" aria-controls="collapseperformancestats">
            <div class="rTable">
                <div class="rTableBody">
                    <div class="rTableRow">
                        <div class="rTableCell"></div>
                        <div class="rTableCell" align="center"><img class="img-fluid" src="/images/itilvaluestreams.png"></div>
                        <div class="rTableCell"></div>
                    </div>
                </div>
            </div>
        </button>
        <br><br>
        <div class="text-center">
            <a href="/laws" target="_blank">
                <img class="img-fluid mx-auto d-block" src="/images/itil4gp2.png" onmouseover="this.src='/images/itil4gp1.png'" onmouseout="this.src='/images/itil4gp2.png'" title="Hover for more on ITIL 4 and their Guiding Principles from a Stepwise Perspective or click for the importance of Millars Law">
            </a>
        </div>
        <br>
        <div class="text-center">
            <button class="btn mx-auto d-block" type="button" data-toggle="collapse" data-target="#collapsecapmatlvl11111" aria-expanded="false" aria-controls="collapsecapmatlvl">
                <div class="rTableBody">
                    <div class="rTableRow d-flex justify-content-center">
                        <div class="rTableCell">
                            <a href="/pin" title="Move the pin through the Capability Maturity Levels Improvement gateway and hit the target. Bottom line: According to Deming: Focus on the process and not the outcome of the process! If you cannot describe what you are doing as a process you do not know what you are doing! ">
                                <img id="pin" class="img-fluid" style="z-index:100" src="/images/pinsmaller.png" alt="pin">
                            </a>
                        </div>
                        <div class="rTableCell">
                            <img alt="" title="Log on and click the gateway to see why Capability Maturity Level 2 is where you have to be in order to up your game stats and also to stop the chaos. CM Level 2 is the firm base needed for CM L3, 4 and 5!" class="img-fluid" src="/images/gatewayflat.png" onmouseover="this.src='/images/gateway.png'" onmouseout="this.src='/images/gatewayflat.png'">
                        </div>
                        <div class="rTableCell">
                            <a href="/cmmi">
                                <img id="target" class="img-fluid" title="Click the target for the project management and other processes to maintain and improve up to Capability Maturity Level 5" src="/images/targetsmall.png" alt="target">
                            </a>
                        </div>
                    </div>
                </div>
            </button>
        </div>

        <p align="center">
                    <img alt="" class="img-fluid" src="/images/cmltwoplus.png"><br><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="itilfouroverview/index.html" target="_blank" title="need some ideas on how to do this?">
                        <img alt="presentation icon" title="need a high level presenation of ideas on how to do the above?" src="/images/presentationicon.png">
</a><br>
                </p>
                <div align="center">
                    <p align="center">Click presentation above for a high level overview and (if interested)<br>dive into the problems discussed below and solve them</p>


                </div>



        <script>
            $(document).ready(function () {

                $("#pin").draggable({
                    revert: "false"
                });
                $("#target").droppable({
                    greedy: true,
                    tolerance: 'touch',
                    drop: function (event, ui) {
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


    </endelement>


