<!-- cut here for php includes footer -->
        <footer>
<!-- begin footer navigation -->
            <div id="secondary">
                <nav id="foot-nav">
                    <ul id="secondary-nav">
                        <li>
                            <a class="foot-nav" href="home">Home</a>
                        </li>
                        <li>
                            <a class="foot-nav" href="blog">Blog</a>
                        </li>
                        <li>
                            <a class="foot-nav" href="about">About</a>
                                <ul>
                                    <li>
                                        <a class="sub-foot-nav" href="about/sub-page-one">Sub-page One</a>
                                    </li>
                                    <li>
                                        <a class="sub-foot-nav" href="about/sub-page-two">Sub-page Two</a>
                                    </li><!-- There are two absolutes in this universe....We're all gonna die and FARTS ARE FUNNY. -->
                                    <li>
                                        <a class="sub-foot-nav" href="about/sub-page-three">Sub-page Three</a>
                                    </li>
                                </ul>
                        </li>
                        <li>
                            <a class="foot-nav" href="contact">Contact</a>
                        </li>
                    </ul>
                </nav>
            </div>
<!-- end footer navigation -->
            <p class="copy">
                <small>&copy;<?php echo date('Y'); ?> E. Boyd, <a href="http://3tabbies.com" target="_blank">3 Tabbies</a>, All Rights Reserved. </small>
            </p>
        </footer>
<?php wp_footer(); ?>
    </body>
</html>
