<?php
 /**
    * Template Name: ApiUser
    */
   

?>

<?php get_header(); ?>

<div id="primary" class="content-area">
                <main id="main" class="site-main" role="main">

<table id="apiuser" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>User Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>View More</th>
               
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>User Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>View More</th>
            </tr>
        </tfoot>
    </table>


</div>
</div>

<script type="text/javascript">
    
jQuery(document).ready(function() {
    jQuery('#apiuser').DataTable( {
        "ajax": "https://jsonplaceholder.typicode.com/users"
    } );
} );

</script>




<?php get_footer(); ?>











    //https://jsonplaceholder.typicode.com/users
