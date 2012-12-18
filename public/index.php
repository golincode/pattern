<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Architect</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script type="text/javascript" src="//use.typekit.net/mta1hta.js"></script>
        <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
    </head>
    <body>
        <header class="header">
            <h1>Architect Pattern</h1>
            <p>Process and best practice for making things awesome.</p>
            <h2>Verba volant, scripta manent</h2>
            <p>‘Spoken words fly away, written words stay’</p>
        </header>
        <nav id="toc" class="toc">
            <h1>Table of Contents</h1>
            <ul>
                <li>
                    <a href="#preface">How to use this document</a>
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
            <section id="preface" class="chapter">
                <h1>How to use this document</h1>
                <p>Through the document examples are given, which’ll look similar to this:</p>
                <blockquote class="example example-sample">
                    <p>The Hub makes it easier for market managers to use the correct assets in campaigns.</p>
                </blockquote>
                <p>There is also copy that is safe to use in any document you present to clients, which is indicated by the green stripe:</p>
                <blockquote class="example example-copy">
                    <p>Architect digital design and build agency, London &amp; San Francisco.</p>
                </blockquote>
            </section>
            <section id="creating-documents" class="chapter">
                <h1>Creating Documents</h1>
                <p>You can manage the pattern however suits your way of working and the style of project. You can either put everything in the pattern into one document, or keep them as separate working documents.</p>
                <p>It is advisable to use version control with dates (rather than just dates) for documents. Keep your master document undated (<em>eg</em> ‘Functional Specification.indd’) then create a PDF for each edition that you publish using version control.</p>
                <p>Using version control rather than dates has various advantages:</p>
                <ul>
                    <li>Better understanding of what has changed between versions</li>
                    <li>Less likely to over-write other files</li>
                    <li>ISO9001 verified</li>
                    <li>More than one file can be created per day</li>
                    <li>Easier to search for</li>
                </ul>
                <h2 id="creating-documents-1">What is version control?</h2>
                <p><a href="#creating-documents-1" class="marker">0.2.1</a>A two- or three-part number, <em>eg</em> 1.5.2, which is major.minor.revision.</p>
                <ul>
                    <li>The first part is called the <strong>major</strong> version is will likely never change while you’re working on a new project, unless you need to start that document from scratch. However, when you re-visit a project and move into the next phase, that is likely to then start with the next major version.</li>
                    <li>The second part is the <strong>minor</strong> version. This is normally when you’ve put something new into that document, or have re-written an entire part. If you’ve moved something around substantially that would also cause to knock up a minor version.</li>
                    <li>The third (and optional) part is the <strong>revision</strong> number. This is used for tweaks that you might make after you’ve published a minor version.</li>
                </ul>
                <p>Numbers don’t automatically round up when you get to 9. For example after 1.5.9 is 1.5.10, and after 1.6.25 might be 1.7.0. Think of each part as it’s own number.</p>
                <p>An ‘Objectives &amp; Scope’ document starts as 1.0.0, but with missing elements. Once they’ve been added in, 1.1.0 is created. A few amendments need to be made after a meeting, so they are made and 1.1.1 is created. This is sent to the client, which we receive feedback on and make more amendments bringing it up to 1.2.1.</p>
                <p>After this scenario, the following files will exist:</p>
                <ul>
                    <li>Objectives &amp; Scope.indd</li>
                    <li>Objectives &amp; Scope 1.0.0.pdf</li>
                    <li>Objectives &amp; Scope 1.1.0.pdf</li>
                    <li>Objectives &amp; Scope 1.1.1.pdf</li>
                    <li>Objectives &amp; Scope 1.2.1.pdf</li>
                </ul>
                <p>If you still prefer to see the date in the filename, please put this after the version number.</p>
            </section>
            <section id="project-process" class="chapter">
                <h1>Project Process</h1>
                <ol>
                    <li>Pitch</li>
                    <li>Scoping</li>
                    <li>Research</li>
                    <li>Sign off</li>
                    <li>Design</li>
                    <li>Build &amp; develop</li>
                    <li>Test</li>
                    <li>Go Live</li>
                    <li>Evaluate</li>
                    <li>Maintain</li>
                </ol>
            </section>
            <section id="chapter-1" class="chapter">
                <h1>Chapter I<br />Objectives &amp; Scope</h1>
                <p>The first thing to outline is the point of the project, why the client wants it, who’s going to do it and what they’re trying to achieve. Some of these points are painfully obvious, but this document should help anybody that hasn’t ever seen the project before get right up to speed.</p>
                <section id="chapter-1-purpose">
                    <h1>1. Purpose</h1>
                    <p id="chapter-1-purpose-1"><a href="#chapter-1-purpose-1" class="marker">1.1.1</a>Describe as simply as possibly the purpose of this project.</p>
                    <blockquote class="example example-sample">
                        <p>The Hub makes it easier for market managers to use the correct assets in campaigns.</p>
                    </blockquote>
                    <blockquote class="example example-sample">
                        <p>The iPod allows people to listen to music from their computers on the go.</p>
                    </blockquote>
                </section>
                <section id="chapter-1-objectives">
                    <h1>2. Objectives</h1>
                    <p id="chapter-1-objectives-1"><a href="#chapter-1-objectives-1" class="marker">1.2.1</a>Outline the objectives as individual points. For simple projects there is likely only to be a few points. Do not offer any conclusions or solutions at this point, merely outline what we’re trying to achieve.</p>
                    <blockquote class="example example-sample">
                        <ul>
                            <li>Users should add products to a basket.</li>
                            <li>Users should then checkout the contents of their basket.</li>
                            <li><em>etc</em></li>
                        </ul>
                    </blockquote>
                    <blockquote class="example example-sample">
                        <ul>
                            <li>Allow users to transfer songs from their computer to the iPod.</li>
                            <li>Allow users to find songs on the iPod using different categories.</li>
                            <li><em>etc</em></li>
                        </ul>
                    </blockquote>
                </section>
                <section id="chapter-1-supplied">
                    <h1>3. Supplied</h1>
                    <p id="chapter-1-supplied-1"><a href="#chapter-1-supplied-1" class="marker">1.3.1</a>It is likely that copy, assets or other content is provided by the client. List what you’re expecting the client to provide.</p>
                    <blockquote class="example example-sample">
                        <ul>
                            <li>Photography of staff and shop provided in JPG format with a minimum resolution of 4 megapixels.</li>
                            <li>Copy for all content pages.</li>
                        </ul>
                    </blockquote>
                    <p><a href="#chapter-1-supplied-2" class="marker">1.3.2</a>If the client is providing finished designs they’ve made, see <a href="#chapter-2-provided-assets">Provided Assets</a> for our requirements.</p>
                </section>
                <section id="chapter-1-deliverables">
                    <h1>4. Deliverables</h1>
                    <p id="chapter-1-deliverables-1"><a href="#chapter-1-deliverables-1" class="marker">1.4.1</a>Normally suspiciously easy this one, what are we going to provide?</p>
                    <blockquote class="example example-sample">
                        <p>A web application deployed to a web server.</p>
                    </blockquote>
                    <blockquote class="example example-sample">
                        <p>A web page suitable for a Facebook Page tab deployed to a web server.</p>
                    </blockquote>
                    <blockquote class="example example-sample">
                        <p>An iOS application for iPhone and iPod touch distributed to the iOS App Store.</p>
                    </blockquote>
                    <p id="chapter-1-deliverables-2"><a href="#chapter-1-deliverables-2" class="marker">1.4.2</a>However, sometimes it can be more complicated.</p>
                    <blockquote class="example example-sample">
                        <p>A concept video with voice over demonstrating the features of the web application, training manuals for staff to use and a web application deployed to a web server.</p>
                    </blockquote>
                </section>
                <section id="chapter-1-people">
                    <h1>5. People</h1>
                    <p id="chapter-1-people-1"><a href="#chapter-1-people-1" class="marker">1.5.1</a>This is for internal use mostly, list a person for each key role.</p>
                    <dl>
                        <dt>Project Manager</dt>
                        <dd>Responsible for running the project and the point of contact for the client.</dd>
                        <dt>Lead Designer</dt>
                        <dd>Oversees the design, upholding our design standards and advising designers working on the project.</dd>
                        <dt>Lead Developer</dt>
                        <dd>Oversees the development, upholding our development standards and advising developers working on the project.</dd>
                    </dl>
                    <p>Note that the Lead Designer and Lead Developer might never push a pixel or write a line of code, but they are there to provide support, advice and share experience.</p>
                </section>
            </section>
            <aside class="quote">
                <p><span class="copy">“If you’re good at something, never do it for free.”</span><br />– The Joker</p>
            </aside>
            <section id="chapter-2" class="chapter">
                <h1>Chapter II<br />UX &amp; Design</h1>
                <section id="chapter-2-user-experience">
                    <h1>User Experience</h1>
                </section>
                <section id="chapter-2-creative-brief">
                    <h1>Creative Brief</h1>
                </section>
                <section id="chapter-2-design-process">
                    <h1>Design Process</h1>
                </section>
                <section id="chapter-2-typeface">
                    <h1>Typeface</h1>
                </section>
                <section id="chapter-2-provided-assets">
                    <h1>Provided Assets</h1>
                </section>
                <section id="chapter-2-copy-style">
                    <h1>Brand Guidelines and Copy Style</h1>
                </section>
            </section>
            <aside class="quote">
                <p><span class="copy">“Creativity takes courage.”</span><br />– Henri Matisse</p>
            </aside>
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
            <aside class="quote">
                <p><span class="copy">“Stay hungry, stay foolish.”</span><br />– Steve Jobs</p>
            </aside>
        </article>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.8.3.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
