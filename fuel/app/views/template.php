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
        <nav id="toc" class="toc">
            <h1>Table of Contents</h1>
            <ul>
                <li>
                    <a href="#what">What is Pattern?</a>
                </li>
                <li>
                    <a href="#preface">How to use Pattern</a>
                </li>
                <li>
                    <a href="#creating-documents">Creating Documents</a>
                </li>
                <li>
                    <a href="#project-process">Project Process</a>
                </li>
                <li>
                    <a href="#chapter-1">Chapter I – Objectives &amp; Scope</a>
                    <ul>
                        <li><a href="#chapter-1-purpose">1. Purpose</a></li>
                        <li><a href="#chapter-1-objectives">2. Objectives</a></li>
                        <li><a href="#chapter-1-supplied">3. Supplied</a></li>
                        <li><a href="#chapter-1-deliverables">4. Deliverables</a></li>
                        <li><a href="#chapter-1-people">5. People</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#chapter-2">Chapter II – UX &amp; Design</a>
                    <ul>
                        <li><a href="#chapter-2-user-experience">User Experience</a></li>
                        <li><a href="#chapter-2-creative-brief">Creative Brief</a></li>
                        <li><a href="#chapter-2-design-process">Design Process</a></li>
                        <li><a href="#chapter-2-typeface">Typeface</a></li>
                        <li><a href="#chapter-2-provided-assets">Provided Assets</a></li>
                        <li><a href="#chapter-2-copy-style">Brand Guidelines and Copy Style</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#chapter-3">Chapter III – Functional Specification</a>
                    <ul>
                        <li><a href="#chapter-3-navigation">Navigation</a></li>
                        <li><a href="#chapter-3-pages">Pages</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#chapter-4">Chapter IV – Technical Specification</a>
                    <ul>
                        <li><a href="#chapter-4-server">Server</a></li>
                        <li><a href="#chapter-4-client-browser">Client Browser</a></li>
                        <li><a href="#chapter-4-application">Application</a></li>
                        <li><a href="#chapter-4-third-party">Third Party Services</a></li>
                        <li><a href="#chapter-4-domains-dns">Domains &amp; DNS</a></li>
                        <li><a href="#chapter-4-accessibility">Accessibility</a></li>
                        <li><a href="#chapter-4-backups">Backups</a></li>
                        <li><a href="#chapter-4-analytics">Analytics</a></li>
                        <li><a href="#chapter-4-suppliers">Recommended Suppliers</a></li>
                        <li><a href="#chapter-4-code-repo">Code Repository</a></li>
                        <li><a href="#chapter-4-bug-reporting">Bug Reporting</a></li>
                        <li><a href="#chapter-4-version-control">Version Control</a></li>
                        <li><a href="#chapter-4-environments">Environments</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#chapter-5">Chapter V – Quality Assurance</a>
                    <ul>
                        <li><a href="#chapter-5-functional-testing">Functional Testing</a></li>
                        <li><a href="#chapter-5-user-acceptance">User Acceptance Testing</a></li>
                        <li><a href="#chapter-5-devices">Devices</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#chapter-6">Chapter VI – Go Live</a>
                    <ul>
                        <li><a href="#chapter-6-analytics">Analytics</a></li>
                        <li><a href="#chapter-6-server">Server</a></li>
                        <li><a href="#chapter-6-ssl">SSL Certificates</a></li>
                        <li><a href="#chapter-6-dns">DNS</a></li>
                        <li><a href="#chapter-6-sprint">Sprint</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#chapter-7">Chapter VII – Maintenance</a>
                    <ul>
                        <li><a href="#chapter-7-server">Server</a></li>
                        <li><a href="#chapter-7-backups">Backups</a></li>
                        <li><a href="#chapter-7-application">Application</a></li>
                        <li><a href="#chapter-7-third-party-services">Third Party Services</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#chapter-8">Chapter VIII – Legal</a>
                    <ul>
                        <li><a href="#chapter-8-statement-of-work">Statement of Work</a></li>
                        <li><a href="#chapter-8-contract-for-services">Contract for Services</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#chapter-9">Chapter IX – Analysis</a>
                    <ul>
                        <li><a href="#chapter-9-evaluation">Internal Evaluation</a></li>
                        <li><a href="#chapter-9-client-feedback">Client Feedback</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
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
