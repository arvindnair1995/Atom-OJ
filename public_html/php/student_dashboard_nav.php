<ul class="nav nav-tabs navbar-inverse" data-spy="affix" data-offset-top="197">
    <li><a id="active" href="php/student_dashboard_load_content.php" method="get">Active</a></li>
    <li><a id="archived" href="php/student_dashboard_load_content.php">Archived</a></li>
    <li><a id="new" href="php/student_dashboard_load_content.php">New Courses</a></li>
    <li class="pull-right"><a href="#"></span> Log out</a></li>
    <li class="pull-right dropdown"><a class="dropdown" data-toggle="dropdown" href="#"> Notifications<span class="badge badge-notify"> 2</span></a>
        <ul class="dropdown-menu">
            <table class="table table-hover" id="m">
                <tr>
                    <td><p>Successfull submission</p></td>
                </tr>
                <tr>
                    <td><p>Successfull submission</p></td>
                </tr>
            </table>
        </ul>
    </li>
    <li class="pull-right"><a href="#">Dashboard</a></li>

</ul>
<script>
    $(document).ready(function () {

        $("#active,#archived,#new").on("click", function () {
            var that = $(this),
                data =that.attr('id'),
                url = that.attr('href');
            $.ajax({
                url: url,
                data: { value : data },
                success: function (response) {
                    $("#content").html(response);
                }
            });
            return false;
        });
    });

</script>
