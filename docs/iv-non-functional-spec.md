---
layout: page
title: Non-Functional Specificaiton
permalink: /iv/non-functional-spec/
---

You will need to consult with the Lead Developer for most of these decisions. If a section does not apply, do not skip it out, list it and explain why it does not apply.

### Documentation

Note what documentation is provided with the application.

### Client Browser & Devices

List which browsers will be used in testing, and on what platforms. List features that won’t work across all browsers if applicable.

Here’s a list of the standard browsers we’d suggest – but do re-consider for each project.

|        Browser       | Operating System |
|:---------------------|:----------------:|
| Internet Explorer 10 | Windows 8        |
| Internet Explorer 9  | Windows 7        |
| Internet Explorer 8  | Windows XP       |
| Internet Explorer 10 | Windows Phone 8  |
| Chrome latest        | Windows 7        |
| Firefox latest       | Windows 7        |
| Safari latest        | OS X             |
| Safari latest        | iOS 6            |
| Chrome latest        | Android 4        |
{: rules="groups"}

### Accessibility

Accessibility is a complicated issue and should go beyond box-ticking.

We recommend reading [Understanding WCAG 2.0, A guide to understanding and implementing Web Content Accessibility Guidelines 2.0](http://www.w3.org/TR/UNDERSTANDING-WCAG20/) as an introduction, then use [Web Content Accessibility Guidelines (WCAG) 2.0](http://www.w3.org/TR/WCAG20/) for reference.

However, that can take some time, so here’s a quick overview of the four main options.

| Conformance | Description |
|:------------|:-----------:|
| None        | No regard for accessibility. Should only be considered for internal applications or administration systems for small businesses. |
| A           | Including basic accessibility functions such as text alternatives to visuals, allowing the site to work without JavaScript, making sure that elements on the page used for decoration are not picked up by screen readers, help with CAPTCHA, captions for pre-recorded video or audio, use of colour (do not use to convey information that cannot otherwise be explained), keyboard usage, content is ordered appropriately, titles are accurate and useful, labels for forms. |
| AA          | All of A plus: captions for live video or audio, minimum contrast, text resize by 200% without loss of functionality, headings and labels describe a purpose, always show focus, navigation consistent, error prevention (including reviewing for submitting). |
| AAA         | All of A & AA plus: enhanced contrast, audio has no background noise, [text is highly readable](http://www.w3.org/TR/UNDERSTANDING-WCAG20/visual-audio-contrast-visual-presentation.html), no interruptions of timing restraints, no loss of data if a session times out, [three flashes rule](http://www.w3.org/TR/2012/NOTE-WCAG20-TECHS-20120103/G19), ‘breadcrumb’ navigation, identify jargon and abbreviations, context-aware help on each page. |
{: rules="groups"}

You can use the [How to Meet WCAG 2.0 tool](http://www.w3.org/WAI/WCAG20/quickref/) to discover what level of conformance you can achieve.

Making sites accessible doesn’t just help an impaired visitor, it can also force you to write bug-free applications, and even if the highest levels of conformance are not required, doing so is good practice and what Golin strives to achieve.

### Application

... (@todo)

### Errors

List the different errors a user might come up against while using the application, and how they should be handled.

For example:

- **404** - when a page is not found, display a page that shows the user their error in a friendly and useful way
- **validation** - how should the application deal with invalid or bad data?
- **javascript** - if an application has a part of it that has a specific requirement (ie. javascript, flash, etc.) how - should this be dealt with?
- **general error (500)** - how should the application deal with all other errors?

### Maintenance

When the application needs updating, there will be a brief disruption of service. This does not count as downtime, as it is a part of the deployment process. The process is thus:

- the application enters maintenance mode
- the application backs up database (optional)
- the application pulls changes
- the application runs migrations, and other processing scripts (sass, grunt, etc.)
- the application exits maintenance mode
- During maintenance mode, the site will display a friendly message that states that the application will be working again shortly.

### URL Structure

Discuss how the site will structure its URLs.

Examples:

#### If the has multiple languages / territories / domains:

- How and / or where will the current language?
- How will the home page behave - will it redirect to a default language, or show a language selector?
- Bear in mind that each segment of a URL should correspond to a singular thing - do not use the same one to mean two different things

In the following, the second url segment is used to refer to both a page OR a post

- `/en/page-one`
- `/en/post-about-cats`

The following is a better way to structure it:

- `/en/pages/page-one`
- `/en/posts/post-about-cats`

The former is possible, but unreliable, and can result in unpredictable behaviour. The latter will not run into these errors.

### Analytics

List analytics services used and who manages those accounts.

Golin recommends that clients setup their own Google accounts to manage Google Analytics, because data cannot be moved from one account to another.

### Availability

The amount of up time that the system should be up and stable. List when downtime will typically be. Explain the processes for updating the system.

Making a system have 100% uptime is very expensive, you should suggest the system will have 99% uptime, unless you feel it is liable to downtime.

### Compliance

List any documents or regulations that the site should comply to, typically presented by the client. Don’t worry about accessibility or style guides in this.

### Domains & DNS

**NB** Don’t buy domain names for a client without their explicit permission. Some clients have to own the domain names in order to use them, and transferring them back is sometimes costly and adds a delay.

List domains used for each environment, who’s responsible for buying them if applicable, and who manages the DNS.

Explain the relationship between the nameservers and records, who is responsible for them and suggest what they should be.

Remember, all records should now include IPv6 addresses. If the server doesn’t support IPv6, make a note for future reference.

### Server

Things to consider when deciding on the server choice:

- Who is responsible for the servers?
- Where are they located?
- What operating system should they run?
- Are they shared, cloud or dedicated?
- What are the security risks?

### Backups

Explain how often and where backups are stored.

#### Recovery Time Objective (RTO)

The duration of time it takes for the service to recover. This is typically five working days, but a client may wish to pay for a quicker turn around.

> The Recovery Time Objective (RTO) is five working days.
{: .example }

#### Recovery Point Objective (RPO)

How much data one is prepared to loose. For example, if the system is backed up every 24 hours at midnight, and the server crashes at 11.59pm, you’d loose 11 hours and 59 minutes of data, as the last backup will be from midnight the day before.

A typical RPO might be seven days, but 24 hours could be arranged.

### Deployment

Explain how the deployment works, for each environment.

### Disaster Recovery

Explain the procedure for disaster recovery, with reference to the RTO and RPO earlier in this document.

### Recommended Suppliers

Golin recommends working with suppliers we’ve worked with before and trust. Here’s a list of services that we’ve used previously. Any services that are required not on this list must be authorised by the Lead Developer and Head of Web Development.

#### Hosting

|      Company Services      |        Services        |        Notes         |
|:---------------------------|:----------------------:|:--------------------:|
| Rackspace	Dedicated, cloud | CDN                    |                      |
| Amazon AWS                 | Cloud, CDN             |                      |
| Heroku                     | Cloud applications     |                      |
| Heart Internet             | Shared, VPS, dedicated | Legacy services only |
{: rules="groups"}

#### Domains

|      Company Services      |    Services    |  Notes  |
|:---------------------------|:--------------:|:-------:|
| iWantMyName                | Domains, DNS   |         |
{: rules="groups"}

#### SSL


|      Company Services      |    Services    |  Notes  |
|:---------------------------|:--------------:|:-------:|
| GlobalSign                 | SSL            |         |
{: rules="groups"}

#### Code Repositories

|      Company Services      |         Services         |  Notes  |
|:---------------------------|:------------------------:|:-------:|
| GitHub                     | Git repository hosting   |         |
{: rules="groups"}


Also see Authorised Web Systems for application and library suppliers.

### Third Party Services

List any dependence the application will have and who is responsible for them.

This might include APIs that the application uses for data, or could be systems for storing data such as CDNs.

### Bug Reporting

Describe the process for reporting bugs, the software used for collecting them and who’s responsible for checking them.

Google Docs is not a suitable system for this, either use Codebase, Lighthouse or GitHub.

### Environments

The environments are shared with branches, but use this to explain in more details about the differences.

### Version Control

The version control system used for development and deployment.

> We’ll use Git as the version control system for development and deployment.
{: .precise }

### Branches

Branches and their purpose for version control.


|    Environment    |            Notes             |  Server  |  Default Branches   |
|:------------------|:----------------------------:|:--------:|:-------------------:|
| Development       | Local / active development   | local    | `feature/*` `fix/*` |
| Staging           | Testing with sample data     | stage    | `develop`           |
| QA                | Testing with production data | qa       | `stable`            |
| Production        | Client production site       | prod     | `master`            |
{: rules="groups"}

### Logs

List the locations of log files, including application and server.

> We use Loggly for storange and tracking errors. Logs are kept for 15 days, then deleted.
{: .example }

### Coding Standards

List the coding standards used for the development.

> PHP should be coded using the FuelPHP (implemented version) coding standards, avalible at http://fuelphp.com/docs/general/coding_standards.html.
> CSS should be coded using Golin CSS Coding Standard ‘Waterhouse’.
> JavaScript should be coded using Golin JavaScript Coding Standard ‘Wren’.
> Commenting should be written using Golin Commenting ‘King’ Style.
{: .example }

### Code Repository

List where code will be hosted and the main repository that developers should pull from and push to.

### Software & Versions

List software required for the application to run, such as what’s on the server, and any software required for development.

For example, on the server might be PHP and Apache, and for development Sass.

List the minimum version numbers.

Also include links to the licences of the software and take a copy of them. See the Legal chapter for more.

### Frameworks & Libraries

Similar to above, but for the application framework and any libraries used. Typically these are part of the repository and travel with the application.

Also include links to the licences of the libraries and frameworks and take a copy of them. See the Legal chapter for more.

### Portability

Explain how portable the system is, list limitations. For example, if it’s designed to run on Unix-based servers rather than Windows.

