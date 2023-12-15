
        @if(session('success'))
        <div class="col-12">
            <div class="d-flex items-center justify-between bg-success-1 pl-30 pr-20 py-30 rounded-8">
              <div class="text-success-2 lh-1 fw-500">             {{ session('success') }}
            </div>
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x text-success-2 size-20"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
            </div>
          </div>

   
        @endif

        <!-- Display error message -->
        @if(session('failed'))
         <div class="col-12">
            <div class="d-flex items-center justify-between bg-error-1 pl-30 pr-20 py-30 rounded-8">
              <div class="text-error-2 lh-1 fw-500">              {{ session('failed') }}            </div>
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x text-error-2 size-20"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
            </div>
          </div>
        @endif


        @if($erros->any())
        
        <div class="col-12">
            <div class="d-flex items-center justify-between bg-warning-1 pl-30 pr-20 py-30 rounded-8">
              <div class="text-warning-2 lh-1 fw-500"> @foreach($erros->all() as $error) {{$error}} @endforeach</div>
              <div class="text-warning-2 size-20" data-feather="x"></div>
            </div>
          </div>
        @endif
      