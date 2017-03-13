<div class="panel-group" id="accordion">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse-management">
                    <span class="fa fa-user">
                        Management
                    </span>
                </a>
            </h4>
        </div>
        <div id="collapse-management" class="panel-collapse collapse in">
            <div class="panel-body">
                <table class="table">
                    <tr>
                        <td>
                            <a href="{{ route('admin.category.index') }}">Category</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="#">News Type</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="#">News</a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>    
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse-report">
                    <span class="fa fa-file">
                        Report
                    </span>
                </a>
            </h4>
        </div>
        <div id="collapse-report" class="panel-collapse collapse">
            <div class="panel-body">
                <table class="table"></table>
            </div>
        </div>
    </div>
</div>