    @include('inc.header')

    <section id="reports">
        <div class="container" style="margin-top:200px; margin-bottom:100px;">
          <div class="float-end">
              <a href="/assign" name="button" class="btn btn-info float-right">Add New Attraction</a>
          </div>

          <h4 style="margin-bottom:20px;">Tourist Atrractions</h4>
          <table class="table table-striped">
            <thead style="background:#FF03DAC5;color:#ffff">
              <th>Site Name</th>
              <th>Site Type</th>
              <th>Location</th>
              <th>Site Image</th>
              <th>Action</th>


            </thead>
            <tbody id="tbody">

            </tbody>
          </table>
        </div>
    </section>

    @include('inc.footer')
