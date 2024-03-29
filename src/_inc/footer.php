
                </div>
            </div>
        </section>

        <footer>
            <div class="container">
                <nav>
                    <a href="/">DAH5 Home</a>
                    <a href="/about">About DAH5</a>
                    <a href="/analogueradio">Analogue Radio</a>
                    <a href="/staticphp">StaticPHP</a>
                    <a href="/staticly">Staticly</a>
                    <a href="/a-z">A-Z</a>
                </nav>
                
                <p>Unless otherwise stated, website and content is by <a href="/davidhunter">David Hunter</a>.</p>

                <script type="text/javascript">
                    document.write( '<br><a href="javascript: toggle_color_scheme();">Toggle Color Scheme</a>' );
                    function toggle_color_scheme()
                    {
                        document.body.classList.toggle( 'toggle-color-scheme' );
                    }
                </script>
            </div>
        </footer>
        
        <?php if( isset( $metadata['footer_scripts'] ) ): ?>
            <?php foreach( explode( "::", $metadata['footer_scripts'] ) as $script ): ?>
                <script type="text/javascript" src="<?php echo $script; ?>"></script>
            <?php endforeach; ?>
        <?php endif; ?>
    </body>
</html>
