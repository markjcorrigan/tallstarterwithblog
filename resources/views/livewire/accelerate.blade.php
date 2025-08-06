<section class="w-full">
    <x-page-heading>
        <x-slot:title>
            DevOps Accelerate
        </x-slot:title>
        <x-slot:subtitle>

        </x-slot:subtitle>
        <x-slot:buttons>

        </x-slot:buttons>
    </x-page-heading>

    @auth

        <!--BODY-->
        <div class="container">

            <p>From "Accelerate: The Science of Lean Software and DevOps", by Nicole Forsgren, PhD, Jez Humble, and Gene Kim.</p>
            <p align="center"><img alt="" class="img-fluid" src="/images/devopscogs.png"></p>
            <h1><strong>CAPABILITIES TO DRIVE IMPROVEMENT</strong></h1>
            <hr>
            <p>[<a href="/devopsviewpdf/resources/acceleratetwentyfour.pdf" target="_blank"><u>Click for this page in pdf</u></a>]</p>
            <p>The Accelerate team's research has uncovered 24 key capabilities that drive improvements in
                software delivery performance in a statistically significant way. Their book "Accelerate,"
                details these findings. This summary provides a handy list of
                these capabilities, each with a pointer to the chapter that covers it in
                detail.
            <p> These capabilities are classified into five categories: </p>
            <hr>
            <a name="index"></a>
            <h5><strong>INDEX</strong></h5>
            <ol>
                <li> <a href="#1">Continuous delivery </a> </li>
                <li> <a href="#2">Architecture </a> </li>
                <li> <a href="#3">Product and process</a> </li>
                <li> <a href="#4">Lean management and monitoring</a> </li>
                <li> <a href="#5">Cultural </a> </li>
            </ol>
            <hr>
            <p> Within each category, the capabilities are presented in no particular
                order. </p>
            <hr>
            <h3 align="left"> <strong><a name="1"></a>C</strong> <strong>O</strong> <strong>N</strong> <strong>T</strong> <strong>I</strong> <strong>N</strong> <strong>U</strong> <strong>O</strong> <strong>U</strong> <strong>S</strong> <strong>&nbsp;</strong> <strong>D</strong> <strong>E</strong> <strong>L</strong> <strong>I</strong> <strong>V</strong> <strong>E</strong> <strong>R</strong> <strong>Y</strong> <strong>&nbsp;</strong> <strong>C</strong> <strong>A</strong> <strong>P</strong> <strong>A</strong> <strong>B</strong> <strong>I</strong> <strong>L</strong> <strong>I</strong> <strong>T</strong> <strong>I</strong> <strong>E</strong> <strong>S</strong> </h3>
            <p><a href="#index">Index</a></p>
            <hr>
            <p> 1. <strong>Use version control for all production artifacts. </strong> Version control is the use of a version control system, such as GitHub
                or Subversion, for all production artifacts, including application
                code, application configurations, system configurations, and scripts
                for automating build and configuration of the environment. <br>
                <a href="/devopsviewpdf/resources/accelerate.pdf#page=70" target="_blank">See Chapter
                    4</a>. </p>
            <p> 2. <strong>Automate your deployment process. </strong>Deployment
                automation is
                the degree to which deployments are fully automated and do not require
                manual intervention. <br>
                <a href="/devopsviewpdf/resources/accelerate.pdf#page=70" target="_blank">See Chapter
                    4</a>. </p>
            <p> 3. <strong>Implement continuous integration. </strong>Continuous
                integration (CI)
                is the first step towards continuous delivery. This is a development
                practice where code is regularly checked in, and each check-in triggers
                a set of quick tests to discover serious regressions, which developers
                fix immediately. The CI process creates canonical builds and packages
                that are ultimately deployed and released.<br>
                <a href="/devopsviewpdf/resources/accelerate.pdf#page=70" target="_blank">See Chapter
                    4</a>. </p>
            <p> 4. <strong>Use trunk-based development methods. </strong>Trunk-based
                development has been shown to be a predictor of high performance in
                software development and delivery. It is characterized by fewer than
                three active branches in a code repository; branches and forks having
                very short lifetimes (e.g., less than a day) before being merged into
                master; and application teams rarely or never having "code lock"
                periods when no one can check in code or do pull requests due to
                merging conflicts, code freezes, or stabilization phases. <br>
                <a href="/devopsviewpdf/resources/accelerate.pdf#page=70" target="_blank">See Chapter
                    4</a>. </p>
            <p> 5. <strong>Implement test automation. </strong>Test automation is a
                practice where
                software tests are run automatically (not manually) continuously
                throughout the development process. Effective test suites are
                reliable-that is, tests find real failures and only pass releasable
                code. Note that developers should be primarily responsible for creation
                and maintenance of automated test suites. <br>
                <a href="/devopsviewpdf/resources/accelerate.pdf#page=70" target="_blank">See Chapter
                    4</a>. </p>
            <p>6. <strong>Support test data management. </strong>Test data requires
                careful
                maintenance, and test data management is becoming an increasingly
                important part of automated testing. Effective practices include having
                adequate data to run your test suite, the ability to acquire necessary
                data on demand, the ability to condition your test data in your
                pipeline, and the data not limiting the amount of tests you can run. We
                do caution, however, that teams should minimize, whenever possible, the
                amount of test data needed to run automated tests. <br>
                <a href="/devopsviewpdf/resources/accelerate.pdf#page=70" target="_blank">See Chapter
                    4</a>. </p>
            <p>7. <strong>Shift left on security. </strong>Integrating security into
                the design and
                testing phases of the software development process is key to driving IT
                performance. This includes conducting security reviews of applications,
                including the infosec team in the design and demo process for
                applications, using preapproved security libraries and packages, and
                testing security features as a part of the automated testing suite. <br>
                <a href="/devopsviewpdf/resources/accelerate.pdf#page=70" target="_blank">See Chapter
                    4</a>. </p>
            <p>8. <strong>Implement continuous delivery (CD). </strong>CD is a
                development
                practice where software is in a deployable state throughout its
                lifecycle, and the team prioritizes keeping the software in a
                deployable state over working on new features. Fast feedback on the
                quality and deployability of the system is available to all team
                members, and when they get reports that the system isn't deployable,
                fixes are made quickly. Finally, the system can be deployed to
                production or end users at any time, on demand. <br>
                <a href="/devopsviewpdf/resources/accelerate.pdf#page=70" target="_blank">See Chapter
                    4</a>.
            <hr>
            <h3 align="left"> <a name="2"></a> <strong>A</strong> <strong>R</strong> <strong>C</strong> <strong>H</strong> <strong>I</strong> <strong>T</strong> <strong>E</strong> <strong>C</strong> <strong>T</strong> <strong>U</strong> <strong>R</strong> <strong>E</strong> <strong>&nbsp;</strong> <strong>C</strong> <strong>A</strong> <strong>P</strong> <strong>A</strong> <strong>B</strong> <strong>I</strong> <strong>L</strong> <strong>I</strong> <strong>T</strong> <strong>I</strong> <strong>E</strong> <strong>S</strong> <strong>&nbsp;</strong> </h3>
            <p><a href="#index">Index</a></p>
            <hr>
            <p> 9. <strong>Use a loosely coupled architecture. </strong>This affects
                the extent to which a team can test and deploy their applications on
                demand, without requiring orchestration with other services. Having a
                loosely coupled architecture allows your teams to work independently,
                without relying on other teams for support and services, which in turn
                enables them to work quickly and deliver value to the organization. <br>
                <a href="/devopsviewpdf/resources/accelerate.pdf#page=87" target="_blank">See Chapter
                    5</a>. </p>
            <p> 10. <strong>Architect for empowered teams. </strong>Our research shows
                that teams
                that can choose which tools to use do better at continuous delivery
                and, in turn, drive better software development and delivery
                performance. No one knows better than practitioners what they need to
                be effective. <br>
                <a href="/devopsviewpdf/resources/accelerate.pdf#page=87" target="_blank">See Chapter
                    5</a>. <br>
                (The product management counterpart to
                this is found in <a href="/devopsviewpdf/resources/accelerate.pdf#page=109" target="_blank">Chapter 8</a>.) </p>
            <hr>
            <h3 align="left"> <strong><a name="3"></a>P</strong> <strong>R</strong> <strong>O</strong> <strong>D</strong> <strong>U</strong> <strong>C</strong> <strong>T</strong> <strong>&nbsp; </strong> <strong>A</strong> <strong>N</strong> <strong>D</strong> <strong>&nbsp; </strong> <strong>P</strong> <strong>R</strong> <strong>O</strong> <strong>C</strong> <strong>E</strong> <strong>S</strong> <strong>S</strong> <strong>&nbsp;</strong> <strong>C</strong> <strong>A</strong> <strong>P</strong> <strong>A</strong> <strong>B</strong> <strong>I</strong> <strong>L</strong> <strong>I</strong> <strong>T</strong> <strong>I</strong> <strong>E</strong> <strong>S</strong> <strong>&nbsp;</strong> </h3>
            <p><a href="#index">Index</a></p>
            <hr>
            <p> 11. <strong>Gather and implement customer feedback. </strong>Our
                research has found that whether organizations actively and regularly
                seek customer feedback and incorporate this feedback into the design of
                their products is important to software delivery performance. <br>
                <a href="/devopsviewpdf/resources/accelerate.pdf#page=109" target="_blank">See
                    Chapter 8</a>. </p>
            <p> 12. <strong> Make the flow of work visible through the value stream. </strong> </p>
            <p> Teams should have a good understanding of and visibility into the flow
                of work from the business all the way through to customers, including
                the status of products and features. Our research has
                found this has a positive impact on IT performance. <br>
                <a href="/devopsviewpdf/resources/accelerate.pdf#page=109" target="_blank">See
                    Chapter 8</a>. </p>
            <p>13. <strong>Work in small batches. </strong>Teams should slice work
                into small pieces that can be completed in a week or less. The key is
                to have work decomposed into small features that allow for rapid
                development, instead of developing complex features on branches and
                releasing them infrequently. This idea can be applied at the feature
                and the product level. (An MVP is a prototype of a product with just
                enough features to enable validated learning about the product and its
                business model.) Working in small batches enables short lead times and
                faster feedback loops. <br>
                <a href="/devopsviewpdf/resources/accelerate.pdf#page=109" target="_blank">See
                    Chapter 8</a>. </p>
            <p>14. <strong>Foster and enable team experimentation. </strong>Team
                experimentation is the ability of developers to try out new ideas and
                create and update specifications during the development process,
                without requiring approval from outside of the team, which allows them
                to innovate quickly and create value. This is particularly impactful
                when combined with working in small batches, incorporating customer
                feedback, and making the flow of work visible. <br>
                <a href="/devopsviewpdf/resources/accelerate.pdf#page=109" target="_blank">See
                    Chapter 8</a>. <br>
                (The
                technical counterpart to this is found in <a href="/devopsviewpdf/resources/accelerate.pdf#page=70" target="_blank">Chapter 4</a>.) </p>
            <hr>
            <h3 align="left"><a name="4"></a> <strong>L</strong> <strong>E</strong> <strong>A</strong> <strong>N</strong> <strong>&nbsp;</strong> <strong>M</strong> <strong>A</strong> <strong>N</strong> <strong>A</strong> <strong>G</strong> <strong>E</strong> <strong>M</strong> <strong>E</strong> <strong>N</strong> <strong>T</strong> <strong>&nbsp;</strong> <strong>A</strong> <strong>N</strong> <strong>D</strong> <strong>&nbsp;</strong> <strong>M</strong> <strong>O</strong> <strong>N</strong> <strong>I</strong> <strong>T</strong> <strong>O</strong> <strong>R</strong> <strong>I</strong> <strong>N</strong> <strong>G</strong> <strong>&nbsp;</strong> <strong>C</strong> <strong>A</strong> <strong>P</strong> <strong>A</strong> <strong>B</strong> <strong>I</strong> <strong>L</strong> <strong>I</strong> <strong>T</strong> <strong>I</strong> <strong>E</strong> <strong>S</strong> <strong>&nbsp;</strong> </h3>
            <p><a href="#index">Index</a></p>
            <hr>
            <p>15. <strong>Have a lightweight change approval processes. </strong>Our
                research shows that a lightweight change approval process based on peer
                review (pair programming or intrateam code review) produces superior IT
                performance than using external change approval
                boards (CABs). <br>
                <a href="/devopsviewpdf/resources/accelerate.pdf#page=102" target="_blank">See
                    Chapter 7</a>. </p>
            <p>16. <strong>Monitor across application and infrastructure to inform business
                    decisions. </strong>Use data from application and infrastructure monitoring tools to take
                action and make business decisions. This goes beyond paging people when
                things go wrong. <br>
                <a href="/devopsviewpdf/resources/accelerate.pdf#page=102" target="_blank">See
                    Chapter 7</a>. </p>
            <p>17. <strong>Check system health proactively. </strong>Monitor system
                health, using threshold and rate-of-change warnings, to enable teams to
                preemptively detect and mitigate problems. <br>
                <a href="/devopsviewpdf/resources/accelerate.pdf#page=167" target="_blank">See
                    Chapter 13</a>. </p>
            <p>18. <strong>Improve processes and manage work with work-in-process</strong> <strong>(WIP) limits. </strong>The use of work-in-process limits to manage the flow of work is well
                known in the Lean community. When used effectively, this drives process
                improvement, increases throughput, and makes constraints visible in the
                system. <br>
                <a href="/devopsviewpdf/resources/accelerate.pdf#page=102" target="_blank">See
                    Chapter 7</a>. </p>
            <p>19. <strong>Visualize work to monitor quality and communicate</strong> <strong>throughout the team. </strong>Visual displays, such as dashboards or internal websites, used to
                monitor quality and work in process have been shown to contribute to
                software delivery performance. <br>
                <a href="/devopsviewpdf/resources/accelerate.pdf#page=102" target="_blank">See
                    Chapter 7</a>. </p>
            <hr>
            <h3 align="left"><a name="5"></a><strong>C</strong> <strong>U</strong> <strong>L</strong> <strong>T</strong> <strong>U</strong> <strong>R</strong> <strong>A</strong> <strong>L</strong> <strong>&nbsp;</strong> <strong>C</strong> <strong>A</strong> <strong>P</strong> <strong>A</strong> <strong>B</strong> <strong>I</strong> <strong>L</strong> <strong>I</strong> <strong>T</strong> <strong>I</strong> <strong>E</strong> <strong>S</strong> </h3>
            <p><a href="#index">Index</a></p>
            <hr>
            <p>20. <strong>Support a generative culture (as outlined by Westrum). </strong>This measure of organizational culture is based on a typology developed
                by Ron Westrum, a sociologist who studied safety-critical complex
                systems in the domains of aviation and healthcare. Our research has
                found that this measure of culture is predictive of IT performance,
                organizational performance, and decreasing burnout. Hallmarks of this
                measure include good information flow, high cooperation and
                trust, bridging between teams, and conscious inquiry. <br>
                <a href="/devopsviewpdf/resources/accelerate.pdf#page=58" target="_blank">See
                    Chapter 3</a>. </p>
            <p>21. <strong>Encourage and support learning. </strong>Is learning, in
                your culture, considered essential for continued progress? Is learning
                thought of as a cost or an investment? This is a measure of an
                organization's learning culture. <br>
                <a href="/devopsviewpdf/resources/accelerate.pdf#page=127" target="_blank">See
                    Chapter 10</a>. </p>
            <p>22. <strong>Support and facilitate collaboration among teams. </strong>This
                reflects how well teams, which have traditionally been siloed, interact
                in development, operations, and information security. <br>
                <a href="/devopsviewpdf/resources/accelerate.pdf#page=58" target="_blank">See
                    Chapter 3</a> and <a href="/devopsviewpdf/resources/accelerate.pdf#page=87" target="_blank">Chapter 5</a>.</p>
            <p>23. <strong>Provide resources and tools that make work meaningful. </strong>This
                particular measure of job satisfaction is about doing work that is
                challenging and meaningful, and being empowered to exercise your skills
                and judgment. It is also about being given the tools and resources
                needed to do your job well. <br>
                <a href="/devopsviewpdf/resources/accelerate.pdf#page=127" target="_blank">See
                    Chapter 10</a>. </p>
            <p>24. <strong>Support or embody transformational leadership.</strong> Transformational leadership supports and amplifies the technical and
                process work that is so essential in DevOps. It is comprised of five
                factors: vision, intellectual stimulation, inspirational communication,
                supportive leadership, and personal recognition. <br>
                <a href="/devopsviewpdf/resources/accelerate.pdf#page=143" target="_blank">See
                    Chapter 11</a>. </p>
            <hr>
            <p> <a href="/devopsviewpdf/resources/accelerate_transformation_practices.pdf" target="_blank" title="Click here to download this image in pdf"><img class="img-fluid" src="/images/accelerate.jpg" ></a> </p>
            <br>
            <br>
        </div>
    @endAuth

    @Guest
        <div class="container">

            <p>From "Accelerate: The Science of Lean Software and DevOps", by Nicole Forsgren, PhD, Jez Humble, and Gene Kim.</p>
            <p align="center"><img alt="" class="img-fluid" src="/images/devopscogs.png"></p>
            <h1><strong>CAPABILITIES TO DRIVE IMPROVEMENT</strong></h1>
            <hr>
            <p>[<a href="/register" target="_blank"><u>Click for this page in pdf</u></a>]</p>
            <p>The Accelerate team's research has uncovered 24 key capabilities that drive improvements in
                software delivery performance in a statistically significant way. Their book "Accelerate,"
                details these findings. This summary provides a handy list of
                these capabilities, each with a pointer to the chapter that covers it in
                detail.
            <p> These capabilities are classified into five categories: </p>
            <hr>
            <a name="index"></a>
            <h5><strong>INDEX</strong></h5>
            <ol>
                <li> <a href="#1">Continuous delivery </a> </li>
                <li> <a href="#2">Architecture </a> </li>
                <li> <a href="#3">Product and process</a> </li>
                <li> <a href="#4">Lean management and monitoring</a> </li>
                <li> <a href="#5">Cultural </a> </li>
            </ol>
            <hr>
            <p> Within each category, the capabilities are presented in no particular
                order. </p>
            <hr>
            <h3 align="left"> <strong><a name="1"></a>C</strong> <strong>O</strong> <strong>N</strong> <strong>T</strong> <strong>I</strong> <strong>N</strong> <strong>U</strong> <strong>O</strong> <strong>U</strong> <strong>S</strong> <strong>&nbsp;</strong> <strong>D</strong> <strong>E</strong> <strong>L</strong> <strong>I</strong> <strong>V</strong> <strong>E</strong> <strong>R</strong> <strong>Y</strong> <strong>&nbsp;</strong> <strong>C</strong> <strong>A</strong> <strong>P</strong> <strong>A</strong> <strong>B</strong> <strong>I</strong> <strong>L</strong> <strong>I</strong> <strong>T</strong> <strong>I</strong> <strong>E</strong> <strong>S</strong> </h3>
            <p><a href="#index">Index</a></p>
            <hr>
            <p> 1. <strong>Use version control for all production artifacts. </strong> Version control is the use of a version control system, such as GitHub
                or Subversion, for all production artifacts, including application
                code, application configurations, system configurations, and scripts
                for automating build and configuration of the environment. <br>
                <a href="/register" target="_blank">See Chapter
                    4</a>. </p>
            <p> 2. <strong>Automate your deployment process. </strong>Deployment
                automation is
                the degree to which deployments are fully automated and do not require
                manual intervention. <br>
                <a href="/register" target="_blank">See Chapter
                    4</a>. </p>
            <p> 3. <strong>Implement continuous integration. </strong>Continuous
                integration (CI)
                is the first step towards continuous delivery. This is a development
                practice where code is regularly checked in, and each check-in triggers
                a set of quick tests to discover serious regressions, which developers
                fix immediately. The CI process creates canonical builds and packages
                that are ultimately deployed and released.<br>
                <a href="/register" target="_blank">See Chapter
                    4</a>. </p>
            <p> 4. <strong>Use trunk-based development methods. </strong>Trunk-based
                development has been shown to be a predictor of high performance in
                software development and delivery. It is characterized by fewer than
                three active branches in a code repository; branches and forks having
                very short lifetimes (e.g., less than a day) before being merged into
                master; and application teams rarely or never having "code lock"
                periods when no one can check in code or do pull requests due to
                merging conflicts, code freezes, or stabilization phases. <br>
                <a href="/register" target="_blank">See Chapter
                    4</a>. </p>
            <p> 5. <strong>Implement test automation. </strong>Test automation is a
                practice where
                software tests are run automatically (not manually) continuously
                throughout the development process. Effective test suites are
                reliable-that is, tests find real failures and only pass releasable
                code. Note that developers should be primarily responsible for creation
                and maintenance of automated test suites. <br>
                <a href="/register" target="_blank">See Chapter
                    4</a>. </p>
            <p>6. <strong>Support test data management. </strong>Test data requires
                careful
                maintenance, and test data management is becoming an increasingly
                important part of automated testing. Effective practices include having
                adequate data to run your test suite, the ability to acquire necessary
                data on demand, the ability to condition your test data in your
                pipeline, and the data not limiting the amount of tests you can run. We
                do caution, however, that teams should minimize, whenever possible, the
                amount of test data needed to run automated tests. <br>
                <a href="/register" target="_blank">See Chapter
                    4</a>. </p>
            <p>7. <strong>Shift left on security. </strong>Integrating security into
                the design and
                testing phases of the software development process is key to driving IT
                performance. This includes conducting security reviews of applications,
                including the infosec team in the design and demo process for
                applications, using preapproved security libraries and packages, and
                testing security features as a part of the automated testing suite. <br>
                <a href="/register" target="_blank">See Chapter
                    4</a>. </p>
            <p>8. <strong>Implement continuous delivery (CD). </strong>CD is a
                development
                practice where software is in a deployable state throughout its
                lifecycle, and the team prioritizes keeping the software in a
                deployable state over working on new features. Fast feedback on the
                quality and deployability of the system is available to all team
                members, and when they get reports that the system isn't deployable,
                fixes are made quickly. Finally, the system can be deployed to
                production or end users at any time, on demand. <br>
                <a href="/register" target="_blank">See Chapter
                    4</a>.
            <hr>
            <h3 align="left"> <a name="2"></a> <strong>A</strong> <strong>R</strong> <strong>C</strong> <strong>H</strong> <strong>I</strong> <strong>T</strong> <strong>E</strong> <strong>C</strong> <strong>T</strong> <strong>U</strong> <strong>R</strong> <strong>E</strong> <strong>&nbsp;</strong> <strong>C</strong> <strong>A</strong> <strong>P</strong> <strong>A</strong> <strong>B</strong> <strong>I</strong> <strong>L</strong> <strong>I</strong> <strong>T</strong> <strong>I</strong> <strong>E</strong> <strong>S</strong> <strong>&nbsp;</strong> </h3>
            <p><a href="#index">Index</a></p>
            <hr>
            <p> 9. <strong>Use a loosely coupled architecture. </strong>This affects
                the extent to which a team can test and deploy their applications on
                demand, without requiring orchestration with other services. Having a
                loosely coupled architecture allows your teams to work independently,
                without relying on other teams for support and services, which in turn
                enables them to work quickly and deliver value to the organization. <br>
                <a href="/register" target="_blank">See Chapter
                    5</a>. </p>
            <p> 10. <strong>Architect for empowered teams. </strong>Our research shows
                that teams
                that can choose which tools to use do better at continuous delivery
                and, in turn, drive better software development and delivery
                performance. No one knows better than practitioners what they need to
                be effective. <br>
                <a href="/register" target="_blank">See Chapter
                    5</a>. <br>
                (The product management counterpart to
                this is found in <a href="/register" target="_blank">Chapter 8</a>.) </p>
            <hr>
            <h3 align="left"> <strong><a name="3"></a>P</strong> <strong>R</strong> <strong>O</strong> <strong>D</strong> <strong>U</strong> <strong>C</strong> <strong>T</strong> <strong>&nbsp; </strong> <strong>A</strong> <strong>N</strong> <strong>D</strong> <strong>&nbsp; </strong> <strong>P</strong> <strong>R</strong> <strong>O</strong> <strong>C</strong> <strong>E</strong> <strong>S</strong> <strong>S</strong> <strong>&nbsp;</strong> <strong>C</strong> <strong>A</strong> <strong>P</strong> <strong>A</strong> <strong>B</strong> <strong>I</strong> <strong>L</strong> <strong>I</strong> <strong>T</strong> <strong>I</strong> <strong>E</strong> <strong>S</strong> <strong>&nbsp;</strong> </h3>
            <p><a href="#index">Index</a></p>
            <hr>
            <p> 11. <strong>Gather and implement customer feedback. </strong>Our
                research has found that whether organizations actively and regularly
                seek customer feedback and incorporate this feedback into the design of
                their products is important to software delivery performance. <br>
                <a href="/register" target="_blank">See
                    Chapter 8</a>. </p>
            <p> 12. <strong> Make the flow of work visible through the value stream. </strong> </p>
            <p> Teams should have a good understanding of and visibility into the flow
                of work from the business all the way through to customers, including
                the status of products and features. Our research has
                found this has a positive impact on IT performance. <br>
                <a href="/register" target="_blank">See
                    Chapter 8</a>. </p>
            <p>13. <strong>Work in small batches. </strong>Teams should slice work
                into small pieces that can be completed in a week or less. The key is
                to have work decomposed into small features that allow for rapid
                development, instead of developing complex features on branches and
                releasing them infrequently. This idea can be applied at the feature
                and the product level. (An MVP is a prototype of a product with just
                enough features to enable validated learning about the product and its
                business model.) Working in small batches enables short lead times and
                faster feedback loops. <br>
                <a href="/register" target="_blank">See
                    Chapter 8</a>. </p>
            <p>14. <strong>Foster and enable team experimentation. </strong>Team
                experimentation is the ability of developers to try out new ideas and
                create and update specifications during the development process,
                without requiring approval from outside of the team, which allows them
                to innovate quickly and create value. This is particularly impactful
                when combined with working in small batches, incorporating customer
                feedback, and making the flow of work visible. <br>
                <a href="/register" target="_blank">See
                    Chapter 8</a>. <br>
                (The
                technical counterpart to this is found in <a href="/register" target="_blank">Chapter 4</a>.) </p>
            <hr>
            <h3 align="left"><a name="4"></a> <strong>L</strong> <strong>E</strong> <strong>A</strong> <strong>N</strong> <strong>&nbsp;</strong> <strong>M</strong> <strong>A</strong> <strong>N</strong> <strong>A</strong> <strong>G</strong> <strong>E</strong> <strong>M</strong> <strong>E</strong> <strong>N</strong> <strong>T</strong> <strong>&nbsp;</strong> <strong>A</strong> <strong>N</strong> <strong>D</strong> <strong>&nbsp;</strong> <strong>M</strong> <strong>O</strong> <strong>N</strong> <strong>I</strong> <strong>T</strong> <strong>O</strong> <strong>R</strong> <strong>I</strong> <strong>N</strong> <strong>G</strong> <strong>&nbsp;</strong> <strong>C</strong> <strong>A</strong> <strong>P</strong> <strong>A</strong> <strong>B</strong> <strong>I</strong> <strong>L</strong> <strong>I</strong> <strong>T</strong> <strong>I</strong> <strong>E</strong> <strong>S</strong> <strong>&nbsp;</strong> </h3>
            <p><a href="#index">Index</a></p>
            <hr>
            <p>15. <strong>Have a lightweight change approval processes. </strong>Our
                research shows that a lightweight change approval process based on peer
                review (pair programming or intrateam code review) produces superior IT
                performance than using external change approval
                boards (CABs). <br>
                <a href="/register" target="_blank">See
                    Chapter 7</a>. </p>
            <p>16. <strong>Monitor across application and infrastructure to inform business
                    decisions. </strong>Use data from application and infrastructure monitoring tools to take
                action and make business decisions. This goes beyond paging people when
                things go wrong. <br>
                <a href="/register" target="_blank">See
                    Chapter 7</a>. </p>
            <p>17. <strong>Check system health proactively. </strong>Monitor system
                health, using threshold and rate-of-change warnings, to enable teams to
                preemptively detect and mitigate problems. <br>
                <a href="/register" target="_blank">See
                    Chapter 13</a>. </p>
            <p>18. <strong>Improve processes and manage work with work-in-process</strong> <strong>(WIP) limits. </strong>The use of work-in-process limits to manage the flow of work is well
                known in the Lean community. When used effectively, this drives process
                improvement, increases throughput, and makes constraints visible in the
                system. <br>
                <a href="/register" target="_blank">See
                    Chapter 7</a>. </p>
            <p>19. <strong>Visualize work to monitor quality and communicate</strong> <strong>throughout the team. </strong>Visual displays, such as dashboards or internal websites, used to
                monitor quality and work in process have been shown to contribute to
                software delivery performance. <br>
                <a href="/register" target="_blank">See
                    Chapter 7</a>. </p>
            <hr>
            <h3 align="left"><a name="5"></a><strong>C</strong> <strong>U</strong> <strong>L</strong> <strong>T</strong> <strong>U</strong> <strong>R</strong> <strong>A</strong> <strong>L</strong> <strong>&nbsp;</strong> <strong>C</strong> <strong>A</strong> <strong>P</strong> <strong>A</strong> <strong>B</strong> <strong>I</strong> <strong>L</strong> <strong>I</strong> <strong>T</strong> <strong>I</strong> <strong>E</strong> <strong>S</strong> </h3>
            <p><a href="#index">Index</a></p>
            <hr>
            <p>20. <strong>Support a generative culture (as outlined by Westrum). </strong>This measure of organizational culture is based on a typology developed
                by Ron Westrum, a sociologist who studied safety-critical complex
                systems in the domains of aviation and healthcare. Our research has
                found that this measure of culture is predictive of IT performance,
                organizational performance, and decreasing burnout. Hallmarks of this
                measure include good information flow, high cooperation and
                trust, bridging between teams, and conscious inquiry. <br>
                <a href="/register" target="_blank">See
                    Chapter 3</a>. </p>
            <p>21. <strong>Encourage and support learning. </strong>Is learning, in
                your culture, considered essential for continued progress? Is learning
                thought of as a cost or an investment? This is a measure of an
                organization's learning culture. <br>
                <a href="/register" target="_blank">See
                    Chapter 10</a>. </p>
            <p>22. <strong>Support and facilitate collaboration among teams. </strong>This
                reflects how well teams, which have traditionally been siloed, interact
                in development, operations, and information security. <br>
                <a href="/register" target="_blank">See
                    Chapter 3</a> and <a href="/register" target="_blank">Chapter 5</a>.</p>
            <p>23. <strong>Provide resources and tools that make work meaningful. </strong>This
                particular measure of job satisfaction is about doing work that is
                challenging and meaningful, and being empowered to exercise your skills
                and judgment. It is also about being given the tools and resources
                needed to do your job well. <br>
                <a href="/register" target="_blank">See
                    Chapter 10</a>. </p>
            <p>24. <strong>Support or embody transformational leadership.</strong> Transformational leadership supports and amplifies the technical and
                process work that is so essential in DevOps. It is comprised of five
                factors: vision, intellectual stimulation, inspirational communication,
                supportive leadership, and personal recognition. <br>
                <a href="/register" target="_blank">See
                    Chapter 11</a>. </p>
            <hr>
            <p> <a href="/register" target="_blank" title="Click here to download this image in pdf"><img class="img-fluid" src="/images/accelerate.jpg" ></a> </p>
            <br>
            <br>
        </div>


    @endguest

</section>
