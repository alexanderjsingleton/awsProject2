<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="BucephalusDev-Favicon.png">
  <title>Sticky Footer Navbar Template for Bootstrap</title>
  <!-- Bootstrap core CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <link href="bootstrap-3.3.6/docs/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="sticky-footer-navbar.css" rel="stylesheet">
  <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
  <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
   <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> 
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>
  <!-- Fixed navbar -->
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="logo" rel="home" href="#" title="The George Washington University">
          <img src="http://i.imgur.com/jTkgE1J.png">
        </a>
      </div>
      <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li><a href="/project2/standard-form.php">Home</a></li>
          <li><a href="/project2/standard-form.php">Register</a></li>
          <li><a href="/project2/jquery.php">Members</a></li>
          <li><a href="/project2/standard-form-update.php">Revise</a></li>
          <li><a href="https://github.com/alexanderjsingleton/awsProject2/blob/master/README.md">Dox</a></li>
          
          
        </li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>




<div class="container">
  <div class="page-header">
    
  </div>
<h1>GWMSIST</h1>
</div>
<div class="container">
  <div class="container">

<h2>awsProject2</h2>

<h3>A repo for academic experimentation with Amazon Bitnami ec2 instance.</h3>

<p>1.Requirements listed below documentation.</p>

<ol>
  <li><p>Example link provided:</p>

    <ol><li><p>A Bitnami LAMP on Amazon Bitnami ec2 instance to develop a web application that is able to validate user input as well as store, retrieve, update and delete items in a database following URL (or <a href="http://ec2-52-33-59-87.us-west-2.compute.amazonaws.com/project2/standard-form.php">click here</a>):</p>

      <ol><li><code>http://ec2-52-33-59-87.us-west-2.compute.amazonaws.com/project2/standard-form.php</code></li></ol></li></ol></li>
      <li><p>User Stories: As a user I want to:</p>

        <ol><li><p>Land on a welcome page featuring a prominent greeting navigation menu bar, a side-bar menu and a footer menu; the landing page will also include a section containing a button that directs to the documentation provided herein.  In order optimize content appearance and layout while affording maximum responsiveness, the <a href="http://getbootstrap.com/getting-started/">Bootstrap (v3.3.6)</a> framework will be utilized-more specifically, a rendition of the "Sticky Footer" theme.   The landing page will be appropriately meta-tagged and include personal favicon.</p></li>
          <li><p>In order to accommodate the aforementioned, the most recent version of Bootstrap was downloaded and included with source files.</p>

            <ol><li><p>The navigation-bar menu should feature an appropriate logo for the production, in addition to three tabs respectively navigating to  "Register" and “Members” pages of the site,  in addition to a “Revise” and "Dox" tab.</p>

              <ol><li>Please note, all Bootstrap files are retrieved remotely via the following URL's <code>https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css</code> &amp; <code>https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js</code>.</li></ol></li>
              <li><p>All of the aforementioned sections are constituents of the general website layout.</p></li></ol></li>
              <li><p>Upon populating the form on the landing -page, then clicking on the "Register" tab within the navigation-bar menu, the user will be directed to a page featuring the page title, a subheader including a brief explanation, and then body content instructing the user to access the alternative form featuring standard form-validation with in-line <a href="http://www.tutorialspoint.com/php/php_regular_expression.htm">php RegEx</a>.</p>

                <ol><li><p>Unlike Project I, Project II form-validation within the "Register section" of landing-page of the site is enabled by manual php RegEx performing form-validation in order to ultimately submit the field-form as a record to the MySQL database residiing on the AWS instance, server-side.</p></li>
                  <li><p>If the user were to test the validation without populating the necessary fields (in this case, all), the form will not process and flag required fields.  However, if the user populates every field incorrectly the form will not process as the php RegEx accounts for all of the required formats listed.</p>

                    <ol><li><p>First Name</p>

                      <ol><li>>= 2 characters</li></ol></li>
                      <li><p>Last Name</p>

                        <ol><li>>= 2 characters</li></ol></li>
                        <li><p>E-mail</p>

                          <ol><li>Must contain a "@" character in addition to valid domains.</li></ol></li>
                          <li><p>Phone #</p>

                            <ol><li>Phone number must contain the numbers and parenthesized area-code.</li></ol></li>
                            <li><p>Address</p>

                              <ol><li>Must contain a specified set of characters, including at least one digit, street direction, street and street type.</li></ol></li>
                              <li><p>City</p>

                                <ol><li>Provided city must be accounted for within Modernizr database-API.</li></ol></li>
                                <li><p>State</p>

                                  <ol><li>Must select a state within drop-down menu selection</li></ol></li>
                                  <li><p>Zip Code</p>

                                    <ol><li>5 digits only, accounted for by Modernizer database-API</li></ol></li>
                                    <li><p>Website or Domain</p>

                                      <ol><li>No constraint</li></ol></li>
                                      <li><p>Do you have hosting?</p>

                                        <ol><li>"Yes" or “No” radio buttons- only one must be select.</li></ol></li>
                                        <li><p>Project Description</p>

                                          <ol><li>Constraint: input >10 characters &lt;200</li></ol></li></ol></li>
                                          <li><p>If the user appropriately populates all of the registration fields, upon hitting the "Submit" action button, the user’s client submits the data via HTTP using the <a href="https://developer.wordpress.org/reference/functions/get_post/">get_post function</a> that retrieves post-data given a post ID or post-object for insertion into the previously mentioned MySQL database, server-side, which is verified by the <a href="http://php.net/manual/en/function.isset.php">php ISSET function</a>- essentially checking for "nullability" or if the field tied to the corresponding variable is set to a corresponding value specified by user-input upon passing form-validation (previously mentioned RegEx).  The data collected is retreived by the associated php variables prefixed by '$' to the assigned values corresponding to the values definining the given table(s) of the server-side MySQL database- again all assigned to and inserted according to the tagsor  input name-class tags featured within the div-class tag-group pertaining to each corresponding field (e.g. <input name=”email” will be rendered as email=”[field input]”, connected by <a href="http://www.w3schools.com/php/php_mysql_connect.asp">php declarations connecting to the server-side MySQL database</a>.</p></li></ol></li>
                                          <li><p>Upon clicking the "Members" tab within the navigation-menu bar, the page features a corresponding table rendering the fields processed by the corresponding form located on the landing-page that is responsively formatted with a “table-responsive” div-class featured by Bootstrap.  Essentially, the action method’s will be contained within each HTML element corresponding to the MySQL query (e.g. the email id assigned by the GET action method should render in the corresponding table-row cell) for each iteration of the JSON string via <a href="https://jquery.com/">jQuery</a>- a fast small, feature-rich JavaScript library, making things like HTML document traversal and manipulation, event handling, animation and Ajax mich simpler with an API [application program interface] that works across a multitude of broswers.  The requirements specified static-seed data in the table, which includes contact-information for my web development company, <a href="https://bucephalus.io">Bucephalus Web Development</a>.</p></li>
                                          <li><p>Edit Records: To be concluded in a few days...</p></li>
                                          <li><p>Lastly, the footer menus on every page will link to the "Home" page, an “About” page featuring the project requirements and an experimental “Contact” form, also facilitated by Bootstrap styling, in addition to the action methods correspondingly assigned but doesn’t feature form-validation in Release 0, but more than likely in the next iteration.</p></li></ol></li>
                                          <li><p>Additional Resources</p>

                                            <ol><li><p>Production schema and structure were verified by the following tools:</p>

                                              <ol><li><p><a href="https://developers.google.com/structured-data/testing-tool/">Google’s Structured Data Testing Tool</a></p></li>
                                                <li><p><a href="https://jsfiddle.net/">and JSFIddle</a>.</p></li></ol></li>
                                                <li><p>http://www.w3schools.com/php/php<em>mysql</em>update.asp</p></li>
                                                <li>http://www.w3schools.com/jquery/default.asp</li>
                                                <li>http://www.w3schools.com/jquery/jquery<em>ajax</em>intro.asp</li>
                                                <li>http://www.tutorialspoint.com/php/mysql<em>update</em>php.htm</li>
                                                <li>https://github.com/myprogrammingblog/myprogrammingblog.com/tree/master/UI%20Components/contact%20form/js</li>
                                                <li>http://www.w3schools.com/bootstrap/bootstrap_dropdowns.asp</li>
                                                <li>http://www.w3schools.com/bootstrap/bootstrap<em>ref</em>css_tables.asp</li>
                                                <li>http://www.w3schools.com/bootstrap/tryit.asp?filename=trybs<em>ref</em>table-responsive&amp;stacked=h</li>
                                                <li>http://www.w3schools.com/bootstrap/bootstrap_buttons.asp</li>
                                                <li>http://www.w3schools.com/bootstrap/tryit.asp?filename=trybs<em>button</em>elements&amp;stacked=h</li>
                                                <li>http://www.techrepublic.com/blog/microsoft-office/accommodate-different-headers-and-footers-in-a-word-document/</li>
                                                <li>http://www.w3schools.com/tags/tag_br.asp</li>
                                                <li>http://www.w3schools.com/tags/tag_br.asp</li>
                                                <li>http://v4-alpha.getbootstrap.com/layout/grid/</li>
                                                <li>http://uxmovement.com/forms/where-to-align-buttons-on-different-form-layouts/</li>
                                                <li>http://getbootstrap.com/css/</li>
                                                <li>http://www.w3schools.com/bootstrap/bootstrap_buttons.asp</li>
                                                <li>http://www.w3schools.com/bootstrap/tryit.asp?filename=trybs<em>button</em>styles&amp;stacked=h</li>
                                                <li>http://www.w3schools.com/bootstrap/tryit.asp?filename=trybs<em>button</em>elements&amp;stacked=h</li>
                                                <li>http://www.w3schools.com/bootstrap/exercise.asp?filename=exercise_tables4</li>
                                                <li>http://www.w3schools.com/tags/tryit.asp?filename=tryhtml_span</li>
                                                <li>http://www.w3schools.com/tags/tag_span.asp</li>
                                                <li>https://developers.google.com/structured-data/testing-tool/</li>
                                                <li>https://validator.w3.org/check</li>
                                                <li>http://www.w3schools.com/bootstrap/bootstrap_forms.asp</li>
                                                <li>http://www.w3schools.com/css/css_inline-block.asp</li>
                                                <li>http://www.w3schools.com/bootstrap/bootstrap_tables.asp</li>
                                                <li>http://www.generatedata.com/</li>
                                                <li>http://getbootstrap.com/css/</li>
                                                <li>http://www.bootply.com/88026</li>
                                                <li>http://www.bootply.com/101100#</li>
                                                <li>http://daringfireball.net/projects/markdown/dingus</li>
                                                <li>http://www.w3schools.com/bootstrap/bootstrap_buttons.asp</li></ol></li>
                                              </ol>

                                              <h1>GWMSIST</h1>

                                              <h2>Project II Requirements</h2>

                                              <h3>Project Description</h3>

                                              <p>The goal of the second student project is to develop a web application that is able to validate user
                                                input as well as store, retrieve, update and delete items in a database.</p>

                                                <p>This assignment consists of a web application that has, at a minimum, the following features::</p>

                                                <ol>
                                                  <li><p><em>Validate user input using PHP:</em>The web application should allow the user to enter data in a form and then validate the
                                                    user input using PHP. This form should have at least 5 input fields. Once the user submits
                                                    the form, a PHP script should validate the data entered by the user in all input fields. In
                                                    other words, all mandatory and required fields should be validated. If the user input data
                                                    is not valid (i.e., missing and/or incorrect data), this data should not be stored in the
                                                    database and the web application should point out to the user which field(s) have invalid
                                                    data and why. If the user input data is valid, this data should be stored in the database.</p></li>
                                                    <li><p><em>Store user input in the MySQL database:</em> The web application should store the data entered by the user in the form and validated
                                                      using PHP in the MySQL database. All data entered by the user and validated should be
                                                      stored in the database (i.e., mandatory and/or optional input fields).</p></li>
                                                      <li><p><em>Retrieve items in the MySQL database:</em> The web application should allow the user to retrieve all items currently stored in the
                                                        database. Specifically, the user should be able to request a list of all items stored in the
                                                        database in a table format. The table columns and the user input form fields (associated
                                                        with functionality #1) must necessarily match. The data on the table is dynamic. In other
                                                        words, the content of the table changes according to user actions. For example, after a
                                                        user stores an item in the database, updates an item in the database, or delete item(s) in
                                                        the database, the table should reflect the respective changes in the database.</p></li>
                                                        <li><p><em>Update item in the MySQL database:</em> The web application should allow the user to update an item currently stored in the
                                                          database. Specifically, the user should be able to choose an item to update from a list of
                                                          all items currently in the database. Once the user selects which item they want to update,
                                                          the web application should provide the user a form with the same input fields as the one
                                                          used to add items to the database. However, the fields of the form to update an item
                                                          should be filled in with the data currently stored in the database for that item. After the
                                                          user updates the field(s) they want to change and submits the form, the user input should
                                                          be validated using PHP in the same manner described above (refer to functionality #1).
                                                          The item should only be updated if the user input data is valid.</p></li>
                                                          <li><p><em>Delete item(s) the MySQL database:</em> The web application should allow the user to delete item(s) currently stored in the
                                                            database. Specifically, the user should be able to choose item(s) to delete from a list of all
                                                            items currently in the database. Once the user selects which item(s) they want to delete,
                                                            the web application should remove such item(s) from the database.</p></li>
                                                          </ol>

                                                          <h3>Characteristics</h3>

                                                          <ol>
                                                            <li><p><em>Semantic Markup:</em> The HTML markup should avoid excessive, unnecessary inclusion of CSS and PHP.
                                                              With respect to CSS, external style sheets should be used to include CSS as opposed to
                                                              inline or embedded CSS. In the case of PHP files, the web programmer should strive to
                                                              keep the PHP script separate from the HTML markup to the extent possible. One
                                                              effective strategy is to use include statements in the PHP files to separate markup from
                                                              script.</p></li>
                                                              <li><p><em>Responsive Design:</em> The entire web application (i.e., all web pages) should have a general design (e.g., top
                                                                navigation bar, bottom navigation bar, side items) that is responsive to different screen
                                                                sizes. All the functionalities described above should be available in a convenient layout
                                                                on devices of different screen sizes.</p></li>
                                                                <li><p><em>Navigation:</em> There should be enough links in the web application to allow the user to easily navigate
                                                                  through the web pages associated with the various functionalities described above. Note
                                                                  that not all links included on your web pages need to actually work (i.e., they may point
                                                                  to "#").</p></li>
                                                                </ol>

                                                                <p>You may want to use your student project I as the basis for your student project II. For example,
                                                                  the user input form and the table that you developed in the first project could be used in the
                                                                  second project to gather data to be stored in the database and to display the items retrieved in the
                                                                  database to the user, respectively. Furthermore, you may want to use the CSS stylesheets and
                                                                  media queries you used in your first project to create a responsive design for your second project.</p>

                                                                  <h3>NOTES</h3>

                                                                  <ol>
                                                                    <li><p>You are not required to use client-side validation in your second student project.
                                                                      Regarding validation, you will only be graded based on server-side validation (i.e.,
                                                                      validation using PHP).</p></li>
                                                                      <li><p>You are not required to use project I as the basis for project II.</p></li>
                                                                    </ol>

                                                                    <h3>Grading Criteria</h3>

                                                                    <ul>
                                                                      <li>PHP Validation: 18%</li>
                                                                      <li>Store Item: 18%</li>
                                                                      <li>Retrieve Items: 18%</li>
                                                                      <li>Update Item: 18%</li>
                                                                      <li>Delete Item(s): 18%</li>
                                                                      <li>Semantic markup: 2.5%</li>
                                                                      <li>Responsive design: 2.5%</li>
                                                                      <li>Navigation: 5%</li>
                                                                    </ul>

                                                                    <h3>Submission Instructions:</h3>

                                                                    <p>You must submit all the files you created/used in your web application and a Word document
                                                                      that describes the functionality and characteristics of your application as well as the URL of your
                                                                      project. Submission files may include:</p>

                                                                      <h3>Submission Instrutions</h3>

                                                                      <p>You must submit<em>* all the files</em>* you created/used in your web application and a <strong>Word document</strong> that describes the functionality of your application. The submitted files include:
                                                                        * HTML file(s)
                                                                        * CSS file(s)
                                                                        * Javascript file(s)
                                                                        * php File(s)
                                                                        * Any other file you may have used (e.g., image files)</p>

                                                                        <p>The Word document should briefly explain how and where you met the requirements of the
                                                                          project both in terms of functionalities and characteristics as outlined above. It should be a
                                                                          concise document that explains what you did (e.g., user input form validation using PHP), how
                                                                          you did it (e.g., which fields are mandatory and which ones are optional, what are the validation
                                                                          rules for each field), and where you did it (e.g., validation.php lines 10-100). In this description,
                                                                          do not focus on the code you wrote (since you will also submit the files you created), but on the
                                                                          functionality and characteristics of your application. Functionalities and characteristics that are
                                                                          not documented will not be considering when evaluating your work.</p>


  <div class="container">
  <div class="page-header">
  </div>



  </body>
</html>

</div>
<footer class="footer">
  <div class="container">
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.html">Home</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="contact_us.html">Contact</a></li>
      </li>
    </ul>
  </div><!--/.nav-collapse -->
</div>
</nav>
</footer>
<!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
  <script src="bootstrap-3.3.6/dist/js/bootstrap.min.js"></script>
  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <script src="bootstrap-3.3.6/docs/assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>

