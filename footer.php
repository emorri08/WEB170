<!-- cut here for php includes footer -->
        <footer>
<!-- begin footer navigation -->
            <nav id="foot-nav">
                <ul id="secondary-nav">
                    <li>
                        <a class="nav" href="home">Home</a>
                    </li>
                    <li>
                        <a class="nav" href="about">About</a>
                            <ul>
                                <li>
                                    <a class="nav" href="about/sub-page-one">Sub-page One</a>
                                </li>
                                <li>
                                    <a class="nav" href="about/sub-page-two">Sub-page Two</a>
                                </li><!-- There are two absolutes in this universe....We're all gonna die and FARTS ARE FUNNY. -->
                                <li>
                                    <a class="nav" href="about/sub-page-three">Sub-page Three</a>
                                </li>
                            </ul>
                    </li>
                    <li>
                        <a class="nav" href="#">Blog</a>
                    </li>
                    <li>
                        <a class="nav" href="#">Contact</a>
                    </li>
                </ul>
            </nav>
<!-- end footer navigation -->
            <p class="copy">
                <small>&copy;<?php echo date('Y'); ?> E. Boyd, <a href="http://3tabbies.com" target="_blank">3 Tabbies</a>, All Rights Reserved. </small>
            </p>
        </footer>
<?php wp_footer(); ?>
    </body>
</html>
