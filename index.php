<!DOCTYPE html>
<html lang="en">
    <head>
    <?php include 'meta.php'; ?>
    <title>nitwit</title>
<!--
http://localhost/dev/nitwit/
-->
    <?php include 'styles.php'; ?>
    <?php include 'ie.php'; ?>
    </head>
    <body id="index" data-ng-app="NITWITApp">
        <div class="container" data-ng-controller="NITWITCtrl">
        
        <header>
        <?php include 'header.php'; ?>
        <?php include 'top-nav.php'; ?>
        </header>
        <section>
            
            <div data-ng-view></div>
            
        </section>
        <footer>
        <?php include 'footer.php'; ?>
        </footer>
        
            <pre data-ng-cloak data-ng-show="debug">
                User Data Model: {{userDataModel | json}}
            </pre>
            <pre data-ng-cloak data-ng-show="debug">
                Twitter Data Model: {{twitterDataModel | json}}
            </pre>

        </div>
    <?php include 'scripts.php' ?>

    </body>
</html>
