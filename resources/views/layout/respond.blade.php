@include('inc.header')

<section id="reports">
    <div class="container" style="margin-top:200px; margin-bottom:100px;">
      <h4 style="margin-bottom:20px;">Reported Emergency</h4>
      <table class="table table-hover">
        <thead style="background:#f44336;color:#ffff">
          <th>User Id</th>
          <th>GBV Type</th>
          <th>Description</th>
          <th>Location</th>
          <th>Phone</th>
          <th>Action</th>

        </thead>
        <tbody id="respond">

        </tbody>
      </table>
    </div>
</section>

@include('inc.footer')
