@include('inc.header')
  <section id="assign" style="margin-top:150px; margin-bottom:50px;">
    <div class="container">

      <div class="assign-form">
          <h5 style="text-align:center">Add a New Site</h5>
        <form id="addSite"  method="post">

            <div class="">
                <label for="">Site Name</label>
                <input type="text" class="form-team" name="site_name" id="site_name" >
            </div>
            <div class="">
                <label for="">Site Type</label>
                <input type="text" class="form-team" name="type" id="type" >
            </div>
            <div class="">
                <label for="">Location</label>
                <input type="text" class="form-team" name="location" id="location" >
            </div>
            <div class="">
                <label for="">Site Cover</label>
                <input type="hidden" name="url"id="url">
                <input type="file" class="form-team" name="files[]" id="files">
            </div>
            <button type="button" class="login" name="button" onclick="uploadImage()">Submit</button>


            {{-- <button type="button" class="login" id="assignTeam" name="button">CREATE NOW</button> --}}
        </form>
      </div>
    </div>
  </section>

@include('inc.footer')
