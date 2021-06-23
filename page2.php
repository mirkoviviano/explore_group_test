<?php include("partials/header.php");?>

<!-- 
    Building the DOM for the page2: logs table
-->
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h2>Logs</h2>
            <p>A list of all the events on the system: for entertainment, data analysis, debugging or customer help.</p>
        </div>
    </div>
    <div class="row">
        <!-- Table header with functionalities for search -->
        <div id="toolbar">
            <select class="form-control">
                    <option value="">Export Basic</option>
                    <option value="all">Export All</option>
                    <option value="selected">Export Selected</option>
            </select>
        </div>

        <!-- 
            Bootstrap table, with smart tags: filter control and export control
            more info here: https://examples.bootstrap-table.com/#extensions/filter-control.html
        -->
        <table id="logTable" 
            data-search="true"
            data-filter-control="true" 
            data-show-export="true"
            data-click-to-select="true"
            data-toolbar="#toolbar">
            <thead>
                <tr>
                    <!-- Add more <th> here with the data-field equal to the database field -->
                    <th data-field="state" data-checkbox="true"></th>
                    <th data-field="referenceID" data-sortable="true">ID</th>
                    <th data-field="statusCode" data-sortable="true">Status Code</th>
                    <th data-field="datetime" data-sortable="true">Date Time</th>
                    <th data-field="action" data-sortable="true">Action</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>
</div>

<?php include("partials/footer.php");?>