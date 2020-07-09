<div class="ui-block">
    <h3 class="ui-block-heading">BlockUI</h3>
    <a target="_blank" href="http://malsup.com/jquery/block/" class="ui-block-description">http://malsup.com/jquery/block/</a>

    <samp class="cui-example-code-static">
        &lt;script src="&#123;&#123; mix('/vendor/libs/block-ui/block-ui.js') &#125;&#125;"&gt;&lt;/script&gt;
    </samp>

    <h4 class="ui-block-heading">Examples</h4>

    <div class="cui-example">
        <div class="card mb-3" id="block-ui-element-example">
            <div class="card-header">
                Card title
            </div>
            <div class="card-body">
                <p>
                    Lorem ipsum dolor sit amet, an vel affert soleat possim. Usu meis
                    neglegentur ut, oporteat salutandi dignissim at mea. Pericula erroribus
                    quaerendum ex duo, his autem accusamus ad, alienum detracto rationibus
                    vis et. No est volumus ocurreret vituperata.
                </p>
                <p>
                    At pri facete recteque, eos omittam hendrerit maiestatis et. Ut aliquip
                    regione pericula mea, sed te ornatus vivendum, tritani persius atomorum
                    id pro. Laoreet epicurei ei duo. Ad nulla senserit sit, has ne prima option.
                </p>
            </div>
        </div>

        <button type="button" class="btn btn-default" id="block-ui-block-page">Block page</button>
        <button type="button" class="btn btn-default" id="block-ui-block-element">Block element</button>
        <button type="button" class="btn btn-default" id="block-ui-unblock-element">Unblock element</button>

        <!-- Javascript -->
        <script>
            $(function() {
                var overlayBg = themeSettings.isDarkStyle()
                    ? '#22252B'
                    : '#fff';

                $('#block-ui-block-page').click(function() {
                    $.blockUI({
                        message: '<div class="sk-fold sk-primary mx-auto mb-4"><div class="sk-fold-cube"></div><div class="sk-fold-cube"></div><div class="sk-fold-cube"></div><div class="sk-fold-cube"></div></div><h5 class="text-body">LOADING...</h5>',
                        css: {
                            backgroundColor: 'transparent',
                            border: '0',
                            zIndex: 9999999
                        },
                        overlayCSS:  {
                            backgroundColor: overlayBg,
                            opacity: 0.8,
                            zIndex: 9999990
                        }
                    });

                    setTimeout(function() {
                        $.unblockUI();
                    }, 5000);
                });

                $('#block-ui-block-element').click(function() {
                    $('#block-ui-element-example').block({
                        message: '<div class="sk-wave sk-primary mx-auto"><div class="sk-wave-rect"></div><div class="sk-wave-rect"></div><div class="sk-wave-rect"></div><div class="sk-wave-rect"></div><div class="sk-wave-rect"></div></div>',
                        css: {
                            backgroundColor: 'transparent',
                            border: '0'
                        },
                        overlayCSS:  {
                            backgroundColor: overlayBg,
                            opacity: 0.8
                        }
                    });
                });

                $('#block-ui-unblock-element').click(function() {
                    $('#block-ui-element-example').unblock();
                });
            });
        </script>
        <!-- / Javascript -->
    </div>
</div>
