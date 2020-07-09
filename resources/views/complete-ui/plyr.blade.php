<div class="ui-block">
    <h3 class="ui-block-heading">Plyr</h3>
    <a target="_blank" href="https://github.com/Selz/plyr" class="ui-block-description">https://github.com/Selz/plyr</a>

    <samp class="cui-example-code-static">
        &lt;link rel="stylesheet" href="&#123;&#123; mix('/vendor/libs/plyr/plyr.css') &#125;&#125;"&gt;
        &lt;script src="&#123;&#123; mix('/vendor/libs/plyr/plyr.js') &#125;&#125;"&gt;&lt;/script&gt;
    </samp>

    <h4 class="ui-block-heading">Examples</h4>

    <div class="cui-example cui-example-vertical-spacing">
        <div id="plyr-video-player" data-plyr-provider="youtube" data-plyr-embed-id="bTqVqk7FSmY"></div>

        <audio id="plyr-audio-player" controls>
            <source src="/audio/Water_Lily.mp3" type="audio/mp3">
        </audio>

        <!-- Javascript -->
        <script>
            $(function() {
                new Plyr('#plyr-video-player');
                new Plyr('#plyr-audio-player');
            });
        </script>
        <!-- / Javascript -->
    </div>
</div>
