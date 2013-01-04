<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Architect Pattern</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="<?php echo Uri::create('css/normalize.css'); ?>">
        <link rel="stylesheet" href="<?php echo Uri::create('css/main.css'); ?>">
        <script type="text/javascript" src="//use.typekit.net/mta1hta.js"></script>
        <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
    </head>
    <body>
        <header class="header">
            <h1><a href="<?php echo Uri::create('/'); ?>">Architect Pattern</a></h1>
            <p>Process and best practice for making things awesome.</p>
            <!-- <h2>Verba volant, scripta manent</h2>
            <p>‘Spoken words fly away, written words stay’</p> -->
        </header>
<?php echo $body; ?>
<!--
        <article id="document" class="document">
            <section id="chapter-4" class="chapter">
                <h1>Chapter IV<br />Technical Specification</h1>
                <p>You will need to consult with the Lead Developer for most of these decisions. If a section does not apply, do not skip it out, list it and explain why it does not apply.</p>
                <section id="chapter-4-server">
                    <h1>Server</h1>
                    <h2 id="chapter-1-server-2">Architect Trusted Shared Hosting</h2>
                    <p><a href="#chapter-1-server-2" class="marker">4.1.2</a>This is our new primary method of hosting. It gives us flexibility and control over the server, but still ensures it’s affordable for all customers.</p>
                    <p>Here’s what you can use to sell it:</p>
                    <blockquote class="example example-copy">
                        <p>Architect Trusted Shared Hosting gives all the benefits of Cloud Hosting, ensuring stability and scalability, but with the affordability of shared hosting. However unlike other shared hosting solutions, we only let code on the servers that we’ve written or vetted. We don’t let third parties access the server and we keep a close eye on availability. Also unlike most other shared hosting, ours includes backups.</p>
                    </blockquote>
                    <h3>Prices</h3>
                    <p>Instead of the traditional packages based on space and bandwidth, we charge for amount of resource and power.</p>
                    <table>
                        <thead>
                            <tr>
                                <th>RAM</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>128MB</td>
                            </tr>
                        </tbody>
                    </table>
                </section>
                <section id="chapter-4-client-browser">
                    <h1>Client Browser</h1>
                    <p>List the browsers that the site is going to be designed for.</p>
                    <blockquote class="example example-copy">
                        <p>Note that some modern features will only work on modern browsers. We’ll let you know which features won’t work across all browsers and what we’re going to do as an alternative.</p>
                    </blockquote>
                    <p>Here’s a standard set of browsers we can test for. We recommend you only mention the ones we’ve marked a tick against, but the others are available if the client specifically requests them.</p>
                    <table>
                        <thead>
                            <tr>
                                <th>Browser</th>
                                <th>Operating System</th>
                                <th>Recommended</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Internet Explorer 6</td>
                                <td>Windows XP</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>Internet Explorer 7</td>
                                <td>Windows XP</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>Internet Explorer 8</td>
                                <td>Windows XP</td>
                                <td>&#10003;</td>
                            </tr>
                            <tr>
                                <td>Internet Explorer 9</td>
                                <td>Windows 7</td>
                                <td>&#10003;</td>
                            </tr>
                            <tr>
                                <td>Internet Explorer 10</td>
                                <td>Windows 8</td>
                                <td>&#10003;</td>
                            </tr>
                            <tr>
                                <td>Safari 5</td>
                                <td>OS X Snow Leopard</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>Safari 6</td>
                                <td>OS X Mountain Lion</td>
                                <td>&#10003;</td>
                            </tr>
                            <tr>
                                <td>Firefox (latest)</td>
                                <td>Windows XP</td>
                                <td>&#10003;</td>
                            </tr>
                            <tr>
                                <td>Chrome (latest)</td>
                                <td>Windows XP</td>
                                <td>&#10003;</td>
                            </tr>
                            <tr>
                                <td>Chrome (latest)</td>
                                <td>OS X Mountain Lion</td>
                                <td>&#10003;</td>
                            </tr>
                            <tr>
                                <td>Chrome (latest)</td>
                                <td>Android 4</td>
                                <td>&#10003;</td>
                            </tr>
                            <tr>
                                <td>Browser</td>
                                <td>Android 4</td>
                                <td>&#10003;</td>
                            </tr>
                            <tr>
                                <td>Safari</td>
                                <td>iOS 6 (iPad)</td>
                                <td>&#10003;</td>
                            </tr>
                            <tr>
                                <td>Safari</td>
                                <td>iOS 6 (iPhone/iPod touch)</td>
                                <td>&#10003;</td>
                            </tr>
                        </tbody>
                    </table>
                </section>
                <section id="chapter-4-application">
                    <h1>Application</h1>
                </section>
                <section id="chapter-4-third-party">
                    <h1>Third Party Services</h1>
                </section>
                <section id="chapter-4-domains-dns">
                    <h1>Domains &amp; DNS</h1>
                </section>
                <section id="chapter-4-accessibility">
                    <h1>Accessibility</h1>
                </section>
                <section id="chapter-4-backups">
                    <h1>Backups</h1>
                </section>
                <section id="chapter-4-analytics">
                    <h1>Analytics</h1>
                </section>
                <section id="chapter-4-suppliers">
                    <h1>Recommended Suppliers</h1>
                </section>
                <section id="chapter-4-code-repo">
                    <h1>Code Repository</h1>
                </section>
                <section id="chapter-4-bug-reporting">
                    <h1>Bug Reporting</h1>
                </section>
                <section id="chapter-4-version-control">
                    <h1>Version Control</h1>
                </section>
                <section id="chapter-4-environments">
                    <h1>Environments</h1>
                </section>
            </section>
        </article>
-->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php echo Uri::create("js/vendor/jquery-1.8.3.min.js"); ?>"><\/script>')</script>
        <script src="<?php echo Uri::create('js/plugins.js'); ?>"></script>
        <script src="<?php echo Uri::create('js/main.js'); ?>"></script>
    </body>
</html>
