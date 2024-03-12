<div>
   <div class="text-end">
        <button class="btn btn-primary">
            Add Entry
        </button>
   </div>
   <div>
        <div class="fw-bold h3">
            Drip Irrigation System Records
        </div>  
        <table id="example" class="hover" style="width:100%">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th>Age</th>
                    <th>Start date</th>
                    <th>Salary</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Tiger Nixon</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>61</td>
                    <td>2011-04-25</td>
                    <td>$320,800</td>
                </tr>
            </tbody>
        </table>
   </div>
</div>
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdn.datatables.net/2.0.2/js/dataTables.js"></script>
<script>
    $(document).ready( function () {
        $('#example').DataTable();
    } );
</script>